// JavaScript Document


alert('This is a little message');

var letterLooper = function () {
	var input = '';
	//var letter = '';
	var alpha =/^[a-zA-Z]+$/;
	
	while ((!input) || (!(input.match(alpha))) || (!(input.length==1)) ) {
		input = prompt ('Type one letter.');
	}
	console.log(input);
	
	if (input) {	
		for (var i = 0; i < 10; i++) {
			for (var j = 0; j <= i; j++) {
				document.write(input);
			}
			document.write('<br>');
		}
	}
}

letterLooper();
