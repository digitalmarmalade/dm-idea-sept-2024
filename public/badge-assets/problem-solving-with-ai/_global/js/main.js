function is_touch_device() {
    "use strict";
  return 'ontouchstart' in window || navigator.maxTouchPoints;
}

$(function() {
    "use strict";
  if(is_touch_device()) {
    $('body').addClass('touch');
  } else {
  	$('body').addClass('no-touch');
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


function highlightSteps(){
	var steps = $('.jsSteps').find('li');

	steps.each(function(index){
		if(index < badgeStep){
			$(this).addClass('completed');
		}
	});
}

highlightSteps();