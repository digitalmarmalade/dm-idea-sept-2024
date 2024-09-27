var image_options = [
  {
    id: 0,
    type: "glass",
    src: "../badge-assets/ai-inference/_global/svg/bottle--1.svg",
    acceptable_names: ["GLASS"],
    user_answer: "",
  },
  {
    id: 1,
    type: "metal",
    src: "../badge-assets/ai-inference/_global/svg/can--1.svg",
    acceptable_names: ["METAL"],
    user_answer: "",
  },
  {
    id: 2,
    type: "paper",
    src: "../badge-assets/ai-inference/_global/svg/cardbox--1.svg",
    acceptable_names: ["PAPER"],
    user_answer: "",
  },
  {
    id: 3,
    type: "paper",
    src: "../badge-assets/ai-inference/_global/svg/paper--1.svg",
    acceptable_names: ["PAPER"],
    user_answer: "",
  },
  {
    id: 4,
    type: "plastic",
    src: "../badge-assets/ai-inference/_global/svg/bottle--5.svg",
    acceptable_names: ["PLASTIC"],
    user_answer: "",
  },
  {
    id: 5,
    type: "metal",
    src: "../badge-assets/ai-inference/_global/svg/can--2.svg",
    acceptable_names: ["METAL"],
    user_answer: "",
  },
  {
    id: 6,
    type: "paper",
    src: "../badge-assets/ai-inference/_global/svg/cardbox--2.svg",
    acceptable_names: ["PAPER"],
    user_answer: "",
  },
  {
    id: 7,
    type: "paper",
    src: "../badge-assets/ai-inference/_global/svg/paper--2.svg",
    acceptable_names: ["PAPER"],
    user_answer: "",
  },
  {
    id: 8,
    type: "glass",
    src: "../badge-assets/ai-inference/_global/svg/bottle--2.svg",
    acceptable_names: ["GLASS"],
    user_answer: "",
  },
  {
    id: 9,
    type: "paper",
    src: "../badge-assets/ai-inference/_global/svg/paper--3.svg",
    acceptable_names: ["PAPER"],
    user_answer: "",
  },
  {
    id: 10,
    type: "metal",
    src: "../badge-assets/ai-inference/_global/svg/can--5.svg",
    acceptable_names: ["METAL"],
    user_answer: "",
  },
  {
    id: 11,
    type: "metal",
    src: "../badge-assets/ai-inference/_global/svg/can--3.svg",
    acceptable_names: ["METAL"],
    user_answer: "",
  },
  {
    id: 12,
    type: "glass",
    src: "../badge-assets/ai-inference/_global/svg/bottle--3.svg",
    acceptable_names: ["GLASS"],
    user_answer: "",
  },
  {
    id: 13,
    type: "metal",
    src: "../badge-assets/ai-inference/_global/svg/can--4.svg",
    acceptable_names: ["METAL"],
    user_answer: "",
  },
  {
    id: 14,
    type: "glass",
    src: "../badge-assets/ai-inference/_global/svg/bottle--4.svg",
    acceptable_names: ["GLASS"],
    user_answer: "",
  },
  {
    id: 15,
    type: "plastic",
    src: "../badge-assets/ai-inference/_global/svg/bottle--7.svg",
    acceptable_names: ["PLASTIC"],
    user_answer: "",
  },
];

image_options.forEach((image, idx) => {
  var image_holder = `
    <div class="keywords__option">

        <div class="keywords__image">
            <img
                src="/task_2/${image.src}"
                alt="select_object_image"
                class=""
                id="image-${image.id}"
            />
        </div>

        <label for"image-label-${image.id}" name="image-label-${image.id}">
            <input class="keywords__input" type="text" id="image-label-${image.id}" value="${image.user_answer}"/>
        </label>
    </div>
    `;
  $(".Js_image-name").append(image_holder);
});

$(".Js_image-name input").each((index, cell) => {
  cell.addEventListener("keyup", (e) => {
    image_options[index].user_answer = e.target.value.trim();
    // image_options[index].user_answer = e.target.value.trim().toUpperCase();
  });
});

$(".Js_image-name input").each((index, cell) => {
  cell.addEventListener("focusout", (e) => {
    // image_options[index].user_answer = e.target.value.trim().toUpperCase();
    e.target.value = image_options[index].user_answer;
  });
});

$(".jsAnnotationReset").click((e) => {
  $(".jsAnnotationFeedbackFail").addClass("hide");
  $(".Js_image-name-check").removeClass("hide");
});

$("#task-2-btn").click((e) => {
  $(".jsAnnotationFeedbackSuccess").addClass("hide");
  $(".overlay").addClass("overlay--active");
  $(".processing").addClass("processing--active");

  setTimeout(function () {
    $(".overlay").removeClass("overlay--active");
    $(".processing").removeClass("processing--active");
  }, 15000);
  setTimeout(function () {
    $(".activity--factory").removeClass("hide");
    $("html, body").animate(
      {
        scrollTop: $(".activity--factory").offset().top,
      },
      800
    );
  }, 15500);

  // $("html, body").animate({ scrollTop: 0 });

  //   nextChapter();
});

$(".Js_image-name-check").click((e) => {
  $(".keywords__input--fail").removeClass("keywords__input--fail");
  $(".keywords__input--success").removeClass("keywords__input--success");

  var no_correct_answers = 0;
  image_options.forEach((image, idx) => {
    if (image.acceptable_names.includes(image.user_answer.toUpperCase())) {
      var same_type = image_options.filter((item) => item.type === image.type);
      console.log("1st check pass", same_type);
      $(`#image-label-${idx}`).toggleClass("keywords__input--success ");
      //   $(`#image-${idx}`).toggleClass("keywords__input--success");
      if (same_type.filter((item) => item.user_answer.toUpperCase() !== image.user_answer.toUpperCase()).length === 0) {
        // console.log("welldone");
        no_correct_answers += 1;
      } else {
      }
    } else {
      console.log("1st failed", image.user_answer);

      $(`#image-label-${idx}`).toggleClass("keywords__input--fail");

      //   $(`#image-${idx}`).toggleClass("fail");
    }
  });

  if (no_correct_answers === image_options.length) {
    console.log("move to the next stage");
    $(".Js_image-name-check").addClass("hide");
    $(".jsAnnotationFeedbackSuccess").removeClass("hide");
    $("html, body").animate({ scrollTop: $(document).height() });
  } else {
    $(".Js_image-name-check").addClass("hide");
    // $(".jsAnnotationFeedbackSuccess").removeClass("hide");
    $(".jsAnnotationFeedbackFail").removeClass("hide");

    $("html, body").animate({ scrollTop: $(document).height() });
    console.log(no_correct_answers);
  }
});
