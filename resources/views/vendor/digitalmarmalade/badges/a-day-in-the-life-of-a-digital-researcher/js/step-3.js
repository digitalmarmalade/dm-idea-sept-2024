/*globals $, badgeRoot, showError*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    function showError(delay, text) {
        var defaults = {
            delay: 2000,
            text: "Hmmm. That's not right. Take another look."
        };
        text = text || defaults.text;
        delay = delay || defaults.delay;
        $('.not-right p').html(text);
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, delay);
    }

    var rightAnswers = 0;

    $('#postit1, #postit2, #postit3, #postit4, #postit5, #postit6').draggable({
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
        accept: "#postit1, #postit4",
        drop: function (event, ui) {
            $(this).append(ui.draggable.css({position: 'static'}));
            rightAnswers++;
            if (rightAnswers === 6) {
                $('#clickTrigger').trigger('click');
                $('#question2').addClass('visible');
            }
        }
    });

    $('#droppable2').droppable({
        accept: "#postit2, #postit6",
        drop: function (event, ui) {
            $(this).append(ui.draggable.css({position: 'static'}));
            rightAnswers++;
            if (rightAnswers === 6) {
                $('#clickTrigger').trigger('click');
                $('#question2').addClass('visible');
            }
        }
    });

    $('#droppable3').droppable({
        accept: "#postit3, #postit5",
        drop: function (event, ui) {
            $(this).append(ui.draggable.css({position: 'static'}));
            rightAnswers++;
            if (rightAnswers === 6) {
                $('#clickTrigger').trigger('click');
                $('#question2').addClass('visible');
            }
        }
    });

    $('#q2Check').click(function () {
        var givenAnswer1 = $('#q2-1').val(),
            givenAnswer2 = $('#q2-2').val(),
            givenAnswer3 = $('#q2-3').val();

        if (oBadges.getMD5(givenAnswer1) == '53a717fa92cd9b4eb82bd1ed94edb312' && oBadges.getMD5(givenAnswer2) == '4885938bbcc8f927854e4d0307d4467c' || oBadges.getMD5(givenAnswer2) == 'e4c2e8edac362acab7123654b9e73432' && oBadges.getMD5(givenAnswer3) == 'c4ca4238a0b923820dcc509a6f75849b') {
            $('#question3').addClass('visible');
        } else {
            $('#question3').removeClass('visible');
            showError();
			setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger').click();
            }, 100);

        }

        return false;

    });

    $('input#q2-1').bind("change keyup input", function () {
        var inputValue = $(this).val(),
            percentage = (inputValue / 2.5) * 100;
        $('#facebookBar').css('width', percentage + '%');
    });
    $('input#q2-2').bind("change keyup input", function () {
        var inputValue = $(this).val(),
            percentage = (inputValue / 2.5) * 100;
        $('#youtubeBar').css('width', percentage + '%');
    });
    $('input#q2-3').bind("change keyup input", function () {
        var inputValue = $(this).val(),
            percentage = (inputValue / 2.5) * 100;
        $('#instagramBar').css('width', percentage + '%');
    });

    $('input#q2-4').bind("change keyup input", function () {
        var inputValue = $(this).val(),
            sliceSize = (360 / 100) * inputValue;
        $('head').append("<style>#pieSlice::before{ transform:rotate(" + sliceSize + "deg); }</style>");
        if (sliceSize > 180) {
            $('#pieSlice').addClass('big');
        } else {
            $('#pieSlice').removeClass('big');
        }
    });

    $('#q4Check').click(function () {
        var givenAnswer1 = $('#q2-4').val();
        var givenAnswer2 = $('#q2-5').val();

        if (givenAnswer1 == 'MySpace' || givenAnswer1 == 'Myspace' && givenAnswer2 == '2004') {
            $('#moveon').addClass('visible');
        } else {
            $('#moveon').removeClass('visible');
            showError(4000, 'Hmmm, are you sure you are looking at the right year? Make sure you search for The rise of Social media in 2018 by Our World in Data');
			setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger2').click();
            }, 100);

        }

        return false;

    });

    oBadges.stepCompleted();

}());
