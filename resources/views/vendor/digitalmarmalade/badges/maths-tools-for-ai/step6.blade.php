@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

	   	<div class="holder">
	    	<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Vectors</h1>

        <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div class="col" >
            <p>Vectors are used a lot in machine learning because they provide a way of organising data.</p>
          </div>
          <div class="col">
            <p>To understand what vectors are, let’s look at an example using word vectors.</p>
          </div>
        </div>	
      
        <img data-aos="fade-up"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/vectors.svg" data-aos-duration="1500" data-aos-delay="300" />
        
        <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          <div class="col" >
            <p>Word vectors make <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">NLP</span> possible, such as speech recognition and machine translation.</p>
            <p>A word vector is a set of data that represents the meaning of a word, for example, how it is spelled and the context in which the word is used.</p>
            <p>When a computer hears a word that has multiple meanings, vectors help the computer determine, using all of the data that it has stored for the word, the most probable meaning based on the context in which you used the word. </p>
          </div>
          <div class="col">
            <p>Words with similar contexts have similar vectors. This means that words such as orange and apple should have similar vectors to the word fruit, because they have similar meanings. </p>
            <p>When it comes to speech recognition, for example, if you are asking Amazon’s Alexa to add oranges to your grocery shopping list, word vectors enable the technology that Alexa is built on to detect, based on the fact that you need to buy groceries, that you are probably talking about the fruit and not the colour orange.</p>
          </div>
        </div>	
      
	    </div>
  </section>
  
  <section>
    <div class="holder no-padding-bottom">
      <h2 class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">Now, let’s look at vectors in mathematical terms</h2>
      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <div class="col" >
          <p>A vector is a mathematical object that has both direction and <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">magnitude</span>.</p>
          <div class="box box--transparent flex flex--center flex--column">
            <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-vectors-1.svg" />
            <p><strong>On a graph, we picture a vector as an arrow, where the head of the arrow indicates the vector’s direction while the length represents its magnitude.</strong></p>
          </div>
        </div>
        <div class="col">
          <p>For example, <strong>50 <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">mph</span></strong> would not be a vector because it only describes the magnitude (in this case, speed) but not the direction that it’s going in. <strong>50 <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip4_content">mph</span> east</strong> would be a vector because it describes the direction (east) and the magnitude (speed).</p>
          <div class="box box--transparent flex flex--center flex--column">
            <img class="symbol-vectors-1" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/symbol-vectors-1.svg" />
            <p><strong>Vectors are represented using a bold letter a or by placing an arrow above the letter a.</strong></p>
          </div>    
          <p>Vectors can be written out like an equation, a = (<em>x</em>,<em>y</em>) or <img class="symbol-vectors-1 inline" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/symbol-vectors-1.svg" />=(<em>x</em>,<em>y</em>) where <em>x</em> represents the direction on the <em>x</em> axis and <em>y</em> represents the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip5_content">magnitude</span> on the <em>y</em> axis.</p>
        </div>
      </div>	
    </div>
    
  </section>
  
  <section>
    <div class="holder ">
      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <div class="col" >
          <p>Let’s take a look at a two dimensional vector <strong>a</strong>=(4,3) where 4 is the direction and 3 is the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip6_content">magnitude</span>.</p>
          <p>This can also be represented as <img class="symbol-vectors-2" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/symbol-vectors-2.svg" />.</p>

          <img src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-vectors-2.svg" />
          
        </div>
        <div class="col">
          <div class="box flex flex--center flex--column">
            <span><strong>NOTE</strong></span>
            <p>You can start vectors anywhere on the graph but it is common to start a vector in standard position (0,0).</strong></p>
          </div>      
          <p>You can see that if we start the vector at (0,0), it has traveled 4 units on the <em>x</em> axis and then 3 units on the <em>y</em> axis.</p>
          <p>If you were to draw a straight arrow from the starting point of the vector to its new coordinates, this arrow would represent vector <strong>a</strong>.</p>
          <p>Only the basics of vectors are covered in this badge but if you are interested in how vectors can be transformed using algebra, you can access a series of tutorial videos linked at the end of this badge.</p>
        </div>
      </div>	
      <a class="btn btn--white inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" data-aos-anchor-placement="bottom-bottom">Continue</a>
    </div>
    


    
  </section>
  
  <div class="tooltip_templates">
      <span id="tooltip1_content">
          <p>Natural language processing, commonly abbreviated as NLP, is a method of communicating with computers using natural (or human) language, such as English.</p>
      </span>
      <span id="tooltip2_content">
          <p>In relation to movement, magnitude refers to the size and speed of a traveling object.</p>
      </span>
      <span id="tooltip3_content">
          <p>Miles per hour.</p>
      </span>
      <span id="tooltip4_content">
          <p>Miles per hour.</p>
      </span>
      <span id="tooltip5_content">
          <p>In relation to movement, magnitude refers to the size and speed of a traveling object.</p>
      </span>
      <span id="tooltip6_content">
          <p>In relation to movement, magnitude refers to the size and speed of a traveling object.</p>
      </span>
  </div>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
</script>

@endsection
