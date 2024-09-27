@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-6">
      <section class="top grad-pink">
        <div class="holder">
          <div>
            <h1 data-aos="fade-right"><span class="more-kerning">Q</span>uiz</h1>
            <p data-aos="fade-right" data-aos-delay="100">Now it is time to check everything you’ve learned so far!</p>
            <p data-aos="fade-right" data-aos-delay="200">For each of the questions below, select the most appropriate answers:</p>
          </div>

          <div class="quiz quiz--order quiz--final jsQuiz">

            <div class="question-box quiz-question jsQuestion1 quiz-question-1" id="question1">


              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                <p>1/5</p>
              </div>

              <div>


                <p class="js-whoops hide quiz-error">Whoops, two wrong - start again!</p>

                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>

                <p class="quiz-the-question question" data-aos="fade-right" data-aos-delay="200">The best definition for a public blockchain is: </p>

                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a href="#question2">A string of transactional data that can be easily modified at any point.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a href="#question2">A string of transactional data that is private and cannot be verified by the public.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a href="#question2" data-answer="true">A string of transactional data that is secured via cryptography, it is immutable and can be accessed by anyone at any time.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a href="#question2">A string of transactional data that is controlled by a single entity, making it more trustworthy.</a></li>
                </ul>
              </div>

            </div>

            <div class="question-box quiz-question jsQuestion2 quiz-question-2 hide" id="question2">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                <p>2/5</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>

                <p class="quiz-the-question question" data-aos="fade-right" data-aos-delay="200">In blockchain terms, the definition of a node is:</p>

                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right"  data-aos-delay="300"><a data-answer="true" href="#question3">A computer that is linked to the network where the new blockchain transaction is being validated.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a href="#question3">A new transaction added to the current string of data in the chain.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a href="#question3">A malicious attack to a computer network involving a blockchain.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a href="#question3">It is the term given to the agreement between all the computers part of the network where a blockchain transaction is being validated.</a></li>
                </ul>
              </div>

            </div>


            <div class="question-box quiz-question jsQuestion3 quiz-question-3 hide" id="question3">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                <p>3/5</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>

                <p class="quiz-the-question question" data-aos="fade-right" data-aos-delay="200">Blockchains are considered consensus-driven because:</p>

                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a href="#question4">The transactions recorded in the chain can be publicly published and publicly verified.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a href="#question4" data-answer="true">All the computers connected to the network associated with the blockchain need to validate the transaction via algorithms.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a href="#question4">It depends on a single entity controlling the transaction.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a href="#question4">Any subsequent data added to the chain allows the previous block of information in the chain to be altered.</a></li>
                </ul>
              </div>

            </div>

            <div class="question-box quiz-question jsQuestion4 quiz-question-4 hide" id="question4">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                <p>4/5</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>

                <p class="quiz-the-question question" data-aos="fade-right" data-aos-delay="200">Select the only statement that <b>is not true</b> about cryptocurrencies:</p>

                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a href="#question5">Cryptocurrencies are digital currencies that use cryptography to secure and verify transactions.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a href="#question5" data-answer="true">Cryptocurrencies values, as traditional currencies values, are stipulated by the government to ensure trust.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a href="#question5">Via blockchain technology users can record ownership and verify transactions what enables cryptocurrencies to store value.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a href="#question5">There is a growing number of businesses accepting cryptocurrencies as means of payment.</a></li>
                </ul>
              </div>

            </div>

            <div class="question-box quiz-question jsQuestion5 quiz-question-5 hide" id="question5">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                <p>5/5</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>

                <p class="quiz-the-question question" data-aos="fade-right" data-aos-delay="200">You’ve learnt that blockchain technology is set to revolutionise a growing number of industries such as pharmaceutical, food safety and politics.</p>
                <p class="quiz-the-question question" data-aos="fade-right" data-aos-delay="300">Below are characteristics of blockchain technology that make it very appealing to other sectors. Which statement is not correct?</p>

                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a href="#next-step">Blocks in a blockchain can't be modified without certain criteria being met, this makes blockchain technology very secure.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a href="#next-step" data-answer="true">Blockchain technology makes it very difficult for different stakeholders and other parties involved to access the information related to a transaction.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a href="#next-step">Blockchain technology enables all your documents and transaction records to be stored securely with measurably less work and less cost.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a href="#next-step">Blockchain technology can allow consumers to get a full understanding of the journey of a product.</a></li>
                </ul>
              </div>

            </div>


          </div><!--/quiz-->


        </div>
      </section>

      <section class="bottom grad-blue feedback feedback-success hide jsNextStep">
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
    oBadges.setSlugAndStep('{{$url['slug']}}', 13);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/quiz.js"></script>



@endsection
