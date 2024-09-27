@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')
@include('vendor.digitalmarmalade.badges.fake-news.header', ['title' => 'Header'])

<aside class="step-counter">
  <ol class="step-counter__list">
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
      <span class="jsTooltip" data-tooltip-content="#tooltip1_content"> 1 </span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">
      <span class="jsTooltip" data-tooltip-content="#tooltip2_content"> 2 </span>
    </li>
    <li class="step-counter__list-item" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
      <span class="jsTooltip" data-tooltip-content="#tooltip3_content"> 3 </span>
    </li>
    <li class="step-counter__list-item" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
      <span class="jsTooltip" data-tooltip-content="#tooltip4_content"> 4 </span>
    </li>
    <li class="step-counter__list-item" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
      <span class="jsTooltip" data-tooltip-content="#tooltip5_content"> 5 </span>
    </li>
  </ol>
</aside>

<main class="main-content">
  <section class="container">
    <h1 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      The Problem<br />
      of Fake News
    </h1>

    <!-- <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Congratulations, you have shown that you understand what machine
      learning and deep learning are.
    </p> -->

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
     The problem of fake news has been around for many years but since the explosion of the internet and social media, it has been getting harder and harder for people to know what can and can’t be believed. Whether real or fake, news spreads incredibly fast.
    </p>

    <div class="every-60" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <div class="every-60__timer">
        <span class="every-60__every"> Every </span>

        <div class="countdown-animation">
          <img class="countdown-animation__svg" src="/badge-assets/fake-news/svg/countdown.svg" width="199" height="199" />

          <span class="countdown-animation__time"> 60 </span>
          <span class="countdown-animation__unit"> Secs </span>
        </div>
      </div>

      <div class="every-60__carousel">
        <div class="fact fact--twitter">
          <span class="fact__over">More than</span>
          <span class="fact__figure"> 98,000 </span>
          <span class="fact__fact"> Tweets are shared on Twitter </span>
        </div>

        <div class="fact fact--youtube">
          <span class="fact__over">More than</span>
          <span class="fact__figure"> 600 </span>
          <span class="fact__fact"> Videos are uploaded to YouTube </span>
        </div>

        <div class="fact fact--messenger">
          <span class="fact__over">More than</span>
          <span class="fact__figure"> 11 Million </span>
          <span class="fact__fact"> Instant messages are sent </span>
        </div>

        <div class="fact fact--email">
          <span class="fact__over">More than</span>
          <span class="fact__figure"> 160 Million </span>
          <span class="fact__fact"> Emails are sent </span>
        </div>

        <div class="fact fact--blog">
          <span class="fact__over">More than</span>
          <span class="fact__figure"> 1,500 </span>
          <span class="fact__fact"> Blog entries are created </span>
        </div>

        <div class="fact fact--facebook">
          <span class="fact__over">More than</span>
          <span class="fact__figure"> 600,000 </span>
          <span class="fact__fact"> Status updates and posts are created </span>
        </div>
      </div>
    </div>

    <article>
      <h2 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Types of Fake News</h2>

      <ul class="list list--two-col">
        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">False connection</h3>
          When headlines, captions or visuals don't support the content
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">False context</h3>
          When genuine content is shared with false contextual information
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Manipulated content</h3>
          When genuine information or imagery is manipulated to deceive
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Propaganda</h3>
          When content is used to manage attitudes, values and knowledge
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Misleading content</h3>
          Misleading use of information to frame and issue an individual
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Satire or parody</h3>
          No intention to cause harm but has potential to fool
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Fabricated content</h3>
          Content that is 100% false, designed to deceive or do harm
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Error</h3>
          When established news organisations make mistakes while reporting
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Sponsored content</h3>
          Advertising or PR disguised as editorial content
        </li>

        <li class="list__item list__item--purple list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
          <h3 class="list__item--heading">Imposter content</h3>
          When genuine sources are impersonated
        </li>
      </ul>
    </article>

    @include('vendor.digitalmarmalade.badges.fake-news.task_2')
  </div>

