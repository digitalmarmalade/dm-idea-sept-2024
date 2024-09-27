$(function () {
  $('.question-wrapper').hide();
  $('#question-1').show();
  $('.question-feedback').hide();

  $('#question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('#question-1 li').removeClass('selected');
    $(this).siblings('#question-1 li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.btn-check-1').hide();
      $("html, body").animate({scrollTop: $(document).height()});
      $('#question-1 .feedback-success').slideDown();
      $('.btn-next-1').on('click', function () {
        $('#question-1').hide();
        $("#question-2").show();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('#question-1 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-1').on('click', function () {
        $('#question-1 .feedback-fail').slideUp();
        $('#question-1 li').removeClass('avoid-clicks');

      });
    }
  });

  $('#question-2 li').on('click', function () {
    $(this).addClass('selected').siblings('#question-2 li').removeClass('selected');
    $(this).siblings('#question-2 li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.btn-check-2').hide();
      $("html, body").animate({scrollTop: $(document).height()});
      $('#question-2 .feedback-success').slideDown();
      $('.btn-next-2').on('click', function () {
        $('#question-2').hide();
        $("#question-3").show();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('#question-2 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-2').on('click', function () {
        $('#question-2 .feedback-fail').slideUp();
        $('#question-2 li').removeClass('avoid-clicks');
      });
    }
  });

  $('#question-3 li').on('click', function () {
    $(this).addClass('selected').siblings('#question-3 li').removeClass('selected');
    $(this).siblings('#question-3 li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('.btn-check-3').hide();
      $("html, body").animate({scrollTop: $(document).height()});
      $('#question-3 .feedback-success').slideDown();
      $('.btn-next-3').on('click', function () {
        $('#question-3').hide();
        $("#question-4").show();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('#question-3 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-3').on('click', function () {
        $('#question-3 .feedback-fail').slideUp();
        $('#question-3 li').removeClass('avoid-clicks');
      });
    }
  });

  $('#question-4 li').on('click', function () {
    $(this).addClass('selected').siblings('#question-4 li').removeClass('selected');
    $(this).siblings('#question-4 li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $('#question-4 .feedback-success').slideDown();
      $('#continue').removeClass("hide");
      $('html, body').animate({
          scrollTop: $("#continue").offset().top
      }, 2000);

    }
    else {
      $(this).addClass("wrong-answer");
      $('#question-4 .feedback-fail').slideDown();
      $("html, body").animate({scrollTop: $(document).height()});
      $('.btn-try-again-4').on('click', function () {
        $('#question-4 .feedback-fail').slideUp();
        $('#question-4 li').removeClass('avoid-clicks');
      });
    }
  });

});
