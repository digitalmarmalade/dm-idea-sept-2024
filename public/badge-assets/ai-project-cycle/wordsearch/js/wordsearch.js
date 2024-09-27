var app = window.app || {};

(function () {

    'use strict';

    app.helpers.addEventListeners = function () {
        app.draggable.create("#dragger", {
            type: "x,y",
            edgeResistance: 1,
            dragResistance: 0,
            throwProps: false,
            onDragStart: app.drag.onStart,
            onDrag: app.drag.onDrag,
            onDragEnd: app.drag.onEnd,
        });
        if (app.device.settings.isTouch) {
            window.addEventListener('orientationchange', function () {
                app.helpers.resizeGrid();
            }, false);
            window.addEventListener('resize', function () {
                app.helpers.resizeGrid();
            }, false);
        } else {
            window.addEventListener('resize', function () {
                app.helpers.resizeGrid();
            }, false);
        }
    };

    app.helpers.checkAgainstCorrectSolution = function (a, b, c, d, id) {

        'use strict';

        var o = app,
            puzzleComplete,
            thisWordCorrect = false;

        $('li', 'ul.words').each(function () {
            var el = $(this);
            if ((el.data('start') == a + ',' + b && el.data('end') == c + ',' + d) || (el.data('start') == c + ',' + d && el.data('end') == a + ',' + b)) {
                el.removeClass('need text-cell-default').addClass('got accent-fg');
                //o.user.game.correctSelectors[id] = $('li', 'ul.words').index(el);
                thisWordCorrect = true;
            }
        });

        if (thisWordCorrect === false) {
            //if (app.drag.tmp.removeWrongSelections) {
            app.helpers.userHighlightedIncorrectWord(id);
            var obj = {
                end: {
                    col: d,
                    id: app.helpers.getCellIdFromColRow(d, c),
                    row: c,
                },
                start: {
                    col: b,
                    id: app.helpers.getCellIdFromColRow(b, a),
                    row: a,
                },
            };
            var wordObj = app.helpers.getWordFromStartEndCells(obj.start.id, obj.end.id);
            obj.word = wordObj.word;
            app.helpers.dispatchEvent('word-not-found', obj);
            //}
        }

        puzzleComplete = app.helpers.isPuzzleCompleted();

        if (puzzleComplete) {
            //app.timer.stop();
            app.helpers.puzzleCompletedCorrectly();
            return false;
        }

        app.helpers.puzzleCompletedIncorrectly();
        return false;


    };

    app.helpers.displayUserAnswers = function () {

        var loadedBlocks = JSON.parse(JSON.stringify(app.vue.data.user.answers));

        for (var j in loadedBlocks) {

            if (loadedBlocks[j] !== null) {
                app.drag.tmp.current.id = j;


                app.drag.tmp.start = loadedBlocks[j].start;

                app.drag.create(loadedBlocks[j].start.col, loadedBlocks[j].start.row, j);
                app.helpers.drawBox(loadedBlocks[j].start.col, loadedBlocks[j].start.row, loadedBlocks[j].end.col, loadedBlocks[j].end.row);
                app.drag.updateItemWithNewRowColCounts($('#viewer-' + j), loadedBlocks[j].end.row - loadedBlocks[j].start.row, loadedBlocks[j].end.col - loadedBlocks[j].start.col);
                $('#viewer-' + j).addClass('done');
                //app.user.game.blocks[j] = loadedBlocks[j];
                //app.helpers.checkAgainstCorrectSolution(loadedBlocks[j].y1, loadedBlocks[j].x1, loadedBlocks[j].y2, loadedBlocks[j].x2, j);
            }
        }

    }

    app.helpers.drawBox = function (cellX1, cellY1, cellX2, cellY2) {

        'use strict';

        var o = app,
            colCount = cellX2 - cellX1,
            rowCount = cellY2 - cellY1,
            tweenObject = {},
            baseRot = 0,
            rot,
            hypLen,
            w,
            h,
            ver = 0,
            hor = 0;

        //logme('colCount', colCount, 'rowCount', rowCount);

        w = colCount * app.drag.tmp.dims.cells.w;
        h = rowCount * app.drag.tmp.dims.cells.h;


        tweenObject.x = (cellX1 * app.drag.tmp.dims.cells.w) + 3;
        tweenObject.y = (cellY1 * app.drag.tmp.dims.cells.h) + 5;
        tweenObject.width = (rowCount) * app.drag.tmp.dims.cells.w;
        if (colCount < 0) {
            tweenObject.width = tweenObject.width * -1;
        }
        tweenObject.height = app.drag.tmp.dims.cells.h;
        if (rowCount < 0) {
            baseRot += 90;
        }

        rot = Math.atan((rowCount) / (colCount));
        rot = rot * (180 / Math.PI);

        baseRot = 0;
        rot = 0;


        // some basic logic regarding direction
        if (cellX1 > cellX2) {
            hor = -1;
        }
        if (cellX1 < cellX2) {
            hor = 1;
        }
        if (cellY1 > cellY2) {
            ver = -1;
        }
        if (cellY1 < cellY2) {
            ver = 1;
        }

        //  all our options

        if (hor == 0 && ver == -1) { //  up
            rot = 270;
        }

        if (hor == 1 && ver == -1) { //  up right
            rot = 315;
        }

        if (hor == 1 && ver == 0) { //  right
            rot = 0;
        }

        if (hor == 1 && ver == 1) { //  down right
            rot = 45;
        }

        if (hor == 0 && ver == 1) { //  down
            rot = 90;
        }

        if (hor == -1 && ver == 1) { //  down left
            rot = 135;
        }

        if (hor == -1 && ver == 0) { //  left
            rot = 180;
        }

        if (hor == -1 && ver == -1) { //  up left
            rot = 225;
        }

        tweenObject.rotation = baseRot + rot;
        tweenObject.transformOrigin = '20px';

        hypLen = Math.sqrt(Math.pow((rowCount), 2) + Math.pow((colCount), 2));
        //console.log('Hypotenuse:'+hypLen, 'Rotation:'+tweenObject.rotation);
        tweenObject.width = parseInt(((hypLen + 1) * app.drag.tmp.dims.cells.w), 10);

        TweenMax.set($('#viewer-' + app.drag.tmp.current.id), tweenObject);

    };

    app.helpers.getColRowFromCoords = function (x, y) {

        'use strict';

        var o = app,
            k = {};

        k.col = Math.floor(x / app.drag.tmp.dims.cells.w);
        k.row = Math.floor(y / app.drag.tmp.dims.cells.h);

        k.col = k.col < 0 ? 0 : k.col;
        k.row = k.row < 0 ? 0 : k.row;

        return k;

    };

    app.helpers.getDefaultUserPlayStatus = function () {
        return {
            first: (new Date()).getTime(),
            last: (new Date()).getTime(),
            started: (new Date()).getTime(),
            completed: null,
        };
    };

    app.helpers.getDefaultUserState = function () {

        app.vue.data.user.answers = {};
        app.vue.data.user.notes = {};
        app.vue.data.user.time = 0;

        var defaultPuzzleTypeSettings = app.storagePuzzletype.get('settings');

        var defaultPuzzleSettings = {
            textSize: 0,
            timer: true,
            help: false,
        };

        app.vue.data.user.settings = $.extend({}, defaultPuzzleSettings, defaultPuzzleTypeSettings);

        return app.vue.data.user;
    };

    app.helpers.getFeedbackCorrectObject = function (archive) {

        var obj = {
            url: app.helpers.getMostRecentUnplayedPuzzleOfType(app.config.related),
            link_text: 'Try a ' + app.config.related,
        };

        return obj;
    };

    app.helpers.getFeedbackIncorrectObject = function (archive) {

        return {};
    };

    app.helpers.getIdOfEndSquare = function (x1, x2, y1, y2) {

        'use strict';

        var o = app,
            gridW = app.drag.grid.cols,
            answer = [],
            direction = app.helpers.getSelectionDirection(x1, y1, x2, y2),
            id,
            xLoop,
            yLoop;

        //  adjust end position if now not at 45 degrees
        switch (direction) {

            case 'N':
                for (yLoop = y2; yLoop <= y1; yLoop = yLoop + 1) {
                    for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        answer.push(id);
                    }
                }
                break;

            case 'NE':
                for (yLoop = y1; yLoop >= y2; yLoop = yLoop - 1) {
                    for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        if (Math.abs(xLoop - x1) === Math.abs(yLoop - y1)) {
                            answer.push(id);
                        }
                    }
                }
                break;

            case 'E':
                for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
                    for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        answer.push(id);
                    }
                }
                break;

            case 'SE':
                for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
                    for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        if (Math.abs(xLoop - x1) === Math.abs(yLoop - y1)) {
                            answer.push(id);
                        }
                    }
                }
                break;

            case 'S':
                for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
                    for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        answer.push(id);
                    }
                }
                break;

            case 'SW':
                for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
                    for (xLoop = x1; xLoop >= x2; xLoop = xLoop - 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        if (Math.abs(xLoop - x1) === Math.abs(yLoop - y1)) {
                            answer.push(id);
                        }
                    }
                }
                break;

            case 'W':
                for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
                    for (xLoop = x2; xLoop <= x1; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        answer.push(id);
                    }
                }
                break;

            case 'NW':
                for (yLoop = y2; yLoop <= y1; yLoop = yLoop + 1) {
                    for (xLoop = x2; xLoop <= x1; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        if (Math.abs(xLoop - x2) === Math.abs(yLoop - y2)) {
                            answer.push(id);
                        }
                    }
                }
                break;

            default:
                for (yLoop = y1; yLoop <= y2; yLoop = yLoop + 1) {
                    for (xLoop = x1; xLoop <= x2; xLoop = xLoop + 1) {
                        id = (yLoop * gridW) + xLoop + 1;
                        answer.push(id);
                    }
                }
                break;
        } //  end switch


        return answer;
    };

    app.helpers.getSelectionDirection = function (x1, y1, x2, y2) {

        'use strict';

        if (x2 === x1 && y2 < y1) {
            return 'N';
        }
        if (x2 > x1 && y2 < y1) {
            return 'NE';
        }
        if (x2 > x1 && y2 === y1) {
            return 'E';
        }
        if (x2 > x1 && y2 > y1) {
            return 'SE';
        }
        if (x2 === x1 && y2 > y1) {
            return 'S';
        }
        if (x2 < x1 && y2 > y1) {
            return 'SW';
        }
        if (x2 < x1 && y2 === y1) {
            return 'W';
        }
        if (x2 < x1 && y2 < y1) {
            return 'NW';
        }
        return false;
    };

    app.helpers.getWordFromStartEndCells = function (start, end) {
        'use strict';
        var o = app,
            colCount = app.vue.data.source.settings.colCount,
            wordObj = {
                word: '',
                start: app.helpers.getColRowFromCellId(start),
                end: app.helpers.getColRowFromCellId(end)
            },
            iLoop,
            direction;

        //  right
        if (wordObj.start.row == wordObj.end.row && wordObj.end.col > wordObj.start.col) {
            direction = 'R';
            for (iLoop = 0; iLoop <= (wordObj.end.col - wordObj.start.col); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start + iLoop];
            }
        }
        //  down right
        if (wordObj.end.col > wordObj.start.col && wordObj.end.row > wordObj.start.row) {
            direction = 'DR';
            for (iLoop = 0; iLoop <= (wordObj.end.row - wordObj.start.row); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start + (iLoop * colCount) + iLoop];
            }
        }
        //  down
        if (wordObj.start.col == wordObj.end.col && wordObj.end.row > wordObj.start.row) {
            direction = 'D';
            for (iLoop = 0; iLoop <= (wordObj.end.row - wordObj.start.row); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start + (iLoop * colCount)];
            }
        }
        //  down left
        if (wordObj.end.col < wordObj.start.col && wordObj.end.row > wordObj.start.row) {
            direction = 'DL';
            for (iLoop = 0; iLoop <= (wordObj.end.row - wordObj.start.row); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start + (iLoop * colCount) - iLoop];
            }
        }
        //  left
        if (wordObj.start.row == wordObj.end.row && wordObj.end.col < wordObj.start.col) {
            direction = 'L';
            for (iLoop = 0; iLoop <= (wordObj.start.col - wordObj.end.col); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start - iLoop];
            }
        }
        //  up left
        if (wordObj.end.col < wordObj.start.col && wordObj.end.row < wordObj.start.row) {
            direction = 'UL';
            for (iLoop = 0; iLoop <= (wordObj.start.row - wordObj.end.row); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start - (iLoop * colCount) - iLoop];
            }
        }
        //  up
        if (wordObj.start.col == wordObj.end.col && wordObj.end.row < wordObj.start.row) {
            direction = 'U';
            for (iLoop = 0; iLoop <= (wordObj.start.row - wordObj.end.row); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start - (iLoop * colCount)];
            }
        }
        //  up right
        if (wordObj.end.col > wordObj.start.col && wordObj.end.row < wordObj.start.row) {
            direction = 'UR';
            for (iLoop = 0; iLoop <= (wordObj.start.row - wordObj.end.row); iLoop = iLoop + 1) {
                wordObj.word += app.vue.data.source.celldata[start - (iLoop * colCount) + iLoop];
            }
        }
        //console.log(start, end, wordObj.start, wordObj.end, wordObj.word, direction);
        return wordObj;
    };

    app.helpers.hideSolution = function () {
        $('.viewer.solution').remove();
        $('.viewer').show();
    };

    app.helpers.initialiseAnalytics = function () {
        // if (app.marmalytics.cfg === null) {
        //     console.log('Need analytics config to be set');
        //     return false;
        // }
        // app.marmalytics.setReference(app.storage.prefix);
        // app.marmalytics.setData(this);
    };

    app.helpers.initPuzzle = function () {
        app.drag.grid.cols = app.json.settings.colCount;
        app.drag.grid.rows = app.json.settings.rowCount;
        app.helpers.readPuzzleElementsDimensions();
        app.helpers.resizeGrid();
        app.helpers.displayUserAnswers();
    };

    app.helpers.isGridActive = function () {

        if (!$('body').hasClass('intro-complete')) {
            return false;
        }

        if (app.vue.data.config.hasLives && app.vue.data.user.lives <= 0) {
            return false;
        }

        if (app.vue.data.check.grid === true) {
            return false;
        }

        return true;
    };

    app.helpers.isPuzzleCompleted = function () {

        'use strict';

        return $('li.need', 'ul.words').length < 1;

    };

    app.helpers.loadActiveState = function () {
        delete app.vue.data.active;
        delete app.vue.data.keyboard;
    };

    app.helpers.puzzleCompletedAnimation = function () {

        'use strict';

        app.vue.data.modals.visible.push('success');

        // setTimeout(
        //     function () {
        //         document.getElementById('video-fireworks').play();
        //     },
        //     2000
        // );

    };

    app.helpers.puzzleCompletedCorrectly = function () {

        'use strict';

        // app.status.completed = {
        //     when: (new Date()).getTime(),
        //     time: app.vue.model.timerDisplay,
        //     seconds: app.timer.get(),
        // };

        app.helpers.saveUserPlayStatus();

        app.vue.data.modals.visible.push('success');

        console.log("Completed Successfully!");

        var myCustomData = { status: 'completed' }
        var event = new CustomEvent('myEvent', { detail: myCustomData })
        window.parent.document.dispatchEvent(event)


        // Emit a complete event here.

    };

    app.helpers.puzzleCompletedIncorrectly = function () {

        'use strict';

    };

    app.helpers.puzzleStart = function (vm) {

        var startTimer = true;

        if (app.helpers.isPuzzleCompleted()) {
            app.vue.methods.resetGrid();
            return false;
        }

        if (app.vue.data.config.hasLives && app.vue.data.user.lives <= 0) {
            startTimer = false;
        }

        if (startTimer) {
            app.timer.start(app.vue.data.user.time);
        }

    };

    app.helpers.puzzleUpdate = function (count) {
        app.vue.data.user.time = count;
        app.helpers.saveUserTime();
    };

    app.helpers.readPuzzleElementsDimensions = function () {

        'use strict';

        var o = app;


        app.drag.tmp = app.drag.tmp || {};

        app.drag.tmp.dims.selector.w = 0.7;
        app.drag.tmp.dims.selector.padding = (1 - app.drag.tmp.dims.selector.w) / 2;
        app.drag.tmp.dims.holder.x = $('#grid').offset().left;
        app.drag.tmp.dims.holder.y = $('#grid').offset().top;
        app.drag.tmp.dims.holder.w = $('#grid table').width();
        app.drag.tmp.dims.holder.h = $('#grid table').height();
        app.drag.tmp.dims.holder.border.x = parseInt($('#grid table').css('border-left-width'), 10);
        app.drag.tmp.dims.holder.border.y = parseInt($('#grid table').css('border-top-width'), 10);
        app.drag.tmp.dims.holder.border.x = 5;
        app.drag.tmp.dims.holder.border.y = 9;
        app.drag.tmp.dims.cells.w = $('#grid td span').outerWidth();
        app.drag.tmp.dims.cells.h = $('#grid td span').outerHeight();

        o.dragItems = [];
        o.draggable = Draggable;

        $('#dragger').css('height', app.drag.tmp.dims.holder.h).css('width', app.drag.tmp.dims.holder.w);

        return o.puzzle;
    };

    app.helpers.removeBlocks = function () {
        $('.viewer').not('#viewer-tpl').not('#viewer-tpl').remove();
    };

    app.helpers.resetUserState = function () {
        app.helpers.removeBlocks();
        app.vue.data.user = app.helpers.getDefaultUserState();
        app.helpers.saveUserState();
    };

    app.helpers.resizeGrid = function () {

        'use strict';

        var o = app,
            puzzleWidth,
            puzzleHeight,
            wordsHeight,
            tableHeight,
            viewportHeight = $(window).height(),
            viewportWidth = $(window).width(),
            stagePadding = viewportWidth > 450 ? 35 : 10,
            headerHeight = $('.menu-bar').outerHeight(),
            titleHeight = $('.text-title').outerHeight(),
            actionButtonHeight = $('#actions').outerHeight(),
            numberOfIcons = $('.action-buttons li:visible').size(),
            iconWidth = 100 / numberOfIcons,
            setHeight = viewportHeight - headerHeight,
            setWidth = viewportWidth - (stagePadding * 2) - 0,
            setTop = headerHeight,
            setLeft = stagePadding,
            puzzleTableWidth = $('#tableHolder').outerWidth(),
            transformScale,
            puzzleMargin;



        puzzleWidth = $('#puzzle').outerWidth();
        puzzleHeight = $('#puzzle').outerHeight();

        puzzleWidth = 312;



        //o.puzzle.layout.titleHeight = titleHeight;

        if (setHeight > setWidth) {
            //  if height is greater than the width, then set the scale using the width to avoid overflow
            transformScale = setWidth / puzzleWidth;

        } else {
            //  if width is greater than the height, then set the scale using the height to avoid overflow
            transformScale = setHeight / puzzleHeight;
            if ((transformScale * puzzleWidth) > setWidth) {
                transformScale = setWidth / puzzleWidth;
            }
        }

        if (transformScale > 1.6) {
            transformScale = 1;
        }

        puzzleMargin = (setWidth - (puzzleWidth * transformScale)) / 2;
        //puzzleMargin = 0;

        tableHeight = 344;
        wordsHeight = (setHeight - (tableHeight * transformScale)) / transformScale;
        //$('.words').css('height', wordsHeight + 'px').css('width', puzzleWidth + 'px');
        $('.words').css('height', wordsHeight + 'px').css('width', puzzleWidth + 'px');

        //  create the playable area
        $('.playable-area').css('height', setHeight + 'px').css('width', setWidth + 'px').css('top', setTop + 'px').css('left', setLeft + 'px').css('padding-left', puzzleMargin + 'px');

        //  set the position of the timer
        //$('.timer').css('left', stagePadding + 10 + 'px').css('top', headerHeight + 'px');

        //  set the width of the action buttons holder
        //$('.action-buttons, .title').css('padding-left', stagePadding + 10 + 'px').css('padding-right', stagePadding + 10 + 'px');
        $('h1 .found-header').css('right', stagePadding + 10 + 'px');

        //  set the percentage width of the action buttons
        //$('.action-buttons li').css('width', iconWidth + '%');

        //  scale the grid to fill the available space
        $('.puzzle').css('-webkit-transform', 'scale(' + transformScale + ',' + transformScale + ')').css('transform', 'scale(' + transformScale + ',' + transformScale + ')');


        var menuBar = $('.menu-bar').outerHeight(),
            tableHolder = $('.table-holder').outerHeight(),
            vh = window.innerHeight,
            maxHeight = vh - menuBar - tableHolder - 65;

        //console.log(maxHeight);
        // $('.words').height(maxHeight);

        //app.drag.tmp.dims.scale = transformScale;
        //app.drag.tmp.dims.scale = 1;

        if(viewportWidth >= 768){
            app.drag.tmp.dims.scale = 1;
        } else {
            app.drag.tmp.dims.scale = transformScale;
        }

        app.helpers.readPuzzleElementsDimensions();
    };

    app.helpers.updateUserBlocks = function () {

        'use strict';

        var o = app,
            iLoop,
            tmpArray = [];

        for (iLoop in app.drag.tmp.blocks) {
            if (app.drag.tmp.blocks.hasOwnProperty(iLoop)) {
                if (app.drag.tmp.blocks[iLoop].active == true) {
                    tmpArray[iLoop] = app.drag.tmp.blocks[iLoop];
                }
            }
        }
        app.drag.tmp.blocks = tmpArray;

    };

    app.helpers.userHighlightedIncorrectWord = function (id) {
        'use strict';

        var o = this;

        $('#viewer-' + id).addClass('fail');

        setTimeout(
            function () {
                $('#viewer-' + id).remove();
                app.vue.model.$delete(app.vue.data.user.answers, id);
                app.helpers.saveUserState();
            },
            500
        );

    };

    app.helpers.wordFound = function (obj) {

    };

    app.helpers.wordNotFound = function (obj) {
    };

    /**
     * Core puzzle init method
     * @param {object} settings
     */
    app.initialise = function (json) {
        app.vue.methods.setSource(json.data);
        app.vue.init(app.config.el);
        app.drag.grid.cols = app.json.settings.colCount;
        app.drag.grid.rows = app.json.settings.rowCount;
        app.helpers.readPuzzleElementsDimensions();
        app.helpers.resizeGrid();
        app.helpers.addEventListeners();
        if (app.vue.data.config.hasTimer) {
            app.timer = new DMTimer();
            app.timer.callback = app.helpers.puzzleUpdate;
        }

        app.vue.methods.resetGrid();

        if (app.vue.model.isCompleted) {
            app.vue.methods.resetGrid();
            return false;
        }

        //app.helpers.initialiseAnalytics();
        //app.marmalytics.init();
        //app.marmalytics.pageLoad();

        if (app.vue.model.isGameOver) {
            app.helpers.livesLostAll();
            return false;
        }

        setTimeout(
            function () {
                $('body').addClass('intro-complete');
                app.helpers.displayUserAnswers();
                app.helpers.showPuzzleOrStart();
            },
            3000
        );

    };

}());

app.vue.watch['user.answers'] = function (val) {
    //console.log(JSON.stringify(val));
    //console.trace();
};

app.vue.watch['userSettings'] = function (val) {
    //console.log(JSON.parse(val));
    app.helpers.saveUserState();
    app.storagePuzzletype.set('settings', app.vue.data.user.settings);
};
