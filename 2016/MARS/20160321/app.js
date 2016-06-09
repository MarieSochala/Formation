var http = require('http');
var fs = require('fs');

//Chargement du fichier index.html
var server = http.createServer(function(req, res) {
	fs.readFile('./index.html', 'utf-8', function(error, content) {
		res.writeHead(200, {"Content-Type": "text/html"});
		res.end(content);
	});
});
// Chargement socket.io
var io = require('socket.io').listen(server);

io.sockets.on('connection', function(socket, pseudo) {
	//Quand un client se connecte, on lui envoie un message
	socket.emit('message', 'Vous êtes bien connecté !');
	// On signale aux autres clients qu'il y a un nouveau
	socket.broadcast.emit('message', 'Message à toutes les unités. Je répète, message à toutes les unités.');
	// Des qu'on nous donner un pseudo, opn le stocke en variable de session
	socket.on('petit_nouveau', function(pseudo){
		socket.pseudo = pseudo;
	});
	// Dès qu'on reçàoit un message (clic sur le bouton > note dans la console)
	socket.on('message', function(message) {

		//On récupère le pseudo de celui qui a cliqué dans les variables de session
		console.log(socket.pseudo + ' me parle ! Cet utilisateur me dit : ' + message);

	});
});


server.listen(3000);