(function(){
	'use strict';
	angular.module('myGroupService', [])
		   .factory('GroupService', function($http){
			    var groups = [];		   			   
			   var GetAll = function(){
				   return $http.get('/oliraug/groups').then(handleSuccess, handleError('Error getting all groups'));
			   }
			   var GetByGroupId = function(groupId){
				   return $http.get('/oliraug/groups' + groupId).then(handleSuccess, handleError('Error getting group by groupId'));
			   }
			  var GetByGroupname = function(groupname){
				   return $http.get('/oliraug/groups' + groupname).then(handleSuccess, handleError('Error getting group by groupname'));
			   }
			   var Create = function(group){
				   groups.push({group:group});
				   return $http.post('/oliraug/groups', group).then(handleSuccess, handleError('Error creating group'));
			   }
			  var Update = function(group, groupId){
				   return $http.put('/oliraug/groups' + group, groupId).then(handleSuccess, handleError('Error updating group'));
			   }
			  var Delete = function(groupId){
				   return $http.delete('/oliraug/groups' + groupId).then(handleSuccess, handleError('Error deleting group'));
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
			   GetByGroupId: GetByGroupId,
			   GetByGroupname: GetByGroupname,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   });
	})();