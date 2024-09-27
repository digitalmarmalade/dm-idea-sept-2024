@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

  <header class="lockup">
    <p class="step" data-aos="fade-down"><span class="step">4/6</span></p>
    <a target="_blank" href="http://www.idea.org.uk">
      <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="lockup-badge-type" alt="iDEA Inspiring Digital Enterprise Awards" />
    </a>
  </header>

    <main class="step-4">

      <section class="blue-3 contact">
        <div class="holder">
          <div class="cols-wrapper">

            <div class="copy">
              <span class="cycle-figure">4</span>
              <h2 data-aos="fade-right">Contact</h2>
              <p data-aos="fade-right" data-aos-delay="100">Contact comes in many different forms. Some of them will feel natural and others less so. Like most things, with the right amount of practise you will get used to each scenario.</p>
              <p data-aos="fade-right" data-aos-delay="200">The key ways of establishing contact when selling are:</p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="300">Face to face</li>
                <li data-aos="fade-right" data-aos-delay="400">Over the phone</li>
                <li data-aos="fade-right" data-aos-delay="500">During a networking event</li>
                <li data-aos="fade-right" data-aos-delay="600">When socialising</li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="700">There a literally thousands of approaches that you can use – each with their own twist, but all rely on the same fundamentals, the ability to listen, communicate and then listen some more.</p>
              <p data-aos="fade-right" data-aos-delay="800">That’s right, the more you listen, the more likely you are to make the sale. Listen to what they say, the way they say it, observe their body language, listen to the replies to your questions, listen to the intent of what they are really saying. Often the clues are in how something is said, rather than what is actually being said!</p>
            </div>
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/contact.png" />
            </div>
          </div>



        </div>
      </section>

      <section class="blue-1 contact" >
        <div class="holder">
          <h1 data-aos="fade-up">Different Contact Approaches</h1>
          <p data-aos="fade-up" data-aos-delay="100">You may have heard of techniques like:</p>
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-spin.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">SPIN Selling</h2>
              <p data-aos="fade-right" data-aos-delay="100">Neil Rackham is credited with documenting this technique. SPIN stands for the 4 types of questions that a salesperson should ask: </p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="200"><span class="tooltip">	Situation questions<span class="tooltiptext">How does X work?</span></span> </li>

                <li data-aos="fade-right" data-aos-delay="300"><span class="tooltip">	Problem questions<span class="tooltiptext">Do you find X hard?</span></span> </li>

                <li data-aos="fade-right" data-aos-delay="500"><span class="tooltip">	Implication questions<span class="tooltiptext">How does not solving X affect things?</span></span> </li>

                <li data-aos="fade-right" data-aos-delay="600"><span class="tooltip">	Need Pay-off questions<span class="tooltiptext">If you could solve X would that help?</span></span> </li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="600">The aim of this technique is to let the prospect realise why they should buy, rather than just telling them to buy.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="blue-2 contact">
        <div class="holder">
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-neat.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">N.E.A.T. Selling™</h2>
              <p data-aos="fade-right" data-aos-delay="100">This is a framework developed by The Harris Consulting Group & Sales Hacker to replace other processes.</p>
              <ul class="letters">
                <li data-aos="fade-right" data-aos-delay="200">
                  <h3>Core <span>N</span>eeds</h3>
                  <p>Requires you to get deep into the “pain” and illustrate how your product/service will matter to them.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="400">
                  <h3><span>E</span>conomic Impact</h3>
                  <p>Measuring the current impact vs impact they will see if they make the change.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="500">
                  <h3>Access to <span>A</span>uthority</h3>
                  <p>Can or will your prospect speak to the proper decision maker</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="500">
                  <h3><span>T</span>imeline</h3>
                  <p>The moment a prospect must make a decision.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="blue-1 contact">
        <div class="holder">
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-conceptual.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">Conceptual Selling</h2>
              <p data-aos="fade-right" data-aos-delay="100">Conceptual Selling, created by Robert Miller & Stephen Heiman, assumes that buyers do not buy a product or service. They buy on what they <b>think</b> your product/service will do for them – so no pitches, this is all about understanding the buyer’s concept of your product. </p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="200"><span class="tooltip">Confirmation questions<span class="tooltiptext">Confirming the information you have.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="300"><span class="tooltip">New information questions<span class="tooltiptext">Designed to understand what their idea of what they want to achieve is.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="400"><span class="tooltip">Attitude questions<span class="tooltiptext">So that you can understand what the prospect feels about the project.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="500"><span class="tooltip">Commitment questions<span class="tooltiptext">To understand what is being invested into project.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="600"><span class="tooltip">Basic issue questions<span class="tooltiptext">Designed to raise possible issues for them to consider.</span></span> </li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="700">This process is all about listening and 3 stages of selling:</p>
              <ul class="numbers">
                <li data-aos="fade-right" data-aos-delay="800">Getting information</li>
                <li data-aos="fade-right" data-aos-delay="900">Giving information</li>
                <li data-aos="fade-right" data-aos-delay="1000">Getting commitment</li>
              </ul>

            </div>
          </div>
        </div>
      </section>

      <section class="blue-2 contact">
        <div class="holder">
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-challenger.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">The Challenger Sale</h2>
              <p data-aos="fade-right" data-aos-delay="100">This concept is built around one of the largest studies ever done in sales which identified what common traits top performing sales people have.</p>
              <p data-aos="fade-right" data-aos-delay="200">This process asserts that everyone fits into one of the following personas:</p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="400"><span class="tooltip">Relationship Builders<span class="tooltiptext">
                  <ul>
                    <li>Creates relationships</li>
                    <li>Classic Consultant approach</li>
                    <li>Build Advocates internally</li>
                  </ul>
                </span></span></li>
                <li data-aos="fade-right" data-aos-delay="500"><span class="tooltip">Hard Workers<span class="tooltiptext">  <ul>
                    <li>Doesn’t give up easily</li>
                    <li>Self-Motivated</li>
                    <li>Interested in Feedback & Self Development</li>
                  </ul></span></span> </li>
                <li data-aos="fade-right" data-aos-delay="600"><span class="tooltip">Lone Wolves<span class="tooltiptext">
                  <ul>
                    <li>Follows own instinct</li>
                    <li>Self-Assured</li>
                    <li>Delivers results, but hard to manage</li>
                  </ul></span></span> </li>
                <li data-aos="fade-right" data-aos-delay="700"><span class="tooltip">Reactive Problem Solvers<span class="tooltiptext">  <ul>
                    <li>All about the details</li>
                    <li>Is very reliable in terms of responses</li>
                    <li>Solves all problems</li>
                  </ul></span></span> </li>
                <li data-aos="fade-right" data-aos-delay="800"><span class="tooltip">Challengers<span class="tooltiptext">  <ul>
                    <li>Thinks outside of the box</li>
                    <li>Likes to debate and push customer</li>
                    <li>Understands business side of a transaction</li>
                  </ul></span></span></li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="900">This system believes that ‘Challengers” make the best sales people because they:</p>
              <ul class="numbers">
                <li data-aos="fade-right" data-aos-delay="1000">Teach prospects about new ideas, their business problems etc.</li>
                <li data-aos="fade-right" data-aos-delay="1100">Tailor the way they communicate to the person in front of them.</li>
                <li data-aos="fade-right" data-aos-delay="1200">Take control of a sale by not being afraid.</li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="1300">With the right pointers, everyone can become a Challenger and that they are made (not just born), through combining skills, challenging everything (not just skills) and taking the time to grow.</p>
            </div>

          </div>
        </div>
      </section>

      <section class="blue-1 contact">
        <div class="holder">
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-sandler.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">The Sandler System</h2>
              <p data-aos="fade-right" data-aos-delay="100">This system (developed by David Sandler in 1967) is based on the psychology of human behaviour.</p>
              <p data-aos="fade-right" data-aos-delay="200">Translated it is about levelling the relationship – turning the pushy salesperson who traditionally gets into buyer/seller relationship into a trusted advisor with an equal adult to adult relationship.</p>
              <p data-aos="fade-right" data-aos-delay="300">The focus is on qualification rather than closing – understanding what may stop the sale from happening (time, budgets etc.) and dealing with them up front, so all obstacles are removed.  At that point you can both focus on the real issue, which is identifying the “pain” and fixing it. </p>
              <p data-aos="fade-right" data-aos-delay="400">If, after running through the process, you realise you cannot truly fix the “pain”, then this process tells you to move on, don’t waste time trying to persuade the prospect to buy, just cut your losses, and move on to the next prospect because your time is one of the most valuable assets you have, so don’t waste it.</p>
              <p data-aos="fade-right" data-aos-delay="500">Rather than the seller convincing the buyer to buy, the idea becomes that the buyer tries to convince the seller to sell.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="blue-2 contact">
        <div class="holder">
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-snap.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">SNAP Selling</h2>
              <p data-aos="fade-right" data-aos-delay="100">This is a technique designed to bring the sales person to connect with a prospect by understanding that there are key decisions that need to made by the prospect for a successful deal. The way to help the prospect make these decisions:</p>
              <ul class="letters letters-snap">
                <li data-aos="fade-right" data-aos-delay="200"><span class="tooltip"><h3>Keep it <b>S</b>imple</h3><span class="tooltiptext">Make it easy for them to buy.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="300"><span class="tooltip"><h3>Be I<b>n</b>valuable</h3><span class="tooltiptext">Be their expert and show value.</span></span></li>
                <li data-aos="fade-right" data-aos-delay="400"><span class="tooltip"><h3>Always <b>A</b>lign</h3><span class="tooltiptext">Make them want to work with you.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="500"><span class="tooltip"><h3>Raise <b>P</b>riorities</h3><span class="tooltiptext">Understand where they are focused.</span></span> </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="blue-1 contact">
        <div class="holder">
          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/approach-customer-centric.png" />
            </div>
            <div class="copy">
              <h2 data-aos="fade-right">Customer Centric Selling</h2>
              <p data-aos="fade-right" data-aos-delay="100">Similar to Sander – this methodology is about turning salespeople from selling products to becoming collaborative consultants.</p>
              <p data-aos="fade-right" data-aos-delay="200">The system believes there are 8 key ways to do this:</p>
              <ul class="numbers">
                <li data-aos="fade-right" data-aos-delay="300">Don’t present, just talk about issues.</li>
                <li data-aos="fade-right" data-aos-delay="400">Ask relevant questions rather than giving your opinion.</li>
                <li data-aos="fade-right" data-aos-delay="500">Focus on the solution – not how you get on.</li>
                <li data-aos="fade-right" data-aos-delay="600">Target decision makers not users.</li>
                <li data-aos="fade-right" data-aos-delay="700">Focus on making people use the solution rather than people liking the solution.</li>
                <li data-aos="fade-right" data-aos-delay="800">Don’t be busy.</li>
                <li data-aos="fade-right" data-aos-delay="900">Close on buyer’s timeline, not sellers.</li>
                <li data-aos="fade-right" data-aos-delay="1000">Empower rather than convince.</li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="1100">Put another way, it focuses on:</p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="1200"><span class="tooltip">What customers want<span class="tooltiptext">Who are your competitors? What is their offer and how does your product or service better them?</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="1300"><span class="tooltip">What customers need<span class="tooltiptext">Use ‘you’ and ‘your’ instead of ‘our’ and ‘we’.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="1400"><span class="tooltip">The customer’s language<span class="tooltiptext">Forget acronyms and industry language or jargon.</span></span> </li>
                <li data-aos="fade-right" data-aos-delay="1500">Customers fears.</li>

              </ul>

            </div>

          </div>
        </div>
      </section>

      <section class="orange task task-4">
        <div class="holder">
          <h1 data-aos="fade-up">Task</h1>
          <p data-aos="fade-up" data-aos-delay="100">Drag the statement to the correct sales process:</p>
        </div>
        <div class="drop-wrapper">
          <div class="droppable-zone">
            <ul>
              <li class="dropzone" id="droppable1" data-aos="zoom-in" >
                <span>The Challenger Sale</span>
                <p class="after-drop after-drop-1">“Built around one of the largest studies ever done”.</p>
              </li>

              <li class="dropzone" id="droppable2" data-aos="zoom-in" data-aos-delay="100">
                <span>Conceptual Selling</span>
                <p class="after-drop after-drop-2">This process is all about listening and 3 stages of selling </p>
              </li>

              <li class="dropzone" id="droppable3" data-aos="zoom-in" data-aos-delay="200">
                <span>NEAT</span>
                <p class="after-drop after-drop-3">Core needs and impact form part of this process.</p>
              </li>

              <li class="dropzone" id="droppable4" data-aos="zoom-in" data-aos-delay="300">
                <span>SPIN Selling</span>
                <p class="after-drop after-drop-4">Created by Neil Rackham.</p>
              </li>

              <li class="dropzone" id="droppable5" data-aos="zoom-in" data-aos-delay="300">
                <span>The Sandler System</span>
                <p class="after-drop after-drop-5">Based on the psychology of human behaviour.</p>
              </li>

              <li class="dropzone" id="droppable6" data-aos="zoom-in" data-aos-delay="300">
                <span>Customer Centric Selling</span>
                <p class="after-drop after-drop-6">Target decision makers not users.</p>
              </li>

              <li class="dropzone" id="droppable7" data-aos="zoom-in" data-aos-delay="300">
                <span>SNAP</span>
                <p class="after-drop after-drop-7">3 key decisions that need to be made.</p>
              </li>

            </ul>
          </div>

          <div class="drag-options">
            <ul>
              <li class="drag-option draggable" id="answer_1_1" data-aos="zoom-in" data-aos-delay="400">Target decision makers not users.</li>

              <li class="drag-option draggable" id="answer_1_2" data-aos="zoom-in" data-aos-delay="500">Based on the psychology of human behaviour.</li>

              <li class="drag-option draggable" id="answer_1_3" data-aos="zoom-in" data-aos-delay="700">“Built around one of the largest studies ever done”.</li>

              <li class="drag-option draggable" id="answer_1_4" data-aos="zoom-in" data-aos-delay="600">3 key decisions that need to be made.</li>

              <li class="drag-option draggable" id="answer_1_5" data-aos="zoom-in" data-aos-delay="600">This process is all about listening and 3 stages of selling.</li>

              <li class="drag-option draggable" id="answer_1_6" data-aos="zoom-in" data-aos-delay="600">Created by Neil Rackham.</li>

              <li class="drag-option draggable" id="answer_1_7" data-aos="zoom-in" data-aos-delay="700">Core Needs and Impact form part of this process.</li>

              </ul>
            </div>
        </div>
      </section>
      <section class="feedback blue-4 hide">
        <h1>Well done!</h1>
        <a class="btn feedback" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Let's continue</a>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

<script src="/badge-assets/{{$url['slug']}}/_global/js/step-4.js"></script>

@endsection
