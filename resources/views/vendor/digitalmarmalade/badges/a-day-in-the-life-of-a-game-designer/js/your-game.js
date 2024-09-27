/*globals $, CountUp*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadLs();

    if (oBadges.ls.data === undefined) {
        oBadges.ls.data = oBadges.getDefaultObject();
        oBadges.saveLs();
    }

    oBadges.plays = parseInt($('#playNumber').text(), 10) || 0;

    var randomNumber = oBadges.plays !== undefined ? oBadges.plays : Math.floor((Math.random() * 150) + 1),
        heightNumber = 0,
        bottomNumber,
        numAnim = new CountUp("playNumber", 0, randomNumber);

    setTimeout(function () {

        if (randomNumber > 100) {
            heightNumber = 100;
        } else {
            heightNumber = randomNumber;
        }
        $('#playBar').css('height', heightNumber + '%');

        if (randomNumber > 70) {
            bottomNumber = 70;
        } else {
            bottomNumber = randomNumber;
        }
        $('#playNumber').css('bottom', bottomNumber + '%');
        numAnim.start();
    }, 2000);

}());