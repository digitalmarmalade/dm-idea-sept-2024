var sharpen_filter = [0, -1, 0, -1, 5, -1, 0, -1, 0];
var sobel_filter = [-1, -2, -1, 0, 0, 0, 0, 2, 1];
var brighten_filter = [0, 0, 0, 0, 1, 0, 0, 0, 0];
var emboss_filter = [-2, -1, 0, -1, 1, 1, 0, 0, 2];
// var blur_filter = [
//     0.0625, 0.125, 0.0625, 0.125, 0.25, 0.125, 0.0625, 0.125, 0.0625,
// ];

const correct_filters = ["sharpen", "brighten"];

var user_selected_filters = [];
function user_selected_filters_init() {
    user_selected_filters = [];
}
user_selected_filters_init();

function user_state_save() {
    user_selected_filters.setItem(
        "user_selected_filters",
        user_selected_filters
    );
}

var options = ["Sharpen", "Emboss", "Brighten", "Sobel"];

options_element = [
    "<option value='' disabled selected hidden>Select filter</option>",
];
options_element.push(
    options.map((option, idx) => {
        return `<option value=${idx}> ${option}</option>`;
    })
);

var select = `<select id="task-7-select" disabled>
${options_element}
 </select>`;

$(".JS_multiple-filter-selector .input").append(select);

var height = 3;
var width = 3;

var selected_kernel;
$("#task-7-select").change(select_kernel);

function update_kernel_values() {
    selected_kernel.forEach((value, idx) => {
        var kernel_cell = $(
            `.JS_multiple-filter-selector  .input  .kernel  .flex--row  #cell-${idx}`
        );

        var output_cell = $(
            `.JS_multiple-filter-selector  .output  .output-grid .flex .flex .inner-container .cell-content #cell-${idx}`
        );

        output_cell.text(value);
        kernel_cell.text(value);
    });
}

function kernel_values_init() {
    for (var x = 0, id = 0; x < width; x++) {
        for (var y = 0; y < height; y++) {
            var kernel_cell = $(
                `.JS_multiple-filter-selector  .input  .kernel  .row  #cell-${id}`
            );

            var output_cell = $(
                `.JS_multiple-filter-selector  .output  .output-grid .flex .flex .inner-container .cell-content #cell-${id}`
            );

            output_cell.text("?");
            kernel_cell.text("?");
            id += 1;
        }
    }
}

var current_filter;

function select_kernel() {
    kernel_values_init();
    user_answered = "";
    // user_selected_filters_init();
    $(".js_multiple-filter-answer").val("?");

    if ($("#task-7-select option:selected").val() == 0) {
        if (user_selected_filters.includes("sharpen"))
            console.log("already selected");
        // return console.log("already selected");
        // user_selected_filters.push("sharpen");

        current_filter = "sharpen";

        selected_kernel = sharpen_filter;
    }
    if ($("#task-7-select option:selected").val() == 1) {
        if (user_selected_filters.includes("emboss"))
            console.log("already selected");
        // return console.log("already selected");
        // user_selected_filters.push("emboss");

        current_filter = "emboss";

        selected_kernel = emboss_filter;
    }
    if ($("#task-7-select option:selected").val() == 2) {
        if (user_selected_filters.includes("brighten"))
            console.log("already selected");
        // return console.log("already selected");
        // user_selected_filters.push("brighten");

        current_filter = "brighten";
        selected_kernel = brighten_filter;
    }
    if ($("#task-7-select option:selected").val() == 3) {
        if (user_selected_filters.includes("sobel"))
            console.log("already selected");
        // return console.log("already selected");
        // user_selected_filters.push("blur");

        current_filter = "sobel";

        selected_kernel = sobel_filter;
    }

    update_kernel_values();
}

var kernel = `<div class="kernel flex  flex--column">`;
for (var x = 0, id = 0; x < width; x++) {
    var row = "<div class='flex flex--row'>";
    for (var y = 0; y < height; y++) {
        var cell = `<div class = 'cell' id = "cell-${id}" >
             ?
        </div>`;
        row += cell;
        id += 1;
    }

    row += "</div>";
    kernel += row;
}

kernel += "</div>";
$(".JS_multiple-filter-selector .input").append(kernel);

var output_grid = $(".JS_multiple-filter-selector .output .output-grid");

image_values = [7, 7, 6, 7, 7, 7, 7, 7, 4];

