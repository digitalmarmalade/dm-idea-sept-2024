$(function () {

  $('#question-1 li').on('click', function () {
    $('#question-1 .question-options').fadeOut();
    $('#question-1 .question-feedback').removeClass('hide');
    $('#question-1 .next-question-1').on('click', function () {
      $('#question-1').toggleClass('hide');
      $('#question-2').toggleClass('hide');
    });
  });

  $('#question-2 li').on('click', function () {
    $('#question-2 .question-options').fadeOut();
    $('#question-2 .question-feedback').removeClass('hide');
    $('#question-2 .next-question-2').on('click', function () {
      $('#question-2').toggleClass('hide');
      $('#question-3').toggleClass('hide');
    });
  });

  $('#question-3 li').on('click', function () {
    $('#question-3 .question-options').fadeOut();
    $('#question-3 .question-feedback').removeClass('hide');
    $('#question-3 .next-question-3').on('click', function () {
      $('#question-3').toggleClass('hide');
      $('#question-4').toggleClass('hide');
    });
  });

  $('#question-4 li').on('click', function () {
    $('#question-4 .question-options').fadeOut();
    $('#question-4 .question-feedback').removeClass('hide');
    $('#continue').toggleClass('hide');
    $('html, body').animate({
        scrollTop: $("#continue").offset().top
    }, 2000);
  });



});
