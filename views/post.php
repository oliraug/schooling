
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/oliraug/school/2017/js/angular.min.js"></script>
  <script type="text/javascript" src="http://localhost/oliraug/school/2017/js/post.controller.js"></script>
  <title>Post</title>
<style>
input[type=submit], input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
	border-radius:5em;cursor:pointer;
}
input[type=submit]:hover, input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
textarea{resize:none; border-radius:5em; background-color:#ff00cc;}
</style>
  
</head>

<body ng-app="myPost" ng-controller="postController">

<div ng-repeat="post in userPosts">
  <h3>
    {{post.name}}
    
  </h3>
</div>

<form name="postForm" ng-submit="newPost()">
  <input type="text" ng-model="post.name" />Name:{{person.name}}
  <br />
  <input type="submit" id="submit" value="Post" class="button button-positive button-block"/>
  
</form>
<!--script type="text/javascript">
(function(){

	'use strict';
	
 var app = angular.module('myApp', []);
    app.controller('postController', ['$scope', function($scope) {
		var posts = [];/*
        { name: 'alon', job: 'web dev', home:'nir tzvi' },
        { name: 'ben', job: 'katbamflighter', home:'nir tzvi' },
        { name: 'shiraz', job: 'dentist assistant', home:'hadera west' }
    ];*/
      
      $scope.newPost = function() {
					
        $scope.userPosts = posts;
		$scope.post = [];
        $scope.newPost = function() {
            console.log("working");
            if ($scope.post) {
                $scope.userPosts.push($scope.post);
                $scope.post=null;
            }
			};
			}]);
       
	})();
</script-->
</body>
</html>