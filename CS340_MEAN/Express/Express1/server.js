var express = require('express');
var bodyParser = require('body-parser');
var app = express();
app.use(bodyParser.urlencoded())
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/', function(request, response){
	response.render('index');
})

app.post('/', function(request, response){
	response.render('index');
})
// app.get('/result', function(request, response){
// 	response.render('result');
// })

// route to process new user form data:
app.post('/result', function (req, response){
    console.log("POST DATA \n\n", req.body);

    //code to add user to db goes here!
    // redirect the user back to the root route.  
    response.render('result', {name: req.body});
});

app.listen(1234, function(){
	console.log('server is running on 1234');
})