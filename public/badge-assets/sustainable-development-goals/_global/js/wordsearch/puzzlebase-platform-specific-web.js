/*
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
*/
/*
DM PuzzleBase platform specfic methods.

*/

/**
Additional methods for the puzzle base class.
This file includes any methods that need to be implemented differently on different platforms.
This file contains methods for web based applications
**/

/*globals $, PuzzleBase*/

/**
 * wrapper for localStorage setItem
 * @param {mixed} sItemKey
 * @param {mixed} sItemValue
 * @returns {boolean}
 */
PuzzleBase.prototype.setLocalStorageItem = function (sItemKey, sItemValue) {

    'use strict';

    localStorage.setItem(sItemKey, JSON.stringify(sItemValue));

    if (sItemKey === undefined || sItemValue === undefined) {
        return false;
    }
    return true;
};

/**
 * wrapper for localStorage getItem
 * @param {mixed} sItemKey
 * @returns {mixed|boolean}
 */
PuzzleBase.prototype.getLocalStorageItem = function (sItemKey) {

    'use strict';

    var j = localStorage.getItem(sItemKey);
    if (j !== null && j !== undefined && j !== 'undefined') {
        return JSON.parse(j);
    }
    return false;
};

/**
 * wrapper for localStorage removeItem
 * @param {mixed} sItemKey
 * @returns {mixed|boolean}
 */
PuzzleBase.prototype.removeLocalStorageItem = function (sItemKey) {

    'use strict';

    localStorage.removeItem(sItemKey);

    return true;
};

/**
 * method to get puzzle json data
 * @returns {JSON}
 */
PuzzleBase.prototype.getPuzzleJsonData = function (url) {

    'use strict';

    url = url || 'data.json';

    var dfd = $.Deferred(),
        result = {},
        ajax;

    ajax = $.ajax({
        dataType: "json",
        url: url
    });

    ajax.success(function (data, textStatus, request) {
        result.type = textStatus;
        result.obj = request;
        result.data = data;
        dfd.resolve(result);
    });

    ajax.error(function (request, textStatus, errorThrown) {
        result.type = textStatus;
        result.obj = request;
        result.error = errorThrown;
        dfd.reject(result);
    });

    return dfd.promise();
};
