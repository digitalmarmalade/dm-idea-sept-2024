@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
@endsection
       
@section('page')
     
<main class="task-background">

    <article class="task-content">
        <header class="task-header">
            <h1 class="task-title">Belbin Quiz</h1>
            <h2 class="task-step">Step <span>2/4</span></h2>
        </header>

        <div class="task-text">
            <p>To determine which team role best describes your personality, consider the statements in each of the sections below. Please note: there are no right or wrong answers, so take as much time as you need to consider each statement honestly.</p>
            <p>Pick the one that you feel best describes your behaviour.</p>
        </div>

        <div class="belbin-quiz-holder " id="quizTop">      

            <div class="belbin-quiz belbin-quiz--question-1">

                <ol class="belbin-quiz-progress reset-list">
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                </ol>

                <fieldset class="belbin-quiz-question question-1">
                    <legend>1. The main contribution I make to a team is...</legend>
                    <p><input type="radio" name="q1" id="q1a" data-role="ri" /><label for="q1a">I think I can quickly see and take advantage of new opportunites</label></p>
                    <p><input type="radio" name="q1" id="q1b" data-role="tw" /><label for="q1b">I can work well with a very wide range of people</label></p>
                    <p><input type="radio" name="q1" id="q1c" data-role="pl" /><label for="q1c">Producing ideas is one of my natural assets</label></p>
                    <p><input type="radio" name="q1" id="q1d" data-role="co" /><label for="q1d">My ability rests in being able to draw people out whenever I detect they have something of value to contribute to group objectives</label></p>
                    <p><input type="radio" name="q1" id="q1e" data-role="cf" /><label for="q1e">My capacity to follow through has much to do with my personal effectiveness</label></p>
                    <p><input type="radio" name="q1" id="q1f" data-role="sh" /><label for="q1f">I am ready to face temporary unpopularity if it leads to worthwhile results in the end</label></p>
                    <p><input type="radio" name="q1" id="q1g" data-role="im" /><label for="q1g">I can usually sense what is unrealistic and unlikely to work</label></p>
                    <p><input type="radio" name="q1" id="q1h" data-role="me" /><label for="q1h">I can offer a reasoned case for alternative courses of action without introducing bias or prejudice</label></p>
                </fieldset>

                <fieldset class="belbin-quiz-question question-2">
                    <legend>2. My shortcomings when working in a team are...</legend>
                    <p><input type="radio" name="q2" id="q2a" data-role="im" /><label for="q2a">I am not at ease unless meetings are well structured and controlled and generally well conducted</label></p>
                    <p><input type="radio" name="q2" id="q2b" data-role="co" /><label for="q2b">I am inclined to be too generous towards others who have a valid viewpoint that has not been given a proper airing</label></p>
                    <p><input type="radio" name="q2" id="q2c" data-role="ri" /><label for="q2c">I have a tendency to talk too much once the group gets on to new ideas</label></p>
                    <p><input type="radio" name="q2" id="q2d" data-role="me" /><label for="q2d">My objective outlook makes it difficult for me to join in readily and enthusiastically with colleagues</label></p>
                    <p><input type="radio" name="q2" id="q2e" data-role="sh" /><label for="q2e">I am sometimes seen as forceful and authoritarian if there is a need to get something done</label></p>
                    <p><input type="radio" name="q2" id="q2f" data-role="tw" /><label for="q2f">I find it difficult to lead from the front, perhaps because I am over-responsive to group atmosphere</label></p>
                    <p><input type="radio" name="q2" id="q2g" data-role="pl" /><label for="q2g">I am apt to get too caught up in ideas that occur to me and so lose track of what is happening</label></p>
                    <p><input type="radio" name="q2" id="q2h" data-role="cf" /><label for="q2h">My colleagues tend to see me as worrying unnecessarily over details and the possibility that things may go wrong</label></p>
                </fieldset>

                <fieldset class="belbin-quiz-question question-3">
                    <legend>3. When involved in a project with other people...</legend>
                    <p><input type="radio" name="q3" id="q3a" data-role="co" /><label for="q3a">I have an aptitude for influencing people without pressurising them</label></p>
                    <p><input type="radio" name="q3" id="q3b" data-role="cf" /><label for="q3b">My general vigilance prevents careless mistakes and omission being made</label></p>
                    <p><input type="radio" name="q3" id="q3c" data-role="sh" /><label for="q3c">I am ready to press for action to make sure that the meeting does not waste time or lose sight of the main objective</label></p>
                    <p><input type="radio" name="q3" id="q3d" data-role="pl" /><label for="q3d">I can be counted on to contribute something original</label></p>
                    <p><input type="radio" name="q3" id="q3e" data-role="tw" /><label for="q3e">I am always ready to back a good suggestion in the common interest</label></p>
                    <p><input type="radio" name="q3" id="q3f" data-role="ri" /><label for="q3f">I am keen to look for the latest in new ideas and developments</label></p>
                    <p><input type="radio" name="q3" id="q3g" data-role="me" /><label for="q3g">I believe my capacity for judgement can help to bring about the right decisions</label></p>
                    <p><input type="radio" name="q3" id="q3h" data-role="im" /><label for="q3h">I can be relied upon to see that all essentional work is organised</label></p>
                </fieldset>

                <fieldset class="belbin-quiz-question question-4">
                    <legend>4. My usual approach to team work is...</legend>
                    <p><input type="radio" name="q4" id="q4a" data-role="tw" /><label for="q4a">I have a quiet interest in getting to know colleagues better</label></p>
                    <p><input type="radio" name="q4" id="q4b" data-role="sh" /><label for="q4b">I am not reluctant to challenge the views of others or hold a minority view myself</label></p>
                    <p><input type="radio" name="q4" id="q4c" data-role="me" /><label for="q4c">I can usually find a line of argument to refute unsound propositions</label></p>
                    <p><input type="radio" name="q4" id="q4d" data-role="im" /><label for="q4d">I think I have a talent for making things work once a plan has to be put into operation</label></p>
                    <p><input type="radio" name="q4" id="q4e" data-role="pl" /><label for="q4e">I have a tendency to avoid the obvious and to come out with the unexpected</label></p>
                    <p><input type="radio" name="q4" id="q4f" data-role="cf" /><label for="q4f">I bring a touch of perfectionism to any job I undertake</label></p>
                    <p><input type="radio" name="q4" id="q4g" data-role="ri" /><label for="q4g">I am ready to make use of contacts outside the group itself</label></p>
                    <p><input type="radio" name="q4" id="q4h" data-role="co" /><label for="q4h">While I am interested in all views I have no hesitation in making up my mind once a decision has to be made</label></p>
                </fieldset>

                <fieldset class="belbin-quiz-question question-5">
                    <legend>5. I gain satisfaction in a job because...</legend>
                    <p><input type="radio" name="q5" id="q5a" data-role="me" /><label for="q5a">I enjoy analysing situations and weighing up all the possible choices</label></p>
                    <p><input type="radio" name="q5" id="q5b" data-role="im" /><label for="q5b">I am interested in finding practical solutions to problems</label></p>
                    <p><input type="radio" name="q5" id="q5c" data-role="tw" /><label for="q5c">I like fostering good working relationships</label></p>
                    <p><input type="radio" name="q5" id="q5d" data-role="sh" /><label for="q5d">I can have a strong influence on decisions</label></p>
                    <p><input type="radio" name="q5" id="q5e" data-role="ri" /><label for="q5e">I can meet people who may have something new to offer</label></p>
                    <p><input type="radio" name="q5" id="q5f" data-role="co" /><label for="q5f">I can get people to agree on a necessary course of action</label></p>
                    <p><input type="radio" name="q5" id="q5g" data-role="cf" /><label for="q5g">I feel in my element when I can give a task my full attention</label></p>
                    <p><input type="radio" name="q5" id="q5h" data-role="pl" /><label for="q5h">I like to find a field that stretches my imagination</label></p>
                </fieldset>

                <fieldset class="belbin-quiz-question question-6">
                    <legend>6. If I am suddenly asked to work on a difficult task with limited time and resources and unfamiliar people...</legend>
                    <p><input type="radio" name="q6" id="q6a" data-role="pl" /><label for="q6a">I would feel like retiring to a corner to devise a way out of the impasse before developing a line</label></p>
                    <p><input type="radio" name="q6" id="q6b" data-role="tw" /><label for="q6b">I would be ready to work with the person who showed the most positive approach</label></p>
                    <p><input type="radio" name="q6" id="q6c" data-role="co" /><label for="q6c">I would find some way of reducing the size of the task by establishing what individuals might best contribute</label></p>
                    <p><input type="radio" name="q6" id="q6d" data-role="cf" /><label for="q6d">My natural sense of urgency would help to ensure that we did not fall behind schedule</label></p>
                    <p><input type="radio" name="q6" id="q6e" data-role="me" /><label for="q6e">I believe I would keep cool and maintain my capacity to think straight</label></p>
                    <p><input type="radio" name="q6" id="q6f" data-role="im" /><label for="q6f">I would retain a steadiness of purpose in spite of the pressures</label></p>
                    <p><input type="radio" name="q6" id="q6g" data-role="sh" /><label for="q6g">I would be prepared to take a positive lead if I felt the group was making no progress</label></p>
                    <p><input type="radio" name="q6" id="q6h" data-role="ri" /><label for="q6h">I would open up discussions with a view to stimulating new thoughts and getting something done</label></p>
                </fieldset>

                <fieldset class="belbin-quiz-question question-7">
                    <legend>7. The main problems I experience when working on a team are...</legend>
                    <p><input type="radio" name="q7" id="q7a" data-role="sh" /><label for="q7a">I am apt to show my impatience with those who are obstructing progress</label></p>
                    <p><input type="radio" name="q7" id="q7b" data-role="me" /><label for="q7b">Others may criticise me for being too analytical and insufficiently intuitive</label></p>
                    <p><input type="radio" name="q7" id="q7c" data-role="cf" /><label for="q7c">My desire to ensure that work is done properly can hold up proceedings</label></p>
                    <p><input type="radio" name="q7" id="q7d" data-role="ri" /><label for="q7d">I tend to get bored rather easily and rely on one or two stimulating members to spark me off</label></p>
                    <p><input type="radio" name="q7" id="q7e" data-role="im" /><label for="q7e">I find it difficult to get started unless the goals are clear</label></p>
                    <p><input type="radio" name="q7" id="q7f" data-role="pl" /><label for="q7f">I am sometimes poor at explaining and clarifying complex points that occur to me</label></p>
                    <p><input type="radio" name="q7" id="q7g" data-role="co" /><label for="q7g">I am conscious of demanding from others the things I cannot do myself</label></p>
                    <p><input type="radio" name="q7" id="q7h" data-role="tw" /><label for="q7h">I hesitate to get my points across when I run up against real opposition</label></p>
                </fieldset>

                <div class="belbin-quiz-final-screen">
                    <h2 class="belbin-quiz-final-screen-title">Your role in a team is best described as:</h2>
                    <div class="belbin-chosen-role belbin-personality-1" id="chosenRole1"></div>

                    <h2 class="belbin-quiz-final-screen-title staggered-entry">Other team roles you'd play well:</h2>
                    <div class="belbin-quiz-other-roles">
                        <div class="belbin-chosen-role belbin-personality-2 staggered-entry" id="chosenRole2"></div>
                        <div class="belbin-chosen-role belbin-personality-3 staggered-entry" id="chosenRole3"></div>
                    </div>
                </div>


            </div><!--/belbin-quiz-->

        </div><!--/belbin-quiz-holder-->

        <a href="#quizTop" id="scrollTrigger"></a>


        <div class="task-text hidden-content" id="outcome">

        <p>So your likely role in a team according to the Belbin quiz would be:</p>
        <div class="select-role-result">
        <p><span id="belbinRole1"></span>, <span id="belbinRole2"></span>, <span id="belbinRole3"></span></p> 
        </div>
        <p>You thought you would most likely be:</p>
        <div class="select-role-result">
        <p><span id="selectedRole1"></span>, <span id="selectedRole2"></span>, <span id="selectedRole3"></span></p> 
        </div>
        <p class="select-role-message" id="successMessage"></p>
        <p class="home-cta staggered-entry"><a href="{{$links['next']}}" class="btn">On to the next step</a></p>

        </div>








    </article>