var main_grid = `<div class='flex flex--column'>`;
for (var x = 0, id = 1; x < width; x++) {
    var row = "<div class='flex flex--row space-between flex--align-center'>";
    for (var y = 0; y < height; y++) {
        var innerContainer = `<div class="inner-container flex flex--row">`;

        var cell_content = `<div class='cell-content flex flex--row'>
                <div class='cell'>${image_values[id - 1]}</div>
                <p> x </p>
                <div class = 'cell' id = "cell-${id - 1}" > ? </div>
            </div>`;

        innerContainer += cell_content + "</div>";
        row += innerContainer;
        if (id % 3 !== 0) row += "<p>+</p>";
        id += 1;
    }

    row += "</div>";
    var row_2 =
        "<div class='flex flex--row space-between flex--align-center addition'><p>+</p><p>+</p><p>+</p></div>";
    main_grid += row;
    if ((x + 1) % 3 !== 0) main_grid += row_2;
}

main_grid += "</div>";
output_grid.append(main_grid);
output_grid.append(`<div><p>=</p></div>`);
output_grid.append(
    `<div  class="cell cell--focused-cell"><input type="number" class='focused-cell flex flex--center js_multiple-filter-answer' placeholder="?"></div>`
);

function isEmpty() {
    return $(".js_multiple-filter-answer").val();
}

// function isCorrectFilter() {
//     return correct_filters.includes(
//         user_selected_filters[user_selected_filters.length - 1]
//     );
// }
function isCorrectFilter() {
    return correct_filters.includes(current_filter);
}

function isAlreadySelected() {
    console.log(user_selected_filters.includes(current_filter));
    return user_selected_filters.includes(current_filter);
}

$(".jsReSelectFilter-btn").click(() => {
    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $(".jsAlreadySelectedFilter").hide();
});
$(".jsIncorrectFilter-btn").click(() => {
    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $("#emboss-dark-blur").hide();
    $("#sobel-dark-blur").hide();
    $("#sobel-blur").hide();
    $("#emboss-blur").hide();
    $("#sobel-dark").hide();
    $("#sharpen-dark-emboss").hide();

    $("#crime-scene__holder-2").fadeOut();

    $(".jsIncorrectFilter").hide();
});
$(".jsIncorrectCalculations-btn").click(() => {
    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $(".jsIncorrectCalculations").hide();
});
$(".jsFeedbackSuccessFirst-btn").click(() => {
    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $("#sharpen-dark").hide();
    $("#brighten-blur").hide();
    $(".jsFeedbackSuccessFirst").hide();
});
$(".jsUnSelectFilter-btn").click(() => {
    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $(".jsUnSelectFilter").hide();
});
$(".jsDoCalculations-btn").click(() => {
    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $(".jsDoCalculations").hide();
});

$(".jsFeedbackSuccessSecond-btn").click(() => {
    $(".jsFeedbackSuccessSecond").hide();
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    $(".task-8").slideDown();
    $("html, body").animate({ scrollTop: $(document).height() });
});

