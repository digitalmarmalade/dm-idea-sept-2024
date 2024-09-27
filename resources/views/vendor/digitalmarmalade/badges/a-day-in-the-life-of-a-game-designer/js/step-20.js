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

    if (oBadges.ls.data.grid.labels[1] === '') {
        window.location = oBadges.prevUrl;
    }

    oBadges.populateInputFieldsUsingObjectData(oBadges.ls.data, {warnMissingItems: false});

    $('.action .reset-list input').change(function () {
        oBadges.showContinueButtonIfLeftOrRightSwipeAssigned();
    });

    oBadges.showContinueButtonIfLeftOrRightSwipeAssigned();

    $('.jsBtnNext').click(function () {
        oBadges.ls.data = oBadges.populateObjectDataUsingInputFields(oBadges.ls.data, {warnMissingItems: false});

        oBadges.saveLs();
        oBadges.stepCompleted();

    });

    oBadges.checkForTips = function () {
        if (oBadges.areLeftRightWrongWay() === true) {
            $('ul.advice-list li[data-type="swipes-notleftright"]').addClass('show');
        } else {
            $('ul.advice-list li[data-type="swipes-notleftright"]').removeClass('show');
        }
        if (oBadges.areUpDownUsedForRightWrong() === true) {
            $('ul.advice-list li[data-type="swipes-notupdown"]').addClass('show');
        } else {
            $('ul.advice-list li[data-type="swipes-notupdown"]').removeClass('show');
        }
        if (!oBadges.isPassBeingUsed() === true) {
            $('ul.advice-list li[data-type="swipes-nopass"]').addClass('show');
        } else {
            $('ul.advice-list li[data-type="swipes-nopass"]').removeClass('show');
        }
    }

    oBadges.areLeftRightWrongWay = function () {
        var swipes = oBadges.getSwipeValues();
        return swipes.left == 'correct' && swipes.right == 'incorrect';
    }

    oBadges.areUpDownUsedForRightWrong = function () {
        var swipes = oBadges.getSwipeValues();
        return (swipes.up == 'correct' && swipes.down == 'incorrect') || (swipes.up == 'incorrect' && swipes.down == 'correct');
    }

    oBadges.isPassBeingUsed = function () {
        var swipes = oBadges.getSwipeValues();
        return swipes.up == 'pass' || swipes.down == 'pass' || swipes.left == 'pass' || swipes.right == 'pass';
    }

    oBadges.getSwipeValues = function () {

        return {
            left: $('input[name="swipeLeft"]:checked').val(),
            right: $('input[name="swipeRight"]:checked').val(),
            up: $('input[name="swipeUp"]:checked').val(),
            down: $('input[name="swipeDown"]:checked').val()
        };
    }

    oBadges.checkForTips();

    $('input[type="radio"]').change(function() {
        oBadges.checkForTips();
    });

}());