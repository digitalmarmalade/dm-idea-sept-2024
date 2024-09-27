$(function () {
  $('.question').hide();
  $('.question-1').show();
  $('.task-3-feedback').hide();

  $('.question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-1 .feedback-success').slideDown();
      $('.btn-next-1').on('click', function () {
        $('.question-1').fadeOut('fast');
        $(".question-2").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-1 .feedback-fail').slideDown();
      $('.btn-try-again-1').on('click', function () {
        $('.question-1 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-2 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-2 .feedback-success').slideDown();
      $('.btn-try-again-2').on('click', function () {
        $('.question-2 .feedback-success').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-2 .feedback-fail').slideDown();
      $('.btn-next-2').on('click', function () {
        $('.question-2').fadeOut('fast');
        $(".question-3").fadeIn();
      });
    }
  });

  $('.question-3 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-3 .feedback-success').slideDown();
      $('.btn-next-3').on('click', function () {
        $('.question-3').fadeOut('fast');
        $(".question-4").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-3 .feedback-fail').slideDown();
      $('.btn-try-again-3').on('click', function () {
        $('.question-3 .feedback-fail').slideUp();
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-4 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-4 .feedback-success').slideDown();
      $('.btn-next-4').on('click', function () {
        $('.question-4').fadeOut('fast');
        $(".question-5").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-4 .feedback-fail').slideDown();
      $('.btn-try-again-4').on('click', function () {
        $('.question-4 .feedback-fail').slideUp();
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-5 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-5 .feedback-success').slideDown();
      $('.btn-try-again-5').on('click', function () {
        $('.question-5 .feedback-success').slideUp();
                $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-5 .feedback-fail').slideDown();
      $('.btn-next-5').on('click', function () {
        $('.question-5').fadeOut('fast');
        $(".question-6").fadeIn();
      });
    }
  });

  $('.question-6 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-6 .feedback-success').slideDown();
      $('.btn-try-again-6').on('click', function () {
        $('.question-6 .feedback-success').slideUp();
              $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-6 .feedback-fail').slideDown();
      $('.btn-next-6').on('click', function () {
        $('.question-6').fadeOut('fast');
        $(".question-7").fadeIn();
      });
    }
  });

  $('.question-7 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-7 .feedback-success').slideDown();
      $('.btn-next-7').on('click', function () {
        $('.question-7').fadeOut('fast');
        $(".question-8").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-7 .feedback-fail').slideDown();
      $('.btn-try-again-7').on('click', function () {
        $('.question-7 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-8 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-8 .feedback-success').slideDown();
      $('.btn-try-again-8').on('click', function () {
        $('.question-8 .feedback-success').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-8 .feedback-fail').slideDown();
      $('.btn-next-8').on('click', function () {
        $('.question-8').fadeOut('fast');
        $(".question-9").fadeIn();
      });
    }
  });

  $('.question-9 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-9 .feedback-success').slideDown();
      $('.btn-try-again-9').on('click', function () {
        $('.question-9 .feedback-success').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-9 .feedback-fail').slideDown();
      $('.btn-next-9').on('click', function () {
        $('.question-9').fadeOut('fast');
        $(".question-10").fadeIn();
      });
    }
  });


  $('.question-10 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-10 .feedback-success').slideDown();
      $('.btn-next-10').on('click', function () {
        $('.question-10').fadeOut('fast');
        $(".question-11").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-10 .feedback-fail').slideDown();
      $('.btn-try-again-10').on('click', function () {
        $('.question-10 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-11 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-11 .feedback-success').slideDown();
      $('.btn-next-11').on('click', function () {
        $('.question-11').fadeOut('fast');
        $(".question-12").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-11 .feedback-fail').slideDown();
      $('.btn-try-again-11').on('click', function () {
        $('.question-11 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-12 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-12 .feedback-success').slideDown();
      $('.btn-next-12').on('click', function () {
        $('.question-12').fadeOut('fast');
        $(".question-13").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-12 .feedback-fail').slideDown();
      $('.btn-try-again-12').on('click', function () {
        $('.question-12 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-13 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-13 .feedback-success').slideDown();
      $('.btn-try-again-13').on('click', function () {
        $('.question-13 .feedback-success').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-13 .feedback-fail').slideDown();
      $('.btn-next-13').on('click', function () {
        $('.question-13').fadeOut('fast');
        $(".question-14").fadeIn();
      });
    }
  });

  $('.question-14 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-14 .feedback-success').slideDown();
      $('.btn-try-again-14').on('click', function () {
        $('.question-14 .feedback-success').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-14 .feedback-fail').slideDown();
      $('.btn-next-14').on('click', function () {
        $('.question-14').fadeOut('fast');
        $(".question-15").fadeIn();
      });
    }
  });

  $('.question-15 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("wrong-answer");
      $('.question-15 .feedback-success').slideDown();
      $('.btn-try-again-15').on('click', function () {
        $('.question-15 .feedback-success').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });

    }
    else {
      $('.question-15 .feedback-fail').slideDown();
      $('.btn-next-15').on('click', function () {
        $('.task').fadeOut('fast');
        $(".well-done").fadeIn();
      });
    }
  });



});
