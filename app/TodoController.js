
(function(){
	'use strict';
	
 var app = angular.module('myApp', [])
	.controller('TodoController',['$scope', function($scope){
				$scope.list = ['test', 'execute', 'refactor'];
			}]);
			
			/*var app = angular.module('comments', []).
				controller('CommentController', ['$scope', function($scope){
				$scope.comments = ['']; 
				$scope.add = function(commentToAdd){
				var newComment = {value:commentToAdd, likes:0};
				$scope.comments.unshift('newComment');
			};
 
 $scope.like = function(comment){
	comment.likes++; 
 };
 }]);*/
})();