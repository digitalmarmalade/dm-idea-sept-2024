@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="step-6">
      <section class="top grad-blue">
        <div class="holder">
          <div>
            <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">Step 6</span>The <span class="more-kerning more-kerning-p">p</span>otential of blockchain technology</h1>
            <p  data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="200">As we explained at the beginning of this badge – new ideas and technology evolve and often take a life of their own.</p>
            <p  data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="300">What started as a bit of financial tech is evolving, changing and innovating. Anything that needs to distribute digital information that cannot be altered or copied in anyway can make use of blockchain technology – here are some ways in which blockchain technology is being used.</p>
          </div>
      </section>

      <section class="middle grad-yellow">
        <div class="holder">
          <div class="cols">
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-pharmaceutical.png" />
            </div>
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Pharmaceutical</h2>
              <p data-aos="fade-right" data-aos-delay="300">New rules helping to ensure that medical drugs can be followed from manufacture to consumption could save up to a million lives each year. Currently each piece of medication or equipment carries a unique serial number, which is scanned and verified at the factory. </p>

              <p data-aos="fade-right" data-aos-delay="400">Blockchain technology could take this to the next level – and cut costs, whilst improving security and trust around the drugs. Add to that the elimination of human error and real-time supply chain transparency and you can see why this could be a game changer.</p>

            </div>
          </div>
        </div>
      </section>

      <section class="middle grad-blue">
        <div class="holder">
          <div class="cols">
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Humanitarian crises</h2>
              <p data-aos="fade-right" data-aos-delay="300">The United Nations (UN) is exploring how blockchain technology can be used internally and externally to address ongoing humanitarian issues, such as child trafficking. The UN is currently using blockchain technology across 16 agencies.</p>
              <p data-aos="fade-right" data-aos-delay="400">The World Food Programme uses a computing platform based on blockchain technology to help refugees purchase food with only an eye scan and the Office for the Coordination of Humanitarian Affairs uses blockchain technology to improve donor financing by securely monitoring supply chains and better protecting data.</p>
            </div>
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-humanitarian.png" />
            </div>
          </div>
        </div>
      </section>

      <section class="middle grad-yellow">
        <div class="holder">
          <div class="cols">
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-house.png" />
            </div>
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Buying a house</h2>
              <p data-aos="fade-right" data-aos-delay="300">Buying a home has lots of necessary paperwork attached to the process – all of which can be changed and manipulated at any point. Blockchain technology could radically change this, by storing unaltered documents and transaction records at less cost and/or effort.</p>

            </div>
          </div>
        </div>
      </section>

      <section class="middle grad-blue">
        <div class="holder">
          <div class="cols">
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Medical records</h2>
              <p data-aos="fade-right" data-aos-delay="300">The NHS has a huge problem in terms of the pure quantity of healthcare data it holds. This data needs to be continually shared across departments in a way that reduces the potential for error, fraud, and lost records – blockchain technology could help here. </p>
            </div>
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-medical.png" />
            </div>
          </div>
        </div>
      </section>

      <section class="middle grad-yellow">
        <div class="holder">
          <div class="cols">
            <div class="img">
              <img data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-legal.png" />
            </div>
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Legal</h2>
              <p data-aos="fade-right" data-aos-delay="300">Much like buying a house, blockchain technology could help the legal industry by helping to store and verify documents and data. </p>

            </div>
          </div>
        </div>
      </section>

      <section class="middle grad-blue">
        <div class="holder">
          <div class="cols">
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Politics</h2>
              <p data-aos="fade-right" data-aos-delay="300">Blockchain technology could be used to prevent electoral and voter fraud.</p>
            </div>
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-politics.png" />
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="middle grad-yellow">
        <div class="holder">
          <div class="cols">
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-education.png" />
            </div>
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Education</h2>
              <p data-aos="fade-right" data-aos-delay="300">Possibly one of the most exciting potential for growth is within the education sector – which has scope to capitalise on a new Internet – an Internet that combines blockchain, cryptocurrency, and virtual reality to create “3DInternet”.</p>

              <p data-aos="fade-right" data-aos-delay="400">As Virtual Reality (VR) and Augmented Reality (AR) become more mainstream, imagine history lessons that take you directly to the Great Fire of London or attending university without needing to leave home.</p>

            </div>
          </div>
        </div>
      </section> -->

      <section class="middle grad-yellow">
        <div class="holder">
          <div class="cols">
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Supply chains</h2>
              <p data-aos="fade-right" data-aos-delay="300">If you apply the above logic to anything that is supplied – from food through to t-shirts, blockchain technology could be the process that means you, as a consumer can have full trust in what you are being sold.</p>
              <p data-aos="fade-right" data-aos-delay="400">It would enable everything to be traced, each ingredient, to the factories where it's made – you'd be able to see in detail, the journey that products take to reach you.</p>
            </div>
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-supply.png" />
            </div>
          </div>
        </div>
      </section>

      <section class="middle grad-blue">
        <div class="holder">
          <div class="cols">
            <div class="img">
              <img data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-food.png" />
            </div>
            <div>
              <h2 data-aos="fade-right" data-aos-delay="200">Food safety</h2>
              <p data-aos="fade-right" data-aos-delay="300">Expanding slightly on the supply chain, blockchain technology is already used to better regulate food safety in the global food supply chain industry. This means all growers, suppliers, processors, distributors, retailers, regulators, and consumers can gain permissioned access to information about the origin and state of food in their transactions. All members of the ecosystem can use the blockchain network to trace contaminated foods to their source in a short amount of time, to ensure they are quickly removed from store shelves.</p>

            </div>
          </div>
        </div>
      </section>

      <section class="bottom grad-yellow">
        <div class="holder">
          <div>
            <h2 data-aos="fade-right" data-aos-delay="200">Rights Management</h2>
            <p data-aos="fade-right" data-aos-delay="300">Whether its books, films or music – tracking who is accessing your content and therefore who should pay is a tricky business. Blockchain technology has the potential to ensure the content creators are fairly rewarded by allowing anyone to publish, use or access the content whilst automatically ensuring the right people are getting the right payments – this means everyone will get their fair share – from creators, providers and even people like translators if relevant.</p>
            <p data-aos="fade-right" data-aos-delay="400">All automated, trackable and accurate.</p>
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
    oBadges.setSlugAndStep('{{$url['slug']}}', 12);
</script>

@endsection
