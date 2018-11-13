(function(){
	'use strict';
	angular.module('myAnswersService', [])
		   .factory('AnswersService', ['$http', '$rootScope', function($http, $rootScope){
			   	var answer = [];	   			   
			   var GetAll = function(){
				   return $http.get('/oliraug/answers').then(handleSuccess, handleError('Error getting all answers'));
				   $rootScope.$broadcast();
			   }
			   var GetByAnswersId = function(answersId){
				   return $http.get('/oliraug/answers' + answersId).then(handleSuccess, handleError('Error getting answers by answersId'));
			   }
			   var GetByAnswersBody = function(answerBody){
				   return $http.get('/oliraug/answers' + answerBody).then(handleSuccess, handleError('Error getting answers by answerBody'));
			   }
			   var Create = function(answers){
				   answer.push({answers:answers});
				   return $http.post('/oliraug/answers', answers).then(handleSuccess, handleError('Error creating answers'));
			   }
			   var Update = function(answers, answersId){
				   return $http.put('/oliraug/answers' + answers, answersId).then(handleSuccess, handleError('Error updating answers'));
			   }
			  var Delete = function(answersId){
				   return $http.delete('/oliraug/answers' + answersId).then(handleSuccess, handleError('Error deleting answers'));
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
			   GetByAnswersId: GetByAnswersId,
			   GetByAnswersBody: GetByAnswersBody,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   }]);
	})();