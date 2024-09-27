text_content_step_4_activity = [
  // {
  //   id: 1,
  //   code: `
  //           <p>
  //           Hello! I'm here to help you install OpenVINO.
  //           But before we dive in, we will first need to download
  //           <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip5_content">Git</span>.
  //           This gives us access to a git clone command we need,
  //           meaning that it will allow us to make a copy and
  //           download an existing Git repository onto our own
  //           computer for use.
  //           </p>
  //           <button class="btn btn--sm btn--blue mt-xs">Install Git</button>
  //       `,
  // },
  {
    id: 1,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Great, now let's install OpenVINO.
        Let’s open our command prompt. A command prompt is a command line interpreter used to execute commands that you enter into it.

        You will be asked to input some code into the command prompt. After you input the code, press 'enter' to submit your answer.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onClick="openCommandPrompt(event)">Open Command Prompt</button>
        `,
  },
  {
    id: 2,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Type or copy and paste the code below into the command prompt.

        When you are done, press ‘enter’ on your keyboard.
        </p>
        `,
  },
  {
    id: 3,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Next, enter the code below into the command prompt. 'cd' stands for change directory, which takes us to the directory called openvino_notebooks.
        </p>
        `,
  },
  {
    id: 4,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, enter the code below into the command prompt to activate the OpenVINO environment.
        </p>
        `,
  },
  {
    id: 5,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        The command highlighted in green activated the OpenVINO environment. When you have completed all of these steps, you can run a check_install command to check that there are no errors and that the installation is successful. Let’s give it a try. Enter:
        </p>
        `,
  },
  {
    id: 6,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now that you have successfully installed OpenVINO, let’s open the Integrated Development Environment (IDE) where you will experience entering and running Python code to execute the tasks given to you.
        </p>
        <button class="btn btn--xsm btn--yellow mt-xs" onclick="launchIDE()">Launch IDE</button>
        `,
  },
  {
    id: 6,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        The first thing to do is to import the Python modules. This means to load files containing functions and attributes that we require so that they are available for use.
        </p>
        `,
  },
  {
    id: 7,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Click the button below to download the pre-trained model:
        </p>
        <button class="btn btn--xsm btn--yellow mt-xs" onclick="downloadPreTrainedModels()">Download pre-trained model</button>
        `,
  },
  {
    id: 8,
    code: `
    <p class="animate__animated animate__fadeIn animate__slow">
    Click the run button in the toolbar to run the code.

    Hint: it’s green and looks like a play button.
    </p>`,
  },
  {
    id: 9,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Next, we will begin converting the pre-trained model.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="converter(event)">converter</button>
        `,
  },
  {
    id: 10,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Click the run button in the toolbar to run the code.
        </p>
        `,
  },
  {
    id: 11,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Notice that there are some blank spaces in the code. These are highlighted in red.
        </p>
        `,
  },
  {
    id: 12,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, let’s create an inference engine instance.
        </p>
        `,
  },
  {
    id: 13,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Next, the model IR files need to be loaded and verified.

        IR stands for intermediate representation. IR files are files that have been optimised and converted to the OpenVINO format.
        </p>
        `,
  },
  {
    id: 14,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        To start running the model, it needs to be loaded into the inference engine.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="loadModel(event)">LOAD MODEL</button>
        `,
  },
  {
    id: 15,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, run the code.
        </p>
        `,
  },
  {
    id: 16,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now can you load the labels?
        </p>
        `,
  },
  {
    id: 17,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Looks good.
        </p>
        `,
  },
  {
    id: 18,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Next, you need to load a single image frame from the footage of the intersection into the pre-trained model.
        </p>
        `,
  },
  {
    id: 19,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Next, let's run the inference.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="runInference(event)">inference</button>
        `,
  },
  {
    id: 20,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, press the run button.
        </p>
        `,
  },
  {
    id: 21,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Great! Let's continue.
        </p>
        `,
  },
  {
    id: 22,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Before the inference output results can be visualised, they need to be processed.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="processInferenceResults(event)">Process Inference Output Results</button>
        `,
  },
  {
    id: 23,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Great! Now, run the code.
        </p>
        `,
  },
  {
    id: 24,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You have processed the inference output results.
        </p>
        `,
  },
  {
    id: 25,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        This is the final step of the first part of this challenge, let's see how the results look!
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="visualiseResults(event)">visualise results</button>
        `,
  },
  {
    id: 26,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, run the code and see what happens!
        </p>
        `,
  },
  // {
  //   id: 21,
  //   code: `
  //       <p class="animate__animated animate__fadeIn animate__slow">
  //       Hello again! Think back to the steps you just ran through in the first part of the challenge.

  //       In the second part, two new steps are added into the process. The additional steps will help us with getting the AI to classify the different types of vehicles.
  //       </p>
  //       `,
  // },
  {
    id: 27,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        The next thing we need to do is to <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip7_content">parse</span> through the “train and the test” dataset.
        </p>
        `,
  },
  {
    id: 28,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Next, we are training and testing our dataset within the pre-trained model. We need to determine the class names of the elements we want the confusion matrix to recognise. These will form the labels for the types of vehicles as well as the probability (%) that they have been correctly identified.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="insertClassNames(event)">insert class_Names</button>
        `,
  },
  {
    id: 29,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        A confusion matrix is used for evaluating the performance of a classification algorithm.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 30,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        The code that you will see on the IDE, alongside the confusion matrix, helps us to detect (like we did in the first part of this challenge) and classify vehicles from the street camera video footage.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 31,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        So this time, as well as the box surrounding the object, you will generate a label to indicate the type of vehicle ('Car', 'Van', 'Truck', 'Bus') with a percentage next to it to signify how likely the computer thinks it is that the vehicle it has detected is labelled correctly.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 32,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        As many different trucks can each look slightly different, the AI might not be 100% sure so it may label the vehicle as “Truck 93%”.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 33,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        There are three more steps that we need you to complete to ensure the confusion matrix works.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 34,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        In the following coding block, you will use Python code to set rules that allow us to extract data from a floating bounding box.

        This data is then run through a confusion matrix to allow us to identify true positives and negatives against false positives and negatives (in other words, correct vs. incorrect predictions) for our identified classes of cars, vans, trucks and buses.

        Click the <strong>Plot Confusion Matrix</strong> button and carefully scan through the code before the next step.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="plotConfusionMatrix(event)">Plot Confusion Matrix</button>
        `,
  },
  {
    id: 35,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You will see that there are three blank spaces in the code.
        </p>
        `,
  },
  {
    id: 36,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You’re doing great! This next block of code applies the plotted confusion matrix to a single frame of the video footage (referred to as an image in the code). The pre-trained model will run thousands of <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip6_content">epochs</span>, counting each frame of video to ensure the bounding box identifies the vehicle, so our eyes see a box following it.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="plotToImage(event)">Plot To Image</button>
        `,
  },
  {
    id: 37,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, in order to finalise the results from the inference confusion matrix, we need to log the epoch.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 38,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        In the case of our pre-trained model, the epoch refers to the time that it takes to identify a vehicle as it moves through the intersection. This helps the confusion matrix learn from the test and training data, which helps it become more effective at identifying types of vehicle.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="confusionMatrixLog(event)">Confusion Matrix Log</button>
        `,
  },
  {
    id: 39,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Fill in the blank in the code by logging Confusion Matrix as an image summary.
        </p>
        `,
  },
  {
    id: 40,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Well done, we’re almost there! As we had done in the first part of this challenge, we must first process the inference output results before they can be visualised.
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="processResults(event)">process results</button>
        `,
  },
  {
    id: 41,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, run the code.
        </p>
        `,
  },
  {
    id: 42,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        We’ve reached the final step in this process. Let’s see what the results look like!
        </p>
        <button class="btn btn--sm btn--yellow mt-xs" onclick="visualiseResults(event)">visualise results</button>
        `,
  },
  {
    id: 43,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, run the code and then click continue.
        </p>
        `,
  },
  {
    id: 44,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        The pre-trained model you have used and the code that you have executed has successfully detected and classified the vehicles in the video footage. The confusion matrix that you learned about earlier in this badge not only helped us to label the vehicles with a determined level of accuracy, it also counts the total number of vehicles that used this intersection and the number of vehicles within each type.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 45,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        All of this information has been used to create a graph that shows the total number of each type of vehicle that used the intersection within each hour of
        the day.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="updateActivityText()">Continue</button>
        `,
  },
  {
    id: 46,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Take a look at this graph.

        The x-axis represents the time of the day, shown as “Hour of day”.

        The y-axis represents the total number of vehicles counted that used the intersection.

        The four different coloured lines on the graph represent the types of vehicles recognised by the pre-trained models according to their labels: Car, Van, Truck, Bus.

        You can click on a vehicle type to hide or show the vehicle count trends for that specific type of vehicle.
        </p>
        <button class="btn btn--sm btn--blue mt-xs" onclick="graphQuestions()">Continue</button>
        `,
  },
  {
    id: 47,
    code: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Consider the following as you study the graph:</p>
        `,
  },
];

