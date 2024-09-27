var questionNum = 0;
var activityLevels = {
    "0": "None",
    "1": "Low",
    "2": "Medium",
    "3": "High",
};
lengthAnswer = 6;
totalInputAnswer = 0;
totalCorrectInputAnswer = 0;

var consequence = {
    state: [
        null,
        null,
        null,
        null,
        null,
        null,
    ]
}

var slider = {
    slide1: false,
    slide2: false,
    slide3: false,
}

$(function () {
    $("#case-study-activity-2-slider-2").hide();
    $("#case-study-activity-2-slider-3").hide();
    $("#case-study-activity-2-slider-4").hide();
    $("#case-study-activity-2-slider-5").hide();
    $("#case-study-activity-2-slider-6").hide();

    $("#case-study-activity-2-consequences-2").hide();
    $("#case-study-activity-2-consequences-3").hide();
    $("#case-study-activity-2-consequences-4").hide();
    $("#case-study-activity-2-consequences-5").hide();
    $("#case-study-activity-2-consequences-6").hide();

    $("#case-study-activity-2-slider-1").hide();

    // SLIDERS----------------------------------------------------------
    moveSlider();
});

function checkConsequences(opsi1, opsi2, radioName, correctAnswer, number) {
    var radioButtons = document.getElementsByName(radioName);
    var correct;
    var wrong;

    if (correctAnswer === 'pos') {
        correct = opsi1;
        wrong = opsi2;

        if (radioButtons[0].checked) {
            $('input[id=' + wrong + ']').prop('checked', false);
            $('input[id=' + wrong + ']').removeClass('fail');
            $('label[for=' + wrong + ']').removeClass('animate__animated animate__shakeX');

            $('input[id=' + correct + ']').addClass('success');
            consequence.state[number - 1] = true;

        }


        if (radioButtons[1].checked) {
            $('input[id=' + correct + ']').prop('checked', false);
            $('input[id=' + correct + ']').removeClass('success');

            $('input[id=' + wrong + ']').addClass('fail');
            $('label[for=' + wrong + ']').addClass('animate__animated animate__shakeX');

            consequence.state[number - 1] = false;
        }
    } else {
        correct = opsi2;
        wrong = opsi1;

        if (radioButtons[1].checked) {
            $('input[id=' + wrong + ']').prop('checked', false);
            $('input[id=' + wrong + ']').removeClass('fail');
            $('label[for=' + wrong + ']').removeClass('animate__animated animate__shakeX');

            $('input[id=' + correct + ']').addClass('success');

            consequence.state[number - 1] = true;

        }


        if (radioButtons[0].checked) {
            $('input[id=' + correct + ']').prop('checked', false);
            $('input[id=' + correct + ']').removeClass('success');

            $('input[id=' + wrong + ']').addClass('fail');
            $('label[for=' + wrong + ']').addClass('animate__animated animate__shakeX');

            consequence.state[number - 1] = false;
        }
    }
}

function submitConsequences(caseId, number) {

    document.getElementById("option" + caseId + "-1-1").disabled = true;
    document.getElementById("option" + caseId + "-1-2").disabled = true;

    document.getElementById("option" + caseId + "-2-1").disabled = true;
    document.getElementById("option" + caseId + "-2-2").disabled = true;

    document.getElementById("option" + caseId + "-3-1").disabled = true;
    document.getElementById("option" + caseId + "-3-2").disabled = true;

    document.getElementById("option" + caseId + "-4-1").disabled = true;
    document.getElementById("option" + caseId + "-4-2").disabled = true;

    document.getElementById("option" + caseId + "-5-1").disabled = true;
    document.getElementById("option" + caseId + "-5-2").disabled = true;

    document.getElementById("option" + caseId + "-6-1").disabled = true;
    document.getElementById("option" + caseId + "-6-2").disabled = true;

    // console.log('id ' + id);
    $('#submitCase' + caseId + 'Activity1').hide();

    // console.log(consequence.state[0]);
    // console.log(consequence.state[1]);
    // console.log(consequence.state[2]);
    // console.log(consequence.state[3]);
    // console.log(consequence.state[4]);
    // console.log(consequence.state[5]);

    var emptyAnswers = 0;
    var falseAnswers = 0;
    var trueAnswers = 0;

    for (var i = 0; i < consequence.state.length; i++) {
        if (consequence.state[i] === null) {
            emptyAnswers++;
        } else if (consequence.state[i] === true) {
            trueAnswers++;
        } else if (consequence.state[i] === false) {
            falseAnswers++;
        }
    }

    // console.log('emptyAnswers: ' + emptyAnswers);
    // console.log('totalCorrectInputAnswer: ' + trueAnswers);
    // console.log('emptyAnswers: ' + emptyAnswers);

    if (trueAnswers === lengthAnswer) {
        $('#jsFeedbackSuccess-' + caseId).show();
        $('#jsFeedbackFail-' + caseId).hide();
        $('#jsFeedbackFail-empty-1-' + caseId).hide();
    } else if (emptyAnswers > 0) {
        $('#jsFeedbackSuccess-' + caseId).hide();
        $('#jsFeedbackFail-' + caseId).hide();
        $('#jsFeedbackFail-empty-1-' + caseId).show();
    } else if (falseAnswers > 0) {
        $('#jsFeedbackSuccess-' + caseId).hide();
        $('#jsFeedbackFail-' + caseId).show();
        $('#jsFeedbackFail-empty-1-' + caseId).hide();
    }

}

