/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    $('.overlay-trigger').click(function () {

        var clicked = $(this),
            overlayIdToShow = clicked.attr('href'),
            clickedParent = clicked.closest('.game-link'),
            title = clickedParent.find('h2').text(),
            text = clickedParent.find('.game-text').html(),
            url = clickedParent.find('.game-url').text(),
            background = clickedParent.css('background'),
            foreground = clickedParent.css('color');

        $('#gamePreview').css('background', background).css('color', foreground);
        $('#gameHeading').text(title);
        $('#gameText').html(text);
        $('#gameURL').html('<p><a href="' + url + '" target="_blank" class="btn">Play</a></p>');


        $('#overlayBg').addClass('overlay-bg-visible');
        $(overlayIdToShow).addClass('overlay-visible');
        return false;

    });

    $('.overlay-close, #overlayBg').click(function () {

        $('#overlayBg').removeClass('overlay-bg-visible');
        $('.overlay-visible').removeClass('overlay-visible').removeClass('overlay-full');


        return false;

    });

    $('ul.jsGamesListSelector li').click(function () {
        var el = $(this),
            targetid = el.data('targetid');

        $('.jsGamesList').addClass('hide');
        $('.jsGamesList[data-id="' + targetid + '"]').removeClass('hide');

        $('ul.jsGamesListSelector li').removeClass('active');
        el.addClass('active');
        oBadges.insertPagination(1);
        return false;
    });


    oBadges.insertPagination = function (currentPage) {

        var el = $('.jsPaginationHolder'),
            lists = $('.jsGamesList'),
            itemsClass = 'jsGamesListItem',
            data = {};

        data.currentPage = currentPage;
        data.totalItems = lists.first().find('.' + itemsClass).length;
        data.itemsPerPage = 10;
        data.maxLinks = 5;
        data.itemsEitherSide = ((data.maxLinks - 1) / 2);
        data.totalPages = Math.ceil(data.totalItems / data.itemsPerPage);
        data.firstPage = data.currentPage - data.itemsEitherSide;
        data.lastPage = data.currentPage + data.itemsEitherSide;
        if (data.firstPage < data.itemsEitherSide) {
            data.firstPage = 1;
            data.lastPage = data.maxLinks;
        }
        if (data.lastPage > data.totalPages) {
            data.lastPage = data.totalPages;
            if ((data.lastPage - data.firstPage) < data.maxLinks) {
                data.firstPage = data.lastPage - data.maxLinks + 1;
            }
        }
        data.firstPage = data.firstPage > 0 ? data.firstPage : 1;
        data.prevPage = data.currentPage - 1;
        if (data.prevPage < 1) {
            data.prevPage = false;
        }
        data.nextPage = data.currentPage + 1;
        if (data.nextPage > data.totalPages) {
            data.nextPage = false;
        }
        data.firstItem = ((data.currentPage - 1) * data.itemsPerPage) + 1;
        data.lastItem = data.firstItem + data.itemsPerPage - 1;

        var HTML = '<ul>';
        var classes = [];
        if (!data.prevPage) {
            classes.push('disabled');
        }
        HTML += '<li class="' + classes.join(' ') + '" data-target="' +  data.prevPage + '"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

        for (var id = data.firstPage; id <= data.lastPage; id++) {
            var classes = [];
                if (id === data.currentPage) {
                classes.push('active');
            }
            HTML += '<li class="'+classes.join(' ')+'" data-target="' +  id + '"><a href="#">' +  id + '</a></li>';
        }

        var classes = [];
        if (!data.nextPage) {
            classes.push('disabled');
        }
        HTML += '<li class="' + classes.join(' ') + '" data-target="' +  data.nextPage + '"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
        HTML += '</ul>';
        el.html(HTML);

        lists.each(function() {
            var list = $(this);
            list.find('.' + itemsClass).hide();
            for (var id = data.firstItem - 1; id <= data.lastItem - 1; id++) {
                list.find('.' + itemsClass).eq(id).show();
            }
            
        });

        el.find('li').click(function(){
            var target = $(this).data('target');
            if (target) {
                oBadges.insertPagination($(this).data('target'));
            }
            return false;
        });

    };

    oBadges.insertPagination(1);
}());