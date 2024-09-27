$(function () {

    var rules = {},
            setUp = function () {
                $('.password-feedback').hide();
                $('.password-strength-boxes').hide();
                $('.section-2').hide();
            },
            specialChars = /[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/,
            upperCase = new RegExp('[A-Z]'),
            lowerCase = new RegExp('[a-z]'),
            numbers = new RegExp('[0-9]'),
            minLength = 10,
            checkPassword = function () {
                var pass = $('input[name="password"]').val();
                if (specialChars.test(pass)) {
                    rules.specialChar = true;
                } else
                {
                    rules.specialChar = false;
                }
                if (upperCase.test(pass)) {
                    rules.upperCase = true;
                } else
                {
                    rules.upperCase = false;
                }
                if (lowerCase.test(pass)) {
                    rules.lowerCase = true;
                } else
                {
                    rules.lowerCase = false;
                }
                if (pass.length >= (minLength)) {
                    rules.minLength = true;
                } else
                {
                    rules.minLength = false;
                }

                //var answers = Object.values(rules);
                var answers = Object.keys(rules).map(function (key) {
                    return rules[key]
                });
                if (answers.indexOf(true) < 0) {
                    var count = 0;
                } else {
                    var count = {};
                    answers.forEach(function (i) {
                        count[i] = (count[i] || 0) + 1;
                    });
                    count = count.true;
                    $('.password-feedback').show();
                    $('.password-strength-boxes').show();
                    $('.section-2').show();
                    $('html, body').animate({
                        scrollTop: $(".password-strength-test").offset().top
                    }, 2000);
                }

                $('.password-feedback-text span.one, .strength-bar-legend p span.one').text(count);
                $('.password-strength-test .strength-bar span').css('width', 100 * count / 4 + "%");
            };
    setUp();
    $('.btn-check-password').on('click', function () {
        if ($('input[name="password"]').val() !== '') {
            checkPassword();
        }
    });
});
