'use strict'
angular.module("JT")
	.controller("c_active", 
		function($scope, $rootScope) {
			$rootScope.pageTitle = PAGE_TITLE + "-- 查看活动"
			$rootScope.backURL = "/#/menu"
			$rootScope.showNav = true
			
		}
	);