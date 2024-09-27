@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-3">
            <div class="top">
                <div class="step">
                  <p>Step 3 of 7<span>Choosing a Domain Name</span></p>
                </div>
                <h1>Choosing a Domain Name</h1>
                <div class="holder">
                    <h2>What is a domain name?</h2>
                    <div class="cols">
                        <div class="col">
                            <p>A domain name is a web address like below:</p>
                            <p class="domain">mywebsite.com</p>
                            <p>If you are not using a website builder service, you will need to register a domain with a company that sells domain names. These companies will enable you to do a search to find out whether your domain name is available.</p>
                        </div>
                        <div class="col">
                            <p>If it's available, you can buy and register the domain, you’ll need to enter some information about yourself as the owner. This information will be freely available on the internet, so some hosts allow you to pay a little more for ‘Domain Privacy’ which means that the registrant information is not freely accessible.</p>
                            <p>If your domain name isn’t available, then you will need to try a different one or try to acquire it from its current owner. You’ll find that a lot of domains are already taken. </p>
                        </div>
                    </div>
                    <h2>What sort of domain name should I choose?</h2>
                    <div class="cols">
                        <div class="col">
                            <p>Domain acquisition is often very expensive compared to registering an available one, and would very rarely be worth the price unless it is critical to your brand or marketing strategy. If you’re setting up a website for the first time and aren’t looking to build a business out of your presence, it’s strongly recommended you just search for a domain name variation that is available.</p>
                            <p>If you really have to get the specific domain, you’ll need to find the owner on whois.net and possibly contact them through the details listed there. Alternatively, you could buy a domain from an auction site like sedo.com. Again, this could get very expensive compared with registering your own.</p>
                        </div>
                        <div class="col">
                            <p>Thinking of a decent name for your website or blog can be the toughest thing about building your own website.</p>
                            <p>In short, your domain should be:</p>
                            <ul>
                                <li>Catchy</li>
                                <li>Unique</li>
                                <li>Easy to remember</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <img class="hero" src="/badge-assets/{{$url['slug']}}/_global/img/step3-hero.gif" alt="" />
            </div>

            <div class="middle">
                <div class="holder">
                    <div class="quiz quiz-5">
                        <p>Let’s now consider the most appropriate domain name for your website. You've decided to call your online business ‘Organic Life’. Based on the title and the goal of your website, which is the most appropriate domain name for your website? </p>
                        <ul>
                            <li><a href="#" data-value="1">sunsetinthefarm.com</a></li>
                            <li><a href="#" data-value="2">organic.org</a></li>
                            <li><a href="#" data-value="3">theabstractartofeatingorganicanically.co.uk</a></li>
                            <li><a href="#" data-value="4">organiclife.com</a></li>
                            <li><a href="#" data-value="5">organic-life.com</a></li>

                            <li><a href="#" data-value="6">healthyliving.co.uk</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bottom hide">
                <div class="holder">
                    <h2>Top tips for choosing a domain name</h2>
                    <ul class="tips">
                        <li>
                            <span class="figure">1</span>
                            <p><span>What are your Top 10 keywords?</span>Think of about 10 keywords or terms that describe your website in the best way possible. When you have a good bunch of them you can start to put them together, mix them up and add prefixes & suffixes to create some really cool domain name ideas.</p>
                        </li>
                        <li>
                            <span class="figure">2</span>
                            <p><span>A unique domain name is the way to go!</span>Don’t buy a name that will be confused with another website. Be unique, otherwise it could mean your website falls flat before it has even started. Never buy domains that are simply the plural, hyphenated or misspelled version of an already established domain.</p>
                        </li>
                        <li>
                            <span class="figure">3</span>
                            <p><span>Go for ‘dot-com’ available domains or a top level local domain</span>‘Dot-com’ domains are considered the most valuable and important if you are going to be building a brand. If you want to target a worldwide audience with your site, go for a .com  .org  or .net. Local domains such as .co.uk for UK or .es for Spain are also commonly used.</p>
                        </li>
                        <li>
                            <span class="figure">4</span>
                            <p><span>Make it easy to remember and easy for  people to find your site</span>Although people tend to find your site through a search in Google, it’s still important to make your domain easy to spell / type out. If it requires a lot of effort to type correctly, due to trying to spell it, the length or the use of un-memorable words or sounds, you’ve probably kissed goodbye to a good portion of your branding and marketing value.</p>
                        </li>
                        <li>
                            <span class="figure">5</span>
                            <p><span>Make it stick in peoples’ heads</span>Keep your domain name snappy and memorable. Word-of-mouth and search engine prominence are both reliant on easy to remember domain names. You don’t want to have an amazing website that no one can ever remember to tell their friends about because they can’t remember the name of the site!</p>
                        </li>
                        <li>
                            <span class="figure">6</span>
                            <p><span>Make it short</span>Short is great! Short is the way to go! It’s easy to type and easy to remember.</p>
                        </li>
                        <li>
                            <span class="figure">7</span>
                            <p><span>Watch out for copyright infringement</span>Check that you’re not infringing on anyone’s copyright with the name of your website. To do this head over to copyright.gov and search before you buy your URL name.</p>
                        </li>
                        <li>
                            <span class="figure">8</span>
                            <p><span>Don’t use hyphens or numbers</span>It makes it really difficult to give your domain name verbally and it fails the easy to remember or type test.</p>
                        </li>
                    </ul>
                    <a onclick="oBadges.stepCompleted();" class="btn" href="{{$links['next']}}">Continue</a>
                </div>
            </div>
            <div class="feedback hide feedback-step-3">
              <img src="" alt="" />
              <p></p>
              <a class='btn btn-white' href='#'></a>
          </div>

        </main>
        @endsection
        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 5);
        </script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
        @endsection
