'use strict'
angular.module("JT")
	.controller("c_addcar", 
		function($scope, $rootScope) {
			$rootScope.pageTitle = PAGE_TITLE + "-- 增加车辆信息"
			$rootScope.backURL = "/#/car"
			$rootScope.showNav = true
		}
	);