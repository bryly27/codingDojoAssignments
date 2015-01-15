var mongoose = require('mongoose');

var mongSchema = new mongoose.Schema({
	name: String,
	belt: String
})

mongSchema.path('name').required(true, 'name cannot be blank');
mongSchema.path('belt').required(true, 'belt cannot be blank');

mongoose.model('Mong', mongSchema)