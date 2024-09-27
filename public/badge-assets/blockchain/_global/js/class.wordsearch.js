/*
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
*/
/*
DM Wordsearch main class.


 * @version     $Id: class.wordsearch.js 536 2014-08-12 09:17:07Z Sandy $
*/

/**
The main class for Wordsearch puzzles.
This file builds on the puzzle base class and uses functions from it.
No event handlers should be kept in this class.  They should be kept in an external file.
**/

/*globals $, Draggable, oApp, PuzzleBase, TweenMax*/
/*jslint eqeq:true*/

/**
 * extend generic puzzle class for wordsearch
 * @constructor
 */
function Wordsearch() {

    'use strict';

    PuzzleBase.call(this);



}
Wordsearch.prototype = new PuzzleBase();
Wordsearch.prototype.constructor = Wordsearch;

/**
 * initialisation method
 * @returns {boolean}
 */
Wordsearch.prototype.init = function () {

    'use strict';

    var o = this,
        JSON = this.getPuzzleJsonData('/badge-assets/blockchain/data.json');

    o.debugactive = 0;
    o.initDebugger();

    JSON.done(function (data) {
      console.log(data);
        o.puzzle.JSON = data.data;
        o.setUpPuzzle();
        //o.resetPuzzle();
    });

	if (o.device.settings.isTouch) {
		$('html').addClass('touch');
    } else {
		$('html').addClass('no-touch');
    }

    return true;

};

/**
 * method that is called once puzzle data has been pulled in
 * @returns {boolean}
 */
Wordsearch.prototype.setUpPuzzle = function () {

    'use strict';

    var o = this;

    //  create puzzle objects from imported JSON data
    o.definePuzzleObjects();
    o.puzzle.meta.localStoragePrefix = 'wordsearch';
    o.puzzle.meta.localStorageItem = o.puzzle.meta.id;
    o.puzzle.meta.taggingItem = 'wordsearch';
    o.puzzle.meta.displayName = 'Wordsearch';
    o.puzzle.meta.taggingGameType = o.puzzle.meta.difficulty.toLowerCase();
    o.puzzle.meta.taggingGameId = o.puzzle.meta.id.toLowerCase();

    //  load any default settings overrides and any additional puzzle specific settings
    setTimeout(
        function () {
            o.loadPuzzleDefaultSettings();
        },
        0
    );

    //  update quickjump menu
    setTimeout(
        function () {
            o.updateQuickJumpMenu();
        },
        0
    );

    //  read puzzle dimensions
    setTimeout(
        function () {
            o.readPuzzleElementsDimensions();
        },
        0
    );

    //  add event handlers now grid is set up
    setTimeout(
        function () {
            o.addEventHandlers();
        },
        0
    );

    //  add some aditional objects
    setTimeout(
        function () {
            o.defineUserObjects();
        },
        0
    );

    //  add some aditional objects
    setTimeout(
        function () {
            o.defineWordsearchUserObjects();
        },
        0
    );

    //  read local storage settings
    setTimeout(
        function () {
            //o.readLocalStorage();
        },
        0
    );

    //  initialise tagging
    setTimeout(
        function () {
            o.initialiseTagging();
        },
        0
    );

    //  game now ready to play
    setTimeout(
        function () {
            o.showHelpOrStartPuzzle();
        },
        0
    );

    return true;

};

/**
 * method that is called once puzzle data has been pulled in
 * @returns {boolean}
 */
Wordsearch.prototype.restart = function () {

    'use strict';

    var o = this,
        currentSolutionStatus = o.user.game.settings.solutionShowing,
        iLoop;



    //console.clear();

    for (iLoop in o.user.game.blocks) {
        if (o.user.game.blocks.hasOwnProperty(iLoop)) {
            o.removeBox(iLoop);
            o.user.game.blocks[iLoop].active = false;
        }
    }

    //o.clearChecks();
    //o.clearOnStates();
    //o.clearLongPressOnStates();
    //o.hideOverlays();

    setTimeout(
        function () {
            clearInterval(o.timer.timer);
        },
        0
    );

    setTimeout(
        function () {
            o.timer = {};
            //  create puzzle objects from imported JSON data
            o.definePuzzleObjects();
            o.puzzle.meta.localStoragePrefix = 'wordsearch';
            o.puzzle.meta.localStorageItem = o.puzzle.meta.id;
            o.puzzle.meta.taggingItem = 'wordsearch';
            o.puzzle.meta.displayName = 'Wordsearch';
            o.puzzle.meta.taggingGameType = o.puzzle.meta.difficulty.toLowerCase();
            o.puzzle.meta.taggingGameId = o.puzzle.meta.id.toLowerCase();
        },
        0
    );

    //  load any default settings overrides and any additional puzzle specific settings
    setTimeout(
        function () {
            o.loadPuzzleDefaultSettings();
        },
        0
    );

    //  update quickjump menu
    setTimeout(
        function () {
            o.updateQuickJumpMenu();
        },
        0
    );

    //  read puzzle dimensions
    setTimeout(
        function () {
            o.readPuzzleElementsDimensions();
        },
        0
    );

    //  add event handlers now grid is set up
    setTimeout(
        function () {
            o.addDynamicHandlers();
        },
        0
    );

    //  add some aditional objects
    setTimeout(
        function () {
            o.defineUserObjects();
        },
        0
    );

    //  add some aditional objects
    setTimeout(
        function () {
            o.defineWordsearchUserObjects();
        },
        0
    );

    //  read local storage settings
    setTimeout(
        function () {
            o.readLocalStorage();
        },
        0
    );

    //  initialise tagging
    setTimeout(
        function () {
            o.initialiseTagging();
        },
        0
    );

    //  game now ready to play
    setTimeout(
        function () {
            if ($('#triggerCheck').hasClass('on')) {
                o.doChecks();
            }
            if (currentSolutionStatus === true) {
                o.revealSolution();
            }
            o.showHelpOrStartPuzzle();
        },
        0
    );

    return true;

};

/**
 * method to set default objects
 * @returns {object}
 */
Wordsearch.prototype.loadPuzzleDefaultSettings = function () {

    'use strict';

    var o = this;

    //  create settings
    o.user.game.settings.actionsUsed = 0;
    o.user.game.settings.checksUsed = 0;
    o.user.game.settings.revealsUsed = 0;
    o.user.game.settings.solutionShowing = false;
    o.user.game.settings.solutionsUsed = 0;
    o.user.game.settings.currentMode = '';
    o.user.game.settings.currentModeValue = '';
    o.user.game.settings.currentActiveCellId = '';

    o.puzzle.settings.solutionStringEmptyCellCharacter = '.';
    o.puzzle.settings.styling.cellHolderClassSelected = '';
    o.puzzle.settings.boxesselectedtimer = '';
    o.puzzle.settings.currentBoxId = 1;

    o.puzzle.settings.removeWrongSelections = true;

    return o.puzzle;
};

/**
 * show help function to override puzzlebase
 */
Wordsearch.prototype.showHelp = function () {

    'use strict';

    var o = this;

    o.startPuzzle();
};

/**
 * method to set default objects
 * @returns {object}
 */
