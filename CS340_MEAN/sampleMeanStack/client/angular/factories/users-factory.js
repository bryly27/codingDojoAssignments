// make the factory call it FriendFactory and pass it a callback function telling us that we are going to use $http functionality
sample_mean_stack.factory('users_factory', function($http) {
	var factory= {};
	var user = '';
	var topics = [];

	// factory.login = function(data, callback){
	// 	user = data;
	// 	console.log(user);
	// 	callback(user);
	// }


	factory.add_topic = function(data, callback){
		$http.post('/users/add_topic', data).success(function(output){
			topics.push({topic_title: data.topic_title, topic_description: data.topic_description, topic_category: data.topic_category, topic_post_count: data.topic_post_count, topic_username: data.topic_username})
			callback();
		})
	}

	factory.update_topics = function(callback){
		$http.get('/topics/show').success(function(output){
			topics = output;
			callback(topics);
		})
	}

	factory.get_profile = function(data, callback){
		console.log(data);
		$http.post('/users/get_profile/'+ data).success(function(output){
			console.log(output);
			callback(output);
		})
	}

	factory.get_topic = function(data, callback){
		$http.post('/topic/get_topic/' + data).success(function(output){
			callback(output);
		})
	}

	// adding a friend via the server/db
	// factory.add_user = function(info, callback) {
	// 	$http.post('/users/add_user', info).success(function() {
	// 		callback();
	// 	})
	// }

	// factory.get_user = function(data, callback){
	// 	console.log('factory get user', data);
	// 	$http.post('/users/get_user', data).success(function(output){
	// 		console.log('factory got user', output);
	// 		callback(output);
	// 	})
	// }


	

	return factory;
})


sample_mean_stack.factory('topics_factory', function($http) {
	var factory= {};

	// 

	return factory;
})

