'use strict'
angular.module("JT")
	.controller("c_car",
		function($scope, $rootScope) {
			$scope.adc = "asd"
			if ($.cookie("jtusername")) {
				$.get("../api/wapUserInfo.php",
				 function(data) {
					if (data.no == 0) {
						$scope.$apply(function(){
							$scope.userInfo = data.data.member
							$scope.gender = ($scope.userInfo.gender == 1) ? "男" : "女"
						})
					} else {
						alert(data.data.msg)
					}
				}, 'json')
			} else {
				window.location.hash = "#/menu"
			}

		}
);