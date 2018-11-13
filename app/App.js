// JavaScript Document
(function(){
	'use strict';
	
	var app = angular.module('myApp', ['ngRoute', 'ngCookies'])
		   .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
			   $routeProvider
			   .when('/', {
				   controller: 'HomeController',
				   templateUrl: 'home/home.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/login', {
				   controller: 'LoginController',
				   templateUrl: 'login/login.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/register', {
				   controller: 'RegisterController',
				   templateUrl: 'register/register.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/course', {
				   controller: 'CourseController',
				   templateUrl: 'course/course.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/institution', {
				   controller: 'InstitutionController',
				   templateUrl: 'institution/institution.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/subject', {
				   controller: 'SubjectController',
				   templateUrl: 'subject/subject.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/users', {
				   controller: 'UserController',
				   templateUrl: 'user/user.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/group', {
				   controller: 'GroupController',
				   templateUrl: 'group/group.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/department', {
				   controller: 'DepartmentController',
				   templateUrl: 'department/department.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/groups', {
				   controller: 'GroupController',
				   templateUrl: 'group/group.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/post', {
				   controller: 'PostController',
				   templateUrl: 'post/post.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/discussion', {
				   controller: 'DiscussionController',
				   templateUrl: 'discussion/discussion.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/answers', {
				   controller: 'AnswersController',
				   templateUrl: 'answers/answers.view.html',
				   contollerAs: 'vm'
			   })
			   .when('/search', {
				   controller: 'SearchController',
				   templateUrl: 'search/search.view.html',
				   contollerAs: 'vm'
			   })
			   .otherwise({ redirectTo: '/login'});
		   }]).run(run);
		   
		   run.$inject = ['$rootScope', '$location', '$cookies', '$http'];
		   function run($rootScope, $location, $cookies, $http){
			   //keep user logged in after page refesh
			   $rootScope.globals = $cookies.getObject('globals') || {};
			   if($rootScope.globals.currentUser){
				   $http.defaults.headers.common['Authentication'] = 'Basic' + $rootScope.globals.currentUser.authdata;
			   }
			   $rootScope.$on('$locationChangeStart', function(event, next, current){
				   //redirect to login page if not logged in and trying to access a restricted page
				   var restrictedPage =($location.path(), ['/login', '/register']) == -1;
				   var loggedIn = $rootScope.globals.currentUser;
				   if(restrictedPage && !loggedIn){
					   $location.path('/login');
				   }
			   });
		   };
	})();