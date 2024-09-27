@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-2">
  <section class="blue top">
    <div class="holder">
      <ul class="step">
        <li data-aos="fade-right"><span>S</span></li>
        <li data-aos="fade-right" data-aos-delay="100"><span>t</span></li>
        <li data-aos="fade-right" data-aos-delay="200"><span>e</span></li>
        <li data-aos="fade-right" data-aos-delay="300"><span>p</span></li>
        <li data-aos="fade-right" data-aos-delay="400"><span>2</span></li>
        <li data-aos="fade-right" data-aos-delay="500"><span>o</span></li>
        <li data-aos="fade-right" data-aos-delay="600"><span>f</span></li>
        <li data-aos="fade-right" data-aos-delay="700"><span>5</span></li>
      </ul>
      <h1 data-aos="fade-up" data-aos-delay="800">What is a personal statement?</h1>
      <p data-aos="fade-up" data-aos-delay="900">No two personal statements should be the same – remember recipients can, and often, will check if they have been copied or ‘recycled’.
      <p data-aos="fade-up" data-aos-delay="1000">The clue is in the personal!</p>
      <div class="box box-remember box-remember-diagram" data-aos="fade-up" data-aos-delay="1000">
        <div class="remember-diagram">

            <img class="balloon" src="/badge-assets/{{$url['slug']}}/_global/img/remember.svg" alt="" />
            <ul class="remember">
              <li data-aos="fade-right"><span>R</span></li>
              <li data-aos="fade-right" data-aos-delay="700"><span>e</span></li>
              <li data-aos="fade-right" data-aos-delay="800"><span>m</span></li>
              <li data-aos="fade-right" data-aos-delay="900"><span>e</span></li>
              <li data-aos="fade-right" data-aos-delay="1000"><span>m</span></li>
              <li data-aos="fade-right" data-aos-delay="1100"><span>b</span></li>
              <li data-aos="fade-right" data-aos-delay="1200"><span>e</span></li>
              <li data-aos="fade-right" data-aos-delay="1300"><span>r</span></li>
            </ul>

            <p>The statement should follow a thoughtful structure to ensure key points are covered.The three elements to remember are:</p>

        </div>
        <div>
          <img class="hide-mobile diagram" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-2.png" alt="" />
          <img class="hide-desktop diagram" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-mobile.png" alt="" />
        </div>
      </div>

    </section>

      <section class="yellow task">
        <div class="holder">

            <p data-aos="fade-up">Time for a little test – can you think of what you should and should not write on your personal statement?
            Are you able to identify the points below as a <b>‘do include’</b> or a <b>‘don’t include’</b>?</p>
          <div class="box box-task" id="task" data-aos="fade-up" data-aos-delay="1000">
            <div class="task-3">

              <div class="question question-1">
                <div class="question-number">1<span>/</span>15</div>
                <p>Explaining why you want to study a particular course or get that role.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <h2>Correct!</h2>
                  <p>What motivates you to take this course or job position? Talk about how your interest developed, what you’ve done to pursue it or how you’ve drawn inspiration from your current studies/work experience. It is particularly good if you can highlight anything you have done so far which is relevant. This helps prove that you are as keen as you say you are.</p>
                  <a class="btn-next btn-next-1" href="#task">Next</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-1" href="#task">Try again</a>
                </div>
              </div>

              <div class="question question-2">
                <div class="question-number">2<span>/</span>15</div>
                <p>Using famous quotations to help make your points.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-2" href="#task">Try again</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <h2>Correct!</h2>
                  <p>Ask yourself whether any of the following add anything original or say anything specific about who you are?</p>

                  <p><i>“Nothing is impossible, the word itself says ‘I'm possible’!”</i><br>- Audrey Hepburn</p>
                  <p><i>“Life is 10% what happens to me and 90% of how I react to it”</i> - Charles Swindoll</p>
                  <p><i>“Do or do not. There is no try”</i><br>- Yoda</p>
                  <p>Why you should think twice before including quotes:</p>
                  <p><b>Plagiarism (ie copying)</b><br>Is this the most original way to convey what you care about?</p>
                  <p><b>Takes up too much space</b><br>Can you think of anything else to help meet the word count to help someone get to know who you are?</p>
                  <p><b>So many people do it</b><br>Chances are it will not be an original quote and indeed might even be an overused cliché, which could undermine all that effort you’ve put in to be original and authentic.</p>
                  <p>In summary: you need to <b>stand out from the crowd</b>, which means making every single word do you justice.</p>
                  <a class="btn-next btn-next-2" href="#task">Next</a>

                </div>
              </div>

              <div class="question question-3">
                <div class="question-number">3<span>/</span>15</div>
                <p>Explaining why you are right for the job or will excel on that course.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <h2>Correct!</h2>
                  <p>Provide evidence to show that, not only do you meet the selection criteria, but that you’ve even gone a step further and researched the course or the company you are applying for.</p>
                  <p>Give examples that show why you are right for the application. If you want to study history, talk about something relevant to help prove your passion – this could be for example the trip you made to the beaches of Normandy; or let's say you want to work as a GP – you could mention a Saturday job that helped you discover you love working with people and helping them.</p>
                  <p>Don’t exaggerate, be real and keep it focused and remember to <b>showcase your ability</b>.</p>
                  <a class="btn-next btn-next-3" href="#task">Next</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-3" href="#task">Try again</a>
                </div>
              </div>

              <div class="question question-4">
                <div class="question-number">4<span>/</span>15</div>
                <p>Talk about my interests and hobbies.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <h2>Correct!</h2>
                  <p>Giving an insight into your interests and hobbies helps show you are someone who is making the most of life and opportunities. It is especially helpful for your personal statement if those interests and hobbies have some connection to the field you are applying to study or work, even if this is in a way that has helped you develop transferable skills.</p>
                  <p>This is your time to <b>explore your interests</b>.</p>
                  <p>Find the balance – captaining your rugby team success is great, however unless you are using your personal statement to apply for a rugby-related job, saying rugby is your life is not so great, as it suggests you are not as well-rounded as others. It is all about balance and relevance.</p>
                  <p>If you're applying to do a film course, for instance, don't just say <i>'I love watching films'</i>. Talk about specific films or genres you enjoy, what you've learned and how you've developed critical and analytical skills as a result. Similarly, don't simply put, <i>‘I play football on Sundays’</i>; talk about the qualities this has taught you – from teamwork to tactics, leadership to resilience – and relate them back to your suitability for the course.</p>
                  <p>Keep it relevant – for example, emphasising your enjoyment for the outdoors can be just as pertinent for an office-based job as for the position of a park ranger if you are clear what this passion brings you in terms of personal qualities and attributes. Even better if you can relate it to the course or job in question.<p>
                  <p>Remember space is at a premium and words key – so make sure anything you say should draw out your X-Factor and help show how you are suited to the employment/course in question.</p>
                  <a class="btn-next btn-next-4" href="#task">Next</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-4" href="#task">Try again</a>
                </div>
              </div>

              <div class="question question-5">
                <div class="question-number">5<span>/</span>15</div>
                <p>Include lists, as that is an easy way to get across lots in as few words as possible – after all space is at a premium.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-5" href="#task">Try again</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <h2>Correct!</h2>
                  <p>Bullet points can be an effective way of communicating information in some contexts but are rarely a good idea in personal statements which are supposed to be in narrative form. Avoid giving a list of all the books you’ve read, countries you’ve visited, work experience placements you’ve done or positions you’ve held.</p>

                  <p>Lists can be helpful, but they do not paint a picture of who you are as well as if you use nicely thought-through sentences.</p>

                  <p>Remember it’s not just about what you’ve done, it’s about what you took from the experience – did you learn anything, did it give you a perspective that is useful in your application? Lists don't allow you to showcase your personality.</p>

                  <a class="btn-next btn-next-5" href="#task">Next</a>

                </div>
              </div>

              <div class="question question-6">
                <div class="question-number">6<span>/</span>15</div>
                <p>Using clichés as a quick and easy way to show who I am.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-6" href="#task">Try again</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <h2>Correct!</h2>
                  <p>Remember the person reading your statement will have seen over-used clichés time and time again, yet the reality is that they don’t actually add anything to your message.<p>
                  <p>When you are crafting your narrative, take care to write in your own voice and think twice about using lazy phrases that do not contribute value. Every word counts, so don't waste any on meaningless, empty clichés. They might be quick and easy to use, but they don't help you shine.<p>
                  <p>Examples of clichés people sometimes use include the following:</p>
                  <p>"Think outside the box"</p>
                  <p>"110%"</p>
                  <p>"Low hanging fruit"</p>
                  <p>"At the end of the day"</p>
                  <p>"Every cloud has a silver lining"</p>
                  <p>"Let's face it"</p>
                  <p>"To be honest"</p>
                  <p>"I'm not being funny, but…"</p>

                  <a class="btn-next btn-next-6" href="#task">Next</a>

                </div>
              </div>

              <div class="question question-7">
                <div class="question-number">7<span>/</span>15</div>
                <p>Showcasing my transferable skills.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <h2>Correct!</h2>
                  <p><b>Transferable skills</b> are those abilities that are relevant and applicable across different areas of your life: socially, professionally and academically. They are <b>portable skills</b>.</p>
                  <p>It could be your ability to work independently, collaborate within a team, have good time management or organisational skills, solve problems, lead teams, listen or analyse.</p>
                  <p>If you look hard enough these skills are usually set out within course and job descriptions. It is just a case of looking out for them, and then including within your statement.</p>
                  <p>As we can’t say enough, <b>showcase your ability</b> - it is all part of explaining why you are right for the course/job.</p>
                  <a class="btn-next btn-next-7" href="#task">Next</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-7" href="#task">Try again</a>
                </div>
              </div>

              <div class="question question-8">
                <div class="question-number">8<span>/</span>15</div>
                <p>This is a formal response to a formal document, so I should try to use difficult vocabulary and make my sentences long and complicated so I come across as formal as possible.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-8" href="#task">Try again</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <h2>Correct!</h2>
                  <p>This is your opportunity to catch attention in the right way. So think carefully about the tone you should use, and also about the 'personality' of the brand, institution or company you are seeking to impress.</p>

                  <a class="btn-next btn-next-8" href="#task">Next</a>

                </div>
              </div>

              <div class="question question-9">
                <div class="question-number">9<span>/</span>15</div>
                <p>Lie, cheat, copy or exaggerate.</p>
                <ul>
                  <li data-value="true">Do include!</li>
                  <li>Do not include!</li>
                </ul>
                <div class="task-3-feedback feedback-success">
                  <p>Not quite right...</p>
                  <a class="btn-try-again btn-try-again-9" href="#task">Try again</a>
                </div>
                <div class="task-3-feedback feedback-fail">
                  <h2>Correct!</h2>
                  <p>You might think that telling little white lies, exaggerating your experience and abilities, or copying someone else's achievements should be harmless. You might even think others do it, so why shouldn't you? The reality is that you owe it to yourself to be truthful and authentic. Your integrity is a large part of your personal brand. Don’t compromise it.</p>
                  <p>You should also be aware that advances in technology mean software can spot cheats.</p>
                  <p>For example, UCAS (the UK group that plays a vital role connecting students with universities and colleges) uses stringent similarity and plagiarism software and your universities will be told if you copy anything from another source.</p>
                  <p>It is simply not worth the risk.</p>
                  <p>A white lie is still a lie. If you didn’t do it, read it or see it, then don’t claim it.</p>

                  <p>And as for exaggeration, that could be saying you’ve read a whole book when you’ve only read a chapter or that you won an award that you did not complete. Don't do it.</p>

                  <a class="btn-next btn-next-9" href="#task">Next</a>

                </div>
              </div>

              <div class="question question-10">
                  <div class="question-number">10<span>/</span>15</div>
                  <p>One chance to impress, so I need to talk about my most relevant skills in depth.</p>
                  <ul>
                    <li data-value="true">Do include!</li>
                    <li>Do not include!</li>
                  </ul>
                  <div class="task-3-feedback feedback-success">
                    <h2>Correct!</h2>
                    <p>It is a fine line between focussing on the skills, experience and aspirations you have in the field you are applying for; and also presenting yourself as someone who is well-rounded beyond what you think they are looking for.</p>
                    <p>When you <b>explore your interests</b>, don’t simply mention all the skills you think you have. Think in a broad way about all your experiences and choose to highlight those that relate most readily to the course or job you’re applying to, and demonstrate how you’ve developed, used and continued to strengthen these. </p>
                    <p>Some examples:</p>
                    <p><b>Positions of responsibility</b><br>What did you achieve, how has it improved your self-confidence?</p>
                    <p><b>Young Enterprise Scheme, The Duke of Edinburgh Award, The Duke of York Inspiring Digital Enterprise Award (iDEA)</b><br>What was the biggest challenge, how did you overcome it?</p>
                    <p><b>Volunteering or a part-time job</b><br>What have you observed, what extra responsibilities have you taken on, what skills have you demonstrated yourself?</p>
                    <p>Relate the skill to the application and make it relevant.</p>
                    <a class="btn-next btn-next-10" href="#task">Next</a>
                  </div>
                  <div class="task-3-feedback feedback-fail">
                    <p>Not quite right...</p>
                    <a class="btn-try-again btn-try-again-10" href="#task">Try again</a>
                  </div>
                </div>

                <div class="question question-11">
                    <div class="question-number">11<span>/</span>15</div>
                    <p>Show that you’re a critical thinker.</p>
                    <ul>
                      <li data-value="true">Do include!</li>
                      <li>Do not include!</li>
                    </ul>
                    <div class="task-3-feedback feedback-success">
                      <h2>Correct!</h2>
                      <p>Universities, colleges and companies value candidates who are able to think independently, clearly, analytically and rationally about a certain situations/concepts.</p>
                      <p>You can:</p>
                      <ul class="critical-thinker">
                      <li>Show that you understand the logical connections between ideas</li>
                      <li>Identify, construct and evaluate arguments, whilst not being argumentative </li>
                      <li>Detect inconsistencies and common mistakes </li>
                      <li>Solve problems in a logical manner </li>
                      <li>Work out the relevance and importance of ideas </li>
                    </ul>
                      <p>It doesn’t mean that you remember lots of facts and figures, it means that you can use what you know to solve problems including finding resources to help you.</p>
                      <p>Being able to demonstrate that you’re already working in such a way is a big plus point.</p>
                      <p>The mere fact you are here, on the iDEA platform, doing this badge shows that you are already a critical thinker because you are using this resource to help with your personal statement – so think about other examples where you have done this – maybe by looking at any A-level subjects, assignments, placements or additional studies that have made you think more critically.</p>
                      <a class="btn-next btn-next-11" href="#task">Next</a>
                    </div>
                    <div class="task-3-feedback feedback-fail">
                      <p>Not quite right...</p>
                      <a class="btn-try-again btn-try-again-11" href="#task">Try again</a>
                    </div>
                  </div>

                  <div class="question question-12">
                      <div class="question-number">12<span>/</span>15</div>
                      <p>Include my long-term plan.</p>
                      <ul>
                        <li data-value="true">Do include!</li>
                        <li>Do not include!</li>
                      </ul>
                      <div class="task-3-feedback feedback-success">
                        <h2>Correct!</h2>
                        <p>It is good to mention what your longer-term goals are – if you can do it in an interesting way and have a specific path in mind – try to show a spark of individuality or imagination.</p>

                        <p>If you’re not sure yet, then just talk about what excites you about the thing you are applying for and what you want to gain from the course/job.</p>
                        <p>Most courses are happy for you to take a gap year – but they will want to know, briefly, how you plan to spend it. If there is a glaring gap in your CV, then the personal statement is the ideal place to put the gap into context.</p>
                        <p>Try to be positive – if you have been out of work or on a long-term break from the workplace, then focussing on elements that helped you grow – maybe re-training, voluntary work or some essential life skills.</p>
                        <a class="btn-next btn-next-12" href="#task">Next</a>
                      </div>
                      <div class="task-3-feedback feedback-fail">
                        <p>Not quite right...</p>
                        <a class="btn-try-again btn-try-again-12" href="#task">Try again</a>
                      </div>
                    </div>

                    <div class="question question-13">
                      <div class="question-number">13<span>/</span>15</div>
                      <p>Inject some humour – definitely a good way to mark my statement out from the rest.</p>
                      <ul>
                        <li data-value="true">Do include!</li>
                        <li>Do not include!</li>
                      </ul>
                      <div class="task-3-feedback feedback-success">
                        <p>Not quite right...</p>
                        <a class="btn-try-again btn-try-again-13" href="#task">Try again</a>
                      </div>
                      <div class="task-3-feedback feedback-fail">
                        <h2>Correct!</h2>
                        <p>On balance, this is probably a risk not worth taking.</p>
                        <p>Humour, informality or quirkiness can be effective in the right setting but it’s a big risk, so be careful.</p>
                        <p>Everybody’s sense of humour varies… so how can you judge the mood?<p>
                        <p>The simple answer is you can’t.</p>
                        <p>It can be spectacularly good – or spectacularly bad.</p>

                        <a class="btn-next btn-next-13" href="#task">Next</a>

                      </div>
                    </div>

                    <div class="question question-14">
                      <div class="question-number">14<span>/</span>15</div>
                      <p>Add some negative comments or excuses about things that have happened to me.</p>
                      <ul>
                        <li data-value="true">Do include!</li>
                        <li>Do not include!</li>
                      </ul>
                      <div class="task-3-feedback feedback-success">
                        <p>Not quite right...</p>
                        <a class="btn-try-again btn-try-again-14" href="#task">Try again</a>
                      </div>
                      <div class="task-3-feedback feedback-fail">
                        <h2>Correct!</h2>
                        <p>Although it might feel difficult and unnatural to ‘sell yourself’ in your personal statement, remain positive and don’t feel you need to explain why you have not done something.</p>
                        <p>There is no need to explain why you dropped a school subject or why you left your job in your personal statement, unless it is relevant to the application in hand and helps you explain something important.</p>
                        <p>The main principle is to try to avoid excuses and negativity, this is all about the positive and moving forward.</p>

                        <a class="btn-next btn-next-14" href="#task">Next</a>

                      </div>
                    </div>

                    <div class="question question-15">
                      <div class="question-number">15<span>/</span>15</div>
                      <p>Irrelevant personal facts.</p>
                      <ul>
                        <li data-value="true">Do include!</li>
                        <li>Do not include!</li>
                      </ul>
                      <div class="task-3-feedback feedback-success">
                        <p>Not quite right...</p>
                        <a class="btn-try-again btn-try-again-15" href="#task">Try again</a>
                      </div>
                      <div class="task-3-feedback feedback-fail">
                        <h2>Correct!</h2>
                        <p>Before you write about playing badminton or a school trip you went on in year nine, apply the 'so what?' rule:
                        <p><b>Does it make a useful contribution?</b></p>
                        <p><b>Does it help explain why you should be given a place on the course or get that position?</b></p>
                        <p>If you are unable to use a piece of information to help paint a picture of yourself that showcases the qualities and attributes you want the reader to know about you, simply don't use it.</p>

                        <a class="btn-next btn-next-15" href="#task">Continue</a>

                      </div>
                    </div>

            </div>
          </div>

        </div>
      </section>

      <div class="well-done hide">
        <section class="green">
          <div class="holder">
            <h1 data-aos="fade-up">Well done!</h1>
            <p data-aos="fade-up" data-aos-delay="200">Below is table with a summary of what you have just learnt when writing your personal statement:</p>

            <div class="list">

              <div class="box" data-aos="fade-up" data-aos-delay="300">
                <p class="list-header list-header-include">Do include</p>
                <ul class="include">
                  <li>Explain why you want the course/job</li>
                  <li>Explain why you are right for the course/job</li>
                  <li>Talk about interests and hobbies</li>
                  <li>Talk about transferable skills</li>
                  <li>Talk about relevant skills in depth</li>
                  <li>Show that you’re a critical thinker</li>
                  <li>Explain your long-term plan</li>
                </ul>
              </div>

              <div class="box" data-aos="fade-up" data-aos-delay="300">
                <p class="list-header list-header-dont-include">Don't include</p>
                <ul class="dont-include">
                  <li>Quotations</li>
                  <li>Random lists</li>
                  <li>Clichés</li>
                  <li>Vocabulary you are not familiar with</li>
                  <li>Lies, exaggeration or copy from someone else </li>
                  <li>Humour</li>
                  <li>Irrelevant personal facts</li>
                  <li>Excuses or negative comments</li>
                </ul>
              </div>

            </div>



            <div class="box box-remember box-remember-diagram" data-aos="fade-up" data-aos-delay="1000">
              <div class="remember-diagram">

                  <img class="balloon" src="/badge-assets/{{$url['slug']}}/_global/img/remember.svg" alt="" />
                  <ul class="remember">
                    <li data-aos="fade-right"><span>R</span></li>
                    <li data-aos="fade-right" data-aos-delay="700"><span>e</span></li>
                    <li data-aos="fade-right" data-aos-delay="800"><span>m</span></li>
                    <li data-aos="fade-right" data-aos-delay="900"><span>e</span></li>
                    <li data-aos="fade-right" data-aos-delay="1000"><span>m</span></li>
                    <li data-aos="fade-right" data-aos-delay="1100"><span>b</span></li>
                    <li data-aos="fade-right" data-aos-delay="1200"><span>e</span></li>
                    <li data-aos="fade-right" data-aos-delay="1300"><span>r</span></li>
                  </ul>

              </div>
              <div>
                <img class="hide-mobile diagram" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-2.png" alt="" />
                <img class="hide-desktop diagram" src="/badge-assets/{{$url['slug']}}/_global/img/diagram-mobile.png" alt="" />
              </div>
            </div>
          </div>
        </section>


        <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>

    </div>

</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 3);
  </script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>

@endsection
