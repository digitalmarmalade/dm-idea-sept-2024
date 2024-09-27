@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-5">
  <section class="blue top">
    <div class="holder">
      <ul class="step">
        <li data-aos="fade-right"><span>S</span></li>
        <li data-aos="fade-right" data-aos-delay="100"><span>t</span></li>
        <li data-aos="fade-right" data-aos-delay="200"><span>e</span></li>
        <li data-aos="fade-right" data-aos-delay="300"><span>p</span></li>
        <li data-aos="fade-right" data-aos-delay="400"><span>5</span></li>
        <li data-aos="fade-right" data-aos-delay="500"><span>o</span></li>
        <li data-aos="fade-right" data-aos-delay="600"><span>f</span></li>
        <li data-aos="fade-right" data-aos-delay="700"><span>5</span></li>
      </ul>
      <h1 data-aos="fade-up" data-aos-delay="800">building a personal statement</h1>
      <p data-aos="fade-up" data-aos-delay="900">We have explained what makes a personal statement shine, given you some techniques to help you stand out from the crowd and helped you discover how to identify your transferable skills. Now it is time to see if you can spot a great narrative to suit different situations.</p>
      <div class="box box-remember box-remember-diagram" data-aos="fade-up" data-aos-delay="1000">
        <div class="remember-diagram">
            <img class="balloon" src="/badge-assets/{{$url['slug']}}/_global/img/remember.svg" alt="" />
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

            <p>The statement should follow a thoughtful structure to ensure key points are covered.The three elements to remember are:</p>

        </div>
        <div>
          <img class="hide-mobile diagram" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-2.png" alt="" />
          <img class="hide-desktop diagram" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-mobile.png" alt="" />
        </div>
      </div>
    </section>

    <div class="application application-tennie">
      <section class="yellow">
        <div class="holder">

          <img data-aos="zoom-in" class="profile" src="/badge-assets/{{$url['slug']}}/_global/img/tennie-profile.svg" alt="" />
          <h2 data-aos="fade-up" data-aos-delay="100">Tennie T</h2>
          <p data-aos="fade-up" data-aos-delay="200"><b>Tennie is applying for a place on a Law course at a renowned university.</b></p>
          <p data-aos="fade-up" data-aos-delay="300">Read through the two personal statements below. Select the statement that will impress the universities he is applying for the most.</p>

          <div class="cols">
            <div class="col col-tennie">
              <div class="application-sheet application-sheet-tennie application-sheet-tennie-1" data-aos="fade-up" data-aos-delay="400">
                <h3>Personal statement by Tennie T</h3>
                <p>A career in law would give me the opportunity to pursue an intellectually challenging field of study which will give me a strong foundation to support my ambition of working in law.</p>

                <p>I believe that studying law will provide me with a continuous and stimulating learning experience in a subject that matters to the values and ethics of society.</p>

                <p>The appreciation of other cultures and society will certainly count in my favour in the study of law. As an international student having lived in many countries, I have been inspired to learn about different cultures and their perspectives and frame arguments that adapt in different situations.</p>

                <p>Studying the Theory of Knowledge has helped me gain greater awareness of our world and to conduct rational and logical approaches to complex questions and their uncertainties. Additionally, in history, my experience analysing a variety of biased sources and striving to substantiate points with historiography, I believe would help me in the study of law.</p>

                <p>In participating in the model united nations, I was pleased to be voted most diplomatic delegate. I was able to achieve my goal of developing my skills in public speaking and debate. I was challenged with the issue of international property rights, passionately arguing and often siding for countries whose views differ from my own.</p>

                <p>I developed strong communication skills by taking an active role in resolving differences of opinion during monthly Rugby Society meetings.</p>
                <p>I have research and analysis skills demonstrated by my application of business analytical models during my second-year modules, where I was awarded a first in my exams.</p>

                <p>I have undertaken community services which have shown me first-hand the social challenges in Sao Paulo. The discrepancy between the poor and the rich made me determined to try and make a difference with the skills acquired in the study of the Law.</p>

                <p>I teach English on a voluntary basis. Through these rewarding experiences, I’ve learned that language barriers can be overcome by non-verbal communication and that human connections can still be achieved.</p>

                <p >After qualifying as a solicitor, I intend to secure a placement at a law firm specialising in international patents.</p>

                <a href="#" class="tennie-submit tennie-submit-1">Submit Statement Number 1</a>

              </div>
              <!-- <div class="box box-task-5 task-5" id="task" data-aos="fade-up" data-aos-delay="600">

                <div class="question question-1">
                  <div class="question-number">1<span>/</span>9</div>
                  <p>Why are you applying for your chosen course?</p>
                  <ul>
                    <li>Having a law degree will help me in my career options in the future.</li>
                    <li data-value="true">A career in law would give me the opportunity to pursue an intellectually challenging field of study which will give me a strong foundation to support my ambition of working in law. </li>
                    <li>A law degree is my back-up plan<br>since I still don’t know fully which subject to pursue.</li>
                  </ul>
                  <a class="btn-add btn-add-1" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-2">
                  <div class="question-number">2<span>/</span>9</div>
                  <p>Why does this subject interest you?</p>
                  <ul>
                    <li>Ever since I was a kid, law was<br> my passion.</li>
                    <li data-value="true">I believe that studying law will provide me with a continuous and stimulating learning experience in a subject that matters to the values and ethics<br>of society.  </li>
                    <li>A career in law will provide me with the financial resources to strive in<br> our society.</li>
                  </ul>
                  <a class="btn-add btn-add-2" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-3">
                  <div class="question-number">3<span>/</span>9</div>
                  <p>Why do you think you're suitable for the course?</p>
                  <ul>
                    <li>I like to argue.</li>
                    <li>I believe that is a good thing to help people to get out of difficult situations, and that is what law is all about.</li>
                    <li data-value="true">The appreciation of other cultures and society will certainly count in my favour in the study of law. As an international student having lived in many countries, I have been inspired to learn about different cultures and their perspectives and frame arguments that adapt in different situations.</li>
                  </ul>
                  <a class="btn-add btn-add-3" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-4">
                  <div class="question-number">4<span>/</span>9</div>
                  <p>Do your current or previous studies relate to the course that you have chosen?</p>
                  <ul>
                    <li data-value="true">Studying the theory of knowledge has helped me gain greater awareness of our world and to conduct rational and logical approaches to complex questions and their uncertainties. Additionally, in history, my experience analysing a variety of biased sources and striving to substantiate points with historiography, I believe would help me in the study of law.</li>
                    <li>I believe that having studied theatre studies will contribute to my life as<br> an attorney.</li>
                    <li>The chemistry classes I took are helping me to understand the world around me and I can help people to make much more educated choices.</li>
                  </ul>
                  <a class="btn-add btn-add-4" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-5">
                  <div class="question-number">5<span>/</span>9</div>
                  <p>Have you taken part in any other activities that demonstrate your interest in the course?</p>
                  <ul>
                    <li data-value="true">In participating in the Model United Nations, I was pleased to be voted most diplomatic delegate. I was able to achieve my goal of developing my skills in public speaking and debate. I was challenged with the issue of international property rights, passionately arguing and often siding for countries whose views differ from my own.</li>
                    <li>In participating in the last production of ‘Hamlet’ at the Theatre in The Corner Summer season I had the chance to put in practice my learnings from<br> drama classes.</li>
                    <li>The chemistry classes I took help me to understand the world around me. Much like a lawyer, who also needs to understand the world around me.</li>
                  </ul>
                  <a class="btn-add btn-add-5" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-6">
                  <div class="question-number">6<span>/</span>9</div>
                  <p>Universities like to know the skills you have that will help you on the course, or generally with life at university. List your skills here and any supporting evidence to substantiate your experience.</p>
                  <ul>
                    <li data-value="true">I developed strong communication skills by taking an active role in resolving differences of opinion during monthly Rugby Society meetings.</li>
                    <li data-value="true">I have research and analysis skills demonstrated by my application of business analytical models during my second-year modules, where I was awarded a first in my exams.</li>
                    <li>By practicing pool diving, I considerably improved my swimming technique.</li>
                    <li data-value="true">Representing the student population in formal functions, my role as student delegate has allowed me to develop leadership qualities and maturity. I believe that now I am more confident and self-assured, because of the obligation to set a positive example to other students.</li>
                  </ul>
                  <a class="btn-add btn-add-6" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-7">
                  <div class="question-number">7<span>/</span>9</div>
                  <p>Include any other achievements you’re proud of, positions of responsibility that you hold or have held both in and out of school, and attributes that make you interesting, special or unique.</p>
                  <ul>
                    <li data-value="true">My participation in the Global Young Leaders Conference in America and seeing first hand the significance of Washington and New York's worldwide economic importance was truly inspiring. I was challenged to engage in passionate discussions on matters such as human rights, and the justification of current wars directly affecting politics. This experience has inspired me greatly and consolidated my interest in global affairs, giving me the opportunity to hone diplomatic skills through thought-provoking simulations.</li>
                    <li>I was social secretary for my Halls of Residence – I really enjoyed it because it allowed me to meet lots of people and make some really good friends. </li>
                    <li>As a violinist, I won prizes in various competitions and performed on numerous occasions both in the UK and abroad.</li>
                  </ul>
                  <a class="btn-add btn-add-7" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-8">
                  <div class="question-number">8<span>/</span>9</div>
                  <p>Include details of jobs, placements, work experience or voluntary work, particularly if it's relevant to your chosen course(s). Try to link any experience to skills or qualities related to the course.</p>
                  <ul>
                    <li data-value="true">I have undertaken community services which have shown me first-hand the social challenges in Sao Paulo. The discrepancy between the poor and the rich made me determined to try and make a difference with the skills acquired in the study of the law.</li>
                    <li>I carried out work experience in the Department of Chemistry of the university working very close to top-level researchers and inspirational scientists.</li>
                    <li data-value="true">I teach English on a voluntary basis. Through these rewarding experiences, I’ve learned that language barriers can be overcome by non-verbal communication and that human connections can still <br>be achieved.</li>
                  </ul>
                  <a class="btn-add btn-add-8" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-9">
                  <div class="question-number">9<span>/</span>9</div>
                  <p>If you know what you’d like to do after completing the course, explain how you want to use the knowledge and experience that you gain.</p>
                  <ul>
                    <li data-value="true">After qualifying as a solicitor, I intend to secure a placement at a law firm specialising in international patents.</li>
                    <li>After graduation I would like to resume my music practice and carry on performing as a violinist.</li>
                    <li>I intend to gain work experience and build up a portfolio of work by looking for internships at advertising agencies.</li>
                  </ul>
                  <a class="btn-add btn-add-9" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                  <a class="btn-add btn-submit-tennie" href="#interview-tennie">
                  Submit application
                  </a>
                </div>

              </div> -->
            </div>
            <div class="col col-tennie">
              <div class="application-sheet application-sheet-tennie application-sheet-tennie-2" data-aos="fade-up" data-aos-delay="700">
                <h3>Personal statement by Tennie T</h3>

                <p>Having a law degree will help me in my career options in the future. A law degree is my back-up plan since I still don’t know fully which subject to pursue.</p>

                <p>Ever since I was a kid, law was my passion and I do like to argue.</p>

                <p>I believe that having studied theatre studies will contribute to my life as an attorney and the chemistry classes I took are helping me to understand the world around me and I can help people to make much more educated choices. By practicing pool diving, I considerably improved my swimming technique.</p>

                <p>As a violinist, I won prizes in various competitions and performed on numerous occasions both in the UK and abroad.</p>

                <p>I carried out work experience in the Department of Chemistry of the university working very close to top-level researchers and inspirational scientists.</p>

                <p class="last">After graduation in Law I would like to retake my music practice and carry on performing as a violinist.</p>

                <a href="#" class="tennie-submit tennie-submit-2">Submit Statement Number 2</a>


                <!-- <p class="answer answer-wrong" id="answer-1B">Having a law degree will help me in my career options in the future.</p>
                <p class="answer" id="answer-1A" data-value="true">A career in law would give me the opportunity to pursue an intellectually challenging field of study which will give me a strong foundation to support my ambition of working in law.</p>
                <p class="answer answer-wrong" id="answer-2B">A law degree is my back-up plan since I still don’t know fully which subject to pursue.</p>

                <p class="answer answer-wrong" id="answer-3B">Ever since I was a kid, law was my passion. </p>
                <p class="answer" id="answer-2A" data-value="true">I believe that studying law will provide me with a continuous and stimulating learning experience in a subject that matters to the values and ethics of society.</p>
                <p class="answer answer-wrong" id="answer-4B">A career in law will provide me with the financial resources to strive in our society.</p>

                <p class="answer answer-wrong" id="answer-5B">I like to argue.</p>
                <p class="answer answer-wrong" id="answer-6B">I believe that is a good thing to help people to get out of difficult situations, and that is what law is all about.</p>
                <p class="answer" id="answer-3A" data-value="true">The appreciation of other cultures and society will certainly count in my favour in the study of law. As an international student having lived in many countries, I have been inspired to learn about different cultures and their perspectives and frame arguments that adapt in different situations.</p>

                <p class="answer" id="answer-4A" data-value="true">Studying the Theory of Knowledge has helped me gain greater awareness of our world and to conduct rational and logical approaches to complex questions and their uncertainties. Additionally, in history, my experience analysing a variety of biased sources and striving to substantiate points with historiography, I believe would help me in the study of law.</p>
                <p class="answer answer-wrong" id="answer-7B">I believe that having studied theatre studies will contribute to my life as an attorney.</p>
                <p class="answer answer-wrong" id="answer-8B">The chemistry classes I took are helping me to understand the world around me and I can help people to make much more educated choices.</p>

                <p class="answer" id="answer-5A" data-value="true">In participating in the model united nations, I was pleased to be voted most diplomatic delegate. I was able to achieve my goal of developing my skills in public speaking and debate. I was challenged with the issue of international property rights, passionately arguing and often siding for countries whose views differ from my own.</p>
                <p class="answer answer-wrong" id="answer-9B">In participating in the last production of ‘Hamlet’ at the Theatre in The Corner Summer Season I had the chance to put in practice my learnings from drama classes.</p>
                <p class="answer answer-wrong" id="answer-10B">The chemistry classes I took help me to understand the world around me. Much like a lawyer, who also needs to understand the world around me.</p>

                <p class="answer" id="answer-6A" data-value="true">I developed strong communication skills by taking an active role in resolving differences of opinion during monthly Rugby Society meetings.</p>
                <p class="answer" id="answer-11B" data-value="true">I have research and analysis skills demonstrated by my application of business analytical models during my second-year modules, where I was awarded a first in my exams.</p>
                <p class="answer answer-wrong" id="answer-12B">By practicing pool diving, I considerably improved my swimming technique.</p>
                <p class="answer" id="answer-7A" data-value="true">Representing the student population in formal functions, my role as student delegate has allowed me to develop leadership qualities and maturity. I believe that now I am more confident and self-assured, because of the obligation to set a positive example to <br>other students.</p>

                <p class="answer" id="answer-8A" data-value="true">My participation in the Global Young Leaders Conference in America and seeing first-hand the significance of Washington and New York's worldwide economic importance was truly inspiring. I was challenged to engage in passionate discussions on matters such as human rights, and the justification of current wars directly affecting politics. This experience has inspired me greatly and consolidated my interest in global affairs, giving me the opportunity to hone diplomatic skills through thought-provoking simulations.</p>
                <p class="answer answer-wrong" id="answer-13B">I was social secretary for my Halls of Residence – I really enjoyed it because it allowed me to meet lots of people and make some really good friends.</p>
                <p class="answer answer-wrong" id="answer-14B">As a violinist, I won prizes in various competitions and performed on numerous occasions both in the UK and abroad.</p>

                <p class="answer" id="answer-10A" data-value="true">I have undertaken community services which have shown me first-hand the social challenges in Sao Paulo. The discrepancy between the poor and the rich made me determined to try and make a difference with the skills acquired in the study of the Law.</p>
                <p class="answer answer-wrong" id="answer-17B">I carried out work experience in the Department of Chemistry of the university working very close to top-level researchers and inspirational scientists.</p>
                <p class="answer" id="answer-9A" data-value="true">I teach English on a voluntary basis. Through these rewarding experiences, I’ve learned that language barriers can be overcome by non-verbal communication and that human connections can still be achieved.</p>

                <p class="answer" id="answer-11A" data-value="true">After qualifying as a solicitor, I intend to secure a placement at a law firm specialising in international patents.</p>
                <p class="answer answer-wrong" id="answer-16B">After graduation I would like to retake my music practice and carry on performing as<br> a violinist.</p>
                <p class="answer answer-wrong" id="answer-17B">I intend to gain work experience and build up a portfolio of work by looking for internships at advertising agencies.</p> -->

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="interview-tennie-fail hide">
      <section class="red">
        <div class="holder">
          <h2>That's not quite right...</h2>

          <p>This is not the most suitable statement: it does not fully justify a true interest for studying Law and the activities and experiences described relate very little with the carreer Tennie T is applying for. Furthemore, a university application should contain around 4,000 characters (about 500 words). </p>

          <p>On the other hand, the Personal Statement Number 1 depicts very well his interest for the subject and demonstrates how his experiences have helped him to develop skills to succeed at the course and in a future career.</p>

        </div>

      </section>
      <a href="#" class="btn btn-continue-tennie">Continue</a>
    </div>



    <!-- <div class="interview-tennie-incomplete hide">
      <section class="red">
        <div class="holder">
          <h2>That's not quite right...</h2>
          <p>Tennie T's application is coming together well but you have not selected all the relevant information, what else would enhance his personal statement?</p>
          <p>Review your answers and submit his application again.</p>

        </div>

      </section>
      <a href="#" class="btn btn-try-again-tennie">Try again</a>
    </div> -->


    <section class="orange-solid interview-tennie-success hide" >
      <div class="holder ">
        <img src="/badge-assets/{{$url['slug']}}/_global/img/tennie-celebration.gif" alt="" />
        <h2>We have great news!</h2>

