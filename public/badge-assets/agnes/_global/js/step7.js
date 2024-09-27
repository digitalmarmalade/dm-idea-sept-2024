var questionNum = 0;
var questionTotal = 19;

function checkAnswer() {
    var question1 = document.getElementsByName("options1");

    if (question1[0].checked) {
        $('#question1-1').show();
        $('#question1').hide();
    } else if (question1[1].checked){
        $('#question2-1').show();
        $('#question1').hide();
    }

    questionNum++;
}

function checkAnswer1_1() {
    var question1_1 = document.getElementsByName("options1-1");

    if (question1_1[0].checked) {
        $("#option1-1").attr("disabled", true);
        $('#subsection-1-1').show();
        $('#question1-1-1').show();
        $('#question1-1').hide();
    } else if (question1_1[1].checked){
        $("#option1-2").attr("disabled", true);
        $('#subsection-1-2').show();
        $('#question1-2-1').show();
        $('#question1-1').hide();
    }

    questionNum++;
}

function checkAnswer1_1_1() {
    var question1_1_1 = document.getElementsByName("options1-1-1");

    if (question1_1_1[0].checked) {
        $('#jsFeedbackSuccess1-1-1').show();
        questionNum++;
    } else if (question1_1_1[2].checked || question1_1_1[3].checked) {
        $('#jsFeedbackFail1_1_2').show();
    } else if (question1_1_1[1].checked){
        $('#jsFeedbackFail1_1_1').show();
    }

    $('#submitButton1_1_1').hide();
}

function checkAnswer1_1_2() {
    var question1_1_2 = document.getElementsByName("options1-1-2");

    if (question1_1_2[2].checked) {
        $('#jsFeedbackSuccess1-1-2-1').show();
        questionNum++;
    } else if (question1_1_2[0].checked) {
        $('#jsFeedbackFail1-1-2-1').show();
    } else if (question1_1_2[1].checked) {
        $('#jsFeedbackFail1-1-2-2').show();
    } else if (question1_1_2[3].checked) {
        $('#jsFeedbackFail1-1-2-3').show();
    }

    $('#submitButton1_1_2').hide();
}

function checkAnswer1_1_3() {
    var i = 0;
    var question1_1_3 = document.getElementsByName("options1-1-3");

    for (element of question1_1_3)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (i === 2 && question1_1_3[0].checked && question1_1_3[3].checked && i===2) {
        $('#jsFeedbackSuccess1-1-3-1').show();
        questionNum++;
    } else if ( (question1_1_3[0].checked && i === 1) || (question1_1_3[3].checked && i === 1)) {
        $('#jsFeedbackFail1-1-3-1').show();
    } else if (i === 1 && (question1_1_3[1].checked || question1_1_3[2].checked)) {
        $('#jsFeedbackFail1-1-3-2').show();
    } else {
        $('#jsFeedbackFail1-1-3-3').show();
    }

    $('#submitButton1_1_3').hide();
}

function checkAnswer1_2_1() {
    var question1_2_1 = document.getElementsByName("options1-2-1-1");

    if (question1_2_1[1].checked) {
        $('#jsFeedbackSuccess1-2-1-1').show();
        questionNum++;
    } else {
        $('#jsFeedbackFail1-2-1-1').show();
    }

    $('#submitButton1_2_1').hide();
}

function checkAnswer1_2_2() {
    var question1_2_1 = document.getElementsByName("options1-2-2-1");

    if (question1_2_1[2].checked) {
        $('#jsFeedbackSuccess1-2-2-1').show();
        questionNum++;
    } else {
        $('#jsFeedbackFail1-2-2-1').show();
    }

    $('#submitButton1_2_2').hide();
}

function checkAnswer1_2_3() {
    var question1_2_3 = document.getElementsByName("options1-2-3-1");

    if (question1_2_3[0].checked &&
        question1_2_3[1].checked &&
        question1_2_3[2].checked &&
        question1_2_3[3].checked) {
        $('#jsFeedbackSuccess1-2-3-1').show();
        questionNum++;
    } else {
        $('#jsFeedbackFail1-2-3-1').show();
    }

    $('#submitButton1_2_3').hide();
}

