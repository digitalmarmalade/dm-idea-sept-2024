/*
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
*/
/*
DM Ken Ken event handler class for web.

*/

/**
The event handler for Ken Ken puzzles based on the web.
This file should be called from the main class for Ken Ken puzzles.
Events should be handled assuming they are being triggered by a web browser.
**/

/*globals $, Wordsearch, Draggable, TweenMax*/
/*jslint eqeq:true*/

/**
 * method to add event handlers to this puzzle - web only
 * @returns {boolean}
 */
Wordsearch.prototype.addEventHandlers = function () {

    'use strict';

    var o = this;

    o.addStaticHandlers();
    o.addDynamicHandlers();

};

/**
 * method to add event handlers to this puzzle - web only
 * @returns {boolean}
 */
Wordsearch.prototype.addStaticHandlers = function () {

    'use strict';

    var o = this;

    //  handle orientation change
    if (o.device.settings.isTouch) {
        window.addEventListener('orientationchange', function () {
            o.autoSizeGrid();
        }, false);
        window.addEventListener('resize', function () {
            o.autoSizeGrid();
        }, false);
    } else {
        window.addEventListener('resize', function () {
            o.autoSizeGrid();
        }, false);
    }

    //  UNDO
    //  undo last action
    if (o.device.settings.isTouch) {
        $('#triggerUndo').on('touchstart', function () {
            o.undoShortPress();
            return false;
        });
    } else {
        $('#triggerUndo').click(function () {
            o.undoShortPress();
            return false;
        });
    }

    //  REDO
    //  redo action previously undone
    if (o.device.settings.isTouch) {
        $('#triggerRedo').on('touchstart', function () {
            o.redoShortPress();
            return false;
        });
    } else {
        $('#triggerRedo').click(function () {
            o.redoShortPress();
            return false;
        });
    }

    //  RESET
    //  reset button touchstarted so ask for confirmation
    if (o.device.settings.isTouch) {
        $('#triggerOverlayReset').on('touchstart', function () {
            o.resetShortPress();
            return false;
        });
    } else {
        $('#triggerOverlayReset').click(function () {
            o.resetShortPress();
            return false;
        });
    }
    //  reset confirmation = yes
    if (o.device.settings.isTouch) {
        $('.btn-yes', '#overlayReset').on('touchstart', function () {
            o.resetOptionYesShortPress();
            return false;
        });
    } else {
        $('.btn-yes', '#overlayReset').click(function () {
            o.resetOptionYesShortPress();
            return false;
        });
    }
    //  reset confirmation = no
    if (o.device.settings.isTouch) {
        $('.btn-no', '#overlayReset').on('touchstart', function () {
            o.resetOptionNoShortPress();
            return false;
        });
    } else {
        $('.btn-no', '#overlayReset').click(function () {
            o.resetOptionNoShortPress();
            return false;
        });
    }

    //  CHECK
    //  reveal cell button clicked so ask for confirmation
    if (o.device.settings.isTouch) {
        $('#triggerCheck').on('touchstart', function () {
            o.checkShortPress();
            return false;
        });
    } else {
        $('#triggerCheck').click(function () {
            o.checkShortPress();
            return false;
        });
    }

    //  SOLUTION
    //  show solution button touchstarted so ask for confirmation
    if (o.device.settings.isTouch) {
        $('#triggerOverlaySolution').on('touchstart', function () {
            o.solutionShortPress();
            return false;
        });
    } else {
        $('#triggerOverlaySolution').click(function () {
            o.solutionShortPress();
            return false;
        });
    }
    //  show solution confirmation = yes
    if (o.device.settings.isTouch) {
        $('.btn-yes', '#OverlaySolution').on('touchstart', function () {
            o.solutionOptionYesShortPress();
            return false;
        });
    } else {
        $('.btn-yes', '#OverlaySolution').click(function () {
            o.solutionOptionYesShortPress();
            return false;
        });
    }
    //  show solution confirmation = no
    if (o.device.settings.isTouch) {
        $('.btn-no', '#OverlaySolution').on('touchstart', function () {
            o.solutionOptionNoShortPress();
            return false;
        });
    } else {
        $('.btn-no', '#OverlaySolution').click(function () {
            o.solutionOptionNoShortPress();
            return false;
        });
    }

    //  OVERLAYS
    //  when overlay bg or an overlay close button is clicked then hide the bg and all overlays
    if (o.device.settings.isTouch) {
        $('.close-overlay').on('touchstart', function () {
            o.hideOverlays();
            return false;
        });
    } else {
        $('.close-overlay').click(function () {
            o.hideOverlays();
            return false;
        });
    }

    //  OVERLAY CLOSE BUTTONS
    //  show solution confirmation close button
    if (o.device.settings.isTouch) {
        $('#OverlaySolution-close').on('touchstart', function () {
            o.solutionOptionNoShortPress();
            return false;
        });
    } else {
        $('#OverlaySolution-close').click(function () {
            o.solutionOptionNoShortPress();
            return false;
        });
    }
    //  show reset confirmation close button
    if (o.device.settings.isTouch) {
        $('#overlayReset-close').on('touchstart', function () {
            o.resetOptionNoShortPress();
            return false;
        });
    } else {
        $('#overlayReset-close').click(function () {
            o.resetOptionNoShortPress();
            return false;
        });
    }

    //  HELP BUTTON
    //  show help
    if (o.device.settings.isTouch) {
        $('#triggerHelp').on('touchstart', function () {
            o.reshowHelp();
            return false;
        });
    } else {
        $('#triggerHelp').click(function () {
            o.reshowHelp();
            return false;
        });
    }

    //  overlay incorrect solution - continue
    if (o.device.settings.isTouch) {
        $('.btn-no', '#overlayIncorrect').on('touchstart', function () {
            o.incorrectSolutionNoShortPress();
            return false;
        });
    } else {
        $('.btn-no', '#overlayIncorrect').click(function () {
            o.incorrectSolutionNoShortPress();
            return false;
        });
    }

    //  overlay incorrect solution - abort
    if (o.device.settings.isTouch) {
        $('#overlayIncorrect-close').on('touchstart', function () {
            o.incorrectSolutionAbort();
            return false;
        });
    } else {
        $('#overlayIncorrect-close').click(function () {
            o.incorrectSolutionAbort();
            return false;
        });
    }

    //  PLEASE NOTE THE BELOW INTENTIONALLY DELAY SENDING USER BACK TO HOMEPAGE TO ALLOW ANALYTICS DATA TO BE SENT

    //  overlay correct solution - mindgames
    if (o.device.settings.isTouch) {
        $('.jsLinkMindGames', '#overlayCompleted').on('touchstart', function () {
            var redirectURL = $(this).attr('href');
            o.correctSolutionMindGames();
            setTimeout(
                function () {
                    window.location = redirectURL;
                },
                500
            );
            return false;
        });
        $('.jsPlayAgain', '#overlayCompleted').on('touchstart', function () {
            o.resetPuzzle();
            return false;
        });
    } else {
        $('.jsLinkMindGames', '#overlayCompleted').click(function () {
            var redirectURL = $(this).attr('href');
            o.correctSolutionMindGames();
            setTimeout(
                function () {
                    window.location = redirectURL;
                },
                500
            );
            return false;
        });
        $('.jsPlayAgain', '#overlayCompleted').click(function () {
            o.resetPuzzle();
            return false;
        });
    }

    //  overlay incorrect solution - mindgames
    if (o.device.settings.isTouch) {
        $('.jsLinkMindGames', '#overlayIncorrect').on('touchstart', function () {
            var redirectURL = $(this).attr('href');
            o.incorrectSolutionMindGames();
            setTimeout(
                function () {
                    window.location = redirectURL;
                },
                500
            );
            return false;
        });
    } else {
        $('.jsLinkMindGames', '#overlayIncorrect').click(function () {
            var redirectURL = $(this).attr('href');
            o.incorrectSolutionMindGames();
            setTimeout(
                function () {
                    window.location = redirectURL;
                },
                500
            );
            return false;
        });
    }

    //  why not try - remove category
    if (o.device.settings.isTouch) {
        $('ul li a', '.why-not-try').on('touchstart', function () {
            o.resetHomeTab();
        });
    } else {
        $('ul li a', '.why-not-try').click(function () {
            o.resetHomeTab();
        });
    }

    //  quickjump menu open/close
    $('#navTrigger').on('click', function () {
        $(this).toggleClass('active');
		$('#quickJump').toggleClass('open');
		$('.menu-bg').fadeToggle();
        return false;
    });

    //  quickjump menu item selection
    $('#listcatnames').on('click', 'li', function () {
        var tab = $(this).data('cat'),
            oSettings = o.getLocalStorageItem('t2_settings') || {};

        oSettings.home_tab = tab;
        o.setLocalStorageItem('t2_settings', oSettings);
        window.location = '../../../homepage/';
        return false;
    });

    // Breadcrumbs mindgames link to home
    $('.jsGoTab').on('click', function () {
        var tab = $(this).data('targettabid'),
            oSettings = o.getLocalStorageItem('t2_settings') || {};
        oSettings.home_tab = tab;
        o.setLocalStorageItem('t2_settings', oSettings);
        return true;
    });

    // Breadcrumbs mindgames link to home
    $('#puzzle').on('click', '.viewer', function () {
        console.log('clicked a line');
        return true;
    });

};

/**
 * method to add event handlers to this puzzle - web only
 * @returns {boolean}
 */
Wordsearch.prototype.addDynamicHandlers = function () {

    'use strict';

    var o = this;

	o.draggable.create("#dragger", {
		type: "x,y",
		edgeResistance: 1,
		dragResistance: 0,
		throwProps: false,
		onDragStart: this.draggableOnDragStart,
		onDrag: this.draggableOnDrag,
		onDragEnd: this.draggableOnDragEnd,
		onClick: this.draggableOnClick
	});

};
