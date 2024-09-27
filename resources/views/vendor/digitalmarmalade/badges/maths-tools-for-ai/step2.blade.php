@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
	  <section class='flex flex--center flex--column'>

	   	<div class="holder">
				<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Introduction to Functions</h1>
				<div class="box box--transparent col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
					<img class="illustration--functions-1" src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/functions-1.svg" />
					<p><strong>In mathematics, functions are often symbolised by the equation <em>y</em>=f(<em>x</em>)</strong></p>
				</div>

				<div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
	        <div class="col" >
	          <p>A function is a rule which relates the values of an output based on an input. Functions are essential for working out relationships or patterns in mathematics.</p>
	        </div>
	        <div class="col">
	          <p>Think about a machine that has an input and an output. What you put into the machine affects what comes out of the machine. The output will vary depending on what the input is.</p>
	        </div>
	      </div>	
				
				<div class="col-single">
					<p  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400"><strong>Let’s take a look at an example:</strong></p>
					<p  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" >In this table, we are going to use <strong>multiply by 2</strong> as the function.</p>
					<div class="cols flex flex--column flex--justify-space-between" >
						<div class="col no-margin" >
							<table data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" >
		            <thead>
		              <tr>
		                <th class="text-center">INPUT</th>
		                <th class="text-center">RELATIONSHIP</th>
										<th class="text-center">OUTPUT</th>
		              </tr>
		            </thead>
		            
		            <tbody>
		              <tr>
		                <td class="text-center"><strong>0</strong></td>
		                <td class="text-center"><strong>x 2</strong></td>
										<td class="text-center"><strong>0</strong></td>
		              </tr>
									<tr>
										<td class="text-center"><strong>1</strong></td>
										<td class="text-center"><strong>x 2</strong></td>
										<td class="text-center"><strong>2</strong></td>
									</tr>
									<tr>
										<td class="text-center"><strong>7</strong></td>
										<td class="text-center"><strong>x 2</strong></td>
										<td class="text-center"><strong>14</strong></td>
									</tr>
									<tr>
										<td class="text-center"><strong>10</strong></td>
										<td class="text-center"><strong>x 2</strong></td>
										<td class="text-center"><strong>20</strong></td>
									</tr>
									<tr>
										<td class="text-center"><strong>...</strong></td>
										<td class="text-center"><strong>...</strong></td>
										<td class="text-center transparent"><strong>?</strong></td>
									</tr>
		              
		            </tbody>
		            
		          </table>
						</div>
						<div class="col flex flex--align-end flex--justify-start hide-mobile no-margin" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="600">
							<img class="illustration--functions-2 no-margin" src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/functions-2.svg"  />  
						</div>
						
					
					</div>	
					<div class="col-single">
						<p  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">If the input is 50, what is the output?</p>
						<p  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">If you guessed 100, you are correct! 50 went into the machine and got multiplied by 2, which makes the output 100.</p>
					</div>
	    </div>

	</section>

	<section class="activity activity-true-or-false flex flex--center flex--column jsSelectItems" 
		data-max-selected="1" 
		data-scroll-anchor="jsScrollAnchor1"
		data-question-type="true-or-false"
		data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900"
	>

		<div class="holder flex flex--column flex--center">
			<p><strong>True or false?</strong></p>

			<div class="question-wrapper">
				<p>Functions are essential for formulating relationships or patterns in mathematics.</p>
				<ul class="flex">
					<li class="flex flex--center jsAnswer jsCorrect"><strong>True</strong></li>
					<li class="flex flex--center jsAnswer"><strong>False</strong></li>
				</ul>
	  	</div>

	  		<div class="question-wrapper">
				<p>A function defines a relationship between two outputs.</p>
				<ul class="flex">
					<li class="flex flex--center jsAnswer"><strong>True</strong></li>
					<li class="flex flex--center jsAnswer jsCorrect"><strong>False</strong></li>
				</ul>
	  		</div>

			<div class="question-wrapper">
				<p>Functions are commonly symbolised by the equation f=<em>y</em>(<em>x</em>).</p>
				<ul class="flex ">
					<li class="flex flex--center jsAnswer"><strong>True</strong></li>
					<li class="flex flex--center jsAnswer jsCorrect"><strong>False</strong></li>
				</ul>
	  		</div>
	  		
			<div class="question-wrapper">
				<p>The output of a function will vary depending on what the input is.</p>
				<ul class="flex ">
					<li class="flex flex--center jsAnswer jsCorrect"><strong>True</strong></li>
					<li class="flex flex--center jsAnswer "><strong>False</strong></li>
				</ul>
	  		</div>
	      <a class="btn btn--blue inline-flex flex--center jsCheck" href="">Check</a>
	    </div>

	    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
	      <div class="holder ">
	        <div class="speech-bubble--holder flex flex--end flex--column">
	          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
	            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Well done!</strong> You now know what functions are!</p>
	          </div>
	          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />

				<a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Next</a>

	        </div>

	      </div>
	    </div>


	    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
	      <div class="holder ">
	        <div class="speech-bubble--holder">
	          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
	            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong>  Please review the text and try again.</p>
	          </div>
	          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
	          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsResetKeepCorrect">Try again</button>
	        </div>
	      </div>
	    </div>

 	</section>
  	<section class="jsScrollAnchor1"></section>

</main>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>

@endsection
