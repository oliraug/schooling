(function(){
	'use strict';
	angular.module('myDiscussionService', [])
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
	})();