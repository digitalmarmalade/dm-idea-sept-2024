function is_touch_device() {
    "use strict";
  return 'ontouchstart' in window || navigator.maxTouchPoints;
}

$(function() {
    "use strict";
  if(is_touch_device()) {
    $('body').addClass('touch');
  }
});

$(function() {
    "use strict";
  $('a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
		$('html, body').animate({
		  scrollTop: target.offset().top-50
		}, 1000);
		return false;
	  }
	}
  });
});

$( ".overlay-trigger" ).click(function() {

            "use strict";

			var overlayIdToShow = $(this).data('href');

			var windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            scrollTop = $(window).scrollTop(),
            smallWindowWidth;

			if(windowWidth < 600) {
				smallWindowWidth = true;
			}

			var overlayWidth = $(overlayIdToShow).outerWidth();
			var overlayHeight = $(overlayIdToShow).outerHeight();
			var overlayHeightTopMargin = overlayHeight/2;
			var overlayHeightLeftMargin = overlayWidth/2;

			if(smallWindowWidth && (overlayHeight > windowHeight || overlayWidth > windowWidth )) {
				$(overlayIdToShow).addClass('overlay-full');
			} else if(overlayHeight > windowHeight) {
				$(overlayIdToShow).css('position', 'absolute').css('top', scrollTop + 20 + 'px').css('margin-top', 0).css('margin-left', '-' + overlayHeightLeftMargin + 'px');
			} else {
				$(overlayIdToShow).css('margin-top', '-' + overlayHeightTopMargin + 'px').css('margin-left', '-' + overlayHeightLeftMargin + 'px');
			}

			$('#overlayBg').addClass('overlay-bg-visible');
			$(overlayIdToShow).addClass('overlay-visible');
		    return false;

});

$( ".overlay-close, #overlayBg" ).click(function() {

    "use strict";

    $('#overlayBg').removeClass('overlay-bg-visible');
    $('.overlay-visible').removeClass('overlay-visible').removeClass('overlay-full');

    setTimeout(function(){
      $('.overlay').removeAttr("style");
    }, 750);


    return false;

});

$( ".drag-options a" ).click(function() {

    "use strict";

    return false;

});

$( ".yes-no-list li" ).click(function() {

    "use strict";

    if($(this).find('.onoffswitch-checkbox').is(':checked')) {
        $(this).find('.onoffswitch-checkbox').prop('checked', false);
    } else {
        $(this).find('.onoffswitch-checkbox').prop('checked', true);
    }
    validateCheckboxes();



});

function showOverlay(href) {


            "use strict";

			var overlayIdToShow = href;

			var windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            scrollTop = $(window).scrollTop(),
            smallWindowWidth;

			if(windowWidth < 600) {
				smallWindowWidth = true;
			}

			var overlayWidth = $(overlayIdToShow).outerWidth();
			var overlayHeight = $(overlayIdToShow).outerHeight();
			var overlayHeightTopMargin = overlayHeight/2;
			var overlayHeightLeftMargin = overlayWidth/2;

			if(smallWindowWidth && (overlayHeight > windowHeight || overlayWidth > windowWidth )) {
				$(overlayIdToShow).addClass('overlay-full');
			} else if(overlayHeight > windowHeight) {
				$(overlayIdToShow).css('position', 'absolute').css('top', scrollTop + 20 + 'px').css('margin-top', 0).css('margin-left', '-' + overlayHeightLeftMargin + 'px');
			} else {
				$(overlayIdToShow).css('margin-top', '-' + overlayHeightTopMargin + 'px').css('margin-left', '-' + overlayHeightLeftMargin + 'px');
			}

			$('#overlayBg').addClass('overlay-bg-visible');
			$(overlayIdToShow).addClass('overlay-visible');
		    return false;

}
