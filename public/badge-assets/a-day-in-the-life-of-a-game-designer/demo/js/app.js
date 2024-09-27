/*global $, Draggable, oAppFunctions, TweenMax*/

var oApp = oApp || oAppFunctions || {};

(function () {

    'use strict';

    //  create objects
    oApp.currentQuestion = {};
    oApp.drg = Draggable;
    oApp.el = {};
    oApp.options = {};
    oApp.questions = {};
    oApp.settings = {};
    oApp.timers = {};

    //  elements
    oApp.el.answerHolder = $('.jsAnswerHolder');
    oApp.el.background = $('.jsBackground');
    oApp.el.categorySelectHolder = $('.jsCategoryHolder');
    oApp.el.dragAnswer = $('.jsAnswerDrag');
    oApp.el.dragIntroLogo = $('.jsIntroLogoDrag');
    oApp.el.pageGameEnded = $('.jsPageGameEnded');
    oApp.el.pageHome = $('.jsPageHome');
    oApp.el.scorePersonalBestAlert = $('.jsPersonalBestAlert');
    oApp.el.questionHolder = $('.jsQuestionHolder');
    oApp.el.scoreBest = $('.jsScoreBest');
    oApp.el.scoreHolder = $('.jsScoreHolder');
    oApp.el.scoreQuestion = $('.jsScoreQuestion');

    //  options
    oApp.options.timeLimit = 3000;
    oApp.options.dwellTime = 0;
    oApp.options.dragDistance = 15;
    oApp.options.questionTypes = ['Add', 'Subtract', 'Multiply', 'Divide'];

    //  questions
    oApp.questions.scoreTotal = 0;

    //  settings
    oApp.settings.questionTypes = oApp.options.questionTypes;
    oApp.settings.backgroundTimerClass = 'background-points-representation';
    oApp.settings.screenWidth = screen.width;
    oApp.settings.dragAnswerPixelTolerance = oApp.settings.screenWidth / 100 * oApp.options.dragDistance;
    oApp.settings.dragAnswerPixelToleranceNeg = oApp.settings.dragAnswerPixelTolerance * -1;

    //  storage
    oApp.LS = oApp.getLS('swipe-game') || {};


    oApp.init = function () {

        var iLoop,
            checked = '',
            type = '',
            HTML = '';

        oApp.resetSettings();

        for (iLoop = 0; iLoop < oApp.options.questionTypes.length; iLoop = iLoop + 1) {
            checked = '';
            type = oApp.options.questionTypes[iLoop];
            if (oApp.LS.categories && oApp.LS.categories.indexOf(type) > -1) {
                checked = 'checked="checked"';
            }
            if (iLoop === 0) {
                checked = 'checked="checked"';
            }
            HTML += '<li><input type="checkbox" name="' + type + '" id="questiontype_' + type + '" ' + checked + ' class="checkbox-' + type + '"><label for="questiontype_' + type + '" class="label-' + type + '"></label></li>';
        }

        oApp.el.categorySelectHolder.html(HTML);

    };

    oApp.resetSettings = function () {
        oApp.settings.questinoNumberMax = 10;
        oApp.settings.questinoNumberMin = 2;
        oApp.settings.fibonacciHi = 2;
        oApp.settings.fibonacciLo = 1;
    };

    oApp.newQuestion = function () {
        TweenMax.to(oApp.el.dragAnswer, 0, {y: screen.height, x: 0});
        oApp.createQuestion();
        oApp.showQuestion();
    };

    oApp.createQuestion = function () {

        var type = oApp.settings.questionTypes[Math.floor(Math.random() * oApp.settings.questionTypes.length)];

        switch (type) {

        case 'Add':
            oApp.increaseQuestionLimitUsingFibonacci();
            oApp.createQuestionParts();
            oApp.currentQuestion.question = oApp.currentQuestion.number1 + ' + ' + oApp.currentQuestion.number2;
            oApp.currentQuestion.answer = oApp.currentQuestion.optionIsCorrect === 1 ? oApp.currentQuestion.number1 + oApp.currentQuestion.number2 : oApp.currentQuestion.number1 + oApp.currentQuestion.number2 + (Math.floor(Math.random() * 12) + 1);
            break;

        case 'Subtract':
            oApp.increaseQuestionLimitUsingFibonacci();
            oApp.createQuestionParts();
            oApp.currentQuestion.question = oApp.currentQuestion.number1 + ' - ' + oApp.currentQuestion.number2;
            oApp.currentQuestion.answer = oApp.currentQuestion.optionIsCorrect === 1 ? oApp.currentQuestion.number1 - oApp.currentQuestion.number2 : oApp.currentQuestion.number1 -  oApp.currentQuestion.number2 + (Math.floor(Math.random() * 12) + 1);
            break;

        case 'Multiply':
            oApp.settings.questinoNumberMax += 1;
            oApp.createQuestionParts();
            oApp.currentQuestion.question = oApp.currentQuestion.number1 + ' &times; ' + oApp.currentQuestion.number2;
            oApp.currentQuestion.answer = oApp.currentQuestion.optionIsCorrect === 1 ? oApp.currentQuestion.number1 * oApp.currentQuestion.number2 : oApp.currentQuestion.number1 * (oApp.currentQuestion.number2 + 1);
            break;

        case 'Divide':
            oApp.settings.questinoNumberMax += 1;
            oApp.createQuestionParts();
            oApp.currentQuestion.answer = oApp.currentQuestion.optionIsCorrect === 1 ? oApp.currentQuestion.number1 : oApp.currentQuestion.number1 + 1;
            oApp.currentQuestion.question = (oApp.currentQuestion.number1 * oApp.currentQuestion.number2) + ' &divide; ' + oApp.currentQuestion.number2;
            break;

        }
    };

    oApp.increaseQuestionLimitUsingFibonacci = function () {
        oApp.settings.fibonacciHi = oApp.settings.fibonacciHi + oApp.settings.fibonacciLo;
        oApp.settings.questinoNumberMax = oApp.settings.fibonacciHi;
    };

    oApp.createQuestionParts = function () {
        oApp.currentQuestion.number1 = Math.floor((Math.random() * (oApp.settings.questinoNumberMax - oApp.settings.questinoNumberMin + 1)) + oApp.settings.questinoNumberMin);
        oApp.currentQuestion.number2 = Math.floor((Math.random() * (oApp.settings.questinoNumberMax - oApp.settings.questinoNumberMin + 1)) + oApp.settings.questinoNumberMin);
        oApp.currentQuestion.optionIsCorrect = Math.round(Math.random());
    };

    oApp.showQuestion = function () {
        oApp.el.questionHolder.html(oApp.currentQuestion.question);
        oApp.el.answerHolder.html(oApp.currentQuestion.answer);
        TweenMax.to(oApp.el.dragAnswer, 0.1, {y: 0, x: 0});
        oApp.currentQuestion.startTime = (new Date()).getTime();
        oApp.el.background.addClass(oApp.settings.backgroundTimerClass);
        oApp.el.background.removeClass('time-up');
        oApp.timers.background = setTimeout(function () {oApp.clearBackground(); }, oApp.options.timeLimit);
    };


    oApp.letterDragStart = function (a) {
        oApp.currentQuestion.startX = a.x;
    };

    oApp.letterDragEndTop = function (a) {
        oApp.currentQuestion.endX = a.x;

        if (oApp.currentQuestion.endX > oApp.settings.dragAnswerPixelToleranceNeg && oApp.currentQuestion.endX < oApp.settings.dragAnswerPixelTolerance) {
            TweenMax.to(oApp.el.dragAnswer, 0.1, {x: 0});
            return false;
        }
        if (oApp.currentQuestion.endX < oApp.settings.dragAnswerPixelToleranceNeg) {
            TweenMax.to(oApp.el.dragAnswer, 0.5, {x: (screen.width * -1)});
            oApp.userChoseNoMatch();
        }
        if (oApp.currentQuestion.endX > oApp.settings.dragAnswerPixelTolerance) {
            TweenMax.to(oApp.el.dragAnswer, 0.5, {x: screen.width});
            oApp.userChoseMatch();
        }

    };

    oApp.introLogoDragEndTop = function (a) {
        a.disable();
        $(a.target).add('.loading-screen').fadeOut();
    };

    oApp.userChoseMatch = function () {
        if (oApp.currentQuestion.optionIsCorrect === 1) {
            oApp.userAnsweredCorrectly();
        } else {
            oApp.userAnsweredIncorrectly();
        }
    };

    oApp.userChoseNoMatch = function () {
        if (oApp.currentQuestion.optionIsCorrect === 0) {
            oApp.userAnsweredCorrectly();
        } else {
            oApp.userAnsweredIncorrectly();
        }
    };

    oApp.userAnsweredCorrectly = function () {
        oApp.currentQuestion.endTime = (new Date()).getTime();
        oApp.clearBackground();
        oApp.currentQuestion.score = oApp.options.timeLimit - (oApp.currentQuestion.endTime - oApp.currentQuestion.startTime);
        oApp.currentQuestion.score = oApp.currentQuestion.score < 0 ? 0 : oApp.currentQuestion.score;
        oApp.el.scoreQuestion.text('+' + oApp.convertNumberToStringWithThousandSeparators(oApp.currentQuestion.score));
        oApp.questions.scoreTotal = oApp.questions.scoreTotal + oApp.currentQuestion.score;
        oApp.questions.scoreTotalFormatted = oApp.convertNumberToStringWithThousandSeparators(oApp.questions.scoreTotal);
        oApp.el.scoreHolder.text(oApp.questions.scoreTotalFormatted);
        $('body').addClass('animate');
        setTimeout(
            oApp.newQuestion,
            oApp.options.dwellTime
        );
        setTimeout(function () {
            $('body').removeClass('animate');
        }, 600);
    };

    oApp.userAnsweredIncorrectly = function () {
        oApp.LS.scores = oApp.LS.scores || {};
        oApp.LS.scores.best = oApp.LS.scores.best || {};
        oApp.LS.scores.best = oApp.questions.scoreTotal;
        oApp.LS.scores.cats = oApp.LS.scores.cats || {};
        if (oApp.questions.scoreTotal > 0 && (oApp.LS.scores.cats[oApp.settings.questionTypesAsString] === undefined || oApp.questions.scoreTotal > oApp.LS.scores.cats[oApp.settings.questionTypesAsString])) {
            oApp.LS.scores.cats[oApp.settings.questionTypesAsString] = oApp.questions.scoreTotal;
            oApp.el.scorePersonalBestAlert.show();
        }
        oApp.setLS('swipe-game', oApp.LS);
        oApp.el.scoreBest.text(oApp.convertNumberToStringWithThousandSeparators(oApp.LS.scores.cats[oApp.settings.questionTypesAsString] || 0));
        oApp.el.pageGameEnded.show();
    };


    oApp.clearBackground = function () {
        oApp.el.background.removeClass(oApp.settings.backgroundTimerClass);
        oApp.el.background.addClass('time-up');
        clearTimeout(oApp.timers.background);
    };


    $('.jsStartGame').on('click', function () {
        if (oApp.haveCategoriesBeenSelected()) {
            oApp.el.pageHome.hide();
            oApp.createQuestion();
            oApp.showQuestion();
        } else {
            alert('pick some cats');
        }

        return false;
    });

    $('.jsBackFromHelp').on('click', function () {

        $('.intro-screen').css('left', '0%');
        $('.about-the-game-screen').css('left', '-100%');
        return false;
    });
    $('.jsHowToPlay').on('click', function () {

        $('.intro-screen').css('left', '100%');
        $('.about-the-game-screen').css('left', '0%');
        return false;
    });

    $('.jsPickCategories').on('click', function () {

        $('.intro-screen').css('left', '-100%');
        $('.about-the-game-screen').css('left', '-100%');
        return false;
    });

    oApp.haveCategoriesBeenSelected = function () {
        var iLoop,
            type,
            el;

        oApp.settings.questionTypes = [];

        for (iLoop = 0; iLoop < oApp.options.questionTypes.length; iLoop = iLoop + 1) {
            type = oApp.options.questionTypes[iLoop];
            el = $('#questiontype_' + type);
            if (el.prop('checked')) {
                oApp.settings.questionTypes.push(type);
            }
        }

        oApp.LS.categories = oApp.LS.categories || [];
        oApp.LS.categories = oApp.settings.questionTypes;
        oApp.setLS('swipe-game', oApp.LS);

        oApp.settings.questionTypesAsString = oApp.settings.questionTypes.join('_');

        if (oApp.settings.questionTypes.length < 1) {
            return false;
        }

        return true;
    };


    oApp.dragAnswer = oApp.drg.create(
        oApp.el.dragAnswer,
        {
            type: 'x',
            edgeResistance: 0,
            dragResistance: 0,
            bounds: '.answer',
            onDragStart: function () {
                oApp.letterDragStart(this);
            },
            onDragEnd: function () {
                oApp.letterDragEndTop(this);
            }
        }
    );

    //  IE doesn't trigger end drag when dropped outside iframe. this combats that
    $('.answer').mouseleave(function(e) {
        oApp.dragAnswer[0].endDrag(e);
    });

    $('.jsChooseNewCats').on('click', function () {
        oApp.clearGame();
        oApp.el.pageHome.show();
        oApp.el.pageGameEnded.hide();
        return false;
    });

    $('.jsRestartGame').on('click', function () {
        oApp.clearGame();
        oApp.newQuestion();
        oApp.el.pageGameEnded.hide();
        $('.jsPersonalBestAlert').hide();
        return false;
    });

    oApp.clearGame = function () {
        oApp.resetSettings();
        oApp.el.scoreQuestion.text('');
        oApp.el.scoreHolder.text('0');
        oApp.questions.scoreTotal = 0;
    };

    oApp.init();

}());