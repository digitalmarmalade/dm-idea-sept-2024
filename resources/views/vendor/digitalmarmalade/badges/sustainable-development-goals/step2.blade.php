@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="bg-cream"
@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.sustainable-development-goals.header', ['title' => 'Header'])


<ul class="steps">
  <li>1</li>
  <li class="steps--active">2</li>
  <li>3</li>
  <li>4</li>
</ul>

<main class="step-2">
   
<section class="section-1">

    <div class="point-intro">
        <div class="point-intro-text">
            <p>
            The 2030 Agenda for Sustainable Development provides a global blueprint for dignity, peace and prosperity for people and the planet, now and in the future. A few years into the Agenda, we see how civil society, the private sector, and governments are translating this shared vision into national development plans and strategies.
            </p>
            <p>The SDGs are important in many ways:</p>            
        </div>
    </div>


    <div class="points">

        <img class="points-img" src="/badge-assets/{{$url['slug']}}/_global/img/step-2/discover-why-sdgs-matter-to-the-world.png" alt="" data-aos="fade-up" data-aos-delay="500">

        <div class="point point-1"  data-aos="fade-right" data-aos-delay="100">
            <div class="point__number">1</div>
            <div class="point__text">
                <p>They are helping to galvanize a <strong>global effort</strong>. Leaders of different nations are aiming to make changes together, because they are seeking to solve the same objectives.</p>
                <p>Without common purpose, it is very hard to make change happen on a global scale. By coming together, individuals, organisations, and governments can focus together on what really matters for our future.</p>
            </div>
        </div>


        <div class="point point-2"  data-aos="fade-right" data-aos-delay="200">
            <div class="point__number">2</div>
            <div class="point__text">
                <p>The SDGs are also playing a valuable role in creating <strong>peer pressure</strong>. It is harder not to care, and not to act, when those around you are taking positive steps.</p>
                <p>Following the adoption of first the MDGs, and now the SDGs, political leaders are being held accountable. They are being asked both publicly and privately to show what they are doing to help. </p>
            </div>
        </div>

        <div class="point point-3"  data-aos="fade-right" data-aos-delay="300">
            <div class="point__number">3</div>
            <div class="point__text">
                <p>
                  The SDGs are also helping create &ldquo;<strong>epistemic communities</strong>&rdquo; – networks of expertise, knowledge, and practice – which are collaborating to solve problems around sustainable development challenges.
                </p>
                <p>
                  It is helpful when ambitious goals are set, because it means communities of knowledge and practice can come together to recommend practical pathways to achieve results. Both iDEA and iamtheCODE are working together and in partnership with others all over the world to try to make a difference.
                </p>
            </div>
        </div>

        <div class="point point-4"  data-aos="fade-right" data-aos-delay="400">
            <div class="point__number">4</div>
            <div class="point__text">
              <p>
                The SDGS are mobilising <strong>stakeholder networks</strong>, too. These are some of the groups coming together for a common purpose:
              </p>
              <ul>
                <li><p>community groups</p></li>
                <li><p>politicians</p></li>
                <li><p>governments</p></li>
                <li><p>influencers</p></li>
                <li><p>scientific communities</p></li>
                <li><p>educational communities</p></li>
                <li><p>nongovernmental organisations</p></li>
                <li><p>religious groups</p></li>
                <li><p>international organisations</p></li>
                <li><p>funding organisations</p></li>
                <li><p>foundations</p></li>
              </ul>
              <p>
                Involving lots of stakeholders at once is an important and effective way of trying to tackle the complex challenges of sustainable development, and the fight against poverty, hunger, and disease.
              </p>
            </div>
        </div>

        <div class="point point-5"  data-aos="fade-right" data-aos-delay="500">
            <div class="point__number">5</div>
            <div class="point__text">
              <p>
                The SDGs are also important because they encourage a long-term approach. The amount of time agreed is 15 years. This allows real progress to be made in a world where most governments have a shorter duration, typically up to five years.
              </p>
              <p>
                It helps reinforces commitment and ensure sustainability of actions to have a long-term goal delivering by 2030, and targets that have been agreed upon by 193 countries.
              </p>
            </div>
        </div>
    </div>

    <div class="points-continue continue-bar">
      <div class="continue-bg"></div>
      <div class="continue-text">
        <a href="#" class="btn js-step-2-continue btn--continue">Let's continue</a>   
      </div>
    </div>

</section>

