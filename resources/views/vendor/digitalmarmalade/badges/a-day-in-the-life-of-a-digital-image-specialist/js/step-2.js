/*globals $, showError*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    $('.focal-point-image img').click(function () {
        showError();
    });

    $('#focalPoint1').click(function () {
        $('#focalTask2').removeClass('hide');
        $('body').removeClass('show-error');
    });
    $('#focalPoint2').click(function () {
        $('#focalTask3').removeClass('hide');
        $('body').removeClass('show-error');
    });
    $('#focalPoint3').click(function () {
        $('#moveon').addClass('visible');
        $('body').removeClass('show-error');
    });

    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 2000);
    }

    oBadges.stepCompleted();

}());