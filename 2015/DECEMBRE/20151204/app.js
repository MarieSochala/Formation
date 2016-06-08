/* var foo=2;

var foo=function(nombre){
	var index =nombre*2;
	console.log(index);

}; 

var foo=2;
function multiplier(nombre){
	var total = foo * nombre;
	return total;
};
console.log(multiplier(50));

function bonjour(){
	foo=12;
	return multiplier(50);
};

bonjour();
multiplier(50);
console.log(bonjour());
console.log(multiplier(50)); */
"use strict";
$(document).ready(function(){
$("[data-me=nom] p")

	
});

var obj = {nom:"Sochala",
prenom:"Marie",
github:"MarieSochala"}

for ( var toto in obj ){
	console.log(obj[toto]);
};

});
