/*globals $, scrollReveal, showError, showLocationError*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';


    function validateHappyCheckboxes() {

        var alphabetFull = ' ABCDEF',
            alphabetUser = '';

        if ($('#zombiesRun').is(":checked")) {
            alphabetUser += alphabetFull[1];
        }
        if ($('#candyCrush').is(":checked")) {
            alphabetUser += alphabetFull[2];
        }
        if ($('#angryBirds').is(":checked")) {
            alphabetUser += alphabetFull[3];
        }
        if ($('#landlord').is(":checked")) {
            alphabetUser += alphabetFull[4];
        }
        if ($('#parallelKingdom').is(":checked")) {
            alphabetUser += alphabetFull[5];
        }
        if ($('#footballManager').is(":checked")) {
            alphabetUser += alphabetFull[6];
        }



        if (oBadges.getMD5(alphabetUser) === '8418cad2dcc02c5131a160caf4d8a229') {
            return true;
        }
        return false;

    }
    window.validateHappyCheckboxes = validateHappyCheckboxes;

    $('#q1Check').click(function () {
        if (validateHappyCheckboxes() == true) {
            $('#question2').addClass('visible');
        } else {
            $('#question2').removeClass('visible');
            showError();
			setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger').click();
            }, 100);
        }
    });

    $('#q3Check').click(function () {
        var givenAnswer = $('input#q3-2').val().toLowerCase(),
            trimmedAnswer = givenAnswer.replace(/(\r\n|\n|\r)/gm, "").replace(/ /g, '');

        if (oBadges.getMD5(trimmedAnswer) == '96b5dd676141f2d6dd9ecf8df9a42d07' ||
                oBadges.getMD5(trimmedAnswer) == '0fc6815b00075548b953136e70e7fc74' ||
                oBadges.getMD5(trimmedAnswer) == 'c9782951e46ed547cf586fb76d933536') {
            $('#question3').addClass('visible');
        } else {
            $('#question3').removeClass('visible');
            showError();
			setTimeout(function () {
                $('body').stop(true);
                $('#errorTrigger2').click();
            }, 100);
        }
    });

    $('#heatMapToggle').click(function () {
        $(this).toggleClass('active');
        $('#heatMap').fadeToggle();
        $(this).text(function (i, text) {
            return text === "Show footfall heat map" ? "Hide footfall heat map" : "Show footfall heat map";
        });
        return false;

    });

    $('#radiusToggle').click(function () {
        $(this).toggleClass('active');
        $('#radius').fadeToggle();
        $(this).text(function (i, text) {
            return text === "Show 200m radius from main store" ? "Hide 200m radius from main store" : "Show 200m radius from main store";
        });
        return false;

    });


    $('#pin2').click(function () {
        $('#overlayBg').addClass('overlay-bg-visible');
        $('#site1').addClass('overlay-visible');
        return false;

    });

    $('#pin3').click(function () {
        $('#overlayBg').addClass('overlay-bg-visible');
        $('#site3').addClass('overlay-visible');
        return false;

    });

    $('#pin4').click(function () {
        $('#overlayBg').addClass('overlay-bg-visible');
        $('#site2').addClass('overlay-visible');
        return false;

    });

    $('#pin1').click(function () {
        $('#overlayBg').addClass('overlay-bg-visible');
        $('#site4').addClass('overlay-visible');
        return false;

    });

    $('#selectSite4').click(function () {
        $('#moveon').addClass('visible');
        return false;
    });
    $('#selectSite1,#selectSite2').click(function () {
        showLocationError('tooCold');
        return false;
    });
    $('#selectSite3').click(function () {
        showLocationError('tooClose');
        return false;
    });

    $('#overlayBg, .overlay-close, .btn-select-site').click(function () {
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('.overlay').removeClass('overlay-visible');
        return false;

    });


    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 2000);
    }

    function showLocationError(message) {
        $('body').addClass('show-location-error');
        var textMessage;
        if (message === 'tooCold') {
            textMessage = 'This location doesn\'t get enough passing trade. Try again.';
        } else if (message === 'tooClose') {
            textMessage = 'This location is too close to the main store. Try again.';
        }
        $('#errorMessage').text(textMessage);
        setTimeout(function () {
            $('body').removeClass('show-location-error');
        }, 2000);
    }

    oBadges.stepCompleted();

}());