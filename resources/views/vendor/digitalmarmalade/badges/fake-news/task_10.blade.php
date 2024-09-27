<article class="task-10 hide">
  <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Next, you need to program the rest of your fake news detector.</p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <strong>
      The carousel below shows blocks of code including libraries that you need for your fake news detector program. Select the correct block of code for each of the tasks. Be careful in your selection because if you make two mistakes, you will have to start this activity again. Let's go!  
      </strong>
    </p>

    <div id="code-selector-task-10" class="fake-news-detector" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <span class="fake-news-detector__counter"> 1/6 </span>

      <p class="fake-news-detector__task">
        Add base level imports
        <span class="fake-news-detector__task--example"> To help you identify the correct block of code, look for the following:<br />

        <strong>NumPy:</strong> A numerical library for helping with arrays in Python<br />
        <strong>Pandas:</strong> A data analysis library that uses NumPy in Python<br />
        <strong>OS:</strong> A Python library used for interacting with the operating system<br />
 </span>
      </p>

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
              <span class="code-playground__code--grey"> #Deep Learning Libs </span>
            </code>

            <code class="code-playground__code code-playground__code--gap">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> keras </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> keras.models </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> Sequential </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> keras.layers </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> Dence,Embedding,LSTM,Dropout </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> keras.callbacks </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> ReduceLROnPlateau </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> tensorflow </span>

              <span class="code-playground__code--green"> as </span>

              <span class="code-playground__code--white"> tf </span>
            </code>
          </div>

          <div class="jsSlide2 code-playground code-playground--purple">
            <code class="code-playground__code">
              <span class="code-playground__code--grey"> #NLP Libs </span>
            </code>

            <code class="code-playground__code code-playground__code--gap">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> nltk </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> sklearn.processing </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> LabelBinarizer </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> nltk.corpus </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> stopwords </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> nltk.stem.porter </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> PorterStemmer </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> wordcloud </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> WordCloud, STOPWORDS </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> nltk.stem </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> WordNetLemmatizer </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> nltk.tokenise </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> word_tokenise,sent_tokenise </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> bs4 </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> BeautifulSoup </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> keras.processing </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> text, sequence </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> sklearn.feature_extraction.text </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> CountVectoriser </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> sklearn.feature_extraction.text </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> TfidVectoriser </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> sklearn.preprocessing </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> LabelBinarizer </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> sklearn.linear-model </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> PassiveAggressiveClassifier </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> sklearn.nayve_bayes </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> MultinomialNB </span>

              <span class="code-playground__code--green"> from </span>

              <span class="code-playground__code--white"> sklearn.svm </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> SVC </span>
            </code>
          </div>

          <span class="jsSlide3 code-selector__multiblock code-selector__multiblock--scroll">
            <div class="code-playground code-playground--purple">
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

              <code class="code-playground__code code-playground__code--indent code-playground__code-break">
                <span class="code-playground__code--green"> return </span>

                <span class="code-playground__code--white"> FLU VACCINE FOUND TO HAVE AUDIO & GPS NANOPARTICLES.get_text() </span>
              </code>
            </div>

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

            <div class="code-playground code-playground--purple">
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

            <div class="code-playground code-playground--purple">
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

            <div class="code-playground code-playground--purple">
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

            <div class="code-playground code-playground--purple">
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

            <!--<div class="code-playground code-playground--purple">
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
            </div>-->
          </span>

          <div class="jsSlide4 code-playground code-playground--purple">
            <code class="code-playground__code">
              <span class="code-playground__code--grey"> #This is a Python 3 environment </span>
            </code>

            <code class="code-playground__code code-playground__code--gap">
              <span class="code-playground__code--grey"> #Base level imports for data science work </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> numpy </span>

              <span class="code-playground__code--green"> as </span>

              <span class="code-playground__code--white"> np </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> pandas </span>

              <span class="code-playground__code--green"> as </span>

              <span class="code-playground__code--white"> pd </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> rs,string,unicodedata </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> os </span>
            </code>

            <code class="code-playground__code">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> os </span>

              <span class="code-playground__code--green"> as </span>

              <span class="code-playground__code--white"> path </span>
            </code>
          </div>

          <!--<span class="jsSlide5 code-selector__multiblock code-selector__multiblock--scroll">
            <div class="code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--grey">
                  #These dataframes do not currently have a category for whether they are true or fake.
                </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--grey"> #Let's create those before we combine the databases </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> true[ </span>

                <span class="code-playground__code--orange"> 'category' </span>

                <span class="code-playground__code--white"> ] </span>

                <span class="code-playground__code--purple"> = </span>

                <span class="code-playground__code--green"> 1 </span>
              </code>

              <code class="code-playground__code">
                <span class="code-playground__code--white"> true[ </span>

                <span class="code-playground__code--orange"> 'category' </span>

                <span class="code-playground__code--white"> ] </span>

                <span class="code-playground__code--purple"> = </span>

                <span class="code-playground__code--green"> 0 </span>
              </code>
            </div>

            <div class="code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--grey"> #Import our data </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> true </span>

                <span class="code-playground__code--purple"> = </span>

                <span class="code-playground__code--white"> pd.read_csv( </span>

                <span class="code-playground__code--orange"> "True.csv" </span>

                <span class="code-playground__code--white"> ) </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> true </span>

                <span class="code-playground__code--purple"> = </span>

                <span class="code-playground__code--white"> pd.read_csv( </span>

                <span class="code-playground__code--orange"> "Fake.csv" </span>

                <span class="code-playground__code--white"> ) </span>
              </code>
            </div>

            <div class="code-playground code-playground--purple">
              <code class="code-playground__code">
                <span class="code-playground__code--grey"> #Let's explore the data at a base level </span>
              </code>

              <code class="code-playground__code code-playground__code--gap">
                <span class="code-playground__code--white"> true.head() </span>
              </code>
            </div>
          </span> -->

          <div class="jsSlide6 code-playground code-playground--purple">
            <code class="code-playground__code">
              <span class="code-playground__code--grey"> #Visualisation libs </span>
            </code>

            <code class="code-playground__code code-playground__code--gap">
              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> seaborn </span>

              <span class="code-playground__code--green"> as </span>

              <span class="code-playground__code--white"> sns </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> matplotlib.puplot </span>

              <span class="code-playground__code--green"> as </span>

              <span class="code-playground__code--white"> plot </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> PIL </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> image </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> wordcloud </span>

              <span class="code-playground__code--green"> import </span>

              <span class="code-playground__code--white"> WordCloud, STOPWORDS, ImageColorGenerator </span>
            </code>
          </div>
        </div>
      </div>

      <p class="fail-box hide mb-s">Hmm... That does not seem like the correct code for this task. Please select another block.</p>
      <button class="jsRestart btn btn--orange hide">Restart</button>

      <div class="jsHeading fake-news-detector__g-container hide">
        <div class="fake-news-detector__sign">Fake News Detector</div>
      </div>

      <div class="jsResult fake-news-detector__g-container hide">
        <div class="fake-news-detector__result">
          <div class="fake-news-detector__progress-container">
            <progress id="fake-news-detector__progress" class="fake-news-detector__progress" value="10" max="100"></progress>
          </div>
          <label class="fake-news-detector__progress__label" for="fake-news-detector__progress"> Processing Code... </label>

          <img class="jsSuccessImage hide" src="/badge-assets/fake-news/svg/icon--success-green.svg" width="48" height="48" />
        </div>
      </div>
    </div>

    <p class="success-box hide">Good work! Now let's start to train your fake news detector.</p>
    <a class="jsNextTask back-to-task hide" href="#code-selector-task-10">
      <img src="/badge-assets/fake-news/svg/top.svg" width="24" height="25" alt="Back to task" />
      <span>
        Back to task
      </span>
    </a>
  </div>
</article>
