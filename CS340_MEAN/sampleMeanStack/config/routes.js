// we are requiring a controller file that will do stuff when a route is triggered
var users = require('./../server/controllers/users.js');
module.exports = function(app) {

	app.post('/users/add_topic', function(req, res){
		users.add_topic(req, res);
	})

	app.get('/topics/show', function(req, res){
		users.show(req, res);
	})

	app.post('/users/get_profile/:id', function(req, res){
		users.get_profile(req, res);
	})

	app.post('/topic/get_topic/:id', function(req, res){
		users.get_topic(req, res);
	})


	// app.post('/users/add_user', function(req, res) {
	// 	users.add_user(req, res);
	// })

	// app.post('/users/get_user', function(req, res){
	// 	console.log('routes', req.body);
	// 	users.get_user(req, res);
	// })

	

	


	

}