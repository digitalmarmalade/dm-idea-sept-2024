/*global $*/

var oAppFunctions = oAppFunctions || {};

(function () {

	'use strict';

	oAppFunctions.convertNumberToStringWithThousandSeparators = function (number) {
		return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	};

    oAppFunctions.setLS = function (key, val) {

        localStorage.setItem(key, JSON.stringify(val));

        if (key === undefined || val === undefined) {
            return false;
        }
        return true;
    };

    oAppFunctions.getLS = function (key) {

        var j = localStorage.getItem(key);
        if (j !== null) {
            return JSON.parse(j);
        }
        return false;
    };

}());