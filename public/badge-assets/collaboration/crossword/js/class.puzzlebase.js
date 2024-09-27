/*
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject 
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
*/
/*
DM PuzzleBase.


* @version     $Id: class.puzzlebase.js 882 2015-05-20 12:53:27Z Jeremy $
*/

/**
The base class for puzzles.
This file includes many methods that can be used across a variety of puzzles.
Puzzles should build on this class so they can use these methods.
**/

/*globals $, DocumentTouch, Swiper, utag, utag_data, utag_meta*/
/*jslint eqeq:true*/

/**
 * class to hold generic puzzle methods
 * @constructor
 */
function PuzzleBase() {

    'use strict';

    this.loadDefaultSettings();

}

/**
 * initialisation puzzle to show as a preview (i.e. no gameplay)
 * 
 * @param {String} sJSON JSON data in a string
 * @returns {boolean}
 */
PuzzleBase.prototype.initPreview = function (sJSON) {

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
            o.revealSolution();
        });
    } else {
        o.puzzle.JSON = $.parseJSON(sJSON);
        o.definePuzzleObjects();
        o.revealSolution();
    }

    return true;
};

/**
 * set generic puzzle settings
 * @returns {object}
 */
PuzzleBase.prototype.loadDefaultSettings = function () {

    'use strict';

    var o = this;

    //  debug mode on?  1 = true, 0 = false, -1 = auto
    o.debugactive = 0;
    //  debug mode grouped (group items or show on separate lines)  1 = true, 0 = false
    o.debuggroups = 1;

    //  object to hold all device specific settings
    o.device = {};
    o.device.settings = {};

    //  object to hold information about the loaded puzzle
    o.puzzle = {};
    o.puzzle.JSON = {};
    o.puzzle.layout = {};
    o.puzzle.layout.blocks = [];
    o.puzzle.layout.cells = [];
    o.puzzle.meta = {};
    o.puzzle.settings = {};
    o.puzzle.settings.styling = {};

    //  object to hold information about the user's interactions with puzzle
    o.user = {};
    o.user.actions = {};
    o.user.actions.firstLetterEnteredOfVisit = true;
    o.user.game = {};
    o.user.game.cells = [];
    o.user.game.settings = {};
    o.user.meta = {};
    o.user.preferences = {};

    //  object to hold timer information
    o.timer = {};
    o.timer.timer = '';  //  reference to setInterval object
    o.timer.secondsElapsed = 0;
    o.timer.start = 0;

    //  object to hold user action history
    o.history = {};
    o.history.items = [];
    o.history.settings = {};
    o.history.settings.activeItem = -1;
    o.history.settings.maxHistory = 3;
    o.history.settings.redoActive = false;
    o.history.settings.undoActive = false;
    o.history.tasks = [];

    //  is this a touch device or not - code does not pass lint but is most efficient cross-browser method (as used by modernizr)
    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
        o.device.settings.isTouch = true;
    } else {
        o.device.settings.isTouch = false;
    }

    //  get operating system details
    o.device.settings.ua = navigator.userAgent.toLowerCase();
    o.device.settings.isAndroid = o.device.settings.ua.indexOf('android') > -1;
    o.device.settings.isIos = /(ipad|iphone|ipod)/g.test(o.device.settings.ua);
    o.device.settings.os = 'unknown';
    if (o.device.settings.isAndroid) {
        o.device.settings.os = 'android';
    }
    if (o.device.settings.isIos) {
        o.device.settings.os = 'ios';
    }

    if (document.getElementById('sniffer')) {
        if (o.device.settings.isAndroid) {
            document.getElementById('sniffer').className += ' android';
        } else if (o.device.settings.isIos) {
            document.getElementById('sniffer').className += ' ios';
        } else {
            document.getElementById('sniffer').className += ' not-android-or-ios';
        }
    }

    //  what platform are we on
    o.device.settings.isAWS = '@_IS_AWS_DEPLOYMENT_@';
    o.device.settings.platform = '@_ANALYTICS_ENVIRONMENT_@';

    //  how long key has to be held down to be considered a long press (milliseconds)
    o.device.settings.longKeypressLength = 500;
    //  max length between key presses to be considered a double tap (milliseconds)
    o.device.settings.doubleTapGapLength = 300;
    //  what character do we use for empty in the solution string
    o.puzzle.settings.solutionStringEmptyCellCharacter = ' ';
    //  how often do we save game data when inactive (seconds)
    o.puzzle.settings.inactiveSaveFrequency = 1;
    //  how long after checks initiated before reverting display back to normal (milliseconds) (0 = no auto revert)
    o.puzzle.settings.autoCheckRevertWaitLength = 0;
    //  has help screen been shown
    o.puzzle.settings.helpScreenShown = false;
    //  keyboard press settings
    o.puzzle.settings.debugKeyPresses = o.device.settings.isAWS !== 'yes';
    o.puzzle.settings.wrapCol = 'same';  //  'none', 'same' or 'wrap'
    o.puzzle.settings.wrapRow = 'same';  //  'none', 'same' or 'wrap'
    o.puzzle.settings.wrapGrid = false;  //  true or false
    o.puzzle.settings.skipInvalidCells = true;

    //  style settings
    o.puzzle.settings.styling.cellHolder = 'td';
    o.puzzle.settings.styling.cellHolderClassSelected = 'selected';
    o.puzzle.settings.styling.cellHolderIdPrefix = '#cell-';
    o.puzzle.settings.styling.cellNoteClassPrefix = 'note-';
    o.puzzle.settings.styling.cellNoteHolderClass = 'guide-numbers';
    o.puzzle.settings.styling.cellRightClass = 'right';
    o.puzzle.settings.styling.cellWrongClass = 'wrong';
    o.puzzle.settings.styling.puzzleHolder = '.puzzleholder';
    o.puzzle.settings.styling.transitionTimer = {};
    o.puzzle.settings.styling.userEnteredValueClass = 'entered-number';

    o.puzzleDisplayNames = {};
    o.puzzleDisplayNames.braintrainer = 'Brain Trainer';
    o.puzzleDisplayNames.cellblocks = 'Cell Blocks';
    o.puzzleDisplayNames.codeword = 'Codeword';
    o.puzzleDisplayNames.futoshiki = 'Futoshiki';
    o.puzzleDisplayNames.kakuro = 'Kakuro';
    o.puzzleDisplayNames.kenken = 'KenKen';
    o.puzzleDisplayNames.lexica = 'Lexica';
    o.puzzleDisplayNames.polygon = 'Polygon';
    o.puzzleDisplayNames.setsquare = 'Set Square';
    o.puzzleDisplayNames.suko = 'Suko';

    //  email settings
    o.puzzle.meta.print_subject = 'Email {{puzzlename}} to Your Inbox';
    o.puzzle.meta.print_body = 'You can download a printable version of {{puzzlename}} by sending this message to your email inbox and clicking on the following link: {{printurl}}<br/>We hope you enjoy your puzzle from {{brandname}}.';
    return o;
};



/**
 * method to update the quickjump menu
 * @returns {object}
 */
PuzzleBase.prototype.updateQuickJumpMenu = function () {

    'use strict';

    var o = this,
        tab = '';

    o.t2_settings = o.getLocalStorageItem('t2_settings') || {};

    $('li').removeClass('on');

    if (o.t2_settings.home_tab !== undefined) {
        tab = o.t2_settings.home_tab.charAt(0).toUpperCase() + o.t2_settings.home_tab.slice(1);
        if (!tab || (tab === 'Home')) {
            tab = '';
        }
        $("li[data-cat='" + o.t2_settings.home_tab + "']", '#listcatnames').addClass('on');
    }
    $('.jsSubPageArrow:first-of-type', '.page-header h1').toggle((tab !== ''));
    $('.jsSubPageName', '.page-header h1').html(tab);
    $('.jsPuzzleName', '.page-header h1').html(o.puzzle.meta.displayName);
    $('.print-puzzle a').attr('href', o.puzzle.meta.pdf);

};

/**
 * method to create user objects
 * @returns {object}
 */
PuzzleBase.prototype.defineUserObjects = function () {

    'use strict';

    var o = this,
        id,
        iLoop,
        jLoop,
        oCell;

    o.user.game.cells = [];
    o.user.game.cells[0] = '';
    for (iLoop = 0; iLoop < o.puzzle.layout.blocks.length; iLoop = iLoop + 1) {
        for (jLoop = 0; jLoop < o.puzzle.layout.blocks[iLoop].cells.length; jLoop = jLoop + 1) {
            oCell = o.puzzle.layout.blocks[iLoop].cells[jLoop];
            id = oCell.id;
            o.user.game.cells[id] = {};
            o.user.game.cells[id].id = id;
            o.user.game.cells[id].notes = [];
            o.user.game.cells[id].value = '';
        }
    }

    o.user.game.settings.pencileMode = false;
    o.user.game.settings.isCompletedOk = false;
    o.user.game.settings.keyPressDetected = false;

    return o;

};

/**
 * set up tagging
  */
PuzzleBase.prototype.initialiseTagging = function () {

    'use strict';

    var o = this;

    utag_meta.pubDateObject = o.puzzle.JSON.copy['date-publish-analytics'];
    utag_meta.gameType = o.puzzle.meta.taggingGameType;
    utag_meta.gameId = o.puzzle.meta.taggingGameId;
    o.createUtagObject();
    o.debug.log(utag_data);

    if (o.puzzle.JSON.copy['analytics-profile'] !== undefined && o.puzzle.JSON.copy['analytics-profile'] != '') {
        if (o.device.settings.isAWS == 'yes' && o.device.settings.platform !== '') {
            (function (a, b, c, d) {
                a = '//tags.tiqcdn.com/utag/newsinternational/' + o.puzzle.JSON.copy['analytics-profile'] + '/' + o.device.settings.platform + '/utag.js';
                b = document;
                c = 'script';
                d = b.createElement(c);
                d.src = a;
                d.type = 'text/java' + c;
                d.async = true;
                a = b.getElementsByTagName(c)[0];
                a.parentNode.insertBefore(d, a);
            })();  // fails jslint but is 3rd party code as supplied by News UK
        }
    }

};

/**
 * create utag object
 * @returns {object}
 */
PuzzleBase.prototype.createUtagObject = function () {

    'use strict';

    var o = this,
        meta = o.puzzle.meta;

    utag_data = {  //  jslint indicates this as read only but this is not the case
        call_type: 'view',
        page_name: utag_meta.gameId + ':' + meta.taggingItem + ':' + utag_meta.gameType,
        page_type: 'puzzles:' + meta.taggingItem,
        page_restrictions: 'restricted',
        page_section: 'puzzles',
        page_section_2: 'puzzles:' + meta.taggingItem,
        page_site_name: o.puzzle.JSON.copy['analytics-site'] || '',
        page_site_region: 'uk',
        article_name: utag_meta.gameId + ':' + meta.taggingItem + ':' + utag_meta.gameType,
        article_id: utag_meta.gameId,
        article_id_type: meta.type,
        article_publish_timestamp: utag_meta.pubDateObject,
        page_section_hierarchy: 'puzzles|' + meta.taggingItem,
        orientation: $('body').width() > $('body').height() ? 'landscape' : 'portrait'
    };

    return utag_data;


};

