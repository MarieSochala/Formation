var test = require('tape');
var rover = require ("./add.js");

test('valeur', function (t) {
	t.plan(8);
 
    t.equal(rover.x, 0);
    rover.droite();
    t.equal(rover.x, 1);
    rover.droite();
    t.equal(rover.x,2);
    rover.droite();
    rover.droite();
    rover.droite();
    t.equal(rover.x,5);
    rover.gauche();
    t.equal(rover.x,4);
    t.equal(rover.y,0);
    rover.haut();
    t.equal(rover.y,1);
    rover.bas();
    t.equal(rover.y,0);

});

test('direction', function (t) {

	t.equal(rover.direction,null);

	rover.nord();
	t.equal(rover.direction,"N");
	
	rover.nord();
	rover.nord();
	rover.nord();
	rover.nord();
	rover.nord();
	t.equal(rover.direction,"N");
	rover.nord();
	rover.turn();
	t.equal(rover.turn, "L");
	rover.turn();
	t.equal(rover.turn, "S");
	t.end();
});