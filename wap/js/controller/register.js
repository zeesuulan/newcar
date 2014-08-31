'use strict'
angular.module("JT")
	.controller("c_register", 
		function($scope, $rootScope) {
			$rootScope.pageTitle = PAGE_TITLE + "-- 激活"
			$rootScope.backURL = "/#/index"
			$rootScope.showNav = true
			
		}
	);