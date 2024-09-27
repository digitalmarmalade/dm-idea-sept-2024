@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection


@section('page')


  <main>
    
    <section class='flex flex--center flex--column'>
     <div class='holder'>

      <h1 class="visuallyhidden">Maths Tools for AI</h1>

      <div class='cols cols--intro-animation flex flex--center flex--column'>
        <div class="intro-animation--bg"></div>
        
        <div class='col flex flex--center flex--grow-1'>
          
           @include('vendor.digitalmarmalade.badges.maths-tools-for-ai.animation-intro-title', ['title' => 'Maths Tools for AI'])

        </div>
        <div class='col col--intro-illustration flex flex--justify-start flex--align-end'>
           @include('vendor.digitalmarmalade.badges.maths-tools-for-ai.animation-intro-illustration', ['title' => 'Maths Tools for AI'])
        </div>
      </div>


      <div class="col-single flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <p>Have you ever wondered what enables robots to think like humans or how cars can drive themselves without human assistance? It’s not magic, it’s mathematics! At the core of AI and machine learning, mathematics forms the foundation of programming languages which dictate how systems function in order to help us solve difficult and, often, abstract problems.</p>
        <p>If you want to understand how AI works, the first step is to understand the mathematics behind it!</p>
        <p>In this badge you will:</p>
      </div>
      
      <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <li class='box flex flex--center'><strong>Learn why mathematics is important for understanding AI</strong></li>
          <li class='box flex flex--center'><strong>Discover some of the basic mathematical tools that are used in AI</strong></li>
            <li class='box flex flex--center'><strong>Learn about functions, basic statistics and probability</strong></li>
          <li class='box flex flex--center'><strong>Get to know the fundamentals of vectors and matrices</strong></li>
          <li class='box flex flex--center'><strong>Learn how these tools are used to understand different AI applications</strong></li>
        

        </ul>
        
        <a class="btn btn--yellow inline-flex flex--center btn--margin-bottom" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400" >Let&rsquo;s begin!</a>
      
    </div>
  </section>


	<section>
	  <div class="holder">

	    @include('vendor.digitalmarmalade.badges.maths-tools-for-ai.disclaimer')

	  </div>
	</section>
</main>



@endsection
@section('javascript')

@endsection
