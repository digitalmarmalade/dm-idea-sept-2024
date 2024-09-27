var app = window.app || {};

(function () {

    'use strict';

    app.config = {
        el: '#vue-container',
        id: null,
    };

    app.handlers = app.handlers || {};
    app.helpers = app.helpers || {};
    app.media = {
        supports: {
            audio: document.createElement('audio'),
            video: document.createElement('video'),
        },
    };

    app.device = {
        settings: {},
    };

    //  is this a touch device or not - code does not pass lint but is most efficient cross-browser method (as used by modernizr)
    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
        app.device.settings.isTouch = true;
    } else {
        app.device.settings.isTouch = false;
    }

    /**
     * add event listeners to redict events to relevant handler
     */
    app.helpers.addEventListeners = function () {
        document.addEventListener('CellClick', function (e) {
            app.handlers.cellClick(e.detail.item, e);
        }, false);
        document.addEventListener('ClueClick', function (e) {
            app.handlers.clueClick(e.detail.item, e);
        }, false);
        document.addEventListener('LetterEntered', function (e) {
            app.handlers.letterEntered(e.detail.item, e);
        }, false);
        document.addEventListener('LetterDeleted', function (e) {
            app.handlers.letterDeleted(e.detail.item, e);
        }, false);
    };

    app.helpers.dispatchEvent = function (name, data) {
        document.dispatchEvent(new CustomEvent(app.config.variantSlug + '-' + name, {
            detail: data
        }));
    };

    /**
     * get the id of a cell at a specified col & row
     * 
     * @param {int} col - column number
     * @param {int} row - row number
     * @returns {int} cellId
     */
    app.helpers.getCellIdFromColRow = function (col, row) {

        'use strict';

        var o = this,
            cellId = (row * app.vue.data.source.settings.colCount) + col;

        return cellId;

    };

    /**
     * get the ids of all cells in between specified cells
     * 
     * @param {int} start - id of start cell
     * @param {int} end - id of end cell
     * @returns {array} list of cell ids
     */
    app.helpers.getCellIdsBetweenGivenIds = function (start, end, includeGivens) {

        'use strict';

        includeGivens = includeGivens !== false;

        var cells = [],
            cols = app.vue.data.source.settings.colCount,
            startRc = app.helpers.getColRowFromCellId(start),
            endRc = app.helpers.getColRowFromCellId(end);

        if (includeGivens) {
            cells.push(start);
        }

        var dr = startRc.row === endRc.row ? 0 : (startRc.row > endRc.row ? -1 : 1);
        var dc = startRc.col === endRc.col ? 0 : (startRc.col > endRc.col ? -1 : 1);

        var r = startRc.row;
        var c = startRc.col;

        for (var i = 0; i < cols; i++) {
            r += dr;
            c += dc;
            if (r === endRc.row && c === endRc.col) {
                break;
            }
            var thisId = app.helpers.getCellIdFromColRow(c, r);
            cells.push(thisId);
        }

        if (includeGivens) {
            cells.push(end);
        }

        return cells;

    };

    /**
     * Get the location (row & col) of the specified (or active if not specifed) cell 
     * @return {object}
     */
    app.helpers.getCellLocation = function (cell) {
        var dims = this.getGridDimensions();
        cell = cell || app.vue.data.active.cell;
        var obj = {
            row: Math.ceil(cell / dims.cols),
            col: cell - ((Math.ceil(cell / dims.cols) - 1) * dims.cols),
        };
        return obj;
    };

    /**
     * get the row and col of a cell with a specified id
     * 
     * @param {int} id - cell id
     * @returns {object}
     */
    app.helpers.getColRowFromCellId = function (id) {

        'use strict';

        var o = this,
            colRow = {};

        colRow.row = Math.floor(id / app.vue.data.source.settings.colCount);
        colRow.col = Math.floor(id - (colRow.row * app.vue.data.source.settings.colCount));

        return colRow;

    };

    /**
     * Get the default active state object
     * @return {object}
     */
    app.helpers.getDefaultActiveState = function () {
        return {}
    };

    /**
     * Get the default answer state object
     * @return {object}
     */
    app.helpers.getDefaultUserPlayStatus = function () {
        return {
            first: (new Date()).getTime(),
            last: (new Date()).getTime(),
            started: null,
            completed: null,
        };
    };

    /**
     * Get the default answer state object
     * @return {object}
     */
    app.helpers.getDefaultUserState = function () {
        return app.vue.data.user;
    };

    app.helpers.getFeedbackCorrectObject = function (archive) {

        var obj = {
            links: [],
            subtitle: 'You completed the ' + app.config.variant.toLowerCase() + ' in ',
            title: 'Well done!',
            view_all_url: '/mind-games/' + app.config.variant.toLowerCase() + '-homepage.html',
        };

        var item = app.helpers.getFeedbackLinkObject(app.config.variant, archive);
        if (item.title) {
            obj.links.push(item);
        }

        var item = app.helpers.getFeedbackLinkObject(app.config.related, archive);
        if (item.title) {
            obj.links.push(item);
        }

        return obj;
    };

    app.helpers.getFeedbackIncorrectObject = function (archive) {

        var obj = {
            links: [],
            subtitle: 'It\'s not quite right yet.',
            title: 'Keep Trying!',
            view_all_url: '/mind-games/' + app.config.variant.toLowerCase() + '-homepage.html',
        };

        var item = app.helpers.getFeedbackLinkObject(app.config.variant, archive);
        if (item.title) {
            obj.links.push(item);
        }

        var item = app.helpers.getFeedbackLinkObject(app.config.related, archive);
        if (item.title) {
            obj.links.push(item);
        }

        return obj;
    };

    app.helpers.getFeedbackLinkObject = function (variant, archive) {

        var id = (archive.today && variant !== app.config.variant) ? archive.today[variant] : undefined,
            puzObj = null,
            obj = {};

        if (id === undefined) {
            var puzzles = archive.variants[variant];
            if (puzzles !== undefined) {
                puzObj = archive.puzzles[puzzles[0]];
                for (var i = 0; i < puzzles.length; i++) {
                    if ((puzzles[i] === app.config.slug) && (puzzles.length > (i + 1))) {
                        puzObj = archive.puzzles[puzzles[i + 1]];
                        break;
                    }
                }
            }
        } else {
            puzObj = archive.puzzles[id];
        }

        if (puzObj !== null) {
            obj.title = puzObj.name;
            obj.url = puzObj.landingUrl || '../../../' + puzObj.tag + '-puzzle.html?id=' + puzObj.name.split(' ').join('-').toLowerCase();
            obj.link_text = puzObj.name;
            obj.image = app.helpers.getFeedbackLinkImagePath(puzObj.tag);
        }

        return obj;
    };

    app.helpers.getFeedbackLinkImagePath = function (slug) {
        return '/mind-games/public/img/' + slug + '-icon.svg';
    };

    app.helpers.getFeedbackLinksObject = function (archive) {

        var obj = {
            correct: app.helpers.getFeedbackCorrectObject(archive),
            incorrect: app.helpers.getFeedbackIncorrectObject(archive),
        };

        return obj;
    };

    /**
     * Get the dimensions (rows & cols) of the grid
     * @return {object}
     */
    app.helpers.getGridDimensions = function () {
        var obj = {
            rows: app.vue.model.puzzle.grid.length,
            cols: app.vue.model.puzzle.grid.length,
        };
        return obj;
    };

    app.helpers.getMostRecentUnplayedPuzzleOfType = function (type) {

        var archive = app.puzzle.archive;

        var puzzles = archive.puzzles,
            ids = archive.variants[type] || [];

        for (var i = 0; i < ids.length; i++) {
            var puzzle = puzzles[ids[i]];
            var storage = new DMStorage(type.toLowerCase() + '-' + puzzle.id);
            var status = storage.get('status');
            var completed = status !== null && status.completed !== undefined && status.completed !== null;
            if (completed) {
                continue;
            }
            return puzzle.url;
        }

        return null;
    };

    app.helpers.getUserAnswerString = function () {
        var rows = app.vue.model.puzzle.grid.length,
            cols = app.vue.model.puzzle.grid.length,
            string = '';

        for (var i = 0; i < rows * cols; i++) {
            // string += app.vue.data.user.answers['cell_' + i];
        }

        return string;
    };

    app.helpers.initPuzzle = function () {
        //  puzzle specific start up code here
    };

    /**
     * Load active state from storage
     * If not found then load default active state and save
     */
    app.helpers.loadActiveState = function () {
        var data = app.storage.get('active');
        if (data !== null) {
            app.vue.data.active = data;
        } else {
            app.vue.data.active = app.helpers.getDefaultActiveState();
            app.helpers.saveActiveState();
        }
        app.vue.data.last['cell-' + app.vue.data.active.direction] = app.vue.data.active.cell;
    };

    /**
     * Load puzzle state
     * Loads active and answer states from storage
     */
    app.helpers.loadPuzzleState = function () {
        app.helpers.loadActiveState();
        app.helpers.loadUserPlayStatus();
        app.helpers.loadUserState();
        app.helpers.loadUserTime();
    };

    /**
     * Load play status from storage
     * If not found then load default status and save
     */
    app.helpers.loadUserPlayStatus = function () {
        var data = app.storage.get('status');
        if (data !== null) {
            app.status = data;
        } else {
            app.status = app.helpers.getDefaultUserPlayStatus();
        }
        app.status.last = (new Date()).getTime();
        app.helpers.saveUserPlayStatus();
    };

    /**
     * Load answer state from storage
     * If not found then load default answer state and save
     */
    app.helpers.loadUserState = function () {
        var data = app.storage.get('user');
        if (data !== null) {
            app.vue.data.user = data;
        } else {
            app.vue.data.user = app.helpers.getDefaultUserState();
            app.helpers.saveUserState();
        }
    };

    /**
     * Load time from storage
     */
    app.helpers.loadUserTime = function () {
        var data = app.storage.get('time');
        if (data !== null) {
            app.vue.data.user.time = data;
        } else {
            app.vue.data.user.time = 0;
            app.helpers.saveUserTime();
        }
    };

    /**
     * Mounted. Called when Vue has finished initialising
     */
    app.helpers.mounted = function (vm) {
        //console.log('mounted');
    };

    /**
     * Put URL parameters into an object
     * source: https://css-tricks.com/snippets/javascript/get-url-variables/
     * @param  {String} url The URL
     * @return {Object}     The URL parameters
     */
    app.helpers.parseUrlParams = function (url) {
        url = url || window.location.href;
        var params = {};
        var parser = document.createElement('a');
        parser.href = url;
        var query = parser.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            params[pair[0]] = decodeURIComponent(pair[1]);
        }
        location.params = params;
        return params;
    };

    app.helpers.processArchive = function (archive) {
        var archive = app.puzzle.archive;
        app.vue.model.$set(app.vue.model, 'feedback', app.helpers.getFeedbackLinksObject(archive));
    };

    /**
     * Process settings.  
     * Place them into correct objects
     * @return {object}
     */
    app.helpers.processSettings = function (settings) {
        for (var i in settings.user) {
            app.vue.data.user.settings[i] = settings.user[i].default;
        }
        for (var i in settings.puzzle) {
            app.vue.data.config[i] = settings.puzzle[i];
        }
    };

    /**
     * Reset answer state to default
     */
    app.helpers.resetUserState = function () {
        app.vue.data.user = app.helpers.getDefaultUserState();
        app.helpers.saveUserState();
    };

    /**
     * Reveal the specified cell
     */
    app.helpers.revealCell = function (id) {
        // app.vue.data.user.answers['cell_' + (id - 1)] = app.vue.model.puzzle.cells[id].letter;
        // app.helpers.saveUserState();
    };

    /**
     * Save active state to storage
     */
    app.helpers.saveActiveState = function () {
        app.storage.set('active', app.vue.data.active);
    };

    /**
     * Save answer state to storage
     */
    app.helpers.saveUserPlayStatus = function () {
        app.storage.set('status', app.status);
    };

    /**
     * Save answer state to storage
     */
    app.helpers.saveUserState = function () {
        app.storage.set('user', app.vue.data.user);
    };

    /**
     * Save elapsed time to storage
     */
    app.helpers.saveUserTime = function () {
        app.storage.set('time', app.vue.data.user.time);
    };

    /**
     * Set analytics config object
     */
    app.helpers.setAnalyticsConfig = function (cfg) {
        app.analyticsConfig = cfg;
    };

    app.helpers.showPuzzleOrStart = function () {
        var help = app.storagePuzzletype.get('help');
        if (help === null) {
            app.vue.model.showModal('help');
        } else {
            app.helpers.puzzleStart();
        }
    };

    /**
     * Save timestamp for specified item
     * @param {string} item
     */
    app.helpers.tsSet = function (item) {
        app.vue.model.$set(app.vue.data.ts, item, (new Date()).getTime());
    };

    /**
     * Check timestamps for specified items to determine which came first
     * @param {string} whenA
     * @param {string} whenB
     * @return {boolean} whether first param timestamp is older than second
     * @return {integer} -1, 0 or 1 as detailed in comments
     */
    app.helpers.tsThisBeforeThat = function (whenA, whenB) {
        //  neither param defined; return 0
        if (app.vue.data.ts[whenA] === undefined && app.vue.data.ts[whenB] === undefined) {
            return 0;
        }
        //  param 2 not defined; return -1
        if (app.vue.data.ts[whenB] === undefined) {
            return -1;
        }
        //  param 1 not defined; return 1
        if (app.vue.data.ts[whenA] === undefined) {
            return 1;
        }
        //  return whether param 1 happened before param 2
        return app.vue.data.ts[whenB] - app.vue.data.ts[whenA] > 0;
    };

    /**
     * Core init method
     * @param {object} settings
     */
    app.init = function (settings) {
        //  create settings object if not supplied
        settings = settings || {};
        app.helpers.processSettings(settings);
        //  helpers
        app.helpers.parseUrlParams();
        var dataUrl = location.params.json ? 'json/' + location.params.json + '.json' : 'data.json';
        //  load puzzle
        axios.get(dataUrl).then(function (json) {
            app.json = json.data;
            app.initialise(json);
        });
    };

    /**
     * Core puzzle init method
     * @param {object} settings
     */
    app.initialise = function (json) {
        app.vue.methods.setSource(json.data);
        app.vue.init(app.config.el);
        app.helpers.initPuzzle();
        app.helpers.addEventListeners();
        if (app.vue.data.config.hasTimer) {
            app.timer = new DMTimer();
            app.timer.callback = app.helpers.puzzleUpdate;
        }

        app.helpers.initialiseAnalytics();
        app.marmalytics.init();
        app.marmalytics.pageLoad();
        app.helpers.puzzleStart();
    };

}());
