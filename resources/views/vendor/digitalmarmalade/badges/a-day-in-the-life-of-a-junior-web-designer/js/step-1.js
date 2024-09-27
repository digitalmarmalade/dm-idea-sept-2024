/*globals $, scrollReveal*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    var config = { vFactor: 0.20, mobile: false, delay: 'once' };
    window.sr = new scrollReveal();

    oBadges.loadSs();

    $(function () {

        var rightAnswers = 0;

        $('#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5').draggable({
            revert: 'invalid',
            drag: function (event, ui) {
                $('body').addClass('dragging');
            },
            stop: function (event, ui) {
                $('body').removeClass('dragging');
            }
        });

        $('#droppable1').droppable({
            accept: '#answer_1_2, #answer_1_5',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).find('p.dropped-answers').append(currentText + '<br />');
                ui.draggable.remove();
                rightAnswers++;
                if (rightAnswers === 5) {
                    $('#clickTrigger').trigger('click');
                    $('.lets-move-on').addClass('visible');
                }
            }
        });

        $('#droppable2').droppable({
            accept: '#answer_1_1, #answer_1_3, #answer_1_4',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).find('p.dropped-answers').append(currentText + '<br />');
                ui.draggable.remove();
                rightAnswers++;
                if (rightAnswers === 5) {
                    $('#clickTrigger').trigger('click');
                    $('.lets-move-on').addClass('visible');
                }
            }
        });

    });

}());