function submitSlider(caseId) {
    document.getElementById("sliderQuestion-individual-" + (questionNum + 1)).disabled = true;
    document.getElementById("sliderQuestion-society-" + (questionNum + 1)).disabled = true;
    document.getElementById("sliderQuestion-global-" + (questionNum + 1)).disabled = true;

    // console.log('id ' + caseId);
    // var ele1 = document.getElementById("sliderQuestion-individual-" + questionNum+1)))).value;
    // var ele2 = document.getElementById("sliderQuestion-society" + (questionNum+1)).value;
    // var ele3 = document.getElementById("sliderQuestion-global-" + (questionNum+1)).value;
    // console.log(ele);
    // console.log(ele);
    // console.log(ele);
    $('.submitButton').hide();

    // console.log('---');
    // console.log($("#sliderLabel-individual-" + (questionNum+1));
    // console.log($("#sliderLabel-individual-" + (questionNum+1)[0].innerText);
    // console.log($("#sliderLabel-society-" + (questionNum+1))[0].innerText);
    // console.log($("#sliderLabel-global-"+ (questionNum+1))[0].innerText);

    // this.showHideFeedbackLevels('individual', 1); // low
    // this.showHideFeedbackLevels('society', 1); // medium
    // this.showHideFeedbackLevels('global', 1); // high

    var ele1 = document.getElementById("sliderQuestion-individual-" + (questionNum + 1)).value;
    if (ele1 === '1' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-individual-low-' + caseId).show();
        $('#jsFeedback-individual-medium-' + caseId).hide();
        $('#jsFeedback-individual-high-' + caseId).hide();
    } else if (ele1 === '2' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-individual-low-' + caseId).hide();
        $('#jsFeedback-individual-medium-' + caseId).show();
        $('#jsFeedback-individual-high-' + caseId).hide();
    } else if (ele1 === '3' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-individual-low-' + caseId).hide();
        $('#jsFeedback-individual-medium-' + caseId).hide();
        $('#jsFeedback-individual-high-' + caseId).show();
    } else if (ele1 === '0') {
        // console.log('ELEMNT 1');
        $('#jsFeedback-individual-low-' + caseId).hide();
        $('#jsFeedback-individual-medium-' + caseId).hide();
        $('#jsFeedback-individual-high-' + caseId).hide();
    }

    var ele2 = document.getElementById("sliderQuestion-society-" + (questionNum + 1)).value;
    if (ele2 === '1' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-society-low-' + caseId).show();
        $('#jsFeedback-society-medium-' + caseId).hide();
        $('#jsFeedback-society-high-' + caseId).hide();
    } else if (ele2 === '2' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-society-low-' + caseId).hide();
        $('#jsFeedback-society-medium-' + caseId).show();
        $('#jsFeedback-society-high-' + caseId).hide();
    } else if (ele2 === '3' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-society-low-' + caseId).hide();
        $('#jsFeedback-society-medium-' + caseId).hide();
        $('#jsFeedback-society-high-' + caseId).show();
    } else if (ele2 === '0') {
        // console.log('ELEMNT 1');
        $('#jsFeedback-society-low-' + caseId).hide();
        $('#jsFeedback-society-medium-' + caseId).hide();
        $('#jsFeedback-society-high-' + caseId).hide();
    }

    var ele3 = document.getElementById("sliderQuestion-global-" + (questionNum + 1)).value;
    if (ele3 === '1' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-global-low-' + caseId).show();
        $('#jsFeedback-global-medium-' + caseId).hide();
        $('#jsFeedback-global-high-' + caseId).hide();
    } else if (ele3 === '2' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-global-low-' + caseId).hide();
        $('#jsFeedback-global-medium-' + caseId).show();
        $('#jsFeedback-global-high-' + caseId).hide();
    } else if (ele3 === '3' && slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log('ELEMNT 1');
        $('#jsFeedback-global-low-' + caseId).hide();
        $('#jsFeedback-global-medium-' + caseId).hide();
        $('#jsFeedback-global-high-' + caseId).show();
    } else if (ele3 === '0') {
        // console.log('ELEMNT 1');
        $('#jsFeedback-global-low-' + caseId).hide();
        $('#jsFeedback-global-medium-' + caseId).hide();
        $('#jsFeedback-global-high-' + caseId).hide();
    }

    if (slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        switch ($("#sliderLabel-individual-" + caseId)[0].innerText) {
            case 'LOW':
                $('#jsFeedback-individual-low-' + caseId).show();
                break;
            case 'MEDIUM':
                $('#jsFeedback-individual-medium-' + caseId).show();
                break;
            case 'HIGH':
                $('#jsFeedback-individual-high-' + caseId).show();
                break;
        }

        switch ($("#sliderLabel-society-" + caseId)[0].innerText) {
            case 'LOW':
                $('#jsFeedback-society-low-' + caseId).show();
                break;
            case 'MEDIUM':
                $('#jsFeedback-society-medium-' + caseId).show();
                break;
            case 'HIGH':
                $('#jsFeedback-society-high-' + caseId).show();
                break;
        }

        switch ($("#sliderLabel-global-" + caseId)[0].innerText) {
            case 'LOW':
                $('#jsFeedback-global-low-' + caseId).show();
                break;
            case 'MEDIUM':
                $('#jsFeedback-global-medium-' + caseId).show();
                break;
            case 'HIGH':
                $('#jsFeedback-global-high-' + caseId).show();
                break;
        }
    }

    // console.log(slider.slide1);
    // console.log(slider.slide2);
    // console.log(slider.slide3);

    if (slider.slide1 === true && slider.slide2 === true && slider.slide3 === true) {
        // console.log(caseId, caseId === 6);
        if (caseId === 6) {
            $('#jsFeedback-final-slider-' + caseId).removeClass('hide');
        } else {
            $('#jsFeedbackSuccess-slider-' + caseId).show();
        }
    } else {
        $('#jsFeedbackFail-slider-' + caseId).show();
    }
}

