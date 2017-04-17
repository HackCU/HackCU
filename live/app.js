// links to spreadsheet json endpoints
var DAY1 = 'http://spreadsheets.google.com/feeds/list/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/od6/public/values?alt=json'
var DAY2 = 'http://spreadsheets.google.com/feeds/list/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/on3tpxo/public/values?alt=json'

var MAP_KEY = 'AIzaSyBF59zIMAxSx94ze66lke-r4KJFngmJKn0';

angular.module("hackculive", ["angularMoment"])
.config(function() {

})
// .config(function($routeProvider) {
//     $routeProvider
//     .when("/", {
//         templateUrl : "live/views/main.html",
//         controller: "MainCtrl"
//     })
//     .when("/talks", {
//         templateUrl : "live/views/talks.html"
//     })
//     .when("/map", {
//         templateUrl : "live/views/map.html",
//         controller: "MapCtrl"
//     })
//     .when("/sponsors", {
//         templateUrl : "live/views/sponsors.html"
//     })
//     .when("/faq", {
//         templateUrl : "live/views/faq.html"
//     })
//     .when("/rules", {
//         templateUrl : "live/views/rules.html"
//     })
// })
.controller('MainCtrl', ['$scope','$http','moment', function($scope, $http, moment) {
    $scope.loaded1=false;
    $scope.loaded2=false;
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
        $scope.loaded1 = true;
    }).error(function(data, status, headers, config) {
        // log error
        console.log(error);
    });

    // get day 2 spreadsheet and convert to json object
    $http.get(DAY2).success(function(data, status, headers, config) {
        $scope.day2entries = createScheduleObj(data.feed.entry);
        console.log($scope.day1entries);
        $scope.loaded2 = true;
    }).error(function(data, status, headers, config) {
        // log error
        console.log(error);
    });

    var locations = [
      ['Wolf Law', 40.001261, -105.262292],
      ['Math 100', 40.007518, -105.264629]
    ];

    $scope.updateQuery = function(newMarker){
        console.log('update')
        $location.search('marker', newMarker);
        return;
    }

    var geocoder = new google.maps.Geocoder();

    var map = new google.maps.Map(document.getElementById('real-map'), {
      zoom: 15,
      center: new google.maps.LatLng(40.004489, -105.266088),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent("<b style='color: black;'>"+locations[i][0]+"</b>");
            infowindow.open(map, marker);
            $scope.updateQuery('hi');
        }
      })(marker, i));
    }
}])
// .controller('MapCtrl', ['$scope','$http','$location', function($scope, $http, $location) {
//
// }])
