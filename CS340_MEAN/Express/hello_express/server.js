var express = require('express');

var app = express();
app.use(express.static(__dirname + '/static'));
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');
var bodyParser = require('body-parser');

app.use(bodyParser.urlencoded())

app.get('/', function(request, response){
	response.send('hello express');
})

app.get("/users", function(request, response){
	
	response.render('users', {users:users_array});
})

var users_array = [
		{name: "Michael", email: "michael@codingdojo.com"},
		{name: "Jay", email: "jay@codingdojo.com"},
		{name: "Rory", email: "rory@codingdojo.com"},
		{name: "Andrew", email: "andrew@codingdojo.com"},
	];

// route to process new user form data:
app.post('/users', function (req, res){
    console.log("POST DATA \n\n", req.body);
    users_array.push(req.body);

    //code to add user to db goes here!
    // redirect the user back to the root route.  
    res.redirect('/users')
});

app.get("/index", function(request, response){
	response.render('index');
})

app.get("/users/:id", function (req, res){
    console.log("The user id requested is:", req.params.id);
    // just to illustrate that req.params is usable here:
    res.send("You requested the user with id: " + req.params.id);
    // code to get user from db goes here, etc...
});

app.listen(8000, function(){
	console.log('listening on 8000');
})







// app.HTTP_VERB('URL', function(req, res){});