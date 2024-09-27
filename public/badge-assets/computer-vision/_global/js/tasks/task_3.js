$(function () {
  var color_inputContainer = $(".Js_color-image .input_container");
  var color_referenceContainer = $(".Js_color-image .reference_container");
  var color_outputContainer = $(".Js_color-image .output_container");
  var width = 9,
    height = 9;

  var light_blue = ["118", "206", "255"];
  var red = ["247", "29", "87"];
  var dark_red = ["201", "12", "62"];
  var green = ["0", "203", "106"];
  var dark_green = ["60", "179", "113"];
  var white_color = ["255", "255", "255"];
  var yellow = ["254", "230", "0"];

  var given_coloured_values = [
    light_blue,
    light_blue,
    light_blue,
    dark_red,
    red,
    dark_red,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    dark_red,
    red,
    red,
    red,
    dark_red,
    light_blue,
    light_blue,
    light_blue,
    dark_red,
    red,
    red,
    yellow,
    red,
    red,
    dark_red,
    light_blue,
    light_blue,
    light_blue,
    dark_red,
    red,
    red,
    red,
    dark_red,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    dark_red,
    green,
    dark_red,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    dark_green,
    light_blue,
    light_blue,
    green,
    light_blue,
    green,
    green,
    light_blue,
    light_blue,
    green,
    green,
    light_blue,
    green,
    green,
    green,
    dark_green,
    light_blue,
    light_blue,
    dark_green,
    green,
    green,
    green,
    dark_green,
    dark_green,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
    green,
    light_blue,
    light_blue,
    light_blue,
    light_blue,
  ];

  var color_manipulation = [white_color, white_color, white_color, white_color, white_color, white_color, white_color, white_color, white_color];

  var output_coloured_values = given_coloured_values.slice();

  function output_coloured_values_init() {
    output_coloured_values.splice(22, 1, color_manipulation[0]);
    output_coloured_values.splice(23, 1, color_manipulation[1]);
    output_coloured_values.splice(24, 1, color_manipulation[2]);
    output_coloured_values.splice(31, 1, color_manipulation[3]);
    output_coloured_values.splice(32, 1, color_manipulation[4]);
    output_coloured_values.splice(33, 1, color_manipulation[5]);
    output_coloured_values.splice(40, 1, color_manipulation[6]);
    output_coloured_values.splice(41, 1, color_manipulation[7]);
    output_coloured_values.splice(42, 1, color_manipulation[8]);
  }

  output_coloured_values_init();

  var cell_description = `<div class="cell-description"></div>`;
  color_referenceContainer.append(cell_description);

  for (var x = 0, idx = 0; x < width; x++) {
    var row = "<div class='row'>";

    for (var y = 0; y < height; y++) {
      var cell = `<div class='cell' id=${idx}  style='background-color: rgb(${parseInt(given_coloured_values[idx][0])}, ${parseInt(
        given_coloured_values[idx][1]
      )}, ${parseInt(given_coloured_values[idx][2])});
            border-color:rgb(${parseInt(given_coloured_values[idx][0])}, ${parseInt(given_coloured_values[idx][1])}, ${parseInt(
        given_coloured_values[idx][2]
      )}) ;'></div>`;

      row += cell;
      idx += 1;
    }
    row += "</div>";
    color_referenceContainer.append(row);
  }

  for (var x = 0, idx = 0; x < width; x++) {
    var row = "<div class='row'>";

    for (var y = 0; y < height; y++) {
      var cell = `<div class='cell' id=${idx}  style='background-color: rgb(${parseInt(output_coloured_values[idx][0])}, ${parseInt(
        output_coloured_values[idx][1]
      )}, ${parseInt(output_coloured_values[idx][2])});
            border-color:rgb(${parseInt(output_coloured_values[idx][0])}, ${parseInt(output_coloured_values[idx][1])}, ${parseInt(
        output_coloured_values[idx][2]
      )}) ;'></div>`;
      row += cell;
      idx += 1;
    }
    row += "</div>";
    color_outputContainer.append(row);
  }

  for (var x = 0, idx = 0; x < width / 3; x++) {
    var row = "<div class='flex flex--row flex-align--center'>";

    for (var y = 0; y < height / 3; y++) {
      var redLabelTag = "<label for='R'> R </label>";
      var redInputTag = `<input type="number" value=${color_manipulation[idx][0]} class = "cell" id=${idx}-0  name=${idx}>`;

      var greenLabelTag = "<label for='G'> G </label>";
      var greenInputTag = `<input type="number" value=${color_manipulation[idx][1]} class = "cell" id=${idx}-1  name=${idx}>`;

      var blueLabelTag = "<label for='B'> B </label>";
      var blueInputTag = `<input type="number" value=${color_manipulation[idx][2]} class = "cell" id=${idx}-2  name=${idx}>`;

      var redContainer = `<div class='flex flex--row text-align--center flex--align-center input-holder'>${redLabelTag}${redInputTag}</div>`;
      var greenContainer = `<div class='flex flex--row text-align--center flex--align-center input-holder' >${greenLabelTag}${greenInputTag}</div>`;
      var blueContainer = `<div class='flex flex--row  text-align--center flex--align-center input-holder'>${blueLabelTag}${blueInputTag}</div>`;

      var rgbContainer = `<div class='rgbContainer' id=${idx}  style='background-color: rgb(${parseInt(color_manipulation[idx][0])}, ${parseInt(
        color_manipulation[idx][1]
      )}, ${parseInt(color_manipulation[idx][2])});
            border-color:rgb(${parseInt(color_manipulation[idx][0])}, ${parseInt(color_manipulation[idx][1])}, ${parseInt(
        color_manipulation[idx][2]
      )}) ;'> ${redContainer}${greenContainer}${blueContainer}</div>`;
      row += rgbContainer;
      idx += 1;
    }
    row += "</div>";
    color_inputContainer.append(row);
  }
  
  function fill_colours(the_colour) {
    if (the_colour == 'red') {
      for (var i = 1; i<=4; i++) {
        updateValueX("247", 0, i);
        updateValueX("29", 1, i);
        updateValueX("87", 2, i);
      }
    }
    if (the_colour == 'dark_red') {
      updateValueX("201", 0, 5);
      updateValueX("12", 1, 5);
      updateValueX("62", 2, 5);
      updateValueX("201", 0, 7);
      updateValueX("12", 1, 7);
      updateValueX("62", 2, 7);
    }
  }

  function updateValueX(value, x, y) {
    let newValue = color_manipulation[y].slice();
    newValue.splice(x, 1, value);
    color_manipulation.splice(y, 1, newValue);
    output_coloured_values_init();
  }

  function updateValue(value, x, y) {
    let newValue = color_manipulation[y].slice();
    if (newValue[0] == "247" && newValue[1] == "29" && newValue[2] == "87" && ( y == 1 || y == 2 || y == 3 || y == 4)) {
      fill_colours('red');
    }
    if (newValue[0] == "201" && newValue[1] == "12" && newValue[2] == "62" && (y == 5 || y == 7)) {
      fill_colours('dark_red');
    }
    newValue.splice(x, 1, value);
    color_manipulation.splice(y, 1, newValue);
    output_coloured_values_init();
    // console.log(value, x, y);
  }

  let wrong_indexes = [];
  let indexes = [22, 23, 24, 31, 32, 33, 40, 41, 42];

  $("#colorImageCheck").click(function (e) {
    if (JSON.stringify(output_coloured_values) !== JSON.stringify(given_coloured_values)) {
      // console.log("change value");
      $("#colorImageCheck").fadeOut();
      $(".jsColorFeedbackFail").slideDown();
      $("html, body").animate({ scrollTop: $(document).height() });

      wrong_indexes = indexes.filter((idx) => JSON.stringify(output_coloured_values[idx]) !== JSON.stringify(given_coloured_values[idx]));
    } else {
      // console.log("continue");
      $(".jsColorFeedbackSuccess").slideDown();
      $("html, body").animate({ scrollTop: $(document).height() });
      $("#colorImageCheck").fadeOut();
    }
  });

  $(".jsColorReset").click((e) => {
    $(".jsColorFeedbackFail").slideUp();
    $("#colorImageCheck").fadeIn();

    wrong_indexes.map((idx) => {
      updateValue(255, 0, indexes.indexOf(idx));
      updateValue(255, 1, indexes.indexOf(idx));
      updateValue(255, 2, indexes.indexOf(idx));
    });

    updateView();
  });

  $(".jsColorOK").click(() => {
    $("#color-limit").slideUp();
    $("#colorImageCheck").fadeIn();
  });

  //from here
  var inputs = document.querySelectorAll(".Js_color-image .input_container .flex--row .rgbContainer .flex--row input");

  inputs.forEach((input) =>
    input.addEventListener("focus", (e) => {
      e.target.value = "";
    })
  );
  inputs.forEach((input) =>
    input.addEventListener("focusout", (e) => {
      e.target.value = color_manipulation[e.target.id[0]][e.target.id[2]];
    })
  );

  inputs.forEach((input) => input.addEventListener("keyup", handleInput));
  inputs.forEach((input) => input.addEventListener("blur", handleInput));

  var allowed_values = /[^0-9]/g;

  function handleInput(e) {
    if (e.target.value.match(allowed_values) || e.target.value > 255 || e.target.value < 0) {
      updateValue("255", e.target.id.split("-")[1], e.target.name);
      e.target.value = "255";
      $("#colorImageCheck").fadeOut();
      $("#color-limit").slideDown();

      $("html, body").animate({ scrollTop: $(document).height() });
    } else {
      updateValue(e.target.value, e.target.id.split("-")[1], e.target.name);
    }
    updateView();
  }

  function updateView() {
    var output_cells = $(".Js_color-image .output_container .row .cell");
    var input_cells = $(".Js_color-image .input_container .flex--row .rgbContainer");

    output_cells.each((index, cell) => {
      var value = output_coloured_values[index];
      //   console.log(value);
      var color = "rgb(" + value[0] + "," + value[1] + "," + value[2] + ")";
      cell.style.backgroundColor = color;
      cell.style.borderColor = color;
    });

    input_cells.each((index, cell) => {
      var value = color_manipulation[index];
      var color = "rgb(" + value[0] + "," + value[1] + "," + value[2] + ")";
      cell.style.backgroundColor = color;
      cell.style.borderColor = color;

      $(`#${cell.id}-0`).val(value[0]);
      $(`#${cell.id}-1`).val(value[1]);
      $(`#${cell.id}-2`).val(value[2]);

      //   console.log($(`${cell[0]} #${index}-0`).val());
      //   console.log($(cell));
    });
  }

  $(".Js_color-image .reference_container .row .cell").each((index, cell) => {
    cell.addEventListener(
      "mouseover",
      (e) => {
        var cell_RGB_values = `
                  <p> R ${given_coloured_values[index][0]} </p>
                  <p> G ${given_coloured_values[index][1]} </p>
                  <p> B ${given_coloured_values[index][2]} </p>
                  `;

        var x = $(cell).offset().left - $(color_referenceContainer).offset().left + $(cell).width() / 2;

        y = $(cell).offset().top - $(color_referenceContainer).offset().top + $(cell).width() / 2;
        var translate3d = "translate3d(" + x + "px," + y + "px, 0px)";
        $(".Js_color-image .reference_container .cell-description").css({
          transform: translate3d,
        });

        $(".Js_color-image .reference_container  .cell-description").append(cell_RGB_values);
      },
      false
    );
    cell.addEventListener("mouseout", hideValues, false);
  });

  $(".Js_color-image .reference_container .row .cell").each((index, cell) => {
    cell.addEventListener(
      "click",
      (e) => {
        // console.log("clicked", cell.offsetTop);
        hideValues();
        var cell_RGB_values = `
                  <p> R ${given_coloured_values[index][0]} </p>
                  <p> G ${given_coloured_values[index][1]} </p>
                  <p> B ${given_coloured_values[index][2]} </p>
                  `;

        var x = $(cell).offset().left - $(color_referenceContainer).offset().left + $(cell).width() / 2;

        y = $(cell).offset().top - $(color_referenceContainer).offset().top + $(cell).width() / 2;
        var translate3d = "translate3d(" + x + "px," + y + "px, 0px)";
        $(".Js_color-image .reference_container .cell-description").css({
          transform: translate3d,
        });

        $(".Js_color-image .reference_container  .cell-description").append(cell_RGB_values);

        setTimeout(hideValues, 5000);
      },
      false
    );
  });

  function getParentPosition(element) {
    var xPosition = 0;
    var yPosition = 0;

    while (element) {
      xPosition += element.offsetLeft - element.scrollLeft + element.clientLeft;
      yPosition += element.offsetTop - element.scrollTop + element.clientTop;
      //   console.log("element.scrollTop_1", element.scrollTop, element.offsetTop, element, yPosition);
      element = element.offsetParent;
      // console.log("element.scrollTop_2", element.scrollTop, element);
    }
    // console.log("parent", xPosition, yPosition);
    return {
      x: xPosition,
      y: yPosition,
    };
  }

  function getPosition(e, parentElement, element) {
    var parentPosition = getParentPosition(parentElement);
    // console.log("parentPosition", parentPosition.y, e.clientY);
    var xPosition = e.clientX - parentPosition.x - element.width() / 2;
    var yPosition = e.clientY - parentPosition.y - element.height() / 2;

    return {
      x: xPosition,
      y: yPosition,
    };
  }

  function revealValues(index, cell) {
    // console.log(
    //     $(".Js_color-image .reference_container .cell-description")[0],
    //     cell
    // );
    var cell_RGB_values = `
        <p> R ${given_coloured_values[index][0]} </p>
        <p> G ${given_coloured_values[index][1]} </p>
        <p> B ${given_coloured_values[index][2]} </p> `;
    // console.log(cell_RGB_values);
    $(".Js_color-image .reference_container .cell-description").append(cell_RGB_values);
  }

  function hideValues() {
    $(".Js_color-image .reference_container .cell-description").empty();
  }
});
