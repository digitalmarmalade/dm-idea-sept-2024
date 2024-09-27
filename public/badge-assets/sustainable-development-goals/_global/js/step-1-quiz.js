$(function () {
    var rightAnswers = 0,
        wrongAnswers = 0,
        currentQuestion = 1;

    var $quizPanel = $('.quiz');
    var $feedbackPanel = $('.quiz-feedback');
    var totalQuestions = $('.quiz-questions .quiz-question').length;

    function resetQuiz(){
      $feedbackPanel.addClass('hidden');
      $feedbackPanel.find('.quiz-correct').addClass('hide');
      $feedbackPanel.find('.quiz-incorrect').addClass('hide');

      $quizPanel.find('.btn-correct').removeClass('btn-correct');
      $quizPanel.find('.btn-incorrect').removeClass('btn-incorrect');

      $feedbackPanel.removeClass('correct');
      $feedbackPanel.removeClass('incorrect');
    }

    $('.quiz-question').each(function( index ) {
        var idx = index + 1;
        $(this).find('.quiz-step').text(idx + '/' + totalQuestions);
    });

    $(".jsQuizNext").click(function (e) {

        e.preventDefault();

        resetQuiz();

        var activeQuestion = $('.quiz-question.active').index();

        $('.quiz-question').eq(activeQuestion).addClass('hide').removeClass('active');
        $('.quiz-question').eq(activeQuestion + 1).removeClass('hide').addClass('active');

        var $thisSection =  $(this).closest('section');

        $("html, body").stop().delay(500).animate({
          scrollTop: $thisSection.offset().top
        }, 500);


      //  $('.quiz-question').eq(activeQuestion - 1).addClass('hide').removeClass('active');
      //  $('.quiz-question').eq(activeQuestion).removeClass('hide').addClass('active');

    });

    $(".quiz-options a:not('.disabled')").click(function (e) {

        e.preventDefault();

        var answer = $(this).data('answer');
        var question = $(this).parents('ul').parent().attr('id');

        if(!$(this).hasClass('disabled')){

          resetQuiz();

          if (answer === true) {
            
            var thisQuestionRightAnswers = 0,
                requiredRightAnswers = 1;

            var currentQ = $('.quiz-question.active').index() + 1;

                if($('.jsQuestion' + currentQuestion).attr('data-requiredrightanswers')) {
                  requiredRightAnswers = $('.jsQuestion' + currentQuestion).data('requiredrightanswers');
                } else {
                  requiredRightAnswers = 1;
                }


                $('.jsQuestion' + currentQuestion + ' .selected-right').each(function( index ) {
                    thisQuestionRightAnswers++;
                });

                $feedbackPanel.removeClass('hidden');
                $feedbackPanel.addClass('correct');

             //   $("html, body").animate({scrollTop: $(document).height()});

                if(currentQ === totalQuestions) {
                
                  $feedbackPanel.find('.quiz-correct-next').removeClass('hide');
                  $(this).parents('.quiz-options').find('a').addClass('disabled');
                  $(this).addClass('btn-correct');

                } else {
                  
                  $feedbackPanel.find('.quiz-correct').removeClass('hide');
                  $(this).parents('.quiz-options').find('a').addClass('disabled');
                  $(this).addClass('btn-correct');
                }

                // $('html, body').animate({
                //     scrollTop: $(this).closest('section').next().offset().top
                // }, 800);

                $("html, body").animate({scrollTop: $(document).height()});

              return false;

          } else {

            $("html, body").animate({scrollTop: $(document).height()});

            $feedbackPanel.removeClass('hidden').addClass('incorrect');
            $feedbackPanel.find('.quiz-incorrect').removeClass('hide');

            $(this).addClass('btn-incorrect');
            return false;
          }
        }    
    });


    // SLIDER CONTINUE BUTTON
    $(".jsLetsContinue").on('click', function(e){

      e.preventDefault();

      $('.next-step').removeClass('hide');
      //  $("html, body").animate({scrollTop: $(document).height()});

      $('html, body').stop().animate({
          scrollTop: $(this).closest('section').next().offset().top
      }, 500);


    });

});