/**
 * reads in the meta file for T2 puzzles
 * @returns {object}
 */
PuzzleBase.prototype.readT2Meta = function () {

    'use strict';

    var o = this;

    o.setUpWhyNotTryData();

    //  load meta storage
    o.t2meta = o.getLocalStorageItem('t2meta') || {};

    return o.t2meta;

};

/**
 * sets up the json object for todays T2 puzzles
 * @returns {object}
 */
PuzzleBase.prototype.setUpWhyNotTryData = function () {

    'use strict';

    var o = this,
        aTmp,
        puzzlename,
        puzzleId,
        puzzleIdx,
        puzzleJson,
        overlayName,
        usedIds = [],
        iLoop,
        mobileLinksHolder = $('.complete-puzzle-links');

    //  load todays puzzles
    o.todaysPuzzles = o.getLocalStorageItem('t2_todays_puzzles') || {};
    o.todaysPuzzlesFull = o.getLocalStorageItem('t2_todays_puzzles_full') || {};

    //  set related puzzles
    o.whyNottryMatrix = {};
    //Initial block - 20.07.2015 - removed temporarily to make links to web optimised puzzles
/*    o.whyNottryMatrix.kenken = ['cellblocks', 'futoshiki', 'setsquare', 'suko', 'kakuro'];
    o.whyNottryMatrix.suko = ['kakuro', 'futoshiki', 'setsquare', 'kenken', 'polygon'];
    o.whyNottryMatrix.polygon = ['codeword', 'lexica', 'cellblocks', 'suko', 'futoshiki'];
    o.whyNottryMatrix.lexica = ['polygon', 'lexica', 'cellblocks', 'kenken', 'kakuro'];
    o.whyNottryMatrix.futoshiki = ['kakuro', 'futoshiki', 'setsquare', 'kenken', 'braintrainer'];
    o.whyNottryMatrix.kakuro = ['setsquare', 'cellblocks', 'kenken', 'futoshiki', 'suko'];
    o.whyNottryMatrix.cellblocks = ['futoshiki', 'kakuro', 'suko', 'kenken', 'braintrainer'];
    o.whyNottryMatrix.braintrainer = ['cellblocks', 'kakuro', 'suko', 'kenken', 'futoshiki'];
    o.whyNottryMatrix.setsquare = ['futoshiki', 'kakuro', 'suko', 'kenken', 'braintrainer'];
    o.whyNottryMatrix.codeword = ['lexica', 'polygon', 'cellblocks', 'kenken', 'braintrainer'];*/

    o.whyNottryMatrix.kenken = ['cellblocks', 'futoshiki', 'setsquare', 'suko', 'kakuro'];
    o.whyNottryMatrix.suko = ['kakuro', 'futoshiki', 'setsquare', 'kenken', 'cellblocks'];
    o.whyNottryMatrix.polygon = ['codeword', 'lexica', 'cellblocks', 'suko', 'futoshiki'];
    o.whyNottryMatrix.lexica = ['polygon', 'lexica', 'cellblocks', 'kenken', 'kakuro'];
    o.whyNottryMatrix.futoshiki = ['kakuro', 'cellblocks', 'setsquare', 'kenken', 'suko'];
    o.whyNottryMatrix.kakuro = ['setsquare', 'cellblocks', 'kenken', 'futoshiki', 'suko'];
    o.whyNottryMatrix.cellblocks = ['futoshiki', 'kakuro', 'suko', 'kenken', 'setsquare'];
    o.whyNottryMatrix.braintrainer = ['cellblocks', 'kakuro', 'suko', 'kenken', 'futoshiki'];
    o.whyNottryMatrix.setsquare = ['futoshiki', 'kakuro', 'suko', 'kenken', 'cellblocks'];
    o.whyNottryMatrix.codeword = ['lexica', 'polygon', 'cellblocks', 'kenken', 'braintrainer'];

    //  set mobile links
    $('li', mobileLinksHolder).each(function () {
        puzzlename = $(this).data('puzzle');
        overlayName = $(this).closest('.overlay').attr('id');
        usedIds[overlayName] = usedIds[overlayName] || [];
        aTmp = puzzlename.split('-');
        puzzlename = aTmp[0];
        puzzleIdx = aTmp[1] || 1;
        puzzleIdx = puzzleIdx - 1;

        if (o.todaysPuzzles[puzzlename] !== undefined && o.todaysPuzzles[puzzlename][puzzleIdx] !== undefined && o.todaysPuzzlesFull[o.todaysPuzzles[puzzlename][puzzleIdx]] !== undefined) {
            puzzleId = o.todaysPuzzlesFull[o.todaysPuzzles[puzzlename][puzzleIdx]].type + '-' + o.todaysPuzzlesFull[o.todaysPuzzles[puzzlename][puzzleIdx]].id;
            puzzleJson = o.getLocalStorageItem(puzzleId);
            if (puzzleJson != false && puzzleJson.settings.isCompletedOk == true) {
                $('a', $(this)).addClass('completed');
            }
            //  loop through each of this type of puzzle and add link if not the same puzzle (crosscheck IDs)
            for (iLoop = 0; iLoop < o.todaysPuzzles[puzzlename].length; iLoop = iLoop + 1) {
                if (o.todaysPuzzles[puzzlename][iLoop] !== undefined && o.todaysPuzzlesFull[o.todaysPuzzles[puzzlename][iLoop]] !== undefined) {
                    var thisPuzzleId = o.todaysPuzzlesFull[o.todaysPuzzles[puzzlename][iLoop]].id;
                    if (thisPuzzleId !== o.puzzle.meta.id && usedIds[overlayName].indexOf(thisPuzzleId) < 0) {  //  not current puzzle
                        $('a', $(this)).attr('href', '../../' + o.todaysPuzzlesFull[o.todaysPuzzles[puzzlename][iLoop]].url);
                        usedIds[overlayName].push(thisPuzzleId);
                        break;
                    } else {
                        puzzleIdx = puzzleIdx + 1;
                    }
                }
            }

        }
    });

    return o.t2meta;

};

/**
 * update the timestamps in the meta file for T2 puzzles
 * @returns {object}
 */
PuzzleBase.prototype.updateT2Meta = function () {

    'use strict';

    var o = this,
        timestamp = (new Date()).getTime();

    //  load meta storage
    o.t2meta[o.puzzle.meta.localStoragePrefix] = o.t2meta[o.puzzle.meta.localStoragePrefix] || {};
    o.t2meta[o.puzzle.meta.localStoragePrefix].first = o.t2meta[o.puzzle.meta.localStoragePrefix].first || timestamp;
    o.t2meta[o.puzzle.meta.localStoragePrefix].last = timestamp;
    o.setLocalStorageItem('t2meta', o.t2meta);

    return o.t2meta;

};

/**
 * returns whether user has played this puzzle before
 * @returns {boolean}
 */
PuzzleBase.prototype.userPlayedPuzzleBefore = function () {

    'use strict';

    var o = this;

    if (!o.t2meta[o.puzzle.meta.localStoragePrefix]) {
        return false;
    }
    if (!o.t2meta[o.puzzle.meta.localStoragePrefix].first || !o.t2meta[o.puzzle.meta.localStoragePrefix].last) {
        return false;
    }
    if (o.t2meta[o.puzzle.meta.localStoragePrefix].first == o.t2meta[o.puzzle.meta.localStoragePrefix].last) {
        return false;
    }

    return true;

};

/**
 * either start help or start puzzle
 */
PuzzleBase.prototype.showHelpOrStartPuzzle = function () {

    'use strict';

    var o = this,
        niceTime = o.user.game.settings.secondsElapsed ? o.timerSecondsToMMSS(o.user.game.settings.secondsElapsed) : '00:00';

    //  clear timer display
    $('#jsTimerOutput').html(niceTime);

    //  read & update meta storage
    o.readT2Meta();
    o.updateT2Meta();

    if (o.userPlayedPuzzleBefore() && window.location.search.indexOf('help') < 0) {
        o.startPuzzle();
    } else {
        //  show help if android or ios otherwise start puzzle
        if (o.device.settings.isAndroid || o.device.settings.isIos) {
            o.showHelp();
        } else {
            o.showHelp();
        }
    }

};

/**
 * show help
 */
PuzzleBase.prototype.showHelp = function (slidetoshow) {

    'use strict';

    var o = this,
        howManySlides = 0;

    $('.onboarding-overlay-bg').show();

    if ($('#mobileMenuTrigger:visible').length > 0) {
        $('#overlayMobileHelp').show();
    } else {
        $('.onboarding-overlay-bg').add('.onboarding-overlay').show();
    }

    howManySlides = $('.swiper-wrapper .swiper-slide').length - 1;

    if (slidetoshow === undefined || slidetoshow === 0) {
        $('.arrow-left').addClass('hide');
    }

    if (slidetoshow !== undefined && slidetoshow === howManySlides) {
        $('.arrow-right').addClass('hide');
        $('.play-the-game').removeClass('hide');
    }

    o.mySwiper = new Swiper('.swiper-container', {
        pagination: '.pagination',
        loop: false,
        grabCursor: true,
        initialSlide: slidetoshow || 0,
        paginationClickable: true,
        onSlideChangeStart: function () {
            $('.arrow-left').removeClass('hide');
            $('.arrow-right').removeClass('hide');
            if (o.mySwiper.activeIndex === 0) {
                $('.arrow-left').addClass('hide');
            } else {
                $('.arrow-left').removeClass('hide');
            }
            if (o.mySwiper.activeIndex === howManySlides) {
                $('.arrow-right').addClass('hide');
                $('.play-the-game').removeClass('hide');
            } else {
                $('.play-the-game').addClass('hide');
                $('.arrow-right').removeClass('hide');
            }
            o.sendUtagClickEngagementEvent('instructions panel:show page ' + (o.mySwiper.activeIndex + 1));
        }
    });

    if ($('.swiper-active-switch').length < 1) {
        $('.swiper-pagination-switch:eq(' + slidetoshow + ')').addClass('swiper-active-switch');
    }

    if (o.device.settings.isTouch) {
        $('.arrow-left').on('touchstart', function (e) {
            e.preventDefault();
            o.mySwiper.swipePrev();
        });
        $('.arrow-right').on('touchstart', function (e) {
            e.preventDefault();
            o.mySwiper.swipeNext();
        });
        $('#overlayOnboarding-play').on('touchstart', function (e) {
            $('.onboarding-overlay-bg').add('.onboarding-overlay').fadeOut();
            o.startPuzzle();
            o.sendUtagClickEngagementEvent('instructions panel:play the puzzle');
            e.preventDefault();
        });
        $('#overlayOnboarding-close').on('touchstart', function (e) {
            $('.onboarding-overlay-bg').add('.onboarding-overlay').fadeOut();
            o.startPuzzle();
            o.sendUtagClickEngagementEvent('instructions panel:hide');
            e.preventDefault();
        });
        $('#overlayMobileHelp-close').on('touchstart', function (e) {
            o.startPuzzle();
            o.sendUtagClickEngagementEvent('instructions panel:hide');
            e.preventDefault();
        });
    } else {
        $('.arrow-left').on('click', function (e) {
            e.preventDefault();
            o.mySwiper.swipePrev();
        });
        $('.arrow-right').on('click', function (e) {
            e.preventDefault();
            o.mySwiper.swipeNext();
        });
        $('#overlayOnboarding-play').on('click', function (e) {
            $('.onboarding-overlay-bg').add('.onboarding-overlay').fadeOut();
            o.startPuzzle();
            o.sendUtagClickEngagementEvent('instructions panel:play the puzzle');
            e.preventDefault();
        });
        $('#overlayOnboarding-close').on('click', function (e) {
            $('.onboarding-overlay-bg').add('.onboarding-overlay').fadeOut();
            o.startPuzzle();
            o.sendUtagClickEngagementEvent('instructions panel:hide');
            e.preventDefault();
        });
        $('#overlayMobileHelp-close').on('click', function (e) {
            o.startPuzzle();
            o.sendUtagClickEngagementEvent('instructions panel:hide');
            e.preventDefault();
        });
    }

    o.puzzle.settings.helpScreenShown = true;
    o.sendUtagClickEngagementEvent('instructions panel:expose');
    o.sendUtagClickEngagementEvent('instructions panel:show page ' + ((slidetoshow + 1) || 1));

};