function checkAnswer1_2_4() {
    var i = 0;
    var question1_2_4 = document.getElementsByName("options1-2-4-1");

    for (element of question1_2_4)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (question1_2_4[0].checked &&
        question1_2_4[2].checked &&
        question1_2_4[4].checked &&
        i === 3) {
        $('#jsFeedbackSuccess1-2-4-1').show();
        questionNum++;
    } else if ((i === 1 || i === 2) &&
        (question1_2_4[0].checked ||
            question1_2_4[2].checked ||
            question1_2_4[4].checked )) {
        $('#jsFeedbackFail1-2-4-1').show();
    } else if ( (i === 1 || i === 2) &&
        ( !question1_2_4[0].checked &&
        !question1_2_4[2].checked &&
        !question1_2_4[4].checked) ) {
        $('#jsFeedbackFail1-2-4-3').show();
    } else {
        $('#jsFeedbackFail1-2-4-2').show();
    }

    $('#submitButton1_2_4').hide();
}

function checkAnswer2_1_1() {
    var i = 0;

    var question2_1_1 = document.getElementsByName("options2-1-1");

    for (element of question2_1_1)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (question2_1_1[1].checked && question2_1_1[2].checked && i===2) {
        $('#jsFeedbackSuccess2-1-1').show();
        questionNum++;
    } else if ( (question2_1_1[1].checked && i===1) || (question2_1_1[2].checked && i===1) ){
        $('#jsFeedbackFail2-1-1').show();
    } else {
        $('#jsFeedbackFail2-1-2').show();
    }

    $('#submitButton2_1_1').hide();
}

function checkAnswer2_1_2() {
    var i = 0;

    var question2_1_2 = document.getElementsByName("options2-1-2");

    for (element of question2_1_2)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (question2_1_2[1].checked &&
        question2_1_2[3].checked && i===2) {
        $('#jsFeedbackSuccess2-1-2').show();
        questionNum++;
    } else if ( (question2_1_2[1].checked && i===1) || (question2_1_2[3].checked && i===1) ){
        $('#jsFeedbackFail2-1-2-1').show();
    } else {
        $('#jsFeedbackFail2-1-2-2').show();
    }

    $('#submitButton2_1_2').hide();
}

function checkAnswer2_1_3() {
    var i = 0;

    var question2_1_3 = document.getElementsByName("options2-1-3");

    for (element of question2_1_3)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (question2_1_3[0].checked &&
        question2_1_3[2].checked && i===2) {
        $('#jsFeedbackSuccess2-1-3').show();
        questionNum++;
    } else if ( (question2_1_3[0].checked && i===1) || (question2_1_3[2].checked && i===1) ){
        $('#jsFeedbackFail2-1-3-2').show();
    } else if ( (i===1 && !question2_1_3[0].checked) || (i===1 && !question2_1_3[2].checked) || i > 2 ){
        $('#jsFeedbackFail2-1-3-1').show();
    }  else {
        $('#jsFeedbackFail2-1-3-3').show();
    }

    $('#submitButton2_1_3').hide();
}

function checkAnswer2_2_1() {
    var question2_2_1 = document.getElementsByName("options2-2-1");

    if (question2_2_1[0].checked) {
        $('#jsFeedbackSuccess2-2-1').show();
        questionNum++;
    } else {
        $('#jsFeedbackFail2-2-1').show();
    }

    $('#submitButton2_2_1').hide();
}

function checkAnswer2_2_2() {
    var i = 0;

    var question2_2_2 = document.getElementsByName("options2-2-2");

    for (element of question2_2_2)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (question2_2_2[2].checked &&
        question2_2_2[3].checked &&
        i===2) {
        $('#jsFeedbackSuccess2-2-2-1').show();
        questionNum++;
    } else if  (i===1){
        $('#jsFeedbackFail2-2-2-1').show();
    } else {
        $('#jsFeedbackFail2-2-2-2').show();
    }

    $('#submitButton2_2_2').hide();
}

function checkAnswer2_2_3() {
    var question2_2_3 = document.getElementsByName("options2-2-3");

    if (question2_2_3[0].checked &&
        question2_2_3[1].checked &&
        question2_2_3[2].checked &&
        question2_2_3[3].checked) {
        $('#jsFeedbackSuccess2-2-3').show();
        questionNum++;
    } else {
        $('#jsFeedbackFail2-2-3').show();
    }

    $('#submitButton2_2_3').hide();
}

function tryAgain1_1_1() {
    $('#jsFeedbackFail1_1_1').hide();
    $('#jsFeedbackFail1_1_2').hide();

    $('input[name=options1-1-1]').prop('checked',false);
    $('#submitButton1_1_1').show();
}

