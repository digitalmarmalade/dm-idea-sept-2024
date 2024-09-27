/*globals $, showError*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    var q1 = false,
        q2a = false,
        q2b = false,
        q3 = false;


    $('#q1-1Check').click(function () {
        var givenAnswer = $('input#q1-1').val().toLowerCase(),
            trimmedAnswer = givenAnswer.replace(/(\r\n|\n|\r)/gm, "").replace(/ /g, '');
        console.log(trimmedAnswer);
        if (trimmedAnswer === 'https://www.vogue.co.uk/fashion/article/trainer-trends-2023'
            || trimmedAnswer === 'https://www.vogue.co.uk/fashion/article/trainer-trends-2023/') {
            $('#question2').addClass('visible');
        } else {
            $('#question2').removeClass('visible');
            showError();
            setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger1').click();
            }, 100);


        }

        return false;

    });

    $('#q1-2Check').click(function () {
        var givenAnswer = $('input#q1-2').val().toLowerCase(),
            trimmedAnswer = givenAnswer.replace(/(\r\n|\n|\r)/gm, "").replace(/ /g, ''),
            val = $('input#q1-2').val().toLowerCase(),
            array = ["nike"],
            i;

        if (oBadges.getMD5(trimmedAnswer) == '41fd220f05ed0d8c56e3b83af87d45d7') {
            $('#question3').addClass('visible');
        } else {
            $('#question3').removeClass('visible');
            showError();
            setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger2').click();
            }, 100);
        }

        for (i = 0; i < array.length; i++) {
            if (val.indexOf(array[i]) != -1) {
                $('#trainerColour1').css('background-color', '#f2ebdb');
                $('#trainerColour2').css('background-color', '#aea59c');
                return;
            }
        }

        return false;

    });

    $('#q1-3Check').click(function () {

        var givenAnswer = $('input#q1-3').val(),
            trimmedAnswer = givenAnswer.replace(/(\r\n|\n|\r)/gm, "").replace(/ /g, '');

        if (oBadges.getMD5(trimmedAnswer) == '093f65e080a295f8076b1c5722a46aa2') {
            $('#question4').addClass('visible');
        } else {
            $('#question4').removeClass('visible');
            showError();
            setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger3').click();
            }, 100);
        }

    });


    $('input#q1-3').bind("change keyup input", function () {


        // if there's a bad value
        //if (this.value.match(/[^a-zA-Z0-9\-_\s]/g)) {
        if (this.value.match(/[^0-9\-_\s]/g)) {
            // replace it with nothing
            this.value = this.value.replace(/[^a-zA-Z0-9\-_\s]/g, '');

        }
        $('#social-bar').css('width', $(this).val() + '%');
    });


    $('#q1-4Check').click(function () {

        var alphabetFull = ' ABCDEF',
            alphabetUser = '';

        if ($('#quote1 .btn-suitable').hasClass('active')) {
            alphabetUser += alphabetFull[1];
        }
        if ($('#quote2 .btn-suitable').hasClass('active')) {
            alphabetUser += alphabetFull[2];
        }
        if ($('#quote3 .btn-suitable').hasClass('active')) {
            alphabetUser += alphabetFull[3];
        }
        if ($('#quote4 .btn-suitable').hasClass('active')) {
            alphabetUser += alphabetFull[4];
        }
        if ($('#quote5 .btn-suitable').hasClass('active')) {
            alphabetUser += alphabetFull[5];
        }
        if ($('#quote6 .btn-suitable').hasClass('active')) {
            alphabetUser += alphabetFull[6];
        }

        if (oBadges.getMD5(alphabetUser) === 'ae69c26035822dcd39df8428d485f8f5') {
            $('#question5').addClass('visible');
        } else {
            $('#question5').removeClass('visible');
            showError();
            setTimeout(function () {
                $('body').stop(true);
            }, 100);
        }


    });

    $('#q1-5Check').click(function () {


        var correctAnswers = 0,
            givenAnswerQ4 = $('input#q1-4').val().toLowerCase(),
            trimmedAnswerQ4 = givenAnswerQ4.replace(/(\r\n|\n|\r)/gm, "").replace(/ /g, '');

        if (trimmedAnswerQ4 == 'the4ofus' ||
            trimmedAnswerQ4 == '4ofus' ||
            trimmedAnswerQ4 == 'the4ofus' ||
            trimmedAnswerQ4 == 'thefourofus' ||
            trimmedAnswerQ4 == 'fourofus' ||
            trimmedAnswerQ4 == 'https://www.the4ofus.co.uk/') {
            correctAnswers++;
        } else {
            showError('Try copying the company name from the Awards site.', 5000);
            return false;
        }

        if (correctAnswers > 0) {
            $('#moveon').addClass('visible');
        } else {
            showError();
        }



        return false;

    });


    $('.btn-suitable').click(function () {
        $(this).addClass('active');
        $(this).closest('.quote-holder').find('.btn-not-suitable').removeClass('active');
        $(this).closest('.quote-holder').removeClass('not-suitable').addClass('suitable');
        var quoteNumber = $(this).closest('ul').attr('id');
        return false;
    });
    $('.btn-not-suitable').click(function () {
        $(this).addClass('active');
        $(this).closest('.quote-holder').find('.btn-suitable').removeClass('active');
        $(this).closest('.quote-holder').removeClass('suitable').addClass('not-suitable');
        var quoteNumber = $(this).closest('ul').attr('id');
        return false;
    });


    function showError(message, length) {

        message = message || "Hmmm. That's not right. Take another look.";
        length = length || 2000;
        $('.not-right p').html(message);

        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, length);
    }



    oBadges.stepCompleted();

}());