$(function () {
    var width = 6;
    var height = 6;

    var input = $(".Js_slide-kernel-across .inputs .input");
    var output = $(".Js_slide-kernel-across .output");

    var kernel_values = [1, 0, 1, 0, 1, 0, 1, 0, 1];
    var input_values = [
        7, 7, 6, 5, 6, 7, 7, 7, 6, 2, 4, 6, 5, 7, 6, 5, 6, 7, 7, 7, 6, 5, 6, 7,
        7, 7, 6, 5, 6, 7, 7, 7, 6, 5, 6, 7,
    ];
    var output_values = [
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

    for (var x = 0, id = 0; x < width; x++) {
        var row = "<div class='flex flex--row'>";
        for (var y = 0; y < height; y++) {
            var cell = `<div class = 'cell' id = 'input-cell-${id}'>`;
            var value = input_values[id];
            cell += value;
            row = row + cell + "</div>";
            id += 1;
        }
        row += "</div>";
        input.append(row);
    }

    for (var x = 0, id = 0; x < width; x++) {
        var row = "<div class='flex flex--row'>";
        for (var y = 0; y < height; y++) {
            var cell = `<div class = 'cell' id = 'output-cell-${id}'>`;
            var value = output_values[id];
            cell += value;
            row = row + cell + "</div>";
            id += 1;
        }
        row += "</div>";
        output.append(row);
    }

    var kernel = $(".Js_slide-kernel-across .kernel");

    for (var x = 0, id = 0; x < width / 2; x++) {
        var row = "<div class='flex--row'>";
        for (var y = 0; y < height / 2; y++) {
            var cell = `<div class = 'cell' id = 'kernel-cell-${id}' >${kernel_values[id]}</div>`;
            row += cell;
            id += 1;
        }

        row += "</div>";
        kernel.append(row);
    }

    var filter_in_action = $(".Js_slide-kernel-across .filter-in-action");

    var initial_input_values = [
        input_values[0],
        input_values[0],
        input_values[1],
        input_values[0],
        input_values[0],
        input_values[1],
        input_values[6],
        input_values[6],
        input_values[7],
    ];

    var initial_output = 0;

    var main_grid = `<div class='flex flex--column'>`;
    for (var x = 0, id = 1; x < width / 2; x++) {
        var row =
            "<div class='flex flex--row space-between flex--align-center'>";
        for (var y = 0; y < height / 2; y++) {
            var innerContainer = `<div class="inner-container flex flex--row">`;

            var innerHtml = `
        <div class = ' cell cell--kernel-output' id = "cell-${
            id - 1
        }" ><div class="flex flex--center kernel-output">${
                kernel_values[id - 1]
            }</div></div>
        <p>x</p>
        <div class = ' cell cell--reference-output'><div class="reference-output flex flex--center ">${
            initial_input_values[id - 1]
        }</div></div>
        `;
            initial_output +=
                kernel_values[id - 1] * initial_input_values[id - 1];

            innerContainer += innerHtml + "</div>";
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

    filter_in_action.append(main_grid);
    filter_in_action.append(`<div><p>=</p></div>`);
    filter_in_action.append(
        `<div id="kernel-slider-output" class="cell cell--focused-cell"><div class="focused-cell flex flex--center">${initial_output}</div></div>`
    );

    output_values.splice(0, 1, initial_output);

    $("#output-cell-0").addClass("focused-cell");

    output_grid_update();

    function filter_in_action_update(x, y) {
        var cellsValue = getCells(x, y);

        if (cellsValue) {
            var filter_output = 0;

            $(
                ".filter-in-action .flex .flex .inner-container .cell .reference-output"
            ).each((index, cell) => {
                cell.textContent = cellsValue[index];
                filter_output += kernel_values[index] * cellsValue[index];
            });

            $("#kernel-slider-output .focused-cell")[0].textContent =
                filter_output;

            var elements = [...document.elementsFromPoint(x, y)];

            var output_cell_ref_id = +elements
                .filter((element) => element.id.indexOf("input") >= 0)[0]
                ?.id.substring(11);

            output_values.splice(output_cell_ref_id, 1, filter_output);

            var prevFocusedCell = $(
                `.Js_slide-kernel-across .flex .output .flex--row .focused-cell`
            );

            prevFocusedCell[0]
                ? prevFocusedCell[0].classList.remove("focused-cell")
                : null;

            var currentFocusedCell = $(`#output-cell-${output_cell_ref_id}`);

            currentFocusedCell[0].classList.add("focused-cell");
        }
    }

    var inputElement = document.querySelector(".input");

    var inputElementPosition = inputElement.getBoundingClientRect();

    var cellElement = document.querySelector(".cell").getBoundingClientRect();

    function isInsideBoundary(element, parent) {
        return (
            element.clientX > parent.left &&
            element.clientX < parent.right &&
            element.clientY > parent.top &&
            element.clientY < parent.bottom
        );
    }

    function atTopEdge(e, parent, size) {
        var top = parent.top + size / 2;
        return e.clientY > parent.top && e.clientY < top;
    }
    function atBottomEdge(e, parent, size) {
        var bottom = parent.bottom - size / 2;
        return e.clientY < parent.bottom && e.clientY > bottom;
    }
    function atLeftEdge(e, parent, size) {
        var left = parent.left + size / 2;
        return e.clientX > parent.left && e.clientX < left;
    }
    function atRightEdge(e, parent, size) {
        var right = parent.right - size / 2;
        return e.clientX < parent.right && e.clientX > right;
    }

    function getCells(x, y) {
        var elementsAtPoint = [...document.elementsFromPoint(x, y)];

        var focused_cell = elementsAtPoint.filter(
            (item) => item.id.indexOf("input") >= 0
        )[0];

        // top row
        const top_row_idx = [
            "input-cell-1",
            "input-cell-2",
            "input-cell-3",
            "input-cell-4",
        ];

        // bottom row
        const bottom_row_idx = [
            "input-cell-31",
            "input-cell-32",
            "input-cell-33",
            "input-cell-34",
        ];

        // left column
        const left_col_idx = [
            "input-cell-6",
            "input-cell-12",
            "input-cell-18",
            "input-cell-24",
        ];

        // right column
        const right_col_idx = [
            "input-cell-11",
            "input-cell-17",
            "input-cell-23",
            "input-cell-29",
        ];

        const top_left_idx = ["input-cell-0"];
        const top_right_idx = ["input-cell-5"];
        const bottom_left_idx = ["input-cell-30"];
        const bottom_right_idx = ["input-cell-35"];

        if (focused_cell) {
            var focused_cell_index = +focused_cell.id.substring(11);
            if (top_row_idx.indexOf(focused_cell.id) > -1) {
                var fourth_cell = $(`#input-cell-${focused_cell_index - 1}`)[0];
                var sixth_cell = $(`#input-cell-${focused_cell_index + 1}`)[0];
                var seventh_cell =
                    focused_cell_index % 6 === 0
                        ? 0
                        : $(`#input-cell-${focused_cell_index + 5}`)[0];
                var eigth_cell = $(`#input-cell-${focused_cell_index + 6}`)[0];
                var ninth_cell = $(`#input-cell-${focused_cell_index + 7}`)[0];
                var first_cell = fourth_cell;
                var second_cell = focused_cell;
                var third_cell = sixth_cell;
            } else if (bottom_row_idx.indexOf(focused_cell.id) > -1) {
                var first_cell = $(`#input-cell-${focused_cell_index - 7}`)[0];
                var second_cell = $(`#input-cell-${focused_cell_index - 6}`)[0];
                var third_cell = $(`#input-cell-${focused_cell_index - 5}`)[0];
                var fourth_cell = $(`#input-cell-${focused_cell_index - 1}`)[0];
                var sixth_cell = $(`#input-cell-${focused_cell_index + 1}`)[0];
                var seventh_cell = fourth_cell;
                var eigth_cell = focused_cell;
                var ninth_cell = sixth_cell;
            } else if (left_col_idx.indexOf(focused_cell.id) > -1) {
                var second_cell = $(`#input-cell-${focused_cell_index - 6}`)[0];
                var first_cell = second_cell;
                var third_cell = $(`#input-cell-${focused_cell_index - 5}`)[0];
                var fourth_cell = focused_cell;
                var sixth_cell = $(`#input-cell-${focused_cell_index + 1}`)[0];
                var eigth_cell = $(`#input-cell-${focused_cell_index + 6}`)[0];
                var seventh_cell = eigth_cell;
                var ninth_cell = $(`#input-cell-${focused_cell_index + 7}`)[0];
            } else if (right_col_idx.indexOf(focused_cell.id) > -1) {
                var first_cell = $(`#input-cell-${focused_cell_index - 7}`)[0];
                var second_cell = $(`#input-cell-${focused_cell_index - 6}`)[0];
                var third_cell = second_cell;
                var fourth_cell = $(`#input-cell-${focused_cell_index - 1}`)[0];
                var sixth_cell = focused_cell;
                var seventh_cell =
                    focused_cell_index % 6 === 0
                        ? 0
                        : $(`#input-cell-${focused_cell_index + 5}`)[0];
                var eigth_cell = $(`#input-cell-${focused_cell_index + 6}`)[0];
                var ninth_cell = eigth_cell;
            } else if (top_left_idx.indexOf(focused_cell.id) > -1) {
                var sixth_cell = $(`#input-cell-${focused_cell_index + 1}`)[0];
                var eigth_cell = $(`#input-cell-${focused_cell_index + 6}`)[0];
                var ninth_cell = $(`#input-cell-${focused_cell_index + 7}`)[0];
                var first_cell = focused_cell;
                var second_cell = focused_cell;
                var third_cell = sixth_cell;
                var fourth_cell = focused_cell;
                var seventh_cell = eigth_cell;
            } else if (bottom_left_idx.indexOf(focused_cell.id) > -1) {
                var second_cell = $(`#input-cell-${focused_cell_index - 6}`)[0];
                var third_cell = $(`#input-cell-${focused_cell_index - 5}`)[0];
                var sixth_cell = $(`#input-cell-${focused_cell_index + 1}`)[0];
                var first_cell = second_cell;
                var fourth_cell = focused_cell;
                var seventh_cell = focused_cell;
                var eigth_cell = focused_cell;
                var ninth_cell = sixth_cell;
            } else if (top_right_idx.indexOf(focused_cell.id) > -1) {
                var fourth_cell = $(`#input-cell-${focused_cell_index - 1}`)[0];
                var seventh_cell =
                    focused_cell_index % 6 === 0
                        ? 0
                        : $(`#input-cell-${focused_cell_index + 5}`)[0];
                var eigth_cell = $(`#input-cell-${focused_cell_index + 6}`)[0];
                var first_cell = fourth_cell;
                var second_cell = focused_cell;
                var third_cell = focused_cell;
                var sixth_cell = focused_cell;
                var ninth_cell = eigth_cell;
            } else if (bottom_right_idx.indexOf(focused_cell.id) > -1) {
                var first_cell = $(`#input-cell-${focused_cell_index - 7}`)[0];
                var second_cell = $(`#input-cell-${focused_cell_index - 6}`)[0];
                var fourth_cell = $(`#input-cell-${focused_cell_index - 1}`)[0];
                var third_cell = second_cell;
                var sixth_cell = focused_cell;
                var seventh_cell = fourth_cell;
                var eigth_cell = focused_cell;
                var ninth_cell = focused_cell;
            } else {
                var first_cell = $(`#input-cell-${focused_cell_index - 7}`)[0];
                var second_cell = $(`#input-cell-${focused_cell_index - 6}`)[0];
                var third_cell = $(`#input-cell-${focused_cell_index - 5}`)[0];
                var fourth_cell = $(`#input-cell-${focused_cell_index - 1}`)[0];
                var sixth_cell = $(`#input-cell-${focused_cell_index + 1}`)[0];
                var seventh_cell =
                    focused_cell_index % 6 === 0
                        ? 0
                        : $(`#input-cell-${focused_cell_index + 5}`)[0];
                var eigth_cell = $(`#input-cell-${focused_cell_index + 6}`)[0];
                var ninth_cell = $(`#input-cell-${focused_cell_index + 7}`)[0];
            }

            return {
                0: first_cell ? first_cell.textContent : 0,
                1: second_cell ? second_cell.textContent : 0,
                2: third_cell ? third_cell.textContent : 0,
                3: fourth_cell ? fourth_cell.textContent : 0,
                4: focused_cell ? focused_cell.textContent : 0,
                5: sixth_cell ? sixth_cell.textContent : 0,
                6: seventh_cell ? seventh_cell.textContent : 0,
                7: eigth_cell ? eigth_cell.textContent : 0,
                8: ninth_cell ? ninth_cell.textContent : 0,
            };
        }
    }

    function getParentPosition(element) {
        var xPosition = 0;
        var yPosition = 0;

        while (element) {
            xPosition +=
                element.offsetLeft - element.scrollLeft + element.clientLeft;
            yPosition +=
                element.offsetTop - element.scrollTop + element.clientTop;
            element = element.offsetParent;
        }
        return {
            x: xPosition,
            y: yPosition,
        };
    }

    function getPosition(e, parentElement, element) {
        var parentPosition = getParentPosition(parentElement);
        var xPosition = e.clientX - parentPosition.x - element.width() / 2;
        var yPosition = e.clientY - parentPosition.y - element.height() / 2;

        return {
            x: xPosition,
            y: yPosition,
        };
    }

    function output_grid_update() {
        $(".Js_slide-kernel-across .flex .output .flex--row .cell").each(
            (index, item) => {
                item.textContent = output_values[index];
            }
        );
    }

    $(".Js_slide-kernel-across .flex .inputs .kernel").draggable({
        containment: "parent",

        cursorAt: { top: kernel.height() / 2, left: kernel.width() / 2 },

        drag: function (e, ui) {
            filter_in_action_update(e.clientX, e.clientY);

            output_grid_update();
        },
    });
    let prevX;

    function isInViewport(element) {
        const rects = element.getBoundingClientRect();
        return (
            rects.top > 0 &&
            rects.left > 0 &&
            rects.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rects.right <=
                (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    $(".jsSlideKernelReset").click(() => {
        $(".jsSlideKernelFeedbackFail").slideUp();
        $(".js_slide-kernel-across-check").fadeIn();
    });

    $(".Js_slide-kernel-across-check").click(() => {
        var empty_cell = output_values.filter((value) => value === "");
        if (empty_cell.length > 0) {
            {
                $(".jsSlideKernelFeedbackFail").slideDown();

                $("html, body").animate({ scrollTop: $(document).height() });
                $(".js_slide-kernel-across-check").fadeOut();
                // return console.log("slide kernel across all the pixels");
            }
        } else {
            $(".activity.task-5").slideDown();

            $("html, body").animate({ scrollTop: $(document).height() });
            $(".Js_slide-kernel-across-check").fadeOut();
            // isInViewport(filter_layer[0])
            //     ? (prevX = filter_layer.offset().left)
            //     : null;

            return console.log("continue");
        }
    });
});