</main>
        

<div class="belbin-chosen-role hidden-content" id="implementer">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/implementer.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Implementer</h2>
    <p class="belbin-chosen-role-description">An implementer works best when allowed to work in an organised way.</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Good organiser who converts ideas into action. Conservative, dutiful, reliable, predictable.</p>
       <h3>Strengths</h3>
       <p>Organising ability, practical common sense, hard working, self-discipline.</p>
       <h3>Allowable weaknesses</h3>
       <p>Lack of flexibility, unresponsiveness to unproven ideas. Resistant to change.</p>
    </div>
</div>
               
<div class="belbin-chosen-role hidden-content" id="coordinator">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/co-ordinator.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Co-Ordinator</h2>
    <p class="belbin-chosen-role-description">A Co-Ordinator works best when there are clear objectives</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Calm, self-confident, controlled and diplomatic. Focused on overall results and a strong sense of objectives.</p>
       <h3>Strengths</h3>
       <p>A capacity for treating and welcoming all potential contributors on their merits and without prejudice. Gets the team to make decisions.</p>
       <h3>Allowable weaknesses</h3>
       <p>Can be seen as aloof - above the team - or not 'one of the gang'. Seen as manipulative. Off loads detailed work.</p>
    </div>
</div>
               
<div class="belbin-chosen-role hidden-content" id="shaper">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/shaper.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Shaper</h2>
    <p class="belbin-chosen-role-description">A Shaper works best on own initiative and limited compromise.</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Outgoing, dynamic and highly strung. Results oriented and straight to action but pushy with others. Sprint to action.</p>
       <h3>Strengths</h3>
       <p>Drive and a readiness to challenge inertia, ineffectiveness, complacency or self-deception.</p>
       <h3>Allowable weaknesses</h3>
       <p>Will do what it takes for results even if it upsets others. Prone to provocation, irritation and impatience. Bossy?</p>
    </div>
