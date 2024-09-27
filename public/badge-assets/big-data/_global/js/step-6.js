$(function () {
  $('.question').hide();
  $('.question-1').show();
  $('.task-3 .feedback').hide();

  $('.question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $("html, body").animate({scrollTop: $(document).height()});
      $('.question-1 .feedback-success').slideDown();
      $('.btn-next-1').on('click', function () {
        $('.question-1').fadeOut('fast');
        $(".question-2").fadeIn();
        $('.question-bg-left').addClass('animated fadeInLeft');
        $('.question-bg-right').addClass('animated fadeInRight');
        $('.question-number').addClass('animated zoomIn');
        $('.holder img').addClass('animated zoomIn');
        $('p').addClass('animated fadeInUp');
        $('li').addClass('animated zoomIn');
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-1 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
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
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-2').on('click', function () {
        $('.question-2').fadeOut('fast');
        $(".question-3").fadeIn();
      });


    }
    else {
      $('.question-2 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-2').on('click', function () {
        $('.question-2 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-3 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-3 .feedback-success').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-3').on('click', function () {
        $('.question-3').fadeOut('fast');
        $(".question-4").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-3 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
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
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-4').on('click', function () {
        $('.question-4').fadeOut('fast');
        $(".question-5").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-4 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
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
      $('.question-5 .feedback-success').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-5').on('click', function () {
        $('.question-5').fadeOut('fast');
        $(".question-6").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-5 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-5').on('click', function () {
        $('.question-5 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.question-6 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-6 .feedback-success').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-6').on('click', function () {
        $('.question-6').fadeOut('fast');
        $(".question-7").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-6 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-6').on('click', function () {
        $('.question-6 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });


  $('.question-7 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.question-7 .feedback-success').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-next-7').on('click', function () {
        $('.question-7').fadeOut('fast');
        $(".question-8").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-7 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
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
      $('.question-8 .feedback-success').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
    }
    else {
      $(this).addClass("wrong-answer");
      $('.question-8 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-8').on('click', function () {
        $('.question-8 .feedback-fail').slideUp();
        $('.question li').removeClass('avoid-clicks');
      });
    }
  });


});
