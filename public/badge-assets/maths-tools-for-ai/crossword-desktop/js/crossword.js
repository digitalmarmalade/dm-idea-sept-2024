var app = window.app || {};

(function () {

    'use strict';

    /**
     * Handle a click event triggered from within the cell component.
     * @param {VueComponent} component 'component-cell'
     * @param {CustomEvent} event
     */
    app.handlers.cellClick = function (component, event) {
        //  if blank cell then ignore
        if (component.item.isBlank) {
            return false;
        }
        //  set helper vars
        var currentCell = component.$root.active.cell;
        var currentDirection = component.$root.active.direction;
        var hasAcrossClue = component.item.across !== undefined;
        var hasDownClue = component.item.down !== undefined;
        //  set active direction
        if (component.item.id === currentCell) {
            //  is current cell so switch direction if possible
            if (currentDirection === 'across') {
                if (hasDownClue) {
                    component.$root.active.direction = 'down';
                }
            } else {
                if (hasAcrossClue) {
                    component.$root.active.direction = 'across';
                }
            }
        } else {
            //  not current cell so determine direction
            if (hasAcrossClue) {
                if (hasDownClue && component.$root.isWordCompleted(component.item.across)) {
                    //  has across & down clue and across is completed
                    component.$root.active.direction = 'down';
                } else {
                    //  no down clue or across is not completed
                    component.$root.active.direction = 'across';
                }
            } else {
                //  only has down clue
                component.$root.active.direction = 'down';
            }
        }
        //  set active cell
        component.$root.active.cell = component.item.id;
        //  save
        app.helpers.saveActiveState();
        app.helpers.tsSet('cellClick');
    };

    /**
     * Handle a click event triggered from within the clue component.
     * @param {VueComponent} component 'component-clue'
     * @param {CustomEvent} event
     */
    app.handlers.clueClick = function (component, event) {
        //  set first cell of word
        component.$root.active.cell = component.$root.puzzle.words[component.item.word].cells[0].id;
        //  set direction
        component.$root.active.direction = component.item.direction;
        //  save
        app.helpers.saveActiveState();
        app.helpers.tsSet('clueClick');
    };

    /**
     * Handle a click event triggered from within the keyboard-key component.
     * @param {VueComponent} component 'component-keyboard-key'
     * @param {CustomEvent} event
     */
    app.handlers.letterDeleted = function (component, event) {
        //  change cell
        if (!app.helpers.isFirstCellOfWord()) {
            if (app.vue.data.active.direction === 'down') {
                app.helpers.setCellActiveUp(false);
            } else {
                app.helpers.setCellActiveLeft(false);
            }
        }
    };

    /**
     * Handle a click event triggered from within the keyboard-key component.
     * @param {VueComponent} component 'component-keyboard-key'
     * @param {CustomEvent} event
     */
    app.handlers.letterEntered = function (component, event) {
        var activeCell = component.$root.active.cell;
        var cellName = 'cell_' + (activeCell - 1);
        //  update user answers
        component.$root.user.answers[cellName] = component.item.display;
        //  update user notes
        var note = component.$root.modes.pencil ? 1 : 0;
        component.$root.user.notes[cellName] = note;
        //  save
        app.helpers.saveUserState();
        app.helpers.tsSet('letterEntered');
        //  change cell
        app.helpers.setCellActiveNext();
        //  play audio?
        if (app.media.supports.audio && app.vue.data.user.settings.soundskeyboard) {
            new Audio('mp3/tock.mp3').play();
        }
    };

    /**
     * Take supplied cell object and return a more helpful version
     * @param {object} cell
     * @retrun {object} obj
     */
    app.helpers.getCellObject = function (cell) {

        var obj = {
            isBlank: cell.Blank === 'blank',
            letter: cell.Letter,
            id: cell.SquareID,
        };

        if (cell.Number !== '') {
            obj.number = cell.Number;
        }

        if (cell.WordAcrossID !== '') {
            obj.across = cell.WordAcrossID;
        }

        if (cell.WordDownID !== '') {
            obj.down = cell.WordDownID;
        }

        return obj;
    };

    /**
     * Get an array of clues adding some helper info
     * @param {array} clues
     * @param {string} direction
     * @param {integer} cluesetidx
     * @retrun {array} arr
     */
    app.helpers.getCluesArray = function (clues, direction, cluesetidx) {

        var arr = [];

        for (var i = 0; i < clues.length; i++) {
            var obj = clues[i];
            obj.direction = direction.toLowerCase();
            obj.cluesetidx = cluesetidx;
            arr.push(obj);
        }

        return arr;
    };

    /**
     * Get the default active state object
     * @return {object}
     */
    app.helpers.getDefaultActiveState = function () {
        return {
            clueset: 0,
            cell: app.puzzle.words[1].cells[0].id,
            direction: app.puzzle.words[1].cells[0].across ? 'across' : 'down',
        }
    };

    /**
     * Get the default answer state object
     * @return {object}
     */
    app.helpers.getDefaultUserState = function () {
        var grid = app.vue.data.source.grid;

        for (var w = 0; w < grid.length; w++) {
            for (var h = 0; h < grid[0].length; h++) {
                var id = (h * grid.length) + w;
                app.vue.data.user.answers['cell_' + id] = ' ';
                app.vue.data.user.notes['cell_' + id] = 0;
            }
        }

        app.vue.data.user.time = 0;

        return app.vue.data.user;
    };

    /**
     * Get the first cell of specified word using current settings
     * @param {integer} word
     * @param {boolean} skipFilled
     * @return {integer}
     */
    app.helpers.getFirstCellOfWord = function (word, skipFilled) {

        if (app.vue.model.puzzle.words[word] === undefined) {
            return null;
        }

        skipFilled = skipFilled === undefined ? false : skipFilled;
        var firstCell = null;
        var cells = app.vue.model.puzzle.words[word].cells;

        for (var r = 0; r < cells.length; r++) {
            var id = cells[r].id;
            var answer = app.vue.model.user.answers['cell_' + (id - 1)];
            if (skipFilled === false || answer === ' ') {
                return id;
            }
            firstCell = firstCell === null ? id : firstCell;
        }
        return firstCell;
    };

    /**
     * Determine whether a given cell if the first of it's word
     * @param {integer} word
     * @param {integer} cell
     * @return {boolean}
     */
    app.helpers.isFirstCellOfWord = function (word, cell) {
        word = word || app.vue.model.activeWord;
        cell = cell || app.vue.data.active.cell;
        var cells = app.vue.model.puzzle.words[word].cells;

        return cell === cells[0].id;
    }

    /**
     * Determine whether a given cell if the last of it's word
     * @param {integer} word
     * @param {integer} cell
     * @return {boolean}
     */
    app.helpers.isLastCellOfWord = function (word, cell) {
        word = word || app.vue.model.activeWord;
        cell = cell || app.vue.data.active.cell;
        var cells = app.vue.model.puzzle.words[word].cells;

        return cell === cells[cells.length - 1].id;
    }

    /**
     * Start puzzle
     */
    app.helpers.puzzleStart = function (vm) {
        app.timer.start(app.vue.data.user.time);
    };

    /**
     * Callback called from timer class
     */
    app.helpers.puzzleUpdate = function (count) {
        app.vue.data.user.time = count;
        app.helpers.saveUserTime();
    };

    /**
     * Scroll current clue into view
     */
    app.helpers.scrollToClue = function () {
        setTimeout(
            function () {
                document.querySelector('li.current').scrollIntoView(false);
            },
            0
        );
    };

    /**
     * Set active cell to be cell down from current
     */
    app.helpers.setCellActiveDown = function (skip) {
        var cell = app.vue.data.active.cell;
        var dims = this.getGridDimensions();
        var loc = this.getCellLocation(cell);
        var col = loc.col;
        var skip = skip === undefined ? app.vue.data.user.settings.cellsskipfilled : skip;

        for (var r = 1; r < dims.rows; r++) {
            var row = loc.row + r > dims.rows ? 1 : loc.row + r;
            var newCell = app.vue.model.puzzle.grid[row - 1][col - 1]
            if (!newCell.isBlank) {
                if (!skip || app.vue.data.user.answers['cell_' + (newCell.id - 1)].trim() === '') {
                    app.vue.data.active.cell = newCell.id;
                    if (newCell[app.vue.data.active.direction] === undefined) {
                        app.vue.data.active.direction = app.vue.data.active.direction === 'across' ? 'down' : 'across';
                    }
                    return false;
                }
            }
        }
    };

    /**
     * Set active cell to be cell left from current
     */
    app.helpers.setCellActiveLeft = function (skip) {
        var cell = app.vue.data.active.cell;
        var dims = this.getGridDimensions();
        var loc = this.getCellLocation(cell);
        var row = loc.row;
        var skip = skip === undefined ? app.vue.data.user.settings.cellsskipfilled : skip;

        for (var c = 1; c < dims.cols; c++) {
            var col = loc.col - c < 1 ? dims.cols : loc.col - c;
            var newCell = app.vue.model.puzzle.grid[row - 1][col - 1]
            if (!newCell.isBlank) {
                if (!skip || app.vue.data.user.answers['cell_' + (newCell.id - 1)].trim() === '') {
                    app.vue.data.active.cell = newCell.id;
                    if (newCell[app.vue.data.active.direction] === undefined) {
                        app.vue.data.active.direction = app.vue.data.active.direction === 'across' ? 'down' : 'across';
                    }
                    return false;
                }
            }
        }
    };

    /**
     * Get the default answer state object
     * @return {object}
     */
    app.helpers.getDefaultUserPlayStatus = function () {
        return {
            first: (new Date()).getTime(),
            last: (new Date()).getTime(),
            started: (new Date()).getTime(),
            completed: null,
        };
    };

    /**
     * Get next cell of word
     */
    app.helpers.getNextCellOfWord = function (skip) {
        var word = app.vue.model.puzzle.words[app.vue.model.activeWord];
        var cells = word.cells;
        var foundCurrent = false;
        var skip = skip === undefined ? app.vue.data.user.settings.cellsskipfilled : skip;
        var answers = app.vue.data.user.answers;

        for (var c = 0; c < cells.length; c++) {
            var cell = word.cells[c];
            var id = cell.id;
            if (foundCurrent) {
                if (!skip || answers['cell_' + (id - 1)].trim() === '') {
                    return cell;
                }
            }
            if (id === app.vue.data.active.cell) {
                foundCurrent = true;
            }
        }
        return cell;
    }

    /**
     * Initialise Analytics
     */
    app.helpers.initialiseAnalytics = function () {
        // if (app.marmalytics.cfg === null) {
        //     console.log('Need analytics config to be set');
        //     return false;
        // }
        // app.marmalytics.setReference(app.storage.prefix);
        // app.marmalytics.setData(this);
    };

    /**
     * Set active cell to be next cell after current
     */
    app.helpers.setCellActiveNext = function (skip) {
        var cell = app.vue.data.active.cell;
        var dims = this.getGridDimensions();
        var loc = this.getCellLocation(cell);
        var row = loc.row;
        var skip = skip === undefined ? app.vue.data.user.settings.cellsskipfilled : skip;
        var completed = app.vue.model.activeWordCompleted;
        var lastLetter = app.helpers.isLastCellOfWord();

        if (lastLetter) {
            if (completed && !app.vue.data.user.settings.answersautocheck) {
                app.vue.model.nextClue();
            }
            return false;
        }
        var newCell = this.getNextCellOfWord();
        app.vue.data.active.cell = newCell.id;

    };

    /**
     * Set active cell to be cell right from current
     */
    app.helpers.setCellActiveRight = function (skip) {
        var cell = app.vue.data.active.cell;
        var dims = this.getGridDimensions();
        var loc = this.getCellLocation(cell);
        var row = loc.row;
        var skip = skip === undefined ? app.vue.data.user.settings.cellsskipfilled : skip;

        for (var c = 1; c < dims.cols; c++) {
            var col = loc.col + c > dims.cols ? 1 : loc.col + c;
            var newCell = app.vue.model.puzzle.grid[row - 1][col - 1]
            if (!newCell.isBlank) {
                if (!skip || app.vue.data.user.answers['cell_' + (newCell.id - 1)].trim() === '') {
                    app.vue.data.active.cell = newCell.id;
                    if (newCell[app.vue.data.active.direction] === undefined) {
                        app.vue.data.active.direction = app.vue.data.active.direction === 'across' ? 'down' : 'across';
                    }
                    return false;
                }
            }
        }
    };

    /**
     * Set active cell to be cell up from current
     */
    app.helpers.setCellActiveUp = function (skip) {
        var cell = app.vue.data.active.cell;
        var dims = this.getGridDimensions();
        var loc = this.getCellLocation(cell);
        var col = loc.col;
        var skip = skip === undefined ? app.vue.data.user.settings.cellsskipfilled : skip;

        for (var r = 1; r < dims.rows; r++) {
            var row = loc.row - r < 1 ? dims.rows : loc.row - r;
            var newCell = app.vue.model.puzzle.grid[row - 1][col - 1]
            if (!newCell.isBlank) {
                if (!skip || app.vue.data.user.answers['cell_' + (newCell.id - 1)].trim() === '') {
                    app.vue.data.active.cell = newCell.id;
                    if (newCell[app.vue.data.active.direction] === undefined) {
                        app.vue.data.active.direction = app.vue.data.active.direction === 'across' ? 'down' : 'across';
                    }
                    return false;
                }
            }
        }
    };

}());
