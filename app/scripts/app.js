angular.module('directoryApp', ['ngAnimate', 'ui.router'])
    .config(function($stateProvider, $urlRouterProvider) {

        $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: '/static/home.html',
                controller: 'directoryController as dirList'
            })
            .state('about', {
                url: '/about',
                templateUrl: '/static/about.html'
            });
    })
