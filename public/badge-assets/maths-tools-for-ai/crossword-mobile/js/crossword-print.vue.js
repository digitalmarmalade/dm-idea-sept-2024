var app = window.app || {};

(function () {

    'use strict';

    /*  ---------------------------  */
    /*    Vue Computed Properties    */
    /*  ---------------------------  */

    app.vue.computed.activeClue = function () {
        return this.puzzle.clues[this.activeWord];
    };

    app.vue.computed.activeWord = function () {
        return this.puzzle.cells[this.active.cell][this.active.direction];
    };

    app.vue.computed.activeWordCompleted = function () {

        var isCompleted = true;
        var word = this.activeWord;
        var cells = this.$root.puzzle.words[word].cells;

        for (var r = 0; r < cells.length; r++) {
            var id = cells[r].id;
            var answer = this.$root.user.answers['cell_' + (id - 1)];
            if (answer === ' ') {
                isCompleted = false;
            }
        }
        return isCompleted;

    };

    app.vue.created = function () {
        this.$root.$on('keyup-arrow', this.keyArrow);
        this.$root.$on('keyup-enter', this.keyEnter);
    };

    /*  ------------------  */
    /*    Vue mounted       */
    /*  ------------------  */

    app.vue.mounted = function () {

        var acrossHeight = document.getElementById("clue-set--across").offsetHeight;
        var downHeight = document.getElementById("clue-set--down").offsetHeight;
        var tallestClue = Math.max(acrossHeight, downHeight);

        var startFont = 28;
        var minimumFont = 10;

        let root = document.documentElement;

        var cluesHeight;
        var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        document.getElementById('vue-container').style.height = 650 + "px";

        var availableHeight = 650; 

        setTimeout(function(){
          doIRun()
        }, 100);

        function doIRun() {
          checkMySizes();
        }

        function resizeMyText() {

            if(startFont <= minimumFont ){
                availableHeight = 10000;
            }

            startFont = startFont - 1;
            root.style.setProperty('--clue-font-size', startFont + "px");
        }

        function checkMySizes() {
          setTimeout(function(){ 

            acrossHeight = document.getElementById("clue-set--across").offsetHeight;
            downHeight = document.getElementById("clue-set--down").offsetHeight;
            tallestClue = Math.max(acrossHeight, downHeight);
        
            var parent = document.getElementById('vue-container')
            var p = document.createElement("p");
           // parent.append("[startFont: " + startFont + "]");

            // parent.append("height : " + h + " | acrossHeight : " + acrossHeight + " | downHeight: " + downHeight + " | tallestClue: " + tallestClue + " | availableHeight: " + availableHeight);
            //console.log("cluesHeight: " + cluesHeight);
            //console.log("availableHeight: " + availableHeight);

            if(tallestClue > availableHeight) {
                resizeMyText();
                doIRun();

             //   parent.append("|tallestClue: " + tallestClue + " | availableHeight:" + availableHeight);

            }
          }, 100);
        }


    };

    /*  ------------  */
    /*    Vue Data    */
    /*  ------------  */

    app.vue.data.keyboard = [
        ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P'],
        ['A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L'],
        ['Z', 'X', 'C', 'V', 'B', 'N', 'M', {
            code: 8,
            display: '<svg class="icon-button__icon"><use xlink:href="#iconDelete"></use></svg>',
            event: 'delete',
        }]
    ];

    app.vue.data.modes.grid = true;

    /*  ----------------------  */
    /*    Vue Global Methods    */
    /*  ----------------------  */

    app.vue.methods.getPuzzleObject = function () {

        var source = app.vue.data.source;
        var obj = {
            cells: [],
            clues: [],
            cluesets: [],
            copy: {},
            counts: {
                cells: {
                    active: 0,
                    blank: 0,
                    total: 0,
                },
            },
            feedback: source.feedback || {},
            grid: [],
            words: [],
        };

        obj.copy.title = source.copy.title;

        var grid = source.grid;
        for (var r = 0; r < grid.length; r++) {
            obj.grid[r] = [];
            for (var c = 0; c < grid[r].length; c++) {
                obj.grid[r][c] = app.helpers.getCellObject(grid[r][c]);
                obj.cells[grid[r][c].SquareID] = obj.grid[r][c];
                if (grid[r][c].WordAcrossID !== '') {
                    obj.words[grid[r][c].WordAcrossID] = obj.words[grid[r][c].WordAcrossID] || {
                        cells: []
                    };
                    obj.words[grid[r][c].WordAcrossID].cells.push(obj.grid[r][c]);
                }
                if (grid[r][c].WordDownID !== '') {
                    obj.words[grid[r][c].WordDownID] = obj.words[grid[r][c].WordDownID] || {
                        cells: []
                    };
                    obj.words[grid[r][c].WordDownID].cells.push(obj.grid[r][c]);
                }
                if (obj.grid[r][c].isBlank) {
                    obj.counts.cells.blank++;
                } else {
                    obj.counts.cells.active++;
                }
                obj.counts.cells.total++;
            }
        }

        var clues = source.copy.clues;
        var cluesetname = '';
        var cluesetidx = 0;
        for (var i = 0; i < clues.length; i++) {
            if (cluesetname !== '' && cluesetname !== clues[i].name) {
                cluesetidx++;
            }
            obj.cluesets[cluesetidx] = obj.cluesets[cluesetidx] || {
                name: clues[i].name,
                directions: [],
            };
            obj.cluesets[cluesetidx].directions.push({
                name: clues[i].title,
                clues: app.helpers.getCluesArray(clues[i].clues, clues[i].title, cluesetidx),
            });
            for (var j = 0; j < clues[i].clues.length; j++) {
                obj.clues[clues[i].clues[j].word] = clues[i].clues[j];
            }
            cluesetname = clues[i].name;
        }

        return obj;

    };

    app.vue.methods.isWordCompleted = function (id) {
        if (this.$root.puzzle.words[id] === undefined) {
            return null;
        }
        var isCompleted = true;
        var cells = this.$root.puzzle.words[id].cells;
        for (var r = 0; r < cells.length; r++) {
            var id = cells[r].id;
            var answer = this.$root.user.answers['cell_' + (id - 1)];
            if (answer === ' ') {
                isCompleted = false;
            }
        }
        return isCompleted;
    };

    app.vue.methods.keyArrow = function (event, code, direction) {
        switch (direction) {
            case 'down':
                app.helpers.setCellActiveDown(false);
                break;
            case 'left':
                app.helpers.setCellActiveLeft(false);
                break;
            case 'right':
                app.helpers.setCellActiveRight(false);
                break;
            case 'up':
                app.helpers.setCellActiveUp(false);
                break;
        }
    };

    app.vue.methods.keyEnter = function (event, code) {
        if (!event.shiftKey) {
            this.nextClue();
        } else {
            this.prevClue();
        }
    };

    app.vue.methods.manuallySetClueDirection = function (direction) {

        //  first we check to see if current cell also has selected direction
        var currentCell = app.vue.data.active.cell;
        if (this.puzzle.cells[currentCell][direction]) {
            app.vue.model.$set(app.vue.data.active, 'direction', direction);
            return true;
        }

        //  if not we set the last active cell in the selected direction
        var lastCell = app.vue.data.last['cell-' + direction];
        if (lastCell !== undefined) {
            app.vue.model.$set(app.vue.data.active, 'cell', app.vue.data.last['cell-' + direction]);
            app.vue.model.$set(app.vue.data.active, 'direction', direction);
            return true;
        }

        //  if they change direction immediately then show first clue of direction
        if (lastCell === undefined) {
            var cells = this.puzzle.cells;
            for (var i = 1; i <= cells.length; i++) {
                if (cells[i][direction]) {
                    app.vue.model.$set(app.vue.data.active, 'cell', i);
                    app.vue.model.$set(app.vue.data.active, 'direction', direction);
                    return true;
                }
            }
        }

    };

    app.vue.methods.nextClue = function () {
        var newClueId = this.$root.puzzle.words[this.activeWord + 1] ? this.activeWord + 1 : 1;
        this.$root.setActiveClue(newClueId);
    };

    app.vue.methods.prevClue = function () {
        var newClueId = this.$root.puzzle.words[this.activeWord - 1] ? this.activeWord - 1 : this.$root.puzzle.words.length - 1;
        this.$root.setActiveClue(newClueId);
    };

    app.vue.methods.setActiveClue = function (id) {
        this.$root.active.cell = app.helpers.getFirstCellOfWord(id, true); //this.$root.puzzle.words[id].cells[0].id;
        this.$root.active.direction = this.$root.puzzle.clues[id].direction;
    };

    /*  -----------------------  */
    /*    Vue Global Watchers    */
    /*  -----------------------  */

    app.vue.watch.activeWord = function (word) {
        app.helpers.scrollToClue(word);
        app.vue.model.$set(app.vue.data.last, 'cell-' + this.active.direction, this.active.cell);
    };

    app.vue.watch.isCompleted = function (val) {
        if (val === true) {
            app.marmalytics.send('event', {
                'category': 'completion',
                'item': this.isCompletedWithoutErrors ? 'correct' : 'incorrect',
                'value': this.timerDisplay,
            });
            if (app.status.completed === null) {
                app.status.completed = {
                    when: (new Date()).getTime(),
                    time: this.timerDisplay,
                    seconds: app.timer.get(),
                };
                app.helpers.saveUserPlayStatus();
            }
        }
    };

    app.vue.watch.userSettings = function () {
        app.helpers.saveUserState();
    };

}());
