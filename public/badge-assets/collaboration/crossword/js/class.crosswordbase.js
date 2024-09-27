/*globals $, PuzzleBase, hasher, oApp, NI, LocalStorageObject, Puzzle, utag, utag_data*/
/*jslint  eqeq:true, vars:true, sloppy:true, regexp:true*/


/*!
 * Crossword class (to extend puzzle class)
 *
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
* Date: 2013-04-17
 */

function Crosswordbase() {

    PuzzleBase.call(this);
    var oApp = this;

    oApp.checkBrowserSupport();

    if (oApp.supports.audio) {
        oApp.audio = {
            keyboard: new Audio('mp3/tock.mp3')
        };
    }
    this.bHandleErrors = false;

    //  set some variables
    this.bLogItems = false;
    this.bLogItemData = false;
    this.iRowCount = 5;
    this.iColCount = 5;
    this.sPuzzleHolderID = '';
    this.oPuzzle = '';
    this.sGridSelector = '';
    this.aGridRowHolder = ['<tr>', '</tr>'];
    this.sGridSquareTemplate = '';
    this.sGridSquareHolderSelector = 'td';
    this.sIDXattr = 'data-square-id';


    //  default options
    this.bSkipCompletedLetters = true;
    this.sClueListHolder = '#cluesList';
    this.sDarkClass = 'blank';
    this.sGridLetterSelector = '.letter';
    this.sGridNumberSelector = '.number';
    this.sGridSquareSelector = '.square';
    this.sIndividualClueHolder = '#individualClue';
    this.sLeftBarClass = 'left-bar';
    this.sSetterSelector = '#puzzlesetter';
    this.sTitleSelector = '#puzzletitle';
    this.sTopBarClass = 'top-bar';
    this.showTimer = false;
    this.doAutoSizeGridOnInit = true;
    this.doAutoSizeGridOnResize = true;
    this.disableBrowserBackspace = true;
    this.alterGridDuringShowSolution = false;
    this.regenerateGridAfterHideSolution = true;
    this.showDemarcation = true;
    this.skipAnswers = false;
    this.returnSkipAnswers = true;
    this.iconSet = 'full';
    this.keyboardSounds = false;

    this.options = {};
    this.options.checks = {};
    this.options.checks.Grid = true;
    this.options.checks.Square = false;
    this.options.checks.Word = true;
    this.options.reveals = {};
    this.options.reveals.Grid = true;
    this.options.reveals.Word = true;

    //  set some variables
    this.aClues = [];
    this.aClueSet = [];
    this.aCluesets = [];
    this.bPencilMode = false;
    this.bSingleClueColumn = false;
    this.iClueHeaderTop = 0;
    this.iCurrentClueID = 0;
    this.iCurrentClueSet = 0;
    this.iCurrentSelectedClueID = 3;
    this.iCurrentSelectedSquareID = 0;
    this.iCurrentSelectedWordID = 0;
    this.iPuzzleID = '';
    this.oJSON = {};
    this.oScrollers = {};
    this.oStoredSettings = {};
    this.sCurrentSelectedWordDir = '';
    this.bScrollersActive = false;
    //this.bSolutionViewable = false;
    this.bSubmitable = false;
    this.bKeyboardActive = true;
    this.bFirstLetterEnteredOfVisit = true;
    this.analyticsProfile = '';
    this.analyticsPlatform = '@_ANALYTICS_ENVIRONMENT_@';
    this.analyticsPageSiteName = '';


}
Crosswordbase.prototype = new PuzzleBase();
Crosswordbase.prototype.constructor = Crosswordbase;


/**
 * initialisation method
 * @returns {boolean}
 */
Crosswordbase.prototype.init = function () {

    'use strict';

    var o = this,
        JSON;

    o.createUrlParameterObject();
    JSON = this.getPuzzleJsonData();

    o.initDebugger();
    o.overridePuzzleTypeSettings();

    JSON.done(function (data) {
        o.puzzle.JSON = data.data;

        o.iPuzzleID = o.puzzle.JSON.data.copy.id;

        o.setUpPuzzle();
    });
    return true;

};


Crosswordbase.prototype.overridePuzzleTypeSettings = function () {

    return true;
};


