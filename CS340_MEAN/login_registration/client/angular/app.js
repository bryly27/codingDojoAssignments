// Where you create the angular app and sp?ecify its options
var black_belt = angular.module('login_registration', ['ngRoute', 'LocalStorageModule']);

black_belt.config(function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl: 'partials/main.html',
		})
		// .when('/dashboard',{
		// 	templateUrl: '../partials/dashboard.html',
		// })
		// .when('/profile/:id',{
		// 	templateUrl: 'partials/profile.html',
		// })
		// .when('/user/:id',{
		// 	templateUrl: 'partials/user.html',
		// })
		.otherwise({
			redirectTo: '/'
		})
})
