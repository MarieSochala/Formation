<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>FORMULAIRE</h2>
	<form method="POST" action="server.php">
		<input type="text" placeholder="Nom" name="Nom"><br>
		<input type="password" placeholder="Mot de Passe" name="mdp"><br>
		<input type="text" placeholder="Age" name="age"><br>

		<select name="nationalite">
			<option value="fr">Français</option>
			<option value="eng">Anglais</option>
		</select><br>
		<input type="submit" value="Envoyer">	
	</form>



</body>
</html>





