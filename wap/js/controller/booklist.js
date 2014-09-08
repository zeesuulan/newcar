'use strict'
angular.module("JT")
	.controller("c_bl",
		function($scope, $rootScope) {
			$(".navbar").show()

			$.get("../api/wapBookList.php", function(data) {
				if (data.no == 0) {
					console.log(data.data.book)
					$scope.$apply(function() {
						$scope.books = data.data.book
					})
				} else {
					alert(data.data.msg)
				}
			}, "json")

		}
);