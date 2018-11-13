// JavaScript Document
(function(){
	'use strict';
	
	var app = angular.module('myDiscussionController', [])
			.factory('DiscussionService', ['$http', function($http){
			   var discussions = [];
			   var GetAll = function(){
				   return $http.get('/oliraug/discuss').then(handleSuccess, handleError('Error getting all discuss'));
			   }
			   var GetByDiscussionId = function(discussionId){
				   return $http.get('/oliraug/discuss' + discussionId).then(handleSuccess, handleError('Error getting discuss by discussId'));
			   }
			   var GetByDiscussionBody = function(discussionBody){
				   return $http.get('/oliraug/discusss' + discussionBody).then(handleSuccess, handleError('Error getting discuss by discussBody'));
			   }
			   var Create = function(discuss){
				   discussions.push({discuss:discuss});
				   return $http.post('/oliraug/discusss', discuss).then(handleSuccess, handleError('Error creating discuss'));
			   }
			   var Update = function(discuss, discussionId){
				   return $http.put('/oliraug/discusss' + discuss, discussionId).then(handleSuccess, handleError('Error updating discuss'));
			   }
			  var Delete = function(discussionId){
				   return $http.delete('/oliraug/discusss' + discussionId).then(handleSuccess, handleError('Error deleting discuss'));
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
			return{
			   GetAll: GetAll,
			   GetByDiscussionId: GetByDiscussionId,
			   GetByDiscussionBody: GetByDiscussionBody,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   }]);
			
			app.controller('DiscussionController', DiscussionController);
			DiscussionController.$inject = ['DiscussionService', '$location', '$scope'];
			function DiscussionController(DiscussionService, $location, $scope, FlashService){
				//var $scope = this;
								
				 $scope.newDiscussion = function(){
					$scope.dataLoading = true;
					DiscussService.Create($scope.discussion)
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
				$scope.getDiscussions = function(){
					$scope.dataLoading = true;
					DiscussService.GetAll()
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
				$scope.updateDiscussion = function(){
					$scope.dataLoading = true;
					DiscussService.Update(discuss, discussionId)
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
				$scope.deleteDiscussion = function(){
					$scope.dataLoading = true;
					DiscussService.Delete(discussionId)
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