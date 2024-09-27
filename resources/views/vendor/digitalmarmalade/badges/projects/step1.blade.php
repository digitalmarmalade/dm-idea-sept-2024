@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <header class="lockup">
      @include('vendor.digitalmarmalade.badges.projects.header', ['title' => 'Header'])
       <p class="site-title">Projects <span class="step">Step 1 <span>of</span> 4</span></p>
    </header>

    <main>

      <section class="top">
        <div class="holder">
          <div class="theory-box come-in">
            <h1 class="come-in">What is a project?</h1>
            <p class="come-in">Well, the easiest way to define it is as a unique task which has a definite beginning and end. Projects tend to be quite complex, made up of lots of subtasks and often require lots of people, materials and money to complete them.</p>
            <p class="come-in">To help us to navigate the subject, we will explore what it takes to scope, plan and prepare a successful car race.</p>
          </div>
        </div>
      </section>

      <section class="bottom">

        <div class="checkered-box">
          <div class="checkered"></div>
        </div>

        <div class="activity-box activity-box-intro">
          <div class="holder">
            <h2 class="animated slideInDown">What is and what isn't a project?</h2>
            <p class="animated slideInDown">Select which activities below can be classified as a project:</p>

            <ul>

              <li class="incorrect-1 animated zoomIn" data-value="incorrect-1">
                <div class="question">
                  <div class="question-content" >
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-fuel.svg" alt="Racing team member with a gallon of fuel" />
                    <p>The racing car needs to be kept full of fuel. Is filling the car with petrol a project?</p>
                  </div>
                </div>
                <div class="answer">
                  <div class="answer-content">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                    <p>No. A project has a definite beginning and end. Refuelling the car is a task that needs to be repeated indefinitely.</p>
                  </div>
                </div>
              </li>

              <li class="incorrect-2 animated zoomIn" data-value="incorrect-2">
                <div class="question">
                  <div class="question-content" data-value="incorrect">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-inspection.svg" alt="Racing team member with inspection clipboard" />
                    <p>To be allowed to enter a race, the right paperwork needs to be filled in by various departments. Is this a project?</p>
                  </div>
                </div>
                <div class="answer">
                  <div class="answer-content">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                    <p>No. Although a number of people are involved, they are tasks for individuals and are carried out independently.</p>
                  </div>
                </div>
              </li>

              <li class="incorrect-3  animated zoomIn" data-value="incorrect-3">
                <div class="question">
                  <div class="question-content">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-clean.svg" alt="Racing team member with water  hose" />
                    <p>The car needs to be kept clean. Is washing the car a project?</p>
                  </div>
                </div>
                <div class="answer">
                  <div class="answer-content">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt="Incorrect" />
                    <p>No. This has a definite beginning and end but isn’t very complex, so would count as a task rather than a project.</p>
                  </div>
                </div>
              </li>

              <li class="correct animated zoomIn" data-value="correct">
                <div class="question">
                  <div class="question-content" data-value="correct">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/flags.svg"  alt="Car racing flags" />
                    <p>The team has entered a big race. The car needs to be checked, fuelled and cleaned. Parts need to be ordered and fitted to the engine. The driver needs to learn the course and the paperwork needs to be correctly submitted. This must all happen by the last Saturday before the race. Is this a project?</p>
                  </div>
                </div>
                <div class="answer answer-correct">
                  <div class="answer-content">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Correct" />
                    <p>Yes. Completing the race requires different people to complete a number of tasks (subtasks of the project), some of which must be completed before others can start. This means that tasks must be ordered in the most efficient way which can be complex. Race day means there is a definite end date.</p>
                  </div>
                </div>
              </li>



            </ul>
          </div>
        </div>

        <div class="checkered-box clear-both">
          <div class="checkered checkered-inverted"></div>
          <div class="next-box">
            <p>Great answer, let's move on!</p>
            <a href="{{$links['next']}}" class="btn">Next</a>
          </div>
        </div>

      </section>
    </main>

    @endsection


    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 1);
      </script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