function tryAgain1_1_2() {
    $('#jsFeedbackFail1-1-2-1').hide();
    $('#jsFeedbackFail1-1-2-2').hide();
    $('#jsFeedbackFail1-1-2-3').hide();

    $('input[name=options1-1-2]').prop('checked',false);
    $('#submitButton1_1_2').show();
}

function tryAgain1_1_3() {
    $('#jsFeedbackFail1-1-3-1').hide();
    $('#jsFeedbackFail1-1-3-2').hide();
    $('#jsFeedbackFail1-1-3-3').hide();

    $('input[name=options1-1-3]').prop('checked',false);
    $('#submitButton1_1_3').show();
}

function tryAgain1_2_1() {
    $('#jsFeedbackFail1-2-1-1').hide();

    $('input[name=options1-2-1-1]').prop('checked',false);
    $('#submitButton1_2_1').show();
}

function tryAgain1_2_2() {
    $('#jsFeedbackFail1-2-2-1').hide();

    $('input[name=options1-2-2-1]').prop('checked',false);
    $('#submitButton1_2_2').show();
}

function tryAgain1_2_3() {
    $('#jsFeedbackFail1-2-3-1').hide();

    $('input[name=options1-2-3-1]').prop('checked',false);
    $('#submitButton1_2_3').show();
}

function tryAgain1_2_4() {
    $('#jsFeedbackFail1-2-4-1').hide();
    $('#jsFeedbackFail1-2-4-2').hide();
    $('#jsFeedbackFail1-2-4-3').hide();

    $('input[name=options1-2-4-1]').prop('checked',false);
    $('#submitButton1_2_4').show();
}

function tryAgain2_1_1() {
    $('#jsFeedbackFail2-1-1').hide();
    $('#jsFeedbackFail2-1-2').hide();

    $('input[name=options2-1-1]').prop('checked',false);
    $('#submitButton2_1_1').show();
}

function tryAgain2_1_2() {
    $('#jsFeedbackFail2-1-2-1').hide();
    $('#jsFeedbackFail2-1-2-2').hide();

    $('input[name=options2-1-2]').prop('checked',false);
    $('#submitButton2_1_2').show();
}

function tryAgain2_1_3() {
    $('#jsFeedbackFail2-1-3-1').hide();
    $('#jsFeedbackFail2-1-3-2').hide();
    $('#jsFeedbackFail2-1-3-3').hide();

    $('input[name=options2-1-3]').prop('checked',false);
    $('#submitButton2_1_3').show();
}

function tryAgain2_2_1() {
    $('#jsFeedbackFail2-2-1').hide();

    $('input[name=options2-2-1]').prop('checked',false);
    $('#submitButton2_2_1').show();
}

function tryAgain2_2_2() {
    $('#jsFeedbackFail2-2-2-1').hide();
    $('#jsFeedbackFail2-2-2-2').hide();

    $('input[name=options2-2-2]').prop('checked',false);
    $('#submitButton2_2_2').show();
}

function tryAgain2_2_3() {
    $('#jsFeedbackFail2-2-3').hide();

    $('input[name=options2-2-3]').prop('checked',false);
    $('#submitButton2_2_3').show();
}

function continueToNextQuestion1_1_1() {
    var question1 = document.getElementById('question1-1-1'),
        question2 = document.getElementById('question1-1-2')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess1-1-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-1-1-1').addClass('completed').removeClass('active');
    $('#dot-1-1-2').addClass('active');
}
function continueToNextQuestion1_1_2() {
    var question1 = document.getElementById('question1-1-2'),
        question2 = document.getElementById('question1-1-3')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess1-1-2-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-1-1-2').addClass('completed').removeClass('active');
    $('#dot-1-1-3').addClass('active');
}
function continueToNextQuestion1_1_3() {
    $('#subsection-1-1').hide();
    $('#question1-1-3').hide();

    if ($('#option1-1').is(':disabled') && $('#option1-2').is(':disabled')) {
        $("#option1").attr("disabled", true);
    }

    if ( questionNum < questionTotal) {
        $('#question1').show();
    } else if (questionNum === questionTotal) {
        $('#jsFeedbackSuccessAll').show();
        $('#task7').hide();
    }

    $('#dot-1-1-3').addClass('completed').removeClass('active');
}

