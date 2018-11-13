(function(){
	'use strict';
var app = angular.module('comments', []).
controller('CommentController', ['$scope', function($scope){
 var userComments = [''];
 $scope.comments = userComments; 
 $scope.comment = {};
 $scope.add = function(commentToAdd){
	 var newComment = {value:commentToAdd, likes:0};
	 if($scope.comment){
	 $scope.comments.push('newComment');
	 $scope.comment = null;
	 }
 };
 
 $scope.like = function(comment){
	comment.likes + 1 ; 
 };
 }]);
 
 })();