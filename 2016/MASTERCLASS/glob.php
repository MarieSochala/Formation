<?php

//print_r($_GET);
//echo "Bonjour " . $_GET["nom"] . "Je suis " . $_GET["poste"];
// echo $_GET["nom"];

function generation ($age) {
if($age > 18){
	echo "tu es un adulte\n";
}

elseif ($age == 18){
	echo "tu es majeur\n";
}

elseif ($age <16){
echo "tu es un enfant\n";
}

else {
echo "c'est louche\n";
}
}

echo generation($_GET["age"]);