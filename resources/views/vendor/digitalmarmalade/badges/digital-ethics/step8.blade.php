@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main id="mainDOM">
@include('vendor.digitalmarmalade.badges.digital-ethics.header',
    ['title' => 'Header'])

  
  <section id="responsible-citzen"> 
  <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="500">
      <li class="step completed">1</li>
      <li class="step completed">2</li>
      <li class="step completed">3</li>
      <li class="step completed">4</li>
      <li class="step completed">5</li>
      <li class="step completed">6</li>
      <li class="step completed">7</li>
      <li class="step active">8</li>
    </ol>
    <div class="container">
      <div class='box box--step-header bg--yellow flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="flex flex--column gap box__copy">
          <h1>Being a Responsible Digital Citizen</h1>
          <p>Being knowledgeable about digital ethics is not only important to protect yourself when interacting with technology, but also to help you to play a part in looking out for others and setting a good example in creating a safe and respectful digital environment for everyone.</p>
        </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--responsible-citzen.svg" alt="" />
      </div>     
      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <p>To finish up, please take some time to reflect on all that you’ve learned in this badge.</p>
        <p>Knowing what you know now, what might you do differently? What are some small changes that you can make in your everyday life to ensure you are being a responsible digital citizen?</p>
        <p>You might like to consider the questions below to help you get going. </p>
        <ul class="list--li-bg-white-48">
          <li>What would you change about how you use social media?</li>
          <li>Do you know what your default social media privacy settings are?</li>
          <li>Do you know how your data is stored and used on the apps on your devices?</li>
          <li>How do you determine whether something you read online is unbiased and factual?</li>
          <li>How could you help create a safer digital environment within your community?</li>
        </ul>
      </div>
     
      <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" data-aos-anchor-placement="bottom-bottom">
      <button class="btn" onclick="continueToTask()">
        Let&rsquo;s go!
        </button>
      </div>
    </div>
  </section>

  <section id="sectionTask" class="task flex flex--column hide" >
    <div class="container" data-aos="fade-up" data-aos-duration="1500"  data-aos-anchor-placement="bottom-bottom">
      <div class="flex flex--column box box--task bg--offwhite">  
        <div class="flex flex--column gap--sm flex-1 flex--justify-center flex--grow-1 col">
          <h2>How might you be a responsible digital citizen?</h2>
          <p>Please write at least three different actions in the boxes below.</p>
        </div>
        <div id="questionBoxes" class="col container--questions">
          <div id="question" class="question gap--xxlg">
              <div class='jsInputText container--question' id="jsInputText1">
                  <p>Please write a minimum of 10 words in the space below.</p>
                  <textarea id="inputTextArea1" class="inputTextArea" name="inputTextArea1"
                            placeholder="I will be mindful about who I give my data to."></textarea>
                  <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster'
                       id="jsFeedbackFail1">
                      <p>
                          Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!
                      </p>
                  </div>
              </div>

              <div class='jsInputText container--question' id="jsInputText2">
                  <p>Please write a minimum of 10 words in the space below.</p>
                  <textarea id="inputTextArea2" class="inputTextArea" name="inputTextArea2"
                            placeholder="I will think carefully before posting anything online."></textarea>
                  <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster'
                       id="jsFeedbackFail2">
                      <p>
                          Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!
                      </p>
                  </div>
              </div>

              <div class='jsInputText container--question' id="jsInputText3">
                  <p>Please write a minimum of 10 words in the space below.</p>
                  <textarea id="inputTextArea3" class="inputTextArea" name="inputTextArea3"
                            placeholder="I will share what I have learned about online safety with my family members."></textarea>
                  <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster'
                       id="jsFeedbackFail3">
                      <p>
                          Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!
                      </p>
                      
                  </div>
              </div>
            

              
            </div>


        </div>


        <div class="container--ctas col">
          <button type="button" id="writeMoreButton" class="writeMoreButton btn secondary" onclick="writeMore()">
              Write More
          </button>
          <button type="button" id="submitButton" class="submitButton btn" onclick="submit()">
              Submit
          </button>
        </div>

        <div class="col flex flex--center flex--column gap--lg">

             <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster''
               id="jsFeedbackFailNotComplete">
                  <p >
                  Please write at least three different actions in the boxes before submitting.
                      </p>
              </div>

              <div class="flex flex--center hide " id="tryAgain">
                <button  class="btn" onclick="tryAgain()">Try Again</button>
              </div>
        </div>
    
      </div> 
    </div>
  </section>

  <section id="jsFeedbackSuccessAll" class="hide" >
    <div class="container flex flex--center flew--column">
      <ul id="finalTextBoxesArea" class="list--actions">
          <li>I’ll be more mindful about who I give my personal data to.</li>
          <li>I’m going to check the privacy settings on my social media accounts and change my passwords regularly.</li>
          <li>Question and assess the validity of news, articles and posts that I read online.</li>
          <li>Think carefully about what I put out on social media - how will what I publish affect others?</li>
          <li>Limit the amount of time I spend on social media and be mindful of when using social media starts to negatively impact how I think and feel. </li>
          <li>I’ll be more careful about the information I share on in-game chat.</li>
          <li>Turn off my location settings for websites or apps that I do not want to know my location.</li>
          <li>Report any content I see online that I think is harmful.</li>
          <li>I want to help teach others around me how to use the internet safely and responsibly.</li>
          <li>I’m going to keep an open conversation and talk to my children regularly about online safety.</li>
          <li>Consider how technology can impact the environment - I can recycle or trade in my electronic devices (and maybe even get some money back!).</li>
      </ul>

      <div class='feedback success animate__animated animate__zoomIn animate__faster''>
        <div class="feedback__content">
            <p>
            Well done! Your ideas have been added to this wall along with some others from people like you on iDEA. Take a look! Maybe some are similar to what you wrote and maybe there are some good ideas that you hadn’t thought about already.

            </p>
            <p>
            You can take a screenshot of these if you want to keep them to refer back to later on.
            </p>

            <a class="btn" href="{{$links['next']}}">Finish</a>
        </div>
    </div>

  </div>     
  </section>


</main>


@endsection @section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step8.js"></script>
<script>
    $(document).ready(function () {
        var triggerMode = "hover";

        if ($("body").hasClass("touch")) {
            triggerMode = "click";
        }

        $(".jsTooltip").tooltipster({
            trigger: triggerMode,
            maxWidth: 350,
        });
    });
</script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 8);
</script>

@endsection