</section>

  <section class="jsNLP container hide">
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150" style="">
      One effective solution to the problem of fake news may be the use of machine learning and natural language processing algorithms to detect and flag news that might be fake. But what is natural language processing and how does it work? Let’s take a look!</p>
      
    <h2 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Natural Language Processing</h2>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Natural language processing (NLP) is a field of machine learning that focuses on helping computers understand the way humans write and speak. NLP does this by breaking down the complicated process of reading and understanding human language into small chunks and figuring out how each one works. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      The fake news detector that you’re working on will need to be able to process text. However, text that humans read cannot be used directly by computers so we need to preprocess the text first. Preprocessing text is the first and most important task in NLP.
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Preprocessing text involves removing all the unhelpful parts of the data and converting it into a “clean” piece of text that a computer can perform analysis on and extract meaning from. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      We are going to take a look at six examples of common NLP text preprocessing techniques and see how an article is taken through each stage. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Additional note: Preprocessing techniques are performed by writing code in programming languages such as Python or R. You will get a chance to try doing this later on in the badge!
    </p>

    <article>
      <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <header class="activity-box__header" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-orange">
            Reading<br />
            and Exploring<br />
            the Article
          </h2>

          <div class="activity-box__counter">Stage 1</div>
        </header>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          Below is an example of a structured piece of text where the title, author, content and source can be identified by the program.
        </p>

        <div class="fake-article" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <div class="fake-article__address-bar">
            <p class="fake-article__url">www.bbc.co.uk/news/blogs-trending-59255165</p>
          </div>

          <div class="fake-article__article">
            <h3 class="fake-article__article__heading" style="margin-bottom:0px;">The White Rose Network</h3>
            <p>By Marianna Spring</p>

            <p>
              It's part of a larger pattern. Anti-lockdown and anti-vaccine Telegram groups, which once focused exclusively on the pandemic, are now
              injecting the climate change debate with the same conspiratorial narratives they use to explain the pandemic.
            </p>

            <p>The posts go far beyond political criticism and debate - they're full of incorrect information, fake stories and pseudoscience.</p>

            <p>
              According to researchers at the Institute for Strategic Dialogue (ISD), a think tank that researches global disinformation trends, some
              anti-lockdown groups have become polluted by misleading posts about climate change being overplayed, or even a so-called "hoax" designed
              to control people.
            </p>

            <p>
              "Increasingly, terminology around Covid-19 measures is being used to stoke fear and mobilise against climate action," says the ISD's
              Jennie King.
            </p>

            <p>She says this isn't really about climate as a policy issue.</p>

            <p>
              "It's the fact that these are really neat vectors to get themes like power, personal freedom, agency, citizen against state, loss of
              traditional lifestyles - to get all of those ideas to a much broader audience."
            </p>

            <p>
              One group which has adopted such ideas is the White Rose - a network with locally-run subgroups around the world, from the UK to the US,
              Germany and New Zealand - where Matthew came across it.
            </p>
          </div>
        </div>
      </div>
    </article>

    <article class="jsRemovePunctuation">
      <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <header class="activity-box__header" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-orange">
            Remove<br />
            Punctuation
          </h2>

          <div class="activity-box__counter">Stage 2</div>
        </header>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          Removing punctuation helps clean up the raw data (in this case, a piece of text) and helps the computer to treat each word equally (e.g. data and data! are treated equally).
          <br /><br />
          In some situations, you may decide to keep some specific punctuation if it is important in that context. For simplicity purposes, we will remove all punctuation in the example below. 
          <br /><br />
          Click REMOVE PUNCTUATION to see what happens to the text.
        </p>

        <p class="example" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          For example: <strong>How are you?</strong> becomes
          <strong>How are you</strong>
        </p>

        <button class="btn btn--orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Remove Punctuation</button>

        <!-- please remove below after programming -->
        <br /><br class="jsBreak" />
        <!-- please remove above after programming -->

        <section class="jsCode hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <div class="input-output">
            <h3 class="input-output__heading input-output__heading--input">input:</h3>

            <div class="input-output__result code-playground code-playground--purple">
              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--green"> import </span>

                <span class="code-playground__code--white"> string </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> string.punctuation </span>
              </code>
            </div>
          </div>

          <div class="input-output">
            <h3 class="input-output__heading input-output__heading--output">output:</h3>

            <div class="input-output__result code-playground code-playground--white">
              <code class="code-playground__code"> !"#$%&'()*+, -./:;<=>?@[\]^_`{|}~ </code>
            </div>
          </div>

          <div class="input-output">
            <h3 class="input-output__heading input-output__heading--input">input:</h3>

            <div class="input-output__result code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--grey"> #Function to remove Punctuation </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--green"> def </span>

                <span class="code-playground__code--purple"> remove_punc </span>

                <span class="code-playground__code--white"> (text): </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--white"> text_nopunct = </span>

                <span class="code-playground__code--orange"></span>

                <span class="code-playground__code--white">"".join([char </span>

                <span class="code-playground__code--green"> for </span>

                <span class="code-playground__code--white"> char </span>

                <span class="code-playground__code--green"> in </span>

                <span class="code-playground__code--white"> text </span>

                <span class="code-playground__code--green"> if </span>

                <span class="code-playground__code--white"> char </span>

                <span class="code-playground__code--green"> not in </span>

                <span class="code-playground__code--white"> string.punctuation]) </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--grey"> #Discard all punctuation </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--green"> return </span>
                <span class="code-playground__code--white"> text_nopunc </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_clean' </span>

                <span class="code-playground__code--white"> ] = </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text' </span>

                <span class="code-playground__code--white"> ].apply( </span>

                <span class="code-playground__code--green"> lambda </span>

                <span class="code-playground__code--white"> x: remove_punct(x)) </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> data.head() </span>
              </code>
            </div>
          </div>
        </section>

        @include('vendor.digitalmarmalade.badges.fake-news.table')
      </div>
    </article>

    <article class="jsTokenization hide">
      <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <header class="activity-box__header" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-orange">Tokenisation</h2>

          <div class="activity-box__counter">Stage 3</div>
        </header>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Tokenisation separates a piece of text into small units which can be characters, words, sentences or paragraphs. 
        </p>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
