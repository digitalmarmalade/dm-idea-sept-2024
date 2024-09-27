var questionNum = 0;
var check1 = false;
var check2 = false;
var check3 = false;
var check4 = false;
var check5 = false;
var check6 = false;
var check7 = false;
var checkAmount = 0;

// $('#letsGo').hide();

function inputCheckBox(ele) {
    if(document.getElementById('chck1-1').checked){
        check1 = true;
        document.getElementById('chck1-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    if(document.getElementById('chck2-1').checked){
        check2 = true;
        document.getElementById('chck2-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    if(document.getElementById('chck3-1').checked){
        check3 = true;
        document.getElementById('chck3-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    if(document.getElementById('chck4-1').checked){
        check4 = true;
        document.getElementById('chck4-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    if(document.getElementById('chck5-1').checked){
        check5 = true;
        document.getElementById('chck5-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    if(document.getElementById('chck6-1').checked){
        check6 = true;
        document.getElementById('chck6-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    if(document.getElementById('chck7-1').checked){
        check7 = true;
        document.getElementById('chck7-1').classList.add('selected');
        checkAmount = checkAmount+1;
    }
    // console.log(checkAmount);

    if (ele.id == 'letsGo' && document.getElementsByClassName("selected").length != 7) {
        document.getElementById('jsFeedbackFailRead').classList.remove('hide');
    }

    if (document.getElementsByClassName("selected").length === 7 && ele.id == 'letsGo') {
        // document.querySelector('#letsGo').disabled = false;
       // $('#letsGo').show();
       continueToTask();
    }
}

function checkAnswer1() {
    var ele = document.getElementsByName('options'+(questionNum+1));

    if(ele[0].checked) {
        $('#jsFeedbackSuccess' + (questionNum+1)).show();
        document.getElementById('option1').classList.add('success');
    }else{
        $('#jsFeedbackFail'+ (questionNum+1)).show();
        document.getElementById('option2').classList.add('fail');
    }

    $('#checkButton' + (questionNum+1)).hide();
}

function continueToNextQuestion() {
    console.log('continueToNextQuestion');

    scrollToTask(document.getElementById('questionSection'));

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
    $('#jsFeedbackSuccessInputText21').hide();

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
        $('#question' + (questionNum+1) + '-'  + j).removeClass('wrong');
    }
}

function checkInputText() {
    console.log('checkInputText');
    console.log(checkWordCount());

    //disable textarea after submission
    document.getElementById("inputTextArea" + (questionNum+1)).readOnly = true;

    $('#checkTextButton' + (questionNum+1)).hide();
    if (questionNum+1 === 1) {
        if (checkWordCount() > 0 && checkWordCount() < 10) {
            $('#jsFeedbackFailInputText12').show();
        } else if (checkWordCount() === 0) {
            $('#jsFeedbackFailInputText1').show();
        } else if (checkWordCount() > 10){
            $('#jsFeedbackSuccessInputText1').show();
        }
    }

    if (questionNum+1 === 2) {
        if (checkWordCount() > 0 && checkWordCount() < 10 && document.getElementById('inputTextArea' + (questionNum+1)).value.toLowerCase() !== 'no') {
            $('#jsFeedbackFailInputText22').show();
        } else if (document.getElementById('inputTextArea' + (questionNum+1)).value.toLowerCase() === 'no') {
            $('#jsFeedbackSuccessInputText21').show();
        } else if (checkWordCount() > 10) {
            $('#jsFeedbackSuccessInputText2').show();
        } else if (checkWordCount() === 0) {
            $('#jsFeedbackFailInputText2').show();
        }
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

    return s.split(" ").filter((x) => x !== "").length;
}

function checkLetterCount(){
    s = document.getElementById('inputTextArea' + (questionNum+1)).value;
    s = s.replace(/(^\s*)|(\s*$)/gi,"");
    s = s.replace(/[ ]{2,}/gi," ");
    s = s.replace(/\n /,"\n");
    return s.split('').length > 1;
}

function tryAgainInputText() {
    console.log('nextInputText');
    $('#checkTextButton' + (questionNum+1)).show();
    $('#jsInputText' + (questionNum+1)).show();
    $('#jsFeedbackFailInputText1').hide();
    $('#jsFeedbackFailInputText12').hide();
    $('#jsFeedbackFailInputText2').hide();
    $('#jsFeedbackFailInputText22').hide();

    //enabled textarea after tryagain
    document.getElementById("inputTextArea" + (questionNum+1)).readOnly = false;
}


// question 2

function checkAnswer2() {
    var i = 0;
    console.log('checkAnswer2');

    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options2");

    var checkedElement = [];

    for (element of chkbxElements) {
        if (element.checked) {
            checkedElement.push(element);
            i++;
        }
    }
    console.log('i');
    console.log(i);

    $('#checkButton' + (questionNum+1)).hide();

    if (i < 3) {
        $('#jsFeedbackFail'+ (questionNum+1)).show();
        addClassName(checkedElement, 'fail');
    } else {
        $('#jsFeedbackSuccess' + (questionNum+1)).show();
        $('.options2').addClass('success');
    }

}

function addClassName(checkedElement, className) {
    for (var c = 0; c < checkedElement.length; c++) {
        document.getElementById(checkedElement[c].id).classList.add(className);
    }
}

function tryAgainQuestion2() {
    $('#jsFeedbackFail'+ (questionNum+1)).hide();
    $('input[name=options2]').prop('checked',false);
    $('#checkButton2').show();

    $('.options2').removeClass('fail');
}

// question 3
function checkAnswer3() {
    var i = 0;

    $('#checkButton' + (questionNum+1)).hide();

    var checkedElement = [];

    var chkbxElements = document.getElementsByClassName("options3");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            checkedElement.push(element);
            i++;
        }
    }

    if (chkbxElements[0].checked && i === 1){
        $('#jsFeedbackSuccess' + (questionNum+1)).show();
        addClassName(checkedElement, 'success');
    } else {
        $('#jsFeedbackFail'+ (questionNum+1)).show();
        addClassName(checkedElement, 'fail');
    }
}

function tryAgainQuestion3() {
    $('#jsFeedbackFail'+ (questionNum+1)).hide();
    $('input[name=options3]').prop('checked',false);
    $('#checkButton3').show();

    $('.options3').removeClass('fail');
}

//question 4
function checkAnswer4() {
    var i = 0;
    console.log('submitAnswerQuestion4');
    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var checkedElement = [];

    var chkbxElements = document.getElementsByClassName("options4");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            checkedElement.push(element);
            i++;
        }
    }
    console.log('i');
    console.log(i);

    if (i > 1) {
        $('#jsFeedbackFail4-0').show();
        addClassName(checkedElement, 'fail');
    }
    if (i === 1) {
        if (chkbxElements[0].checked) {
            $('#jsFeedbackFail4-1').show();
            addClassName(checkedElement, 'fail');
        }
        if (chkbxElements[1].checked) {
            $('#jsFeedbackSuccess4').show();
            addClassName(checkedElement, 'success');
        }
        if (chkbxElements[2].checked) {
            $('#jsFeedbackFail4-2').show();
            addClassName(checkedElement, 'fail');
        }
        if (chkbxElements[3].checked) {
            $('#jsFeedbackFail4-3').show();
            addClassName(checkedElement, 'fail');
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

    $('.options4').removeClass('fail');
}

//question 5
function checkAnswer5() {
    var i = 0;
    console.log('submitAnswerQuestion2');

    var checkedElement = [];
    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options5");

    for (element of chkbxElements)
    {
        if (element.checked)
        {
            checkedElement.push(element);
            i++;
        }
    }
    console.log('i');
    console.log(i);

    if (i < 5 || i > 5) {
        $('#jsFeedbackFail5-1').show();
        addClassName(checkedElement, 'fail');
    }
    if (i === 5) {
        if (chkbxElements[0].checked &&
            chkbxElements[2].checked &&
            chkbxElements[3].checked &&
            chkbxElements[5].checked &&
            chkbxElements[6].checked
           ) {
            $('#jsFeedbackSuccess5').show();
            addClassName(checkedElement, 'success');
        } else {
            $('#jsFeedbackFail5-2').show();
            addClassName(checkedElement, 'fail');
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

    $('.options5').removeClass('fail');
}

//question 5
function checkAnswer6() {
    var i = 0;
    console.log('submitAnswerQuestion6');
    var checkedElement = [];
    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var chkbxElements = document.getElementsByClassName("options6");

    if (chkbxElements[1].checked) {
        $('#jsFeedbackSuccess6').show();
        addClassName(checkedElement, 'success');
    } else {
        $('#jsFeedbackFail6').show();
        addClassName(checkedElement, 'fail');
    }
    $('#checkButton6').hide();
}
function tryAgainQuestion6() {
    $('#jsFeedbackFail'+ (questionNum+1)).hide();
    $('input[name=options6]').prop('checked',false);
    $('#checkButton6').show();

    $('.options6').removeClass('fail');
}

function openFramework() {
    $('#frameworkOverlay').show();
    $('#frameworkStep4').hide();
}

function hideFramework() {
    $('#frameworkOverlay').hide();
}

function continueToTask() {
    $('#continueToTask').hide();
    $('.task').show();
    scrollToTask(document.getElementById('sectionTask'));
}

function scrollToTask (target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}