Wordsearch.prototype.readPuzzleElementsDimensions = function () {

    'use strict';

    var o = this;

    o.puzzle.settings.selectorWidth = 0.7;
    o.puzzle.settings.selectorPadding = (1 - o.puzzle.settings.selectorWidth) / 2;
    o.puzzle.settings.holderX = $('#puzzle').offset().left;
    o.puzzle.settings.holderY = $('#puzzle').offset().top;
    o.puzzle.settings.holderW = $('#puzzle table').width();
    o.puzzle.settings.holderH = $('#puzzle table').height();
    o.puzzle.settings.holderBorderAdjX = parseInt($('#puzzle table').css('border-left-width'), 10);
    o.puzzle.settings.holderBorderAdjY = parseInt($('#puzzle table').css('border-top-width'), 10);
    o.puzzle.settings.holderBorderAdjX = 5;
    o.puzzle.settings.holderBorderAdjY = 9;
    o.puzzle.settings.cellW = $('#puzzle td span').outerWidth();
    o.puzzle.settings.cellH = $('#puzzle td span').outerHeight();
    o.puzzle.settings.cols = $('#puzzle tr').length;
    o.puzzle.settings.rows = $('#puzzle tr:eq(0)').find('td').length;
    o.puzzle.settings.dragAutoSnap = true;
    o.puzzle.settings.dragCurrentItem = 0;

    o.debug.open('drag settings calculated');
    o.debug.log('<br/>Holder X, Y: ', o.puzzle.settings.holderX, o.puzzle.settings.holderY);
    o.debug.log('<br/>Holder W, H: ', o.puzzle.settings.holderW, o.puzzle.settings.holderH);
    o.debug.log('<br/>Holder HalfMargin X, Y: ', o.puzzle.settings.holderBorderAdjX, o.puzzle.settings.holderBorderAdjY);
    o.debug.log('<br/>Cell W, H: ', o.puzzle.settings.cellW, o.puzzle.settings.cellH);
    o.debug.log('<br/>Cell Count Cols, Rows: ', o.puzzle.settings.cols, o.puzzle.settings.rows);
    o.debug.close('drag settings calculated');

    o.dragItems = [];
    o.draggable = Draggable;

    $('#dragger').css('height', o.puzzle.settings.holderH).css('width', o.puzzle.settings.holderW);

    return o.puzzle;
};

/**
 * method to create user objects
 * @returns {object}
 */
Wordsearch.prototype.defineUserObjects = function () {

    'use strict';

    var o = this;

    o.user.game.blocks = [];
    o.user.game.blockCells = [];

    o.user.game.settings.pencileMode = false;
    o.user.game.settings.isCompletedOk = false;
    o.user.game.correctSelectors = {};

    return o;
};

/**
 * method to create wordsearch specific user objects
 * @returns {object}
 */
Wordsearch.prototype.defineWordsearchUserObjects = function () {

    'use strict';

    var o = this;

    o.user.game.letters = [];

    return o;
};

/**
 * load any previous game data and update grid
 * @returns {boolean}
 */
Wordsearch.prototype.readLocalStorage = function () {

    'use strict';

    var o = this,
        oGameData = o.loadGameState(),
        j,
        loadedBlocks;

	if (oGameData != false) {
		o.user.game = oGameData;
	}

    //  we need to reformat the incoming data so save into variable and reset array
    loadedBlocks = oGameData.blocks;
    o.user.game.blocks = [];
    o.dragStartRC = o.dragStartRC || {};

    if (oGameData) {
        for (j = 0; j < loadedBlocks.length; j = j + 1) {
            if (loadedBlocks[j] !== null && loadedBlocks[j].x2 !== null) {
                o.puzzle.settings.dragCurrentItem = loadedBlocks[j].id;
                o.dragStartRC.row = loadedBlocks[j].y1;
                o.dragStartRC.col = loadedBlocks[j].x1;
                o.createDragItem(loadedBlocks[j].x1, loadedBlocks[j].y1, loadedBlocks[j].id);
                o.drawBox(loadedBlocks[j].x1, loadedBlocks[j].y1, loadedBlocks[j].x1 + loadedBlocks[j].cols, loadedBlocks[j].y1 + loadedBlocks[j].rows);
                o.updateItemWithNewRowColCounts($('#viewer-' + loadedBlocks[j].id), loadedBlocks[j].rows, loadedBlocks[j].cols);
                $('#viewer-' + loadedBlocks[j].id).addClass('done');
                o.user.game.blocks[j] = loadedBlocks[j];
                o.checkAgainstCorrectSolution(loadedBlocks[j].y1, loadedBlocks[j].x1, loadedBlocks[j].y2, loadedBlocks[j].x2, loadedBlocks[j].id);
            }
        }
        //  set timer where it was
        o.timer.secondsElapsed = oGameData.settings.secondsElapsed;
        o.user.game.settings.secondsElapsed = oGameData.settings.secondsElapsed;
        //  puzzle completed already?
        o.user.game.settings.isCompletedOk = oGameData.settings.isCompletedOk;
    }

    return true;

};

/**
 * puzzle ready to start now
 * @returns {boolean}
 */
Wordsearch.prototype.startPuzzle = function () {

    'use strict';

    var o = this;

    //  start timer
    if (o.user.game.settings.isCompletedOk === undefined || o.user.game.settings.isCompletedOk == false) {
        o.timerStart();
    }

    return true;

};

/**
 * return to standard mode
 * @returns {boolean}
 */
Wordsearch.prototype.resetCurrentMode = function () {

    'use strict';

    var o = this;

    o.user.game.settings.currentMode = '';
    o.user.game.settings.currentModeValue = '';

    $('.jsNumberKey a', 'div.keys').removeClass('long-press');
    $('.jsEraseKey a', 'div.keys').removeClass('long-press');
    $('#triggerNotesMode').removeClass('on');
    $('body').removeClass('notes-mode');

    return true;
};

/**
 * clear cells of user data
 * @returns {boolean}
 */
Wordsearch.prototype.clearCells = function () {

    'use strict';

    var o = this,
        iLoop;

    for (iLoop in o.user.game.blocks) {
        if (o.user.game.blocks.hasOwnProperty(iLoop)) {
            o.removeBox(iLoop);
            o.user.game.blocks[iLoop].active = false;
        }
    }

    $('li', 'ul.words').removeClass('got accent-fg').addClass('need text-cell-default');

    o.user.game.blockCells = [];
    o.user.game.blocks = [];
    o.saveGameState();

    return true;
};

/**
 * handle reset short keypress
 * @returns {boolean}
 */
Wordsearch.prototype.resetShortPress = function () {

    'use strict';

    var o = this;

    $('#overlayBG').add('#overlayReset').show();
    o.sendUtagClickEngagementEvent('reset:start');
};

/**
 * handle reset confirmation yes short keypress
 * @returns {boolean}
 */
Wordsearch.prototype.resetOptionYesShortPress = function () {

    'use strict';

    var o = this;

    o.clearChecks();
    o.clearOnStates();
    o.clearLongPressOnStates();
    o.resetPuzzle();
    o.hideSolution();
    o.hideOverlays();
    o.sendUtagClickEngagementEvent('reset:confirmation');

};

/**
 * handle reset confirmation no short keypress
 * @returns {boolean}
 */
Wordsearch.prototype.resetOptionNoShortPress = function () {

    'use strict';

    var o = this;

    o.hideOverlays();
    o.sendUtagClickEngagementEvent('reset:abort');
};

/**
 * handle solution short keypress
 * @returns {boolean}
 */
Wordsearch.prototype.solutionShortPress = function () {

    'use strict';

    var o = this;

    if (o.user.game.settings.solutionShowing) {
        o.hideSolution();
        o.sendUtagClickEngagementEvent('solution:hide');
    } else {
        $('#overlayBG').add('#OverlaySolution').show();
        o.sendUtagClickEngagementEvent('solution:expose:start');
    }
};

/**
 * handle solution confirmation yes short keypress
 * @returns {boolean}
 */
Wordsearch.prototype.solutionOptionYesShortPress = function () {

    'use strict';

    var o = this;

    o.clearChecks();
    o.clearOnStates();
    o.clearLongPressOnStates();
    o.revealSolution();
    o.hideOverlays();
    o.sendUtagClickEngagementEvent('solution:expose:confirmation');
};

/**
 * handle solution confirmation no short keypress
 * @returns {boolean}
 */
Wordsearch.prototype.solutionOptionNoShortPress = function () {

    'use strict';

    var o = this;

    o.hideOverlays();
    o.sendUtagClickEngagementEvent('solution:expose:abort');

};

/**
 * reset puzzle
 * @returns {boolean}
 */
Wordsearch.prototype.resetPuzzle = function () {

    'use strict';

    var o = this;
    if (o.user.game.settings.solutionShowing) {
        o.hideSolution();
    }
    o.clearCells();
    o.clearChecks();
    o.clearOnStates();
    o.clearLongPressOnStates();
    o.hideOverlays();
    o.clearGameState();
    o.timerClear();
    o.historyClearAll();
    o.resetCurrentMode();
    o.checkEntryCounts();
    o.user.game.settings.currentActiveCellId = 0;
    o.setCurrentCell(o.user.game.settings.currentActiveCellId);
    o.puzzle.settings.currentBoxId = 1;
    //o.debug.clear();

    //  (re)set up object to hold user data
    setTimeout(
        function () {
            o.defineUserObjects();
        },
        0
    );

    //  add some aditional objects
    setTimeout(
        function () {
            o.defineWordsearchUserObjects();
        },
        0
    );

    //  read local storage settings
    setTimeout(
        function () {
            //o.readLocalStorage();
        },
        0
    );

    //  game now ready to play
    setTimeout(
        function () {
            o.startPuzzle();
        },
        0
    );

};