function continueToNextQuestion1_2_1() {
    var question1 = document.getElementById('question1-2-1'),
        question2 = document.getElementById('question1-2-2')
    ;

    if(!question1) return;

    //question1.hide();
    $('#jsFeedbackSuccess1-2-1-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-1-2-1').addClass('completed').removeClass('active');
    $('#dot-1-2-2').addClass('active');
}
function continueToNextQuestion1_2_2() {
    var question1 = document.getElementById('question1-2-2'),
        question2 = document.getElementById('question1-2-3')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess1-2-2-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-1-2-2').addClass('completed').removeClass('active');
    $('#dot-1-2-3').addClass('active');
}
function continueToNextQuestion1_2_3() {
    var question1 = document.getElementById('question1-2-3'),
        question2 = document.getElementById('question1-2-4')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess1-2-3-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-1-2-3').addClass('completed').removeClass('active');
    $('#dot-1-2-4').addClass('active');
}
function continueToNextQuestion1_2_4() {
    $('#subsection-1-2').hide();
    $('#question1-2-4').hide();

    if ($('#option1-1').attr('disabled') && $('#option1-2').attr('disabled')) {
        $("#option1").attr("disabled", true);
    }

    if ( questionNum < questionTotal) {
        $('#question1').show();
    } else if (questionNum === questionTotal) {
        $('#jsFeedbackSuccessAll').show();
        $('#task7').hide();
    }

    $('#dot-1-2-4').addClass('completed').removeClass('active');
}

function checkAnswer2_1() {
    var question2_1 = document.getElementsByName("options2-1");

    if (question2_1[0].checked) {
        $('#subsection-2-1').show();
        $('#question2-1-1').show();
        $("#option2-1").attr("disabled", true);
    } else if(question2_1[1].checked) {
        $('#subsection-2-2').show();
        $('#question2-2-1').show();
        $("#option2-2").attr("disabled", true);
    }
    $('#question2-1').hide();
}

function continueToNextQuestion2_1_1() {
    var question1 = document.getElementById('question2-1-1'),
        question2 = document.getElementById('question2-1-2')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess2-1-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-2-1-1').addClass('completed').removeClass('active');
    $('#dot-2-1-2').addClass('active');
}
function continueToNextQuestion2_1_2() {
    var question1 = document.getElementById('question2-1-2'),
        question2 = document.getElementById('question2-1-3')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess2-1-2').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-2-1-2').addClass('completed').removeClass('active');
    $('#dot-2-1-3').addClass('active');
}
function continueToNextQuestion2_1_3() {
    $('#subsection-2-1').hide();
    $('#question2-1-3').hide();

    if ($('#option2-1').attr('disabled') && $('#option2-2').attr('disabled')) {
        $("#option2").attr("disabled", true);
    }

    if ( questionNum < questionTotal) {
        $('#question1').show();
    } else if (questionNum === questionTotal) {
        $('#task7').hide();
        $('#jsFeedbackSuccessAll').show();
    }

    $('#dot-2-1-3').addClass('completed').removeClass('active');
}

function continueToNextQuestion2_2_1() {
    var question1 = document.getElementById('question2-2-1'),
        question2 = document.getElementById('question2-2-2')
    ;

    if(!question1) return;

    $('#jsFeedbackSuccess2-2-1').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-2-2-1').addClass('completed').removeClass('active');
    $('#dot-2-2-2').addClass('active');
}
function continueToNextQuestion2_2_2() {
    var question1 = document.getElementById('question2-2-2'),
        question2 = document.getElementById('question2-2-3')
    ;

    if(!question1) return;

    //question1.hide();
    $('#jsFeedbackSuccess2-2-2').hide();
    question1.style.display = 'none';
    question2.style.display = 'block';

    $('#dot-2-2-2').addClass('completed').removeClass('active');
    $('#dot-2-2-3').addClass('active');
}
function continueToNextQuestion2_2_3() {
    $('#subsection-2-2').hide();
    $('#question2-2-3').hide();

    if ($('#option2-1').is(':disabled') && $('#option2-2').is(':disabled')) {
        $("#option2").attr("disabled", true);
    }

    if ( questionNum < questionTotal) {
        $('#question1').show();
    } else if (questionNum === questionTotal) {
        $('#jsFeedbackSuccessAll').show();
        $('#task7').hide();
    }

    $('#dot-2-2-3').addClass('completed').removeClass('active');
}

function finishContinue() {
    console.log('final');
}