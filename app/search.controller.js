
(function(){

	'use strict';
	
	var app = angular.module('mySearchController',[])
		.controller('SearchController', ['$scope', '$http', '$rootScope', function($scope, $http, $rootScope){
			
			$scope.$watch('search', function(){
				//fetch();
			});
			
			$scope.search = [];
			
			$scope.fetch = function(){
				return $http.get("https://www.oliraug.com/?user=+$scope.search").then(function(response){
					$scope.name = response.data;
				});
				return $http.get("https://www.oliraug.com/?course=+$scope.search").then(function(response){
					$scope.courseName = response.data;
				});
				return $http.get("https://www.oliraug.com/?institution=+$scope.search").then(function(response){
					$scope.institutionName = response.data;
				});
				return $http.get("https://www.oliraug.com/?department=+$scope.search").then(function(response){
					$scope.departmentName = response.data;
				});
				
				$scope.update = function(user){
					return $scope.search = user.name;
				}
				$scope.update = function(course){
					return $scope.search = course.courseName;
				}
				$scope.update = function(institution){
					return $scope.search = institution.institutionName;
				}
				$scope.update = function(department){
					return $scope.search = department.departmentName;
				}
				
				$scope.select = function(){
					return this.setSelectionRange(0,this.value.length);
				}
			};
			$scope.selectUser = function(userId){
				$rootScope.$broadcast('SELECTEDUSER', userId);
			}
			$scope.selectCourse = function(courseId){
				$rootScope.$broadcast('SELECTEDCOURSE', courseId);
			}
			$scope.selectInstitution = function(institutionId){
				$rootScope.$broadcast('SELECTEDINSTITUTION', institutionId);
			}
			$scope.selectDepartment = function(departmentId){
				$rootScope.$broadcast('SELECTEDDEPARTMENT', departmentId);
			}
			/*Subscribe to the event from the $scope and 
			*add userEvent. courseEvent, institutionEvent, 
			* departmentEvent to the recent array search
			*/
			
			$scope.$on('SELECTEDUSER', function(userEvent){
				$scope.search.push(userEvent);
			});
			$scope.$on('SELECTEDCOURSE', function(courseEvent){
				$scope.search.push(courseEvent);
			});
			$scope.$on('SELECTEDINSTITUTION', function(institutionEvent){
				$scope.search.push(institutionEvent);
			});
			$scope.$on('SELECTEDDEPARTMENT', function(departmentEvent){
				$scope.search.push(departmentEvent);
			});
		}]);
})();

