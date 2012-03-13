// This requires jQuery to function properly
// Sets window properties as cookies for server-side optimizations
$(window).resize(function () {

var pixel-density = window.devicePixelRatio || 1,


	document.cookie = "window-width=" + $(window).width() + "; path=/";
	document.cookie = "window-height=" + $(window).height() + "; path=/";
	document.cookie = "screen-width=" + screen.width + "; path=/";
	document.cookie = "screen-height=" + screen.height + "; path=/";
	document.cookie = "pixel-density=" + pixel-density + "; path=/";


});

window.addEventListener(orientationEvent, function() {
	window-orientation = window.orientation || 0,
	document.cookie = 'screen-orientation=' + window-orientation + '; path=/';
});