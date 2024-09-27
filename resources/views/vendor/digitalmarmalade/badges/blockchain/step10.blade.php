@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="step-5">
      <section class="top grad-blue">
        <div class="holder">
          <div>
            <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">Step 5</span><span class="more-kerning">T</span>he <span class="more-kerning">m</span>ost c<span class="letter-spacing">o</span><span class="letter-spacing">m</span><span class="letter-spacing">m</span>on cryptocurrencies</h1>

            <ul>

              <li class="box" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-bitcoin.svg" />
                </div>
                <h3>Bitcoin</h3>
                <p>The first ever cryptocurrency.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-bitcoin-cash.svg" />
                </div>
                <h3>Bitcoin Cash</h3>
                <p>A variation of Bitcoin.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-iota.svg" />
                </div>
                <h3>IOTA</h3>
                <p>Has removed dedicated miners from the process by asking the sender to handle the <span class="tooltip tooltip-cryptography">proof of work<span class="tooltiptext">Proof of work is a protocol that has the main goal of deterring cyber-attacks such as a distributed denial-of-service attack (DDoS).</span></span> (PoW) using technology called Tangle.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="500">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-ethereum.svg" />
                </div>
                <h3>Ethereum</h3>
                <p>A programmable currency that lets developers build different distributed apps and technologies that wouldn’t work with Bitcoin.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="600">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-neo.svg" />
                </div>
                <h3>NEO</h3>
                <p>Uses smart contracts which makes it more suited to all kinds of financial contracts and third-party distributed apps to be developed on top of it. Similar to Ethereum, but developed in China provides access to the biggest market in the world.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="700">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-litecoin.svg" />
                </div>
                <h3>Litecoin</h3>
                <p>A variation of Bitcoin, which can generate blocks four times faster and have four times the maximum number of coins.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="800">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-ripple.svg" />
                </div>
                <h3>Ripple</h3>
                <p>Unlike most cryptocurrencies, it doesn’t use a blockchain for validating its transactions. Instead, a different process is used (<span class="tooltip tooltip-cryptography">iterative consensus<span class="tooltiptext">During consensus, each node evaluates proposals from a specific set of peers, called chosen validators. Chosen validators represent a subset of the network which, when taken collectively, is "trusted" not to collude in an attempt to defraud the node evaluating the proposals. This definition of "trust" does not require that each individual chosen validator is trusted. Rather, validators are chosen based on the expectation they will not collude in a coordinated effort to falsify data relayed to the network.</span></span>) which makes it faster than Bitcoin but less safe, as it could be hacked.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="900">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-nem.svg" />
                </div>
                <h3>NEM</h3>
                <p>Unlike most other cryptocurrencies that work using <span class="tooltip tooltip-cryptography">proof of work<span class="tooltiptext">Proof of work is a protocol that has the main goal of deterring cyber-attacks such as a distributed denial-of-service attack (DDoS).</span></span> algorithm, it uses “Proof of Importance” meaning you need some currency in order to acquire new coins – trying to encourage users to spend their currency rather than hold on to it.</p>
              </li>

              <li class="box" data-aos="zoom-in" data-aos-delay="1000">
                <div class="icon-box">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-5-dash.svg" />
                </div>
                <h3>Dash</h3>
                <p>A two-tier network. The first tier are miners that secure the network and record transactions, while the second one consists of ‘masternodes’ which relay transactions. Tier 1 is much faster than Bitcoin, whilst Tier 2 is completely anonymous.</p>
              </li>
            </ul>
          </div>
      </section>

      <section class="middle grad-yellow">
        <div class="holder">
          <h1 data-aos="fade-right"><span class="more-kerning">Wh</span>at can you do with cryptocurrency?</h1>

          <div class="cols">
            <div class="img">
              <img data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-5-goods.svg" />
            </div>
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Buy Goods</h2>
              <p data-aos="fade-right" data-aos-delay="300">More and more companies are accepting cryptocurrency as a way of paying for things - both online and offline. You can spend them with companies like Expedia, Zynga, Xbox and even Subway (in Argentina).</p>

              <p data-aos="fade-right" data-aos-delay="400">To help support the growth, there are more and more crypto-ATMs springing up – with 27 in UK in 2018 – Cardiff to Manchester, Derby to London – they are out there. Add to that payments can also be accepted using hardware terminals, touch screen apps or simple wallet addresses through QR codes and you can see they are becoming more mainstream.</p>
            </div>
          </div>

          <div class="cols">

            <div>
              <h2 data-aos="fade-right">Invest</h2>
              <p data-aos="fade-right" data-aos-delay="100">This is what has made the news most recently – people buying cryptocurrency in the hope of selling it off at a higher price – much like the way shares work. It is important to understand that cryptocurrencies are high-risk investments. The value rises and drops like no other investable item – and so need close attention, or you can quickly lose a lot of money.</p>

              <p data-aos="fade-right" data-aos-delay="200">Because it's such a new concept, taxation varies country to country. It is not properly regulated and there are no safeguards or protections, and although the blockchain cannot be hacked, <span class="tooltip tooltip-invest">digital wallets <span class="tooltiptext">Instead of storing your money as a real-world wallet does, a digital wallet for cryptocurrencies saves your public and private keys (which you need to send and receive money). This gives you quick access to your funds and there are a wide range of options and support for different devices.</span></span> and the exchange (where the transactions are stored online) can be – which means it's not 100% safe.</p>

              <p data-aos="fade-right" data-aos-delay="300">Using a <span class="tooltip tooltip-invest">digital wallets <span class="tooltiptext">Instead of storing your money as a real-world wallet does, a digital wallet for cryptocurrencies saves your public and private keys (which you need to send and receive money). This gives you quick access to your funds and there are a wide range of options and support for different devices.</span></span> to store a large amount of cryptocurrency is not recommended because of the constant threat from hackers and <span class="tooltip tooltip-invest">ransomware<span class="tooltiptext">Malicious software designed to block access to a computer system until a sum of money is paid.</span></span>.</p>

              <p data-aos="fade-right" data-aos-delay="400">One of the safest ways to store your cryptocurrency is with a paper wallet. You can do this by printing out your public and private keys in the form of QR codes on a piece of paper which you then keep in a secure place. Remember though, you must still be cautious of real-world threats such as loss, theft or damage of private keys.</p>

            </div>
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-5-invest.svg" />
            </div>
          </div>

          <div class="cols">

            <div class="img">
              <img data-aos="fade-up" src="/badge-assets/{{$url['slug']}}/_global/img/step-5-mine.svg" />
            </div>

            <div>
              <h2 data-aos="fade-right" data-aos-delay="100">Mine</h2>
              <p data-aos="fade-right" data-aos-delay="200">As explained mining is critical in making any cryptocurrency network work, and to have the sufficient computer power to solve the ever-complicated cryptographic puzzles needs constant attention. As the difficulty of the puzzles constantly increases, so does the number of computers trying to solve it, making it harder for your computer to be credited with solving the algorithm and so acquire the associated transaction fee.</p>

              <p data-aos="fade-right" data-aos-delay="300">People have made lots of money mining cryptocurrencies, but now you will need to invest in industrial-grade mining hardware which uses a lot of power, and can be very expensive - making it more difficult to make money mining cryptocurrencies.</p>

            </div>

          </div>
          <a class="button" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="fade-up" data-aos-delay="900" >
            <span >
              <img src="/badge-assets/{{$url['slug']}}/_global/img/btn-next.png" />
              <span class="btn btn-next-step">Continue</span>
            </span>
          </a>

        </div>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 10);
</script>

<!-- <script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script> -->
<script>
</script>
@endsection
