$(document).ready(function () {
	
	var userAvailable = $('.user-available');
	var emailAvailable = $('.email-available');
	var cityAvailable = $('.city-available');
	var passwordReqs = 0;
	var cityReqs = 0;
	
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

$('#email').on('change', function (ev) {
		
		/*console.log('username');*/
		
		var email = $(this).val();
		
		// if user tyes 3 or more it will go back to unchecked
		emailAvailable.attr('data-status', 'unchecked');
		
		//length constriction
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
		// If the user types less than 3, the unavailable will show up
		else{
			emailAvailable.attr('data-status', 'unavailable').html('Unavailable');
		}
});
	
$('#city').on('keyup', function (ev) {
	
		var city = $(this).val();
		cityReqs = 0; 
		if (city.length >=0 && city.length <=50 && city.match(/[^a-zA-Z0-9]/)) {
		cityReqs++;
		}
});

  var countryCa;
  var countryUs;

$('[name="country"]').on('change', function (ev) {
    if ($(this).val() == 'us') {
      if (!countryUs) {
        $('.country-details').load('country-us.html', function (data) {
          countryUs = data;
        });
      } 
	  else {
        $('.country-details').html(countryUs);
      }
    } 
	else {
      if (!countryCa) {
        $('.country-details').load('country-ca.html', function (data) {
          countryCa = data;
        });
      } else {
        $('.country-details').html(countryCa);
      }
    }
});



$('form').on('submit', function (ev) {
		if (
			userAvailable.attr('data-status') == 'unchecked'
			|| userAvailable.attr('data-status') == 'unavailable'
			|| passwordReq < 5
			|| cityReqs < 1
		) {
			ev.preventDefault();
		}
	});
	
});