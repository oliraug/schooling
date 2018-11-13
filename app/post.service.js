(function(){
	'use strict';
	angular.module('myPostService', [])
		   .factory('PostService', function($http){
			   var posts = [];
			   var GetAll = function(){
				   return $http.get('/oliraug/posts').then(handleSuccess, handleError('Error getting all posts'));
			   }
			   var GetByPostId = function(postId){
				   return $http.get('/oliraug/posts' + postId).then(handleSuccess, handleError('Error getting post by postId'));
			   }
			   var GetByPostBody = function(postBody){
				   return $http.get('/oliraug/posts' + postBody).then(handleSuccess, handleError('Error getting post by postBody'));
			   }
			   var Create = function(post){
				   posts.push({post:post});
				   return $http.post('/oliraug/posts', post).then(handleSuccess, handleError('Error creating post'));
			   }
			   var Update = function(post, postId){
				   return $http.put('/oliraug/posts' + postId, postId).then(handleSuccess, handleError('Error updating post'));
			   }
			  var Delete = function(postId){
				   return $http.delete('/oliraug/posts' + postId).then(handleSuccess, handleError('Error deleting post'));
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
			   GetByPostId: GetByPostId,
			   GetByPostBody: GetByPostBody,
			   Create: Create,
			   Update: Update,
			   Delete: Delete
			   };
		   });
	})();