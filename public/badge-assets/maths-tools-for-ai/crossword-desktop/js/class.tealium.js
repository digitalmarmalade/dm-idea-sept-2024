var Tealium;

/**
 * @constructor
 */
(function () {

    'use strict';

    Tealium = function () {
        Marmalytics.call(this);
        this.settings.logLevel = 1;
        this.utag = {};
    };
    Tealium.prototype = new Marmalytics(true);
    Tealium.prototype.constructor = Tealium;

}());

/**
 * set analytics type config object
 * @param {object} cfg
 */
Tealium.prototype.setConfig = function (cfg) {

    'use strict';

    this.cfg = cfg;
    this.utag.cfg = cfg;
};

/**
 * initialise analytics
 */
Tealium.prototype.initialise = function () {

    'use strict';

    this.settings.sendInitialPageLoad = false;

    if (this.settings.logLevel >= 2) {
        console.log('Tealium: initialise');
    }

    this.create();
};

/**
 * set up tagging objects
 */
Tealium.prototype.create = function () {

    'use strict';

    this.utag.meta = window.utag_meta || this.getDefaultUtagMetaObject();
    this.utag.data = window.utag_data || this.getDefaultUtagDataObject();

    window.utag_meta = this.utag.meta;
    window.utag_data = this.utag.data;

    this.createUtagMetaObject();
    this.createUtagDataObject();

    if (this.isLiveConfig()) {
        this.createScript();
        this.addAppScript();
    } else {
        if (this.settings.logLevel >= 1) {
            console.log('NOT LIVE', this.utag);
        }
    }

};

/**
 * check if we have active config
 * @returns {boolean}
 */
Tealium.prototype.isLiveConfig = function () {

    'use strict';

    if (typeof this.utag.cfg.account !== 'string' || this.utag.cfg.account.trim() === '' || this.utag.cfg.account.trim().substr(0, 4) === '<!--') {
        return false;
    }

    if (typeof this.utag.cfg.environment !== 'string' || this.utag.cfg.environment.trim() === '' || this.utag.cfg.environment.trim().substr(0, 4) === '<!--') {
        return false;
    }

    if (typeof this.utag.cfg.profile !== 'string' || this.utag.cfg.profile.trim() === '' || this.utag.cfg.profile.trim().substr(0, 4) === '<!--') {
        return false;
    }

    if (this.utag.cfg.environment.trim().toLowerCase() === 'local') {
        return false;
    }

    return true;
};

/**
 * set up tagging script
 * @returns {string} url
 */
Tealium.prototype.getScriptUrl = function () {

    'use strict';

    var url = '//tags.tiqcdn.com/utag/' + this.utag.cfg.account + '/' + this.utag.cfg.profile + '/' + this.utag.cfg.environment + '/utag.js';

    return url;

};

/**
 * set up tagging script
 */
Tealium.prototype.createScript = function () {

    'use strict';

    var self = this;

    if (this.utag.cfg.account && this.utag.cfg.environment && this.utag.cfg.profile) {
        (function (a, b, c, d) {
            a = self.getScriptUrl();
            b = document;
            c = 'script';
            d = b.createElement(c);
            d.src = a;
            d.type = 'text/java' + c;
            d.async = true;
            a = b.getElementsByTagName(c)[0];
            a.parentNode.insertBefore(d, a);
        })();
    }

};

/**
 * Set app as the channel if loaded from the app
 */
Tealium.prototype.addAppScript = function () {

    'use strict';

    function getCookie(t){
        for(var a=t+"=",n=document.cookie.split(";"),o=0;o<n.length;o++){for(var i=n[o];" "===i.charAt(0);)i=i.substring(1);if(0===i.indexOf(a))return i.substring(a.length,i.length)}
    }
    getCookie("app_display")&&(window.utag_data=window.utag_data||{},window.utag_data.net_platform="app");

};

/**
 * create utag data object
 * @returns {object}
 */
Tealium.prototype.createUtagDataObject = function () {

    'use strict';

    this.utag.data = this.utag.data || {};

    return this.utag.data;

};

/**
 * create utag meta object
 * @returns {object}
 */
Tealium.prototype.createUtagMetaObject = function () {

    'use strict';

    this.utag.meta = this.utag.meta || {};

    return this.utag.meta;

};

/**
 * return default utag data object
 * @returns {object}
 */
Tealium.prototype.getDefaultUtagDataObject = function () {

    'use strict';

    var data = {};

    data.net_pn = "Games";
    data.net_platform = "web";
    data.net_sec1 = "Puzzle";
    data.net_sec2 = "Daily";
    data.net_content_type = window.utag_data === undefined ? 'index' : ((window.utag_data.net_content_type ? window.utag_data.net_content_type + '+' : '') + 'index');
    data.disable_pageview = true;

    return data;

};

/**
 * return default utag meta object
 * @returns {object}
 */
Tealium.prototype.getDefaultUtagMetaObject = function () {

    'use strict';

    var obj = {};

    return obj;

};

/**
 * Process queue item
 * @param {object} item
 * @returns {promise}
 */
Tealium.prototype.processQueueItem = function (item) {

    'use strict';

    if (!this.isLiveConfig()) {
        return this.consoleAndRemoveItem(item);
    }

    if (window.utag === undefined) {
        return false;
    }

    this.queue[item.id].sent = 'pending';

    var self = this;

    var deferred = jQuery.Deferred();

    var event_object = {
        call_type: "event",
        event_engagement_action: "engagement",
        event_engagement_name: item.data.item,
        event_engagement_browsing_method: item.data.action,
        orientation: $('body').width() > $('body').height() ? "landscape" : "portrait"
    };

    if (window.utag.link(event_object)) {
        deferred.resolve(item);
    } else {
        deferred.reject(item, 'error');
    }

    return deferred.promise();

};

/**
 * console log class name
 */
Marmalytics.prototype.consoleClassName = function () {
    console.log('%c   Tealium', 'color:#08D;background:url(https://tealium.com/wp-content/uploads/2014/11/favicon.ico) no-repeat;');
};
