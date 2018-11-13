
(function(){

	'use strict';
	
 var app = angular.module('myApp', [])
			.factory('SubjectService', function($http){
			   var subjects = [];
			   var GetAll = function(){
				   return $http.get('/oliraug/subjects').then(handleSuccess, handleError('Error getting all posts'));
			   }
			   var GetBySubjectId = function(subjectId){
				   return $http.get('/oliraug/subjects' + subjectId).then(handleSuccess, handleError('Error getting post by postId'));
			   }
			   var GetBySubjectName = function(subjectName){
				   return $http.get('/oliraug/subjects' + subjectName).then(handleSuccess, handleError('Error getting post by postBody'));
			   }
			   var Create = function(subject){
				   subjects.push({subject:subject});
				   return $http.post('/oliraug/subjects', subject).then(handleSuccess, handleError('Error creating post'));
			   }
			   var Update = function(subject, subjectId){
				   return $http.put('/oliraug/subject' + subjectId, subjectId).then(handleSuccess, handleError('Error updating post'));
			   }
			  var Delete = function(subjectId){
				   return $http.delete('/oliraug/subjects' + subjectId).then(handleSuccess, handleError('Error deleting post'));
			   }
		/*private functions*/
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
			   GetBySubjectId: GetBySubjectId,
			   GetBySubjectName: GetBySubjectName,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   });
			
			app.controller('SubjectController', SubjectController);
			SubjectController.$inject = ['SubjectService', '$location', '$scope'];
			function SubjectController(SubjectService, $location, $scope, FlashService){
				var subjectlists = [];
				
				$scope.subjects = subjectlists;
				$scope.subject = [];
				 $scope.newSubject = function(){
					$scope.dataLoading = true;
					SubjectService.Create($scope.subject)
					.then(function (response){
						if($scope.subject){
							$scope.subjects.push($scope.subject)
							$scope.subject = {};
							FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.getSubject = function(){
					$scope.dataLoading = true;
					SubjectService.GetAll()
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
				$scope.updateSubject = function(){
					$scope.dataLoading = true;
					SubjectService.Update(subject, subjectId)
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
				$scope.deleteSubject = function(){
					$scope.dataLoading = true;
					SubjectService.Delete(subjectId)
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