@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-linkedin.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

        <main class="features">
          <section class="section-1 only-section">
            <div class="section-title">
              <p>LinkedIn</p>
            </div>
            <div class="holder">
              <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin.svg" alt="linkedin"/></a>
              <p>LinkedIn is the world's largest professional network with hundreds of millions of members, and they are growing rapidly. Their mission is to connect the world's professionals to make them more productive and successful.</p>
              <p>Please note you have to be 16 years old and over to create an account on LinkedIn. If you are not old enough, you can still complete this badge to learn for the future.</p>
              <h1>Key Features</h1>
              <div class="cols-key-features cols-key-features-linkedin">
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="100">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/feature-groups.svg" alt="Groups"/>
                    <h2>Groups</h2>
                    <p>LinkedIn supports the formation of interest groups. The majority of the largest groups are employment related, although a very wide range of topics are covered mainly around professional and career issues. Groups also keep their members informed through emails with updates to the group, including most talked about discussions within your professional circles. Groups may be private, accessible to members only or may be open to Internet users in general to read, though they must join in order to post messages.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="400">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/feature-recruitment.svg" alt="Online Recruitment"/>
                    <h2>Online Recruitment</h2>
                    <p>Job recruiters, head hunters, and HR departments are increasingly using LinkedIn as a source for finding potential candidates. By using the Advanced search tools, recruiters can find members matching their specific key words with a click of a button. They then can make contact with those members by sending a request to connect or by sending InMail about a specific job opportunity he or she may have. Recruiters also often join industry based groups on LinkedIn to create connections with professionals in that line of business.</p>
                  </div>
                </div>
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="200">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/feature-job-listings.svg" alt="Job Listings"/>
                    <h2>Job listings</h2>
                    <p>LinkedIn allows users to research companies, non-profit organisations, and governments they may be interested in working for. Typing the name of a company or organisation in the search box causes pop-up data about the company or organisation to appear. Such data may include the ratio of female to male employees, the percentage of the most common titles/positions held within the company, the location of the company's headquarters and offices, and a list of present and former employees. A feature allowing companies to include an "Apply with LinkedIn" button on job listing pages. The plugin allows potential employees to apply for positions using their LinkedIn profiles as resumes or CVs.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="300">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/feature-skills.svg" alt="Skills"/>
                    <h2>Skills</h2>
                    <p>LinkedIn enables users to "endorse" each other's skills. This feature also allows users to efficiently provide commentary on other users' profiles – network building is reinforced. However, there is no way of flagging anything other than positive content. LinkedIn solicits endorsements using algorithms that generate skills members might have. Members cannot opt out of such solicitations, with the result that it sometimes appears that a member is soliciting an endorsement for a non-existent skill.</p>
                  </div>

                </div>
              </div>
              <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}"><span>Continue</span></a>

            </div>

            </section><!--/holder-->
        </main>


    @endsection


    @section('javascript')
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
