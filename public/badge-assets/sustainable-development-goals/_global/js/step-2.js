
var answers = {
    correct: [],
    user: []
}

var $taskDropdown = $('.task-dropdown');
var $taskDropdownFeedback = $('.task-dropdown-feedback');
var $taskDropdownSelect = $('.task-dropdown select');
var $taskDropdownCheckBtn = $('.btn-check-dropdowns');

var $taskDropdownTryAgainBtn = $('.task-dropdown-wrapper .btn--try-again');


$taskDropdownSelect.each(function(){
   var answer = parseInt($(this).find('[data-answer]').val(), 8)
   answers.correct.push(answer);
   answers.user.push(0);
});

$taskDropdownSelect.change(function () {
    var val = parseInt(this.value, 8);
    var idx = $(this).parents('li').index();

    answers.user[idx] = val;
});

$taskDropdownCheckBtn.on('click', function(e) {

    e.preventDefault();

    // TODO - fix if dropdowns aren't in seperate li.
    $taskDropdownFeedback.find('.feedback-correct').addClass('hide');
    $taskDropdownFeedback.find('.feedback-incorrect').addClass('hide');

    if(JSON.stringify(answers.user) === JSON.stringify(answers.correct)){
        $taskDropdownFeedback.find('.feedback-correct').removeClass('hide');
        $taskDropdownFeedback.removeClass('invisible');
    } else {
        $taskDropdownFeedback.find('.feedback-incorrect').removeClass('hide');
        $taskDropdownFeedback.removeClass('invisible');
    }

    $("html, body").animate({scrollTop: $(document).height()}, "slow");
});

$taskDropdownTryAgainBtn.on('click', function(e) {

    e.preventDefault();

    $taskDropdownFeedback.find('.feedback-incorrect').addClass('hide');
    //$("option:selected").removeAttr("selected");
});