</div>

<div class="belbin-chosen-role hidden-content" id="plant">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/plant.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Plant</h2>
    <p class="belbin-chosen-role-description">A Plant works best on their own.</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Individualistic, intelligent and creative. Serious minded but unorthodox.</p>
       <h3>Strengths</h3>
       <p>Imagination, intellect, knowledge. Ideas and original thought for problem solving.</p>
       <h3>Allowable weaknesses</h3>
       <p>Not a team player. Pre-occupied. Up in the clouds, inclined to disregard practical details or protocol.</p>
    </div>
</div>
               
<div class="belbin-chosen-role hidden-content" id="resourceInvestigator">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/resource-investigator.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Resource Investigator</h2>
    <p class="belbin-chosen-role-description">A Resource Investigator works best when free to get out and meet people</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Extroverted, enthusiastic, curious, communicative. Optimistic and good at networking.</p>
       <h3>Strengths</h3>
       <p>A capacity for contacting people and exploring anything new. An ability to respond to challenge.</p>
       <h3>Allowable weaknesses</h3>
       <p>Liable to lose interest once the initial fascination has passed. Easily bored and need recognition.</p>
    </div>
</div>
               
<div class="belbin-chosen-role hidden-content" id="monitorEvaluator">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/monitor-evaluator.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Monitor Evaluator</h2>
    <p class="belbin-chosen-role-description">A Monitor Evaluator works best when allowed to analyse facts</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Analytical, unemotional and prudent. Likes to use facts.</p>
       <h3>Strengths</h3>
       <p>Judgement, discretion and hard-headedness.</p>
       <h3>Allowable weaknesses</h3>
       <p>Lack inspiration or the ability to motivate others. Lack humour and enthusiasm.</p>
    </div>
