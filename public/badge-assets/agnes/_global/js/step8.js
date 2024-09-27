var inputTextBoxesNum = document.getElementsByClassName('inputTextArea').length;
function submit() {
    var completedBoxes = 0;
    var valueTextArea = [];
    var liTextbox = [];

    console.log('submit---');
    console.log(inputTextBoxesNum);
    $('#writeMoreButton').hide();
    $('#submitButton').hide();

    for (var i = 1; i <= inputTextBoxesNum; i++) {
        checkWordCount(i);
        if (checkWordCount(i) >= 10) {
            completedBoxes++;
            if (completedBoxes === inputTextBoxesNum) {
                $('#tryAgain').hide();
                $('#questionBoxes').hide();
                $('#jsFeedbackSuccess1').show();
                $('#jsFeedbackSuccessAll').show();
                $('#finalTextBoxesArea').show();

                //get value from inputTextArea
                for (var j = 1; j <= inputTextBoxesNum; j++){
                    valueTextArea[j] = document.getElementById('inputTextArea' + j).value;
                    console.log( valueTextArea[j]);

                    liTextbox[j] = document.createElement("li");
                    liTextbox[j].setAttribute('id','textBox' + j);
                    liTextbox[j].setAttribute('class','textBox' + j);
                    const pText = document.createTextNode(valueTextArea[j]);
                    liTextbox[j].appendChild(pText);
                    document.getElementById('finalTextBoxesArea').appendChild(liTextbox[j]);
                }
            }

        } else if (checkWordCount(i) >= 1 && checkWordCount(i) < 10){
            $('#jsFeedbackFail' + i).show();
            $('#tryAgain').show();
        } else if (checkWordCount(i) === 0) {
            $('#jsFeedbackFailNotComplete').show();
            $('#tryAgain').show();
        }
    }
}

function checkWordCount(questionNum){
    s = document.getElementById('inputTextArea' + questionNum).value;
    s = s.replace(/(^\s*)|(\s*$)/gi,"");
    s = s.replace(/[ ]{2,}/gi," ");
    s = s.replace(/\n /,"\n");
    return s.split('').length;
}

function tryAgain() {
    $('.feedback').hide();
    $('#tryAgain').hide();

    $('#writeMoreButton').show();
    $('#submitButton').show();
}

function writeMore() {
    const divTextbox = document.createElement("div");

    console.log(inputTextBoxesNum);
    inputTextBoxesNum++;
    console.log(inputTextBoxesNum);
    divTextbox.setAttribute('id','jsInputText' + inputTextBoxesNum);
    divTextbox.setAttribute('class','jsInputText' + inputTextBoxesNum);
    document.getElementById('question').appendChild(divTextbox);

    const pTextWriteMin = document.createElement("p");
    const pText = document.createTextNode("Please write a minimum of 10 words in the space below");
    pTextWriteMin.appendChild(pText);
    divTextbox.appendChild(pTextWriteMin);

    const textarea = document.createElement("textarea");
    textarea.setAttribute('id','inputTextArea' + inputTextBoxesNum);
    textarea.setAttribute('class','inputTextArea');
    textarea.setAttribute('name','inputTextArea' + inputTextBoxesNum);
    divTextbox.appendChild(textarea);

    const divFail = document.createElement("div");
    divFail.setAttribute('id','jsFeedbackFail' + inputTextBoxesNum);
    divFail.setAttribute('class','hide jsFeedbackFail feedback');
    divTextbox.appendChild(divFail);

    const pFail = document.createElement("p");
    const pFailText = document.createTextNode("Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!");
    pFail.appendChild(pFailText);
    pFail.setAttribute('class','animate__animated animate__fadeInLeft animate__fast');
    divFail.appendChild(pFail);
}

function next() {
    $('#questionBoxes').hide();
    $('#questionFeedback').hide();

    $('#final').show();
}


function continueToTask() {
    $('#continueToTask').hide();
    $('.task').show();
}