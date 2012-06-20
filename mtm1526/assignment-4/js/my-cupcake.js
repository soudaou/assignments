$(document).ready(function () {
	
	$.get('coconut.html', function (data) {
		$('#fillme').append(data);
	});
	
	if($(cupcakes + ' LI.current A').length > 0){
		loadTab($(cupcakes + ' LI.current A'));
	}
	
	 $(cupcakes + ' A').click(function(){
    	if($(this).parent().hasClass('current')){ return false; }
    	
    	$(cupcakes + ' LI.current').removeClass('current');
    	$(this).parent().addClass('current');
    	
    	loadTab($(this));    	
        return false;
    });
	
	$('#coconut').on('click', function () {
		$('#fillme').load('coconut.html');
	});
	$('#vanilla').on('click', function () {
		$('#fillme').load('vanilla.html');
	});
	$('#raspberry').on('click', function () {
		$('#fillme').load('raspberry.html');
	});
	$('#lemon').on('click', function () {
		$('#fillme').load('lemon.html');
	});
	
});
