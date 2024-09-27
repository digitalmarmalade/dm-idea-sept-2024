@extends($url['viewDir'] . $url['slug'] . '.master')
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/wordsearch.css">
@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-1">
      <section class="top grad-pink">
        <div class="holder">
          <h1 data-aos="fade-right">Task</h1>
          <p data-aos="fade-right" data-aos-delay="100">Complete the sentences with the correct answers:</p>
          <ol>

            <li data-aos="fade-right" data-aos-delay="200">
              <p>
                <select id="task-1-1">
                  <option value="0">Select one</option>
                  <option value="1">Nakamoto</option>
                  <option value="2">Yamamoto</option>
                  <option value="3">Hoshiro</option>
                </select>
                is the name of the blockchain creator.
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="300">
              <p>
                The world's first digital currency
                <select id="task-1-2">
                  <option value="0">Select one</option>
                  <option value="1">Bitcoin</option>
                  <option value="2">Dollar</option>
                  <option value="3">Euro</option>
                </select>
                .
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="400">
              <p>
                <select id="task-1-3">
                  <option value="0">Select one</option>
                  <option value="1">International</option>
                  <option value="2">Intraweb</option>
                  <option value="3">Crypto</option>
                </select>
                is the generic name for digital currency.
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="500">
              <p>
                Information is stored in
                <select id="task-1-4">
                  <option value="0">Select one</option>
                  <option value="1">memory sticks</option>
                  <option value="2">blocks</option>
                  <option value="3">mobile phones</option>
                </select>
                .
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="600">
              <p>
                Blocks are linked together
                <select id="task-1-5">
                  <option value="0">Select one</option>
                  <option value="1">via Internet cables</option>
                  <option value="2">via virtual reality</option>
                  <option value="3">in a chain</option>
                </select>
                .
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="700">
              <p>
                Blockchains are
                <select id="task-1-6">
                  <option value="0">Select one</option>
                  <option value="1">consensus</option>
                  <option value="2">mistakingly</option>
                  <option value="3">disagreeable</option>
                </select>
                -driven.
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="800">
              <p>
                Blockchain is a great process because it's
                <select id="task-1-7">
                  <option value="0">Select one</option>
                  <option value="1">secure</option>
                  <option value="2">new</option>
                  <option value="3">private</option>
                </select>
                .
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="900" data-aos-anchor="#task-1-7">
              <p>
                Data is secured through
                <select id="task-1-8">
                  <option value="0">Select one</option>
                  <option value="1">cryptography</option>
                  <option value="2">an anti-virus</option>
                  <option value="3">a passcode</option>
                </select>
                .
              </p>
            </li>

            <li data-aos="fade-right" data-aos-delay="1000"  data-aos-anchor="#task-1-7">
              <p>
                <select id="task-1-9">
                  <option value="0">Select one</option>
                  <option value="1">Validation</option>
                  <option value="2">Mining</option>
                  <option value="3">Transferring</option>
                </select>
                is the name given to the process of computers validating a transaction.
              </p>
            </li>

          </ol>

          <a href="#" class="btn btn-check" class="btn btn-try-again" data-aos="zoom-in" data-aos-delay="1100"  data-aos-anchor="#task-1-7">Check your answers</a>
        </div>
      </section>
      <section class="bottom grad-blue feedback feedback-fail hide">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/try-again.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Not quite right...</h1>
                <a href="#" class="btn btn-try-again" data-aos="zoom-in" data-aos-delay="200">Try again</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bottom grad-blue feedback feedback-success hide">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                <a  onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" data-aos="zoom-in" data-aos-delay="200">Continue</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/task-1.js"></script>

@endsection
