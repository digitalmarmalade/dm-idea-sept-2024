/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadSs();

    var correctAnswers = 0;

    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 3000);
    }



    $('#helpTrigger').click(function () {

        $(this).toggleClass('on');
        $('#helpContent').toggleClass('expanded');
    });

    $('.help h3').click(function () {
        $(this).next('p').slideToggle();
    });

    $('#review').unbind().click(function () {
        if (correctAnswers === 4) {
            oBadges.stepCompleted();
            window.location.href = $(this).attr('href');
        } else {
            showError();
        }
        return false;
    });
    
    $('#task1A1').click(function () {
        $('#pageToFix').removeClass('hide');
        $('#completelyBroken').addClass('hide');
        $('#task1Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task1Overlay').removeClass('overlay-visible');
        correctAnswers++;
        return false;
    });
    $('#task1A2,#task1A3').click(function () {
        $('#task1Error').addClass('visible');
        return false;
    });
    
    $('#task2A3').click(function () {
        $('#task2Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task2Overlay').removeClass('overlay-visible');
        $('#task2Holder').html('<img src="/badge-assets/' + slug + '/_global/img/final-2-right.jpg" />');
        correctAnswers++;
        return false;
    });
    $('#task2A2,#task2A1').click(function () {
        $('#task2Error').addClass('visible');
        return false;
    });
    
    $('#task3A2').click(function () {
        $('#task3Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task3Overlay').removeClass('overlay-visible');
        $('#task3Holder').html('<img src="/badge-assets/' + slug + '/_global/img/final-3-right.jpg" />');
        correctAnswers++;
        return false;
    });
    $('#task3A1,#task3A3').click(function () {
        $('#task3Error').addClass('visible');
        return false;
    });
    
    $('#task4A1').click(function () {
        $('#task4Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task4Overlay').removeClass('overlay-visible');
        $('#task4Holder').html('<img src="/badge-assets/' + slug + '/_global/img/final-4-right.jpg" />');
        correctAnswers++;
        return false;
    });
    $('#task4A2,#task4A3').click(function () {
        $('#task4Error').addClass('visible');
        return false;
    });

}());