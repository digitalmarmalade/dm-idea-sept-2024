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

    oBadges.stepCompleted();

}());