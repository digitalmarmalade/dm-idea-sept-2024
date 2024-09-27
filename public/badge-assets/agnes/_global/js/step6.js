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
        dot.style.backgroundColor = "transparent";
    });
    document.querySelector("#dot-container-" + questionNum + " button:nth-child(" + num + ")").style.backgroundColor = "#076bb8";
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
    var selectedAnswers = document.getElementsByClassName("selected").length;
    var activeElements = document.getElementsByClassName("active");

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
    if (i === 7 && selectedAnswers === 7) {
        $('#jsFeedbackSuccess1').show();
        $('#jsFeedbackSuccessAll').show();
    } else if (selectedAnswers < 7) {
        $('#jsFeedbackFail1').show();
    } else if (selectedAnswers === 7 && i < 7) {
        $('#jsFeedbackFail2').show();
    }

    $('#checkButton').hide();
}

function continueToNextQuestion() {
    $('#task6').hide();
}

function tryAgain() {
    $('.jsFeedbackFail').hide();
    $('#checkButton').show();
}