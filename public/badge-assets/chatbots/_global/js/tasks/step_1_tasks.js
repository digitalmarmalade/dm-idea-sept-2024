$(function () {
    const ruleBasedCorrectOption = $(".jsRuleBased .jsCorrectOption");
    const ruleBasedWrongOption = $(".jsRuleBased .jsWrongOption");
    const AICorrectOption = $(".jsAI .jsCorrectOption");
    const AIWrongOption = $(".jsAI .jsWrongOption");
    const hybridCorrectOption = $(".jsHybridModel .jsCorrectOption");
    const hybridWrongOption = $(".jsHybridModel .jsWrongOption");

    const ruleBasedSuccessFeedBack = $(".jsRuleBased .success--box");
    const ruleBasedWrongFeedBack = $(".jsRuleBased .fail--box");
    const AISuccessFeedBack = $(".jsAI .success--box");
    const AIWrongFeedBack = $(".jsAI .fail--box");
    const hybridSuccessFeedBack = $(".jsHybridModel .success--box");
    const hybridWrongFeedBack = $(".jsHybridModel .fail--box");

    const ruleBasedSuccessStory = $(".jsRuleBased .jsSuccessStory");
    const AISuccessStory = $(".jsAI .jsSuccessStory");
    const hybridSuccessStory = $(".jsHybridModel .jsSuccessStory");
    const summary = $(".jsSummary");

    const correctClass = "step-1__success--border";
    const wrongClass = "step-1__fail--border";

    ruleBasedCorrectOption.click(() => {
        ruleBasedWrongOption.removeClass(wrongClass);
        ruleBasedCorrectOption.addClass(correctClass);

        ruleBasedSuccessFeedBack.removeClass("hide");
        ruleBasedWrongFeedBack.addClass("hide");

        ruleBasedSuccessStory.removeClass("hide");
        $(".jsAI").removeClass("hide");

        ruleBasedWrongOption.addClass("disabled");

        $("html, body").animate(
            {
                scrollTop:
                    ruleBasedSuccessFeedBack.offset().top -
                    ruleBasedSuccessFeedBack.height(),
            },
            800
        );
    });

    ruleBasedWrongOption.click(() => {
        ruleBasedWrongOption.addClass(wrongClass);
        ruleBasedCorrectOption.removeClass(correctClass);

        ruleBasedSuccessFeedBack.addClass("hide");
        ruleBasedWrongFeedBack.removeClass("hide");

        ruleBasedSuccessStory.addClass("hide");
        $(".jsAI").addClass("hide");

        $("html, body").animate(
            {
                scrollTop:
                    ruleBasedWrongFeedBack.offset().top -
                    ruleBasedWrongFeedBack.height(),
            },
            800
        );
    });

    AICorrectOption.click(() => {
        AIWrongOption.removeClass(wrongClass);
        AICorrectOption.addClass(correctClass);

        AISuccessFeedBack.removeClass("hide");
        AIWrongFeedBack.addClass("hide");

        AISuccessStory.removeClass("hide");
        $(".jsHybridModel").removeClass("hide");

        AIWrongOption.addClass("disabled");

        $("html, body").animate(
            {
                scrollTop:
                    AISuccessFeedBack.offset().top - AISuccessFeedBack.height(),
            },
            800
        );
    });

    AIWrongOption.click(() => {
        AIWrongOption.addClass(wrongClass);
        AICorrectOption.removeClass(correctClass);

        AISuccessFeedBack.addClass("hide");
        AIWrongFeedBack.removeClass("hide");

        AISuccessStory.addClass("hide");
        $(".jsHybridModel").addClass("hide");

        $("html, body").animate(
            {
                scrollTop:
                    AIWrongFeedBack.offset().top - AIWrongFeedBack.height(),
            },
            800
        );
    });

    hybridCorrectOption.click(() => {
        hybridWrongOption.removeClass(wrongClass);
        hybridCorrectOption.addClass(correctClass);

        hybridSuccessFeedBack.removeClass("hide");
        hybridWrongFeedBack.addClass("hide");

        hybridSuccessStory.removeClass("hide");
        summary.removeClass("hide");

        hybridWrongOption.addClass("disabled");

        $("html, body").animate(
            {
                scrollTop:
                    hybridSuccessStory.offset().top -
                    hybridSuccessStory.height(),
            },
            800
        );
    });

    hybridWrongOption.click(() => {
        hybridWrongOption.addClass(wrongClass);
        hybridCorrectOption.removeClass(correctClass);

        hybridSuccessFeedBack.addClass("hide");
        hybridWrongFeedBack.removeClass("hide");

        hybridSuccessStory.addClass("hide");
        summary.addClass("hide");

        $("html, body").animate(
            {
                scrollTop:
                    hybridWrongFeedBack.offset().top -
                    hybridWrongFeedBack.height(),
            },
            800
        );
    });
});
