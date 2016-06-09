
// function deplacement
/*var vaisseau = x,y;


if(e.which == 39){
	vaisseau += 1;
}
if(e.which == 37){
	vaisseau -= 1;
}*/
var app = {
	x:0, 
	y:0,
	direction:null,
	turn:null,
	

	droite:function(){
		this.x += 1;
		
	},

	gauche:function(){
		this.x -= 1;
	},

	haut:function(){
		this.y += 1;
	},

	bas:function(){
		this.y -= 1;
	},

	nord:function(){
		this.direction = "N";
	},

	rotate:function(val){
		if(this.val == "R"){
			this.turn = "L";
		} else if (this.val == "L") {
			this.turn = "S";
		}

	}

};


module.exports = app;