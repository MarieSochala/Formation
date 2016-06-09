
	<?php include'parts/header.php'; ?>

	<?php 
	$pages = array('home', 'contact');
	$autorisation = $_GET['page'];

if (in_array($autorisation, $pages))
{
	include "parts/" . $autorisation . '.php';
}
	else {
		include'parts/erreurs.php';
	}


	?>
	
	<?php include'parts/footer.php'; ?>