var express = require('express');
var path = require('path');
var app = express();
var queryString = require('querystring');

app.use(express.static(path.join(__dirname, './static')));
app.set('views', path.join(__dirname, './views'));
app.set('view engine', 'ejs');

app.get('/', function(req, res){
	res.render('index');
})

var server = app.listen(8000);
var io = require('socket.io').listen(server);
io.sockets.on('connection', function(socket){
	console.log('socket');

	socket.on('posting_form', function(data){
	console.log(data);

	var random = Math.floor(Math.random()*1001);
	// socket.emit('server_response', {random_number: random});

	socket.emit('server_response', queryString.parse(data), {random_number: random});

	})



})