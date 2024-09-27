var app = window.app || {};

(function () {

    'use strict';

    app.vue = {
        computed: {},
        created: {},
        data: {
            active: {},
            check: {
                grid: false,
                letter: null,
                word: null,
            },
            config: {},
            keyboard: null,
            last: {},
            links: {
                home: '/',
                puzzleHome: '/',
            },
            modals: {
                visible: [],
            },
            modes: {
                pencil: false,
            },
            reveal: {
                grid: false,
            },
            show: {
                settings: false,
            },
            source: {},
            ts: {},
            user: {
                answers: {},
                notes: {},
                settings: {},
            },
        },
        methods: {},
        watch: {},
    };

    /*  ---------------------------  */
    /*    Vue Computed Properties    */
    /*  ---------------------------  */

    app.vue.computed.isCompleted = function () {
        return this.$root.totalCellsPercent === 100;
    };

    app.vue.computed.isCompletedWithoutErrors = function () {
        var correct = app.helpers.getUserAnswerString() === app.vue.data.source.copy.settings.solution;

        if (correct) {
            app.timer.stop();
        }

        return correct;
    };

    app.vue.computed.isCompletionOverlayVisible = function () {
        //  if not completed then definitely do not show overlay
        if (!this.$root.isCompleted) {
            return false;
        }
        //  if show corrections mode
        if (this.user.settings.showCorrections) {
            return false; // TODO
        };
        //  only if user has entered a letter since closing overlay
        var whenResult = app.helpers.tsThisBeforeThat('hideCompletionOverlay', 'letterEntered');
        return whenResult === 1 || whenResult === true;
    };

    app.vue.computed.keys = function () {

        var keyboard = this.keyboard;
        var keys = [];

        for (var r = 0; r < keyboard.length; r++) {
            var rowkeys = [];
            for (var c = 0; c < keyboard[r].length; c++) {
                var item;
                if (typeof keyboard[r][c] === 'string') {
                    item = {
                        code: keyboard[r][c].charCodeAt(0),
                        display: keyboard[r][c],
                        tooltip: keyboard[r][c],
                    }
                } else {
                    item = keyboard[r][c];
                }
                rowkeys.push(item);
            }
            keys.push(rowkeys);
        }

        return keys;
    };

    app.vue.computed.listCellsError = function () {
        var cells = this.$root.puzzle.cells,
            errors = [];

        for (var i = 1, cellsLen = cells.length; i < cellsLen; i++) {
            if (!cells[i].isBlank && this.user.answers['cell_' + (i - 1)] !== this.source.copy.settings.solution[i - 1]) {
                errors.push(i);
            }
        }
        return errors;
    };

    app.vue.computed.puzzle = function () {
        return app.puzzle;
    };

    app.vue.computed.timerDisplay = function () {

        var duration = app.vue.data.user.time;

        var days = Math.floor(duration / (60 * 60 * 24));
        duration -= days * (60 * 60 * 24);

        var hours = Math.floor(duration / (60 * 60));
        duration -= hours * (60 * 60);

        var minutes = Math.floor(duration / 60);
        duration -= minutes * 60;

        var seconds = duration;

        var s = seconds < 10 ? '0' + seconds : seconds;
        var m = minutes < 10 ? '0' + minutes : minutes;
        var h = hours < 10 ? '0' + hours : hours;
        var d = days < 10 ? '0' + days : days;

        var formatted = m + ':' + s;
        var formatted = (days == 0 && hours == 0) ? formatted : h + ':' + formatted;
        var formatted = days == 0 ? formatted : d + ':' + formatted;

        return formatted;
    };

    app.vue.computed.totalCellsCompleted = function () {
        var answers = this.$root.user.answers;
        return Object.keys(answers).map(function(itm) { return answers[itm]; }).join('').replace(/\s/g, '').length;
    };

    app.vue.computed.totalCellsPercent = function () {
        return this.$root.totalCellsCompleted / this.$root.puzzle.counts.cells.active * 100;
    };

    app.vue.computed.userSettings = function () {
        return JSON.stringify(this.$root.user.settings);
    };

    /*  ----------------------  */
    /*    Vue Initialisation    */
    /*  ----------------------  */

    app.vue.init = function (el) {

        app.vue.model = new Vue({
            el: el,
            computed: app.vue.computed || {},
            data: app.vue.data || {},
            methods: app.vue.methods || {},
            watch: app.vue.watch || {},
            mounted: app.vue.mounted,
            created: app.vue.created,
        });

    };

    /*  ----------------------  */
    /*    Vue Global Methods    */
    /*  ----------------------  */

    app.vue.methods.checkGrid = function () {
        app.vue.data.check.grid = true;
        var self = this;
        setTimeout(function () {
            //self.$root.resetActions('check.grid');
        }, 0);
    };

    app.vue.methods.checkLetter = function () {
        app.vue.data.check.letter = this.$root.active.cell;
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('check.letter');
        }, 0);
    };

    app.vue.methods.checkWord = function () {
        app.vue.data.check.word = this.$root.activeWord;
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('check.word');
        }, 0);
    };

    app.vue.methods.getEventData = function (item, type) {
        return {
            detail: {
                item: item,
                type: type,
            },
        };
    };

    app.vue.methods.getPuzzleObject = function () {
        return app.vue.data.source;
    };

    app.vue.methods.hideCompletionOverlay = function () {
        app.helpers.tsSet('hideCompletionOverlay');
    };

    app.vue.methods.hideModal = function (modal) {
        if (modal === undefined) {
            app.vue.data.modals.visible = [];
        }
        if (app.vue.data.modals.visible.indexOf(modal) >= 0) {
            app.vue.data.modals.visible.splice(app.vue.data.modals.visible.indexOf(modal), 1);
        }
    };

    app.vue.methods.MarmalyticsClick = function (event, category, item, value, url) {

        var linkEl = event.target.nodeName === 'A' ? $(event.target) : $(event.target).closest('a');

        url = url || linkEl.attr('href');
        var target = linkEl.attr('target');

        app.marmalytics.send('event', {
            'category': category,
            'item': item,
            'value': value,
        });
        if (url !== undefined) {
            if (app.marmalytics.settings.delayExternalLinks > 0) {
                console.log('will redirect to "' + url + '" in ' + app.marmalytics.settings.delayExternalLinks + 'ms');
            }
            setTimeout(
                function () {
                    window.open(url, target);
                },
                app.marmalytics.settings.delayExternalLinks
            );
        }
    }

    app.vue.methods.modeSet = function (item, value) {
        app.vue.model.$set(app.vue.data.modes, item, value);
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('modes.' + item);
        }, 0);
    };

    app.vue.methods.resetActions = function (exclude) {

        if (exclude !== 'show.checkmenu') {
            this.show.checkmenu = false;
        }
        if (exclude !== 'show.revealmenu') {
            this.show.revealmenu = false;
        }
        if (exclude !== 'show.settings') {
            this.show.settings = false;
        }
        if (exclude !== 'check.grid') {
            this.$root.check.grid = false;
        }
        if (exclude !== 'check.letter') {
            this.$root.check.letter = null;
        }
        if (exclude !== 'check.word') {
            this.$root.check.word = null;
        }
        if (exclude !== 'reveal.grid') {
            this.$root.reveal.grid = false;
        }

    };

    app.vue.methods.resetGrid = function () {
        app.helpers.resetUserState();
        this.setActiveClue(1);
        if (app.vue.data.config.hasTimer) {
            app.timer.restart();
        }
        this.hideModal();
    };

    app.vue.methods.revealGrid = function () {
        app.vue.data.reveal.grid = true;
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('reveal.grid');
        }, 0);
    };

    app.vue.methods.revealLetter = function () {
        app.helpers.revealCell(this.$root.active.cell);
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('reveal.letter');
        }, 0);
    };

    app.vue.methods.revealWord = function () {
        var cells = this.$root.puzzle.words[this.$root.activeWord].cells;
        for (var r = 0; r < cells.length; r++) {
            var id = cells[r].id;
            app.helpers.revealCell(id);
        }
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('reveal.word');
        }, 0);
    };

    app.vue.methods.setSource = function (data) {
        app.vue.data.source = data;
        app.config.id = data.meta.id;
        app.config.slug = data.meta.slug;
        app.config.type = data.type;
        app.config.variant = data.meta.variant;
        app.config.variantSlug = app.config.variant.split(' ').join('-').toLowerCase();
        app.config.related = data.meta.related || 'Number Crunch';
        app.config.home = '/mind-games';
        app.config.variantHome = app.config.home + '/' + app.config.variantSlug + '-homepage.html';
        app.storage = new DMStorage(app.config.type + '-' + app.config.id);
        app.puzzle = app.vue.methods.getPuzzleObject();
        // axios.get(app.vue.data.source.meta.archive).then(function (json) {
        //     app.puzzle.feedback = app.helpers.getFeedbackLinksObject(json.data);
        // });
        app.vue.data.links.home = app.config.home;
        app.vue.data.links.puzzleHome = app.config.variantHome;
        app.helpers.loadPuzzleState();
    };

    app.vue.methods.showModal = function (modal) {
        app.vue.data.modals.visible.push(modal);
        this.$root.resetActions();
    };

    app.vue.methods.showSet = function (item, value) {
        app.vue.model.$set(app.vue.data.show, item, value);
        var self = this;
        setTimeout(function () {
            self.$root.resetActions('show.' + item);
        }, 0);
    };

    app.vue.methods.wrapperClicked = function (modal) {
        this.resetActions();
    };

    /*  --------------------  */
    /*    Vue Mounted Hook    */
    /*  --------------------  */

    app.vue.mounted = function () {
        var vm = this;
        window.addEventListener('keyup', function (event) {
            var code = event.keyCode || event.which;
            if (code === 8) {
                vm.$emit('keyup-delete', event, code);
            }
            if (code === 13) {
                vm.$emit('keyup-enter', event, code);
            }
            if (code >= 37 && code <= 40) {
                vm.$emit('keyup-arrow', event, code, ['left', 'up', 'right', 'down'][code - 37]);
            }
            if (code === 46) {
                vm.$emit('keyup-delete', event, code);
            }
            if (code >= 65 && code <= 90) {
                vm.$emit('keyup-az', event, code, String.fromCharCode(code));
            }
            //console.log(code);
            vm.$emit('keyup', code);
        });

        window.addEventListener('keydown', function (event) {
            var code = event.keyCode || event.which;

            if (code === 9) {
                vm.$emit('keyup-enter', event, code);
                event.preventDefault();
            }
        });

        vm.$emit('mounted');
        app.helpers.mounted(vm);
    };

}());
