@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-1">
    <section class="blue top">
      <div class="holder">
        <ul class="step">
          <li data-aos="fade-right"><span>S</span></li>
          <li data-aos="fade-right" data-aos-delay="100"><span>t</span></li>
          <li data-aos="fade-right" data-aos-delay="200"><span>e</span></li>
          <li data-aos="fade-right" data-aos-delay="300"><span>p</span></li>
          <li data-aos="fade-right" data-aos-delay="400"><span>1</span></li>
          <li data-aos="fade-right" data-aos-delay="500"><span>o</span></li>
          <li data-aos="fade-right" data-aos-delay="600"><span>f</span></li>
          <li data-aos="fade-right" data-aos-delay="700"><span>5</span></li>
        </ul>
        <h1 data-aos="fade-up" data-aos-delay="800">What is a personal statement?</h1>
        <p data-aos="fade-up" data-aos-delay="900">A personal statement is a written piece about why you are the perfect candidate for the post or course you are applying for.</p>
        <p data-aos="fade-up" data-aos-delay="1000">The statement is included as part of your application for a job or a place at university/college.</p>
        <p data-aos="fade-up" data-aos-delay="1100">The reality is that it is much more than that – it should be a personal (and real) reflection of your life and hopes, something that shows the very best of you, in a way that is unique, relevant and authentic.</p>
        <p data-aos="fade-up" data-aos-delay="1200">There are many times when you may need to write a personal statement, but the good news is the same principles apply across them all, and this badge will help you find your inner voice to make the very best personal statement you can.</p>
        <p data-aos="fade-up" data-aos-delay="1300">When you get the basics right, you can adapt it for different situations.</p>
      </section>
      <section class="yellow task">
        <div class="holder">
          <p data-aos="fade-up">Which of the below are considered personal statements?<br> Select Yes <b>or</b> No for each of the options below:</p>
          <div class="task-1" data-aos="fade-in" data-aos-delay="200">
          <div class="sheet sheet-1"></div>
          <div class="sheet sheet-2"></div>
          <div class="question question-1">
            <div class="question-number">1<span>/</span>6</div>
            <p>University Personal Statement</p>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/copy.svg" alt="" />
            <ul>
              <li data-value="true">Yes</li>
              <li>No</li>
            </ul>
          </div>

          <div class="question question-2">
            <div class="question-number">2<span>/</span>6</div>
            <p>School Leaver personal statement </p>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/copy.svg" alt="" />
            <ul>
              <li data-value="true">Yes</li>
              <li>No</li>
            </ul>
          </div>

          <div class="question question-3">
            <div class="question-number">3<span>/</span>6</div>
            <p>Graduate personal statement </p>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/copy.svg" alt="" />
            <ul>
              <li data-value="true">Yes</li>
              <li>No</li>
            </ul>
          </div>

          <div class="question question-4">
            <div class="question-number">4<span>/</span>6</div>
            <p>Unemployed or Redundancy personal statement </p>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/copy.svg" alt="" />
            <ul>
              <li data-value="true">Yes</li>
              <li>No</li>
            </ul>
          </div>

          <div class="question question-5">
            <div class="question-number">5<span>/</span>6</div>
            <p>Career break personal statement</p>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/copy.svg" alt="" />
            <ul>
              <li data-value="true">Yes</li>
              <li>No</li>
            </ul>
          </div>

          <div class="question question-6">
            <div class="question-number">6<span>/</span>6</div>
            <p>Career change personal statement</p>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/copy.svg" alt="" />
            <ul>
              <li data-value="true">Yes</li>
              <li>No</li>
            </ul>
          </div>
        </div>
      </section>
      <div class="thats-great hide">
        <section class="green">
          <div class="holder">
            <h1 data-aos="fade-up">That's great!</h1>
            <p data-aos="fade-up" data-aos-delay="200">As you can see – there are many times during your life when you may need to write a personal statement – each with its own specific positioning, but all sharing the same key elements:</p>
            <img data-aos="fade-in" data-aos-delay="400" class="hide-mobile" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-1.png" alt="" />
            <img data-aos="fade-in" data-aos-delay="400" class="hide-desktop" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-mobile.png" alt="" />
            <div class="box box-remember" data-aos="fade-up" data-aos-delay="600">
              <div>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/remember.svg" alt="" />
              </div>
              <div>
                <ul class="remember">
                  <li data-aos="fade-right"><span>R</span></li>
                  <li data-aos="fade-right" data-aos-delay="700"><span>e</span></li>
                  <li data-aos="fade-right" data-aos-delay="800"><span>m</span></li>
                  <li data-aos="fade-right" data-aos-delay="900"><span>e</span></li>
                  <li data-aos="fade-right" data-aos-delay="1000"><span>m</span></li>
                  <li data-aos="fade-right" data-aos-delay="1100"><span>b</span></li>
                  <li data-aos="fade-right" data-aos-delay="1200"><span>e</span></li>
                  <li data-aos="fade-right" data-aos-delay="1300"><span>r</span></li>
                </ul>
                <p>You can tailor your personal statement for different circumstances, but  note you will only submit one personal statement as part of a university application.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="blue">
          <div class="holder">
            <h2>Why is your personal statement important?</h2>
            <p data-aos="fade-up" data-aos-delay="800">When competition for spaces is high, it is often the personal statement that will be the deciding factor on whether you get invited to the next step – so it is critical.</p>
            <p data-aos="fade-up" data-aos-delay="900">It is your chance to show the reader just how passionate, articulate and well-rounded you are - not just in terms of your achievements, but also your approach and potential.</p>
            <p data-aos="fade-up" data-aos-delay="1000">By way of example, significant numbers of courses at UK universities do not require applicants to take aptitude tests or undergo interviews – this means that sometimes the personal statement is the only bit of ''you’’ that admissions tutors get to see. </p>
            <p data-aos="fade-up" data-aos-delay="1100"> It is important that it catches the eye and does you justice. So make sure whatever you put together is not copied, exaggerated, poorly written or worse yet, rushed!</p>

            <div class="box box-deadline" data-aos="fade-up" data-aos-delay="1200">
              <div>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/deadline.svg" alt="" />
              </div>
              <div>
                <h3>Make sure you check your deadline!</h3>
                <p>Check when this is and work backwards from there, giving yourself enough time to get any advice from teachers, organisers, facilitators or careers advisers. You’ll likely go through a few drafts before you get the polished final, so allow enough time to do it properly.</p>
                <p>Take plenty of time to tweak, rethink and, even, rewrite whole sections of your statement. This will result in an accurate, coherent, engaging statement – especially if you keep revisiting it until you are completely happy with it.</p>
              </div>
            </div>

            <div class="box box-positive" data-aos="fade-up" data-aos-delay="1000">
              <div>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/positive.svg" alt="" />
              </div>
              <div>
                <h3>Keep it positive</h3>
                <p>Start with your strengths, focus on your enthusiasm for the course or job and talk positively about yourself.  Do not talk about why you didn’t do something – keep it positive!</p>
              </div>
            </div>

            <div class="box box-real" data-aos="fade-up" data-aos-delay="1100">
              <div>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/exagerate.svg" alt="" />
              </div>
              <div>
                <h3>Keep it real</h3>
                <p>Personal does not mean writing in a way you think the reader is expecting – so no corny clichés, quotes or lists.</p>

                <p>Original does not mean exaggerated claims or using quotes or phrases that are not true – “don’t tell me the sky’s the limit when there are footprints on the moon.” (a true quote given by someone on the BBC TV series The Apprentice). If you use words like “life-changing” or “since I was a child” make sure you are telling the truth.</p>

                <p>Real means using a more natural tone and being specific, backing up your statement with precise examples. This does not mean being chatty and informal as if you were having a conversation with your friend but striking a formal tone which still conveys your passions and achievements.</p>

              </div>
            </div>
          </div>

        </section>
        <section class="blue">
          <div class="holder">
            <h2 data-aos="fade-up">How long should a personal statement be?</h2>
            <div class="university-job">
              <div>
                <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/university.svg" alt="" />
                <h4 data-aos="fade-up" data-aos-delay="200">University Application</h4>
                <p data-aos="fade-up" data-aos-delay="300">You should write a maximum of 4,000 characters (about 500 words).</p>
              </div>
              <div>
                <img data-aos="fade-up" data-aos-delay="100"src="/badge-assets/{{$url['slug']}}/_global/img/job.svg" alt="" />
                <h4 data-aos="fade-up" data-aos-delay="200">Job Application</h4>
                <p data-aos="fade-up" data-aos-delay="300">Write between 50 and 200 words.</p>
              </div>
            </div>
            <p data-aos="fade-up" data-aos-delay="400">However many words you are trying to put together, it is always hard, even for people who love writing.</p>
            <p data-aos="fade-up" data-aos-delay="500">Part of the challenge is creating the essence of you for someone else to find you interesting and appealing. As you begin writing, you will have to boil down your thoughts, skills and experiences into a concise, highly relevant statement where every word counts. </p>

            <!-- <p data-aos="fade-up" data-aos-delay="600">If Twitter, with its 280-character limit, can be used as a highly effective communications tool, then your 4,000-character limit gives you so much more scope.</p> -->



          <div class="box box-remember" data-aos="fade-up" data-aos-delay="600">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/remember.svg" alt="" />
            </div>
            <div>
              <ul class="remember">
                <li data-aos="fade-right"><span>R</span></li>
                <li data-aos="fade-right" data-aos-delay="700"><span>e</span></li>
                <li data-aos="fade-right" data-aos-delay="800"><span>m</span></li>
                <li data-aos="fade-right" data-aos-delay="900"><span>e</span></li>
                <li data-aos="fade-right" data-aos-delay="1000"><span>m</span></li>
                <li data-aos="fade-right" data-aos-delay="1100"><span>b</span></li>
                <li data-aos="fade-right" data-aos-delay="1200"><span>e</span></li>
                <li data-aos="fade-right" data-aos-delay="1300"><span>r</span></li>
              </ul>
              <p>It is best practice to draft your statement, finalising it in a Word document (which makes checking and counting characters much easier) before copying into to the relative application website. This will mean you retain an accurate account of what you’ve written should you be questioned at any later point.</p>
            </div>
          </div>
        </div>
        </section>

        <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>

    </div>

</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 1);
  </script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>

@endsection