function updateDots() {
    for (var i = 1; i <= 6; i++) {
        if ((questionNum + 1) === i) {
            $('.dot-' + (questionNum + 1)).addClass('completed').removeClass('active');
            $('.dot-' + (questionNum + 2)).addClass('active');
        }
    }
}

function tryAgainConsequence(caseId) {
    $('#jsFeedbackFail-' + caseId).hide();
    $('#jsFeedbackFail-empty-1-' + caseId).hide();

    $('#submitCase' + caseId + 'Activity1').show();

    document.getElementById("option" + caseId + "-1-1").disabled = false;
    document.getElementById("option" + caseId + "-1-2").disabled = false;

    document.getElementById("option" + caseId + "-2-1").disabled = false;
    document.getElementById("option" + caseId + "-2-2").disabled = false;

    document.getElementById("option" + caseId + "-3-1").disabled = false;
    document.getElementById("option" + caseId + "-3-2").disabled = false;

    document.getElementById("option" + caseId + "-4-1").disabled = false;
    document.getElementById("option" + caseId + "-4-2").disabled = false;

    document.getElementById("option" + caseId + "-5-1").disabled = false;
    document.getElementById("option" + caseId + "-5-2").disabled = false;

    document.getElementById("option" + caseId + "-6-1").disabled = false;
    document.getElementById("option" + caseId + "-6-2").disabled = false;

}

function tryAgainSlider(caseId) {
    $('#jsFeedbackFail-slider-' + caseId).hide();

    $('#submitCase' + (questionNum + 1) + 'Activity2').show();

    document.getElementById("sliderQuestion-individual-" + caseId).disabled = false;
    document.getElementById("sliderQuestion-society-" + caseId).disabled = false;
    document.getElementById("sliderQuestion-global-" + caseId).disabled = false;
}

function continueToSlider(caseId) {
    $("#case-study-activity-2-slider-" + caseId).show();
    $("#case-study-activity-2-consequences-" + caseId).hide();

    $("#submitCase" + caseId + "Activity2").show();

    moveSlider();
}

function continueToTask() {
    $('#continueToTask').hide();
    $('.task').show();
    $('#case-study-panel-' + (questionNum+1)).show();
    scrollToTask(document.getElementById('sectionTask'));
}

