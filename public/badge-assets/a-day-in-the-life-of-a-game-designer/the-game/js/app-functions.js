/*global $, TweenMax*/
/*jslint eqeq:true plusplus:true*/

var oApp = oApp || {};

(function () {

    'use strict';

    oApp.setDefaultGame = function () {

        oApp.game = {};
        oApp.game.status = 'loading';

        oApp.game.meta = {
            title: 'Untitled Game'
        };
        oApp.game.branding = {};

        oApp.game.settings = {};
        oApp.game.settings.timeLimit = 3000;
        oApp.game.settings.dwellTime = 250;
        oApp.game.settings.stopOnIncorrectAnswer = false;
        oApp.game.settings.allowPasses = false;

        oApp.game.actions = {};
        oApp.game.actions.swipes = {};
        oApp.game.actions.swipes.left = 'incorrect';
        oApp.game.actions.swipes.right = 'correct';
        oApp.game.actions.swipes.down = false;
        oApp.game.actions.swipes.up = false;

        oApp.game.levels = [];

    };

    oApp.initialiseSettings = function () {
        oApp.user = {};
        oApp.user.currentLevel = 0;
        oApp.user.scoreTotal = 0;
        oApp.user.scoreTotalFormatted = '';
        oApp.user.numberAsked = 0;
        oApp.user.numberAnsweredCorrectly = 0;
        oApp.user.numberAnsweredIncorrectly = 0;
        oApp.user.numberAnsweredWithPass = 0;
        oApp.user.levelData = [];
        oApp.currentQuestion = {};
        oApp.timers = {
            circles: {}
        };
    };

    oApp.init = function (src) {

        oApp.src = src || 'data.json';

        if (typeof oApp.src === 'string') {
            oApp.loadGameplayJson = (function () {
                $.getJSON(oApp.src, function (resp) {
                    if (resp.data === undefined || resp.data.grid === undefined) {
                        oApp.handleFailedJsonLoading(resp);
                        return false;
                    }
                    oApp.game = $.extend(true, oApp.game, resp.data);
                    oApp.debug([oApp.game], 'config');
                    if (oApp.settings.usePresetCategories === undefined || oApp.settings.usePresetCategories !== true) {
                        oApp.applyJson();
                    } else {
                        oApp.loadCategories();
                    }
                });
            }());
        }

        if (typeof oApp.src === 'object') {
            oApp.game = $.extend(true, oApp.game, oApp.src);
            oApp.debug([oApp.game], 'config');
            if (oApp.settings.usePresetCategories === undefined || oApp.settings.usePresetCategories !== true) {
                oApp.applyJson();
            } else {
                oApp.loadCategories();
            }
        }
    };

    oApp.loadCategories = function (src) {

        oApp.loadGameplayJson = (function () {
            $.getJSON('/badge-assets/a-day-in-the-life-of-a-game-designer/the-game/categories.json', function (resp) {
                if (resp.data === undefined || resp.data.categories === undefined) {
                    oApp.handleFailedJsonLoading(resp);
                    return false;
                }
                oApp.categories = resp.data.categories;
                oApp.applyJson();
            });
        }());

    };


    oApp.handleFailedJsonLoading = function (resp) {
        if (resp.error === undefined) {
            console.warn('Return data does not include data or error object');
        } else {
            if (resp.error.message !== undefined) {
                console.warn(resp.error.message);
            } else {
                console.warn('Return error object does not contain a message');
            }
        }
        oApp.showErrorScreen('Sorry there was a problem loading this game');
    };

    oApp.showErrorScreen = function (message) {
        oApp.el.gameTitle.html('ERROR');
        oApp.el.gameSummary.html(message);
        $('.branding-main-fg').animate({
            color: 'rgba(200,200,200,1)'
        }, 200);
    };

    oApp.applyJson = function () {

        var i;

        //  nasty but need to check we have arrays not objects
        if (typeof oApp.game.grid.data === 'object' && oApp.game.grid.data.length === undefined) {
            oApp.game.grid.data = oApp.convertObjectToArray(oApp.game.grid.data);
        }
        if (oApp.game.actions.swipes.length === 0) {
            oApp.game.actions.swipes = {left: 'incorrect', right: 'correct', down: false, up: false};
        }

        oApp.el.gameTitle.html(oApp.game.meta.title);
        oApp.el.gameSummary.html(oApp.game.meta.summary);
        oApp.el.gameInstructions.html(oApp.game.meta.instructions);

        document.title = oApp.game.meta.title;
        //document.body.style.color = 'rgba(' + oApp.getColorRGBString('default-fg') + ',1)';

        $('.branding-main-bg').animate({
            backgroundColor: oApp.game.branding['main-bg']
        }, 200);
        $('.branding-main-fg').animate({
            color: oApp.game.branding['main-fg']
        }, 200);
        $('.branding-accent-bg').animate({
            backgroundColor: oApp.game.branding['accent-bg']
        }, 200);
        $('.branding-accent-fg').animate({
            color: oApp.game.branding['accent-fg']
        }, 200);

        for (i in oApp.game.actions.swipes) {
            if (oApp.game.actions.swipes[i] !== false && oApp.game.actions.swipes[i] !== '') {
                oApp.el.answerButton.filter('.' + oApp.game.actions.swipes[i]).removeClass('hide').addClass(i);
            }
        }
        oApp.el.answerButton.find('svg').css({fill: oApp.game.branding['accent-fg']});

        oApp.game.settings.allowPasses = oApp.game.actions.swipes.down === 'pass' || oApp.game.actions.swipes.left === 'pass' || oApp.game.actions.swipes.right === 'pass' || oApp.game.actions.swipes.up === 'pass';

        if (oApp.game.levels.length < 1) {
            oApp.game.levels = oApp.createDefaultsLevels();
        }

        oApp.hideLoadingScreen();

    };

    oApp.createDefaultsLevels = function () {

        return [
            {
                name: "Easy",
                categories: [1],
                answersInLevel: 3,
                correctAnswerPercentage: 50,
                pointsPerCorrectAnswer: 10
            },
            {
                name: "Medium",
                categories: [1, 2],
                answersInLevel: 3,
                correctAnswerPercentage: 50,
                pointsPerCorrectAnswer: 10
            },
            {
                name: "Hard",
                categories: [1, 2, 3],
                answersInLevel: 3,
                correctAnswerPercentage: 50,
                pointsPerCorrectAnswer: 10
            }
        ];
    };

    oApp.hideLoading = function () {
        oApp.initialiseSettings();
        oApp.hideLoadingScreen();
    };

    oApp.startGame = function () {
        oApp.initialiseSettings();
        oApp.createLevelIntroScreen();
        oApp.hideLoadingScreen();
        oApp.showLevelIntroScreen();
        oApp.showGameScreen();
        oApp.hideIntroScreen();
        oApp.hideGameStatisticsScreen();
    };

    oApp.createLevelIntroScreen = function () {
        oApp.updateGameStatus('level intro');
        var data = oApp.game.levels[oApp.user.currentLevel],
            levelDefaultDetails = '',
            categoryNames = [],
            cat,
            catData,
            q,
            img;

        data.pointsPerCorrectAnswer = data.pointsPerCorrectAnswer || oApp.game.settings.pointsPerCorrectAnswer;

        for (cat in data.categories) {
            if (data.categories.hasOwnProperty(cat)) {
                categoryNames.push(oApp.game.grid.labels[data.categories[cat]]);
            }
        }

        levelDefaultDetails += 'Answer ' + data.answersInLevel + ' question';
        levelDefaultDetails += data.answersInLevel === 1 ? ' ' : 's ';
        levelDefaultDetails += 'from the following categor';
        levelDefaultDetails += data.categories.length > 1 ? 'ies:<br/>' : 'y:<br/>';
        levelDefaultDetails += '<ul class="level-categories">';

        if (oApp.settings.usePresetCategories === undefined || oApp.settings.usePresetCategories !== true) {
            for (cat in data.categories) {
                if (data.categories.hasOwnProperty(cat)) {
                    console.log(cat, data.categories[cat]);
                    levelDefaultDetails += '<li>' + oApp.game.grid.labels[data.categories[cat]] + '</li>';
                }
            }
        } else {
            for (cat in data.categories) {
                if (data.categories.hasOwnProperty(cat)) {
                          levelDefaultDetails += '<li>' + oApp.categories[oApp.game.grid.labels[data.categories[cat]]].name + '</li>';
                    catData = oApp.categories[oApp.game.grid.labels[data.categories[cat]]].data;
                    for (q in catData) {
                        if (catData.hasOwnProperty(q)) {
                            $('<img/>')[0].src = '/badge-assets/a-day-in-the-life-of-a-game-designer/the-game/img/' + oApp.game.grid.labels[data.categories[cat]] + '/' + catData[q].image;
                        }
                    }
                }
            }
        }
        levelDefaultDetails += '</ul>';

        if (oApp.game.settings.hasTimer) {
            levelDefaultDetails += '';
            oApp.showBackground();
        } else {
            levelDefaultDetails += 'Each answer is worth ' + data.pointsPerCorrectAnswer + ' point';
            levelDefaultDetails += data.pointsPerCorrectAnswer === 1 ? '.' : 's.';
            oApp.hideBackground();
        }

        oApp.el.levelName.html(data.name || 'Level ' + (oApp.user.currentLevel + 1));
        oApp.el.levelDetails.html(levelDefaultDetails);

    };

    oApp.showLevelIntroScreen = function () {
        oApp.el.levelIntro.removeClass('hide');
    };

    oApp.newQuestion = function () {
        TweenMax.to(oApp.el.dragAnswer, 0, {y: screen.height, x: 0});
        oApp.createQuestion();
        oApp.showQuestion();
    };

    oApp.createQuestion = function () {

        var questionData = {};

        questionData.levelData = oApp.game.levels[0];
        questionData.levelData.id = oApp.user.currentLevel;
        questionData.randomPercent = oApp.rand(1, 100);
        questionData.answerToGet = questionData.randomPercent > oApp.game.levels[oApp.user.currentLevel].correctAnswerPercentage ? 'incorrect' : 'correct';
        questionData.questionItemId = oApp.rand(0, oApp.game.grid.data.length - 1);
        questionData.answerItemId = questionData.answerToGet === 'correct' ? questionData.questionItemId : oApp.rand(0, oApp.game.grid.data.length - 1);
        questionData.categoryId = oApp.game.levels[oApp.user.currentLevel].categories[oApp.rand(0, oApp.game.levels[oApp.user.currentLevel].categories.length - 1)];
        questionData.categoryName = oApp.game.grid.labels[questionData.categoryId];

        if (oApp.settings.usePresetCategories === undefined || oApp.settings.usePresetCategories !== true) {
            questionData.item = oApp.game.grid.data[questionData.questionItemId][0];
            questionData.question = oApp.game.grid.data[questionData.answerItemId][questionData.categoryId];
            questionData.correctAnswer = oApp.game.grid.data[questionData.questionItemId][questionData.categoryId];
            questionData.incorrectAnswer = oApp.game.grid.data[questionData.answerItemId][questionData.categoryId];
        } else {
            questionData.question = oApp.categories[questionData.categoryName].data[questionData.questionItemId].image;
            questionData.item = oApp.categories[questionData.categoryName].data[questionData.answerItemId].answer;
            questionData.correctAnswer = oApp.categories[questionData.categoryName].data[questionData.questionItemId].answer;
            questionData.incorrectAnswer = oApp.categories[questionData.categoryName].data[questionData.answerItemId].answer;
        }

        questionData.isCorrect = questionData.correctAnswer == questionData.incorrectAnswer;
        questionData.answer = questionData.isCorrect ? 'correct' : 'incorrect';


        oApp.debug([questionData], 'question');

        oApp.currentQuestion = {};
        oApp.currentQuestion.item = questionData.item;
        oApp.currentQuestion.question = questionData.question;
        oApp.currentQuestion.answer = questionData.answer;
        oApp.currentQuestion.isCorrect = questionData.isCorrect;
        oApp.currentQuestion.categoryName = questionData.categoryName;

    };

    oApp.showQuestion = function () {
        oApp.el.answerHolder.html(oApp.currentQuestion.question);
        oApp.el.answerHolder.html('<img src="/badge-assets/a-day-in-the-life-of-a-game-designer/the-game/img/' + oApp.currentQuestion.categoryName + '/' + oApp.currentQuestion.question + '" />');
        oApp.el.questionHolder.html(oApp.currentQuestion.item);
        TweenMax.to(oApp.el.dragAnswer, 0.1, {y: 0, x: 0});
        oApp.currentQuestion.startTime = (new Date()).getTime();
        oApp.updateGameStatus('playing');
        oApp.resetAndStartTimer();
    };

    oApp.resetAndStartTimer = function () {

        var idx,
            numberOfCircles,
            timePerCircle;

        for (idx in oApp.timers.circles) {
            if (oApp.timers.circles.hasOwnProperty(idx)) {
                clearTimeout(oApp.timers.circles[idx]);
            }
        }
        $('ul.timer-animation li span').animate({
            backgroundColor: oApp.game.branding['accent-bg']
        }, 0);

        oApp.timers.background = setTimeout(function () {oApp.clearBackground(); }, oApp.game.settings.timeLimit);

        numberOfCircles = $('ul.timer-animation li').length;
        timePerCircle = oApp.game.settings.timeLimit / numberOfCircles;

        $($('ul.timer-animation li').get().reverse()).each(function (idx) {
            var el = $(this).find('span'),
                delay = idx * timePerCircle;

            oApp.timers.circles[idx] = setTimeout(function () {
                el.animate({
                    backgroundColor: 'rgba(0,0,0,0.1)'
                }, timePerCircle);
            }, delay);

        });

    };

    oApp.answerDragStart = function (a) {
        oApp.currentQuestion.startX = a.x;
    };

    oApp.answerDragEnd = function (a) {
        oApp.currentQuestion.endX = a.x;
        oApp.currentQuestion.endY = a.y;

        if (oApp.currentQuestion.endX !== 0 && oApp.currentQuestion.endX > oApp.settings.dragAnswerPixelToleranceNeg && oApp.currentQuestion.endX < oApp.settings.dragAnswerPixelTolerance) {
            oApp.tweenAnswerToStartPoint();
            oApp.debug('Min X not reached', 'user');
            return false;
        }
        if (oApp.currentQuestion.endX !== 0 && oApp.currentQuestion.endX < oApp.settings.dragAnswerPixelToleranceNeg) {
            oApp.debug('user swiped left', 'user');
            oApp.userSwipedLeft();
        }
        if (oApp.currentQuestion.endX !== 0 && oApp.currentQuestion.endX > oApp.settings.dragAnswerPixelTolerance) {
            oApp.debug('user swiped right', 'user');
            oApp.userSwipedRight();
        }

        if (oApp.currentQuestion.endY !== 0 && oApp.currentQuestion.endY > oApp.settings.dragAnswerPixelToleranceNeg && oApp.currentQuestion.endY < oApp.settings.dragAnswerPixelTolerance) {
            oApp.tweenAnswerToStartPoint();
            oApp.debug('Min Y not reached', 'user');
            return false;
        }
        if (oApp.currentQuestion.endY !== 0 && oApp.currentQuestion.endY < oApp.settings.dragAnswerPixelToleranceNeg) {
            oApp.debug('user swiped up', 'user');
            oApp.userSwipedUp();
        }
        if (oApp.currentQuestion.endY !== 0 && oApp.currentQuestion.endY > oApp.settings.dragAnswerPixelTolerance) {
            oApp.debug('user swiped down', 'user');
            oApp.userSwipedDown();
        }

    };

    oApp.userSwipedRight = function () {
        oApp.processUserSwipe(oApp.game.actions.swipes.right, 'right');
    };

    oApp.userSwipedLeft = function () {
        oApp.processUserSwipe(oApp.game.actions.swipes.left, 'left');
    };

    oApp.userSwipedUp = function () {
        oApp.processUserSwipe(oApp.game.actions.swipes.up, 'up');
    };

    oApp.userSwipedDown = function () {
        oApp.processUserSwipe(oApp.game.actions.swipes.down, 'down');
    };

    oApp.processUserSwipe = function (action, direction) {
        switch (action) {
        case 'correct':
            oApp.tweenAnswerToDirection(direction);
            if (oApp.currentQuestion.isCorrect) {
                oApp.userAnsweredCorrectly();
            } else {
                oApp.userAnsweredIncorrectly();
            }
            break;
        case 'incorrect':
            oApp.tweenAnswerToDirection(direction);
            if (oApp.currentQuestion.isCorrect) {
                oApp.userAnsweredIncorrectly();
            } else {
                oApp.userAnsweredCorrectly();
            }
            break;
        case 'pass':
            oApp.tweenAnswerToDirection(direction);
            oApp.userAnsweredWithPass();
            break;
        case false:
        default:
            oApp.tweenAnswerToStartPoint();
            break;
        }
    };

    oApp.userAnsweredCorrectly = function () {
        oApp.user.numberAsked++;
        oApp.user.levelData[oApp.user.currentLevel].numberAsked++;
        oApp.user.numberAnsweredCorrectly++;
        oApp.user.levelData[oApp.user.currentLevel].numberAnsweredCorrectly++;

        oApp.currentQuestion.endTime = (new Date()).getTime();
        oApp.clearBackground();

        oApp.currentQuestion.timeTaken = oApp.currentQuestion.endTime - oApp.currentQuestion.startTime;
        oApp.currentQuestion.timeLimit = oApp.game.settings.timeLimit;
        oApp.currentQuestion.timePercentageUsed = Math.floor(oApp.currentQuestion.timeTaken / oApp.currentQuestion.timeLimit * 100);
        oApp.currentQuestion.maxPoints = oApp.game.levels[oApp.user.currentLevel].pointsPerCorrectAnswer;
        oApp.currentQuestion.score = parseInt(oApp.game.levels[oApp.user.currentLevel].pointsPerCorrectAnswer, 10);

        if (oApp.game.settings.hasTimer) {
            oApp.currentQuestion.score = (100 - oApp.currentQuestion.timePercentageUsed) * oApp.currentQuestion.maxPoints / 100;
            oApp.currentQuestion.score = oApp.currentQuestion.score < 0 ? 0 : oApp.currentQuestion.score;
            oApp.debug('user answered correctly: time taken = ' + oApp.currentQuestion.timeTaken + 'ms - points received: ' + oApp.currentQuestion.score, 'user');
        } else {
            oApp.debug('user answered correctly: points received: ' + oApp.currentQuestion.score, 'user');
        }

        oApp.el.scoreQuestion.text('+' + oApp.convertNumberToStringWithThousandSeparators(oApp.currentQuestion.score));
        oApp.user.levelData[oApp.user.currentLevel].score += oApp.currentQuestion.score;
        oApp.user.scoreTotal = oApp.user.scoreTotal + oApp.currentQuestion.score;
        oApp.user.scoreTotalFormatted = oApp.convertNumberToStringWithThousandSeparators(oApp.user.scoreTotal);
        oApp.el.scoreHolder.text(oApp.user.scoreTotalFormatted);
        if (oApp.user.scoreTotal === 1) {
            oApp.el.scoreHolderNotOne.text('');
        } else {
            oApp.el.scoreHolderNotOne.text('s');
        }
        oApp.el.scoreQuestion.addClass('animate');
        if (oApp.user.levelData[oApp.user.currentLevel].numberAsked >= oApp.game.levels[oApp.user.currentLevel].answersInLevel) {
            oApp.handleEndOfLevel();
            return false;
        }
        setTimeout(
            oApp.newQuestion,
            oApp.game.settings.dwellTime
        );
    };

    oApp.userAnsweredIncorrectly = function () {
        oApp.user.numberAsked++;
        oApp.user.levelData[oApp.user.currentLevel].numberAsked++;
        oApp.user.numberAnsweredIncorrectly++;
        oApp.user.levelData[oApp.user.currentLevel].numberAnsweredIncorrectly++;
        oApp.debug('user answered incorrectly', 'user');
        if (!oApp.game.settings.stopOnIncorrectAnswer) {
            oApp.currentQuestion.endTime = (new Date()).getTime();
            oApp.clearBackground();
            if (oApp.user.levelData[oApp.user.currentLevel].numberAsked >= oApp.game.levels[oApp.user.currentLevel].answersInLevel) {
                oApp.handleEndOfLevel();
                return false;
            }
            setTimeout(
                oApp.newQuestion,
                oApp.game.settings.dwellTime
            );
            return false;
        }

        oApp.handleEndOfLevel();
    };

    oApp.userAnsweredWithPass = function () {
        oApp.user.numberAsked++;
        oApp.user.levelData[oApp.user.currentLevel].numberAsked++;
        oApp.user.numberAnsweredWithPass++;
        oApp.user.levelData[oApp.user.currentLevel].numberAnsweredWithPass++;
        oApp.debug('user passed', 'user');
        oApp.currentQuestion.endTime = (new Date()).getTime();
        oApp.clearBackground();
        if (oApp.user.levelData[oApp.user.currentLevel].numberAsked >= oApp.game.levels[oApp.user.currentLevel].answersInLevel) {
            oApp.handleEndOfLevel();
            return false;
        }
        setTimeout(
            oApp.newQuestion,
            oApp.game.settings.dwellTime
        );
        return false;
    };

    oApp.tweenAnswerToStartPoint = function (speed) {
        speed = speed || 0.1;
        TweenMax.to(oApp.el.dragAnswer, speed, {x: 0, y: 0});
    };

    oApp.tweenAnswerToDirection = function (direction) {
        switch (direction) {
        case 'right':
            TweenMax.to(oApp.el.dragAnswer, 0.5, {x: screen.width});
            break;
        case 'left':
            TweenMax.to(oApp.el.dragAnswer, 0.5, {x: (screen.width * -1)});
            break;
        case 'up':
            TweenMax.to(oApp.el.dragAnswer, 0.5, {y: (screen.width * -1)});
            break;
        case 'down':
            TweenMax.to(oApp.el.dragAnswer, 0.5, {y: screen.width});
            break;
        }
    };

    oApp.clearBackground = function () {
        oApp.el.background.removeClass(oApp.settings.backgroundTimerClass);
        oApp.el.background.addClass('time-up');
        clearTimeout(oApp.timers.background);
    };

    oApp.handleEndOfLevel = function () {
        if (oApp.game.levels.length > (oApp.user.currentLevel + 1)) {
            oApp.el.pageGameEnded.addClass('hide');
            oApp.el.goToGameStatistics.addClass('hide');
            oApp.el.pageGameEnded.removeClass('hide');
            oApp.el.nextLevel.removeClass('hide');
            oApp.updateGameStatus('level completed');
        } else {
            oApp.el.nextLevel.addClass('hide');
            oApp.el.pageGameEnded.removeClass('hide');
            oApp.el.goToGameStatistics.removeClass('hide');
            oApp.updateGameStatus('last level completed');
            if (window.parent.gameCompleted !== undefined) {
                window.parent.gameCompleted();
            }
        }
        oApp.el.pageGameEnded.show();
    };

    oApp.getColorRGBString = function (type, defaultRgbString) {
        defaultRgbString = defaultRgbString || '255,255,255';
        if (oApp.game.branding[type] === undefined) {
            return defaultRgbString;
        }
        return oApp.game.branding[type].join(',');
    };

    oApp.clearGame = function () {
        oApp.initialiseSettings();
        oApp.el.scoreQuestion.text('');
        oApp.el.scoreHolder.text('0');
    };

    oApp.startLevel = function () {
        oApp.user.levelData[oApp.user.currentLevel] = {};
        oApp.user.levelData[oApp.user.currentLevel].numberAsked = 0;
        oApp.user.levelData[oApp.user.currentLevel].numberAnsweredCorrectly = 0;
        oApp.user.levelData[oApp.user.currentLevel].numberAnsweredIncorrectly = 0;
        oApp.user.levelData[oApp.user.currentLevel].numberAnsweredWithPass = 0;
        oApp.user.levelData[oApp.user.currentLevel].score = 0;
        oApp.hideLevelIntroScreen();
        oApp.newQuestion();
    };

    oApp.nextLevel = function () {
        oApp.el.pageGameEnded.hide();
        oApp.user.currentLevel++;
        oApp.createLevelIntroScreen();
        oApp.showLevelIntroScreen();
    };

    oApp.restartGame = function () {
        oApp.clearGame();
        oApp.startGame();
    };
    oApp.showHelp = function () {
        $('.about-the-game-screen').addClass('visible');
        $('.intro-screen').addClass('help-showing');
    };
    oApp.hideHelp = function () {
        $('.about-the-game-screen').removeClass('visible');
        $('.intro-screen').removeClass('help-showing');
    };
    oApp.updateGameStatus = function (status) {
        oApp.game.status = status;
    };

    oApp.createGameStatistics = function () {
        oApp.updateGameStatus('game over');
        oApp.hideBackground();
        oApp.hideLoadingScreen();
        oApp.hideLevelIntroScreen();
        oApp.hideGameScreen();
        oApp.buildGameStatistics();
        oApp.showGameStatistics();
        oApp.increasePlaysCountIfLive();
    };

    oApp.buildGameStatistics = function () {
        var HTML = '',
            level = {},
            i;

        for (i in oApp.game.levels) {
            if (oApp.game.levels.hasOwnProperty(i)) {
                level = {};
                level.name = oApp.game.levels[i].name || 'Level ' + (parseInt(i, 10) + 1);
                level.questions = oApp.user.levelData[i].numberAsked;
                level.correct = oApp.user.levelData[i].numberAnsweredCorrectly;
                level.incorrect = oApp.user.levelData[i].numberAnsweredIncorrectly;
                level.passed = oApp.user.levelData[i].numberAnsweredWithPass;
                level.score = oApp.convertNumberToStringWithThousandSeparators(oApp.user.levelData[i].score);
                level.score += level.score == 1 ? ' point' : ' points';
                HTML += oApp.buildLevelStatistics(level);
            }
        }
        oApp.el.gameStatisticsLevelsOverview.html(HTML);
    };

    oApp.buildLevelStatistics = function (levelData) {
        var HTML = '';
        HTML += '<li><strong>' + levelData.name + ': ' + levelData.score + '</strong><br />';
        HTML += levelData.correct + ' correct';
        HTML += ', ' + levelData.incorrect + ' incorrect';
        HTML += ', ' + levelData.passed + ' passed';
        HTML += '</li>';
        return HTML;
    };

    oApp.hideBackground = function () {
        oApp.el.background.addClass('hide');
    };

    oApp.hideGameScreen = function () {
        oApp.el.pageGameEnded.addClass('hide');
        //oApp.el.scoreHolder.addClass('hide');
        oApp.el.theGame.addClass('hide');
    };

    oApp.hideGameStatisticsScreen = function () {
        oApp.el.gameStatistics.addClass('hide');
    };

    oApp.hideLevelIntroScreen = function () {
        oApp.el.levelIntro.addClass('hide');
    };

    oApp.hideLoadingScreen = function () {

        oApp.doBoxFit();
        var fontSize = $('#gameTitle .boxfitted').css('font-size');
        $('.game-title .boxfitted').css('font-size', fontSize);
        setTimeout(function () {
            oApp.el.loadingScreen.addClass('hide');
        }, 2000);
    };
    oApp.doBoxFit = function () {
        //console.log('boxfit');
        $('.game-title').boxfit({multiline: true, maximum_font_size: 60});
        $('.game-summary').boxfit({multiline: true, maximum_font_size: 20, line_height: '140%', align_middle: false});
    };
    oApp.hideIntroScreen = function () {
        oApp.el.introScreen.addClass('game-started');
    };

    oApp.showBackground = function () {
        oApp.el.background.removeClass('hide');
    };

    oApp.showGameScreen = function () {
        oApp.el.theGame.removeClass('hide');
    };

    oApp.showGameStatistics = function () {
        oApp.el.gameStatistics.removeClass('hide');
    };

    oApp.handleWebkitScrollIssues = (function () {
        function ready() {
            var container = document.getElementsByClassName('scrollable')[0],
                subcontainer,
                subsubcontainer;

            if (container) {
                subcontainer = container.children[0];
                subsubcontainer = container.children[0].children[0];

                container.addEventListener('touchmove', function (evt) {
                    if (subsubcontainer.getBoundingClientRect().height > subcontainer.getBoundingClientRect().height) {
                        evt.stopPropagation();
                    }
                }, false);
            }
        }
        document.addEventListener('DOMContentLoaded', ready, false);
        document.addEventListener('touchmove', function (evt) {
            evt.preventDefault();
        }, false);
    }());

    oApp.increasePlaysCountIfLive = function () {
        if (oApp.game.id === undefined || oApp.game.api === undefined) {
            return false;
        }
        $.post(
            oApp.game.api,
            {action: 'increasePlayCount', id: oApp.game.id}
        );
    };

}());

