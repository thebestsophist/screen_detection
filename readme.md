# Screen detection

This extension adds fields for the user agent browser window size to the param pool. The goal is to deliver optimized media sizes in responsive layouts similar to https://github.com/filamentgroup/Responsive-Images.

## Requirements
- jQuery (though you could get around it if you wanted)
- Modernizr (optional)

## Installation
1. Add the folder to your extensions folder.
2. Enable the extension in `System -> extensions`
3. Add the text of js/plugin.js to your scripts.
4. You're done!.

## How it works
This extensions is one part of a two-part process and is best used with client-side javascript to deliver optimized media and code for each medium. `js/script.js` is an example for using Modernizr for using javascript media queries.  `js/plugin.js` polls the width of the window and the screen whenever the browser is resized and saves the sizes to four cookies: `window-width` `window-height` `screen-width`  and `screen-height` which are added to your param pool during the next page request. From there you can use them to set choose-when-otherwise conditions to deliver optimized media and code for a particular window size.

(Note: If you are not already using jQuery you should probably use another methods to set your cookies such as http://stackoverflow.com/a/8876069)

### Why not just use screen width?
While the maximum screen width is useful for figuring out the largest possible size people use, those with giant screens rarely set their browser windows to full width. This means that sending really large media is unnecessary and takes up bandwidth.

## Fallback
Server-side optimization is only a part of the responsive web design toolkit. You will still want to use client-side javascript for user agent changes that take place (eg resizing the window). If you are using Modernizr (modernizr.com), you can use js/script.js as a foundation for writing client-side responsive javascript.

## How you (probably) shouldn't use this extension
While this extension (sort of) gives you the ability to deliver content based on device, you should not use it to dumb down your content for smaller devices. Instead, build your design and content around mobile-first principles and work your way up to larger screens.

## License
Released under MIT, just like Symphony CMS. Share and enjoy!