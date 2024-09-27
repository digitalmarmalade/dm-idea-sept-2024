var questionNum = 0;

function checkAnswer1() {
    var ele = document.getElementsByName('options'+(questionNum+1));

    if(ele[0].checked) {
        $('#jsFeedbackSuccess' + (questionNum+1)).show();
    }else{
        $('#jsFeedbackFail'+ (questionNum+1)).show();
    }

    $('#checkButton' + (questionNum+1)).hide();
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

    $('#question' + (questionNum + 1)).hide();
    $('#jsFeedbackSuccess' + (questionNum + 1)).hide();

    $('#jsInputText' + (questionNum + 1)).hide();
    $('#jsFeedbackSuccessInputText' + (questionNum + 1)).hide();

    question2.style.display = 'flex';

    questionNum++;

    for (var i = 0; i < 6; i++) {
        if ( questionNum === i) {
            $('.dot-' + (questionNum)).addClass('completed').removeClass('active');
            $('.dot-' + (questionNum+1)).addClass('active');
        }
    }

}

function nextInputText() {
    console.log('nextInputText');
    $('#question' + (questionNum+1)).hide();
    $('#jsFeedbackFail' + (questionNum+1)).hide();

    $('#jsInputText' + (questionNum+1)).show();

    for (var j = 1; j <= lengthAnswer[questionNum]; j++){
        $('#question' + (questionNum+1) + '-'  + j).removeClass('fail');
    }
}

function checkInputText() {
    console.log('checkInputText');

    $('#checkTextButton' + (questionNum+1)).hide();

    if (!checkWordCount()) {
        $('#jsFeedbackFailInputText' + (questionNum+1)).show();
    } else {
        $('#jsFeedbackSuccessInputText' + (questionNum+1)).show();
    }

    var ele = document.getElementsByName('options'+(questionNum+1));

    // if(ele[0].checked) {
    //     $('#jsFeedbackSuccess' + (questionNum+1)).show();
    // }else{
    //     $('#jsFeedbackFail'+ (questionNum+1)).hide();
    // }

    $('#checkButton' + (questionNum+1)).hide();
}

function checkWordCount(){
    s = document.getElementById('inputTextArea' + (questionNum+1)).value;
    s = s.replace(/(^\s*)|(\s*$)/gi,"");
    s = s.replace(/[ ]{2,}/gi," ");
    s = s.replace(/\n /,"\n");
    return s.split(' ').length > 10;
}

function tryAgainInputText() {
    console.log('nextInputText');
    $('#checkTextButton' + (questionNum+1)).show();
    $('#jsInputText' + (questionNum+1)).show();
    $('#jsFeedbackFailInputText' + (questionNum+1)).hide();
}


// question 2

function checkAnswer2() {
    var i = 0;
    console.log('checkAnswer2');

    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options2");

    for (element of chkbxElements) {
        if (element.checked) {
            i++;
        }
    }
    console.log('i');
    console.log(i);

    $('#checkButton' + (questionNum+1)).hide();

    if (i < 3) {
        $('#jsFeedbackFail'+ (questionNum+1)).show();
    } else {
        $('#jsFeedbackSuccess' + (questionNum+1)).show();
    }

}

// question 3
function checkAnswer3() {
    var i = 0;

    $('#checkButton' + (questionNum+1)).hide();

    var chkbxElements = document.getElementsByClassName("options3");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            i++;
        }
    }

    if (chkbxElements[0].checked && i === 1){
        $('#jsFeedbackSuccess' + (questionNum+1)).show();
    } else {
        $('#jsFeedbackFail'+ (questionNum+1)).show();
    }
}

function tryAgainQuestion3() {
    $('#jsFeedbackFail'+ (questionNum+1)).hide();
    $('input[name=options3]').prop('checked',false);
    $('#checkButton3').show();
}

//question 4
function checkAnswer4() {
    var i = 0;
    console.log('submitAnswerQuestion4');
    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options4");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            i++;
        }
    }
    console.log('i');
    console.log(i);

    if (i > 1) {
        $('#jsFeedbackFail4-0').show();
    }
    if (i === 1) {
        if (chkbxElements[0].checked) {
            $('#jsFeedbackFail4-1').show();
        }
        if (chkbxElements[1].checked) {
            $('#jsFeedbackSuccess4').show();
        }
        if (chkbxElements[2].checked) {
            $('#jsFeedbackFail4-2').show();
        }
        if (chkbxElements[3].checked) {
            $('#jsFeedbackFail4-3').show();
        }
    }
    $('#checkButton4').hide();
}
function tryAgainQuestion4() {
    $('#jsFeedbackFail'+ (questionNum+1) + '-0').hide();
    $('#jsFeedbackFail'+ (questionNum+1) + '-1').hide();
    $('#jsFeedbackFail'+ (questionNum+1) + '-2').hide();
    $('#jsFeedbackFail'+ (questionNum+1) + '-3').hide();
    $('input[name=options4]').prop('checked',false);
    $('#checkButton4').show();
}

//question 5
function checkAnswer5() {
    var i = 0;
    console.log('submitAnswerQuestion2');
    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options5");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            i++;
        }
    }
    console.log('i');
    console.log(i);

    if (i < 5 || i > 5) {
        $('#jsFeedbackFail5-1').show();
    }
    if (i === 5) {
        if (chkbxElements[0].checked &&
            chkbxElements[2].checked &&
            chkbxElements[3].checked &&
            chkbxElements[5].checked &&
            chkbxElements[6].checked
           ) {
            $('#jsFeedbackSuccess5').show();
        } else {
            $('#jsFeedbackFail5-2').show();
        }
    }
    $('#checkButton5').hide();
}
function tryAgainQuestion5() {
    console.log('tryAgainQuestion5');
    $('#jsFeedbackFail5-1').hide();
    $('#jsFeedbackFail5-2').hide();
    $('input[name=options5]').prop('checked',false);
    $('#checkButton5').show();
}

//question 5
function checkAnswer6() {
    var i = 0;
    console.log('submitAnswerQuestion6');
    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options6");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            i++;
        }
    }
    console.log('i');
    console.log(i);

    if (i < 1 || i > 1) {
        $('#jsFeedbackFail6').show();
    }
    if (i === 1) {
        if (chkbxElements[1].checked) {
            $('#jsFeedbackSuccess6').show();
        } else {
            $('#jsFeedbackFail6').show();
        }
    }
    $('#checkButton6').hide();
}
function tryAgainQuestion6() {
    $('#jsFeedbackFail'+ (questionNum+1)).hide();
    $('input[name=options6]').prop('checked',false);
    $('#checkButton6').show();
}



