'use strict'

var JT = angular.module("JT", ['ngRoute'])


JT.config(function($routeProvider) {
	
	$routeProvider.
	when('/index', {
		templateUrl: 'template/index.html',
		controller: "c_index"
	}).
	when('/bl', {
		templateUrl: 'template/booklist.html',
		controller: "c_bl"
	}).
	when('/sb', {
		templateUrl: 'template/servicebooking.html',
		controller: "c_sb"
	}).
	when('/active', {
		templateUrl: 'template/active.html',
		controller: "c_active"
	}).
	when('/notice', {
		templateUrl: 'template/notice.html',
		controller: "c_notice"
	}).
	when('/menu', {
		templateUrl: 'template/menu.html',
		controller: "c_menu"
	}).
	when('/login', {
		templateUrl: 'template/login.html',
		controller: "c_login"
	}).
	when('/register', {
		templateUrl: 'template/register.html',
		controller: "c_register"
	}).
	when('/car', {
		templateUrl: 'template/car.html',
		controller: "c_car"
	}).
	when('/addcar', {
		templateUrl: 'template/addcar.html',
		controller: "c_addcar"
	}).
	otherwise({
		redirectTo: '/index'
	});
})