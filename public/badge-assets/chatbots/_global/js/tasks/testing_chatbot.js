$(function () {
  const train_user_input = $("#train-chatbot #user-input");
  const train_send_message = $("#train-chatbot #send");

  let keyWordsUsed = [];

  // default values
  const messageTypingTime = 1000;
  const nextMessageTime = messageTypingTime + 100;
  const nextTaskTime = messageTypingTime + 100;

  // const messageTypingTime = 20;
  // const nextMessageTime = messageTypingTime + 50;
  // const nextTaskTime = messageTypingTime + 50;

  let userName, acronym, initials;

  let userMessage;

  const chatBotIcon = `
    <span class='chatbot--user-icon'>
            <img
                src="/badge-assets/chatbots/_global/svg/icon--chatbot-rule-based.svg"
                alt="Chatbot icon"
                />
    </span>
    `;

  const msgTyping = $(`
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                    ${chatBotIcon}
                    <p><span class="chatbot__loader--speech"></span></p>
                </div>`);

  let trainChattrainBotId = 0;
  let trainBotId = 0;

  let trainChat = [];

  const addToChat = (message) => {
    trainChat.push({
      id: trainChattrainBotId,
      message: message,
    });

    train_user_input.val("");

    $("#train-chatbot .chatbot__middle").append(`${message}`);

    scrollToBottom();

    trainChattrainBotId += 1;
  };

  const sendTrainBotMessage = () => {
    let botMessages = [
      {
        id: 1,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Hello, would you like to know anything about being eco-friendly? Ask me anything to do with waste, food, energy, water, travel and fashion.</p>
                    </div>`,
      },
    ];

    $("#train-chatbot .chatbot__middle").append(msgTyping);
    scrollToBottom();

    setTimeout(() => {
      msgTyping.remove();
      addToChat(botMessages[trainBotId].message);
      trainBotId += 1;
    }, messageTypingTime);
  };

  const scrollToBottom = () => {
    $("#train-chatbot .chatbot__middle")[0].scrollTop = $("#train-chatbot .chatbot__middle")[0].scrollHeight;
  };

  const firstMessage = (keyword) => {
    let message = `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! you used the keyword <strong>${keyword}</strong> in your testing question.
                        You must now continue on testing the remaining keywords.</p>
                    </div>`;

    $("#train-chatbot .chatbot__middle").append(msgTyping);
    scrollToBottom();

    keyWordsUsed.push(keyword);

    setTimeout(() => {
      msgTyping.remove();
      addToChat(message);
      trainBotId += 1;
    }, messageTypingTime);
  };

  const remainingMessage = (keyword) => {
    let message = `
        <div class="chatbot__middle--entry chatbot__middle--entry-left">
            ${chatBotIcon}
            <p>Brilliant! you used the keyword <strong>${keyword}</strong> in your testing question.</p>
        </div>`;

    $("#train-chatbot .chatbot__middle").append(msgTyping);
    scrollToBottom();

    keyWordsUsed.push(keyword);

    setTimeout(() => {
      msgTyping.remove();
      addToChat(message);
      trainBotId += 1;
    }, messageTypingTime);
  };

  const errorMessage = () => {
    let message = `
        <div class="chatbot__middle--entry chatbot__middle--entry-left">
            ${chatBotIcon}
            <p>Sorry, I don't understand. I am an eco-chatbot. You can ask me anything to do with
            <strong>energy</strong>,
            <strong>food</strong>,
            <strong>waste</strong>,
            <strong>water</strong>,
            <strong>travel</strong>, or
            <strong>fashion</strong></p>
        </div>`;

    $("#train-chatbot .chatbot__middle").append(msgTyping);
    scrollToBottom();

    setTimeout(() => {
      msgTyping.remove();
      addToChat(message);
      // trainBotId += 1;
      trainChattrainBotId -= 1;
      train_user_input.prop("disabled", false);
    }, messageTypingTime);
  };

  const alreadySend = (keyword) => {
    let message = `
        <div class="chatbot__middle--entry chatbot__middle--entry-left">
            ${chatBotIcon}
            <p>Oops! You have already asked me a question including this ${keyword}</p>
        </div>`;

    $("#train-chatbot .chatbot__middle").append(msgTyping);
    scrollToBottom();

    setTimeout(() => {
      msgTyping.remove();
      addToChat(message);
      trainBotId += 1;
    }, messageTypingTime);
  };

  const wasteAnswer = () => {
    const replies = [
      {
        id: 1,
        message: `Use glass jars.`,
      },
      {
        id: 2,
        message: `Bring your own cup.`,
      },
      {
        id: 3,
        message: `Use metal straws.`,
      },
      {
        id: 4,
        message: `Use a bag for life.`,
      },
      {
        id: 5,
        message: `Use alternative energy sources.`,
      },
      {
        id: 6,
        message: `Grow your own greens.`,
      },
    ];

    var idx = 0;

    const sendMessage = () => {
      $("#train-chatbot .chatbot__middle").append(msgTyping);
      scrollToBottom();

      let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-left">
                      ${chatBotIcon}
                      <p>${replies[idx].message}</p>
                  </div>`;

      setTimeout(() => {
        msgTyping.remove();
        addToChat(message);
        trainBotId += 1;
      }, messageTypingTime);
      idx += 1;
    };

    sendMessage();

    var timer = setInterval(() => {
      if (idx < replies.length) {
        sendMessage();
      } else {
        train_user_input.prop("disabled", false);
        clearInterval(timer);
      }
    }, messageTypingTime + nextMessageTime);
  };

  const foodAnswer = () => {
    const replies = [
      {
        id: 1,
        message: `Vegan / plant based diet.`,
      },
      {
        id: 2,
        message: `Buy organic.`,
      },
      {
        id: 3,
        message: `Support local shops.`,
      },
      {
        id: 4,
        message: `Meat free diet.`,
      },
      {
        id: 5,
        message: `Reduce food waste.`,
      },
      {
        id: 6,
        message: `Eat unprocessed / unpackaged food where possible.`,
      },
    ];

    var idx = 0;

    const sendMessage = () => {
      $("#train-chatbot .chatbot__middle").append(msgTyping);
      scrollToBottom();

      let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-left">
                      ${chatBotIcon}
                      <p>${replies[idx].message}</p>
                  </div>`;

      setTimeout(() => {
        msgTyping.remove();
        addToChat(message);
        trainBotId += 1;
      }, messageTypingTime);
      idx += 1;
    };

    sendMessage();

    var timer = setInterval(() => {
      if (idx < replies.length) {
        sendMessage();
      } else {
        train_user_input.prop("disabled", false);
        clearInterval(timer);
      }
    }, messageTypingTime + nextMessageTime);
  };

  const energyAnswer = () => {
    const replies = [
      {
        id: 1,
        message: `Set goal to reduce consumption.`,
      },
      {
        id: 2,
        message: `Purchase energy A rated products.`,
      },
      {
        id: 3,
        message: `Turn technology off at the plug overnight.`,
      },
      {
        id: 4,
        message: `Dry clothes on the clothesline, not the dryer.`,
      },
      {
        id: 5,
        message: `Insulate your home.`,
      },
      {
        id: 6,
        message: `Use LED, Self-turn off & Motion activated lighting.`,
      },
    ];

    var idx = 0;

    const sendMessage = () => {
      $("#train-chatbot .chatbot__middle").append(msgTyping);
      scrollToBottom();

      let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-left">
                      ${chatBotIcon}
                      <p>${replies[idx].message}</p>
                  </div>`;

      setTimeout(() => {
        msgTyping.remove();
        addToChat(message);
        trainBotId += 1;
      }, messageTypingTime);
      idx += 1;
    };

    sendMessage();

    var timer = setInterval(() => {
      if (idx < replies.length) {
        sendMessage();
      } else {
        train_user_input.prop("disabled", false);
        clearInterval(timer);
      }
    }, messageTypingTime + nextMessageTime);
  };

  const waterAnswer = () => {
    const replies = [
      {
        id: 1,
        message: `Shower instead of bathing.`,
      },
      {
        id: 2,
        message: `Drink from tap water instead of bottled water.`,
      },
      {
        id: 3,
        message: `Fix water leaks promptly.`,
      },
      {
        id: 4,
        message: `Use low flow toilets.`,
      },
      {
        id: 5,
        message: `Keep water in jug in fridge so you don't run the tap to cool.`,
      },
      {
        id: 6,
        message: `Steam vegetables rather than boiling.`,
      },
    ];

    var idx = 0;

    const sendMessage = () => {
      $("#train-chatbot .chatbot__middle").append(msgTyping);
      scrollToBottom();

      let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-left">
                      ${chatBotIcon}
                      <p>${replies[idx].message}</p>
                  </div>`;

      setTimeout(() => {
        msgTyping.remove();
        addToChat(message);
        trainBotId += 1;
      }, messageTypingTime);
      idx += 1;
    };

    sendMessage();

    var timer = setInterval(() => {
      if (idx < replies.length) {
        sendMessage();
      } else {
        train_user_input.prop("disabled", false);
        clearInterval(timer);
      }
    }, messageTypingTime + nextMessageTime);
  };

  const fashionAnswer = () => {
    const replies = [
      {
        id: 1,
        message: `Shop less.`,
      },
      {
        id: 2,
        message: `Have a clothes swap party.`,
      },
      {
        id: 3,
        message: `Sell old clothes online.`,
      },
      {
        id: 4,
        message: `Give old clothes to charity.`,
      },
      {
        id: 5,
        message: `Buy second hand clothes.`,
      },
      {
        id: 6,
        message: `Fix tears with stitching or patch over holes.`,
      },
    ];

    var idx = 0;

    const sendMessage = () => {
      $("#train-chatbot .chatbot__middle").append(msgTyping);
      scrollToBottom();

      let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-left">
                      ${chatBotIcon}
                      <p>${replies[idx].message}</p>
                  </div>`;

      setTimeout(() => {
        msgTyping.remove();
        addToChat(message);
        trainBotId += 1;
      }, messageTypingTime);
      idx += 1;
    };

    sendMessage();

    var timer = setInterval(() => {
      if (idx < replies.length) {
        sendMessage();
      } else {
        train_user_input.prop("disabled", false);
        clearInterval(timer);
      }
    }, messageTypingTime + nextMessageTime);
  };

  const trasnportAnswer = () => {
    const replies = [
      {
        id: 1,
        message: `Ride a bike for journeys you would normally drive.`,
      },
      {
        id: 2,
        message: `Live car free.`,
      },
      {
        id: 3,
        message: `Carpool with people you work with.`,
      },
      {
        id: 4,
        message: `Use an electric or hybrid powered vehicle.`,
      },
      {
        id: 5,
        message: `Use green buses and trams.`,
      },
      {
        id: 6,
        message: `If you need to purchase a car, make sure it has low emissions.`,
      },
    ];

    var idx = 0;

    const sendMessage = () => {
      $("#train-chatbot .chatbot__middle").append(msgTyping);
      scrollToBottom();

      let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-left">
                      ${chatBotIcon}
                      <p>${replies[idx].message}</p>
                  </div>`;

      setTimeout(() => {
        msgTyping.remove();
        addToChat(message);
        trainBotId += 1;
      }, messageTypingTime);
      idx += 1;
    };

    sendMessage();

    var timer = setInterval(() => {
      if (idx < replies.length) {
        sendMessage();
      } else {
        train_user_input.prop("disabled", false);
        clearInterval(timer);
      }
    }, messageTypingTime + nextMessageTime);
  };

  const userMessageTranscations = () => {
    acronym = localStorage.acronym;
    initials = `<span class='initials'>${acronym}</span>`;

    userMessage = train_user_input.val();

    let message = `
                <div class="chatbot__middle--entry chatbot__middle--entry-right">
                    <p>${train_user_input.val()}</p>
                    ${initials}
                </div>`;
    addToChat(message);

    console.log(userMessage.split(" ").length);

    train_user_input.prop("disabled", true);

    if (!userMessage.includes("?") || userMessage.split(" ").length < 3) {
      // need a response message in case of not a question

      return errorMessage();
    }

    if (userMessage.toLowerCase().includes("energy")) {
      energyAnswer();

      setTimeout(() => {
        $("#energy").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + nextMessageTime * 9 + 500);
    } else if (userMessage.toLowerCase().includes("waste")) {
      wasteAnswer();
      setTimeout(() => {
        $("#waste").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + nextMessageTime * 9 + 500);
    } else if (userMessage.toLowerCase().includes("water")) {
      waterAnswer();
      setTimeout(() => {
        $("#water").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + nextMessageTime * 9 + 500);
    } else if (userMessage.toLowerCase().includes("travel")) {
      trasnportAnswer();
      setTimeout(() => {
        $("#travel").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + nextMessageTime * 9 + 500);
    } else if (userMessage.toLowerCase().includes("fashion")) {
      fashionAnswer();
      setTimeout(() => {
        $("#fashion").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + nextMessageTime * 9 + 500);
    } else if (userMessage.toLowerCase().includes("food")) {
      foodAnswer();
      setTimeout(() => {
        $("#food").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + nextMessageTime * 9 + 500);
    } else {
      errorMessage();
      setTimeout(() => {
        $("#unknown").addClass("step-5__activity--step-1-eco-area-success");
        isTrained();
      }, nextTaskTime + 500);
    }
  };

  const isTrained = () => {
    setTimeout(() => {
      if ([...document.getElementsByClassName("step-5__activity--step-1-eco-area-success")].length === 7) {
        $("#train-chatbot .jsSuccessMessage").removeClass("hide");
        $(".jsDeployment").removeClass("hide");

        $("html, body").animate(
          {
            scrollTop: $(".jsDeployment").offset().top - $(".jsDeployment").height(),
          },
          800
        );
      }
    }, 1000);
  };

  sendTrainBotMessage();

  train_send_message.click(() => {
    if (train_user_input.val() !== "") userMessageTranscations();
  });

  $(document).on("keypress", function (e) {
    if (e.which == 13) {
      if (train_user_input.val() !== "") userMessageTranscations();
    }
  });
});
