jQuery('.youtube').click(function(){
    video = '<iframe width="100%" height="323" allowfullscreen src="'+ jQuery(this).attr('data-video') +'"></iframe>';
    jQuery(this).replaceWith(video);
});

jQuery('.height-first').css({
    'height': jQuery('.height').height() - 90
});

jQuery('.first-height').css({
    'height': jQuery('.second-height').height() + 26
});

jQuery('.third-height').css({
    'height': jQuery('.second-height').height() + 26
});

if (jQuery(window).width() < 960) {
}
else {
   jQuery('.bg-knowledge').css({
	    'height': jQuery('.bg-tongue').height() + 69
	});
}