@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])
<main>
  <section class='flex flex--center flex--column'>

    <div class='holder '>
      <div class="section__icon" data-aos="zoom-in" duration="1500" data-aos-delay="100" >
        <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/deployment.svg" />
      </div>
      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Deployment</h1>
       
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
         <div class="col" >
           <p>You have reached the final stage of the AI Project Cycle!</p>
           <p>All of the work you were doing earlier has led you to the final step of deploying your model to production! </p>
           <p>Now you will actually be using your model to predict outcomes in the real world. </p>
         </div>
         <div class="col">
          <p>By this point, your model should meet a threshold of accuracy that you or your team have deemed acceptable based on the testing that you have done in the Evaluation stage.</p>
          <p>In the case of the Kimchi Crisis, 16-year old Kim Han Seo from Busan Computer High School deployed his Linear Regression Model  using <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">Python</span> and trained it to predict the price of cabbage, based on temperature and rainfall data.</p>
         </div>
      </div>
      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400"><strong>What are some important things to consider during the deployment stage?</strong></p>

      <ul class="cards cards--deployment flex flex--wrap flex--justify-start" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/roi.svg" />
          <h2 class="card__title">Consider the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">ROI</span> of deployment</h2>
          <p>Sometimes the cost of deploying a model into production is higher than the value it would bring and knowing this will help you and your stakeholders decide if the deployment is worth it.</p>
        </li>

        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/risks.svg" />
          <h2 class="card__title">What are the risks of deployment?</h2>
          <p>It is important to analyse model performance with your team and your stakeholders to determine what the risks of deployment are and agree on a level of risk that is acceptable for inaccuracy.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/replication.svg" />
          <h2 class="card__title">Is your model easy to replicate?</h2>
          <p>Think about how this model can be reused in other contexts or departments or regions to help solve problems in the world.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/feedback-loop.svg" />
          <h2 class="card__title">Do you have a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">feedback loop</span> in place?</h2>
          <p>Before your model is deployed, it is a good idea to design a feedback loop so you can collect more, better quality data and correct any mistakes your system may be making.</p>
        </li>
        
        

        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/ethics.svg" />
          <h2 class="card__title">Ethics!</h2>
          <p>The ability to create powerful AI models has the potential to improve many aspects of our lives but it could also create problems, such as perpetuating historical biases and stereotypes. Carefully consider all potential short-term and long-term consequences of deploying your model – even well-intentioned systems can have unintentional harmful effects.</p>
        </li>

        

      </ul>
      
      <a class="btn btn--white inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600" data-aos-anchor-placement="bottom-bottom">Continue</a> 
          
	  </div>


  </section>
  <div class="tooltip_templates">
    <span id="tooltip1_content">
        <p>A programming language.</p>
    </span>
    <span id="tooltip2_content">
        <p>ROI stands for <strong>return on investment</strong> and is the measure of cost of an investment relative to the gain.</p>
    </span>
    <span id="tooltip3_content">
        <p>Mechanisms that are used to validate and get feedback about how the system is performing.</p>
    </span>
  </div>
  
</main>
@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 8);
</script>

@endsection
