// make an immediate function that gives back an object that has methods that handle our requests and responses
// require mongoose so that we can access the model
var mongoose = require('mongoose');
var Friend = mongoose.model('Friend');
module.exports = (function() {
	// return because we want to put an object into the variable for whatever requires this
	return {
		// we're not restful we will be later
		// show is a property of the object we return so we can call it on the variable
		show: function(req, res) {
			console.log("we're in the show method")
			// finds all of the friends using the friend model and returns the results via the response as JSON
			Friend.find({}, function(err, results) {
				if(err) {
					console.log(err)
				}
				console.log(results)
				res.send(JSON.stringify(results));
			})
		},
		new: function(req, res) {
			console.log("we're in the new method")
			var new_friend = new Friend(req.body);
			new_friend.save(function(err) {
				if(err) {
					console.log("err");
				} else {
					res.json({result: "success!"});
				}
			})
		},
		delete: function(req, res){
			Friend.remove({_id: req.body._id}, function(err, results){
				if(err){
					console.log(err);
				} else {
					console.log(results);
					res.json(results);
				}
			})
		},
		getProfile: function(req, res){
			console.log('model', req.params.id)
			Friend.find({_id: req.params.id}, function(err, results){
				if(err){
					console.log(err);
				} else {
					console.log('this is the results', results);
					res.json(results);
				}
			})
		},
		edit: function(req, res){
			Friend.update({_id: req.body.id}, {$set:{name: req.body.name, age: req.body.age}}, function(err, results){
				if(err){
					console.log(err);
				} else {
					console.log('this is the results', results);
					res.json(results);
				}
			})
		},
	}
})();