/**
 * return to standard mode
 * @returns {boolean}
 */
Wordsearch.prototype.clearOnStates = function () {

    'use strict';

    var o = this;

    $('li', '.action-buttons').removeClass('on');
    $('a.solution-showing', '#triggerOverlaySolution').removeClass('solution-showing');
    o.user.game.settings.solutionShowing = false;
    return true;
};

/**
 * mark all cells as right or wrong
 */
Wordsearch.prototype.doChecks = function () {

    'use strict';

    var o = this,
        iLoop,
        solution = o.puzzle.settings.solution,
        solutionArray = solution.split(';'),
        isCorrectWord = false,
        thisItem,
        itemStartEnd,
        itemEndStart;

    o.debug.log('doChecks');

    $('.viewer').removeClass(o.puzzle.settings.styling.cellRightClass).removeClass(o.puzzle.settings.styling.cellWrongClass);

    for (iLoop in o.user.game.blocks) {
        if (o.user.game.blocks.hasOwnProperty(iLoop)) {
            if (o.user.game.blocks[iLoop].active == true) {
                thisItem = o.user.game.blocks[iLoop].answer;
                itemStartEnd = thisItem[0] + ',' + thisItem[thisItem.length - 1];
                itemEndStart = thisItem[thisItem.length - 1] + ',' + thisItem[0];
                isCorrectWord = (solutionArray.indexOf(itemStartEnd) > -1 || solutionArray.indexOf(itemEndStart) > -1);
                if (isCorrectWord) {
                    $('#viewer-' + iLoop).addClass(o.puzzle.settings.styling.cellRightClass);
                } else {
                    $('#viewer-' + iLoop).addClass(o.puzzle.settings.styling.cellWrongClass);
                }
            }
        }
    }

    $('#triggerCheck').addClass('on');
};

/**
 * clear right and wrong indiciators from all cells
 */
Wordsearch.prototype.clearChecks = function () {

    'use strict';

    var o = this;

    o.debug.log('clearChecks');

    $('.viewer').removeClass(o.puzzle.settings.styling.cellRightClass).removeClass(o.puzzle.settings.styling.cellWrongClass);

    $('#triggerCheck').removeClass('on');

};

/**
 * reveal solution to all cells
 */
Wordsearch.prototype.revealSolution = function () {

    'use strict';

    var o = this,
        iLoop,
        solution = o.puzzle.settings.solution,
        solutionArray = solution.split(';'),
        blockArray = [],
        cell1,
        cell2;

    o.debug.log('revealSolution');

    //  hide user blocks
    $('.viewer').hide();

    for (iLoop = 0; iLoop < solutionArray.length; iLoop = iLoop + 1) {
        blockArray = solutionArray[iLoop].split(',');
        cell1 = o.getColRowFromCellId(blockArray[0] - 1);
        cell2 = o.getColRowFromCellId(blockArray[blockArray.length - 1] - 1);
        o.addSolutionBox(cell1.col, cell1.row, cell2.col, cell2.row, iLoop);
        //return false;
    }

    o.user.game.settings.solutionsUsed = o.user.game.settings.solutionsUsed + 1;

    $('#triggerOverlaySolution a').addClass('solution-showing');

    o.user.game.settings.solutionShowing = true;
    o.saveGameState();

};


Wordsearch.prototype.addSolutionBox = function (cellX1, cellY1, cellX2, cellY2, id) {

    'use strict';

    var o = this,
        cellCountX = cellX2 - cellX1,
        cellCountY = cellY2 - cellY1,
        ver = 0,
        hor = 0,
        rot = 0,
        hypLen = 0,
        baseRot = 0,
        w,
        h,
        tweenObject = {};

    if (cellCountX + cellX1 > o.puzzle.settings.cols) {
        cellCountX = o.puzzle.settings.cols - cellX1;
    }

    if (cellCountY + cellY1 > o.puzzle.settings.rows) {
        cellCountY = o.puzzle.settings.rows - cellY1;
    }

    // some basic logic regarding direction
    if (cellX1 > cellX2) {
        hor = -1;
    }
    if (cellX1 < cellX2) {
        hor = 1;
    }
    if (cellY1 > cellY2) {
        ver = -1;
    }
    if (cellY1 < cellY2) {
        ver = 1;
    }

    if (hor == 0 && ver == -1) {  //  up
        rot = 270;
    }

    if (hor == 1 && ver == -1) {  //  up right
        rot = 315;
    }

    if (hor == 1 && ver == 0) {  //  right
        rot = 0;
    }

    if (hor == 1 && ver == 1) {  //  down right
        rot = 45;
    }

    if (hor == 0 && ver == 1) {  //  down
        rot = 90;
    }

    if (hor == -1 && ver == 1) {  //  down left
        rot = 135;
    }

    if (hor == -1 && ver == 0) {  //  left
        rot = 180;
    }

    if (hor == -1 && ver == -1) {  //  up left
        rot = 225;
    }


    w = (cellCountX * o.puzzle.settings.cellW) + 1;  // add 1 so you don't get a double margin
    h = (cellCountY * o.puzzle.settings.cellH) + 1;  // add 1 so you don't get a double margin

    o.debug.log('addSolutionBox', cellX1, cellY1, cellX2, cellY2, id);

    //o.puzle.settings.dragCurrentItem = o.puzzle.settings.dragCurrentItem + 1;

    tweenObject.rotation = baseRot + rot;
    tweenObject.transformOrigin = '15px';
    tweenObject.height = o.puzzle.settings.cellH;
    hypLen = Math.sqrt(Math.pow((cellCountY), 2) + Math.pow((cellCountX), 2));
    //console.log('Hypotenuse:'+hypLen, 'Rotation:'+tweenObject.rotation);
    tweenObject.width = parseInt(((hypLen + 1) * o.puzzle.settings.cellW), 10);
    tweenObject.x = (cellX1 * o.puzzle.settings.cellW) + o.puzzle.settings.holderBorderAdjX;
    tweenObject.y = (cellY1 * o.puzzle.settings.cellH) + o.puzzle.settings.holderBorderAdjY;
    $('#viewer-tpl').clone().attr('id', 'solution-' + id).addClass('solution done').css('z-index', -5000 + id).insertAfter('#viewer-tpl');

    tweenObject.height *= o.puzzle.settings.selectorWidth;
    tweenObject.y += (o.puzzle.settings.cellH * o.puzzle.settings.selectorPadding) + 1;

    TweenMax.set($('#solution-' + id), tweenObject);
    $('.solution').show();

};

/**
 * reveal solution to all cells
 */
Wordsearch.prototype.hideSolution = function () {

    'use strict';

    var o = this;

    o.debug.log('hideSolution');

    //  show user blocks
    $('.solution').remove();
    $('.viewer').show();

    $('#triggerOverlaySolution a').removeClass('solution-showing');

    o.user.game.settings.solutionShowing = false;
    o.saveGameState();

};

/**
 * get a string made up of the letters as positioned by the user
 * @returns {string}
 */
Wordsearch.prototype.getUserEnteredLettersString = function () {

    'use strict';

    var o = this,
        iLoop,
        cells = o.user.game.cells,
        solutionString = '',
        enteredLetter;

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        enteredLetter = cells[iLoop].value;
        if (enteredLetter == '') {
            enteredLetter = '.';
        }
        solutionString += enteredLetter;
    }

    return solutionString;
};

/**
 * get the letter that matches the letter id specified
 * @param {string} letterId
 * @returns {string}
 */
Wordsearch.prototype.getLetterByLetterId = function (letterId) {

    'use strict';

    return ($('span[data-letter-id="' + letterId + '"]').find('span').text());
};

/**
 * remove the classes indicating where a letter can be dropped
 */
