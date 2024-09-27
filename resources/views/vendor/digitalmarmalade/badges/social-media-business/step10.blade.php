@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="the-coffee-shop-task">
  <section class="blue top">
      <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

      <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

      <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

      <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

      <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

      <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />

      <div class="holder">
        <div class="task-intro">
        <h1 data-aos="zoom-in" data-aos-delay="100">the clothes shop</h1>

        <p data-aos="zoom-in" data-aos-delay="200">You’ve learned that it’s important to understand what can be measured on Social Media and turned into analytics that are useful to marketers, helping to inform their marketing and business strategy. A clothes shop is using Social Media analytics to get insights for their marketing and business strategy. Drag and drop each of the insights below to the correct description:</p>
      </div>
      </div>
      <div class="the-clothes-shop">
        <img class="fence" data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/fence.png" alt="" />
        <img class="building" data-aos="fade-up" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/the-clothes-shop.png" alt="" />
        <img class="people" data-aos="fade-up" data-aos-delay="400" src="/badge-assets/{{$url['slug']}}/_global/img/the-clothes-shop-people.png" alt="" />

      </div>

  </section>

  <section class="grey bottom">
    <div class="holder">
      <div class="panel panel-drag-drop" id="#task" data-aos="fade-up" data-aos-delay="100">

          <div class="drop-wrapper">
            <div class="drag-options">
                <ul>
                    <li class="drag-option draggable" id="answer_1_1"><img src="/badge-assets/{{$url['slug']}}/_global/img/analytics-share-voice.svg" alt="S"/><span>Share of voice</span></li>
                    <li class="drag-option draggable" id="answer_1_2"><img src="/badge-assets/{{$url['slug']}}/_global/img/analytics-engagement.svg" alt="S"/><span>Engagement</span></li>
                    <li class="drag-option draggable" id="answer_1_3"><img src="/badge-assets/{{$url['slug']}}/_global/img/analytics-social-mentions.svg" alt=""/><span>Social Mention</span></li>
                    <li class="drag-option draggable" id="answer_1_4"><img src="/badge-assets/{{$url['slug']}}/_global/img/analytics-reach.svg" alt=""/><span>Reach & Exposure</span></li>
                    <li class="drag-option draggable" id="answer_1_5"><img src="/badge-assets/{{$url['slug']}}/_global/img/analytics-sentiment.svg" alt=""/><span>Sentiment</span></li>
                </ul>
            </div>
              <div class="droppable-zone">
                  <ul>
                      <li class="dropzone" id="droppable1">
                          <div class="before-drop">
                              <span></span><p>How many times the name of the clothes shop is included in conversations across Social Media and online.</p>
                          </div>
                          <div class="after-drop">
                              <span>Social mention</span><p>How many times the name of the clothes shop is included in conversations across Social Media and online.</p>
                          </div>
                      </li>

                      <li class="dropzone" id="droppable2">
                          <div class="before-drop">
                              <span></span><p>How the audience feels emotionally about the clothes shop.</p>
                          </div>
                          <div class="after-drop">
                              <span>sentiment</span><p>How the audience feels emotionally about the clothes shop.</p>
                          </div>
                      </li>

                      <li class="dropzone" id="droppable3">
                          <div class="before-drop">
                              <span></span><p>How much interaction a piece of content shared by the clothes shop receives. For example: likes, shares, comments.</p>
                          </div>
                          <div class="after-drop">
                            <span>engagement</span><p>How much interaction a piece of content shared by the clothes shop receives. For example: likes, shares, comments.</p>
                          </div>
                      </li>

                      <li class="dropzone" id="droppable4">
                          <div class="before-drop">
                              <span></span><p>How much of the conversation with target consumers is about the clothes shop versus their competitors.</p>
                          </div>
                          <div class="after-drop">
                              <span>share of voice</span><p>How much of the conversation with target consumers is about the clothes shop versus their competitors.</p>
                          </div>
                      </li>

                      <li class="dropzone" id="droppable5">
                          <div class="before-drop">
                              <span></span><p>The number of people who have seen the piece of content shared by the clothes shop. </p>
                          </div>
                          <div class="after-drop">
                              <span>reach & exposure</span><p>The number of people who have seen the piece of content shared by the clothes shop.</p>
                          </div>
                      </li>

                  </ul>
              </div>

          </div>
          <div class="feedback feedback-success hide">
            <h2>Nice one!</h2>
            <a data-aos="fade-in" data-aos-delay="700" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();">Continue</a>
          </div>

    </div>
  </section>
</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-10.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 10);
  </script>


@endsection
