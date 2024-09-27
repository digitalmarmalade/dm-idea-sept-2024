/*global $*/
/*jslint eqeq:true plusplus:true*/

var oApp = oApp || {};

(function () {

	'use strict';

	oApp.convertNumberToStringWithThousandSeparators = function (number) {
		return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	};

    oApp.setLS = function (key, val) {
        if (key === undefined || val === undefined) {
            return false;
        }
        localStorage.setItem(key, JSON.stringify(val));
        return true;
    };

    oApp.getLS = function (key) {
        var j = localStorage.getItem(key);
        if (j !== null) {
            return JSON.parse(j);
        }
        return {};
    };

    oApp.rand = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    };

    oApp.debug = function (output, type, consoleType) {
        type = type || 'all';
        consoleType = consoleType || 'log';
        if (typeof output === 'string') {
            output = [output];
        }
        this.debugTypes = this.debugTypes === true ? 'all' : this.debugTypes;
        if (this.debugTypes === 'all' || (this.debugTypes !== undefined &&  this.debugTypes !== false && this.debugTypes.indexOf(type) > -1)) {
            console[consoleType].apply(console, output);
        }
    };

    oApp.convertObjectToArray = function (arr) {
        return $.map(arr, function (value, index) {
            return [value];
        });
    };

    /*
      CODE THAT FAILS LINTING - PLEASE EXPLAIN WHY USED
    */

    //  is this a touch device or not - code does not pass lint but is most efficient cross-browser method (as used by modernizr)
    oApp.isTouch = (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) || false;

}());