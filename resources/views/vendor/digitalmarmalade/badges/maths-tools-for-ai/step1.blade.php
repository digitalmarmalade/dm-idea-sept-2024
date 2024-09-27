@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
	<section class='flex flex--center flex--column'>
		<div class="holder holder--full-width">
			<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Mathematical Tools for AI</h1>

			<img src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/mathematical-tools-for-ai.svg"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"/>

			<h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">What is the connection between AI and mathematics?</h2>
			<div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <div class="col" >
          <p>AI helps us solve problems, whether they are small, everyday problems like asking <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">Alexa</span> if it will rain tomorrow, or the world’s biggest problems, like preventing a global food crisis.</p>
					<p>Solving problems requires information, or data, but data (especially when there is a lot of it) can be useless unless you know how to derive meaning from it.</p>
        </div>
        <div class="col">
          <p>So what do researchers do after they gather a lot of data? They need <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">mathematical models</span> to interpret the data, which will allow them to make predictions, draw conclusions or conduct further testing and analysis.</p>
        </div>
      </div>
	  </div>
	</section>

	<div class="holder">
		<h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">What kind of mathematics is used in AI?</h2>
		<p class="single-column" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">Some of the key concepts that form the foundation of data science include:</p>
		<ul class="list--3-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
				<li class='box flex flex--center'><strong><span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">Linear algebra</span></strong></li>
				<li class='box flex flex--center'><strong><span class="tooltipster jsTooltip" data-tooltip-content="#tooltip4_content">Probability</span></strong></li>
				<li class='box flex flex--center'><strong><span class="tooltipster jsTooltip" data-tooltip-content="#tooltip5_content">Statistics</span></strong></li>
				<li class='box flex flex--center'><strong><span class="tooltipster jsTooltip" data-tooltip-content="#tooltip6_content">Calculus</span></strong></li>
				<li class='box flex flex--center'><strong><span class="tooltipster jsTooltip" data-tooltip-content="#tooltip7_content">Logistic regressions</span></strong></li>
			</ul>

		<p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">To help you gain an understanding of some of the fundamental mathematical tools used in AI, we are going to introduce you to several of those concepts, starting with functions!</p>
	</div>
</section>

	<section class="activity flex flex--center flex--column jsSortable" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" data-scroll-anchor="scrollAnchor1">
		<div class="holder flex flex--column flex--center">

		<p class=col-single><strong>Can you arrange the steps below in the correct order to see where mathematics comes into the problem solving process?</strong></p>

		  <div class="sortable-wrapper">
		    <ul class="sortable quiz-reorder">
		      <li class="drag-option" data-answer="2">
		      	<div class="drag-handle"></div><div class="drag-text">Apply mathemathical models to data</div></li>
		      <li class="drag-option" data-answer="4">
		      	<div class="drag-handle"></div><div class="drag-text">Draw conclusions</div></li>
		      <li class="drag-option" data-answer="3">
		      	<div class="drag-handle"></div><div class="drag-text">Interpret data</div></li>
		      <li class="drag-option" data-answer="0">
		      	<div class="drag-handle"></div><div class="drag-text">Identify problem</div></li>
		      <li class="drag-option" data-answer="1">
		      	<div class="drag-handle"></div><div class="drag-text">Gather data</div></li>
		    </ul>
		  </div>

		  <a href="#" class="btn btn--blue inline-flex flex--center jsCheckDrag">Check</a>

		</div>

		<div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
				<div class="holder ">
					<div class="speech-bubble--holder flex flex--end flex--column">
						<div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
							<p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Well done!</strong> Mathematics helps researchers build models to understand the data and figure out what they should do next.</p>
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
							<p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, that&rsquo;s not quite right...</strong> Review the text and try again.</p></div>
						<img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
						<button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTryAgain">Have another go</button>
					</div>
				</div>
			</div>

			<div class="tooltip_templates">
					<span id="tooltip1_content">
							<p>Amazon’s virtual assistant AI technology.</p>
					</span>
					<span id="tooltip2_content">
							<p>A description of a system using mathematical language.</p>
					</span>
					<span id="tooltip3_content">
							<p>A branch of mathematics that deals with linear equations.</p>
					</span>
					<span id="tooltip4_content">
							<p>An indication of how likely an event takes place.</p>
					</span>
					<span id="tooltip5_content">
							<p>The practice, or science of, collecting and analysing numerical data in large quantities.</p>
					</span>
					<span id="tooltip6_content">
							<p>The mathematical study of continuous change.</p>
					</span>
					<span id="tooltip7_content">
							<p>A model that measures the relationship between a dependent variable and independent variable(s).</p>
					</span>

			</div>
		</div>

 	</section>

 	<div class="scrollAnchor1"></div>

</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

@endsection
