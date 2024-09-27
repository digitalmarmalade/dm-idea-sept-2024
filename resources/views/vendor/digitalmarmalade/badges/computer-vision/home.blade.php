@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>
  @include('vendor.digitalmarmalade.badges.computer-vision.header',
  ['title' => 'Header'])
  <section class='flex flex--center flex--column'>
   <div class='holder holder--intro'>
     <div class='animation--intro'>
      <img class="animation--robot left floatLeft" src="/badge-assets/computer-vision/_global/svg/animations/animation--robot.svg" alt="" />
      <img class="animation--eye" src="/badge-assets/computer-vision/_global/svg/animations/animation--eye.svg" alt="" />
      <img class="animation--robot right floatRight" src="/badge-assets/computer-vision/_global/svg/animations/animation--robot.svg" alt="" />
    </div>
    <h1 class="intro-title text-align--center " data-aos="fade-up" data-aos-duration="1500">Computer Vision</h1>
    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
      <div class="col " >
        <p>For many decades, people dreamed of designing machines with human capabilities that could “see” and understand the world around them. The dreams of yesterday have become the reality of today and computer vision technology has already been seamlessly integrated into many parts of our everyday lives.</p>
      </div>
      <div class="col ">
        <p>How do you teach a computer to see and what does this AI technology enable us to do? Computer Vision is behind a lot more than you think and we are going to show you what exactly is behind the “eyes” of a computer!</p>
      </div>
    </div>
  </div>
</section>
    <section class='flex flex--center flex--column'>
     <div class='holder'>
      <p class="col-single text-align--center " data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">In this badge, you will:</p>


      <ul class="list--2-cols flex flex--wrap text-align--center " data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <li class='box blue flex flex--center'><strong>Discover how computer vision works and explore how computers read and display images</strong></li>
        <li class='box blue flex flex--center'><strong>Find out about the OpenCV Library and what it enables you to do</strong></li>
        <li class='box blue flex flex--center'><strong>Experiment with image editing using convolution kernels</strong></li>
        <li class='box blue flex flex--center'><strong>Solve a crime in a scenario-based challenge by processing photographic evidence and training a Convolutional Neural Network to identify clues in CCTV footage</strong></li>
      </ul>

      <div class="flex flex--center">

        <a class="btn btn--yellow inline-flex flex--center btn--margin-bottom " onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400" >Let&rsquo;s begin!</a>
      </div>



  </div>
</section>
<section>
  <div class="holder text-align--center">

    @include('vendor.digitalmarmalade.badges.what-is-ai.disclaimer')

  </div>
</section>

</main>



@endsection
@section('javascript')


@endsection
