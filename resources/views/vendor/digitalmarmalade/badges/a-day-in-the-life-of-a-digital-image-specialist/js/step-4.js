/*globals $, scrollReveal, showError*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    var config = { vFactor: 0.20, mobile: false, delay: 'once' };
    window.sr = new scrollReveal();

    $(function () {

        var rightAnswers = 0;

        $('#catImage1, #catImage2, #catImage3, #catImage4, #catImage5, #catImage6, #catImage7, #catImage8').draggable({
            revert: "invalid",
            drag: function (event, ui) {
                $('body').addClass('dragging');
                $(this).addClass('being-dragged');
            },
            stop: function (event, ui) {
                $('body').removeClass('dragging');
            }
        });

        $('#droppable1').droppable({
            accept: "#catImage1, #catImage8",
            drop: function (event, ui) {
                $(this).append(ui.draggable.css({position: 'static'}));
                rightAnswers++;
                if (rightAnswers === 8) {
                    $('#clickTrigger').trigger('click');
                    $('#wordWithMood').addClass('visible');
                    $("html, body").animate({ scrollTop: $(document).height() }, "slow")
                }
            }
        });

        $('#droppable2').droppable({
            accept: "#catImage2, #catImage7",
            drop: function (event, ui) {
                $(this).append(ui.draggable.css({position: 'static'}));
                rightAnswers++;
                if (rightAnswers === 8) {
                    $('#clickTrigger').trigger('click');
                    $('#wordWithMood').addClass('visible');
                    $("html, body").animate({ scrollTop: $(document).height() }, "slow")
                }
            }
        });

        $('#droppable3').droppable({
            accept: "#catImage4, #catImage6",
            drop: function (event, ui) {
                $(this).append(ui.draggable.css({position: 'static'}));
                rightAnswers++;
                if (rightAnswers === 8) {
                    $('#clickTrigger').trigger('click');
                    $('#wordWithMood').addClass('visible');
                    $("html, body").animate({ scrollTop: $(document).height() }, "slow")

                }
            }
        });

        $('#droppable4').droppable({
            accept: "#catImage3, #catImage5",
            drop: function (event, ui) {
                $(this).append(ui.draggable.css({position: 'static'}));
                rightAnswers++;
                if (rightAnswers === 8) {
                    $('#clickTrigger').trigger('click');
                    $('#wordWithMood').addClass('visible');
                    $("html, body").animate({ scrollTop: $(document).height() }, "slow")
                }
            }
        });

    });

    function validateMysteriousCheckboxes() {
        var correctAnswers = 0;
        if (!$('#q1-colourful').is(":checked")) {
            correctAnswers++;
        }
        if ($('#q1-dark').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q1-light').is(":checked")) {
            correctAnswers++;
        }
        if ($('#q1-high-contrast').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q1-low-contrast').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q1-sepia').is(":checked")) {
            correctAnswers++;
        }
        if (correctAnswers === 6) {
            $('#q2').addClass('visible');
            $('#clickTrigger1').trigger('click');
        }
    }
    window.validateMysteriousCheckboxes = validateMysteriousCheckboxes;

    function validateRelaxedCheckboxes() {
        var correctAnswers = 0;
        if (!$('#q3-colourful').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q3-dark').is(":checked")) {
            correctAnswers++;
        }
        if ($('#q3-light').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q3-high-contrast').is(":checked")) {
            correctAnswers++;
        }
        if ($('#q3-low-contrast').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q3-sepia').is(":checked")) {
            correctAnswers++;
        }
        if (correctAnswers === 6) {
            $('#moveon').addClass('visible');
            $('#clickTrigger3').trigger('click');
        }
    }
    window.validateRelaxedCheckboxes = validateRelaxedCheckboxes;

    function validateHappyCheckboxes() {
        var correctAnswers = 0;
        if ($('#q2-colourful').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q2-dark').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q2-light').is(":checked")) {
            correctAnswers++;
        }
        if ($('#q2-high-contrast').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q2-low-contrast').is(":checked")) {
            correctAnswers++;
        }
        if (!$('#q2-sepia').is(":checked")) {
            correctAnswers++;
        }
        if (correctAnswers === 6) {
            $('#q3').addClass('visible');
            $('#clickTrigger2').trigger('click');
        }
    }
    window.validateHappyCheckboxes = validateHappyCheckboxes;

    $('#taskChoice1a').click(function () {
        $('#taskChoice2').addClass('visible');
        $(this).addClass('selected');
        $('#taskChoice1b').addClass('no-selected');
        $('body').removeClass('show-error');
    });

    $('#taskChoice1b').click(function () {
        showError();
        return false;
    });

    $('#taskChoice2a').click(function () {
        showError();
        return false;
    });

    $('#taskChoice2b').click(function () {
        $('#taskChoice3').addClass('visible');
        $(this).addClass('selected');
        $('#taskChoice2a').addClass('no-selected');
        $('body').removeClass('show-error');
    });

    $('#taskChoice3a').click(function () {
        $('#dragGame').addClass('visible');
        $('body').removeClass('show-error');
        $(this).addClass('selected');
        $('#taskChoice3b').addClass('no-selected');
    });

    $('#taskChoice3b').click(function () {
        showError();
        return false;
    });

    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 2000);
    }

    oBadges.stepCompleted();

}());
