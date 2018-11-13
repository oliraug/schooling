(function () {
    'use strict';

    angular
        .module('myApp')
        .factory('FlashService', function($rootScope){
        
        initService();

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

})();