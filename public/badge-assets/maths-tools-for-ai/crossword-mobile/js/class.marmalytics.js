/**
The base class for analytics.
**/

/**
 * class to hold Marmalade Puzzles analytics
 * @constructor
 */
function Marmalytics(ref) {

    'use strict';

    //  if ref is set then stop as means it is just the child class setting the prototype e.g.
    //  ChildAnalyticsClass.prototype = new Marmalytics(true);
    if (ref !== undefined) {
        return false;
    }

    this.settings = {

        // tags to place on HTML elements that will automatically be listened for
        attrTags: {
            action: 'data-marmalytics-action',
            category: 'data-marmalytics-category',
            disabled: 'data-marmalytics-disabled',
            item: 'data-marmalytics-item',
            value: 'data-marmalytics-value'
        },

        // delay in ms before redirecting to external links - 0 = no delay
        delayExternalLinks: 500,

        //  when failing wait n seconds
        failAfter: 1,

        //  dummy fail on average every n number of requests - 0 = no dummy fails
        failEvery: 0,

        // 0 = none.  1 = XHR.  2 = all.  3 = trace
        logLevel: 0,

        // objects object setup
        objects: {
            action: {
                action: null,
                category: null,
                item: null,
                value: null
            },
            event: {
                category: null,
                item: null,
                value: null
            },
            view: {
                url: null
            }
        },

        // seconds between sending data - 0 = instantly
        processEvery: 0,

        // seconds until retry after delay
        queueRetryDelay: 5,

        // whether to send a view event on page load
        sendInitialPageLoad: true,

        // whether to retry unsent on next visit
        useLocalStorage: true,

    };

    this.itemIdx = 0;

    this.queue = {};

    this.history = {};

};

/**
 * initialise analytics
 * DO NOT override this method in child
 * child specific setup is to be placed in the 'initialise' method
 */
Marmalytics.prototype.init = function () {

    'use strict';

    var self = this;

    if (this.settings.logLevel >= 1) {
        this.consoleClassName();
    }

    if (this.settings.logLevel >= 2) {
        console.log('Marmalytics: init');
    }

    this.updateSettingsBasedOnBrowser();

    if (this.settings.useLocalStorage === true) {
        this.storage = new LocalStorage(this.reference);
        this.restoreQueue();
    }
    this.initialise();
    this.outputSettings();
    this.addEventHandlers();

    if (this.settings.processEvery > 0) {
        setInterval(
            function () {
                self.processQueue();
            },
            this.settings.processEvery * 1000
        );
    }

};

/**
 * update settings based on browser compatibility
 */
Marmalytics.prototype.updateSettingsBasedOnBrowser = function () {

    'use strict';

    //  disabled local storage if not supported
    this.settings.useLocalStorage = typeof localStorage === 'undefined' ? false : this.settings.useLocalStorage;

};

/**
 * initialise analytics
 * child classes use this for setup
 */
Marmalytics.prototype.initialise = function () {

    'use strict';

    if (this.settings.logLevel >= 2) {
        console.log('Marmalytics: initialise');
    }

};

/**
 * output settings
 */
Marmalytics.prototype.outputSettings = function () {

    'use strict';

    if (this.settings.logLevel >= 2) {
        console.groupCollapsed('Marmalytics: settings');
        console.log(this.settings);
        console.groupEnd('Marmalytics: settings');
    }

};

/**
 * set analytics config object
 */
Marmalytics.prototype.setConfig = function (cfg) {

    'use strict';

    this.cfg = cfg;
};

/**
 * set data object - use to pass anything from root application
 * @param {object} data
 */
Marmalytics.prototype.setData = function (data) {

    'use strict';

    this.data = data;
};

/**
 * set default object value for actions
 * @param {object} object
 * @returns {object}
 */
Marmalytics.prototype.setDefaultObjectForActions = function (object) {

    'use strict';

    if (this.settings.logLevel >= 2) {
        console.groupCollapsed('Marmalytics: set default object for actions');
        console.log(object);
        console.groupEnd('Marmalytics: set default object for actions');
    }

    this.settings.objects.action = object;

    return object;

};

