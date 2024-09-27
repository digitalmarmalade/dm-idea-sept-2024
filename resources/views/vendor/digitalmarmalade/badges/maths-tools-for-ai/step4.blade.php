@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

	   	<div class="holder ">
	    	<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Statistics</h1>
        <div class="cols flex flex--column flex--justify-space-between flex--center flex--row-reverse" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div class="col" >
            <img class="img-bleed" src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/statistics.svg" />  
          </div>
          <div class="col">
            <p>Statistics is the practice, or science of, collecting and analysing numerical data in large quantities.</p>
            <p>You can use statistics to help you to make decisions based on data. You can also use statistics to make predictions!</p>
            <p>Let’s get to know a few of the terms that you will often come across in statistics.</p>
          </div>
          
        </div>	
        
        <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div class="col" >
            <ul class="cards--with-examples" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
              
              <li class="card">
                <div class="card__top ">
                  <div class="flex flex--column flex--grow-1">
                    <h2 class="card__title">Mean</h2>
                    <p>The mean is the &#8216;average&#8217; value of your data, which can be determined by adding up all the numbers then dividing that sum by the number of numbers.</p>
                  </div>
                </div>      
                <div class="card__bottom">
                  <span>Example</span>
                  <ul class="flex list--figures">
                    <li class="flex flex--center"><strong>1</strong></li>
                    <li class="flex flex--center"><strong>2</strong></li>
                    <li class="flex flex--center"><strong>3</strong></li>
                    <li class="flex flex--center"><strong>2</strong></li>
                  </ul>
                  <p><strong>The mean is 2.</strong></p>
                  <p><em>(1+2+3+2) / 4 = 2</em></p>
                </li>
                
              
              <li class="card">
                <div class="card__top ">
                  <div class="flex flex--column flex--grow-1">
                    <h2 class="card__title">Median</h2>
                    <p>If you arrange your data in order, then the median is the data point which lies right in the middle.</p>
                  </div>
                </div>      
                <div class="card__bottom">
                  <span>Example</span>
                  <ul class="flex list--figures">
                    <li class="flex flex--center"><strong>1</strong></li>
                    <li class="flex flex--center"><strong>4</strong></li>
                    <li class="flex flex--center"><strong>2</strong></li>
                    <li class="flex flex--center"><strong>5</strong></li>
                    <li class="flex flex--center"><strong>3</strong></li>
                  </ul>
                  <p><strong>The median is 2.</strong></p>
                </div>
              </li>
              
              <li class="card">
                <div class="card__top ">
                  <div class="flex flex--column flex--grow-1">
                    <h2 class="card__title">Variance</h2>
                    <p> It is the square of the standard deviation.</p>
                  </div>
                </div>      
                <div class="card__bottom">
                  <span>Example</span>
                  <p><strong> If the standard deviation is 2, the variance is 2 squared, or 4.</strong></p>
                </div>
              </li>
              
              
            </ul>
          </div>
          
          <div class="col">
            <ul class="cards--with-examples" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
              

                <li class="card">
                  <div class="card__top ">
                    <div class="flex flex--column flex--grow-1">
                      <h2 class="card__title">Mode</h2>
                      <p>The most frequently occurring observation in any set of data is known as the mode.</p>
                    </div>
                  </div>      
                  <div class="card__bottom">
                    <span>Example</span>
                    <ul class="flex list--figures">
                      <li class="flex flex--center"><strong>1</strong></li>
                      <li class="flex flex--center"><strong>3</strong></li>
                      <li class="flex flex--center"><strong>4</strong></li>
                      <li class="flex flex--center"><strong>2</strong></li>
                      <li class="flex flex--center"><strong>5</strong></li>
                      <li class="flex flex--center"><strong>3</strong></li>
                      <li class="flex flex--center"><strong>3</strong></li>
                      <li class="flex flex--center"><strong>1</strong></li>
                    </ul>
                    <p><strong>The mode is 3.</strong></p>
                  </div>
                </li>
              
          
              <li class="card">
                <div class="card__top ">
                  <div class="flex flex--column flex--grow-1">
                    <h2 class="card__title">Standard deviation</h2>
                    <p>Standard deviation is a measure of the amount of variation that exists in the data with respect to its mean. A low standard deviation indicates that the values tend to be close to the mean, while a high standard deviation indicates that the values are spread out over a wider range. </p>
                    <p>The standard deviation is calculated by taking the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">square root</span> of the variance.</p>
                  </div>
                </div>      
                <div class="card__bottom">
                  <span>Example</span>
                  <p><strong>If the variance is 4, the standard deviation is the square root of 4, or 2. </strong></p>
                </div>
              </li>
              
            </ul>
          </div>
        
        </div>	
        
        
        
	    </div>
      
      <div class="tooltip_templates">
          <span id="tooltip1_content">
              <p>A square root is a number that, when multiplied by itself, gives a value. For example, the square root of 9 is 3 because 3 x 3 equals 9.</p>
          </span>
      </div>
  </section>
  
  <section class='activity flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">

      <div class='holder holder-crossword flex flex--column flex--center'>
        <p class="col-single"><strong>Let’s test what you’ve learnt! Can you figure out the word based on the definitions provided to complete this crossword puzzle?</strong></p>
        <p class="col-single">Don’t forget you can refer to the content above if you can’t think of the answer.</p>
        
  	    <div class="crossword-holder">
  	  		<div class="crossword-clues box box--transparent box--crossword-hints">
            <p><strong>DOWN</strong></p>
            <ol class="mobile-down">
              <li>1. A measure of the amount of variation that exists in the data with respect to its mean (two words).</li>
              <li>4. This is the most frequently occurring observation in any set of data.</li>
              <li>5. This is also known as the ‘average’ value of your data</li>
            </ol>
            
    		    <p><strong>ACROSS</strong></p>
            <ol class="mobile-across">
  						<li>2. If you arrange your data in order, then the this is the data point which lies right in the middle.</li>
  						<li>6. The square of the standard deviation.</li>
            </ol>
<!-- 		            <ol class="desktop-across">
						<li>3. A measure of the amount of variation that exists in the data with respect to its mean (two words).</li>
						<li>4. See 3. ACROSS</li>
						<li>5. This is also known as the ‘average’ value of your data.</li>
						<li>6. This is the most frequently occurring observation in any set of data.</li>
		            </ol> -->

<!-- 		            <ol class="desktop-down">    
		            	<li>1. If you arrange your data in order, then the this is the data point which lies right in the middle.</li>
		            	<li>2. The square of the standard deviation.</li>
		            </ol> -->

                <p class="note-scroll"><strong>NOTE: You can scroll within the grid</strong></p>
    			</div>

            

    	  		@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.crosswords')
        </div>

		<div class="crossword-next jsCrosswordNext">
			<a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Next</a>
		</div>

		<div class="jsScrollAnchor1"></div>

      </div>
    </section>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
