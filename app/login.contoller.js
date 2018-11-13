// JavaScript Document
(function(){
	'use strict';
	
	var app = angular.module('myLogin',[])
			.factory('FlashService', function($rootScope){
        
        //function initService()

        var initService = function() {
            $rootScope.$on('$locationChangeStart', function () {
                clearFlashMessage();
            });

            var clearFlashMessage = function() {
                var flash = $rootScope.flash;
                if (flash) {
                    if (!flash.keepAfterLocationChange) {
                        delete $rootScope.flash;
                    } else {
                        // only keep for a single location change
                        flash.keepAfterLocationChange = false;
                    }
                }
            }
        }

        function Success(message, keepAfterLocationChange) {
            $rootScope.flash = {
                message: message,
                type: 'success', 
                keepAfterLocationChange: keepAfterLocationChange
            };
        }

        function Error(message, keepAfterLocationChange) {
            $rootScope.flash = {
                message: message,
                type: 'error',
                keepAfterLocationChange: keepAfterLocationChange
            };
        }
		
		return {
		Success: Success,
        Error: Error
	};
    });
		app.controller('LoginController', LoginController);
			LoginController.$inject = ['$location', 'AuthenticationService', 'FlashService'];
			function LoginController($location, AuthenticationService, FlashService){
				var vm = this;
								
				(function initController(){
					//reset login status
					AuthenticationService.ClearCredentials();
				})();
				vm.login = function(){
					vm.dataLoading = true;
					AuthenticationService.Login(vm.username, vm.password, function(response){
						if(response.success){
							AuthenticationService.SetCredentials(vm.username, vm.password);
							$location.path('/');
						} else {
							FlashService.Error(response.message);
							vm.dataLoading = false;
						}
					});
				};
				
			};
})();