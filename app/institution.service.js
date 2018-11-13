(function(){
	'use strict';
	angular.module('myInstitutionService', [])
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
	})();