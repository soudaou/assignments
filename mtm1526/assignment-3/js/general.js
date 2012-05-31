$(document).ready(function() {
	
	var $circle = $('.acircle')
	var circleHidden = false;

	$('form').on('submit', function (ev) {
		ev.preventDefault();
		
		var property = $('#property');
		var color = $('#color-box').val();

		switch ($('#property').val()){
			case 'border-color':
				$('.acircle').css('border-color', color);
			break;
			case 'background-color':
				$('.acircle').css('background-color', color);
			break;
			case 'color':
				$('.acircle').css('color', color);
			break;
		}
	});
		
	$('#hide-show').on('click', function () {
			$circle.toggle(200);
	});
});
