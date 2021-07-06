$(document).ready(function() {

	$('#videoModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget);
		//event.preventDefault();
		var src = button.attr('href') ;
		var modal = $(this);
		var frame = document.getElementById('video-frame');
		frame.setAttribute('src',src);

	})

	$('#videoModal').on('hide.bs.modal', function (event) {
		var frame = document.getElementById('video-frame');
		frame.setAttribute('src','');

	})
	$("#users-list").owlCarousel({
	
	    paginationSpeed : 300,
	    autoPlay : 6000,
	    singleItem:true,
	    pagination:true,
	    paginationNumbers: true,
	    navigation: true,
	    navigationText: ['<i class="icon-left-direction-arrow2 text-warning"></i>','<i class="icon-right-direction-arrow2 text-warning"></i>'],	
	    stopOnHover : true,
	    rewindSpeed : 400
	
	});



	$('.val_5').html(getCurDate());
	function getCurDate(){
	  var now = new Date();
	  var curhour = now.getHours()
	  var curminute = now.getMinutes()
	  var cursecond = now.getSeconds()
	  var curYear = now.getFullYear()
	  var curMonth = now.getMonth() + 1;
	  var curDay = now.getDate();

	  if(curhour < 10) curhour = '0' + curhour;
	  if(curminute < 10) curminute = '0' + curminute;
	  if(cursecond < 10) cursecond = '0' + cursecond;
	  if(curDay < 10) curDay = '0' + curDay;
	  if(curMonth < 10) curMonth = '0' + curMonth;
	  return curhour + ":" + curminute + ":" + cursecond + " "+ curDay + '/' + curMonth + '/' + curYear;
	  
	}

	$('.pagination_num').click(function(e){
	   e.preventDefault();
	    page = $(this).text();
	    table = $(this).parents('.accounts__tab');
	    setPageData(table);
	});

	$('.pagination_previous').click(function(e){
	   e.preventDefault();
	    page = $(this).parents('.pagination').find('.pagination_num.active').text();
	    if (page-1>0) {
	        page--;
	        table = $(this).parents('.accounts__tab');
	        setPageData(table);
	    }
	});

	$('.pagination_next').click(function(e){
	   e.preventDefault();
	    page = $(this).parents('.pagination').find('.pagination_num.active').text();
	    if (page<$(this).parents('.pagination').find('.pagination_num').length) {
	        page++;
	        table = $(this).parents('.accounts__tab');
	        setPageData(table);
	    }
	});


	function setPageData(table)
	{
	    table.find('.pagination .pagination_num.active').removeClass('active');
	    table.find('.pagination .pagination_num').eq(page-1).addClass('active');
	    table.find('.signal_row[data-page!="'+page+'"]').hide();
	    table.find('.signal_row[data-page="'+page+'"]').show();
	}

	function initPagination() {
	    $('.signal_row[data-page!=1]').hide();
	    $('.pagination').each(function(i, v) {
	        $(v).find('.pagination_num:first').addClass('active');
	    });
	}
	initPagination();

});
$(function () {
  // $('[data-toggle="popover"]').popover()
})

window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s= d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set. _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8'); $.src='//v2.zopim.com/?2pt1EH11fUXaLQLVRGSrkqwoRjjhO53g';z.t=+new Date;$. type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
setTimeout(function(){var a=document.createElement("script"); var b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0022/8365.js?"+Math.floor(new Date().getTime()/3600000); a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);