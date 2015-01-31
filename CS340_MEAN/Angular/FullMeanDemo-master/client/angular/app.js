// Where you create the angular app and sp?ecify its options
var fullMeanDemo = angular.module('fullMeanDemo', ['ngRoute']);

fullMeanDemo.config(function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl: 'partials/home.html',
		})
		.when('/profile/:id',{
			templateUrl: 'partials/profile.html'
		})
		.otherwise({
			redirectTo: '/'
		})
})
