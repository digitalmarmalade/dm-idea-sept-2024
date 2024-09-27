var app = window.app || {};

(function () {

    'use strict';

    delete app.vue.data.last;
    delete app.vue.data.modes;
    delete app.vue.computed.isCompletedWithoutErrors;
    delete app.vue.computed.keys;
    delete app.vue.computed.listCellsError;
    delete app.vue.computed.totalCellsCompleted;
    delete app.vue.computed.totalCellsPercent;

    app.vue.data.check = {
        grid: false,
    };

    /*  ---------------------------  */
    /*    Vue Computed Properties    */
    /*  ---------------------------  */

    app.vue.computed.highlightedCells = function () {

        var ids = [],
            words = this.$root.user.answers;

        if (app.vue.data.check.grid === true) {
            words = this.$root.puzzle.words;
        }

        for (var i in words) {
            var word = words[i];
            ids = ids.concat(app.helpers.getCellIdsBetweenGivenIds(app.helpers.getCellIdFromColRow(word.start.col, word.start.row), app.helpers.getCellIdFromColRow(word.end.col, word.end.row)));
        }

        return ids;
    };

    app.vue.computed.isCompleted = function () {
        for (var i in this.$root.puzzle.words) {
            if (this.$root.$refs['word' + i][0].found !== true) {
                return false;
            }
        }
        return true;
    };

    app.vue.computed.isGameOver = function () {

        if (app.vue.data.config.hasLives && app.vue.data.user.lives <= 0) {
            return true;
        }

        return false;
    };

    /*  ----------------------  */
    /*    Vue Global Methods    */
    /*  ----------------------  */

    app.vue.methods.destroyLifeAnimation = function () {

        var lifeAnimations = document.querySelectorAll('.life-animate');

        lifeAnimations.forEach(resetLives);

        function resetLives(item, index) {
            item.innerHTML = "";
        }
    };

    app.vue.methods.getPuzzleObject = function () {

        var source = app.vue.data.source;

        app.config.related = source.meta.related || 'Crossword';

        var obj = {
            grid: [],
            words: [],
        };

        //  grid
        var idx = 0;
        for (var r = 0; r < source.settings.rowCount; r++) {
            obj.grid[r] = [];
            for (var c = 0; c < source.settings.colCount; c++) {
                obj.grid[r][c] = {
                    letter: source.celldata[idx],
                    id: idx,
                };
                idx++;
            }
        }

        //  words
        var answers = source.settings.solution.split(';');
        obj.words = [];
        for (var iLoop = 0; iLoop < answers.length; iLoop = iLoop + 1) {
            var cells = answers[iLoop].split(',');
            var wordObj = app.helpers.getWordFromStartEndCells(cells[0] - 1, cells[1] - 1);
            obj.words.push(wordObj);
        }

        return obj;

    };

    app.vue.methods.isWordCompleted = function (id) {
        if (this.$root.puzzle.words[id] === undefined) {
            return null;
        }
        var isCompleted = true;
        // var cells = this.$root.puzzle.words[id].cells;
        // for (var r = 0; r < cells.length; r++) {
        // var id = cells[r].id;
        // var answer = this.$root.user.answers['cell_' + (id - 1)];
        // if (answer === ' ') {
        // isCompleted = false;
        // }
        // }
        return isCompleted;
    };

    app.vue.methods.resetGrid = function () {
        app.helpers.resetUserState();
        if (app.vue.data.config.hasTimer) {
            app.timer.restart();
        }
        $('body').addClass('intro-complete')
        app.vue.data.show.unused = false;
        //this.hideModal();
        //app.vue.methods.destroyLifeAnimation();
    };

    app.vue.methods.revealGrid = function () {

        app.vue.model.$set(app.vue.data.check, 'grid', true);
        app.vue.model.$set(app.vue.data.show, 'settings', false);
        this.hideModal();
        $('.viewer').hide();

        var words = app.vue.model.puzzle.words;

        for (var iLoop = 0; iLoop < words.length; iLoop = iLoop + 1) {
            var word = words[iLoop];
            app.drag.addSolutionBox(word, iLoop);
        }

        this.hideModal();
    };

    app.vue.methods.wrapperClicked = function (modal) {
        if (app.vue.data.check.grid === true) {
            app.helpers.hideSolution();
        }
        if (app.vue.data.show.settings) {
            return false;
        }
        this.resetActions();
    };
}());
