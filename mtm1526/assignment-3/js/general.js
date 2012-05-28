$(document).ready(function() {
	
	var property;
	var color;
	
	$('#bordercolor').on('click', function (ev) {
		property = $('#bordercolor').val();
	});
	$('#backgroundcolor').on('click', function (ev) {
		property = $('#backgroundcolor').val();
	});
	$('#color').on('click', function (ev) {
		property = $('#color').val();
	});
	
	$('#apply').on('click', function() {
		// we are refering to the li so we called it "this"
		//$(this).toggleClass('done');
	});
});