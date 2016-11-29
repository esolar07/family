$(function() {
    
	$("img.js-lrg-lazy").lazyload();
	
	$("img.js-about-lazy").lazyload();
	
	$("img.js-lazy").lazyload({
        event : "sporty"
    });
});

$(window).bind("load", function() {
    var timeout = setTimeout(function() {
        $("img.js-lazy").trigger("sporty")
    }, 3000);
});
