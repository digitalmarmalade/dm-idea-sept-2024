@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder'>

    <h1 class="visuallyhidden">What is AI?</h1>

    <div class='cols cols--animation flex flex--center flex--column'>
      <div class='col flex flex--center flex--grow-1'>
        @include('vendor.digitalmarmalade.badges.what-is-ai.intro-animation--title', ['title' => 'What is AI?'])
      </div>
      <div class='col flex flex--center'>
        @include('vendor.digitalmarmalade.badges.what-is-ai.intro-animation--illustration', ['title' => 'What is AI?'])
      </div>
    </div>


    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
      <div class="col" >
        <p>Artificial Intelligence (AI) is a broad area of computer science that makes machines seem like they have human intelligence. Humans are the most intelligent creatures that we know of so this makes AI both exciting and concerning, but why?</p>
      </div>
      <div class="col">
        <p>Not all AI is hidden away in super-secretive labs. AI can manifest itself in many different ways and it&rsquo;s likely to already be part of your everyday life. </p>
        <p>In this badge you will:</p>
      </div>
    </div>


    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>Find out what AI is</strong></li>
      <li class='box flex flex--center'><strong>Discover the history of computer chips</strong></li>
      <li class='box flex flex--center'><strong>Explore a Smart City</strong></li>
      <li class='box flex flex--center'><strong>Build your own Smart Home</strong></li>
      <li class='box flex flex--center'><strong>Learn about the impact of AI on the future of work</strong></li>
      <li class='box flex flex--center'><strong>Learn about some of the ethical issues related to just one example of AI</strong></li>
    </ul>

    <a class="btn btn--yellow inline-flex flex--center btn--margin-bottom" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400" >Let&rsquo;s get started!</a>



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
