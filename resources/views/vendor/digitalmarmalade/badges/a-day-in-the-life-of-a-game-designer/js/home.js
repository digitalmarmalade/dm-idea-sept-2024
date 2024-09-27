/*globals $*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';
     
    var lastPosition;
    var tid = setInterval(moveMan, 2000);
    function moveMan() {
        if(Math.floor((Math.random() * 3) + 1) > 1) {
            var thisPosition =  (Math.random() * 900);
            $('#hero').css('left', thisPosition + 'px');
            
            if(thisPosition > lastPosition) {
                $('.hero-sprite').addClass('flip');    
            } else {
                $('.hero-sprite').removeClass('flip');
            }
            lastPosition = thisPosition;

        }
    }
    
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);

}());