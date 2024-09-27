var currentStep = 1,
    chosenRole1,
    chosenRole2,
    chosenRole3,
    chosenRole1Title,
    chosenRole2Title,
    chosenRole3Title,
    selectedRole1Title = localStorage.getItem('selectTeamRole1'),
    selectedRole2Title = localStorage.getItem('selectTeamRole2'),
    selectedRole3Title = localStorage.getItem('selectTeamRole3'),
    successMessage,
    correctAnswers = 0,
    roles = {};
    roles.im = 0;
    roles.co = 0;
    roles.sh = 0;
    roles.pl = 0;
    roles.ri = 0;
    roles.me = 0;
    roles.tw = 0;
    roles.cf = 0;

$('.belbin-quiz-question input').change(function() {

    "use strict";

    $('.belbin-quiz').removeClass('belbin-quiz--question-'+currentStep);
    var chosenAnswer = $(this).data('role');
    roles[chosenAnswer]++;
    currentStep++;
    if(currentStep <= 7) {
        $('.belbin-quiz').addClass('belbin-quiz--question-'+currentStep);
        window.location.hash = '#'+currentStep;
    } else {
        
        var sortRoles = [
        { name: "implementer", value: roles.im },
        { name: "coordinator", value: roles.co },
        { name: "shaper", value: roles.sh  },
        { name: "plant", value: roles.pl  },
        { name: "resourceInvestigator", value: roles.ri  },
        { name: "monitorEvaluator", value: roles.me  },
        { name: "teamWorker", value: roles.tw  },
        { name: "completerFinisher", value: roles.cf  }
        ].sort(function(obj1, obj2) {
            return obj2.value - obj1.value;
        });
        
        $('.belbin-quiz-progress').hide();
        
        $('.belbin-quiz-final-screen').addClass('visible');
        chosenRole1 = $('#'+sortRoles[0].name).html();
        $('#chosenRole1').html(chosenRole1);
        chosenRole1Title = $('#'+sortRoles[0].name).find('h2').html();
        $('#belbinRole1').html(chosenRole1Title);
        
        chosenRole2 = $('#'+sortRoles[1].name).html();
        $('#chosenRole2').html(chosenRole2);
        chosenRole2Title = $('#'+sortRoles[1].name).find('h2').html();
        $('#belbinRole2').html(chosenRole2Title);
        
        chosenRole3 = $('#'+sortRoles[2].name).html();
        $('#chosenRole3').html(chosenRole3);
        chosenRole3Title = $('#'+sortRoles[2].name).find('h2').html();
        $('#belbinRole3').html(chosenRole3Title);
        
        $('#selectedRole1').html(selectedRole1Title);
        $('#selectedRole2').html(selectedRole2Title);
        $('#selectedRole3').html(selectedRole3Title);
        
        if(selectedRole1Title === chosenRole1Title || selectedRole1Title === chosenRole2Title || selectedRole1Title === chosenRole3Title) {
            correctAnswers++;
        }
        if(selectedRole2Title === chosenRole1Title || selectedRole2Title === chosenRole2Title || selectedRole2Title === chosenRole3Title) {
            correctAnswers++;
        }
        if(selectedRole3Title === chosenRole1Title || selectedRole3Title === chosenRole2Title || selectedRole3Title === chosenRole3Title) {
            correctAnswers++;
        }
        if(correctAnswers === 0) {
            successMessage = 'No matches - You clearly have some skills you didn\'t know you had!';
        } else if(correctAnswers === 1) {
            successMessage = 'You correctly predicted one of the roles. Well done!';
        } else if(correctAnswers === 2) {
            successMessage = 'You correctly predicted two of the roles. Well done!';
        } else if(correctAnswers === 3) {
            successMessage = 'You certainly know your strengths and weaknesses! Well done!';
        }
        $('#successMessage').html(successMessage);
        oBadges.stepCompleted();
        
        $('#outcome').show();
 
    }
    
    $('#scrollTrigger').click();
    
});

$(window).on('hashchange',function(){ 
    "use strict";
    var hash = location.hash.slice(1);
    if(currentStep !== hash && (hash >= 1 && hash <= 7)) {
        $('.belbin-quiz').removeClass('belbin-quiz--question-'+currentStep);
        currentStep=location.hash.slice(1);
        $('.belbin-quiz').addClass('belbin-quiz--question-'+currentStep);
    }
});

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