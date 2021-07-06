(function($) {
	'use strict';

	var plugin = {
		name: 'Widget',
		version: '1.0.0'
	};

	$.extend(createObjectWithKey(plugin.name, {
		Random: Random,
		Numeric: Numeric,
		createObjectWithKey: createObjectWithKey,
		pluginSetting: pluginSetting,
		parseHTML: parseHTML,
		tag: tag,
		ajax: ajax,
		each: each,
		loop: loop
	}));

	function ajax(link, params, setup) {
		return $.ajax($.extend(true, {}, setup || {}, {
			url: params ? link + '?' + $.param(params) : link
		}));
	}

	function parseHTML(html) {
		var page = document.implementation.createHTMLDocument();
		page.body.innerHTML = html;
		return page.body.children;
	}

	function tag(input, data) {
		if ($.isEmptyObject(data)) {
			return input;
		}
		for (var tag in data) {
			input = input.replace(new RegExp('\{\{'+ tag +'\}\}', 'gi'), data[tag]);
		}
		return input;
	}

	function Random(seed) {
		this.seed = seed;
	}

	Random.prototype.number = function(min, max) {
		this.seed++;
		return min + (((this.seed * 9301 + 49297) % 233280) / 233280) * (max - min);
	}

	Random.prototype.boolean = function(rate) {
		this.seed++;
		return Math.sin(this.seed) <= rate / 100;
	}

	function Numeric(value) {
		if (!(this instanceof Numeric)) {
			return new Numeric(value);
		}
		this.value = value;
	}

	Numeric.prototype.chain = function(value) {
		return new Numeric(this.value = value);
	};

	Numeric.prototype.is = function(value) {
		value = value || this.value;
		var type = typeof value;
		return (type === 'number' || type === 'string') && !isNaN(value - parseFloat(value));
	};

	Numeric.prototype.fixed = function(fixed) {
		if (fixed === undefined) fixed = 0;
		var nulled = Math.pow(10, fixed);
		return this.chain(parseInt(this.value * nulled) / nulled);
	};

	Numeric.prototype.double = function() {
		return this.chain(this.value < 10 ? '0' + this.value : this.value);
	};

	function createObjectWithKey(key, value) {
		var object = {};
		object[key] = value;
		return object;
	}

	function pluginSetting($selector) {
		return {
			set: function(key, setting, filter) {
				var current = this.get(key);
				var params = $.extend(true, {}, current, setting);
				if (filter) filter(params);
				$selector.data(plugin.name, $.extend(true, {}, this.get(), createObjectWithKey(key, params)));
				return params;
			},
			get: function(key) {
				var data = $selector.data(plugin.name);
				return key ? data && data[key] ? data[key] : null : data || null;
			}
		};
	}

	function each(data, callback) {
		var method = {
			array: function(callback) {
				data.forEach(callback);
			},
			object: function(callback) {
				var index = 0;
				for (var key in data) {
					callback(key, data[key], ++index, data);
				}
			}
		};
		return callback ? Array.isArray(data) ? method.array(callback) : method.object(callback) : method;
	}

	function loop(data) {
		return {
			string: function(callback) {
				var string = '';
				each(data, function() {
					string += callback.apply(null, arguments) || '';
				});
				return string;
			},
			merge: function(callback) {
				var array = [];
				each(data, function() {
					$.merge(array, callback.apply(null, arguments) || []);
				});
				return array;
			},
			push: function(callback) {
				var array = [];
				each(data, function() {
					var back = callback.apply(null, arguments);
					if (back) array.push(back);
				});
				return array;
			}
		};
	}

})(jQuery);