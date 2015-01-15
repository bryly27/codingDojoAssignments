var express = require('express');
var path = require('path');
var app = express();
var number = 0;

app.use(express.static(path.join(__dirname, './static')));
app.set('views', path.join(__dirname, './views'));
app.set('view engine', 'ejs');

app.get('/', function(req, res){
	res.render('index');
})

var server = app.listen(8000);
var io = require('socket.io').listen(server);
io.sockets.on('connection', function(socket){
	console.log('using socket');

	
	io.emit('reset', number);
	
	socket.on('add', function(data){
		number++;
		io.emit('number', number);

	})

	socket.on('reset', function(data){
		number = 0;
		io.emit('number', number);
	})
})