/**
 * set default object value for events
 * @param {object} object
 * @returns {object}
 */
Marmalytics.prototype.setDefaultObjectForEvents = function (object) {

    'use strict';

    if (this.settings.logLevel >= 2) {
        console.groupCollapsed('Marmalytics: set default object for events');
        console.log(object);
        console.groupEnd('Marmalytics: set default object for events');
    }

    this.settings.objects.event = object;

    return object;

};

/**
 * set default object value for views
 * @param {object} object
 * @returns {object}
 */
Marmalytics.prototype.setDefaultObjectForViews = function (object) {

    'use strict';

    if (this.settings.logLevel >= 2) {
        console.groupCollapsed('Marmalytics: set default object for views');
        console.log(object);
        console.groupEnd('Marmalytics: set default object for views');
    }

    this.settings.objects.view = object;

    return object;

};

/**
 * set reference - primarily used for local storage
 * @param {string} reference
 */
Marmalytics.prototype.setReference = function (reference) {

    'use strict';

    this.reference = typeof reference === 'string' ? reference : (new Date()).getTime();

};

/**
 * add to queue
 * @param {string} type
 * @param {object} data
 */
Marmalytics.prototype.addToQueue = function (type, data) {

    'use strict';

    data = $.extend(true, this.getDefaultObjectForType(type), data);

    var key = this.getUniqueItemKey();

    this.queue[key] = {
        status: 'queued',
        type: type,
        data: data,
        id: key,
    }

    if (this.settings.logLevel >= 2) {
        console.info('Marmalytics: queue: ', type, key, data);
    }

};

/**
 * save queue
 */
Marmalytics.prototype.storeQueue = function () {

    'use strict';

    if (this.settings.useLocalStorage !== true) {
        return false;
    }

    this.storage.set('queue', this.queue);

};

/**
 * restore queue from previous session
 */
Marmalytics.prototype.restoreQueue = function () {

    'use strict';

    if (this.settings.useLocalStorage !== true) {
        return false;
    }

    var storedQueue = this.storage.get('queue');
    for (var i in storedQueue) {
        storedQueue[i].status = 'queued';
    }

    if (storedQueue !== null) {
        this.queue = $.extend(true, this.queue, storedQueue);
        this.processQueue();
    }

};

/**
 * get default object for type
 * @param {string} type
 * @returns {object}
 */
Marmalytics.prototype.getDefaultObjectForType = function (type) {

    'use strict';

    switch (type) {

        case 'action':
            return this.settings.objects.action;
            break;

        case 'event':
            return this.settings.objects.event;
            break;

        case 'view':
            return this.settings.objects.view;
            break;

    }

    return {};

};

/**
 * send item
 * @param {string} type
 * @param {object} data
 */
Marmalytics.prototype.send = function (type, data) {

    'use strict';

    data = data || {};

    this.addToQueue(type, data);
    this.storeQueue();

    if (this.settings.processEvery === 0) {
        this.processQueue();
    }

};

/**
 * trigger page load
 * @param {string} url
 */
Marmalytics.prototype.pageLoad = function (url) {

    'use strict';

    if (this.settings.sendInitialPageLoad !== true) {
        return false;
    }

    url = url || window.location.href;

    this.send('view', {
        url: url
    });

};

/**
 * Process queue
 */
