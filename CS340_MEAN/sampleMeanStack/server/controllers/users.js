// make an immediate function that gives back an object that has methods that handle our requests and responses
// require mongoose so that we can access the model
var mongoose = require('mongoose');
// var User = mongoose.model('user');
var Topic = mongoose.model('topic');
module.exports = (function() {
	// return because we want to put an object into the variable for whatever requires this
	return {

		add_topic: function(req, res){
			var new_topic = new Topic(req.body);
			new_topic.save(function(err){
				if(err) {
					console.log("err");
				} else {
					res.json({result: "success!"});
				}
			})
		},

		show: function(req, res){
			Topic.find({}, function(err, results){
				if(err){
					console.log(err)
				}
				res.send(JSON.stringify(results));
			})
		},

		get_profile: function(req, res){
			console.log('get profile', req.params.id);
			Topic.find({topic_username: req.params.id}, function(err, results){
				if(err){
					console.log(err);
				}else{
					console.log('this is the results2', results);
					res.json(results);
				}
			})
		},

		get_topic: function(req, res){
			Topic.find({_id: req.params.id}, function(err, results){
				if(err){
					console.log(err);
				}else{
					console.log('this is the results', results);
					res.json(results);
				}
			})
		},
		// we're not restful we will be later
		// show is a property of the object we return so we can call it on the variable
		// show: function(req, res) {
		// 	console.log("we're in the show method")
		// 	// finds all of the friends using the friend model and returns the results via the response as JSON
		// 	Friend.find({}, function(err, results) {
		// 		if(err) {
		// 			console.log(err)
		// 		}
		// 		console.log(results)
		// 		res.send(JSON.stringify(results));
		// 	})
		// },
		// add_user: function(req, res) {
		// 	var new_user = new User(req.body);
		// 	new_user.save(function(err) {
		// 		if(err) {
		// 			console.log("err");
		// 		} else {
		// 			res.json({result: "success!"});
		// 		}
		// 	})
		// },

		// get_user: function(req, res){
		// 	console.log('made it to server controller', req.body.username);
		// 	User.find({username: req.body.username}, function(err, results){
		// 		if(err){
		// 			console.log(err);
		// 		}else{
		// 			console.log('this is the results', results);
		// 			res.json(results);
		// 		}
		// 	})
		// },

		

		

		// update_topic_counter: function(req, res){
		// 	console.log('ldjflkasdjf', req.body);
		// 	User.update({username: req.body.topic_username}, {$set:{topic_count: req.body.counter}}, function(err, results){
		// 		if(err){
		// 			console.log(err);
		// 		}else{
		// 			console.log('this is the results2', results);
		// 			res.json(results);
		// 		}
		// 	})
		// },

		

		

	}
})();


