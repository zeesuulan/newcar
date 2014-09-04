'use strict'
angular.module("JT")
	.controller("c_sb",
		function($scope, $rootScope) {
			$(".navbar").show()
			$scope.subList = {}
			var current = new Date()

			if ($.cookie("jtusername")) {
				$.get("../api/wapServiceList.php",
					function(data) {
						if (data.no == 0) {
							$scope.$apply(function() {
								$scope.bigSort = data.data.big_sort
								$scope.stores = data.data.store
								$.each(data.data.sub_sort, function(index, item) {
									if (typeof($scope.subList[item.sort_id]) != "array") {
										$scope.subList[item.sort_id] = []
									}
									$scope.subList[item.sort_id].push([item.id, item.name])
								})
								$scope.subSort = data.data.sub_sort
							})
						} else {
							alert(data.data.msg)
						}
					}, 'json')
			} else {
				window.location.hash = "#/menu"
			}

			$scope.years = [current.getFullYear(), current.getFullYear() + 1]
			$scope.months = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
			$scope.dates = []

			$scope.monthChange = function() {
				if ($scope.year && $scope.month) {
					$scope.dates = []
					for (var index = 0; index < (new Date($scope.year, $scope.month, 0).getDate()); ++index) {
						$scope.dates.push(index+1)
					}
				}
			}

			$scope.bigSortChange = function() {
				$scope.selectedSubSortList = $scope.subList[$scope.selectedBigSort]
			}
		}
);