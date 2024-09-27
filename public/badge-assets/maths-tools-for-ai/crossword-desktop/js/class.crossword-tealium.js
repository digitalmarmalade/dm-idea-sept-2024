var CrosswordTealium;

/**
 * @constructor
 */
(function () {

    'use strict';

    CrosswordTealium = function () {
        Tealium.call(this);
    };
    CrosswordTealium.prototype = new Tealium(true);
    CrosswordTealium.prototype.constructor = CrosswordTealium;

}());

/**
 * create utag data object
 * @returns {object}
 */
CrosswordTealium.prototype.createUtagDataObject = function () {

    'use strict';

    return this.utag.data;

};

/**
 * create utag meta object
 * @returns {object}
 */
CrosswordTealium.prototype.createUtagMetaObject = function () {

    'use strict';

    return this.utag.meta;

};
