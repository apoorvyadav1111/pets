

angular.module('myApp.sell', ['ngRoute'])

    .config(['$routeProvider', function($routeProvider) {
        $routeProvider.when('/sell', {
            templateUrl: 'sell/sell.html',
            controller: 'View3Ctrl'
        });
    }])

    .controller('View3Ctrl', [function() {

    }]);