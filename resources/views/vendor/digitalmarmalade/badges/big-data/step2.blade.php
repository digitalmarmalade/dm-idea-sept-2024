@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-1 task-1">
    <section class="step task-header pink">
      <div class="step-task pink" data-aos="fade-up" >Task</div>
      <div class="step-copy-wrapper grad-pink">
        <div class="step-copy ">
          <p  data-aos="fade-right" data-aos-delay="200">We were collecting data way before computers. With the advent of computers, the amount of data we collect has increased and so the amount of storage we need has become much larger! You’ve learned that Big Data can be defined through 4 Vs: Volume, Variety, Velocity and Veracity.</p>
          <p  data-aos="fade-right" data-aos-delay="300">Match the correct ‘V’ with the corresponding statement:</p>
        </div>
      </div>
    </section>
    <section>
      <div class="drop-wrapper">

          <div class="droppable-zone">
              <ul>
                <li class="dropzone" id="droppable1" data-aos="zoom-in" >
                  <span>Volume</span>
                  <p class="after-drop after-drop-1">The amount of data collected and stored.</p>
                </li>

                <li class="dropzone" id="droppable2" data-aos="zoom-in" data-aos-delay="100">
                  <span>Velocity</span>
                  <p class="after-drop after-drop-2">The rate which data is requested and processed.</p>
                </li>

                <li class="dropzone" id="droppable3" data-aos="zoom-in" data-aos-delay="200">
                  <span>Variety</span>
                  <p class="after-drop after-drop-3">The different types of formats of data.</p>
                </li>

                <li class="dropzone" id="droppable4" data-aos="zoom-in" data-aos-delay="300">
                  <span>Veracity</span>
                  <p class="after-drop after-drop-4">The accuracy of data.</p>
                </li>
              </ul>
          </div>
          <div class="drag-options" data-aos="zoom-in" data-aos-delay="400">
              <ul>
                  <li class="drag-option draggable" id="answer_1_1">The rate which data is requested and processed.</li>
                  <li class="drag-option draggable" id="answer_1_2">The amount of data collected and stored.</li>
                  <li class="drag-option draggable" id="answer_1_3">The accuracy of data.</li>
                  <li class="drag-option draggable" id="answer_1_4" >The different types of formats of data.</li>
              </ul>
          </div>
      </div>


    </section>
    <section class="feedback next-step hide grad-dark-blue">
      <h2>Well done!</h2>
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="">Let's move on</a>
    </section>

  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 2);
      </script>


      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>
    @endsection
