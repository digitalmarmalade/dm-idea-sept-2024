@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-2 task-2 ">
    <section class="step task-header red">
      <div class="step-task red"  data-aos="fade-up">Task</div>
      <div class="step-copy-wrapper grad-red">
        <div class="step-copy ">
          <p  data-aos="fade-right" data-aos-delay="400">Are the stataments below true <b>or</b> false?</p>
        </div>
      </div>
    </section>
    <section class="grad-red task">

        <div class="question question-1">
          <img class="question-bg question-bg-left" data-aos="fade-right" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" data-aos="fade-left" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div data-aos="fade-in" data-aos-delay="100" class="question-number">1<span>/</span>4</div>
            <img data-aos="zoom-in" src="/badge-assets/{{$url['slug']}}/_global/img/task-2-1.svg"/>
            <p data-aos="fade-up" data-aos-delay="200">Before computers, humanity has never had any means for collecting data.</p>
            <ul>
              <li data-aos="zoom-in" data-aos-delay="300">True</li>
              <li data-aos="zoom-in" data-aos-delay="400" data-value="true">False</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>The Library of Alexandria, located in Egypt stored approximately half a million scrolls covering everything humankind had learned so far, on almost every topic imaginable. Sadly, in 48AD it is thought to have been destroyed by the invading Romans, perhaps accidentally.</p>
              <a class="btn-next btn-next-1" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-1" href="#task">Try again</a>
            </div>
          </div>
        </div>

        <div class="question question-2">
          <img class="question-bg question-bg-left"  src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right"  src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">2<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-10.svg"/>
            <p>A method to magnetically record data on tape was invented in 1928.</p>
            <ul>
              <li data-value="true">True</li>
              <li>False</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-2" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-2" href="#task">Try again</a>
            </div>
          </div>
        </div>

        <div class="question question-3">
          <img class="question-bg question-bg-left" data-aos="fade-right" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" data-aos="fade-left" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">3<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-4.svg"/>
            <p>The birth of the web occurred in the 1970s.</p>
            <ul>
              <li >True</li>
              <li data-value="true">False</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>Bit of a trick question, as the birth of the <em>world wide web</em> is actually credited to computer scientist Tim Berners-Lee who, in March 1989,  published an article in MacWorld describing a worldwide, interconnected web of data, accessible to anyone from anywhere. Originally called Mesh – it became the ‘World Wide Web’ in 1990 whilst Berners-Lee was writing the code.</p>

              <p>However, the internet (more specifically the ‘internet protocol suite‘) was actually developed by Robert E Khan and Vint Cerf in 1974.</p>

              <p>This followed on from the work, began in 1957, of ARPANET (Advanced Research Project Agency Network) which was funded by the US Government to ensure that, in the effect of a nuclear war, they could still function as needed.</p>

              <a class="btn-next btn-next-3" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-3" href="#task">Try again</a>
            </div>
          </div>
        </div>

        <div class="question question-4">
          <img class="question-bg question-bg-left" data-aos="fade-right" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" data-aos="fade-left" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">4<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2-4.svg"/>
            <p>In 2008 the average worker was generating about 12 gigabytes of information on a daily basis.</p>
            <ul>
              <li data-value="true">True</li>
              <li>False</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-4" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Let's continue</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-4" href="#task">Try again</a>
            </div>
          </div>
        </div>


    </section>
    <section class="next-step hide">
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
    </section>

  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 4);
      </script>


      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-4.js"></script>
    @endsection
