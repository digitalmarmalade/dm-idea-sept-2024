@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-2">
            <div class="top">
                <div class="step">
                    <p>Step 2 of 7<span>Choosing a Platform</span></p>
                </div>
                <h1>Choosing a Platform</h1>
                <img class="hero" src="/badge-assets/{{$url['slug']}}/_global/img/step2-hero.gif" alt="" />
            </div>

            <div class="middle">
                <div class="holder">
                    <p>You are a farmer that specialises in organic produce and you are in need of setting up an online presence to promote your business. The aim of your online presence is to showcase your farm, products, and  your produce to prospective distributors.</p>
                    <div class="quiz quiz-3">
                        <p>Based on what you’ve learnt so far, what is the most appropriate online presence to achieve your goals?</p>
                        <ul>
                            <li><a href="#" data-value="1">A Blog</a></li>
                            <li><a href="#" data-value="2">A Website</a></li>
                        </ul>
                    </div>

                    <div id="website-methods" class="website-methods hide">
                        <p>There are three methods you can choose from to set up your website:</p>
                        <ul class="methods">
                            <li>
                                <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-builder-service.svg" alt="" />
                                <h3>Use a website/blog builder service</h3>
                                <p>A website builder is a program, or tool, that helps you build a website. The programs are very user friendly and use a <b>WYSIWYG</b> (<i>What You See Is What You Get</i>) interface with drag and drop elements (copy, images, etc).</p>
                            </li>
                            <li>
                                <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-cms.svg" alt="" />
                                <h3>Use a content managament system (CMS)</h3>
                                <p>A web <b>Content Management System (CMS)</b> is a system designed to support the management of the content of web pages. You can easily manage text and embedded graphics, photos, video, audio, maps, and program code (e.g. for applications) that displays content or interacts with the user.</p>
                            </li>
                            <li>
                                <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-yourself.svg" alt="" />
                                <h3>Doing all the setting up yourself</h3>
                                <p>Setting up a website for yourself involves lots of skills such as being able design and code. Although it might be the cheapest option in the long term, it might be time consuming. </p>
                            </li>
                        </ul>

                        <div class="quiz quiz-4">
                            <p>To enable you to best showcase your products and give full details of your business, you will be better off setting up a website. How do you want to go about setting up your website?</p>
                            <ul>
                                <li><a href="#" data-value="1">I will choose a website/blog builder service</a></li>
                                <li><a href="#" data-value="2">I will source a Content Management System</a></li>
                                <li><a href="#" data-value="3">I will set it up myself from scratch</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <div class="bottom hide">
                <div class="holder">
                    <div id="yourself" class="hide">
                        <p>You chose to set up your website yourself from scratch. What are the <b>PROS</b> and <b>CONS</b> of this method?</p>
                        <table>
                            <caption>Doing all the setting up yourself</caption>
                            <tr>
                                <th>Pros</th>
                                <th>Cons</th>
                            </tr>
                            <tr>
                                <td class="pro">Cost-effective</td>
                                <td class="con">Time consuming</td>
                            </tr>
                            <tr>
                                <td class="pro">Total Flexibility</td>
                                <td class="con">Requires design skills</td>
                            </tr>
                            <tr>
                                <td class="pro">Easy to publish</td>
                                <td class="con">Requires coding skills</td>
                            </tr>
                        </table>

                        <p class="more-methods">What about the other methods? What are the <b>PROS</b> and <b>CONS</b> of each of them? </p>
                        <a class="btn jsContinueMoreMethods hide" href="#">Continue</a>

                        <div id="moreMethodsYourself" class="hide">
                          <table>
                              <caption>Using a website/blog builder service</caption>
                              <tr>
                                  <th>Pros</th>
                                  <th>Cons</th>
                              </tr>
                              <tr>
                                  <td class="pro">You don’t need any coding skills</td>
                                  <td rowspan="2" class="con">Usually comes with strings attached</td>
                              </tr>
                              <tr>
                                  <td class="pro">You don’t need any design skills</td>
                              </tr>
                              <tr>
                                  <td class="pro">Quick turn around</td>
                                  <td rowspan="2" class="con">Less flexibility</td>
                              </tr>
                              <tr>
                                  <td class="pro">Easy to publish</td>
                              </tr>
                              <tr>
                                  <td class="pro">Usually includes hosting and domain names for a premium cost</td>
                                  <td rowspan="2" class="con">Expensive</td>
                              </tr>
                              <tr>
                                  <td class="pro">User friendly: <b>WYSIWYG</b> (<i>What You See Is What You Get</i>)</td>
                              </tr>
                          </table>
                          <table >
                              <caption>Using a free Content Management System (CMS)</caption>
                              <tr>
                                  <th>Pros</th>
                                  <th>Cons</th>
                              </tr>
                              <tr>
                                  <td class="pro">Flexible</td>
                                  <td rowspan="3" class="con">Regular updates are required to make the site safe from hackers </td>
                              </tr>
                              <tr>
                                  <td class="pro">Advanced features</td>
                              </tr>
                              <tr>
                                  <td class="pro">Easy to publish</td>
                              </tr>
                              <tr>
                                  <td class="pro">User friendly</td>
                                  <td rowspan="3" class="con">The CMS stores everything separately, then assembles it on the fly when the web client requests a page, which means they can be slow</td>
                              </tr>
                              <tr>
                                  <td class="pro">Usually includes hosting and free for basic websites</td>
                              </tr>
                              <tr>
                                  <td class="pro">Content can be updated rapidly</td>

                              </tr>
                          </table>
                        </div>
                              <a class="btn jsContinueNextStep hide" href="{{$links['next']}}">Continue</a>
                    </div>

                    <div id="builder" class="hide">
                        <p>You chose to set up your website using a website/blog builder service. What are the <b>PROS</b> and <b>CONS</b> of this method?</p>
                        <table>
                            <caption>Using a website/blog builder service</caption>
                            <tr>
                                <th>Pros</th>
                                <th>Cons</th>
                            </tr>
                            <tr>
                                <td class="pro">You don’t need any coding skills</td>
                                <td rowspan="2" class="con">Usually comes with strings attached</td>
                            </tr>
                            <tr>
                                <td class="pro">You don’t need any design skills</td>
                            </tr>
                            <tr>
                                <td class="pro">Quick turn around</td>
                                <td rowspan="2" class="con">Less flexibility</td>
                            </tr>
                            <tr>
                                <td class="pro">Easy to publish</td>
                            </tr>
                            <tr>
                                <td class="pro">Usually includes hosting and domain names for a premium cost</td>
                                <td rowspan="2" class="con">Expensive</td>
                            </tr>
                            <tr>
                                <td class="pro">User friendly: <b>WYSIWYG</b> (<i>What You See Is What You Get</i>)</td>
                            </tr>
                        </table>
                        <p>What about the other methods? What are the <b>PROS</b> and <b>CONS</b> of each of them? </p>

                        <a class="btn jsContinueMoreMethods hide" href="#">Continue</a>
                        <div id="moreMethodsBuilder" class="hide">
                          <table >
                              <caption>Using a free Content Management System (CMS)</caption>
                              <tr>
                                  <th>Pros</th>
                                  <th>Cons</th>
                              </tr>
                              <tr>
                                  <td class="pro">Flexible</td>
                                  <td rowspan="3" class="con">Regular updates are required to make the site safe from hackers </td>
                              </tr>
                              <tr>
                                  <td class="pro">Advanced features</td>
                              </tr>
                              <tr>
                                  <td class="pro">Easy to publish</td>
                              </tr>
                              <tr>
                                  <td class="pro">User friendly</td>
                                  <td rowspan="3" class="con">The CMS stores everything separately, then assembles it on the fly when the web client requests a page, which means they can be slow</td>
                              </tr>
                              <tr>
                                  <td class="pro">Usually includes hosting and free for basic websites</td>
                              </tr>
                              <tr>
                                  <td class="pro">Content can be updated rapidly</td>

                              </tr>
                          </table>
                          <table>
                              <caption>Doing all the setting up yourself</caption>
                              <tr>
                                  <th>Pros</th>
                                  <th>Cons</th>
                              </tr>
                              <tr>
                                  <td class="pro">Cost-effective</td>
                                  <td class="con">Time consuming</td>
                              </tr>
                              <tr>
                                  <td class="pro">Total Flexibility</td>
                                  <td class="con">Requires design skills</td>
                              </tr>
                              <tr>
                                  <td class="pro">Easy to publish</td>
                                  <td class="con">Requires coding skills</td>
                              </tr>
                          </table>
                        </div>
                        <a class="btn jsContinueNextStep hide" href="{{$links['next']}}">Continue</a>

                    </div>

                    <div id="CMS" class="hide">
                        <p>You chose to set up your website using a free Content Management System (CMS). What are the <b>PROS</b> and <b>CONS</b> of this method?</p>
                        <table >
                            <caption>Using a free Content Management System (CMS)</caption>
                            <tr>
                                <th>Pros</th>
                                <th>Cons</th>
                            </tr>
                            <tr>
                                <td class="pro">Flexible</td>
                                <td rowspan="3" class="con">Regular updates are required to make the site safe from hackers </td>
                            </tr>
                            <tr>
                                <td class="pro">Advanced features</td>
                            </tr>
                            <tr>
                                <td class="pro">Easy to publish</td>
                            </tr>
                            <tr>
                                <td class="pro">User friendly</td>
                                <td rowspan="3" class="con">The CMS stores everything separately, then assembles it on the fly when the web client requests a page, which means they can be slow</td>
                            </tr>
                            <tr>
                                <td class="pro">Usually includes hosting and free for basic websites</td>
                            </tr>
                            <tr>
                                <td class="pro">Content can be updated rapidly</td>

                            </tr>
                        </table>
                        <p>What about the other methods? What are the <b>PROS</b> and <b>CONS</b> of each of them? </p>

                        <a class="btn jsContinueMoreMethods hide" href="#">Continue</a>
                        <div id="moreMethodsCMS" class="hide">

                          <table>
                              <caption>Doing all the setting up yourself</caption>
                              <tr>
                                  <th>Pros</th>
                                  <th>Cons</th>
                              </tr>
                              <tr>
                                  <td class="pro">Cost-effective</td>
                                  <td class="con">Time consuming</td>
                              </tr>
                              <tr>
                                  <td class="pro">Total Flexibility</td>
                                  <td class="con">Requires design skills</td>
                              </tr>
                              <tr>
                                  <td class="pro">Easy to publish</td>
                                  <td class="con">Requires coding skills</td>
                              </tr>
                          </table>
                          <table>
                              <caption>Using a website/blog builder service</caption>
                              <tr>
                                  <th>Pros</th>
                                  <th>Cons</th>
                              </tr>
                              <tr>
                                  <td class="pro">You don’t need any coding skills</td>
                                  <td rowspan="2" class="con">Usually comes with strings attached</td>
                              </tr>
                              <tr>
                                  <td class="pro">You don’t need any design skills</td>
                              </tr>
                              <tr>
                                  <td class="pro">Quick turn around</td>
                                  <td rowspan="2" class="con">Less flexibility</td>
                              </tr>
                              <tr>
                                  <td class="pro">Easy to publish</td>
                              </tr>
                              <tr>
                                  <td class="pro">Usually includes hosting and domain names for a premium cost</td>
                                  <td rowspan="2" class="con">Expensive</td>
                              </tr>
                              <tr>
                                  <td class="pro">User friendly: <b>WYSIWYG</b> (<i>What You See Is What You Get</i>)</td>
                              </tr>
                          </table>
                        </div>
                        <a onclick="oBadges.stepCompleted();" class="btn jsContinueNextStep hide" href="{{$links['next']}}">Continue</a>

                    </div>
                </div>
            </div>

        </main>

        <div class="feedback feedback-fail feedback-step-2 hide">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-incorrect.svg" alt="" />
            <p><span>That is not quite right...</span> Considering all your goals, the best online presence for you is a <b>website</b>.</p>
            <a class="btn btn-white jsContinue jsContinueFail" href="#">Continue</a>
        </div>

        <div class="feedback feedback-success hide feedback-step-2">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-correct.svg" alt="" />
            <p><span>Correct!</span> Considering all your goals,  the best online presence for you is a <b>website</b>.</p>
            <a class="btn btn-white jsContinue jsContinueSuccess" href="#">Continue</a>
        </div>

        @endsection

        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 4);
        </script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>
        @endsection
