(function(){
	$(document).foundation();

	var app = angular.module('bazar', ['chieffancypants.loadingBar','ngAnimate','ui.router']);

	app.config(function($stateProvider, $urlRouterProvider) {
	    
	    $urlRouterProvider.otherwise('/home');
	    $stateProvider
	        
	        .state('home', {
	            url: '/home',
	            templateUrl: '/templates/home'
	        })
	        .state('login', {
	            url: '/login',
	            templateUrl: '/templates/user/login'
	        });
	        
	});
})()