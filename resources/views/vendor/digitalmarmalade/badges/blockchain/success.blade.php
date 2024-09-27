@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="home success">
      <section class="top grad-blue">
        <div class="holder">
          <div>
            <h1 data-aos="fade-right"><span class="more-kerning" style="font-size: 100%;">W</span>ell done!</h1>
            <p data-aos="fade-right" data-aos-delay="100">You’ve completed this badge and:</p>
            <ul class="list">
              <li data-aos="fade-right" data-aos-delay="200">Found out what blockchains are and how they work</li>
              <li data-aos="fade-right" data-aos-delay="300">Learnt about different cryptocurrencies</li>
              <li data-aos="fade-right" data-aos-delay="400">Discovered the potential of blockchain technology</li>
            </ul>
          </div>
          <div>
            <img data-aos="fade-down" data-aos-delay="500" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" alt=""/>
          </div>
        </div>
      </section>

      <section id="bottom" class="bottom grad-yellow">
        <div class="holder">
          <div>
            <a class="button" href="/badge-assets/{{$url['slug']}}/_global/pdf/blockchain-jargon-buster.pdf"  data-aos="fade-up" data-aos-delay="900" download>
              <span >
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                <span class="btn btn-next-step pink">Download Jargon Buster</span>
              </span>
            </a>
          </div>
          <div class="idea">
            <a class="button" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}"  data-aos="fade-up" data-aos-delay="900" >
              <span >
                <img src="/badge-assets/{{$url['slug']}}/_global/img/btn-next.png" />
                <span class="btn btn-next-step">Go back to iDEA and claim your points!</span>
              </span>
            </a>
          </div>
        </div>
      </section>

    </main>
@endsection
