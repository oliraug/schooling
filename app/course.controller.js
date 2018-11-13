// JavaScript Document
(function(){
	'use strict';
	
	var app = angular.module('myCourseController', [])
			.factory('CourseService', ['$http', function($http){
			   	var courses = [];		   
			   var GetAll = function(){
				   return $http.get('/oliraug/courses').then(handleSuccess, handleError('Error getting all courses'));
			   }
			   var GetByCourseId = function(courseId){
				   return $http.get('/oliraug/courses' + courseId).then(handleSuccess, handleError('Error getting course by courseId'));
			   }
			  var GetByCourseName = function(courseName){
				   return $http.get('/oliraug/courses' + courseName).then(handleSuccess, handleError('Error getting course by coursename'));
			   }
			   var Create = function(course){
				   courses.push({course:course});
				   return $http.post('/oliraug/courses', course).then(handleSuccess, handleError('Error creating course'));
			   }
			   var Update = function(course, courseId){
				   return $http.put('/oliraug/courses' + course, courseId).then(handleSuccess, handleError('Error updating course'));
			   }
			  var Delete = function(courseId){
				   return $http.delete('/oliraug/courses' + courseId).then(handleSuccess, handleError('Error deleting course'));
			   }
	//private functions
			function handleSuccess(response){
				return response.data;
			}
			function handleError(error){
				return function(){
					return {success: false, message:error};
				};
			}
			return {
			   GetAll: GetAll,
			   GetByCourseId: GetByCourseId,
			   GetByCourseName: GetByCourseName,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   }]);
			
			app.controller('CourseController', CourseController);
			CourseController.$inject = ['CourseService', '$location', '$scope'];
			function CourseController(CourseService, $location, $scope, FlashService){
				//var $scope = this;
								
				$scope.newCourse = function(){
					$scope.dataLoading = true;
					CourseService.Create($scope.course)
					.then(function (response){
						if(response.success){
							FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.getCourse = function(){
					$scope.dataLoading = true;
					CourseService.GetAll()
					.then(function (response){
						if(response.success){
							FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.updateCourse = function(){
					$scope.dataLoading = true;
					CourseService.Update(course, courseId)
					.then(function (response){
						if(response.success){
							FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.deleteCourse = function(){
					$scope.dataLoading = true;
					CourseService.Delete(courseId)
					.then(function (response){
						if(response.success){
							FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
			};
})();