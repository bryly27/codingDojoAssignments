// Where you create the angular app and sp?ecify its options
var sample_mean_stack = angular.module('sample_mean_stack', ['ngRoute']);

sample_mean_stack.config(function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl: 'partials/main.html',
		})
		.when('/dashboard',{
			templateUrl: '../partials/dashboard.html',
		})
		.when('/profile/:id',{
			templateUrl: 'partials/profile.html',
		})
		.when('/topic/:id',{
			templateUrl: 'partials/topic.html',
		})
		.otherwise({
			redirectTo: '/'
		})
})
