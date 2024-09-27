@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <header class="lockup">
      @include('vendor.digitalmarmalade.badges.projects.header', ['title' => 'Header'])
      <p class="site-title">Projects<span class="step">Step 3 <span>of</span> 4</span></p>
    </header>

    <main>

      <section class="top">
        <div class="holder">
          <div class="theory-box theory-box-planning come-in">
            <h1 class="animated come-in">Planning</h1>
            <p class="animated come-in">There&#8217s a lot to think about when planning a project:</p>
            <ul>
              <li class="come-in"><span></span><p>You need to understand the project requirements. This requires research and meetings with stakeholders - the people who are invested in the project and need it to deliver what it is setting out to do.</p></li>
              <li class="come-in"><span></span><p>You need to plan how long each requirement will take. This may require estimates using past projects as a guide.</p></li>
              <li class="come-in"><span></span><p>You need to arrange the tasks. Can some tasks be done at the same time? Do others need to be done in sequence?</p></li>
              <!-- <li class="come-in"><span></span><p>Can the project be done in sequence or through a set of cycles of work?</p></li> -->
              <li class="come-in"><span></span><p>What about delays? How are you building in time for things that could go wrong?</p></li>
              <li class="come-in"><span></span><p>Who is doing each task and have you balanced these up within the team to match the team strengths?</p></li>
              <li class="come-in"><span></span><p>Have you included a way of accommodating any changes through a change request process?</p></li>
              <li class="come-in"><span></span><p>Have you written all this down and clearly set out the project objectives as part of the terms of reference?</p></li>
            </ul>
          </div>
        </div>
      </section>

      <section class="bottom">
        <div class="checkered-box">
          <div class="checkered"></div>
        </div>
        <div class="activity-box activity-box-step-2">
          <div class="holder">
            <h2 class="animated slideInDown">Drag and drop the steps for planning a project in the correct order:</h2>
            <div class="cols">
              <div class="col drag-options animated slideInLeft">
                <ul>
                  <li class="drag-option draggable" id="answer_1_1"><span></span><p>Identify project risks which may delay the project and plan in extra time to allow for these.</p></li>
                  <li class="drag-option draggable" id="answer_1_2"><span></span><p>Create the terms of reference for the project which will be referred to throughout.</p></li>
                  <li class="drag-option draggable" id="answer_1_3"><span></span><p>Define and plan the tasks and the order in which they will be done.</p></li>
                  <li class="drag-option draggable" id="answer_1_4"><span></span><p>Estimate how much time is needed for each requirement.</p></li>
                  <li class="drag-option draggable" id="answer_1_5"><span></span><p>Start the project!</p></li>
                  <li class="drag-option draggable" id="answer_1_6"><span></span><p>Assign the tasks to team members.</p></li>
                  <li class="drag-option draggable" id="answer_1_7"><span></span><p>Meet with relevant stakeholders and research the requirements of the project.</p></li>
                </ul>
              </div>

              <div class="col droppable-zone animated slideInRight">
                <ul>
                  <li class="dropzone" id="droppable1">
                    <div class="before-drop">
                    1
                    </div>
                    <div class="after-drop">
                      <span></span><p>Meet with relevant stakeholders and research the requirements of the project.</p>
                    </div>
                  </li>

                  <li class="dropzone" id="droppable2">
                    <div class="before-drop">
                      2
                    </div>
                    <div class="after-drop">
                      <span></span><p>Estimate how much time is needed for each requirement.</p>
                    </div>
                  </li>

                  <li class="dropzone" id="droppable3">
                    <div class="before-drop">
                      3
                    </div>
                    <div class="after-drop">
                      <span></span><p>Define and plan the tasks and the order in which they will be done.</p>
                    </div>
                  </li>

                  <li class="dropzone" id="droppable4">
                    <div class="before-drop">
                    4
                    </div>
                    <div class="after-drop">
                      <span></span><p>Identify project risks which may delay the project and plan in extra time to allow for these.</p>
                    </div>
                  </li>

                  <li class="dropzone" id="droppable5">
                    <div class="before-drop">
                      5
                    </div>
                    <div class="after-drop">
                      <span></span><p>Assign the tasks to team members.</p>
                    </div>
                  </li>

                  <li class="dropzone" id="droppable6">
                    <div class="before-drop">
                      6
                    </div>
                    <div class="after-drop">
                      <span></span><p>Create the terms of reference for the project which will be referred to throughout.</p>
                    </div>
                  </li>

                  <li class="dropzone" id="droppable7">
                    <div class="before-drop">
                      7
                    </div>
                    <div class="after-drop">
                      <span></span><p>Start the project!</p>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="checkered-box clear-both">
          <div class="checkered checkered-inverted"></div>
          <div class="next-box">
            <p>Well done, let's move on!</p>
            <a href="{{$links['next']}}" class="btn">Next</a>
          </div>
        </div>
      </section>
    </main>

    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 3);
        oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
      </script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
    @endsection
