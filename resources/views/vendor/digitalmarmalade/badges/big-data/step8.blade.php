@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-4 task-4">
    <section class="step task-header grad-yellow">
      <div class="step-task yellow" data-aos="fade-up">Task</div>
      <div class="step-copy-wrapper">
        <div class="step-copy">
          <p  data-aos="fade-right" data-aos-delay="400">You’ve learnt that collecting, storing and handling big amounts of data bring numerous challenges. Can you spot <b>which challenge was faced</b> on each of the scenarios below:</p>
        </div>
      </div>
    </section>

    <section class="grad-yellow task" id="task">

        <div class="question question-1">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" data-aos="fade-left" />
          <div class="holder">
            <div data-aos="zoom-in" class="question-number">1<span>/</span>4</div>
            <img data-aos="zoom-in" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/task-4-1.svg"/>
            <p data-aos="fade-up" data-aos-delay="200">A TV network giving live coverage to Scotland’s independence referendum in 2014 had their computer generated graphics powered by data analytics. During a report on the referendum, graphics showed that 110% of Scotland’s population had been polled. According to the graphic, 58% of Scots had said “Yes” and 52% voted “No”. The graphic was obviously off on the total voter percentage, but it was also wrong about the fact that the majority of Scots actually voted “No”.</p>
            <ul>           
              <li data-aos="zoom-in" data-aos-delay="300" data-aos-anchor=".question">Scalability</li>
              <li data-aos="zoom-in" data-aos-delay="400" data-aos-anchor=".question">Lack of talent</li>
              <li data-aos="zoom-in" data-aos-delay="500" data-aos-anchor=".question" data-value="true">Data Quality</li>
              <li data-aos="zoom-in" data-aos-delay="600" data-aos-anchor=".question">Security</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>It is very important that data is checked and double checked. Don’t just assume it’s accurate. Performing some basic data quality checks before displaying information might mean that you don’t hit the airwaves first, but at least you’ll get it right.</p>
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
            <div class="question-number">2<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-4-2.svg"/>
            <p>In 2017, a private healthcare group suffered a data breach, affecting 500,000 customers on its international health insurance plan. The company said one of their employees inappropriately copied and removed information including names, dates of birth and some contact information however, no medical information was compromised. In a written statement, the company said that 43,000 of the total number affected had a UK address and that those that bought their medical insurance abroad could also be affected.</p>
            <ul>
              <li data-value="true">Data Privacy</li>
              <li>Lack of talent</li>
              <li>Cost Management</li>
              <li>Scalabitily</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>GDPR is an initiative in Europe which aims to ensure people’s data is kept private and customers have the right to have their information deleted at any time.</p>

              <p class="tip"><b>TIP</b>If you haven’t done so already, <a href="https://idea.org.uk/badge/gdpr" target="_blank">do the GDPR iDEA badge</a> to learn more about data privacy.</p>
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
            <div class="question-number">3<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-4-3.svg"/>
            <p>Between June 2011 and December 2014, an employee of a high-profile investment bank conducted nearly 6,000 unauthorized searches of confidential client information and then uploaded information about 730,000 clients to a server at his home. He later admitted in court that he illegally accessed account holders' names, addresses and other personal information, along with investment values and earnings, from computer systems used by the bank to manage confidential data, court records note.</p>
            <ul>
              <li data-value="true">Security</li>
              <li>Lack of talent</li>
              <li>Cost Management</li>
              <li>Scalabitily</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>This case showed us that the importance of privileged account monitoring shouldn’t be underestimated. Insider misuse has always been a nightmare for security officers because it’s hard to detect and virtually impossible to prevent. To prevent users from taking advantage of their privileges, it is essential to enable continuous monitoring of their activities as well as ensure that employees’ permissions are properly granted; this will help you ensure that they are not extracting or manipulating data that is not required for their particular business needs.</p>
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
            <div class="question-number">4<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-4-4.svg"/>
            <p>The strategy of this tech company is to look at the form of its current team and develop from within rather than recruit from elsewhere. To help with this, the company established an internal data analytics education programme in partnership with the local university. To help develop and spot their internal talent, they also established a Data Visualization Lab. This provided staff with tools to perform data analysis and encouraged a collaborative, analytical approach to problem-solving.</p>
            <ul>
              <li>Security</li>
              <li data-value="true">Lack of talent</li>
              <li>Cost Management</li>
              <li>Scalabitily</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>Big Data is a big deal. It’s not the amount of data that there is, it’s the ability to actually do something with the data that makes it a big deal, and companies are struggling to find and retain data analytics talent.</p>
              <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Let's continue</a>
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


  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 8);
      </script>


      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-8.js"></script>
    @endsection
