Vue.component("activity2", {
    name: "activity2",
    props: [""],
    data() {
        return {
            //value: "Some string data youyu",
            correctClass: "step-4__activity--step-2-success",
            wrongClass: "step-4__activity--step-2-fail",
            options: {
                //a: "...",
                b: "water",
                c: "food",
                d: "energy",
                f: "travel",
                g: "fashion",
                h: "waste",
            },
            answer: ["waste", "food", "energy", "water", "travel", "fashion"],
            userInput: [],
            checked: false,
            answer_1: false,
            answer_2: false,
            answer_3: false,
            answer_4: false,
            answer_5: false,
            answer_6: false,
            buttonText: "check",
        };
    },
    methods: {
        addOption(number, e) {
            //console.log(number);
            //console.log(e);
            //console.log("e", e.target.value);
            // console.log(selected);

            //this.userInput.length = 0;
            //console.log("before user input: " + this.userInput);
            this.userInput[number] = e.target.value;
            //console.log("after user input: " + this.userInput);
        },
        checkAnswers() {
            //console.log("check answer...");
            //console.log(this.userInput);
            this.checked = true;
            //console.log("banding luar");
            //console.log(this.userInput[0], this.answer[0]);
            for (var i = 0; i < this.answer.length; i++) {
                //console.log("banding");
                //console.log("--");
                //console.log(this.userInput[i], this.answer[i]);
                // this.answer_[i+1] = this.userInput[i] === this.answer[i];
                if (i === 0) {
                    this.answer_1 = this.userInput[0] === this.answer[0];
                }
                if (i === 1) {
                    this.answer_2 = this.userInput[1] === this.answer[1];
                }
                if (i === 2) {
                    this.answer_3 = this.userInput[2] === this.answer[2];
                }
                if (i === 3) {
                    this.answer_4 = this.userInput[3] === this.answer[3];
                }
                if (i === 4) {
                    this.answer_5 = this.userInput[4] === this.answer[4];
                }
                if (i === 5) {
                    this.answer_6 = this.userInput[5] === this.answer[5];
                }
                //console.log("this.answer_1: " + this.answer_1);
                //console.log("this.answer_2: " + this.answer_2);
                //console.log("this.answer_3: " + this.answer_3);
                //console.log("this.answer_4: " + this.answer_4);
                //console.log("this.answer_5: " + this.answer_5);
                //console.log("this.answer_6: " + this.answer_6);

                if (this.hasError) {
                    this.buttonText = "TryAgain";
                    $(".errorMsg").removeClass('hide');
                } else {
                    $(".successMsg").removeClass('hide');
                    $(".errorMsg").addClass('hide');
                    this.buttonText = "Continue";
                }
            }
        },
        tryAgain() {
            //console.log("tryAgain function");
            this.checked = false;
            this.buttonText = "check";
            $(".errorMsg").addClass('hide');
        },

        nextActivity() {
            $(".jsStep3").removeClass("hide");

            this.buttonText = "";

            $("html, body").animate(
                {
                    scrollTop:
                        $(".step-4__activity--step-3-container").offset().top -
                        $(".step-4__activity--step-3-container").height(),
                },
                800
            );
        },
    },
    computed: {
        classes1: function () {
            var classes = [];

            if (this.isCorrect1) {
                classes.push(this.correctClass);
            } else {
                classes.push(this.wrongClass);
            }

            return classes;
        },
        classes2: function () {
            var classes = [];

            if (this.isCorrect2) {
                classes.push(this.correctClass);
            } else {
                classes.push(this.wrongClass);
            }

            return classes;
        },
        classes3: function () {
            var classes = [];

            if (this.isCorrect3) {
                classes.push(this.correctClass);
            } else {
                classes.push(this.wrongClass);
            }

            return classes;
        },
        classes4: function () {
            var classes = [];

            if (this.isCorrect4) {
                classes.push(this.correctClass);
            } else {
                classes.push(this.wrongClass);
            }

            return classes;
        },
        classes5: function () {
            var classes = [];

            if (this.isCorrect5) {
                classes.push(this.correctClass);
            } else {
                classes.push(this.wrongClass);
            }

            return classes;
        },
        classes6: function () {
            var classes = [];

            if (this.isCorrect6) {
                classes.push(this.correctClass);
            } else {
                classes.push(this.wrongClass);
            }

            return classes;
        },
        isCheck: function () {
            return this.checked === true;
        },
        isCorrect1: function () {
            //console.log("isCorrect1");
            //console.log(this.answer_1);

            return this.answer_1 === true;
        },
        isCorrect2: function () {
            //console.log("isCorrect2");
            return this.answer_2 === true;
        },
        isCorrect3: function () {
            //console.log("isCorrect3");
            return this.answer_3 === true;
        },
        isCorrect4: function () {
            //console.log("isCorrect4");
            return this.answer_4 === true;
        },
        isCorrect5: function () {
            //console.log("isCorrect5");
            return this.answer_5 === true;
        },
        isCorrect6: function () {
            //console.log("isCorrect6");
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
            //console.log(this.buttonText);
            if (this.buttonText === "check") {
                return "";
            } else {
                return " hide";
            }
        },
        buttonClassTry: function () {
            //console.log(this.buttonText);
            if (this.buttonText === "TryAgain") {
                return "";
            } else {
                return " hide";
            }
        },
        buttonClassContinue: function () {
            //console.log(this.buttonText);
            if (this.buttonText === "Continue") {
                return "";
            } else {
                return " hide";
            }
        },
        isContinue: function () {
            //console.log(this.buttonText);
            if (this.buttonText === "Continue") {
                return "";
            } else {
                return " hide";
            }
        },
    },
    template: `
          <div class="container__large">
            <div class="container__small">
              <div class="activity__grey--container" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="150">
                <div class="activity__grey--counter">Step 2</div>
                <h3 class="heading-orange">
                  Intelligence<br /> Design
                </h3>

                <p>
                    Now you’re going to start designing your chatbot’s intelligence.
                </p>

                <p>
                Your chatbot will need to know about the sorts of questions the users will be asking it. 
                </p>
                
                <p>
                Each of the example questions below are related to one of the six categories that your chatbot is going to provide advice about. 
                </p>
                
                <div>
                  <div class="step-4__activity--step-2-select-container">
                    <p :class="isCheck || isCorrect1 ? classes1 : '' ">
                      How can I contribute to the UN's zero
                      <label for="step-4--answer-1">
                              <span class="select-wrapper inline">
                                <select id="step-4--answer-1" class="inline" @change="addOption(0, $event)">
                                  <option value="" disabled selected>...</option>
                                  <option value="Option 1" v-for="(option, key) in options" :value="option"
                                  >{{option}}</option>
                                </select>
                              </span>
                      </label>
                      initiative?
                    </p>

                    <p :class="isCheck || isCorrect2 ? classes2 : '' ">
                      How can I help preserve
                      <label for="step-4--answer-2">
                              <span class="select-wrapper inline">
                                <select id="step-4--answer-2" class="inline" @change="addOption(1, $event)">
                                  <option value="" disabled selected>...</option>
                                  <option value="Option 1" v-for="(option, key) in options" :value="option"
                                  >{{option}}</option>
                                </select>
                              </span>
                      </label>
                      resources for future generations?
                    </p>

                    <p :class="isCheck || isCorrect3 ? classes3 : '' ">
                      How can I reduce my
                      <label for="step-4--answer-3">
                              <span class="select-wrapper inline">
                                <select id="step-4--answer-3" class="inline" @change="addOption(2, $event)">
                                  <option value="" disabled selected>...</option>
                                  <option value="Option 1" v-for="(option, key) in options" :value="option"
                                  >{{option}}</option>
                                </select>
                              </span>
                      </label>
                      use?
                    </p>

                    <p :class="isCheck || isCorrect4 ? classes4 : '' ">
                      How can I use
                      <label for="step-4--answer-4">
                              <span class="select-wrapper inline">
                                <select id="step-4--answer-4" class="inline" @change="addOption(3, $event)">
                                  <option value="" disabled selected>...</option>
                                  <option value="Option 1" v-for="(option, key) in options" :value="option"
                                  >{{option}}</option>
                                </select>
                              </span>
                      </label>
                      better and help to ensure a clean, steady and safe flow?
                    </p>

                    <p :class="isCheck || isCorrect5 ? classes5 : '' ">
                      How can I reduce the amount of fossil fuels I use through the way I
                      <label for="step-4--answer-5">
                              <span class="select-wrapper inline">
                                <select id="step-4--answer-5" class="inline" @change="addOption(4, $event)">
                                  <option value="" disabled selected>...</option>
                                  <option value="Option 1" v-for="(option, key) in options" :value="option"
                                  >{{option}}</option>
                                </select>
                              </span>
                      </label>
                      ?
                    </p>

                    <!--     the class above will automatically hide the input and show the wrong answer indicator - to be used when the user presses 'check', and there are wrong answers -->

                    <p :class="isCheck || isCorrect6 ? classes6 : '' ">
                      How can I reduce greenhouse gases and global waste through
                      <label for="step-4--answer-6">
                              <span class="select-wrapper inline">
                                <select id="step-4--answer-6" class="inline" @change="addOption(5, $event)">
                                  <option value="" disabled selected>...</option>
                                  <option value="Option 1" v-for="(option, key) in options" :value="option"
                                  >{{option}}</option>
                                </select>
                              </span>
                      </label>
                      and the clothes I wear?
                    </p>
                  </div>

                  <div class="hide successMsg">
                    <p class="success--box">Well done! These are the sorts of questions that the chatbot will need to provide answers to. You’re ready to move on to the next step.
                    </p>
                  </div>

                    <div class="hide errorMsg">
                      <p class="fail--box">Sorry, that’s not quite right. Please have another go.</p>
                </div>

                  <button class="btn btn-orange centered" :class="buttonClassCheck" @click="checkAnswers">Check</button>
                  <button class="btn btn-orange centered" :class="buttonClassContinue" @click="nextActivity">Continue</button>
                  <button class="btn btn-orange centered" :class="buttonClassTry" @click="tryAgain">Try Again</button>
                </div>


              </div>
            </div>
          </div>
        `,
});
