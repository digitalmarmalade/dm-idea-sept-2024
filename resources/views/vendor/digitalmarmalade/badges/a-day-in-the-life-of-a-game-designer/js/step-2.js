/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadLs();

    oBadges.dragItemLocations = {};

    $('.jsDragItem').draggable({
        revert: 'invalid',
        drag: function (event, ui) {
            $('body').addClass('dragging');
        },
        stop: function (event, ui) {
            $('body').removeClass('dragging');
        }
    });

    $('.jsDragTargetSrc').droppable({
        accept: function (draggable) {
            return draggable.hasClass('jsDragItem') && $(this).find("*").length == 0;
        },
        drop: function (event, ui) {
            $(ui.draggable).detach().css({top: 0, left: 0}).appendTo(this);

            var drag = $(ui.draggable),
                dragType = drag.data('type'),
                dragName = drag.data('name');

            if (oBadges.dragItemLocations[dragName] !== undefined && oBadges.dragItemLocations[dragName][dragType] !== undefined) {
                delete oBadges.dragItemLocations[dragName][dragType];
            }
        }
    });

    $('.jsDragTargetDst').droppable({
        accept: function (draggable) {
            return draggable.hasClass('jsDragItem') && $(this).find("*").length == 0;
        },
        drop: function (event, ui) {
            $(ui.draggable).detach().css({top: 0, left: 0}).appendTo(this);

            var drop = $(this),
                dropType = drop.data('type'),
                dropRow = drop.data('row'),
                drag = $(ui.draggable),
                dragType = drag.data('type'),
                dragName = drag.data('name');

            oBadges.dragItemLocations[dragName] = oBadges.dragItemLocations[dragName] || {};
            oBadges.dragItemLocations[dragName][dragType] = oBadges.dragItemLocations[dragName][dragType] || {};
            oBadges.dragItemLocations[dragName][dragType].type = dropType;
            oBadges.dragItemLocations[dragName][dragType].row = dropRow;

            oBadges.checkDragItemLocations();
        }
    });

    oBadges.checkDragItemLocations = function () {

        if (oBadges.dragItemLocations.mario === undefined || oBadges.dragItemLocations.mario['new'] === undefined || oBadges.dragItemLocations.mario.old === undefined) {
            return false;
        }

        if (oBadges.dragItemLocations.poke === undefined || oBadges.dragItemLocations.poke['new'] === undefined || oBadges.dragItemLocations.poke.old === undefined) {
            return false;
        }

        if (oBadges.dragItemLocations.snake === undefined || oBadges.dragItemLocations.snake['new'] === undefined || oBadges.dragItemLocations.snake.old === undefined) {
            return false;
        }

        if (oBadges.dragItemLocations.mario['new'].type !== 'new' || oBadges.dragItemLocations.mario.old.type !== 'old' || oBadges.dragItemLocations.mario['new'].row !== oBadges.dragItemLocations.mario.old.row) {
            return false;
        }

        if (oBadges.dragItemLocations.poke['new'].type !== 'new' || oBadges.dragItemLocations.poke.old.type !== 'old' || oBadges.dragItemLocations.poke['new'].row !== oBadges.dragItemLocations.poke.old.row) {
            return false;
        }

        if (oBadges.dragItemLocations.snake['new'].type !== 'new' || oBadges.dragItemLocations.snake.old.type !== 'old' || oBadges.dragItemLocations.snake['new'].row !== oBadges.dragItemLocations.snake.old.row) {
            return false;
        }

        oBadges.allDone();

    };

    oBadges.allDone = function () {
        var name,
            row;

        for (name in oBadges.dragItemLocations) {
            row = oBadges.dragItemLocations[name].old.row;
            $('.jsDragTargetDetails[ data-row="' + row + '"]').find('*[ data-name="' + name + '"]').removeClass('hide');
        }
        $('.jsDragTargetDetails').removeClass('hide');

        $('#moveon').addClass('visible');

        oBadges.stepCompleted();

    };

}());