var image_options = [
  {
    id: 0,
    type: "cyclist",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--bicycle-1.png",
    acceptable_names: ["cyclist"],
    user_answer: "",
  },
  {
    id: 1,
    type: "dog",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--dog-1.png",
    acceptable_names: ["dog"],
    user_answer: "",
  },
  {
    id: 2,
    type: "car",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--car-1.png",
    acceptable_names: ["car"],
    user_answer: "",
  },
  {
    id: 3,
    type: "pedestrain",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--pedestrians-1.png",
    acceptable_names: ["pedestrian"],
    user_answer: "",
  },
  {
    id: 4,
    type: "bus",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--bus-1.png",
    acceptable_names: ["bus"],
    user_answer: "",
  },
  {
    id: 5,
    type: "cyclist",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--bicycle-2.png",
    acceptable_names: ["cyclist"],
    user_answer: "",
  },
  {
    id: 6,
    type: "helmet",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--helmet-1.png",
    // acceptable_names: ["motorcycle helmet", "motorcross helmet"],
    acceptable_names: ["motorcycle helmet"],
    user_answer: "",
  },
  {
    id: 7,
    type: "car",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--car-2.png",
    acceptable_names: ["car"],
    user_answer: "",
  },
  {
    id: 8,
    type: "car",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--car-3.png",
    acceptable_names: ["car"],
    user_answer: "",
  },
  {
    id: 9,
    type: "bus",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--bus-2.png",
    acceptable_names: ["bus"],
    user_answer: "",
  },
  {
    id: 10,
    type: "pedestrian",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--pedestrians-2.png",
    acceptable_names: ["pedestrian"],
    user_answer: "",
  },
  {
    id: 11,
    type: "helmet",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--helmet-3.png",
    // acceptable_names: ["motorcycle helmet", "motorcross helmet"],
    acceptable_names: ["motorcycle helmet"],
    user_answer: "",
  },
  {
    id: 12,
    type: "dog",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--dog-2.png",
    acceptable_names: ["dog"],
    user_answer: "",
  },
  {
    id: 13,
    type: "moped",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--motorbike-2.png",
    acceptable_names: ["moped"],
    user_answer: "",
  },
  {
    id: 14,
    type: "motocross helmet",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--helmet-2.png",
    // acceptable_names: ["motorcycle helmet", "motorcross helmet"],
    acceptable_names: ["motocross helmet"],
    user_answer: "",
  },
  {
    id: 15,
    type: "motorcycle",
    src: "../badge-assets/computer-vision/_global/imgs/tasks/task-9--motorbike-1.png",
    acceptable_names: ["motorcycle"],
    user_answer: "",
  },
];
var name_options = ["VEHICLE", "CYCLIST", "DOG", "MOTORCYLE HELMET", "MOTORCROSS HELMET", "CAR", "MOTORCYLIST", "PEDESTRIAN", "CAT", "HAT", "BUS"];

image_options.forEach((image, idx) => {
  var image_holder = `
    <div class="flex flex--column footage_holder">

        <img
                src="/task_8/${image.src}"
                alt="select_object_image"
                class=""
                id="image-${image.id}"
            />

        <input type="text" id="image-label-${image.id}" value="${image.user_answer}"/>
    </div>
    `;
  $(".Js_image-name").append(image_holder);
});

// console.log($(".Js_image-name input"));

$(".Js_image-name input").each((index, cell) => {
  cell.addEventListener("keyup", (e) => {
    image_options[index].user_answer = e.target.value.trim();
    // image_options[index].user_answer = e.target.value.trim().toLowerCase();
  });
});
$(".Js_image-name input").each((index, cell) => {
  cell.addEventListener("focusout", (e) => {
    // image_options[index].user_answer = e.target.value.trim().toLowerCase();
    e.target.value = image_options[index].user_answer;
  });
});

$(".jsAnnotationReset").click((e) => {
  $(".jsAnnotationFeedbackFail").slideUp();
  $(".Js_image-name-check").fadeIn();
});

$("#task-9").click((e) => {
  $(".jsAnnotationFeedbackSuccess").fadeOut();
  $("#task9Anchor").slideUp();

  $("html, body").animate({ scrollTop: 0 });

  nextChapter();
});

$(".Js_image-name-check").click((e) => {
  $(".fail").removeClass("fail");
  $(".success").removeClass("success");

  var no_correct_answers = 0;
  image_options.forEach((image, idx) => {
    if (image.acceptable_names.includes(image.user_answer.toLowerCase())) {
      var same_type = image_options.filter((item) => item.type === image.type);
      console.log("1st check pass", same_type);
      $(`#image-label-${idx}`).toggleClass("success");
      $(`#image-${idx}`).toggleClass("success");
      if (same_type.filter((item) => item.user_answer.toLowerCase() !== image.user_answer.toLowerCase()).length === 0) {
        // console.log("welldone");
        no_correct_answers += 1;
      } else {
      }
    } else {
      console.log("1st failed", image.user_answer);

      $(`#image-label-${idx}`).toggleClass("fail");

      $(`#image-${idx}`).toggleClass("fail");
    }
  });

  if (no_correct_answers === image_options.length) {
    console.log("move to the next stage");
    $(".Js_image-name-check").fadeOut();
    $(".jsAnnotationFeedbackSuccess").slideDown();
    $("html, body").animate({ scrollTop: $(document).height() });
  } else {
    $(".Js_image-name-check").fadeOut();
    // $(".jsAnnotationFeedbackSuccess").slideDown();
    $(".jsAnnotationFeedbackFail").slideDown();

    $("html, body").animate({ scrollTop: $(document).height() });
    console.log(no_correct_answers);
  }
});
