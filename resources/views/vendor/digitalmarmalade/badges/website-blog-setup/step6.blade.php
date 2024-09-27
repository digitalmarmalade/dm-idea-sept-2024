@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

        <main class="step-4">
            <div class="top">
                <div class="step">
                    <p>Step 4 of 7<span>Hosting</span></p>
                </div>
                <h1>Hosting</h1>
                <div class="holder">
                  <h2>What is hosting?</h2>
                  <div class="cols">

                    <div class="col">
                        <p>A web host maintains a bunch of specially configured computers called servers.</p></p>
                        <p>In many ways these computers are just like your own; they run on operating systems like Linux and Windows, they store files, and they connect to the internet.  The main difference is that servers are purpose designed to be opened up to the public so people browsing the web can access their content. </p>
                    </div>
                    <div class="col">
                        <p>Every time you look at a site on the web you’re actually connecting to a server somewhere and downloading the site’s files through your browser.</p>
                        <p>&lsquo;Hosting&rsquo; refers to a company renting you space on one of their servers so they can &lsquo;host&rsquo; your site there. You put all your site’s files onto the server, and then the host takes care of letting people on the web connect to your space so they can view your site.</p>
                    </div>
                </div>

              </div>
              <img class="hero" src="/badge-assets/{{$url['slug']}}/_global/img/step4-hero.gif" alt="" />
            </div>

            <div class="bottom">
              <div class="holder">
                <h2>Choosing your hosting company</h2>
                <div class="cols">
                  <div class="col">
                    <p>Even a host that delivers a perfect service may not be the right one for you if it doesn’t meet the needs of your project.</p>
                  </div>
                  <div class="col">
                    <p>Before you even start comparing hosts it’s important that you have all the details of your site’s requirements mapped out.</p>
                  </div>
                </div>
                <h2>Top tips for choosing a hosting company</h2>
                <ul class="tips">
                  <li>
                    <span class="figure">1</span>
                    <p><span>What type of site will you be creating?</span>This question is really where everything starts. A website using a Content Management System and a pure static HTML come along with different technical requirements in a web host so it’s crucial to know how your site is going to be built before you begin.</p>
                  </li>
                  <li>
                    <span class="figure">2</span>
                    <p><span>What are the technical requirements of your website?</span>Once you know what type of site you’ll be building, you need to find out the full list of technical requirements it will have; things like coding languages or types of databases. If you’re creating a dynamic site rather than a static site, it’s very likely you’ll need the ability to create a database. If so, you’ll need to find out what type of database is needed and whether your host can provide it. As with languages and frameworks, you’ll also need to check on the version of the database system that is available.</p>
                  </li>
                  <li>
                    <span class="figure">3</span>
                    <p><span>What level of security do you require?</span>While all sites need to be secure to a minimum level, certain types of sites require more attention to security than others. If you will be processing customer credit card details through your site, or you’ll be storing personal information such as emails and passwords of your visitors, you’ll need to take steps to make sure this is all done safely.</p>
                  </li>
                  <li>
                    <span class="figure">4</span>
                    <p><span> Do you need email hosting?</span>Will you be setting up email addresses associated with the domain of your new site, such as contact@yourdomain.com? If so, do you want to have your host handle your email rather than putting it through another provider? If you do, you’ll need to check that the email hosting included will fit your needs.</p>
                  </li>
                  <li>
                    <span class="figure">5</span>
                    <p><span>Will you be setting up more than one site?</span>Are you just going to set up one site on your host, or will you need to set up multiple sites? If you’re setting up multiple sites, will they each be on subdomains likemyothersite.mydomain.com or will they need their own top level domain likemyothersite.com? Are there other requirements for your extra sites, such as additional databases?</p>
                  </li>
                  <li>
                    <span class="figure">6</span>
                    <p><span>How large is the data you will be storing and serving?</span>The capacity your host will require is not just a matter of traffic, but also the file size of whatever you’re showing to that traffic. The bigger the file size, the more storage and bandwidth you’ll need your host to have. For example, a predominantly text-oriented site will need a smaller amount of storage and bandwidth, while a site serving lots of high quality images will need larger amounts.</p>
                  </li>
                  <li>
                    <span class="figure">7</span>
                    <p><span>What volume of traffic do you initially expect?</span>Virtually all hosting services are tiered to cater to various levels of traffic. Realistically, most new sites will have low levels of traffic, but if you know for certain your initial traffic levels will be high you’ll need to ensure your host can handle it.</p>
                  </li>
                  <li>
                    <span class="figure">8</span>
                    <p><span>What volume of traffic do you expect in the future?</span>Even if you expect your traffic to start low, do you have strong plans in place to build it up to high levels? If so, you may need to plan a way for your site to be able to increase its capacity as time goes on.</p>
                  </li>
                  <li>
                    <span class="figure">9</span>
                    <p><span> What is your monthly hosting budget?</span>You don’t need to know the exact amount you want to spend on hosting, but you do need to have a ballpark idea. If your budget is limited you may need to prepare yourself to do without some bells and whistles. If your budget is flexible, you may be able to benefit from some extra perks. </p>
                  </li>
                  <li>
                    <span class="figure">10</span>
                    <p><span>What is your level of comfort with handling technical tasks?</span>It’s very possible to create almost any type of site with limited experience; however certain types of site management tasks will require different levels of technical experience. If you are confident, you may be able to tackle things like administering your own server. If you are less comfortable, you may wish to look at fully managed services where everything is done for you. </p>
                  </li>
                </ul>

                <a onclick="oBadges.stepCompleted();" class="btn" href="{{$links['next']}}">Continue</a>
            </div>
          </div>

        </main>

        @endsection


        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 6);
        </script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
        @endsection
