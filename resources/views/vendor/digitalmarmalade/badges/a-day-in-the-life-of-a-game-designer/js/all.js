/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadLs();

    oBadges.getDefaultDataSet = function () {
        var item = ['', '', '', ''];
        return [item, item, item, item, item, item, item, item, item, item];
    };

    oBadges.getDefaultObject = function () {
        var data = {
            grid:  {
                labels: ['item', '', '', ''],
                data: oBadges.getDefaultDataSet()
            },
            settings: {
                pointsPerCorrectAnswer: 100,
                hasTimer: false
            },
            actions: {
                swipes: {
                    left: '',
                    right: '',
                    up: '',
                    down: ''
                }
            },
            meta: {
                title: 'Total Swipeout!',
                summary: '',
                instructions: ''
            },
            levels: [
                {
                    categories: []
                },
                {
                    categories: []
                },
                {
                    categories: []
                }
            ]
        };
        return data;
    };

    oBadges.showContinueButtonIfLeftOrRightSwipeAssigned = function () {
        if ($('input[name="swipeLeft"]:checked').val() !== '' || $('input[name="swipeRight"]:checked').val() !== '') {
            $('#moveon').addClass('visible');
        }
    };

}());