var app = window.app || {};
app.drag = window.app.drag || {};

(function () {

    'use strict';

    app.drag.isTouch = (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch);

    app.drag.grid = {
        cols: 5,
        rows: 5,
    };

    app.drag.tmp = {
        blocks: {},
        current: {
            id: 0,
        },
        dims: {
            cells: {},
            holder: {
                border: {},
            },
            selector: {},
            scale: 1,
        },
        end: {},
        start: {},
    };

    app.drag.addSolutionBox = function (word, id) {

        'use strict';

        var cellX1 = word.start.col,
            cellY1 = word.start.row,
            cellX2 = word.end.col,
            cellY2 = word.end.row,
            o = this,
            cellCountX = cellX2 - cellX1,
            cellCountY = cellY2 - cellY1,
            ver = 0,
            hor = 0,
            rot = 0,
            hypLen = 0,
            baseRot = 0,
            w,
            h,
                      
            tweenObject = {};

        if (cellCountX + cellX1 > app.drag.grid.cols) {
            cellCountX = app.drag.grid.cols - cellX1;
        }

        if (cellCountY + cellY1 > app.drag.grid.rows) {
            cellCountY = app.drag.grid.rows - cellY1;
        }

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


        w = (cellCountX * app.drag.tmp.dims.cells.w) + 1; // add 1 so you don't get a double margin
        h = (cellCountY * app.drag.tmp.dims.cells.h) + 1; // add 1 so you don't get a double margin

        tweenObject.rotation = baseRot + rot;
        tweenObject.transformOrigin = '20px';

        tweenObject.height = app.drag.tmp.dims.cells.h;
        hypLen = Math.sqrt(Math.pow((cellCountY), 2) + Math.pow((cellCountX), 2));
        //console.log('Hypotenuse:'+hypLen, 'Rotation:'+tweenObject.rotation);
        tweenObject.width = parseInt(((hypLen + 1) * app.drag.tmp.dims.cells.w), 10);
        tweenObject.x = (cellX1 * app.drag.tmp.dims.cells.w) + app.drag.tmp.dims.holder.border.x;
        tweenObject.y = (cellY1 * app.drag.tmp.dims.cells.h) + app.drag.tmp.dims.holder.border.y;
        $('#viewer-tpl').clone().attr('id', 'solution-' + id).addClass('solution done').css('z-index', -5000 + id).insertAfter('#viewer-tpl');

        tweenObject.height *= app.drag.tmp.dims.selector.w;
        tweenObject.y += (app.drag.tmp.dims.cells.h * app.drag.tmp.dims.selector.padding) + 1;

        TweenMax.set($('#solution-' + id), tweenObject);
        $('.solution').show();

    };

    app.drag.create = function (x1, y1, id) {

        'use strict';

        app.drag.tmp.blocks[id] = {
            id: id,
            active: true,
        };

        $('#viewer-tpl')
            .clone()
            .attr('id', 'viewer-' + id)
            .css('z-index', -5000 + id)
            .insertAfter('#viewer-tpl');

        TweenMax.set(
            $('#viewer-' + id), {
                
                x: x1 / app.drag.tmp.dims.scale,
                y: y1 / app.drag.tmp.dims.scale,
            }
        );

    };

    app.drag.item = function (c) {

        'use strict';

        if (!app.helpers.isGridActive()) {
            return false;
        }

        if (!app.drag.tmp.current.id || !app.drag.tmp.blocks[app.drag.tmp.current.id]) {
            return false;
        }

        var o = app;

        c = app.drag.restrictAngles(c);
        c = app.drag.restrictBounds(c);

        app.drag.tmp.end.row = c.y2;
        app.drag.tmp.end.col = c.x2;

        app.drag.updateItemWithNewRowColCounts($('#viewer-' + app.drag.tmp.blocks[app.drag.tmp.current.id].id), c.row, c.col);

        return false;

    };

    app.drag.onDrag = function (e) {

        'use strict';

        if (!app.helpers.isGridActive()) {
            return false;
        }

        var c = {};

        if (app.drag.isTouch && e.touches) {
            app.drag.tmp.end.x = e.touches[0].pageX - app.drag.tmp.dims.holder.x;
            app.drag.tmp.end.y = e.touches[0].pageY - app.drag.tmp.dims.holder.y;
        } else {
            app.drag.tmp.end.x = e.pageX - app.drag.tmp.dims.holder.x;
            app.drag.tmp.end.y = e.pageY - app.drag.tmp.dims.holder.y;
        }

                                    
        c.x1 = (app.drag.tmp.start.x / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.x;
        c.y1 = (app.drag.tmp.start.y / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.y;
        c.x2 = (app.drag.tmp.end.x / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.x;
        c.y2 = (app.drag.tmp.end.y / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.y;

        //c = app.drag.restrictBounds(c);

        app.drag.item(c);

    };

    app.drag.onEnd = function (e) {

        'use strict';

        if (!app.helpers.isGridActive()) {
            return false;
        }

        var o = app,
            c = {};

        // if (o.user.game.settings.solutionShowing == true) {
        // return false;
        // }

        c.x1 = (app.drag.tmp.start.x / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.x;
        c.y1 = (app.drag.tmp.start.y / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.y;
        c.x2 = (app.drag.tmp.end.x / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.x;
        c.y2 = (app.drag.tmp.end.y / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.y;

        app.drag.snap(c, e);

    };

    app.drag.onStart = function (e) {

        'use strict';

        if (!app.helpers.isGridActive()) {
            return false;
        }

        app.drag.tmp.current.id++;

        var o = app,
            x1,
            y1,
            rowCol;

        //o.clearChecks();
        //o.clearOnStates();

        // if (o.user.game.settings.solutionShowing == true) {
        // return false;
        // }

        if (o.device.settings.isTouch && e.touches) {
            app.drag.tmp.start.x = e.touches[0].pageX - app.drag.tmp.dims.holder.x;
            app.drag.tmp.start.y = e.touches[0].pageY - app.drag.tmp.dims.holder.y;
        } else {
            app.drag.tmp.start.x = e.pageX - app.drag.tmp.dims.holder.x;
            app.drag.tmp.start.y = e.pageY - app.drag.tmp.dims.holder.y;
        }

        x1 = (app.drag.tmp.start.x / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.x;
        y1 = (app.drag.tmp.start.y / app.drag.tmp.dims.scale) - app.drag.tmp.dims.holder.border.y;

        rowCol = app.helpers.getColRowFromCoords(x1, y1);
        app.drag.tmp.start.row = rowCol.row;
        app.drag.tmp.start.col = rowCol.col;

        app.drag.create(x1, y1, app.drag.tmp.current.id);

    };

    app.drag.restrictAngles = function (c) {

        'use strict';

        var o = this,
            cell1 = app.helpers.getColRowFromCoords(c.x1, c.y1),
            cell2 = app.helpers.getColRowFromCoords(c.x2, c.y2),
            returnObj = {},
            cardinal = '',
            ordinal = '',
            cardinalOrdinal,
            angle = 999,
            ww = c.x2 - c.x1,
            www = Math.abs(ww),
            hh = c.y2 - c.y1,
            hhh = Math.abs(hh);

        //console.log('restrictAngles', cell1.row, cell1.col, cell2.row, cell2.col, reduceBy);

        //  get compass cardinal
        if (hhh > www && hh < 0) {
            cardinal = 'N';
        }
        if (www > hhh && ww > 0) {
            cardinal = 'E';
            //cell2.col -= reduceBy;
        }
        if (hhh > www && hh > 0) {
            cardinal = 'S';
            //cell2.row -= reduceBy;
        }
        if (www > hhh && ww < 0) {
            cardinal = 'W';
            //cell2.col += reduceBy;
        }

        //  get compass ordinal
        if (ww > 0 && hh < 0 && www != hhh) {
            ordinal = 'NE';
        }
        if (ww > 0 && hh > 0 && www != hhh) {
            ordinal = 'SE';
        }
        if (ww < 0 && hh > 0 && www != hhh) {
            ordinal = 'SW';
        }
        if (ww < 0 && hh < 0 && www != hhh) {
            ordinal = 'NW';
        }

        cardinalOrdinal = cardinal + ordinal;

        switch (cardinalOrdinal) {

            case 'NNE':
                angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.col = cell1.col + (cell1.row - cell2.row);
                } else {
                    cell2.col = cell1.col;
                }
                break;

            case 'ENE':
                angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.row = cell1.row + (cell1.col - cell2.col);
                } else {
                    cell2.row = cell1.row;
                }
                break;

            case 'ESE':
                angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.row = cell1.row - (cell1.col - cell2.col);
                } else {
                    cell2.row = cell1.row;
                }
                break;

            case 'SSE':
                angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.col = cell1.col - (cell1.row - cell2.row);
                } else {
                    cell2.col = cell1.col;
                }
                break;

            case 'SSW':
                angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.col = cell1.col + (cell1.row - cell2.row);
                } else {
                    cell2.col = cell1.col;
                }
                break;

            case 'WSW':
                angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.row = cell1.row + (cell1.col - cell2.col);
                } else {
                    cell2.row = cell1.row;
                }
                break;

            case 'WNW':
                angle = Math.atan((www) / (hhh)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.row = cell1.row - (cell1.col - cell2.col);
                } else {
                    cell2.row = cell1.row;
                }
                break;

            case 'NNW':
                angle = Math.atan((hhh) / (www)) * (180 / Math.PI);
                if (angle < 67.5) {
                    cell2.col = cell1.col - (cell1.row - cell2.row);
                } else {
                    cell2.col = cell1.col;
                }
                break;

        }

        returnObj.x1 = cell1.col;
        returnObj.x2 = cell2.col;
        returnObj.y1 = cell1.row;
        returnObj.y2 = cell2.row;
        returnObj.col = cell2.col - cell1.col;
        returnObj.row = cell2.row - cell1.row;
        returnObj.diag = angle < 67.5;

        return returnObj;

    };

    app.drag.restrictBounds = function (c) {

        var reduceColsBy = 0;
        var reduceRowsBy = 0;

        if (c.x2 >= app.drag.grid.cols) {
            reduceColsBy = c.x2 - (app.drag.grid.cols - 1);
        }
        if (c.x2 < 0) {
            reduceColsBy = c.x2;
        }
        if (c.y2 >= app.drag.grid.rows) {
            reduceRowsBy = c.y2 - (app.drag.grid.rows - 1);
        }
        if (c.y2 < 0) {
            reduceRowsBy = c.y2;
        }

        if (reduceRowsBy !== 0 && reduceColsBy === 0) {
            c.y2 -= reduceRowsBy;
            c.row = c.y2 - c.y1;
            if (c.diag) {
                c.x2 = c.x2 < c.x1 ? c.x2 + Math.abs(reduceRowsBy) : c.x2 - Math.abs(reduceRowsBy);
                c.col = c.x2 - c.x1;
            }
        }

        if (reduceColsBy !== 0 && reduceRowsBy === 0) {
            c.x2 -= reduceColsBy;
            c.col = c.x2 - c.x1;
            if (c.diag) {
                c.y2 = c.y2 < c.y1 ? c.y2 + Math.abs(reduceColsBy) : c.y2 - Math.abs(reduceColsBy);
                c.row = c.y2 - c.y1;
            }
        }

        if (reduceRowsBy !== 0 && reduceColsBy !== 0) {
            var reduceBy = Math.abs(reduceRowsBy) > Math.abs(reduceColsBy) ? 'R' : 'C';

            c.x2 -= (reduceBy === 'C' ? reduceColsBy : (reduceColsBy > 0 ? Math.abs(reduceRowsBy) : Math.abs(reduceRowsBy) * -1))
            c.y2 -= (reduceBy === 'R' ? reduceRowsBy : (reduceRowsBy > 0 ? Math.abs(reduceColsBy) : Math.abs(reduceColsBy) * -1))
            c.col = c.x2 - c.x1;
            c.row = c.y2 - c.y1;
        }

        return c;

    };

    app.drag.restrictSnapAngles = function (y1, x1, y2, x2) {

        'use strict';

        var o = app,
            gridW = app.drag.grid.cols,
            gridH = app.drag.grid.rows,
            direction = app.helpers.getSelectionDirection(x1, y1, x2, y2),
            adjCols = 0,
            adjRows = 0,
            adjColsAbs = 0,
            adjRowsAbs = 0,
            adj = 0,
            returnObj = {};

        //  adjust end position to be on grid
        if (x2 > (gridW - 1)) {
            adjCols = x2 - (gridW - 1);
        }
        if (x2 < 0) {
            adjCols = x2;
        }
        if (y2 > (gridH - 1)) {
            adjRows = y2 - (gridH - 1);
        }
        if (y2 < 0) {
            adjRows = y2;
        }
        adjColsAbs = Math.abs(adjCols);
        adjRowsAbs = Math.abs(adjRows);

        //  adjust end position if now not at 45 degrees
        switch (direction) {

            case 'NE':
                if (adjCols > 0 && adjRows === 0) {
                    adjRows = adjCols * -1;
                } else if (adjCols === 0 && adjRows < 0) {
                    adjCols = adjRows * -1;
                } else if (adjCols > 0 && adjRows < 0) {
                    adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
                    adjCols = adj;
                    adjRows = adj * -1;
                }
                break;
            case 'SE':
                if (adjCols > 0 && adjRows === 0) {
                    adjRows = adjCols;
                }
                if (adjCols === 0 && adjRows > 0) {
                    adjCols = adjRows;
                }
                if (adjCols > 0 && adjRows > 0) {
                    adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
                    adjCols = adj;
                    adjRows = adj;
                }
                break;
            case 'SW':
                if (adjCols < 0 && adjRows === 0) {
                    adjRows = adjCols * -1;
                }
                if (adjCols === 0 && adjRows > 0) {
                    adjCols = adjRows * -1;
                }
                if (adjCols < 0 && adjRows > 0) {
                    adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
                    adjCols = adj * -1;
                    adjRows = adj;
                }
                break;
            case 'NW':
                if (adjCols < 0 && adjRows === 0) {
                    adjRows = adjCols;
                }
                if (adjCols === 0 && adjRows < 0) {
                    adjCols = adjRows;
                }
                if (adjCols < 0 && adjRows < 0) {
                    adj = adjColsAbs > adjRowsAbs ? adjColsAbs : adjRowsAbs;
                    adjCols = adj * -1;
                    adjRows = adj * -1;
                }
                break;

        } //  end switch


        returnObj.x1 = x1 - adjCols;
        returnObj.x2 = x2 - adjCols;
        returnObj.y1 = y1 - adjRows;
        returnObj.y2 = y2 - adjRows;
        returnObj.col = x2 - x1 - adjCols;
        returnObj.row = y2 - y1 - adjRows;

        return returnObj;

    };

    app.drag.snap = function (c, e) {

        'use strict';

        var o = app,
            cellX1,
            cellY1,
            cellCountX,
            cellCountY,
            adjustedData = {},
            dataInfo;

        adjustedData = app.drag.restrictSnapAngles(app.drag.tmp.start.row, app.drag.tmp.start.col, app.drag.tmp.end.row, app.drag.tmp.end.col);

        app.drag.tmp.end.row = adjustedData.y2;
        app.drag.tmp.end.col = adjustedData.x2;

        if (!app.drag.tmp.current.id || !app.drag.tmp.blocks[app.drag.tmp.current.id]) {
            return false;
        }

        app.drag.tmp.blocks[app.drag.tmp.current.id].x1 = app.drag.tmp.start.col;
        app.drag.tmp.blocks[app.drag.tmp.current.id].y1 = app.drag.tmp.start.row;
        app.drag.tmp.blocks[app.drag.tmp.current.id].x2 = app.drag.tmp.end.col;
        app.drag.tmp.blocks[app.drag.tmp.current.id].y2 = app.drag.tmp.end.row;
        app.drag.tmp.blocks[app.drag.tmp.current.id].cols = adjustedData.col;
        app.drag.tmp.blocks[app.drag.tmp.current.id].rows = adjustedData.row;
        dataInfo = (cellX1 + 1) + ',' + (cellY1 + 1) + ',' + cellCountX + ',' + cellCountY;

        app.drag.updateItemWithNewRowColCounts($('#viewer-' + app.drag.tmp.blocks[app.drag.tmp.current.id].id), adjustedData.row, adjustedData.col);

        TweenMax.set($('#dragger'), {
            x: 0,
            y: 0
        });
        $('.viewer').removeClass('latest');
        $('#viewer-' + app.drag.tmp.current.id).addClass('done latest').attr('data-info', dataInfo).attr('data-ref', app.drag.currentBoxId);
        app.drag.currentBoxId = app.drag.currentBoxId + 1;

        

        app.drag.tmp.blocks[app.drag.tmp.current.id].answer = app.helpers.getIdOfEndSquare(app.drag.tmp.start.col, app.drag.tmp.end.col, app.drag.tmp.start.row, app.drag.tmp.end.row);

        //app.helpers.updateUserBlocks();

                                          
                                                       
                                                           
         

        // if (o.user.actions.firstLetterEnteredOfVisit) {
        // o.user.actions.firstLetterEnteredOfVisit = false;
        // o.addThisPuzzleToRecentlyPlayedList();
        // o.sendUtagClickEngagementEvent('puzzle started');
        // }

        var obj = {
            start: {
                row: app.drag.tmp.start.row,
                col: app.drag.tmp.start.col,
            },
            end: {
                row: app.drag.tmp.end.row,
                col: app.drag.tmp.end.col,
            },
        };

        app.vue.model.$set(app.vue.data.user.answers, app.drag.tmp.current.id, obj);

        app.helpers.saveUserState();

        app.helpers.checkAgainstCorrectSolution(app.drag.tmp.start.row, app.drag.tmp.start.col, app.drag.tmp.end.row, app.drag.tmp.end.col, app.drag.tmp.current.id);

        for (var i = 0; i < app.vue.model.puzzle.words.length; i++) {
            var obj = JSON.parse(JSON.stringify(app.vue.model.puzzle.words[i]));
            if (app.drag.tmp.start.row === obj.start.row &&
                app.drag.tmp.start.col === obj.start.col &&
                app.drag.tmp.end.row === obj.end.row &&
                app.drag.tmp.end.col === obj.end.col
            ) {
                obj.id = i;
                obj.end.id = app.helpers.getCellIdFromColRow(obj.end.col, obj.end.row);
                obj.start.id = app.helpers.getCellIdFromColRow(obj.start.col, obj.start.row);
                app.helpers.dispatchEvent('word-found', obj);
            }
        }

    };

    app.drag.updateItemWithNewRowColCounts = function (el, rowCount, colCount) {

        'use strict';

        var o = app,
            tweenObject = {},
            hypLen,
            defaultRotation = 0,
            userRotation = 0;

        tweenObject.x = app.drag.tmp.start.col * app.drag.tmp.dims.cells.w + 5;
        tweenObject.y = app.drag.tmp.start.row * app.drag.tmp.dims.cells.h + 10;

        tweenObject.width = app.drag.tmp.dims.cells.w;
        tweenObject.height = app.drag.tmp.dims.cells.h;

        tweenObject.transformOrigin = '30px';
        tweenObject.transformOrigin = app.drag.tmp.dims.cells.w / 2 + 'px';

        if (colCount < 0) {
            defaultRotation += 180;
        }

        if (rowCount !== 0 || colCount !== 0) {
            userRotation = Math.atan((rowCount) / (colCount));
            userRotation = userRotation * (180 / Math.PI);
        }
        tweenObject.rotation = defaultRotation + userRotation;

        if (rowCount !== 0 || colCount !== 0) {
            hypLen = Math.sqrt(Math.pow((rowCount), 2) + Math.pow((colCount), 2));
            tweenObject.width = parseInt(((hypLen + 1) * app.drag.tmp.dims.cells.w), 10);
        }

        tweenObject.height *= app.drag.tmp.dims.selector.w;
        tweenObject.y += (app.drag.tmp.dims.cells.h * app.drag.tmp.dims.selector.padding);

        TweenMax.set(el, tweenObject);

    };

}());