Wordsearch.prototype.removeDropAllowedIndicators = function () {

    'use strict';

    $('td').removeClass('drop-allowed');
};

/**
 * get the element that matches the letter id specified
 * @param {string} letterId
 * @returns {object}
 */
Wordsearch.prototype.getLetterElementByLetterId = function (el) {

    'use strict';

    return $('.square[data-letter-id="' + el + '"]');
};

/**
 * update the user object with new location of a letter
 * @param {string} id
 * @param {string} col
 * @param {string} row
 * @returns {boolean}
 */
Wordsearch.prototype.updateDroppedItemPosition = function (id, col, row) {

    'use strict';

    var o = this;

    o.debug.open('updateDroppedItemPosition');
    o.debug.log(id, col, row);

    o.user.game.letters[id].row = row;
    o.user.game.letters[id].col = col;

    o.debug.close('updateDroppedItemPosition');
    return true;
};

/**
 * reset a cell within the user object
 * @param {string} cellId
 * @returns {object}
 */
Wordsearch.prototype.resetCell = function (cellId) {

    'use strict';

    var o = this;

    o.debug.open('resetCell');
    o.debug.log(cellId);

    o.user.game.cells[cellId].letterId = '';
    o.user.game.cells[cellId].value = '';

    o.debug.close('resetCell');
    return o.user.game.cells;
};

/**
 * update a cell within the user object with the specified letter id
 * @param {string} cellId
 * @param {string} letterId
 * @returns {object}
 */
Wordsearch.prototype.updateCellWithLetter = function (cellId, letterId) {

    'use strict';

    var o = this;

    o.debug.open('updateCellWithLetter');
    o.debug.log(cellId, letterId);

    o.user.game.cells[cellId].letterId = letterId;
    o.user.game.cells[cellId].value = o.getLetterByLetterId(letterId);

    o.debug.close('updateCellWithLetter');
    return o.user.game.cells;
};

/**
 * returns where the specfied element started [posT|posB|posL|posR]
 * @param {object} item
 * @returns {boolean}
 */
Wordsearch.prototype.getPositionClassFromElement = function (el) {

    'use strict';

    if ($(el).hasClass('posT')) {
        return 'posT';
    }

    if ($(el).hasClass('posB')) {
        return 'posB';
    }

    if ($(el).hasClass('posL')) {
        return 'posL';
    }

    if ($(el).hasClass('posR')) {
        return 'posR';
    }

    return '';

};

/**
 * Unpack JSON cell data into object
 *
 * @returns {Boolean}
 */
Wordsearch.prototype.unserializeCells = function () {
    'use strict';
    var o = this,
        cells = o.puzzle.JSON.celldata,
        w = o.puzzle.settings.colCount,
        h = o.puzzle.settings.rowCount,
        gridlen =  w * h,
        i,
        cell;

    o.puzzle.layout.cells = [];

    if (cells.length !== gridlen) {
        throw new Error('Cells length does not match grid length');
    }

    for (i = 0; i < cells.length; i = i + 1) {
        cell = {};

        cell.id = i;
        cell.x = i % w;
        cell.y = Math.floor(i / h);
        if (cells.charAt(i) && (cells.charAt(i) !== ' ')) {
            cell.value = cells.charAt(i);
        } else {
            cell.value = '';
        }
        cell.candidates = [];
        cell.notes = [];

        o.puzzle.layout.cells.push(cell);
    }
};

/**
 * Unpack JSON block data into object
 *
 * @returns {Boolean}
 */
Wordsearch.prototype.unserializeBlocks = function () {
    'use strict';
    var o = this,
        block,
        blocks = o.puzzle.settings.solution.split(';'),
        cell,
        cells,
        i,
        j,
        k;

    // In wordsearch the blocks are the solution
    o.puzzle.layout.blocks = [];

    for (j = 0; j < blocks.length; j = j + 1) {
        block = {};
        cells = blocks[j].split(',');
        block.cells = [];
        for (k = 0; k < cells.length; k = k + 1) {
            cell = {};
            i = parseInt(cells[k], 10) - 1;

            cell.id = o.puzzle.layout.cells[i].id;
            cell.x = o.puzzle.layout.cells[i].x;
            cell.y = o.puzzle.layout.cells[i].y;

            if (o.puzzle.layout.cells[i].value) {
                block.value = o.puzzle.layout.cells[i].value;
            }

            block.cells.push(cell);
        }

        o.puzzle.layout.blocks.push(block);
    }

    return true;
};

/**
 * Create the main grid for the puzzle
 *
 * @returns {Boolean}
 */
Wordsearch.prototype.createGrid = function () {
    'use strict';
    var o = this,
        grid = $('.puzzleholder'),
        rows = [],
        cells,
        wordObj,
        answers = o.puzzle.settings.solution.split(';'),
        i,
        j,
        iLoop,
        answerTable = $('ul.words');

    for (i = 0; i < o.puzzle.settings.rowCount; i = i + 1) {
        cells = ['<tr>'];

        for (j = 0; j < o.puzzle.settings.colCount; j = j + 1) {
            cells.push(o.getCellHtml((i * o.puzzle.settings.rowCount) + j));
        }

        cells.push('</tr>');
        rows.push(cells.join(''));
    }
    grid.html(rows.join(''));


    //  add answers to grid
    answerTable.html('');
    for (iLoop = 0; iLoop < answers.length; iLoop = iLoop + 1) {
        cells = answers[iLoop].split(',');
        wordObj = o.getWordFromStartEndCells(cells[0] - 1, cells[1] - 1);
        answerTable.append('<li class="need text-cell-default" data-start="' + wordObj.start.row + ',' + wordObj.start.col + '" data-end="' + wordObj.end.row + ',' + wordObj.end.col + '"><span>' + wordObj.word + '</span></li>');
    }

    return true;
};


Wordsearch.prototype.getWordFromStartEndCells = function (start, end) {
    'use strict';
    var o = this,
        colCount = o.puzzle.settings.colCount,
        wordObj = {
            word: '',
            start: o.getColRowFromCellId(start),
            end: o.getColRowFromCellId(end)
        },
        iLoop;

    //  right
    if (wordObj.start.row == wordObj.end.row && wordObj.end.col > wordObj.start.col) {
        for (iLoop = 0; iLoop <= (wordObj.end.col - wordObj.start.col); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start + iLoop];
        }
    }
    //  down right
    if (wordObj.end.col > wordObj.start.col && wordObj.end.row > wordObj.start.row) {
        for (iLoop = 0; iLoop <= (wordObj.end.row - wordObj.start.row); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start + (iLoop * colCount) + iLoop];
        }
    }
    //  down
    if (wordObj.start.col == wordObj.end.col && wordObj.end.row > wordObj.start.row) {
        for (iLoop = 0; iLoop <= (wordObj.end.row - wordObj.start.row); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start + (iLoop * colCount)];
        }
    }
    //  down left
    if (wordObj.end.col < wordObj.start.col && wordObj.end.row > wordObj.start.row) {
        for (iLoop = 0; iLoop <= (wordObj.end.row - wordObj.start.row); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start + (iLoop * colCount) - iLoop];
        }
    }
    //  left
    if (wordObj.start.row == wordObj.end.row && wordObj.end.col < wordObj.start.col) {
        for (iLoop = 0; iLoop <= (wordObj.start.col - wordObj.end.col); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start - iLoop];
        }
    }
    //  up left
    if (wordObj.end.col < wordObj.start.col && wordObj.end.row < wordObj.start.row) {
        for (iLoop = 0; iLoop <= (wordObj.start.row - wordObj.end.row); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start - (iLoop * colCount) - iLoop];
        }
    }
    //  up
    if (wordObj.start.col == wordObj.end.col && wordObj.end.row < wordObj.start.row) {
        for (iLoop = 0; iLoop <= (wordObj.start.row - wordObj.end.row); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start - (iLoop * colCount)];
        }
    }
    //  up right
    if (wordObj.end.col > wordObj.start.col && wordObj.end.row < wordObj.start.row) {
        for (iLoop = 0; iLoop <= (wordObj.start.row - wordObj.end.row); iLoop = iLoop + 1) {
            wordObj.word += o.puzzle.JSON.celldata[start - (iLoop * colCount) + iLoop];
        }
    }
    //console.log(wordObj.start, wordObj.end);
    return wordObj;
};

