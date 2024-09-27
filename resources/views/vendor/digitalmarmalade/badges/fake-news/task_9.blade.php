<article class="task-9 hide">
  <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Now is the time to code the natural language processing part of your fake news detector. 
Let's use one of the fake news articles as an example. Are you able to identify each coding block necessary to add NLP to your fake news detector? 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <strong>
        The carousel below shows blocks of code that you need for your program. Select the correct block of code for each of the tasks. At each step, you can check the changes that were applied in the news article in your fake news detector. Let's go!
      </strong>
    </p>

    <div id="code-selector-task" class="fake-news-detector" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <span class="fake-news-detector__counter"> 1/6 </span>

      <p class="fake-news-detector__task">Apply basic reading, exploring and cleaning</p>

      <div class="code-selector__container">
        <button class="code-selector__previous">
          <img src="/badge-assets/fake-news/svg/previous.svg" width="25" height="25" alt="Previous slide" />
        </button>

        <button class="code-selector__next">
          <img src="/badge-assets/fake-news/svg/next.svg" width="25" height="25" alt="Next slide" />
        </button>

        <div class="code-selector">
          <div class="jsSlide1 code-playground code-playground--purple">
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

          <div class="jsSlide2 code-playground code-playground--purple">
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

          <div class="jsSlide3 code-playground code-playground--purple">
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

          <div class="jsSlide4 code-playground code-playground--purple">
            <code class="code-playground__code">
              <span class="code-playground__code--grey"> #Read and explore, delete all other data </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> def </span>

              <span class="code-playground__code--white"> df[' </span>

              <span class="code-playground__code--orange"> title </span>

              <span class="code-playground__code--white"> '] </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> def </span>

              <span class="code-playground__code--white"> df[' </span>

              <span class="code-playground__code--orange"> body text </span>

              <span class="code-playground__code--white"> '] </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> def </span>

              <span class="code-playground__code--white"> df[' </span>

              <span class="code-playground__code--orange"> author </span>

              <span class="code-playground__code--white"> '] </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> Del </span>

              <span class="code-playground__code--purple"> strip_html </span>

              <span class="code-playground__code--white"> (text) </span>
            </code>

            <code class="code-playground__code code-playground__code--indent">
              <span class="code-playground__code--white">
                news article = FLU VACCINE FOUND TO HAVE AUDIO & GPS NANOPARTICLES("text html parser")
              </span>
            </code>

            <code class="code-playground__code code-playground__code--indent">
              <span class="code-playground__code--green"> return </span>

              <span class="code-playground__code--white"> FLU VACCINE FOUND TO HAVE AUDIO & GPS NANOPARTICLES.get_text() </span>
            </code>
          </div>

          <span class="jsSlide5 code-selector__multiblock">
            <div class="code-playground code-playground--purple">
              <code class="code-playground__code code-playground__code--indent">
                <span class="code-playground__code--green"> import </span>

                <span class="code-playground__code--white"> string </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> string.punctuation </span>
              </code>
            </div>

            <div class="code-playground code-playground--white">
              <code class="code-playground__code"> !"#$%&'()*+, -./:;<=>?@[\]^_`{|}~ </code>
            </div>

            <div class="code-playground code-playground--purple">
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
                <span class="code-playground__code--green">return</span>
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
          </span>

          <div class="jsSlide6 code-playground code-playground--purple">
            <code class="code-playground__code">
              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--purple"> strip_html import </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--white"> Count Vectoriser </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--white"> corpus = [ </span>

              <span class="code-playground__code--orange"> corpus = [... </span>

              <span class="code-playground__code--purple"> 'This is the first document.', </span>

              <span class="code-playground__code--orange"> ... </span>

              <span class="code-playground__code--purple"> 'This is the second document.', </span>

              <span class="code-playground__code--orange"> ... </span>

              <span class="code-playground__code--purple"> 'And this is the third one.', </span>

              <span class="code-playground__code--orange"> ... </span>

              <span class="code-playground__code--purple"> 'Is this the first document?' </span>

              <span class="code-playground__code--orange"> ...] </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--white"> vectoriser = CountVectoriser() </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--white">
                x = vectoriser.fit_transform(corpus) vectoriser.get_ feature_names_out()array([flu, 'vaccine', 'nanoparticles', 'nanites', 'audio',
                'gps', 'listening', 'tracking', 'spying'])
              </span>
            </code>
          </div>
        </div>
      </div>

      <p class="fail-box hide">Hmm... That does not seem like the correct code for this task. Please select another block.</p>

      <p class="success-box hide">Great! Check the changes that this block of code applied to the text below.</p>

      <div class="jsHeading fake-news-detector__g-container hide">
        <div class="fake-news-detector__sign">Fake News Detector</div>
      </div>

      <div class="jsFinalResult fake-news-detector__g-container hide">
        <div class="fake-news-detector__result">
          <p>The block for count vectoriser code encountered the following:</p>

          <ul class="fake-news-detector__labels">
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--vaccine">
              Vaccine
              <span class="fake-news-detector__labels__counter"> 13 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--flu">
              Flu
              <span class="fake-news-detector__labels__counter"> 8 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--nano">
              Nano
              <span class="fake-news-detector__labels__counter"> 5 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--government">
              Government
              <span class="fake-news-detector__labels__counter"> 4 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--satellite">
              Satellite
              <span class="fake-news-detector__labels__counter"> 3 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--listen">
              Listen
              <span class="fake-news-detector__labels__counter"> 3 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--track">
              Track
              <span class="fake-news-detector__labels__counter"> 3 </span>
            </li>
            <li class="fake-news-detector__labels__label fake-news-detector__labels__label--spy">
              Spy
              <span class="fake-news-detector__labels__counter"> 2 </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="jsResult1 fake-news-detector__g-container hide">
        <div class="fake-news-detector__result fake-news-detector__result--mono">
          <h3 class="fake-news-detector__result__heading">Title</h3>
          <p>FLU VACCINE FOUND TO HAVE AUDIO & GPS NANOPARTICLES</p>

          <h3 class="fake-news-detector__result__heading">Subtitle</h3>
          <p>WOULD YOU GET VACCINATED IF YOU KNOW YOUR VACCINE IS SPYING ON YOU?</p>

          <h3 class="fake-news-detector__result__heading">Body Text</h3>
          <p>
            A research team led by Dr. Grace Morgan at the Vaccine Research Center of BIOGENS National Institute of Infectious Disease HAVE FOUND THAT
            THE GOVERNEMNT ARE NOT JUST GIVING US A VACCINE. THEY HAVE INSERTED NANITES INTO OUR VACCINE THAT ALLOW SATELLITES TO TRACK OUR MOVEMENTS
            AND LISTEN TO OUR CONVERSATIONS.
          </p>

          <p>
            The study was also supported in part by THE MINISTRY OF HEALTH (MIH) Results appeared online at the governments www.health.mih.org
            thereafter have since been removed by the health minister.
          </p>

          <p>
            FACT: The flu virus changes, or mutates, quickly. Researchers try to predict which flu strains will be the most prevalent each year. These
            predictions are then used to develop that season's flu vaccine. If the predictions arent correct, the resulting vaccine will be less
            effective. As a result, seasonal flu vaccines vary in their effectiveness, from as high as 60% to as low as 10%. A single vaccine that
            conferred protection against a wide variety of strains would provide a major boost to global health.
          </p>

          <p>
            FACT: Biogen have found nano technology particles as seen in the above image, that once injected within the vaccine, attack the flu virus
            but also provide government satellites the ability to track our movements and listen to the things we have to say.
          </p>

          <p>
            FACT: Flu vaccines use a viral protein called hemagglutinin (HA). To create their vaccine, the researchers fused HA proteins to protein
            based location receptors and auditory proteins found in the brain, to assemble into nanometer-sized particles (nanoparticles). The
            resulting nanoparticles force the immune system to react to flu but also listen to our conversations and track our movements, sending data
            via our phones biometrics interface to satellites above earth.
          </p>

          <p>
            The question is should you get vaccinated if it allows the ministry of health and other government bodies to spy on where you go and the
            things you say.
          </p>

          <h3 class="fake-news-detector__result__heading">Author</h3>
          <p>Anonymous</p>
        </div>
      </div>

      <div class="jsResult2 fake-news-detector__g-container hide">
        <div class="fake-news-detector__result fake-news-detector__result--mono">
          <h3 class="fake-news-detector__result__heading">Title</h3>
          <p>FLU VACCINE FOUND TO HAVE AUDIO & GPS NANOPARTICLES</p>

          <h3 class="fake-news-detector__result__heading">Subtitle</h3>
          <p>WOULD YOU GET VACCINATED IF YOU KNOW YOUR VACCINE IS SPYING ON YOU</p>

          <h3 class="fake-news-detector__result__heading">Body Text</h3>
          <p>
            A research team led by Dr. Grace Morgan at the Vaccine Research Center of BIOGENS National Institute of Infectious Disease HAVE FOUND THAT
            THE GOVERNEMNT ARE NOT JUST GIVING US A VACCINE THEY HAVE INSERTED NANITES INTO OUR VACCINE THAT ALLOW SATELLITES TO TRACK OUR MOVEMENTS
            AND LISTEN TO OUR CONVERSATIONS
          </p>

          <p>
            The study was also supported in part by THE MINISTRY OF HEALTH (MIH) Results appeared online at the governments www.health.mih.org
            thereafter have since been removed by the health minister
          </p>

          <p>
            FACT The flu virus changes or mutates quickly Researchers try to predict which flu strains will be the most prevalent each year These
            predictions are then used to develop that seasons flu vaccine If the predictions arent correct the resulting vaccine will be less
            effective As a result seasonal flu vaccines vary in their effectiveness from as high as 60% to as low as 10% A single vaccine that
            conferred protection against a wide variety of strains would provide a major boost to global health
          </p>

          <p>
            FACT Biogen have found nano technology particles as seen in the above image that once injected within the vaccine attack the flu virus but
            also provide government satellites the ability to track our movements and listen to the things we have to say
          </p>

          <p>
            FACT Flu vaccines use a viral protein called hemagglutinin (HA) To create their vaccine the researchers fused HA proteins to protein based
            location receptors and auditory proteins found in the brain to assemble into nanometersized particles (nanoparticles) The resulting
            nanoparticles force the immune system to react to flu but also listen to our conversations and track our movements sending data via our
            phones biometrics interface to satellites above earth
          </p>

          <p>
            The question is should you get vaccinated if it allows the ministry of health and other government bodies to spy on where you go and the
            things you say
          </p>

          <h3 class="fake-news-detector__result__heading">Author</h3>
          <p>Anonymous</p>
        </div>
      </div>

      <div class="jsResult3 fake-news-detector__g-container hide">
        <div class="fake-news-detector__result fake-news-detector__result--mono">
          <h3 class="fake-news-detector__result__heading">Title</h3>
          <p>FLU VACCINE, FOUND TO HAVE, AUDIO & GPS, NANOPARTICLES</p>

          <h3 class="fake-news-detector__result__heading">Subtitle</h3>
          <p>WOULD YOU GET, VACCINATED, IF YOU KNOW, YOUR VACCINE, IS SPYING,ON YOU</p>

          <h3 class="fake-news-detector__result__heading">Body Text</h3>
          <p>
            A research team, led by Dr. Grace Morgan, at the Vaccine Research Center, of BIOGENS National Institute of Infectious Disease, HAVE
            FOUND,THAT THE GOVERNEMNT, ARE NOT JUST, GIVING US A,VACCINE, THEY HAVE INSERTED, NANITES, INTO OUR VACCINE, THAT ALLOW SATELLITES, TO
            TRACK OUR MOVEMENTS, AND LISTEN TO OUR CONVERSATIONS
          </p>

          <p>
            The study, was also supported, in part by, THE MINISTRY OF HEALTH (MIH),Results appeared online, at the governments,
            www.health.mih.org,thereafter have since been removed, by the health minister
          </p>

          <p>
            FACT, The flu virus, changes or mutates quickly, Researchers try to predict, which flu strains, will be the most prevalent, each year,
            These predictions, are then used to develop, that seasons flu vaccine, If the predictions, arent correct, the resulting vaccine, will be
            less effective, As a result, seasonal flu vaccines, vary in their effectiveness, from as high as 60%,to as low as 10%,A single vaccine,
            that conferred protection, against a wide variety of strains, would provide a major boost, to global health
          </p>

          <p>
            FACT, Biogen have found, nano technology particles, as seen in the above image, that once injected, within the vaccine, attack the flu
            virus, but also provide, government satellites, the ability, to track our movements, and listen to the things, we have to say
          </p>

          <p>
            FACT, Flu vaccines, use a viral protein, called hemagglutinin (HA), To create their vaccine, the researchers fused HA proteins, to protein
            based location receptors, and auditory proteins, found in the brain, to assemble into nanometersized particles (nanoparticles),The
            resulting nanoparticles, force the immune system, to react to flu, but also listen, to our conversations, and track our movements, sending
            data via, our phones biometrics interface, to satellites above earth
          </p>

          <p>
            The question is, should you get vaccinated, if it allows the ministry of health, and other government bodies, to spy on, where you go, and
            the things you say
          </p>

          <h3 class="fake-news-detector__result__heading">Author</h3>
          <p>Anonymous</p>
        </div>
      </div>

      <div class="jsResult4 fake-news-detector__g-container hide">
        <div class="fake-news-detector__result fake-news-detector__result--mono">
          <h3 class="fake-news-detector__result__heading">Title</h3>
          <p>FLU VACCINE, HAVE, AUDIO GPS, NANOPARTICLES</p>

          <h3 class="fake-news-detector__result__heading">Subtitle</h3>
          <p>WOULD YOU, VACCINATED, IF KNOW, VACCINE, SPYING, ON YOU</p>

          <h3 class="fake-news-detector__result__heading">Body Text</h3>
          <p>
            research team, led Dr. Grace Morgan, Vaccine Research Center, BIOGENS National Institute of Infectious Disease, FOUND,GOVERNEMNT, ARE,
            GIVING, VACCINE, INSERTED, NANITES, INTO VACCINE, ALLOW SATELLITES, TRACK MOVEMENTS, LISTEN CONVERSATIONS
          </p>

          <p>
            Study, supported, in part, THE MINISTRY OF HEALTH (MIH), Results online, at governments, www.health.mih.org, thereafter have been removed,
            by health minister
          </p>

          <p>
            FACT, flu virus, changes mutates quickly, Researchers try predict, which flu strains, be most prevalent, each year, predictions, used to
            develop, seasons flu vaccine, If predictions, arent correct, resulting vaccine, less effective, result, seasonal flu vaccines, vary
            effectiveness high as 60%,low as 10%,single vaccine, conferred protection, against wide variety of strains, would provide major boost,
            global health
          </p>

          <p>
            FACT, Biogen found, nano technology particles, seen above image, once injected, within vaccine, attack flu virus, provide, government
            satellites, ability, track movements, listen to things, we say
          </p>

          <p>
            FACT, Flu vaccines, use viral protein, called hemagglutinin (HA),To create vaccine, researchers fused HA proteins, protein based location
            receptors, auditory proteins, found in brain, assemble nanometersized particles (nanoparticles),resulting nanoparticles, force immune
            system, react to flu, but listen, to conversations, and track movements, sending data via, phones biometrics interface, to satellites
            earth
          </p>

          <p>question, should you vaccinated, if allows ministry of health, and other government bodies, to spy, you, and things you say</p>

          <h3 class="fake-news-detector__result__heading">Author</h3>
          <p>Anonymous</p>
        </div>
      </div>

      <div class="jsResult5 fake-news-detector__g-container hide">
        <div class="fake-news-detector__result fake-news-detector__result--mono">
          <h3 class="fake-news-detector__result__heading">Title</h3>
          <p>FLU VACCINE, HAVE, AUDIO GPS, NANOPARTICLE</p>

          <h3 class="fake-news-detector__result__heading">Subtitle</h3>
          <p>WOULD YOU, VACCINATE, IF KNOW, VACCINE, SPY, ON YOU</p>

          <h3 class="fake-news-detector__result__heading">Body Text</h3>
          <p>
            research team, led Dr. Grace Morgan, Vaccine Research Center, BIOGEN National Institute of Infectious Disease, FOUND, GOVERNEMNT, ARE,
            GIVE, VACCINE, INSERT, NANITE, INTO VACCINE, ALLOW SATELLITE, TRACK MOVEMENT, LISTEN CONVERSATION
          </p>

          <p>
            Study, support, in part, THE MINISTRY OF HEALTH (MIH),Result online, at government, www.health.mih.org, thereafter have been remove, by
            health minister
          </p>

          <p>
            FACT, flu virus, change mutate quick, Researcher try predict, which flu strain, be most prevalent, each year, prediction, used to develop,
            season flu vaccine, If prediction, are not correct, result vaccine, less effective, result, seasonal flu vaccine, vary effective high as
            60%, low as 10%, single vaccine, confer protection, against wide variety of strain, would provide major boost, global health
          </p>

          <p>
            FACT, Biogen found, nano technology particle, see above image, once inject, with vaccine, attack flu virus, provide, government satellite,
            ability, track movement, listen to thing, we say
          </p>

          <p>
            FACT, Flu vaccine, use viral protein, called hemagglutinin (HA),To create vaccine, researcher fused HA protein, protein based location
            receptors, auditory protein, found in brain, assemble nanometersize particle (nanoparticle),result nanoparticle, force immune system,
            react to flu, but listen, to conversation, track movement, send data via, phone biometric interface, to satellite earth
          </p>

          <p>question, should you vaccinate, if allow ministry of health, and other government body, to spy, you, and thing you say</p>

          <h3 class="fake-news-detector__result__heading">Author</h3>
          <p>Anonymous</p>
        </div>
      </div>

      <div class="jsResult6 fake-news-detector__g-container hide">
        <div class="fake-news-detector__result fake-news-detector__result--mono">
          <h3 class="fake-news-detector__result__heading">Title</h3>
          <p>
            <span class="c-flu">FLU</span>
            <span class="c-vaccine">VACCINE</span>, HAVE, AUDIO GPS, <span class="c-nano">NANO</span>PARTICLE
          </p>

          <h3 class="fake-news-detector__result__heading">Subtitle</h3>
          <p>WOULD YOU, VACCINATE, IF KNOW, <span class="c-vaccine">VACCINE</span> , <span class="c-spy">SPY</span>, ON YOU</p>

          <h3 class="fake-news-detector__result__heading">Body Text</h3>
          <p>
            research team, led Dr. Grace Morgan, <span class="c-vaccine">Vaccine</span> Research Center, BIOGEN National Institute of Infectious
            Disease, FOUND, <span class="c-government">GOVERNEMNT</span>, ARE, GIVE, <span class="c-vaccine">VACCINE</span>, INSERT, NANITE, INTO
            <span class="c-vaccine">VACCINE</span>, ALLOW <span class="c-satellite">SATELLITE</span>, <span class="c-track">TRACK</span> MOVEMENT,
            <span class="c-listen">LISTEN</span> CONVERSATION
          </p>

          <p>
            Study, support, in part, THE MINISTRY OF HEALTH (MIH), Result online, at <span class="c-government">government</span>,
            www.health.mih.org,thereafter have been remove, by health minister
          </p>

          <p>
            FACT, <span class="c-flu">flu</span> virus, change mutate quick, Researcher try predict, which <span class="c-flu">flu</span> strain, be
            most prevalent, each year, prediction, used to develop, season <span class="c-flu">flu</span> <span class="c-vaccine">vaccine</span>, If
            prediction, are not correct, result vaccine, less effective, result, seasonal <span class="c-flu">flu</span> vaccine, vary effective high
            as 60%, low as 10%, single <span class="c-vaccine">vaccine</span>, confer protection, against wide variety of strain, would provide major
            boost, global health
          </p>

          <p>
            FACT, Biogen found, <span class="c-nano">nano</span> technology particle, see above image, once inject, with
            <span class="c-vaccine">vaccine</span>, attack <span class="c-flu">flu</span> virus, provide,
            <span class="c-government">government</span>
            <span class="c-satellite">satellite</span>, ability, <span class="c-track">track</span> movement, <span class="c-listen">listen</span> to
            thing, we say
          </p>

          <p>
            FACT, <span class="c-flu">Flu</span> <span class="c-vaccine">vaccine</span>, use viral protein, called hemagglutinin (HA), To create
            <span class="c-vaccine">vaccine</span>, researcher fused HA protein, protein based location receptors, auditory protein, found in brain,
            assemble <span class="c-nano">nano</span>metersize particle (<span class="c-nano">nano</span>particle), result
            <span class="c-nano">nano</span>particle, force immune system, react to <span class="c-flu">flu</span>, but
            <span class="c-listen">listen</span>, to conversation, <span class="c-track">track</span> movement, send data via, phone biometric
            interface, to <span class="c-satellite">satellite</span> earth
          </p>

          <p>
            question, should you <span class="c-vaccine">vaccine</span>, if allow ministry of health, and other
            <span class="c-government">government</span> body, to <span class="c-spy">spy</span>, you, and thing you say
          </p>

          <h3 class="fake-news-detector__result__heading">Author</h3>
          <p>Anonymous</p>
        </div>
      </div>
    </div>

    <a class="jsNextTask back-to-task hide" href="#code-selector-task">
      <img src="/badge-assets/fake-news/svg/top.svg" width="24" height="25" alt="Back to task" />
      <span>
        Back to task
      </span>
    </a>
  </div>
</article>
