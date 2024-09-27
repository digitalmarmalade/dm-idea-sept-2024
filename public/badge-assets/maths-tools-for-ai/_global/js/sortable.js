$(document).ready(function(){
  $('.jsSortable').each(function(){

    var _this = $(this);

    var correctAnswers;

    var user = [];
    var correct = [];
    var highlightCorrect = [];

    var $sortable = _this.find('.sortable');
    var $sortableItems =  _this.find('.sortable li');
    var $tryAgain = _this.find('.jsTryAgain');
    var $checkDrag = _this.find('.jsCheckDrag');

    var scrollAnchor = _this.data('scroll-anchor');
    var hasMoved = false;

    var animateClasses = _this.find($('[class*="animate__"]'));

    var $successFeedback = _this.find('.jsFeedbackSuccess');
    var $failFeedback = _this.find('.jsFeedbackFail');

    $sortable.sortable({
      placeholder: "placeholder",
      containment: '.sortable-wrapper',
      helper: 'clone',
      cursorAt: {
        left: 0,
        top:0
      },
      scroll: false,
      axis: 'y',
      create:function(){
        jQuery(this).height(jQuery(this).height() + 20);
      },

      start: function(e, ui){
        ui.placeholder.height(ui.item.height());
        $sortable.addClass('dragging');
      },

      stop: function(e, ui){
        $sortable.removeClass('dragging');

        var listElements = $sortable.children();

        user = [];
        correct = [];
        highlightCorrect = [];

        listElements.each(function( index ) {

          var answer = $(this).data('answer');
          user.push(index);
          correct.push(answer);

          if(index === answer){
            highlightCorrect.push(index);
          }
        });

        console.log(user + " = " + correct);
        hasMoved = true;
      },

      sort: function(event, ui) {
        ui.helper.css({ 'top': ui.position.top + $sortable.scrollTop() + 'px' });
      }

    });


    $checkDrag.on('click', function(e){
      e.preventDefault();

      hideFailFeedback();

      if(hasMoved){
        $sortableItems.removeClass('correct');

        $.each( highlightCorrect, function( key, value ) {
        _this.find('.sortable li').eq(value).addClass('correct');
      });

      // All correct
      if(JSON.stringify(user) === JSON.stringify(correct)){
        showSuccessFeedback();

        $sortable.sortable("disable");

      } else {
        showFailFeedback();
      }
    }
  });

  // Try Again 
  //- Keeps correct answers if trying again.
  $tryAgain.on('click', function(){

    $checkDrag.removeClass('visibility-hidden');

    hideFailFeedback();
    removeAnimation();
  });

  function scrollToFeedback(){
    if(scrollAnchor != undefined){

      $checkDrag.addClass('visibility-hidden');

      $("html, body").animate({
        scrollTop: $('.' + scrollAnchor).position().top
      }, 1000);
    }
  }

  function removeAnimation(){
    animateClasses.attr('class', function(index, attr) {
      return attr.replace(/animate__/g, 'xxx__');
    });
  }

  function addAnimation(){
    animateClasses.attr('class', function(index, attr) {
      return attr.replace(/xxx__/g, 'animate__');
    });
  }

  removeAnimation();

  function showSuccessFeedback(){
    $successFeedback.removeClass('hide');
      addAnimation();
      scrollToFeedback();
    }

    function showFailFeedback(){
      $failFeedback.removeClass('hide');

      addAnimation();
      scrollToFeedback();
    }

    function hideFailFeedback(){
      $failFeedback.addClass('hide');

      removeAnimation();
      //scrollToFeedback();
    }

  });
});