/**
 * Make the HTML for the given cell
 *
 * @param {int} id cell id
 * @returns {String} cell HTML
 */
Wordsearch.prototype.getCellHtml = function (id) {
    'use strict';

    var o = this,
        clue = '';

    if (o.puzzle.layout.cells[id].value) {
        clue = o.puzzle.layout.cells[id].value;
    }

    return '<td id="cell-' + id + '"><span class="text-cell-default">' + clue + '</span></td>';
};

/**
 * Initialise puzzle to show as a preview (i.e. no gameplay)
 *
 * @param {String} sJSON JSON data in a string
 * @returns {boolean}
 */
Wordsearch.prototype.initPreview = function (sJSON) {

    'use strict';

    var o = this,
        JSON;

    //o.debugactive = true;
    o.initDebugger();

    if (!sJSON) {
        JSON = o.getPuzzleJsonData();

        JSON.done(function (data) {
            o.puzzle.JSON = data.data;
            o.definePuzzleObjects();
            o.displayBlocks();
        });
    } else {
        o.puzzle.JSON = $.parseJSON(sJSON);
        o.definePuzzleObjects();
        o.displayBlocks();
    }

    return true;
};

/**
 * Display a puzzle block
 *
 * @param {int} id id of the block to display
 * @returns {Boolean}
 */
Wordsearch.prototype.blockDisplay = function (id) {

    'use strict';

    var o = this,
        w,
        h,
        block,
        cell,
        cells,
        i;

    // For each cell in the block add block edge classes
    w = o.puzzle.settings.colCount;
    h = o.puzzle.settings.rowCount;
    block = o.puzzle.layout.blocks[id];

    cells = {};
    for (i = 0; i < block.cells.length; i = i + 1) {
        cells[block.cells[i].id] = true;
    }

    for (i = 0; i < block.cells.length; i = i + 1) {
        cell = block.cells[i];
/*
        // Top row
        if (cell.id < w) {
            $('#cell-' + cell.id).addClass('border-t');
            cell.top = true;
        }

        // Bottom row
        if (cell.id >= ((h - 1) * w)) {
            $('#cell-' + cell.id).addClass('border-b');
            cell.bottom = true;
        }

        // Left column
        if ((cell.id % h) === 0) {
            $('#cell-' + cell.id).addClass('border-l');
            cell.left = true;
        }

        // Right column
        if ((cell.id % h) === (w - 1)) {
            $('#cell-' + cell.id).addClass('border-r');
            cell.right = true;
        }

        // If there is no block cell to the left add a left edge
        if (!cell.left && !cells[(cell.id - 1)]) {
            $('#cell-' + cell.id).addClass('border-l');
        }

        // If there is no block cell to the right add a right edge
        if (!cell.right && !cells[(cell.id + 1)]) {
            $('#cell-' + cell.id).addClass('border-r');
        }

        // If there is no block cell above add a top edge
        if (!cell.top && ((cell.id - w) >= 0) && !cells[(cell.id - w)]) {
            $('#cell-' + cell.id).addClass('border-t');
        }

        // If there is no block cell below add a bottom edge
        if (!cell.bottom && ((cell.id + w) < (w * h)) && !cells[(cell.id + w)]) {
            $('#cell-' + cell.id).addClass('border-b');
        }
*/
    }

    return true;
};

/**
 * user started to drag an element
 *
 * @param {obj} element about to be dragged
 * @returns {boolean/null}
 */
