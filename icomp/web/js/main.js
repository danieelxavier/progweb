
var title = document.getElementById("title");


title.onmouseover = function() {
	title.setAttribute("style", "color:red; cursor:default;");
}

title.onmouseout = function() {
	title.setAttribute("style", "color:#333");
}