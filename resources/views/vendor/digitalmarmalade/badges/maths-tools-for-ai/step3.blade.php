@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

	   	<div class="holder">
        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Visualising Functions with Graphs</h1>
        <div class="cols flex flex--column flex--justify-space-between flex--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div class="col" >
            <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-1.svg" />  
          </div>
          <div class="col ">
            <p>Now that you know what functions are, let’s see if you can visualise them using graphs!</p>
            <p>Graphs are visual maps of functions. We can draw the relationships between the input variable (which we call <em>x</em>) and its corresponding output variable (which we call <em>y</em>) on a grid – this is known as a graph. </p>
            <p>The range of values for both <em>x</em> and <em>y</em> are represented on two different scales, the vertical one being <em>y</em> and the horizontal one being <em>x</em>. The scale is known as an axis (plural: axes).</p>
          </div>          
        </div>	
        <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">Let’s take a look at the table of <em>x</em> and <em>y</em> values below and see how it is translated onto the corresponding graph.</p>

        
        <div class="cols flex flex--column flex--justify-space-between no-margin" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          
            <div class="col table-with-graph flex flex--center" >
              <table data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" >
                <thead>
                  <tr>
                    <th class="text-center">INPUT (<em>x</em>)</th>
                    <th class="text-center">OUTPUT (<em>y</em>)</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td class="text-center"><strong>0</strong></td>
                    <td class="text-center"><strong>0</strong></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>1</strong></td>
                    <td class="text-center"><strong>1</strong></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>2</strong></td>
                    <td class="text-center"><strong>2</strong></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>3</strong></td>
                    <td class="text-center"><strong>3</strong></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>4</strong></td>
                    <td class="text-center"><strong>4</strong></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>5</strong></td>
                    <td class="text-center"><strong>5</strong></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>6</strong></td>
                    <td class="text-center"><strong>6</strong></td>
                  </tr>
                  
                </tbody>
                
              </table>
            </div>
            <div class="col">
              <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-2.svg" />  
            </div>
          
        </div>
        
        <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">The straight line that you see on this graph is the visual representation of the function <em>y</em>=<em>x</em>. When you plot the input value of <em>x</em>, you get the corresponding value of <em>y</em>.</p>
          
      
        <div class="cols flex flex--column flex--justify-space-between flex--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
          <div class="col" >
            <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-3.svg" />  
          </div>
          <div class="col ">
            <p>Let’s take a look at another function.</p>
            <p>The line <em>y</em>=2<em>x</em>+1 is plotted on this graph.</p>
            <p>In general, all straight lines can be represented by the function <em>y</em>=m<em>x</em>+c.</p>
          </div>          
        </div>	
      
      
        <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
          <div class="col">
            <p>The point where the line intersects the <em>y</em> axis is called the &ldquo;<em>y</em>-intercept&rdquo;, which is represented as c in the function <em>y</em>=m<em>x</em>+c.</p>
            <p>The letter m in the function <em>y</em>=m<em>x</em>+c is known as the slope. Slope is a measure of how change in <em>y</em> relates to change in <em>x</em>.</p>
            <p>In our previous function <em>y</em>= <em>x</em>, when <em>y</em> was 1, <em>x</em> was also 1. If we plug in 1 as <em>x</em> in the new equation <em>y</em>=2 <em>x</em>+1, what is the new value of  <em>y</em>?.</p>
            <ul class="box flex flex--align-center flex--column">
              <li class="with-auto"><strong><em>y</em>=2(1)+1</strong></li>
              <li class="with-auto"><strong><em>y</em>=2+1</strong></li>
              <li class="with-auto"><strong><em>y</em>=3</strong></li>
            </ul>
          
          </div>
          
          <div class="col" >
            <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-4.svg" />  
            <p>Notice when <em>y</em>=2<em>x</em>+1 is plotted on this graph as the yellow line, that when the <em>x</em> axis is at 1, the <em>y</em> axis is at 3.</p>
          </div>
        

	  </div>
  </section>

 <section class='activity flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
     <div class='holder flex flex--column flex--center'>

        <div class="holder--questions flex--column jsQuestions flex flex--center" data-question-type="">

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='active jsQuestion'>
              <p>1 of 5</p>
              <p class="col-single"><strong>What is the horizontal axis on a graph called?</strong></p>
            
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">y</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2">c</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>x</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>

            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That is correct.</strong></p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not the right answer</strong>, <em>y</em> is the vertical axis.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
              <div class="holder ">
                <div class="speech-bubble--holder">
                  <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not the right answer.</strong> The &ldquo;<em>y</em>-intercept&rdquo; is represented as c.</p>
                  </div>
                  <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                </div>
              </div>
            </div>

          </div>
    
       
          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='jsQuestion hide'>
              <p>2 of 5</p>
              <p class="col-single"><strong>In general, all straight lines on a graph can be represented by which function?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'><em>y</em>=m<em>x</em>+c </li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'><em>y</em>=m+<em>x</em>+c</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'><em>y</em>=c<em>x</em>+m</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Nice work!</strong></p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Find the answer in the text and try again.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">
            <div class='jsQuestion hide'>
              <p>3 of 5</p>
              <p class="col-single"><strong>In the function <em>y</em>=m<em>x</em>+c, what does the m stand for?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>The slope</li>
                <li class='list--activity-answers__item inline-flex flex--center jsAnswer' data-show-feedback="jsFeedback1">Where the line intersects the y-axis</li>
                <li class='list--activity-answers__item inline-flex flex--center jsAnswer'  data-show-feedback="jsFeedback2">Where the line intersects the x-axis</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s correct!</strong></p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not the right answer.</strong> Where the line intersects the <em>y</em>-axis is represented by <em>c</em> in <em>y</em>=m<em>x</em>+c</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not the right answer.</strong> Where the line intersects the <em>x</em>-axis is represented by <em>x</em> in <em>y</em>=m<em>x</em>+c</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>


          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">
            <div class='jsQuestion hide'>
              <p>4 of 5</p>
              <p class="col-single"><strong>In the function <em>y</em>=m<em>x</em>+c, what does the c stand for?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">The slope</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Where the line intersects the y-axis</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2">Where the line intersects the x-axis</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

          
            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong> That’s correct!</strong></p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>


             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not correct.</strong> The slope is represented by the m in <em>y</em>=m<em>x</em>+c.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
           
            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not the right answer.</strong> Where the line intersects the <em>x</em>-axis is represented by <em>x</em> in <em>y</em>=m<em>x</em>+c.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

          </div>
          
          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">
            <div class='jsQuestion hide'>
              <p>5 of 5</p>
              <p class="col-single"><strong>How is the first function different from the second function?</strong></p>
              <div class="cols flex flex--column flex--justify-space-between flex--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
                <div class="col">
                  <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-2.svg" />  
                </div>
                
                <div class="col" >
                  <img class="graph--activity" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-3.svg" />  
                </div>
              
              </div>	

              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>The second function intersects at 1 on the y-axis and has a slope of 2</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>The second function intersects at 1 on the y-axis and has a slope of 0</li>                
                <li class='list--activity-answers__item flex flex--center jsAnswer'>The second function is not actually different from the first function</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

          
            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s correct!</strong> Functions represent relationships in data and graphs allow these relationships to be illustrated visually.</p>
                      <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">Graphs allow us to present data that is too complicated to be described using text and they can take up less space!</p>
                      <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">Having a thorough understanding of functions and graphs will help you when you start to build more complicated AI models.</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster ">Continue</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Take a closer look at the two graphs.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>
      </div>
    </div>

  </section>

  <div class="scrollAnchor1"></div>

</main>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>


@endsection