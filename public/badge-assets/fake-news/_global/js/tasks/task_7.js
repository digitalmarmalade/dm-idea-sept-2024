$(function () {
  const counter = $(".jsRealFakeNews .fake-news-detector__counter");
  const real_drop = $(".jsRealFakeNews .jsReal");
  const fake_drop = $(".jsRealFakeNews .jsFake");

  const success_class = "fake-news-detector__drop-zone__target--success";
  const fail_class = "fake-news-detector__drop-zone__target--fail";

  const news_items = [
    {
      id: 1,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/1-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 2,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/2-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 3,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/3-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 4,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/4-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 5,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/5-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 6,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/6-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 7,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/7-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 8,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/8-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 9,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/9-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 10,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/10-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 11,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/11-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 12,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/12-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 13,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/13-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 14,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/14-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 15,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/15-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 16,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/16-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 17,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/17-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 18,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/18-Fake.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: false,
    },
    {
      id: 19,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/19-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
    {
      id: 20,
      newsURL: `
            <img
              class="fake-news-detector__news-item"
              src="/badge-assets/fake-news/svg/20-Real.svg"
              alt="News Article"
              width="400"
              height="320"
              loading="lazy"
              decoding="async"
            />`,
      type: true,
    },
  ];

  let newsItemId = 0;
  const nextItem = () => {
    if (newsItemId < news_items.length) {
      // console.log(newsItemId, news_items[newsItemId].id);
    } else {
      // trigger complete class
      return nextActivity();
    }

    counter.text(`${newsItemId + 1}/${news_items.length}`);
    // console.log("newsItemId", newsItemId);
    $(".jsRealFakeNews .fake-news-detector__article-container").append(news_items[newsItemId].newsURL);

    $(".jsRealFakeNews .fake-news-detector__news-item").draggable({
      revert: "invalid",
      addClasses: "false",
      cursorAt: { left: $(".ui-draggable-dragging").width() / 2 + 50 },

      drag: function (event, ui) {
        $("body").addClass("dragging");
      },

      stop: function (event, ui) {
        $("body").removeClass("dragging");
      },
    });

    $(real_drop).droppable({
      tolerance: "pointer",
      addClasses: false,

      drop: function (event, ui) {
        $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(success_class);
        $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(fail_class);
        $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(success_class);
        $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(fail_class);

        $(".fake-news-detector__news-item").remove();
        if (news_items[newsItemId].type) {
          // trigger true animation
          $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").addClass(success_class);

          setTimeout(() => {
            $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(success_class);
            $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(fail_class);

            newsItemId += 1;
            nextItem();
          }, 500);
        } else {
          $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").addClass(fail_class);

          setTimeout(() => {
            $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(success_class);
            $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(fail_class);

            nextItem();
          }, 500);
        }
      },
    });

    $(fake_drop).droppable({
      tolerance: "pointer",
      addClasses: false,

      drop: function (event, ui) {
        $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(success_class);
        $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(fail_class);
        $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(success_class);
        $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(fail_class);

        $(".fake-news-detector__news-item").remove();
        if (!news_items[newsItemId].type) {
          // trigger true animation
          $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").addClass(success_class);

          setTimeout(() => {
            $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(success_class);
            $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(fail_class);

            newsItemId += 1;
            nextItem();
          }, 500);
        } else {
          $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").addClass(fail_class);
          // trigger fail animation

          setTimeout(() => {
            $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(success_class);
            $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(fail_class);

            nextItem();
          }, 500);
        }
      },
    });
  };

  const nextActivity = () => {
    $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(success_class);
    $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").removeClass(fail_class);
    $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(success_class);
    $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").removeClass(fail_class);

    $(".jsRealFakeNews .jsReal .fake-news-detector__drop-zone__target").addClass("fake-news-detector__drop-zone__target--real");
    $(".jsRealFakeNews .jsFake .fake-news-detector__drop-zone__target").addClass("fake-news-detector__drop-zone__target--fake");

    $(".jsRealFakeNews .fake-news-detector__article-container").remove();

    $(".jsRealFakeNews .success-box").removeClass("hide");
    $(".task-8").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".jsRealFakeNews .success-box").offset().top - $(".jsRealFakeNews .success-box").height() / 2,
      },
      500
    );
  };

  nextItem();
});
