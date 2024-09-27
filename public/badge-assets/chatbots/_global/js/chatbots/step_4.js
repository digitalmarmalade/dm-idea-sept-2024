$(function () {
  const sideChatCloseBtn = $(".jsStep #chatbot__button--close-chat");
  const sideChatChatbot = $(".jsStep .chatbot__toggle--icon");
  const sideChatOverlay = $(".jsStep .overlay");
  const side_chat_user_input = $(".jsStep #user-input");
  const side_chat_send_message = $(".jsStep #send");

  // let userName;
  let userName, acronym, initials;
  let noBtn = $(".jsNo");

  let tips;

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

  let sideChat = [];
  let sideChatBotId = 0;
  let sideBotId = 0;

  const addToSideChat = (message) => {
    sideChat.push({
      id: sideChatBotId,
      message: message,
    });

    $(".jsStep .chatbot__middle").append(`${sideChat[sideChatBotId].message}`);

    scrollToBottomSideChat();

    sideChatBotId += 1;
  };

  const sendSideBotMessage = () => {
    userName = localStorage.userName;
    let sideChatBotMessages = [
      {
        id: 1,
        message: `
            <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Hello ${userName}, do you need help? Please click yes or no.<br />

                <button class="jsYes chatbot__middle--help-options">
                    Yes
                </button>
                <button class="jsNo chatbot__middle--help-options">
                    No
                </button>
                </p>
            </div>`,
      },
      {
        id: 2,
        message: `
            <div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>To complete this section, you will need to use block coding to design the eco-chatbot program, 
                complete activities 1 to 4 reading the on screen instructions as guidance.<br/><br/>
                Thank you.</p>
            </div>`,
      },
    ];

    $(".jsStep .chatbot__middle").append(msgTyping);
    scrollToBottomSideChat();

    setTimeout(() => {
      msgTyping.remove();
      addToSideChat(sideChatBotMessages[sideBotId].message);
      noBtn = $(".jsNo");
      let yesBtn = $(".jsYes");

      noBtn.off("click");
      yesBtn.off("click");

      noBtn.click(() => {
        no_repsonse();
      });

      yesBtn.click(() => {
        sendSideBotMessage();
      });

      side_chat_send_message.click(() => {
        if (side_chat_user_input.val() !== "") sideChatUserMessageTranscations();
      });

      $(document).on("keypress", function (e) {
        if (e.which == 13) {
          if (side_chat_user_input.val() !== "") sideChatUserMessageTranscations();
        }
      });

      sideBotId += 1;
      // console.log(sideChatBotId, sideBotId, "bot message added", noBtn[0]);
    }, 2000);
  };

  const scrollToBottomSideChat = () => {
    // console.log("scroll");
    $(".jsStep .chatbot__middle")[0].scrollTop = $(".jsStep .chatbot__middle")[0].scrollHeight;
  };

  const shareSideTip = () => {
    let tipIdx = Math.floor(Math.random() * tips.length);

    // console.log(tipIdx, tips);

    $(".jsStep .chatbot__middle").append(msgTyping);
    scrollToBottomSideChat();

    setTimeout(() => {
      msgTyping.remove();

      addToSideChat(`<div class="chatbot__middle--entry chatbot__middle--entry-left">${chatBotIcon}<p>${tips[tipIdx].message}</p></div>`);

      tips.splice(tipIdx, 1);
      localStorage.setItem("tips", JSON.stringify(tips));

      // console.log(tips);
    }, 2000);

    setTimeout(() => {
      $(".jsStep .chatbot__middle").append(msgTyping);
      scrollToBottomSideChat();
    }, 4100);

    setTimeout(() => {
      msgTyping.remove();

      addToSideChat(
        `<div class="chatbot__middle--entry chatbot__middle--entry-left">${chatBotIcon}<p>If you need any help please type <strong>Yes</strong> or <strong>No</strong></p></div>`
      );

      sideBotId = 1;
    }, 6200);
  };

  const no_repsonse = () => {
    setTimeout(() => {
      $(".jsStep .chatbot__middle").append(msgTyping);
      scrollToBottomSideChat();
    }, 200);

    setTimeout(() => {
      msgTyping.remove();

      addToSideChat(`<div class="chatbot__middle--entry chatbot__middle--entry-left">${chatBotIcon}<p>Okay</p></div>`);
      sideBotId = 1;
    }, 2200);

    setTimeout(() => {
      sideChatOverlay.addClass("closed");
    }, 4200);
  };

  const sideUserFirstMessage = () => {
    side_chat_user_input.val(side_chat_user_input.val().trimStart().trimEnd());
    let message = `
            <div class="chatbot__middle--entry chatbot__middle--entry-right">
                <p>${side_chat_user_input.val()}</p>
                ${initials}
            </div>`;
    addToSideChat(message);
    if (side_chat_user_input.val().toLowerCase() == "yes") {
      // console.log("yess");
      sendSideBotMessage();
    } else if (side_chat_user_input.val().toLowerCase() == "no") {
      no_repsonse();
    } else {
      // console.log(side_chat_user_input.val());
      // console.log(side_chat_user_input.val().toLowerCase() == "yes");
      // shareSideTip();
    }
  };

  const sideChatUserMessageTranscations = () => {
    if (sideBotId === 1) {
      sideUserFirstMessage();
    }
    side_chat_user_input.val("");
  };

  sideChatOverlay.addClass("closed");

  // console.log("object");

  sideChatCloseBtn.click(() => {
    // console.log("object");
    sideChatOverlay.addClass("closed");
  });

  sideChatChatbot.click(() => {
    $(`.jsSideChat #user-input`).prop("disabled", true);

    sideChatOverlay.removeClass("closed");
    sideChat = [];
    sideChatBotId = 0;
    sideBotId = 0;

    acronym = localStorage.acronym;
    initials = `<span class='initials'>${acronym}</span>`;
    tips = JSON.parse(localStorage.tips);
    // console.log("tips are", tips);
    sendSideBotMessage();
  });
});