// var story_activity_id = 0;

// updateActivityText();

function updateActivityText() {
  console.log(story_activity_id);
  $(".jsActivity .jsStory .bubble").empty();

  $(".jsActivity .jsStory .bubble").append(`${text_content_step_4_activity[story_activity_id].code}`);
  story_activity_id += 1;

  $(".jsTooltip").tooltipster({
    trigger: "hover",
    theme: "",
  });
}

const activity_headings = [
  { id: 0, total: 0, text: "Download and Install Git" },
  { id: 0, total: 0, text: "Install OpenVINO" },
  { id: 1, total: 7, text: "Import Modules" },
  { id: 2, total: 7, text: "Downloading and Preparation of the New Pre-trained Model" },
  { id: 3, total: 7, text: "Load the Model" },
  { id: 4, total: 7, text: "Load Input Image" },
  { id: 5, total: 7, text: "Run Inference" },
  { id: 6, total: 7, text: "Process Results" },
  { id: 7, total: 7, text: "Visualise Results" },
  { id: 1, total: 4, text: "Parsing Through the Train and Test Dataset" },
  { id: 2, total: 4, text: "Printing the Confusion Matrix" },
  { id: 3, total: 4, text: "Process Results" },
  { id: 4, total: 4, text: "Visualise Results" },
  { id: 4, total: 4, text: "What is the cause of congestion?" },
];

let activity_heading_idx = 0;
function updateActivityHeading() {
  $(".jsHeading").text(activity_headings[activity_heading_idx].text);
  $(".jsStepCounter").text(`Step ${activity_headings[activity_heading_idx].id} / ${activity_headings[activity_heading_idx].total}`);
  activity_heading_idx += 1;
}
