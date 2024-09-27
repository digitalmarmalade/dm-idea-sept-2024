@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Ethics of AI</h1>

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="col" >
          <p>More powerful AI has the potential to improve many aspects of our lives but it could also create problems, for example by perpetuating historical biases and stereotypes.</p>
        </div>
        <div class="col">
          <p>Rules and guidelines on the safety and ethics of AI are being explored.</p>
          <p>The video below will introduce the concept of ethics, why it is important to think about the risks and trade-offs as AI technology continues to advance and the &ldquo;Trolley Problem&rdquo;.</p>
        </div>
      </div>

      <div class="holder--video" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <iframe src="https://player.vimeo.com/video/442345927" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>

      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">With this in mind, let&rsquo;s take a look at how it applies to just one aspect of AI.</p>

      <a class="btn btn--white inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" data-aos-anchor-placement="bottom-bottom">Continue</a>

    </div>

  </section>

</main>



@endsection
@section('javascript')


<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 10);
</script>

@endsection
