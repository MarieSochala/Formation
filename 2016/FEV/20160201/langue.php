<?php

$lang = array("HTML"=>true, "CSS" =>true, "Javascript"=>true, "Php" =>false, "Python"=>false);

foreach ($lang as $key => $valeur){
echo iknow ($key, $valeur). "\n";
};

function iknow($key, $valeur){
if ($valeur == true){
	return "Je connais" . " " . $key;

}
else{
	return "Je ne connais pas" . " " . $key;
}
};

/*foreach($lang as $key=>$valeur){
echo $key . " : " . $valeur . "\n";
};*/

/*foreach($lang as $key=>$valeur){
	echo iknow($key, $valeur);
	echo "\n";
}*/

