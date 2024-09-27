var width = 6;
var height = 6;
var kernel = $(".Js_kenrnel_correct_position .kernel");
var kernel_values = [1, 0, 1, 0, 1, 0, 1, 0, 1];

var input_values = [
    7, 6, 5, 5, 6, 7, 6, 4, 3, 2, 4, 6, 5, 3, 2, 3, 3, 5, 5, 3, 2, 3, 3, 5, 6,
    4, 3, 3, 4, 6, 7, 6, 5, 5, 6, 7,
];

var user_answer = [
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
];

for (var x = 0, id = 0; x < width / 2; x++) {
    var row = "<div class='flex row'>";
    for (var y = 0; y < height / 2; y++) {
        var cell = `<div class = 'cell' id = cell-" + id + " > ${kernel_values[id]}</div>`;
        row += cell;
        id += 1;
    }

    row += "</div>";
    kernel.append(row);
}

var input = $(".Js_kenrnel_correct_position .input");

for (var x = 0, id = 0; x < width; x++) {
    var row = "<div class='flex row'>";
    for (var y = 0; y < height; y++) {
        var cell = `<div class = 'cell'><div class="cell__input flex flex--center" id = input-cell-${id}>${input_values[id]}</div></div>`;
        row = row + cell;
        id += 1;
    }
    row = row + "</div>";
    input.append(row);
}

var output = $(".Js_kenrnel_correct_position .output");

for (var x = 0, id = 0; x < width; x++) {
    var row = "<div class='flex row'>";
    for (var y = 0; y < height; y++) {
        var cell = `<input type="number" class = 'cell' id = "output-cell-${id}" value=${user_answer[id]}>`;
        row = row + cell;
        id += 1;
    }
    row = row + "</div>";
    output.append(row);
}

correct_answer =
    input_values[8] * kernel_values[0] +
    input_values[9] * kernel_values[1] +
    input_values[10] * kernel_values[2] +
    input_values[14] * kernel_values[3] +
    input_values[15] * kernel_values[4] +
    input_values[16] * kernel_values[5] +
    input_values[20] * kernel_values[6] +
    input_values[21] * kernel_values[7] +
    input_values[22] * kernel_values[8];

var output_cells = $(".Js_kenrnel_correct_position .output .row .cell");

$(".Js_kenrnel_correct_position .output .row input").each((index, cell) => {
    cell.addEventListener("keyup", (e) => {
        console.log(e.target.value, index);
        user_answer.splice(index, 1, e.target.value);
    });
});
var inputs = document.querySelectorAll(
    ".Js_kenrnel_correct_position .output .row input"
);
inputs.forEach((input, idx) => {
    input.addEventListener("focus", (e) => {
        e.target.value = "";

        var other_cells = [...inputs].filter((cell) => cell.id !== e.target.id);
        other_cells.forEach((cell, idx) => {
            user_answer.splice(cell.id.substring(12), 1, "");
            cell.value = "";
        });
    });
});
inputs.forEach((input, idx) => {
    input.addEventListener("focusout", (e) => {
        e.target.value = user_answer[idx];
    });
});

// console.log(correct_answer);

$(".jsTask6IncorrectBox-btn").click(() => {
    $(".jsTask6IncorrectBox").hide();
    $(".js_kenrnel_correct_position-check").slideDown();
});
$(".jsEmptyCells-btn").click(() => {
    $(".jsEmptyCells").hide();
    $(".js_kenrnel_correct_position-check").slideDown();
});
$(".jsTask6IncorrectCalculations-btn").click(() => {
    $(".jsTask6IncorrectCalculations").hide();
    $(".js_kenrnel_correct_position-check").slideDown();
});
$(".jsTask6IncorrectCalculationsBox-btn").click(() => {
    $(".jsTask6IncorrectCalculationsBox").hide();
    $(".js_kenrnel_correct_position-check").slideDown();
});

$(".js_kenrnel_correct_position-check").click(function (e) {
    $(".js_kenrnel_correct_position-check").hide();

    var blank_cells = [...inputs].filter((cell) => cell.value !== "");
    if (blank_cells.length === 0) {
        $(".jsEmptyCells").slideDown();
    }

    if (correct_answer == user_answer[15]) {
        $(".activity.task-7").slideDown();
    } else if (user_answer[15] !== "") {
        $(".jsTask6IncorrectCalculations").slideDown();
    } else {
        user_answer.forEach((value) => {
            if (value == correct_answer) {
                $(".jsTask6IncorrectBox").slideDown();

                // return console.log("wrong place");
            } else if (value !== "") {
                $(".jsTask6IncorrectCalculationsBox").slideDown();

                // return console.log("not quite right");
            }
        });
    }
    $("html, body").animate({ scrollTop: $(document).height() });
});
