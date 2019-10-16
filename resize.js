$('#effect').show();
$('.login-container').show();
$('.topnav').hide();
function myFunction() {
var x = document.getElementById("myLinks");
if (x.style.display === "block") {
x.style.display = "none";
$('.login-container').show();

} else {
x.style.display = "block";
x.style.textAlign = "center";

}
}
function myFunction2(x) {
if (x.matches) { // If media query matches
 $('#effect').hide();
$('.topnav').show();
} else {
$('.login-container').show();
$('#effect').show();
$('.topnav').hide();
}
}

var x = window.matchMedia("(max-width: 900px)");
myFunction(x); // Call listener function at run time;
x.addListener(myFunction2); // Attach listener function on state changes
