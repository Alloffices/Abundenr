$(document).foundation();

function resizeFont() {
	var fs = document.getElementById("masthead").style.fontSize;
  if ($(window).width() < 769) {
	fs = "4em";
  } else if ($(window).width() < 481) {
	fs = "2.5em";
  } else if ($(window).width() < 321) {
	fs = "1.5em";
  }  
}
$(window).resize(function() {
  resizeFont();
});
