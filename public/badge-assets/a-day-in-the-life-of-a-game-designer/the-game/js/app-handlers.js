/*global $, Draggable*/
/*jslint eqeq:true plusplus:true*/

var oApp = oApp || {};

(function () {

    'use strict';

    oApp.clickortouchend = oApp.isTouch ? 'touchend' : 'click';

    /*
      set handlers for drag events
    */
    oApp.drg = Draggable;


    oApp.dragAnswer = oApp.drg.create(
        oApp.el.dragAnswer,
        {
            type: 'x,y',
            lockAxis: true,
            edgeResistance: 0,
            dragResistance: 0,
            bounds: '.answer',
            onDragStart: function () {
                oApp.answerDragStart(this);
            },
            onDragEnd: function () {
                oApp.answerDragEnd(this);
            }
        }
    );

    //  IE doesn't trigger end drag when dropped outside iframe. this combats that
    $('.answer').mouseleave(function(e) {
        oApp.dragAnswer[0].endDrag(e);
    });

    /*
      set handlers for click / touch events
    */
    oApp.el.startLevel.on(oApp.clickortouchend, function () {
        oApp.startLevel();
        return false;
    });

    oApp.el.nextLevel.on(oApp.clickortouchend, function () {
        oApp.nextLevel();
        return false;
    });

    oApp.el.startGame.on(oApp.clickortouchend, function () {
        oApp.startGame();
        return false;
    });

    oApp.el.restartGame.on(oApp.clickortouchend, function () {
        oApp.restartGame();
        return false;
    });

    oApp.el.goToGameStatistics.on(oApp.clickortouchend, function () {
        oApp.createGameStatistics();
        return false;
    });

    oApp.el.helpButton.on(oApp.clickortouchend, function () {
        oApp.showHelp();
        return false;
    });

    oApp.el.backFromHelpButton.on(oApp.clickortouchend, function () {
        oApp.hideHelp();
        return false;
    });

    /*
      set handlers for keyboard events
    */
    $(document).keydown(function (e) {
        var iAsciiCode = e.keyCode || e.which;

        if (iAsciiCode >= 37 && iAsciiCode <= 40) {
            if (oApp.game.status === 'playing') {
                switch (iAsciiCode) {
                case 37:
                    oApp.userSwipedLeft();
                    break;
                case 38:
                    oApp.userSwipedUp();
                    break;
                case 39:
                    oApp.userSwipedRight();
                    break;
                case 40:
                    oApp.userSwipedDown();
                    break;
                }
            }
            return false;
        }

        if (iAsciiCode === 13) {
            switch (oApp.game.status) {
            case 'loading':
                oApp.startGame();
                break;
            case 'level intro':
                oApp.startLevel();
                break;
            case 'level completed':
                oApp.nextLevel();
                break;
            case 'last level completed':
                oApp.createGameStatistics();
                break;
            case 'game over':
                oApp.startGame();
                break;
            }

            return false;
        }

    });

}());