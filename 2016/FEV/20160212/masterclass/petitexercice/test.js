var test = require('tape');
var addfunction= require ("./add.js");

test('valeur', function (t) {
//	t.plan(2);
    t.equal(2,1);
    t.equal(addfunction(1,2),3);

});
// addfunction();
