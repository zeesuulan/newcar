'use strict'
angular.module("JT")
	.controller("c_sb", 
		function($scope, $rootScope) {
			$rootScope.pageTitle = PAGE_TITLE + "-- 预约服务"
			$rootScope.backURL = "/#/menu"
			$rootScope.showNav = true

			
		}
	);