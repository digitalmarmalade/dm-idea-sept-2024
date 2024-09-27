@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-3 task-3">
    <section class="step task-header grad-orange">
      <div class="step-task orange"  data-aos="fade-up">Task</div>
      <div class="step-copy-wrapper">
        <div class="step-copy">
          <p data-aos="fade-right" data-aos-delay="400">Can you identify the data below as Structured Data <b>or</b> Unstructured Data?</p>
        </div>
      </div>
    </section>

    <section class="grad-orange task">

        <div class="question question-1">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right"  data-aos-delay="100" />
          <img class="question-bg question-bg-right" data-aos="fade-left"  data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div data-aos="zoom-in"  class="question-number">1<span>/</span>8</div>
            <img data-aos="zoom-in"  data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/task-3-1.svg"/>
            <p data-aos="fade-up"  data-aos-delay="200">T-shirt colour</p>
            <ul>
              <li data-aos="zoom-in"  data-aos-delay="300" data-value="true">Structured Data</li>
              <li data-aos="zoom-in"  data-aos-delay="400" >Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
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
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">2<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-2.svg"/>
            <p>Holiday Pictures</p>
            <ul>
              <li >Structured Data</li>
              <li data-value="true">Unstructured Data</li>
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
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">3<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-3.svg"/>
            <p>An email entered on an online form</p>
            <ul>
              <li >Structured Data</li>
              <li data-value="true">Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
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
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">4<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-4.svg"/>
            <p>A video that you have just uploaded to YouTube.</p>
            <ul>
              <li >Structured Data</li>
              <li data-value="true">Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-4" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-4" href="#task">Try again</a>
            </div>
          </div>
        </div>


        <div class="question question-5">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">5<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-5.svg"/>
            <p>A TV set size</p>
            <ul>
              <li data-value="true">Structured Data</li>
              <li >Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-5" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-5" href="#task">Try again</a>
            </div>
          </div>
        </div>

        <div class="question question-6">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">6<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-6.svg"/>
            <p>A conversation with your best friend on the phone</p>
            <ul>
              <li >Structured Data</li>
              <li data-value="true">Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-6" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-6" href="#task">Try again</a>
            </div>
          </div>
        </div>


        <div class="question question-7">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">7<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-7.svg"/>
            <p>You, asking a question to your personal assistant.</p>
            <ul>
              <li >Structured Data</li>
              <li data-value="true">Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-7" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-7" href="#task">Try again</a>
            </div>
          </div>
        </div>

        <div class="question question-8">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">8<span>/</span>8</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-3-8.svg"/>
            <p>Your personal assistant replying to your question.</p>
            <ul>
              <li data-value="true" >Structured Data</li>
              <li >Unstructured Data</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <a class="btn-next btn-next-8" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Let's continue</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-8" href="#task">Try again</a>
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
        oBadges.setSlugAndStep('{{$url['slug']}}', 6);
      </script>


      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-6.js"></script>
    @endsection