Tokenisation is important because it takes unstructured data, like a piece of text, and breaks it down into chunks of information that a computer can process and draw meaning or context from.
</p>

<p class="example" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          For example: <strong>Silver or Lead</strong> becomes
          <strong>'Silver', 'or', 'Lead'</strong>
        </p>


        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
In this example, the piece of text is tokenised into individual words at every space. Commas are added to identify each word. 
</p>

<p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
Click TOKENISE to see this in action. 

        </p>

        <button class="btn btn--orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Tokenise</button>

        <!-- please remove below after programming -->
        <br class="jsBreak" /><br />
        <!-- please remove above after programming -->

        <section class="jsCode hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <div class="input-output">
            <h3 class="input-output__heading input-output__heading--input">input:</h3>

            <div class="input-output__result code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--green"> import </span>

                <span class="code-playground__code--white"> re </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--grey"> #Function to Tokenise words </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--green"> def </span>

                <span class="code-playground__code--purple"> tokenise </span>

                <span class="code-playground__code--white"> (text) </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--white"> tokens = re.split( </span>

                <span class="code-playground__code--orange"> '\W+ </span>

                <span class="code-playground__code--white"> ', text ) </span>

                <span class="code-playground__code--grey"> #Means that either character (A-Za-z0-9_) 0r a dash (-) can go there.</span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--green"> return </span>

                <span class="code-playground__code--white"> tokens </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_tokenised' </span>

                <span class="code-playground__code--white"> ] = </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_clean' </span>

                <span class="code-playground__code--white"> ].apply( </span>

                <span class="code-playground__code--green"> lambda </span>

                <span class="code-playground__code--white"> x: </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> tokenise(x.lower())) </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--grey"> #We convert to lower as Python is case sensitive </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data.head() </span>
              </code>
            </div>
          </div>
        </section>
        @include('vendor.digitalmarmalade.badges.fake-news.table')
      </div>
    </article>

    <article class="jsStopWords hide">
      <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <header class="activity-box__header" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-orange">
            Remove<br />
            Stop Words
          </h2>

          <div class="activity-box__counter">Stage 4</div>
        </header>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Stop words are commonly used words in a language which have little or no meaning on their own but they help form sentences. “The”, “is”, and “and” are examples of English stop words.
        </p>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Stop words will need to be removed from the text in order to give more focus to the important information. 

        </p>

        <p class="example" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          For example: <strong>silver or lead is fine for me</strong> becomes
          <strong>'silver', 'lead', 'fine'</strong>
        </p>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Click REMOVE STOP WORDS to see what happens to the text.
        </p>
        
        <button class="btn btn--orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Remove Stop Words</button>

        <!-- please remove below after programming -->
        <br class="jsBreak" /><br />
        <!-- please remove above after programming -->
        <section class="jsCode hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <div class="input-output">
            <h3 class="input-output__heading input-output__heading--input">input:</h3>

            <div class="input-output__result code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--green"> import </span>

                <span class="code-playground__code--white"> nltk </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> stopword = nltk.corpus.stopwords.words.( </span>

                <span class="code-playground__code--orange"> 'english' </span>

                <span class="code-playground__code--white"> ) </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--grey"> #All English Stopwords </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--grey"> #Function to remove Stopwords </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--green"> def </span>

                <span class="code-playground__code--purple"> remove_stopwords </span>

                <span class="code-playground__code--white"> (tokenised_list): </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--white"> text = word </span>

                <span class="code-playground__code--green"> for </span>

                <span class="code-playground__code--white"> word </span>

                <span class="code-playground__code--green"> in </span>

                <span class="code-playground__code--white"> tokenised_list </span>

                <span class="code-playground__code--green"> if </span>

                <span class="code-playground__code--white"> word </span>

                <span class="code-playground__code--green"> not in </span>

                <span class="code-playground__code--white"> stopword] </span>

                <span class="code-playground__code--grey"> #To remove all stopwords </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--green"> return </span>

                <span class="code-playground__code--white"> text </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_nostop' </span>

                <span class="code-playground__code--white"> ] = </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_tokenised' </span>

                <span class="code-playground__code--white"> ].apply( </span>

                <span class="code-playground__code--green"> lambda </span>

                <span class="code-playground__code--white"> x: </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> remove_stopwords(x)) </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data.head() </span>
              </code>
            </div>
          </div>
        </section>
        @include('vendor.digitalmarmalade.badges.fake-news.table')
      </div>
    </article>

    <article class="jsStemming hide">
      <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <header class="activity-box__header" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-orange">Stemming</h2>

          <div class="activity-box__counter">Stage 5</div>
        </header>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Stemming is the process of reducing a word to its root form. 
        </p>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
