@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])
    
    <main class="step-2">
      <section class="top grad-blue">
        <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">Step 2</span><span class="more-kerning">H</span><span class="more-kerning">o</span><span class="more-kerning">w</span> does it <span class="more-kerning">w</span>ork?</h1>

        <div class="slides">

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-transaction.svg" />
            </div>
            <span class="figure">1</span>
            <p>Someone requests a transaction.</p>
          </div>

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-network.svg" />
            </div>
            <span class="figure">2</span>
            <p>The requested transaction is broadcast to a P2P network consisting of computers. These computers are known as nodes.</p>
          </div>

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-validation.svg" />
            </div>
            <span class="figure">3</span>
            <p>The network of nodes (computers) validates the transaction and the user’s status using known algorithms.</p>
          </div>

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-cryptocurrency.svg" />
            </div>
            <span class="figure">4</span>
            <p>A verified transaction can involve cryptocurrency, contracts, records or other information.</p>
          </div>

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-new-block.svg" />
            </div>
            <span class="figure">5</span>
            <p>Once verified, the transaction is combined with other transactions to create a new block of data for the ledger. </p>
          </div>

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-blockchain.svg" />
            </div>
            <span class="figure">6</span>
            <p>The new block is then added to the existing blockchain, in a way that is permanent and unalterable.</p>
          </div>

          <div class="box">
            <div class="icon-box">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-completed.svg" />
            </div>
            <span class="figure">7</span>
            <p>The transaction is completed.</p>
          </div>

        </div>
      </section>
      <section class="bottom grad-yellow">
        <div class="holder">
          <a class="button" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="fade-up" data-aos-delay="900" >
            <span>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/btn-next.png" />
              <span class="btn btn-next-step">Continue</span>
            </span>
          </a>
        </div>
      </section>
    </main>
@endsection
@section('javascript')

  <script src="/badge-assets/{{$url['slug']}}/_global/js/slick.min.js"></script>
  <script>

  $('.slides').slick({
    centerMode: true,
    dots: true,
    centerPadding: '60px',
    infinite: false,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 1367,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 1025,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 375,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1
        }
      }
    ]
  });
  </script>
  <script>
  var item_length = $('.timeline > div').length - 1,
    wrongAnswers = 0;

  $('.timeline').slick({
      infinite: false,
      dots: true,
  }).on('afterChange', function(event, slick, currentSlide, nextSlide){
    if(currentSlide == item_length) {
      $('.next-step').removeClass('hide');
      $("html, body").animate({scrollTop: $(document).height()});
    }
  });
</script>
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>
@endsection
