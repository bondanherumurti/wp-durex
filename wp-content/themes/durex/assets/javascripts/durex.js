jQuery('.youtube-video').click(function(){
    video = '<iframe width="100%" height="323" allowfullscreen src="'+ jQuery(this).attr('data-video') +'"></iframe>';
    jQuery(this).replaceWith(video);
    jQuery(".youtube").css("display", "none");
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

if (jQuery(window).width() >= 768) {
   jQuery('.bg-knowledge').css({
	    'height': jQuery('.bg-tongue').height() + 38
	});
}

if (jQuery(window).width() >= 992) {
   jQuery('.bg-knowledge').css({
	    'height': jQuery('.bg-tongue').height() + 69
	});
}