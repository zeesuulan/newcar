'use strict'
angular.module("JT")
	.controller("c_menu", 
		function($scope, $rootScope) {
			$("#menu a").css({
				"height" : $("body").height() / 5
			})
			$.get("../api/wapUserInfo.php?"+Math.random(), function(data){
				if(data.no == 0) {
					window.USER =  {
						un: data.data.username
					}
				}else{
					window.location.hash = "#/index"
				}
			}, "json")			
		}
	);