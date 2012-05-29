//var isHidden = false;

$(document).ready(function() {
	console.log("ready play around");
	
	$('form').on('submit', function (ev) {
		ev.preventDefault();
		
		var property;
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
		$('#hide-show').on('click', function() {
			
		});
	
	});
})