Marmalytics.prototype.processQueue = function () {

    'use strict';

    var self = this;

    for (var i in this.queue) {
        if (this.queue[i].status === 'queued') {

            var promise = this.processQueueItem(this.queue[i]);

            if (promise === false) {
                continue;
            }

            promise.done(function (item) {
                if (self.queue[item.id] === undefined) {
                    return false;
                }
                self.queue[item.id].status = 'sent';
                self.history[item.id] = item;
                delete self.queue[item.id];
                self.storeQueue();
                if (self.settings.logLevel >= 1) {
                    console.log('Marmalytics: OK: ', item);
                }
                if (self.settings.logLevel >= 3) {
                    console.trace();
                }
            });

            promise.fail(function (item, request) {
                if (self.queue[item.id] === undefined) {
                    return false;
                }
                self.queue[item.id].status = 'failed';
                self.storeQueue();
                if (self.settings.logLevel >= 1) {
                    console.log('Marmalytics: ERROR: ', self.queue[item.id], request);
                }
                if (self.settings.queueRetryDelay > 0) {
                    setTimeout(
                        function () {
                            if (self.queue[item.id].status === 'failed') {
                                self.queue[item.id].status = 'queued';
                                self.storeQueue();
                                if (self.settings.processEvery === 0) {
                                    self.processQueue();
                                }
                            }
                        },
                        self.settings.queueRetryDelay * 1000
                    );
                }
                if (self.settings.logLevel >= 3) {
                    console.trace();
                }
            });

        }
    }

};

/**
 * Process queue item
 * @param {object} item
 * @returns {promise}
 */
Marmalytics.prototype.processQueueItem = function (item) {

    'use strict';

    this.queue[item.id].sent = 'pending';

    var self = this;

    var deferred = jQuery.Deferred();

    var delay = (self.settings.failEvery > 0 && (new Date()).getTime() % self.settings.failEvery === 0) ? this.settings.failAfter * 1000 : 100;

    setTimeout(
        function () {
            if (delay === self.settings.failAfter * 1000) {
                deferred.reject(item, 'error');
            } else {
                deferred.resolve(item);
            }
        },
        delay
    );

    return deferred.promise();

};

/**
 * get unique key
 * @returns {string}
 */
Marmalytics.prototype.getUniqueItemKey = function () {

    'use strict';

    this.itemIdx++;

    return (new Date()).getTime() + '.' + this.itemIdx;

};

/**
 * add event handlers
 */
Marmalytics.prototype.addEventHandlers = function () {

    var self = this,
        actionTypes = [
            'click',
            'change',
        ];

    for (var i = 0; i < actionTypes.length; i++) {

        var actionType = actionTypes[i];

        (function (actionType) {

            $('body').on(actionType, '[' + self.settings.attrTags.action + '="' + actionType + '"]', function (e) {

                var el = $(this),
                    obj = self.settings.objects.action;

                obj.action = actionType;

                if (el.attr(self.settings.attrTags.disabled) !== undefined) {
                    return false;
                }
                if (el.attr(self.settings.attrTags.category) !== undefined) {
                    obj.category = el.attr(self.settings.attrTags.category);
                }
                if (el.attr(self.settings.attrTags.value) !== undefined) {
                    obj.value = el.attr(self.settings.attrTags.value);
                }
                if (el.attr(self.settings.attrTags.item) !== undefined) {
                    obj.item = el.attr(self.settings.attrTags.item);
                }
                if (self.settings.delayExternalLinks && self.settings.delayExternalLinks > 0 && el.attr('href') !== undefined && el.attr('href') !== '#') {
                    var href = el.attr('href'),
                        target = el.attr('target');
                    e.preventDefault();
                    setTimeout(
                        function () {
                            window.open(href, target);
                        },
                        self.settings.delayExternalLinks
                    );
                }

                self.send('action', obj);

            })
        }(actionType));

    }
};

/**
 * output and delete the queued item
 * @param {object} item
 * @returns {boolean} false
 */
Marmalytics.prototype.consoleAndRemoveItem = function (item) {

    'use strict';

    if (this.settings.logLevel >= 1) {
        console.log(item.id, item.data);
    }

    delete this.queue[item.id];
    this.storeQueue();

    return false;

};

/**
 * console log class name
 */
Marmalytics.prototype.consoleClassName = function () {
    console.log('%c   Marmalytics', 'color:#F90;background:url(https://www.digitalmarmalade.co.uk/vendor/dm/img/fav-icons/favicon-16x16.png) no-repeat;');
};
