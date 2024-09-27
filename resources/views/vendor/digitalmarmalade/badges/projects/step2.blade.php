@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  <body>

    <header class="lockup">
      @include('vendor.digitalmarmalade.badges.projects.header', ['title' => 'Header'])
      <p class="site-title">Projects <span class="step">Step 2 <span>of</span> 4</span></p>
    </header>

    <main>

      <section class="top">
        <div class="holder">
          <div class="theory-box theory-box-scoping come-in">
            <h1 class="come-in">Scoping</h1>
            <p class="come-in">For a project to be completed successfully we need to be clear what completion means. It is a very good idea to define success at the beginning of the project - this is where project scoping comes in. By understanding project limits we can make sure we stick to these during the project (avoiding scope creep) and focus our efforts on meeting this project scope.</p>
            <p class="come-in">Let's continue with the racing team. The race is two months away. In order to be ready for then, the following tasks must be complete:</p>
            <div class="cols">
              <ul>
                <li class="come-in">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/car-1.svg" alt="Racing car" />
                  <p>In the car</p>
                </li>
                <li class="come-in">The car must be cleaned and prepared to race.</li>
                <li class="come-in">The worn parts in the car’s engine must be replaced.</li>
                <li class="come-in">A new style of gearbox must be fitted.</li>
                <li class="come-in">The car’s tyres must be replaced with new ones.</li>
              </ul>
              <ul>
                <li class="animated slideInUp">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/helmet.svg" alt="Racing helmet" />
                  <p>By the driver</p>
                </li>
                <li class="come-in">They must be familiar with the new gearbox.</li>
                <li class="come-in">They must have learnt the course for this race.</li>
                <li class="come-in">They must have driven practice laps.</li>
                <li class="come-in">The paperwork must be completed and submitted.</li>
              </ul>
          </div>
        </div>
      </section>

      <section class="bottom">
        <div class="checkered-box">
          <div class="checkered"></div>
        </div>
        <div class="activity-box activity-box-step-1">
          <div class="holder">
            <h2 class="animated slideInDown">What is and what isn't in a project scope?</h2>
            <p class="animated slideInDown">Based on the tasks that need to be completed for the race preparation to be deemed a success, it’s time to make some decisions to ensure the project meets the deliverables . Select <strong><span>ONLY</strong></span> the most appropriate activities below to ensure the race is a success and watch out for any potential <span><strong>PROJECT CREEP!</strong></span></p>
          </div>
          <div class="activity-1-slide">
            <div class="scope">
              <div class="slide--content question">
                  <img class="blow-torch-1" src="/badge-assets/{{$url['slug']}}/_global/img/team-blow-torch-1.svg" alt="Racing team member holding a blow torch" />
                  <p>The mechanics have received the parts to replace the worn ones in the engine and have started to fit them.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-1">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-clean.svg" alt="Racing team member holding a hose" />
                  <p>Meanwhile the car maintenance team have begun to prep the car and are washing it.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-2">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope">
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-inspection.svg" alt="Racing team member holding a inspection clipboard" />
                  <p>The accounts department have begun the paperwork for the race entrance fee.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success"  data-value="scope-3">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope">
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-power-tool.svg" alt="Racing team member holding a power tool" />
                  <p>With the parts replaced in the engine, the mechanics are moving on to fitting the new gearbox.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-4">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope">
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-blow-torch-2.svg" alt="Racing team member holding a blow torch" />
                  <p>Good progress is being made with the gear box, so the mechanics are talking about fitting a new fuel injection system.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-project-creep" data-value="creep-1">
                  <img class="animated wobble infinite" src="/badge-assets/{{$url['slug']}}/_global/img/project-creep.svg" alt="Racing team member very angry"/>
                  <p>Project Creep!</p>
                  <span>The requirements of the project are that the new gearbox is fitted and nothing else. Fitting a new fuel injection system could delay the engine being ready reducing the amount of time for the driver to familiarise themselves with the gearbox.</span>
              </div>
            </div>
            <div class="scope">
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-refreshment.svg" alt="Racing team member sitting on a tyre and having a refreshment" />
                  <p>The new tyres have been collected from the wholesaler.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-5">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-idea.svg" alt="Racing team member having an idea" />
                  <p>The maintenance team have finished cleaning the car and have decided to paint a new livery on the car so it really stands out in the race.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-project-creep" data-value="creep-2">
                  <img class="animated wobble infinite" src="/badge-assets/{{$url['slug']}}/_global/img/project-creep.svg" alt="Racing team member very angry"/>
                  <p>Project Creep!</p>
                  <span>The requirements of the project are just that the car is clean and prepared to race. The new livery should be scheduled into a later project otherwise there is a risk that the amount of time the driver has to do practise laps will be reduced.</span>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-course-1.svg" alt="Racing team member with a drawing of the racing course" />
                  <p>The driver has learnt the course.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-6">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-spanners.svg" alt="Racing team member holding spanners" />
                  <p>The new gearbox is fitted.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-7">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-course-2.svg" alt="Racing team member holding the drawing for two racing courses" />
                  <p>Having learnt the course for this race, the driver has decided to learn the course for the next race as well.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-project-creep" data-value="creep-3">
                  <img class="animated wobble infinite" src="/badge-assets/{{$url['slug']}}/_global/img/project-creep.svg" alt="Racing team member very angry"/>
                  <p>Project Creep!</p>
                  <span>The goal of this project is to learn the course for this race. Learning the course for the next race is not one of the project goals, so spending time on it will not help in the delivery of this project.</span>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-tyre-pressure.svg" alt="Racing team member holding a tyre pressure tool" />
                  <p>The old tyres have been removed and the new tyres have been fitted.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-8">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-thumbs-up.svg" alt="Racing team member thumbs up" />
                  <p>With all the mechanical work finished, the mechanics have submitted the race compliance paperwork.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-9">
                  <img class="animated bounce" src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
          <div class="scope" >
            <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-tested.svg" alt="Racing team member smiling" />
                  <p>The driver has tested and got used to the gearbox on the test track.</p>
                  <button class="btn-select">Select</button>
              </div>
              <div class="slide--content answer answer-success" data-value="scope-10">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/project-success.svg" alt="Racing team member with victory trophy"/>
                  <img class="correct" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                  <p>Project Scope</p>
              </div>
            </div>
            <div class="scope" >
              <div class="slide--content question">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/team-idea.svg" alt="Racing team member having an idea" />
                  <p>The car designers and the driver have got together and decided that some wind tunnel testing would help improve the car in the future.</p>
                  <button class="btn-select">Select</buttonn>
              </div>
              <div class="slide--content answer answer-project-creep" data-value="creep-4">
                  <img class="animated wobble infinite" src="/badge-assets/{{$url['slug']}}/_global/img/project-creep.svg" alt="Racing team member very angry"/>
                  <p>Project Creep!</p>
                  <span>While testing the car will undoubtedly be useful and lead to improvements in the design, it is not part of the scope of this project. This will eat into the time allocated for practise laps.</span>
              </div>
            </div>

          </div>
          <button class="btn btn-check">Check your answers</button>
        </div>
        <div class="checkered-box clear-both">
          <div class="checkered checkered-inverted"></div>
          <div class="fail-box">
            <p>You didn’t manage to complete all scope of tasks or avoid project creeps so the project ticked over...</p>
            <button class="btn btn-try-again">Try again</button>
          </div>
          <div class="next-box">
            <p>Well done, you completed all of the tasks and avoided any project creep!</p>
            <a href="{{$links['next']}}" class="btn btn-next">Next</a>
          </div>
        </div>
      </section>
    </main>

    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 2);
        oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
        </script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>
    @endsection
