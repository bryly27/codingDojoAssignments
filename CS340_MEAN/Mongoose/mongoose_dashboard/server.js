var path = require('path');
var express = require('express');
var mongoose = require('mongoose');
var app = express();
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: true}));

app.use(express.static(path.join(__dirname, './static')));
app.set('views', path.join(__dirname, './views'));
app.set('view engine', 'ejs');
mongoose.connect('mongodb://localhost/mongoose_dashboard');

var MongooseSchema = new mongoose.Schema({
		name: String,
		belt: String
});

MongooseSchema.path('name').required(true, 'name cannot be empty');
MongooseSchema.path('belt').required(true, 'belt cannot be empty');
var Mongoose = mongoose.model('Mongoose', MongooseSchema);

app.get('/', function(req, res){
	Mongoose.find({}, function(err, mongooses){
		res.render('index', {mongoose: mongooses});
	});
});

app.post('/', function(req, res){
	Mongoose.find({}, function(err, mongooses){
		res.render('index', {mongoose: mongooses});
	});
});

app.post('/new', function(req, res){
	res.render('new');
})

app.get('/mongooses/:id', function(req, res){
	Mongoose.find({_id: req.params.id},function(err, user){
		res.render('profile', {user_info: user});
	});	
});

app.get('/mongooses/:id/edit', function(req, res){
	Mongoose.find({_id: req.params.id},function(err, user){
		res.render('edit', {user_info: user});
	});	
});

app.post('/mongooses', function(req, res){
	var mongoose = new Mongoose({name: req.body.name, belt: req.body.belt});
	mongoose.save(function(err){
		if(err){
			res.render('new', {title: 'you cannot have blank information', errors: mongoose.errors});
			console.log('something went wrong');
		} else {
			res.redirect('/');
			console.log('successfully added a user')
		}
	})
});

app.post('/mongooses/:id', function(req, res){
	Mongoose.update({_id: req.params.id}, {name: req.body.user_name, belt: req.body.belt}, function(err, quote){
		res.redirect('/mongooses/'+req.params.id);
	});
});

app.get('/mongooses/:id/destroy', function(req, res){
	Mongoose.remove({_id: req.params.id}, function(err, user){
		res.redirect('/');
	})
});

app.listen(8000, function(){
	console.log('listening on port 8000');
});