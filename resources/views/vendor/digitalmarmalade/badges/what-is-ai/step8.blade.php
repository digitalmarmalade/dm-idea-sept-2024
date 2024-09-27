@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder flex flex--center flex--column'>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Opportunities in AI</h1>
    <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--opportunities-in-ai.svg" />
    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">There is a wide variety of career types available in AI, ranging from high-level research to programming and implementation. There may be opportunities in a start-up, a large organisation or a local project.</p>
    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">Here are just a few examples:</p>

    <ul class="list--1-col flex flex--wrap">


      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <h2 class="box__title">Researchers</h2>
        <p><strong>Researchers</strong> use their academic and theoretical knowledge to find and verify information that can be used in future systems or functions. They aim to discover new ways for computers to &ldquo;think&rdquo; and continuously test their theories and findings.</p>

      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
        <h2 class="box__title">Algorithm developers</h2>
        <p><strong>Algorithm developers</strong> research, write and test

          <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip1_content">algorithms</span>

           used by hardware and software to achieve a specific goal.</p>
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
        <h2 class="box__title">Software developers<br>and computer scientists</h2>
        <p><strong>Software developers and computer scientists</strong> write and program software using algorithms that enable computers to collect, analyse and <br>process information.</p>
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
        <h2 class="box__title">Hardware technicians</h2>
        <p><strong>Hardware technicians</strong> build physical tools, equipment or machines, such as robots, to operate and interact with the world.</p>
      </li>


    </ul>

    <a class="btn btn--white inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="900" data-aos-anchor-placement="bottom-bottom" >Continue</a>

   </div>

    <div class="tooltip_templates">
      <span id="tooltip1_content">
        <p>A process or set of rules that a computer follows to solve a problem.</p>
      </span>
    </div>

  </section>


</main>



@endsection
@section('javascript')
<script>
  $(document).ready(function(  ) {
	  
	  var triggerMode = 'hover';
	  
	  if($('body').hasClass('touch')){
		  triggerMode = 'click';
	  }
		  
      $('.jsTooltip').tooltipster({
           trigger: triggerMode,
           maxWidth: 350
      });
  });
</script>
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 8);
</script>

@endsection
