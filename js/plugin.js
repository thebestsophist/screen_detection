// This requires jQuery to function properly
// Sets window properties as cookies for server-side optimizations
$(window).resize(function () {
	document.cookie = "window-width=" + $(window).width() + "; path=/";
	document.cookie = "window-height=" + $(window).height() + "; path=/";
	document.cookie = "screen-width=" + screen.width + "; path=/";
	document.cookie = "screen-height" + screen.height + "; path=/";
});
