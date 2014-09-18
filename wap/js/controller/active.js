'use strict'
angular.module("JT")
	.controller("c_active", 
		function($scope, $rootScope) {
			$(".navbar").show()
			$.get("../api/wapUserInfo.php?" + Math.random(), function(data) {
				if (data.no == 0) {
					window.USER = {
						un: data.data.username
					}
				} else {
					window.location.hash = "#/index"
				}
			}, "json")

			$.get("../api/wapActive.php?" + Math.random(), function(data) {
				if (data.no == 0) {
					$scope.$apply(function() {
						$scope.active = data.data.active
					})
				} else {
					window.location.hash = "#/index"
				}
			}, "json")
			
		}
	);
