

(function(){

	'use strict';
	
	var app = angular.module('myAnswersController', [])
			.factory('AnswersService', ['$http', function($http){
			   //var answer = [{}];	   			   
			   var GetAll = function(){
				   return $http.get('http://localhost/oliraug/answers').then(handleSuccess, handleError('Error getting all answers'));
				}
			   var GetByAnswersId = function(answersId){
				   return $http.get('http://localhost/oliraug/answers' + answersId).then(handleSuccess, handleError('Error getting answers by answersId'));
			   }
			   var GetByAnswersBody = function(answerBody){
				   return $http.get('http://localhost/oliraug/answers' + answerBody).then(handleSuccess, handleError('Error getting answers by answerBody'));
			   }
			   var Create = function(answers){
				   //answer.push({answers:answers});
				   return $http.post('http://localhost/oliraug/answers', answers).then(handleSuccess, handleError('Error creating answers'));
			   }
			   var Update = function(answers, answersId){
				   return $http.put('http://localhost/oliraug/answers' + answers, answersId).then(handleSuccess, handleError('Error updating answers'));
			   }
			  var Delete = function(answersId){
				   return $http.delete('http://localhost/oliraug/answers' + answersId).then(handleSuccess, handleError('Error deleting answers'));
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
		   }])
		   
			app.controller('AnswersController', AnswersController); 
				
				AnswersController.$inject = ['$scope', 'AnswersService', '$location'];
				function AnswersController($scope, AnswersService, $location){
				var hasVoted = false;
				var answerlists = [''];	
				$scope.answers = answerlists;
				$scope.answer = [];	
				$scope.innerAnswer = [];
				$scope.improve = [];
				
				 $scope.newAnswer = function(answersToAdd){
					$scope.dataLoading = true;
					var addAnswer = {answerBody:answersToAdd};
					AnswersService.Create('addAnswer')
					.then(function (response){
						if($scope.answer){
							addAnswer = null;
							$scope.answers.push($scope.answer);
							$scope.answer = {};
							//FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.vote = function(answer){
					if(!hasVoted){
						hasVoted = true;
						$scope.voted = 'Unvote';
						$scope.votes++;
					} else {
						hasVoted = false;
						$scope.voted = 'Vote';
						$scope.votes--;
					}						
				}
				$scope.newImprovedAnswers = function(text){
					$scope.innerAns = true;
					$scope.improve.push(text);
					$scope.text = ""; //clearing the text form
				}
									
				$scope.getAnswer = function(){
					$scope.dataLoading = true;
					return AnswersService.GetAll()
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
				$scope.updateAnswer = function(){
					$scope.dataLoading = true;
					return AnswersService.Update(answers, answersId)
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
				$scope.deleteAnswer = function(answersId){
					$scope.dataLoading = true;
					return AnswersService.Delete()
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