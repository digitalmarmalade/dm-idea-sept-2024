@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')

<header>
  @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
</header>

<div class="wrapper homepage">

  <section class="intro-top zoomOut t-animated">
    <img src="badge-assets/{{$url['slug']}}/_global/img/computer-intro.svg" alt="Image of computer" />
    <h1><span>THE SECRET LIFE OF</span>eCOMMERCE</h1>
  </section>
  <section id="intro-bottom" class="intro-bottom" >
      <div class="row">
          <div class="md-col-3-4 centre-col centred-text">
              <div class="column-content intro">
                  <p class="fadeUp t-animated">Buying and selling online (known as eCommerce) accounts for approximately 15% of all sales in the UK. In 2015, nearly 80% of UK internet users bought something online. Both of these figures are likely to rise significantly in the next few years.</p>
                  <p class="fadeUp t-animated">For eCommerce to grow, companies need to be able to deliver their goods quickly to their customers. This badge focuses on the systems that allow this to happen — <span>Electronic Funds Transfer</span>,<span> Electronic Data Interchange</span> and <span>Supply Chain Management.</span></p>
              </div>
          </div>
      </div>
      <p class="cta centre-cta fadeUp t-animated"><a href="{{$links['next']}}" class="btn btn-primary">Start</a></p>
  </section>
</div>

@endsection

@section('javascript')


<script type="text/javascript">
  Tu.tScroll({
    't-element': '.zoomOut'
  })
  Tu.tScroll({
    't-element': '.fadeUp'
  })
</script>

@endsection
