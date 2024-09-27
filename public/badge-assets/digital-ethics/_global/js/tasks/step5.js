var event;
var dataDropped;
var correctAnswer = 0;

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    console.log('drag');
    // $('.feedback').hide();
    ev.dataTransfer.setData("text", ev.target.id);
    // console.log(ev.target.id);
    document.getElementById(ev.target.id).classList.remove('wrong');
}

function drop(ev) {
    $('.feedbackSuccess').hide();
    event = ev;
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    console.log(data);
    console.log(ev.target.id);
    dataDropped = document.getElementById(data);
    ev.target.appendChild(document.getElementById(data));

    if (checkSimilarity(String(ev.target.id), String(document.getElementById(data).id)) === 100) {
        console.log('same');
        if (String(ev.target.id) === 'divSchool'){
            $('#jsFeedbackSuccess1').show();
            $('#divSchool').addClass('correct');
            correctAnswer++;
        }
        if (String(ev.target.id) === 'divDigital'){
            $('#jsFeedbackSuccess2').show();
            document.getElementById(data).className += " correct";
            correctAnswer++;
        }
        if (String(ev.target.id) === 'divSmart' && dataDropped.id === 'divSmart-2'){
            $('#jsFeedbackSuccess3').show();
            document.getElementById(data).className += " correct";
            correctAnswer++;
        } else if (String(ev.target.id) === 'divSmart' && dataDropped.id ==='divSmart-1') {
            $('#jsFeedbackSuccess4').show();
            document.getElementById(data).className += " correct";
            correctAnswer++;
        }

        if (correctAnswer === 4) {
            $('#jsFeedbackSuccessAll').show();
        }

    } else {
        // console.log('YOO');
        // console.log(String(ev.target.id));
        if (String(ev.target.id).includes('School')) {
            // console.log('wrong school');
            $('#jsFeedbackFail1').show();
            document.getElementById(data).className += " wrong";
        } else if (String(ev.target.id).includes('Digital') ) {
            $('#jsFeedbackFail2').show();
            document.getElementById(data).className += " wrong";
        } else if (String(ev.target.id).includes('Smart') ) {
            $('#jsFeedbackFail3').show();
            document.getElementById(data).className += " wrong";
        }
    }
}

function dropToAnswerBox(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

function checkSimilarity(str1, str2) {
    var equivalency = 0;
    var minLength = (str1.length > str2.length) ? str2.length : str1.length;
    var str1count = 0;

    //count existing str1
    for(var s = 0; s < str1.length; s++){
        if(str1.charAt(s) !== ' '){
            str1count++;
        }
    }

    for(var i = 0; i < minLength; i++) {
        if(str1.charAt(i) !== ' ' || str2.charAt(i) !== ' '){
            if(str1.charAt(i) === str2.charAt(i)) {
                equivalency++;
            }
        }

    }

    var weight = equivalency / str1count;
    return (weight * 100);
}

function tryAgain() {
    console.log('tryAgain');
    $('#jsFeedbackFail1').hide();
    $('#jsFeedbackFail2').hide();
    $('#jsFeedbackFail3').hide();

    const list = document.getElementById(event.target.id);
    list.removeChild(dataDropped);
    document.getElementById("divAnswer").appendChild(dataDropped);
    // console.log(dataDropped.id);
    // dataDropped.className -= " wrong";
    $('#' + String(dataDropped.id)).removeClass('wrong');
}

function continueToNextQuestion() {
    console.log('continueToNextQuestion');

    $('.question').hide();
}

window.addEventListener('click', function(e){
    $('.feedbackSuccess').hide();
});

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