'use strict';

//Dear Celestia, it's alive!
var twilight = angular.module('twilight',[ 'ngRoute' ]);

twilight.config(['$routeProvider', '$interpolateProvider', '$locationProvider', 
function($routeProvider, $interpolateProvider, $locationProvider) {
    $interpolateProvider.startSymbol('{[');
    $interpolateProvider.endSymbol(']}');
	$locationProvider.html5Mode(true);
	
	$routeProvider.when('/', { controller: 'PrimaryController' });
	$routeProvider.when('/explore/:abbr/:county', { controller: 'CountyController' });
	$routeProvider.when('/explore/:abbr', { controller: 'StateController' });
	$routeProvider.otherwise({ redirect: '/' });

}]);

twilight.run();

twilight.filter('unsafe', function($sce) {
    return function(val) {
        return $sce.trustAsHtml(val);
    };
});

twilight.factory('Data', ['$http', function Data($http) {
	return {
		getStates: function getStates() { return $http.get('/derpy/states'); },
		getCitiesByState: function getCitiesByState($stateid) { return $http.get('/derpy/cities/' + $stateid); },
		getCounties: function getCounties() { return $http.get('/derpy/counties/' + stateabbr); },
		getRegions: function getRegions() { return $http.get('/derpy/regions/' + stateabbr); },
		getCities: function getCities() { return $http.get('/derpy/cities/' + stateabbr + '/' + countyslug); },
	};
}]);

twilight.controller('PrimaryController', function PrimaryController($scope, Data) {

	Data.getStates().success(parseStates);
	function parseStates(data) { $scope.states = data; }
	function throwError(data) { alert('dun dun dun'); }


});

twilight.controller('StateController', ['$scope', 'Data',
function StateController($scope, Data) {
	Data.getCounties().success(parseCounties);
	Data.getRegions().success(parseRegions);
	function parseCounties(data) { $scope.counties = data; }
	function parseRegions(data) { $scope.regions = data; }
	function throwError(data) { alert('dun dun dun'); }
}]);

twilight.controller('CountyController', ['$scope', 'Data',
function CountyController($scope, Data) {
	Data.getCities().success(parseCities);
	function parseCities(data) { $scope.cities = data; }
	function throwError(data) { alert('dun dun dun'); }
}]);