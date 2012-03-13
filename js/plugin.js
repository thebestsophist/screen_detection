// This requires jQuery to function properly
// Sets window properties as cookies for server-side optimizations

function getDevicePixelRatio() {
	if(window.devicePixelRatio === undefined) return 1; // No pixel ratio available. Assume 1:1.
	return window.devicePixelRatio;
}

function getWindowOrientation() {
	if(window.orientation === undefined) return 0;
	return window.orientation;
}

function getWindowProperties() {
	document.cookie = "window-width=" + $(window).width() + "; path=/";
	document.cookie = "window-height=" + $(window).height() + "; path=/";
	document.cookie = 'screen-orientation=' + getWindowOrientation() + '; path=/';
}

function getScreenProperties() {
	document.cookie = "screen-width=" + screen.width + "; path=/";
	document.cookie = "screen-height=" + screen.height + "; path=/";
	document.cookie = "pixel-density=" + getDevicePixelRatio() + "; path=/";

}

// Sets window properties as cookies for server-side optimizations
$(document).ready(function(){
	getWindowProperties();
	getScreenProperties();
});
$(window).resize(getWindowProperties);
$(screen).resize(getScreenProperties);