function getImage() {
    /**
     * base on user filter selection returns an image
     */
    if (current_filter === "sharpen" && user_selected_filters.length === 1) {
        /**
         * first round of filters
         * current selection blur
         */
        console.log("object-sharpen");
        return $("#sharpen-dark").slideDown();
    } else if (
        /**
         * first round of filters
         * current selection "sharpen"
         */
        current_filter === "emboss" &&
        user_selected_filters.length === 0
    ) {
        console.log("object-emboss");
        return $("#emboss-dark-blur").slideDown();
    } else if (
        /**
         * first round of filters
         * current selection "ripple"
         */
        current_filter === "brighten" &&
        user_selected_filters.length === 1
    ) {
        console.log("brighten", user_selected_filters);

        return $("#brighten-blur").slideDown();
    } else if (
        /**
         * first round of filters
         * current selection "emboss"
         */
        current_filter === "sobel" &&
        user_selected_filters.length === 0
    ) {
        console.log("sobel", user_selected_filters);

        return $("#sobel-dark-blur").slideDown();
    } else if (
        /**
         * second round of filters
         * Already selected "brighten"
         * current selection  "sobel"
         */
        current_filter === "sobel" &&
        user_selected_filters.includes("brighten") &&
        user_selected_filters.length === 1
    ) {
        console.log("sobel-brighten", user_selected_filters);

        return $("#sobel-blur").slideDown();
    } else if (
        /**
         * second round of filters
         * Already selected "brighten"
         * current selection  "emboss"
         */
        current_filter === "emboss" &&
        user_selected_filters.includes("brighten") &&
        user_selected_filters.length === 1
    ) {
        console.log("emboss-brighten", user_selected_filters);

        return $("#emboss-blur").slideDown();
    } else if (
        /**
         * second round of filters
         * Already selected "sharpen"
         * current selection  "sobel"
         */
        current_filter === "sobel" &&
        user_selected_filters.includes("sharpen") &&
        user_selected_filters.length === 2
    ) {
        console.log("sobel-sharpen", user_selected_filters);

        return $("#sobel-dark").slideDown();
    } else if (
        /**
         * second round of filters
         * Already selected "sharpen"
         * current selection  "emboss"
         */
        current_filter === "emboss" &&
        user_selected_filters.includes("sharpen") &&
        user_selected_filters.length === 1
    ) {
        console.log("emboss-dark", user_selected_filters);
        return $("#sharpen-dark-emboss").slideDown();
    } else if (
        /**
         * second round of filters
         * Already selected "brighten" or "sharpen"
         * current selection  "brighten" or "sharpen"
         */
        (current_filter === "sharpen" || current_filter === "brighten") &&
        (user_selected_filters.includes("sharpen") ||
            user_selected_filters.includes("brighten")) &&
        user_selected_filters.length === 2
    ) {
        console.log("sharpen-brighten");
        return $("#sharpen-brighten").slideDown();
    }
}

var user_answered = $(".js_multiple-filter-answer").val();

var input = document.querySelector(".js_multiple-filter-answer");
input.addEventListener("keyup", (e) => {
    user_answered = $(".js_multiple-filter-answer").val();
});
input.addEventListener("focus", (e) => {
    console.log("focused");
    e.target.value = "";
});

input.addEventListener("focusout", (e) => {
    e.target.value = user_answered;
});

$(".js_multiple-filter-selector-check").click((e) => {
    $("#task-7-select").attr("disabled", true);

    $(".js_multiple-filter-selector-check").attr("disabled", true);

    console.log("answ", user_answered);

    if (!selected_kernel) {
        $(".jsUnSelectFilter").slideDown();
        return $("html, body").animate({
            scrollTop: $(document).height(),
        });
        // return console.log("please select");
    }

    // var user_answered = $(".js_multiple-filter-answer").val();

    if (!user_answered || user_answered == "?") {
        $(".jsDoCalculations").slideDown();
        return $("html, body").animate({
            scrollTop: $(document).height(),
        });
    }

    var correct_answer = 0;

    selected_kernel.forEach((value, idx) => {
        correct_answer += image_values[idx] * value;
    });

    console.log(user_selected_filters);

    if (user_answered == correct_answer) {
        if (isCorrectFilter()) {
            // console.log(isA);
            if (isAlreadySelected()) {
                $(".jsAlreadySelectedFilter").slideDown();
                return $("html, body").animate({
                    scrollTop: $(document).height(),
                });
            }
            if (user_selected_filters.length == 1) {
                // localStorage.removeItem("user_selected_filters");
                user_selected_filters.push(current_filter);

                $("#crime-scene__holder-2").slideDown();

                getImage();

                $(".jsFeedbackSuccessSecond").slideDown();
                $("html, body").animate({
                    scrollTop: $(document).height(),
                });

                return console.log("activity passed");
            } else {
                user_selected_filters.push(current_filter);

                $("#crime-scene__holder-2").slideDown();

                getImage();

                $(".jsFeedbackSuccessFirst").slideDown();
                $("html, body").animate({
                    scrollTop: $(document).height(),
                });

                return console.log(
                    "well done! now determine the second filter",
                    user_selected_filters
                );
            }
        } else {
            $("#crime-scene__holder-2").slideDown();

            getImage();

            $(".jsIncorrectFilter").slideDown();
            $("html, body").animate({ scrollTop: $(document).height() });

            return console.log(
                "Your calculations are correct, but selected a wrong filter",
                user_selected_filters
            );
        }
    } else {
        user_selected_filters.splice(user_selected_filters.length - 1, 1);

        $(".jsIncorrectCalculations").slideDown();
        $("html, body").animate({ scrollTop: $(document).height() });

        return console.log("check your calculations", user_selected_filters);
    }
});
