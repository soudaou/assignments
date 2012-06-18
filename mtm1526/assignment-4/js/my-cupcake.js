$(document).ready(function () {
	
	$.get('coconut.html', function (data) {
		$('body').prepend(data);
	});

});