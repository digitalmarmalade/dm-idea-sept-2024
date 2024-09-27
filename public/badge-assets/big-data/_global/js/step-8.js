$(function () {
  $('.question').hide();
  $('.question-1').show();
  $('.task-4 .feedback').hide();

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




});
