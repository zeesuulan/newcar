'use strict'
angular.module("JT")
	.controller("c_login",
		function($scope, $rootScope) {
			if (!$.cookie("jtusername")) {
				$("#loginForm").on("submit", function() {
					$.post("../api/wapLogin.php", $(this).serialize(), function(data) {
						if (data.no == 0) {
							$.cookie("jtusername", data.data.username, 1000)
							window.location.hash = "#/menu"
						} else {
							alert(data.data.msg)
						}
					}, 'json')
					return false
				})
			}else{
				window.location.hash = "#/menu"
			}
		}
);