</div>

<div class="belbin-chosen-role hidden-content" id="teamWorker">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/teamworker.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Team Worker</h2>
    <p class="belbin-chosen-role-description">A Team Worker works best when given time and freedom to develop good relations</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Socially oriented, rather mild, sensitive. Loyal and concerned.</p>
       <h3>Strengths</h3>
       <p>An ability to respond to people and to situations and to promote team spirit.</p>
       <h3>Allowable weaknesses</h3>
       <p>Put people before results. Indecisiveness at moments of crisis.</p>
    </div>
</div>
               
<div class="belbin-chosen-role hidden-content" id="completerFinisher">
    <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/completer-finisher.gif" alt="" />
    <h2 class="belbin-chosen-role-title">Completer Finisher</h2>
    <p class="belbin-chosen-role-description">A Completer Finisher works best when high standards are expected and checked</p>
    <div class="belbin-chosen-role-traits">
       <h3>Typical features</h3>
       <p>Meticulous and set high standards for self and others. Painstaking, orderly and conscientious.</p>
       <h3>Strengths</h3>
       <p>A capacity for follow-through. Perfectionist. Self-driven. Delivers on time.</p>
       <h3>Allowable weaknesses</h3>
       <p>A tendency to worry about small things. A reluctance to 'let go'. Intolerant of the failure of others.</p>
    </div>
</div>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
    oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
</script>
<script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-2.js', 'min' => false))</script>


@endsection