Crosswordbase.prototype.setUpPuzzle = function () {

    'use strict';

    var o = this;

    //  create puzzle objects from imported JSON data
    o.sPuzzleHolderID = 'crossword-holder';
    o.sGridSelector = '.puzzleholder';
    o.sGridSquareHolderClass = 'dmjsSquareHolder';
    o.sGridSquareSquareClass = 'square';
    o.sGridSquareNumberClass = 'number';
    o.sGridSquareLetterClass = 'letter';
    o.sIDXattr = 'data-square-id';
    o.setOptionOverrides();


    //  load any default settings overrides and any additional puzzle specific settings
    setTimeout(
        function () {
            o.setPreferencesFromUrlParameters();
        },
        0
    );

    setTimeout(
        function () {
            o.insertAdditionalMenu();
        },
        0
    );

    setTimeout(
        function () {
            o.definePuzzleObjects();
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

    //  read puzzle dimensions
    setTimeout(
        function () {
            o.readPuzzleElementsDimensions();
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

    //  read local storage settings
    setTimeout(
        function () {
            o.readStoredSettings();
        },
        0
    );

    //  read local storage settings
    setTimeout(
        function () {
            o.readGridDimensions();
        },
        0
    );

    //  read local storage settings
    setTimeout(
        function () {
            o.sortClues();
        },
        0
    );

    setTimeout(
        function () {
            o.addEventHandlers();
        },
        200
    );

    if (this.urlParams.showsolution != 1) {
        setTimeout(
            function () {
                o.readStoredGrid();
            },
            200
        );
    }

    setTimeout(
        function () {
            o.processStoredSettings();
            o.fillInClueAnswers();
            o.highlightCurrentClue();
            o.fixClueHeaders();
            o.keyboardHeight = $('.keyboard-holder').outerHeight();
            $('#actions li').css('width', 100 / $('#actions li:visible').length.toFixed(2) + '%');
        },
        200
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


Crosswordbase.prototype.insertAdditionalMenu = function () {

    var publisherType = this.puzzle.JSON.data.copy.publisher + ' : ' + this.puzzle.JSON.data.copy.crosswordtype,
        contentWrapper = $('#contentWrapper'),
        HTML = '';

    this.publisherType = publisherType;

    //switch (this.puzzle.JSON.data.copy.publisher + ' : ' + this.puzzle.JSON.data.copy.crosswordtype) {
    switch (this.puzzle.JSON.data.copy.publisher + ' : Jumbo') {

    case 'The Times : Jumbo':
    case 'The Times T2 Puzzles : Jumbo':
    case 'The Sunday Times : Jumbo':
        HTML += '<!--PUZZLE QUICKJUMP-->';
        HTML += '<div class="menu-bg"></div>';
        HTML += '<header class="page-header">';
        HTML += '<h1 class="times-heading"><a href="../../../homepage/" class="jsGoTab mind-games-link" data-targettabid="home">Mind Games</a> ';
        HTML += '<b class="jsSubPageArrow"></b> ';
        HTML += '<a href="../../../homepage/"><span class="jsSubPageName"></span></a>';
        HTML += '<b class="jsSubPageArrow"></b> ';
        HTML += '<span class="jsPuzzleName">Crossword</span>';
        HTML += '</h1>';
        HTML += '<h1 class="sunday-times-heading"><a href="../../../homepage/" class="jsGoTab mind-games-link" data-targettabid="home">Brain Power</a> ';
        HTML += '<b class="jsSubPageArrow"></b> ';
        HTML += '<span class="jsPuzzleName">Crossword</span>';
        HTML += '</h1>';
        HTML += '</header>';
        HTML += '<a href="#" class="navigation-trigger" id="navTrigger"><span></span></a>';
        HTML += '<div id="quickJump" class="quickjump clearfix">';
        HTML += '<ul id="listcatnames" class="category-list">';
        HTML += '<li data-cat="featured">Featured</li>';
        HTML += '<li data-cat="words">Words</li>';
        HTML += '<li data-cat="numbers">Numbers</li>';
        HTML += '<li data-cat="popular">Popular</li>';
        HTML += '</ul>';
        HTML += '</div>';
        HTML += '<!--PUZZLE QUICKJUMP ENDS-->';
        contentWrapper.before(HTML);

        // updateQuickJumpMenu
        var o = this,
            tab = '',
            t2_settings = {},
            j = localStorage.getItem('t2_settings');

        if (j !== null) {
            t2_settings = JSON.parse(j) || {};
        }

        $('li').removeClass('on');

        if (t2_settings.home_tab !== undefined) {
            tab = t2_settings.home_tab.charAt(0).toUpperCase() + t2_settings.home_tab.slice(1);
            if (!tab || (tab === 'Home')) {
                tab = '';
            }
            $("li[data-cat='" + t2_settings.home_tab + "']", '#listcatnames').addClass('on');
        }
        $('.jsSubPageArrow:first-of-type', '.page-header h1').toggle((tab !== ''));
        $('.jsSubPageName', '.page-header h1').text(tab);

        break;

    }

};



Crosswordbase.prototype.setOptionOverrides = function () {

    switch (this.puzzle.JSON.data.copy.publisher) {

    case 'The Times':
    case 'The Times T2 Puzzles':
        $('body').addClass('the-times');
        $('html').attr('id', 'The Times');
        $('h1', '.title-info').append('<span class="setter-name"> </span>');
        if (oApp.puzzle.JSON.data.copy.crosswordtype === 'Jumbo') {
            this.iconSet = 'jumbo';
        }
        $('.setter-name').closest('p').append(this.puzzle.JSON.data.copy.description);
        if (this.puzzle.JSON.data.copy.description != "") {
            $('.setter-name').closest('p').addClass("show");
            $(".competition-content").addClass("has-additional-copy");
        }
        this.showTimer = true;
        this.iconSet = 'full';
        this.analyticsProfile = 'thetimes.crossword';
        this.analyticsPageSiteName = 'tto';
        break;

    case 'The Sunday Times':
        $('body').addClass('the-sunday-times');
        $('html').attr('id', 'The Sunday Times');
        $('h1', '.title-info').append('<span class="setter-name"> </span>');
        if (oApp.puzzle.JSON.data.copy.crosswordtype === 'Jumbo') {
            this.iconSet = 'jumbo';
        }
        $('.setter-name').closest('p').append(this.puzzle.JSON.data.copy.description);
        if (this.puzzle.JSON.data.copy.description != "") {
            $('.setter-name').closest('p').addClass("show");
            $(".competition-content").addClass("has-additional-copy");
        }
        this.showTimer = true;
        this.analyticsProfile = 'thetimes.crossword';
        this.analyticsPageSiteName = 'tto';
        break;

    case 'The Sun':
        $('body').addClass('the-sun');
        $('html').attr('id', 'The Sun');
        $('.title-info').css({'padding-left': '30px', 'padding-right': '30px'});
        $('.setter-name').closest('p').append(this.puzzle.JSON.data.copy.description);
        if (this.puzzle.JSON.data.copy.description != "") {
            $('.setter-name').closest('p').addClass("show");
            $(".competition-content").addClass("has-additional-copy");
        }
        $('#individualClue').addClass('mobile-clue-bg');
        $('p', '#individualClue').addClass('mobile-clue-bg');
        $('.overlay-content h2.text-dialogue-box', '.reset-overlay').replaceWith($('<h1 class="text-dialogue-box">Are you sure you want<br>to reset the grid?</h1>'));
        oApp.puzzle.JSON.data.copy.incorrectsolutionmessagetext = oApp.puzzle.JSON.data.copy.incorrectsolutionmessagetext === undefined ? 'You must have made a mistake somewhere' : oApp.puzzle.JSON.data.copy.incorrectsolutionmessagetext;
        this.alterGridDuringShowSolution = true;
        this.regenerateGridAfterHideSolution = true;
        this.showTimer = true;
        this.keyboardSounds = true;
        this.iconSet = 'short';
        this.analyticsProfile = 'thesun.crossword';
        this.analyticsPageSiteName = 'the sun puzzles';
        break;
        
    case 'The Wall Street Journal':
        $('body').addClass('the-wall-street-journal');
        $('html').attr('id', 'The Wall Street Journal');
        $('h1', '.title-info').append('<span class="setter-name"> </span>');
        if (oApp.puzzle.JSON.data.copy.crosswordtype === 'Jumbo') {
            this.iconSet = 'jumbo';
        }
        $('.setter-name').closest('p').append(this.puzzle.JSON.data.copy.description);
        if (this.puzzle.JSON.data.copy.description != "") {
            $('.setter-name').closest('p').addClass("show");
            $(".competition-content").addClass("has-additional-copy");
        }
        this.showTimer = true;
        this.iconSet = 'full';
        this.analyticsProfile = 'thetimes.crossword';
        this.analyticsPageSiteName = 'tto';
        break;
    }

};


/**
 * Display the puzzle for the currently loaded puzzle data
 *
 * @returns {Boolean}
 */
Crosswordbase.prototype.displayPuzzle = function () {

    'use strict';

    var o = this;

    o.oJSON = oApp.puzzle.JSON.data.copy;

    o.oPuzzle = $('#' + o.sPuzzleHolderID);

    o.puzzle.settings.colCount = parseInt(o.oJSON.gridsize.cols, 10);
    o.puzzle.settings.rowCount = parseInt(o.oJSON.gridsize.rows, 10);




    o.addContentAndClassesToHTML();
    o.createGrid();
    o.createClues();
    o.displayTitle();
    o.displayMastheadDate();
    o.displayActionButtons();
    o.displayBurgerButtons();
    o.hideShowButtons();
    o.setUpPrintLink();
    o.setUpEmailLink();
    o.displayKeys();
    if (this.doAutoSizeGridOnInit === true) {
        //o.autoSizeGridPreFix();
        o.autoSizeGrid();
        //o.autoSizeGridPostFix();
    }
    //o.createEmailPuzzleUrl();

    return true;
};


Crosswordbase.prototype.addContentAndClassesToHTML = function () {
    $('#ourpuzzle').addClass('cols-' + this.puzzle.settings.colCount).addClass('rows-' + this.puzzle.settings.rowCount);
    $('#crossword-holder').addClass('puzzle-type-' + this.oJSON.crosswordtype.split(' ').join('-').toLowerCase());
    if (this.oJSON.description === undefined || this.oJSON.description == '') {
        $('#crossword-holder').addClass('no-intro');
    }
    if (this.puzzle.JSON.data.competition !== undefined && this.puzzle.JSON.data.competition.active === 1) {
        $('body').addClass('competition');
    }
    $('.indmjsCorrectSolutionOverlay .incorrect-message').html(this.oJSON.incorrectsolutionmessagetext || '');
    $('.dmjsCorrectSolutionOverlay .correct-message').html(this.oJSON.correctsolutionmessagetext || '');

};


Crosswordbase.prototype.displayActionButtons = function () {

    'use strict';

    var o = this,
        buttonArea = $('#actions'),
        HTML = '';

    switch (this.iconSet) {

    case 'full':
        HTML += '<li class="pencil-pen"><a href="#" class="btn-pen on" data-ascii="47"><span class="icon"></span><span class="text">Pen</span></a></li>\n';
        HTML += '<li class="pencil-pen"><a href="#" class="btn-pencil" data-ascii="47"><span class="icon"></span><span class="text">Pencil</span></a></li>\n';
        HTML += '<li class="list-clues"><a href="#" class="show-clues"><span class="icon"></span><span class="text">List</span></a></li>\n';
        HTML += '<li class="hide-clues"><a href="#" class="show-grid"><span class="icon"></span><span class="text">Grid</span></a></li>\n';
        if (o.puzzle.JSON.data.copy.settings !== undefined && o.puzzle.JSON.data.copy.settings.solution !== undefined) {
            if (this.options.reveals.Word === true || this.options.reveals.Grid === true) {
                HTML += '<li id="triggerRevealOptions" class="trigger-reveal"><a href="#"><span class="icon"></span><span class="text">Reveal</span></a>\n';
                HTML += '<div class="action-popout">\n';
                if (this.options.reveals.Word === true) {
                    HTML += '<a href="#" id="dmjsDoRevealWord">Word</a>\n';
                }
                if (this.options.reveals.Grid === true) {
                    HTML += '<a href="#" id="dmjsDoRevealAllCells">Grid</a>\n';
                }
                HTML += '</div>\n';
                HTML += '</li>\n';
            }
            if (this.options.checks.Square === true || this.options.checks.Word === true || this.options.checks.Grid === true) {
                HTML += '<li class="check-grid" id="triggerCheckOptions"><a href="#"><span class="icon"></span><span class="text">Check</span></a>\n';
                HTML += '<div class="action-popout">\n';
                if (this.options.checks.Square === true) {
                    HTML += '<a href="#" id="dmjsDoCheckCell">Square</a>\n';
                }
                if (this.options.checks.Word === true) {
                    HTML += '<a href="#" id="dmjsDoCheckWord">Word</a>\n';
                }
                if (this.options.checks.Grid === true) {
                    HTML += '<a href="#" id="dmjsDoCheckAllCells">Grid</a>\n';
                }
                HTML += '</div>\n';
                HTML += '</li>\n';
            }
        }
        HTML += '<li class="zoom-toggle-in"><a href="#" class="zoom-in"><span class="icon"></span><span class="text">Zoom In</span></a></li>\n';
        HTML += '<li class="zoom-toggle-out"><a href="#" class="zoom-out"><span class="icon"></span><span class="text">Zoom Out</span></a></li>\n';
        if (o.puzzle.JSON.data.competition !== undefined && o.puzzle.JSON.data.competition.active === 1) {
            HTML += '<li class="submit"><a href="#" class="crossword-submit-comp jsSubmitComp"><span class="icon"></span><span class="text">Submit</span></a></li>\n';
        }
        HTML += '<li class="reset"><a href="#" class="reset-grid"><span class="icon"></span><span class="text">Reset</span></a></li>\n';
        //HTML += '<li id="triggerPrint" class="print-puzzle"><a id="triggerPrint-a" href="" target="_blank"><span id="triggerPrint-icon" class="icon"></span><span id="triggerPrint-text" class="text">Print</span></a></li>\n';
        //HTML += '<li id="triggerEmail" class="send-email"><a id="triggerEmail-a" href="mailto:?subject={{email_subject}}&body=You can download a printable version of this crossword by sending this message to your email inbox and clicking on the following link: {{full_path_to_pdf}}%0D%0AWe hope you enjoy your puzzle from The Times T2 Puzzles."><span id="triggerEmail-icon" class="icon"></span><span id="triggerEmail-text" class="text">Email</span></a></li>\n';
        break;

    case 'jumbo':
        HTML += '<li class="pencil-pen"><a href="#" class="btn-pen on" data-ascii="47"><span class="icon"></span><span class="text">Pen</span></a></li>\n';
        HTML += '<li class="pencil-pen"><a href="#" class="btn-pencil" data-ascii="47"><span class="icon"></span><span class="text">Pencil</span></a></li>\n';
        HTML += '<li class="list-clues"><a href="#" class="show-clues"><span class="icon"></span><span class="text">List</span></a></li>\n';
        HTML += '<li class="hide-clues"><a href="#" class="show-grid"><span class="icon"></span><span class="text">Grid</span></a></li>\n';
        if (o.puzzle.JSON.data.copy.settings !== undefined && o.puzzle.JSON.data.copy.settings.solution !== undefined) {
            if (this.options.reveals.Square !== false) {
                HTML += '<li id="triggerRevealOptions" class="trigger-reveal"><a href="#"><span class="icon"></span><span class="text">Reveal</span></a>\n';
                HTML += '<div class="action-popout">\n';
                if (this.options.reveals.Word === true) {
                    HTML += '<a href="#" id="dmjsDoRevealWord">Word</a>\n';
                }
                if (this.options.reveals.Grid === true) {
                    HTML += '<a href="#" id="dmjsDoRevealAllCells">Grid</a>\n';
                }
                HTML += '</div>\n';
                HTML += '</li>\n';
            }
            if (this.options.checks.Square === true || this.options.checks.Word === true || this.options.checks.Grid === true) {
                HTML += '<li class="check-grid" id="triggerCheckOptions"><a href="#"><span class="icon"></span><span class="text">Check</span></a>\n';
                HTML += '<div class="action-popout">\n';
                if (this.options.checks.Square === true) {
                    HTML += '<a href="#" id="dmjsDoCheckCell">Square</a>\n';
                }
                if (this.options.checks.Word === true) {
                    HTML += '<a href="#" id="dmjsDoCheckWord">Word</a>\n';
                }
                if (this.options.checks.Grid === true) {
                    HTML += '<a href="#" id="dmjsDoCheckAllCells">Grid</a>\n';
                }
                HTML += '</div>\n';
                HTML += '</li>\n';
            }
        }
        HTML += '<li class="zoom-toggle-in"><a href="#" class="zoom-in"><span class="icon"></span><span class="text">Zoom In</span></a></li>\n';
        HTML += '<li class="zoom-toggle-out"><a href="#" class="zoom-out"><span class="icon"></span><span class="text">Zoom Out</span></a></li>\n';
        if (o.puzzle.JSON.data.competition !== undefined && o.puzzle.JSON.data.competition.active === 1) {
            HTML += '<li class="submit"><a href="#" class="crossword-submit-comp jsSubmitComp"><span class="icon"></span><span class="text">Submit</span></a></li>\n';
        }
        HTML += '<li class="reset"><a href="#" class="reset-grid"><span class="icon"></span><span class="text">Reset</span></a></li>\n';
        break;

    case 'short':
        if (o.puzzle.JSON.data.copy.settings !== undefined && o.puzzle.JSON.data.copy.settings.solution !== undefined) {
            HTML += '<li id="triggerCheck" class="reveal-solution"><a href="#" id=""><span class="icon"></span><span class="text">Solution</span></a></li>\n';
        }
        HTML += '<li class="check-grid" id="triggerCheckOptions"><a href="#"><span class="text">Check</span></a><div class="action-popout"><a href="#" id="dmjsDoCheckWord">Word</a><a href="#" id="dmjsDoCheckAllCells">Grid</a></div></li>\n';
        HTML += '<li class="list-clues"><a href="#" class="show-clues"><span class="icon"></span><span class="text">List</span></a></li>\n';
        HTML += '<li class="hide-clues"><a href="#" class="show-grid"><span class="icon"></span><span class="text">Grid</span></a></li>\n';
        HTML += '<li class="reset"><a href="#" class="reset-grid""><span class="icon"></span><span class="text">Reset</span></a></li>\n';
        break;

    }

    buttonArea.html(HTML);

};

Crosswordbase.prototype.displayBurgerButtons = function () {

    'use strict';

    var o = this,
        buttonArea = $('#burgerActions'),
        HTML = '';

    switch (this.iconSet) {

    case 'full':
    case 'jumbo':
    case 'short':

        HTML += '<li id="triggerEmail" class="send-email"><a id="triggerEmail-a" href="mailto:?subject={{email_subject}}&body=You can download a printable version of this crossword by sending this message to your email inbox and clicking on the following link: {{full_path_to_pdf}}%0D%0AWe hope you enjoy your puzzle from The Times T2 Puzzles."><span id="triggerEmail-icon" class="icon"></span><span id="triggerEmail-text" class="text">Email</span></a></li>\n';
        HTML += '<li id="triggerPrint" class="print-puzzle"><a id="triggerPrint-a" href="" target="_blank"><span id="triggerPrint-icon" class="icon"></span><span id="triggerPrint-text" class="text">Print</span></a></li>\n';
        HTML += '<li id="triggerTextSize" class="change-text-size"><a id="triggerTextSize-a" href="#" class="toggle-text-size"><span id="triggerTextSize-icon" class="icon"></span><span id="triggerTextSize-text" class="text">Resize</span></a></li>\n';
        HTML += '<li id="columnToggle" class="toggle-columns"><a id="columnToggle-a" href="#" class="toggle-column"><span id="columnToggle-icon" class="icon"></span><span id="columnToggle-text" class="text">Clues</span></a></li>\n';
        if (o.puzzle.JSON.data.competition !== undefined && o.puzzle.JSON.data.competition.active === 1) {
            HTML += '<li id="triggerPrizeInfo" class="trigger-prize"><a id="triggerPrizeInfo-a" href="" target="_blank" class="trigger-prize-info"><span id="triggerPrizeInfo-icon" class="icon"></span><span id="triggerPrizeInfo-text" class="text">Prize Info</span></a></li>\n';
        }

        break;

    }

    buttonArea.html(HTML);

};


Crosswordbase.prototype.displayKeys = function () {

    'use strict';

    var o = this,
        keyboardArea = $('#keyBoard'),
        HTML = '';

    HTML += '<ul class="keys">';
    HTML += oApp.getHtmlFromStringChars('QWERTYUIOP');
    //HTML += '<li class="big-keyboard-only"><a href="#" class="key-backspace" data-ascii="8"><span class="icon"></span><span class="text">Backspace</span></a></li>\n';
    HTML += '</ul>';
    HTML += '<ul class="keys">';
    HTML += oApp.getHtmlFromStringChars('ASDFGHJK');
    HTML += '<li class="tablet-push-right-middle"><a href="javascript:oApp.userTappedMobileKeyboard();">L</a></li>\n';
    HTML += '</ul>';
    HTML += '<ul class="keys">';
    HTML += '<li class="keyboard-push-left hide-keyboard"><a href="javascript:oApp.userTappedMobileKeyboard();" class="keyboard-collapse"><span class="icon"></span><span class="text">Hide Keyboard</span></a></li>\n';
    HTML += oApp.getHtmlFromStringChars('ZXCVBN');
    HTML += '<li class="tablet-push-right-bottom"><a href="javascript:oApp.userTappedMobileKeyboard();">M</a></li>\n';
    HTML += '<li class="keyboard-push-right small-keyboard-only"><a href="javascript:oApp.userTappedMobileKeyboard();" class="key-backspace" data-ascii="8"><span class="icon"></span><span class="text">Backspace</span></a></li>\n';
    HTML += '</ul>';

    keyboardArea.html(HTML);

};


Crosswordbase.prototype.getHtmlFromStringChars = function (chars, TPL) {

    'use strict';

    chars = chars || 'ABCDE';
    TPL = TPL || '<li><a href="javascript:oApp.userTappedMobileKeyboard();">{{CHAR}}</a></li>\n';

    var iLoop,
        charsLength = chars.length,
        HTML = '';

    for (iLoop = 0; iLoop < charsLength; iLoop = iLoop + 1) {
        HTML += TPL.split('{{CHAR}}').join(chars[iLoop]);
    }

    return HTML;
};


Crosswordbase.prototype.createGrid = function () {
    'use strict';
    var o = this,
        grid = $('.puzzleholder'),
        rows = [],
        rowCount = o.puzzle.settings.rowCount,
        colCount = o.puzzle.settings.colCount,
        cells,
        i,
        j;

    for (i = 0; i < rowCount; i = i + 1) {
        cells = ['<tr>\n'];
        for (j = 0; j < colCount; j = j + 1) {
            cells.push(o.getCellHtml(i, j));
        }

        cells.push('</tr>\n');
        rows.push(cells.join(''));
    }

    grid.html(rows.join(''));

    return true;
};


Crosswordbase.prototype.addDemarcation = function (cluedata) {

    if (oApp.oJSON.crosswordtype === 'Mephisto') {
        return false;
    }

    var i,
        j,
        cluesAcross = cluedata[0].clues,
        cluesDown = cluedata[1].clues,
        word,
        rgxSplit = /[-,]/,
        chunks,
        delimiter,
        letterIdx,
        delimiterIdx,
        classPrefixSpace = 'dmark',
        classPrefixHyphen = 'dmark-hyphen',
        thisClassPrefix;

    for (i = 0; i < cluesAcross.length; i = i + 1) {
        thisClassPrefix = oApp.getDemarcationClassFromClue(cluesAcross[i]);
        if (thisClassPrefix !== false) {
            for (j = 0; j < thisClassPrefix.length; j = j + 1) {
                $('.dmjsSquareHolder[data-across-word="' + cluesAcross[i].word + '"]:eq(' + thisClassPrefix[j].letterIdx + ')').addClass(thisClassPrefix[j].delimiter + '-right');
                $('.clues-list-holder .clues li[data-word-id="' + cluesAcross[i].word + '"]').find('.boxes .box:eq(' + thisClassPrefix[j].letterIdx + ')').addClass(thisClassPrefix[j].delimiter);
            }
        }
    }

    for (i = 0; i < cluesDown.length; i = i + 1) {
        thisClassPrefix = oApp.getDemarcationClassFromClue(cluesDown[i]);
        if (thisClassPrefix !== false) {
            for (j = 0; j < thisClassPrefix.length; j = j + 1) {
                $('.dmjsSquareHolder[data-down-word="' + cluesDown[i].word + '"]:eq(' + thisClassPrefix[j].letterIdx + ')').addClass(thisClassPrefix[j].delimiter + '-bottom');
                $('.clues-list-holder .clues li[data-word-id="' + cluesDown[i].word + '"]').find('.boxes .box:eq(' + thisClassPrefix[j].letterIdx + ')').addClass(thisClassPrefix[j].delimiter);
            }
        }
    }

};


Crosswordbase.prototype.getDemarcationClassFromClue = function (clue) {

    var thisClassPrefix = false,
        chunks,
        letterIdx = -1,
        delimiter,
        delimiterIdx = -1,
        data = {},
        j;

    if (clue.format.split(/[-,]/).length > 1) {
        chunks = clue.format.split(/[-,]/);
        thisClassPrefix = [];
        for (j = 0; j < chunks.length - 1; j = j + 1) {
            letterIdx += parseInt(chunks[j], 10);
            delimiterIdx += parseInt(chunks[j], 10) + 1;
            delimiter = clue.demarcation !== undefined && clue.demarcation[j] !== undefined ? clue.demarcation[j] : ' ';
            data = {};
            data.letterIdx = letterIdx;
            data.delimiter = delimiter == '-' ? 'dmark-hyphen' : 'dmark';
            thisClassPrefix.push(data);
        }
    }

    return thisClassPrefix;
};


Crosswordbase.prototype.addBars = function () {

    var o = this,
        cells = o.puzzle.JSON.data.grid,
        i,
        j;

    for (i = 0; i < cells.length; i = i + 1) {
        for (j = 0; j < cells[i].length; j = j + 1) {
            if (cells[i][j].bars !== undefined) {
                //console.log(cells[i][j]);
                if (cells[i][j].bars.top !== undefined && cells[i][j].bars.top === true) {
                    $('td[data-square-id="' + cells[i][j].SquareID + '"]').addClass('bar-grid-border-t');
                }
                if (cells[i][j].bars.right !== undefined && cells[i][j].bars.right === true) {
                    $('td[data-square-id="' + cells[i][j].SquareID + '"]').addClass('bar-grid-border-r');
                }
                if (cells[i][j].bars.bottom !== undefined && cells[i][j].bars.bottom === true) {
                    $('td[data-square-id="' + cells[i][j].SquareID + '"]').addClass('bar-grid-border-b');
                }
                if (cells[i][j].bars.left !== undefined && cells[i][j].bars.left === true) {
                    $('td[data-square-id="' + cells[i][j].SquareID + '"]').addClass('bar-grid-border-l');
                }
            }
        }
    }

};

Crosswordbase.prototype.getCellHtml = function (i, j) {

    'use strict';

    var o = this,
        cells = o.puzzle.JSON.data.grid,
        id = (i * o.puzzle.settings.colCount) + j + 1,
        number,
        tddataacross,
        tddatadown,
        html;

    if (cells[i][j].Blank !== 'blank') {
        number = cells[i][j].Number;
        tddataacross = cells[i][j].WordAcrossID == '' ? '' : ' data-across-word="' + cells[i][j].WordAcrossID + '"';
        tddatadown = cells[i][j].WordDownID == '' ? '' : ' data-down-word="' + cells[i][j].WordDownID + '"';
        html = '<td data-square-id="' + id + '" class="dmjsSquareHolder cell-default-bg-grid"' + tddataacross + tddatadown + '>\n';
        html += '<span class="square">\n';
        html += '<span class="number">' + number + '</span>\n';
        html += '<span class="letter text-cell-default"></span>\n';
        html += '<span class="bar-grid-borders"></span>\n';
        html += '</span>\n';
        html += '</td>\n';
    } else {
        html = '<td data-square-id="' + id + '" class="dmjsSquareHolder blank cell-default-bg-grid"  >\n';
        html += '<span class="square">\n';
        html += '<span class="number"></span>\n';
        html += '<span class="letter text-cell-default"></span>\n';
        html += '</span>\n';
        html += '</td>\n';
    }

    return html;
};


Crosswordbase.prototype.createClues = function () {
    'use strict';
    var o = this,
        clueHolder = $('.clues-list-holder'),
        rows = [],
        acrossCount = o.puzzle.JSON.data.copy.clues[0].clues.length,
        downCount = o.puzzle.JSON.data.copy.clues[1].clues.length,
        cells,
        i,
        j,
        HTML = '';

    HTML += o.getClueSetHeadersHTML();
    
    if ( acrossCount > 58 || downCount > 58 )
    {
        $("body").addClass("add-additional-clue-page");
    }

    HTML += '<div id="cluesList" class="clues-list">\n<div class="clues-set clearfix">\n';
    HTML += '<div id="acrossholder" class="across-clues">\n<div>\n<h2>Across</h2>\n<ul class="clues">\n';

    for (i = 0; i < acrossCount; i = i + 1) {
        HTML += o.getClueHtml('Across', i);
    }

    HTML += '</div>\n</div>\n';
    HTML += '<div id="downholder" class="down-clues">\n<div>\n<h2>Down</h2>\n<ul class="clues">\n';

    for (i = 0; i < downCount; i = i + 1) {
        HTML +=  o.getClueHtml('Down', i);
    }

    HTML += '</div>\n</div>\n';
    HTML += '</div>\n</div>\n';

    clueHolder.html(HTML);

    if ($('.text-clue').css('font-family') == "'Times New Roman'") {
        $('#crossword-holder').addClass('small-font');
    }

    return true;
};


Crosswordbase.prototype.getClueSetHeadersHTML = function () {

    if (this.puzzle.JSON.data.copy.clues.length < 3) {
        return '';
    }

    $('#crossword-holder').addClass('multiple-clues');

    var HTML = '';

    HTML += '<ul class="clues-select">';
    HTML += '<li><a href="#" class="on"><span>Switch to </span>' + this.oJSON.clues[0].name + '<span> clues</span></a></li>';
    HTML += '<li><a href="#"><span>Switch to </span>' + this.oJSON.clues[2].name + '<span> clues</span></a></li>';
    HTML += '</ul>';

    return HTML;
};


Crosswordbase.prototype.getClueHtml = function (orientation, i) {

    'use strict';

    var o = this,
        clues = o.puzzle.JSON.data.copy.clues,
        clueSet,
        boxCount,
        thisClue,
        thisClueId = 0,
        html = '',
        startHtml = '',
        endHtml = '';

    for (clueSet in clues) {
        if (clues.hasOwnProperty(clueSet)) {
            if (clues[clueSet].title == orientation) {
                thisClue = clues[clueSet].clues[i];
                startHtml = '';
                
                if (i <= 58)
                {
                    startHtml += '<li class="for-second-page" data-word-id="' + thisClue.word + '">\n';
                }
                else
                {
                    startHtml += '<li class="for-third-page" data-word-id="' + thisClue.word + '">\n';
                }
                endHtml = '';
                endHtml += o.getClueBoxesHtml(thisClue.length);
                endHtml += o.getClueAnswerHtml(thisClue.answer);
                endHtml += '</li>\n';
            }
        }
    }

    for (clueSet in clues) {
        if (clues.hasOwnProperty(clueSet)) {
            if (clues[clueSet].title == orientation) {
                thisClue = clues[clueSet].clues[i];
                thisClueId = thisClueId + 1;
                html += '<div class="dmjsClue dmjsClue' + thisClueId + ' text-clue">\n';
                html += o.getClueNumberHtml(thisClue.number);
                html += ' ' + thisClue.clue + ' ';
                html += o.getClueFormatHtml(thisClue.format);
                html += '</div>\n';
            }
        }
    }

    return startHtml + html + endHtml;
};


Crosswordbase.prototype.getClueNumberHtml = function (number) {

    return '<strong class="text-title">' + number + '</strong>\n';

};


Crosswordbase.prototype.getClueFormatHtml = function (format) {

    var newFormat = format;

    if (oApp.oJSON.crosswordtype === 'Mephisto') {
        newFormat = this.getMultiPartFormatAsTotal(format);
        var wordCount = this.getFormatAsWordCount(format);
        if (wordCount !== false) {
            newFormat += ', ' + wordCount;
        }
    }

    return '<span class="clue-format-holder">(' + newFormat + ')</span>\n';

};

Crosswordbase.prototype.getMultiPartFormatAsTotal = function (format) {

    var rgx = /[^0-9]+/,
        parts = format.split(rgx),
        total = 0,
        iLoop;

    for (iLoop = 0; iLoop < parts.length; iLoop = iLoop + 1) {
        total += parseInt(parts[iLoop], 10);  // Iterate over your first array and then grab the second element add the values up
    }

    return total;
};

Crosswordbase.prototype.getFormatAsWordCount = function (format) {

    var parts = String(format).split(','),
        total = parts.length,
        writtenNumbers = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen'];

    if (total < 2) {
        return false;
    }

    return writtenNumbers[total] + ' words';
};



Crosswordbase.prototype.getClueBoxesHtml = function (number) {

    var HTML = '',
        boxCount;

    HTML += '<span class="boxes">\n';
    for (boxCount = 0; boxCount < number; boxCount = boxCount + 1) {
        HTML += '<span class="box"></span>\n';
    }
    HTML += '</span>\n';

    return HTML;

};


Crosswordbase.prototype.getClueAnswerHtml = function (answer) {
    return '<span class="answer"><strong>A.</strong> ' + answer + '</span>';

};


Crosswordbase.prototype.unserialize = function () {

    'use strict';

    var o = this;

    o.puzzle.meta.Ymd = o.puzzle.JSON.data.copy['date-release'].split('-').join('').substr(0, 8);

    return true;

};


Crosswordbase.prototype.loadPuzzleDefaultSettings = function () {

    if (oApp.oJSON.crosswordtype === 'Mephisto') {
        $('#showDemarcation').closest('.custom-checkbox').remove();
        return false;
    }

    return true;

};


Crosswordbase.prototype.readPuzzleElementsDimensions = function () {

    return true;

};


Crosswordbase.prototype.showHelpOrStartPuzzle = function () {

    'use strict';

    var o = this,
        feedPath;

    if (this.urlParams.showsolution == 1) {
        this.showSolutionInGridWithoutChecking();
        return false;
    }

    //  load json feed for suggested puzzles
    if (o.puzzle.JSON.data.copy.publisher !== undefined && o.puzzle.JSON.data.copy.publisher === 'The Sun') {
        if (location.pathname.indexOf('/puzzles/') > -1) {
            if (o.device.settings.isAWS != 'yes') {
                feedPath = '../../twoday.json';
            } else {
                feedPath = '../../data.json';
            }
            $.getJSON(feedPath, function (data) {
                o.twodaysPuzzles = data;
                o.twodaysPuzzles.Yesterday = o.createYesterdaysPuzzleList(data);
                o.twodaysPuzzles.Today = o.createTodayPuzzleList(data);
                o.updateIconsInCompletionScreens();
            });
        } else {
            console.warn('completion screen links not updated on local');
            $('.puzzle-cross-sell__others').each(function(){
                $(this).find('li').last().remove();
            });
        }
    }

    oApp.startPuzzle();

};

Crosswordbase.prototype.createYesterdaysPuzzleList = function (json) {

    var yesterdayObject = {},
        i;

    for (i in json.Archives) {
        yesterdayObject[i] = yesterdayObject[i] || [];
        yesterdayObject[i].push(json.Puzzles[json.Archives[i][0]].url);
    }

    return yesterdayObject;
}

Crosswordbase.prototype.createTodayPuzzleList = function (json) {

    var todayObject = {},
        i;

    for (i in json.Today) {
        todayObject[i] = todayObject[i] || [];
        todayObject[i].push(json.Puzzles[json.Archives[i][0]].url);
    }

    return todayObject;
}

/**
 * update icons in completion screens
 */
Crosswordbase.prototype.updateIconsInCompletionScreens = function () {

    'use strict';

    var o = this,
        todayYmd = o.getShortDate();

    //  add links from feed to completion icons (or blank if not there)
    $('.jsCompletionIcons a').each(function () {
        var el = $(this),
            ref = el.data('ref'),
            link;

        if (o.twodaysPuzzles.Yesterday !== undefined && ref === 'yesterday') {
            if (o.twodaysPuzzles.Yesterday === undefined || o.twodaysPuzzles.Yesterday[o.puzzle.meta.type] === undefined || o.twodaysPuzzles.Yesterday[o.puzzle.meta.type][0] === undefined) {
                link = '';
                $(this).closest('.jsCompletionIconsYesterday').remove();
            } else {
                link = '../../' + o.twodaysPuzzles.Yesterday[o.puzzle.meta.type][0];
            }
        }

        if (o.twodaysPuzzles.Today !== undefined && ref !== 'yesterday') {
            if (o.twodaysPuzzles.Today === undefined || o.twodaysPuzzles.Today[ref] === undefined || o.twodaysPuzzles.Today[ref][0] === undefined) {
                link = '';
            } else {
                link = '../../' + o.twodaysPuzzles.Today[ref][0];
            }
        }
        el.attr('href', link);

    });

    //  if puzzle puzzle data is not today then remove yesterdays puzzle icon
    if (todayYmd !== o.puzzle.meta.Ymd) {
        $('.jsCompletionIconsYesterday').remove();
    }

    //  remove any icons with blank HREFs (because there was no puzzle link in feed)
    $('.jsCompletionIcons').each(function(){

        var iconSet = $(this);

        iconSet.find('li').each(function(){
            if ($(this).find('a').attr('href') === '') {
                $(this).remove();
            }
        });

        //  remove any empty UL elements
        if (iconSet.find('.jsCompletionIconsYesterday li').length === 0) {
            iconSet.find('.jsCompletionIconsYesterday').remove();
        }

        if (iconSet.find('.jsCompletionIconsOthers li').length === 0) {
            iconSet.find('.jsCompletionIconsOthers').remove();
        }

        //  remove any excess icons
        if (iconSet.find('.puzzle-cross-sell li').length > 2) {
            iconSet.find('.puzzle-cross-sell li').last().remove();
        }

        //  add class with number of icons
        iconSet.addClass('puzzle-cross-sell-links-' + $(this).find('li').length);

        //  add class if no yesterday puzzle but two for today
        if (iconSet.find('.jsCompletionIconsYesterday li').length === 0 && iconSet.find('.jsCompletionIconsOthers li').length === 2) {
            iconSet.addClass('show-two-puzzles');
        }

    });

    //  update homepage link
    switch (this.oJSON.crosswordtype.toLowerCase()) {

        case 'mini':
            $('.jsLinkMindGames').attr('href', '../../crossword-mini.html');
            break;

        case 'two speed':
            $('.jsLinkMindGames').attr('href', '../../crossword-two_speed.html');
            break;

    }

};

Crosswordbase.prototype.startPuzzle = function () {

    'use strict';

};


Crosswordbase.prototype.displayTitle = function () {
    'use strict';
    var o = this,
        title = o.puzzle.JSON.data.copy.title,
        setter = o.puzzle.JSON.data.copy.byline;

    $('.puzzle-title').html(title);
    document.title = title;
    if (setter !== undefined && setter != '') {
        $('.setter-name').html('by ' + setter);
    }

    if (o.puzzle.JSON.data.copy.previoussolutiontext !== undefined && o.puzzle.JSON.data.copy.previoussolutionlink !== undefined) {
        $('a', '.jsLastWeeksSolution').html(o.puzzle.JSON.data.copy.previoussolutiontext);
        $('a', '.jsLastWeeksSolution').attr('href', o.puzzle.JSON.data.copy.previoussolutionlink + '?showsolution=1&returnurl=' + location.href);
        $('.jsLastWeeksSolution').removeClass('hide');
    }

    if (this.urlParams.showsolution == 1 && this.urlParams.returnurl !== undefined) {
        $('a', '.jsLastWeeksSolution').html('Return to Puzzle');
        $('a', '.jsLastWeeksSolution').attr('href', this.urlParams.returnurl);
        $('.jsLastWeeksSolution').removeClass('hide');
    }

    $('.competition-heading').html(o.puzzle.JSON.data.copy.title);

    if (o.puzzle.JSON.data.competition !== undefined) {
        if (o.puzzle.JSON.data.competition.terms !== undefined) {
            $('.jsCompetitionTermsLink').attr('href', o.puzzle.JSON.data.competition.terms);
            $('.jsCompetitionTermsPrintLink').text('For terms and conditions please visit ' + o.puzzle.JSON.data.competition.terms);
        }
        if (o.puzzle.JSON.data.competition.prizeinfo !== undefined) {
            $('.jsCompetitionPrizeInfo').html(o.puzzle.JSON.data.competition.prizeinfo);
        }
        if (o.puzzle.JSON.data.competition.instructions !== undefined) {
            $('.jsCompetitionInstructions').html(o.puzzle.JSON.data.competition.instructions);
        }
    }

    //$('.mobile-puzzle-number').html('No ' + o.puzzle.JSON.meta.number);
    //$('.jsCorrectMessage', '#overlayCompleted').html(o.puzzle.JSON.copy.correctsolutionmessagetext);
    //$('.jsIncorrectMessage', '#overlayIncorrect').html(o.puzzle.JSON.copy.incorrectsolutionmessagetext);

    return true;
};

/**
 * Display puzzle date in the masthead (should be published date)
 *
 * @returns {Boolean}
 */
Crosswordbase.prototype.displayMastheadDate = function () {
    'use strict';
    var o = this,
        date;

    if (o.puzzle.JSON.data.copy) {
        date = o.puzzle.JSON.data.copy['date-publish'];
        $('header.masthead p.date').html(date);
    }

    return true;
};

Crosswordbase.prototype.setUpPrintLink = function () {

    var res = window.location.pathname.match(/crossword\/([0-9]{8})\/([0-9]+).+/);

    if (res && res.length === 3) {
        $('a', '#triggerPrint').attr('href', oApp.puzzle.JSON.data.meta.pdf);
    }

};



Crosswordbase.prototype.setUpEmailLink = function () {

    if ($('#triggerEmail-a').length < 1) {
        return true;
    }

    var res = window.location.pathname.match(/crossword\/([0-9]{8})\/([0-9]+).+/);
    if (res && res.length === 3) {
        var title = oApp.puzzle.JSON.data.copy.title,
            subject = title + ', ' + oApp.puzzle.JSON.data.copy['date-publish-email'],
            pdf = window.location.href.split(/[?#]/)[0].split('index.html')[0] + oApp.puzzle.JSON.data.meta.pdf,
            emailLink = $('#triggerEmail-a').attr('href');
        emailLink = emailLink.split('{{email_subject}}').join(subject);
        emailLink = emailLink.split('{{full_path_to_pdf}}').join(pdf);
        emailLink = emailLink.split('The Times T2 Puzzles').join('The Times');
        $('#triggerEmail-a').attr('href', emailLink);

    }

};


Crosswordbase.prototype.hideShowButtons = function () {
    if (oApp.puzzle.JSON.data.copy.settings.solution !== undefined) {
        $('#submit-button').remove();
    } else {
        $('#actions').addClass('competition');
        $('#triggerCheck').remove();
    }
    if (oApp.puzzle.JSON.data.competitioncrossword == '1' && (new Date()).getTime() > parseInt(oApp.puzzle.JSON.data.copy['ms-finalsubmission'] + '000', 10)) {
        $('#submit-button').remove();
    }

};


/**
* read in any stored settings
*/
Crosswordbase.prototype.readStoredSettings = function () {

    //  status
    var status = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'status');

    if (status === false) {
        oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'status', 'started');
    }

    //  retrieve current square id and direction
    this.oStoredSettings.currentsquareid = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'currentsquareid');
    this.oStoredSettings.currentdirection = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'currentdirection');

    //  keyboard sounds
    this.oStoredSettings.keyboardsounds = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'keyboard-sounds');
    if (this.oStoredSettings.keyboardsounds === false) {
        oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'keyboard-sounds', '' + this.keyboardSounds);
    }
    if (this.oStoredSettings.keyboardsounds == 'true') {
        $('#settingKeyboardSounds').prop('checked', 'checked');
    }

    //  letter skipping
    this.oStoredSettings.settingskip = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'setting-skip');
    if (this.oStoredSettings.settingskip == 'true') {
        $('#skipFilledSquares').prop('checked', 'checked');
    }

    //  answer skipping
    // this.skipAnswers = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'setting-skip-answers');
    // if (this.skipAnswers == 'true') {
        // $('#skipCompleteAnswers').prop('checked', 'checked');
    // }

    this.showDemarcation = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'show-demarcation');
    if (this.showDemarcation == 'true') {
        $('#showDemarcation').prop('checked', 'checked');
    }

    this.oStoredSettings.showtimer = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'show-timer');
    if (this.oStoredSettings.showtimer === false) {
        oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'show-timer', '' + this.showTimer);
    }
    this.oStoredSettings.showtimer = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'show-timer');
    if (this.oStoredSettings.showtimer == 'true') {
        $('#showTimer').prop('checked', 'checked');

    }
    this.showTimer = this.oStoredSettings.showtimer == 'true';

};


