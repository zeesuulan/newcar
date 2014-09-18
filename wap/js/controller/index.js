'use strict'
angular.module("JT")
	.controller("c_index",
		function($scope, $rootScope) {
			$(".navbar").hide()
			if ($.cookie("jtusername")) {
				$scope.needLogin = false
			} else {
				$scope.needLogin = true
			}
		}
);