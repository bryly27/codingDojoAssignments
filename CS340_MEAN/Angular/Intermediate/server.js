var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var path = require('path');
app.use(bodyParser.urlencoded({extended: true}))

app.use(express.static(path.join(__dirname, './static')));
app.set('static', __dirname + '/static');

app.get('/', function(request, response){
	response.render('index');
})

app.listen(8000, function(){
	console.log('server is running on 8000');
})