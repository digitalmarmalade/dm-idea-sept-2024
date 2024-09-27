$(function () {

    var rules = {},
            setUp = function () {
                $('.password-feedback-text-1').hide();
                $('.strength-bar-1 span').hide();
            },
            specialChars = /[-!£#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/,
            upperCase = new RegExp('[A-Z]'),
            lowerCase = new RegExp('[a-z]'),
            numbers = new RegExp('[0-9]'),
            minLength = 6,
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
                    $('.password-feedback-text-1').show();
                    $('.strength-bar-1 span').show();
                    $('.btn-continue-1').css('display','inline-block');
                    $('.btn-continue-1').on('click', function () {
                      $('#strong-password').show();
                      $('#task-1').hide();
                      $("html, body").animate({scrollBottom: $(document).height()});
                    });
                }

                $('.password-feedback-text-1 span.one, .strength-bar-legend-1 p span.one').text(count);
                $('.task-password-1 .strength-bar-1 span').css('width', 100 * count / 4 + "%");
            };
    setUp();
    $('.btn-check-password-1').on('click', function () {
        if ($('input[name="password"]').val() !== '') {
          $(this).hide();
          checkPassword();
        }
    });
});

$(function () {

    var rules = {},
            setUp = function () {
                $('.password-feedback-success').hide();
                $('.password-feedback-fail').hide();
            },
            specialChars = /[-!£#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/,
            upperCase = new RegExp('[A-Z]'),
            lowerCase = new RegExp('[a-z]'),
            numbers = new RegExp('[0-9]'),
            minLength = 6,
            checkPassword = function () {
                var pass = $('input[name="password-2"]').val();
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
                }

                if (count < 4) {
                  $('.password-feedback-fail').show();
                  $('.btn-try-again-password').on('click', function () {
                        setUp();
                        $('.btn-check-password-2').show();
                  });
                } else {
                  $('.password-feedback-success').show();
                }


                $('.password-feedback-text-2 span.one, .strength-bar-legend-2 p span.one').text(count);
                $('.task-password-2 .strength-bar-2 span').css('width', 100 * count / 4 + "%");
            };
    setUp();
    $('.btn-check-password-2').on('click', function () {
        if ($('input[name="password"]').val() !== '') {
          $(this).hide();
          checkPassword();
        }
    });
});
