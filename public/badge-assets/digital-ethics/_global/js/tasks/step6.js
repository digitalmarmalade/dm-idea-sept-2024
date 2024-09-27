var questionNum = 1;

let activeElement;

// let i = 0; // current slide
let i = [0,0,0,0,0,0,0];
let j = 7; // total slides

var answer1 = 'content1-1';
var answer2 = 'content2-2';
var answer3 = 'content3-3';
var answer4 = 'content4-4';
var answer5 = 'content5-5';
var answer6 = 'content6-6';
var answer7 = 'content7-7';


// const dots = document.querySelectorAll(".dot-container button");
// const images = document.querySelectorAll(".p-container .content");

function next(questionNum){
    console.log(questionNum);
    document.getElementById('question' + questionNum).classList.add("selected");

    var getElement = document.getElementById('question' + questionNum);
    activeElement = document.activeElement;
    console.log(getElement, activeElement)

    console.log(activeElement);
    document.getElementById('content' + questionNum + '-' + (i[questionNum-1]+1)).classList.remove("active");
    i[questionNum-1] = ( j + i[questionNum-1] + 1) % j;
    document.getElementById('content' + questionNum + '-' + (i[questionNum-1]+1)).classList.add("active");
    indicator( questionNum, i[questionNum-1]+ 1 );
}

function prev(questionNum){
    document.getElementById('question' + questionNum).classList.add("selected");
    document.getElementById('content' + questionNum + '-' + (i[questionNum-1]+1)).classList.remove("active");
    i[questionNum-1] = (j + i[questionNum-1] - 1) % j;
    document.getElementById('content' + questionNum + '-' + (i[questionNum-1]+1)).classList.add("active");
    indicator(questionNum, i[questionNum-1]+1);
}

function indicator(questionNum, num){
    console.log('indicator');
    console.log(num);
    var dots = document.querySelectorAll("#dot-container-" + questionNum + " button");
    console.log(dots);
    dots.forEach(function(dot){
        dot.style.backgroundColor = "white";
    });
    document.querySelector("#dot-container-" + questionNum + " button:nth-child(" + num + ")").style.backgroundColor = "#2C3B45";
}

function dot(questionNum, index){
    if(!document.getElementById('question' + questionNum).classList.contains('selected')) {
        document.getElementById('question' + questionNum).classList.add("selected");
    }
    console.log('dot');
    console.log(questionNum);
    // const images = document.querySelectorAll(".p-container .content");
    const texts = document.querySelectorAll("#p-container-" + questionNum + ' .content');
    texts.forEach(function(text){
        text.classList.remove("active");
        console.log(text);
    });
    document.getElementById('content' + questionNum + '-' + + index).classList.add("active");
    i[questionNum-1] = index - 1;
    indicator(questionNum, index);
}

function checkAnswer() {
    var i = 0;
    console.log('checkAnswer');

    // var checkbox= document.querySelector('input[name="options2[]"]:checked');
    var selectedAnswers = document.getElementsByClassName("selected");
    var selectedAnswersLength = document.getElementsByClassName("selected").length;
    var activeElements = document.getElementsByClassName("active");

    console.log(activeElements);
    console.log('selectedAnswers');
    console.log(selectedAnswers);

    for (element of activeElements) {
        console.log('element');
        console.log(element.id);
        if (answer1 === element.id ||
            answer2 === element.id ||
            answer3 === element.id ||
            answer4 === element.id ||
            answer5 === element.id ||
            answer6 === element.id ||
            answer7 === element.id) {
            i++;
        }
    }

    console.log('amount = ' + i);
    console.log(selectedAnswers);
    console.log('>>>> ' + selectedAnswersLength);
    if (i === 7 && selectedAnswersLength === 7) {
        console.log('***here');
        $('#jsFeedbackSuccess1').show();
        $('#jsFeedbackSuccessAll').show();

        addClassName(selectedAnswers, activeElements, 'success');
    } else if (selectedAnswersLength < 7) {
        $('#jsFeedbackFail1').show();
        addClassName1(selectedAnswers, activeElements);
    } else if (selectedAnswers.length === 7 && i < 7) {
        $('#jsFeedbackFail2').show();
        addClassName1(selectedAnswers, activeElements);
    }

    $('#checkButton').hide();
}

function continueToNextQuestion() {
    $('#task6').hide();
}

function tryAgain() {
    $('.jsFeedbackFail').hide();
    $('#checkButton').show();

    $('.content').removeClass('fail');
}

function addClassName(selectedAnswers, activeAnswers, className) {
    console.log('addClassName');
    console.log('selectedAnswers');
    console.log('selectedAnswers.length : ' + selectedAnswers.length);
    console.log('className : ' + className);
    // for (var c = 0; c < activeAnswers.length; c++) {
    //     document.getElementById(activeAnswers[c].id).classList.add(className);
    // }

    document.getElementById(activeAnswers[1].id).classList.add('success');
    document.getElementById(activeAnswers[2].id).classList.add('success');
    document.getElementById(activeAnswers[3].id).classList.add('success');
    document.getElementById(activeAnswers[4].id).classList.add('success');
    document.getElementById(activeAnswers[5].id).classList.add('success');
    document.getElementById(activeAnswers[6].id).classList.add('success');
    document.getElementById(activeAnswers[7].id).classList.add('success');
}

function addClassName1(selectedAnswers, activeAnswers) {
    console.log('addClassName1');
    console.log(selectedAnswers);

    if(selectedAnswers.length === 0) {
        document.getElementById(activeAnswers[1].id).classList.add('fail');
        document.getElementById(activeAnswers[2].id).classList.add('fail');
        document.getElementById(activeAnswers[3].id).classList.add('fail');
        document.getElementById(activeAnswers[4].id).classList.add('fail');
        document.getElementById(activeAnswers[5].id).classList.add('fail');
        document.getElementById(activeAnswers[6].id).classList.add('fail');
        document.getElementById(activeAnswers[7].id).classList.add('fail');
    } else {
        if (answer1 === activeAnswers[1].id && document.getElementById('question1').classList.contains('selected')) {
            document.getElementById(activeAnswers[1].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[1].id).classList.add('fail');
        }

        if (answer2 === activeAnswers[2].id && document.getElementById('question2').classList.contains('selected')) {
            document.getElementById(activeAnswers[2].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[2].id).classList.add('fail');
        }

        if (answer3 === activeAnswers[3].id && document.getElementById('question3').classList.contains('selected')) {
            document.getElementById(activeAnswers[3].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[3].id).classList.add('fail');
        }

        if (answer4 === activeAnswers[4].id && document.getElementById('question4').classList.contains('selected')) {
            document.getElementById(activeAnswers[4].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[4].id).classList.add('fail');
        }

        if (answer5 === activeAnswers[5].id && document.getElementById('question5').classList.contains('selected')) {
            document.getElementById(activeAnswers[5].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[5].id).classList.add('fail');
        }

        if (answer6 === activeAnswers[6].id && document.getElementById('question6').classList.contains('selected')) {
            document.getElementById(activeAnswers[6].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[6].id).classList.add('fail');
        }

        if (answer7 === activeAnswers[7].id && document.getElementById('question7').classList.contains('selected')) {
            document.getElementById(activeAnswers[7].id).classList.add('success');
        } else {
            document.getElementById(activeAnswers[7].id).classList.add('fail');
        }
    }
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