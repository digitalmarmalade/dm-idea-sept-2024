@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
@endsection
       
@section('page')
     
<main class="task-background">

    <article class="task-content">
        <header class="task-header">
        <h1 class="task-title">Team Dynamics</h1>
        <h2 class="task-step">Step <span>3/4</span></h2>
        </header>

        <p>Good teamwork is based on having the right structures in place to enable the team to work as well as possible. This is based on four key principles:</p>

        <div class="team-dynamic staggered-entry">
           <img src="/badge-assets/{{$url['slug']}}/_global/img/reasons/Appreciation.gif" alt="" class="team-dynamic-image" />
           <h2 class="team-dynamic-title"><span class="big-number">1</span> Appreciation</h2>
           <p>Recognising good work, and celebrating this, saying thank you and well done. Learning from each other, showing you care, being flexible to what teammates want to do, having treats and generally being kind are also very important.</p>
        </div>

        <div class="team-dynamic team-dynamic--text-left staggered-entry">
           <img src="/badge-assets/{{$url['slug']}}/_global/img/reasons/Belonging.gif" alt="" class="team-dynamic-image" />
           <h2 class="team-dynamic-title"><span class="big-number">2</span> Belonging</h2>
           <p>Miscommunication happens; especially when things are busy, short stand up meetings or lunch together help avoid this. Having a way for teammates to discuss frustrations is crucial. Leaders thinking about the best interests of their teammates and being supportive / taking on tasks is important.</p>
        </div>

        <div class="team-dynamic staggered-entry">
           <img src="/badge-assets/{{$url['slug']}}/_global/img/reasons/Purpose.gif" alt="" class="team-dynamic-image" />
           <h2 class="team-dynamic-title"><span class="big-number">3</span> Purpose</h2>
           <p>Teammates want to feel what they are doing is worthwhile. They want to see where things are going with what they are doing and what they might do in the future. Being able to feel a sense of progress and personal development in tasks is important.</p>
        </div>

        <div class="team-dynamic team-dynamic--text-left staggered-entry">
           <img src="/badge-assets/{{$url['slug']}}/_global/img/reasons/Enjoyment.gif" alt="" class="team-dynamic-image" />
           <h2 class="team-dynamic-title"><span class="big-number">4</span> Enjoyment</h2>
           <p>Being in a team should be fun. If it's not then something is wrong. Teamwork should allow for breaks and opportunities to step away. Personal lives are important and teamwork shouldn't regularly impact on this.</p>
        </div>

        <h2 class="morale-game-title staggered-entry">Manage a team</h2>

        <p class="staggered-entry">Try and keep the morale of your team up.</p>


        <div class="morale-game morale-game--question-1 staggered-entry" id="quizTop">

            <div class="morale-ometer good">
              <h2>Morale</h2>
               <div class="morale-bar" id="moraleBar">
                   <div class="morale-face"></div>
               </div>
            </div>

            <div class="morale-game-feedback" id="feedbackHolder">

               <div id="feedback" class="feedback-message"></div>
               <p><a href="#" class="btn feedback-button">Continue</a></p>



            </div>

            <div class="morale-game-question morale-game-question-1">
               <p>Your team has successfully delivered its latest project on time and on budget, but feedback has been thin on the ground. Indeed, the only internal feedback is from the Head of Marketing who says she isn't too sure about the colours used. Morale is dropping.</p>
               <p>What do you do?</p>

               <div class="morale-game-options">
                   <a href="#" data-value="y">Get the team together to tell them how well they have performed and have a celebration of a job well done.</a>
                   <a href="#" data-value="n">Brief the team on the next project as though the last one didn't happen.</a>
               </div>
            </div><!--/morale-game-question-->

            <div class="morale-game-question morale-game-question-2">
               <p>Some of the team have been grumbling that they don't understand the decisions by the management team. They can't understand why they're doing what they are doing.</p>
               <p>What do you do?</p>

               <div class="morale-game-options">
                   <a href="#" data-value="n">Nothing. The team doesn't need to understand the thinking behind decisions, they just have to work hard.</a>
                   <a href="#" data-value="y">Call a meeting to explain and discuss the direction the project is going in. Let your team air their concerns and attempt to address them.</a>
               </div>
            </div><!--/morale-game-question-->

            <div class="morale-game-question morale-game-question-3">
               <p>It looks like the researchers in your team are going to have to pull a late night to hit the deadline.</p>
               <p>How can you maintain team spirit?</p>

               <div class="morale-game-options">
                   <a href="#" data-value="y">Order some pizzas and help out where you can until they are finished.</a>
                   <a href="#" data-value="n">Go home bang on time and have a nice evening while your team get on with the job.</a>
               </div>
            </div><!--/morale-game-question-->

            <div class="morale-game-question morale-game-question-4">
               <p>Everyone is flat out and working hard to complete the project, but you've noticed that some work is having to be redone, as departments are pulling in slightly different directions</p>
               <p>How can you maintain team spirit?</p>

               <div class="morale-game-options">
                   <a href="#" data-value="y">Call regular meetings with department heads to discuss upcoming tasks and responsibilities.</a>
                   <a href="#" data-value="n">Give the individuals involved a dressing down for wasting effort and tell them to sharpen up.</a>
               </div>
            </div><!--/morale-game-question-->

            <div class="morale-game-question morale-game-question-5">
               <p>There's been a few late nights for the team recently. People have been working hard to hit deadlines.</p>
               <p>What do you do next?</p>

               <div class="morale-game-options">
                   <a href="#" data-value="n">Crack on with the hard work. Those deadlines won't hit themselves.</a>
                   <a href="#" data-value="y">Let people finish early today to make up for the late nights. They'll be all the better for it come Monday.</a>
               </div>
            </div><!--/morale-game-question-->

            <div class="morale-game-question morale-game-question-6">
               <p>One of your team has shown a real interest in a new skill during the project.</p>
               <p>What do you do?</p>

               <div class="morale-game-options">
                   <a href="#" data-value="n">Be pleased that they're showing an interest, but expect them to continue developing the skill in their own time.</a>
                   <a href="#" data-value="y">Send them on a training course to develop their skills.</a>
               </div>
            </div><!--/morale-game-question-->

            <div class="morale-game-conclusion">
               <p>Your team's final morale is:</p>
               <p class="final-team-morale" id="finalMorale"></p>
               <p class="morale-success-message" id="successMessage"></p>

               <p><a href="{{$links['next']}}" class="btn">Let's move on to Teamwork</a></p>

            </div><!--/morale-game-question-->
        </div><!--/morale-game-holder-->
    </article>


</main>

<a href="#quizTop" id="scrollTrigger"></a>   

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
    oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
</script>
<script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-3.js', 'min' => false))</script>


@endsection