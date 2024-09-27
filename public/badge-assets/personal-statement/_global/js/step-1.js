$(function () {
  $('.question').hide();
  $('.question-1').show();

  $('.question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.question-1').fadeOut();
      $(".question-2").fadeIn();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });


  $('.question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.question-1').fadeOut();
      $(".question-2").fadeIn();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });

  $('.question-2 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.question-2').fadeOut();
      $(".question-3").fadeIn();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });

  $('.question-3 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.question-3').fadeOut();
      $(".question-4").fadeIn();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });

  $('.question-4 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.question-4').fadeOut();
      $(".question-5").fadeIn();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });

  $('.question-5 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.question-5').fadeOut();
      $(".question-6").fadeIn();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });

  $('.question-6 li').on('click', function () {
    $(this).addClass('selected').siblings('.question li').removeClass('selected');
    if($(this).data("value") == true){
      $('.task').fadeOut();
      $(".thats-great").slideDown();
    }
    else {
      $(this).addClass("wrong-answer");
    }
  });

});
