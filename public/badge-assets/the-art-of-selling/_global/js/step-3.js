
$('.btn-continue-1').on('click', function () {
  $('#sales-cycle').removeClass('hide');
  $(".section-slide").hide();
});

  $( function() {
    $(".hint").hide();
	  var correctAnswers;
    $( "#sortable" ).sortable({
          placeholder: "placeholder",
          containment: '.quiz-question',
          helper: 'clone',
          cursorAt: {
            left: 0,
            top:0
          },
          scroll: false,
          axis: 'y',
          create:function(){
            jQuery(this).height(jQuery(this).height() + 60);
          },
          start: function(e, ui){
           ui.placeholder.height(ui.item.height());
          },
        });


    $('body').on('click','.check-answers',function(event){
        $(".hint").fadeIn();
        correctAnswers = 0;
        event.preventDefault();
      $(".drag-option").each(function(index){
        if((index + 1) === $(this).data('answer')) {
          correctAnswers++;
        }
      });
      $('.jsCorrectGauge').removeClass('correct-gauge--1').removeClass('correct-gauge--2').removeClass('correct-gauge--3').removeClass('correct-gauge--4').removeClass('correct-gauge--5').removeClass('correct-gauge--6').addClass('correct-gauge--'+correctAnswers)
      $('.jsCorrectAnswers').text(correctAnswers);
      if(correctAnswers === 6) {
        $('.drag-option').addClass('correct-order');
        $('.check-answers').fadeOut('hide');
        $('.hint').fadeOut('hide');
        $('.feedback').removeClass('hide');
        $("html, body").animate({scrollTop: $(document).height()});

      }
    });

        $('body').on("click",".hint",function(event){
          event.preventDefault();
          $( ".drag-option" ).each(function( index ) {
              if((index + 1) == $(this).data('answer')) {
                if($(this).hasClass('correct-order') === false){
                  $(this).addClass('correct-order');
                }
              }else {
                $(this).removeClass('correct-order');
              }
          });

         });
   });
