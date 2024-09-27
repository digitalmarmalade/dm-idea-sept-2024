@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-5">
      <section class="top grad-pink">
        <div class="holder">
          <div>
            <h1 data-aos="fade-right">Task</h1>
            <p data-aos="fade-right" data-aos-delay="100">Are the statements below true or false?</p>
          </div>
          <div class="questions-box">
            <img data-aos="fade-up" src="/badge-assets/{{$url['slug']}}/_global/img/task-5.png" />
            <ul>
              <li>
                  <p data-aos="zoom-in">The number of retailers accepting cryptocurrencies as a means of payment is growing. So much so, that you can use cryptocurrencies to pay for hotels and flights.</p>
                  <a data-aos="zoom-in" data-aos-delay="100" data-value="1"href="#"><span>True</span></a>
                  <a data-aos="zoom-in" data-aos-delay="200" data-value="2" href="#"><span>False</span></a>
              </li>
              <li>
                  <p data-aos="zoom-in">There are many cryptocurrencies available. As an investor, you can acquire access to all of them very easily.</p>
                  <a data-aos="zoom-in" data-aos-delay="100" data-value="3"href="#"><span>True</span></a>
                  <a data-aos="zoom-in" data-aos-delay="200" data-value="4" href="#"><span>False</span></a>
              </li>
              <li class="trigger">
                  <p data-aos="zoom-in">To be able to make a profit from cryptocurrency, miners need to invest heavily in equipment and electricity.</p>
                  <a data-aos="zoom-in" data-aos-delay="100" data-value="5" href="#"><span>True</span></a>
                  <a data-aos="zoom-in" data-aos-delay="200" data-value="6" href="#"><span>False</span></a>
              </li>
            </ul>
          </div>
          <a data-aos="zoom-in" data-aos-delay="400" href="#" class="btn check-answers" data-aos-anchor=".trigger">Check </a>
        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-fail">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/try-again.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Not quite right...</h1>
                <a href="#" class="btn btn-try-again" data-aos="zoom-in" data-aos-delay="200">Try again</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-success">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                <a  onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" data-aos="zoom-in" data-aos-delay="200">Continue</a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 11);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/task-5.js"></script>
<script>
</script>
@endsection
