<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<h2>Répondez au QCM :</h2>

	<form action="views/edit.php" method="post">
		<div>
			<p>Quelle est la signification du H de HTML ? <br>
				<input type="radio" name="choix1" value="Hypertext"/>Hypertext
				<input type="radio" name="choix1" value="Hypercool"/>Hypercool
			</p>
		</div>
		<div>
			<p>Qui sont les fondateurs de Simplon ? <br>
				<input type="radio" name="choix2" value="Tic et Tac"/>Tic et Tac
				<input type="radio" name="choix2" value="Frédéric Bardeau, Victor Defontaine, Erwan Kezzar et Andrei Vladescu"/>Frédéric Bardeau, Victor Defontaine, Erwan Kezzar et Andrei Vladescu
			</p>
		</div>
		<div>
			<p>Qu'est ce que PHP ? <br>
				<input type="radio" name="choix3" value="Un language"/>Un language
				<input type="radio" name="choix3" value="Un framework"/>Un framework
			</p>
		</div>
		<div>
			<p>Qui sont les formateurs de Simplon MIP ? <br>
				<input type="radio" name="choix4" value="Michel et Sardou"/>Michel et Sardou
				<input type="radio" name="choix4" value="Amine et Maxime"/>Amine et Maxime
			</p>
		</div>
		<div>
			<p><input type="reset" value="Effacer"> Recommencez <br>
				<input type="submit" value="Valider"> Envoyez vos réponses</p>
			</form>


			<?php include'views/footer.php'; ?>
		</body>
		</html>
