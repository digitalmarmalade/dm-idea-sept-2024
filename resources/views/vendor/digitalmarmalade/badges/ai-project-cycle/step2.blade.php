@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>
   <div class='holder '>
      <div class="section__icon" data-aos="zoom-in" duration="1500" data-aos-delay="100" >
        <img  src="/badge-assets/{{$url['slug']}}/_global/images/icons/problem-scoping.svg" />
      </div>
      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Problem Scoping</h1>

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <div class="col" >
          <p>Problem Scoping is about understanding the problem and finding out the various factors which affect it.</p>
        </div>
        <div class="col">
          <p>If you have already done the Problem Solving with AI badge then you will be familiar with the Kimchi Crisis but don’t worry if you haven’t done it yet, you can try it next!</p>
        </div>
      </div>
      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"><strong>Watch this video for a quick recap on the Kimchi Crisis:</strong></p>

      <div class="holder--video" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <iframe src="https://tv.naver.com/embed/1283369" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
      
      <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph--soaring-prices.svg" data-aos-duration="1500" data-aos-delay="400" />

      
      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
        <div class="col" >
          <table data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" >
            <caption class="text-left" ><strong>Price by types of stores</strong><span>Unit: won</span></caption>
            <thead>
              <tr>
                <th class="text-left">Type of Stores</th>
                <th class="text-left">Napa Cabbage Price</th>
              </tr>
            </thead>
            
            <tbody>
              <tr>
                <td class="text-left">Traditional Markets</td>
                <td class="text-right">4,784</td>
              </tr>
              <tr>
                <td class="text-left">Department Stores</td>
                <td class="text-right">5,530</td>
              </tr>
              <tr>
                <td class="text-left">Large Discount Chains</td>
                <td class="text-right">3,702</td>
              </tr>
            </tbody>
              
          </table>
          <p>This data shows us the prices of the napa cabbage used in making <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">Kimchi</span>.</p>
          <p>If you look at January, the cabbage price was 2,569 won, and in April it was 4,822 won and subsequently it went down in June to a price of 3,175 won, and in December it skyrocketed to 5,303 won.</p>
        
        </div>
        <div class="col">
          <p>Would you want to buy a cabbage that is 3,175 won or a cabbage that is 5,303 won? Like most people, you would probably prefer the cheaper cabbage.</p>
          <p>In the video, because of the rise in cabbage prices, people were having to find alternative ingredients to make Kimchi with, or make less.</p>
          <p>Imagine if it were possible to know the price of napa cabbage in advance so that you can stock up when it is cheaper and avoid having to buy it when it’s most expensive…</p>
            <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/problem-scoping.svg" data-aos-duration="1500" data-aos-delay="200" />
        </div>
      </div>
    
    

      <a class="btn btn--white inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="700" data-aos-anchor-placement="bottom-bottom">Continue</a>

    </div>
    
    <div class="tooltip_templates">
        <span id="tooltip1_content">
            <p>The name for preserved vegetables, commonly made with napa cabbage that is seasoned with sea salt, chilli peppers and fermented seafood and is a traditional Korean side dish eaten with every meal.</p>
        </span>
    </div>
    

  </section>
</main>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>

<script>

$(document).ready(function(  ) {
    $('.jsTooltip').tooltipster({
         trigger: triggerMode,
         maxWidth: 350
    });
});
</script>

@endsection
