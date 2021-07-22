      // $.ajax({
      //     // url: '/btcrates',
      //     url: '/btcrates',
      //     dataType: 'json'
      // })
      //     .done(function (data) {
      //       $('.corency').text( " €" + data.BTC.EUR);
      //     })



      $('.btn-block-form,.scroll-form, .btm-send').on('click', function() {
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