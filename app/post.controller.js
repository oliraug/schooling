
(function(){

	'use strict';
	
 var app = angular.module('myPostController', [])
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
		/*private functions*/
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
			
			app.controller('PostController', PostController);
			PostController.$inject = ['PostService', '$location', '$scope'];
			function PostController(PostService, $location, $scope, FlashService){
				var postlists = [];
				
				$scope.posts = postlists;
				$scope.post = [];
				 $scope.newPost = function(){
					$scope.dataLoading = true;
					PostService.Create($scope.post)
					.then(function (response){
						if($scope.post){
							$scope.posts.push($scope.post)
							$scope.post = {};
							FlashService.Success('Success', true);
							 $location.path('/home');
						} else {
							FlashService.Error(response.message);
							$scope.dataLoading = false;
						}
					});
				}
				$scope.getPost = function(){
					$scope.dataLoading = true;
					PostService.GetAll()
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
				$scope.updatePost = function(){
					$scope.dataLoading = true;
					PostService.Update(post, postId)
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
				$scope.deletePost = function(){
					$scope.dataLoading = true;
					PostService.Delete(postId)
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