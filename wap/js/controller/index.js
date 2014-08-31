'use strict'
angular.module("JT")
	.controller("c_index",
		function($scope, $rootScope) {
			if ($.cookie("jtusername")) {
				$scope.needLogin = false
			} else {
				$scope.needLogin = true
			}
		}
);