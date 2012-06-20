$(document).ready(function () {

	var cupcakesTabs;
	
	$.get('coconut.html', function (data) {
		$('#fillme').append(data);
	});
	
	
	$('a').on('click', function (event) {
		cupcakesTabs= event.target.id;
		$('ul' + ' li.current').removeClass('current');
		$(this).parent().addClass('current');
	});
	
	$('#coconut').on('click', function () {
		$('#fillme').load('coconut.html');
	});
	$('#vanilla').on('click', function () {
		$('#fillme').load('vanilla.html');
	});
	$('#raspberry').on('click', function () {
		$('#fillme').load('raspberry.html');
	});
	$('#lemon').on('click', function () {
		$('#fillme').load('lemon.html');
	});
	
});