<!--
        <div class="cols"> -->
            <p>Tennie T's Personal Statement was successful, well done!</p>

               <!-- This is the most suitable application: it depicts very well his interest for the subject of Law and demonstrates how his experiences have helped him to develop skills to succeed at the course and in a future career.</p>

            <p>On the other hand, the Personal Statement Number 2 does not fully justify a true interest for studying Law and the activities and experiences described relate very little with the carreer Tennie T is applying for. Furthemore, a university application should contain around 4,000 characters (about 500 words). </p> -->
        <!-- </div> -->

      </div>
        <a href="#" class="btn btn-continue-tennie">Continue</a>
    </section>

    <div class="application application-sharon hide">
      <section class="yellow">
        <div class="holder">
          <img data-aos="zoom-in" class="profile" src="/badge-assets/{{$url['slug']}}/_global/img/sharon-profile.svg" alt="" />
          <h2 data-aos="fade-up" data-aos-delay="100">Sharon T</h2>
          <p data-aos="fade-up" data-aos-delay="200"><b>Sharon is applying for the position of Hotel Manager at a luxury hotel.</b></p>
          <p data-aos="fade-up" data-aos-delay="300">Now let's help Sharon to submit a personal statement that will impress. Once more, read through both Personal Applications below and submit the one that best fits her overall job application.</p>


          <div class="cols">
            <div class="col col-sharon">
              <!-- <div class="box box-task-5 task-7" id="task" data-aos="fade-up" data-aos-delay="2200">

                <div class="question question-1-2">
                  <div class="question-number">1<span>/</span>3</div>
                  <p>Tell us about yourself. In a few words, explain who you are and why you are suitable for the job on offer.</p>
                  <ul>
                    <li data-value="true">I am a highly-motivated and results orientated manager within the luxury hotel sector.</li>
                    <li data-value="true">As recent graduate from Durham University, with a 2:1 honours degree in Hospitality Management, I have undertaken several internships in local hotels.</li>
                    <li>I am a highly motivated and experienced PA, currently looking to resume my professional career after dedicating the last five years to raising a family. Excellent admin skills, thorough knowledge of all Microsoft Office programs, as well as proficiency in minute-taking and extensive experience liaising with clients.</li>
                  </ul>
                  <a class="btn-add btn-add-1-2" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-2-2">
                  <div class="question-number">2<span>/</span>3</div>
                  <p>Tell us which skills and competences you will add to the team.</p>
                  <ul>
                    <li>These placements have enabled me to develop not only specific media industry experience, but also a valuable and transferable skill-set in this fast-paced sector.</li>
                    <li data-value="true">I have a proven track record of providing exemplary levels of service to a broad range of guests, including VIPs and high-profile individuals.</li>
                    <li>I hold excellent admin skills, thorough knowledge of all Microsoft Office programs, as well as proficiency in minute-taking and extensive experience liaising with clients.</li>
                  </ul>
                  <a class="btn-add btn-add-2-2" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                </div>

                <div class="question question-3-2">
                  <div class="question-number">3<span>/</span>3</div>
                  <p>Tell us about your career goals for the future.</p>
                  <ul>
                    <li>I am looking to secure a position in a media organisation, where I can bring immediate and strategic value and develop my current skillset further.</li>
                    <li data-value="true">Having graduated in Hospitality Management, I see my career progressing to managing a chain of hotels, in the future. </li>
                    <li>I plan to eventually progress into a more senior PA or EA role within your organisation.</li>
                  </ul>
                  <a class="btn-add btn-add-3-2" href="#">
                    <img  src="/badge-assets/{{$url['slug']}}/_global/img/include-white.svg" alt="" />
                    Add selected answers to statement
                  </a>
                  <a class="btn-add btn-submit-sharon" href="#interview">
                  Submit application
                  </a>
                </div>

              </div> -->

              <div class="application-sheet application-sheet-sharon application-sheet-sharon-1" data-aos="fade-up" data-aos-delay="400">
                <h3>Personal statement by Sharon D</h3>

                <p>I am a highly-motivated and results orientated manager within the luxury hotel sector.</p>
                <p>As recent graduate from Durham University, with a 2:1 honours degree in Hospitality Management, I have undertaken several internships in local hotels.</p>

                <p>I have a proven track record of providing exemplary levels of service to a broad range of guests, including VIPs and high-profile individuals.</p>

                <p class="last">Having graduated in Hospitality Management, I see my career progressing to managing a chain of hotels, in the future. </p>

                <a href="#" class="sharon-submit sharon-submit-1">Submit Statement Number 1</a>

              </div>
            </div>
            <div class="col col-sharon">
              <div class="application-sheet application-sheet-sharon application-sheet-sharon-2" data-aos="fade-up" data-aos-delay="500">
                <h3>Personal statement by Sharon D</h3>

                <p>I am a highly motivated and experienced PA, currently looking to resume my professional career after dedicating the last five years to raising a family. Excellent admin skills, thorough knowledge of all Microsoft Office programs, as well as proficiency in minute-taking and extensive experience liaising with clients. </p>

                <p>I hold excellent admin skills, thorough knowledge of all Microsoft Office programs, as well as proficiency in minute-taking and extensive experience liaising with clients.</p>

                <p>I am looking to secure a position in a media organisation, where I can bring immediate and strategic value and develop my current skillset further.</p>

                <p>I plan to eventually progress into a more senior PA or EA role within your organisation.</p>

                <a href="#" class="sharon-submit sharon-submit-2">Submit Statement Number 2</a>

              </div>
            </div>
          </div>

        </div>
      </section>
    </div>

    <div class="interview-sharon-fail hide">
      <section class="red">
        <div class="holder">
          <h2>That's not quite right...</h2>
          <div class="cols">
            <p>This is not the most suitable statement: it does not demonstrate any experience related to the role Sharon D is applying for. </p>

            <p>On the other hand, the Personal Statement Number 1 showcases very well her experience for the role she's applying for, her achievements and her plans for the future. And remember: a personal statement for a job application is usually between 50 and 200 words.</p>
          </div>
        </div>

      </section>
      <a href="#" class="btn btn-continue-sharon">Continue</a>
    </div>

    <!-- <div class="interview-sharon-incomplete hide">
      <section class="red">
        <div class="holder">
          <h2>That's not quite right...</h2>
          <p>Sharon D's application is coming together well but you have not selected all the relevant information, what else would enhance her personal statement?</p>
          <p>Review your answers and submit her application again.</p>

        </div>

      </section>s
      <a href="#" class="btn btn-try-again-sharon">Try again</a>
    </div> -->
    <section class="orange-solid interview-sharon-success hide" >
      <div class="holder ">
        <img src="/badge-assets/{{$url['slug']}}/_global/img/sharon-celebration.gif" alt="" />
        <h2>We have excellent news!</h2>
        <!-- <div class="cols"> -->
          <p>Sharon D's application was successful, well done!</p>

          <!-- This is the most suitable statement: it showcases very well her experience for the role she's applying for, her achievements and her plans for the future. And remember: a personal statement for a job application is usually between 50 and 200 words.</p>

          <p>On the other hand, the Personal Statement Number 2 does not demonstrate any experience related to the role Sharon D is applying for.</p> -->
        <!-- </div> -->
      </div>
        <a href="#" class="btn btn-continue-sharon">Continue</a>
    </section>


    <section class="yellow interview hide" id="interview">
      <div class="holder">
        <p>Both Tennie T and Sharon D were called for interviews as result of their successful applications. During the interviews there is a probability that the interviewers will ask them both questions regarding their transferable skills.</p>
        <p>Can you help both Sharon and Tennie to prepare for their interviews by selecting which transferable skill is being checked in each of the possible interview questions?</p>
        <div class="box box-task" id="task-6" data-aos="fade-up" data-aos-delay="1000">

          <div class="task-6">

            <div class="question question-1">
              <div class="question-number">1<span>/</span>17</div>
              <p>Describe a situation when you had to change the way you worked because of changing circumstances.</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-commercial-awareness.svg" alt="" />Commercial Awareness</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-analytical.svg" alt="" />Analytical</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-adaptability.svg" alt="" />Adaptability</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-1" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-1" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-2">
              <div class="question-number">2<span>/</span>17</div>
              <p>Describe a time when you had to co-ordinate the work of other people.</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-negotiation.svg" alt="" />Negotiation</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-networking.svg" alt="" />Networking</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-leadership.svg" alt="" />Leadership</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-2" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-2" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-3">
              <div class="question-number">3<span>/</span>17</div>
              <p>There are times when no-one is prepared to listen to or agree with your point of view. Give an example of when this happened to you.</p>
              <ul>
                <li data-value="true"><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-negotiation.svg" alt="" />Negotiation</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-problem-solving.svg" alt="" />Problem Solving</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-organisation.svg" alt="" />Organisation</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-3" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-3" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-4">
              <div class="question-number">4<span>/</span>17</div>
              <p>Describe the last time you had to investigate a lot of information or data. What sort of information did this involve?</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-commercial-awareness.svg" alt="" />Commercial Awareness</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-analytical.svg" alt="" />Analytical</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-4" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-4" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-5">
              <div class="question-number">5<span>/</span>17</div>
              <p>Why did our competitor decide to undercut our prices?</p>
              <ul>
                <li data-value="true"><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-commercial-awareness.svg" alt="" />Commercial Awareness</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-digital.svg" alt="" />Digital Skills</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-research.svg" alt="" />Research Skills</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-5" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-5" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-6">
              <div class="question-number">6<span>/</span>17</div>
              <p>Your manager asks you to find two new customers, what is your strategy?</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-negotiation.svg" alt="" />Negotiation</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-networking.svg" alt="" />Networking</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-organisation.svg" alt="" />Organisation</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-6" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-6" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-7">
              <div class="question-number">7<span>/</span>17</div>
              <p>Give an example of when you had to coordinate a piece of work, project or event.</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-time-management.svg" alt="" />Time Management</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-research.svg" alt="" />Research Skills</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-organisation.svg" alt="" />Organisation</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-7" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-7" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-8">
              <div class="question-number">8<span>/</span>17</div>
              <p>We all must make unpopular choices that may affect others from time to time. Describe a situation when you have had to make such a decision and what you learnt from this experience?</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-initiative.svg" alt="" />Initiative</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-digital.svg" alt="" />Digital Skills</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-8" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-8" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-9">
              <div class="question-number">9<span>/</span>17</div>
              <p>Tell me about your social media profile – how did you manage to get so many followers?</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-leadership.svg" alt="" />Leadership</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-digital.svg" alt="" />Digital Skills</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-9" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-9" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-10">
              <div class="question-number">10<span>/</span>17</div>
              <p>Give me an example of when you used good judgment and logic in solving an issue.</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-organisation.svg" alt="" />Organisation</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-research.svg" alt="" />Research Skills</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-problem-solving.svg" alt="" />Problem Solving</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-10" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-10" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-11">
              <div class="question-number">11<span>/</span>17</div>
              <p>Give me an example of when you have had to discover information on a new topic. How did you approach this, and what obstacles did you need to overcome?</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-organisation.svg" alt="" />Time Management</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-research.svg" alt="" />Research Skills</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-problem-solving.svg" alt="" />Problem Solving</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-11" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-11" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-12">
              <div class="question-number">12<span>/</span>17</div>
              <p>How do you balance your time between your studies and your spare time?</p>
              <ul>
                <li data-value="true"><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-time-management.svg" alt="" />Time Management</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-problem-solving.svg" alt="" />Problem Solving</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-12" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-12" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-13">
              <div class="question-number">13<span>/</span>17</div>
              <p>Tell me about a time when you had to get people to work together more supportively.</p>
              <ul>
                <li ><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-communication.svg" alt="" />Communication</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-work-ethics.svg" alt="" />Hard Working (Work Ethics)</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-decision-making.svg" alt="" />Decision Making</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-13" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-13" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-14">
              <div class="question-number">14<span>/</span>17</div>
              <p>Tell me about a time when you spotted an opportunity to suggest a change. How did you put this forward and what was the outcome?</p>
              <ul>
                <li data-value="true"><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-initiative.svg" alt="" />Initiative</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-analytical.svg" alt="" />Analytical</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-time-management.svg" alt="" />Time Management</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-digital.svg" alt="" />Digital Skills</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-14" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-14" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-15">
              <div class="question-number">15<span>/</span>17</div>
              <p>What experience have you had of designing and delivering presentations or writing reports?</p>
              <ul>
                <li data-value="true"><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-communication.svg" alt="" />Communication</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-listen.svg" alt="" />Listening</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-networking.svg" alt="" />Networking</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-15" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-15" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-16">
              <div class="question-number">16<span>/</span>17</div>
              <p>Describe a situation when you needed to manage your time effectively due to multiple priorities.</p>
              <ul>
                <li><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-initiative.svg" alt="" />Initiative</li>
                <li ><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-digital.svg" alt="" />Digital Skills</li>
                <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-flexibility.svg" alt="" />Flexibility</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-commercial-awareness.svg" alt="" />Commercial Awareness</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-16" href="#task-6">Next</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-16" href="#task-6">Try again</a>
              </div>
            </div>

            <div class="question question-17">
              <div class="question-number">17<span>/</span>17</div>
              <p>In your statement you have mentioned that you ran an online business for a little while – tell me about that.</p>
              <ul>
                <li data-value="true"><img  src="/badge-assets/{{$url['slug']}}/_global/img/ts-digital.svg" alt="" />Digital Skills</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-analytical.svg" alt="" />Analytical</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-team-work.svg" alt="" />Teamwork</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/ts-research.svg" alt="" />Research Skills</li>
              </ul>
              <div class="task-3-feedback task-6-feedback feedback-success">
                <p>Correct!</p>
                <a class="btn-next btn-next-17" onclick="oBadges.stepCompleted();" href="success">Continue</a>
              </div>
              <div class="task-3-feedback task-6-feedback feedback-fail">
                <p>Not quite right...</p>
                <a class="btn-try-again btn-try-again-17" href="#task-6">Try again</a>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section>
    </div>

</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 7);
  </script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-7.js"></script>

@endsection
