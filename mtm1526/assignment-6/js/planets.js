$(document).ready(function () {

	var planetsTabs;
	
	$('a').on('click', function (event) {
		event.preventDefault();
		planetsTabs= event.target.id;
		$('ul' + ' li.current').removeClass('current');
		$(this).parent().addClass('current');
	});
	
	$('#earth').on('click', function (event) {
		event.preventDefault();
		$('#fillme').load('includes/earth.php');
	});
	$('#mars').on('click', function (event) {
		event.preventDefault();
		$('#fillme').load('includes/mars.php');
	});
	$('#jupiter').on('click', function (event) {
		event.preventDefault();
		$('#fillme').load('includes/jupiter.php');
	});
	$('#venus').on('click', function event() {
		event.preventDefault();
		$('#fillme').load('includes/venus.php');
	});

});
