@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="step-1">
      <section class="top grad-blue">
        <div class="holder">
          <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">Step 1</span><span class="more-kerning">W</span>hat is a blockchain?</h1>
          <div>
            <p data-aos="fade-right" data-aos-delay="200">A blockchain is a chain of digital blocks that contain records of transactions. The first ever blockchain database was created by the mysterious Satoshi Nakamoto (no-one knows for sure if this is a person or group of people) in 2008, as part of creating the world’s first digital currency – Bitcoin.</p>
            <p data-aos="fade-right" data-aos-delay="300">Like most digital innovations, it has since grown to become much more – but at its base it is the same – a way to allow digital information to be distributed but not copied.</p>
          </div>
        </div>
        <div class="step-1-top-img"></div>
        <div class="holder">
          <div>
            <h2 data-aos="fade-right">Public and Private blockchains</h2>
            <p data-aos="fade-right" data-aos-delay="100">Blockchains can be both private and public.</p>
            <p data-aos="fade-right" data-aos-delay="200">Public blockchains use computers connected to the Internet to validate transactions and package them into blocks. Public blockchains are typically designed around the principle of anonymity and any computer connected to the Internet can join in.</p>
            <p data-aos="fade-right" data-aos-delay="300">Private blockchains use identity to confirm membership and access privileges, and so the participants in the network know exactly who they are dealing with.</p>
          </div>
        </div>
      </section>
      <section class="middle grad-yellow">
        <div class="holder">
          <h1><span class="more-kerning">W</span>hy is it secure?</h1>
          <p>There are two reasons for this:</p>
          <div class="cols">
            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-blockchain.svg" />
              </div>
              <div>
                <span class="figure">1</span>
                <p class="box-title">It is difficult to just add in a block</p>
                <p>A block can only be added into a blockchain if all the computers, or nodes connected to the network are in agreement - which is why you might have heard that blockchains are “consensus-driven”. </p>
                <p>With Bitcoin, consensus is achieved through “mining.” In Bitcoin mining, computers on the network (or ‘miners’) try to solve a complex cryptographic problem.</p>
              </div>
            </div>
            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-hack.svg" />
              </div>
              <div>
                <span class="figure">2</span>
                <p class="box-title">It is practically impossible to hack</p>
                <p>Information on a blockchain is secured cryptographically, but what's to stop hackers cracking the code and changing it? Firstly, people who are part of the network have their own <span class="tooltip tooltip-cryptography">private keys<span class="tooltiptext">Private keys act as personal digital signatures.</span></span> that are given to the transactions they make.</p>
                <p>If a record is changed then the signature will no longer be valid and the network will know instantly that something has happened.</p>
                <p>Blockchains are <span class="tooltip tooltip-cryptography">decentralised<span class="tooltiptext">They are not controlled by a single authority.</span></span> and spread out across <span class="tooltip tooltip-cryptography">peer-to-peer networks <span class="tooltiptext">In a peer-to-peer (P2P) network, the "peers" are computer systems which are connected to each other via the Internet. Files can be shared directly between systems on the network without needing a central server. In other words, each computer on a P2P network becomes a file server as well as a client.</span></span> that are continually updated and kept in sync. They don't have a <span class="tooltip tooltip-cryptography">single point of failure<span class="tooltiptext">A single point of failure (SPOF) is a critical system component that if failed, stops the whole system from working.</span></span> and cannot be changed from a single computer.</p>
                <p>So, it would require a HUGE amount of computing power to access and alter at least 51% of the data in a blockchain at exactly the same time, and subsequent blocks at exactly the same time. In theory, this means that the bigger your network is, the more secure your blockchain will be.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bottom grad-blue">
        <div class="holder">
          <h1 data-aos="fade-right">To <span class="letter-spacing">s</span><span class="letter-spacing">u</span><span class="letter-spacing">m</span><span class="letter-spacing">m</span>arise, blockchains:</h1>
          <ul class="list">
            <li data-aos="fade-right" data-aos-delay="100">Are transaction files that can't be modified</li>
            <li data-aos="fade-right" data-aos-delay="200">Are dependent on general consensus, making it a <span class="tooltip tooltip-cryptography"> decentralised<span class="tooltiptext">Not managed by any one central authority.</span></span> system</li>
            <li data-aos="fade-right" data-aos-delay="300">Are secured by <span class="tooltip tooltip-cryptography">cryptography<span class="tooltiptext">Various mathematical techniques for encrypting and decrypting data, to keep it private when transmitted or stored electronically. Cryptography is also a skill used to communicate in or decipher secret writings or ciphers.</span></span></li>
            <li data-aos="fade-right" data-aos-delay="400">Can be both private and public</li>
            <li data-aos="fade-right" data-aos-delay="500">Are extremely secure</li>
          </ul>
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
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

<!-- <script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script> -->
<script>
</script>
@endsection
