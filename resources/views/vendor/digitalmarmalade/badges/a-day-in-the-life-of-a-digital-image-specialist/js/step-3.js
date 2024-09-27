/*globals $, badgeRoot, showError*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 3000);
    }

    $('#imageDescriptor1 a').click(function () {
        var answer = $(this).text();
        if (oBadges.getMD5(answer) == 'dd4fe0cc913f704600b97d1f5dd285de') {
            $(this).addClass('selected');
            $('#cameraAngleTask').removeClass('hide');
        } else {
            showError();
            return false;
        }
    });

    $('#imageDescriptor2 a').click(function () {
        var answer = $(this).text();
        if (oBadges.getMD5(answer) == 'bc1d149e056a1e8dd513e4f5397184bf') {
            $(this).addClass('selected');
            $('#cameraZoomTask1').removeClass('hide');
        } else {
            showError();
            return false;
        }
    });

    $('#imageZoom1 a').click(function () {
        var answer = $(this).text();
        if (oBadges.getMD5(answer) == 'f5ca4abce85e2dddb0342d0bae3a7270') {
            $(this).addClass('selected');
            $('#cameraZoomTask2').removeClass('hide');
            $('#zoomSwap1').attr('src', '/badge-assets' + badgeRoot + '/_global/img/task-2-2-1b.jpg');

        } else {
            showError();
            return false;
        }
    });

    $('#imageZoom2 a').click(function () {
        var answer = $(this).text();
        if (oBadges.getMD5(answer) == '30850b501f98539b1aabaa29fabe41ef') {
            $(this).addClass('selected');
            $('#moveon').addClass('visible');
            $('#zoomSwap2').attr('src', '/badge-assets' + badgeRoot + '/_global/img/task-2-2-2b.jpg');

        } else {
            showError();
            return false;
        }
    });

    oBadges.stepCompleted();

}());