/**
 * reshow help
 */
PuzzleBase.prototype.reshowHelp = function () {

    'use strict';

    var o = this;

    o.timerPause();

    if (o.puzzle.settings.helpScreenShown) {
        o.mySwiper.destroy();
        $('.arrow-left').removeClass('hide').unbind('click touchstart');
        $('.arrow-right').removeClass('hide').unbind('click touchstart');
        $('#overlayOnboarding-play').unbind('click touchstart');
        $('#overlayOnboarding-close').unbind('click touchstart');
        $('.play-the-game').addClass('hide');
        $('.swiper-slide').height($('.slide-content').height());
        o.showHelp(0);
        o.mySwiper.swipeTo(0, 0);
    } else {
        o.showHelp(0);
    }

};

/**
 * reshow mobile help
 */
PuzzleBase.prototype.reshowMobileHelp = function () {

    'use strict';

    $('#overlayMobileHelp').show();

};

/**
 * hides overlay background and all overlays
 */
PuzzleBase.prototype.hideOverlays = function () {

    'use strict';

    $('#overlayBG').add('.overlay').hide();

};

/**
 * sets the specified cell as the current cell
 * @param {int} cellId
 * @returns {int} cellId
 */
PuzzleBase.prototype.setCurrentCell = function (cellId) {

    'use strict';

    var o = this;

    o.debug.log('setCurrentCell - cell #' + cellId);

    o.user.game.settings.currentActiveCellId = cellId;
    $(o.puzzle.settings.styling.cellHolder, o.puzzle.settings.styling.puzzleHolder).removeClass(o.puzzle.settings.styling.cellHolderClassSelected);
    $(o.puzzle.settings.styling.cellHolderIdPrefix + o.user.game.settings.currentActiveCellId).addClass(o.puzzle.settings.styling.cellHolderClassSelected);

    return cellId;

};

/**
 * add a value to a specific cell
 * @param {int} cellId
 * @param {mixed} cellValue
 * @returns {int} cellId
 */
PuzzleBase.prototype.addValueToCell = function (cellId, cellValue) {

    'use strict';

    var o = this;

    o.debug.log('addValueToCell - cell #' + cellId + ' = ' + cellValue);

    o.user.game.cells[cellId].value = cellValue;
    $(o.puzzle.settings.styling.cellHolderIdPrefix + cellId).find('.' + o.puzzle.settings.styling.userEnteredValueClass).text(cellValue);

    return cellId;

};

/**
 * clear cells of user data
 */
PuzzleBase.prototype.clearCells = function () {

    'use strict';

    var o = this,
        iLoop;

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        o.addValueToCell(iLoop, '');
        o.hideCellNotes(iLoop);
    }

};

/**
 * saves the current state of the game to local storage
 * @param {boolean} showindebug by default this will be true but is turned off for auto saves
 * @returns {boolean}
 */
PuzzleBase.prototype.saveGameState = function (showindebug) {

    'use strict';

    var o = this,
        bCells = o.setLocalStorageItem(o.puzzle.meta.localStoragePrefix + '-' + o.puzzle.meta.localStorageItem, o.user.game);

    if (showindebug === undefined) {
        showindebug = true;
    }

    if (showindebug) {
        o.debug.open('saveGameState');
        o.debug.log(JSON.stringify(o.user.game));
    }

    if (bCells) {
        if (showindebug) {
            o.debug.close('saveGameState');
        }
        return true;
    }
    if (showindebug) {
        o.debug.close('saveGameState');
    }
    return false;

};

/**
 * clears game state from local storage
 * @returns {boolean}
 */
PuzzleBase.prototype.clearGameState = function () {

    'use strict';

    var o = this,
        bCells = o.removeLocalStorageItem(o.puzzle.meta.localStoragePrefix + '-' + o.puzzle.meta.localStorageItem);

    o.user.game.settings.isCompletedOk = false;

    if (bCells) {
        return true;
    }
    return false;

};

/**
 * loads the current state of the game from local storage
 * @returns {object}
 */
PuzzleBase.prototype.loadGameState = function () {

    'use strict';

    var o = this,
        data = {};

    data = o.getLocalStorageItem(o.puzzle.meta.localStoragePrefix + '-' + o.puzzle.meta.localStorageItem);
    return data;

};

/**
 * reveal solution to current cell
 */
PuzzleBase.prototype.revealCurrentCell = function () {

    'use strict';

    var o = this,
        solution = o.puzzle.layout.cells[o.user.game.settings.currentActiveCellId].solution;

    o.debug.log('revealCurrentCell - cell#' + o.user.game.settings.currentActiveCellId + ' = ' + solution);

    o.clearChecks();
    o.hideCellNotes(o.user.game.settings.currentActiveCellId);
    o.history.tasks.push({ action: 'userchangedcellvalue', ref: o.user.game.settings.currentActiveCellId, before: o.user.game.cells[o.user.game.settings.currentActiveCellId].value, after: solution });
    o.addValueToCell(o.user.game.settings.currentActiveCellId, solution);
    o.user.game.settings.revealsUsed = o.user.game.settings.revealsUsed + 1;
    o.saveGameState();
    o.historySaveTasks();
    o.checkAgainstCorrectSolution();
};

/**
 * reveal solution to all cells
 */
PuzzleBase.prototype.revealSolution = function () {

    'use strict';

    var o = this,
        solution,
        iLoop;

    o.debug.log('revealSolution');

    o.disableUndoRedoButtons();

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        o.hideCellNotes(iLoop);
        solution = o.puzzle.layout.cells[iLoop].solution;
        $(o.puzzle.settings.styling.cellHolderIdPrefix + iLoop).find('.' + o.puzzle.settings.styling.userEnteredValueClass).text(solution);
    }

    o.user.game.settings.solutionsUsed = o.user.game.settings.solutionsUsed + 1;

    $('#triggerOverlaySolution a').addClass('solution-showing');

    o.user.game.settings.solutionShowing = true;

};

/**
 * hide solution to all cells
 */
PuzzleBase.prototype.hideSolution = function () {

    'use strict';

    var o = this,
        value,
        iLoop;

    o.debug.open('hideSolution');

    o.historyUpdateDisplay();

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        value = o.user.game.cells[iLoop].value;
        o.addValueToCell(iLoop, value);
        if (value == '') {
            o.showCellNotes(iLoop);
        }
    }

    $('#triggerOverlaySolution a').removeClass('solution-showing');

    o.user.game.settings.solutionShowing = false;
    o.debug.close('hideSolution');

};

/**
 * handle short press of check button
 * @returns {boolean}
 */
PuzzleBase.prototype.checkShortPress = function () {

    'use strict';

    var o = this,
        status = $('#triggerCheck').hasClass('on');

    if (o.user.game.settings.solutionShowing) {
        o.hideSolution();
    }
    o.clearOnStates();
    o.clearLongPressOnStates();
    if (status) {
        o.clearChecks();
        o.sendUtagClickEngagementEvent('main ribbon:check:disable');
        return false;
    }
    o.doChecks();
    o.sendUtagClickEngagementEvent('main ribbon:check:enable');

    return true;

};

/**
 * mark all cells as right or wrong
 */
PuzzleBase.prototype.doChecks = function () {

    'use strict';

    var o = this,
        iLoop;

    o.debug.log('doChecks');

    o.disableUndoRedoButtons();

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        $(o.puzzle.settings.styling.cellHolderIdPrefix + iLoop).removeClass(o.puzzle.settings.styling.cellRightClass).removeClass(o.puzzle.settings.styling.cellWrongClass);

        if (o.user.game.cells[iLoop].value !== '') {
            if (o.user.game.cells[iLoop].value == o.puzzle.layout.cells[iLoop].solution) {
                $(o.puzzle.settings.styling.cellHolderIdPrefix + iLoop).addClass(o.puzzle.settings.styling.cellRightClass);
            } else {
                $(o.puzzle.settings.styling.cellHolderIdPrefix + iLoop).addClass(o.puzzle.settings.styling.cellWrongClass);
            }
        }
    }
    $('#triggerCheck').addClass('on');
    o.user.game.settings.checksUsed = o.user.game.settings.checksUsed + 1;
    if (o.puzzle.settings.autoCheckRevertWaitLength > 0) {
        o.puzzle.settings.styling.transitionTimer = setTimeout(
            function () {
                o.clearChecks();
            },
            o.puzzle.settings.autoCheckRevertWaitLength
        );
    }
};

/**
 * clear right and wrong indiciators from all cells
 */
PuzzleBase.prototype.clearChecks = function () {

    'use strict';

    var o = this,
        iLoop;

    o.debug.log('clearChecks');

    o.historyUpdateDisplay();

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        $(o.puzzle.settings.styling.cellHolderIdPrefix + iLoop).removeClass(o.puzzle.settings.styling.cellRightClass).removeClass(o.puzzle.settings.styling.cellWrongClass);
    }
    $('#triggerCheck').removeClass('on');

};

/**
 * turn notes mode on/off
 */
PuzzleBase.prototype.toggleNotesMode = function () {

    'use strict';

    var o = this;

    if (o.user.game.settings.currentMode === 'notes') {
        o.user.game.settings.currentMode = '';
        $('#triggerNotesMode').removeClass('on');
        $('body').removeClass('notes-mode');
        o.checkEntryCounts();
        o.sendUtagClickEngagementEvent('main ribbon:notes:disable');
    } else {
        o.user.game.settings.currentMode = 'notes';
        $('#triggerNotesMode').addClass('on');
        $('body').addClass('notes-mode');
        o.clearAllUsedUp();
        o.sendUtagClickEngagementEvent('main ribbon:notes:enable');
    }

};

/**
 * add a note to a specific cell
 * @param {int} cellId
 * @param {int} noteId
 * @returns {int} cellId
 */