Wordsearch.prototype.draggableOnDragStart = function (e) {

    'use strict';

    var o = oApp,
        x1,
        y1,
        rowCol;

    o.clearChecks();
    o.clearOnStates();

    if (o.user.game.settings.solutionShowing == true) {
        return false;
    }

    if (o.device.settings.isTouch && e.touches) {
        o.startX = e.touches[0].pageX - o.puzzle.settings.holderX;
        o.startY = e.touches[0].pageY - o.puzzle.settings.holderY;
    } else {
        o.startX = e.pageX - o.puzzle.settings.holderX;
        o.startY = e.pageY - o.puzzle.settings.holderY;
    }

    x1 = (o.startX / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjX;
    y1 = (o.startY / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjY;

    rowCol = o.getColRowFromCoords(x1, y1);
    o.dragStartRC = {};
    o.dragStartRC.row = rowCol.row;
    o.dragStartRC.col = rowCol.col;

    o.puzzle.settings.dragCurrentItem = o.puzzle.settings.dragCurrentItem + 1;
    o.createDragItem(x1, y1, o.puzzle.settings.dragCurrentItem);

};

/**
 * user is dragging element
 *
 * @param {obj} element being dragged
 * @returns {boolean/null}
 */
Wordsearch.prototype.draggableOnDrag = function (e) {

    'use strict';

    var o = oApp,
        x1,
        y1,
        x2,
        y2;

    if (o.user.game.settings.solutionShowing == true) {
        return false;
    }

    if (o.device.settings.isTouch && e.touches) {
        o.endX = e.touches[0].pageX - o.puzzle.settings.holderX;
        o.endY = e.touches[0].pageY - o.puzzle.settings.holderY;
    } else {
        o.endX = e.pageX - o.puzzle.settings.holderX;
        o.endY = e.pageY - o.puzzle.settings.holderY;
    }

    x1 = (o.startX / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjX;
    y1 = (o.startY / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjY;
    x2 = (o.endX / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjX;
    y2 = (o.endY / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjY;

    o.dragItem(x1, y1, x2, y2);

};

/**
 * user has stopped dragging element
 *
 * @param {obj} element that was being dragged
 * @returns {boolean/null}
 */
Wordsearch.prototype.draggableOnDragEnd = function (e) {

    'use strict';

    var o = oApp,
        x1,
        y1,
        x2,
        y2;

    if (o.user.game.settings.solutionShowing == true) {
        return false;
    }

    x1 = (o.startX / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjX;
    y1 = (o.startY / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjY;
    x2 = (o.endX / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjX;
    y2 = (o.endY / o.puzzle.settings.transformScale) - o.puzzle.settings.holderBorderAdjY;

    o.snapDragItemToboxes(x1, y1, x2, y2, e);

};

/**
 * user has clicked on a draggabel elelment
 *
 * @param {obj} element that was clicked
 * @returns {boolean/null}
 */
Wordsearch.prototype.draggableOnClick = function (e) {

    'use strict';

    var o = oApp;  //  not this as scope of event handler

    if (o.user.game.settings.solutionShowing == true) {
        return false;
    }

    o.handleClickOnDragItem(e);
};

/**
 * create a draggable item
 *
 * @param {int} x1 of item relative to holder
 * @param {int} y1 of item relative to holder
 * @param {int} id of the new item
 * @returns {Boolean}
 */
Wordsearch.prototype.createDragItem = function (x1, y1, id) {

    'use strict';

    var o = this;


    x1 = x1 / o.puzzle.settings.transformScale;
    y1 = y1 / o.puzzle.settings.transformScale;

    o.user.game.blocks[id] = {};
    o.user.game.blocks[id].id = id;
    $('#viewer-tpl').clone().attr('id', 'viewer-' + id).css('z-index', -5000 + id).insertAfter('#viewer-tpl');
    o.user.game.blocks[id].active = true;

    TweenMax.set($('#viewer-' + id), {x: x1, y: y1});

};

/**
 * get the column and row from a pair of coordinates
 *
 * @param {x} x coord of col/row we are after
 * @param {y} y coord of col/row we are after
 * @returns {object}
 */
Wordsearch.prototype.getColRowFromCoords = function (x, y) {

    'use strict';

    var o = this,
        k = {};

    k.col = Math.floor(x / o.puzzle.settings.cellW);
    k.row = Math.floor(y / o.puzzle.settings.cellH);

    return k;

};

/**
 * repositions item according to new drag coordinates
 *
 * @param {int} new x1 coord of item
 * @param {int} new y1 coord of item
 * @param {int} new x2 coord of item
 * @param {int} new y2 coord of item
 * @returns {Boolean}
 */
Wordsearch.prototype.dragItem = function (x1, y1, x2, y2) {

    'use strict';

    var o = this,
        adjustedData = o.restrictDragItemsAngles(x1, y1, x2, y2);

    o.dragRowColCounts = adjustedData;

    o.dragEndRC = {};
    o.dragEndRC.row = adjustedData.y2;
    o.dragEndRC.col = adjustedData.x2;

    o.updateItemWithNewRowColCounts($('#viewer-' + o.user.game.blocks[o.puzzle.settings.dragCurrentItem].id), adjustedData.row, adjustedData.col);

    return false;

};


Wordsearch.prototype.updateItemWithNewRowColCounts = function (el, rowCount, colCount) {

    'use strict';

    var o = this,
        tweenObject = {},
        hypLen,
        defaultRotation = 0,
        userRotation = 0;

    tweenObject.x = o.dragStartRC.col * o.puzzle.settings.cellW + 5;
    tweenObject.y = o.dragStartRC.row * o.puzzle.settings.cellH + 10;

    tweenObject.width = o.puzzle.settings.cellW;
    tweenObject.height = o.puzzle.settings.cellH;

    tweenObject.transformOrigin = '30px';
    tweenObject.transformOrigin = o.puzzle.settings.cellW / 2 + 'px';

    if (colCount < 0) {
        defaultRotation += 180;
    }

    if (rowCount !== 0  || colCount !== 0) {
        userRotation = Math.atan((rowCount) / (colCount));
        userRotation = userRotation * (180 / Math.PI);
    }
    tweenObject.rotation = defaultRotation + userRotation;

    if (rowCount !== 0  || colCount !== 0) {
        hypLen = Math.sqrt(Math.pow((rowCount), 2) + Math.pow((colCount), 2));
        tweenObject.width = parseInt(((hypLen + 1) * o.puzzle.settings.cellW), 10);
    }

    tweenObject.height *= o.puzzle.settings.selectorWidth;
    tweenObject.y += (o.puzzle.settings.cellH * o.puzzle.settings.selectorPadding);

    TweenMax.set(el, tweenObject);

};

/**
 * once item has got a final position, resize to fit squares
 *
 * @param {int} x1 coord of item
 * @param {int} y1 coord of item
 * @param {int} x2 coord of item
 * @param {int} y2 coord of item
 * @returns {Boolean}
 */
Wordsearch.prototype.snapDragItemToboxes = function (x1, y1, x2, y2) {

    'use strict';

    var o = this,
        cellX1,
        cellY1,
        cellCountX,
        cellCountY,
        adjustedData = {},
        dataInfo;

    adjustedData = o.restrictSnapDragItemsAngles(o.dragStartRC.row, o.dragStartRC.col, o.dragEndRC.row, o.dragEndRC.col);

    o.dragEndRC = {};
    o.dragEndRC.row = adjustedData.y2;
    o.dragEndRC.col = adjustedData.x2;


    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].x1 = o.dragStartRC.col;
    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].y1 = o.dragStartRC.row;
    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].x2 = o.dragEndRC.col;
    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].y2 = o.dragEndRC.row;
    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].cols = adjustedData.col;
    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].rows = adjustedData.row;
    dataInfo = (cellX1 + 1) + ',' + (cellY1 + 1) + ',' + cellCountX + ',' + cellCountY;



    o.updateItemWithNewRowColCounts($('#viewer-' + o.user.game.blocks[o.puzzle.settings.dragCurrentItem].id), adjustedData.row, adjustedData.col);

    TweenMax.set($('#dragger'), {x: 0, y: 0});
    $('.viewer').removeClass('latest');
    $('#viewer-' + o.user.game.blocks[o.puzzle.settings.dragCurrentItem].id).addClass('done latest').attr('data-info', dataInfo).attr('data-ref', o.puzzle.settings.currentBoxId);
    o.puzzle.settings.currentBoxId = o.puzzle.settings.currentBoxId + 1;

    o.user.game.blocks[o.puzzle.settings.dragCurrentItem].answer = o.getIdOfEndSquare(o.dragStartRC.col, o.dragEndRC.col, o.dragStartRC.row, o.dragEndRC.row);

    o.updateUserBlocks();

    if (o.user.actions.firstLetterEnteredOfVisit) {
        o.user.actions.firstLetterEnteredOfVisit = false;
        o.addThisPuzzleToRecentlyPlayedList();
        o.sendUtagClickEngagementEvent('puzzle started');
    }

    o.checkAgainstCorrectSolution(o.dragStartRC.row, o.dragStartRC.col, o.dragEndRC.row, o.dragEndRC.col, o.puzzle.settings.dragCurrentItem);

};

/**
 * Draw boxes around cells
 *
 * @param {int} cell x1
 * @param {int} cell y1
 * @param {int} cell x2
 * @param {int} cell y2
 */
Wordsearch.prototype.drawBox = function (cellX1, cellY1, cellX2, cellY2) {

    'use strict';

    var o = this,
        colCount = cellX2 - cellX1,
        rowCount = cellY2 - cellY1,
        tweenObject = {},
        baseRot = 0,
        rot,
        hypLen,
        w,
        h,
        ver = 0,
        hor = 0;

        //logme('colCount', colCount, 'rowCount', rowCount);

    w = colCount * o.puzzle.settings.cellW;
    h = rowCount * o.puzzle.settings.cellH;


    tweenObject.x = (cellX1 * o.puzzle.settings.cellW) + 3;
    tweenObject.y = (cellY1 * o.puzzle.settings.cellH) + 5;
    tweenObject.width = (rowCount) * o.puzzle.settings.cellW;
    if (colCount < 0) {
        tweenObject.width = tweenObject.width * -1;
    }
    tweenObject.height = o.puzzle.settings.cellH;
    if (rowCount < 0) {
        baseRot += 90;
    }

    rot = Math.atan((rowCount) / (colCount));
    rot = rot * (180 / Math.PI);

    baseRot = 0;
    rot = 0;


    // some basic logic regarding direction
    if (cellX1 > cellX2) {
        hor = -1;
    }
    if (cellX1 < cellX2) {
        hor = 1;
    }
    if (cellY1 > cellY2) {
        ver = -1;
    }
    if (cellY1 < cellY2) {
        ver = 1;
    }

    //  all our options

    if (hor == 0 && ver == -1) {  //  up
        rot = 270;
    }

    if (hor == 1 && ver == -1) {  //  up right
        rot = 315;
    }

    if (hor == 1 && ver == 0) {  //  right
        rot = 0;
    }

    if (hor == 1 && ver == 1) {  //  down right
        rot = 45;
    }

    if (hor == 0 && ver == 1) {  //  down
        rot = 90;
    }

    if (hor == -1 && ver == 1) {  //  down left
        rot = 135;
    }

    if (hor == -1 && ver == 0) {  //  left
        rot = 180;
    }

    if (hor == -1 && ver == -1) {  //  up left
        rot = 225;
    }

    tweenObject.rotation = baseRot + rot;
    tweenObject.transformOrigin = '15px';

    hypLen = Math.sqrt(Math.pow((rowCount), 2) + Math.pow((colCount), 2));
    //console.log('Hypotenuse:'+hypLen, 'Rotation:'+tweenObject.rotation);
    tweenObject.width = parseInt(((hypLen + 1) * o.puzzle.settings.cellW), 10);

    TweenMax.set($('#viewer-' + o.puzzle.settings.dragCurrentItem), tweenObject);

};

/**
 * when user clicks on a drag item, work out which boxes to remove
 *
 * @param {object} element that was clicked
 */
Wordsearch.prototype.handleClickOnDragItem = function (e) {

    'use strict';

    var o = this,
        x,
        y,
        id,
        thisEl,
        iLoop;

    if (o.device.settings.isTouch && e.changedTouches) {
        x = Math.floor((e.changedTouches[0].pageX - o.puzzle.settings.holderX) / o.puzzle.settings.cellW / o.puzzle.settings.transformScale);
        y = Math.floor((e.changedTouches[0].pageY - o.puzzle.settings.holderY) / o.puzzle.settings.cellH / o.puzzle.settings.transformScale);
    } else {
        x = Math.floor((e.pageX - o.puzzle.settings.holderX) / o.puzzle.settings.cellW / o.puzzle.settings.transformScale);
        y = Math.floor((e.pageY - o.puzzle.settings.holderY) / o.puzzle.settings.cellH / o.puzzle.settings.transformScale);
    }
    id = (y * o.puzzle.settings.cols) + x + 1;

    o.debug.open('removing box(es)');
    o.debug.log('removing any boxes containing cell #' + id + ' (' + x + ', ' + y + ')');

    for (iLoop in o.user.game.blocks) {
        if (o.user.game.blocks.hasOwnProperty(iLoop)) {
            thisEl = o.user.game.blocks[iLoop].answer.indexOf(id) > -1;
            if (thisEl && o.user.game.blocks[iLoop].active == true) {
                o.removeBox(iLoop);
            }
        }
    }
    o.updateUserBlocks();
    o.debug.close('removing box(es)');
};

/**
 * remove box from screen
 *
 * @param {int} id id of the block to remove
 */
Wordsearch.prototype.removeBox = function (id) {

    'use strict';

    var o = this;

    o.debug.log('removing box #' + id);

    if (o.user.game.correctSelectors !== undefined) {
        $('li', 'ul.words').eq(o.user.game.correctSelectors[id]).removeClass('got accent-fg').addClass('need text-cell-default');
    }

    $('#viewer-' + id).remove();
    o.user.game.blocks[id].active = false;

};

/**
 * user has highlighted an incorrect word
 * add class to selection
 * after a delay remove box from screen and from local storage
 *
 * @param {int} id id of the block to remove
 */
Wordsearch.prototype.userHighlightedIncorrectWord = function (id) {

    'use strict';

    var o = this;

    o.debug.log('removing box #' + id);

    if (o.user.game.correctSelectors !== undefined) {
        $('li', 'ul.words').eq(o.user.game.correctSelectors[id]).removeClass('got accent-fg').addClass('need text-cell-default');
    }

    $('#viewer-' + id).addClass('fail');

	setTimeout(
		function () {
            $('#viewer-' + id).remove();
            delete o.user.game.blocks[id];
            o.saveGameState();
		},
		500
    );

};

/**
 * reduce the boxes selected counter down to zero
 *
 */
Wordsearch.prototype.reduceBoxesSelected = function () {

    'use strict';

    var o = this,
        counter = $('#selectedarea span'),
        currentVal = counter.text() == '' ? '' : parseInt(counter.text(), 10);

    if (currentVal === 0) {
        counter.text('0');
        currentVal = '';
        window.clearInterval(o.puzzle.settings.boxesselectedtimer);
    }
    if (currentVal !== '') {
        counter.text(currentVal - 1);
    }

};

/**
 * update blocks according to data object
 *
 */
Wordsearch.prototype.updateUserBlocks = function () {

    'use strict';

    var o = this,
        iLoop,
        tmpArray = [];

    o.user.game.blockCells = [];

    for (iLoop in o.user.game.blocks) {
        if (o.user.game.blocks.hasOwnProperty(iLoop)) {
            if (o.user.game.blocks[iLoop].active == true) {
                tmpArray[iLoop] = o.user.game.blocks[iLoop];
                //o.user.game.blockCells.push(o.user.game.blocks[iLoop].answer.join(','));
            }
        }
    }
    o.user.game.blocks = tmpArray;
    o.saveGameState();

};

/**
 * return string of user values
 * @returns {string}
 */
Wordsearch.prototype.getUserValuesString = function () {

    'use strict';

    var o = this,
        aarray,
        barray,
        userValuesString = '';

    o.user.game.blockCells.sort(
        function (a, b) {
            aarray = a.split(',');
            barray = b.split(',');
            return parseInt(aarray[0], 10) - parseInt(barray[0], 10);
        }
    );

    userValuesString = o.user.game.blockCells.join(';');

    return userValuesString;

};

/**
 * method to check whether user has completed puzzle
 * (does not care if correct or not)
 */
Wordsearch.prototype.isPuzzleCompleted = function () {

    'use strict';

    return $('li.need', 'ul.words').length < 1;

};

/**
 * checks a string against the correct solution
 * @returns {boolean} whether grid matches solution
 */
Wordsearch.prototype.checkAgainstCorrectSolution = function (a, b, c, d, id) {

    'use strict';

    var o = this,
        puzzleComplete,
        thisWordCorrect = false;

    $('li', 'ul.words').each(function () {
        var el = $(this);
        if ((el.data('start') == a + ',' + b && el.data('end') == c + ',' + d) || (el.data('start') == c + ',' + d && el.data('end') == a + ',' + b)) {
            el.removeClass('need text-cell-default').addClass('got accent-fg');
            o.user.game.correctSelectors[id] = $('li', 'ul.words').index(el);
            thisWordCorrect = true;
        }
    });

    if (thisWordCorrect === false) {
        if (o.puzzle.settings.removeWrongSelections) {
            o.userHighlightedIncorrectWord(id);
        }
    }

    puzzleComplete = o.isPuzzleCompleted();

    if (puzzleComplete) {
        o.debug.close('checkAgainstCorrectSolution');
        o.puzzleCompletedCorrectly();
        return false;
    }

    //o.puzzleCompletedIncorrectly();
    return false;


};


Wordsearch.prototype.restrictDragItemsAngles = function (x1, y1, x2, y2) {


    'use strict';

    var o = this,
        cell1 = o.getColRowFromCoords(x1, y1),
        cell2 = o.getColRowFromCoords(x2, y2),
        returnObj = {},
        cardinal = '',
        ordinal = '',
        cardinalOrdinal,
        angle = 999,
        ww = x2 - x1,
        www = Math.abs(ww),
        hh = y2 - y1,
        hhh = Math.abs(hh);

    //  get compass cardinal
    if (hhh > www && hh < 0) {
        cardinal = 'N';
    }
    if (www > hhh && ww > 0) {
        cardinal = 'E';
    }
    if (hhh > www && hh > 0) {
        cardinal = 'S';
    }
    if (www > hhh && ww < 0) {
        cardinal = 'W';
    }

    //  get compass ordinal
    if (ww > 0 && hh < 0 && www != hhh) {
        ordinal = 'NE';
    }
    if (ww > 0 && hh > 0 && www != hhh) {
        ordinal = 'SE';
    }
    if (ww < 0 && hh > 0 && www != hhh) {
        ordinal = 'SW';
    }
    if (ww < 0 && hh < 0 && www != hhh) {
        ordinal = 'NW';
    }

    cardinalOrdinal = cardinal + ordinal;

    switch (cardinalOrdinal) {

    case 'NNE':
        angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.col = cell1.col + (cell1.row - cell2.row);
        } else {
            cell2.col = cell1.col;
        }
        break;

    case 'ENE':
        angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.row = cell1.row + (cell1.col - cell2.col);
        } else {
            cell2.row = cell1.row;
        }
        break;

    case 'ESE':
        angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.row = cell1.row - (cell1.col - cell2.col);
        } else {
            cell2.row = cell1.row;
        }
        break;

    case 'SSE':
        angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.col = cell1.col - (cell1.row - cell2.row);
        } else {
            cell2.col = cell1.col;
        }
        break;

    case 'SSW':
        angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.col = cell1.col + (cell1.row - cell2.row);
        } else {
            cell2.col = cell1.col;
        }
        break;

    case 'WSW':
        angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.row = cell1.row + (cell1.col - cell2.col);
        } else {
            cell2.row = cell1.row;
        }
        break;

    case 'WNW':
        angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.row = cell1.row - (cell1.col - cell2.col);
        } else {
            cell2.row = cell1.row;
        }
        break;

    case 'NNW':
        angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
        if (angle < 67.5) {
            cell2.col = cell1.col - (cell1.row - cell2.row);
        } else {
            cell2.col = cell1.col;
        }
        break;

    }

    returnObj.x1 = cell1.col;
    returnObj.x2 = cell2.col;
    returnObj.y1 = cell1.row;
    returnObj.y2 = cell2.row;
    returnObj.col = cell2.col - cell1.col;
    returnObj.row = cell2.row - cell1.row;


    return returnObj;

};


