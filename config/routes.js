var mongs = require('../controllers/mongs');

module.exports = function(app) {
	app.get('/', function(req, res) {
		mongs.index(req, res);
	})
	app.post('/mongs', function(req, res) {
		mongs.add(req, res);
	})
}