$(document).ready(function(){
	var $btModele = $('a.btmodele');
	var $listModele = $('#modele');
	var $cross = $('#cross');
	var $body = $('body');
	var test = $('body > div');

	$btModele.on('click', function(e){
		$body.prepend('<div id="filtre"></div>');
		$('#filtre').slideToggle('slow', function(){
			$listModele.slideToggle();
		});
		e.preventDefault();
		var $modele = $('#modele a'); 
	});
	$cross.on('click', function(){
		$listModele.slideToggle('slow');
		$('#filtre').slideToggle('slow', function(){
			$('#filtre').remove();
		});
	});
	$modele.on('click', function(){
		var nomModele = $(this).attr('href');
		document.location.href= nomModele;
	});
});