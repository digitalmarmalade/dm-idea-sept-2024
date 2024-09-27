$(function () {
  const user_input = $(".jsMainChat #user-input");
  const send_message = $(".jsMainChat #send");
  const close_btn = $(".jsMainChat #chatbot__button--close-chat");

  let userName, acronym, initials;

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

  const addToChat = (message) => {
    console.log(chat, typeof chat, botId, chatBotId);
    chat.push({
      id: chatBotId,
      message: message,
    });

    user_input.val("");

    console.log(chatBotId);

    $(".jsMainChat .chatbot__middle").append(`${chat[chatBotId].message}`);

    scrollToBottom();

    chatBotId += 1;
  };

  const sendBotMessage = () => {
    let botMessages = [
      {
        id: 1,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Hello! Please can you type your name and press enter.</p>
                    </div>`,
      },
      {
        id: 2,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>${userName}, thank you for entering your name.</p>
                    </div>`,
      },
      {
        id: 3,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>My name is <strong>i-Ted</strong>, which stands for “iDEA’s technical encryption debugger” 
                        I’m your assistant chatbot, here to help as you progress through this badge.</p>
                    </div>`,
      },
      {
        id: 3,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>In this section you will learn what chatbots are and research the different types of chatbots. Would you like to begin?
                          <button class="jsAccept chatbot__middle--help-options">
                            Accept
                          </button>
                        </p>
                    </div>`,
      },
      {
        id: 4,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! You are now well on your journey to become a Chatbot developer, well done.</p>
                    </div>`,
      },
      {
        id: 5,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>You can close this chat now, and if you get stuck at any point just click the 
                <strong>i-Ted icon</strong> in the bottom right corner. 
                Good Luck!</p>
                </div>`,
      },
      {
        id: 6,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Well done ${userName},  You can now identify different types of chatbots and understand the advantages and disadvantages of rule-based and AI chatbots. 
                You are on your way to becoming a chatbot developer, let’s take a closer look at how AI is being used today to make chatbots more human like.</p>
                </div>`,
      },
      {
        id: 7,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>In this section you will gain an understanding of <strong>‘natural language processing’</strong> 
                and take a deep dive into how AI is trying to mimic human conversations. 
                Would you like to begin? <strong>Please type YES</strong></p>
                </div>`,
      },
      {
        id: 8,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! You are now well on your journey to become a Chatbot developer, well done.</p>
                    </div>`,
      },
      {
        id: 9,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>You can close this chat now, and if you get stuck at any point just click the 
                <strong>i-Ted icon</strong> in the bottom right corner. 
                Good Luck!</p>
                </div>`,
      },
      {
        id: 10,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Well done ${userName}, You understand how AI is designed to mimic human conversations and gained an understanding of <strong>natural language processing</strong>. 
                You are well on your way to becoming a chatbot developer.
                </p>
                </div>`,
      },
      {
        id: 11,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>In this section you will look at a range of real world chatbots that provide solutions that can help individual people, businesses, communities and world issues. 
                Would you like to begin?
                <button class="jsAccept chatbot__middle--help-options">
                    Accept
                </button>
                </div>`,
      },
      {
        id: 12,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! You are now well on your journey to become a Chatbot developer, well done.</p>
                    </div>`,
      },
      {
        id: 13,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>You can close this chat now, and if you get stuck at any point just click the 
                <strong>i-Ted icon</strong> in the bottom right corner. 
                Good Luck!</p>
                </div>`,
      },
      {
        id: 14,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Well done ${userName}, you now understand how chatbots are used to provide solutions that can help individual people, businesses, communities and world issues.
                </p>
                </div>`,
      },
      {
        id: 15,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>You have completed your training and you are now ready to create your own chatbot!. Would you like to begin? <strong>Please type YES</strong>.</p>
                    </div>`,
      },
      {
        id: 16,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! We want you to design your own version of an eco-chatbot that will promote ideas you have learnt about in your research.
                        You will find the UN's ActNow website a massive resource for information on eco-friendly tips. I will also be here to help you on your
                        Journey, lets begin. Good luck!</p>
                    </div>`,
      },
      {
        id: 17,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Wow, ${userName}, you have just designed a chatbot, well done!</p>
                </div>`,
      },
      {
        id: 18,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Next, you will test your chatbot. Would you like to begin?
                          <button class="jsAccept chatbot__middle--help-options">
                            Accept
                          </button>
                        </p>
                    </div>`,
      },
      {
        id: 16,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! Enjoy testing your chatbot and fixing any errors you find along the way, let's begin!</p>
                    </div>`,
      },
      {
        id: 18,
        message: `
                <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>WOW! ${userName}, You have nearly completed the Chatbot badge.</p>
                </div>`,
      },
      {
        id: 19,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Now you will identify the strengths and weaknesses of your Eco-Chatbot. Would you like to begin? <strong>Please type YES</strong>.</p>
                    </div>`,
      },
      {
        id: 20,
        message: `
                    <div class="chatbot__middle--entry chatbot__middle--entry-left">
                        ${chatBotIcon}
                        <p>Brilliant! Enjoy reflecting on the advantages and disadvantages of your Eco-Chatbot, lets begin!</p>
                    </div>`,
      },
    ];

    $(".jsMainChat .chatbot__middle").append(msgTyping);
    scrollToBottom();

    console.log($(document).find(msgTyping), "yes it does", botId);

    setTimeout(() => {
      msgTyping.remove();
      addToChat(botMessages[botId].message);
      botId += 1;
      console.log(chatBotId, botId, "bot message added");
      $(".jsMainChat .jsAccept").click(accepted);
    }, 2000);
  };

  const shareTip = () => {
    let tipIdx = Math.floor(Math.random() * tips.length);

    $(".jsMainChat .chatbot__middle").append(msgTyping);
    scrollToBottom();

    setTimeout(() => {
      msgTyping.remove();

      addToChat(`<div class="chatbot__middle--entry chatbot__middle--entry-left">${chatBotIcon}<p>${tips[tipIdx].message}</p></div>`);

      tips.splice(tipIdx, 1);

      console.log(tips);

      console.log(chatBotId);
    }, 2000);
  };

  const scrollToBottom = () => {
    console.log("scroll");
    $(".jsMainChat .chatbot__middle")[0].scrollTop = $(".jsMainChat .chatbot__middle")[0].scrollHeight;
  };

  const userFirstMessage = () => {
    userName = user_input.val();
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

    sendBotMessage();
    setTimeout(() => {
      sendBotMessage();
    }, 2100);
    setTimeout(() => {
      sendBotMessage();
      console.log(botId, "botid");
    }, 4200);
  };

  const accepted = () => {
    console.log("accepted");
    // let message = `
    //           <div class="chatbot__middle--entry chatbot__middle--entry-right">
    //               <p>${user_input.val()}</p>
    //               ${initials}
    //           </div>`;
    // addToChat(message);

    sendBotMessage();
    setTimeout(() => {
      shareTip();
    }, 2100);
    setTimeout(() => {
      console.log(botId);
      sendBotMessage();
    }, 4200);
    setTimeout(() => {
      close_btn.removeClass("hide");
    }, 6250);

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
    // }, 2100);
  };

  const userSecondMessage = () => {
    if (user_input.val().toLowerCase() === "yes") {
      let message = `
                <div class="chatbot__middle--entry chatbot__middle--entry-right">
                    <p>${user_input.val()}</p>
                    ${initials}
                </div>`;
      addToChat(message);

      sendBotMessage();
      setTimeout(() => {
        shareTip();
      }, 2100);
      setTimeout(() => {
        console.log(botId);
        sendBotMessage();
      }, 4200);
      setTimeout(() => {
        close_btn.removeClass("hide");
      }, 6250);
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
        sendBotMessage();
      }, 2100);
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

      sendBotMessage();

      setTimeout(() => {
        close_btn.removeClass("hide");
      }, 2100);
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
        sendBotMessage();
      }, 2100);
    }
  };

  const userSixthMessage = () => {
    userFifthMessage();
  };
  const userSeventhMessage = () => {
    userFifthMessage();
  };

  const userMessageTranscations = () => {
    if (botId === 1) {
      userFirstMessage();
    } else if (botId === 4) {
      userSecondMessage();
    } else if (botId === 8) {
      userThirdMessage();
    } else if (botId === 12) {
      userFourthMessage();
    } else if (botId === 16) {
      userFifthMessage();
    } else if (botId === 19) {
      userSixthMessage();
    } else if (botId === 22) {
      userSeventhMessage();
    }
  };

  if (+window.location.pathname.slice(-1) === 1) {
    chatBotId = 0;
    botId = 0;
    sendBotMessage();
  } else if (+window.location.pathname.slice(-1) === 2) {
    // chatBotId = 9;
    botId = 6;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage();
    setTimeout(() => {
      sendBotMessage();
    }, 2100);
  } else if (+window.location.pathname.slice(-1) === 3) {
    // chatBotId = 9;
    botId = 10;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage();
    setTimeout(() => {
      sendBotMessage();
    }, 2100);
  } else if (+window.location.pathname.slice(-1) === 4) {
    // chatBotId = 9;
    botId = 14;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage();
    setTimeout(() => {
      sendBotMessage();
    }, 2100);
  } else if (+window.location.pathname.slice(-1) === 5) {
    // chatBotId = 9;
    botId = 17;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;
    // console.log(chat);
    sendBotMessage();
    setTimeout(() => {
      sendBotMessage();
    }, 2100);
  } else if (+window.location.pathname.slice(-1) === 6) {
    botId = 20;
    userName = localStorage.getItem("userName");
    acronym = localStorage.getItem("acronym");
    initials = `<span class='initials'>${acronym}</span>`;

    sendBotMessage();
    setTimeout(() => {
      sendBotMessage();
    }, 2100);
  }

  send_message.click(() => {
    userMessageTranscations();
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
    console.log("main clicked", chatBotId, botId);

    localStorage.setItem("tips", JSON.stringify(tips));

    $(".jsMainChat").addClass("hide");
    $(".jsStep").removeClass("hide");

    $("body").css("overflow", "auto");
  });
});
