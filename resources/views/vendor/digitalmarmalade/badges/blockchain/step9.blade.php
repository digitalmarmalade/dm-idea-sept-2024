@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-4">
      <section class="top grad-pink">
        <div class="holder">
          <div>
            <h1 data-aos="fade-right">Task</h1>
            <p data-aos="fade-right" data-aos-delay="100">For each of the questions below, select the most appropriate answers:</p>
          </div>

          <div class="question-box question-box-1">
            <div class="question-number" data-aos="fade-right" data-aos-delay="200">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/task-4.png" />
              <p>1/2</p>
            </div>
            <div>
              <p class="question" data-aos="fade-right" data-aos-delay="300">What is cryptocurrency mining?</p>
              <ul class="list list-task">
                <li data-aos="fade-right" data-aos-delay="400">The process of exchanging blocks in a blockchain with commodities like gold.</li>
                <li data-value="true" data-aos="fade-right" data-aos-delay="500">The process by which recent cryptocurrency transactions are checked and new blocks are added to the blockchain.</li>
                <li data-aos="fade-right" data-aos-delay="600">The amount of funds a sender has to raise to complete a blockchain transaction.</li>
                <li data-aos="fade-right" data-aos-delay="700" class="trigger">A private key that must be signed by the sender to complete a blockchain transaction.</li>
              </ul>
              <p ><a data-aos="zoom-in" data-aos-delay="800" data-aos-anchor=".trigger" href="#" class="btn check-answers-1">Check </a></p>
            </div>
          </div>
          <div class="question-box question-box-2">
            <div class="question-number" data-aos="fade-right" data-aos-delay="200">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/task-4.png" />
              <p>2/2</p>
            </div>
            <div>
              <p class="question" data-aos="fade-right" data-aos-delay="300">What are the two conditions to satisfy a valid blockchain transaction on the sender’s side?</p>
              <ul class="list list-task">
                <li data-aos="fade-right" data-aos-delay="400" data-value="true">Sufficiency of funds to complete the transaction.</li>
                <li data-value="true" data-aos="fade-right" data-aos-delay="500">Authorisation for the funds to be transferred.</li>
                <li data-aos="fade-right" data-aos-delay="600">A vast network of computers.</li>
                <li data-aos="fade-right" data-aos-delay="700">The ability to solve complex mathematics problems.</li>
              </ul>
              <p ><a data-aos="zoom-in" data-aos-delay="400" href="#" class="btn check-answers-2">Check </a></p>
            </div>
          </div>
        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-fail feedback-fail-1 ">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/try-again.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Not quite right...</h1>
                <a href="#" class="btn btn-try-again-1" data-aos="zoom-in" data-aos-delay="200">Try again</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-fail feedback-fail-2 ">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/try-again.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Not quite right...</h1>
                <a href="#" class="btn btn-try-again-2" data-aos="zoom-in" data-aos-delay="200">Try again</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-success-1">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                <a class="btn btn-next" data-aos="zoom-in" data-aos-delay="200">Next</a>
            </div>
          </div>
        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-success-2">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn-continue" data-aos="zoom-in" data-aos-delay="200">Continue</a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 9);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/task-4.js"></script>

@endsection
