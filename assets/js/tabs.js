
var box = document.getElementById("mydiv");

var box1 = document.getElementById("blank_window_1");
var box2 = document.getElementById("blank_window_2");
var box3 = document.getElementById("blank_window_3")
// var box4 = document.getElementById("about_tab");
// var box5 = document.getElementById("schedule_tab");

box.style.position = "absolute";
box1.style.position = "absolute";
box2.style.position = "absolute";
box3.style.position = "absolute";
// box4.style.position = "relative"; 
// box5.style.position = "relative"; 


box.style.zIndex = 100;
box1.style.zIndex = 99;
box2.style.zIndex = 98;
box3.style.zIndex = 97;

var init_top = 150;
var init_left = screen.width/3.8;


box1.style.top = String(init_top - 20) + "px";
box1.style.left = String(init_left - 20) + "px";
box2.style.top = String(init_top - 40) + "px";
box2.style.left = String(init_left - 40) + "px";
box3.style.top = String(init_top - 60) + "px";
box3.style.left = String(init_left - 60) + "px";
console.log(String(init_left - 60) + "px");
box.style.top = String(init_top) + "px";
box.style.left = String(init_left) + "px";

// box4.style.left =  String(init_left) + "px";
// box5.style.left =  String(init_left) + "px";



// dragElement(document.getElementById("mydiv"));
// function dragElement(elmnt) {
//   var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
//   if (document.getElementById(elmnt.id + "header")) {
//     /* if present, the header is where you move the DIV from:*/
//     document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
//   } else {
//     /* otherwise, move the DIV from anywhere inside the DIV:*/
//     elmnt.onmousedown = dragMouseDown;
//   }

//   function dragMouseDown(e) {
//     e = e || window.event;
//     e.preventDefault();
//     var f = window.event;
//     console.log(f.clientX);
//     console.log(f.clientY);
//     // get the mouse cursor position at startup:
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     document.onmouseup = closeDragElement;
//     // call a function whenever the cursor moves:
//     document.onmousemove = elementDrag;
//   }

//   function elementDrag(e) {
//     e = e || window.event;
//     e.preventDefault();
//     // calculate the new cursor position:
//     pos1 = pos3 - e.clientX;
//     pos2 = pos4 - e.clientY;
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     // set the element's new position:
//     elmnt.style.top = ((elmnt.getBoundingClientRect().top) - pos2) + "px";
//     elmnt.style.left = ((elmnt.getBoundingClientRect().left) - pos1) + "px";
//   }

//   function closeDragElement() {
//     /* stop moving when mouse button is released:*/
//     document.onmouseup = null;
//     document.onmousemove = null;
//   }
// }