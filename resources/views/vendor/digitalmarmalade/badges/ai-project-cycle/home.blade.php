@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection


@section('page')


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder'>

    <h1 class="visuallyhidden">AI Project Cycle</h1>

    <div class='cols cols--intro-animation flex flex--center flex--column'>
      <div class='col flex flex--center flex--grow-1'>
        
         @include('vendor.digitalmarmalade.badges.ai-project-cycle.animation-intro-title', ['title' => 'AI Project Cycle'])

      </div>
      <div class='col col--intro-illustration flex flex--center' data-aos-duration="1500" data-aos-delay="200">
         @include('vendor.digitalmarmalade.badges.ai-project-cycle.animation-intro-illustration', ['title' => 'AI Project Cycle'])
      </div>
    </div>


    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
      <div class="col" >
        <p>Artificial Intelligence, or AI, has great potential to transform society. Suppose you wanted to create an AI project of your own… how would you get started?</p>
      </div>
      <div class="col">
        <p>The AI Project Cycle is a framework that you can use to help with the design of your AI project and guide you towards your goal. </p>
        
      </div>
    </div>
    


      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">In this badge you will:</p>
  


      <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <li class='box flex flex--center'><strong>Learn about the 6 stages of the AI Project Cycle</strong></li>
        <li class='box flex flex--center'><strong>Learn various ways to acquire the data needed to solve a problem</strong></li>
        <li class='box flex flex--center'><strong>Discover the 4Ws and how to apply them</strong></li>
        <li class='box flex flex--center'><strong>Learn about the importance of data visualisation to identify trends, relationships and patterns present</strong></li>
      </ul>

      
        <a class="btn btn--yellow inline-flex flex--center btn--margin-bottom" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400" >Let&rsquo;s go!</a>
    



  </div>
</section>
<section>
  <div class="holder">

    @include('vendor.digitalmarmalade.badges.what-is-ai.disclaimer')

  </div>
</section>

</main>


@endsection
@section('javascript')

@endsection
