var questionNum = 0;
var lengthAnswer = [4,5,6];

function checkAnswer() {
    var total = 0;
    var totalNan = 0;

    for (var i = 1; i <= lengthAnswer[questionNum]; i++){
        if (document.getElementById('question' + (questionNum+1) + '-' + (i)).value === '') {
            total += 0;
            totalNan += 1;
            // console.log(totalNan);

            $('#question' + (questionNum+1) + '-'  + (i)).addClass('wrong');
        } else {
            total += parseInt(document.getElementById('question' + (questionNum+1) + '-' + (i)).value);

            if (document.getElementById('question' + (questionNum+1) + '-' + (i)).value === '1') {
                $('#question' + (questionNum+1) + '-'  + (i)).addClass('correct');
            } else {
                $('#question' + (questionNum+1) + '-'  + (i)).addClass('wrong');
            }
        }
    }

    $('#checkButton' + (questionNum+1)).hide();

    for (var j = 0; j <= lengthAnswer[questionNum]; j++){
        if (total === lengthAnswer[questionNum]) {
            $('#jsFeedbackSuccess'+ ((questionNum+1))).show();
        }
        if (total === j && (totalNan !== lengthAnswer[questionNum])) {
            // console.log('total = j');
            // console.log(total);
            $('#jsFeedbackFail' + (questionNum+1) + '-' + j).show();
        } else if ((total !== j) && (totalNan === lengthAnswer[questionNum])){
            // console.log('NULL');
            $('#jsFeedbackFail-empty-' + (questionNum+1)).show();
        }
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

    $('#jsFeedbackSuccess' + (questionNum + 1)).hide();

    question2.style.display = 'block';
    questionNum++;

}

function tryAgain() {
    $('#jsFeedbackFail-empty-' + (questionNum+1)).hide();
    for (var i = 1; i <= lengthAnswer[questionNum]; i++){
        $('#jsFeedbackFail' + (questionNum+1) + '-' + (i-1)).hide();
        if (document.getElementById('question' + (questionNum+1) + '-' + (i)).value !== '1') {
            document.getElementById('question' + (questionNum+1) + '-' + i).value = '';
        }
    }

    $('#checkButton' + (questionNum+1)).show();

    for (var j = 1; j <= lengthAnswer[questionNum]; j++){
        $('#question' + (questionNum+1) + '-'  + j).removeClass('wrong');
    }
}