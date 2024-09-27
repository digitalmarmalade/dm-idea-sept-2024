@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="step-3">
      <section class="top grad-blue">
        <div class="holder">
          <div class="cols">
            <div>
              <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">Step 3</span><span class="more-kerning">W</span>hat is
                cryptocurrency?</h1>
              <p data-aos="fade-right" data-aos-delay="200">Cryptocurrencies are digital currencies that use cryptography to secure and verify transactions.</p>
              <p data-aos="fade-right" data-aos-delay="300">Put simply, it is a digital version of money. British Pounds (GBP), Euros (EUR), American Dollars (USD) are all currencies that you can have, hold and spend. Well, Bitcoin (BTC), Ethereum (ETH) and Ripple (XRP) are exactly the same, only digital.</p>
              <p data-aos="fade-right" data-aos-delay="400">From a technical perspective, cryptocurrency transactions are limited entries in a database that no-one can change unless specific conditions are fulfilled.</p>
            </div>

            <div class="highlight" data-aos="fade-up" data-aos-delay="200">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/highlight-2.png" />
              <div class="highlight-box pink">
                <h2>Cryptography</h2>
                <p>Various mathematical techniques for encrypting and decrypting data, to keep it private when transmitted or stored electronically.</p>
                <p>Cryptography is also a skill used to communicate in or decipher secret writings or ciphers.</p>
              </div>
            </div>

          </div>
          <img data-aos="zoom-in" src="/badge-assets/{{$url['slug']}}/_global/img/step-3.svg" />
          <div class="cols">

            <div class="highlight" data-aos="fade-up">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/highlight-1.png" />
              <div class="highlight-box yellow">
                <p>For a block to be added to the chain, the majority of the computers linked to that network must agree on the solution to a complex cryptographic problem.</p>
              </div>
            </div>

            <div>
              <p data-aos="fade-right" data-aos-delay="100">The key difference between cryptocurrency and traditional currencies, is they are not created or controlled by a single authority such as a government. Instead, cryptocurrencies are decentralised and run across a network of computers – as explained in Step 1.</p>

              <p data-aos="fade-right" data-aos-delay="200">Crucially this means there is no ‘trusted third party’, such as the bank, to confirm that the cryptocurrency has value.</p>

              <p data-aos="fade-right" data-aos-delay="300">Instead, cryptocurrency relies on the technology – the blockchain, which as we know, is a permanent record of linked data that cannot be changed without the consensus of the network.</p>

              <p data-aos="fade-right" data-aos-delay="400">This means that everyone can trust blockchain technology to accurately record ownership and verify transactions.</p>

              <a class="button" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="fade-up" data-aos-delay="900" >
                <span >
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/btn-next.png" />
                  <span class="btn btn-next-step">Continue</span>
                </span>
              </a>

            </div>



          </div>

        </div>


      </section>
    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
</script>

<!-- <script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script> -->
<script>
</script>
@endsection
