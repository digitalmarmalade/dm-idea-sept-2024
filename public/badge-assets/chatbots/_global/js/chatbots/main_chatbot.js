$(function () {
  const user_input = $(".jsMainChat #user-input");
  const send_message = $(".jsMainChat #send");
  const close_btn = $(".jsMainChat #chatbot__button--close-chat");

  let userName, acronym, initials;

  // const messageTypingTime = 20;
  // const nextMessageTime = messageTypingTime + 20;
  // const nextTaskTime = messageTypingTime + 50;
  // const offestTime = 10;

  // default values
  const messageTypingTime = 2000;
  const nextMessageTime = messageTypingTime + 2000;
  const nextTaskTime = messageTypingTime + 500;
  const offestTime = 1000;

  const chatBotIcon = `
    <span>
            <img
                src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg"
                alt="Chatbot icon"
                />
    </span>
    `;

  const msgTyping = $(`
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                    ${chatBotIcon}
                    <p><span class="chatbot__loader--speech"></span></p>
                </div>`);

  let chatBotId = 0;
  let botId = 0;

  let chat = [];

  let tips = localStorage.tips
    ? JSON.parse(localStorage.tips)
    : [
        {
          id: 0,
          message: `Did you know that everything we spend money on affects the planet’s eco system. 
            To reduce your environmental impact, buy local and seasonal foods, and choose products from companies who use resources responsibly.`,
        },
        {
          id: 1,
          message: `Did you know that when you speak up and get others to join in taking eco-action. Talk to your neighbours, colleagues, friends, and family. 
            Let business owners know you support bold changes. 
            Appeal to local and world leaders to make eco-friendly changes.`,
        },
        {
          id: 2,
          message: `Did you know that if you plan to buy a new car, consider an electric car. 
            Even if they are still running on electricity produced from fossil fuels, electric cars help reduce air pollution and cause significantly 
            fewer greenhouse gas emissions.`,
        },
        {
          id: 3,
          message: `Did you know that you should check if your home energy comes from oil, coal, or gas.
            If possible, switch your utility provider to renewable sources such as wind or solar. 
            Consider installing solar panels on your roof to generate energy for your home.`,
        },
        {
          id: 4,
          message: `Did you know that electronics, clothes, and other items we buy cause carbon emissions at each point in production, 
            from raw materials to manufacturing and transporting goods to market. 
            Buy fewer things, shop second-hand, repair instead of buying new, and recycle.`,
        },
        {
          id: 5,
          message: `Did you know that when throwing food away, you're also wasting the resources and energy that were used to grow, produce, package, and transport it. 
            Ensure you use what you buy and compost any leftovers.`,
        },
        {
          id: 6,
          message: `Did you know that airplanes burn large amounts of fossil fuels, in flying less you are selecting the fastest way to reduce your carbon footprint. 
            When you can, meet virtually or travel by a bus, train, or tram.`,
        },
        {
          id: 7,
          message: `Did you know that eating vegetables, fruits, whole grains, nuts, and seeds significantly lowers your environmental impact. 
            Producing plant-based foods can mean you generate fewer greenhouse gas emissions and requires less energy, land, and water.`,
        },
        {
          id: 8,
          message: `Did you know that roads are overpopulated with vehicles that use diesel or petrol. 
            Walking or riding a bike instead of driving will reduce greenhouse gas emissions whilst also helping you to stay healthy.`,
        },
        {
          id: 9,
          message: `Did you know that much of our electricity and heat are powered by coal, oil, and gas. 
            Use less energy by lowering your heating, switching to LED light bulbs and use energy-efficient electric appliances.`,
        },
        {
          id: 10,
          message: `Did you know that fashion has an important role to play in reducing greenhouse gases, pollution, 
            and global waste with an increasing focus on sustainable and reusable production and durability.`,
        },
      ];

  const addToChat = (message, value = 1) => {
    // console.log(chat, typeof chat, botId, chatBotId);
    chat.push({
      id: chatBotId,
      message: message,
    });

    user_input.val("");

    // $(".jsMainChat .chatbot__middle").append(`${chat[chatBotId].message}`);
    $(".jsMainChat .chatbot__middle").append(`${message}`);

    scrollToBottom();

    chatBotId += value;
  };

  const sendBotMessage = (disabled, idx = botId, value = 1) => {
    let botMessages = [
      {
        id: 0,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Hello! Please can you type your name and press enter.</p>
                    </div>`,
      },
      {
        id: 1,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>${userName}, thank you for entering your name.</p>
                    </div>`,
      },
      {
        id: 2,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>My name is <strong>i-Ted</strong>, which stands for “iDEA’s technical emulation debugger”. 
                        I am your assistant chatbot.</p>
                    </div>`,
      },
      {
        id: 3,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>If you get stuck at any point just click the <strong>i-Ted</strong> icon in the bottom right-hand corner of your screen.</p>
                    </div>`,
      },
      {
        id: 4,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>In this section you will find out what a chatbot is, and discover some of the different types of chatbots.</p>
                    </div>`,
      },
      {
        id: 5,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>To begin, just type YES.</p>
                    </div>`,
      },
      {
        id: 6,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Please type YES to continue.</p>
                    </div>`,
      },
      {
        id: 7,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>To continue please click <strong>‘Close Chat’</strong>.</p>
                    </div>`,
      },
      {
        id: 8,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Well done ${userName}, you identified a rule-based, a hybrid, and an AI chatbot, and you learnt about some of the advantages and disadvantages of each.</p>
                    </div>`,
      },
      {
        id: 9,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>You have begun your journey to becoming a chatbot developer.</p>
                    </div>`,
      },
      {
        id: 10,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>In this next section, you will take a closer look at how AI is being used today to make chatbots more human-like.</p>
                    </div>`,
      },
      {
        id: 11,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Would you like to begin?</p>
                    </div>`,
      },
      {
        id: 12,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Good work ${userName}! You understand how artificial intelligence and natural language processing are used to enhance digital conversations.</p>
                    </div>`,
      },
      {
        id: 13,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>You are now building on your chatbot developer knowledge and skills.</p>
                    </div>`,
      },
      {
        id: 14,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Now you will look at a range of real-world chatbots that provide solutions to help people, businesses, communities and even issues affecting the whole world.</p>
                    </div>`,
      },
      {
        id: 15,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Shall we get started?</p>
                    </div>`,
      },
      {
        id: 16,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant work ${userName}, you have explored real-life examples of how chatbots are used by businesses, charities and communities to help people.</p>
                    </div>`,
      },
      {
        id: 17,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>You have completed your training and are now ready to create your own chatbot.</p>
                    </div>`,
      },
      {
        id: 18,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>We want you to design your own version of an eco-chatbot, using some of the chatbots you have just learnt about as an inspiration. You will find the UN’s <a target="_blank" rel="noopener" href="https://www.un.org/en/actnow">ActNow</a> website a useful resource for information on eco-friendly tips.</p>
                    </div>`,
      },
      {
        id: 19,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Are you ready?</p>
                    </div>`,
      },
      {
        id: 20,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Great work ${userName}, you have just completed the design and programming of your chatbot.</p>
                    </div>`,
      },
      {
        id: 21,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Now we need you to begin testing your chatbot and fixing any errors that you might find along the way.</p>
                    </div>`,
      },
      {
        id: 22,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Shall we get started?</p>
                    </div>`,
      },
      {
        id: 23,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Amazing work ${userName}!</p>
                    </div>`,
      },
      {
        id: 24,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>You have just completed your chatbot.</p>
                    </div>`,
      },
      {
        id: 25,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>You have successfully designed, programmed, tested, deployed and maintained your chatbot.</p>
                    </div>`,
      },
      {
        id: 26,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Your final task is to evaluate your chatbot's strengths and weaknesses.</p>
                    </div>`,
      },
      {
        id: 27,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Are you ready to begin?</p>
                    </div>`,
      },
    ];

    $(".jsMainChat .chatbot__middle").append(msgTyping);
    scrollToBottom();

    // console.log($(document).find(msgTyping), "exist", botId);

    setTimeout(() => {
      // console.log(botMessages);
      msgTyping.remove();
      addToChat(botMessages[idx].message);
      botId += value;
      // console.log(chatBotId, botId, "bot message added", chat[chatBotId - 1].message);
      $(".jsMainChat .jsAccept").click(accepted);

      //console.log("is it", disabled);

      $(`#user-input`).prop("disabled", disabled);
    }, messageTypingTime);
  };

  const shareTip = () => {
    let tipIdx = Math.floor(Math.random() * tips.length);

    $(".jsMainChat .chatbot__middle").append(msgTyping);
    scrollToBottom();

    setTimeout(() => {
      msgTyping.remove();

      addToChat(`<div class="chatbot__middle--entry chatbot__middle--entry-left">${chatBotIcon}<p>${tips[tipIdx].message}</p></div>`);

      tips.splice(tipIdx, 1);

      // console.log(tips);

      // console.log(chatBotId);
    }, messageTypingTime);
  };

  const scrollToBottom = () => {
    // console.log("scroll");
    $(".jsMainChat .chatbot__middle")[0].scrollTop = $(".jsMainChat .chatbot__middle")[0].scrollHeight;
  };

  const userFirstMessage = () => {
    userName = user_input.val();

    const name_split = userName.split(" ");

    for (var i = 0; i < name_split.length; i++) {
      name_split[i] = name_split[i].charAt(0).toUpperCase() + name_split[i].slice(1);
    }

    userName = name_split.join(" ");

    var matches = userName.match(/\b(\w)/g);
    acronym = matches.join("");

    localStorage.setItem("userName", userName);
    localStorage.setItem("acronym", acronym);

    initials = `<span class='initials'>${acronym}</span>`;
    let message = `
            <div class="chatbot__middle--entry chatbot__middle--entry-right">
                <p>${userName}</p>
                ${initials}
            </div>`;
    addToChat(message);

    sendBotMessage(true, botId, 1);
    setTimeout(() => {
      sendBotMessage(true, botId, 1);
    }, nextMessageTime);
    setTimeout(() => {
      sendBotMessage(true, botId, 1);
      // console.log(botId, "botid");
    }, messageTypingTime + nextMessageTime + offestTime);
    setTimeout(() => {
      sendBotMessage(true, botId, 1);
      // console.log(botId, "botid");
    }, messageTypingTime + nextMessageTime + nextMessageTime + offestTime);
    setTimeout(() => {
      sendBotMessage(false, botId, 1);
      // console.log(botId, "botid");
    }, messageTypingTime + nextMessageTime + nextMessageTime + nextMessageTime + offestTime);
  };

  const accepted = () => {
    $(`#user-input`).prop("disabled", true);

    // console.log("accepted");
    // let message = `
    //           <div class="chatbot__middle--entry chatbot__middle--entry-right">
    //               <p>${user_input.val()}</p>
    //               ${initials}
    //           </div>`;
    // addToChat(message);

    sendBotMessage(true, botId, 1);
    setTimeout(() => {
      shareTip();
    }, nextMessageTime);
    setTimeout(() => {
      // console.log(botId);
      sendBotMessage(true, botId, 1);
    }, messageTypingTime + nextMessageTime + offestTime);
    setTimeout(() => {
      close_btn.removeClass("hide");
    }, messageTypingTime + nextMessageTime + nextTaskTime + offestTime);

    // let message = `
    //           <div class="chatbot__middle--entry chatbot__middle--entry-right">
    //               <p>${user_input.val()}</p>
    //               ${initials}
    //           </div>`;
    // addToChat(message);

    // shareTip();

    // setTimeout(() => {
    //   botId -= 1;
    //   chatBotId = 4;
    //   chat.splice(chatBotId, chat.length - chatBotId);
    //   sendBotMessage();
    // }, nextMessageTime);
  };

  const userSecondMessage = () => {
    if (user_input.val().toLowerCase() === "yes") {
      let message = `
                <div class="chatbot__middle--entry chatbot__middle--entry-right">
                    <p>${user_input.val()}</p>
                    ${initials}
                </div>`;
      addToChat(message);

      sendBotMessage(true, 7, 1);
      // setTimeout(() => {
      //   shareTip();
      // }, nextMessageTime);
      // setTimeout(() => {
      //   // console.log(botId);
      //   sendBotMessage(true);
      // }, nextMessageTime);
      setTimeout(() => {
        close_btn.removeClass("hide");
      }, nextTaskTime);
    } else {
      let message = `
                <div class="chatbot__middle--entry chatbot__middle--entry-right">
                    <p>${user_input.val()}</p>
                    ${initials}
                </div>`;
      addToChat(message);

      // shareTip();

      // setTimeout(() => {
      botId += 1;
      // chatBotId = 6;

      chat.splice(chatBotId, chat.length - chatBotId);
      sendBotMessage(false, 6, -1);
      // }, nextMessageTime);
    }
  };

  const userThirdMessage = () => {
    userSecondMessage();
  };
  const userFourthMessage = () => {
    userSecondMessage();
  };

  const userFifthMessage = () => {
    if (user_input.val().toLowerCase() === "yes") {
      let message = `
                <div class="chatbot__middle--entry chatbot__middle--entry-right">
                    <p>${user_input.val()}</p>
                    ${initials}
                </div>`;
      addToChat(message);

      sendBotMessage(true);

      setTimeout(() => {
        close_btn.removeClass("hide");
      }, nextMessageTime);
    } else {
      let message = `
                <div class="chatbot__middle--entry chatbot__middle--entry-right">
                    <p>${user_input.val()}</p>
                    ${initials}
                </div>`;
      addToChat(message);

      shareTip();

      setTimeout(() => {
        botId -= 1;
        chatBotId = 4;
        chat.splice(chatBotId, chat.length - chatBotId);
        sendBotMessage(false);
      }, nextMessageTime);
    }
  };

  const userSixthMessage = () => {
    userFifthMessage();
  };
  const userSeventhMessage = () => {
    userFifthMessage();
  };

  $(`#user-input`).prop("disabled", true);
  const userMessageTranscations = () => {
    $(`#user-input`).prop("disabled", true);

    // console.log(botId);

    if (botId === 1) {
      userFirstMessage();
    } else if (botId === 6) {
      userSecondMessage();
    } else if (botId === 12) {
      userThirdMessage();
    } else if (botId === 16) {
      userFourthMessage();
    } else if (botId === 20) {
      userFourthMessage();

      // userFifthMessage();
    } else if (botId === 23) {
      userFourthMessage();

      // userSixthMessage();
    } else if (botId === 28) {
      userFourthMessage();

      // userSeventhMessage();
    }
  };

  if (+window.location.pathname.slice(-1) === 1) {
    chatBotId = 0;
    botId = 0;
    sendBotMessage(false);
  } else if (+window.location.pathname.slice(-1) === 2) {
    // chatBotId = 9;
    botId = 8;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage(true);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime + messageTypingTime + offestTime);
    setTimeout(() => {
      sendBotMessage(false);
    }, nextMessageTime + nextMessageTime + messageTypingTime + offestTime);
  } else if (+window.location.pathname.slice(-1) === 3) {
    // chatBotId = 9;
    botId = 12;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage(true);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime + messageTypingTime + offestTime);
    setTimeout(() => {
      sendBotMessage(false);
    }, nextMessageTime + nextMessageTime + messageTypingTime + offestTime);
  } else if (+window.location.pathname.slice(-1) === 4) {
    // chatBotId = 9;
    botId = 16;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage(true);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime + messageTypingTime + offestTime);
    setTimeout(() => {
      sendBotMessage(false);
    }, nextMessageTime + nextMessageTime + messageTypingTime + offestTime);
  } else if (+window.location.pathname.slice(-1) === 5) {
    // chatBotId = 9;
    botId = 20;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage(true);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime);
    setTimeout(() => {
      sendBotMessage(false);
    }, nextMessageTime + messageTypingTime + offestTime);
  } else if (+window.location.pathname.slice(-1) === 6) {
    botId = 23;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;

    $(`#user-input`).prop("disabled", true);

    sendBotMessage(true);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime + messageTypingTime + offestTime);
    setTimeout(() => {
      sendBotMessage(true);
    }, nextMessageTime + nextMessageTime + messageTypingTime + offestTime);
    setTimeout(() => {
      sendBotMessage(false);
    }, nextMessageTime + nextMessageTime + nextMessageTime + messageTypingTime + offestTime);
  }

  send_message.click(() => {
    if (user_input.val() !== "") userMessageTranscations();
    // userMessageTranscations();
  });

  $(document).on("keypress", function (e) {
    if (e.which == 13) {
      if (user_input.val() !== "") userMessageTranscations();
    }
  });

  if (!$(".jsMainChat").hasClass("hide")) {
    $("body").css("overflow", "hidden");
  } else {
    $("body").css("overflow", "auto");
  }

  close_btn.click(() => {
    // console.log("main clicked", chatBotId, botId);

    localStorage.setItem("tips", JSON.stringify(tips));

    $(".jsMainChat").addClass("hide");
    $(".jsStep").removeClass("hide");

    $("body").css("overflow", "auto");
  });
});
