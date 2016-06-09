<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JeuDeHasard</title>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
	<div class="espacejeu">
		<h2>Pierre, Papier, Ciseaux</h2>
		<p>Choisissez votre arme!</p>
		<form action="jeu.php" method="post">
			<input type="submit" name="choix" value="pierre">
			<input type="submit" name="choix" value="feuille">
			<input type="submit" name="choix" value="ciseaux">
		</form>
	<div class="jeu">

		<?php

			function joueur (){ // recupérer le choix du joueur
				$post = $_POST["choix"];
				echo $post . "\n" ;
				return $post;
			}


			function ordi (){ // recuperer le choix aléatoire de l'ordi
				$tableau = array('pierre', 'feuille', 'ciseaux'); 
				$choixordi = $tableau[array_rand($tableau)]; //dans le tableau, il prend les valeurs du tableau pour le lancer en aléatoire

				echo $choixordi . "\n";
				return $choixordi;
			}

		?>

	<div class="reponse">
		<?php
			function comparaison (){
				$tab = array(0 => 'pierre', 1 => 'feuille', 2 => 'ciseaux');
				$posjoueur = joueur();
				$posordi = ordi();

				if($posjoueur===$posordi) {
					echo "Egalité !";
				}

				elseif($posjoueur==$tab[0]&&$posordi==$tab[2] || $posjoueur==$tab[1]&&$posordi==$tab[0] || $posjoueur==$tab[2]&&$posordi==$tab[1]) {
					echo "Gagné !" ;
				}

				else 
					echo "Perdu !";
			}

			comparaison();
		?>
	</div>
	</div>
	</div>
</body>
</html>