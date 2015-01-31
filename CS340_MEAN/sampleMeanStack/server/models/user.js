// we want to create a file that has the schema for our friends

var mongoose = require('mongoose');

// create a schema for our friends
// var UsersSchema = new mongoose.Schema({
// 	username: String,
// 	topic_count: Number,
// 	post_count: Number, 
// 	comment_count: Number,
// });

var TopicsSchema = new mongoose.Schema({
	topic_title: String,
	topic_description: String,
	topic_category: String,
	topic_post_count: Number,
	topic_username: String, 
});

// create the model using that schema
// console.log("just created the model")
// mongoose.model('user', UsersSchema)
mongoose.model('topic', TopicsSchema)