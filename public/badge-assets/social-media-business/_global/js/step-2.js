$(function () {

    // var setUp = function () {
        $('.feedback').hide();
        $('.question').hide();
        $('.question-1').show();
    // },

    $('.question-1 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        $('.question-1 li').css("pointer-events", "none");
    });

    $('.question-2 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        $('.question-2 li').css("pointer-events", "none");
    });

    $('.question-3 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        $('.question-3 li').css("pointer-events", "none");
    });

    $('.question-4 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.task li.selected').length === 5) {
          $('.question-4 li').css("pointer-events", "none");
        } else {
            $('.question-4li').css("pointer-events", "auto");
        }
    });

    $('.question-5 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.task li.selected').length === 2) {
          $('.question-5 li').css("pointer-events", "none");
        } else {
            $('.question-5 li').css("pointer-events", "auto");
        }
    });

    $('.question-6 li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.task li.selected').length === 2) {
          $('.question-6 li').css("pointer-events", "none");
        } else {
            $('.question-6 li').css("pointer-events", "auto");
        }
    });


 var checkAnswers = function (quizNum, numOfAnswers) {
      if(numOfAnswers !== null){

        var rightAnswers = $('.selected[data-value="true"]').length;
        var allSelected = $('.selected').length;

        if (rightAnswers === numOfAnswers && rightAnswers === allSelected) {
            $('.feedback-success').slideDown();
            $('.btn-check').hide();
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

    $('.btn-check-1').on('click', function () {
        checkAnswers(1,1);
    });
    $('.btn-check-2').on('click', function () {
        checkAnswers(2,1);
    });
    $('.btn-check-3').on('click', function () {
        checkAnswers(3,1);
    });
    $('.btn-check-4').on('click', function () {
        checkAnswers(4,5);
    });
    $('.btn-check-5').on('click', function () {
        checkAnswers(5,2);
    });

    $('.btn-check-6').on('click', function () {
        checkAnswers(6,2);
    });


});
