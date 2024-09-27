const speed = 200; // The lower the slower

var car_counter = $("#Car");
var person_counter = $("#Person");
var helmet_counter = $("#Helmet");

const counters = [car_counter, person_counter, helmet_counter];

const ranges = [
    {
        id: 1,
        range: ["-0.5", "+0.7", "-0.2"],
        feedback:
            "Hmm the magnitude of error is still quite high, please try again.",
        prediction: ["50%", "30%", "20%"],
    },
    {
        id: 2,
        range: ["-0.3", "+0.4", "-0.1"],
        feedback:
            "You’re getting close! Watch the changes in the error of prediction carefully.",
        prediction: ["30%", "60%", "10%"],
    },
    {
        id: 3,
        range: ["-0.5", "+0.6", "-0.1"],
        feedback:
            "Hmm the magnitude of error is still quite high, please try again.",
        prediction: ["50%", "40%", "10%"],
    },
    {
        id: 4,
        range: ["-0.25", "+0.3", "-0.05"],
        feedback:
            "Hmm the magnitude of error is still quite high, please try again.",
        prediction: ["25%", "70%", "5%"],
    },
    {
        id: 5,
        range: ["-0.2", "+0.4", "-0.2"],
        feedback:
            "You’re getting close! Watch the changes in the error of prediction carefully.”",
        prediction: ["20%", "60%", "20%"],
    },
];

var Timer = function (callback, delay) {
    var timerId,
        start,
        remaining = delay;

    this.pause = function () {
        window.clearTimeout(timerId);
        // remaining -= Date.now() - start;
    };

    this.resume = function () {
        start = Date.now();
        window.clearTimeout(timerId);
        timerId = window.setTimeout(callback, remaining);
    };

    this.resume();
};

var range_idx = 0;
var prev_idx = range_idx;
var selected = "increment";

function reRun() {
    // console.log(range_idx);
    if (range_idx === ranges.length) {
        // selected = "decrement";
        range_idx = 0;
    }
    if (range_idx === 0) {
        selected = "increment";
    }
    // if (selected === "decrement") {
    //     prev_idx = range_idx;
    //     range_idx -= 1;
    // }
    updateCount(car_counter, 0);
    updateCount(person_counter, 1);
    updateCount(helmet_counter, 2);

    $("#motorcycle-helmet-percentage").text(ranges[range_idx].prediction[0]);
    $("#motocross-helmet-percentage").text(ranges[range_idx].prediction[1]);
    $("#car-percentage").text(ranges[range_idx].prediction[2]);
    if (selected === "increment") {
        prev_idx = range_idx;
        range_idx += 1;
    }
}

const updateCount = (counter, idx) => {
    const counter_id = counter.attr("id");

    if (+ranges[range_idx].range[idx] > 0) {
        $(`.js${counter_id} .positive`).fadeIn();
        $(`.js${counter_id} .negative`).hide();
    } else {
        $(`.js${counter_id} .positive`).hide();
        $(`.js${counter_id} .negative`).fadeIn();
    }
    counter.text(ranges[range_idx].range[idx]);
};

var timer = new Timer(function () {
    reRun();
    timer.resume();
}, 2000);

$(".Js_training-pause").click((e) => {
    $(".Js_training-pause").hide();
    timer.pause();
    return isTrained();
});

$(".jsResetTimer").click(() => {
    $(".jsTrainingFail1").hide();
    $(".jsTrainingFail2").hide();
    $(".js-holder-instruction-first").slideDown();
    $(".Js_training-pause").fadeIn();

    timer.resume();
});

$(".jsTask13Pass").click(() => {
    $(".group-1").hide();
    $(".group-2").slideDown();
});

function isTrained() {
    $(".js-holder-instruction-first").hide();

    // $("#motorcycle-helmet-percentage").text(ranges[range_idx].prediction[0]);
    // $("#motocross-helmet-percentage").text(ranges[range_idx].prediction[1]);
    // $("#car-percentage").text(ranges[range_idx].prediction[2]);

    // console.log(range_idx);

    if (range_idx === 4) {
        return $(".jsTrainingSuccess").slideDown();
    } else if (range_idx === 0 || range_idx === 2) {
        return $(".jsTrainingFail1").slideDown();
    } else {
        return $(".jsTrainingFail2").slideDown();
    }
}
