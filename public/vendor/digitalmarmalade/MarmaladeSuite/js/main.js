//Open the Menu on Mobile and Tablet Devices
$(document).ready(function()
{
    $("#menuTrigger").click(function () {
        "use strict";
        $('body').toggleClass('navigation-expanded');
        $('#menu').toggleClass('expanded');
        return false;
    });


    //Listen for changes in the panel title
    $(document).on('keyup', '.js-panel-title-input', function () {
        "use strict";
        var value = $(this).val(),
            colon = $(this).closest('fieldset').find('.colon');
        if (value !== '') {
            colon.removeClass('hide');
        } else {
            colon.addClass('hide');
        }
        $(this).closest('fieldset').find('.js-panel-entered-title').text(value);

        console.log(value);

    });

    $(".js-panel-title-select").change(function () {
        "use strict";
        var value = $(this).val();
        $(this).closest('fieldset').find('.js-panel-entered-title').text(value);
    });

    //Listen for changes in fields with limited characters
    $(document).on('keyup', '.js-count-characters', function () {
        "use strict";
        var allowedCharacters = $(this).data('allowedcharacters'),
                currentLength = $(this).val().length;
        countCharacters($(this), allowedCharacters, currentLength);
    });

    //Loop through each field with limited characters and update characters remaining
    $(".js-count-characters").each(function () {
        "use strict";
        var allowedCharacters = $(this).data('allowedcharacters'),
                currentLength = $(this).val().length;
        countCharacters($(this), allowedCharacters, currentLength);
    });

    //Show and hide optional fields depending on radio button


    $(document).on('change', '.js-choose-option', function () {
        "use strict";
        var target = $(this).data('target');
        $(this).closest('.form-panel').find('.optional-inputs').hide();
        $(this).closest('.form-panel').find('.' + target).show();
    });

    $(".js-choose-option").each(function () {
        "use strict";
        if ($(this).is(":checked")) {
            var target = $(this).data('target');
            $(this).closest('.form-panel').find('.optional-inputs').hide();
            $(this).closest('.form-panel').find('.' + target).show();
        }
    });


    //Listen for changes to a checkbox that triggers something else to show
    $(document).on('change', '.js-checkbox-reveal-trigger', function () {
        "use strict";
        var revealTarget = $(this).closest('p').next('.js-trigger-reveal');

        if ($(this).is(":checked")) {
            revealTarget.show();
        } else {
            revealTarget.hide();
        }
    });
    $('.js-checkbox-reveal-trigger').each(function () {
        "use strict";
        var revealTarget = $(this).closest('p').next('.js-trigger-reveal');

        if ($(this).is(":checked")) {
            revealTarget.show();
        } else {
            revealTarget.hide();
        }
    });

    //Twister
    $(document).on('click', '.js-twister', function () {
        "use strict";
        $(this).toggleClass('active');
        $(this).next('.js-twister-content').toggle();
        return false;
    });

    //Close Feedback
    $(".feedback-message.positive").click(function () {
        "use strict";
        $('body').removeClass('show-feedback');
        return false;
    });

    $(".close-negative-feedback").click(function () {
        "use strict";
        $(this).closest('.feedback-message').hide();
        return false;
    });

    //User Options
    $(".js-trigger-user-details").click(function () {
        "use strict";
        $('.js-user-details').toggle();
        return false;
    });
    
    $(".js-twister h2").click(function(event){
        var twister = $(this).parent();
        var twister_content = twister.children(".twister-content");
        if (twister.hasClass("expanded"))
        {
            twister.removeClass("expanded");
            twister_content.stop().slideUp(250);
        }
        else
        {
            twister.addClass("expanded");
            twister_content.stop().slideDown(250);
        }
    });

    $(".js-language-switcher").change(function(event){
        window.location=$(this).val();
    });
});

function countCharacters(target, allowedCharacters, currentLength) {
    "use strict";
    var charactersRemaining = allowedCharacters - currentLength;
    target.next('.help-block').find('.js-characters-remaining').text(charactersRemaining);
}


/*
 
 Enhancements to customised input type="file"
 
 By Osvaldas Valutis, www.osvaldas.info
 Available for use under the MIT License
 */

(function (document)
{
    "use strict";
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input)
    {
        var label = input.nextElementSibling,
                labelVal = label.innerHTML;

        input.addEventListener('change', function (e)
        {
            var fileName = '';
            if (this.files && this.files.length > 1) {
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            } else {
                fileName = e.target.value.split('\\').pop();
            }
            if (fileName) {
                label.querySelector('span').innerHTML = fileName;
            } else {
                label.innerHTML = labelVal;
            }
        });

        // Firefox bug fix
        input.addEventListener('focus', function () {
            input.classList.add('has-focus');
        });
        input.addEventListener('blur', function () {
            input.classList.remove('has-focus');
        });
    });
}(document, window, 0));

//Add class to show any feedback immediately and remove after 5 seconds
function showFeedback() {
    "use strict";
    $('body').addClass('show-feedback');
}
setTimeout(showFeedback, 0);

function hideFeedback() {
    "use strict";
    $('body').removeClass('show-feedback');
}
setTimeout(hideFeedback, 5000);


