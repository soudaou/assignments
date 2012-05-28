$(document).ready(function() {
	
	$('form').on('submit', function (ev) {
		
		ev.preventDefault();
		var property;
		var color = $('#color-box').val();
		
		$('#border-color').on('click', function (ev) {
			property = $('#bordercolor').val();
		});
		$('#background-color').on('click', function (ev) {
			property = $('#backgroundcolor').val();
		});
		$('#color').on('click', function (ev) {
			property = $('#color').val();
		});
		
		$('#apply').on('click', function() {
			// we are refering to the li so we called it "this"
			//$(this).toggleClass('done');
		});
		
		$('#apply').on('click', function(typecolor) {
		//(document.getElementById('color-box'), 'change', function() {
			//Inside an event Listener
			//this refers to the element this listener was bound to
			//circle.style.backgroundColor = this.value;
			//you can add HTML to the value
			acircle.innerHTML = '<strong>' + acircle.value + '</strong>';
		});
	});

});