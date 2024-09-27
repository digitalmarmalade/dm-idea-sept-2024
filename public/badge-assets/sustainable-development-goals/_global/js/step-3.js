
var answers = {
    steps: {
        user: [],
        correct: []
    }
}

var $taskDropdown = $('.task-dropdown');
var $taskDropdownFeedback = $('.task-dropdown-feedback');
var $taskDropdownSelect = $('.task-dropdown select');
var $taskDropdownCheckBtn = $('.btn-check-dropdowns');
var $taskDropdownNextBtn = $('.js-dropdown-next');

var $taskDropdownItems = $('.task-dropdown li');
var $taskDropdownTotalItems = $('.task-dropdown li').length;

var $taskDropdownTryAgainBtn = $('.task-dropdown-wrapper .btn--try-again');

$taskDropdownItems.each(function(idx){

    var index = idx + 1;

    $(this).find('.task-dropdown-question-number').text(index + "/" + $taskDropdownTotalItems);

    answers.steps.correct['step-' + idx] = [];
    answers.steps.user['step-' + idx] = [];

    $(this).find("select").each( function() {
        var answer = parseInt($(this).find('[data-answer]').val(), 8);
        answers.steps.correct['step-' + idx].push(answer);
        //console.log("step : " + idx + " found: " + $(this).find('[data-answer]').val());
    });
});



$taskDropdownSelect.change(function () {
    var val = parseInt(this.value, 8);
    var idx = $(this).parents('li').index();
    var dropdownIndex = $(this).parent('.select-wrapper').prevAll(".select-wrapper").length;

    answers.steps.user['step-' + idx][dropdownIndex] = val;
});

$taskDropdownCheckBtn.on('click', function(e) {

    e.preventDefault();

    var idx = $(this).parents('li').index();
    var answersArray = answers.steps.user['step-' + idx];
    var correctArray = answers.steps.correct['step-' + idx];
    var currentQuestion = idx + 1;

    $taskDropdownFeedback.find('.feedback-correct').addClass('hide');
    $taskDropdownFeedback.find('.feedback-incorrect').addClass('hide');

    if(JSON.stringify(answersArray) === JSON.stringify(correctArray)){

        $taskDropdownFeedback.removeClass('invisible');

        if(currentQuestion === $taskDropdownTotalItems){
            $taskDropdownFeedback.find('.feedback-correct-continue').removeClass('hide');
        } else {
            $taskDropdownFeedback.find('.feedback-correct').removeClass('hide');
        }

    } else {
        $taskDropdownFeedback.find('.feedback-incorrect').removeClass('hide');
        $taskDropdownFeedback.removeClass('invisible');
    }


    $("html, body").animate({scrollTop: $(document).height()}, "slow");
});


function gotoNextStep(){

    $taskDropdownFeedback.find('.feedback-incorrect').addClass('hide');
    $taskDropdownFeedback.find('.feedback-correct').addClass('hide');

    $taskDropdown.find('.active').removeClass('active').next().addClass('active');

    $("html, body").animate({scrollTop: $(document).height()}, "slow");

}

// NEXT STEP
$taskDropdownNextBtn.on('click', function(e) {

    e.preventDefault();

    gotoNextStep();

});

// TRY AGAIN
$taskDropdownTryAgainBtn.on('click', function(e) {

    e.preventDefault();

    $taskDropdownFeedback.find('.feedback-incorrect').addClass('hide');
    $("option:selected").removeAttr("selected");
});

/* WORDSEARCH OVERLAY */
var $overlayPuzzleWrapper = $('.overlay-puzzle-wrapper'),
        $body = $('body');


$('.jsLaunchWordsearch').on('click', function(e){

    e.preventDefault();

    $overlayPuzzleWrapper.addClass('active');
    $body.addClass('isOverlay');
    
  //  $('html, body').animate({ scrollTop:  $(".overlay-puzzle").offset().top}, "fast");

    oApp.readPuzzleElementsDimensions();
    oApp.autoSizeGrid();

});

$(window).resize(function() { 
    console.log("resize function called");
}); 

// CONTINUE AFTER COMPLETED WORDSEARCH
$('.jsWordsearchContinue').on('click', function(e){

    e.preventDefault();

    $overlayPuzzleWrapper.removeClass('active');
    $body.removeClass('isOverlay');

    gotoNextStep();

});
