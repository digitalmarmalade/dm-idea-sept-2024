@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>
  <section>
    @include('vendor.digitalmarmalade.badges.digital-ethics.header',
    ['title' => 'Header'])

    <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="500">
      <li class="step completed">1</li>
      <li class="step completed">2</li>
      <li class="step completed">3</li>
      <li class="step completed">4</li>
      <li class="step active">5</li>
      <li class="step">6</li>
      <li class="step">7</li>
      <li class="step">8</li>
    </ol>
    <div class="container gap--xlg">
      <div class='box box--step-header bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="flex flex--column gap box__copy">
          <h1>Connecting Digital Ethics to Organisational Values</h1>
          <p>Values, in the context of ethics and social sciences, are the beliefs of a social group, or what they consider to be important. Values, as well as the company culture, can drive an organisation’s behaviour. Values are often posted prominently on company websites, or put up on office walls, but living up to them can be challenging.</p>
        </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--connect.svg" alt="" />
      </div>     
      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <p>Some general examples of organisational values include things like putting customers first, learning, integrity, and inclusion.</p>
        <p>The values of an organisation can lead to specific digital ethics guiding principles that they should follow.</p>
      </div>
      <div class="col flex flex--column gap--sm text-align--center flex--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
        <h2>What does this look like in practice?</h2>
        <p>Take a look at what this might look like for a company that values diversity and inclusion.</p>
        <ul class="list--li-bg-white-48">
          <li>Checking that datasets used are representative and don’t exclude any individuals or groups</li>
          <li>Testing the algorithms we create to draw out any unintentional bias before implementation</li>
          <li>Ensuring all project teams include people from all backgrounds and walks of life</li>
        </ul>
        <button id="continueToTask" class="btn" onclick="continueToTask()">
        Let&rsquo;s go!
        </button>
      </div>
  </section>

  <section id="sectionTask" class="hide task flex flex--column" >
    <div class="container animate__animated animate__fadeInUp animate__slow">
      <div class="flex flex--column box box--task bg--offwhite">  

        <div class="flex flex--column gap--sm flex-1 flex--justify-center flex--grow-1 col">
          <h2>Now it's your turn!</h2>
          <p>Can you identify the actions that the following organisations can take to help them uphold their values?</p>
          <p>Based on the values of each organisation, please drag and drop the correct action(s) onto the "dropping zone" below the company icon and see what happens!</p>
        </div>

        <div class="container--drag-drop">

          <div class="container--dropable-area">

            <div class="divSchool box bg--cream drop-area">
        
              <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--school.svg" alt="" />
              <h3>School</h3>
              <ul class="list--li-bg-white-48">
                <li>Kindness</li>
                <li>Respect</li>
                <li>Compassion</li>
              </ul>
          
              <div id="divSchool" class="drop-zone"></div>
            </div>

            <div class="divSchool box bg--cream drop-area">
              <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--marketing-agency.svg" alt="" />
              <h3>Digital marketing agency</h3>
              <ul class="list--li-bg-white-48">
                <li>Equality</li>
                <li>Inclusion</li>
              </ul>
              <div id="divDigital" class="drop-zone"></div>
            </div>

            <div class="divSmart box bg--cream drop-area">
                <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--mobile-company.svg" alt="" />
                <h3>Smartphone company</h3>
                <ul class="list--li-bg-white-48">
                  <li>Innovation</li>
                  <li>Sustainability</li>
                </ul>
                <div id="divSmart" class="drop-zone"></div>
            </div>
          
          </div>

          <div id="divAnswer" class="divAnswer container--dropable-items">
            <p class="dropable-item" id="divSmart-1"  draggable="true">Encourage people to trade in old devices by giving them store credit</p>
            <p class="dropable-item" id="divDigital-1"  draggable="true">Set clear diversity targets for all teams working on campaigns and measure progress</p>
            <p class="dropable-item" id="divNone-1"  draggable="true">Encourage people to always buy the latest device to keep up with new innovations</p>
            <p class="dropable-item" id="divSchool-1"  draggable="true">Ensure online etiquette is taught to everyone</p>
            <p class="dropable-item" id="divSmart-2"  draggable="true">Teach people how to reduce and recycle e-waste</p>
            <p class="dropable-item" id="divNone-2"  draggable="true">Hire people who resemble existing employees so the company culture doesn’t change</p>
          </div>

        </div>
        
        <div class='hide feedback success jsFeedbackSuccess1 feedbackSuccess  animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1">
            <div class="feedback__content">
                 <p class="">Well done!</p>
            </div>
        </div>
        <div class='hide feedback success jsFeedbackSuccess2 feedbackSuccess  animate__animated animate__zoomIn animate__faster'
            id="jsFeedbackSuccess2">
            <div class="feedback__content">
              <p class="">That’s it!</p>
            </div>
        </div>
        <div class='hide feedback success jsFeedbackSuccess3 feedbackSuccess  animate__animated animate__zoomIn animate__faster'
            id="jsFeedbackSuccess3">
            <div class="feedback__content">
              <p class="">Nice work!</p>
            </div>
        </div>
        <div class='hide feedback success jsFeedbackSuccess4 feedbackSuccess  animate__animated animate__zoomIn animate__faster'
            id="jsFeedbackSuccess4">
            <div class="feedback__content">
              <p class="">Nice! In addition to this, the smartphone company could also teach people how to reduce and recycle e-waste. </p>
            </div>
        </div>
        <div class='hide feedback jsFeedbackSuccessAll  animate__animated animate__zoomIn animate__faster'
            id="jsFeedbackSuccessAll">
            <div class="feedback__content">
              <p class="">Excellent work! As you can see, the values of an organisation can lead to specific digital ethics guiding principles and actions.</p>
              <p>It is important that organisations communicate their values to members at all levels so that everyone understands what they mean and how to live them.</p>
              <p>Embedding these principles into the company culture and creation of products, tools and services is essential for building trust, confidence and retaining both your customers and team members!</p>
                <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
            </div>
        </div>
        <div class='hide jsFeedbackFail1 fail feedback  animate__animated animate__zoomIn animate__faster'
            id="jsFeedbackFail1">
            <div class="feedback__content">
              <p>
                  There’s a better action this school can take to really enforce their values of kindness, respect, and compassion. Please try again!
              </p>
              <button class="btn"
                      onclick="tryAgain()">Try Again</button>
            </div>
        </div>
        <div class='hide jsFeedbackFail2 fail feedback  animate__animated animate__zoomIn animate__faster'
            id="jsFeedbackFail2">
            <div class="feedback__content">
              <p>
                  That isn’t quite the best match. What will make a difference in increasing equality and inclusion?
              </p>
              <button class="btn"
                      onclick="tryAgain()">Try Again</button>
            </div>
        </div>
        <div class='hide jsFeedbackFail3 fail feedback  animate__animated animate__zoomIn animate__faster'
              id="jsFeedbackFail3">
            <div class="feedback__content">
                <p>
                    Oops! That’s not quite right. What could this company do to show they really care about innovation and sustainability?
                </p>
                <button class="btn"
                        onclick="tryAgain()">Try Again</button>
            </div>
        </div>

    
      </div> 
    </div>
  </section>
  
</main>



@endsection @section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step5.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/task_5.js"></script>
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
  oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection
