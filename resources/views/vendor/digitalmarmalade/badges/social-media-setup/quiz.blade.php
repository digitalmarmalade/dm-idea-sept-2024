@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="section-1 last-section only-section section-final-quiz">
        <div class="section-title">
            <p>Quiz</p>
        </div>
        <div class="holder">
          <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Facebook"/>
          <p>Let’s now recap everything you have learnt about setting up your profile on the main Social Media Networks. Remember: you can always go back and re-recheck each of the networks at any point if you get stuck!</p>
          <p><b>Note:</b> You need to answer at least one question for each Social Media Section before you can take the final quiz.</p>
          <div class="quiz quiz--order quiz--final jsQuiz">

              <div class="quiz-question jsQuestion1 quiz-question-1" id="question1">
                  <div class="quiz-intro">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/final-quiz/final-quiz-1.svg" alt=""/>
                    <p>As a hobby you like drawing and you spend lots of your spare time practicing life drawing and illustration. You want to find a way to share your work with friends and other people that appreciate drawing and illustration too.</p>
                  </div>
                <p class="js-whoops quiz-fail hide">Whoops, two wrong answers... start again!</p>
                  <p class="quiz-the-question"><span>Question 1 of 15</span>From the options below, which one is <b>the most appropriate</b> social media to upload images of your work and create a permanent feed of images? </p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Instagram</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>YouTube</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"  ><span>LinkedIn</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span>Snapchat</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion2 hide" id="question2" data-requiredRightAnswers="2">
                  <p class="quiz-the-question"><span>Question 2 of 15</span>Select below <b>only</b> features that are key to Instagram:</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Photo filters</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>Group pages</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span>Stories</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#"><span>Geofilters</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion3 hide" id="question3" data-requiredRightAnswers="2">
                  <p class="quiz-the-question"><span>Question 3 of 15</span>Select below <b>only elements that are true</b> when writing a social media bio:</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Your bio needs to explain who you are and what you do, convey your unique personality, and use targeted language to show your ideal audience that they have come to the right place.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>You can use infinite numbers of characters to write your bio in all Social Networks.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"><span>There is no need to add any contact details when writing your social media bio.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Writing an exciting, targeted and intriguing bio will increase the chances of your profile to be successful with your audience.</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion4 quiz-question-4 hide" id="question4">
                  <div class="quiz-intro">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/final-quiz/final-quiz-2.svg" alt=""/>
                    <p>Your Instagram feed with images of your drawings and illustrations has become so popular that you are now considering having an online space where you can share tips and techniques about drawing and illustrating. For that purpose, you have recorded a few long form video tutorials.</p>
                  </div>

                  <p class="quiz-the-question"><span>Question 4 of 15</span>What is <b>the most appropriate social media channel</b> to create a hub with all the videos you have been recording and share it with your audience?</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Instagram</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>
                        Snapchat</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"  ><span>LinkedIn</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>YouTube</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion5 hide" id="question5" data-requiredRightAnswers="2">
                  <p class="quiz-the-question"><span>Question 5 of 15</span>Select below, <b>only</b> the statements that are correct about YouTube, when someone has published videos without making any setting adjustments:</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#"><span>Your audience won’t be able to rate your videos.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Your audience can subscribe to the channel you created and receive notifications about new videos you publish.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span>Your audience will be able to report your video if you publish inappropriate content.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#"><span>Your audience won’t be able to make comments on the videos you upload.</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion6 quiz-question-6 hide" id="question6">
                  <div class="quiz-intro">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/final-quiz/final-quiz-3.svg" alt=""/>
                    <p>You’ve decided now, to expand your tutorials to real spaces and you are planning meet-ups in museums and other suitable locations. You would like to have access to a Social Media network that enables you to create groups and events targeted to these groups.</p>
                  </div>

                  <p class="quiz-the-question"><span>Question 6 of 15</span>What is <b>the most appropriate social media channel</b> to create a group and communicate about an event  such as your Life Drawing tutorials at various locations?</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Instagram</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>
                        Snapchat</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"  data-answer="true"><span>Facebook</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span>YouTube</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion7 hide" id="question7" data-requiredRightAnswers="3">
                  <p class="quiz-the-question"><span>Question 7 of 15</span>Select below, <b>only</b> the possible ways you can find and add friends on Facebook to inform them about your new group:</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#"data-answer="true" ><span>By searching for friends in the Find Friends section.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>By texting your friends using your mobile phone.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span>By uploading contacts from your phone or other accounts.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>By using a feature called People You May Know.</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion8 hide" id="question8" data-requiredRightAnswers="3">
                  <p class="quiz-the-question"><span>Question 8 of 15</span>Which other features do you expect to find on Facebook?</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#"data-answer="true" ><span><b class="title">Privacy Settings</b>You can choose who can see your content.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span><b class="title">Live Videos</b>Stream live videos.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span><b class="title">Online Chats</b>Talk to friends in real time.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span><b class="title">Facebook Cash</b>Receive money from friends via private messaging.</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion9 quiz-question-9 hide" id="question9">
                  <div class="quiz-intro">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/final-quiz/final-quiz-4.svg" alt=""/>
                    <p>Your event is now organised and lots of your family and friends have confirmed that they will be attending. There's room for more people so you've asked those who are invited already to tell other people they know about the class.</p>
                  </div>

                  <p class="quiz-the-question"><span>Question 9 of 15</span>Besides telling groups of family and friends on Facebook, which other Social Network could you and your friends take advantage of to promote your drawing classes with just a few words?</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Instagram</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" ><span>
                        Snapchat</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"  data-answer="true"><span>Twitter</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span>YouTube</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion10 hide" id="question10" data-requiredRightAnswers="3">
                  <p class="quiz-the-question"><span>Question 10 of 15</span>You cannot use more than 160 characters to write your Twitter bio. Select below, <b>only the options that will help you make the most of the limited characters available.</b></p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Write as much as you can about your daily life.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Use hashtags (#) to ensure you are connected anytime that hashtag is mentioned.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span>Link your account to other accounts (school, work, etc).</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Add links to external web pages ( an event, for instance).</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion11 quiz-question-11 hide" id="question11">
                  <div class="quiz-intro">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/final-quiz/final-quiz-5.svg" alt=""/>
                    <p>On the day of the event, there is a wonderful turn out and your tutorial on that day is a great success. So great that your friends want to send selfies alongside the art they made in your class using geofilters.</p>
                  </div>

                  <p class="quiz-the-question"><span>Question 11 of 15</span>Which Social Network allows you to use geofilters? </p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Instagram</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" data-answer="true" href="#" ><span>
                        Snapchat</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"  ><span>LinkedIn</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span>Facebook</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion12 hide" id="question12" data-requiredRightAnswers="1">
                  <p class="quiz-the-question"><span>Question 12 of 15</span>What are geofilters?</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Real time effect added to the snaps using face detection technology.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>Special graphic overlays available via geographical location.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" ><span>Money transactions via private messaging.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span>Location sharing.</span></a>
                    </li>
                  </ul>
              </div>


              <div class="quiz-question jsQuestion13 quiz-question-13 hide" id="question13" data-requiredRightAnswers="1">
                  <div class="quiz-intro">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/final-quiz/final-quiz-6.svg" alt=""/>
                    <p>Your life drawing class at the museum has been so successful that you're now considering teaching life drawing professionally.</p>
                  </div>

                  <p class="quiz-the-question"><span>Question 13 of 15</span>What is <b>the most appropriate</b> Social Network you can join to best promote your qualifications, skills and experience as a Life Drawing teacher?</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Instagram</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span>
                        LinkedIn</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#"  ><span>Twitter</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" ><span>Snapchat</span></a>
                    </li>
                  </ul>
              </div>

              <div class="quiz-question jsQuestion14 hide" id="question14" data-requiredRightAnswers="2">
                  <p class="quiz-the-question"><span>Question 14 of 15</span>From the statements below, <b>which ones are correct</b> in relation to your public profile visibility on LinkedIn? </p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                    <li data-aos="fade-in" data-aos-delay="100">
                        <a class="btn btn-primary" href="#" ><span>Your public profile is visible only to people you are connected on LinkedIn.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="200">
                        <a class="btn btn-primary" href="#"><span>Your public profile is not visible when people search for you using a public search engine.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="300">
                        <a class="btn btn-primary" href="#" data-answer="true" ><span>Your public profile appears on public profile badges.</span></a>
                    </li>
                    <li data-aos="fade-in" data-aos-delay="400">
                        <a class="btn btn-primary" href="#" data-answer="true"><span>You can change whether your profile is visible as public or not.</span></a>
                    </li>
                  </ul>
              </div>
              <div class="quiz-question jsQuestion15 quiz-question-15 hide" id="question15" data-requiredRightAnswers="3">

                  <p class="quiz-the-question"><span>Question 15 of 15</span>In regards to your LinkedIn profile URL, select <b>only</b> the correct information:</p>
                  <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                  <ul class="quiz-options task">
                  <li data-aos="fade-in" data-aos-delay="100">
                      <a class="btn btn-primary" href="#" data-answer="true"><span>It only appears if your profile is set to public.</span></a>
                  </li>
                  <li data-aos="fade-in" data-aos-delay="200">
                      <a class="btn btn-primary" href="#" ><span>It can contain any letters, spaces, symbols or special characters.</span></a>
                  </li>
                  <li data-aos="fade-in" data-aos-delay="300">
                      <a class="btn btn-primary" href="#" data-answer="true" ><span>The customizable part of your URL is not case sensitive.</span></a>
                  </li>
                  <li data-aos="fade-in" data-aos-delay="400">
                      <a class="btn btn-primary" href="#" data-answer="true"><span>You can change your URL up to five times within six months.</span></a>
                  </li>
                </ul>
              </div>






          </div><!--/quiz-->


          </div>
        </section>
        <section id="nextStep" class="section-1 feedback feedback-success feedback-quiz jsNextStep hide">
                <div class="holder">
                    <h2>Well done! You completed the quiz!</h2>
                    <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
                </div>
            </section>

    </section>

</main>


@endsection

@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-53.js"></script>
@endsection
