@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
@endsection
       
@section('page')
     
<main class="task-background">

    <article class="task-content">
        <header class="task-header">
            <h1 class="task-title">Team roles</h1>
            <h2 class="task-step">Step <span>1/4</span></h2>
        </header>

        <div class="task-text">

            <p>What role would you be best suited to in a team? Would you like to be in charge? Would you like to hide in a corner? Whatever you would like to do there is a role for you.</p>

            <p>There are many different ways of analysing personalities, behaviours and team dynamics, including:</p>

            <ul class="team-quiz-types">
            <li><strong>The Myers-Briggs Type Indicator</strong> which categorises team members into 16 different personality types.</li>
            <li><strong>The Clifton Strengths Finder</strong> which identifies individuals' talents and natural gifts.</li>
            <li><strong>The DiSC Profile</strong> which analyses your personality based on traits such as Dominance, Influence, Steadiness and Conscientousness.</li>
            <li><strong>The Colour Code</strong> which groups everyone into four colours based on their base motivations: reds (power), blues (intimacy), whites (peace) and yellows (fun).</li>
            </ul>
            <p>Each of these tests might be useful in different ways. The method that we're going to use for this badge is the <strong>Belbin Test</strong>.</p>

            <h2 class="belbin-quiz-h2">The Belbin Test</h2>
            <p>The Belbin Test looks at the way people behave in teams. It's used around the world to help organisations succeed.  The test works by identifying the various roles that individuals find themselves naturally falling into when they work together.</p>
            <div class="belbin-portrait"><figure><img src="/badge-assets/{{$url['slug']}}/_global/img/artist.gif" alt="" /><figcaption>Dr Meredith Belbin</figcaption></figure></div>
            <p>Invented by psychologist Dr Meredith Belbin in the 1970s, the test uses 'Team Role' theory to help show how different people have 'a tendency to behave, contribute and interrelate with others in a particular way'. </p>
            <p>Getting the mix and balance right among group members is key to building and sustaining successful teams.</p>

            <p>The Belbin Test suggests the characteristics required for a successful team fall into 9 behaviour types. These are as follows:</p>

        </div>

        <div class="team-roles clearfix">

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/completer-finisher.gif" alt="" />
                </div>
                <h2 class="team-role-title">Completer Finisher</h2>
                <p class="team-role-description">Checks everything is accurate.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/co-ordinator.gif" alt="" />
                </div>
                <h2 class="team-role-title">Co-Ordinator</h2>
                <p class="team-role-description">Splits up tasks between team members.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/implementer.gif" alt="" />
                </div>
                <h2 class="team-role-title">Implementer</h2>
                <p class="team-role-description">Plans out the team's work in an efficient way.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/monitor-evaluator.gif" alt="" />
                </div>
                <h2 class="team-role-title">Monitor Evaluator</h2>
                <p class="team-role-description">Decides on what are the best ways to progress.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/plant.gif" alt="" />
                </div>
                <h2 class="team-role-title">Plant</h2>
                <p class="team-role-description">Comes up with solutions to difficult problems and innovative ideas.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/resource-investigator.gif" alt="" />
                </div>
                <h2 class="team-role-title">Resource Investigator</h2>
                <p class="team-role-description">Goes out and finds interesting ideas for the team to discuss.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/shaper.gif" alt="" />
                </div>
                <h2 class="team-role-title">Shaper</h2>
                <p class="team-role-description">Completely focussed on continuing to get things done.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/specialist.gif" alt="" />
                </div>
                <h2 class="team-role-title">Specialist</h2>
                <p class="team-role-description">Provide specific technical knowledge.</p>        
            </div>

            <div class="team-role staggered-entry">
                <div class="team-role-image-holder">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/team-roles/teamworker.gif" alt="" />
                </div>
                <h2 class="team-role-title">Teamworker</h2>
                <p class="team-role-description">Glue the team together and support teammates to complete work.</p>        
            </div>

        </div>

        <div class="task-text">

        <p class="staggered-entry">Most people are a blend of several behaviours and can specialise in one or more of these to fit in with the other team members.</p> 
        <p class="staggered-entry">Having read the roles above, which three do you think most suit you?</p>
        <form>
            <div class="select-role-game staggered-entry">
                <p>
                    <label>1</label>
                    <select name="selectTeamRole1" id="selectTeamRole1">
                    <option>Select a role</option>
                    <option>Completer Finisher</option>
                    <option>Co-Ordinator</option>
                    <option>Implementer</option>
                    <option>Monitor Evaluator</option>
                    <option>Plant</option>
                    <option>Resource Investigator</option>
                    <option>Shaper</option>
                    <option>Specialist</option>
                    <option>Team Worker</option>
                    </select>
                </p>
                <p>
                    <label>2</label>
                    <select name="selectTeamRole2" id="selectTeamRole2">
                    <option>Select a role</option>
                    <option>Completer Finisher</option>
                    <option>Co-Ordinator</option>
                    <option>Implementer</option>
                    <option>Monitor Evaluator</option>
                    <option>Plant</option>
                    <option>Resource Investigator</option>
                    <option>Shaper</option>
                    <option>Specialist</option>
                    <option>Team Worker</option>
                    </select>
                </p>
                <p>
                    <label>3</label>
                    <select name="selectTeamRole3" id="selectTeamRole3">
                    <option>Select a role</option>
                    <option>Completer Finisher</option>
                    <option>Co-Ordinator</option>
                    <option>Implementer</option>
                    <option>Monitor Evaluator</option>
                    <option>Plant</option>
                    <option>Resource Investigator</option>
                    <option>Shaper</option>
                    <option>Specialist</option>
                    <option>Team Worker</option>
                    </select>
                </p>
            </div>

            <div id="moveOn">
                <p class="staggered-entry" style="margin-bottom: 2rem;">Let's take an actual Belbin Test to see what sort of team roles that suggests you most suit.</p>
                <p class="home-cta staggered-entry"><a href="{{$links['next']}}#1" class="btn">Take a Belbin quiz</a></p>
            </div>

        </form>
        </div>






    </article>


</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>
<script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-1.js', 'min' => false))</script>


@endsection