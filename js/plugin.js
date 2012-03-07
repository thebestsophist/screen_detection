// This requires jQuery to function properly
// Sets window properties as cookies for server-side optimizations
$(window).resize(function () {
	document.cookie = "screen-height=" + $(window).height() + "; path=/";
	document.cookie = "screen-width=" + $(window).width() + "; path=/";
});
