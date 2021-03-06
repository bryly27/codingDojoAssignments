// make the factory call it FriendFactory and pass it a callback function telling us that we are going to use $http functionality
black_belt.factory('users_factory', function($http) {
	var factory= {};
	var user = '';
	var topics = [];

	factory.add_user = function(info, callback) {
		$http.post('/users/add_user', info).success(function(output) {
			callback(output);
		});
	};

	// factory.get_name = function(callback){
	// 	callback(user);
	// }

	// factory.update_users = function(callback){
	// 	$http.get('/users/show').success(function(output){
	// 		callback(output);
	// 	});
	// };

	// factory.add_bucket = function(info, callback){
	// 	$http.post('/users/add_bucket', info).success(function(){
	// 		callback();
	// 	});
	// };

	// factory.update_buckets = function(data, callback){
	// 	$http.post('/buckets/show/' + data).success(function(output){
	// 		callback(output);
	// 	});
	// };

	// factory.get_info = function(data, callback){
	// 	$http.post('/buckets/info/' + data).success(function(output){
	// 		callback(output);
	// 	});
	// };

	// factory.update_complete = function(data, callback){
	// 	console.log('factory', data);
	// 	$http.post('/buckets/update_complete', data).success(function(){
	// 		callback();
	// 	});
	// };

	return factory;
})

