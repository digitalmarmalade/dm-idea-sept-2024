@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')


        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
        </header>
        <div class="final-screen">
          <section class="final-screen-top">
               <div class="main-content centre-col">
                  <h1 class="fadeUp t-animated">WELL DONE!</h1>
                  <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/final-screen.svg" alt="Illustration showing electronic funds transfer" />
                  <p class="fadeUp t-animated">In this badge you have learnt about the systems that eCommerce websites use to deliver goods quickly to their customers, including:</p>
                  <ul>
                      <li class="fadeUp t-animated">How Electronic Funds Transfer is reducing the need for paper money</li>
                      <li class="fadeUp t-animated">How companies use Electronic Data Interchange to make payment easier</li>
                      <li class="fadeUp t-animated">How Supply Chain Management means products can be delivered to customers quickly</li>
                  </ul>
                  <p class="cta zoomOut t-animated"><a href="{{$links['submit']}}" class="btn btn-primary btn-final ">CLAIM YOUR POINTS AND GO BACK TO <span>i</span>DEA</a></p>
              </div>
          </section>
        </div>

        @endsection

        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 9);
            oBadges.redirectIfPreviousStepNotCompleted(8, '{{$links['last']}}');
        </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })
          </script>

          @endsection