Wordsearch.prototype.restrictSnapDragItemsAngles = function (y1, x1, y2, x2) {

    'use strict';

    var o = this,
        gridW = o.puzzle.settings.colCount,
        gridH = o.puzzle.settings.rowCount,
        direction = o.getSelectionDirection(x1, y1, x2, y2),
        adjCols = 0,
        adjRows = 0,
        adjColsAbs = 0,
        adjRowsAbs = 0,
        adj = 0,
        returnObj = {};

    //  adjust end position to be on grid
    if (x2 > (gridW - 1)) {
        adjCols = x2 - (gridW - 1);
    }
    if (x2 < 0) {
        adjCols = x2;
    }
    if (y2 > (gridH - 1)) {
        adjRows = y2 - (gridH - 1);
    }
    if (y2 < 0) {
        adjRows = y2;
    }
    adjColsAbs = Math.abs(adjCols);
    adjRowsAbs = Math.abs(adjRows);

    //  adjust end position if now not at 45 degrees
    switch (direction) {

    case 'NE':
        if (adjCols > 0 && adjRows === 0) {
            adjRows = adjCols * -1;
        } else if (adjCols === 0 && adjRows < 0) {
            adjCols = adjRows * -1;
        } else if (adjCols > 0 && adjRows < 0) {
            adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
            adjCols = adj;
            adjRows = adj * -1;
        }
        break;
    case 'SE':
        if (adjCols > 0 && adjRows === 0) {
            adjRows = adjCols;
        }
        if (adjCols === 0 && adjRows > 0) {
            adjCols = adjRows;
        }
        if (adjCols > 0 && adjRows > 0) {
            adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
            adjCols = adj;
            adjRows = adj;
        }
        break;
    case 'SW':
        if (adjCols < 0 && adjRows === 0) {
            adjRows = adjCols * -1;
        }
        if (adjCols === 0 && adjRows > 0) {
            adjCols = adjRows * -1;
        }
        if (adjCols < 0 && adjRows > 0) {
            adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
            adjCols = adj * -1;
            adjRows = adj;
        }
        break;
    case 'NW':
        if (adjCols < 0 && adjRows === 0) {
            adjRows = adjCols;
        }
        if (adjCols === 0 && adjRows < 0) {
            adjCols = adjRows;
        }
        if (adjCols < 0 && adjRows < 0) {
            adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
            adjCols = adj * -1;
            adjRows = adj * -1;
        }
        break;

    }  //  end switch


    returnObj.x1 = x1 - adjCols;
    returnObj.x2 = x2 - adjCols;
    returnObj.y1 = y1 - adjRows;
    returnObj.y2 = y2 - adjRows;
    returnObj.col = x2 - x1 - adjCols;
    returnObj.row = y2 - y1 - adjRows;

    return returnObj;

};


