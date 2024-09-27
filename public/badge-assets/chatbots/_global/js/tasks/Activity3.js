Vue.component("activity3", {
  props: [""],
  data() {
    return {
      //value: "Some string data youyu",
      correctClass: "step-4__activity--step-3-success-container",
      wrongClass: "step-4__activity--step-3-fail-container",
      correctButtonClass: "step-4__activity--eco-areas-button-success",
      wrongButtonClass: "step-4__activity--eco-areas-button-fail",
      options: {
        0: "water",
        1: "food",
        2: "energy",
        3: "travel",
        4: "fashion",
        5: "waste",
      },
      answer: ["fashion", "food", "energy", "water", "travel","waste"],
      userInput: {
        0: {
          answer: "",
          answered_status: false,
        },
        1: {
          answer: "",
          answered_status: false,
        },
        2: {
          answer: "",
          answered_status: false,
        },
        3: {
          answer: "",
          answered_status: false,
        },
        4: {
          answer: "",
          answered_status: false,
        },
        5: {
          answer: "",
          answered_status: false,
        },
      },
      wrongAnswers: 0,
      warnedFirst: false,
      checked: false,

      answer_1: false,
      answer_2: false,
      answer_3: false,
      answer_4: false,
      answer_5: false,
      answer_6: false,
      buttonText: "check",
      correctAnswer: false,
      onClick: "",
      hide1: false,
      hide2: true,
      hide3: true,
      hide4: true,
      hide5: true,
      hide6: true,

      hidewell1: false,
      hidewell2: true,
      hidewell3: true,
      hidewell4: true,
      hidewell5: true,
      hidewell6: true,
    };
  },
  computed: {
    hidden1: function () {
      var self = this;
      if (this.isCorrect1 && this.userInput[0].answer === this.answer[0] && this.userInput[0].answered_status === true) {
        self.hide1 = false;
        setTimeout(function () {
          self.hide1 = true;
          self.hidewell1 = true;
          // self.setCompletionOneQuestionMakeTrueHide('hide1');
        }, 2000);
      } else {
        setTimeout(function () {
          self.hide1 = false;
          self.hidewell1 = false;
          // self.setCompletionOneQuestionMakeTrueHide('hide1');
        }, 2000);
      }
    },
    hidden2: function () {
      var self = this;
      if (this.userInput[0].answer === this.answer[0] && this.userInput[0].answered_status === true && !this.isCorrect2) {
        this.hide2 = true;
        setTimeout(function () {
          self.hide2 = false;
        }, 2000);
      } else {
        setTimeout(function () {
          self.hide2 = true;
        }, 2000);
      }
    },
    hidden3: function () {
      var self = this;
      if (this.userInput[1].answer === this.answer[1] && this.userInput[1].answered_status === true && !this.isCorrect3) {
        //return '';
        this.hide3 = true;
        setTimeout(function () {
          self.hide3 = false;
        }, 2000);
      } else {
        // return ' hide';
        setTimeout(function () {
          self.hide3 = true;
        }, 2000);
      }
    },
    hidden4: function () {
      var self = this;
      if (this.userInput[2].answer === this.answer[2] && this.userInput[2].answered_status === true && !this.isCorrect4) {
        // return '';
        this.hide4 = true;
        setTimeout(function () {
          self.hide4 = false;
        }, 2000);
      } else {
        // return ' hide';
        setTimeout(function () {
          self.hide4 = true;
        }, 2000);
      }
    },
    hidden5: function () {
      var self = this;
      if (this.userInput[3].answer === this.answer[3] && this.userInput[3].answered_status === true && !this.isCorrect5) {
        // return '';
        this.hide5 = true;
        setTimeout(function () {
          self.hide5 = false;
        }, 2000);
      } else {
        // return ' hide';
        setTimeout(function () {
          self.hide5 = true;
        }, 2000);
      }
    },
    hidden6: function () {
      var self = this;
      if (this.userInput[4].answer === this.answer[4] && this.userInput[4].answered_status === true) {
        this.hide6 = true;
        setTimeout(function () {
          self.hide6 = false;
        }, 2000);

        return "";
      } else {
        setTimeout(function () {
          self.hide5 = true;
        }, 2000);

        return " hide";
      }
    },
    answered: function () {
      if (this.isCorrect1) {
        return " hide";
      } else {
        return "";
      }
    },
    classes1: function () {
      var classes = [];

      if (this.isCorrect1) {
        classes.push(this.correctClass);
      } else if (!this.isCorrect1 && this.onProgress === 0 && this.userInput[0].answer !== this.answer[0] && this.userInput[0].answered_status) {
        classes.push(this.wrongClass);
      }

      return classes;
    },
    buttonClasses1: function () {
      var classes = [];
      if (this.isCorrect1) {
        classes.push(this.correctButtonClass);
      }

      if (this.onClick === "fashion") {
        if (
          this.onProgress !== 0 &&
          this.userInput[this.onProgress].answered_status === true &&
          this.userInput[this.onProgress].answer !== this.answer[this.onProgress]
        ) {
          classes.push(this.wrongButtonClass);

          this.wrongAnswers += 1;
        } else if (this.userInput[0].answered_status === false) {
          classes = [];
        }
      }

      return classes;
    },
    buttonClasses2: function () {
      var classes = [];
      if (this.isCorrect2) {
        classes.push(this.correctButtonClass);
      }
      if (this.onClick === "food") {
        if (
          this.onProgress !== 1 &&
          this.userInput[this.onProgress].answered_status === true &&
          this.userInput[this.onProgress].answer !== this.answer[this.onProgress]
        ) {
          classes.push(this.wrongButtonClass);

          this.wrongAnswers += 1;
          console.log("wrong", this.wrongAnswers);
        } else if (this.userInput[1].answered_status === false) {
          classes = [];
        }
      }

      return classes;
    },
    buttonClasses3: function () {
      var classes = [];

      if (this.isCorrect3) {
        classes.push(this.correctButtonClass);
      }

      if (this.onClick === "energy") {
        if (
          this.onProgress !== 2 &&
          this.userInput[this.onProgress].answered_status === true &&
          this.userInput[this.onProgress].answer !== this.answer[this.onProgress]
        ) {
          classes.push(this.wrongButtonClass);

          this.wrongAnswers += 1;
        } else if (this.userInput[2].answered_status === false) {
          classes = [];
        }
      }

      return classes;
    },
    buttonClasses4: function () {
      var classes = [];
      if (this.isCorrect4) {
        classes.push(this.correctButtonClass);
      }
      if (this.onClick === "water") {
        if (
          this.onProgress !== 3 &&
          this.userInput[this.onProgress].answered_status === true &&
          this.userInput[this.onProgress].answer !== this.answer[this.onProgress]
        ) {
          classes.push(this.wrongButtonClass);

          this.wrongAnswers += 1;
        } else if (this.userInput[3].answered_status === false) {
          classes = [];
        }
      }

      return classes;
    },
    buttonClasses5: function () {
      var self = this;
      var classes = [];
      if (this.isCorrect5) {
        classes.push(this.correctButtonClass);
        setTimeout(function () {
          self.hide5 = true;
        }, 2000);
      }
      if (this.onClick === "travel") {
        if (
          this.onProgress !== 4 &&
          this.userInput[this.onProgress].answered_status === true &&
          this.userInput[this.onProgress].answer !== this.answer[this.onProgress]
        ) {
          classes.push(this.wrongButtonClass);

          this.wrongAnswers += 1;
        } else if (this.userInput[4].answered_status === false) {
          classes = [];
        }
      }

      return classes;
    },
    buttonClasses6: function () {
      var classes = [];
      if (this.isCorrect6) {
        classes.push(this.correctButtonClass);
      }
      if (this.onClick === "waste") {
        if (
          this.onProgress !== 5 &&
          this.userInput[this.onProgress].answered_status === true &&
          this.userInput[this.onProgress].answer !== this.answer[this.onProgress]
        ) {
          classes.push(this.wrongButtonClass);

          this.wrongAnswers += 1;
        } else if (this.userInput[5].answered_status === false) {
          classes = [];
        }
      }
      if (this.isCorrect6) {
        classes.push(this.correctButtonClass);
      }

      return classes;
    },
    classes2: function () {
      var classes = [];

      if (this.isCorrect2) {
        classes.push(this.correctClass);
      } else if (!this.isCorrect2 && this.onProgress === 1 && this.userInput[1].answer !== this.answer[1] && this.userInput[1].answered_status) {
        classes.push(this.wrongClass);
      }

      return classes;
    },
    classes3: function () {
      var classes = [];

      if (this.isCorrect3) {
        classes.push(this.correctClass);
      } else if (!this.isCorrect3 && this.onProgress === 2 && this.userInput[2].answer !== this.answer[2] && this.userInput[2].answered_status) {
        classes.push(this.wrongClass);
      }

      return classes;
    },
    classes4: function () {
      var classes = [];

      if (this.isCorrect4) {
        classes.push(this.correctClass);
      } else if (!this.isCorrect4 && this.onProgress === 3 && this.userInput[3].answer !== this.answer[3] && this.userInput[3].answered_status) {
        classes.push(this.wrongClass);
      }

      return classes;
    },
    classes5: function () {
      var classes = [];

      if (this.isCorrect5) {
        classes.push(this.correctClass);
      } else if (!this.isCorrect5 && this.onProgress === 4 && this.userInput[4].answer !== this.answer[4] && this.userInput[4].answered_status) {
        classes.push(this.wrongClass);
      }

      return classes;
    },
    classes6: function () {
      var classes = [];

      if (this.isCorrect6) {
        classes.push(this.correctClass);
      } else if (!this.isCorrect6 && this.onProgress === 5 && this.userInput[5].answer !== this.answer[5] && this.userInput[5].answered_status) {
        classes.push(this.wrongClass);
      }

      return classes;
    },
    isCheck: function () {
      return this.checked === true;
    },
    isCorrect1: function () {
      console.log("isCorrect1");
      console.log(this.answer_1);
      var self = this;
      this.hidewell1 = false;
      // self.hide1 = false;
      setTimeout(function () {
        // self.hide1 = true;
        self.hidewell1 = true;
      }, 2000);

      return this.answer_1 === true;
    },
    isCorrect2: function () {
      console.log("isCorrect2");
      var self = this;

      this.hidewell2 = false;
      setTimeout(function () {
        self.hidewell2 = true;
      }, 2000);

      return this.answer_2 === true;
    },
    isCorrect3: function () {
      console.log("isCorrect3");

      var self = this;

      this.hidewell3 = false;
      setTimeout(function () {
        self.hidewell3 = true;
      }, 2000);

      return this.answer_3 === true;
    },
    isCorrect4: function () {
      console.log("isCorrect4");

      var self = this;

      this.hidewell4 = false;
      setTimeout(function () {
        self.hidewell4 = true;
      }, 2000);

      return this.answer_4 === true;
    },
    isCorrect5: function () {
      console.log("isCorrect5");

      var self = this;

      this.hidewell5 = false;
      setTimeout(function () {
        self.hidewell5 = true;
      }, 2000);

      return this.answer_5 === true;
    },
    isCorrect6: function () {
      console.log("isCorrect6");

      var self = this;

      this.hidewell6 = false;
      setTimeout(function () {
        self.hidewell6 = true;
      }, 2000);

      return this.answer_6 === true;
    },
    hasError: function () {
      return (
        this.answer_1 === false ||
        this.answer_2 === false ||
        this.answer_3 === false ||
        this.answer_4 === false ||
        this.answer_5 === false ||
        this.answer_6 === false
      );
    },
    buttonClassCheck: function () {
      console.log(this.buttonText);
      if (this.buttonText === "check") {
        return "";
      } else {
        return " hide";
      }
    },
    buttonClassContinue: function () {
      console.log(this.buttonText);
      if (this.buttonText === "Continue") {
        return "";
      } else {
        return " hide";
      }
    },
    isContinue: function () {
      console.log(this.buttonText);
      if (this.buttonText === "Continue") {
        return "";
      } else {
        return " hide";
      }
    },
    onProgress: function () {
      var number = 0;
      for (var i = 0; i < 6; i++) {
        if (this.userInput[i].answered_status === true) {
          if (i === 0) {
            if (this.answer_1 === true) {
              number = i + 1;
            }
          }
          if (i === 1) {
            if (this.answer_2 === true) {
              number = i + 1;
            }
          }
          if (i === 2) {
            if (this.answer_3 === true) {
              number = i + 1;
            }
          }
          if (i === 3) {
            if (this.answer_4 === true) {
              number = i + 1;
            }
          }
          if (i === 4) {
            if (this.answer_5 === true) {
              number = i + 1;
            }
          }
          if (i === 5) {
            if (this.answer_6 === true && this.userInput[5].answered_status === true) {
              number = 5;
            }
            if (this.answer_6 === true && this.userInput[5].answered_status !== true) {
              number = i + 1;
            }
          }
        }
      }
      return number;
    },

    failedOnce: function () {
      console.log("first", this.wrongAnswers, this.userInput[0].answered_status);
      if (this.wrongAnswers === 1 && !this.warnedFirst) {
        // setTimeout(() => {
        //   return false;
        // }, 2000);

        return true;
      }
    },

    failedTwice: function () {
      if (this.wrongAnswers === 2) {
        setTimeout(() => {
          this.resetActivity;
        }, 2000);
        return true;
      }
    },

    resetActivity: function () {
      this.wrongAnswers = 0;
      this.warnedFirst = false;
      this.correctAnswer = false;

      this.onClick = "";

      this.answer_1 = false;
      this.answer_2 = false;
      this.answer_3 = false;
      this.answer_4 = false;
      this.answer_5 = false;
      this.answer_6 = false;

      this.hide1 = false;
      this.hide2 = true;
      this.hide3 = true;
      this.hide4 = true;
      this.hide5 = true;
      this.hide6 = true;

      console.log(this.userInput[0].answer);

      this.userInput[0].answer = "";
      this.userInput[0].answered_status = false;

      this.userInput[1].answer = "";
      this.userInput[1].answered_status = false;

      this.userInput[2].answer = "";
      this.userInput[2].answered_status = false;

      this.userInput[3].answer = "";
      this.userInput[3].answered_status = false;

      this.userInput[4].answer = "";
      this.userInput[4].answered_status = false;

      this.userInput[5].answer = "";
      this.userInput[5].answered_status = false;

      console.log(this.userInput[0].answer);
    },

    completionFinal: function () {
      if (this.hasError === false) {
        $(".jsStep4").removeClass("hide");

        return $("html, body").animate(
          {
            scrollTop:
              $(".step-4__activity--step-4-code-example-container").offset().top - $(".step-4__activity--step-4-code-example-container").height(),
          },
          800
        );
      }
    },
    completionOneQuestion: function () {
      return this.correctAnswer === true;
    },
    // nextActivity: function () {
    //     if (this.completionFinal) $(".jsStep4").removeClass("hide");
    // },
  },
  methods: {
    // completionOneQuestion: function (status){
    //     return status;
    // },
    // addOption(number, e) {

    setCompletionOneQuestionMakeTrueHide: function (hideCode) {
      if (hideCode === "hide1") {
        this.hide1 = true;
        this.hidewell1 = true;
      }
      if (hideCode === "hide2") {
        this.hide2 = true;
        this.hidewell2 = true;
      }
      if (hideCode === "hide3") {
        this.hide3 = true;
        this.hidewell3 = true;
      }
      if (hideCode === "hide4") {
        this.hide4 = true;
        this.hidewell4 = true;
      }
      if (hideCode === "hide5") {
        this.hide5 = true;
        this.hidewell5 = true;
      }
      if (hideCode === "hide6") {
        this.hide6 = true;
        this.hidewell6 = true;
      }
    },

    addOption(option) {
      this.onClick = option;
      var number = this.onProgress;
      console.log("addOption");
      console.log(option, number);
      console.log("before user input: ");
      console.log(this.userInput);
      this.userInput[number].answer = option;
      this.userInput[number].answered_status = true;
      console.log("after user input: ");
      console.log(this.userInput);
      this.wrongAnswers === 1 ? (this.warnedFirst = true) : null;
      //do check answer
      this.checkAnswers();
    },
    checkAnswers() {
      console.log("check answer...");
      console.log(this.userInput);
      this.checked = true;
      console.log("banding luar");
      console.log(this.userInput[0].answer, this.answer[0]);

      console.log("banding");
      console.log("--");
      // console.log( this.userInput[i].answer, this.answer[i]);
      // this.answer_[i+1] = this.userInput[i] === this.answer[i];
      // if (i === 0) {
      var self = this;
      if (this.userInput[0].answer) {
        this.answer_1 = this.userInput[0].answer === this.answer[0];
        if (this.answer_1 === true) {
          setTimeout(function () {
            self.hide1 = true;
            self.hide2 = false;
          }, 2000);
          this.correctAnswer = true;
        } else {
          this.correctAnswer = false;
        }
      }
      // }
      // if (i === 1) {
      if (this.userInput[1].answer) {
        this.answer_2 = this.userInput[1].answer === this.answer[1];

        if (this.answer_2 === true) {
          setTimeout(function () {
            self.hide2 = true;
            self.hide3 = false;
          }, 2000);
        }
      }

      // }
      // if (i === 2) {
      if (this.userInput[2].answer) {
        this.answer_3 = this.userInput[2].answer === this.answer[2];

        if (this.answer_3 === true) {
          setTimeout(function () {
            self.hide3 = true;
            self.hide4 = false;
          }, 2000);
        }
      }

      // }
      // if (i === 3) {
      if (this.userInput[3].answer) {
        this.answer_4 = this.userInput[3].answer === this.answer[3];

        if (this.answer_4 === true) {
          setTimeout(function () {
            self.hide4 = true;
            self.hide5 = false;
          }, 2000);
        }
      }

      // }
      // if (i === 4) {
      if (this.userInput[4].answer) {
        this.answer_5 = this.userInput[4].answer === this.answer[4];

        if (this.answer_5 === true) {
          setTimeout(function () {
            self.hide5 = true;
            self.hide6 = false;
          }, 2000);
        }
      }

      // }
      // if (i === 5) {
      if (this.userInput[5].answer) {
        this.answer_6 = this.userInput[5].answer === this.answer[5];
        //self.hide6 = true;
      }

      // }
      console.log("this.answer_1: " + this.answer_1);
      console.log("this.answer_2: " + this.answer_2);
      console.log("this.answer_3: " + this.answer_3);
      console.log("this.answer_4: " + this.answer_4);
      console.log("this.answer_5: " + this.answer_5);
      console.log("this.answer_6: " + this.answer_6);

      if (this.hasError) {
        this.buttonText = "TryAgain";
      } else {
        this.buttonText = "Continue";
      }
      // for (var i = 0; i < this.answer.length; i++){
      // }
    },
    tryAgain() {
      console.log("tryAgain function");
      this.checked = false;
      this.buttonText = "check";
    },
  },
  template: `
          <div class="container__large">
          <div class="container__small">
            <div class="activity__grey--container">
              <div class="activity__grey--counter">Step 3</div>
              <h3 class="heading-orange">
                Intelligence<br />
                Training
              </h3>
              <p>
                The tips below will form the answers that your chatbot can provide. They need to be categorised correctly. 
              </p>
              <p>Select the correct category to match the tips.</p>

              <!-- Question 1-->
              <!-- isCheck || isCorrect6 ? classes6 : '', -->
              <div 
                  class="step-4__activity--step-3-container"
                   :class="[classes6, hide6 === true ? ' hide' : '']">
                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Use glass jars.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Bring your own cup.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Use metal straws.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Use a bag for life.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Use alternative energy sources.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Grow your own greens.</p>
                </div>
              </div>

<!--              Question 2-->
              <div
                  class="step-4__activity--step-3-container"
                  :class="[classes2, hide2 === true ? ' hide' : '']"
              >
                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Vegan / plant based diet.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Buy organic.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Support local shops.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Meat free diet.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Reduce food waste.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>
                    Eat unprocessed / unpackaged food where
                    possible.
                  </p>
                </div>
              </div>

<!--              Question 3-->
              <div
                  class="step-4__activity--step-3-container"
                  :class="[classes3, hide3 === true ? ' hide' : '']"
              >
                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Set goal to reduce consumption.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Purchase energy A rated products.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Turn technology off at the plug overnight.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Dry clothes on the clothesline, not the dryer.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Insulate your home.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Use LED, Self-turn off & Motion activated lighting.</p>
                </div>
              </div>

<!--              Question 4-->
              <div
                  class="step-4__activity--step-3-container "
                  :class="[classes4, hide4 === true ? ' hide' : '']"
              >
                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Shower instead of bathing.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Drink from tap water instead of bottled water.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Fix water leaks promptly.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Use low flow toilets.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Keep water in jug in fridge so you don't run the tap to cool.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Steam vegetables rather than boiling.</p>
                </div>
              </div>

<!--            Question 5-->
              <div
                  class="step-4__activity--step-3-container"
                  :class="[classes5, hide5 === true ? ' hide' : '']"
              >
                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Ride a bike for journeys you would normally drive.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Live car free.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Carpool with people you work with.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Use an electric or hybrid powered vehicle.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Use green buses and trams.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>If you need to purchase a car, make sure it has low emissions.</p>
                </div>
              </div>

<!--          Question 6-->
              <div
                  class="step-4__activity--step-3-container"
                  :class="[classes1, hide1 === true ? ' hide' : '']"
              >
                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Shop less.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Have a clothes swap party.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Sell old clothes online.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>Give old clothes to charity.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-left-blue"
                >
                  <p>Buy second hand clothes.</p>
                </div>

                <div
                    class="step-4__activity--step-3-chat-entry step-4__activity--step-3-chat-entry-right-yellow"
                >
                  <p>
                    Fix tears with stitching or patch over
                    holes.
                  </p>
                </div>
              </div>

<!--              {{&#45;&#45;                        <div class="step-4__activity&#45;&#45;eco-areas-container" v-for="(option, key) in options">&#45;&#45;}}-->
              <div class="step-4__activity--eco-areas-container">
<!--                {{&#45;&#45;                            <button :id="key" :class="buttonClasses1" @click.prevent="addOption(option)">&#45;&#45;}}-->
<!--                {{&#45;&#45;                                <span>@{{ option }}</span>&#45;&#45;}}-->
<!--                {{&#45;&#45;                            </button>&#45;&#45;}}-->

                <button :class="buttonClasses4" @click.prevent="addOption('water')">
                  <span>Water</span>
                </button>

                <button :class="buttonClasses2" @click.prevent="addOption('food')">
                  <span>Food</span>
                </button>

                <button :class="buttonClasses3" @click.prevent="addOption('energy')">
                  <span>Energy</span>
                </button>

                <button :class="buttonClasses5" @click.prevent="addOption('travel')">
                  <span>Travel</span>
                </button>

                <button :class="buttonClasses1" @click.prevent="addOption('fashion')">
                  <span>Fashion</span>
                </button>

                <button :class="buttonClasses6" @click.prevent="addOption('waste')">
                  <span>Waste</span>
                </button>
              </div>
<!--              hide === true ? ' hide' : ''-->
              <p :class="completionOneQuestion === true && hidewell1 !== true ? 'success--box' : 'hide'"><strong>Great work!</strong> To help eliminate waste and protect the environment remember the three 'R's: Reduce, Reuse, and Recycle.</p>
              <p :class="completionOneQuestion === true && hidewell2 !== true ? 'success--box' : 'hide'"><strong>Well done!</strong> These are all great eco-tips on how changing the way we eat can help the environment.</p>
              <p :class="completionOneQuestion === true && hidewell3 !== true ? 'success--box' : 'hide'"><strong>That’s correct!</strong> These eco-tips are all ways in which we can reduce our energy consumption.</p>
              <p :class="completionOneQuestion === true && hidewell4 !== true ? 'success--box' : 'hide'"><strong>Yes that’s right!</strong> These are all ways in which we can save water.</p>
              <p :class="completionOneQuestion === true && hidewell5 !== true ? 'success--box' : 'hide'"><strong>Brilliant!</strong> Changing the way that we travel is one of the best things we can do for the environment.</p>
<!--              <p :class="completionOneQuestion === true && hidewell6 !== true ? 'success&#45;&#45;box' : 'hide'"><strong>Brilliant!</strong> These are all ways we can change our approach to fashion to reduce our carbon footprint. </p>-->

              <p :class="completionFinal ? 'success--box' : 'hide'">
                <strong>Well done!</strong> You have managed to
                successfully train the intelligence of your rule
                based chatbot correctly. 
              </p>
              <!-- Hassan fail messages -->
              <p :class="failedOnce ? 'fail--box' : 'hide'">
                Hmm, have another go. If you get it wrong again you’ll have to start again.
              </p>
              <p :class="failedTwice ? 'fail--box' : 'hide'">
                Sorry, that’s not quite right. You’ll have to start this task from the beginning. Try again.
              </p>
            </div>
            </div>
          </div>
        `,
});

// Setup the data for the to do list (and and attach to index.html)
