$(function () {
  const codeFailMessage = $(".jsDeployment .jsUnresolvedIssues");
  const semanticErrorBtn = $(".jsDeployment .jsSemanticError");
  const syntaxErrorBtn = $(".jsDeployment .jsSyntaxError");
  const logicErrorBtn = $(".jsDeployment .jsLogicError");
  const errorMsg = $(".jsDeployment .jsErrorMsg");
  const runCodeBtn = $(".jsRunCode");
  const continueBtn = $(".jsContinue");
  const deployCode = $(".jsDeployCode");
  const deployAnim = $(".jsDeployingAnim");
  const errorEncountered = $(".jsErrorEncountered");
  const codePreview = $(".jsCodePreview");
  const side_chat_user_input = $(".jsSideChat #user-input");
  const eco_chat_user_input = $(".jsEcoBot #user-input");
  const side_chat_send_message = $(".jsSideChat #send");
  const sideChatOverlay = $(".jsSideChat.overlay");
  const ecoBotOverlay = $(".jsEcoBot.overlay");
  const sideChatCloseBtn = $(".jsStep .jsSideChat #chatbot__button--close-chat");
  const ecoBotCloseBtn = $(".jsStep .jsEcoBot  #chatbot__button--close-chat");
  const eco_chat_send_message = $(".jsEcoBot #send");

  const completeClass = "step-5__activity--step-2-code-complete";
  const highlightClass = "step-5__activity--step-2-code-highlighted";

  const dropDownOpen = "dropdown--open";
  $(".jsStep .jsEcoBot.overlay").toggleClass("closed");
  $(".chatbot__toggle--icon").toggleClass("hide");

  const messageTypingTime = 2000;
  const nextMessageTime = messageTypingTime + 2000;
  const nextTaskTime = messageTypingTime + 500;
  const offestTime = 1000;
  const deployCodeTime = 5000;

  let deployingCode = false;

  let semanticFailedAttempts = 0;

  let syntax_logicFailedAttempts = 0;

  let countLogicalErrors, countSemanticErrors, countSyntaxErrors;

  deployCode.click(() => {
    deployCode.addClass("hide");

    deployAnim.removeClass("hide");

    // codingHelpSideChat();

    $("html, body").animate(
      {
        scrollTop: deployAnim.offset().top - deployAnim.height(),
      },
      800
    );

    setTimeout(() => {
      deployAnim.addClass("hide");
      errorEncountered.removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: errorEncountered.offset().top - errorEncountered.height(),
        },
        800
      );

      codePreview.removeClass("hide");
    }, deployCodeTime);
  });

  runCodeBtn.click(() => {
    errorMsg.addClass("hide");
    $(".dropdown--open").removeClass("dropdown--open");

    checkErrors();

    if (allResolved()) {
      // $(".jsFailErrorList").addClass("hide");
      $(".jsFailSection").addClass("hide");

      $(".jsSuccessErrorList").removeClass("hide");

      runCodeBtn.addClass("hide");
      continueBtn.removeClass("hide");

      $(".jsDeployment .success--box").removeClass("hide");

      return $("html, body").animate(
        {
          scrollTop: $(".jsDeployment .success--box").offset().top - $(".jsDeployment .success--box").height(),
        },
        800
      );
    } else {
      // count how many errors and what type of error
      let logicalErrors = solution.filter((item) => item.type === "logical");
      countLogicalErrors = logicalErrors.filter((item) => !item.resolved).length;

      let syntaxErrors = solution.filter((item) => item.type === "syntax");
      countSyntaxErrors = syntaxErrors.filter((item) => !item.resolved).length;

      let semanticErrors = solution.filter((item) => item.type === "semantic");
      countSemanticErrors = semanticErrors.filter((item) => !item.resolved).length;
    }

    if (countSemanticErrors === 0) {
      $(".jsFailErrorList .jsSemanticError .jsNumber").remove();

      semanticErrorBtn.parent().removeClass("step-5__activity--step-2-error-fail");

      semanticErrorBtn.parent().addClass("step-5__activity--step-2-error-success");
      $(".jsFailErrorList .jsSemanticError").addClass("disabled");

      $(".jsFailErrorList .jsSemanticError .dropdown").remove();
    } else {
      $(".jsFailErrorList .jsSemanticError .jsNumber").text(countSemanticErrors);
    }

    if (countSyntaxErrors === 0) {
      $(".jsFailErrorList .jsSyntaxError .jsNumber").remove();

      syntaxErrorBtn.parent().removeClass("step-5__activity--step-2-error-fail");
      syntaxErrorBtn.parent().addClass("step-5__activity--step-2-error-success");
      $(".jsFailErrorList .jsSyntaxError").addClass("disabled");

      $(".jsFailErrorList .jsSyntaxError .dropdown").remove();
    } else {
      $(".jsFailErrorList .jsSyntaxError .jsNumber").text(countSyntaxErrors);
    }

    if (countLogicalErrors === 0) {
      $(".jsFailErrorList .jsLogicError .jsNumber").remove();
      logicErrorBtn.parent().removeClass("step-5__activity--step-2-error-fail");

      logicErrorBtn.parent().addClass("step-5__activity--step-2-error-success");
      $(".jsFailErrorList .jsLogicError").addClass("disabled");

      $(".jsFailErrorList .jsLogicError .dropdown").remove();
    } else {
      $(".jsFailErrorList .jsLogicError .jsNumber").text(countLogicalErrors);
    }

    if (countLogicalErrors !== 0 || countSyntaxErrors !== 0) {
      syntax_logicFailedAttempts += 1;
      syntax_logicFailedAttempts == 1 ? first_error_msg() : null;
      syntax_logicFailedAttempts == 2 ? second_error_msg() : null;
      //syntax_logicFailedAttempts > 2 ? syntax_logic_help() : null;
    }

    $(".jsFailErrorList").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".jsFailErrorList").offset().top - $(".jsFailErrorList").height() * 6,
      },
      800
    );
  });

  logicErrorBtn.click(() => {
    semanticErrorBtn.children(".dropdown").removeClass("dropdown--open");
    syntaxErrorBtn.children(".dropdown").removeClass("dropdown--open");
    if (logicErrorBtn.children(".dropdown").hasClass(dropDownOpen)) {
      logicErrorBtn.children(".dropdown").removeClass("dropdown--open");

      errorMsg.addClass("hide");
    } else {
      logicErrorBtn.parent().addClass("step-5__activity--step-2-error-fail");
      logicErrorBtn.children(".dropdown").addClass("dropdown--open");

      errorMsg.removeClass("hide");

      errorMsg.empty();

      errorMsg.append(`<p>A logic error is when incorrect logical operators cause the program written to do something other than what was intended.<br /><br />In this example, the logic error is related to the missing confidence value (and operator) in the code.<br /><br />Think about what mathematical operator symbolises ‘less than’ and remember, the format of the code you input into the code editor is important.<br /><br />Individual entries should be separated by a space, except for the last entry, where it should be finished with a colon.<p/>`);
    }
  });

  syntaxErrorBtn.click(() => {
    semanticErrorBtn.children(".dropdown").removeClass("dropdown--open");
    logicErrorBtn.children(".dropdown").removeClass("dropdown--open");
    if (syntaxErrorBtn.children(".dropdown").hasClass(dropDownOpen)) {
      syntaxErrorBtn.children(".dropdown").removeClass("dropdown--open");

      errorMsg.addClass("hide");
    } else {
      syntaxErrorBtn.parent().addClass("step-5__activity--step-2-error-fail");
      syntaxErrorBtn.children(".dropdown").addClass("dropdown--open");

      errorMsg.removeClass("hide");

      errorMsg.empty();

      errorMsg.append(`<p>In programming, syntax means the rules that control the structure of the symbols, punctuation, and words. <br /><br />In this example, the syntax errors are simply spelling mistakes.<p/>`);
    }
  });

  semanticErrorBtn.click(() => {
    syntaxErrorBtn.children(".dropdown").removeClass("dropdown--open");
    logicErrorBtn.children(".dropdown").removeClass("dropdown--open");
    if (semanticErrorBtn.children(".dropdown").hasClass(dropDownOpen)) {
      semanticErrorBtn.children(".dropdown").removeClass("dropdown--open");

      errorMsg.addClass("hide");
    } else {
      semanticErrorBtn.parent().addClass("step-5__activity--step-2-error-fail");
      semanticErrorBtn.children(".dropdown").addClass("dropdown--open");

      errorMsg.removeClass("hide");

      errorMsg.empty();
      errorMsg.append(
        `<p>Semantics is concerned with meaning.<br /><br />

        In this example, the semantic errors relate to parts of the code that are missing.<br /><br />
        
        Chat with your chatbot prototype to help you find and replace the missing code!<br /><br />
        
        Remember, the format of the code you input into the code editor is important. Make sure it follows the same structure.</p><p><button class="jsIted btn btn-white"> Check prototype <button> <p/>`
      );

      $(".jsIted").click(openChatbot);
    }
  });

  const solution = [
    {
      id: 1,
      code: "if confidence < 70:",
      resolved: false,
      type: "logical",
    },
    {
      id: 2,
      code: `elif answerclass == "Waste":`,
      resolved: false,
      type: "syntax",
    },
    {
      id: 3,
      code: `elif answerclass == "Water":`,
      resolved: false,
      type: "syntax",
    },
    {
      id: 4,
      code: `print "Ride a bike for journeys you would normally drive. Live car free. Carpool with people you work with. Use an electric or hybrid powered vehicle. Use green buses and trams. If you need to purchase a car, make sure it has low emissions."`,
      resolved: false,
      type: "semantic",
    },
    {
      id: 5,
      condition: `elif answerclass == "Fashion":`,
      code: `print "Shop less. Have a clothes swap party. Sell old clothes on eBay and Gumtree. Give old clothes to charity. Buy second-hand clothes. Fix tears with stitching or patch over holes."`,
      resolved: false,
      type: "semantic",
    },
  ];

  function checkErrors() {
    // 1st error
    if (
      document.querySelector(".jsConfidence").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[0].code.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      solution[0].resolved = true;
      $(".jsConfidence").removeClass(highlightClass);
      $(".jsConfidence").addClass(completeClass);
    } else {
      $(".jsConfidence").removeClass(completeClass);
      $(".jsConfidence").addClass(highlightClass);
    }

    // 2nd error
    if (
      document.querySelector(".jsWaste").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[1].code.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      solution[1].resolved = true;
      $(".jsWaste").removeClass(highlightClass);
      $(".jsWaste").addClass(completeClass);
    } else {
      $(".jsWaste").removeClass(completeClass);
      $(".jsWaste").addClass(highlightClass);
    }

    // 3rd error
    if (
      document.querySelector(".jsWater").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[2].code.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      solution[2].resolved = true;
      $(".jsWater").removeClass(highlightClass);
      $(".jsWater").addClass(completeClass);
    } else {
      $(".jsWater").removeClass(completeClass);
      $(".jsWater").addClass(highlightClass);
    }
    // 4th error
    if (
      document.querySelector(".jsTravel").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[3].code.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      solution[3].resolved = true;
      $(".jsTravel").removeClass(highlightClass);
      $(".jsTravel").addClass(completeClass);
    } else {
      $(".jsTravel").removeClass(completeClass);
      $(".jsTravel").addClass(highlightClass);
    }

    // 5th error condition
    if (
      document.querySelector(".jsFashionCondition").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[4].condition.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      $(".jsFashionCondition").removeClass(highlightClass);
      $(".jsFashionCondition").addClass(completeClass);
    } else {
      $(".jsFashionCondition").removeClass(completeClass);
      $(".jsFashionCondition").addClass(highlightClass);
    }

    // 5th error statement
    if (
      document.querySelector(".jsFashionStatement").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[4].code.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      $(".jsFashionStatement").removeClass(highlightClass);
      $(".jsFashionStatement").addClass(completeClass);
    } else {
      $(".jsFashionStatement").removeClass(completeClass);
      $(".jsFashionStatement").addClass(highlightClass);
    }

    // 5th error resolved
    if (
      document.querySelector(".jsFashionStatement").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
        solution[4].code.replace(/\s+/g, " ").trim().toLowerCase() &&
      document.querySelector(".jsFashionCondition").textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
        solution[4].condition.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      solution[4].resolved = true;
    }
  }

  function allResolved() {
    return solution.filter((item) => item.resolved).length > 4;
  }

  function prettyCode(e) {
    let codeLine = e.target.textContent
      .trim()
      .split(" ")
      .filter((item) => {
        return item !== "";
      });

    // codeLine = e.target.textContent.replace("", )

    let finalCode = [];

    if (codeLine[0]?.toLowerCase() === "print") {
      for (x = 0; x < codeLine.length; x++) {
        let word;
        if (x === 0) {
          word = `<span class="code--gold">print</span>`;
        } else {
          word = ` ${codeLine[x]}`;
        }
        finalCode.push(word);
      }
    } else if (codeLine[0]?.toLowerCase() === "if" || codeLine[0]?.toLowerCase() === "elif") {
      for (x = 0; x < codeLine.length; x++) {
        let word;
        if (x === 0) {
          word = `<span class="code--gold">${codeLine[0]}</span>`;
        } else if (x === 1) {
          word = `<span class="code--green"> ${codeLine[1]}</span>`;
        } else if (x === 2) {
          word = `<span class="code--orange"> ${codeLine[2]} </span>`;
        } else {
          word = `${codeLine[x]}`;
        }
        finalCode.push(word);
      }
    } else {
      for (x = 0; x < codeLine.length; x++) {
        let word;
        word = ` ${codeLine[x]}`;
        finalCode.push(word);
      }
    }

    $(e.target).html(finalCode);
  }

  const chatBotIcon = `
    <span class="chatbot--user-icon">
            <img
                src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg"
                alt="Chatbot icon"
                />
    </span>
    `;
  const ecoBotIcon = `
    <span class="chatbot--user-icon">
            <img
                src="/badge-assets/chatbots/_global/svg/icon--chatbot-rule-based.svg"
                alt="Chatbot icon"
                />
    </span>
    `;

  const msgTyping = $(`
    <div class="jsMsgTyping chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>...</p>
    </div>`);
  const ecoTyping = $(`
    <div class="jsMsgTyping chatbot__middle--entry chatbot__middle--entry-left">
        ${ecoBotIcon}
        <p>...</p>
    </div>`);

  const helpMessages = [
    {
      id: 1,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Sorry, I don't understand. I am an eco-chatbot, please can you ask me something to do
                with waste, food, energy, travel or fashion.</p>
            </div>`,
    },
    {
      id: 2,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Use glass jars. Use a bag for life. Bring your own cup. Compost your food waste. Use metal or bamboo straws. Avoid single-use food and drink containers.</p>
            </div>`,
    },
    {
      id: 3,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Adopt a plant based diet. Buy unpackaged food where possible. Support local shops. Reduce the amount you waste. Buy organic produce. Check labels to make sure they meet credible standards.</p>
            </div>`,
    },
    {
      id: 4,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Set a goal to reduce consumption. Purchase energy A rated products. Turn technology off at the plug overnight. Use solar powered devices. Wash clothes at a low temperature. Use LED lights.</p>
            </div>`,
    },
    {
      id: 5,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Shower instead of bathing. Drink from tap water instead of bottled water. Fix water leaks promptly. Only use the washing machine or dishwasher with a full load. Use a water can in the garden instead of a hose. Don’t waste water by leaving the tap on when you brush your teeth.</p>
            </div>`,
    },
    {
      id: 6,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Carpool with people you work with.</p>
            </div>`,
    },
    {
      id: 7,
      msg: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
                ${chatBotIcon}
                <p>Shop less. Have a clothes swap party. Sell old clothes on eBay and Gumtree. Give old clothes to charity.
                Buy second-hand clothes. Fix tears with stitching or patch over holes.</p>
            </div>`,
    },
  ];

  const scrollToBottomSideChat = () => {
    $(".jsStep .chatbot__middle")[0].scrollTop = $(".jsStep .chatbot__middle")[0].scrollHeight;
  };
  const scrollToBottomEcoChat = () => {
    $(".jsStep .jsEcoBot .chatbot__middle")[0].scrollTop = $(".jsStep .jsEcoBot .chatbot__middle")[0].scrollHeight;
  };

  const responses = [
    {
      id: 1,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${ecoBotIcon}
              <p>Hello, would you like to know anything about being eco-friendly? Ask me anything to do with waste, food, energy, water, travel and fashion.</p>
            </div>`,
    },
    {
      id: 2,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${ecoBotIcon}
              <p>Ride a bike for journeys you would normally drive. Live car free. Carpool with people you work with. Use an electric or hybrid powered vehicle. Use green buses and trams. If you need to purchase a car, make sure it has low emissions.</p>
            </div>`,
    },
    {
      id: 3,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${ecoBotIcon}
              <p>Shop less. Have a clothes swap party. Sell old clothes on eBay and Gumtree. Give old clothes to charity. Buy second-hand clothes. Fix tears with stitching or patch over holes.</p>
            </div>`,
    },
    {
      id: 4,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${ecoBotIcon}
              <p>Think back to the questions you asked when you tested me in step 1, to see eco tips on Travel and Fashion simply ask me a question.</p>
            </div>`,
    },
    {
      id: 5,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${ecoBotIcon}
              <p>Sorry, I don't understand. I am an eco-chatbot. You can ask me anything to do with
              <strong>energy</strong>,
              <strong>food</strong>,
              <strong>waste</strong>,
              <strong>water</strong>,
              <strong>travel</strong>, or
              <strong>fashion</strong></p>
            </div>`,
    },
    {
      id: 6,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${chatBotIcon}
              <p>Hello ${localStorage.userName}, do you need help? Please click yes or no.<br />
              <button class="jsYes chatbot__middle--help-options">
                  Yes
              </button>
              <button class="jsNo chatbot__middle--help-options">
                  No
              </button>
            </div>`,
    },
    {
      id: 7,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
              ${chatBotIcon}
              <p>Okay</p>
            </div>`,
    },
    {
      id: 8,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
      ${chatBotIcon}
      <p>To complete this section, you will need to start by testing your chatbot and then edit your eco-chatbot program post deployment by reading the on-screen instructions as guidance.</p>
      </div>`,
    },
    {
      id: 9,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
      ${chatBotIcon}
      <p>Would you like help with the logic or syntax errors? Please click yes or no.<br />
      <button class="jsYes1 chatbot__middle--help-options">
      Yes
      </button>
      <button class="jsNo chatbot__middle--help-options">
      No
      </button>
      </p>
      </div>`,
    },
    {
      id: 10,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
      ${chatBotIcon}
      <p>Which error would you like help with?<br />
      <button class="jsLogic chatbot__middle--help-options">
      LOGIC
      </button>
      <button class="jsSyntax chatbot__middle--help-options">
      SYNTAX
      </button>
      </p>
      </div>`,
    },
    {
      id: 11,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>The logic error is caused by missing code that should say: if confidence is less than 70:</p>
      </div>`,
    },
    {
      id: 12,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>Think about what mathematical operator is used to symbolise ‘less than’.</p>
      </div>`,
    },
    {
      id: 13,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>Remember, the format of the code you input into the coding editor is important. Individual entries should be separated by a space, except for the last entry where it should be finished with a colon.</p>
      </div>`,
    },
    {
      id: 14,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>The first syntax error highlighted in the coding editor, can be located in the code associated with eco tips on waste.</p>
      </div>`,
    },
    {
      id: 15,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>The second syntax error highlighted in the coding editor, can be located in code associated with eco tips on water.</p>
      </div>`,
    },
    {
      id: 16,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>Shower instead of bathing. Drink from tap water instead of bottled water. Fix water leaks promptly. Use low flow toilets. Keep water in jug in the fridge so you don't run tap to cool. Steam vegetables rather than boiling.</p>
      </div>`,
    },
    {
      id: 17,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>Set goal to reduce consumption. Purchase energy A rated products. Turn technology off at the plug overnights. Dry clothes on the clothesline, not in the dryer. Insulate your home. Use LED, self-turn off and motion activated lighting.</p>
      </div>`,
    },
    {
      id: 18,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>Vegan/plant based diet. Buy organic. Support local shops. Meat free diet. Reduce food waste. Eat unprocessed/unpackaged food where possible.</p>
      </div>`,
    },
    {
      id: 19,
      text: `<div class="chatbot__middle--entry chatbot__middle--entry-left">
        ${chatBotIcon}
        <p>Use glass jars. Bring your own cup. Use metal straws. Use alternative energy sources. Use a bag for life. Grow your own greens.</p>
      </div>`,
    },
  ];

  const errorMessage = () => {
    // eco_chat_user_input.val("");

    semanticFailedAttempts > 2 ? ecoBotHelp(3) : ecoBotHelp(4);

    semanticFailedAttempts += 1;
  };

  const addMessage = (idx) => {
    side_chat_user_input.val("");

    $(".jsStep .jsSideChat .chatbot__middle").append(msgTyping);
    scrollToBottomSideChat();
    setTimeout(() => {
      $(".jsMsgTyping").remove();

      $(".jsStep .jsSideChat .chatbot__middle").append(`${responses[idx].text}`);
      scrollToBottomSideChat();

      let noBtn = $(".jsDeployingCode .jsNo");
      let yesBtn = $(".jsDeployingCode .jsYes");
      let yesBtn_1 = $(".jsDeployingCode .jsYes1");
      let logicHelp = $(".jsDeployingCode .jsLogic");
      let syntaxHelp = $(".jsDeployingCode .jsSyntax");

      noBtn.off("click");
      yesBtn.off("click");
      yesBtn_1.off("click");
      logicHelp.off("click");
      syntaxHelp.off("click");

      noBtn.click(() => {
        no_repsonse();
      });

      yesBtn.click(() => {
        yes_response();
      });
      yesBtn_1.click(() => {
        addMessage(9);
      });
      logicHelp.click(() => {
        logic_response();
      });
      syntaxHelp.click(() => {
        syntax_response();
      });
    }, messageTypingTime);
  };

  const ecoBotHelp = (idx) => {
    $(".jsStep .jsEcoBot .chatbot__middle").append(ecoTyping);

    scrollToBottomEcoChat();
    setTimeout(() => {
      $(".jsMsgTyping").remove();

      $(".jsStep .jsEcoBot .chatbot__middle").append(`${responses[idx].text}`);
      scrollToBottomEcoChat();
      $(`.jsEcoBot #user-input`).prop("disabled", false);
    }, messageTypingTime);
  };

  let chatBotOpened = false;
  function openChatbot() {
    $(".jsStep .jsEcoBot.overlay").toggleClass("closed");
    $(".jsStep .jsEcoBot.overlay").css("z-index",0);
    // $(".jsStep .chatbot__middle").empty();
    //$(`.jsEcoBot #user-input`).prop("disabled", true);

    chatBotOpened = true;

    ecoBotHelp(0);
  }

  function first_error_msg() {
    $('.first_error_msg').toggleClass('hide');
  }
  function second_error_msg() {
    $('.second_error_msg').toggleClass('hide');
  }


  function syntax_logic_help() {
    $(`.jsSideChat #user-input`).prop("disabled", true);

    $(".jsStep .chatbot__toggle--icon").addClass("jsDeployingCode");
    sideChatOverlay.addClass("jsDeployingCode");

    sideChatOverlay.removeClass("closed");

    // $(".jsStep .chatbot__middle").empty();

    acronym = localStorage.acronym;
    initials = `<span class='initials'>${acronym}</span>`;
    userName = localStorage.userName;

    addMessage(5);
  }

  const userMessageTranscations = () => {
    // if (chatBotOpened) {
    acronym = localStorage.acronym;
    initials = `<span class='initials'>${acronym}</span>`;

    userMessage = eco_chat_user_input.val();
    $(`.jsEcoBot #user-input`).prop("disabled", true);

    eco_chat_user_input.val("").change();
    eco_chat_user_input.html("");
    console.log(eco_chat_user_input.val());

    let message = `
                  <div class="chatbot__middle--entry chatbot__middle--entry-right">
                      <p>${userMessage}</p>
                      ${initials}
                  </div>`;

    $(".jsStep .jsEcoBot .chatbot__middle").append(`${message}`);

    if (!userMessage.includes("?") || userMessage.split(" ").length < 3) {
      errorMessage();
    } else if (userMessage.toLowerCase().includes("travel")) {
      // addMessage(1);
      ecoBotHelp(1);
    } else if (userMessage.toLowerCase().includes("fashion")) {
      ecoBotHelp(2);
    } else if (userMessage.toLowerCase().includes("water")) {
      ecoBotHelp(15);
    } else if (userMessage.toLowerCase().includes("energy")) {
      ecoBotHelp(16);
    } else if (userMessage.toLowerCase().includes("food")) {
      ecoBotHelp(17);
    } else if (userMessage.toLowerCase().includes("waste")) {
      ecoBotHelp(18);
    } else {
      errorMessage();
    }
    // }
  };

  side_chat_send_message.click(userMessageTranscations);

  sideChatCloseBtn.click(() => {
    chatBotOpened = false;
    sideChatOverlay.addClass("closed");
    $(`.jsSideChat #user-input`).prop("disabled", false);
  });
  ecoBotCloseBtn.click(() => {
    chatBotOpened = false;
    ecoBotOverlay.addClass("closed");
  });

  eco_chat_send_message.click(() => {
    if (eco_chat_user_input.val() !== "") userMessageTranscations();
  });

  $(document).on("keypress", function (e) {
    if (!$(".jsEcoBot.overlay").hasClass("closed")) {
      if (e.which == 13) {
        e.preventDefault();
        if (eco_chat_user_input.val() !== "") userMessageTranscations();
      }
    }
  });

  const no_repsonse = () => {
    addMessage(6);

    setTimeout(() => {
      sideChatOverlay.toggleClass("closed");
    }, nextTaskTime + offestTime);
  };

  const yes_response = () => {
    addMessage(7);

    setTimeout(() => {
      addMessage(8);
    }, nextMessageTime);
  };

  const logic_response = () => {
    addMessage(10);

    setTimeout(() => {
      addMessage(11);
    }, nextMessageTime);

    setTimeout(() => {
      addMessage(12);
    }, nextMessageTime + nextMessageTime);
  };

  const syntax_response = () => {
    addMessage(13);

    setTimeout(() => {
      addMessage(14);
    }, nextMessageTime);
  };

  // const codingHelpSideChat = () => {
  //   deployingCode = true;

  //   $(".jsStep .chatbot__toggle--icon").addClass("jsDeployingCode");
  //   sideChatOverlay.addClass("jsDeployingCode");

  //   $(".jsStep .chatbot__toggle--icon.jsDeployingCode").click(() => {
  //     sideChatOverlay.toggleClass("closed");

  //     acronym = localStorage.acronym;
  //     initials = `<span class='initials'>${acronym}</span>`;
  //     userName = localStorage.userName;

  //     addMessage(5);
  //   });
  // };

  $(".jsConfidence").focusout((e) => {
    prettyCode(e);
  });

  $(".jsWaste").focusout((e) => {
    prettyCode(e);
  });

  $(".jsWater").focusout((e) => {
    prettyCode(e);
  });

  $(".jsTravel").focusout(prettyCode);
  $(".jsFashionCondition").focusout(prettyCode);
  $(".jsFashionStatement").focusout(prettyCode);
});
