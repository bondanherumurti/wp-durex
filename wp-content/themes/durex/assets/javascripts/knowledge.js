jQuery( document ).ready(function() {
  if (jQuery(window).width() >= 768) {

    jQuery('.bg-knowledge-image').css({
      'height': jQuery('.featured').height() + 90
    });

    var heights = jQuery(".eqheight").map(function() {
      return jQuery(this).height();
    }).get();

    var maxHeight = Math.max.apply(null, heights);
    jQuery(".eqheight").height(maxHeight);

  }
});
