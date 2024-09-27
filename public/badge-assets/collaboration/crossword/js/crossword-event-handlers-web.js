/*
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
*/
/**
The event handler for Brain Trainer puzzles based on the web.
This file should be called from the main class for Brain Trainer puzzles.
Events should be handled assuming they are being triggered by a web browser.
**/

/*globals $, Crosswordbase, oPuzzle, utag*/
/*zzjslint nomen:true, eqeq: true, vars: true, sloppy: true, regexp: true,*/
/*jslint eqeq: true*/

/**
 * method to add event handlers to this puzzle - web only
 * @returns {boolean}
 */
Crosswordbase.prototype.addEventHandlers = function () {

    'use strict';

    var oApp = this,
        clickortouchstart = oApp.device.settings.isTouch ? 'touchend' : 'click';

    oApp.dragging = false;

    //  keep track of whether we are dragging
    $('body').on('touchstart', function () {
        oApp.dragging = false;
    });
    $('body').on('touchmove', function () {
        oApp.dragging = true;
    });

    //  user selects a square
    $(oApp.sGridSquareHolderSelector, oApp.oPuzzle).each(function () {
        $(this).on(clickortouchstart, function (event) {
            if (oApp.dragging === false) {
                oApp.handleSquareSelect($(this));
            }
            event.preventDefault();
        });
    });

    //  user clicking onscreen keyboard (app)
    $('li', 'ul.keys').each(function () {
        $(this).on(clickortouchstart, function (event) {
            if (oApp.isSolutionShowing()) {
                oApp.showHideSolutions();
            }
            if (oApp.areChecksShowing()) {
                oApp.showhideChecks();
            }
            oApp.removeAllCheckTypes();
            oApp.handleOnscreenKeyClick($(this), event);
            //event.preventDefault();
        });
    });

    //  user using physical keyboard (web)
    $(document).keydown(function (e) {
        if (oApp.isSolutionShowing()) {
            oApp.showHideSolutions();
        }
        if (oApp.areChecksShowing()) {
            oApp.showhideChecks();
        }
        oApp.hideBurgerMenu();
        // some browsers use keycode and some use which - use whatever is available and don't depend on js framework
        var iAsciiCode = e.keyCode || e.which;
        if (oApp.bKeyboardActive == true && oApp.areWeOverridingKeyPresses()) {
            oApp.removeAllCheckTypes();
            oApp.handleKeyCode(iAsciiCode, e);
            if ((iAsciiCode >= 16 && iAsciiCode <= 27) || (iAsciiCode >= 91 && iAsciiCode <= 93) || (iAsciiCode >= 112 && iAsciiCode <= 123)) {
                //  do not override keys presses
            } else {
                e.preventDefault();
            }
        }
    });

    //  user selects a clue set
    $('ul.clues-select li a', '.clues-list-holder').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.handleClueSetSelection($(this));
            event.preventDefault();
        });
    });

    //  user selects a clue in clue list
    $('ul.clues li', oApp.sClueListHolder).each(function () {
        $(this).on(clickortouchstart, function (event) {
            if (oApp.dragging === false) {
                oApp.handleClueSelection($(this));
            }
            event.preventDefault();
        });
    });

    //  user selects previous clue button
    $('.btn-prev', 'ul.next-prev').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showPreviousClue();
            event.preventDefault();
        });
    });

    //  user selects next clue button - #TODO use dmjs class
    $('.btn-next', 'ul.next-prev').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showNextClue();
            event.preventDefault();
        });
    });

    //  user selects clue view button - #TODO use dmjs class x2
    $('#clue-view-trigger').each(function () {
        $(this).on(clickortouchstart, function (event) {
            $('#clue-list').toggleClass('clue-view');
            event.preventDefault();
        });
    });

    //  user clicks clear button
    $('.reset-grid', '#actions').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.clearGridConfirm();
            event.preventDefault();
        });
    });

    //  expand grid
    $('.zoom-in', 'ul.action-buttons').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.zoomGridIn(event);
            event.preventDefault();
        });
    });

    //  shrink grid
    $('.zoom-out', 'ul.action-buttons').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.zoomGridOut(event);
            event.preventDefault();
        });
    });

    //  minimise keyboard
    $('.keyboard-collapse', '#keyBoard').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.minimiseKeyboard();
            oApp.fixClueHeaders();
            event.preventDefault();
        });
    });
    $('.keyboard-collapse').on(clickortouchstart, function (event) {
        oApp.minimiseKeyboard();
        oApp.adjustGridHolderPaddingForKeyboardExpand(true);
        event.preventDefault();
    });
    $('.keyboard-expand').on(clickortouchstart, function (event) {
        oApp.expandKeyboard();
        oApp.adjustGridHolderPaddingForKeyboardExpand();
        event.preventDefault();
    });

    //  expand keyboard
    $('.keyboard-expand', '#keyBoard').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.expandKeyboard();
            oApp.fixClueHeaders();
            event.preventDefault();
        });
    });

    //  keyboard
    $('.keyboard-icon', '#keyBoard').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.toggleKeyboard();
            event.preventDefault();
        });
    });

    //  minimise clues
    $('.hide-clues', '#actions').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.minimiseClues();
            oApp.fixClueHeaders();
            event.preventDefault();
        });
    });

    //  expand clues
    $('.show-clues', '#actions').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.expandClues();
            oApp.fixClueHeaders();
            oApp.showClueByID(oApp.iCurrentSelectedClueID);
            event.preventDefault();
        });
    });


    //  minimise clues
    $('ul.expand-minimise .btn-minimise', '.clues-list-holder').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.minimiseClues();
            oApp.fixClueHeaders();
            event.preventDefault();
        });
    });

    //  expand clues
    $('ul.expand-minimise .btn-expand', '.clues-list-holder').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.expandClues();
            oApp.fixClueHeaders();
            event.preventDefault();
        });
    });

    //  close an overlay
    $('.dmsjsOverlayClose').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.hideClosestOverlay(el);
            event.preventDefault();
        });
    });

    //  show settings
    $('.settings', '#actions').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showSettings();
            event.preventDefault();
        });
    });

    //  Reveal
    $('#triggerRevealOptions a').first().each(function () {
        $(this).on(clickortouchstart, function (event) {
            var currentyActive = $(this).closest('li').hasClass('on');
            oApp.removeAllCheckTypes();
            if (currentyActive) {
                $('#triggerRevealOptions').removeClass('on');
                $('#triggerRevealOptions .action-popout').removeClass('active');
                return false;
            }
            $(this).closest('li').find('.action-popout').toggleClass('active');
            $(this).closest('li').toggleClass('on');
            event.preventDefault();
        });
    });

    //  Check
    $('#triggerCheckOptions a').first().each(function () {
        $(this).on(clickortouchstart, function (event) {
            var currentyActive = $(this).closest('li').hasClass('on');
            oApp.removeAllCheckTypes();
            if (currentyActive) {
                $('#triggerCheckOptions').removeClass('on');
                $('#triggerCheckOptions .action-popout').removeClass('active');
                return false;
            }
            $(this).closest('li').find('.action-popout').toggleClass('active');
            $(this).closest('li').toggleClass('on');
            event.preventDefault();
        });
    });

    $('#triggerCheckGrid').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showHideCheckOptions();
            event.preventDefault();
        });
    });

    $('.dmsjsOverlayClose', '#dmjsOverlayCheckOptions').on(clickortouchstart, function (event) {
        oApp.showhideChecks();
        event.preventDefault();
    });

    $('#dmjsDoCheckCell').on(clickortouchstart, function (event) {
        oApp.showCheckCell();
        oApp.hideOverlays();
        $('#triggerCheckOptions .action-popout').removeClass('active');
        $(this).closest('li').addClass('on');
        event.preventDefault();
    });

    $('#dmjsDoCheckWord').on(clickortouchstart, function (event) {
        oApp.showCheckWord();
        oApp.hideOverlays();
        $('#triggerCheckOptions .action-popout').removeClass('active');
        $(this).closest('li').addClass('on');
        event.preventDefault();
    });

    $('#dmjsDoRevealAllCells').on(clickortouchstart, function (event) {
        oApp.showHideReveals();
        oApp.hideOverlays();
        $('#triggerRevealOptions .action-popout').removeClass('active');
        $(this).closest('li').addClass('on');
        event.preventDefault();
    });

    $('#triggerCheck').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showHideSolutions();
            event.preventDefault();
        });
    });

    $('#dmjsDoRevealWord').on(clickortouchstart, function (event) {
        oApp.showRevealWord();
        $('#triggerRevealOptions .action-popout').removeClass('active');
        $(this).closest('li').removeClass('on');
        event.preventDefault();
    });

    $('#dmjsDoCheckAllCells').on(clickortouchstart, function (event) {
        oApp.showChecks();
        oApp.hideOverlays();
        $('#triggerCheckOptions .action-popout').removeClass('active');
        $(this).closest('li').addClass('on');
        event.preventDefault();
    });

    $('#submit-button').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showSubmit();
            event.preventDefault();
        });
    });

    //  submit confirm - yes
    $('.dmjsYes', '.submit-overlay').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.handleCompetitionFormSubmit(el);
            event.preventDefault();
        });
    });

    //  submit confirm - no
    $('.dmjsNo', 'ul.dmjsSubmitYesNo').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.hideClosestOverlay(el);
            event.preventDefault();
        });
    });

    //  reset confirm - yes
    $('.dmjsYes', 'ul.dmjsResetYesNo').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.hideClosestOverlay(el);
            oApp.clearGrid();
            event.preventDefault();
            utag.link({event_engagement_action: 'engagement', event_engagement_name: 'reset panel: confirmation', event_engagement_browsing_method: 'click'});
        });
    });

    //  test confirm - no
    $('.dmjsNo', 'ul.dmjsResetYesNo').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.hideClosestOverlay(el);
            event.preventDefault();
            utag.link({event_engagement_action: 'engagement', event_engagement_name: 'reset panel: abort', event_engagement_browsing_method: 'click'});
        });
    });

    //  click on clue box - across
    $('.across-clues .boxes .box').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.handleClueBoxSelectAcross(el);
            event.preventDefault();
        });
    });

    //  click on clue box - down
    $('.down-clues .boxes .box').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.handleClueBoxSelectDown(el);
            event.preventDefault();
        });
    });


    //  pencil mode for keyboards
    $('.btn-pencil').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.switchPencilMode(true);
            event.preventDefault();
        });
    });

    //  pen mode for keyboards
    $('.btn-pen').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.switchPencilMode(false);
            event.preventDefault();
        });
    });

    //  cycle through clue text size
    $('.toggle-text-size').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.toggleTextSize();
            event.preventDefault();
        });

    });

    //  toggle the column layout on large screens
    $('.toggle-column').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.toggleColumn();
            event.preventDefault();
        });
    });

    //  show the prize info
    $('.trigger-prize-info').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.showPrizeInfo();
            event.preventDefault();
        });
    });
    
    //  OVERLAYS
    //  when overlay bg or an overlay close button is clicked then hide the bg and all overlays
    $('.close-overlay').not('.do-not-auto-close').each(function () {
        var el = $(this);
        $(this).on(clickortouchstart, function (event) {
            oApp.hideClosestOverlay(el);
            event.preventDefault();
        });
    });


    //  switch clueset mode
    $('#switch-clueset-button').each(function () {
        $(this).on(clickortouchstart, function (event) {
            oApp.switchClueSet(1 - oApp.iCurrentClueSet);
            event.preventDefault();
        });
    });

    //  quickjump menu open/close
    $('body').on(clickortouchstart, '#navTrigger', function () {
        $(this).toggleClass('active');
        $('#quickJump').toggleClass('open');
        $('.menu-bg').fadeToggle();
        return false;
    });

    //  burger menu open/close
    $('body').on(clickortouchstart, '.burger-menu', function () {
        $(this).toggleClass('active');
        $('.burger-actions-holder').toggleClass('open');
        return false;
    });

    //  open address information
    $('body').on(clickortouchstart, '.jsToggleAddress', function () {
        $(this).hide();
        $('.extended-address-information').addClass('open');
        return false;
    });

    //  show competition terms
    $('body').on(clickortouchstart, '.jsCompetitionTerms', function () {
        $('.competition-form-content').hide();
        $('.competition-terms-content').show();
        return false;
    });

    //  show competition prize information
    $('body').on(clickortouchstart, '.jsCompetitionPrize', function () {
        $('.competition-form-content').hide();
        $('.competition-prize-content').show();
        return false;
    });

    //  back to competition form
    $('body').on(clickortouchstart, '.jsCompetitionBack', function () {
        $(this).closest('.competition-overlay-content').hide();
        $('.competition-form-content').show();
        return false;
    });



    $('#email_address').keyup(function () {
        $('.submiterror').html('');
    });

    $('#overlayCompleted').on(clickortouchstart, '.jsLinkMindGames', function () {
        var redirectURL = $(this).attr('href');
        oApp.correctSolutionMindGames();
        setTimeout(
            function () {
                window.location = redirectURL;
            },
            500
        );
        return false;
    });

    $('#overlayCompleted').on(clickortouchstart, '.jsPlayAgain', function () {
        var el = $(this);
        oApp.hideClosestOverlay(el);
        oApp.clearGrid();
        return false;
    });

    $('#jsCompetitionSubmitThanks').on(clickortouchstart, '.jsPlayAgain', function () {
        var el = $(this);
        oApp.hideClosestOverlay(el);
        oApp.clearGrid();
        return false;
    });

    $('body').on(clickortouchstart, '.jsStartOver', function () {
        var el = $(this);
        oApp.hideClosestOverlay(el);
        oApp.clearGrid();
        return false;
    });

    $('#overlayIncorrect').on(clickortouchstart, '.jsLinkMindGames', function () {
        var redirectURL = $(this).attr('href');
        oApp.incorrectSolutionMindGames();
        setTimeout(
            function () {
                window.location = redirectURL;
            },
            500
        );
        return false;
    });

    $('#showTimer').change(function () {
        oApp.toggleSettingShowTimer();
    });

    $('#skipCompleteAnswers').change(function () {
        oApp.toggleSettingAnswerSkipping();
    });

    $('#skipFilledSquares').change(function () {
        oApp.toggleSettingLetterSkipping();
    });

    $('#showDemarcation').change(function () {
        oApp.toggleSettingDemarcation();
    });

    $('#settingKeyboardSounds').change(function () {
        oApp.toggleSettingKeyboardSounds();
    });

    $('#jsButtonCompetitionSubmit').on(clickortouchstart, function (event) {
        event.preventDefault();
        oApp.handleCompetitionFormSubmit();
        return false;
    });

    $('body').on(clickortouchstart, function (event) {
        if ($(event.target).closest('.burger-controls').length < 1) {
            oApp.hideBurgerMenu();
        }
        if ($(event.target).closest('.action-buttons').length < 1) {
            oApp.hideIconPopups();
        }
    });

    $('.jsSubmitComp').on(clickortouchstart, function (event) {
        if ($(this).hasClass('jsSubmitEnabled')) {
            oApp.showSubmitOverlay();
        }
        event.preventDefault();
        return false;
    });

    $('.dmjsReturnToPuzzle').on(clickortouchstart, function (event) {
        oApp.showChecks();
        oApp.hideOverlays();
        $('.dmjsSquareHolder.error').addClass('needs-correction');
        event.preventDefault();
        return false;
    });

};