var currentStep = 1,
    errorMessage = [];


$('.management-game-buttons a').click(function() {

    "use strict";
    $('#errorMessage').html(' ').hide();
    var answer = $(this).data('value');
    
    $('#scrollTrigger').click();
    
    if(answer === currentStep) {
    
        $(this).addClass('disabled');
        
        $('.management-game').removeClass('management-game--question-'+currentStep);
        currentStep++;
        
        if(currentStep <= 11) {
            $('.management-game').addClass('management-game--question-'+currentStep);
        } else {
            oBadges.stepCompleted();
            $('.management-game').addClass('management-game--question-11');
            window.location = '/teamwork/success';
        }
        
    } else {
        
        $('#errorMessage').html(errorMessage[currentStep]).show();
        
    }
    
    
    return false;
});

errorMessage[1] = "That's not right. We're saying here what we want to achieve in the project.";
errorMessage[2] = "Hmmm. That's not right. We're outlining what we need to do to meet the goals before we start the project.";
errorMessage[3] = "That's the wrong answer. Here we're saying how the team should communicate with each other to ensure a smooth project.";
errorMessage[4] = "Hmmm. That's not right. It's important that everyone knows their own responsibilities in the project.";
errorMessage[5] = "That's not right. We need to check that the key people in the project, both in our team and the client, agree with what we're planning";
errorMessage[6] = "Have another go. It's important that we base our time estimates on experience and what we know, rather than hoping for the best.";
errorMessage[7] = "Try again. These are the important dates in the project that mark the completion of a significant phase.";
errorMessage[8] = "Have another go. We're trying to identify anything that may cause issues in the project.";
errorMessage[9] = "That's the wrong answer. We're being very specific about what will be delivered when and by whom.";
errorMessage[10] = "Try again. What do we need when a project is completed?";

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    "use strict";
    // On-page links
    if (
      location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname
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
          }
        });
      }
    }
  });
