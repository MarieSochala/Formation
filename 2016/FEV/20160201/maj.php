<?php

/*$prenom = "marie";
$nom = "sochala";

echo ucfirst($prenom);
echo strtoupper($prenom);
echo $prenom[0];*/

//Taper un commentaire sur une ligne


function concatNom($prenom, $nom){
$fullname = ucfirst($prenom) . " " . ucfirst($nom);
return $fullname;
}
echo concatNom ("marie", "sochala");