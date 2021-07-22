      //  $.ajax({
      //      // url: '/btcrates',
      //      url: '/btcrates',
      //      dataType: 'json'
      //  })
      //      .done(function (data) {
      //        $('.corency').text( " $" + data.BTC.USD);
      //      })



      $('.btn-block-form,.scroll-form').on('click', function() {
          $('html').animate({
              scrollTop: $(".video-header").offset().top
          }, 1000);
      });