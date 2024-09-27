$(function(){

  var allLetters = $(".diagram .letter-input").length;

  //console.log(allLetters);

  $('body').on('keyup','.letter-input',function() {
    if($(this).val().toLowerCase() === $(this).data('answer').toLowerCase()){
      $(this).addClass('correct');
      $(this).removeClass('incorrect');
    }else{
      $(this).removeClass('correct');
      $(this).addClass('incorrect');
    }
    var correctAnswers = $(".diagram .letter-input.correct").length;
    if(correctAnswers === allLetters){
      $(".feedback").slideDown();      
      $("html, body").animate({scrollTop: $(document).height()});
    }
  });

});
