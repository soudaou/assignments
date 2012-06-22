$(document).ready(function () {
	
	var userAvailable = $('.user-available');
	// This variable is for the password requirements
	var passwordReqs = 0;
	
	$('#username').on('change', function (ev) {
		
		/*console.log('username');*/
		
		var username = $(this).val();
		
		// if user tyes 3 or more it will go back to unchecked
		userAvailable.attr('data-status', 'unchecked');
		
		//length constriction
		if (username. length >=3 && username.length <=25) {	
		
			var ajax = $.post('check-username.php', {
				'username' : username
			});
		
			ajax.done(function (data) {
				if (data == 'available') {
					userAvailable
						.attr('data-status', 'available')
						.html('Available');
				}
				else {
					userAvailable
						.attr('data-status', 'unavailable')
						.html('unavailable');
				}
			});
		}
		// If the user types less than 3, the unavailable will show up
		else{
			userAvailable.attr('data-status', 'unavailable').html('Unavailable');
		}
	});
	
	$('#password').on('keyup', function (ev) {
		var password = $(this).val();
		
		// We want to add the passwordReqs to each if statement
		passwordReqs = 0;
		
		if (password.length > 5) {
			passwordReqs++;
			$('.pass-length').attr('data-state', 'achieved');
		}
		//.match will allow you to user regular expression
		if (password.match(/[a-z]/)) {
			passwordReqs++;
			$('.pass-lower').attr('data-state', 'achieved');
		}
		if (password.match(/[A-Z]/)) {
			passwordReqs++;
			$('.pass-upper').attr('data-state', 'achieved');
		}
		
		//  YOu could also write this: (/\d/)     Same thing
		if (password.match(/[1-9]/)) {
			passwordReqs++;
			$('.pass-num').attr('data-state', 'achieved');
		}
		// We use this (/[^a-zA-Z0-9]/) for symbols
		// Anything that is not letters(lower or upper) or numbers are sybols
		if (password.match(/[^a-zA-Z0-9]/)) {
			passwordReqs++;
			$('.pass-symbol').attr('data-state', 'achieved');
		}
	});
	
	// You want to prevent the user from clicking on submit before filling out all the requirements
	$('form').on('submit', function (ev) {
		if (
			userAvailable.attr('data-status') == 'unchecked'
			|| userAvailable.attr('data-status') == 'unavailable'
			|| passwordReq < 5
		) {
			ev.preventDefault();
		}
	});
	
});










