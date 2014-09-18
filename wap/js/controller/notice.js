'use strict'
angular.module("JT")
	.controller("c_notice",
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

			$.get("../api/wapNotice.php?" + Math.random(), function(data) {
				if (data.no == 0) {
					$scope.$apply(function() {
						$scope.notice = data.data.notice
					})
				} else {
					window.location.hash = "#/index"
				}
			}, "json")
		}
);