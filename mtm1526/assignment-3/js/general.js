$(document).ready(function() {
	
	$('form').on('submit', function (ev) {
		
		ev.preventDefault();
		var property;
		var color = $('#color-box').val();
		
		switch ($('#property').val()){
	case '#border-color':
		$('.acircle').css('border-color', 'color-box');
		break;
	case '#background-color':
		$('.acircle').css('background-color', 'color-box');
		break;
	case '#color':
		$('.acircle').css('color', 'color-box');
		break;
		}
	});
})
