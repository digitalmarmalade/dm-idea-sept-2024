/*globals $, Kolich, showOverlay*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadSs();

    if (!window.Kolich) {
        window.Kolich = {};
    }

    Kolich.Selector = {};
    Kolich.Selector.getSelected = function () {
        var t = '';
        if (window.getSelection) {
            t = window.getSelection();
        } else if (document.getSelection) {
            t = document.getSelection();
        } else if (document.selection) {
            t = document.selection.createRange().text;
        }
        return t;
    };

    Kolich.Selector.mouseup = function () {
        var st = Kolich.Selector.getSelected();
        if (st != '') {
            if (st != 'iDEA') {
                $('.selection-text').text(st);
                $('.selection-error').addClass('visible');
                setTimeout(function () { $('.selection-error').removeClass('visible'); }, 2000);
            }
        }
    };

    $(document).ready(function () {
        $('#codeSelection, #codeSelection2, #codeSelectionInput').bind('mouseup', Kolich.Selector.mouseup);
    });

    $('#previewButton1').click(function () {
        $('.reveal-section-1').addClass('visible');
    });

    $('#previewButton2').click(function () {

        var submittedCode = $('#stylesheetInput').val(),
            hashOfMinifiedCode = oBadges.getHashOfMinifiedCode(submittedCode),
            hashOfAnswer = '091c1e38e0776e8560e79593693c80ae';

        if (hashOfMinifiedCode == hashOfAnswer) {
            $('#error2').removeClass('visible');
            showOverlay($(this).data('href'));
            $('.reveal-section-2').addClass('visible');
        } else {
            $('#error2').addClass('visible');
        }
    });

    $('#previewButton3').click(function () {

        var submittedCode = $('#codeSelectionInput').val(),
            hashOfMinifiedCode = oBadges.getHashOfMinifiedCode(submittedCode),
            hashOfAnswer = '1a93c0478876d4b24773b4b8eb5a4c31';

        if (hashOfMinifiedCode == hashOfAnswer) {
            $('#error3').removeClass('visible');
            showOverlay($(this).data('href'));
            $('.lets-move-on').addClass('visible');
        } else {
            $('#error3').addClass('visible');
        }
    });

}());