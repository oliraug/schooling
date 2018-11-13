// JavaScript Document
(function(){
	'use strict';
	
	var app = angular.module('myUserController', []).
			factory('UserService', function($http){
			  var persons = [{}];
		      var getAll = function(){
				   return $http.get('http://localhost/oliraug/users').then(handleSuccess, handleError('Error getting all users'));
			   }
			   var getByUserId = function(userId){
				   return $http.get('http://localhost/oliraug/users' + userId).then(handleSuccess, handleError('Error getting user by userId'));
			   }
			   var getByUsername = function(username){
				   return $http.get('http://localhost/oliraug/users' + username).then(handleSuccess, handleError('Error getting user by username'));
			   }
			   var Create = function(user){
				   persons.push({user:user});
				   return $http.post('http://localhost/oliraug/users', user).then(handleSuccess, handleError('Error creating user'));
			   }
			   var Update = function(userId, user){
				   return $http.put('http://localhost/oliraug/users' + userId, userId).then(handleSuccess, handleError('Error updating user'));
			   }
			  var Delete = function(userId){
				   return $http.delete('http://localhost/oliraug/users' + userId).then(handleSuccess, handleError('Error deleting user'));
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
	
			app.controller('RegisterController', RegisterController);
			
			RegisterController.$inject = ['UserService', '$location', '$scope'];
			
			function RegisterController(UserService, $location, $scope){
				var personlist = [''];
				
				$scope.persons = personlist;
				$scope.person = [''];
				
				$scope.register = function(){
					$scope.dataLoading = true;
					UserService.Create($scope.person)
					.then(function (response){
						if($scope.person){
							$scope.persons.push($scope.person);
							$scope.person = {};
							FlashService.Success('Registration successfull', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.addPerson = function(){
					$scope.dataLoading = true;
					$scope.persons.push($scope.person);
					$scope.person = {};
				}
				$scope.notify = function(messages){
					$scope.$emit('NOTIFIED', messages);
				}
				$scope.updateUser = function(){
					$scope.dataLoading = true;
					return UserService.Update(user, userId)
					.then(function (response){
						if(response.success){
							FlashService.Success('Registration successfull', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.getUser = function(){
					$scope.dataLoading = true;
					return UserService.GetByUserId(userId)
					.then(function (response){
						if(response.success){
							FlashService.Success('Registration successfull', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.getUser = function(){
					$scope.dataLoading = true;
					return UserService.GetAll()
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
				$scope.deleteUser = function(){
					$scope.dataLoading = true;
					return UserService.Delete(userId)
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
			}
})();