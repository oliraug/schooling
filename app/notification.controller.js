(function(){
	'use strict';
	
	var app = angular.module('myNotify',[])
			.factory('notificationsService', function(notificationsService){
					var MAX_LEN = 20;
					var notifications = [];
				
				return {
					push: function(notification){
					var notificationsArchive;
					var newLen = notifications.unshift(notification);
					if(newLen > this.MAX_LEN){
						notificationService = this.notifications.pop();
						notificationsArchive.archive(notificationToAchive);
					}
				},
					/*NotificationsService.prototype.getCurrent = function(){
						return this.notifications;
					};*/
				};
			});
			
			app.controller('NotificationController', ['$scope', function($scope){
				$scope.notify = function(messages){
					$scope.$emit('NOTIFIED', messages);
				}
				
			}]);
})();