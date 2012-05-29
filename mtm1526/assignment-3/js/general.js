$(document).ready(function() {
	
	var circleHidden = false;
	var property = $('#property');
	var color = $('#color-box').val();
	
	$('form').on('submit', function (ev) {
		ev.preventDefault();

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
		
	$('#hide-show').on('click', function (ev) {
		if (circleHidden == false) {
			$('.acircle').hide().fadeOut(200);
			circleHidden = true;
		}
		else{
			$('.acircle').hide().fadeIn(100);
			circleHidden = false;
		}
	});

});
