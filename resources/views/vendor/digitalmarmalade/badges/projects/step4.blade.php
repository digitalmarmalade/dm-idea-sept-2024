@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <header class="lockup">
      @include('vendor.digitalmarmalade.badges.projects.header', ['title' => 'Header'])
      <p class="site-title">Projects <span class="step">Step 4 <span>of</span> 4</span> </p>
    </header>
    
    <main>

      <section class="top">
        <div class="holder">
          <div class="theory-box theory-box-controlling come-in">
            <h1 class="come-in">Controlling</h1>
            <div class="cols">
              <div class="col">
                <p class="come-in">Once the project is running, how do you know it&#8217s going well and will be delivered on time? This is where control and monitoring of the project are essential.</p>
                <p class="come-in">Project tasks need to be tracked, with their progress compared to the planning estimates. A number of things can go wrong during projects – delays with suppliers, staff being unwell, communication issues, requirement changes etc. These all need managing in terms of their risk and impact on the project and on stakeholders.</p>
              </div>
              <div class="col">
                <p class="come-in">In terms of risk, this is often analysed during project planning – how likely is the risk and how much impact would it have if things went wrong?</p>
                <p class="come-in">Stakeholders often want to know how the project is progressing and so providing regular updates is also important. Knowing what is happening at any point with the project is vital!</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bottom">
        <div class="checkered-box">
          <div class="checkered"></div>
        </div>

        <div class="activity-box activity-box-step-3">
          <div class="holder">
            <h2 class="animated slideInDown">Back to the racing team!</h2>
            <p class="animated slideInDown">You managed to successfully stop project creep in preparing for the last race. A new project has been planned to prepare for the next race meet. Keep this project on target by reacting to the situations and making the right decision:</p>
            <ul class="scenarios-steps animated slideInDown">
              <li class="completed">1</li>
              <li>2</li>
              <li>3</li>
              <li>4</li>
              <li>5</li>
              <li>6</li>
            </ul>

            <div class="scenario scenario-1 animated come-in">
              <div class="scenario-question-box">
                <p class="question">You’ve got everyone together in a team meeting. Everyone’s excited about the next race. How do you kick things off?</p>
                <div class="answer-box">
                  <img class="question-img" src="/badge-assets/{{$url['slug']}}/_global/img/team-meeting.svg" alt="Racing team in a group" />
                  <div class="answer answer-incorrect">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                    <p>Oh no! That is not quite right...</p>
                    <p class="cta cta-try-again">Try Again</p>
                  </div>
                  <div class="answer answer-correct">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                    <p>Having a project requirements document means everyone knows what they are responsible for delivering and what must be achieved in the project.</p>
                    <p class="cta cta-next-scenario">Next</p>
                  </div>
                </div>
              </div>
              <ul>
                <li data-value="incorrect">Tell them to get on with it. They all know what they’re doing.</li>
                <li data-value="correct">Draw up the project requirements, listing the goals and assign responsibilities in delivering these.</li>
              </ul>
            </div>

            <div class="scenario scenario-2">
              <div class="scenario-question-box">
                <p class="question">In a team meeting it comes to your attention that Jack, the mechanic working on the new rear axle, has fallen behind. You have a chat and Jack reassures you that he’ll get the refit done, but this work absolutely has to be done on time. You...</p>
                <img class="question-img" src="/badge-assets/{{$url['slug']}}/_global/img/team-struggling.svg" alt="Racing team member struggling with spanner" />
              <div class="answer-box">
                <div class="answer answer-incorrect">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                  <p>Oh no! That is not quite right...</p>
                  <p class="cta cta-try-again">Try Again</p>
                </div>
                <div class="answer answer-correct">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Identifying bottle necks and assigning additional resources where necessary will help keep the project on schedule.</p>
                    <p class="cta cta-next-scenario">Next</p>
                </div>
              </div>
            </div>
            <ul>
              <li data-value="incorrect">...leave Jack to it - he’ll thrive under the enormous pressure.</li>
              <li data-value="correct">...assign another team member to help Jack out.</li>
            </ul>
          </div>

          <div class="scenario scenario-3">
            <div class="scenario-question-box">
              <p class="question">Your team has identified that a new type of tyre will help with the understeer of the car. These tyres are state of the art and will be imported from China by sea and are due to arrive a week before the race meet. How do you proceed with the current tyre deal?</p>
              <div class="answer-box">
                <img class="question-img" src="/badge-assets/{{$url['slug']}}/_global/img/team-tyre-pressure.svg" alt="Racing team member with tyre pressure tool" />
                <div class="answer answer-incorrect">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                  <p>Oh no! That is not quite right...</p>
                  <p class="cta cta-try-again">Try Again</p>
                </div>
                <div class="answer answer-correct">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>It’s possible that the tyres from China will be delayed in shipping, so it’s safest to get a set of tyres from the existing supplier to make sure you definitely have some for race day.</p>
                    <p class="cta cta-next-scenario">Next</p>
                </div>
              </div>
            </div>
            <ul>
              <li data-value="incorrect">Cancel the contract. A team only needs one tyre supplier.</li>
              <li data-value="correct">Keep the existing tyre supplier engaged until after the race meet.</li>
            </ul>
          </div>

          <div class="scenario scenario-4">
            <div class="scenario-question-box">
              <p class="question">The team manager is looking for the driver to run some tests on the car, but it turns out that she has been taken out for the day by people who want to sponsor her cap. The team weren’t aware.  How do you deal with this situation?</p>
              <img class="question-img" src="/badge-assets/{{$url['slug']}}/_global/img/team-smiling.svg" alt="Racing team member smiling" />
              <div class="answer-box">
                <div class="answer answer-incorrect">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                  <p>Oh no! That is not quite right...</p>
                  <p class="cta cta-try-again">Try Again</p>
                </div>
                <div class="answer answer-correct">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Good communication is vital to the successful delivery of a project. Regular meetings can help this.</p>
                    <p class="cta cta-next-scenario">Next</p>
                </div>
              </div>
            </div>
            <ul>
              <li data-value="correct">Announce that you are to have daily meetings to discuss whereabouts and who’s doing what each day.</li>
              <li data-value="incorrect">Leave everyone to it, they’re all grown-ups.</li>
            </ul>
          </div>

          <div class="scenario scenario-5">
            <div class="scenario-question-box">
              <p class="question">The chief engineer has got a contagious illness, but he doesn’t want to leave the project at a critical moment. What do you do?</p>
              <div class="answer-box">
                <img class="question-img" src="/badge-assets/{{$url['slug']}}/_global/img/team-denying.svg" alt="Racing team member sick" />
                <div class="answer answer-incorrect">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                  <p>Oh no! That is not quite right...</p>
                  <p class="cta cta-try-again">Try Again</p>
                </div>
                <div class="answer answer-correct">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Important as he is to the team, you can’t afford for that illness to spread to other team members, potentially reducing the resources available to the project.</p>
                    <p class="cta cta-next-scenario">Next</p>
                </div>
              </div>
            </div>
            <ul>
              <li data-value="correct">Insist that he takes time off.</li>
              <li data-value="incorrect">Let him come to work as normal - he’s a valuable member of the team.</li>
            </ul>
          </div>

          <div class="scenario scenario-6">
            <div class="scenario-question-box">
              <p class="question">The design team are very excited about a new spoiler design they came up with last night and they can’t wait to get it on the car. What to you do?</p>
              <div class="answer-box">
                <img class="question-img" src="/badge-assets/{{$url['slug']}}/_global/img/team-designers.svg" alt="Racing design team" />
                <div class="answer answer-incorrect">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                  <p>Oh no! That is not quite right...</p>
                  <p class="cta cta-try-again">Try Again</p>
                </div>
                <div class="answer answer-correct">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Although it is tempting to add shiny new features to the car, it needs to be scheduled in to avoid project creep. Dropping something in now could affect the time it takes to deliver the whole project and you can’t risk a half finished car on race day.</p>
                    <p class="cta cta-next-scenario">Next</p>
                </div>
              </div>
            </div>
            <ul>
              <li data-value="incorrect">Get it straight on the car - every second counts in the race.</li>
              <li data-value="correct">Add it to the list of requirements to be considered for the next project.</li>
            </ul>
          </div>
        </div>
      </div>

        <div class="checkered-box clear-both">
          <div class="checkered checkered-inverted"></div>
          <div class="next-box">
            <p>Well done, you’ve delivered another project successfully!<br>Race day is here and everyone is ready.</p>
            <a href="{{$links['next']}}" class="btn">Next</a>
          </div>
        </div>
      </section>
    </main>

    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 4);
        oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');
      </script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-4.js"></script>
    @endsection
