@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])


<section class="flex flex--center flex--column aos-init aos-animate jsSortable" data-scroll-anchor="jsScrollAnchor1">
	<div class="holder flex flex--column flex--center">
		<h1>Let’s recap!</h1>

	<p>Can you remember the order of the AI Project Cycle stages?<br><strong>Drag and drop the project cycle stages into the correct order:</strong></p>

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

	  <a href="#" class="btn btn--white inline-flex flex--center jsCheckDrag">Check</a>

	</div>

		<div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
	      <div class="holder ">
	        <div class="speech-bubble--holder flex flex--end flex--column">
	          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
	            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Well done!</strong> You have now learned all about the 6 stages of the AI Project Cycle. Now the fun starts &mdash; what type of problem do you want to solve following the AI Project Cycle? What are the goals that you want to achieve with your project?</p>
							<p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">Knowing the AI Project Cycle is not only useful for completing AI projects, it is an excellent framework to follow when trying to solve any problem that you may encounter in life.</p>
	          </div>
	          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
	                  <a class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
	          </div>
	      </div>
	    </div>

	    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
	      <div class="holder ">
	        <div class="speech-bubble--holder">
	          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
	            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, that&rsquo;s not quite right...</strong></p></div>
	          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
	          <button class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTryAgain">Have another go</button>
	        </div>
	      </div>
	    </div>

</section>

<div class="jsScrollAnchor1"></div>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 9);
</script>

@endsection
