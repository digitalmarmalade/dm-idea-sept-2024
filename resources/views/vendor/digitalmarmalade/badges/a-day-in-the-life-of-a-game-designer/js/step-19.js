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

    $('.jsBtnNext').click(function () {
        oBadges.ls.data = oBadges.populateObjectDataUsingInputFields(oBadges.ls.data, {warnMissingItems: false});

        oBadges.saveLs();
        oBadges.stepCompleted();

    });

    oBadges.checkForTimerUsage = function () {
        if (oBadges.isTimerBeingUsed() === true) {
            $('ul.advice-list li[data-type="timer-active"]').addClass('show');
            $('ul.advice-list li[data-type="timer-inactive"]').removeClass('show');
        } else {
            $('ul.advice-list li[data-type="timer-inactive"]').addClass('show');
            $('ul.advice-list li[data-type="timer-active"]').removeClass('show');
        }
    }

    oBadges.isTimerBeingUsed = function () {
        return $('#timer').prop('checked');
    }

    $('#timer').change(function() {
        oBadges.checkForTimerUsage();
    });

    oBadges.checkForTimerUsage();

}());