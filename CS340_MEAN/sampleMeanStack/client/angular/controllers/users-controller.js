// create the controller and we're telling it that we are going to use $scope and we are going to use a FriendFactory and that it belongs to the fullMeanDemo app
sample_mean_stack.controller('users_controller', function($window, $scope, $rootScope, $location, $routeParams, users_factory, topics_factory) {
	update_topics();
	console.log("loaded the controller");
  // local storage
	$rootScope.user = $window.sessionStorage['user'];
	// $rootScope.user = user;

	$scope.login = function(data){
			$location.path('/dashboard');
			$window.sessionStorage['user'] = data;
	}

	$scope.add_topic = function(data){
		data.topic_post_count = 0;
		data.topic_username = user;
		users_factory.add_topic(data, function(data){
			$scope.topic = {};
			update_topics();
		});
	};

  function update_topics(){
	 	users_factory.update_topics(function(output){
	 		$scope.topics = output;
	 	});
	};

	users_factory.get_profile($routeParams.id, function(output){
		$scope.post_count = output.length;
		$scope.profile_name = $routeParams.id;
		$scope.users = output;
		console.log(output)
	});
	
	// $scope.add_user = function(data) {
	// 	data.topic_count = 0;
	// 	data.post_count = 0;
	// 	data.comment_count = 0;
	// 	var info = data;
	// 	users_factory.add_user(data, function(data) {
	// 		get_user(info);
	// 	});	
	// };

	// function get_user(data){
	// 	users_factory.get_user(data, function(output){
	// 		console.log(output[0]);
	// 		$location.path('/dashboard/'+output[0].username);
	// 		// $rootScope.users = output;
	// 		get_profile();
	// 	})
	// };

})

sample_mean_stack.controller('topics_controller', function($window, $scope, $rootScope, $location, $routeParams, users_factory, topics_factory) {

	users_factory.get_topic($routeParams.id, function(output){
		$scope.topics = output;
		console.log(output);
	})

})

