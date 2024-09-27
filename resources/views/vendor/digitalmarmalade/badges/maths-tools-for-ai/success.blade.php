@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

<main>
  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 class="animate__animated animate__tada congratulations">Congratulations!</h1>
    
  <div class="col-single">  
    <div class='activity--feedback activity--feedback-success congratulations' data-aos="fade-up" data-aos-duration="1500">

        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have successfully completed the <strong>Maths Tools for AI</strong> badge and you have been awarded 15 Bronze points.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
        </div>

    </div>

    <p  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><strong>In this badge you have:</strong></p>
  </div>
    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>Learnt why mathematics is important for understanding AI and discovered the basic mathematical tools that are used in AI</strong></li>
      <li class='box flex flex--center'><strong>Gained an understanding of functions, how to visualise them using graphs, and learnt the fundamentals of statistics and probability</strong></li>
      <li class='box flex flex--center'><strong>Been introduced to the concepts of vectors and matrices and explored how they are used in the world of AI and machine learning</strong></li>
    </ul>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">If you are interested in learning more, please have a look at the following resources:</p>

    <p class="uppercase" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700"><strong>Video Tutorials</strong></p>
      
    <div class='cols cols--resources' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" >
      <div class="col flex flex--column flex--center">

        <span ><strong>Probability</strong></span>

        <ul class="list--resources" >
          <li>
            <a href="https://www.khanacademy.org/math/ap-statistics/probability-ap/randomness-probability-simulation/v/basic-probability" target="_blank">Intro to probability</a>
          </li>
        </ul>
	      

        <span ><strong>Matrices</strong></span>
        <ul class="list--resources" >
          <li>
            <a href="https://www.khanacademy.org/math/algebra-home/alg-matrices/alg-intro-to-matrices/v/introduction-to-the-matrix" target="_blank">Intro to Matrices</a>
          </li>
          <li >
            <a href="https://www.khanacademy.org/math/algebra-home/alg-matrices/alg-adding-and-subtracting-matrices/v/matrix-addition-and-subtraction-1" target="_blank">Matrix Addition and Subtraction</a>
          </li>
          <li >
            <a href="https://www.khanacademy.org/math/algebra-home/alg-matrices/alg-multiplying-matrices-by-scalars/v/scalar-multiplication" target="_blank">Matrix multiplication by scalars</a>
          </li>
        </ul>

      </div>

      <div class="col flex flex--column flex--center">
		    <span ><strong>Vectors</strong></span>

        <ul class="list--resources" >
          <li>
            <a href="https://www.khanacademy.org/math/linear-algebra/vectors-and-spaces/vectors/v/vector-introduction-linear-algebra" target="_blank">Vector intro for linear algebra</a>
          </li>
          <li >
            <a href="https://www.khanacademy.org/math/linear-algebra/vectors-and-spaces/vectors/v/real-coordinate-spaces" target="_blank">Real Coordinate Spaces</a>
          </li>
          <li >
            <a href="https://www.khanacademy.org/math/linear-algebra/vectors-and-spaces/vectors/v/adding-vectors" target="_blank">Addition of Vectors</a>
          </li>
          <li >
            <a href="https://www.khanacademy.org/math/linear-algebra/vectors-and-spaces/vectors/v/multiplying-vector-by-scalar" target="_blank">Multiplication of vectors with scalars</a>
          </li>
          <li >
            <a href="https://www.khanacademy.org/math/linear-algebra/vectors-and-spaces/vectors/v/linear-algebra-vector-examples" target="_blank">Examples of Vectors</a>
          </li>
        </ul>

      </div>

    </div>

    <div class='col-single flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900" >
        <span class="uppercase "><strong>Try another Intel AI4Y iDEA badge</strong></span>
	   </div>
    
     <ul class="flex flex--wrap flex--center list--badge-icons" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
       <li>
         <a href="https://idea.org.uk/badge/what-is-ai" target="_blank" title="Try iDEA Badge What Is AI ">
           <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/badge--what-is-ai.png" alt="DEA Badge What Is AI" />
         </a>
       </li>
       <li>
         <a href="https://idea.org.uk/badge/problem-solving-with-ai" target="_blank" title="Try iDEA Badge Problem Solving With AI">
           <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/badge--problem-solving-with-ai.png" alt="DEA Badge Problem Solving With AI" />
         </a>
       </li>
       <li>
         <a href="https://idea.org.uk/badge/ai-project-cycle" target="_blank" title="Try iDEA Badge AI Project Cycle">
           <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/badge--ai-project-cycle.png" alt="iDEA Badge Maths Tools for AI"/>
         </a>
       </li>
     </ul>

    <a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900" data-aos-anchor-placement="bottom-bottom">Return to <span>i</span>Dea</a>


  </div>

</section>

</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 8);
    oBadges.redirectIfPreviousStepNotCompleted(7, '{{$links['last']}}');
</script>

@endsection
