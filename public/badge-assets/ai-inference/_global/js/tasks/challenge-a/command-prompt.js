const solution = [
  {
    id: 0,
    command: `Git clone https://github.com/openvinotoolkit/openvino_notebooks.git`,
    response: [
      `Cloning into ‘openvino_notebooks’ …`,
      `Remote: Enumerating objects: 534, done.`,
      `Remote: counting objects: 100% (105/105), done.`,
      `Remote: Compressing objects: 100% (87/87), done.`,
      `Receiving objects: 97% (518/534), 143.97 MiB | 2.35 MiB/seused 429Receiving objects: 92% (492/534), 143.97 MiB | 2.35 MiB/s`,
      `Receiving objects: 100% (534/534), 144.55 MiB | 2.45 MiB/s, done.`,
      `Resolving deltas: 100% (226/226), done.`,
      `Updating files: 100% (111/111), done.`,
    ],
    next: `C:\\Users\\yourdirectory>`,
  },
  {
    id: 1,
    command: "cd openvino_notebooks",
    response: [],
    next: `C:\\Users\\yourdirectory\\openvino_notebooks>`,
  },
  {
    id: 2,
    command: "source openvino_env\\Scripts\\activate",
    response: [],
    next: `<span class="t-bg-green">(openvino_env)</span> C:\\Users\\userdirectory\\openvino_notebooks>`,
  },
  {
    id: 2,
    command: "check_install",
    response: ["Successfully installed."],
    next: ``,
  },
];

const addCMDResponse = (command_id, id) => {
  $(".jsCMDWindow .command-prompt__content").append(solution[command_id].response[id] + "<br>");
};

const updateClueText = () => {
  $(".jsStep1").text(`${solution[command_id].command}`);
};

var command_id = 0;

var input_field = "";

$(".jsCMDWindow").keydown((e) => {
  if (e.which === 13) {
    e.preventDefault();

    input_field = `.jsCMDWindow .jsContent_${command_id}`;
    $(input_field).blur();
    if (
      document.querySelector(input_field).textContent.replace(/\s+/g, " ").trim().toLowerCase() ===
      solution[command_id].command.replace(/\s+/g, " ").trim().toLowerCase()
    ) {
      $(".jsStep1").addClass("code-sample--green");
      $(input_field).prop("contenteditable", false);
      var id = 0;
      var timer = setInterval(() => {
        solution[command_id].response.length != 0 ? addCMDResponse(command_id, id) : null;
        $(".jsCMDWindow .command-prompt__content")[0].scrollTop = $(".jsCMDWindow .command-prompt__content")[0].scrollHeight;

        id += 1;
        if (id >= solution[command_id].response.length - 1) {
          $(".jsCMDWindow .command-prompt__content").append(`
                    <div class="command-prompt__content__top">
                      <span>${solution[command_id].next}</span>
                      <span class="jsContent_${command_id + 1} content-to-edit" contenteditable="false"></span>
                    </div>`);
          $(".jsCMDWindow .command-prompt__content")[0].scrollTop = $(".jsCMDWindow .command-prompt__content")[0].scrollHeight;

          $(".jsContinue").removeClass("hide");
          // function "nextStep" handles the code from here
          clearInterval(timer);
        }
      }, 100);
    } else {
      $(".jsStep1").addClass("code-sample--red");
      $(".jsCodeIncorrect").removeClass("hide");
    }
  }
});

const tryAgain = () => {
  $(`${input_field}`).text("");
  $(".jsStep1").removeClass("code-sample--green");
  $(".jsStep1").removeClass("code-sample--red");
  $(".jsStep1").removeClass("code-sample--grey");
  $(".jsCodeIncorrect").addClass("hide");
};
