var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var path = require('path');
app.use(bodyParser.urlencoded())

app.use(express.static(path.join(__dirname, './static')));
app.set('static', __dirname + '/static');
app.set('view engine', 'html');

app.get('/', function(request, response){
	response.render('index');
})

app.listen(1234, function(){
	console.log('server is running on 1234');
})