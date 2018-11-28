'use strict';

var controllers = angular.module('controllers', []);

controllers.controller('AngularController', ['$scope', 'AngularService',
    function ($scope, AngularService) {
        $scope.results = [];
        AngularService.get().then(function (data) {
            if (data.status == 200)
                $scope.results = data.data;
        }, function (err) {
            console.log(err);
        })
    }
]);