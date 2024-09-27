@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])

<main>
	<section class='flex flex--center flex--column'>

    <div class='holder '>
      <div class="section__icon" data-aos="zoom-in" duration="1500" data-aos-delay="100" >
        <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/modeling.svg" />
      </div>
      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Modelling</h1>
			 <img src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/data-modeling.svg" data-aos="zoom-in" duration="1500" data-aos-delay="400"  />
   </section>
  

  
  
  <section class='flex flex--center flex--column'>

    <div class='holder '>      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
         <div class="col" >
           <p>In general, there are two approaches taken by researchers when they are building AI models. They either take a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">rule-based approach</span> or, a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">learning approach</span>.</p>
					 <p>One rule-based approach is a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">decision tree</span>.</p>
					 <p>A learning approach requires <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip4_content">Machine Learning</span>.</p>
         </div>
         <div class="col">
           <p>In Machine Learning, you will provide the training data, and the machine will undergo a training process and produce the model for you.</p>
					 <p>Through training your model, you will incrementally improve your model’s ability to provide you with an accurate solution.</p>
         </div>
      </div>
    
	  </div>


  </section>
	
	<div class="tooltip_templates">
		<span id="tooltip1_content">
				<p>When humans give the computer a set of guidelines to follow for processing data.</p>
		</span>
		<span id="tooltip2_content">
				<p>When data is given to a computer and the computer looks for patterns in the data.</p>
		</span>
		<span id="tooltip3_content">
				<p>A type of flowchart that shows a clear pathway to a decision.</p>
		</span>
		<span id="tooltip4_content">
				<p>Machine Learning, or ML for short, enables machines to improve at tasks with experience.</p>
		</span>
	</div>

<section class="activity flex flex--center flex--column " data-aos="fade-up" data-aos-duration="500">
	<div class="holder flex flex--column flex--center jsSortableWords" data-scroll-anchor="jsScrollAnchor1">

		<p><strong>Unscramble the letters!</strong></p>

		<div class="word-shuffle__sentence ">
			<div class="flex flex--center">
				<p>In </p>
				<p class="word-shuffle__letter-revealing jsLetterList">
					<span class="letter blank"></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">m</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">a</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">c</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">h</span></span>
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">i</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">n</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">e</span></span> 
					<span class="letter blank"></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">l</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">e</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">a</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">r</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">n</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">i</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">n</span></span> 
					<span class="letter"><span class="letter-hide"></span><span class="letter-reveal">g</span></span>
					<span class="letter blank"></span> 
				</p>
			</div>
			<p>you will provide the training data, and the machine will undergo a training process and produce the model for you.</p>
		</div>

		<div class="word-shuffle" data-target-word="machinelearning">
			<ul id="left" class="jsSortableWord">
				<li>R</li>
				<li>G</li>
				<li>E</li>
				<li>I</li>
				<li>A</li>
				<li>N</li>
				<li>N</li>
			</ul>

			<ul id="right" class="jsSortableWord">
				<li>I</li>
				<li>E</li>
				<li>N</li>
				<li>A</li>
				<li>C</li>
				<li>H</li>
				<li>L</li>
				<li>M</li>
			</ul>
		</div>


		<a class="btn btn--blue inline-flex flex--center jsCheckSortedWords" href="#">Check</a>

		<div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
			<div class="holder flex flex--center ">
				<div class="speech-bubble--holder flex flex--center flex flex--end flex--column">
					<div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
						<p class="animate__animated animate__fadeInLeft animate__fast"><strong>Great work!</strong></p>
					</div>
					<img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
				 <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Let’s move on</a>
			 </div>

			</div>
		</div>

	 </div>
	 
  </section>
  <div class="jsScrollAnchor1"></div>
  
</main>

@endsection
@section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/sortable-words.js"></script>

<script src="/badge-assets/{{$url['slug']}}/_global/js/dragula.min.js"></script>

<link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/dragula.min.css">

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
</script>

@endsection
