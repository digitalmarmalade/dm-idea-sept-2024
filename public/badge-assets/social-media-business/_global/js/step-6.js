$(function () {

    // var setUp = function () {
        $('.feedback').hide();
        $('.question').hide();
        $('.question-1').show();
    // },

    $('.question-1 li').find('a').on('click', function (e) {
        e.preventDefault();
          $(this).toggleClass('selected');
          if ($('.question-1 li a.selected').length === 2) {
            $('.question-1 li a').css("pointer-events", "none");
          } else {
              $('.question-1 li a').css("pointer-events", "auto");
          }
    });

    $('.question-2 li').find('a').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.question-2 li a.selected').length === 3) {
          $('.question-2 li a').css("pointer-events", "none");
        } else {
            $('.question-2 li a').css("pointer-events", "auto");
        }
    });


 var checkAnswers = function (quizNum, numOfAnswers) {
      if(numOfAnswers !== null){

        var rightAnswers = $('.selected[data-value="true"]').length;
        var allSelected = $('.selected').length;

        if (rightAnswers === numOfAnswers && rightAnswers === allSelected) {
            $('.feedback-success').slideDown();
            $('.btn-check').hide();
            // $('html, body').animate({
            //     scrollTop: $(".feedback-success").offset().top
            // }, 2000);
              $('.btn-next').on('click', function () {

                  $('.question-'+quizNum).hide();
                  $('.question-'+(quizNum+1)).show();
                  $('.question-'+quizNum+' li a').removeClass('selected');
                  $('.feedback').hide();
                  $('.btn-check').show();

              });
        } else {
            $('.feedback-fail').slideDown();
            $('.btn-check').hide();
            // $('html, body').animate({
            //     scrollTop: $(".feedback-fail").offset().top
            // }, 2000);
            $('.btn-try-again').on('click', function () {
                // e.preventDefault();
                $('.feedback').hide();
                $('.btn-check').fadeIn();
                $('.question-'+quizNum+' li a').removeClass('selected');
                $('.question-'+quizNum+' li a').css("pointer-events", "auto");
            });
        }

      }else{

      }


    };

    // setUp();
    $('.btn-check-1').on('click', function () {
        checkAnswers(1,2);
    });
    $('.btn-check-2').on('click', function () {
        checkAnswers(2,3);
    });



});


$(function () {

    var setUp = function () {
        $('.feedback').hide();
    },
            checkTrueFalse = function () {
                $('.btn-check').hide();
                var rightAnswers = $('.selected[data-value="2"], .selected[data-value="3"], .selected[data-value="5"], .selected[data-value="8"]').length;
                var allSelected = $('.selected').length;
                if (rightAnswers === 4 && rightAnswers === allSelected) {
                    $('.feedback-success').show();
                    $('.feedback-fail').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-success").offset().top
                    }, 2000);
                } else {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                }
            };

    setUp();

    $('.btn-check-3').on('click', function () {
        checkTrueFalse();
    });

    $('.task-true-false li span').find('span').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('selected').siblings('span').removeClass('selected');
        if (
                $(this).data('value') === 2
                ||
                $(this).data('value') === 3
                ||
                $(this).data('value') === 5
                ||
                $(this).data('value') === 8
                ) {
            $(this).toggleClass('selected-right');
        } else {
            $(this).toggleClass('selected-wrong');
        }

    });
    $('.btn-try-again').on('click', function () {
        $('.btn-check').show();
        $('.feedback').hide();
        $('.task-true-false li span').find('span').removeClass('selected');
        $('.task-true-false li span').find('span').removeClass('selected-right');
        $('.task-true-false li span').find('span').removeClass('selected-wrong');
        setUp();
    });
});
