// JavaScript Document

(function(){
	'use strict';
	angular.module('myUserService', [])
		   .factory('UserService', function($http){
		      var getAll = function(){
				   return $http.get('/oliraug/users').then(handleSuccess, handleError('Error getting all users'));
			   }
			   var getByUserId = function(userId){
				   return $http.get('/oliraug/users' + userId).then(handleSuccess, handleError('Error getting user by userId'));
			   }
			   var getByUsername = function(username){
				   return $http.get('/oliraug/users' + username).then(handleSuccess, handleError('Error getting user by username'));
			   }
			   var Create = function(user){
				   return $http.post('/oliraug/users', user).then(handleSuccess, handleError('Error creating user'));
			   }
			   var Update = function(userId, user){
				   return $http.put('/oliraug/users' + userId, userId).then(handleSuccess, handleError('Error updating user'));
			   }
			  var Delete = function(userId){
				   return $http.delete('/oliraug/users' + userId).then(handleSuccess, handleError('Error deleting user'));
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
			   getAll: getAll,
			   getByUserId: getByUserId,
			   getByUsername: getByUsername,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			};
			
		   });
	})();