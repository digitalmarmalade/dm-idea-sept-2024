$(function () {
    var rightAnswers = 0,
        wrongAnswers = 0,
        currentQuestion = 1;


    $(".quiz-options:not('.disabled') a").click(function () {
        var answer = $(this).data('answer');
        var question = $(this).parents('ul').parent().attr('id');

        $('.js-whoops').addClass('hide');
        if (answer === true) {
          $(this).addClass('selected-right');
          $(this).closest('.quiz-question').find('li a').addClass('avoid-clicks');
          $(this).closest('.quiz-question').find('li').addClass('avoid-clicks');
          $(this).closest('.quiz-question').find('.js-error').addClass('hide');
          var thisQuestionRightAnswers = 0,
              requiredRightAnswers = 1;
              if($('.jsQuestion' + currentQuestion).attr('data-requiredrightanswers')) {
                requiredRightAnswers = $('.jsQuestion' + currentQuestion).data('requiredrightanswers');
              } else {
                requiredRightAnswers = 1;
              }
              $('.jsQuestion' + currentQuestion + ' .selected-right').each(function( index ) {
                thisQuestionRightAnswers++;
                  $('html, body').animate({scrollTop:$(document).height()}, 'slow');
              });
              if(thisQuestionRightAnswers == requiredRightAnswers) {
                rightAnswers++;
                $('.jsQuestion' + currentQuestion).addClass('disabled');
                currentQuestion++;
                if(currentQuestion == 6) {
                  $('.jsNextStep').removeClass('hide');

                } else {
                $('#question' + currentQuestion).show();
                $('#question' + currentQuestion).css('display','flex');

                $('.question-number').addClass('animated fadeInLeft');
                $('.quiz-the-question').addClass('animated zoomIn');
                $('li').addClass('animated zoomIn');
                }
              } else {
                return false;
              }
        } else {
            $(this).addClass('selected-wrong');
            $(this).closest('.quiz-question').find('.js-error').removeClass('hide');
            wrongAnswers++;
            if (wrongAnswers == 2) {
                rightAnswers = 0;
                wrongAnswers = 0;
                currentQuestion = 1;
                $('.js-error').addClass('hide');
                $('.quiz-question').hide();
                $('.quiz-question-1').show();
                $('.selected-right').removeClass('selected-right');
                $('.selected-wrong').removeClass('selected-wrong');
                $('.js-whoops').removeClass('hide');
                $('.quiz-question').find('li a').removeClass('avoid-clicks');
                $('.quiz-question').find('li').removeClass('avoid-clicks');
                $('.quiz-question').removeClass('disabled');
            }
            return false;
        }


    }
    );

});
