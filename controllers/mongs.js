// require mongoose and load the model that we are going to use
var mongoose = require('mongoose');
var Mong = mongoose.model('Mong');

// create an object with methods that we are going to export for our routes file to use
var mongs = {}

// index method (loads existing mongs and renders the index view)
mongs.index = function(req, res) {
	Mong.find({}, function(err, results) {
		if(err) {
			res.send('something went wrong!');
		} else {
			res.render('index', {mongs: results});
		}
	})
}

// add method for adding a mong to the db
mongs.add = function(req, res) {
	var new_mong = new Mong({name: req.body.name, age: req.body.age});
	new_mong.save(function(err) {
		if(err) {
			res.send('something went wrong!');
		} else {
			res.redirect('/');
		}
	})
}

module.exports = mongs;