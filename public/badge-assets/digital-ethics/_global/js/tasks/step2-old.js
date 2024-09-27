var questionNum = 0;
var activityLevels = {
    "0": "None",
    "1": "Low",
    "2": "Medium",
    "3": "High",
};



$(function(){
    $( "#sliderQuestion1").on("click", function (e) {
        console.log('questionNum');
        console.log(questionNum);
        $('#sliderLabel1').show();
    }).change();

    $( "#sliderQuestion1").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel1").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion2").on("click", function (e) {
        $('#sliderLabel2').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion2").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel2").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion3").on("click", function (e) {
        $('#sliderLabel3').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion3").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel3").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion4").on("click", function (e) {
        $('#sliderLabel4').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion4").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel4").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion5").on("click", function (e) {
        $('#sliderLabel5').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion5").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel5").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion6").on("click", function (e) {
        $('#sliderLabel6').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion6").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel6").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion7").on("click", function (e) {
        $('#sliderLabel7').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion7").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel7").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion8").on("click", function (e) {
        $('#sliderLabel8').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion8").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel8").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion9").on("click", function (e) {
        $('#sliderLabel9').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion9").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel9").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion10").on("click", function (e) {
        $('#sliderLabel10').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion10").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel10").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion11").on("click", function (e) {
        $('#sliderLabel11').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion11").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel11").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion12").on("click", function (e) {
        $('#sliderLabel12').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion12").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel12").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion13").on("click", function (e) {
        $('#sliderLabel13').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion13").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel13").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion14").on("click", function (e) {
        $('#sliderLabel14').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion14").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel14").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion15").on("click", function (e) {
        $('#sliderLabel15').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion15").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel15").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion16").on("click", function (e) {
        $('#sliderLabel16').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion16").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel16").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion17").on("click", function (e) {
        $('#sliderLabel17').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion17").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel17").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();

    $( "#sliderQuestion18").on("click", function (e) {
        $('#sliderLabel18').show();
        console.log('questionNum');
        console.log(questionNum);

    }).change();

    $( "#sliderQuestion18").on("change", function (e) {
        console.log('questionNum');
        console.log(questionNum);

        var lvl = activityLevels[this.value];
        var lbl = $("#sliderLabel18").text(lvl);
        var pct = (this.value - this.min) / (this.max - this.min);
        var px = ((this.clientWidth - 11) * pct) - ((lbl.width() - 10) / 2);
        lbl.css({ left: px });
    }).change();
});

function submitAnswer(id) {
    console.log('id ' + id);
    var ele = document.getElementById("sliderQuestion" + (id)).value;
    console.log(ele);
    $('.submitButton').hide();
    $('#jsFeedback-' + id).hide();
    $('#jsFeedback-' + id).find('.feedback__content li').hide();

    if (ele == 0) {
        $('#jsFeedbackNone-' + id + '-0').show();
        if (id === 3) {
            $('#jsFeedback-' + id).show();
            $('#jsFeedback-' + id)
                .find('.feedback__content li')
                .each(function(index, item){
                    $(item).delay((index + 1) * 1600).fadeIn('slow');
                });
        }
        if (id === 12) {
            $('#jsFeedback-' + id).show();
            $('#jsFeedback-' + id)
                .find('.feedback__content li')
                .each(function(index, item){
                    $(item).delay((index + 1) * 1600).fadeIn('slow');
                });
        }
    } else {
        if (ele == 1) {
            $('#jsFeedbackLow-' + id + '-1').show();
        } else if (ele == 2) {
            $('#jsFeedbackMedium-' + id + '-2').show();
        } else if (ele == 3) {
            $('#jsFeedbackHigh-' + id + '-3').show();
        }
        $('#jsFeedback-' + id).show();
        $('#jsFeedback-' + id)
            .find('.feedback__content li')
            .each(function (index, item) {
                $(item).delay((index + 1) * 1600).fadeIn('slow');
            });
    }
    document.getElementById("sliderQuestion" + (id)).disabled = true;
}

function continueToNextSlider() {
    console.log('continueToNextSlider');
    console.log('question' + (questionNum+1));

    $('.submitButton').show();
    var question1 = document.getElementById('question' + (questionNum+1)),
        question2 = document.getElementById('question' + (questionNum+2))
    ;
    console.log(question1);
    console.log(question2);

    if(!question1) return;

    if (getComputedStyle(question1).display === 'block') {
        question1.style.display = 'none';
        question2.style.display = 'block';

        questionNum++;
    } else {
        question1.style.display = 'block';
        question2.style.display = 'none';
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

    if (getComputedStyle(question1).display === 'block') {
        question1.style.display = 'none';
        question2.style.display = 'block';

        questionNum++;
    } else {
        question1.style.display = 'block';
        question2.style.display = 'none';
    }

    if ( questionNum === 3 ||
        questionNum === 6 ||
        questionNum === 9 ||
        questionNum === 12 ||
        questionNum === 15 ||
        questionNum === 18) {
        $('.dot-' + (questionNum+1)).addClass('completed').removeClass('active');
        $('.dot-' + (questionNum+1+3)).addClass('active');
    }

    scrollToTask(document.getElementById('sectionTask'));
}

function tryAgain(id) {
    $('#jsFeedbackNone-' + id + '-0').hide();
    $('input[name=options1]').prop('checked',false);

    $('.submitButton').show();
    document.getElementById("sliderQuestion" + (id)).disabled = false;
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