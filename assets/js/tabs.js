
var box = document.getElementById("mydiv");

var box1 = document.getElementById("other1");
var box2 = document.getElementById("other2");
var box3 = document.getElementById("other3");

// box.style.position = "absolute";
box1.style.position = "absolute";
box2.style.position = "absolute";
box3.style.position = "absolute";


box.style.zIndex = 100;
box1.style.zIndex = 99;
box2.style.zIndex = 98;
box3.style.zIndex = 97;

var init_top = box.offsetTop;
var init_left = box.offsetLeft;


box1.style.top = String(init_top - 20) + "px";
box1.style.left = String(init_left - 20) + "px";
box2.style.top = String(init_top - 40) + "px";
box2.style.left = String(init_left - 40) + "px";
box3.style.top = String(init_top - 60) + "px";
box3.style.left = String(init_left - 60) + "px";
// box.style.top = String(init_top) + "px";
// box.style.left = String(init_left) + "px";


var onsize = function() {
    var width = $(window).width();
    var box = document.getElementById("mydiv");
    var box1 = document.getElementById("other1");
    var box2 = document.getElementById("other2");
    var box3 = document.getElementById("other3");
    if (width <=1000) 
    {
        box1.style.display = 'none';
        box2.style.display = 'none';
        box3.style.display = 'none';
    }
    else
    {
        box1.style.display = '';
        box2.style.display = '';
        box3.style.display = '';
    }
    box.style.zIndex = 100;
    box1.style.zIndex = 99;
    box2.style.zIndex = 98;
    box3.style.zIndex = 97;

    var init_top = box.offsetTop;
    var init_left = box.offsetLeft;

    box1.style.top = String(init_top - 20) + "px";
    box1.style.left = String(init_left - 20) + "px";
    box2.style.top = String(init_top - 40) + "px";
    box2.style.left = String(init_left - 40) + "px";
    box3.style.top = String(init_top - 60) + "px";
    box3.style.left = String(init_left - 60) + "px";
    box.style.top = String(init_top) + "px";
    box.style.left = String(init_left) + "px";

    var bars = document.getElementsByClassName("footer__window");
    var i;
    if (width <= 1400)
    {
        for (i = 0; i < bars.length; i++) {
            bars[i].style.display = "none";
          }     
    }
    else {
        for (i = 0; i < bars.length; i++) {
            bars[i].style.display = "";
          } 

    }

};

$(window).resize(onsize);
onsize();