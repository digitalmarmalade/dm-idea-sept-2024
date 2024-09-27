/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadLs();

    if (oBadges.ls.data === undefined) {
        oBadges.ls.data = oBadges.getDefaultObject();
        oBadges.saveLs();
    }

    var currentQuestion = 1,
        gameAnswers = [
            '',
            'q1b',
            'q2c',
            'q3d',
            'q4e',
            'q5a',
            'q6c',
            'q7c',
            'q8e',
            'q9b',
            'q10d',
            'q11c',
            'q12d',
            'q13b',
            'q14e'
        ],
        correctAnswers = 0;

    oBadges.checkAnswers = function (question, answer) {
        if (gameAnswers[question] === answer) {
            $('#rightWrong' + question).addClass('answer-correct');
            correctAnswers++;
            $('#correctAnswerTotal').text(correctAnswers);
            $('#correctAnswerTotal2').text(correctAnswers);

            if (correctAnswers < 5) {
                $('#completeMessage').text('Looks like you need to brush up on your game history!');
            } else if (correctAnswers < 10) {
                $('#completeMessage').text('Not bad - about an average performance.');
            } else if (correctAnswers < 14) {
                $('#completeMessage').text('Very good, you clearly know your stuff!');
            } else if (correctAnswers === 14) {
                $('#completeMessage').text('Full marks - very impressive!');
            }

            $('#question' + currentQuestion).removeClass('active');
            currentQuestion++;
            $('#question' + currentQuestion).addClass('active');

            if (currentQuestion === 15) {
                oBadges.stepCompleted();
                $('#moveon').addClass('visible');
                $('.quiz').addClass('hide');
            }

        } else {

            var userAnswerIdx = oBadges.getAnswerLiIdxFromAnswer(answer),
                correctAnswerIdx = oBadges.getAnswerLiIdxFromAnswer(gameAnswers[question]),
                questionHolder = $('#question' + question);

            if (questionHolder.find('li.answer-removed').length < 3) {
                oBadges.hideInCorrectAnswer(correctAnswerIdx, question, userAnswerIdx);
                oBadges.hideInCorrectAnswer(correctAnswerIdx, question);
            }

        }
    };


    oBadges.hideInCorrectAnswer = function (correctIdx, question, answerIdx) {

        var collection = $('#question' + question).find('li'),
            answersIdxStillAvailable = [],
            randomPos,
            chosenPos;

        if (answerIdx !== undefined) {
            collection.eq(answerIdx).addClass('answer-removed');
        } else {
            collection.each(function (thisIdx) {
                if (thisIdx !== correctIdx && !$(this).hasClass('answer-removed')) {
                    answersIdxStillAvailable.push(thisIdx);
                }
            });
            randomPos = Math.floor((Math.random() * answersIdxStillAvailable.length));
            chosenPos = answersIdxStillAvailable[randomPos];
            collection.eq(chosenPos).addClass('answer-removed');
        }
    };

    oBadges.getAnswerLiIdxFromAnswer = function (answer) {
        return 'abcde'.indexOf(answer.slice(-1));
    };

    $('.question-radio').change(function () {

        var answer = $(this).attr('id');
        oBadges.checkAnswers(currentQuestion, answer);

    });

}());