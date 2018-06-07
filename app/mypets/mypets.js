
angular.module('myApp.mypets', ['ngRoute'])

    .config(['$routeProvider', function($routeProvider) {
        $routeProvider.when('/mypets', {
            templateUrl: 'mypets/mypets.php',
            controller: 'View4Ctrl'
        });
    }])

    .controller('View4Ctrl', [function() {

    }]);
function changecard()
{
    var x=document.getElementsByClassName('card')[0];

        x.style.width='98%';
        x.style.left='25px';

}