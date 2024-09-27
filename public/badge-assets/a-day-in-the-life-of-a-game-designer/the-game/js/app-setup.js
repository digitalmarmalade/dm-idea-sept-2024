/*global $*/
/*jslint eqeq:true plusplus:true*/

var oApp = oApp || {};

(function () {

    'use strict';

    oApp.debugTypes = false;

    //  elements
    oApp.el = {};
    oApp.el.answerButton = $('.jsAnswerButton');
    oApp.el.answerHolder = $('.jsAnswerHolder');
    oApp.el.backFromHelpButton = $('.jsBackFromHelp');
    oApp.el.background = $('.jsBackground');
    oApp.el.categorySelectHolder = $('.jsCategoryHolder');
    oApp.el.dragAnswer = $('.jsAnswerDrag');
    oApp.el.dragIntroLogo = $('.jsIntroLogoDrag');
    oApp.el.gameInstructions = $('.jsGameInstructions');
    oApp.el.gameStatistics = $('.jsGameStatistics');
    oApp.el.gameStatisticsLevelsOverview = $('.jsGameStatistics .jsLevelsOverview');
    oApp.el.gameSummary = $('.jsGameSummary');
    oApp.el.gameTitle = $('.jsGameTitle');
    oApp.el.goToGameStatistics = $('.jsGoToGameStatistics');
    oApp.el.helpButton = $('.jsHowToPlay');
    oApp.el.introScreen = $('.jsIntroScreen');
    oApp.el.levelDetails = $('.jsLevelDetails');
    oApp.el.levelIntro = $('.jsLevelIntro');
    oApp.el.levelName = $('.jsLevelName');
    oApp.el.loadingScreen = $('.jsLoadingScreen');
    oApp.el.nextLevel = $('.jsNextLevel');
    oApp.el.pageGameEnded = $('.jsPageGameEnded');
    oApp.el.pageHome = $('.jsPageHome');
    oApp.el.questionHolder = $('.jsQuestionHolder');
    oApp.el.restartGame = $('.jsRestartGame');
    oApp.el.scoreBest = $('.jsScoreBest');
    oApp.el.scoreHolder = $('.jsScoreHolder');
    oApp.el.scoreHolderNotOne = $('.jsScoreHolderNotOne');
    oApp.el.scorePersonalBestAlert = $('.jsPersonalBestAlert');
    oApp.el.scoreQuestion = $('.jsScoreQuestion');
    oApp.el.startGame = $('.jsStartGame');
    oApp.el.startLevel = $('.jsStartLevel');
    oApp.el.theGame = $('.jsTheGame');

    //  settings
    oApp.settings = {};
    oApp.settings.usePresetCategories = true;
    oApp.settings.screenWidth = screen.width;
    oApp.settings.dragAnswerPixelTolerance = oApp.settings.screenWidth / 100 * 15;
    oApp.settings.dragAnswerPixelToleranceNeg = oApp.settings.dragAnswerPixelTolerance * -1;

    //  game defaults
    oApp.setDefaultGame();

    //  user data
    oApp.initialiseSettings();

}());