PuzzleBase.prototype.addNoteToCell = function (cellId, noteId) {

    'use strict';

    var o = this,
        k = o.user.game.cells[cellId].notes.indexOf(noteId);

    o.debug.log('addNoteToCell - cell #' + cellId + ' = ' + noteId);

    if (k < 0) {
        o.user.game.cells[cellId].notes.push(noteId);
    } else {
        o.user.game.cells[cellId].notes.splice(k, 1);
    }

    if (o.user.game.cells[cellId].value === '') {
        o.showCellNotes(cellId);
    } else {
        o.hideCellNotes(cellId);
    }

    return cellId;
};

/**
 * add multiple notes to a specific cell
 * @param {int} cellId
 * @param {array} noteIds
 * @returns {int} cellId
 */
PuzzleBase.prototype.addMultipleNotesToCell = function (cellId, noteIds) {

    'use strict';

    var o = this,
        iLoop;

    o.debug.log('addMultipleNotesToCell - cell #' + cellId, noteIds);

    for (iLoop = 0; iLoop < noteIds.length; iLoop = iLoop + 1) {
        o.addNoteToCell(cellId, noteIds[iLoop]);
    }

    return cellId;
};

/**
 * show any user notes for s specific cell
 * @param {int} cellId
 * @returns {int} cellId
 */
PuzzleBase.prototype.showCellNotes = function (cellId) {

    'use strict';

    var o = this,
        notes = o.user.game.cells[cellId].notes,
        iLoop;

    o.debug.log('showCellNotes - cell #' + cellId);

    $(o.puzzle.settings.styling.cellHolderIdPrefix + cellId).find('.' + o.puzzle.settings.styling.cellNoteHolderClass).find('.jsCellNote').removeClass('on');

    for (iLoop = 0; iLoop < notes.length; iLoop = iLoop + 1) {
        $(o.puzzle.settings.styling.cellHolderIdPrefix + cellId).find('.' + o.puzzle.settings.styling.cellNoteHolderClass).find('.' + o.puzzle.settings.styling.cellNoteClassPrefix + notes[iLoop]).addClass('on');
    }

    return cellId;

};

/**
 * hide all user notes for s specific cell
 * @param {int} cellId
 * @returns {int} cellId
 */
PuzzleBase.prototype.hideCellNotes = function (cellId) {

    'use strict';

    var o = this;

    o.debug.log('hideCellNotes - cell #' + cellId);

    $(o.puzzle.settings.styling.cellHolderIdPrefix + cellId).find('.' + o.puzzle.settings.styling.cellNoteHolderClass).find('.jsCellNote').removeClass('on');

    return cellId;

};

/**
 * return to standard mode
 */
PuzzleBase.prototype.resetCurrentMode = function () {

    'use strict';

    var o = this;

    o.user.game.settings.currentMode = '';
    o.user.game.settings.currentModeValue = '';

    $('#triggerNotesMode').removeClass('on');
    $('body').removeClass('notes-mode');

};

/**
 * clear on states from action keys
 */
PuzzleBase.prototype.clearOnStates = function () {

    'use strict';

    var o = this;

    $('li', '.action-buttons').removeClass('on');
    o.user.game.settings.solutionShowing = false;

};

/**
 * clear long press on states from action keys
 */
PuzzleBase.prototype.clearLongPressOnStates = function () {

    'use strict';

    $('li a', '.keys').removeClass('long-press');

};

/**
 * set pencil mode on or off
 */
PuzzleBase.prototype.setPencilMode = function (pencilModeOn) {

    'use strict';

    var o = this;

    o.user.game.settings.pencileMode = pencilModeOn;

    if (pencilModeOn) {
        $('#triggerPen').removeClass('on');
        $('#triggerPencil').addClass('on');
        o.sendUtagClickEngagementEvent('main ribbon:pencil');
    } else {
        $('#triggerPencil').removeClass('on');
        $('#triggerPen').addClass('on');
        o.sendUtagClickEngagementEvent('main ribbon:pen');
    }

};

/**
 * reset puzzle
 */
