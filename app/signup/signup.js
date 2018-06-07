function checkpkey()
{
    var p1=document.getElementById('pkey').value;
    var p2=document.getElementById('pkey1').value;
    if(p1===p2)
    {
        document.getElementById('errortxt').innerHTML="Password matches";
    }
    else     {

        document.getElementById('errortxt').innerHTML="Password do not match!!";
    }
}

angular.module('myApp.signup', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/signup', {
    templateUrl: 'signup/signup.html',
    controller: 'View2Ctrl'
  });
}])

.controller('View2Ctrl', [function() {

}]);