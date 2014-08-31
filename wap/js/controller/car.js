'use strict'
angular.module("JT")
	.controller("c_car", 
		function($scope, $rootScope) {
			$rootScope.pageTitle = PAGE_TITLE + "-- 车辆信息"
			$rootScope.backURL = "/#/menu"
			$rootScope.showNav = true
		}
	);