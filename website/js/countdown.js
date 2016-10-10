/**
 * Created by ashes on 7/28/16.
 */
var deadline = 'December 3 2016 08:00:00 GMT+0100';

function getTimeRemaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    console.log(endtime);

    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

var min = getTimeRemaining(deadline).hours;
console.log(min);