Languages often have several variants of a single term. For example, “connect”, “connected”, “connecting” and “connection” are variants of “connect”. 
</p>

<p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
The process of stemming simplifies the text and ensures all related words are treated in the same way by removing unnecessary repetition.

        </p>

        <p class="example" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <strong>For example:</strong> 'Finding' would become 'Find'.
        </p>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Click STEM to see what happens to the text.
        </p>
        <button class="btn btn--orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Stem</button>

        <!-- please remove below after programming -->
        <br class="jsBreak" /><br />
        <!-- please remove above after programming -->

        <section class="jsCode hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <div class="input-output">
            <h3 class="input-output__heading input-output__heading--input">input:</h3>

            <div class="input-output__result code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--white"> ps = nltk.PorterStemmer() </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--green"> def </span>

                <span class="code-playground__code--purple"> stemming </span>

                <span class="code-playground__code--white"> (tokenised_text): </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--white"> text = [ps.stem(word) </span>

                <span class="code-playground__code--green"> for </span>

                <span class="code-playground__code--white"> word </span>

                <span class="code-playground__code--green"> in </span>

                <span class="code-playground__code--white"> tokenised_text </span>
              </code>

              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--green"> return </span>

                <span class="code-playground__code--white"> text </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_stemmed' </span>

                <span class="code-playground__code--white"> ] = </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> data[ </span>

                <span class="code-playground__code--orange"> 'body_text_notstop' </span>

                <span class="code-playground__code--white"> ].apply( </span>

                <span class="code-playground__code--green"> lambda </span>

                <span class="code-playground__code--white"> x: </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> stemming(x)) </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> data.head() </span>
              </code>
            </div>
          </div>
        </section>

        @include('vendor.digitalmarmalade.badges.fake-news.table')
      </div>
    </article>

    <article class="jsVectorizing hide">
      <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <header class="activity-box__header" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-orange">
            Vectorising<br />
            Data
          </h2>

          <div class="activity-box__counter">Final Stage</div>
        </header>

        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Once preprocessing of the text is completed, the text needs to be vectorised. Vectorising is the process of converting text into a set of real numbers so that a computer can “read” it. 