/**
* get grid dimensions
*/
Crosswordbase.prototype.readGridDimensions = function () {
    //  set row count from JSON data
    oApp.setRowCount(oApp.oJSON.gridsize.rows);
    //  set column count from JSON data
    oApp.setColCount(oApp.oJSON.gridsize.cols);


    //  if no errors then run next function

};


/**
* sort clues into manageable array
*/
Crosswordbase.prototype.sortClues = function () {
    //  put clues into object and sort by clue set name
    var oClues = oApp.oJSON.clues;
    //  oApp.sortJsonArrayByProperty(oClues, 'name');
    var iClueNum;
    //  loop through clues and add to array
    for (iClueNum = 0; iClueNum < oClues.length; iClueNum = iClueNum + 1) {
        if (this.aClues[oClues[iClueNum].name] === undefined) {
            this.aCluesets.push(oClues[iClueNum].name);
            this.aClues[oClues[iClueNum].name] = [];
            this.aClueSet.push(oClues[iClueNum].name);
        }
        this.aClues[oClues[iClueNum].name][oClues[iClueNum].title] = oClues[iClueNum].clues;
    }
    //  do we have answers?
    if ($('ul.clues li .answer', oApp.oPuzzle).html() === null || $('ul.clues li .answer', oApp.oPuzzle).html() === undefined) {
        //this.bSubmitable = true;
    } else {
        //this.bSolutionViewable = true;
        //this.showSolutionButton();
        //this.showChecksButton();
    }

};


/**
* select first word of puzzle
*/
Crosswordbase.prototype.selectFirstWord = function () {

    //  get the id of the first word (should be 1) then get letters of across word with that id
    var IDX = parseInt(oApp.oJSON.words[0].id, 10);

    var oWordLetters = $('.' + this.sGridSquareHolderClass + '[data-across-word="' + IDX + '"]', '.puzzleholder');
    //  if no across word found then get letters of down word instead
    if (oWordLetters.length < 1) {
        oWordLetters = $('.' + this.sGridSquareHolderClass + '[data-down-word="' + IDX + '"]', '.puzzleholder');
    }

    this.selectWordBySquareIDandWordID(oWordLetters.first().data('square-id'), IDX);

    //  set scrollers

/*      setTimeout(oApp.enableScrollers, 100);*/

    //  listen for rotation
    if (document.addEventListener) {
        window.addEventListener('orientationchange', oApp.handleOrientationChange);
    }

    //  listen for window resize
    if (document.addEventListener) {
        window.onresize = oApp.handleWindowResize;
        window.onresize = function () {
            oApp.fixClueHeaders();
        };

    }

};


/**
* read in any stored game grid data and add to HTML
*/
Crosswordbase.prototype.readStoredGrid = function (dochecks) {

    //this was below this.addDemarcation(oApp.puzzle.JSON.data.copy.clues); but wouldnt show bars on pdf
    this.addBars();

    dochecks = dochecks === undefined ? true : dochecks;

    //  loop through rows & columns getting data for each square
    var i, j;
    for (i = 0; i < this.iRowCount; i = i + 1) {
        for (j = 0; j < this.iColCount; j = j + 1) {
            var id = (i * this.iColCount) + j + 1;
            var oStoredSquareData = oApp.getLocalStorageItem(this.iPuzzleID + '-' + id);
            //  if we have valid data for this square
            if (oStoredSquareData != false) {
                var el = oApp.getSquareByID(id);
                //  add letter to square
                el.find('.letter').html(oStoredSquareData.letter);
                //  check if letter was in pencil
                if (oStoredSquareData.pencil != false) {
                    el.addClass('pencil');
                }
            }
        }
    }
    this.fillInClueAnswers();
    //  skip letters
    var skip = oApp.getLocalStorageItem(this.iPuzzleID + '-setting-skip');
    oApp.bSkipCompletedLetters = skip == false || skip == "false" ? false : true;
    //  demarcation
    if (this.showDemarcation == 'true') {
        $('#crossword-holder').addClass('show-demarcation');
    }
    this.addDemarcation(oApp.puzzle.JSON.data.copy.clues);

    var sounds = oApp.getLocalStorageItem(this.iPuzzleID + '-keyboard-sounds');
    oApp.bKeyboardSounds = sounds == false || sounds == "false" ? false : true;

    //  only show completion screen if
    var hasBeenSubmitted = oApp.getLocalStorageItem(this.iPuzzleID + '-submitted') == 'true';
    if (dochecks && !hasBeenSubmitted) {
        oApp.completionChecks();
    }

};


/**
* update settings to match stored settings
*/
Crosswordbase.prototype.processStoredSettings = function () {

    //  set current square id if one was saved
    if (this.oStoredSettings.currentsquareid != false) {
        this.setCurrentSquareID(this.oStoredSettings.currentsquareid);
    } else {
        oApp.selectFirstWord();
    }

    //  set current direction if it was saved
    if (this.oStoredSettings.currentdirection != false) {
        this.setCurrentWordDir(this.oStoredSettings.currentdirection);
    }

    //  highlight current word and current square if we have that info
    if (this.oStoredSettings.currentsquareid != false && this.oStoredSettings.currentdirection != false) {
        this.selectWordBySquareIDandDirection(this.oStoredSettings.currentsquareid, this.oStoredSettings.currentdirection);
    }

    //  hide submit button whilst app open if need be
    var tsNow = Math.floor((new Date()).getTime() / 1000);
    var tsLastSubmit = $('#submit-button').data('hidets');
    var secsUntilLastSubmit = tsLastSubmit - tsNow;
    var tRemoveSubmit = setTimeout(
        function () {
            $('#submit-button').remove();
        },
        secsUntilLastSubmit * 1000
    );


};


/**
* show the clue linked to the currently selected square
*/
Crosswordbase.prototype.highlightCurrentClue = function () {

    var el = this.getSquareByID(this.iCurrentSelectedSquareID);
    var IDX;
    //  select across word if current square is in one if not select down word
    if (this.sCurrentSelectedWordDir != null) {
        IDX = el.data(this.sCurrentSelectedWordDir + '-word');
    } else {
        IDX = el.data('across-word') != null ? el.data('across-word') : el.data('down-word');
    }
    //  update classes
    this.iCurrentSelectedClueID = IDX;
    $('ul li', this.sClueListHolder).removeClass('on');
    $('ul li[data-word-id="' + IDX + '"]', this.sClueListHolder).addClass('on');

    //  scroll to current clue as soon as NI scrollers are enabled
    setTimeout(
        function () {
            //oApp.scrollToClueFromClueID(oApp.iCurrentSelectedClueID);
        },
        101
    );

    //  if no errors then run next function

    oApp.startTimer();
};


/**
* assign the current time to the start time variable
*/
Crosswordbase.prototype.startTimer = function () {

    if (this.showTimer !== true) {
        $('#crossword-holder').addClass('hide-timer');
    }

    if (this.dtStart === undefined) {
        var time = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'time');
        var completedTime = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'completedTime');
        var dDate = new Date();
        this.dtStart = Date.UTC(dDate.getFullYear(), dDate.getMonth(), dDate.getDate(), dDate.getHours(), dDate.getMinutes(), dDate.getSeconds(), dDate.getMilliseconds());
        if (time !== false) {
            this.dtStart = this.dtStart - (time * 1000);
        }
        if (completedTime === false) {
            this.startInterval();
        } else {
            $('#jsTimerOutput').html(oApp.timerSecondsToMMSS(completedTime));
        }
    }
};


Crosswordbase.prototype.startInterval = function () {
    this.timerInterval = setInterval(
        function () {
            oApp.updateTimer();
        },
        1000
    );
};


Crosswordbase.prototype.updateTimer = function () {
    var dDate = new Date(),
        now = Date.UTC(dDate.getFullYear(), dDate.getMonth(), dDate.getDate(), dDate.getHours(), dDate.getMinutes(), dDate.getSeconds(), dDate.getMilliseconds()),
        iSecs = Math.round((now - this.dtStart) / 1000);

    oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'time', iSecs);
    $('#jsTimerOutput').html(oApp.timerSecondsToMMSS(iSecs));
};



//  sort array function
Crosswordbase.prototype.sortJsonArrayByProperty = function (objArray, prop, direction) {
    if (arguments.length < 2) { throw new Error("sortJsonArrayByProp requires 2 arguments"); }
    var direct = arguments.length > 2 ? direction : 1; //Default to ascending

    if (objArray && objArray.constructor === Array) {
        var propPath = (prop.constructor === Array) ? prop : prop.split(".");
        objArray.sort(function (a, b) {
            var p;
            for (p in propPath) {
                if (propPath.hasOwnProperty(p)) {
                    if (a[propPath[p]] && b[propPath[p]]) {
                        a = a[propPath[p]];
                        b = b[propPath[p]];
                    }
                }
            }
            // convert numeric strings to integers
            if (typeof a === 'string') {
                a = a.match(/^\d+$/) ? +a : a;
                b = b.match(/^\d+$/) ? +b : b;
            }
            return ((a < b) ? -1 * direct : ((a > b) ? direct : 0));
        });
    }
};


//  show overlay
Crosswordbase.prototype.overlayShow = function (el) {
    $('.overlay-bg').show();
    el.show();
};


/**
* set row count
*
* @param {integer} iRowCount
*/
Crosswordbase.prototype.setRowCount = function (iRowCount) {
    if (isNaN(parseInt(iRowCount, 10))) {
        return oApp.throwError('Crosswordbase.prototype.setRowCount: value supplied must be an integer');
    }
    this.iRowCount = parseInt(iRowCount, 10);
    return this.iRowCount;
};


/**
* set column count
*
* @param {integer} iColCount
*/
Crosswordbase.prototype.setColCount = function (iColCount) {
    if (isNaN(parseInt(iColCount, 10))) {
        return oApp.throwError('Crosswordbase.prototype.setColCount: value supplied must be an integer');
    }
    this.iColCount = parseInt(iColCount, 10);
    return this.iColCount;
};