PuzzleBase.prototype.resetPuzzle = function () {

    'use strict';

    var o = this;

    o.clearGameState();
    o.clearCells();
    o.clearChecks();
    o.timerClear();
    o.historyClearAll();
    o.resetCurrentMode();
    o.checkEntryCounts();
    o.user.game.settings.currentActiveCellId = o.getIdOfDefaultStartCell();
    o.setCurrentCell(o.user.game.settings.currentActiveCellId);
    o.clearOnStates();
    o.hideOverlays();

    //  (re)set up object to hold user data
    setTimeout(
        function () {
            o.defineUserObjects();
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
 * returns the ID of the default start cell - base class returns 0 for top left square - override in puzzle class if need be
 * @returns {int} 0
 */
PuzzleBase.prototype.getIdOfDefaultStartCell = function () {

    'use strict';

    return 0;

};

/**
 * start timer object
 * @param {function} callbackFunction
 * @returns {object}
 */
PuzzleBase.prototype.timerStart = function (callbackFunction) {

    'use strict';

    if (callbackFunction === undefined) {
        callbackFunction = 'timerCallback';
    }

    var o = this;

    o.timer.timer = setInterval(
        function () {
            o[callbackFunction]();
        },
        1000
    );
    return o.timer;

};

/**
 * default function called every second after timer initiated
 * @returns {string} MM:SS
 */
PuzzleBase.prototype.timerCallback = function () {

    'use strict';

    var o = this,
        niceTime;

    if (o.timer.secondsElapsed === undefined) {
        o.timer.secondsElapsed = 0;
    }

    o.timer.secondsElapsed = o.timer.secondsElapsed + 1;
    o.user.game.settings.secondsElapsed = o.timer.secondsElapsed;
    niceTime = o.timerSecondsToMMSS(o.timer.secondsElapsed);

    $('#jsTimerOutput').html(niceTime);

    if (o.puzzle.settings.inactiveSaveFrequency > 0 && o.timer.secondsElapsed % o.puzzle.settings.inactiveSaveFrequency === 0) {
        o.saveGameState(false);
    }
    return niceTime;

};

/**
 * clear timer object
 * @returns {object}
 */
PuzzleBase.prototype.timerClear = function () {

    'use strict';

    var o = this;

    clearInterval(o.timer.timer);
    o.timer.secondsElapsed = 0;
    o.user.game.settings.secondsElapsed = 0;

    return o.timer;

};

/**
 * stop timer object
 * @returns {int}
 */
PuzzleBase.prototype.timerStop = function () {

    'use strict';

    var o = this,
        secondsElapsed = o.timer.secondsElapsed;

    o.timerClear();

    return secondsElapsed;

};

/**
 * pause timer object
 */
PuzzleBase.prototype.timerPause = function () {

    'use strict';

    var o = this;

    o.user.game.settings.secondsElapsed = o.timer.secondsElapsed;

    clearInterval(o.timer.timer);

};

/**
 * converts a number into equivalent minutes and seconds e.g. 94 = 01:34
 * @param {int} seconds
 * @returns {string} MM:SS
 */
PuzzleBase.prototype.timerSecondsToMMSS = function (seconds) {

    'use strict';

    var MMSS = '',
        a = Math.floor(seconds / 60),
        b = seconds % 60;

    MMSS += a < 10 ? '0' + a : a;
    MMSS += ':';
    MMSS += b < 10 ? '0' + b : b;

    return MMSS;

};

/**
 * add an item to the history. an item is an array of tasks
 * @param {array} item
 * @returns {array} o.history.items the array of history items
 */
PuzzleBase.prototype.historyAddItem = function (item) {

    'use strict';

    var o = this;

    o.debug.open('historyAddItem');
    o.debug.log(item);

    if (o.history.settings.activeItem < (o.history.items.length - 1)) {
        o.history.items.splice(o.history.settings.activeItem + 1, o.history.items.length);
    }

    o.history.items.push(item);
    o.history.settings.activeItem = o.history.items.length - 1;

    if (o.history.items.length > o.history.settings.maxHistory) {
        o.history.items.shift();
        o.history.settings.activeItem = o.history.settings.activeItem - 1;
    }

    o.historyUpdateDisplay();
    o.debug.close('historyAddItem');

    return o.history.items;

};

/**
 * add an item to the history. an item is an array of tasks
 * @param {array} item
 * @returns {array} o.history.items the array of history items
 */
PuzzleBase.prototype.historyClearAll = function () {

    'use strict';

    var o = this;

    o.debug.open('historyClearAll');
    o.debug.log('historyClearAll');

    o.history.items = [];
    o.history.settings.activeItem = o.history.items.length - 1;
    o.historyUpdateDisplay();

    o.debug.close('historyClearAll');

    return o.history.items;

};

/**
 * set active item one less than it is now if possible and trigger undo function
 * @returns {boolean} whether or not there was a previous item
 */
PuzzleBase.prototype.historyBack = function () {

    'use strict';

    var o = this,
        a = o.history.items[o.history.settings.activeItem],
        idx,
        iLoop;

    if (o.history.settings.activeItem < 0) {
        return false;
    }

    for (iLoop = 0; iLoop < a.length;  iLoop = iLoop + 1) {
        idx = a.length - iLoop - 1;
        o.historyUndoItem(a[idx]);
    }

    o.history.settings.activeItem = o.history.settings.activeItem - 1;

    o.historyUpdateDisplay();

    return true;

};

/**
 * set active item one more than it is now if possible and trigger redo function
 * @returns {boolean} whether or not there was a next item
 */
PuzzleBase.prototype.historyForward = function () {

    'use strict';

    var o = this,
        a,
        idx,
        iLoop;

    if (o.history.settings.activeItem >= o.history.items.length - 1) {
        return false;
    }

    o.history.settings.activeItem = o.history.settings.activeItem + 1;

    a = o.history.items[o.history.settings.activeItem];

    for (iLoop = 0; iLoop < a.length;  iLoop = iLoop + 1) {
        idx = a.length - iLoop - 1;
        o.historyRedoItem(a[idx]);
    }

    o.historyUpdateDisplay();

    return true;

};

/**
 * update the display according to active history item
 * @returns {array} o.history.items the array of history items
 */
PuzzleBase.prototype.historyUpdateDisplay = function () {

    'use strict';

    var o = this;

    o.debug.open('historyUpdateDisplay');
    o.debug.log(o.history);

    o.history.settings.redoActive = o.history.settings.activeItem < (o.history.items.length - 1);
    if (o.history.settings.redoActive) {
        o.hideUndoButton();
    } else {
        o.showUndoButton();
    }

    if (o.history.items.length < 1) {
        o.disableUndoRedoButtons();
    } else {
        o.enableUndoRedoButtons();
    }

    o.debug.close('historyUpdateDisplay');

    return o.history.items;

};

/**
 * save the stored array of tasks as a history item
 * @returns {array} the array of tasks added
 */
PuzzleBase.prototype.historySaveTasks = function () {

    'use strict';

    var o = this,
        tasks = o.history.tasks;

    if (tasks.length > 0) {
        o.historyAddItem(tasks);
    }
    o.history.tasks = [];

    return tasks;

};

/**
 * undo item function
 * @returns {boolean}
 */
PuzzleBase.prototype.historyUndoItem = function () {

    'use strict';

    //var o = this;

    return true;

};

/**
 * redo item function
 * @returns {boolean}
 */
PuzzleBase.prototype.historyRedoItem = function () {

    'use strict';

    //var o = this;

    return true;

};

/**
 * handle undo short keypress
  */
PuzzleBase.prototype.undoShortPress = function () {

    'use strict';

    var o = this;

    if ($('#triggerUndo').hasClass('disabled')) {
        o.debug.log('undo is disabled');
        return false;
    }

    if (o.user.game.settings.solutionShowing) {
        o.hideSolution();
    }

    o.clearChecks();
    o.clearOnStates();
    o.historyBack();
    o.sendUtagClickEngagementEvent('main ribbon:undo');

};

/**
 * handle redo short keypress
  */
PuzzleBase.prototype.redoShortPress = function () {

    'use strict';

    var o = this;

    if ($('#triggerRedo').hasClass('disabled')) {
        o.debug.log('redo is disabled');
        return false;
    }

    if (o.user.game.settings.solutionShowing) {
        o.hideSolution();
    }

    o.clearChecks();
    o.clearOnStates();
    o.historyForward();
    o.sendUtagClickEngagementEvent('main ribbon:redo');

};

/**
 * show undo button
  */
PuzzleBase.prototype.showUndoButton = function () {

    'use strict';

    var o = this;
    o.debug.log('showUndoButton');

    $('.redo').hide();
    $('.undo').show();

};

/**
 * hide undo button
 */
PuzzleBase.prototype.hideUndoButton = function () {

    'use strict';

    var o = this;
    o.debug.log('hideUndoButton');

    $('.undo').hide();
    $('.redo').show();

};

/**
 * enable undo button
  */
PuzzleBase.prototype.enableUndoRedoButtons = function () {

    'use strict';

    var o = this;
    o.debug.log('enableUndoRedoButtons');

    $('.undo').add('.redo').removeClass('disabled').addClass('active');

};

/**
 * disable undo button
  */
PuzzleBase.prototype.disableUndoRedoButtons = function () {

    'use strict';

    var o = this;
    o.debug.log('disableUndoRedoButtons');

    $('.undo').add('.redo').removeClass('active').addClass('disabled');

};

/**
 * checks a string against the correct solution
 * @returns {boolean} whether grid matches solution
 */
PuzzleBase.prototype.checkAgainstCorrectSolution = function () {

    'use strict';

    var o = this,
        puzzleComplete = o.isPuzzleCompleted(),
        userValuesString = o.getUserValuesString(),
        solution = o.puzzle.settings.solution,
        result = userValuesString == solution;

    o.debug.open('checkAgainstCorrectSolution');
    o.debug.log('user complete puzzle:  ' + puzzleComplete);

    if (!puzzleComplete) {
        o.debug.close('checkAgainstCorrectSolution');
        return false;
    }

    o.debug.log('solution:  ' + solution);
    o.debug.log('entered: ' + userValuesString);
    o.debug.log('result: ' + result);
    o.debug.close('checkAgainstCorrectSolution');

    if (result) {
        o.puzzleCompletedCorrectly();
        return true;
    }

    o.puzzleCompletedIncorrectly();
    return false;

};

/**
 * continue buttton pressed after incorrect solution
 */
PuzzleBase.prototype.incorrectSolutionNoShortPress = function () {

    'use strict';

    var o = this;

    o.hideOverlays();
    o.sendUtagClickEngagementEvent('fail panel:continue puzzle');

};

/**
 * overlay for incorrect solution closed
 */
PuzzleBase.prototype.incorrectSolutionAbort = function () {

    'use strict';

    var o = this;

    o.hideOverlays();
    o.sendUtagClickEngagementEvent('fail panel:hide');

};

/**
 * overlay for correct solution back to homepage
 */
PuzzleBase.prototype.correctSolutionMindGames = function () {

    'use strict';

    var o = this;

    o.sendUtagClickEngagementEvent('success panel:mind games menu');

};

/**
 * overlay for incorrect solution back to homepage
 */
PuzzleBase.prototype.incorrectSolutionMindGames = function () {

    'use strict';

    var o = this;

    o.sendUtagClickEngagementEvent('fail panel:mind games menu');

};

/**
 * checks if values have been used as many times as allowed
 */
PuzzleBase.prototype.checkEntryCounts = function () {

    'use strict';

    var o = this,
        iLoop,
        allowedValuesNumItems = o.puzzle.settings.allowedValues.length,
        userValuesString = o.getUserValuesString(),
        item,
        itemCount;

    if (o.user.game.settings.currentMode == 'notes') {
        return false;
    }

    o.debug.open('checkEntryCounts');
    o.debug.log(allowedValuesNumItems, userValuesString);

    for (iLoop = 0; iLoop < allowedValuesNumItems; iLoop = iLoop + 1) {
        item = o.puzzle.settings.allowedValues[iLoop];
        itemCount = userValuesString.split(item).length - 1;
        if (itemCount >= o.getAllowedItemLimit() && o.getAllowedItemLimit() > 0) {
            o.setAsUsedUp(item);
            if (o.user.game.settings.currentMode === 'multinumber' && o.user.game.settings.currentModeValue == item) {
                o.resetCurrentMode();
            }
        } else {
            o.clearUsedUp(item);
        }
    }

    o.debug.close('checkEntryCounts');

};

/**
 * return how many times an item can be used
 * @returns {int} 
 */
PuzzleBase.prototype.getAllowedItemLimit = function () {

    'use strict';

    var o = this,
        allowedValuesNumItems = o.puzzle.settings.allowedValues.length;

    return (o.puzzle.settings.rowCount * o.puzzle.settings.colCount) / allowedValuesNumItems;

};

/**
 * set item as used up
 * @returns {mixed} item
 */
PuzzleBase.prototype.setAsUsedUp = function (item) {

    'use strict';

    $("li.jsNumberKey[data-value='" + item + "'] a").addClass('used-up');

    return item;

};

/**
 * remove used up from item
 * @returns {mixed} item
 */
PuzzleBase.prototype.clearUsedUp = function (item) {

    'use strict';

    $("li.jsNumberKey[data-value='" + item + "'] a").removeClass('used-up');

    return item;

};

/**
 * remove used up from all items
 */
PuzzleBase.prototype.clearAllUsedUp = function () {

    'use strict';

    $("li.jsNumberKey a").removeClass('used-up');

};

/**
 * return string of user values
 * @returns {string}
 */
PuzzleBase.prototype.getUserValuesString = function () {

    'use strict';

    var o = this,
        iLoop,
        cellValue,
        cells = o.user.game.cells,
        userValuesString = '',
        emptyCellChar = o.puzzle.settings.solutionStringEmptyCellCharacter;

    for (iLoop = 0; iLoop < (o.puzzle.settings.rowCount * o.puzzle.settings.colCount); iLoop = iLoop + 1) {
        cellValue = cells[iLoop].value;
        userValuesString += cellValue === '' ? emptyCellChar : cellValue;
    }

    return userValuesString;

};

/**
 * method that is called once puzzle data has been pulled in
 * @returns {boolean}
 */
PuzzleBase.prototype.definePuzzleObjects = function () {
    'use strict';
    var o = this;

    // Unpack JSON data into object
    if (o.unserialize()) {
        o.displayPuzzle();
    }

    return true;

};

/**
 * Display the puzzle for the currently loaded puzzle data
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.displayPuzzle = function () {
    'use strict';
    var o = this;

    o.createGrid();
    o.displayCells();
    o.displayBlocks();
    o.displayTitle();
    o.displayMastheadDate();
    o.displayKeys();
    o.autoSizeGridPreFix();
    o.autoSizeGrid();
    o.autoSizeGridPostFix();
    o.createEmailPuzzleUrl();
    return true;
};

/**
 * Display puzzle title
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.displayTitle = function () {
    'use strict';
    var o = this,
        title = o.puzzle.JSON.title || o.puzzle.meta.title;

    $('#jsPuzzleTitle').html(title + ' <span id="jsPuzzleTitle-difficulty">' + o.puzzle.meta.difficulty + '</span>');

    $('.mobile-puzzle-number').html('No ' + o.puzzle.JSON.meta.number);

    $('.jsCorrectMessage', '#overlayCompleted').html(o.puzzle.JSON.copy.correctsolutionmessagetext);
    $('.jsIncorrectMessage', '#overlayIncorrect').html(o.puzzle.JSON.copy.incorrectsolutionmessagetext);

    return true;
};

/**
 * Display puzzle date in the masthead (should be published date)
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.displayMastheadDate = function () {
    'use strict';
    var o = this,
        date;

    if (o.puzzle.JSON.copy) {
        date = o.puzzle.JSON.copy['date-publish'];
        $('header.masthead p.date').html(date);
    }

    return true;
};

/**
 * Display puzzle blocks
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.displayBlocks = function () {
    'use strict';
    var o = this,
        i;

    for (i = 0; i < o.puzzle.layout.blocks.length; i = i + 1) {
        o.blockDisplay(i);
    }

    return true;
};

/**
 * Display puzzle cells
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.displayCells = function () {
    'use strict';
    return true;
};

/**
 * Display puzzle key controls
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.displayKeys = function () {
    'use strict';
    return true;
};

/**
 * Display a puzzle block
 * 
 * @param {int} id id of the block to display
 * @returns {Boolean}
 */
PuzzleBase.prototype.blockDisplay = function (id) {
    'use strict';
    return true;
};

/**
 * Create the main grid for the puzzle
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.createGrid = function () {
    'use strict';
    var o = this,
        grid = $('.puzzleholder'),
        rows = [],
        cells,
        i,
        j;

    for (i = 0; i < o.puzzle.settings.rowCount; i = i + 1) {
        cells = ['<tr>'];

        for (j = 0; j < o.puzzle.settings.colCount; j = j + 1) {
            cells.push(o.getCellHtml((i * o.puzzle.settings.colCount) + j));
        }

        cells.push('</tr>');
        rows.push(cells.join(''));
    }
    grid.html(rows.join(''));

    return true;
};

/**
 * Make the HTML for the given cell
 * 
 * @param {int} id cell id
 * @returns {String} cell HTML
 */
PuzzleBase.prototype.getCellHtml = function (id) {
    'use strict';
    return '<td><span class="square"></span></td>';
};

/**
 * Return a representation of the grid in a storable form, can return just answers or cell values
 * 
 * @param {String} celltype (answer | cell | null)
 * @returns {String} serialized puzzle data
 */
PuzzleBase.prototype.serialize = function (celltype) {
    'use strict';

    //console.log(celltype);

    return '';

};

/**
 * Unpack JSON data into object
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.unserialize = function () {
    'use strict';

    var o = this;

    o.puzzle.settings.colCount = parseInt(o.puzzle.JSON.settings.colCount, 10);
    o.puzzle.settings.rowCount = parseInt(o.puzzle.JSON.settings.rowCount, 10);
    o.puzzle.settings.allowedValues = o.puzzle.JSON.settings.allowedValues;
    o.puzzle.settings.solution = o.puzzle.JSON.settings.solution;

    o.puzzle.meta.id = o.puzzle.JSON.meta.id;
    o.puzzle.meta.number = o.puzzle.JSON.meta.number;
    o.puzzle.meta.type = o.puzzle.JSON.meta.type;
    o.puzzle.meta.title = o.puzzle.JSON.meta.title;
    o.puzzle.meta.difficulty = o.puzzle.JSON.meta.difficulty;
    o.puzzle.meta.date = o.puzzle.JSON.meta.date;
    o.puzzle.meta.pdf = o.puzzle.JSON.meta.pdf;
    o.puzzle.meta.Ymd = o.getShortDate(o.puzzle.JSON.data.meta.date);

    o.unserializeCells();
    o.unserializeBlocks();

    return true;
};

/**
 * Unpack JSON data into object
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.unserializeBlocks = function () {
    'use strict';
    var o = this;

    o.puzzle.layout.blocks = [];
    return true;
};

/**
 * Unpack JSON data into object
 * 
 * @returns {Boolean}
 */
PuzzleBase.prototype.unserializeCells = function () {
    'use strict';
    var o = this;

    o.puzzle.layout.cells = [];
    return true;
};

/**
 * Set the maximum digit that can be used in puzzle answers
 * 
 * @param {int} num the maximum number (0-9) that can be used in the puzzle answer
 * @returns {void}
 */
PuzzleBase.prototype.setMaxDigit = function (num) {
    'use strict';
    var o = this,
        max = parseInt(num, 10),
        i,
        str;

    if (max < 10) {
        str = '';

        for (i = 0; i <= max; i = i + 1) {
            str = str + i.toString();
        }

        o.settings.allowedValues = str;
    }
};

/**
 * listRows
 */
PuzzleBase.prototype.listRows = function () {

    'use strict';

    //console.log(id, name);

    return true;

};

/**
 * listColumns
 */
PuzzleBase.prototype.listColumns = function () {

    'use strict';

    //console.log(id, name);

    return true;

};

/**
 * get the id of a cell at a specified col & row
 * 
 * @param {int} col - column number
 * @param {int} row - row number
 * @returns {int} cellId
 */
PuzzleBase.prototype.getCellIdFromColRow = function (col, row) {

    'use strict';

    var o = this,
        cellId = (row * o.puzzle.settings.colCount) + col;

    return cellId;

};

/**
 * get the row and col of a cell with a specified id
 * 
 * @param {int} id - cell id
 * @returns {object}
 */
PuzzleBase.prototype.getColRowFromCellId = function (id) {

    'use strict';

    var o = this,
        colRow = {};

    colRow.row = Math.floor(id / o.puzzle.settings.colCount);
    colRow.col = Math.floor(id - (colRow.row * o.puzzle.settings.colCount));

    return colRow;

};

/**
 * method to check whether user has completed puzzle 
 * THIS SHOULD BE OVERWRITTEN BY EACH PUZZLE
 */
PuzzleBase.prototype.isPuzzleCompleted = function () {

    'use strict';

    var o = this;

    o.debug.log('THIS FUNCTION SHOULD BE OVERWRITTEN IN PUZZLE CLASS');

    return true;
};

/**
 * method called when puzzle completed correctly
 */
PuzzleBase.prototype.puzzleCompletedCorrectly = function () {

    'use strict';

    var o = this,
        thisPuzzleType = o.puzzle.meta.localStoragePrefix,
        matrix,
        i,
        j,
        puzzleNameId,
        puzzleNameIdParts;


    o.debug.log('puzzleCompletedCorrectly');

    $('.jsCompletionTime', '#overlayCompleted').html($('#jsTimerOutput').html());
    if (o.puzzle.JSON.meta.number != undefined) {
        $('.jsPuzzleNumber', '#overlayCompleted').html('No ' + o.puzzle.JSON.meta.number + ' ');
    }
    o.timerPause();
    $('#overlayBG').add('#overlayCompleted').show();
    o.user.game.settings.isCompletedOk = true;
    o.saveGameState();

    //  update why not try
    if (o.whyNottryMatrix != false && o.whyNottryMatrix != undefined  && o.whyNottryMatrix[thisPuzzleType] != null && o.whyNottryMatrix[thisPuzzleType] != false) {
        matrix = o.whyNottryMatrix[thisPuzzleType];

        for (i = 0; i < 5; i = i + 1) {

            //  if there is more than one of a puzzle then use first one that isn't this puzzle
            if (o.todaysPuzzles[matrix[i]].length > 1) {
                for (j = 0; j < o.todaysPuzzles[matrix[i]].length; j = j + 1) {
                    puzzleNameId = o.todaysPuzzles[matrix[i]][j];
                    puzzleNameIdParts = puzzleNameId.split('-');

                    if (puzzleNameIdParts[1] != o.puzzle.meta.id) {
                        o.todaysPuzzles[matrix[i]] = puzzleNameId;
                        break;
                    }
                }
            }

            //  add correct URLs to link
            if (matrix[i] != undefined && o.todaysPuzzlesFull[o.todaysPuzzles[matrix[i]]] != undefined) {
                $('#whynottry-' + (i + 1)).html(o.puzzleDisplayNames[matrix[i]]).show().attr('href', '../../' + o.todaysPuzzlesFull[o.todaysPuzzles[matrix[i]]].url);
            }

        }

    }

    o.debug.close('puzzleCompletedCorrectly');
    o.sendUtagClickEngagementEvent('puzzle completed:success');

};

/**
 * method called when puzzle completed incorrectly
 */
PuzzleBase.prototype.puzzleCompletedIncorrectly = function () {

    'use strict';

    var o = this;

    o.debug.log('puzzleCompletedIncorrectly');

    $('#overlayBG').add('#overlayIncorrect').show();
    o.user.game.settings.isCompletedOk = false;
    o.sendUtagClickEngagementEvent('puzzle completed:fail');
    o.saveGameState();
    o.debug.close('puzzleCompletedIncorrectly');

};

/**
 * send tagging event
 * @param {String} name
 */
PuzzleBase.prototype.sendUtagClickEngagementEvent = function (name) {

    'use strict';

    var o = this,
        event_object = {
            call_type: 'event',
            event_engagement_action: 'engagement',
            event_engagement_name: name,
            event_engagement_browsing_method: 'click',
            orientation: $('body').width() > $('body').height() ? 'landscape' : 'portrait'
        };

    if (o.device.settings.isAWS != 'yes' || o.device.settings.platform === '') {
        o.debug.log('utag: ' + name);
    } else {
        if (typeof utag !== 'undefined') {
            utag.link(event_object);
        }
    }

};

/**
 * initialise the debugger
 */
PuzzleBase.prototype.initDebugger = function () {

    'use strict';

    var o = this,
        allowedHostsList = [];

    //  set list of hosts that will have debug on by default
    allowedHostsList.push('localhost');
    allowedHostsList.push('t2puzzles.newsint.co.uk');
    allowedHostsList.push('127.0.0.1');

    //  if debug mode is 'auto' then update to true or false accordingly
    if (o.debugactive == -1) {
        o.debugactive = 0;
        if (allowedHostsList.indexOf(window.location.host) > -1 || allowedHostsList.indexOf(window.location.hostname) > -1) {
            o.debugactive = 1;
        }
    }

    //  are there any override settings in URL?
    if (window.location.search.indexOf('debug=0') > -1) {
        o.debugactive = 0;
    }
    if (window.location.search.indexOf('debug=1') > -1) {
        o.debugactive = 1;
    }
    if (window.location.search.indexOf('group=0') > -1) {
        o.debuggroups = 0;
    }
    if (window.location.search.indexOf('group=1') > -1) {
        o.debuggroups = 1;
    }

    //  set up empty function if debug not required
    if (o.debugactive == 0 || !window.console) {
        PuzzleBase.prototype.debug = {
            clear: function () {},
            close: function () {},
            log: function () {},
            open: function () {}
        };
    } else {
        PuzzleBase.prototype.debug = console;
        PuzzleBase.prototype.debug.open = function (groupName) {
            if (o.debuggroups == 1) {
                console.groupCollapsed(groupName);
                console.time(groupName);
            } else {
                console.log(groupName);
            }
        };
        PuzzleBase.prototype.debug.close = function (groupName) {
            if (o.debuggroups == 1) {
                console.timeEnd(groupName);
                console.groupEnd(groupName);
            }
        };
    }

};

/**
 * update recently played list
 */
PuzzleBase.prototype.addThisPuzzleToRecentlyPlayedList = function () {

    'use strict';

    if (!this.isActivePuzzleUrl()) {
        return false;
    }

    var o = this,
        puzzleCountPerBrand = {},
        iLoop;

    o.t2_recently_played = o.getLocalStorageItem('t2_recently_played') || [];

    //  check if we have this puzzle already in list, if so then delete it
    for (iLoop = 0; iLoop < o.t2_recently_played.length; iLoop = iLoop + 1) {
        if (o.t2_recently_played[iLoop].type == o.puzzle.meta.displayName && o.t2_recently_played[iLoop].id == o.puzzle.meta.type + '-' + o.puzzle.meta.id) {
            o.t2_recently_played.splice(iLoop, 1);
        }
    }

    //  put this puzzle at top of list
    o.t2_recently_played.unshift({
        type: o.puzzle.meta.displayName,
        url: window.location.pathname,
        id: o.puzzle.meta.type + '-' + o.puzzle.meta.id,
        number: o.puzzle.meta.number,
        publisher: o.puzzle.JSON.copy.publisher
    });

    //  only keep n puzzles per brand
    for (iLoop = 0; iLoop < o.t2_recently_played.length; iLoop = iLoop + 1) {
        puzzleCountPerBrand[o.t2_recently_played[iLoop].publisher] = puzzleCountPerBrand[o.t2_recently_played[iLoop].publisher] || 0;
        puzzleCountPerBrand[o.t2_recently_played[iLoop].publisher] = puzzleCountPerBrand[o.t2_recently_played[iLoop].publisher] + 1;
        if (puzzleCountPerBrand[o.t2_recently_played[iLoop].publisher] > 5) {
            o.t2_recently_played.splice(iLoop, 1);
        }
    }

    o.setLocalStorageItem('t2_recently_played', o.t2_recently_played);

};

/**
 * check puzzle is actual gameplay and not preview
 */
PuzzleBase.prototype.isActivePuzzleUrl = function () {

    'use strict';

    var excludedPathsList = [],
        iLoop;

    excludedPathsList.push('branding');

    for (iLoop = 0; iLoop < excludedPathsList.length; iLoop = iLoop + 1) {
        if (window.location.pathname.indexOf(excludedPathsList[iLoop]) > -1) {
            return false;
        }
    }

    return true;
};

/**
 * reset home tab
 */
PuzzleBase.prototype.resetHomeTab = function () {

    'use strict';

    var o = this;

    o.t2_settings = o.getLocalStorageItem('t2_settings') || {};
    o.t2_settings.home_tab = '';
    o.setLocalStorageItem('t2_settings', o.t2_settings);

};

/**
 * function called before resize grid for mobile
 */
PuzzleBase.prototype.autoSizeGridPreFix = function () {
    'use strict';
};

/**
 * resize grid for mobile
 */
PuzzleBase.prototype.autoSizeGrid = function () {
    'use strict';
};

/**
 * function called after resize grid for mobile
 */
PuzzleBase.prototype.autoSizeGridPostFix = function () {
    'use strict';
};

/**
 * update the print button href
 */
PuzzleBase.prototype.createEmailPuzzleUrl = function () {
    'use strict';

    var o = this,
        el = $('#triggerEmail-a'),
        data = o.puzzle.JSON.meta,
        emailSubject = o.puzzle.JSON.copy['print-subject'] || o.puzzle.meta.print_subject,
        emailBody = o.puzzle.JSON.copy['print-body'] || o.puzzle.meta.print_body,
        emailString;

    if (el.length < 1) {
        return false;
    }

    data.puzzlename = o.puzzleDisplayNames[o.puzzle.JSON.meta.type];
    data.printurl = window.location.href.split(/[?#]/)[0].split('index.html')[0] + o.puzzle.JSON.meta.pdf;
    data.brandname = o.puzzle.JSON.copy.publisher;
    data.brandname = data.brandname.split('The Times T2 Puzzles').join('The Times');


    emailSubject = o.doEmailReplacements(emailSubject, data);
    emailBody = o.doEmailReplacements(emailBody, data);
    emailString = 'mailto:?subject=' + emailSubject + '&body=' + emailBody;

    el.attr('href', emailString);

};

PuzzleBase.prototype.doEmailReplacements = function (string, data) {
    'use strict';

    var o = this;

    string = o.replaceObjectKeysInString(string, data);

    string = string.split('<br/>').join('%0D%0A');
    string = string.split('<br />').join('%0D%0A');

    return string;

};


/**
 * replace object keys in string
 */
PuzzleBase.prototype.replaceObjectKeysInString = function (string, data) {
    'use strict';

    var i;
    for (i in data) {
        if (data.hasOwnProperty(i)) {
            string = string.split('{{' + i + '}}').join(data[i]);
        }
    }

    return string;

};


/**
 * handle keyboard press
 */
PuzzleBase.prototype.handleKeyboardPress = function (asciicode, downorup, event) {

    'use strict';

    var o = this,
        func = o.getNameOfFunctionAssignedToKeyCode(asciicode);

    if (func !== undefined && this[func] !== undefined && typeof this[func] === 'function') {
        o.user.game.settings.keyPressDetected = true;
        this[func](asciicode, downorup, event);
    }

    if (asciicode === 8) {  //  gemini 4677 - prevent backspace from browsing back
        event.preventDefault();
    }

    if (asciicode >= 37 && asciicode <= 40) {  //  suppress arrow keys for iframes
        event.preventDefault();
    }

};

PuzzleBase.prototype.getNameOfFunctionAssignedToKeyCode = function (asciicode) {
    'use strict';

    //  set core functionlity - override in individual puzzle class
    var functionForKeyCode = [];

    functionForKeyCode[8] = 'handleKeyboardPressDeleteOrBackspace';  //  backspace
    functionForKeyCode[13] = 'handleKeyboardPressEnter';  //  enter

    functionForKeyCode[37] = 'handleKeyboardPressArrows';  //  left
    functionForKeyCode[38] = 'handleKeyboardPressArrows';  //  up
    functionForKeyCode[39] = 'handleKeyboardPressArrows';  //  right
    functionForKeyCode[40] = 'handleKeyboardPressArrows';  //  down

    functionForKeyCode[46] = 'handleKeyboardPressDeleteOrBackspace';  //  delete

    functionForKeyCode[48] = 'handleKeyboardPressNumbers';  //  0
    functionForKeyCode[49] = 'handleKeyboardPressNumbers';  //  1
    functionForKeyCode[50] = 'handleKeyboardPressNumbers';  //  2
    functionForKeyCode[51] = 'handleKeyboardPressNumbers';  //  3 
    functionForKeyCode[52] = 'handleKeyboardPressNumbers';  //  4 
    functionForKeyCode[53] = 'handleKeyboardPressNumbers';  //  5 
    functionForKeyCode[54] = 'handleKeyboardPressNumbers';  //  6 
    functionForKeyCode[55] = 'handleKeyboardPressNumbers';  //  7 
    functionForKeyCode[56] = 'handleKeyboardPressNumbers';  //  8 
    functionForKeyCode[57] = 'handleKeyboardPressNumbers';  //  9 

    functionForKeyCode[96] = 'handleKeyboardPressNumericKeypad';  //  0
    functionForKeyCode[97] = 'handleKeyboardPressNumericKeypad';  //  1
    functionForKeyCode[98] = 'handleKeyboardPressNumericKeypad';  //  1
    functionForKeyCode[99] = 'handleKeyboardPressNumericKeypad';  //  3
    functionForKeyCode[100] = 'handleKeyboardPressNumericKeypad';  //  4
    functionForKeyCode[101] = 'handleKeyboardPressNumericKeypad';  //  5
    functionForKeyCode[102] = 'handleKeyboardPressNumericKeypad';  //  6
    functionForKeyCode[103] = 'handleKeyboardPressNumericKeypad';  //  7
    functionForKeyCode[104] = 'handleKeyboardPressNumericKeypad';  //  8
    functionForKeyCode[105] = 'handleKeyboardPressNumericKeypad';  //  9

    return functionForKeyCode[asciicode];

};


/**
 * keyboard: arrows
 */
PuzzleBase.prototype.handleKeyboardPressArrows = function (asciicode, downorup, event, currentSquareId) {

    'use strict';

    if (currentSquareId === undefined) {
        currentSquareId = parseInt($(this.puzzle.settings.styling.cellHolder + '.' + this.puzzle.settings.styling.cellHolderClassSelected, this.puzzle.settings.styling.puzzleHolder).attr('id').split('cell-').join(''), 10);
    }

    var o = this,
        newSquareId,
        location = o.getColRowFromCellId(currentSquareId);

    switch (asciicode) {
    case 37:  //  left
        if (location.col > 0) {
            newSquareId = currentSquareId - 1;
        } else {
            if (o.puzzle.settings.wrapRow == 'same' || o.puzzle.settings.wrapRow == 'wrap') {
                newSquareId = currentSquareId + o.puzzle.settings.colCount - 1;
                if (o.puzzle.settings.wrapRow == 'wrap') {
                    if (location.row > 0) {
                        newSquareId = newSquareId - o.puzzle.settings.colCount;
                    } else {
                        if (o.puzzle.settings.wrapGrid) {
                            newSquareId = newSquareId + ((o.puzzle.settings.rowCount - 1) * o.puzzle.settings.colCount);
                        } else {
                            newSquareId = currentSquareId;
                        }
                    }
                }
            }
        }
        break;

    case 38:  //  up
        if (location.row > 0) {
            newSquareId = currentSquareId - o.puzzle.settings.colCount;
        } else {
            if (o.puzzle.settings.wrapCol == 'same' || o.puzzle.settings.wrapCol == 'wrap') {
                newSquareId = currentSquareId + ((o.puzzle.settings.rowCount - 1) * o.puzzle.settings.colCount);
                if (o.puzzle.settings.wrapCol == 'wrap') {
                    if (location.col > 0) {
                        newSquareId = newSquareId - 1;
                    } else {
                        if (o.puzzle.settings.wrapGrid) {
                            newSquareId = ((o.puzzle.settings.rowCount) * o.puzzle.settings.colCount) - 1;
                        } else {
                            newSquareId = currentSquareId;
                        }
                    }
                }
            }
        }
        break;

    case 39:  //  right
        if (location.col + 1 < o.puzzle.settings.colCount) {
            newSquareId = currentSquareId + 1;
        } else {
            if (o.puzzle.settings.wrapRow == 'same' || o.puzzle.settings.wrapRow == 'wrap') {
                newSquareId = currentSquareId - o.puzzle.settings.colCount + 1;
                if (o.puzzle.settings.wrapRow == 'wrap') {
                    if (location.row + 1 < o.puzzle.settings.rowCount) {
                        newSquareId = newSquareId + o.puzzle.settings.colCount;
                    } else {
                        if (o.puzzle.settings.wrapGrid) {
                            newSquareId = newSquareId - ((o.puzzle.settings.rowCount - 1) * o.puzzle.settings.colCount);
                        } else {
                            newSquareId = currentSquareId;
                        }
                    }
                }
            }
        }
        break;

    case 40:  //  down
        if (location.row + 1 < o.puzzle.settings.rowCount) {
            newSquareId = currentSquareId + o.puzzle.settings.colCount;
        } else {
            if (o.puzzle.settings.wrapCol == 'same' || o.puzzle.settings.wrapCol == 'wrap') {
                newSquareId = currentSquareId - ((o.puzzle.settings.rowCount - 1) * o.puzzle.settings.colCount);
                if (o.puzzle.settings.wrapCol == 'wrap') {
                    if (location.col + 1 < o.puzzle.settings.colCount) {
                        newSquareId = newSquareId + 1;
                    } else {
                        if (o.puzzle.settings.wrapGrid) {
                            newSquareId = 0;
                        } else {
                            newSquareId = currentSquareId;
                        }
                    }
                }
            }
        }
        break;
    }

    if (newSquareId !== undefined && newSquareId !== currentSquareId) {
        if (this.checkCellIsValidUserCell(newSquareId)) {
            $('#cell-' + newSquareId).trigger('mouse' + downorup);
        } else {
            if (this.puzzle.settings.skipInvalidCells) {
                this.handleKeyboardPressArrows(asciicode, downorup, event, newSquareId);
            }
        }
    }



};


/**
 * keyboard: check if user can select cell - override in puzzle if need be
 */
PuzzleBase.prototype.checkCellIsValidUserCell = function (squareId) {

    'use strict';

    return true;

};



/**
 * keyboard: enter
 */
PuzzleBase.prototype.handleKeyboardPressEnter = function (asciicode, downorup, event) {

    'use strict';

    if (downorup == 'up') {
        return false;
    }


    var o = this,
        currentWrapRowSettings = o.puzzle.settings.wrapRow;

    o.puzzle.settings.wrapRow = currentWrapRowSettings == 'none' ? 'same' : currentWrapRowSettings;
    this.handleKeyboardPress(39, 'up', event);
    o.puzzle.settings.wrapRow = currentWrapRowSettings;

    event.preventDefault();
};


/**
 * keyboard: standard numbers
 */
PuzzleBase.prototype.handleKeyboardPressNumbers = function (asciicode, downorup, event) {
    'use strict';

    var number = asciicode - 48;

    $('.jsNumberKey[data-value="' + number + '"]').trigger('mouse' + downorup);

};


/**
 * keyboard: delete
 */
PuzzleBase.prototype.handleKeyboardPressDeleteOrBackspace = function (asciicode, downorup, event) {
    'use strict';

    $('.jsEraseKey').trigger('mouse' + downorup);

};


/**
 * keyboard: numeric keypad
 */
PuzzleBase.prototype.handleKeyboardPressNumericKeypad = function (asciicode, downorup, event) {
    'use strict';

    var number = asciicode - 96;

    $('.jsNumberKey[data-value="' + number + '"]').trigger('mouse' + downorup);

};

/**
 * take key value pairs from url and put into global object
 */
PuzzleBase.prototype.createUrlParameterObject = function () {
    'use strict';

    var searchString = decodeURIComponent(window.location.search.substring(1)),
        parameterList = searchString.split('&'),
        keyValueArray,
        i;

    this.urlParams = {};

    for (i = 0; i < parameterList.length; i = i + 1) {
        keyValueArray = parameterList[i].split('=');
        this.urlParams[keyValueArray[0]] = keyValueArray[1];
    }

};

/**
 * method that adds classes to body depending on parameters in the URL
 */
PuzzleBase.prototype.setPreferencesFromUrlParameters = function () {

    'use strict';

    if (this.urlParams.header === 'false') {
        $('body').addClass('no-header');
    }

    if (this.urlParams.menutype === 'none') {
        $('body').addClass('no-mobile-menu');
    }

    if (this.urlParams.menutype === 'app') {
        $('body').addClass('app-mobile-menu');
    }
    
    if (this.urlParams.source === 'web') {
        $('body').addClass('source-web');
    }
	
	if (this.urlParams.touchresizelistener === 'false') {
        $('body').addClass('no-resize');
    }

};

/**
 * show help
 */
PuzzleBase.prototype.getShortDate = function (date) {

    'use strict';

    var dt = new Date(),
        months = ['XXX', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
        today = dt.getDate() + ' ' + months[dt.getMonth() + 1] + ' ' + dt.getFullYear(),
        dateToConvert = date || today,
        parts = dateToConvert.split(' '),
        Y = parts[2],
        m = months.indexOf(parts[1].toUpperCase()),
        d = parts[0],
        Ymd;

    d = (d >= 10 || d.length >= 2) ? d : '0' + d;
    m = (m >= 10 || m.length >= 2) ? m : '0' + m;
    Ymd = Y + m + d;

    return Ymd;

};

/**
 * return MD5 hash of supplied string
 */
PuzzleBase.prototype.hasher = function (str){var xl;var rotateLeft=function(lValue,iShiftBits){return(lValue<<iShiftBits)|(lValue>>>(32-iShiftBits));};var addUnsigned=function(lX,lY){var lX4,lY4,lX8,lY8,lResult;lX8=(lX&0x80000000);lY8=(lY&0x80000000);lX4=(lX&0x40000000);lY4=(lY&0x40000000);lResult=(lX&0x3FFFFFFF)+(lY&0x3FFFFFFF);if(lX4&lY4){return(lResult^0x80000000^lX8^lY8);}
if(lX4|lY4){if(lResult&0x40000000){return(lResult^0xC0000000^lX8^lY8);}else{return(lResult^0x40000000^lX8^lY8);}}else{return(lResult^lX8^lY8);}};var _F=function(x,y,z){return(x&y)|((~x)&z);};var _G=function(x,y,z){return(x&z)|(y&(~z));};var _H=function(x,y,z){return(x^y^z);};var _I=function(x,y,z){return(y^(x|(~z)));};var _FF=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_F(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var _GG=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_G(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var _HH=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_H(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var _II=function(a,b,c,d,x,s,ac){a=addUnsigned(a,addUnsigned(addUnsigned(_I(b,c,d),x),ac));return addUnsigned(rotateLeft(a,s),b);};var convertToWordArray=function(str){var lWordCount;var lMessageLength=str.length;var lNumberOfWords_temp1=lMessageLength+8;var lNumberOfWords_temp2=(lNumberOfWords_temp1-(lNumberOfWords_temp1%64))/64;var lNumberOfWords=(lNumberOfWords_temp2+1)*16;var lWordArray=new Array(lNumberOfWords-1);var lBytePosition=0;var lByteCount=0;while(lByteCount<lMessageLength){lWordCount=(lByteCount-(lByteCount%4))/4;lBytePosition=(lByteCount%4)*8;lWordArray[lWordCount]=(lWordArray[lWordCount]|(str.charCodeAt(lByteCount)<<lBytePosition));lByteCount++;}
lWordCount=(lByteCount-(lByteCount%4))/4;lBytePosition=(lByteCount%4)*8;lWordArray[lWordCount]=lWordArray[lWordCount]|(0x80<<lBytePosition);lWordArray[lNumberOfWords-2]=lMessageLength<<3;lWordArray[lNumberOfWords-1]=lMessageLength>>>29;return lWordArray;};var wordToHex=function(lValue){var wordToHexValue='',wordToHexValue_temp='',lByte,lCount;for(lCount=0;lCount<=3;lCount++){lByte=(lValue>>>(lCount*8))&255;wordToHexValue_temp='0'+lByte.toString(16);wordToHexValue=wordToHexValue+wordToHexValue_temp.substr(wordToHexValue_temp.length-2,2);}
return wordToHexValue;};var utf8_encode=function(argString){if(argString===null||typeof argString==='undefined'){return'';}
var string=(argString+'');var utftext='',start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192,(c1&63)|128);}else if((c1&0xF800)!=0xD800){enc=String.fromCharCode((c1>>12)|224,((c1>>6)&63)|128,(c1&63)|128);}else{if((c1&0xFC00)!=0xD800){throw new RangeError('Unmatched trail surrogate at '+n);}
var c2=string.charCodeAt(++n);if((c2&0xFC00)!=0xDC00){throw new RangeError('Unmatched lead surrogate at '+(n-1));}
c1=((c1&0x3FF)<<10)+(c2&0x3FF)+0x10000;enc=String.fromCharCode((c1>>18)|240,((c1>>12)&63)|128,((c1>>6)&63)|128,(c1&63)|128);}
if(enc!==null){if(end>start){utftext+=string.slice(start,end);}
utftext+=enc;start=end=n+1;}}
if(end>start){utftext+=string.slice(start,stringl);}
return utftext;}
var x=[],k,AA,BB,CC,DD,a,b,c,d,S11=7,S12=12,S13=17,S14=22,S21=5,S22=9,S23=14,S24=20,S31=4,S32=11,S33=16,S34=23,S41=6,S42=10,S43=15,S44=21;str=utf8_encode(str);x=convertToWordArray(str);a=0x67452301;b=0xEFCDAB89;c=0x98BADCFE;d=0x10325476;xl=x.length;for(k=0;k<xl;k+=16){AA=a;BB=b;CC=c;DD=d;a=_FF(a,b,c,d,x[k+0],S11,0xD76AA478);d=_FF(d,a,b,c,x[k+1],S12,0xE8C7B756);c=_FF(c,d,a,b,x[k+2],S13,0x242070DB);b=_FF(b,c,d,a,x[k+3],S14,0xC1BDCEEE);a=_FF(a,b,c,d,x[k+4],S11,0xF57C0FAF);d=_FF(d,a,b,c,x[k+5],S12,0x4787C62A);c=_FF(c,d,a,b,x[k+6],S13,0xA8304613);b=_FF(b,c,d,a,x[k+7],S14,0xFD469501);a=_FF(a,b,c,d,x[k+8],S11,0x698098D8);d=_FF(d,a,b,c,x[k+9],S12,0x8B44F7AF);c=_FF(c,d,a,b,x[k+10],S13,0xFFFF5BB1);b=_FF(b,c,d,a,x[k+11],S14,0x895CD7BE);a=_FF(a,b,c,d,x[k+12],S11,0x6B901122);d=_FF(d,a,b,c,x[k+13],S12,0xFD987193);c=_FF(c,d,a,b,x[k+14],S13,0xA679438E);b=_FF(b,c,d,a,x[k+15],S14,0x49B40821);a=_GG(a,b,c,d,x[k+1],S21,0xF61E2562);d=_GG(d,a,b,c,x[k+6],S22,0xC040B340);c=_GG(c,d,a,b,x[k+11],S23,0x265E5A51);b=_GG(b,c,d,a,x[k+0],S24,0xE9B6C7AA);a=_GG(a,b,c,d,x[k+5],S21,0xD62F105D);d=_GG(d,a,b,c,x[k+10],S22,0x2441453);c=_GG(c,d,a,b,x[k+15],S23,0xD8A1E681);b=_GG(b,c,d,a,x[k+4],S24,0xE7D3FBC8);a=_GG(a,b,c,d,x[k+9],S21,0x21E1CDE6);d=_GG(d,a,b,c,x[k+14],S22,0xC33707D6);c=_GG(c,d,a,b,x[k+3],S23,0xF4D50D87);b=_GG(b,c,d,a,x[k+8],S24,0x455A14ED);a=_GG(a,b,c,d,x[k+13],S21,0xA9E3E905);d=_GG(d,a,b,c,x[k+2],S22,0xFCEFA3F8);c=_GG(c,d,a,b,x[k+7],S23,0x676F02D9);b=_GG(b,c,d,a,x[k+12],S24,0x8D2A4C8A);a=_HH(a,b,c,d,x[k+5],S31,0xFFFA3942);d=_HH(d,a,b,c,x[k+8],S32,0x8771F681);c=_HH(c,d,a,b,x[k+11],S33,0x6D9D6122);b=_HH(b,c,d,a,x[k+14],S34,0xFDE5380C);a=_HH(a,b,c,d,x[k+1],S31,0xA4BEEA44);d=_HH(d,a,b,c,x[k+4],S32,0x4BDECFA9);c=_HH(c,d,a,b,x[k+7],S33,0xF6BB4B60);b=_HH(b,c,d,a,x[k+10],S34,0xBEBFBC70);a=_HH(a,b,c,d,x[k+13],S31,0x289B7EC6);d=_HH(d,a,b,c,x[k+0],S32,0xEAA127FA);c=_HH(c,d,a,b,x[k+3],S33,0xD4EF3085);b=_HH(b,c,d,a,x[k+6],S34,0x4881D05);a=_HH(a,b,c,d,x[k+9],S31,0xD9D4D039);d=_HH(d,a,b,c,x[k+12],S32,0xE6DB99E5);c=_HH(c,d,a,b,x[k+15],S33,0x1FA27CF8);b=_HH(b,c,d,a,x[k+2],S34,0xC4AC5665);a=_II(a,b,c,d,x[k+0],S41,0xF4292244);d=_II(d,a,b,c,x[k+7],S42,0x432AFF97);c=_II(c,d,a,b,x[k+14],S43,0xAB9423A7);b=_II(b,c,d,a,x[k+5],S44,0xFC93A039);a=_II(a,b,c,d,x[k+12],S41,0x655B59C3);d=_II(d,a,b,c,x[k+3],S42,0x8F0CCC92);c=_II(c,d,a,b,x[k+10],S43,0xFFEFF47D);b=_II(b,c,d,a,x[k+1],S44,0x85845DD1);a=_II(a,b,c,d,x[k+8],S41,0x6FA87E4F);d=_II(d,a,b,c,x[k+15],S42,0xFE2CE6E0);c=_II(c,d,a,b,x[k+6],S43,0xA3014314);b=_II(b,c,d,a,x[k+13],S44,0x4E0811A1);a=_II(a,b,c,d,x[k+4],S41,0xF7537E82);d=_II(d,a,b,c,x[k+11],S42,0xBD3AF235);c=_II(c,d,a,b,x[k+2],S43,0x2AD7D2BB);b=_II(b,c,d,a,x[k+9],S44,0xEB86D391);a=addUnsigned(a,AA);b=addUnsigned(b,BB);c=addUnsigned(c,CC);d=addUnsigned(d,DD);}
var temp=wordToHex(a)+wordToHex(b)+wordToHex(c)+wordToHex(d);return temp.toLowerCase();}
