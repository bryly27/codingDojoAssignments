// create the controller and we're telling it that we are going to use $scope and we are going to use a FriendFactory and that it belongs to the fullMeanDemo app
fullMeanDemo.controller('FriendsController', function($scope, $location, $routeParams, FriendFactory) {
	updateFriends();
	console.log("loaded the controller");
	console.log("$scope.profiles at the top", $scope.profiles);
	
	// gets all of the current friends and saves it in $scope.friends
	function updateFriends() {
		// FriendFactory.getFriends takes a callback function that has the output as a parameter
		FriendFactory.getFriends(function(output) {
			$scope.friends = output;

		});
	}

	$scope.addfriend = function() {
		FriendFactory.addNewFriend($scope.new_friend, function() {
			updateFriends();
			console.log('adding friend');
			$scope.new_friend= {};
		});	
	}

	$scope.editProfile = function(data){
		data.id = $routeParams.id;
		console.log('scope for edit', data);
		FriendFactory.editProfile(data, function(){
			$scope.edit = {};
			$location.path('/');
		})
	}

	$scope.deleteFriend = function(friend){
		console.log(friend._id);
		FriendFactory.deleteFriend(friend, function(){
			updateFriends();
		});
	}

	FriendFactory.getProfile($routeParams.id, function(output){
		$scope.profiles = output;
		console.log('getprofile', output);
		console.log('$scope.profiles', $scope.profiles);
	})


})