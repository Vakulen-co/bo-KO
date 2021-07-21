 $(document).ready(function () {
	 
	const style = document.createElement('style');
	style.innerHTML = `
      input.invalid {
        background-color: rgba(230, 25, 25, 0.3) !important;
      }

      input.valid {
        background-color: rgba(25, 230, 25, 0.3) !important;
      }
    `;
	 
		function updateTime() {
			var currtime = new Date();
			var currtime3 = (
				(currtime.getHours() < 10 ? '0' : '') + currtime.getHours() + ":" +
				(currtime.getMinutes() < 10 ? '0' : '') + currtime.getMinutes() + ":" +
				(currtime.getSeconds() < 10 ? '0' : '') + currtime.getSeconds()
			);

			var month = currtime.getMonth() + 1;
			var currdate = (
				currtime.getFullYear() + "/" +
				(month < 10 ? '0' : '') + month + "/" +
				(currtime.getDate() < 10 ? '0' : '') + currtime.getDate()
			);

			var tzone = currtime.getTimezoneOffset();
			tzone = tzone / 60 * -1;

			$('#currtime .time').html(currtime3);
			$('#currtime .timezone').html('GMT' + (tzone > 0 ? '+' : '') + tzone);
			$('#currtime .date').html(currdate);
		}
		setInterval(updateTime, 1000);
});		
var scrollToTopBtn = document.getElementById("scrollToTopBtn")
var rootElement = document.documentElement

function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
scrollToTopBtn.addEventListener("click", scrollToTop)