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
			$('.acircle').fadeOut(200);
			circleHidden = true;
		}
		else{
			$('.acircle').fadeIn(200);
			circleHidden = false;
		}
	});

});
