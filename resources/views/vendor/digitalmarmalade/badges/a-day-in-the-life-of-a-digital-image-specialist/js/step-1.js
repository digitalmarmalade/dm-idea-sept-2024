/*globals $, scrollReveal*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    $('#imageLeft').click(function () {
        $('#section1').addClass('visible');
    });

    $('#imageRight').click(function () {
        $('#mostPeople1').removeClass('hide');
        $('#section1').addClass('visible');
    });


    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 2000);
    }

    oBadges.stepCompleted();

}());