/*
  CODE THAT FAILS LINTING - PLEASE EXPLAIN WHY FAILS
*/

//  fails due to minification
!function(a,b){"use strict";"function"==typeof define&&define.amd?define(["jquery"],function(c){return b(a,c)}):"object"==typeof exports?module.exports=b(a,require("jquery")):b(a,jQuery)}(this,function(a,b){"use strict";var c=function(c,d){return c.each(function(){var c,e,f,g,h,i,j,k;if(j={width:null,height:null,step_size:1,step_limit:200,align_middle:!0,align_center:!0,multiline:!1,minimum_font_size:5,maximum_font_size:null,line_height:"100%"},b.extend(j,d),j.width?(i=j.width,b(this).width(i+"px")):i=b(this).width(),j.height?(g=j.height,b(this).height(g+"px")):g=b(this).height(),i&&g){for(j.multiline||b(this).css("white-space","nowrap"),h=b(this).html(),0===b("<div>"+h+"</div>").find("span.boxfitted").length?(k=b(b("<span></span>").addClass("boxfitted").html(h)),b(this).html(k)):k=b(b(this).find("span.boxfitted")[0]),c=0,e=k,b(this).css("display","table"),e.css("display","table-cell"),j.align_middle&&e.css("vertical-align","middle"),j.align_center&&(b(this).css("text-align","center"),e.css("text-align","center")),e.css("line-height",j.line_height),e.css("font-size",j.minimum_font_size);b(this).width()<=i&&b(this).height()<=g&&!(c++>j.step_limit)&&(f=parseInt(e.css("font-size"),10),!(j.maximum_font_size&&f>j.maximum_font_size));)e.css("font-size",f+j.step_size);return e.css("font-size",parseInt(e.css("font-size"),10)-j.step_size),b(this)}return null!==a.console?console.info("Set static height/width on target DIV before using boxfit! Detected width: "+i+" height: "+g):void 0})};return b.fn.boxfit=function(a){return c(this,a)},c});