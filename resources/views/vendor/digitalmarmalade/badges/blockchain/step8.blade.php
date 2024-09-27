@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="step-4">
      <section class="top grad-blue">
        <div class="holder">
          <div class="cols">
            <div>
              <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">Step 4</span>Cryptocurrency mining</h1>
              <p data-aos="fade-right" data-aos-delay="200">Mining is the process by which recent cryptocurrency transactions are checked and new blocks are added to the blockchain.</p>
              <h2 data-aos="fade-right" data-aos-delay="300">Checking transactions</h2>
              <p data-aos="fade-right" data-aos-delay="400">Mining computers pick a set of pending transactions from a group of transactions and check each one carefully to ensure the transaction is verified. Two checks take place:</p>
            </div>
          </div>
          <div class="cols cols2">
            <div>
              <h3 data-aos="fade-right">1<sup>st</sup> Check</h3>
              <p data-aos="fade-right" data-aos-delay="100">Confirms that the sender has sufficient funds to complete the transaction. This involves checking the transaction details against the transaction history stored in the blockchain.</p>
            </div>
            <div>
              <h3 data-aos="fade-right" data-aos-delay="200">2<sup>nd</sup> Check</h3>
              <p data-aos="fade-right" data-aos-delay="300">Confirms that the sender has authorised the transfer of funds. When sending funds, a user must sign the transaction using a private key, which is then combined in a <span class="tooltip">cryptographic<span class="tooltiptext">Various mathematical techniques for encrypting and decrypting data, to keep it private when transmitted or stored electronically. Cryptography is also a skill used to communicate in or decipher secret writings or ciphers.</span></span> manner. with the transaction data to form a unique digital signature. Because of the mathematics involved, miners can use this digital signature to verify that the sender had access to the wallet’s private key – and therefore the funds contained within it – without the sender having to reveal their private key.</p>
            </div>

          </div>
          <img data-aos="zoom-in" src="/badge-assets/{{$url['slug']}}/_global/img/step-4.svg" />
          <a class="button" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="fade-up" data-aos-delay="900" >
            <span >
              <img src="/badge-assets/{{$url['slug']}}/_global/img/btn-next.png" />
              <span class="btn btn-next-step">Continue</span>
            </span>
          </a>


      </section>
    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 8);
</script>

<!-- <script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script> -->
<script>
</script>
@endsection
