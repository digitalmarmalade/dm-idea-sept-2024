var event;
var dataDropped;
var successAnswer = 0;

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    console.log('drag');
    // $('.feedback').hide();
    ev.dataTransfer.setData("text", ev.target.id);
    // console.log(ev.target.id);
    document.getElementById(ev.target.id).classList.remove('fail');
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
            $('#divSchool').addClass('success');
            successAnswer++;
        }
        if (String(ev.target.id) === 'divDigital'){
            $('#jsFeedbackSuccess2').show();
            document.getElementById(data).className += " success";
            successAnswer++;
        }
        if (String(ev.target.id) === 'divSmart' && dataDropped.id === 'divSmart-2'){
            $('#jsFeedbackSuccess3').show();
            document.getElementById(data).className += " success";
            successAnswer++;
        } else if (String(ev.target.id) === 'divSmart' && dataDropped.id ==='divSmart-1') {
            $('#jsFeedbackSuccess4').show();
            document.getElementById(data).className += " success";
            successAnswer++;
        }

        if (successAnswer === 4) {
            $('#jsFeedbackSuccessAll').show();
        }

    } else {
        // console.log('YOO');
        // console.log(String(ev.target.id));
        if (String(ev.target.id).includes('School')) {
            // console.log('fail school');
            $('#jsFeedbackFail1').show();
            document.getElementById(data).className += " fail";
        } else if (String(ev.target.id).includes('Digital') ) {
            $('#jsFeedbackFail2').show();
            document.getElementById(data).className += " fail";
        } else if (String(ev.target.id).includes('Smart') ) {
            $('#jsFeedbackFail3').show();
            document.getElementById(data).className += " fail";
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
    // dataDropped.className -= " fail";
    $('#' + String(dataDropped.id)).removeClass('fail');
}

function continueToNextQuestion() {
    console.log('continueToNextQuestion');

    $('.question').hide();
}

window.addEventListener('click', function(e){
    $('.feedbackSuccess').hide();
});