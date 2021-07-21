
	$(document).ready(function () {
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
