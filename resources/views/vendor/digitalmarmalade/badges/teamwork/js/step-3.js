var currentStep = 1,
    errorMessage = [],
    positiveMessage = [],
    morale = 40,
    moraleStatus,
    successMessage;


$('.morale-game-options a').click(function() {

    "use strict";
    
    var answer = $(this).data('value');
    $('.morale-game').removeClass('morale-game--question-'+currentStep);
        
    
    if(answer === 'y') {
        $('#feedbackHolder').show().addClass('right');
        $('#feedback').html(positiveMessage[currentStep]);
        console.log(morale);
        if(morale < 100) {
            morale += 20;
            if(morale > 100) { morale = 100; }
        }
        
        
    } else {
        
        $('#feedbackHolder').show().addClass('wrong');
        $('#feedback').html(errorMessage[currentStep]);
        console.log(morale);
        if(morale > 10) {
            morale -= 10;
            if(morale < 10) { morale = 10; }
        }
        
    }
    
    $('.morale-ometer').removeClass('low').removeClass('ok').removeClass('good').removeClass('excellent');
    if(morale < 20) {
        $('.morale-ometer').addClass('low');
    }
    if(morale >= 20 && morale < 40) {
        $('.morale-ometer').addClass('ok');
    }
    if(morale >= 40 && morale < 60) {
        $('.morale-ometer').addClass('good');
    }
    if(morale >= 60) {
        $('.morale-ometer').addClass('excellent');
    }
    $('#moraleBar').css('width',morale+'%');
    
    $('#scrollTrigger').click();
       
    return false;
});

$('.feedback-button').click(function() {

    "use strict";
    
    currentStep++;
        
    if(currentStep <= 6) {
        $('.morale-game').addClass('morale-game--question-'+currentStep);
        if(morale > 10) {
            morale -= 10;
            if(morale < 10) { morale = 10; }
        }
    } else {
        $('.morale-game-conclusion').show();
    }
    
    $('.morale-ometer').removeClass('low').removeClass('ok').removeClass('good').removeClass('excellent');
    if(morale < 20) {
        $('.morale-ometer').addClass('low');
        moraleStatus = "Low";
        successMessage = "You may need to work on your team management skills.";
    }
    if(morale >= 20 && morale < 40) {
        $('.morale-ometer').addClass('ok');
        moraleStatus = "OK";
        successMessage = "With a bit more work, you'll make a good team leader!";
    }
    if(morale >= 40 && morale < 60) {
        $('.morale-ometer').addClass('good');
        moraleStatus = "Good";
        successMessage = "With a little practice you'll make a good team leader!";
    }
    if(morale >= 60) {
        $('.morale-ometer').addClass('excellent');
        moraleStatus = "Excellent";
        successMessage = "You'll make a great team leader!";
    }
    oBadges.stepCompleted();
    $('#finalMorale').html(moraleStatus);
    $('#successMessage').html(successMessage);
    
    $('#moraleBar').css('width',morale+'%');
    
    
    $('#feedbackHolder').hide();
    $('#feedbackHolder').removeClass('right').removeClass('wrong');
    
    $('#scrollTrigger').click();
    
    return false;
    
});

errorMessage[1] = "Hmmm. Not quite. Showing <b>appreciation</b> of your team's efforts makes people feel good about the work they are doing.";
errorMessage[2] = "Are you sure that's the right option? Making people feel involved in the direction a project is taking gives a sense of <b>purpose</b> and ownership.";
errorMessage[3] = "Morale is dropping. A team supporting each other and helping out where possible helps give a feeling of <b>belonging</b>.";
errorMessage[4] = "Morale has taken a hit. Getting people involved and communicating with each other can help the feeling of <b>belonging</b>.";
errorMessage[5] = "You're a tough boss! <b>Enjoyment</b> is an important part of being in a team, and work/life balance is important.";
errorMessage[6] = "Maybe the other option would have been better. When people feel like they are developing, they feel a sense of <b>purpose</b>.";

positiveMessage[1] = "That's right. Showing <b>appreciation</b> of your team's efforts makes people feel good about the work they are doing.";
positiveMessage[2] = "Well done. Making people feel involved in the direction a project is taking gives a sense of <b>purpose</b> and ownership.";
positiveMessage[3] = "Nicely done. A team supporting each other and helping out where possible helps give a feeling of <b>belonging</b>.";
positiveMessage[4] = "Good. Getting people involved and communicating with each other can help the feeling of <b>belonging</b>.";
positiveMessage[5] = "Excellent. <b>Enjoyment</b> is an important part of being in a team, and work/life balance is important.";
positiveMessage[6] = "Well done. When people feel like they are developing, they feel a sense of <b>purpose</b>.";


// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });