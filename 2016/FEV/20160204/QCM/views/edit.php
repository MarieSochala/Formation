<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php

// Vérifier que le formulaire a été soumi et afficher les choix joueur.
	function joueur (){
		if(isset($_POST['choix1'])&& isset($_POST['choix2'])&& isset($_POST['choix3'])&& isset($_POST['choix4'])){
			$choix1 = $_POST['choix1'];
			$choix2 = $_POST['choix2'];
			$choix3 = $_POST['choix3'];
			$choix4 = $_POST['choix4'];
		}
$choixjoueur =array($choix1, $choix2, $choix3, $choix4);
	}

//	joueur();
	//	$tab ['choix1']='Hypertext';
	//	$tab ['choix2']= "Frédéric Bardeau, Victor Defontaine, Erwan Kezzar et Andrei Vladescu";
	//	$tab ['choix3']= "Un language";
	//	$tab ['choix4']= "Amine et Maxime";
	

//afficher les erreurs du joueur
	/*function comparaison (){

		
		//les bonnes reponses
		$repjoueur = joueur(); 
		if($repjoueur === $vraichoix1){
			echo "Parfait!";
		}
		else{
			echo "Erreur!";
		}	

		function dd(){
		var_dump($_POST);
		die();
	}
	}*/


?>

<p>Si tu veux recommencer <a href="show.php">Clique ici</a></p>



</body>
</html>














