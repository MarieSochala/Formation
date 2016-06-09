<?php
require __DIR__ . '/vendor/autoload.php';
use \Michelf\Markdown;

function menu (){
	$dossier = 'posts/*.md';
$list = glob($dossier); // list est ici un tableau contentant les fichiers .md

foreach ($list as $key):
	echo '<li><a href="?page=' . $key . '">' . $key . '</a></li>';
endforeach;

}

function loadPost ($page){
	$text = file_get_contents($page);
	$html = Markdown::defaultTransform($text);
	return $html;
}

function selectPage(){
	$page = 'posts/home.md';
	if(isset($_GET['page'])) {
	$page = $_GET['page'];
	}
return loadPost($page);
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>PHP Markdown Lib - Readme</title>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
	<menu>
		<ul><?php menu(); ?></ul>
	</menu>

	<h1>Hello SUNSHINE!!!!</h1>
	<?php
			# Put HTML content in the document
	echo selectPage();
	?>
</body>
</html>
