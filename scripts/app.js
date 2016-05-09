var  = angular.module('', ['ngRoute', ''])

maintenance.config(["$routeProvider", "$locationProvider", function ($routeProvider, $locationProvider) {
    $routeProvider
    .when("/", {
        templateUrl: "",
        controller: "",
        controllerAs: ""
    })

    $locationProvider.html5Mode({
      enabled: true,
      requireBase: false
    });
}]);