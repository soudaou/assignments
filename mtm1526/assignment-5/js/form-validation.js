$(document).ready(function () {
	
	var userAvailable = $('.user-available');
	var emailAvailable = $('.email-correct');
	var cityCorrect = $('.city-correct');
	var passwordReqs = 0;
	var cityReqs = 0;
	
$('#username').on('change', function (ev) {
	
		var username = $(this).val();
		
		userAvailable.attr('data-status', 'unchecked');
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
		else{
			userAvailable.attr('data-status', 'unavailable').html('Unavailable');
		}
	});
	
$('#password').on('keyup', function (ev) {
	
		var password = $(this).val();
		passwordReqs = 0;
		
		if (password.length > 5) {
			passwordReqs++;
			$('.pass-length').attr('data-state', 'achieved');
		}
		if (password.match(/[a-z]/)) {
			passwordReqs++;
			$('.pass-lower').attr('data-state', 'achieved');
		}
		if (password.match(/[A-Z]/)) {
			passwordReqs++;
			$('.pass-upper').attr('data-state', 'achieved');
		}
		
		if (password.match(/[1-9]/)) {
			passwordReqs++;
			$('.pass-num').attr('data-state', 'achieved');
		}
		if (password.match(/[^a-zA-Z0-9]/)) {
			passwordReqs++;
			$('.pass-symbol').attr('data-state', 'achieved');
		}
	});

$('#email').on('change', function (ev) {

		var email = $(this).val();
		
		emailAvailable.attr('data-status', 'unchecked');
		if (email.length >=3 && email.length <=25) {	
			
			var ajax = $.post('check-email.php', {
				'email' : email
			});
		ajax.done(function (data) {
			if (data == 'available') {
				emailAvailable
					.attr('data-status', 'available')
					.html('Available');
			}
			else {
				emailAvailable
					.attr('data-status', 'unavailable')
					.html('unavailable');
			}
		});
		}
		else{
			emailAvailable.attr('data-status', 'unavailable').html('Unavailable');
		}
});
	
$('#city').on('change', function (ev) {
	
		var city = $(this).val();
		
		if((city.match(/[^a-zA-z\s]/)) && (city.length >=0 && city.length <=50)) {
			$('.wrong-city').addClass('wrong');
		}
		else {
			$('.wrong-city').removeClass('wrong');
		}
});

$('#country-ca').on('change', function (ev) {
	
	var country = $(this);
	
	if (country.val() == 'ca') {
		$('.country-details').load('country-ca.html');
	}

});

$('#country-us').on('change', function (ev) {
	
	var country = $(this);
	
	if (country.val() == 'us') {
		$('.country-details').load('country-us.html');
	}

});

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