Word vectorisation is a method of NLP where words or phrases are mapped to a corresponding <span
            class="tooltipster jsTooltip"
            data-tooltip-content="#tooltip14_content"
          >vector</span>

          which are used to find word similarities and make word predictions. 
        </p>
        
        <!-- 
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          This happens over three phases:
        </p>

        <section>
          <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Count Vectoriser</h3>

          <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            Count Vectoriser or Bag of Words (BoW) as its commonly referred to describes the presence of words within the text data. It gives a result
            of 1 if present in the sentence and 0 if not present. It, therefore, creates a bag of words with a document-matrix count in each text
            document.
          </p>

          <img
            src="/badge-assets/fake-news/svg/illustration--count-vectorizer.svg"
            width="517"
            height="212"
            alt="Illustration count vectoriser"
            loading="lazy"
            decoding="async"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="150"
          />
        </section>

        <section>
          <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">N-Grams</h3>

          <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            N-grams are simply all combinations of adjacent words or letters of length (n) that we can find in our source text. Ngrams with n=1 are
            called unigrams. Similarly, bigrams (n=2), trigrams (n=3) and so on can also be used.
          </p>

          <img
            src="/badge-assets/fake-news/svg/illustration--n-grams.svg"
            width="519"
            height="145"
            alt="Illustration N-Grams"
            loading="lazy"
            decoding="async"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="150"
          />
        </section>

        <section>
          <h3 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">TF-IDF</h3>

          <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            It computes “relative frequency” that a word appears in a document compared to its frequency across all documents. It is more useful than
            “term frequency” for identifying “important” words in each document (high frequency in that document, low frequency in other documents).
          </p>

          <img
            src="/badge-assets/fake-news/svg/illustration--tf-idf.svg"
            width="517"
            height="328"
            alt="Illustration TF-IDF"
            loading="lazy"
            decoding="async"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="150"
          />
        </section> 
-->
<section>
<p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
  You have just learned about some of the key techniques and stages of NLP and got to see it in action. Well done! You will come back to this shortly.

NLP might seem like a brand new or unfamiliar topic but actually, you may already be experiencing it every day!
</p>
</section>
      </div>
    </article>
  </section>

  <section class="jsNLPRealLife container hide">
    <h2 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">NLP in Real Life</h2>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      You may have already experienced using natural language processing in machine learning without realising it. For example:
    </p>

    <ul class="list list--one-col">
      <li class="list__item list__item--grey list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
        <h3 class="list__item__heading--inherit">Have you ever searched for anything using Google?</h3>
        Google finds relevant and similar search results. This is known as information retrieval.
      </li>

      <li class="list__item list__item--grey list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
        <h3 class="list__item__heading--inherit">Have you ever used Microsoft Outlook to manage your email and calendar?</h3>
        Outlook automatically retrieves event or appointment details from your email and proposes it to be scheduled in your calendar. This is known as information extraction.
      </li>

      <li class="list__item list__item--grey list__item--headed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="450">
        <h3 class="list__item__heading--inherit">Have you ever used iTranslate for language translation?</h3>
        iTranslate converts words and sentences from one language to another. This is known as machine translation.
      </li>
    </ul>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Great! Now that you have learned about natural language processing and how it can be used to help computers read and process pieces of text, we are going to move on to discovering two learning models that are used by computers in AI and machine learning to make predictions (and in our case, predict whether a piece of text is likely real or fake news!). 
    </p>
  </section>

  <section class="jsContinue hide">
    <a class="btn btn--orange force-centre" onclick="oBadges.stepCompleted();" href="{{ $links['next'] }}">
      Continue
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="icon" clip-path="url(#clip0_1585_16111)">
          <path
            id="arrow / circle_right"
            d="M12.4011 24.7544C5.77604 24.7471 0.407178 19.3788 0.399902 12.7544V12.5144C0.531833 5.91985 5.96196 0.667964 12.5579 0.755472C19.1539 0.842981 24.4427 6.23707 24.3996 12.8328C24.3565 19.4285 18.9976 24.7531 12.4011 24.7544ZM12.4011 3.15441C7.09864 3.15441 2.80014 7.45248 2.80014 12.7544C2.80014 18.0563 7.09864 22.3544 12.4011 22.3544C17.7036 22.3544 22.0021 18.0563 22.0021 12.7544C21.9961 7.45494 17.7011 3.16037 12.4011 3.15441ZM12.4011 18.7544L10.7089 17.0624L13.8052 13.9544H6.4005V11.5544H13.8052L10.7089 8.44641L12.4011 6.75441L18.4017 12.7544L12.4011 18.7544Z"
          />
        </g>
        <defs>
          <clipPath id="clip0_1585_16111">
            <rect width="24" height="24" fill="white" transform="translate(0.399902 0.754395)" />
          </clipPath>
        </defs>
      </svg>
    </a>
  </section>
</main>

@include('vendor.digitalmarmalade.badges.fake-news.tooltips') @endsection @section('javascript')
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_2.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_3.js"></script>

<script>
  $(document).ready(function () {
    var triggerMode = "hover";

    if ($("body").hasClass("touch")) {
      triggerMode = "click";
    }

    $(".jsTooltip").tooltipster({
      trigger: triggerMode,
      maxWidth: 350,
    });
  });
</script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>
@endsection
