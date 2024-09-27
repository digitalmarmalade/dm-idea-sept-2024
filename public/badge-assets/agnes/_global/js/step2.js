var questionNum = 0;
function submitAnswer(id) {
    console.log('id ' + id);
    var ele = document.getElementById("sliderQuestion" + (id)).value;
    console.log(ele);

    $('.submitButton').hide();

    if (ele == 0) {
        $('#jsFeedbackNone-' + id + '-0').show();
    } else if (ele == 1) {
        $('#jsFeedbackLow-' + id + '-1').show();
        $('#jsFeedback-' + id).show();
    } else if (ele == 2) {
        $('#jsFeedbackMedium-' + id + '-2').show();
        $('#jsFeedback-' + id).show();
    } else if (ele == 3) {
        $('#jsFeedbackHigh-' + id + '-3').show();
        $('#jsFeedback-' + id).show();
    }
}

function continueToNextSlider() {
    console.log('continueToNextSlider');
    console.log('question' + (questionNum+1));

    $('.submitButton').show();
    var question1 = document.getElementById('question' + (questionNum+1)),
        question2 = document.getElementById('question' + (questionNum+2))
    ;
    console.log(question1);
    console.log(question2);

    if(!question1) return;

    if (getComputedStyle(question1).display === 'block') {
        question1.style.display = 'none';
        question2.style.display = 'block';

        questionNum++;
    } else {
        question1.style.display = 'block';
        question2.style.display = 'none';
    }
}
function continueToNextQuestion() {
    console.log('continueToNextQuestion');

    $('.submitButton').show();
    var question1 = document.getElementById('question' + (questionNum+1)),
        question2 = document.getElementById('question' + (questionNum+2))
    ;
    console.log(question1);
    console.log(question2);

    if(!question1) return;

    if (getComputedStyle(question1).display === 'block') {
        question1.style.display = 'none';
        question2.style.display = 'block';

        questionNum++;
    } else {
        question1.style.display = 'block';
        question2.style.display = 'none';
    }

    if ( questionNum === 3 ||
        questionNum === 6 ||
        questionNum === 9 ||
        questionNum === 12 ||
        questionNum === 15 ||
        questionNum === 18) {
        $('.dot-' + (questionNum+1)).addClass('completed').removeClass('active');
        $('.dot-' + (questionNum+1+3)).addClass('active');
    }
}

function tryAgain(id) {
    $('#jsFeedbackNone-' + id + '-0').hide();
    $('input[name=options1]').prop('checked',false);

    $('.submitButton').show();
}