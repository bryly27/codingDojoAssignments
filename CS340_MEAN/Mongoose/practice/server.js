var path = require('path');
var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var mongoose = require('mongoose');
app.use(bodyParser.urlencoded());

app.use(express.static(path.join(__dirname, './static')));
app.set('views', path.join(__dirname, './views'));
app.set('view engine', 'ejs');
mongoose.connect('mongodb://localhost/basic_mongoose');

var UserSchema = new mongoose.Schema({
		name: String,
		age: Number
	})
var User = mongoose.model('User', UserSchema);

app.get('/', function(req, res){
	User.find({}, function(err, users){
		res.render('index', {user: users});
	})		
});

app.post('/users', function(req, res){
	console.log('post data', req.body);
	var user = new User({name: req.body.name, age: req.body.age});
	user.save(function(err){
		if(err){
			console.log('something went wrong');
		} else {
			console.log('successfully added a user!');	
			res.redirect('/');	
		}
	})
});

app.listen(8000, function(){
	console.log('listening on port 8000');
})