<section class="section-2 bg-purple no-min-heightx section-padding section-padding-top center-task next-step hide">
        
    <div class="task-dropdown-wrapper ">

    <div class="quiz-image">
        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/task__illustration.png" alt="" class="mobile" />
      </div>

    <div class="task-dropdown">
  
      <p class="task-dropdown-title" data-aos="fade-right" data-aos-delay="100">
        Please complete the following statements by choosing the correct drop down for each one. When you think you know the answer press &lsquo;CHECK&rsquo; to see if you are right.
      </p>

      <ol>
        <li data-aos="fade-right" data-aos-delay="200" class="dropdown-1">
          <p>Without
            <span class="select-wrapper">
              <select id="task-1-1">
                <option value="0">Select one...</option>
                <option value="1">financial backing</option>
                <option value="2">government support</option>
                <option value="3">know-how</option>
                <option value="4" data-answer>common purpose</option>

              </select>
            </span> it is very hard to make change happen on a global scale.
          </p>
        </li>

        <li data-aos="fade-right" data-aos-delay="300" class="dropdown-2"> 
          <p>
          The SDGs are also playing a valuable role in creating
           <span class="select-wrapper">
            <select id="task-1-2">
              <option value="0">Select one...</option>
              <option value="1">awareness</option>
              <option value="2" data-answer> peer pressure</option>
              <option value="3">government support</option>
              <option value="4">communities of knowledge support</option>

            </select>
            </span>
          </p>
        </li>

        <li data-aos="fade-right" data-aos-delay="400" class="dropdown-3">
          <p>&ldquo;epistemic communities&rdquo; are communities that are
            <span class="select-wrapper">
              <select id="task-1-3">
                <option value="0">Select one...</option>
                <option value="1">educational networks </option>
                <option value="2">foundations networks</option>
                <option value="3" data-answer>networks of expertise, knowledge, and practice</option>
                 <option value="4">networks of peers</option>
              </select></span> 
          </p>
        </li>

        <li data-aos="fade-right" data-aos-delay="500" class="dropdown-4">
          <p>
           The SDGs are mobilising global efforts. One of the ways they are doing is motivating
            <span class="select-wrapper">
              <select id="task-1-4">
                <option value="0">Select one...</option>
                <option value="1" data-answer>stakeholder networks</option>
                <option value="2">epistemic communities</option>
                <option value="3">educational networks</option>
                <option value="4">government leaders</option>
              </select>
            </span>
            to come together.
          </p>
        </li>

        <li data-aos="fade-right" data-aos-delay="600" class="dropdown-5">
          <p>The long-term goal of delivery is by the year

             <span class="select-wrapper">
              <select id="task-1-4">
                <option value="0">Select one...</option>
                <option value="1">2020</option>
                <option value="2" data-answer >2030</option>
                <option value="3">2040</option>
                <option value="4">2046</option>

              </select>
            </span>.
          </p>
        </li>

        <li data-aos="fade-right" data-aos-delay="700" class="dropdown-6">
          <p>The targets were agreed by 
             <span class="select-wrapper">
              <select id="task-1-4">
                <option value="0">Select one...</option>
                <option value="1">36</option>
                <option value="2">226</option>
                <option value="3">124</option>
                <option value="4" data-answer>193</option>

              </select>
            </span>
            countries.
          </p>
        </li>
      </ol>
      
      <div class="task-dropdown-check">
        <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>

        <a href="#" class="jsHint hint">
          <span class="hint-underline">Hint</span>
        </a>
      </div>


    </div>

        <div class="holder task-dropdown-feedback invisible">

          <div class="feedback-box feedback-incorrect hide">
                <span class="quiz-feedback-title">Not quite right...</span>
                <a href="#" class="btn btn--try-again">Try again</a>
          </div>

          <div class="feedback-box feedback-correct hide">
                <span class="quiz-feedback-title">Well done!</span>
                <a href="#" class="btn btn--continue js-next-step" data-aos="zoom-in" data-aos-delay="200">Continue</a>
          </div>

        </div>
    </div>
    </section>


    <section class="bg-cream no-min-height next-step hide">


      <div class="slider-goals-intro">

        <span class="slider-goals-number">17<span>Goals</span></span>

        <div class="slider-goals-intro-text">
           <p>There are seventeen SDGs. Let’s find out what they are and how they are hoping to help.</p>
        </div>

        <div class="slider-goals-intro-img">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/step-2-illustration--17goals.svg" alt="">
        </div>

      </div>

      <div class="slider slider-goals" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>


          <div class="slide">
            <div class="slide-content no-poverty">

              <div class="slide-goal">
                <div class="slide-goal-number">1</div>
                <div class="slide-goal-name">No Poverty</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--1-no-poverty.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <!--<h3></h3>-->
                    <ul>
                      <li><p><span>1.1</span>Eradicate extreme poverty</p></li>
                      <li><p><span>1.2</span>Reduce poverty by at least 50%</p></li>
                      <li><p><span>1.3</span>Implement social protection systems</p></li>
                      <li><p><span>1.4</span>Equal rights to ownership, basic services, technology and economic resources</p></li>
                      <li><p><span>1.5</span>Build resilience to environmental, economic and social disasters</p></li>
                      <li><p><span>1.a</span>Mobilize resources to implement policies to end poverty</p></li>
                      <li><p><span>1.b</span>Create pro-poor and gender-sensitive policy frameworks</p></li>                    
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content no-hunger">

              <div class="slide-goal">
                <div class="slide-goal-number">2</div>
                <div class="slide-goal-name">Zero Hunger</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--2-zero-hunger.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                   
                    <ul>
                      <li><p><span>2.1</span>Universal access to safe and nutritious food</p></li>
                      <li><p><span>2.2</span>End all forms of malnutrition</p></li>
                      <li><p><span>2.3</span>Double the productivity and incomes of small-scale food producers</p></li>
                      <li><p><span>2.4</span>Sustainable food production and resilient agricultural practices</p></li>
                      <li><p><span>2.5</span>Maintain genetic diversity in food production</p></li>
                      <li><p><span>2.a</span>Invest in rural infrastructure, agricultural research, technology and gene banks</p></li>
                      <li><p><span>2.b</span>Prevent agricultural trade restrictions, market distortions and export subsidies</p></li>
                      <li><p><span>2.c</span>Ensure stable food commodity markets and timely access to information</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>

          <div class="slide">
            <div class="slide-content good-health">

              <div class="slide-goal">
                <div class="slide-goal-number">3</div>
                <div class="slide-goal-name">Good Health and Well-being</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--3-good-health-well-being.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>2.1</span>Reduce maternal mortality</p></li>
                      <li><p><span>2.2</span>End all preventable deaths under 5 years of age</p></li>
                      <li><p><span>2.3</span>Fight communicable diseases</p></li>
                      <li><p><span>3.4</span>Reduce mortality from non-communicable diseases and promote mental health</p></li>
                      <li><p><span>3.5</span>Prevent and treat substance abuse</p></li>
                      <li><p><span>3.6</span>Reduce road injuries and deaths</p></li>
                      <li><p><span>3.7</span>Universal access to sexual and reproductive care, family planning and education</p></li>
                      <li><p><span>3.8</span>Achieve universal health coverage</p></li>
                      <li><p><span>3.9</span>Reduce illnesses and death from hazardous chemicals and pollution</p></li>
                      <li><p><span>3.a</span>Implement the who framework convention on tobacco control</p></li>
                      <li><p><span>3.b</span>Support research, development and universal access to affordable vaccines and medicines</p></li>
                      <li><p><span>3.c</span>Increase health financing and support health workforces in developing countries</p></li>
                      <li><p><span>3.d</span>Improve early warning systems for global health risks</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>

          <div class="slide">
            <div class="slide-content quality-education">

              <div class="slide-goal">
                <div class="slide-goal-number">4</div>
                <div class="slide-goal-name">Quality Education</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--4-zero-quality-education.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>4.1</span>Free primary and secondary education</p></li>
                      <li><p><span>4.2</span>Equal access to quality pre-primary education</p></li>
                      <li><p><span>4.3</span>Equal access to affordable technical, vocational and higher education</p></li>
                      <li><p><span>4.4</span>Increase the number of people with relevant skills for financial success</p></li>
                      <li><p><span>4.5</span>Eliminate all discrimination in education</p></li>
                      <li><p><span>4.6</span>Universal literacy and numeracy</p></li>
                      <li><p><span>4.7</span>Education for sustainable development and global citizenship</p></li>
                      <li><p><span>4.a</span>Build and upgrade inclusive and safe schools</p></li>
                      <li><p><span>4.b</span>Expand higher education scholarships for developing countries</p></li>
                      <li><p><span>4.c</span>Increase the supply of qualified teachers in developing countries</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content gender-equality">

              <div class="slide-goal">
                <div class="slide-goal-number">5</div>
                <div class="slide-goal-name">Gender Equality</div>
                  <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--5-gender-quality.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>5.1</span>End discrimination against women and girls</p></li>
                      <li><p><span>5.2</span>End all violence against and exploitation of women and girls</p></li>
                      <li><p><span>5.3</span>Eliminate forced marriages and genital mutilation</p></li>
                      <li><p><span>5.4</span>Value unpaid care and promote shared domestic responsibilities</p></li>
                      <li><p><span>5.5</span>Ensure full participation in leadership and decision-making</p></li>
                      <li><p><span>5.6</span>Universal access to reproductive health and rights</p></li>
                      <li><p><span>5.a</span>Equal rights to economic resources, property ownership and financial services</p></li>
                      <li><p><span>5.b</span>Promote empowerment of women through technology</p></li>
                      <li><p><span>5.c</span>Adopt and strengthen policies and enforceable legislation for gender equality</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content clean-water">

              <div class="slide-goal">
                <div class="slide-goal-number">6</div>
                <div class="slide-goal-name">Clear Water and Sanitation</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--6-clean-water-sanitation.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>6.1</span>Safe and affordable drinking water</p></li>
                      <li><p><span>6.2</span>End open defecation and provide access to sanitation and hygiene</p></li>
                      <li><p><span>6.3</span>Improve water quality, wastewater treatment and safe reuse</p></li>
                      <li><p><span>6.4</span>Increase water-use efficiency and ensure freshwater supplies</p></li>
                      <li><p><span>6.5</span>Implement integrated water resource management</p></li>
                      <li><p><span>6.6</span>Protect and restore water-related ecosystems</p></li>
                      <li><p><span>6.a</span>Expand water and sanitation support to developing countries</p></li>
                      <li><p><span>6.b</span>Support local engagement in water and sanitation management</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content renewable-energy">

              <div class="slide-goal">
                <div class="slide-goal-number">7</div>
                <div class="slide-goal-name">Affordable and Clean Energy</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--7-affordable-clean-energy.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>7.1</span>Universal access to modern energy</p></li>
                      <li><p><span>7.2</span>Increase the global percentage of renewable energy</p></li>
                      <li><p><span>7.3</span>Double the improvement in energy efficiency</p></li>
                      <li><p><span>7.a</span>Promote access to research, technology and investments in clean energy</p></li>
                      <li><p><span>7.b</span>Expand and upgrade energy services for developing countries</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>



          <div class="slide">
            <div class="slide-content good-jobs">

              <div class="slide-goal">
                <div class="slide-goal-number">8</div>
                <div class="slide-goal-name">Decent Work and Economic Growth</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--8-decent-work-economic-growth.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>   
                      <li><p><span>8.1</span>Sustainable economic growth
                      <li><p><span>8.2</span>Diversify, innovate and upgrade for economic productivity</p></li>
                      <li><p><span>8.3</span>Promote policies to support job creation and growing enterprises</p></li>
                      <li><p><span>8.4</span>Improve resource efficiency in consumption and production</p></li>
                      <li><p><span>8.5</span>Full employment and decent work with equal pay</p></li>
                      <li><p><span>8.6</span>Promote youth employment, education and training</p></li>
                      <li><p><span>8.7</span>End modern slavery, trafficking and child labour</p></li>
                      <li><p><span>8.8</span>Protect labour rights and promote safe working environments</p></li>
                      <li><p><span>8.9</span>Promote beneficial and sustainable tourism</p></li>
                      <li><p><span>8.10</span>Universal access to banking, insurance and financial services</p></li>
                      <li><p><span>8.a</span>Increase aid for trade support</p></li>
                      <li><p><span>8.b</span>Develop a global youth employment strategy</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content industry-innovation">

              <div class="slide-goal">
                <div class="slide-goal-number">9</div>
                <div class="slide-goal-name"> Industry, Innovation and Infrastructure</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--9-industry-innovation-infrastructure.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>9.1</span>Develop sustainable, resilient and inclusive infrastructures</p></li>
                      <li><p><span>9.2</span>Promote inclusive and sustainable industrialization</p></li>
                      <li><p><span>9.3</span>Increase access to financial services and markets</p></li>
                      <li><p><span>9.4</span>Upgrade all industries and infrastructures for sustainability</p></li>
                      <li><p><span>9.5</span>Enhance research and upgrade industrial technologies</p></li>
                      <li><p><span>9.a</span>Facilitate sustainable infrastructure development for developing countries</p></li>
                      <li><p><span>9.b</span>Support domestic technology development and industrial diversification</p></li>
                      <li><p><span>9.c</span>Universal access to information and communications technology</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content reduced-inequalities">

              <div class="slide-goal">
                <div class="slide-goal-number">10</div>
                <div class="slide-goal-name">Reduced Inequalities</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--10-reduced-inequalities.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    
                    <ul>
                      <li><p><span>10.1</span>Reduce income inequalities</p></li>
                      <li><p><span>10.2</span>Promote universal social, economic and political inclusion</p></li>
                      <li><p><span>10.3</span>Ensure equal opportunities and end discrimination</p></li>
                      <li><p><span>10.4</span>Adopt fiscal and social policies that promote equality</p></li>
                      <li><p><span>10.5</span>Improved regulation of global financial markets and institutions</p></li>
                      <li><p><span>10.6</span>Enhanced representation for developing countries in financial institutions</p></li>
                      <li><p><span>10.7</span>Responsible and well-managed migration policies</p></li>
                      <li><p><span>10.a</span>Special and differential treatment for developing countries</p></li>
                      <li><p><span>10.b</span>Encourage development assistance and investment in the least developed countries</p></li>
                      <li><p><span>10.c</span>Reduce transaction costs for migrant remittances</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content sustainable-cities">

              <div class="slide-goal">
                <div class="slide-goal-number">11</div>
                <div class="slide-goal-name">Sustainable Cities and Communities</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--11-sustainable-cities-communities.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>11.1</span>Safe and affordable housing</p></li>
                      <li><p><span>11.2</span>Affordable and sustainable transport systems</p></li>
                      <li><p><span>11.3</span>Inclusive and sustainable urbanization</p></li>
                      <li><p><span>11.4</span>Protect the world’s cultural and natural heritage</p></li>
                      <li><p><span>11.5</span>Reduce the adverse effects of natural disasters</p></li>
                      <li><p><span>11.6</span>Reduce the environmental impact of cities</p></li>
                      <li><p><span>11.7</span>Provide access to safe and inclusive green and public spaces</p></li>
                      <li><p><span>11.a</span>Strong national and regional development planning</p></li>
                      <li><p><span>11.b</span>Implement policies for inclusion, resource efficiency and disaster risk reduction</p></li>
                      <li><p><span>11.c</span>Support the least developed countries in sustainable and resilient building</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>

          <div class="slide">
            <div class="slide-content responsible-consumption">

              <div class="slide-goal">
                <div class="slide-goal-number">12</div>
                <div class="slide-goal-name">Responsible Production and Consumption</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--12-responsible-consumption-production.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>12.1</span>Implement the 10-year sustainable consumption and production framework</p></li>
                      <li><p><span>12.2</span>Sustainable management and use of natural resources</p></li>
                      <li><p><span>12.3</span>Halve global per capita food waste</p></li>
                      <li><p><span>12.4</span>Responsible management of chemicals and waste</p></li>
                      <li><p><span>12.5</span>Substantially reduce waste generation</p></li>
                      <li><p><span>12.6</span>Encourage companies to adopt sustainable practices and sustainability reporting</p></li>
                      <li><p><span>12.7</span>Promote sustainable public procurement practices</p></li>
                      <li><p><span>12.8</span>Promote universal understanding of sustainable lifestyles</p></li>
                      <li><p><span>12.a</span>Support developing countries' scientific and technological capacity for sustainable consumption and production</p></li>
                      <li><p><span>12.b</span>Develop and implement tools to monitor sustainable tourism</p></li>
                      <li><p><span>12.c</span>Remove market distortions that encourage wasteful consumption</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>

          <div class="slide">
            <div class="slide-content climate-action">

              <div class="slide-goal">
                <div class="slide-goal-number">13</div>
                <div class="slide-goal-name">Climate Action</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--13-climate-action.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>13.1</span>Strengthen resilience and adaptive capacity to climate related disasters</p></li>
                      <li><p><span>13.2</span>Integrate climate change measures into policies and planning</p></li>
                      <li><p><span>13.3</span>Build knowledge and capacity to meet climate change</p></li>
                      <li><p><span>13.a</span>Implement the UN framework convention on climate change</p></li>
                      <li><p><span>13.b</span>Promote mechanisms to raise capacity for planning and management</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content life-below-water">

              <div class="slide-goal">
                <div class="slide-goal-number">14</div>
                <div class="slide-goal-name">Life Below Water</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--14-life-below-water.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>14.1</span>Reduce marine pollution</p></li>
                      <li><p><span>14.2</span>Protect and restore ecosystems</p></li>
                      <li><p><span>14.3</span>Reduce ocean acidification</p></li>
                      <li><p><span>14.4</span>Sustainable fishing</p></li>
                      <li><p><span>14.5</span>Conserve coastal and marine areas</p></li>
                      <li><p><span>14.6</span>End subsidies contributing to overfishing</p></li>
                      <li><p><span>14.7</span>Increase the economic benefits from sustainable use of marine resources</p></li>
                      <li><p><span>14.a</span>Increase scientific knowledge, research and technology for ocean health</p></li>
                      <li><p><span>14.b</span>Support small scale fishers</p></li>
                      <li><p><span>14.c</span>Implement and enforce international sea law</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>


          <div class="slide">
            <div class="slide-content life-on-land">

              <div class="slide-goal">
                <div class="slide-goal-number">15</div>
                <div class="slide-goal-name">Life on Land</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--15-life-onland.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>15.1</span>Conserve and restore terrestrial and freshwater ecosystems</p></li>
                      <li><p><span>15.2</span>End deforestation and restore degraded forests</p></li>
                      <li><p><span>15.3</span>End desertification and restore degraded land</p></li>
                      <li><p><span>15.4</span>Ensure conservation of mountain ecosystems</p></li>
                      <li><p><span>15.5</span>Protect biodiversity and natural habitats</p></li>
                      <li><p><span>15.6</span>Promote access to genetic resources and fair sharing of the benefits</p></li>
                      <li><p><span>15.7</span>Eliminate poaching and trafficking of protected species</p></li>
                      <li><p><span>15.8</span>Prevent invasive alien species on land and in water ecosystems</p></li>
                      <li><p><span>15.9</span>Integrate the ecosystem and biodiversity in governmental planning</p></li>
                      <li><p><span>15.a</span>Increase financial resources to conserve and sustainably use ecosystem and biodiversity</p></li>
                      <li><p><span>15.b</span>Finance and incentivize sustainable forest management</p></li>
                      <li><p><span>15.c</span>Combat global poaching and trafficking</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>

          <div class="slide">
            <div class="slide-content peace-and-justice">

              <div class="slide-goal">
                <div class="slide-goal-number">16</div>
                <div class="slide-goal-name">Peace, Justice and Strong Institutions</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--16-zero-peace-justice-strong-institutions.svg" alt="">
                </div>
              </div>

               <div class="slide-text">
                    <ul>
                      <li><p><span>16.1</span>Reduce violence everywhere</p></li>
                      <li><p><span>16.2</span>Protect children from abuse, exploitation, trafficking and violence</p></li>
                      <li><p><span>16.3</span>Promote the rule of law and ensure equal access to justice</p></li>
                      <li><p><span>16.4</span>Combat organized crime and illicit financial and arms flows</p></li>
                      <li><p><span>16.5</span>Substantially reduce corruption and bribery</p></li>
                      <li><p><span>16.6</span>Develop effective, accountable and transparent institutions</p></li>
                      <li><p><span>16.7</span>Ensure responsive, inclusive and representative decision-making</p></li>
                      <li><p><span>16.8</span>Strengthen the participation in global governance</p></li>
                      <li><p><span>16.9</span>Provide universal legal identity</p></li>
                      <li><p><span>16.10</span>Ensure public access to information and protect fundamental freedoms</p></li>
                      <li><p><span>16.a</span>Strengthen national institutions to prevent violence and combat terrorism and crime</p></li>
                      <li><p><span>16.b</span>Promote and enforce non-discriminatory laws and policies</p></li>
                    </ul>
               </div><!--/slider-text-->
            </div>
          </div>

        <div class="slide">
            <div class="slide-content partnerships">

              <div class="slide-goal">
                <div class="slide-goal-number">17</div>
                <div class="slide-goal-name">Partnerships for the goals</div>
                <div class="slide-goal-img">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/slider-goals/icon-goal--17-partnerships-the-goals.svg" alt="">
                </div>
              </div>

               <div class="slide-text">

                  <div class="slide-goal-col-wrapper">
                    <ul>
                     <li><p><span>17.1</span>Mobilize resources to improve domestic revenue collection</p></li>
                     <li><p><span>17.2</span>Implement all development assistance commitments</p></li>
                     <li><p><span>17.3</span>Mobilize financial resources for developing countries</p></li>
                     <li><p><span>17.4</span>Assist developing countries in attaining debt sustainability</p></li>
                     <li><p><span>17.5</span>Invest in least developed countries</p></li>
                     <li><p><span>17.6</span>Knowledge sharing and cooperation for access to science, technology and innovation</p></li>
                     <li><p><span>17.7</span>Promote sustainable technologies to developing countries</p></li>
                     <li><p><span>17.8</span>Strengthen the science, technology and innovation capacity for least developed countries</p></li>
                     <li><p><span>17.9</span>Enhance SDG capacity in developing countries</p></li>
                   </ul>
                   <ul>
                     <li><p><span>17.10</span>Promote a universal trading system under the wto</p></li>
                     <li><p><span>17.11</span>Increase the exports of developing countries</p></li>
                     <li><p><span>17.12</span>Remove trade barriers for least developed countries</p></li>
                     <li><p><span>17.13</span>Enhance global macroeconomic stability</p></li>
                     <li><p><span>17.14</span>Enhance policy coherence for sustainable development</p></li>
                     <li><p><span>17.15</span>Respect national leadership to implement policies for the sustainable development goals</p></li>
                     <li><p><span>17.16</span>Enhance the global partnership for sustainable development</p></li>
                     <li><p><span>17.17</span>Encourage effective partnerships</p></li>
                     <li><p><span>17.18</span>Enhance availability of reliable data</p></li>
                     <li><p><span>17.19</span>Further develop measurements of progress</p></li>
                    </ul>
                  </div>
                    

                    <a href="#" class="btn btn btn--continue js-next-step">Continue</a>
               </div><!--/slider-text-->
            </div>
          </div>

      </div>
    </section>




    <section class=" bg-purple hide no-min-height center-task next-step">

        <div class="quiz-holder quiz-goals-holder">
           
            <div class="quiz quiz-goals jsQuiz">

                <div class="quiz-questions">

              <div class="quiz-image">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/task__illustration.png" alt="" class="mobile" />

              <!--
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/task__illustration-desktop.png" alt="" class="desktop" />-->

              </div>
                  
                  <div class="quiz-question active">

                    <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step" data-aos="zoom-in"></p>
                        <p class="quiz-the-question" data-aos="fade-right" data-aos-delay="100" >Ending all discrimination against women and girls is not only a basic human right, it’s crucial for sustainable future.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="no-poverty" data-aos="fade-right" data-aos-delay="200" >
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-poverty.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 1</span>
                                <p class="goal-title">No Poverty</p>
                            </a>
                          </li>
                          <li class="quality-education" data-aos="fade-right" data-aos-delay="300" >
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/quality-education.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 4</span>
                                <p class="goal-title">Quality Education</p>
                            </a>
                          </li>
                          <li class="gender-equality" data-aos="fade-right" data-aos-delay="400" >
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                   <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/gender-equality.svg" alt="">
                               </div>
                                <span class="goal-number">Goal 5</span>
                                <p class="goal-title">Gender Equality</p>
                            </a>
                        </li>
                        <li class="peace-and-justice" data-aos="fade-right" data-aos-delay="500" >
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/peace-and-justice.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 16</span>
                                <p class="goal-title">Peace, Justice and Strong Institutions</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Eradicating poverty in all its forms remains one of the greatest challenges facing humanity.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="no-poverty">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-poverty.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 1</span>
                                <p class="goal-title">No Poverty</p>
                            </a>
                          </li>
                          <li class="no-hunger">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-hunger.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 2</span>
                                <p class="goal-title">Zero Hunger</p>
                            </a>
                          </li>
                          <li class="reduced-inequalities">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced inequalities</p>
                            </a>
                        </li>
                        <li class="climate-action">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/climate-action.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 13</span>
                                <p class="goal-title">Climate Action</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                  
                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Unfortunately, extreme hunger and malnutrition remain a huge barrier to development in many countries.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="reduced-inequalities">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced inequalities</p>
                            </a>
                          </li>
                          <li class="climate-action">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/climate-action.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 13</span>
                                <p class="goal-title">Climate Action</p>
                            </a>
                          </li>
                          <li class="no-poverty">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-poverty.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">No Poverty</p>
                            </a>
                        </li>
                        <li class="no-hunger">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-hunger.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 2</span>
                                <p class="goal-title">Zero Hunger</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Multisectoral, rights-based and gender-sensitive approaches are essential to address inequalities and to build good health for all.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="quality-education">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/quality-education.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 4</span>
                                <p class="goal-title">Quality Education</p>
                            </a>
                          </li>
                          <li class="good-health">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/good-health.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 3</span>
                                <p class="goal-title">Good Health and Well-Being</p>
                            </a>
                          </li>
                          <li class="clean-water">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/clean-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 3</span>
                                <p class="goal-title">Clean Water and Sanitation</p>
                            </a>
                        </li>
                        <li class="life-on-land">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-on-land.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 15</span>
                                <p class="goal-title">Life on Land</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Achieving inclusive and quality education for all reaffirms the belief that education is one of the most powerful and proven vehicles for sustainable development.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="renewable-energy">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/renewable-energy.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 7</span>
                                <p class="goal-title">Affordable and Cleaner Energy</p>
                            </a>
                          </li>
                          <li class="quality-education">
                            <a href="#" data-answer="true" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/quality-education.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 4</span>
                                <p class="goal-title">Quality Education</p>
                            </a>
                          </li>
                          <li class="responsible-consumption">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/responsible-consumption.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 3</span>
                                <p class="goal-title">Responsible Consumption and Production</p>
                            </a>
                        </li>
                        <li class="partnerships">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/partnerships.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 15</span>
                                <p class="goal-title">Partnerships for the Goals</p>
                            </a>
                          </li>
                      </ul>
                  </div>
  


                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Dwindling drinking water supplies are affecting every continent.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="reduced-inequalities">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced Inequalities</p>
                            </a>
                          </li>
                          <li class="no-poverty">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-poverty.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 1</span>
                                <p class="goal-title">No Poverty</p>
                            </a>
                          </li>
                          <li class="clean-water">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/clean-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 6</span>
                                <p class="goal-title">Clean Water and Sanitation</p>
                            </a>
                        </li>
                        <li class="industry-innovation">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 13</span>
                                <p class="goal-title">Industry, Innovation and Infrastructure</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">As the global economy continues to recover we are seeing slower growth, widening inequalities, and not enough jobs to keep up with a growing labour force.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="good-jobs">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/good-jobs.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 8</span>
                                <p class="goal-title">Decent Work and Economic Growth</p>
                            </a>
                          </li>
                          <li class="clean-water">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/clean-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 6</span>
                                <p class="goal-title">Clean Water and Sanitation</p>
                            </a>
                          </li>
                          <li class="good-health">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/good-health.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 3</span>
                                <p class="goal-title">Good Health and Well-Being</p>
                            </a>
                        </li>
                        <li class="no-poverty">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-poverty.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 1</span>
                                <p class="goal-title">No Poverty</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                   <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Expanding infrastructure and upgrading technology to provide clean and more efficient energy in all countries will encourage growth and help the environment.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="renewable-energy">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/renewable-energy.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 7</span>
                                <p class="goal-title">Affordable and Clean Energy</p>
                            </a>
                          </li>
                          <li class="industry-innovation">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 9</span>
                                <p class="goal-title">Industry, Innovation and Infrastructure</p>
                            </a>
                          </li>
                          <li class="peace-and-justice">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/peace-and-justice.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 16</span>
                                <p class="goal-title">Peace, Justice and Strong Institutions</p>
                            </a>
                        </li>
                        <li class="reduced-inequalities">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced Inequalities</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Income inequality requires global solutions. This involves improving the regulation and monitoring of financial markets and institutions, encouraging development assistance and foreign direct investment to regions where the need is greatest.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="climate-action">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/climate-action.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 13</span>
                                <p class="goal-title">Climate Action</p>
                            </a>
                          </li>
                          <li class="good-jobs">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/good-jobs.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 6</span>
                                <p class="goal-title">Decent Work and Economic Growth</p>
                            </a>
                          </li>
                          <li class="reduced-inequalities">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced Inequalities</p>
                            </a>
                        </li>
                        <li class="gender-equality">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/gender-equality.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 5</span>
                                <p class="goal-title">Gender Equality</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Armed violence and insecurity have a destructive impact on a country’s development, affecting economic growth, and often resulting in grievances that last for generations.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="renewable-energy">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/renewable-energy.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 7</span>
                                <p class="goal-title">Affordable and Cleaner Energy</p>
                            </a>
                          </li>
                          <li class="responsible-consumption">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/responsible-consumption.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 12</span>
                                <p class="goal-title">Responsible Consumption and Production</p>
                            </a>
                        </li>
                        <li class="partnerships">
                          <a href="#" >
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/partnerships.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 17</span>
                              <p class="goal-title">Partnerships for the Goals</p>
                          </a>
                        </li>
                        <li class="peace-and-justice">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/peace-and-justice.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 16</span>
                                <p class="goal-title">Peace, Justice and Strong Institutions</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                        <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Coordinating policies to help developing countries manage their debt, as well as promoting investment for the least developed, is vital for sustainable growth and development.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="industry-innovation">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 9</span>
                                <p class="goal-title">Industry, Innovation and Infrastructure</p>
                            </a>
                          </li>
                          <li class="peace-and-justice">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/peace-and-justice.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 16</span>
                                <p class="goal-title">Peace, Justice and Strong Institutions</p>
                            </a>
                        </li>
                        <li class="partnerships">
                          <a href="#" data-answer="true">
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/partnerships.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 17</span>
                              <p class="goal-title">Partnerships for the Goals</p>
                          </a>
                        </li>
                        <li class="reduced-inequalities">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced Inequalities</p>
                            </a>
                          </li>
                      </ul>
                  </div>
                  

                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">More than 4 billion people still do not have access to the Internet. Bridging this digital divide is crucial to ensure equal access to information and knowledge, as well as foster innovation and entrepreneurship.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="renewable-energy">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/renewable-energy.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 7</span>
                                <p class="goal-title">Affordable and Cleaner Energy</p>
                            </a>
                          </li>
                          <li class="responsible-consumption">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/responsible-consumption.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 12</span>
                                <p class="goal-title">Responsible Consumption and Production</p>
                            </a>
                          </li>
                          <li class="partnerships">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/partnerships.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 17</span>
                                <p class="goal-title">Partnerships for the Goals</p>
                            </a>
                        </li>
                        <li class="industry-innovation">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 9</span>
                                <p class="goal-title">Industry, Innovation and Infastructure</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">The world’s oceans – their temperature, chemistry, currents and life – drive global systems that make the Earth habitable for humankind.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="life-on-land">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-on-land.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 15</span>
                                <p class="goal-title">Life on Land</p>
                            </a>
                          </li>
                          <li class="life-below-water">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-below-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 14</span>
                                <p class="goal-title">Life Below Water</p>
                            </a>
                        </li>
                        <li class="climate-action">
                          <a href="#">
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/climate-action.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 13</span>
                              <p class="goal-title">Climate Action</p>
                          </a>
                        </li>
                        <li class="gender-equality">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/gender-equality.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 5</span>
                                <p class="goal-title">Gender Equality</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Urgent action must be taken to reduce the loss of natural habitats and biodiversity which are part of our common heritage and support global food and water security, climate change mitigation and adaptation, and peace and security.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="life-on-land">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-on-land.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 15</span>
                                <p class="goal-title">Life on Land</p>
                            </a>
                          </li>
                          <li class="life-below-water">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-below-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 14</span>
                                <p class="goal-title">Life Below Water</p>
                            </a>
                        </li>
                        <li class="industry-innovation">
                          <a href="#">
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 9</span>
                              <p class="goal-title">Industry, Innovation and Infrastructure</p>
                          </a>
                        </li>
                        <li class="peace-and-justice">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/peace-and-justice.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 16</span>
                                <p class="goal-title">Peace, Justice and Strong Institutions</p>
                            </a>
                          </li>
                      </ul>
                  </div>



                <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">The annual average economic losses from climate-related disasters are in the hundreds of billions of dollars. This is not to mention the human impact of geo-physical disasters, which are 91% climate-related.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="climate-action">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/climate-action.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 13</span>
                                <p class="goal-title">Climate Action</p>
                            </a>
                          </li>
                          <li class="industry-innovation">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 9</span>
                                <p class="goal-title">Industry, Innovation and Infrastructure</p>
                            </a>
                        </li>
                        <li class="peace-and-justice">
                          <a href="#">
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/peace-and-justice.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 16</span>
                              <p class="goal-title">Peace, Justice and Strong Institutions</p>
                          </a>
                        </li>
                        <li class="reduced-inequalities">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/reduced-inequalities.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 10</span>
                                <p class="goal-title">Reduced Inequalities</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Making cities sustainable means creating career and business opportunities, safe and affordable housing, and building resilient societies and economies.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="life-on-land">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-on-land.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 15</span>
                                <p class="goal-title">Life on Land</p>
                            </a>
                          </li>
                          <li class="partnerships">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/partnerships.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 17</span>
                                <p class="goal-title">Partnerships For The Goals</p>
                            </a>
                        </li>
                        <li class="sustainable-cities">
                          <a href="#" data-answer="true" >
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/sustainable-cities.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 11</span>
                              <p class="goal-title">Sustainable Cities and Communities</p>
                          </a>
                        </li>
                        <li class="clean-water">
                            <a href="#">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/clean-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 6</span>
                                <p class="goal-title">Clean Water and Sanitation</p>
                            </a>
                          </li>
                      </ul>
                  </div>


                <div class="quiz-question hide">

                     <h1 class="quiz-instruction">For each of the following statements select which goal they apply to:</h1>

                    <div class="question-holder">
                        <p class="quiz-step"></p>
                        <p class="quiz-the-question">Achieving economic growth and sustainable development requires that we urgently reduce our ecological footprint by changing the way we produce and consume goods and resources.</p>
                    </div> 
                     
                      <ul class="quiz-options">
                          <li class="no-poverty">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/no-poverty.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 1</span>
                                <p class="goal-title">No Poverty</p>
                            </a>
                          </li>
                          <li class="life-below-water">
                            <a href="#" >
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/life-below-water.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 14</span>
                                <p class="goal-title">Life Below Water</p>
                            </a>
                        </li>
                        <li class="industry-innovation ">
                          <a href="#">
                              <div class="goal-img">
                                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/industry-innovation.svg" alt="">
                              </div>
                              <span class="goal-number">Goal 9</span>
                              <p class="goal-title">Industry, Innovation and Infrastructure</p>
                          </a>
                        </li>
                        <li class="responsible-consumption">
                            <a href="#" data-answer="true">
                                <div class="goal-img">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/goals/responsible-consumption.svg" alt="">
                                </div>
                                <span class="goal-number">Goal 12</span>
                                <p class="goal-title">Responsible Consumption and Production</p>
                            </a>
                          </li>
                      </ul>
                  </div>

                </div>


                <div class="quiz-feedback hidden">

                  <div class="quiz-incorrect hide">
                    <span class="quiz-feedback-title">Oops...<br>Not quite right.</span>
                    <p>Try a different answer</p>
                  </div>

                  <div class="quiz-correct hide">
                    <span class="quiz-feedback-title">Correct</span>
                    <p>Let's move on</p>
                    <p><a href="#" class="btn btn--small jsQuizNext">Next</a></p>
                  </div>

                  <div class="quiz-correct-next hide">
                    <span class="quiz-feedback-title">Correct</span>
                    <p>Well done! Let's now find out what a 'goal keeper' is, and how you can help</p>
                    <p><a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--small jsQuizContinue">Continue</a></p>
                  </div>
                 
                </div>
            </div><!--/quiz-->

        </div><!--/holder-->
     </section>
    

