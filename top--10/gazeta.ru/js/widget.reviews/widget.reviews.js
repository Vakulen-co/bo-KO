;(function($, Widget) {
	'use strict';

	var plugin = {
		name: 'reviews',
		version: '1.0.0',
		data: {
			general: 'general',
			setting: 'setting'
		}
	};

	var defaults = {
		path: 'js/widget.reviews',
		avatar: './img/default_avatar_50x50.png',
		data: '{{path}}/reviews.json',
		template: {
			container: '{{path}}/template/facebook/facebook.html',
			items: '{{path}}/template/facebook/facebook-item.html'
		}
	};

	var operative = {
		context: null,
		reviews: [],
		html: '',
		ajax: {
			setup: {
				method: 'GET',
				cache: true
			}
		}
	};

	var methods = {};

	methods.init = function($this, options, common) {
		var setting = Widget.pluginSetting($this).set(plugin.data.setting, $.extend(true, {}, defaults, options), function(setting) {
			recursiveTagReplace(setting, {
				path: setting.path
			});
		});

		var general = Widget.pluginSetting($this).set(plugin.data.general, $.extend(true, {}, operative, common));

		getDataJSON().done(function() {
			getReviewsHTML(general.reviews, {
				comments: general.reviews.length,
				avatar: setting.avatar
			}).done(function() {
				$this.html(general.html);
			});
		});

		function getReviewsHTML(reviews, container) {
			var promise = $.Deferred();
			Widget.ajax(setting.template.items, null, $.extend(true, {}, general.ajax.setup, {
				dataType: 'text',
				dataFilter: function(html) {
					general.template = {
						html: html
					};
					return Widget.loop(reviews).merge(function(data, index) {
						return templateReviews(Widget.tag(html, data), data, index);
					});
				}
			})).done(function($items) {
				Widget.ajax(setting.template.container, null, $.extend(true, {}, general.ajax.setup, {
					dataType: 'text',
					dataFilter: function(html) {
						var $html = templateContainer(Widget.tag(html, container), container);
						$html.find('[v-for-items]').append($items).removeAttr('v-for-items');
						return $html;
					},
					success: function($html) {
						general.html = $html
					}
				})).done(promise.resolve).fail(promise.reject);
			}).fail(promise.reject);
			return promise;
		}

		function templateContainer(html, data) {
			var $html = $(Widget.parseHTML(html));

			var $selector = function(selector) {
				return $(selector, $html);
			};

			if ($selector('[v-open-button]').length) {
				$.each($selector('[v-open-button]'), function() {
					var id = $(this).attr('v-open-button');
					$(this).on('click touch', function(event) {
						event.preventDefault();
						$selector('[v-open-block="'+ id +'"]').slideDown(300);
					});
				});
			}

			if ($selector('[v-post-button]').length) {
				$selector('[v-post-button]').on('click touch', function(event) {
					event.preventDefault();
					var text = $selector('[v-post-text]').val();
					var data = {
						"photo": "./img/default_avatar_50x50.png",
						"author": "Гость",
						"link": "https://www.facebook.com",
						"verify": false,
						"like": 0,
						"date": "Только что",
						"text": text
					};

					general.reviews.push(data);

					var $html = templateReviews(Widget.tag(general.template.html, data), data);
					$('[data-comments-count]', $this).text(parseInt($('[data-comments-count]', $this).text()) + 1);
					$selector('[v-post-items]').prepend($html);
				});
			}

			return $html;
		}

		function templateReviews(html, data, index) {
			var $html = $(Widget.parseHTML(html));
			var $selector = function(selector) {
				return $(selector, $html);
			};

			if ($selector('[v-show]').length) {
				$.each($selector('[v-show]'), function() {
					var key = $(this).attr('v-show');
					if (data[key]) {
						$(this).removeAttr('v-show');
					} else {
						$(this).remove();
					}
				});
			}

			if ($selector('[v-like-add]').length) {
				$.each($selector('[v-like-add]'), function() {
					$(this).on('click touch', function(event) {
						event.preventDefault();
						var $parent = $(this).parents('[data-comment-item]');
						var isLike = $parent.data('isLike');
						if (!isLike) {
							if (!$(this).hasClass('liked')) {
								$(this).addClass('liked');
								var $count = $selector('[v-like-count]')
								$count.text(Number($count.text()) + 1);
								var storage = window.localStorage.getItem('items');
								if (storage !== null) {
									var cache = JSON.parse(storage);
									cache[index].like += 1;
									window.localStorage.setItem('items', JSON.stringify(cache));
								}
							}
							$parent.data('isLike', true);
						}
					});
				});
			}


			return $html;
		}

		function getDataJSON() {
			if (window.localStorage.getItem('items') !== null) {
				var cache = JSON.parse(window.localStorage.getItem('items'));
				return $.Deferred(function (promise) {
					general.reviews = cache;
					return promise.resolve();
				});
			}
			return Widget.ajax(setting.data, null, $.extend(true, {}, general.ajax.setup, {
				dataType: 'json',
				success: function(data) {
					general.reviews = data;
					window.localStorage.setItem('items', JSON.stringify(data));
				}
			}));
		}
	};

	function recursiveTagReplace(object, data) {
		Widget.each(object, function(key, value) {
			if (typeof value === 'string') {
				object[key] = Widget.tag(value, data);
			} else if (typeof value === 'object' && !Array.isArray(value)) {
				recursiveTagReplace(value, data);
			}
		});
	}

	$.fn[plugin.name] = function(setting) {
		if (typeof setting === 'object' || !setting) {
			return $.each(this, function() {
				methods.init($(this), setting, {
					context: this,
					type: 'init',
					method: 'init'
				});
			});
		} else if (typeof setting === 'string') {
			switch (setting.toLowerCase()) {

			}
		}
	};

})(jQuery, jQuery.Widget);