<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Mon Paramètre
		<?php
		$var = $_GET["param1"];
		echo $var;
		$var2 = $_GET['param2'][0]; 
		echo $var2;
		$var2 = $_GET['param2'][1];
		echo $var2;
		?>
	</h1>
</body>
</html>

// url : http://marie.dev/EXERCICES2016/20160203/methodget.php?param1=simplon&param2[0]=yeah&param2[1]=yihoo 