</main>
@endsection


@section('javascript')

  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
  </script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script>
    var item_length = $('.slider > div').length - 1,
      wrongAnswers = 0;


    function initSlider(){

        var item_length = $('.slider > div').length - 1,
          wrongAnswers = 0;

        $('.slider').slick({
            infinite: false,
            dots: true,
            //adaptiveHeight: true
        }).on('afterChange', function(event, slick, currentSlide, nextSlide){
          if(currentSlide == item_length) {
          // $('.next-step').removeClass('hide');
          // $("html, body").animate({scrollTop: $(document).height()});
          }
        });
    }

    initSlider();


    $('.js-step-2-continue').on('click', function(e){

        e.preventDefault();

       var $nextSection =  $(this).closest('section').next('.next-step');

        $nextSection.removeClass('hide');
        //$("html, body").animate({scrollTop: $(document).height() - $nextSection.height() }, "slow");
    	    
    		$("html, body").stop().delay(500).animate({
    			scrollTop: $nextSection.offset().top
    		}, 500);
    });

    $('.js-next-step').on('click', function(e){

        e.preventDefault();
		
        var $nextSection =  $(this).closest('section').next('.next-step');

        $nextSection.removeClass('hide');
          
  		  //$("html, body").animate({scrollTop: $(document).height() - $nextSection.height() }, "slow");
    	  $("html, body").stop().delay(500).animate({
    			scrollTop: $nextSection.offset().top
    		}, 500);
  		
		    $('.slider').slick('unslick');
        initSlider();
    });


    $('.jsHint').on('click', function(e){
        e.preventDefault();

        $("html, body").stop().animate({
          scrollTop: 0
        }, 500);
    });

  </script>

@endsection