/**
* return square object located at X, Y
*
* @param {integer} iSquareID
* @return {HTMLelement} javascript object
*/
Crosswordbase.prototype.getSquareByID = function (iSquareID) {
    if (isNaN(parseInt(iSquareID, 10))) {
        throw new Error('Crosswordbase.prototype.getSquareByID: value supplied must be an integer. Found "' + iSquareID + '"');
    }
    return $(this.sGridSquareHolderSelector + '[' + this.sIDXattr + '="' + iSquareID + '"]', oApp.oPuzzle);
};


/**
* function to handle the selection of a square
*
* @param {HTMLElement} el
*/
Crosswordbase.prototype.handleSquareSelect = function (el, autoCalculateDirection) {
    if (!el.hasClass(oApp.sDarkClass)) {
        this.squareclicked = true;
        var IDX = el.data('square-id');
        //  if the selected square is already current square then switch orientation if possible
        if (el.hasClass('current')) {
            if (this.sCurrentSelectedWordDir == 'across' && el.data('down-word') != null) {
                this.selectWordBySquareIDandWordID(IDX, el.data('down-word'));
            } else {
                if (el.data('across-word') != null) {
                    this.selectWordBySquareIDandWordID(IDX, el.data('across-word'));
                }
            }

        //  not current square so check if square is part of an across clue, if not set the down clue
        } else {
            if (autoCalculateDirection === undefined || autoCalculateDirection === true) {
                this.selectWordBySquareIDandWordID(IDX, el.data(this.getOrientationToSelectBasedOnGrid(el) + '-word'));
            } else {
                if (this.sCurrentSelectedWordDir === 'down' && el.data('down-word') != null) {
                    this.selectWordBySquareIDandDirection(IDX, 'down');
                } else {
                    if (el.data('across-word') != null) {
                        this.selectWordBySquareIDandDirection(IDX, 'across');
                    } else {
                        this.selectWordBySquareIDandDirection(IDX, 'down');
                    }
                }
            }
        }
    }
    if (oApp.areChecksShowing()) {
        oApp.showhideChecks();
    }
    if (oApp.isSolutionShowing()) {
        oApp.showHideSolutions();
    }
    oApp.removeAllCheckTypes();
    this.setClueSquareByElement(el);
};

Crosswordbase.prototype.getOrientationToSelectBasedOnGrid = function (el) {  // 4899

    var IDX = el.data('square-id'),
        orientationToShow = 'across',
        acrossWordId = this.isSquarePartOfAnAcrossWord(el) || 0,
        downWordId = this.isSquarePartOfADownWord(el) || 0,
        isAcrossFirstSquare = acrossWordId > 0 && this.isSquareFirstLetterOfAnAcrossWord(el),
        isDownFirstSquare = downWordId > 0 && this.isSquareFirstLetterOfADownWord(el),
        isAcrossEmpty = acrossWordId > 0 && this.isAcrossWordEmpty(acrossWordId),
        isDownEmpty = downWordId > 0 && this.isDownWordEmpty(downWordId),
        isAcrossCompleted = acrossWordId > 0 && this.isAcrossWordCompleted(acrossWordId),
        isDownCompleted = downWordId > 0 && this.isDownWordCompleted(downWordId);


    el.addClass('current');

    if (acrossWordId == 0) {
        orientationToShow = 'down';
    }

    if (isAcrossFirstSquare && isDownFirstSquare) {  //  first light of both words
        if (!isAcrossEmpty && isDownEmpty) {
            orientationToShow = 'down';
        }
        if (!isAcrossEmpty && !isDownEmpty) {
            orientationToShow = 'across';
        }
        if (isAcrossEmpty && !isDownEmpty) {
            orientationToShow = 'across';
        }
        if (isAcrossEmpty && isDownEmpty) {
            orientationToShow = 'across';
        }
        if (!isAcrossCompleted && isDownCompleted) {
            orientationToShow = 'across';
        }
        if (isAcrossCompleted && !isDownCompleted) {
            orientationToShow = 'down';
        }
        if (!isAcrossCompleted && !isDownCompleted && !isDownEmpty) {
            orientationToShow = 'down';
        }
        if (!isAcrossCompleted && !isDownCompleted && !isAcrossEmpty) {
            orientationToShow = 'across';
        }
    }

    if (isAcrossFirstSquare && downWordId > 0 && !isDownFirstSquare) {  //  first light of across word and mid of down
        orientationToShow = 'across';
    }

    if (isDownFirstSquare && acrossWordId > 0 && !isAcrossFirstSquare) {  //  first light of down word and mid of across
        orientationToShow = 'down';
    }

    return orientationToShow;

};

Crosswordbase.prototype.isSquarePartOfAnAcrossWord = function (el) {
    return el.data('across-word');
};

Crosswordbase.prototype.isSquarePartOfADownWord = function (el) {
    return el.data('down-word');
};

Crosswordbase.prototype.isSquareFirstLetterOfAnAcrossWord = function (el) {
    var elId = el.data('square-id'),
        RC = this.getRCfromSquareID(elId),
        prevSquareId;

    if (RC.c <= 1) {
        return true;
    }
    prevSquareId = this.getSquareIDfromRC(RC.r, RC.c - 1);

    if ($('td[data-square-id="' + prevSquareId + '"]').hasClass(oApp.sDarkClass)) {
        return true;
    }
    if (el.hasClass('bar-grid-border-l')) {
        return true;
    }

    return false;

};

Crosswordbase.prototype.isSquareFirstLetterOfADownWord = function (el) {
    var elId = el.data('square-id'),
        RC = this.getRCfromSquareID(elId),
        prevSquareId;

    if (RC.r <= 1) {
        return true;
    }
    prevSquareId = this.getSquareIDfromRC(RC.r - 1, RC.c);

    if ($('td[data-square-id="' + prevSquareId + '"]').hasClass(oApp.sDarkClass)) {
        return true;
    }
    if (el.hasClass('bar-grid-border-t')) {
        return true;
    }

    return false;

};

Crosswordbase.prototype.isAcrossWordEmpty = function (id) {

    var letters = '';
    $('td[data-across-word="' + id + '"]').each(function () {
        letters += $(this).find('.letter').html();
    });
    return letters === '';

};

Crosswordbase.prototype.isDownWordEmpty = function (id) {
    var letters = '';
    $('td[data-down-word="' + id + '"]').each(function () {
        letters += $(this).find('.letter').html();
    });
    return letters === '';

};

Crosswordbase.prototype.isAcrossWordCompleted = function (id) {

    var letters = '';
    $('td[data-across-word="' + id + '"]').each(function () {
        letters += $(this).find('.letter').html();
    });
    return letters.length === $('td[data-across-word="' + id + '"]').length;

};

Crosswordbase.prototype.isDownWordCompleted = function (id) {
    var letters = '';
    $('td[data-down-word="' + id + '"]').each(function () {
        letters += $(this).find('.letter').html();
    });
    return letters.length === $('td[data-down-word="' + id + '"]').length;

};

/**
* function to handle the selection of a key from the onscreen keyboard (app)
*
* @param {HTMLElement} el
*/
Crosswordbase.prototype.handleOnscreenKeyClick = function (el, event) {
    if (oApp.areChecksShowing()) {
        oApp.showhideChecks();
    }
    if (oApp.isSolutionShowing()) {
        oApp.showHideSolutions();
    }
    // if this key has been assigned a specific ascii value then use it. If not assigned a specific ascii value so get ascii value of display text
    if ($('a', el).data('ascii') != null) {
        oApp.handleKeyCode($('a', el).data('ascii'), event);
    } else {
        oApp.handleKeyCode($('a', el).html().charCodeAt(0), event);
    }
};


/**
* function to handle the selection of a clue set
*
* @param {HTMLElement} el
*/
Crosswordbase.prototype.handleClueSetSelection = function (el) {
    var IDX = $('ul.clues-select li a').index(el);  //  get ID of selected tab (zero indexed)
    oApp.switchClueSet(IDX);  //  switch the visible clue set
};


/**
* function to handle the selection of a clue
*
* @param {HTMLElement} el
*/
Crosswordbase.prototype.handleClueSelection = function (el) {

    if (oApp.areChecksShowing()) {
        oApp.showhideChecks();
    }
    if (oApp.isSolutionShowing()) {
        oApp.showHideSolutions();
    }
    oApp.removeAllCheckTypes();

    var IDX = el.closest('li').data('word-id');  //  get the word id associated to this clue holder

    var iSquareID = this.getFirstSquareIDofWordID(IDX);
    this.selectWordBySquareIDandWordID(iSquareID, IDX);  //  highlight the related word
    if (!this.isSquareEmpty(iSquareID)) {
        if (oApp.bSkipCompletedLetters == true) {
            oApp.moveToNextEmptySquare();
        }
    }
    oApp.moveGridToShowClue(iSquareID);
};


/**
* take an ascii code and run associated function
*
* @param {integer} iAsciiCode
*/
Crosswordbase.prototype.handleKeyCode = function (iAsciiCode, event) {

    //  convert chars to uppercase
    if (iAsciiCode >= 97 && iAsciiCode <= 111) {
        iAsciiCode = iAsciiCode - 32;
    }

    //  standard alphabet
    if (iAsciiCode >= 65 && iAsciiCode <= 90) {

        var currentlyBlank = this.isSquareEmpty(oApp.iCurrentSelectedSquareID);

        oApp.addLetterToSquare(String.fromCharCode(iAsciiCode), oApp.iCurrentSelectedSquareID);

        if (this.checkWordCompleted(this.iCurrentSelectedWordID) === true) {

            if (this.isLastSquareOfWord(oApp.iCurrentSelectedSquareID, oApp.sCurrentSelectedWordDir)) {
                oApp.checkSkipToNextClue();
            } else {
                oApp.moveToNextSquare();
            }

        } else {
            if (oApp.bSkipCompletedLetters == true && currentlyBlank == true) {
                oApp.moveToNextEmptySquare();
            } else {
                oApp.moveToNextSquare();
            }
        }

        if (this.bFirstLetterEnteredOfVisit) {
            this.bFirstLetterEnteredOfVisit = false;
            utag.link({event_engagement_action: 'engagement', event_engagement_name: 'crosswords:puzzle started', event_engagement_browsing_method: 'type'});
        }


    }

    //  space key
    if (iAsciiCode == 32) {
        oApp.addLetterToSquare('', oApp.iCurrentSelectedSquareID);
        if (oApp.bSkipCompletedLetters == true) {
            oApp.moveToNextEmptySquare();
        } else {
            oApp.moveToNextSquare();
        }
        return false;
    }

    //  enter key
    if (iAsciiCode == 13) {
        oApp.checkReturnSkipToNextClue();
        return false;
    }

    //  arrow key - left
    if (iAsciiCode == 37) {
        oApp.changeCurrentCellRowCol(0, -1);
    }

    //  arrow key - up
    if (iAsciiCode == 38) {
        oApp.changeCurrentCellRowCol(-1, 0);
    }

    //  arrow key - right
    if (iAsciiCode == 39) {
        oApp.changeCurrentCellRowCol(0, 1);
    }

    //  arrow key - down
    if (iAsciiCode == 40) {
        oApp.changeCurrentCellRowCol(1, 0);
    }

    //  pencil mode
    if (iAsciiCode == 47) {
        oApp.switchPencilMode();
    }

    //  backspace (app)
    if (iAsciiCode == 8) {
        oApp.addLetterToSquare('', oApp.iCurrentSelectedSquareID);
        oApp.moveToPreviousSquare();
        if (this.disableBrowserBackspace === true) {
            //event.preventDefault();  //  added for Gemini 4677 and then removed for Gemini 8424
            return false;
        }
    }

    //  backspace (web)
    if (iAsciiCode == 46) {
        oApp.addLetterToSquare('', oApp.iCurrentSelectedSquareID);
        oApp.moveToPreviousSquare();
    }

    //  change clue direction
    if (iAsciiCode == 63) {
        oApp.handleSquareSelect($(oApp.sGridSquareHolderSelector + '[data-square-id="' + oApp.iCurrentSelectedSquareID + '"]', oApp.oPuzzle));
        return false;
    }

    //  clear
    if (iAsciiCode == -1) {
        oApp.clearGrid();
        return false;
    }

    //  settings
    if (iAsciiCode == -2) {
        oApp.showSettings();
        return false;
    }

    //  tab
    if (iAsciiCode == 9) {
        oApp.moveToNextSquare();
        //oApp.scrollToClueFromClueID(10);
        return false;
    }

    if (iAsciiCode >= 37 && iAsciiCode <= 40) {  //  suppress arrow keys for iframes
        event.preventDefault();
    }
};


/**
* check to see if all squares are completed
*/
Crosswordbase.prototype.completionChecks = function () {

    if ($('.dmjsSquareHolder.needs-correction').length > 0) {
        return false;
    }

    var iCompletedWords = 0;
    var iCompletedLetters = 0;
    var oWords;
    //  loop through each across word
    var i, j, IDX, el;

    for (i = 0; i < this.aClues[this.aCluesets[0]].Across.length; i = i + 1) {
        if (this.aClues[this.aCluesets[0]].Across[i] !== undefined) {
            IDX = this.aClues[this.aCluesets[0]].Across[i].word;
            oWords = $('.' + this.sGridSquareHolderClass + '[data-across-word="' + IDX + '"]');
            iCompletedLetters = 0;
            //  loop through each letter
            for (j = 0; j < oWords.length; j = j + 1) {
                el = oWords.eq(j);
                if (!el.hasClass('pencil') && el.find('.letter').html() != '') {
                    iCompletedLetters = iCompletedLetters + 1;
                }
            }
            if (iCompletedLetters == oWords.length) {
                this.addFadeToClue(IDX);
                iCompletedWords = iCompletedWords + 1;
            } else {
                this.removeFadeFromClue(IDX);
            }
        }
    }

    //  loop through each down word
    for (i = 0; i < this.aClues[this.aCluesets[0]].Down.length; i = i + 1) {
        if (this.aClues[this.aCluesets[0]].Down[i] !== undefined) {
            IDX = this.aClues[this.aCluesets[0]].Down[i].word;
            oWords = $('.' + this.sGridSquareHolderClass + '[data-down-word="' + IDX + '"]');
            iCompletedLetters = 0;
            //  loop through each letter
            for (j = 0; j < oWords.length; j = j + 1) {
                el = oWords.eq(j);
                if (!el.hasClass('pencil') && el.find('.letter').html() != '') {
                    iCompletedLetters = iCompletedLetters + 1;
                }
            }
            if (iCompletedLetters == oWords.length) {
                this.addFadeToClue(IDX);
                iCompletedWords = iCompletedWords + 1;
            } else {
                this.removeFadeFromClue(IDX);
            }
        }
    }

    if (iCompletedWords == this.aClues[this.aCluesets[0]].Across.length + this.aClues[this.aCluesets[0]].Down.length) {
        this.crosswordCompleted();
        $('.jsSubmitComp').addClass('enabled jsSubmitEnabled');
    } else {
        $('.jsSubmitComp').removeClass('enabled jsSubmitEnabled');
    }

};



Crosswordbase.prototype.showHideOverlayForBrandByType = function (type, show) {

    show = show || true;

    $('.overlay[data-overlay-type="' + type + '"]').each(function () {

        var el = $(this),
            brands = el.data('brands'),
            brandList = brands === undefined ? [] : brands.split(','),
            publisher = oApp.puzzle.JSON.data.copy.publisher.split(' ').join('-').toLowerCase(),
            iLoop,
            matches = 0;

        for (iLoop = 0; iLoop < brandList.length; iLoop = iLoop + 1) {
            if (brandList[iLoop] == publisher) {
                if (show) {
                    el.show().removeClass('hide');
                    $('.overlay-bg').show().removeClass('hide');
                } else {
                    el.hide().addClass('hide');
                    $('.overlay-bg').hide().addClass('hide');
                }
                matches = matches + 1;
            }
        }

    });

};


/**
* select word based on square id
*
* @param {integer} iSquareID
* @return {integer} word id
*/
Crosswordbase.prototype.selectWordBySquareID = function (iSquareID) {

    var el = this.getSquareByID(parseInt(iSquareID, 10));
    var res = false;

    //  if the selected square is already current square then switch orientation if possible
    if (el.hasClass('current')) {
        if (this.sCurrentSelectedWordDir == 'across' && el.data('down-word') != null) {
            res = this.selectWordBySquareIDandWordID(iSquareID, el.data('down-word'));
        } else {
            if (el.data('across-word') != null) {
                res = this.selectWordBySquareIDandWordID(iSquareID, el.data('across-word'));
            }
        }
        //  not current square so check if square is part of an across clue, if not set the down clue
    } else {
        el.addClass('current');
        if (!el.hasClass('selected-word')) {
            if (el.data('across-word') != null) {
                res = this.selectWordBySquareIDandWordID(iSquareID, el.data('across-word'));
            } else {
                res = this.selectWordBySquareIDandWordID(iSquareID, el.data('down-word'));
            }
        } else {
            res = this.selectWordBySquareIDandWordID(iSquareID, el.data(this.sCurrentSelectedWordDir + '-word'));
        }
    }

    return res;
};


/**
* update screen based on square id and word id

* @param {integer} iSquareID
* @param {integer} iWordID
* @return {integer} iWordID
*/
Crosswordbase.prototype.selectWordBySquareIDandWordID = function (iSquareID, iWordID) {

    $('.current', oApp.oPuzzle).removeClass('current');
    $('.selected-word', oApp.oPuzzle).removeClass('selected-word');
    this.selectWordByWordID(iWordID);

    this.setCurrentSquareID(iSquareID);

    this.showClueByID(iWordID);
    this.highlightClueListClueByWordID(iWordID);
    if (this.squareclicked) {
        oApp.expandKeyboard();
        setTimeout(
            function () {
                oApp.adjustGridHolderPaddingForKeyboardExpand();
            },
            0
        );
    } else {
        this.adjustGridHolderPadding();
    }
    setTimeout(
        function () {
            oApp.moveGridToShowClue(iSquareID);
        },
        250
    );

    this.squareclicked = false;
    return iWordID;
};


/**
* select word based on square id and direction
*
* @param {integer} iSquareID
* @param {string} sDirection
* @return {integer} word id
*/
Crosswordbase.prototype.selectWordBySquareIDandDirection = function (iSquareID, sDirection) {

    $('.current', oApp.oPuzzle).removeClass('current');
    $('.selected-word', oApp.oPuzzle).removeClass('selected-word');
    var el = this.getSquareByID(parseInt(iSquareID, 10));
    var iWordID = el.data(sDirection + '-word');
    this.selectWordByWordID(iWordID);
    this.setCurrentSquareID(iSquareID);
    this.showClueByID(this.iCurrentSelectedWordID);
    setTimeout(
        function () {
            oApp.moveGridToShowClue(iSquareID);
        },
        250
    );
    return this.iCurrentSelectedWordID;
};


/**
* switch visible clue set
*/
Crosswordbase.prototype.switchClueSet = function (iClueSet) {

    $('.dmjsClue').hide();
    $('.dmjsClue' + (1 + iClueSet)).show();


    $('ul.clues-select li a').removeClass('on');
    $('ul.clues-select li:eq(' + iClueSet + ') a').addClass('on');

    $('span', '#switch-clueset-button').hide();
    $('span:eq(' + (1 - iClueSet) + ')', '#switch-clueset-button').show();







    this.iCurrentClueSet = iClueSet;
    this.updateIndividualClue(this.iCurrentSelectedClueID);


};


