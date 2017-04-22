// links to spreadsheet json endpoints
var DAY1 = 'https://spreadsheets.google.com/feeds/list/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/od6/public/values?alt=json';
var DAY2 = 'https://spreadsheets.google.com/feeds/list/1GNpcrXPIa0LUNGzquRKPsjqzFs2FyRaKw51rhOvTNtU/on3tpxo/public/values?alt=json';
var HW_LAB = 'https://hardware.mlh.io/events/hackcu-iii.json'
var SPON = 'https://spreadsheets.google.com/feeds/list/1OjUQ1CCUmkoCAGMBtNoMVXdhuUeolcR3aKK3tsDwI2o/od6/public/values?alt=json';

var MAP_KEY = 'AIzaSyBF59zIMAxSx94ze66lke-r4KJFngmJKn0';

angular.module("hackculive", ["angularMoment"])
.config(function() {

})
.controller('MainCtrl', ['$scope','$http','moment','$interval', function($scope, $http, moment, $interval) {
    $scope.loaded1=false;
    $scope.loaded2=false;
    $scope.loaded3=false;
    $scope.loaded4=false;
    // prototype for event object
    function Event(entry){
        this.description=entry['gsx$description']['$t'];
        this.category=entry['gsx$category']['$t'];
        this.location=entry['gsx$location']['$t'];
    }

    function Sponsor(entry){
        this.company = entry['gsx$company']['$t'];
        this.link = entry['gsx$link']['$t'];
        this.info = entry['gsx$info']['$t'];
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

    // used to refresh info retrieved from Google Docs
    var pullAllData = function(){
        console.log('getting hardware;')
        $http.get(HW_LAB).success(function(data, status, headers, config) {
            console.log('setting hardware;')
            var all_hw = data.data;

            $scope.hardware1 = all_hw.slice(0,all_hw.length/2);
            $scope.hardware2 = all_hw.slice(all_hw.length/2, all_hw.length+1);
            console.log(data);

            console.log($scope.hardware);
        }).error(function(data, status, headers, config) {
            // log error
            console.log(error);
        });

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
    }

    // create time interval to refresh data
    // currently 2 minutes
    var theInterval = $interval(function(){
        console.log('refresh');
        pullAllData();
    }.bind(this), 120000);

    $scope.$on('$destroy', function () {
        $interval.cancel(theInterval)
    });


    // create a schedule object from the Google Spreadsheets returned data
    var createSponsorArray = function(entries){
        var A = [];
        entries.forEach(function(entry){
            A.push(new Sponsor(entry));
        })
        return A;
    }

    console.log('getting sponsors;')
    $http.get(SPON).success(function(data, status, headers, config) {
        console.log('getting sponsors;')
        $scope.sponsors = createSponsorArray(data.feed.entry);
        console.log(data);

        console.log($scope.sponsors);

        $scope.loaded3 = true;
    }).error(function(data, status, headers, config) {
        // log error
        console.log(error);
    });

    console.log('getting hardware;')
    $http.get(HW_LAB).success(function(data, status, headers, config) {
        console.log('setting hardware;')
        var all_hw = data.data;

        $scope.hardware1 = all_hw.slice(0,all_hw.length/2);
        $scope.hardware2 = all_hw.slice(all_hw.length/2, all_hw.length+1);
        console.log(data);

        console.log($scope.hardware);

        $scope.loaded4 = true;
    }).error(function(data, status, headers, config) {
        // log error
        console.log(error);
    });

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

    map.setOptions({ scrollwheel: false });

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
}]);
