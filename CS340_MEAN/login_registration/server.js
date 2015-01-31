// this is our server.js file

// require express so that we can build an express app
var express = require('express');
// require http so we can use http request and response stuff
// var http = require('http');
// require path so we can use path stuff like path.join
var path = require('path');
var crypto = require('crypto');
var fs = require('fs');
var multer = require('multer');
var mysql = require('mysql'),
connection = require('express-myconnection');


// create the express app
// express is a set of tools that allows us to more easily deal with http actions and some other stuff involving setting variables and getting them
var app = express();

// so that we can parse post data through the req.body
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded());
app.use(bodyParser.json());

// allows us to use put, patch, and delete http verbs
var methodOverride = require('method-override');
app.use(methodOverride('X-HTTP-Method-Override'));

// sets up a static file server that points to the client directory
app.use(express.static(path.join(__dirname, 'client')));

app.use(multer({ dest: './client/static/images',
 rename: function (fieldname, filename) {
    return filename+Date.now();
  },
onFileUploadStart: function (file) {
  console.log(file.originalname + ' is starting ...')
},
onFileUploadComplete: function (file) {
  console.log(file.fieldname + ' uploaded to  ' + file.path)
  done=true;
}
}));

app.get('/',function(req,res){
      res.sendfile("/");
});

app.post('/api/photo',function(req,res){
  // if(done==true){
  //   console.log(req.files);
  //   res.end("File uploaded.");
  // }
});

app.set('views', path.join(__dirname, './client/views'));
app.set('static', path.join(__dirname, './client/static'));
// app.engine('html', require('ejs').renderFile);
// app.set('view engine', 'html');


var mongoose = require('./config/mongoose.js');

var routes = require('./config/routes.js')(app);

// var connection = mysql.createConnection({
// 	host: 'localhost',
// 	user: 'root',
// 	password: 'root',
// 	database: 'express1',
// 	port: 3306,
// });
// connection.connect();

// var query = connection.query(
// 	'SELECT * FROM users', function(err, result, fields){
// 		if(err) throw err;
// 		console.log('result', result);
// 	});
// connection.end()


// sets the port
app.set('port', 3000);

// starts listening
app.listen(app.get('port'), function() {
	console.log('listening on port 3000');
})