/**
* highlight a clue
*
* @param {integer} iClueID
*/
Crosswordbase.prototype.showClueByID = function (iClueID) {

    var iCurrentClue = this.iCurrentSelectedClueID;
    /*
      this.sCurrentSelectedWordDir == 'across' ? oClues = this.aClues[this.aCluesets[this.iCurrentClueSet]]['Across'] : oClues = this.aClues[this.aCluesets[this.iCurrentClueSet]]['Down'] ;
    */
    var oClues;
    if (this.sCurrentSelectedWordDir == 'across') {
        oClues = this.aClues[this.aCluesets[this.iCurrentClueSet]].Across;
    } else {
        oClues = this.aClues[this.aCluesets[this.iCurrentClueSet]].Down;
    }

    var i, HTML;
    this.updateIndividualClue(iClueID);
    for (i = 0; i < oClues.length; i = i + 1) {
        if (oClues[i] !== undefined) {
            if (iClueID == oClues[i].word) {
                this.iCurrentSelectedClueID = oClues[i].word;
            }
        }
    }
    oApp.scrollToClueFromClueID(iClueID);

};


Crosswordbase.prototype.updateIndividualClue = function (iClueID) {
    var clueID = iClueID;
    var oClues;
    oClues = this.aClues[this.aCluesets[this.iCurrentClueSet]].Across;
    if (clueID > oClues.length) {
        clueID = clueID - oClues.length;
    }

    clueID = clueID - 1;
    var cluesetName = this.aCluesets[this.iCurrentClueSet];
    var thisDirection = this.sCurrentSelectedWordDir == 'across' ? 'Across' : 'Down';
    var thisNumber = this.aClues[cluesetName][thisDirection][clueID].number;
    var thisClue = this.aClues[cluesetName][thisDirection][clueID].clue;
    thisClue = thisClue.split('&lt;').join('<').split('&gt;').join('>');
    var thisFormat = this.aClues[cluesetName][thisDirection][clueID].format;

    if (oApp.oJSON.crosswordtype === 'Mephisto') {
        thisFormat = this.getMultiPartFormatAsTotal(this.aClues[cluesetName][thisDirection][clueID].format);
        var wordCount = this.getFormatAsWordCount(this.aClues[cluesetName][thisDirection][clueID].format);
        if (wordCount !== false) {
            thisFormat += ', ' + wordCount;
        }
    }

    var thisDirectionSmall = thisDirection == 'Down' ? 'd' : 'a';
    var newClueHTML = thisNumber + thisDirectionSmall + ' ' + this.htmlEntitiesToDecimalCode(thisClue) + ' <span class="clue-format-holder">(' + thisFormat + ')</span>';
    $('p', this.sIndividualClueHolder).html(newClueHTML);


};


/**
* Move to previous square
*/
Crosswordbase.prototype.moveToPreviousSquare = function () {
    var iCurrentColumn = this.iCurrentSelectedSquareID % this.iColCount;
    if (iCurrentColumn == 0) {
        iCurrentColumn = this.iColCount;
    }
    var iCurrentRow = Math.ceil(this.iCurrentSelectedSquareID / this.iColCount);

    var newID;
    if (this.sCurrentSelectedWordDir == 'across' && iCurrentColumn != 1) {
        newID = parseInt(this.iCurrentSelectedSquareID, 10) - 1;
        this.setCurrentSquare(newID);
    }
    if (this.sCurrentSelectedWordDir == 'down' && iCurrentRow != 1) {
        newID = parseInt(this.iCurrentSelectedSquareID, 10) - parseInt(this.iColCount, 10);
        this.setCurrentSquare(newID);
    }
    oApp.moveGridToShowClue(newID);
};


/**
* Move to next square
*/
Crosswordbase.prototype.moveToNextSquare = function () {

    var iCurrentColumn = this.iCurrentSelectedSquareID % this.iColCount;
    if (iCurrentColumn == 0) {
        iCurrentColumn = this.iColCount;
    }
    var iCurrentRow = Math.ceil(this.iCurrentSelectedSquareID / this.iColCount);
    var newID;
    if (this.sCurrentSelectedWordDir == 'across' && iCurrentColumn != this.iColCount) {
        newID = parseInt(this.iCurrentSelectedSquareID, 10) + 1;
        this.setCurrentSquare(newID);
    }
    if (this.sCurrentSelectedWordDir == 'down' && iCurrentRow != this.iRowCount) {
        newID = parseInt(this.iCurrentSelectedSquareID, 10) + parseInt(this.iColCount, 10);
        this.setCurrentSquare(newID);
    }
    oApp.moveGridToShowClue(newID);
};

Crosswordbase.prototype.changeCurrentCellRowCol = function (adjRow, adjCol, currentId) {

    var o = this,
        rows = o.puzzle.settings.rowCount,
        cols = o.puzzle.settings.colCount,
        currentId = currentId || this.iCurrentSelectedSquareID,
        currentRC = o.getColRowFromCellId(currentId),
        newRow = currentRC.row + adjRow,
        newCol = currentRC.col + adjCol,
        newId,
        newCell;

    if (newRow < 1) {
        newRow = rows;
    }
    if (newRow > rows) {
        newRow = 1;
    }
    if (newCol < 1) {
        newCol = cols;
    }
    if (newCol > cols) {
        newCol = 1;
    }

    newId = o.getCellIdFromColRow(newCol, newRow);
    newCell = o.getSquareByID(newId);

    if (newCell.hasClass('blank')) {
        o.changeCurrentCellRowCol(adjRow, adjCol, newId);
    } else {
        o.handleSquareSelect(newCell, false);
    }

};


/**
* Fill specified square with a letter (checking for pencil mode) and then run completion checks
*
* @param {string} sLetter
* @param {integer} iSquareID
*/
Crosswordbase.prototype.addLetterToSquare = function (sLetter, iSquareID, doChecks) {

    doChecks = doChecks === undefined ? true : doChecks;

    var el = oApp.getSquareByID(iSquareID);

    el.removeClass('needs-correction');
    el.find('.letter').html(sLetter);

    //  pencil mode?
    if (this.bPencilMode) {
        el.addClass('pencil');
    } else {
        el.removeClass('pencil');
    }

    //  save letter to local storage
    var oTmp = {};
    oTmp.letter = sLetter;
    oTmp.pencil = this.bPencilMode;
    oApp.setLocalStorageItem(this.iPuzzleID + '-' + iSquareID, oTmp);

    this.addLetterToClue(sLetter, el, this.bPencilMode);

    if (doChecks) {
        this.completionChecks();
    }

};


Crosswordbase.prototype.addLetterToClue = function (sLetter, el, pencil) {

    //  across
    var clueIDX, letterIDX, iOffset;
    if (el.data('across-word') !== undefined) {
        clueIDX = el.data('across-word');
        letterIDX = $('td[data-across-word="' + clueIDX + '"]').index(el);
        $('.across-clues ul.clues li').eq((clueIDX - 1)).find('.boxes .box').eq(letterIDX).html(sLetter);
        if (pencil) {
            $('.across-clues ul.clues li').eq((clueIDX - 1)).find('.boxes .box').eq(letterIDX).addClass('pencil');
        } else {
            $('.across-clues ul.clues li').eq((clueIDX - 1)).find('.boxes .box').eq(letterIDX).removeClass('pencil');
        }
    }
    //  down
    if (el.data('down-word') !== undefined) {
        clueIDX = el.data('down-word');
        letterIDX = $('td[data-down-word="' + clueIDX + '"]').index(el);
        iOffset = $('.across-clues ul.clues li').length;
        $('.down-clues ul.clues li').eq((clueIDX - 1 - iOffset)).find('.boxes .box').eq(letterIDX).html(sLetter);
        if (pencil) {
            $('.down-clues ul.clues li').eq((clueIDX - 1 - iOffset)).find('.boxes .box').eq(letterIDX).addClass('pencil');
        } else {
            $('.down-clues ul.clues li').eq((clueIDX - 1 - iOffset)).find('.boxes .box').eq(letterIDX).removeClass('pencil');
        }
    }
};


/**
* switch to pencil mode
*/
Crosswordbase.prototype.switchPencilMode = function (isPencil) {
    isPencil = isPencil || false;
    if (this.bPencilMode == false) {
        this.bPencilMode = true;
        $('.btn-pen', '#actions').removeClass('on');
        $('.btn-pencil', '#actions').addClass('on');
    } else {
        this.bPencilMode = false;
        $('.btn-pen', '#actions').addClass('on');
        $('.btn-pencil', '#actions').removeClass('on');
    }
    if (isPencil == true) {
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:pencil', event_engagement_browsing_method: 'click'});
    } else {
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:pen', event_engagement_browsing_method: 'click'});
    }
};

/**
* cycle through clue text sizes
*/
Crosswordbase.prototype.toggleTextSize = function () {

    var container = $('#crossword-holder');

    if (container.hasClass('text-size-small') || container.hasClass('text-size-medium') || container.hasClass('text-size-large')) {
        if (container.hasClass('text-size-small')) {
            container.removeClass('text-size-small').addClass('text-size-medium');
        } else if (container.hasClass('text-size-medium')) {
            container.removeClass('text-size-medium').addClass('text-size-large');
        } else if (container.hasClass('text-size-large')) {
            container.removeClass('text-size-large').addClass('text-size-small');
        }
    } else {
        $('#crossword-holder').addClass('text-size-medium');
    }

};

/**
* cycle through clue text sizes
*/
Crosswordbase.prototype.toggleColumn = function () {

    var container = $('#crossword-holder');

    if (container.hasClass('column-single') || container.hasClass('column-double')) {
        if (container.hasClass('column-single')) {
            container.removeClass('column-single').addClass('column-double');
        } else if (container.hasClass('column-double')) {
            container.removeClass('column-double').addClass('column-single');
        }
    } else {
        $('#crossword-holder').addClass('column-single');
    }

};

/**
toggle timer
*/
Crosswordbase.prototype.toggleTimer = function () {

    $('#crossword-holder').toggleClass('hide-timer');

};

/**
* toggle demarcation
*/
Crosswordbase.prototype.toggleDemarcation = function () {

    $('#crossword-holder').toggleClass('show-demarcation');

};


/**
* go to next empty square
*/
Crosswordbase.prototype.moveToNextEmptySquare = function () {

    var i;
    var iCurrentColumn = this.iCurrentSelectedSquareID % this.iColCount;
    if (iCurrentColumn == 0) {
        iCurrentColumn = this.iColCount;
    }
    var iCurrentRow = Math.ceil(this.iCurrentSelectedSquareID / this.iColCount);
    var newID;
    if (this.sCurrentSelectedWordDir == 'across' && iCurrentColumn != this.iColCount) {
        for (i = 1; i <= this.iColCount - iCurrentColumn; i = i + 1) {
            newID = parseInt(this.iCurrentSelectedSquareID, 10) + i;
            if (this.isSquareBlank(newID)) {
                break;
            }
            if (this.isSquareEmpty(newID)) {
                this.setCurrentSquare(newID);
                break;
            }
        }
    }

    if (this.sCurrentSelectedWordDir == 'down' && iCurrentRow != this.iRowCount) {
        for (i = 1; i <= this.iRowCount - iCurrentRow; i = i + 1) {
            //newID = parseInt(this.iCurrentSelectedSquareID) + parseInt(this.iColCount);
            newID = parseInt(this.iCurrentSelectedSquareID, 10) + parseInt(this.iColCount * i, 10);
            if (this.isSquareBlank(newID)) {
                break;
            }
            if (this.isSquareEmpty(newID)) {
                this.setCurrentSquare(newID);
                break;
            }
        }
    }
    oApp.moveGridToShowClue(newID);
};


/**
* select the specifed word and highlight its first letter
*
* @param {integer} iWordID
*/
Crosswordbase.prototype.selectWordByWordID = function (iWordID) {

    $('.current', oApp.oPuzzle).removeClass('current');
    $('.selected-word', oApp.oPuzzle).removeClass('selected-word');

    var oAcross = $('.' + this.sGridSquareHolderClass + '[data-across-word="' + iWordID + '"]');
    var oDown = $('.' + this.sGridSquareHolderClass + '[data-down-word="' + iWordID + '"]');
    this.iCurrentSelectedWordID = iWordID;
    $('td.faux-selected-word').removeClass('faux-selected-word');
    $('td.faux-current').removeClass('faux-current');
    if (oAcross.length > 0) {
        oAcross.addClass('selected-word');
        oAcross.eq(0).addClass('current');
        //this.setCurrentSquareID(parseInt(oAcross.eq(0).data('square-id')));
        oApp.setCurrentWordDir('across');
    } else {
        oDown.addClass('selected-word');
        oDown.eq(0).addClass('current');
        //this.setCurrentSquareID(parseInt(oDown.eq(0).data('square-id')));
        oApp.setCurrentWordDir('down');
    }
};


/**
* highlight the clue that relates to specified word
*
* @param {integer} iWordID
*/
Crosswordbase.prototype.highlightClueListClueByWordID = function (iWordID) {
    $('ul.clues li', this.sClueListHolder).removeClass('on');
    $('ul.clues li[data-word-id="' + iWordID + '"]', this.sClueListHolder).addClass('on');
};


/**
* add fade to specified clue
*
*/
Crosswordbase.prototype.addFadeToClue = function (iWordID) {
    $('ul.clues li[data-word-id="' + iWordID + '"]', this.sClueListHolder).addClass('fade');
};


/**
* take fade off of specified clue
*
*/
Crosswordbase.prototype.removeFadeFromClue = function (iWordID) {
    $('ul.clues li[data-word-id="' + iWordID + '"]', this.sClueListHolder).removeClass('fade');
};


/**
* show the submit button
*
*/
Crosswordbase.prototype.showSubmitButton = function () {
    $('#submit-button').show();
};


/**
* hides the submit button
*
*/
Crosswordbase.prototype.hideSubmitButton = function () {
    $('#submit-button').hide();
};


/**
* show the solution button
*
*/
Crosswordbase.prototype.showSolutionButton = function () {
    $('#triggerCheck').show();
};


/**
* hides the solution button
*
*/
Crosswordbase.prototype.hideSolutionButton = function () {
    $('#triggerCheck').hide();
};


/**
* show the check button
*
*/
Crosswordbase.prototype.showChecksButton = function () {
    $('#check-button').show();
};


/**
* hides the check button
*
*/
Crosswordbase.prototype.hideChecksButton = function () {
    $('#check-button').hide();
};


/**
* all clues are completed (not in pencil) #TODO - this is just for demo purposes
*
*/
Crosswordbase.prototype.crosswordCompleted = function () {

    var dDate = new Date();
    this.dtFinish = Date.UTC(dDate.getFullYear(), dDate.getMonth(), dDate.getDate(), dDate.getHours(), dDate.getMinutes(), dDate.getSeconds(), dDate.getMilliseconds());

    var iSecs = Math.ceil((this.dtFinish - this.dtStart) / 1000);
    var iMinutes = Math.floor(iSecs / 60);
    var sNiceTime;
    if (iMinutes > 0) {
        iSecs = iSecs - (iMinutes * 60);
        sNiceTime = iMinutes + ' minutes and ' + iSecs + ' seconds';
    } else {
        sNiceTime = iSecs + ' seconds';
    }
    if (this.urlParams.showsolution != 1 && this.puzzle.JSON.data.competition !== undefined && this.puzzle.JSON.data.competition.active == 1) {
        $('.jsInputCompletionTime').val(iSecs);
        //this.showSubmitOverlay(iSecs);
        return false;
    }

    if (this.urlParams.showsolution != 1 && oApp.checkAnswersAgainstSolution()) {
        if (this.showTimer === true) {
            clearInterval(this.timerInterval);
            var completedTime = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'completedTime');
            if (completedTime === false) {
                completedTime = Math.ceil((this.dtFinish - this.dtStart) / 1000);
                oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'completedTime', completedTime);
            }
            var overlayTime = oApp.timerSecondsToMMSS(completedTime);
            $('.jsCompletionTime').add('#jsTimerOutput').html(overlayTime);
            $('.jsCompletionTimeHolder').removeClass('hidden');
        } else {
            $('.jsCompletionTimeHolder').addClass('hidden');
        }
        this.showHideOverlayForBrandByType('correct-solution');
        oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'status', 'completed');
    } else {
        this.showHideOverlayForBrandByType('incorrect-solution');
    }

};

Crosswordbase.prototype.showSubmitOverlay = function () {
    $('#jsCompetitionSubmitThanks').addClass('hide');
    $('.competition-form-content').show().removeClass('hide');
    this.showHideOverlayForBrandByType('submit-solution');
    $('#title').focus();
};

/**
 * converts a number into equivalent minutes and seconds e.g. 94 = 01:34
 * @param {int} seconds
 * @returns {string} MM:SS
 */
Crosswordbase.prototype.timerSecondsToMMSS = function (seconds) {

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
* work out which is the previous clue and highlight it
*
*/
Crosswordbase.prototype.showPreviousClue = function () {

    if (oApp.areChecksShowing()) {
        oApp.showhideChecks();
    }
    if (oApp.isSolutionShowing()) {
        oApp.showHideSolutions();
    }
    oApp.removeAllCheckTypes();

    var IDX = this.iCurrentSelectedWordID - 1;
    if (IDX < 1) {
        IDX = this.aClues[this.aCluesets[0]].Across.length + this.aClues[this.aCluesets[0]].Down.length;
    }
    this.iCurrentSelectedWordID = IDX;
    var iSquareID = this.getFirstSquareIDofWordID(IDX);
    this.selectWordBySquareIDandWordID(iSquareID, IDX);  //  highlight the related word
};


/**
* work out which is the next clue and highlight it
*
*/
Crosswordbase.prototype.showNextClue = function () {

    if (oApp.areChecksShowing()) {
        oApp.showhideChecks();
    }
    if (oApp.isSolutionShowing()) {
        oApp.showHideSolutions();
    }
    oApp.removeAllCheckTypes();

    var IDX = this.iCurrentSelectedWordID + 1;
    if (IDX > this.aClues[this.aCluesets[0]].Across.length + this.aClues[this.aCluesets[0]].Down.length) {
        IDX = 1;
    }
    this.iCurrentSelectedWordID = IDX;
    var iSquareID = this.getFirstSquareIDofWordID(IDX);


    //oApp.highlightClueListClueByWordID(IDX);
    //oApp.showClueByID(IDX);
    //oApp.selectWordByWordID(IDX);
    this.selectWordBySquareIDandWordID(iSquareID, IDX);  //  highlight the related word
    if (!oApp.isSquareEmpty(iSquareID)) {
        oApp.moveToNextEmptySquare();
    }
};


/**
* return the 'square-id' data attribute of the first square of the specified word
*
* @param {integer} iWordID
* @return {integer}
*/
Crosswordbase.prototype.getFirstSquareIDofWordID = function (iWordID) {

    var IDX = parseInt(iWordID, 10);
    var oWordLetters = $('.' + this.sGridSquareHolderClass + '[data-across-word="' + IDX + '"]', oApp.oPuzzle);
    if (oWordLetters.length < 1) {
        oWordLetters = $('.' + this.sGridSquareHolderClass + '[data-down-word="' + IDX + '"]', oApp.oPuzzle);
    }
    var iSquareID = oWordLetters.first().data('square-id');
    return iSquareID;
};


/**
* set current square
*
* @param {integer} iSquareID
*/
Crosswordbase.prototype.setCurrentSquareID = function (iID) {
    $('.current', oApp.oPuzzle).removeClass('current');
    var el = this.getSquareByID(parseInt(iID, 10));
    el.addClass('current');
    this.iCurrentSelectedSquareID = iID;
    this.setClueSquareByElement(el);
    //  save letter to local storage
    oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'currentsquareid', iID);
};


/**
* set current direction
*
* @param {string} sDirection
*/
Crosswordbase.prototype.setCurrentWordDir = function (sDirection) {
    this.sCurrentSelectedWordDir = sDirection;
    //  save direction to local storage
    oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'currentdirection', sDirection);
    //  update graphic
    if (sDirection === 'down') {
        $('.key-direction').addClass('down');
    } else {
        $('.key-direction').removeClass('down');
    }
};


