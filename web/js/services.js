'use strict';

var app = angular.module('app');

app.service('AngularService', function($http) {
    this.get = function() {
        return $http.get('/api/angular');
    };
    this.post = function (data) {
        return $http.post('/api/angular', data);
    };
    this.put = function (id, data) {
        return $http.put('/api/angular/' + id, data);
    };
    this.delete = function (id) {
        return $http.delete('/api/angular/' + id);
    };
});