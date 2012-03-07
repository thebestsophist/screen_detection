/*  Author: 

	Basic media queries, set in pixels to better deal
	with images. I've included a basic image replacement 
	examples for responsive images but you'll want to 
	edit your own based on how the how the images work
	in your layout.

*/

/* Only < 48em */
if (Modernizr.mq('only screen and (max-width: 767px)')) {



}

/* Anything > 48em */
if (Modernizr.mq('only screen and (min-width: 768px)')) {

	/* Replaces a mobile full-width image at 768px into one at 960px */
	$('img').attr('src', function(index, attr) {
		return attr.replace('image/1/768', 'image/1/960');
	});
}

/* Between 48em and 60em */
if (Modernizr.mq('only screen and (min-width: 768px) and (max-width: 960px)')) {

}

/* Anything > 60em */
if (Modernizr.mq('only screen and min-width: 960px)')) {



}