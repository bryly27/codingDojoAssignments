var mongoose = require('mongoose');
var Mongoose = mongoose.model('Mong');

var mongs = {};

mongs.index = function(req, res){
	Mongoose.find({}, function(err, mongooses){
		res.render('index', {mongoose: mongooses});
	});
}

mongs.profile = function(req, res){
	Mongoose.find({_id: req.params.id}, function(err, mongooses){
		res.render('profile', {mongoose: mongooses});
	})
}

mongs.add = function(req, res){
	function capitalize(string){
		return string.charAt(0).toUpperCase() + string.slice(1);
	}

	var name = capitalize(req.body.name);
	var belt = capitalize(req.body.belt);
	var mongoose = new Mongoose({name: name, belt: belt});
	mongoose.save(function(err){
		if(err){
			res.render('new', {title: 'you cannot have blank information', errors: mongoose.errors});
		}else{
			res.redirect('/');
		}
	})
}

mongs.edit = function(req, res){
	Mongoose.update({_id: req.params.id}, {name: req.body.name, belt: req.body.belt}, function(err, results){
		res.redirect('/');
	})
}

mongs.delete = function(req, res){
	Mongoose.remove({_id: req.params.id}, function(err, results){
		res.redirect('/');
	})
}

module.exports = mongs;