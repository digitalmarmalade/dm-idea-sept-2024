/*globals $, scrollReveal*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    $('.jsBtnSubmit').click(function () {
        oBadges.setCookie('completed' + badgeRoot, (new Date()).getTime() / 1000);
    });

}());