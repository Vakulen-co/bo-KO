      $.ajax({
              // url: '/btcrates',
              url: 'assets/btcrates.html',
              dataType: 'json'
          })
          .done(function(data) {
              $('.corency').text(" $" + data.BTC.USD);
          })



      $('.btn-block-form,.scroll-form').on('click', function() {
          $('html').animate({
              scrollTop: $(".video-header").offset().top
          }, 1000);
      });



      $(".winner-click").on('click', function() {
          var flag = $(this).find('.winners-info-hide').css('display');
          var info = $(this).find('.winners-info-hide');
          var arrow = $(this).find('.more-info').hide();

          if (flag === "none") {
              console.log(flag)
              $(this).find('.winners-info-hide').show()
              $(this).find('.more-info').hide();
              $(this).css({
                  "border": "3px solid #E6AE5C"
              });
              // $('.winners-info-hide').not(eto).hide();
              // console.log(this)
          } else {
              $(this).find('.winners-info-hide').hide()
              $(this).find('.more-info').show();
              $(this).css({
                  "background-color": "#001132"
              });
              console.log(flag)
          }
          $('.winner-click .winners-info-hide').not(info).hide().parent().css({
              "background-color": "#001132",
              "border": "3px solid #FFFFFF"
          });
          $('.more-info').not(arrow).show(".more-info")
      })



      $(".faq-click").on('click', function() {
          var flag = $(this).find('.winners-info-hide').css('display');
          var info = $(this).find('.winners-info-hide');
          var arrow = $(this).find('.more-info').hide();

          if (flag === "none") {
              console.log(flag)
              $(this).find('.winners-info-hide').show()
              $(this).find('.winners-info span').css({
                  "color": "#E6AE5C"
              });
              $(this).find('.more-info').hide();
              $(this).css({
                  "border": "2px solid #E6AE5C",
                  "background-image": "url(images/arrow-hide-up.png)"
              });
              // $('.winners-info-hide').not(eto).hide();
              // console.log(this)
          } else {
              $(this).find('.winners-info span').css({
                  "color": "#FFFFF"
              });
              $(this).find('.winners-info-hide').hide();
              $(this).find('.more-info').show();
              $(this).css({
                  "background-image": "url(images/arrow-hide.png)"
              });
              console.log(flag)
          }
          $('.arow-mob').not(info).hide().parent().css({
              "border": "2px solid #FFFFFF",
              "background-image": "url(images/arrow-hide.png)"
          });
          $('.more-info').not(arrow).show(".more-info")
      })



      $(".winner-jade").on('click', function() {
          $(this).parent().parent().hide();
          $(".steps-2").show();
      })
      $(".winner-william").on('click', function() {
          $(this).parent().parent().hide();
          $(".steps-1").show();
      })
      $(".winner-karen").on('click', function() {
          $(this).parent().parent().hide();
          $(".steps-4").show();
      })
      $(".winner-steven").on('click', function() {
          $(this).parent().parent().hide();
          $(".steps-3").show();
      })


      $(".question").on('click', function() {
          $(this).parent().find('.question').css({
              "color": "#FAFAFF"
          });
          $(this).css({
              "color": "#E6AE5C"
          });
      })

      $(".question-work").on('click', function() {
          $(".answer").hide();
          $(".answer-work").show(300)
      })

      $(".question-expect").on('click', function() {
          $(".answer").hide();
          $(".answer-expect").show(300);
      })
      $(".question-cost").on('click', function() {
          $(".answer").hide();
          $(".answer-cost").show(300);
      })
      $(".question-marketing").on('click', function() {
          $(".answer").hide();
          $(".answer-marketing").show(300);
      })
      $(".question-fees").on('click', function() {
          $(".answer").hide();
          $(".answer-fees").show(300);
      })



      $('form input').on("focus blur select", function() {
          if ($(this).hasClass('error') === true) {
              $('form label.error').hide();
              $(this).parent().find("label.error").show();
          }
      })


      $('.password').click(function() {
          $('.valid-pass-label').fadeIn(500)
      })
      $('.password').blur(function() {
          $('.valid-pass-label').fadeOut(500)
      })



      $('.password').on("input click", function validatePass() { //добавить обработчик на клик
          $('.valid-block').fadeIn(500);
          var password = $(this).val();
          var checkAZ = $(this).parent().parent().find($(".valid-check-A-Z"))
          var checkaz = $(this).parent().parent().find($(".valid-check-a-z"))
          var checkNum = $(this).parent().parent().find($(".valid-check-1-9"))
          var checkLeng = $(this).parent().parent().find($(".valid-check-length"))
          var checkAlph = $(this).parent().parent().find($(".valid-check-alphanumeric"))
          // $('.password').val(password)

          if (password.match(/[A-Z]/) != null) {
              $(checkAZ).addClass('check')
          }
          if (password.match(/[A-Z]/) === null) {
              $(checkAZ).removeClass('check')
          }
          if (password.match(/[a-z]/) != null) {
              $(checkaz).addClass('check')
          }
          if (password.match(/[a-z]/) === null) {
              $(checkaz).removeClass('check')
          }
          if (password.match(/[1-9]/) != null) {
              $(checkNum).addClass('check')
          }
          if (password.match(/[1-9]/) === null) {
              $(checkNum).removeClass('check')
          }
          if (password.length > 7) {
              $(checkLeng).addClass('check')
          }
          if (password.length < 8 || password.length > 12) {
              $(checkLeng).removeClass('check')
          }
          if (password.match(/^[0-9A-Za-z]+$/) != null) {
              $(checkAlph).addClass('check')
          }
          if (password.match(/^[0-9A-Za-z]+$/) === null) {
              $(checkAlph).removeClass('check')
          }
          if (password.match(/[A-Z]/) != null && password.match(/[a-z]/) != null && password.match(/[1-9]/) != null && password.length > 7 && password.match(/^[0-9A-Za-z]+$/) != null) {
              $('.valid-block').fadeOut(500)
          }

      })


      var telCode = document.getElementsByClassName("phone");
      var iti = [];
      jQuery.each(telCode, function(indx, value) {
          window.intlTelInput(value, {
              allowDropdown: true,
              autoHideDialCode: true,
              autoPlaceholder: "polite",
              // dropdownContainer: document.body,
              formatOnDisplay: true,
              geoIpLookup: function(callback) {
                  $.get("https://ipinfo.io", function() {}, "json").always(function(resp) {
                      var countryCode = (resp && resp.country) ? resp.country : "";
                      callback(countryCode);
                  });
              },
              initialCountry: "auto",
              localizedCountries: {
                  'ua': 'Ukraine'
              },
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              separateDialCode: true,
              utilsScript: "js/utils.js",
          });

          iti[indx] = window.intlTelInputGlobals.getInstance(value);
          value.addEventListener("countrychange", function(elem) {
              if (iti[indx].getDialCode() != "") {
                  $('.phonecc').val(iti[indx].getDialCode());
              }
              iti.forEach(function(instance) {
                  var currCountry = iti[indx].getSelectedCountryData()
                  instance.setCountry(currCountry.iso2);
              })
          })

      });
      $('body').on('DOMSubtreeModified', '.selected-dial-code', function() {
          if ($(this)[0].innerText != "") {
              for (var i = 0; i < 3; i++) {
                  $('.phonecc')[i].value = $(this)[0].innerText
              }
          }
      })

      // Generate a password string
      function randString(id) {
          var dataSet = $(id).attr('data-character-set').split(',');
          var possible = '';
          if ($.inArray('0-9', dataSet) >= 0) {
              possible += '0123456789';
          }
          if ($.inArray('a-z', dataSet) >= 0) {
              possible += 'abcdefghijklmnopqrstuvwxyz';
          }
          if ($.inArray('A-Z', dataSet) >= 0) {
              possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          }
          var text = '';
          for (var i = 0; i < $(id).attr('data-size'); i++) {
              text += possible.charAt(Math.floor(Math.random() * possible.length));
          }
          return text;
      }

      var number = Math.floor(Math.random() * (1 - 9) + 9);
      // Create a new password on page load
      // $('input[rel="gp"]').each(function () {
      //     var number = Math.floor(Math.random() * (1 - 9) + 9);
      //     $(this).val(randString($(this)) + number + "Db");
      // });

      // Create a new password
      $(".password-btn").click(function() {
          var number = Math.floor(Math.random() * (1 - 9) + 9);
          var field = $(".password-btn").closest('div').find('input[rel="gp"]');
          field.val(randString(field) + number + "Db");
          // $("#password-label").click();
          field.valid();
          $(this).parent().parent().find('.phone').select();
      });

      function forceNumeric() {
          var $input = $(this);
          $input.val($input.val().replace(/[^\d -]+/g, ''));
      }

      $('.phone').on('input', forceNumeric);