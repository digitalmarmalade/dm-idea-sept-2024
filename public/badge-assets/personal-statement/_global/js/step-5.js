$(function () {
  $('.question').hide();
  $('.question-1').show();
  $('.task-4-feedback').hide();

  $('.question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-fail-1').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-1').on('click', function () {
        $('.feedback-fail-1').fadeOut('fast');
        $('.question-1').fadeOut('fast');
        $(".question-2").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $('.feedback-success-1').slideDown();
        $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-1').on('click', function () {
        $('.feedback-success-1').fadeOut();
      });
    }
  });

  $('.question-2 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-success-2').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-2').on('click', function () {
        $('.feedback-success-2').fadeOut('fast');
        $('.question-2').fadeOut('fast');
        $(".question-3").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $(' .feedback-fail-2').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again').on('click', function () {
        $('.feedback-fail-2').fadeOut();
      });
    }
  });

  $('.question-3 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-success-3').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-3').on('click', function () {
        $('.feedback-success-3').fadeOut('fast');
        $('.question-3').fadeOut('fast');
        $(".question-4").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $('.feedback-fail-3').slideDown();
        $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-3').on('click', function () {
        $('.feedback-fail-3').fadeOut();
      });
    }
  });

  $('.question-4 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-fail-4').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-4').on('click', function () {
        $('.feedback-fail-4').fadeOut('fast');
        $('.question-4').fadeOut('fast');
        $(".question-5").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $('.feedback-success-4').slideDown();
        $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-4').on('click', function () {
        $('.feedback-success-4').fadeOut();
      });
    }
  });

  $('.question-5 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-fail-5').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-5').on('click', function () {
        $('.feedback-fail-5').fadeOut('fast');
        $('.question-5').fadeOut('fast');
        $(".question-6").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $('.feedback-success-5').slideDown();
        $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-5').on('click', function () {
        $('.feedback-success-5').fadeOut();
      });
    }
  });

  $('.question-6 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-fail-6').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-6').on('click', function () {
        $('.feedback-fail-6').fadeOut('fast');
        $('.question-6').fadeOut('fast');
        $(".question-7").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $('.feedback-success-6').slideDown();
        $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-6').on('click', function () {
        $('.feedback-success-6').fadeOut();
      });
    }
  });

  $('.question-7 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-success-7').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-7').on('click', function () {
        $('.feedback-success-7').fadeOut('fast');
        $('.question-7').fadeOut('fast');
        $(".question-8").fadeIn();
      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $(' .feedback-fail-7').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again').on('click', function () {
        $('.feedback-fail-7').fadeOut();
      });
    }
  });

  $('.question-8 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.feedback-success-8').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-8').on('click', function () {
        $('.feedback-success-8').fadeOut('fast');

      });
    }
    else {
      // $(this).addClass("wrong-answer");
      $(' .feedback-fail-8').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again').on('click', function () {
        $('.feedback-fail-8').fadeOut();
      });
    }
  });

});