/**
* set specified square as current
*
* @param {integer} iSquareID
*/
Crosswordbase.prototype.setCurrentSquare = function (iSquareID) {
    var el = this.getSquareByID(iSquareID);
    if (!el.hasClass('blank')) {
        $('.current', oApp.oPuzzle).removeClass('current');
        el.addClass('current');
        this.setCurrentSquareID(iSquareID);
        this.setClueSquareByElement(el);
    }
};


Crosswordbase.prototype.setClueSquareByElement = function (el) {
    var clueIDX = el.data(this.sCurrentSelectedWordDir + '-word');
    var letterIDX = $('td[data-' + this.sCurrentSelectedWordDir + '-word="' + clueIDX + '"]').index(el);
    var iOffset = $('.across-clues ul.clues li').length;
    $('.' + this.sCurrentSelectedWordDir + '-clues ul.clues li').eq((clueIDX - 1 - iOffset)).find('.boxes .box').eq(letterIDX).addClass('current');
    oApp.highlightCurrentClue();
};


/**
* Find out if given square is empty
*
* @param {integer} iSquareID
* @return {boolean} whether specified square has a user entered value
*/
Crosswordbase.prototype.isSquareEmpty = function (iSquareID) {
    var el = oApp.getSquareByID(iSquareID);
    return el.find('.letter').html() != '' ? false : true;
};


/**
* Find out if given square is a blank
*
* @param {integer} iSquareID
* @return {boolean} whether specified square has a blank
*/
Crosswordbase.prototype.isSquareBlank = function (iSquareID) {
    var el = oApp.getSquareByID(iSquareID);
    return el.hasClass('blank');
};


Crosswordbase.prototype.zoomGridIn = function (e) {
    var zoomedScale = $('.puzzle').attr('zoomedscale'),
        paddingLeft = $('.puzzle').attr('zoomedpaddingleft'),
        height = $('.puzzle').attr('zoomheight'),
        width = $('.puzzle').attr('zoomwidth');
    $('#crossword-holder').addClass('grid-zoomed-in');

    $('.puzzle').css('-webkit-transform', 'scale(' + zoomedScale + ',' + zoomedScale + ')').css('transform', 'scale(' + zoomedScale + ',' + zoomedScale + ')').css('height', height + 'px').css('width', width + 'px');
    $('.puzzle-scroll').css('padding-left', paddingLeft + 'px');
    e.preventDefault();
    utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:zoom:in', event_engagement_browsing_method: 'click'});
    return false;
};


Crosswordbase.prototype.zoomGridOut = function (e) {

    var transformScale = $('.puzzle').attr('transformscale'),
        paddingLeft = $('.puzzle').attr('paddingleft'),
        height = $('.puzzle').attr('startheight'),
        width = $('.puzzle').attr('startwidth');
    $('#crossword-holder').removeClass('grid-zoomed-in');

    $('.puzzle').css('-webkit-transform', 'scale(' + transformScale + ',' + transformScale + ')').css('transform', 'scale(' + transformScale + ',' + transformScale + ')').css('height', height + 'px').css('width', width + 'px');
    $('.puzzle-scroll').css('padding-left', paddingLeft + 'px');
    e.preventDefault();
    utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:zoom:out', event_engagement_browsing_method: 'click'});
};


Crosswordbase.prototype.minimiseKeyboard = function () {
    $('#crossword-holder').addClass('keyboard-minimised');
};


Crosswordbase.prototype.expandKeyboard = function () {
    $('#crossword-holder').removeClass('keyboard-minimised');
};


Crosswordbase.prototype.toggleKeyboard = function () {
    $('#crossword-holder').toggleClass('keyboard-minimised');
};


Crosswordbase.prototype.minimiseClues = function () {
    $('#crossword-holder').removeClass('clues-maximised').addClass('clues-minimised');
    utag.link({event_engagement_action: 'engagement', event_engagement_name: 'switch to grid view', event_engagement_browsing_method: 'click'});
};


Crosswordbase.prototype.expandClues = function () {
    $('#crossword-holder').removeClass('clues-minimised').addClass('clues-maximised');
    utag.link({event_engagement_action: 'engagement', event_engagement_name: 'switch to list view', event_engagement_browsing_method: 'click'});
};


Crosswordbase.prototype.showSettings = function () {
    var oTarget = $('.settings-overlay');
    this.overlayShow(oTarget);
    utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:settings:open', event_engagement_browsing_method: 'click'});
};

Crosswordbase.prototype.showPrizeInfo = function () {
    var oTarget = $('.prize-overlay');
    this.overlayShow(oTarget);
};


Crosswordbase.prototype.showSubmit = function () {
    oApp.bKeyboardActive = false;
    var oTarget = $('.submit-overlay');
    this.overlayShow(oTarget);

};


Crosswordbase.prototype.handleCompetitionFormSubmit = function () {
    var form = $('#jsCompetitionForm'),
        errorEl = $('.jsCompetitionSubmitError', form),
        oTitle = $('#title'),
        oFirstName = $('#firstname'),
        oSurName = $('#surname'),
        oEmail = $('#email_address'),
        sEmail = oEmail.val();

    errorEl.html('');

    //  check we have what we need
    if (oTitle.val() == '') {
        $('.submiterror').html('Please select a title');
        oTitle.focus();
        return false;
    }
    if (oFirstName.val() == '') {
        $('.submiterror').html('Please enter your first name');
        oFirstName.focus();
        return false;
    }
    if (oSurName.val() == '') {
        errorEl.html('Please enter your surname');
        oSurName.focus();
        return false;
    }
    if (oEmail.val() == '') {
        errorEl.html('Please enter your email address');
        oEmail.focus();
        return false;
    }
    if (/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(sEmail) == false) {
        errorEl.html('Please enter a valid email address');
        oEmail.focus();
        return false;
    }
    errorEl.html('');

    this.handleCompetitionFormPost(form);
    return false;
};


Crosswordbase.prototype.hideClosestOverlay = function (el) {
    var oOverlay = el.closest('.overlay');
    oOverlay.hide();
    $('.overlay-bg').hide();
    oApp.bKeyboardActive = true;
    oApp.hideNativeKeyboard();
};

Crosswordbase.prototype.toggleSettingLetterSkipping = function () {

    oApp.bSkipCompletedLetters = $('#skipFilledSquares').prop('checked');
    oApp.setLocalStorageItem(this.iPuzzleID + '-setting-skip', '' + oApp.bSkipCompletedLetters);

};

Crosswordbase.prototype.toggleSettingAnswerSkipping = function () {

    oApp.skipAnswers = $('#skipCompleteAnswers').prop('checked');
    oApp.setLocalStorageItem(this.iPuzzleID + '-setting-skip-answers', '' + oApp.skipAnswers);

};

Crosswordbase.prototype.toggleSettingShowTimer = function () {

    oApp.showTimer = $('#showTimer').prop('checked');
    oApp.setLocalStorageItem(this.iPuzzleID + '-show-timer', '' + oApp.showTimer);
    oApp.toggleTimer();

};

Crosswordbase.prototype.toggleSettingDemarcation = function () {

    oApp.showDemarcation = $('#showDemarcation').prop('checked');
    oApp.setLocalStorageItem(this.iPuzzleID + '-show-demarcation', '' + oApp.showDemarcation);
    oApp.toggleDemarcation();

};

Crosswordbase.prototype.toggleSettingKeyboardSounds = function () {
    oApp.bKeyboardSounds = $('#settingKeyboardSounds').prop('checked');
    oApp.setLocalStorageItem(this.iPuzzleID + '-keyboard-sounds', '' + oApp.bKeyboardSounds);
};

Crosswordbase.prototype.fillInClueAnswers = function () {
    var idx = 1;
    $('ul.clues li', '.across-clues').each(function () {
        var el = $(this);
        var iLetterID = 0;
        $('td[data-across-word="' + idx + '"]').each(function () {
            var letter = $(this).find('.letter').html();
            var pencil = $(this).hasClass('pencil') ? 'pencil' : '';
            $('.box', el).eq(iLetterID).html(letter).addClass(pencil);
            iLetterID = iLetterID + 1;
        });
        idx = idx + 1;
    });

    var iOffset = $('.across-clues ul.clues li').length;
    idx = iOffset + 1;
    $('ul.clues li', '.down-clues').each(function () {
        var el = $(this);
        var iLetterID = 0;
        $('td[data-down-word="' + idx + '"]').each(function () {
            var letter = $(this).find('.letter').html();
            var pencil = $(this).hasClass('pencil') ? 'pencil' : '';
            $('.box', el).eq(iLetterID).html(letter).addClass(pencil);
            iLetterID = iLetterID + 1;
        });
        idx = idx + 1;
    });
};


Crosswordbase.prototype.handleClueBoxSelectAcross = function (box) {
    var boxIDX = box.closest('.boxes').find('.box').index(box);
    var clue = box.closest('li');
    var clueIDX = 1 + $('.across-clues ul.clues li').index(clue);
    var IDX = $('td[data-across-word="' + clueIDX + '"]').eq(boxIDX).data('square-id');

    if (this.isTouchDevice()) {
        var keyboardMinimised = $('#crossword-holder').hasClass('keyboard-minimised');
        if (keyboardMinimised) {
            oApp.expandKeyboard();
            oApp.adjustGridHolderPaddingForKeyboardExpand();
        }
    }

    setTimeout(
        function () { oApp.setCurrentSquare(IDX); },
        50
    );
};


Crosswordbase.prototype.handleClueBoxSelectDown = function (box) {
    var boxIDX = box.closest('.boxes').find('.box').index(box);
    var clue = box.closest('li');
    var clueIDX = 1 + $('.down-clues ul.clues li').index(clue);
    var iOffset = $('.across-clues ul.clues li').length;
    var IDX = $('td[data-down-word="' + (iOffset + clueIDX) + '"]').eq(boxIDX).data('square-id');

    if (this.isTouchDevice()) {
        var keyboardMinimised = $('#crossword-holder').hasClass('keyboard-minimised');
        if (keyboardMinimised) {
            oApp.expandKeyboard();
            oApp.adjustGridHolderPaddingForKeyboardExpand();
        }
    }

    setTimeout(
        function () { oApp.setCurrentSquare(IDX); },
        50
    );
};


Crosswordbase.prototype.clearGridConfirm = function () {
    var oTarget = $('.reset-overlay');
    this.overlayShow(oTarget);
    utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:reset:start', event_engagement_browsing_method: 'click'});
};


Crosswordbase.prototype.clearGrid = function () {
    var i, j, id, ooo, el;
    for (i = 0; i < this.iRowCount; i = i + 1) {
        for (j = 0; j < this.iColCount; j = j + 1) {
            id = (i * this.iColCount) + j + 1;
            ooo = oApp.setLocalStorageItem(this.iPuzzleID + '-' + id, '');
            el = oApp.getSquareByID(id);
            el.removeClass('correct error wrong needs-correction');
            el.find('.letter').html('');
            el.removeClass('pencil');
        }
    }
    oApp.hideChecks();
    oApp.hideSolution();
    $('.boxes .box').html('');
    $('ul.clues li', '#acrossholder').removeClass('fade error wrong correct needs-correction');
    $('ul.clues li', '#downholder').removeClass('fade error wrong correct needs-correction');
    $('.answer').hide();
    oApp.selectFirstWord();

    oApp.resetTimer();

};



Crosswordbase.prototype.resetTimer = function () {
    var dDate = new Date();
    this.dtStart = Date.UTC(dDate.getFullYear(), dDate.getMonth(), dDate.getDate(), dDate.getHours(), dDate.getMinutes(), dDate.getSeconds(), dDate.getMilliseconds());
    oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'time', 0);
    oApp.setLocalStorageItem(this.iPuzzleID + '-' + 'completedTime', false);
    clearInterval(this.timerInterval);
    this.startInterval();
};


Crosswordbase.prototype.scrollToClueFromClueID = function (iClueID) {

    if (iClueID == this.iCurrentClueID) {
        return false;
    }

    var sClueColumnCount = 2;
    if (($(window).width() >= 1024 && $('#crossword-holder').hasClass('clues-minimised')) || (($(window).width() >= 750 && $(window).width() < 1024)) || (($(window).width() < 600)) || $('#crossword-holder').hasClass('column-single')) {
        sClueColumnCount = 1;
    }

    var iAcrossCount = $('.across-clues ul.clues li').length;

    var cluesetTabsHeight = 0;

    if ($('#crossword-holder').hasClass('multiple-clues')) {
        cluesetTabsHeight = $('.clues-select').outerHeight();
    }
    var offsetTop = 0;
    var isJumbo = oApp.oJSON.crosswordtype === 'Jumbo';
    if (iClueID <= iAcrossCount) {
        offsetTop = cluesetTabsHeight + $('#acrossholder h2').outerHeight() + oApp.cluesTop;
        if (iClueID > 1) {
            if (sClueColumnCount == 1) {
                $('#cluesList').moveScrollableAreaY($('#acrossholder .clues li').get(iClueID - 2), {duration: 500, offsetTop : offsetTop});
            } else {
                $('#acrossholder div').moveScrollableAreaY($('#acrossholder .clues li').get(iClueID - 2), {duration: 500, offsetTop : offsetTop});
            }
        } else {
            if (sClueColumnCount == 1) {
                $('#cluesList').moveScrollableAreaY($('#acrossholder .clues li').get(0), {duration: 500, offsetTop: offsetTop});
            } else {
                $('#acrossholder div').moveScrollableAreaY($('#acrossholder .clues li').get(0), {duration: 500, offsetTop: offsetTop});
            }
        }
    } else {
        offsetTop = cluesetTabsHeight + $('#downholder h2').outerHeight() + oApp.cluesTop;
        iClueID = iClueID - iAcrossCount;
        if (iClueID > 1) {
            if (sClueColumnCount == 1) {
                $('#cluesList').moveScrollableAreaY($('#downholder .clues li').get(iClueID - 1), {duration: 500, offsetTop : offsetTop});
            } else {
                $('#downholder div').moveScrollableAreaY($('#downholder .clues li').get(iClueID - 1), {duration: 500, offsetTop : offsetTop});
            }
        } else {
            if (sClueColumnCount == 1) {
                $('#cluesList').moveScrollableAreaY($('#downholder .clues li').get(0), {duration: 500, offsetTop : offsetTop});
            } else {
                $('#downholder div').moveScrollableAreaY($('#downholder .clues li').get(0), {duration: 500, offsetTop : offsetTop});
            }
        }

    }
};


Crosswordbase.prototype.handleCompetitionFormPost = function (form) {

    var data = {},
        isAWS = '@_IS_AWS_DEPLOYMENT_@',
        URL,
        dfd;

    $.each(form.serializeArray(), function () {
        data[this.name] = this.value;
    });

    data.d = this.getAnswersAsString();
    data.i = this.puzzle.JSON.data.copy.id;
    data.t = 'crossword';

    if (isAWS == 'yes') {
        URL = '@_API_SERVER_@/api/puzzles/submissions/submit';
    } else {
        URL = 'http://git.newsint.co.uk/api/puzzles/submissions/submit';
    }

    dfd = $.ajax({
        type: 'POST',
        url: URL,
        data: data
    });

    dfd.done(function (res) {
        //console.log(res.data);
        oApp.setLocalStorageItem(oApp.iPuzzleID + '-' + 'submitted', 'true');
        $('#jsCompetitionSubmitThanks').removeClass('hide');
        //$('#jsCompetitionSubmitForm').addClass('hide');
        $('.competition-form-content').hide();
        oApp.hideNativeKeyboard();
    });

    dfd.fail(function (err) {
        //console.log(err);
        $('#jsCompetitionSubmitProblem').removeClass('hide');
        $('#jsCompetitionSubmitForm').addClass('hide');
        oApp.hideNativeKeyboard();
    });

};


Crosswordbase.prototype.getAnswersAsString = function () {
    var sAnswerString = '';
    $('.dmjsSquareHolder').each(function () {
        var el = $(this);
        var val;
        if (el.hasClass('blank')) {
            val = '.';
        } else {
            val = el.find('.letter').html();
            if (val == '') {
                val = '_';
            }
        }
        sAnswerString += val;
    });

    return sAnswerString;

};


Crosswordbase.prototype.checkSkipToNextClue = function () {

    if (this.skipAnswers === true || this.skipAnswers === 'true') {
        this.showNextClue();
    }

};


Crosswordbase.prototype.checkReturnSkipToNextClue = function () {

    if (this.returnSkipAnswers === true || this.returnSkipAnswers === 'true') {
        this.showNextClue();
    }

};


Crosswordbase.prototype.checkWordCompleted = function (iWordID) {
    var k = 0, l = 0, el;
    $(this.sGridSquareHolderSelector, oApp.oPuzzle).each(function () {
        el = $(this);
        if (el.data('across-word') == iWordID || el.data('down-word') == iWordID) {
            k = k + 1;
            if (el.find('.letter').html() != '') {
                l = l + 1;
            }
        }
    });
    if (k > 0 && l === k) {
        return true;
    }
    return false;
};


Crosswordbase.prototype.showHideCheckOptions = function () {

    //this.showHideOverlayForBrandByType('check-options');
    oApp.showhideChecks();
    return false;
};


Crosswordbase.prototype.showHideSolutions = function () {

    //  hide current solutions
    $('.error').removeClass('error');
    $('.answer').hide();

    if (oApp.isSolutionShowing()) {
        oApp.hideSolution();
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:solution:hide', event_engagement_browsing_method: 'click'});
    } else {
        oApp.showSolution();
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'main ribbon:solution:expose', event_engagement_browsing_method: 'click'});
    }

    return false;
};


Crosswordbase.prototype.isSolutionShowing = function () {

    var solutionShowing = $('a', $('#triggerCheck')).hasClass('solution-showing') || $('#triggerRevealOptions').hasClass('on');

    return $('a', $('#triggerCheck')).hasClass('solution-showing');

};


Crosswordbase.prototype.showSolution = function () {

    if (this.alterGridDuringShowSolution === true) {
        this.showSolutionInGrid();
        return false;
    }
    var oButton = $('#triggerCheck');
    //$('a .text', oButton).text('Solution');
    $('a', oButton).addClass('solution-showing');
    $('#crossword-holder').addClass('solution');
    $('td.selected-word').addClass('faux-selected-word').removeClass('selected-word');
    $('td.current').addClass('faux-current').removeClass('current');
    //  check across clues
    $('ul.clues li', '#acrossholder').each(function () {
        var clue = $(this);
        var clueid = clue.data('word-id');
        var answer = clue.find('.answer');
        var answertext = answer.text().split('A. ').join('').replace(/[^a-zA-Z0-9]/g, '');

        if (oApp.highlightWrongLettersByWordID(clueid, answertext) === false) {
            answer.show();
            clue.addClass('error');
        }
    });
    //  check down clues
    $('ul.clues li', '#downholder').each(function () {
        var clue = $(this);
        var clueid = clue.data('word-id');
        var answer = clue.find('.answer');
        var answertext = answer.text().split('A. ').join('').replace(/[^a-zA-Z0-9]/g, '');
        if (oApp.highlightWrongLettersByWordID(clueid, answertext) === false) {
            answer.show();
            clue.addClass('error');
        }
    });
    if (oApp.checkAnswersAgainstSolution()) {
        oApp.showHideOverlayForBrandByType('correct-solution');
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'crosswords:puzzle completed', event_engagement_browsing_method: 'type'});
    }
};


