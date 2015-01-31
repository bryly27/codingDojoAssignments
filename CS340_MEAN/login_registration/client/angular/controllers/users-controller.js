// create the controller and we're telling it that we are going to use $scope and we are going to use a FriendFactory and that it belongs to the fullMeanDemo app
black_belt.controller('users_controller', function($window, $scope, $rootScope, $location, $routeParams, users_factory, localStorageService) {
	// update_users();
	// update_buckets($routeParams.id);
	console.log("loaded the controller");
   
  // $rootScope.loginUser = $routeParams.id;
  // console.log($rootScope.user);

//   $rootScope.name = localStorageService.get('user');
//   console.log($rootScope.name);

//   if(localStorageService.get('user')){
//   	$location.path('/dashboard');
//   }

	$scope.add_user = function(data){
		users_factory.add_user(data, function(output){
			$scope.message = output;
			console.log(output);
			$scope.new_user = {};
			// $location.path('/dashboard');
			// update_users();
		});
	};

	$scope.filesChanged = function(data){
		$scope.filed=data.files;
		$scope.$apply();
	}


// 	function update_users(){
// 		users_factory.update_users(function(output, user){
// 			$scope.users = output;
// 		});
// 	};

// 	$scope.add_bucket = function(data){
// 		data.date = new Date();
// 		data.created_by = $routeParams.id;
// 		data.complete = false;
// 		users_factory.add_bucket(data, function(){
// 			update_buckets($routeParams.id);
// 			$scope.new_bucket = {};
// 		});
// 	};

// 	function update_buckets(data){
// 		users_factory.update_buckets(data, function(output){
// 			$scope.buckets = output;
// 			// console.log(output);
// 		});
// 	};

// 	$scope.logout = function(){
// 		localStorageService.remove('user');
// 	};

// });

// black_belt.controller('profiles_controller', function($scope, $rootScope, $location, $routeParams, users_factory) {

// 	$scope.user = $routeParams.id;

// 	users_factory.get_info($routeParams.id, function(output){
// 		$scope.buckets = output;
// 		console.log(output);
// 	});

// 	$scope.update_complete = function(data){
// 		console.log(data);
// 		data.complete = true;
// 		users_factory.update_complete(data, function(output){
// 		});
// 	};

// 	$scope.update_incomplete = function(data){
// 		console.log(data);
// 		data.complete = false;
// 		users_factory.update_complete(data, function(output){
// 		});
// 	};

})

