(function(){
	'use strict';
	
	var app = angular.module('myNotify',[])
			.controller('RecentNotificationController', ['$scope','$rootScope', function($scope, $rootScope){
				$rootScope.recent = [];
				$rootScope.$on('NOTIFIED', function(messages){
					$rootScope.recent.push(messages);
				})
			}]);
})();