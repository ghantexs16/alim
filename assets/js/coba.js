var app=angular.module("myApp",['ngRoute','ui.bootstrap']);

app.config(["$routeProvider","$locationProvider",function($routeProvider,$locationProvider){
	$locationProvider.html5Mode(true);

	$routeProvider
		.when("/",{
			templateUrl:"view/coba/list.html",
			controller:"newJenis"
		})

		.when("/jenis/new",{
			
		})
}])