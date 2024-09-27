/*
 * -License     proprietary, this file forms part of the Developed Materials as defined in and subject 
 *              to the Master Agreement signed between Digital Marmalade Ltd and News UK & Ireland Ltd dated 2 February 2015
 * -Copyright   2/2/2015, News UK & Ireland Ltd. All Rights Reserved.
*/
/*
DM Codeword main class.


 * @version     $Id: class.codeword.js 536 2014-08-12 09:17:07Z Sandy $
*/

/**
The main class for Codeword puzzles.
This file builds on the puzzle base class and uses functions from it.
No event handlers should be kept in this class.  They should be kept in an external file.
**/

/*globals $, Crosswordbase, PuzzleBase, TweenMax*/
/*jslint eqeq:true*/

/**
 * extend generic puzzle class for lexica
 * @constructor
 */
function Crossword() {

    'use strict';

    Crosswordbase.call(this);

}
Crossword.prototype = new Crosswordbase();
Crossword.prototype.constructor = Crossword;



Crossword.prototype.getClueSetHeadersHTML = function () {

    'use strict';

    var HTML = '';

    HTML += '<ul class="clues-select">';
    HTML += '<li><a href="#" class="on"><span>Switch to </span>' + this.oJSON.clues[0].name + '<span> clues</span></a></li>';
    HTML += '<li><a href="#"><span>Switch to </span>' + this.oJSON.clues[2].name + '<span> clues</span></a></li>';
    HTML += '</ul>';

    return HTML;

};


Crossword.prototype.addContentAndClassesToHTML = function () {

    'use strict';

    Crosswordbase.prototype.addContentAndClassesToHTML.call(this);
    $('#crossword-holder').addClass('multiple-clues');
    $('.btn-more-puzzles').hide();
};