/*globals $, badgeRoot, showOverlay*/
/*jslint eqeq:true plusplus:true*/

var oBadges = window.oBadges || {};

(function () {

    'use strict';

    var task1Answer,
        task2Answer,
        task3Answer,
        task4Answer,
        currentOpacity = 0.6,
        logoPosition = 'centre',
        correctAnswers = [];

    //  task 1
    $('#task-1 a').click(function () {
        var backgroundImage = $(this).find('img').attr('src'),
            selectedImage = $(this).data('photo');
        task1Answer = selectedImage;
        $('#task-1-preview').css("background-image", "url(" + backgroundImage + ")");

        $('#task1Right, #task1Wrong').removeClass('show');
        return false;
    });

    $('#task1Submit').click(function () {
        if (oBadges.getMD5(task1Answer) === '1679091c5a880faf6fb5e6087eb1b2dc') {
            correctAnswers[1] = true;
            $('#task1Right').addClass('show');
            $('#task2Reveal').addClass('visible');

            setTimeout(function () {
                $('#task-2-holder').removeClass('invisible').addClass('visible');
            }, 1250);

        } else {
            correctAnswers[1] = false;
            $('#task1Wrong').addClass('show');
        }
    });

    $('#task1TryAgain').click(function () {
        $('#task1Wrong').removeClass('show');
    });

    //  task 2
    $('#task-2 a').click(function () {
        var backgroundImage = $(this).find('img').attr('src'),
            selectedImage = $(this).data('photo');
        task2Answer = selectedImage;
        $('#task-2-preview').css("background-image", "url(" + backgroundImage + ")");

        $('#task2Right, #task2Wrong').removeClass('show');
        return false;
    });

    $('#task2Submit').click(function () {
        if (oBadges.getMD5(task2Answer) === 'c4ca4238a0b923820dcc509a6f75849b') {
            correctAnswers[2] = true;
            $('#task2Right').addClass('show');
            $('#task2Email').addClass('visible');
        } else {
            correctAnswers[2] = false;
            $('#task2Wrong').addClass('show');
        }
    });

    $('#task2TryAgain').click(function () {
        $('#task2Wrong').removeClass('show');
    });


    $('#task2EmailSubmit').click(function () {
        var a1 = $('#task2EmailA1 option:selected').val(),
            a2 = $('#task2EmailA2 option:selected').val(),
            a3 = $('#task2EmailA3 option:selected').val();
        if (oBadges.getMD5(a1) == 'c81e728d9d4c2f636f067f89cc14862c') {
            a1 = true;
        } else {
            a1 = false;
        }
        if (oBadges.getMD5(a2) == 'c4ca4238a0b923820dcc509a6f75849b') {
            a2 = true;
        } else {
            a2 = false;
        }
        if (oBadges.getMD5(a3) == 'c4ca4238a0b923820dcc509a6f75849b') {
            a3 = true;
        } else {
            a3 = false;
        }
        if (a1 == true && a2 == true && a3 == true) {
            correctAnswers[22] = true;
            $('#task3Reveal').addClass('visible');
            $('#task2EmailOutcome').removeClass('visible');

            setTimeout(function () {
                $('#task-3-holder').removeClass('invisible').addClass('visible');
            }, 500);

        } else {
            correctAnswers[22] = false;
            $('#task2EmailOutcome').addClass('visible');
        }
    });

    $('#task2EmailTryAgain').click(function () {
        $('#task2EmailOutcome').removeClass('visible');
    });

    //  task 3
    $('#task-3 a').click(function () {
        var backgroundImage = $(this).find('img').attr('src'),
            selectedImage = $(this).data('photo');
        task3Answer = selectedImage;
        $('#task-3-preview').css("background-image", "url(" + backgroundImage + ")");

        $('#task3Right, #task3Wrong').removeClass('show');
        return false;
    });

    $('#task3Submit').click(function () {
        if (oBadges.getMD5(task3Answer) === 'c4ca4238a0b923820dcc509a6f75849b') {
            correctAnswers[3] = true;
            $('#task3Right').addClass('show');
            $('#task3Email').addClass('visible');

        } else {
            correctAnswers[3] = false;
            $('#task3Wrong').addClass('show');
        }
    });

    $('#task3TryAgain').click(function () {
        $('#task3Wrong').removeClass('show');
    });

    $('#task3EmailSubmit').click(function () {
        var a1 =  $('#task3EmailA1 option:selected').val(),
            a2 = $('#task3EmailA2 option:selected').val();
        if (oBadges.getMD5(a1) == 'c4ca4238a0b923820dcc509a6f75849b') {
            a1 = true;
        } else {
            a1 = false;
        }
        if (oBadges.getMD5(a2) == 'c81e728d9d4c2f636f067f89cc14862c') {
            a2 = true;
        } else {
            a2 = false;
        }

        if (a1 == true && a2 == true) {
            correctAnswers[32] = true;
            $('#task4Reveal').addClass('visible');
            $('#task3EmailOutcome').removeClass('visible');

            setTimeout(function () {
                $('#task-4-holder').removeClass('invisible').addClass('visible');
            }, 500);

        } else {
            correctAnswers[32] = false;
            $('#task3EmailOutcome').addClass('visible');
        }
    });

    $('#task3EmailTryAgain').click(function () {
        $('#task3EmailOutcome').removeClass('visible');
    });

    //  task 4
    $('#task-4 a').click(function () {
        var backgroundImage = $(this).find('img').attr('src'),
            selectedImage = $(this).data('photo');
        task4Answer = selectedImage;
        $('#task-4-preview').css("background-image", "url(" + backgroundImage + ")");

        $('#task4Right, #task4Wrong').removeClass('show');
        return false;
    });

    $('#task4Submit').click(function () {
        if (oBadges.getMD5(task4Answer) === 'eccbc87e4b5ce2fe28308fd9f2a7baf3') {
            correctAnswers[4] = true;
            $('#task4Right').addClass('show');
            $('#task5Reveal').addClass('visible');

            setTimeout(function () {
                $('#task-5-holder').removeClass('invisible').addClass('visible');
            }, 1250);
        } else {
            correctAnswers[4] = false;
            $('#task4Wrong').addClass('show');
        }
    });

    $('#task4TryAgain').click(function () {
        $('#task4Wrong').removeClass('show');
    });

    //  task 5
    $('#increaseContrast').click(function () {
        currentOpacity += 0.2;
        if (currentOpacity > 1) {
            currentOpacity = 1;
        }
        $('#treatImage').css('opacity', currentOpacity);
        return false;
    });

    $('#reduceContrast').click(function () {
        currentOpacity -= 0.2;
        if (currentOpacity < 0) {
            currentOpacity = 0;
        }
        $('#treatImage').css('opacity', currentOpacity);
        return false;
    });

    $('#task5Submit').click(function () {
        $('#task5Wrong').removeClass('show');
        if (oBadges.getMD5(currentOpacity) === 'c4ca4238a0b923820dcc509a6f75849b') {
            correctAnswers[5] = true;
            $('#task5Right').addClass('show');
            setTimeout(function () {
                $('#task6Reveal').addClass('visible');
                $('#task-6-holder').removeClass('invisible').addClass('visible');
            }, 500);
        } else {
            correctAnswers[5] = false;
            $('#task5Wrong').addClass('show');
        }
    });

    $('#task5TryAgain').click(function () {
        $('#task5Wrong').removeClass('show');
    });

    //  task 6
    $('#logoTL').click(function () {
        $('#logoImage').attr('src', '/badge-assets' + badgeRoot + '/_global/img/logo-tl.png');
        logoPosition = 'top left';
        return false;
    });
    $('#logoTR').click(function () {
        $('#logoImage').attr('src', '/badge-assets' + badgeRoot + '/_global/img/logo-tr.png');
        logoPosition = 'top right';
        return false;
    });
    $('#logoBL').click(function () {
        $('#logoImage').attr('src', '/badge-assets' + badgeRoot + '/_global/img/logo-bl.png');
        logoPosition = 'bottom left';
        return false;
    });
    $('#logoBR').click(function () {
        $('#logoImage').attr('src', '/badge-assets' + badgeRoot + '/_global/img/logo-br.png');
        logoPosition = 'bottom right';
        return false;
    });

    $('#task6Submit').click(function () {
        $('#task6Wrong').removeClass('show');
        if (oBadges.getMD5(logoPosition) === '8cce1e8cdd38e50b810047c631d6a1ca') {
            correctAnswers[6] = true;
            $('#task6Right').addClass('show');
        } else {
            correctAnswers[6] = false;
            $('#task6Wrong').addClass('show');
        }
    });

    $('#task6TryAgain').click(function () {
        $('#task6Wrong').removeClass('show');
    });

    $('.jsBtnNext').click(function () {
        if (correctAnswers[1] === undefined || correctAnswers[1] !== true) {
            return false;
        }
        if (correctAnswers[2] === undefined || correctAnswers[2] !== true) {
            return false;
        }
        if (correctAnswers[22] === undefined || correctAnswers[22] !== true) {
            return false;
        }
        if (correctAnswers[3] === undefined || correctAnswers[3] !== true) {
            return false;
        }
        if (correctAnswers[32] === undefined || correctAnswers[32] !== true) {
            return false;
        }
        if (correctAnswers[4] === undefined || correctAnswers[4] !== true) {
            return false;
        }
        if (correctAnswers[5] === undefined || correctAnswers[5] !== true) {
            return false;
        }
        if (correctAnswers[6] === undefined || correctAnswers[6] !== true) {
            return false;
        }

        oBadges.stepCompleted();

    });

}());