function scrollToTask(target) {
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

    scroll = function (c, a, b, i) {
        i++;
        if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function () {
            scroll(c, a, b, i);
        }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

function continueToNextCase() {
    $('#case-study-panel-' + (questionNum + 1)).hide();
    $('#case-study-panel-' + (questionNum + 2)).show();
    $('#case-study-activity-2-slider-' + (questionNum + 1)).hide();
    $('#header--case-study-' + (questionNum + 2)).show();
    $('#header--case-study-' + (questionNum + 1)).hide();

    updateDots();

    $('#case-study-activity-2-consequences-' + (questionNum + 2)).show();
    $('#submitCase' + (questionNum + 2) + 'Activity1').show();

    scrollToTask(document.getElementById('sectionTask'));
    questionNum++;

    resetConsequenceState();
    resetSlider();
}

function resetConsequenceState() {
    return consequence = {
        state: [
            null,
            null,
            null,
            null,
            null,
            null,
        ]
    }
}

function resetSlider() {
    return slider = {
        slide1: false,
        slide2: false,
        slide3: false,
    }
}

function moveSlider() {
    $("#sliderQuestion-individual-" + (questionNum + 1)).on("change click", function (e) {
        var ele1 = document.getElementById("sliderQuestion-individual-" + (questionNum + 1)).value;
        if (ele1 !== '0') {
            // console.log('****');
            // console.log(questionNum + 1);
            $('#sliderLabel-individual-' + (questionNum + 1)).show();

            slider.slide1 = true;
            var lvl = activityLevels[this.value];
            var lbl = $("#sliderLabel-individual-" + (questionNum + 1)).text(lvl);
            var pct = (this.value - this.min) / (this.max - this.min);
            var sliderWidth = this.clientWidth || this.offsetWidth || this.scrollWidth;

            var labelWidth = lbl.outerWidth();
            var labelPer = (labelWidth / sliderWidth) * 100;
            var iconWidth = 16;
            var px = pct * 95 - labelPer / 2;
            lbl.css({left: px + "%"});
        } else {
            $('#sliderLabel-individual-' + (questionNum + 1)).hide();
            slider.slide1 = false;

            $('#jsFeedback-individual-low-1').hide();
            $('#jsFeedback-individual-medium-1').hide();
            $('#jsFeedback-individual-high-1').hide();
        }
    });

    $("#sliderQuestion-society-" + (questionNum + 1)).on("change click", function (e) {
        var ele2 = document.getElementById("sliderQuestion-society-" + (questionNum + 1)).value;
        if (ele2 !== '0') {
            $('#sliderLabel-society-' + (questionNum + 1)).show();

            slider.slide2 = true;
            var lvl = activityLevels[this.value];
            var lbl = $("#sliderLabel-society-" + (questionNum + 1)).text(lvl);
            var pct = (this.value - this.min) / (this.max - this.min);
            var sliderWidth = this.clientWidth || this.offsetWidth || this.scrollWidth;

            var labelWidth = lbl.outerWidth();
            var labelPer = (labelWidth / sliderWidth) * 100;
            var iconWidth = 16;
            var px = pct * 95 - labelPer / 2;
            lbl.css({left: px + "%"});
        } else {
            $('#sliderLabel-society-' + (questionNum + 1)).hide();
            slider.slide2 = false;
            $('#jsFeedback-society-low-1').hide();
            $('#jsFeedback-society-medium-1').hide();
            $('#jsFeedback-society-high-1').hide();
        }
    });

    $("#sliderQuestion-global-" + (questionNum + 1)).on("change click", function (e) {
        var ele3 = document.getElementById("sliderQuestion-global-" + (questionNum + 1)).value;

        if (ele3 !== '0') {
            $('#sliderLabel-global-' + (questionNum + 1)).show();

            slider.slide3 = true;
            var lvl = activityLevels[this.value];
            var lbl = $("#sliderLabel-global-" + (questionNum + 1)).text(lvl);
            var pct = (this.value - this.min) / (this.max - this.min);
            var sliderWidth = this.clientWidth || this.offsetWidth || this.scrollWidth;

            var labelWidth = lbl.outerWidth();
            var labelPer = (labelWidth / sliderWidth) * 100;
            var iconWidth = 16;
            var px = pct * 95 - labelPer / 2;
            lbl.css({left: px + "%"});
        } else {
            $('#sliderLabel-global-' + (questionNum + 1)).hide();
            slider.slide3 = false;
            $('#jsFeedback-global-low-1').hide();
            $('#jsFeedback-global-medium-1').hide();
            $('#jsFeedback-global-high-1').hide();
        }

    });
}