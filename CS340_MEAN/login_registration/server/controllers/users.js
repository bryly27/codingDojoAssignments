// make an immediate function that gives back an object that has methods that handle our requests and responses
// require mongoose so that we can access the model
var mongoose = require('mongoose');
var mysql = require('mysql');
connection = require('express-myconnection');
var User = mongoose.model('user');
var crypto = require('crypto');
var fs = require('fs');
var connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: 'root',
	database: 'express1',
	port: 3306,
});

// var Bucket = mongoose.model('bucket');
module.exports = (function() {
	// return because we want to put an object into the variable for whatever requires this
	return {

		add_user: function(req, res) {

			var password = crypto.createHmac('sha1', 'codingdojo').update(req.body.password).digest('hex');
		 	console.log(password);
		 	var confirm_password = crypto.createHmac('sha1', 'codingdojo').update(req.body.confirm_password).digest('hex');
		 	console.log(confirm_password);

		 	req.body.password = password;

			if(req.body.email !== req.body.confirm_email){
				res.json({result: 'Emails need to match', display: true});
				console.log('emails do not match');
			}else if(password !== confirm_password){
				res.json({result: 'Password needs to match', display: true});
				console.log('password do not match');
			}else{
				console.log('ladjkfajsdf', req.body);
				var query = connection.query(
					"Insert INTO users(first_name, last_name, email, password) VALUES (?,?,?,?)",[req.body.first_name, req.body.last_name, req.body.email, req.body.password] , function(err, result, fields){
						if(err){
							res.json({result: 'Please choose a unique email', display: true});
						}else{
							res.json({result: 'Go log in now', display: true});
						}
						console.log('result', result);
						console.log('fields', fields);
						// if(err) throw err;
						console.log('result', result);
				});
				
				console.log('ruslkt');
			}	
		},

		// get_users: function(req, res){
		// 	// connection.connect();
		// 	var query = connection.query(
		// 		"Insert INTO users(first_name, last_name, email, password) Values (?,?,?,?)",(req.body.first_name, req.body.last_name, req.body.email, req.body.password), function(err, result, fields){
		// 			if(err) throw err;
		// 			console.log('result', result);
		// 	});
		// 	// connection.end()
		// }

		// get_users: function(req, res){
		// 	User.find({}, function(err, results){
		// 		if(err){
		// 			consol.log(err);
		// 		}else{
		// 			res.send(JSON.stringify(results));
		// 		}
		// 	})
		// },

		// add_bucket: function(req, res){
		// 	var new_bucket = new Bucket(req.body);
		// 	new_bucket.save(function(err){
		// 		if(err) {
		// 			console.log("err");
		// 		} else {
		// 			res.json({result: "success!"});
		// 		}
		// 	})
		// },

		// get_buckets: function(req, res){
		// 	Bucket.find({created_by: req.params.id}, function(err, results){
		// 		if(err){
		// 			consol.log(err);
		// 		}else{
		// 			res.send(JSON.stringify(results));
		// 		}
		// 	})
		// },

		// get_info: function(req, res){
		// 	console.log(req.params.id);
		// 	Bucket.find({$or: [{created_by: req.params.id}, {tagged_user: req.params.id}]}, function(err, results){
		// 		if(err){
		// 			consol.log(err);
		// 		}else{
		// 			res.send(JSON.stringify(results));
		// 		}
		// 	})
		// },

		// update_complete: function(req, res){
		// 	console.log('server', req.body);
		// 	Bucket.update({_id: req.body._id}, {$set:{complete: req.body.complete}}, function(err, results){
		// 		if(err) {
		// 			console.log("err");
		// 		} else {
		// 			res.json({result: "success!"});
		// 		}
		// 	})
		// }
		

	}
})();


