@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

  <header class="lockup">
    <p class="step" data-aos="fade-down"><span class="step">1/6</span></p>
    <a target="_blank" href="http://www.idea.org.uk">
      <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="lockup-badge-type" alt="iDEA Inspiring Digital Enterprise Awards" />
    </a>
  </header>

    <main class="step-1">
      <section class="pink">
        <div class="holder">
          <h1 data-aos="fade-upt">Intro</h1>
          <div class="cols-wrapper">
            <div>
              <p data-aos="fade-right" data-aos-delay="100">Although we might not be aware of it, we are all capable of selling. In fact, we do it hundreds of times a week from a very young age.</p>
              <p data-aos="fade-right" data-aos-delay="200">When we become aware that we must sell, however, things get a little trickier. With so many methods of selling, so much advice, so many different approaches, it is easy to feel overwhelmed: the palms start to sweat, the throat starts to dry, and panic starts to set in.</p>
            </div>
            <div>
              <p data-aos="fade-right" data-aos-delay="300">The key to selling is having knowledge of the different ways there are of going about it and finding the way that works for you.</p>
              <p data-aos="fade-right" data-aos-delay="400">In this badge, we are going to try to show you lots of different approaches. All of them have been shown to work, and hopefully by the end of the badge, you’ll have discovered an approach that suits you.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="blue-3">
        <div class="holder">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1.png" class="Why is selling important?" />
          <h2 data-aos="fade-up">Why is selling important?</h2>
          <div class="cols-wrapper">
            <div>
              <p data-aos="fade-right" data-aos-delay="100">Selling is critical to the success of many businesses. The success of businesses is vital to the economy. The strength of the economy dictates the well-being of a country. </p>
              <p data-aos="fade-right" data-aos-delay="200">So, you could say that selling is really quite important.</p>
            </div>
            <div>
              <p data-aos="fade-right" data-aos-delay="300">A good sales person could be the difference between a company making a loss or a profit.</p>
              <p data-aos="fade-right" data-aos-delay="400">It isn’t just people with ‘sales’ in their job title that should try to master the art of selling. Being able to convince people and sell ideas and theories is a great skill to have in all walks of life.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="orange task task-1" id="task">
        <div class="holder">
          <h1 data-aos="fade-up">Task</h1>
          <p data-aos="fade-up" data-aos-delay="100">When you think of ‘selling’ which words pop in to your head and what do they mean to you? Look at the words or sentences below and decide whether you agree that they define selling or not.</p>
          <div class="question-outer">

            <div class="question-wrapper" id="question-1">
              <div class="wrapper">
                <p class="question-number" data-aos="zoom-in" data-aos-delay="200">1/4</p>
                <p class="question" data-aos="fade-up" data-aos-delay="300">The exchange of a commodity for money; the action of selling something.</p>
              </div>
              <div class="question-options">
                <ul>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="400">Yes</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="500" data-value="true">Maybe</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="600">Nope</li>
                </ul>
              </div>
              <div class="question-feedback hide" >
                <h2 data-aos="fade-up">Maybe!</h2>
                <p data-aos="fade-up" data-aos-delay="100">This is the dictionary definition of selling but selling is so much more than this.</p>
                <a href="#task" class="next-question-1" data-aos="fade-up" data-aos-delay="200">Next question</a>
              </div>
            </div>

            <div class="question-wrapper hide" id="question-2" >
              <div class="wrapper">
                <p class="question-number" data-aos="zoom-in" data-aos-delay="200">2/4</p>
                <p class="question" data-aos="fade-up" data-aos-delay="300">Manipulation.</p>
              </div>
              <div class="question-options">
                <ul>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="400">Yes</li>
                  <li class="btn btn-primary" data-aos="zoom-in"  >Maybe</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="600" data-value="true">Nope</li>
                </ul>

              </div>
              <div class="question-feedback hide" >
                <h2 data-aos="fade-up">No!</h2>
                <p data-aos="fade-up" data-aos-delay="100">If a person feels like they are being manipulated, then this is the opposite of good selling!</p>
                <a class="next-question-2" href="#task" data-aos="fade-up" data-aos-delay="200">Next question</a>
              </div>
            </div>

            <div class="question-wrapper hide" id="question-3" >
              <div class="wrapper">
                <p class="question-number" data-aos="zoom-in" data-aos-delay="200">3/4</p>
                <p class="question" data-aos="fade-up" data-aos-delay="300">Pushing a product.</p>
              </div>
              <div class="question-options">
                <ul>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="400" >Yes</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="500" data-value="true">Maybe</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="600">Nope</li>
                </ul>

              </div>
              <div class="question-feedback hide" >
                <h2 data-aos="fade-up">Maybe!</h2>
                <p data-aos="fade-up" data-aos-delay="100">Selling could be seen as a pushing a product. However, if you are successful in your selling approach, your consumer will not need to be pushed, you will have convinced them that what you’re selling satisfies a want or need.</p>
                <a href="#task" data-aos="fade-up" data-aos-delay="200" class="next-question-3">Next question</a>
              </div>
            </div>

            <div class="question-wrapper hide" id="question-4" >
              <div class="wrapper">
                <p class="question-number" data-aos="zoom-in" data-aos-delay="200">4/4</p>
                <p class="question" data-aos="fade-up" data-aos-delay="300">Addressing a problem or need for a fair price.</p>
              </div>
              <div class="question-options">
                <ul>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="400" data-value="true">Yes</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="500">Maybe</li>
                  <li class="btn btn-primary" data-aos="zoom-in" data-aos-delay="600">Nope</li>
                </ul>

              </div>
              <div class="question-feedback hide" >
                <h2 data-aos="fade-up">Yes!</h2>
                <p data-aos="fade-up" data-aos-delay="100">This is the crux of selling. A sales person needs to identify a problem or issue (often known in sales as a “pain point”), provide the means to fix or address this for a fair rate of pay, meaning that both parties end up satisfied with the transaction.</p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <section class="blue-4 continue hide" id="continue">
        <div class="holder">
          <h2 data-aos="fade-up">Well done!</h2>
          <p data-aos="fade-up" data-aos-delay="100">We'll explore this in more detail later.</p>
          <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="zoom-in" data-aos-delay="200" >
            Let's continue</a>
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
