$(document).ready(function() {
	function getRandomInRange(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
    window.onload = function () {
        var tzNodeList = document.getElementsByName('time_zone');
        tzNodeList.forEach(function(v){
            v.value = Date().toString().match(/([A-Z]+[+-][0-9]+)/)[1];
        })
    }

	// var oldY = 0,
	// 	exitMessageDisplayed = false,
	// 	mousemovemethod = function (e) {
	// 		if (e.pageY < oldY) {
	// 			if (e.pageY < (window.pageYOffset + 5)) {
	// 				if (! exitMessageDisplayed) {
	// 					$('#onExitModal').modal('show');
	// 					exitMessageDisplayed = true;
	// 				}
	// 			}
	// 		}
	// 		oldY = e.pageY;
	// 	};

	// document.addEventListener('mousemove', mousemovemethod);

	$(".user-profits").owlCarousel({
	
	    paginationSpeed : 300,
	    autoPlay : 6000,
	    singleItem:true,
	    pagination:false,
	    navigation: false,
	    stopOnHover : true,
	    rewindSpeed : 400
	});
	
	$('.counter-date').html(getCurDate());
	//positionsLeft =  readCookie('positionsLeft');
	positionsLeft =  20;
	if(!positionsLeft) positionsLeft = 20;

	 var clock = $('#counter-container').FlipClock(positionsLeft, {
	  countdown: true,
	  clockFace: 'Counter'
	 });

	 setTimeout(flipCounter,5 * 1000);
	 function flipCounter() {
	   
	   val = clock.time.getSeconds(true);
	   if(val) document.cookie = "positionsLeft=" + val;
	   $('#positions-left').text(val);
	   delay = getRandomInRange(4,50);
	   if(val < 11){
	    clock.$el.addClass('lowerthen10');
	   }
	   if(val <= 6){
	    clock.decrement();
	    clock.$el.addClass('lowerthen6');
	    return;
	   }
	   if(delay < 20) {
	    setTimeout(flipCounter,1500);
	    clock.decrement();
	    return;
	   }
	   clock.decrement();
	   setTimeout(flipCounter,delay * 1000);
	 }
	$('.curdate').html(getCurDate());
	function getCurDate(){
	  var now = new Date();
	  var curYear = now.getFullYear()
	  var curMonth = now.getMonth() + 1;
	  var curDay = now.getDate();

	  if(curDay < 10) curDay = '0' + curDay;
	  if(curMonth < 10) curMonth = '0' + curMonth;
	  return curDay + '/' + curMonth + '/' + curYear;
	  
	}

		  function carousel3d(params){
	    var el = params.el,
	    items = el.querySelector('.carousel-inner'),
	    curItem = items.firstElementChild,
	    itemsCount = el.children.length,
	    indicators,
	    itemsShowFromSides = 1,
	    nextButton = el.querySelector('[data-slide=next]'),
	    prevButton = el.querySelector('[data-slide=prev]'),
	    interval = params.interval;
	    if(params.indicators){
	      indicators = params.indicators;
	      indicators.firstElementChild.classList.add('active');
	    }
	    else{
	      createIndicators();
	    }
	    next();
	    
	    el.onclick = function(e){
	      var target = e.target;
	      e.preventDefault();
	      while(target != el){
	        if(target == nextButton){
	          next();
	          return;
	        }
	        else if(target == prevButton){
	          prev();
	          return;
	        }
	        else if(target.parentNode == indicators){
	          var n = Array.prototype.indexOf.call(indicators.children, target);
	          activateByNum(n);
	          return;
	        }
	        target = target.parentNode;
	      }
	    }
	    this.getCarousel = function(){
	      return el;
	    }
	    this.next = next;
	    function next(){
	      
	      clearClasses();
	      curItem = getNthSibling(curItem,1);
	      curItem.classList.add('active');
	      for(var i = 1; i <= itemsShowFromSides; i++){
	        getNthSibling(curItem,i).classList.add('from-right-' + i);
	        getNthSibling(curItem,-i).classList.add('from-left-' + i);
	      }
	      activateIndicator();
	    }
	    this.prev = prev;
	    function prev(){
	      
	      clearClasses();
	      curItem = getNthSibling(curItem,-1);
	      curItem.classList.add('active');
	      for(var i = 1; i <= itemsShowFromSides; i++){
	        getNthSibling(curItem,i).classList.add('from-right-' + i);
	        getNthSibling(curItem,-i).classList.add('from-left-' + i);
	      }
	      activateIndicator();
	    }
	    this.activateByNum = activateByNum;
	    function activateByNum(num){
	      if(num >= items.children.length) num = 0;
	      if(num < 0) num = items.children.length - 1;
	      var n = num - Array.prototype.indexOf.call(items.children, curItem);
	      if(n > 0){
	        for(var i = 0; i < n; i++){
	          next();
	        }
	      }
	      if(n < 0){
	        for(var i = 0; i < Math.abs(n); i++){
	          prev();
	        }
	      }
	    }
	    function createIndicators(){
	      var ind = document.createElement('ul');
	      for(var i = 0; i < items.children.length; i++){
	        ind.appendChild(document.createElement('li'));
	      }
	      ind.className = "carousel-indicators";
	      indicators = ind;
	      el.appendChild(ind);
	      ind.firstElementChild.classList.add('active');
	    }

	    function activateIndicator(){
	        var num = Array.prototype.indexOf.call(items.children, curItem);
	        var activeInd = indicators.querySelector('.active');
	        if(activeInd){
	          activeInd.classList.remove('active');
	        }
	        indicators.children[num].classList.add('active');
	    }
	    function getNthSibling(el,offset){
	      var newElNum = Array.prototype.indexOf.call(items.children, el) + offset;
	      if(newElNum >= items.children.length) newElNum = newElNum - items.children.length;
	      if(newElNum < 0) newElNum = items.children.length  + newElNum;
	      return items.children[newElNum];
	    }

	    function clearClasses(){
	      var ar = el.querySelectorAll('.carousel-inner .item');
	      $.each(ar,function(index) {
	        ar[index].classList.remove('from-left-1');
	        ar[index].classList.remove('from-left-2');
	        ar[index].classList.remove('from-right-1');
	        ar[index].classList.remove('from-right-2');
	        ar[index].classList.remove('active');
	      });
	    }
	    function generateEvent(name,detail){
	      var e = new CustomEvent('select',{bubbles:true,detail:{value:getValue()}});
	      elem.dispatchEvent(e);
	    }

	  }
	  var car;
	  if(document.getElementById('carousel')){
	    car = new carousel3d({el: document.getElementById('carousel')});
	  }

});