Crosswordbase.prototype.showSolutionInGrid = function () {

    var i, j, IDX, el, clue, obj = [];

    oApp.hideChecks();

    $(this.sGridSquareHolderSelector, oApp.oPuzzle).removeClass('selected-word current');

    //  build object of clues
    for (i = 0; i < this.aClues[this.aCluesets[0]].Across.length; i = i + 1) {
        clue = this.aClues[this.aCluesets[0]].Across[i];
        if (clue !== undefined) {
            obj[clue.word] = clue.answer.replace(/[^a-zA-Z0-9]/g, '');
        }
    }
    for (i = 0; i < this.aClues[this.aCluesets[0]].Down.length; i = i + 1) {
        clue = this.aClues[this.aCluesets[0]].Down[i];
        if (clue !== undefined) {
            obj[clue.word] = clue.answer.replace(/[^a-zA-Z0-9]/g, '');
        }
    }
    //  loop through clues and add to relevant elements
    for (i = 1; i < obj.length; i = i + 1) {
        var word = (obj[i]).toUpperCase();
        var k = 0;
        $(this.sGridSquareHolderSelector, oApp.oPuzzle).each(function () {
            var el = $(this),
                id = el.data('square-id');
            if (el.data('across-word') == i || el.data('down-word') == i) {
                k = k + 1;
                var letterAnswer = word[k - 1];
                var userAnswer = oApp.getLocalStorageItem(oApp.iPuzzleID + '-' + id).letter;
                var classText = letterAnswer == userAnswer ? 'correct' : 'wrong';
                el.addClass(classText).find('.letter').html(letterAnswer);
                $('.boxes:eq(' + (i - 1) + ')').find('.box:eq(' + (k - 1) + ')').html(letterAnswer);
            }
            return '';
        });
    }
    //  check across clues
    $('ul.clues li', '#acrossholder').each(function () {
        var clue = $(this);
        var clueid = clue.data('word-id');
        var answer = clue.find('.answer');
        var answertext = answer.text().split('A. ').join('').replace(/[ \-']/g, '');
        var userAnswerText = clue.find('.boxes').text().split('<span class="box">').join('').split('</span>').join('').replace(/(\s)/gm, '');
        if (answertext !== userAnswerText) {
            clue.addClass('error');
        } else {
            clue.addClass('correct');
        }
    });
    //  check down clues
    $('ul.clues li', '#downholder').each(function () {
        var clue = $(this);
        var clueid = clue.data('word-id');
        var answer = clue.find('.answer');
        var answertext = answer.text().split('A. ').join('').replace(/[ \-']/g, '');
        var userAnswerText = clue.find('.boxes').text().split('<span class="box">').join('').split('</span>').join('').replace(/(\s)/gm, '');
        if (answertext !== userAnswerText) {
            clue.addClass('error');
        } else {
            clue.addClass('correct');
        }
    });
    $('a', $('#triggerCheck')).addClass('solution-showing');

};

Crosswordbase.prototype.showSolutionInGridWithoutChecking = function () {

    var i, j, IDX, el, clue, obj = [];

    oApp.hideChecks();

    $(this.sGridSquareHolderSelector, oApp.oPuzzle).removeClass('selected-word current');

    //  build object of clues
    for (i = 0; i < this.aClues[this.aCluesets[0]].Across.length; i = i + 1) {
        clue = this.aClues[this.aCluesets[0]].Across[i];
        if (clue !== undefined) {
            obj[clue.word] = clue.answer.replace(/[^a-zA-Z0-9]/g, '');
        }
    }
    for (i = 0; i < this.aClues[this.aCluesets[0]].Down.length; i = i + 1) {
        clue = this.aClues[this.aCluesets[0]].Down[i];
        if (clue !== undefined) {
            obj[clue.word] = clue.answer.replace(/[^a-zA-Z0-9]/g, '');
        }
    }
    //  loop through clues and add to relevant elements
    for (i = 1; i < obj.length; i = i + 1) {
        var word = (obj[i]).toUpperCase();
        var k = 0;
        $(this.sGridSquareHolderSelector, oApp.oPuzzle).each(function () {
            var el = $(this),
                id = el.data('square-id');
            if (el.data('across-word') == i || el.data('down-word') == i) {
                k = k + 1;
                el.find('.letter').html(word[k - 1]);
            }
            return '';
        });
    }

};


Crosswordbase.prototype.hideSolution = function () {

    if (this.regenerateGridAfterHideSolution == true) {
        $('body').removeClass('show-solution');
        $('a', $('#triggerCheck')).removeClass('solution-showing');
        $('ul.clues li', '#acrossholder').add('ul.clues li', '#downholder').removeClass('correct error');
        $(this.sGridSquareHolderSelector, oApp.oPuzzle).removeClass('correct wrong').find('.letter').html('');
        $('.box').removeClass('correct wrong').html('');
        var currentsquareid = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'currentsquareid');
        var currentdirection = oApp.getLocalStorageItem(this.iPuzzleID + '-' + 'currentdirection');
        this.readStoredGrid(false);
        this.selectWordBySquareIDandDirection(currentsquareid, currentdirection);
    } else {
        var oButton = $('#triggerCheck');
        $('a', oButton).removeClass('solution-showing');
        $('#crossword-holder').removeClass('solution');
        $('td.faux-selected-word').addClass('selected-word').removeClass('faux-selected-word');
        $('td.faux-current').addClass('current').removeClass('faux-current');
    }
    $('#triggerRevealOptions').removeClass('on');
};

Crosswordbase.prototype.removeAllCheckTypes = function () {
    oApp.hideSolution();
    $('.error, .correct, .wrong').removeClass('correct error wrong');
    $('.faux-current').removeClass('faux-current').addClass('current');
    $('.faux-selected-word').removeClass('faux-selected-word').addClass('selected-word');
};


Crosswordbase.prototype.showCheckCell = function (cell) {

    cell = cell || $('td.current');

    var userLetter = cell.find('.letter').text().toUpperCase(),
        direction = oApp.sCurrentSelectedWordDir,
        wordid = cell.data(direction + '-word'),
        clue = $('.clues-list-holder .clues li[data-word-id="' + wordid + '"]'),
        answer = clue.find('.answer').text().split('A. ').join('').replace(/[ \-']/g, ''),
        letteridx = $('.puzzleholder td[data-' + direction + '-word="' + wordid + '"]').index(cell),
        correctLetter = answer[letteridx].toUpperCase();

    if (userLetter === correctLetter) {

        cell.addClass('correct');
    } else {
        clue.addClass('error');
        cell.addClass('error');
    }

    if (cell.hasClass('current')) {
        cell.addClass('faux-current').removeClass('current');
    }

    return userLetter === correctLetter;

};


Crosswordbase.prototype.showCheckWord = function () {

    var errors = 0,
        letterCorrect,
        cells = $('td.selected-word'),
        direction = oApp.sCurrentSelectedWordDir,
        wordid = cells.first().data(direction + '-word'),
        clue = $('.clues-list-holder .clues li[data-word-id="' + wordid + '"]');

    cells.each(function () {
        $(this).addClass('faux-selected-word').removeClass('selected-word');
        letterCorrect = oApp.showCheckCell($(this));
        if (!letterCorrect) {
            errors = errors + 1;
        }
    });

    if (errors > 0) {
        clue.addClass('error');
    } else {
        clue.addClass('correct');
    }

};


Crosswordbase.prototype.showhideChecks = function () {

    //  hide current solutions
    $('.error, .correct').removeClass('correct error');
    $('.answer').hide();

    if (oApp.areChecksShowing()) {
        oApp.hideChecks();
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'check:hide', event_engagement_browsing_method: 'click'});
    } else {
        oApp.showChecks();
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'check:expose', event_engagement_browsing_method: 'click'});
    }

    return false;
};


Crosswordbase.prototype.showRevealWord = function () {

    var direction = oApp.sCurrentSelectedWordDir,
        wordid = $('td.selected-word').first().data(direction + '-word'),
        clue = $('.clues-list-holder .clues li[data-word-id="' + wordid + '"]');

    this.showRevealWordById(wordid);

};


Crosswordbase.prototype.showRevealWordById = function (id) {

    var clue = $('.clues-list-holder .clues li[data-word-id="' + id + '"]'),
        direction = $('.puzzleholder td[data-across-word="' + id + '"]').length > 0 ? 'across' : 'down';

    $('.puzzleholder td[data-' + direction + '-word="' + id + '"]').each(function () {
        var cell = $(this),
            answer = clue.find('.answer').text().split('A. ').join('').replace(/[ \-']/g, ''),
            letteridx = $('.puzzleholder td[data-' + direction + '-word="' + id + '"]').index(cell),
            correctLetter = answer[letteridx].toUpperCase();
        oApp.addLetterToSquare(correctLetter, cell.data('square-id'));
    });

};


Crosswordbase.prototype.showHideReveals = function () {
    oApp.removeAllCheckTypes();
    oApp.showSolutionInGrid();
};

Crosswordbase.prototype.areChecksShowing = function () {

    var checksShowing = $('a', $('#check-button')).hasClass('checks-showing') || $('#triggerCheckOptions').hasClass('on');

    return checksShowing;

};


Crosswordbase.prototype.showChecks = function () {

    oApp.hideSolution();

    var oButton = $('#check-button');


    $('a', oButton).addClass('checks-showing');
    //$('#crossword-holder').addClass('check');
    $('td.selected-word').addClass('faux-selected-word').removeClass('selected-word');
    $('td.current').addClass('faux-current').removeClass('current');

    //  check across clues
    $('ul.clues li', '#acrossholder').each(function () {
        var clue = $(this);
        var clueid = clue.data('word-id');
        var answer = clue.find('.answer');
        var answertext = answer.text().split('A. ').join('').replace(/[ \-']/g, '');
        if (oApp.highlightWrongLettersByWordID(clueid, answertext) === false) {
            clue.addClass('error');
        } else {
            clue.addClass('correct');
        }

    });

    //  check down clues
    $('ul.clues li', '#downholder').each(function () {
        var clue = $(this);
        var clueid = clue.data('word-id');
        var answer = clue.find('.answer');
        var answertext = answer.text().split('A. ').join('').replace(/[ \-']/g, '');
        if (oApp.highlightWrongLettersByWordID(clueid, answertext) === false) {
            clue.addClass('error');
        } else {
            clue.addClass('correct');
        }

    });

    if (oApp.checkAnswersAgainstSolution()) {
        oApp.showHideOverlayForBrandByType('correct-solution');
        utag.link({event_engagement_action: 'engagement', event_engagement_name: 'crosswords:puzzle completed', event_engagement_browsing_method: 'type'});
    }

};


Crosswordbase.prototype.hideChecks = function () {

    var oButton = $('#check-button');

    $('a', oButton).removeClass('checks-showing');
    $('#crossword-holder').removeClass('check');
    $('td.faux-selected-word').addClass('selected-word').removeClass('faux-selected-word');
    $('td.faux-current').addClass('current').removeClass('faux-current');

    $('#triggerCheckOptions').removeClass('on');

};



Crosswordbase.prototype.highlightWrongLettersByWordID = function (iWordID, sAnswer) {
    var k = 0, l = 0, el;
    $(this.sGridSquareHolderSelector, oApp.oPuzzle).each(function () {
        el = $(this);
        if (el.data('across-word') == iWordID || el.data('down-word') == iWordID) {
            var sUserAnswer = el.find('.letter').html().toUpperCase();
            var sRealAnswer = sAnswer[k].toUpperCase();
            if (sUserAnswer != sRealAnswer) {
                el.addClass('error');
                l = l + 1;
            } else {
                el.addClass('correct');
            }
            k = k + 1;
        }
    });
    if (l === 0) {
        return true;
    }
    return false;
};


Crosswordbase.prototype.fixClueHeaders = function () {

    this.adjustGridHolderPadding();

};


Crosswordbase.prototype.moveGridToShowClue = function (iSquareID) {

    $('.puzzle-scroll').stop();

    var oTmp = {},
        newX,
        newY;

    oTmp.oSquare = $('td:eq(' + (iSquareID - 1) + ')', '.puzzleholder');
    oTmp.currentDir = oApp.sCurrentSelectedWordDir;

    oTmp.squareLength = oTmp.oSquare.outerWidth();
    oTmp.squareId = oTmp.oSquare.attr('data-' + oTmp.currentDir + '-word');
    if (oTmp.oSquare.offset() === undefined) {
        return false;
    }
    oTmp.squareT = oTmp.oSquare.offset().top || false;
    oTmp.squareL = oTmp.oSquare.offset().left;

    oTmp.sq1 = $("td[data-" + oTmp.currentDir + "-word='" + oTmp.squareId + "']").first();
    if (oTmp.sq1.offset() === undefined) {
        return false;
    }
    oTmp.sq1X = oTmp.sq1.offset().left;
    oTmp.sq1Y = oTmp.sq1.offset().top;

    oTmp.puzzleX = $('.puzzleholder').offset().left;
    oTmp.puzzleY = $('.puzzleholder').offset().top;
    oTmp.puzzleH = $('.puzzleholder').height();

    oTmp.grid = $('.puzzle-scroll');
    oTmp.gridW = oTmp.grid.outerWidth();
    oTmp.gridH = oTmp.grid.outerHeight();

    oTmp.clueLength = $("td[data-" + oTmp.currentDir + "-word='" + oTmp.squareId + "']").length;
    oTmp.clueLongEdgeSize = oTmp.clueLength * oTmp.squareLength;

    if (oTmp.currentDir == 'across') {
        if (oTmp.clueLongEdgeSize > oTmp.gridW) {
            oTmp.message = 'Across: Clue wider than display';
            newX = oTmp.squareL - oTmp.puzzleX - (oTmp.gridW / 2);
            newY = oTmp.squareT - oTmp.puzzleY - (oTmp.gridH / 2);
        } else {
            oTmp.message = 'Across: Clue NOT wider than display';
            newX = oTmp.sq1X - ((oTmp.gridW - oTmp.clueLongEdgeSize) / 2) - oTmp.puzzleX - 15;
            newY = oTmp.squareT - oTmp.puzzleY - (oTmp.gridH / 2);
        }
    }

    if (oTmp.currentDir == 'down') {
        if (oTmp.clueLongEdgeSize > oTmp.gridH) {
            oTmp.message = 'DOWN: Clue taller than display';
            newX = oTmp.squareL - oTmp.puzzleX - (oTmp.gridW / 2);
            newY = oTmp.squareT - oTmp.puzzleY - (oTmp.gridH / 2);
        } else {
            oTmp.message = 'DOWN: Clue NOT taller than display';
            newX = oTmp.squareL - oTmp.puzzleX - (oTmp.gridW / 2);
            newY = oTmp.sq1Y - ((oTmp.gridH - oTmp.clueLongEdgeSize) / 2) - oTmp.puzzleY;
        }
    }

    $('.puzzle-scroll').moveScrollableAreaY(
        (newY),
        {duration: 500, offsetTop : '0'}
    ).moveScrollableAreaX(
        (newX),
        {duration: 500, offsetLeft : '0'}
    );

};


Crosswordbase.prototype.checkAnswersAgainstSolution = function () {

    var cellValue,
        userValuesString = '',
        userValuesHashed = '',
        solutionHashed = this.oJSON.settings.solution_hashed,
        emptyCellChar = ' ';

    $(oApp.sGridSquareHolderSelector, oApp.oPuzzle).each(function () {
        cellValue = $(this).find('.letter').html();
        userValuesString += cellValue === '' ? emptyCellChar : cellValue;
    });
    userValuesHashed = this.hasher(userValuesString);
    if (userValuesHashed !== '' && userValuesHashed === solutionHashed) {
        return true;
    }
    return false;

};


Crosswordbase.prototype.adjustGridHolderPadding = function () {

    var keys = $('.keyboard-holder').outerHeight(),
        btns = $('.action-buttons').outerHeight(),
        clue = $('.individual-clue-holder').outerHeight(),
        padd = parseInt(keys, 10) + parseInt(btns, 10) + parseInt(clue, 10);
    //$('#crossword-grid-holder').css('padding-bottom', padd + 'px');
};


Crosswordbase.prototype.adjustGridHolderPaddingForKeyboardExpand = function (min) {

    if (this.keyboardHeight === undefined) {
        this.keyboardHeight = $('.keyboard-holder').outerHeight();
    }
    if (min === undefined) {
        min = false;
    }
    var keys = 0;
    if (min == false) {
        keys = this.keyboardHeight;
    }
    var btns = $('.action-buttons').outerHeight(),
        clue = $('.individual-clue-holder').outerHeight(),
        padd = parseInt(keys, 10) + parseInt(btns, 10) + parseInt(clue, 10);

    $('#crossword-grid-holder').css('padding-bottom', padd + 'px');
};


/**
* function to determine whether using a touch device
*
*/
Crosswordbase.prototype.isTouchDevice = function () {
    return $('html').hasClass('touch');
};


Crosswordbase.prototype.isLastSquareOfWord = function (squareid, direction) {

    var RC = this.getRCfromSquareID(squareid);
    var nextSquareID;

    if (oApp.sCurrentSelectedWordDir == 'across') {
        if (RC.c >= this.iColCount) {
            return true;
        }
        nextSquareID = squareid + 1;
        if ($("td[data-square-id='" + nextSquareID + "']").hasClass('blank')) {
            return true;
        }
        if ($("td[data-square-id='" + nextSquareID + "']").hasClass('bar-grid-border-l')) {
            return true;
        }
    }
    if (oApp.sCurrentSelectedWordDir == 'down') {
        if (RC.r >= this.iRowCount) {
            return true;
        }
        nextSquareID = squareid + this.iColCount;
        if ($("td[data-square-id='" + nextSquareID + "']").hasClass('blank')) {
            return true;
        }
        if ($("td[data-square-id='" + nextSquareID + "']").hasClass('bar-grid-border-t')) {
            return true;
        }
    }
    return false;
};


Crosswordbase.prototype.getRCfromSquareID = function (squareid) {

    var data = {};

    data.c = squareid % this.iColCount;
    if (data.c == 0) {
        data.c = this.iColCount;
    }
    data.r = Math.ceil(squareid / this.iColCount);

    return data;

};

Crosswordbase.prototype.getSquareIDfromRC = function (row, column) {

    var id = ((row - 1) * this.iColCount) + column;

    return id;

};


/**
 * converts any HTML entities in a string to the decimal equivalent
 * @param {string} text
 * @returns {string}
 */
Crosswordbase.prototype.htmlEntitiesToDecimalCode = function (text) {

    'use strict';

    var aCodes = [],
        i;

    aCodes[60] =   'lt';
    aCodes[62] =   'gt';
    aCodes[162] =  'cent';
    aCodes[163] =  'pound';
    aCodes[164] =  'curren';
    aCodes[165] =  'yen';
    aCodes[171] =  'laquo';
    aCodes[187] =  'raquo';
    aCodes[192] =  'Agrave';
    aCodes[193] =  'Aacute';
    aCodes[194] =  'Acirc';
    aCodes[195] =  'Atilde';
    aCodes[196] =  'Auml';
    aCodes[197] =  'Aring';
    aCodes[198] =  'AElig';
    aCodes[199] =  'Ccedil';
    aCodes[200] =  'Egrave';
    aCodes[201] =  'Eacute';
    aCodes[202] =  'Ecirc';
    aCodes[203] =  'Euml';
    aCodes[204] =  'Igrave';
    aCodes[205] =  'Iacute';
    aCodes[206] =  'Icirc';
    aCodes[207] =  'Iuml';
    aCodes[209] =  'Ntilde';
    aCodes[210] =  'Ograve';
    aCodes[211] =  'Oacute';
    aCodes[212] =  'Ocirc';
    aCodes[213] =  'Otilde';
    aCodes[214] =  'Ouml';
    aCodes[216] =  'Oslash';
    aCodes[217] =  'Ugrave';
    aCodes[218] =  'Uacute';
    aCodes[219] =  'Ucirc';
    aCodes[220] =  'Uuml';
    aCodes[221] =  'Yacute';
    aCodes[222] =  'THORN';
    aCodes[223] =  'szlig';
    aCodes[224] =  'agrave';
    aCodes[225] =  'aacute';
    aCodes[226] =  'acirc';
    aCodes[227] =  'atilde';
    aCodes[228] =  'auml';
    aCodes[229] =  'aring';
    aCodes[230] =  'aelig';
    aCodes[231] =  'ccedil';
    aCodes[232] =  'egrave';
    aCodes[233] =  'eacute';
    aCodes[234] =  'ecirc';
    aCodes[235] =  'euml';
    aCodes[236] =  'igrave';
    aCodes[237] =  'iacute';
    aCodes[238] =  'icirc';
    aCodes[239] =  'iuml';
    aCodes[240] =  'eth';
    aCodes[241] =  'ntilde';
    aCodes[242] =  'ograve';
    aCodes[243] =  'oacute';
    aCodes[244] =  'ocirc';
    aCodes[245] =  'otilde';
    aCodes[246] =  'ouml';
    aCodes[248] =  'oslash';
    aCodes[249] =  'ugrave';
    aCodes[250] =  'uacute';
    aCodes[251] =  'ucirc';
    aCodes[252] =  'uuml';
    aCodes[253] =  'yacute';
    aCodes[254] =  'thorn';
    aCodes[255] =  'yuml';
    aCodes[732] =  'tilde';
    aCodes[8194] = 'ensp';
    aCodes[8195] = 'emsp';
    aCodes[8211] = 'ndash';
    aCodes[8212] = 'mdash';
    aCodes[8216] = 'lsquo';
    aCodes[8217] = 'rsquo';
    aCodes[8220] = 'ldquo';
    aCodes[8221] = 'rdquo';
    aCodes[8249] = 'lsaquo';
    aCodes[8250] = 'rsaquo';

    for (i in aCodes) {
        if (aCodes.hasOwnProperty(i)) {
            text = text.split('&' + aCodes[i] + ';').join('&#' + i + ';');
            text = text.split('&amp;' + aCodes[i] + ';').join('&#' + i + ';');
        }
    }

    return text;
};


Crosswordbase.prototype.initialiseTagging = function () {

    'use strict';

    var puzzleType = oApp.puzzle.JSON.data.copy.crosswordtype;
    var puzzleId = oApp.puzzle.JSON.data.copy.id;

    utag_data = {

        orientation: screen.width > screen.height ? 'landscape' : 'portrait', //landscape/portrait
        article_id: puzzleId,
        article_id_type: puzzleType,
        article_name: 'puzzles:crosswords:' + puzzleType + ':' + puzzleId,
        article_publish_timestamp: oApp.puzzle.JSON.data.copy['date-publish-analytics'], // Publish time
        page_name: this.analyticsPageSiteName + ':puzzles:crosswords:' + puzzleType + ':' + puzzleId, // Name of page
        page_section: this.analyticsPageSiteName + ':puzzles', //fixed
        page_section_2: this.analyticsPageSiteName + ':puzzles:crosswords', //fixed
        page_site_name: this.analyticsPageSiteName,
        page_site_region: 'uk', //hosted on the .co.uk website
        page_type: 'puzzles:crosswords' // fixed

    };

    var crossword_analytics_profile = this.analyticsProfile;
    var crossword_analytics_platform = this.analyticsPlatform;

    //  only initialise if token replacement has been done and is not blank
    if (crossword_analytics_platform !== '@_ANALYTICS_' + 'ENVIRONMENT_@' && crossword_analytics_platform !== '' && crossword_analytics_profile !== '') {
        (function (a, b, c, d) {
            a = '//tags.tiqcdn.com/utag/newsinternational/' + crossword_analytics_profile + '/' + crossword_analytics_platform + '/utag.js';
            b = document;
            c = 'script';
            d = b.createElement(c);
            d.src = a;
            d.type = 'text/java' + c;
            d.async = true;
            a = b.getElementsByTagName(c)[0];
            a.parentNode.insertBefore(d, a);
        })();  //  fails lint be supplied code
    } else {
        utag = {};
        utag.link = function (x) {
            if (console.stack !== undefined && location.search.indexOf('debug=analytics') > -1) {
                console.stack(x.event_engagement_name);
            }
        };
    }

};


$.fn.moveScrollableAreaY = function (target, options, callback) {
    if (typeof options == 'function' && arguments.length == 2) { callback = options; options = target; }
    var settings = $.extend({
        scrollTarget  : target,
        offsetTop     : 50,
        duration      : 50,
        easing        : 'swing'
    }, options);
    return this.each(function () {
        var scrollPane = $(this);
        var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
        var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - parseInt(settings.offsetTop, 10);
        scrollPane.clearQueue().animate({scrollTop : scrollY }, parseInt(settings.duration, 10), settings.easing, function () {
            if (typeof callback == 'function') { callback.call(this); }
        });
    });
};


$.fn.moveScrollableAreaX = function (target, options, callback) {
    if (typeof options == 'function' && arguments.length == 2) { callback = options; options = target; }
    var settings = $.extend({
        scrollTarget  : target,
        offsetLeft     : 0,
        duration      : 50,
        easing        : 'swing'
    }, options);
    return this.each(function () {
        var scrollPane = $(this);
        var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
        var scrollX = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().left + scrollPane.scrollLeft() - parseInt(settings.offsetLeft, 10);
        scrollPane.clearQueue().animate({scrollLeft : scrollX }, parseInt(settings.duration, 10), settings.easing, function () {
            if (typeof callback == 'function') { callback.call(this); }
        });
    });
};

Crosswordbase.prototype.autoSizeGridVersion1 = function () {

    this.puzzleWidth = this.puzzleWidth || $('#ourpuzzle').outerWidth();
    this.puzzleHeight = this.puzzleHeight || $('#ourpuzzle').outerHeight();

    var cellDimension;
    var numberOfColumns = 5;
    var stagePadding = 0;

    var viewportHeight = $(window).height();
    var viewportWidth = $(window).width();

    var stretchKeyboard = true,
        baseKeyboardWidth,
        baseKeyboardHeight;

    if (viewportWidth <= 611) {
        baseKeyboardHeight = 153;
        baseKeyboardWidth = 320;
    } else if (viewportWidth <= 1023) {
        baseKeyboardHeight = 200;
        baseKeyboardWidth = 768;
        stagePadding = 20;
    } else if (viewportWidth == 1024) {
        baseKeyboardHeight = 200;
        baseKeyboardWidth = 1024;
        stagePadding = 20;
    } else {
        baseKeyboardHeight = 200;
        stretchKeyboard = false;
        stagePadding = 20;
    }

    var headerHeight = $('.page-header').outerHeight();
    var titleHeight = $('.title-info-holder').outerHeight();
    var actionButtonHeight = $('#actions').outerHeight();
    var actionButtonWidth = $('#actions').outerWidth();
    var cluesWidth = $('.clues-list-holder').outerWidth();

    var keyboardScale = 1;
    if (stretchKeyboard === true) {
        keyboardScale = (viewportWidth / baseKeyboardWidth);
    }

    var keyboardHeight =  keyboardScale * baseKeyboardHeight;
    if ($('html').hasClass('no-touch')) {
        keyboardHeight = 0;
    }

    var individualClueHeight = $('.individual-clue-holder').outerHeight();

    var numberOfIcons = $('.action-buttons li:visible').size();
    var iconWidth = 100 / numberOfIcons;

    var setHeight = viewportHeight - titleHeight - actionButtonHeight - keyboardHeight - individualClueHeight - (stagePadding * 2);
    var setWidth = viewportWidth - (stagePadding * 2);
    var setTop = headerHeight + titleHeight + stagePadding;
    var setLeft = stagePadding;
    if (viewportWidth >= 611) {
        setHeight = viewportHeight - titleHeight - actionButtonHeight - keyboardHeight - (stagePadding * 2);
        setWidth = viewportWidth - cluesWidth - (stagePadding * 2);
        setTop = headerHeight + titleHeight + stagePadding;
        setLeft = stagePadding;
    }

    var transformScale = setHeight / this.puzzleWidth;
    var marginVerticalOffsetRequired = false;
    if (setHeight > setWidth) {
        //if height is greater than the width, then set the scale using the width to avoid overflow
        transformScale = setWidth / this.puzzleWidth;
        marginVerticalOffsetRequired = true;
    }

    var marginVerticalOffset = 0;
    if (marginVerticalOffsetRequired === true) {
        marginVerticalOffset = (setHeight - (this.puzzleHeight * transformScale)) / 2;
    }

    //  create the playable area
    $('.playable-area').css('height', setHeight + 'px').css('width', setWidth + 'px').css('top', setTop + 'px').css('left', setLeft + 'px');

    //  set the percentage width of the action buttons
    //$('.action-buttons li').css('width', iconWidth + '%');

    //  scale the grid to fill the available space
    $('.puzzle').css('-webkit-transform', 'scale(' + transformScale + ',' + transformScale + ')').css('transform', 'scale(' + transformScale + ',' + transformScale + ')').css('margin-top', +marginVerticalOffset + 'px');

    if (stretchKeyboard === true) {
        //Scale the keyboard to fill the width
        $('.keyboard-holder').css('-webkit-transform', 'scale(' + keyboardScale + ',' + keyboardScale + ')').css('transform', 'scale(' + keyboardScale + ',' + keyboardScale + ')').css('height', keyboardHeight + 'px');
    }

    //  controls
    $('.controls').css('bottom', keyboardHeight + 'px').css('width', setWidth + stagePadding + 'px');
    $('.clues-list-holder').css('padding-bottom', keyboardHeight + individualClueHeight + 'px');

    //  set the width of the action buttons holder
    $('.action-buttons, .title-info').css('padding-left', stagePadding + 10 + 'px').css('padding-right', stagePadding + 10 + 'px');


    $('.controls').css('bottom', keyboardHeight + 'px');

};

Crosswordbase.prototype.autoSizeGridVersion2 = function () {

    var cellDimension = 29,
        numberOfColumns = this.puzzle.JSON.data.copy.gridsize.cols,
        numberOfRows = this.puzzle.JSON.data.copy.gridsize.rows,
        puzzleWidth = numberOfColumns * cellDimension + 3,
        puzzleHeight = numberOfRows * cellDimension + 3,
        stagePadding = 0,
        viewportHeight = $(window).height(),
        viewportWidth = $(window).width(),
        stretchKeyboard = true,
        baseKeyboardWidth,
        baseKeyboardHeight,
        headerHeight = $('.page-header').outerHeight(),
        titleHeight = $('.title-info-holder').outerHeight(),
        actionButtonHeight = $('#actions').outerHeight(),
        actionButtonWidth = $('#actions').outerWidth(),
        cluesWidth = $('.clues-list-holder').outerWidth(),
        keyboardHeight =  $('.keyboard-holder').outerHeight(),
        individualClueHeight = $('.individual-clue-holder').outerHeight(),
        burgerMenuHeight = $('.burger-menu').outerHeight(),
        numberOfIcons = $('.action-buttons li:visible').size(),
        iconWidth = 100 / numberOfIcons,
        setHeight,
        setWidth,
        setTop,
        setLeft,
        setBottom,
        cluesTop = 0,
        cluesBottom,
        transformScale,
        marginVerticalOffsetRequired = false,
        marginVerticalOffset = 0,
        marginHorizontalOffsetRequired = false,
        marginHorizontalOffset = 0,
        zoomedScale,
        zoomedVerticalOffset,
        zoomedHorizontalOffset,
        startHeight,
        startWidth,
        zoomHeight,
        zoomWidth;



    if (viewportWidth <= 611) {
        stagePadding = 10;
    } else {
        stagePadding = 10;
    }

    if ($('html').hasClass('no-touch')) { keyboardHeight = 0; }

    setHeight = viewportHeight - titleHeight - actionButtonHeight - keyboardHeight - individualClueHeight - burgerMenuHeight;
    setWidth = viewportWidth - (stagePadding * 2);
    setTop = headerHeight + titleHeight + burgerMenuHeight;
    setBottom = actionButtonHeight + keyboardHeight + individualClueHeight;
    setLeft = stagePadding;

    if (viewportWidth >= 500) {
        setHeight = viewportHeight - titleHeight - actionButtonHeight - keyboardHeight - individualClueHeight - burgerMenuHeight - headerHeight;
        setWidth = viewportWidth - (stagePadding * 2);
        setTop = headerHeight + titleHeight;
        setLeft = stagePadding;
    }

    if (viewportWidth >= 750) {
        setHeight = viewportHeight - titleHeight - actionButtonHeight - keyboardHeight - headerHeight;
        setWidth = viewportWidth - cluesWidth - (stagePadding * 2);
        setTop = headerHeight + titleHeight;
        setLeft = stagePadding;
        cluesTop = setTop;
        cluesBottom = keyboardHeight + 10;
    }

    if (viewportWidth >= 1024) {
        setHeight = viewportHeight - titleHeight - keyboardHeight - headerHeight - 10;
        setWidth = viewportWidth - cluesWidth - (stagePadding * 2);
        setTop = headerHeight + titleHeight;
        setLeft = stagePadding;
        cluesTop = setTop + actionButtonHeight + 10;
        cluesBottom = keyboardHeight + 10;
        setBottom = keyboardHeight + individualClueHeight;
    }

    if (puzzleHeight > puzzleWidth) {
        //if height is greater than the width, then set the scale using the height to avoid overflow
        transformScale = setHeight / puzzleHeight;
        if ((transformScale * puzzleWidth) > setWidth) {
            transformScale = setWidth / puzzleWidth;
        }
    }

    if (puzzleWidth >= puzzleHeight) {
        //if width is greater than the height, then set the scale using the width to avoid overflow
        transformScale = setWidth / puzzleWidth;
        marginVerticalOffsetRequired = true;
        if ((transformScale * puzzleHeight) > setHeight) {
            transformScale = setHeight / puzzleHeight;
        }

    }

    oApp.cluesTop = cluesTop;

    if (oApp.puzzle.JSON.data.copy.gridsize.type !== undefined && oApp.puzzle.JSON.data.copy.gridsize.type.toLowerCase() === 'mini') {
        //  do not reset
    } else {
        if (transformScale > 1.2) {
            transformScale = 1.2;
        } else if (transformScale < 1) {
            transformScale = 1;
        }
        if (viewportWidth >= 1024 && transformScale < 1) {
            transformScale = 1;
        }
    }

    zoomedScale = transformScale * 2;
    $('.puzzle').attr('transformscale', transformScale);
    $('.puzzle').attr('zoomedscale', zoomedScale);


    if (transformScale < 1) {
        startHeight = (puzzleHeight * transformScale);
    } else {
        startHeight = (puzzleHeight);
    }
    $('.puzzle').attr('startheight', startHeight);
    zoomHeight = (puzzleHeight);
    $('.puzzle').attr('zoomheight', zoomHeight);

    marginHorizontalOffset = (setWidth - (puzzleWidth * transformScale)) / 2;
    marginHorizontalOffset = marginHorizontalOffset < 0 ? 0 : marginHorizontalOffset;

    zoomedHorizontalOffset = 0;

    if (transformScale < 1) {
        startWidth = (puzzleWidth * transformScale);
    } else {
        startWidth = (puzzleWidth);
    }
    $('.puzzle').attr('startwidth', startWidth);
    zoomWidth = (puzzleWidth);
    $('.puzzle').attr('zoomwidth', zoomWidth);



    //  create the playable area
    $('.playable-area').css('bottom', setBottom + 'px').css('width', setWidth + 'px').css('top', setTop + 'px').css('left', setLeft + 'px');

    //  set the percentage width of the action buttons
    $('.action-buttons li').css('width', iconWidth + '%');

    // position the clues and the fixed clues header for landscape ipad
    $('.clues-list-holder').css('top', cluesTop + 'px').css('bottom', cluesBottom + 'px');
    $('.ios-h2-across, .ios-h2-down').css('top', cluesTop + 'px');

    $('.title-info-holder').css('top', headerHeight + 'px');
    $('.timer').css('top', headerHeight + 10 + 'px');
    $('.burger-controls').css('top', headerHeight + 5 + 'px');

    //scale the puzzle
    $('.puzzle').css('-webkit-transform', 'scale(' + transformScale + ',' + transformScale + ')').css('transform', 'scale(' + transformScale + ',' + transformScale + ')').css('width', startWidth + 'px').css('height', startHeight + 'px');
    $('.puzzle-scroll').css('padding-left', marginHorizontalOffset + 'px');

    $('.puzzle').attr('paddingleft', marginHorizontalOffset);
    $('.puzzle').attr('zoomedpaddingleft', zoomedHorizontalOffset);





    //position the action buttons and the individual clue holder
    $('.action-buttons').css('bottom', keyboardHeight + 'px').css('top', 'auto');
    $('.individual-clue-holder').css('bottom', keyboardHeight + actionButtonHeight + 'px').css('top', 'auto');

    if (viewportWidth < 750) {
        $('.clues-list-holder').css('bottom', keyboardHeight + actionButtonHeight + 'px').css('top', headerHeight + 'px');
    } else {
        $('.clues-list-holder').css('bottom', keyboardHeight + 10 + 'px');
    }

    //action buttons mover above clues in landscape ipad
    if (viewportWidth >= 1024) {
        $('.action-buttons').css('top', setTop + 'px').css('bottom', 'auto');
    } else {
        $('.action-buttons').css('bottom', cluesBottom - 10 + 'px').css('top', 'auto');
    }
};

Crosswordbase.prototype.autoSizeGrid = function () {

    $('#crossword-holder').removeClass('grid-zoomed-in');

    switch (this.puzzle.JSON.data.copy.publisher) {

    case 'The Times':
    case 'The Times T2 Puzzles':
    case 'The Sunday Times':
    case 'The Wall Street Journal':
        this.autoSizeGridVersion2();
        break;

    case 'The Sun':
        this.autoSizeGridVersion1();
        break;

    default:
        this.autoSizeGridVersion2();
        break;

    }

};

Crosswordbase.prototype.hideBurgerMenu = function () {
    $('.burger-menu').removeClass('active');
    $('.burger-actions-holder').removeClass('open');
};

Crosswordbase.prototype.hideIconPopups = function () {
    $('.action-buttons .action-popout').removeClass('active');
};


$(window).resize(function () {
    var width = $(window).width(),
        height = $(window).height();
    if (width > height) {
        $('#crossword-holder').removeClass('clues-maximised');
    }
    $('#crossword-holder').removeClass('keyboard-minimised');
    if (oApp.doAutoSizeGridOnResize === true) {
		if ($('body').hasClass('no-resize') && $('html').hasClass('touch')) {
            //
		} else {
			oApp.autoSizeGrid();
		}
    }
});

Crosswordbase.prototype.getCellIdFromColRow = function (col, row) {

    'use strict';

    var o = this,
        cellId = ((row - 1) * o.puzzle.settings.colCount) + col;

    return cellId;

};

/**
 * get the row and col of a cell with a specified id
 *
 * @param {int} id - cell id
 * @returns {object}
 */
Crosswordbase.prototype.getColRowFromCellId = function (id) {

    'use strict';

    var o = this,
        colRow = {};

    colRow.row = Math.ceil(id / o.puzzle.settings.colCount);
    colRow.col = Math.ceil(id - ((colRow.row - 1) * o.puzzle.settings.colCount));

    return colRow;

};


/**
 * do we want to take over control of keyboard clicks
 */
Crosswordbase.prototype.areWeOverridingKeyPresses = function () {

    return $(document.activeElement).closest('form').length < 1;

};

Crosswordbase.prototype.hideNativeKeyboard = function (id) {
    $('input').blur();
};

Crosswordbase.prototype.userTappedMobileKeyboard = function () {
    if (!oApp.bKeyboardSounds || !oApp.supports.audio) {
        return false;
    }
    oApp.audio.keyboard.play();
};

Crosswordbase.prototype.checkBrowserSupport = function () {
    var browserTests = {
        audio: document.createElement('audio'),
        video: document.createElement('video')
    };
    this.supports = {
        audio: browserTests.audio.play ? true : false,
        video: browserTests.video.play ? true : false
    }
};
