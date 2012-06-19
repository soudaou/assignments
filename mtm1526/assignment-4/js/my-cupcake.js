$(document).ready(function () {
	
	$.get('coconut.html', function (data) {
		$('#fillme').append(data);
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