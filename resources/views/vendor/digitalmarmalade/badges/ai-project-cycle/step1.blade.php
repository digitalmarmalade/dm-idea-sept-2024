@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])

<main>
	<section class='flex flex--center flex--column'>

	   	<div class="holder holder--full-width">
	    	<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">AI Project Cycle</h1>
				<p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">There are many AI project cycles to be explored but to keep it simple, we are going to break it down into 6 stages.</p>			


			
			<div class="slides__holder slides__holder--project-cycle jsslides" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="300">
				<div class="slides">

					<div class="slide flex flex--center jsTextSlide">							
						<div class="slide__top">
							 <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/icons/problem-scoping.svg" data-aos-duration="1500" data-aos-delay="200" />
							 <span class="stage-index"><strong>Stage 1</strong></span>
							 <h2 class="stage-name">Problem Scoping</h2>
						</div>						
						<div class="slide__bottom">
							<p>Define a goal for your project. Defining a project’s goal is one of the most important stages to kickstart the AI process. If you want a good outcome, you have got to set the goal right. <em>It’s like finding the goal post and positioning yourself to kick the ball into the goal post.</em></p>
						</div>													
					</div>
					
					<div class="slide flex flex--center jsTextSlide">							
						<div class="slide__top">
							 <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/icons/data-acquisition.svg" data-aos-duration="1500" data-aos-delay="200" />
							 <span class="stage-index"><strong>Stage 2</strong></span>
							 <h2 class="stage-name">Data Acquisition</h2>
						</div>						
						<div class="slide__bottom">
							<p>Collect the data that you think you will need to train your <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">model</span>.</p>
						</div>													
					</div>
					
					<div class="slide flex flex--center jsTextSlide">							
						<div class="slide__top">
							 <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/icons/data-exploration.svg" data-aos-duration="1500" data-aos-delay="200" />
							 <span class="stage-index"><strong>Stage 3</strong></span>
							 <h2 class="stage-name">Data Exploration</h2>
						</div>						
						<div class="slide__bottom">
							<p>Transform the data into a form that is readable by humans – visualise the data! Data is often visualised through graphs.</p>
						</div>													
					</div>
					
				
					<div class="slide flex flex--center jsTextSlide">							
						<div class="slide__top">
							 <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/icons/modeling.svg" data-aos-duration="1500" data-aos-delay="200" />
							 <span class="stage-index"><strong>Stage 4</strong></span>
							 <h2 class="stage-name">Modelling</h2>
						</div>						
						<div class="slide__bottom">
							<p>Implement <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">algorithms</span> and fine tune the models to give you the best results.</p>
						</div>													
					</div>
					
					<div class="slide flex flex--center jsTextSlide">							
						<div class="slide__top">
							 <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/icons/evaluation.svg" data-aos-duration="1500" data-aos-delay="200" />
							 <span class="stage-index"><strong>Stage 5</strong></span>
							 <h2 class="stage-name">Evaluation</h2>
						</div>						
						<div class="slide__bottom">
							<p><span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">Evaluate</span> the different models, and choose the best one!</p>
						</div>													
					</div>
					
					<div class="slide flex flex--center jsTextSlide">							
						<div class="slide__top">
							 <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/icons/deployment.svg" data-aos-duration="1500" data-aos-delay="200" />
							 <span class="stage-index"><strong>Stage 6</strong></span>
							 <h2 class="stage-name">Deployment</h2>
						</div>						
						<div class="slide__bottom">
							<p>Deploy your solution based on the model you’ve selected.</p>
						</div>													
					</div>
				</div>
			</div>
			
			<div class="tooltip_templates">
					<span id="tooltip1_content">
							<p>A system used to imitate or replicate a specific scenario.</p>
					</span>
					<span id="tooltip2_content">
							<p>A process or set of rules that a computer follows to solve a problem.</p>
					</span>
					<span id="tooltip3_content">
							<p>To assess or make a judgement about the results of an experiment.</p>
					</span>
			</div>
		</div>

	</section>

	<section class="activity flex flex--center flex--column aos-init aos-animate jsSortable" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" data-scroll-anchor="jsScrollAnchor1">
		<div class="holder flex flex--column flex--center">

		<p class=col-single><strong>Drag and drop the project cycle stages into the correct order.</strong></p>

		  <div class="sortable-wrapper">
		    <ul class="sortable quiz-reorder">
		      <li class="drag-option" data-answer="1">
		      	<div class="drag-handle"></div><div class="drag-text">Data Acquisition</div></li>
		      <li class="drag-option" data-answer="5">
		      	<div class="drag-handle"></div><div class="drag-text">Deployment</div></li>
		      <li class="drag-option" data-answer="0">
		      	<div class="drag-handle"></div><div class="drag-text">Problem Scoping</div></li>
		      <li class="drag-option" data-answer="4">
		      	<div class="drag-handle"></div><div class="drag-text">Evaluation</div></li>
		      <li class="drag-option" data-answer="2">
		      	<div class="drag-handle"></div><div class="drag-text">Data Exploration</div></li>
		      <li class="drag-option" data-answer="3">
		      	<div class="drag-handle"></div><div class="drag-text">Modelling</div></li>
		      
		    </ul>
		  </div>

		  <a href="#" class="btn btn--blue inline-flex flex--center jsCheckDrag">Check</a>

		</div>

		<div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
	      <div class="holder ">
	        <div class="speech-bubble--holder flex flex--end flex--column">
	          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
	            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Nice work!</strong> Let&rsquo;s dive into each stage. We will start with Problem Scoping.</p>
	          </div>
	          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
	                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
	          </div>
	      </div>
	    </div>

	    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
	      <div class="holder ">
	        <div class="speech-bubble--holder">
	          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
	            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, that&rsquo;s not quite right...</strong></p></div>
	          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
	          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTryAgain">Have another go</button>
	        </div>
	      </div>
	    </div>

 	</section>

 	<div class="jsScrollAnchor1"></div>


</main>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

$(document).ready(function(  ) {

  var $slides = $('.slides');

    $slides.on('afterChange', function(event, slick, slideId){
        var current = $(this).find('.slick-current');
    });

    $slides.slick({
		dots: true,
		infinite: false,
		speed: 300,
		draggable: true,
		swipe: true,
		swipeToSlide: true,
		touchMove: true,
		slidesToScroll: 1,
		slidesToShow: 1,
		variableWidth: true,
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 3
    });
});
</script>


@endsection