$(function () {

    var setUp = function () {
      $('.feedback').hide();
    },

    checkTrueFalse = function () {
      $('.check-answers').hide();
      var rightAnswers = $('.selected[data-value="1"], .selected[data-value="4"], .selected[data-value="5"]').length;
      var allSelected = $('.selected').length;
      if (rightAnswers === 3 && rightAnswers === allSelected) {
          $('.feedback-success').slideDown();
          $('html, body').animate({
              scrollTop: $(".feedback-success").offset().top
          }, 2000);
      } else {
          $('.feedback-fail').slideDown();
          $('html, body').animate({
              scrollTop: $(".feedback-fail").offset().top
          }, 2000);
      }
    };

    setUp();

    $('.check-answers').on('click', function () {
        checkTrueFalse();
    });

    $('.task-5 li a').on('click', function (e) {
      e.preventDefault();
      $(this).addClass('selected').siblings().removeClass('selected');
      if (
        $(this).data('value') === 1
        ||
        $(this).data('value') === 4
        ||
        $(this).data('value') === 5
        ) {
      $(this).toggleClass('selected-right');
      } else {
          $(this).toggleClass('selected-wrong');
      }
    });

    $('.btn-try-again').on('click', function () {
        $('.check-answers').show();
        $('.feedback').hide();
        $('.task-5 li a').removeClass('selected');
        setUp();
    });
});
