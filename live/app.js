// links to spreadsheet json endpoints
var DAY1 = 'http://spreadsheets.google.com/feeds/list/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/od6/public/values?alt=json'
var DAY2 = 'http://spreadsheets.google.com/feeds/list/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/on3tpxo/public/values?alt=json'

angular.module("hackculive", ["ngRoute","angularMoment"])
.config(function($routeProvider) {
    $routeProvider
    .when("/map", {
        templateUrl : "live/views/map.html"
    })
    .when("/schedule", {
        templateUrl : "live/views/schedule.html",
        controller: "MainCtrl"
    })
})
.controller('MainCtrl', ['$scope','$http','moment', function($scope, $http, moment) {
    // prototype for event object
    function Event(entry){
        this.description = entry['gsx$description']['$t'];
        this.category = entry['gsx$category']['$t'];
        this.location = entry['gsx$location']['$t'];
    }

    // create a schedule object from the Google Spreadsheets returned data
    var createScheduleObj = function(entries){
        var S = {};
        entries.forEach(function(entry){
            var time = moment(entry['gsx$start']['$t'], 'HH:mm a').format('hh:mm A');
            if(S.hasOwnProperty(time)){
                S[time].events.push(new Event(entry));
            }else{
                S[time] = {
                    time: time,
                    events: []
                }
                S[time].events.push(new Event(entry));
            }
        })
        return S;
    }

    // get day 1 spreadsheet and convert to json object
    $http.get(DAY1).success(function(data, status, headers, config) {
        $scope.day1entries = createScheduleObj(data.feed.entry);
        console.log($scope.day1entries);
    }).error(function(data, status, headers, config) {
        // log error
        console.log(error);
    });

    // get day 2 spreadsheet and convert to json object
    $http.get(DAY2).success(function(data, status, headers, config) {
        $scope.day2entries = createScheduleObj(data.feed.entry);
        console.log($scope.day1entries);
    }).error(function(data, status, headers, config) {
        // log error
        console.log(error);
    });
}])
