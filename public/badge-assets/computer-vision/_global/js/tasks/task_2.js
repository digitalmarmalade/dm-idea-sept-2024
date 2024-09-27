var inputContainer = $(".Js_gray-image .input_container");
var outputContainer = document.querySelector(".Js_gray-image .output_container");
var width = 9,
  height = 9;

var initial_gray_scale_values = [
  209, 209, 209, 50, 87, 50, 209, 209, 209, 209, 209, 50, 87, 87, 87, 50, 209, 209, 209, 0, 87, 87, 255, 87, 87, 0, 209, 209, 209, 50, 87, 87, 87, 50,
  209, 209, 209, 209, 209, 50, 87, 50, 209, 209, 209, 209, 87, 209, 209, 167, 209, 167, 167, 209, 209, 167, 167, 209, 167, 167, 167, 87, 209, 209, 87,
  167, 167, 167, 87, 87, 209, 209, 209, 209, 209, 209, 167, 209, 209, 209, 209,
];

var user_gray_scale_values = initial_gray_scale_values.slice();

var form = "<form action='' method='post' id='js_gray-image-form'>";

for (var x = 0, idx = 0; x < width; x++) {
  var row = "<div class='row'>";

  for (var y = 0; y < height; y++) {
    var inputNode = `<input type='number'  pattern="\d*" class='cell' id=${idx} value=${parseInt(user_gray_scale_values[idx])}>`;
    row += inputNode;
    idx += 1;
  }
  row += "</div>";
  form += row + "</div>";
}
inputContainer.append(form);

for (var x = 0, idx = 0; x < width; x++) {
  var row = document.createElement("div");
  row.classList.add("row");

  for (var y = 0; y < height; y++) {
    var cell = document.createElement("div");
    cell.classList.add("cell");

    var value = document.createTextNode("");

    cell.appendChild(value);
    row.appendChild(cell);
    idx += 1;
  }

  outputContainer.appendChild(row);
}

update();

var inputs = document.querySelectorAll(".Js_gray-image .input_container .row input");
inputs.forEach((input) =>
  input.addEventListener("focus", (e) => {
    e.target.value = "";
  })
);
inputs.forEach((input) =>
  input.addEventListener("focusout", (e) => {
    e.target.value = user_gray_scale_values[e.target.id];
  })
);
inputs.forEach((input) => input.addEventListener("keyup", handleInput));

$(".jsGrayOK").click(() => {
  $("#gray-color-limit").slideUp();
  $("#grayImageCheck").fadeIn();
});

var allowed_values = /[^0-9]/g;
function handleInput(e) {
  if (e.target.value.match(allowed_values) || e.target.value > 255 || e.target.value < 0) {
    e.target.value = initial_gray_scale_values[e.target.id];

    $("#gray-color-limit").slideDown();

    $("html, body").animate({ scrollTop: $(document).height() });
    $("#grayImageCheck").fadeOut();
  }
  user_gray_scale_values.splice(e.target.id, 1, +e.target.value);

  e.preventDefault();
  update();
}

$(".jsGrayReset").click((e) => {
  $(".jsGrayFeedbackFail").slideUp();
  $("#grayImageCheck").fadeIn();
});

$("#grayImageCheck").click(function (e) {
  if (JSON.stringify(user_gray_scale_values) !== JSON.stringify(initial_gray_scale_values)) {
    console.log("continue");
    $("#grayImageCheck").fadeOut();
    $(".jsScrollAnchor2").slideDown();
    $("html, body").animate({ scrollTop: $(document).height() });
  } else {
    $(".jsGrayFeedbackFail").slideDown();
    $("html, body").animate({ scrollTop: $(document).height() });
    $("#grayImageCheck").fadeOut();

    console.log("change value");
  }
});

function update() {
  var output_cells = $(".Js_gray-image .output_container .row .cell");

  output_cells.each((index, cell) => {
    var value = user_gray_scale_values[index];
    value = (value / 255) * 100;
    var r = parseInt(value, 16);
    var g = parseInt(value, 16);
    var b = parseInt(value, 16);
    var val = Math.floor(0.2126 * r + 0.7152 * g + 0.0722 * b);
    var color = "rgb(" + val + "," + val + "," + val + ")";
    cell.style.backgroundColor = color;
  });
}
