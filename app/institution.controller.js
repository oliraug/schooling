// JavaScript Document
(function(){
	'use strict';
	
	var app = angular.module('myInstutionController', [])
			.factory('InstitutionService', ['$http', function($http){
			   var institutions = [];
			   var GetAll = function(){
				   return $http.get('/api/institutions').then(handleSuccess, handleError('Error getting all institutions'));
			   }
			   var GetByInstitutionId = function(institutionId){
				   return $http.get('/api/institutions' + institutionId).then(handleSuccess, handleError('Error getting institution by institutionId'));
			   }
			   var GetByInstitutionName = function(institutionName){
				   return $http.get('/api/institutions' + institutionName).then(handleSuccess, handleError('Error getting institution by institutionname'));
			   }
			   var Create = function(institution){
				   institutions.push({institution:institution});
				   return $http.post('/api/institutions', institution).then(handleSuccess, handleError('Error creating institution'));
			   }
			   var Update = function(institution, institutionId){
				   return $http.put('/api/institutions' + institution, institutionId).then(handleSuccess, handleError('Error updating institution'));
			   }
			  var Delete = function(institutionId){
				   return $http.delete('/api/institutions' + institutionId).then(handleSuccess, handleError('Error deleting institution'));
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
			   GetByInstitutionId: GetByInstitutionId,
			   GetByInstitutionName: GetByInstitutionName,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   }]);
			
			app.controller('InstitutionController', InstitutionController);
			InstitutionController.$inject = ['InstitutionService', '$location', '$scope'];
			function InstitutionController(InstitutionService, $location, $scope, FlashService){
				//var $scope = this;
								
				$scope.newInstitution = function(){
					$scope.dataLoading = true;
					InstitutionService.Create($scope.institution)
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
				$scope.getInstitution = function(){
					$scope.dataLoading = true;
					InstitutionService.GetAll()
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
				$scope.updateInstitution = function(){
					$scope.dataLoading = true;
					InstitutionService.Update(institution, institutionId)
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
				$scope.deleteInstitution = function(){
					$scope.dataLoading = true;
					InstitutionService.Delete(institutionId)
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