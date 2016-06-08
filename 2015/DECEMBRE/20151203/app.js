"use strict";
$(document).ready(function(){

	$('a').click(function(event){ //on declare event comme une variable dans la fonction
		event.preventDefault(); // l'event a une methode qui envoie un message de restiction à la fonction.
		
		var val= $(this).attr('href');
		$('#cible').load(val);
	});
});

