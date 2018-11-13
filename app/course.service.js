(function(){
	'use strict';
	angular.module('myCourseService', [])
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
	})();