Wordsearch.prototype.getSelectionDirection = function (x1, y1, x2, y2) {

    'use strict';

    if (x2 === x1 && y2 < y1) {
        return 'N';
    }
    if (x2 > x1 && y2 < y1) {
        return 'NE';
    }
    if (x2 > x1 && y2 === y1) {
        return 'E';
    }
    if (x2 > x1 && y2 > y1) {
        return 'SE';
    }
    if (x2 === x1 && y2 > y1) {
        return 'S';
    }
    if (x2 < x1 && y2 > y1) {
        return 'SW';
    }
    if (x2 < x1 && y2 === y1) {
        return 'W';
    }
    if (x2 < x1 && y2 < y1) {
        return 'NW';
    }
    return false;
};


Wordsearch.prototype.getIdOfEndSquare = function (x1, x2, y1, y2) {

    'use strict';

    var o = this,
        gridW = o.puzzle.settings.cols,
        answer = [],
        direction = o.getSelectionDirection(x1, y1, x2, y2),
        id,
        xLoop,
        yLoop;

    //  adjust end position if now not at 45 degrees
    switch (direction) {

    case 'N':
        for (yLoop = y2; yLoop <= y1; yLoop = yLoop + 1) {
            for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                answer.push(id);
            }
        }
        break;

    case 'NE':
        for (yLoop = y1; yLoop >= y2; yLoop = yLoop - 1) {
            for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                if (Math.abs(xLoop - x1) === Math.abs(yLoop - y1)) {
                    answer.push(id);
                }
            }
        }
        break;

    case 'E':
        for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
            for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                answer.push(id);
            }
        }
        break;

    case 'SE':
        for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
            for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                if (Math.abs(xLoop - x1) === Math.abs(yLoop - y1)) {
                    answer.push(id);
                }
            }
        }
        break;

    case 'S':
        for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
            for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                answer.push(id);
            }
        }
        break;

    case 'SW':
        for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
            for (xLoop = x1; xLoop >= x2; xLoop = xLoop - 1) {
                id = (yLoop * gridW) + xLoop + 1;
                if (Math.abs(xLoop - x1) === Math.abs(yLoop - y1)) {
                    answer.push(id);
                }
            }
        }
        break;

    case 'W':
        for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
            for (xLoop = x2; xLoop <= x1; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                answer.push(id);
            }
        }
        break;

    case 'NW':
        for (yLoop = y2; yLoop <= y1; yLoop = yLoop + 1) {
            for (xLoop = x2; xLoop <= x1; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                if (Math.abs(xLoop - x2) === Math.abs(yLoop - y2)) {
                    answer.push(id);
                }
            }
        }
        break;

    default:
        for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
            for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                id = (yLoop * gridW) + xLoop + 1;
                answer.push(id);
            }
        }
        break;
    }  //  end switch


    return answer;
};

/**
 * resize grid for mobile
 */
Wordsearch.prototype.autoSizeGrid = function () {

    'use strict';

    var o = this,
        puzzleWidth,
		puzzleHeight,
        viewportHeight = $(window).height(),
        viewportWidth = $(window).width(),
        stagePadding = viewportWidth > 450 ? 35 : 10,
        headerHeight = $('.page-header').outerHeight(),
        titleHeight = $('.text-title').outerHeight(),
        actionButtonHeight = $('#actions').outerHeight(),
        numberOfIcons = $('.action-buttons li:visible').size(),
        iconWidth = 100 / numberOfIcons,
        setHeight = viewportHeight - headerHeight - titleHeight - actionButtonHeight - 10,
        setWidth = viewportWidth - (stagePadding * 2) - 20,
        setTop = headerHeight + titleHeight,
        setLeft = stagePadding + 10,
		puzzleTableWidth = $('#tableHolder').outerWidth(),
        transformScale,
		puzzleMargin;

    $('.words').css('width', puzzleTableWidth + 4 + 'px');

    puzzleWidth = $('#puzzle').outerWidth();
    puzzleHeight = $('#puzzle').outerHeight();

	o.puzzle.layout.titleHeight = titleHeight;

    if (setHeight > setWidth) {
        //  if height is greater than the width, then set the scale using the width to avoid overflow
        transformScale = setWidth / puzzleWidth;
		if ((transformScale * puzzleHeight) > setHeight) {
			transformScale = setHeight / puzzleHeight;
		}

    } else {
        //  if width is greater than the height, then set the scale using the height to avoid overflow
        transformScale = setHeight / puzzleHeight;
		if ((transformScale * puzzleWidth) > setWidth) {
			transformScale = setWidth / puzzleWidth;
		}
    }

    transformScale = 1

	puzzleMargin = (setWidth - (puzzleWidth * transformScale)) / 2;

    //  create the playable area
    $('.playable-area').css('height', setHeight + 'px').css('width', setWidth + 'px').css('top', setTop + 'px').css('left', setLeft + 'px').css('padding-left', puzzleMargin + 'px');

    //  set the position of the timer
    $('.timer').css('left', stagePadding + 10 + 'px').css('top', headerHeight + 'px');

    //  set the width of the action buttons holder
    $('.action-buttons, .title').css('padding-left', stagePadding + 10 + 'px').css('padding-right', stagePadding + 10 + 'px');
	$('h1 .found-header').css('right', stagePadding + 10 + 'px');

    //  set the percentage width of the action buttons
    //$('.action-buttons li').css('width', iconWidth + '%');

    //  scale the grid to fill the available space
    $('.puzzle').css('-webkit-transform', 'scale(' + transformScale + ',' + transformScale + ')').css('transform', 'scale(' + transformScale + ',' + transformScale + ')');

    o.puzzle.settings.transformScale = transformScale;

};
