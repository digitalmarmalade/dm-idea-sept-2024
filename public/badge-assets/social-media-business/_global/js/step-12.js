$(function () {

    // var setUp = function () {
        $('.feedback').hide();
        $('.question').hide();
        $('.question-1').show();
    // },

    $('.question-1 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.question-1 li.selected').length === 1) {
          $('.question-1 li').css("pointer-events", "none");
        } else {
            $('.question-1 li').css("pointer-events", "auto");
        }
    });

    $('.question-2 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.question-2 li.selected').length === 1) {
          $('.question-2 li').css("pointer-events", "none");
        } else {
            $('.question-2 li').css("pointer-events", "auto");
        }
    });

    $('.question-3 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.question-3 li.selected').length === 5) {
          $('.question li').css("pointer-events", "none");
        } else {
            $('.question li').css("pointer-events", "auto");
        }
    });


 var checkAnswers = function (quizNum, numOfAnswers) {
      if(numOfAnswers !== null){

        var rightAnswers = $('.selected[data-value="true"]').length;
        var allSelected = $('.selected').length;

        if (rightAnswers === numOfAnswers && rightAnswers === allSelected) {
            $('.feedback-success').slideDown();
            $('.btn-check').hide();
            $('html, body').animate({
                scrollTop: $(".feedback-success").offset().top
            }, 2000);
              $('.btn-next').on('click', function () {

                  $('.question-'+quizNum).hide();
                  $('.question-'+(quizNum+1)).show();
                  $('.question-'+quizNum+' li').removeClass('selected');
                  $('.feedback').hide();
                  $('.btn-check').show();
                  $('.question li').css("pointer-events", "auto");

              });
        } else {
            $('.feedback-fail').slideDown();
            $('.btn-check').hide();
            $('html, body').animate({
                scrollTop: $(".feedback-fail").offset().top
            }, 2000);
            $('.btn-try-again').on('click', function () {
                // e.preventDefault();
                $('.feedback').hide();
                $('.btn-check').fadeIn();
                $('.question-'+quizNum+' li').removeClass('selected');
                $('.question li').css("pointer-events", "auto");
            });
        }

      }else{
        console.log('No number of answers provided');
      }


    };

    // setUp();
    $('.btn-check-1').on('click', function () {
        checkAnswers(1,1);
    });
    $('.btn-check-2').on('click', function () {
        checkAnswers(2,1);
    });
    $('.btn-check-3').on('click', function () {
        checkAnswers(3,5);
    });





});
