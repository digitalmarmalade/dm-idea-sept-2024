$('.next-box').hide();
$('.fail-box').hide();
$('.activity-1-slide').slick({
  centerMode: true,
  dots: true,
  centerPadding: '60px',
  infinite: false,
  slidesToShow: 5,
  responsive: [
    {
      breakpoint: 1367,
      settings: {
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 1025,
      settings: {
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 414,
      settings: {
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 1
      }
    }
  ]
});


$(function() {
  var answers = [];
  var scopes = ['scope-1','scope-2','scope-3','scope-4','scope-5','scope-6','scope-7','scope-8','scope-9','scope-10'];
  var creep = ['creep-1','creep-2','creep-3','creep-4'];
  var wrongAnswers = 0;

  $('.scope').each(function(){
    $(this).find('.slide--content').click(function() {
        $(this).closest('.scope').find('.question').toggleClass('selected');
        $(this).closest('.scope').find('.answer').toggleClass('selected');
    });
  });

  $( ".btn-check" ).click(function() {
    $('.question.selected').fadeOut(10);
    $('.answer.selected').fadeIn(10);
    $('.question').removeClass('selected');
    $('.answer.answer-success').css('background-color','#8bb673');

    //push all the selected boxes values into the answer array
    dataValue = $('.answer.selected').each(function(){
        answers.push($(this).attr('data-value'));

    });
    //if selected boxes are less than 10 you fail
    if(answers.length < 10){
      wrongAnswers = 1;
    }

    //if you've already failed don't run
    if(wrongAnswers !=1){
      //if selected boxes dont match the scopes you fail
      $.each(answers,function(index, value){
        if ($.inArray(value,scopes) < 0) {
          wrongAnswers = 1;
        }
      });
    }

    //if you already failed don't run
    if(wrongAnswers !=1){
      //if selected boxes contain a creep you fail
      $.each(creep,function(index, value){
        if ($.inArray(value,creep) < 0) {
          wrongAnswers = 1;
        }
      });
    }


    //if you fail show fail-box
    if(wrongAnswers > 0){
      $('.btn-check').hide();
      $('.fail-box').slideDown(1500);
      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
      console.log('fail');

    }else{
      console.log('correct');

      $('.next-box').slideDown(1500);
      oBadges.stepCompleted();
      $('.btn-check').hide();
      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    }
  });

  $( ".btn-try-again" ).click(function() {
      $('.btn-check').show();
      $('.question').fadeIn(10);
      $('.answer').fadeOut(10);
      $('.question').removeClass('selected');
      $('.answer').removeClass('selected');
      $('.fail-box').hide();


      answers = [];
      wrongAnswers = 0;


  });
});
