var path = require('path');
var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var mongoose = require('mongoose');
app.use(bodyParser.urlencoded({extended: true}));

app.use(express.static(path.join(__dirname, './static')));
app.set('views', path.join(__dirname, './views'));
app.set('view engine', 'ejs');
mongoose.connect('mongodb://localhost/quotingDojo');

var QuoteSchema = new mongoose.Schema({
		name: String,
		quote: String,
		date: Date,
		likes: Number
})

QuoteSchema.path('name').required(true, 'name cannnot be blank');
QuoteSchema.path('quote').required(true, 'quote cannot be blank');
var Quote = mongoose.model('Quote', QuoteSchema);

app.get('/', function(req, res){
	res.render('index');
});

app.get('/main', function(req, res){
	Quote.find({$query: {}, $orderby: {likes: -1}}, function(err, quotes){
	res.render('main', {quote: quotes});
	});
});


app.post('/main', function(req, res){
	Quote.find({$query: {}, $orderby: {likes: -1}}, function(err, quotes){
	res.render('main', {quote: quotes});
	});
});

app.post('/like', function(req, res){
	Quote.update({_id: req.body.name_id}, {likes: parseInt(req.body.likes) + 1}, function(err, quote){
	res.redirect('/main')
	})
});

app.post('/submit_quote', function(req, res){
	console.log('post data', req.body);
	var date = new Date();
	var quote = new Quote({name: req.body.name, quote: req.body.quote, date: date, likes: 0});
	quote.save(function(err){
		if(err){
			res.render('index', {title: 'you have errors', errors: quote.errors})
			console.log('something went wrong');
		} else {
			console.log('successfully added a user');
			res.redirect('/main');
		}
	})
})	

app.listen(8000, function(){
	console.log('listening on port 8000');
});