@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>

  <section class='flex '>
    <div class="holder flex flex--column flex--center">
     <div class="speech-bubble__holder flex flex--center flex--column hide-on-desktop">
       <div class="speech-bubble gold tip--bottom center animate__animated animate__fadeInDown animate__delay-1s animate__fast flex flex--column flex--align-end">
         <p class="title">Congratulations!</p>
         <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have successfully completed the AI for Computer Vision badge!
       </div>
       <img class="width--auto" src="/badge-assets/computer-vision/_global/svg/icons/icon--android-gold.svg" alt="" />
     </div>

     <div class="speech-bubble__holder hide-on-mobile flex flex--align-center">

       <img class="width--auto" src="/badge-assets/computer-vision/_global/svg/icons/icon--android-gold.svg" alt="" />

       <div class="speech-bubble gold tip--left animate__animated animate__fadeInRight animate__delay-1s animate__fast flex flex--column flex--align-end">
        <p class="title">Congratulations!</p>
         <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have successfully completed the AI for Computer Vision badge!</p>
       </div>
     </div>
   </div>
  </section>
   <section>
    <div class="holder flex flex--column flex--center">
     <p class="col-single text-align--center " data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">In this badge, you have:</p>
      <ul class="list--2-cols flex flex--wrap text-align--center " data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <li class='box blue flex flex--center'><strong>Discovered how computer vision works and explored how computers read and display images</strong></li>
        <li class='box blue flex flex--center'><strong>Learned about the OpenCV Library and what it enables you to do</strong></li>
        <li class='box blue flex flex--center'><strong>Experimented with image editing using convolution kernels</strong></li>
        <li class='box blue flex flex--center'><strong>Successfully solved a crime in a scenario-based challenge by processing photographic evidence and training a Convolutional Neural Network to identify clues in  CCTV footage!</strong></li>
      </ul>

    </section>
   <section>
    <div class="holder flex flex--column flex--center">
      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">If you are interested in learning more about the topics above, please take a look at the following resources:</p>

      <div class='text-align--center' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" >
        <ul class="list--resources" >
          <li class="flex flex--center flex--column">
            <a href="https://www.youtube.com/watch?v=eQLcDmfmGB0" target="_blank">Video: How Computer Vision is Finally Taking Off, After 50 Years</a>

          </li>
          <li class="flex flex--center flex--column">
            <a href="https://teachablemachine.withgoogle.com/" target="_blank">Try the Teachable machine webapp to create and train your own machine learning model!</a>

          </li>
          <li class="flex flex--center flex--column">
            <a href="https://opencv.org" target="_blank">Click here to learn more about the OpenCV Library</a>

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
           <img src="/badge-assets/{{$url['slug']}}/_global/imgs/icons/badge--what-is-ai.png" alt="DEA Badge What Is AI" />
         </a>
       </li>
       <li>
         <a href="https://idea.org.uk/badge/problem-solving-with-ai" target="_blank" title="Try iDEA Badge Problem Solving With AI">
           <img src="/badge-assets/{{$url['slug']}}/_global/imgs/icons/badge--problem-solving-with-ai.png" alt="DEA Badge Problem Solving With AI" />
         </a>
       </li>

       <li>
         <a href="https://idea.org.uk/badge/math-tools-for-ai" target="_blank" title="Try iDEA Badge Maths Tools for AI">
           <img src="/badge-assets/{{$url['slug']}}/_global/imgs/icons/badge--maths-tools-for-ai.png" alt="iDEA Badge Maths Tools for AI"/>
         </a>
       </li>
       <li>
         <a href="https://idea.org.uk/badge/ai-project-cycle" target="_blank" title="Try iDEA Badge AI Project Cycle">
           <img src="/badge-assets/{{$url['slug']}}/_global/imgs/icons/badge--ai-project-cycle.png" alt="iDEA Badge Maths Tools for AI"/>
         </a>
       </li>
     </ul>

  </section>

  <section class="flex flex--center">
    <a class="btn btn--yellow flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000" data-aos-anchor-placement="bottom-bottom">Return to <span>i</span>Dea</a>
  </section>

    <section>
      <div class="holder text-align--center">

        @include('vendor.digitalmarmalade.badges.what-is-ai.disclaimer')

      </div>
    </section>
  </div>
</main>



@endsection
@section('javascript')


@endsection
