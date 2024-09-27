$(function () {
    const removePunctuationBtn = $(".jsRemovePunctuation .btn");
    const tokenizationBtn = $(".jsTokenization .btn");
    const stopWordsBtn = $(".jsStopWords .btn");
    const stemmingBtn = $(".jsStemming .btn");

    // const removeBreak = $(".jsBreak");

    removePunctuationBtn.on("click", () => {
        removePunctuationBtn.hide();
        $(".jsRemovePunctuation .jsBreak").remove();
        $(".jsRemovePunctuation .jsCode").removeClass("hide");
        $(".jsRemovePunctuation .jsTable").removeClass("hide");
        var leftPos = $(
            ".jsRemovePunctuation .table-x-scroll-wrapper"
        ).scrollLeft();
        $(".jsRemovePunctuation .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );

        $(".jsTokenization").removeClass("hide");
        $(".jsTokenization .jsTable").removeClass("hide");

        var leftPos = $(".jsTokenization .table-x-scroll-wrapper").scrollLeft();
        $(".jsTokenization .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );
    });

    tokenizationBtn.on("click", () => {
        tokenizationBtn.hide();
        $(".jsTokenization .jsBreak").remove();
        $(".jsTokenization .jsCode").removeClass("hide");
        $(".jsTokenization .jsBodyTextTokenized").removeClass("hide");
        var leftPos = $(".jsTokenization .table-x-scroll-wrapper").scrollLeft();
        $(".jsTokenization .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );

        $(".jsStopWords").removeClass("hide");
        $(".jsStopWords .jsBodyTextTokenized").removeClass("hide");
        $(".jsStopWords .jsTable").removeClass("hide");

        var leftPos = $(".jsStopWords .table-x-scroll-wrapper").scrollLeft();
        $(".jsStopWords .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );
    });

    stopWordsBtn.on("click", () => {
        stopWordsBtn.hide();
        $(".jsStopWords .jsBreak").remove();
        $(".jsStopWords .jsCode").removeClass("hide");
        $(".jsStopWords .jsBodyTextTokenized").removeClass("hide");
        $(".jsStopWords .jsBodyTextNoStop").removeClass("hide");

        var leftPos = $(".jsStopWords .table-x-scroll-wrapper").scrollLeft();
        $(".jsStopWords .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );

        $(".jsStemming").removeClass("hide");
        $(".jsStemming .jsBodyTextTokenized").removeClass("hide");
        $(".jsStemming .jsBodyTextNoStop").removeClass("hide");
        $(".jsStemming .jsTable").removeClass("hide");

        var leftPos = $(".jsStemming .table-x-scroll-wrapper").scrollLeft();
        $(".jsStemming .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );
    });

    stemmingBtn.on("click", () => {
        stemmingBtn.hide();
        $(".jsStemming .jsBreak").remove();
        $(".jsStemming .jsCode").removeClass("hide");
        $(".jsStemming .jsBodyTextTokenized").removeClass("hide");
        $(".jsStemming .jsBodyTextNoStop").removeClass("hide");
        $(".jsStemming .jsBodyTextStemmed").removeClass("hide");

        var leftPos = $(".jsStemming .table-x-scroll-wrapper").scrollLeft();
        $(".jsStemming .table-x-scroll-wrapper").animate(
            { scrollLeft: leftPos + 1000 },
            800
        );

        $(".jsVectorizing").removeClass("hide");
        $(".jsNLPRealLife").removeClass("hide");
        $(".jsContinue").removeClass("hide");
    });
});
