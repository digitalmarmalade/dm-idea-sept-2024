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
<main>
    <section class="section-1 only-section">
        <div class="section-title">
            <p>Linkedin</p>
        </div>
        <div class="holder">
            <h1>Your profile</h1>
            <div class="cols">
              <div class="col">
                <p>Your profile is your LinkedIn page that describes your career history, education, and other related content you may want to publish. They have a variety of features that leverage your profile or others' profiles to help you meet your objectives. A complete LinkedIn profile can help you connect with an opportunity.</p>
              </div>
              <div class="col">
                <p>As a general rule, your LinkedIn profile should be strictly professional. Avoid the humorous or quirky in favour of the straightforward. LinkedIn also favours profiles that are 100% complete, so put in the effort to check off all the boxes in the creation of your profile.</p>
              </div>

            </div>

            <div class="anatomy-wrapper">
                <div class="image-wrapper image-wrapper-linkedin-profile">
                    <ul class="figures hide-desktop">
                        <li data-aos="fade-in" data-aos-delay="100">1</li>
                        <li data-aos="fade-in" data-aos-delay="200">2</li>
                        <li data-aos="fade-in" data-aos-delay="300">3</li>
                    </ul>
                    <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-2.png" alt="linkedin - Create An Account screen"/></a>
                </div>
                <div class="description-wrapper description-wrapper-linkedin-profile">
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Custom background</span></li>
                        <li data-aos="fade-right" data-aos-delay="200"><p><span class="figure">2</span>Profile picture</li>
                        <li data-aos="fade-left" data-aos-delay="300"><p><span class="figure">3</span>Me icon</li>
                    </ul>
                </div>
                <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-2.png" alt="linkedin - Create An Account screen"/></a>
                <h3>Editing your profile</h3>
                <div class="cols cols-1-col">
                  <ol class="full-list">
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Click the &ldquo;Me&rdquo; icon at top of your LinkedIn homepage.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Click &ldquo;View Profile&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>Scroll to the section you'd like to update and click the &ldquo;Edit&rdquo; icon.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>Click into the applicable field and add, edit, or remove text.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500" class="aos-init aos-animate"><p>Click &ldquo;Save&rdquo;.</p></li>

                  </ol>

            </div>
        </div>
    </section>
    <section class="section-2 only-section">
      <div class="holder">
        <h2>Sections you can edit in your profile:</h2>
        <ul class="boxes boxes-grid boxes-grid-3-cols">
          <li data-aos="fade-up" data-aos-delay="100">
            <p><b>First, last, and former names</b></p>
          </li>
          <li data-aos="fade-up" data-aos-delay="100">
            <p><b>Headline</b></p>
            <p>This information will default to your current job title. If your headline is the same as your current position, the current position won't display in the top section of your profile.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="400">
            <p><b>Education</b></p>
            <p>School and educational information. Learn more about adding or removing education entries.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="700">
            <p><b>Certifications</b></p>
            <p>Certifications, licenses, or clearances you've attained can be added as a new section. Learn how to add certifications and other sections.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1000">
            <p><b>Languages</b></p>
            <p>Languages you understand or speak.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1300">
            <p><b>Patents</b></p>
            <p>Any patents you've applied for or received.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1700">
            <p><b>Test Scores</b></p>
            <p>List your scores on tests to highlight high achievement.</p>
          </li>
        </ul>
        <ul class="boxes boxes-grid boxes-grid-3-cols">
          <li data-aos="fade-up" data-aos-delay="200">
            <p><b>Industry</b></p>
          </li>
          <li data-aos="fade-up" data-aos-delay="500">
            <p><b>Contact Info</b></p>
            <p>Includes your email, phone, IM, and address (only visible to connections), as well as your Twitter handle and websites.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="800">
            <p><b>Experience</b></p>
            <p>Professional positions and experience, including jobs, volunteering, military, board of directors, nonprofit, or pro sports.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1100">
            <p><b>Honours & Awards</b></p>
            <p>Show off your hard-earned awards.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1400">
            <p><b>Publications</b></p>
            <p>Publications that have featured your work.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1700">
            <p><b>Skills & Endorsements</b></p>
            <p>A relevant list of skills on your profile helps others to understand your strengths and improves your likelihood to be found in others' searches. Learn how to add and remove skills on your profile. You can display endorsements of your skills that your colleagues have given you.</p>
          </li>
        </ul>
        <ul class="boxes boxes-grid boxes-grid-3-cols">
          <li data-aos="fade-up" data-aos-delay="300">
            <p><b>Location</b></p>
          </li>
          <li data-aos="fade-up" data-aos-delay="600">
            <p><b>Photo</b></p>
          </li>
          <li data-aos="fade-up" data-aos-delay="900">
            <p><b>Summary</b></p>
            <p>Information about your mission, accomplishments, and goals.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1200">
            <p><b>Recommendations</b></p>
            <p>You can request professional recommendations and display them on your profile.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1500">
            <p><b>Courses</b></p>
            <p>Adding your body of coursework can help your education to stand out.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="1800">
            <p><b>Organisations</b></p>
            <p>Show your involvement with communities that are important to you.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="2000">
            <p><b>Projects</b></p>
            <p>Showcase the projects you've worked on, along with team members. Learn more about adding and editing projects.</p>
          </li>
          <li data-aos="fade-up" data-aos-delay="2300">
            <p><b>Volunteer experience</b></p>
            <p>Highlight your passions and how you like to give back.</p>
          </li>
        </ul>
        <a data-aos="fade-in" data-aos-delay="2400" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
      </div>
    </section>


</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
@endsection
