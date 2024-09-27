@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.problem-solving-with-ai.steps', ['title' => 'Steps'])

<main>

  <section class='flex flex--center flex--column'>


   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">What is AI?</h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>Artificial Intelligence, or AI for short, is technology that enables computers to learn from experience, respond to new inputs and to think and act in a &ldquo;human&rdquo; way.</p>
        <p>As AI has advanced and evolved, it has generated a subfield called machine learning. Machine learning is the study that gives computers the ability to learn without being programmed. In other words, the computer gets smarter automatically as it is given more information.</p>
        <p>Many common AI examples that you hear about today (from chess-playing computers to self-driving cars) rely heavily on technologies like deep learning and natural language processing, which will be covered in this badge.</p>
        <p>These technologies enable computers to be trained to complete specific tasks by processing large amounts of data and finding patterns within the data.</p>

      </div>
      <div class="col flex flex--center">
        <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--what-is-ai.svg" />
      </div>
    </div>
    <a class="btn btn--white inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300" data-aos-anchor-placement="bottom-bottom">Continue</a>

   </div>
  </section>

</main>



@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

@endsection
