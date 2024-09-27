/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadSs();

    function validateCheckboxes() {

        var correctAnswers = 0;

        if ($('#thumb').is(':checked')) {
            correctAnswers++;
        }
        if ($('#row').is(':checked')) {
            correctAnswers++;
        }
        if ($('#col-4').is(':checked')) {
            correctAnswers++;
        }
        if (!$('#col-12').is(':checked')) {
            correctAnswers++;
        }
        if (!$('#navbar').is(':checked')) {
            correctAnswers++;
        }
        if (!$('#offset-2').is(':checked')) {
            correctAnswers++;
        }
        if (!$('#offset-4').is(':checked')) {
            correctAnswers++;
        }
        if (!$('#carousel').is(':checked')) {
            correctAnswers++;
        }
        if (correctAnswers === 8) {
            $('#revealSection1').addClass('visible');
            $('#clickTrigger').trigger('click');
        }
    }
    window.validateCheckboxes = validateCheckboxes;

    $('.yes-no-list input').change(function () {
        validateCheckboxes();
    });

    $(function () {

        var rightAnswers = 0;

        $('#answer_6_1, #answer_6_2, #answer_6_3, #answer_6_4, #answer_6_5, #answer_6_6, #answer_6_7').draggable({
            revert: 'invalid',
            drag: function (event, ui) {
                $('body').addClass('dragging');
            },
            stop: function (event, ui) {
                $('body').removeClass('dragging');
            }
        });

        $('#droppable1').droppable({
            revert: 'invalid',
            accept: '#answer_6_1',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);

                $(this).droppable('disable').addClass('not-dropzone');

                ui.draggable.addClass('removed');
                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });

        $('#droppable2').droppable({
            revert: 'invalid',
            accept: '#answer_6_3',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);

                $(this).droppable('disable').addClass('not-dropzone');

                ui.draggable.addClass('removed');
                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });

        $('#droppable3').droppable({
            revert: 'invalid',
            accept: '#answer_6_5',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);

                $(this).droppable('disable').addClass('not-dropzone');

                ui.draggable.addClass('removed');
                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });

        $('#droppable4').droppable({
            revert: 'invalid',
            accept: '#answer_6_7',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);

                $(this).droppable('disable').addClass('not-dropzone');

                ui.draggable.addClass('removed');
                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });

        $('#droppable5').droppable({
            revert: 'invalid',
            accept: '#answer_6_2,#answer_6_4,#answer_6_6',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);
                ui.draggable.addClass('removed');

                $(this).droppable('disable').addClass('not-dropzone');

                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });
        $('#droppable6').droppable({
            revert: 'invalid',
            accept: '#answer_6_2,#answer_6_4,#answer_6_6',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);
                ui.draggable.addClass('removed');

                $(this).droppable('disable').addClass('not-dropzone');

                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });
        $('#droppable7').droppable({
            revert: 'invalid',
            accept: '#answer_6_2,#answer_6_4,#answer_6_6',
            drop: function (event, ui) {
                var currentDraggable = $(ui.draggable).attr('id');
                var currentText = $(ui.draggable).text();
                $(this).text(currentText);
                ui.draggable.addClass('removed');

                $(this).droppable('disable').addClass('not-dropzone');

                rightAnswers++;
                if (rightAnswers === 7) {
                    $('.lets-move-on').addClass('visible');
                    $('#clickTrigger2').trigger('click');
                }
            }
        });

    });

}());