
 $(document).ready(function(){ //Quand le document est prët

	$('a').click(function(){ // Quand je sélectionne un lien
		$('.paragraphe').hide(); //  Cache tous les éléments de la class paragraphe
		var id = $(this).attr('href'); // Récupère l'élément href comme élément courant - this mot clef mais pas chaine de caractère
		$(id).show(); // Montre l'élément contenu dans  la variable id.
	
	});
}); 

/* $('a').click(function(){ // ceci est une méthode qui prend un argument qui est une fonction.Celle ci est anonyme car elle n'a pas de nom.
	alert('Hello');
});
});
*/