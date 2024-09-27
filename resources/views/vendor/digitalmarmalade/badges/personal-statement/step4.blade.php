@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-3">
  <section class="blue top">
    <div class="holder">
      <ul class="step">
        <li data-aos="fade-right"><span>S</span></li>
        <li data-aos="fade-right" data-aos-delay="100"><span>t</span></li>
        <li data-aos="fade-right" data-aos-delay="200"><span>e</span></li>
        <li data-aos="fade-right" data-aos-delay="300"><span>p</span></li>
        <li data-aos="fade-right" data-aos-delay="400"><span>3</span></li>
        <li data-aos="fade-right" data-aos-delay="500"><span>o</span></li>
        <li data-aos="fade-right" data-aos-delay="600"><span>f</span></li>
        <li data-aos="fade-right" data-aos-delay="700"><span>5</span></li>
      </ul>
      <h1 data-aos="fade-up" data-aos-delay="800">HOW TO MAKE YOUR PERSONAL STATEMENT STAND OUT</h1>
      <p data-aos="fade-up" data-aos-delay="900">Admissions tutors and recruiters are busy people – so that means you need to grab their attention – quickly. The best personal statements which stand out are those that are interesting, reflective, unique, relevant and, you guessed it, personal.</p>
      <p data-aos="fade-up" data-aos-delay="1000"><b>Avoid using gimmicks</b> – you need to be different, but not <b>too</b> different.</p>
      <p data-aos="fade-up" data-aos-delay="1100">You’ve learnt what to include and traps to avoid, but what writing style should you use? Here are some tips to help your personal statement stand out (in the right way):</p>
      </div>
      <div class="birds" data-aos="fade-up" data-aos-delay="1100">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/birds.svg" alt="" />
      </div>

      <div class="cols">

        <div class="col">

          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <h3>Establish a clear structure</h3>
            <ul>
              <li>Opening statement</li>
              <li>Evidence of your aptitude and enthusiasm (outline a few key points)</li>
              <li>Detail relevant and transferable extra-curricular interests</li>
              <li>Provide a summary of your motivation and potential</li>
            </ul>
          </div>

          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <h3>Start strong</h3>
            <p>Begin with a powerful opening statement outlining why you wish to study a particular course, apply for this role or work at this company.</p>
          </div>

          <div class="box box-bird-1" data-aos="fade-up" data-aos-delay="1400">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/bird-3.svg" alt="" />
            <h3>Make it easy to read</h3>
            <p>Write well-structured paragraphs, so that experience, additional qualification, aspirations etc are clearly-defined.</p>
          </div>

          <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>Write naturally</h3>
            <p>Use your own voice. One can often lack the confidence to say things that show who we really are. This is your chance to introduce yourself – use it well!</p>
            <p> We recommend you follow a top tip from professional writers: after you have written something down, read it out loud at least once. You will be surprised at the adjustments you will need to make after you read out loud. It helps you catch repetitions, sentences that are too long, and clunky phrasing. </p>
          </div>

        </div>

        <div class="col">

          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <h3>Don’t let someone else write or rewrite it</h3>
            <p>Write it yourself – and ensure that it reflects your own personality.</p>
            <p>By all means ask others to proof read it or critique it, but make sure that you are the one to make any changes.</p>
            <p>Don’t over-edit, as that will result in any individuality being lost.</p>
          </div>

          <div class="box box-bird-2" data-aos="fade-up" data-aos-delay="1700">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/bird-1.svg" alt="" />
            <h3>Use examples</h3>
            <p>Follow this broad structure of the ABC rule:</p>
            <p><b>A - Action</b>Include examples of what you have accomplished or experienced that have helped you in your choice of course, role or company and boosted your knowledge of the subject area.</p>
            <p><b>B – Benefit</b>By doing these things, explain what you learned or gained; or how you developed as a person.</p>
            <p><b>C - Capability</b>The most successful applicants ensure that the information they include is relevant to their application and shows an insight into who they are and how suitable they might be.</p>

          </div>

          <div class="box box-bird-3" data-aos="fade-up" data-aos-delay="500">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/bird-2.svg" alt="" />
            <h3>Let your personality in</h3>
            <p>Personal statements should be original, not just in terms of using your own words and avoiding plagiarising someone else’s work, but to make sure that what you write reflects who you are as an individual.</p>
          </div>


        </div>

        <div class="col">

          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>Don’t lose sight of the task at hand</h3>
            <p>Always remember to try to answer the question ‘why should we give you a place on this course or offer you this job?’.</p>
            <p>‘What makes you a great candidate?’. Every bit of your personal statement should be answering these questions.</p>
          </div>



          <div class="box box-bird-4" data-aos="fade-up" data-aos-delay="700">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/bird-couple.svg" alt="" />
            <h3>Demonstrate a real interest in the subject</h3>
            <p>It is really important to focus a significant amount of the statement on your chosen subject and to detail what you have read or participated in to evidence a genuine interest in it.</p>
            <p>For example, by reading around the subject area, talking to someone in the relevant profession or gaining some relevant work experience or transferable skills.</p>
          </div>

          <div class="box" data-aos="fade-up" data-aos-delay="800">
            <h3>Provide a memorable conclusion</h3>
            <p>Once you have emphasised your keen interest and relevant qualities, you should round off the statement with a conclusion that will be remembered. There is little point putting all your effort to generate interest in the opening paragraph only for your statement to gradually fade away at the end. A good conclusion will create lasting impact and may express how studying your chosen course or taking on this role will allow you to pursue a particular career or achieve any other plans. It can also underline your motivation and determination.</p>
          </div>

        </div>

      </div>
    </section>

    <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>



</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 4);
  </script>


@endsection
