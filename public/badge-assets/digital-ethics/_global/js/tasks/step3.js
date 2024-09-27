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

            $('#question' + (questionNum+1) + '-'  + (i)).addClass('fail');
        } else {
            total += parseInt(document.getElementById('question' + (questionNum+1) + '-' + (i)).value);

            if (document.getElementById('question' + (questionNum+1) + '-' + (i)).value === '1') {
                $('#question' + (questionNum+1) + '-'  + (i)).addClass('success');
            } else {
                $('#question' + (questionNum+1) + '-'  + (i)).addClass('fail');
            }
        }
    }

    $('#checkButton' + (questionNum+1)).hide();


    for (var j = 0; j <= lengthAnswer[questionNum]; j++){
        console.log(total, j, totalNan);
        if (total === lengthAnswer[questionNum]) {
            $('#jsFeedbackSuccess'+ ((questionNum+1))).show();
        } else if (total === j && totalNan === 0) {
            // console.log('total = j');
            // console.log(total);
            $('#jsFeedbackFail' + (questionNum+1) + '-' + j).show();
        } else if ((total !== j) && (totalNan > 0)){
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

    question2.style.display = 'flex';
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
        $('#question' + (questionNum+1) + '-'  + j).removeClass('fail');
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