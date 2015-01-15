var mongs = require('../controllers/mongooses');

module.exports = function(app){

	app.get('/', function(req, res){
 		mongs.index(req, res);
  })
  app.get('/mongooses/:id', function(req, res){
  	mongs.profile(req, res);
  })
 	app.post('/new', function(req, res){
		res.render('new');
	})
	app.post('/mongooses', function(req, res){
		mongs.add(req, res);
	})
	app.post('/edit/:id', function(req, res){
		mongs.edit(req, res);
	})
	app.post('/delete/:id', function(req, res){
		mongs.delete(req, res);
	})

}