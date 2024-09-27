$(function () {

  var setUp = function () {
    $('.question-box').hide();
    $('.question-box-1').show();
    $('.feedback').hide();
  };

  var setUp_2 = function () {
    $('.question-box').hide();
    $('.question-box-2').show();
    $('.feedback').hide();
  };


  checkAnswers1 = function () {
    var rightAnswers = $('.selected[data-value="true"]').length;
    var allSelected = $('.selected').length;

    if (rightAnswers === 1 && rightAnswers === allSelected) {
        $('.feedback-success-1').show();
        $('.btn-check').hide();
        $('.btn-continue').hide();
        $('html, body').animate({
            scrollTop: $(".feedback-success-1").offset().top
        }, 2000);
        $('.btn-next').on('click', function () {
          $('.question-box-1').fadeOut();
          $('.feedback').fadeOut();
          $('.question-box-2').fadeIn();
        });
    } else {
        $('.feedback-fail-1').slideDown();
        $('.check-answers').hide();
        $('html, body').animate({
            scrollTop: $(".feedback-fail-1").offset().top
        }, 2000);
    }
  };

  checkAnswers2 = function () {
    var rightAnswers = $('.question-box-2 .selected[data-value="true"]').length;
    var allSelected = $('.question-box-2 .selected').length;

    if (rightAnswers === 2 && rightAnswers === allSelected) {
        $('.feedback-success-2').show();
        $('.btn-check').hide();
        $('.btn-next').hide();
        $('.btn-continue').show();
        $('html, body').animate({
            scrollTop: $(".feedback-success-2").offset().top
        }, 2000);
    } else {
        $('.feedback-fail-2').slideDown();
        $('.check-answers').hide();
        $('html, body').animate({
            scrollTop: $(".feedback-fail-2").offset().top
        }, 2000);
    }
  };

    setUp();

    $('.check-answers-1').on('click', function () {
        checkAnswers1();
    });
    $('.check-answers-2').on('click', function () {
        checkAnswers2();
    });

    $('.question-box li').on('click', function (e) {
        e.preventDefault();
        if ($(this).data('value') === true) {
            $(this).toggleClass('selected');
        } else {
            $(this).toggleClass('selected');
        }

    });

    $('.btn-try-again-1').on('click', function () {
        $('.feedback').hide();
        $('.question-box li').removeClass('selected');
        $('.check-answers').fadeIn();
        setUp();
    });

    $('.btn-try-again-2').on('click', function () {
        $('.feedback').hide();
        $('.question-box li').removeClass('selected');
        $('.check-answers').fadeIn();
        setUp2();
    });



});
