$(function () {
    const selectDiv = $(".select-wrapper");
    const questionIdxTag = $("#question-idx");
    const prevQuestion = $("#previous-question");
    const nextQuestion = $(".jsNextQuestion");
    const tryAgain = $(".jsTryAgain");
    const continueBtn = $(".jsContinueBtn");

    var options = [
        "Sentiment Analysis",
        "Personality",
        "Memory",
        "Topic Switching",
        "Persistence",
        "Intelligent Understanding",
    ];

    const activityDiv = $(".step-2__activity--option-1");

    prevQuestion.toggleClass("hide");

    var questions = [
        {
            id: 1,
            heading: "Intelligent Understanding",
            question: `The ability to collect, understand and remember important information and user preferences in order to deliver an accurate response.`,
            answer: {
                heading: "Well done!",
                example: `An example of intelligent understanding in action is a chatbot like Siri on your phone knowing your relationships with your contacts. Once you’ve told Siri who your brother is, Siri will remember. You can say “Hey Siri, call my brother!” and Siri will know what to do.`,
            },
            errorMsg: `Sorry, that’s not quite right. Have another go. Think about what AI chatbots need to demonstrate in order to deliver more complete answers.`,
            answered: false,
        },
        {
            id: 2,
            heading: "Memory",
            question: `Allows an AI chatbot to recall certain details that it can use during a conversation, or store for the future.`,
            answer: {
                heading: "That’s right!",
                example: `Popular mobile assistants such as Siri use their memory to learn and recall certain information about the user, such as their favourite food. They can then use this information to provide suitable restaurant recommendations.`,
            },
            errorMsg: `I’m sorry, that’s not quite right. Try again. Think about what an AI chatbot needs to have so that it doesn’t seem to forget important details.`,
            answered: false,
        },
        {
            id: 3,
            heading: "Sentiment Analysis",
            question: `Allows an AI chatbot to identify how a user may be feeling.`,
            answer: {
                heading: "Great work!",
                example: `Sentiment analysis can help customer service departments in businesses understand how a customer may be feeling, for example, if they are frustrated because they have a complaint.`,
            },
            errorMsg: `Oops, that’s not it. Please try again. Think about what the chatbot needs in order to understand the emotional tone of the user.`,
            answered: false,
        },
        {
            id: 4,
            heading: "Personality",
            question: `This makes a huge difference in helping users to engage with an AI chatbot and trust in them as if they were a human assistant.`,
            answer: {
                heading: "That’s correct!",
                example: `Chatbots can be given personalities through the tone of voice and the use of emojis or avatars with expressions.`,
            },
            errorMsg: `Sorry, please try again. What could make an AI chatbot come across as more engaging and human-like for a customer?`,
            answered: false,
        },
        {
            id: 5,
            heading: "Persistence",
            question: `This allows for users to have a seamless conversation with a chatbot, where they can rejoin and resume the chat across multiple devices.`,
            answer: {
                heading: "Well done!",
                example: `Having a chatbot with persistence means that users can move between devices such as laptops and mobiles and the chatbot will continue the conversation seamlessly.`,
            },
            errorMsg: `Sorry, that’s not quite right. Please try again. Think about what an AI chatbot would need to be able to continue conversations across devices.`,
            answered: false,
        },
        {
            id: 6,
            heading: "Topic Switching",
            question: `Allows the user to change subjects in the middle of the conversation without confusing the chatbot.`,
            answer: {
                heading: "Nicely done!",
                example: `Being able to smoothly switch between topics is essential for an AI chatbot to have a good understanding of what the user is asking for.`,
            },
            errorMsg: `Oops, please have another go. Think about what an AI chatbot needs to be able to do to keep up with different discussion topics.`,
            answered: false,
        },
    ];

    options_element = [
        "<option value='' disabled selected hidden>Select function name</option>",
    ];
    options_element.push(
        options.map((option, idx) => {
            return `<option value="option ${idx + 1}"> ${option}</option>`;
        })
    );

    var select = `<select id="step-2__activity--option-1">${options_element}</select>`;


    let questionsId = 0;

    let labelTag = `<label id="question-${questionsId}" for="step-2__activity--option-1">
        ${questions[questionsId].question}</label>`;

    //activityDiv.append(labelTag);
    $('.label-wrapper').append(labelTag);
    selectDiv.append(select);

    questionIdxTag.text(`${questionsId + 1}/${questions.length}`);

    $("#step-2__activity--option-1").change((e) => {
        $(`.step-2__activity--activity`).toggleClass("hide");

        $(".success--box h4").text(`${questions[questionsId].heading}`);
        $(".success--box p").text(`${questions[questionsId].question}`);
        $(".success--box-example h5").text(
            `${questions[questionsId].answer.heading}`
        );
        $(".success--box-example p").text(
            `${questions[questionsId].answer.example}`
        );

        if (
            questionsId === 0 &&
            $("#step-2__activity--option-1").val() ===
                `option ${questionsId + 6}`
        ) {
            $(`.success--box-container`).toggleClass("hide");
            questions[questionsId].answered = true;

            $("html, body").animate(
                {
                    scrollTop:
                        $(".jsNextQuestion").offset().top -
                        $(".jsNextQuestion").height(),
                },
                800
            );
        } else if (
            questionsId === 1 &&
            $("#step-2__activity--option-1").val() ===
                `option ${questionsId + 2}`
        ) {
            $(`.success--box-container`).toggleClass("hide");
            questions[questionsId].answered = true;

            $("html, body").animate(
                {
                    scrollTop:
                        $(".jsNextQuestion").offset().top -
                        $(".jsNextQuestion").height(),
                },
                800
            );
        } else if (
            questionsId === 2 &&
            $("#step-2__activity--option-1").val() ===
                `option ${questionsId - 1}`
        ) {
            $(`.success--box-container`).toggleClass("hide");
            questions[questionsId].answered = true;

            $("html, body").animate(
                {
                    scrollTop:
                        $(".jsNextQuestion").offset().top -
                        $(".jsNextQuestion").height(),
                },
                800
            );
        } else if (
            questionsId === 3 &&
            $("#step-2__activity--option-1").val() ===
                `option ${questionsId - 1}`
        ) {
            $(`.success--box-container`).toggleClass("hide");
            questions[questionsId].answered = true;

            $("html, body").animate(
                {
                    scrollTop:
                        $(".jsNextQuestion").offset().top -
                        $(".jsNextQuestion").height(),
                },
                800
            );
        } else if (
            questionsId === 4 &&
            $("#step-2__activity--option-1").val() ===
                `option ${questionsId + 1}`
        ) {
            $(`.success--box-container`).toggleClass("hide");
            questions[questionsId].answered = true;

            $("html, body").animate(
                {
                    scrollTop:
                        $(".jsNextQuestion").offset().top -
                        $(".jsNextQuestion").height(),
                },
                800
            );
        } else if (
            questionsId === 5 &&
            $("#step-2__activity--option-1").val() ===
                `option ${questionsId - 1}`
        ) {
            $(`.success--box-container`).toggleClass("hide");
            questions[questionsId].answered = true;

            continueBtn.removeClass("hide");
            $("html, body").animate(
                {
                    scrollTop: continueBtn.offset().top - continueBtn.height(),
                },
                800
            );
        } else {
            $(`.jsFail`).toggleClass("hide");

            $(".jsFailMessage").text(questions[questionsId].errorMsg);
            $(".jsTryAgain").text("Try Again");
        }
    });

    nextQuestion.click((e) => {
        // console.log(questionsId, questions.length);

        if (
            questions[questionsId].answered &&
            !questions[questionsId + 1].answered
        ) {
            questionsId += 1;

            $(`.step-2__activity--activity`).toggleClass("hide");
            $(`.success--box-container`).toggleClass("hide");

            $(`#question-${questionsId - 1}`).remove();
            $("#step-2__activity--option-1").prop("selectedIndex", 0);
            questionIdxTag.text(`${questionsId + 1}/${questions.length}`);

            $(".jsQuestion").text(`${questions[questionsId].question}`);
            prevQuestion.removeClass("hide");
        } else if (questions[questionsId].answered) {
            questionsId += 1;

            $(".success--box h4").text(`${questions[questionsId].heading}`);
            $(".success--box p").text(`${questions[questionsId].question}`);
            $(".success--box-example h5").text(
                `${questions[questionsId].answer.heading}`
            );
            $(".success--box-example p").text(
                `${questions[questionsId].answer.example}`
            );
            questionIdxTag.text(`${questionsId + 1}/${questions.length}`);

            prevQuestion.removeClass("hide");
            continueBtn.removeClass("hide");
        } else {
            $(`.step-2__activity--activity`).toggleClass("hide");
            $(`.jsFail`).toggleClass("hide");

            $(".jsFailMessage").text("Please select a feature Name.");
            $(".jsTryAgain").text("Select a feature Name");
        }

        if (questionsId === questions.length - 1) nextQuestion.addClass("hide");
    });

    prevQuestion.click(() => {
        questionsId -= 1;
        $(`.step-2__activity--activity`).addClass("hide");
        $(`.success--box-container`).removeClass("hide");
        continueBtn.addClass("hide");

        $(".success--box h4").text(`${questions[questionsId].heading}`);
        $(".success--box p").text(`${questions[questionsId].question}`);
        $(".success--box-example h5").text(
            `${questions[questionsId].answer.heading}`
        );
        $(".success--box-example p").text(
            `${questions[questionsId].answer.example}`
        );
        questionIdxTag.text(`${questionsId + 1}/${questions.length}`);

        questionsId === 0 ? prevQuestion.addClass("hide") : null;
    });

    tryAgain.click(() => {
        $("#step-2__activity--option-1").prop("selectedIndex", 0);

        $(`.step-2__activity--activity`).toggleClass("hide");
        $(`.jsFail`).toggleClass("hide");
    });
});
