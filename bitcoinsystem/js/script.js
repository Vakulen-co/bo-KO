$(document).ready(function () { 

	var numberPopup = 0;
	document.addEventListener("mouseleave", function (e) {

	 	if ($(window).width() > 768 && numberPopup < 3) {
			$("body").css("overflow", "hidden");
			$(".popup").css("display", "flex");
			$(".popup").css("opacity", "1"); 
			numberPopup++;
		}
	});

	$("#close-popup").click(function () {
		$(".popup").hide();
		$("body").css("overflow", "auto");
	});
});