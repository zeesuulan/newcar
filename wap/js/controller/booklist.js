'use strict'
angular.module("JT")
	.controller("c_bl", 
		function($scope, $rootScope) {
			$rootScope.pageTitle = PAGE_TITLE + "-- 预约查询"
			$rootScope.backURL = "/#/menu"
			$rootScope.showNav = true
			
		}
	);