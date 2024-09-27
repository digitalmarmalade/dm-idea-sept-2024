$(function () {
    const ruleBasedOption = $(".jsRuleBasedIcon");
    const AIoption = $(".jsAIIcon");
    const Hybridoption = $(".jsHybridIcon");

    const step1Success = $(".jsStep1 .jsRuleBased.success--box");
    const step1AIFail = $(".jsStep1 .jsAI.fail--box");
    const step1HybridFail = $(".jsStep1 .jsHybrid.fail--box");

    ruleBasedOption.click(() => {
        // add class success
        step1Success.removeClass("hide");

        step1AIFail.addClass("hide");
        step1HybridFail.addClass("hide");

        AIoption.addClass("disabled");
        Hybridoption.addClass("disabled");

        $(".jsAIIcon span").removeClass("step-4__activity--step-1-fail");
        $(".jsHybridIcon span").removeClass("step-4__activity--step-1-fail");
        $(".jsRuleBasedIcon span").addClass("step-4__activity--step-1-success");

        $(".jsStep2").removeClass("hide");

        $("html, body").animate(
            {
                scrollTop:
                    step1Success.offset().top - step1Success.height() * 8,
            },
            800
        );
    });

    AIoption.click(() => {
        // add fail class
        step1AIFail.removeClass("hide");

        step1Success.addClass("hide");
        step1HybridFail.addClass("hide");

        $(".jsHybridIcon span").removeClass("step-4__activity--step-1-fail");
        $(".jsAIIcon span").addClass("step-4__activity--step-1-fail");

        $("html, body").animate(
            {
                scrollTop: step1AIFail.offset().top - step1AIFail.height() * 4,
            },
            800
        );
    });

    Hybridoption.click(() => {
        // add fail class
        step1HybridFail.removeClass("hide");

        step1Success.addClass("hide");
        step1AIFail.addClass("hide");

        $(".jsAIIcon span").removeClass("step-4__activity--step-1-fail");
        $(".jsHybridIcon span").addClass("step-4__activity--step-1-fail");

        $("html, body").animate(
            {
                scrollTop:
                    step1HybridFail.offset().top - step1HybridFail.height() * 4,
            },
            800
        );
    });
});
