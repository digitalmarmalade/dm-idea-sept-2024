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


// Reveal the next activity on the page.
$('.jsShowNextActivity').on('click', function(e){

	e.preventDefault();

	var $nextSection = $(this).parents('section').nextAll('.activity').eq(0);

	$nextSection.removeClass('hide');

      if ($nextSection.length) {
        $('html,body').animate({
          scrollTop: $nextSection.offset().top
        }, 1000);
      }
})

function highlightSteps(){
	var steps = $('.jsSteps').find('li');

	steps.each(function(index){
		if(index < badgeStep){
			$(this).addClass('completed');
		}
	});
}

highlightSteps();