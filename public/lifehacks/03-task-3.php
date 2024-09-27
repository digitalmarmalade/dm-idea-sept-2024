<?php

// include('auth/isauthenticated.php');

// include('includes/authtoken.php');
session_start();

require '../../vendor/autoload.php';

if (isset($_SESSION['oauth2_access_token'])) {
    $client = new \GuzzleHttp\Client();
    $res = $client->request(
        'POST',
        'https://idea.org.uk/api/progress',
        [
            'headers' => [
                'Authorization' => 'Bearer '.$_SESSION['oauth2_access_token'],
            ],
            'json' => [
                'progress' => '3',
            ],
        ]
    );
} else {
    $state = hash('sha256', microtime(true).rand()); // Generate a random state
    $_SESSION['oauth2_state'] = $state; // Save the state

    $params = [
        'response_type' => 'code',
        'client_id' => 'G6gLEnsAKOUFVOrFh5SAxFtlh8hrzPKw',
        'redirect_uri' => 'https://dm.idea.org.uk/lifehacks/auth/callback.php',
        'scope' => 'openid',
        'state' => $state,
        'prompt' => 'none',
    ];

    $authUrl = 'https://idea.org.uk/oauth/authorize?'.http_build_query($params);

    header("Location: {$authUrl}"); // Redirect to Auth0

    exit;
}

?>

<!doctype html>

<html class="no-js" lang="en">

<?php include 'includes/head.php'; ?>

    <body>

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



        <!-- Add your site or application content here -->

        <div class="animsition">

        

                <div class="holder">

        

                <div class="explanation-intro">

                <h1 class="page-heading"><span class="argon">Life Hack 3 of 5</span></h1>

                <p>Ok – let’s move this along a bit, and see if we can personalise and automate the message itself using variables.</p>

                </div>

                </div>

                

                

                <div class="gradient-holder">

                

                <div class="information-pullout">

                

                <h2>What are Variables?</h2>

                

                <p>Variables are little bits of code that will automatically insert some text into your Trigger or Action when the algorithm is triggered.</p>

                <p>Variables start and end with two curly brackets: <strong>{{</strong><em>variable name</em><strong>}}</strong></p>

                <p>When the system sees the two opening curly brackets, it knows that the next part of the Trigger or Action will have to be inserted by the programme. This is done whilst the programme is running i.e. it is dynamically generated. The things within the curly brackets are called variables because they can vary every time the programme runs. When the system reaches the closing curly brackets, it knows that the sentence will continue as normal after this.</p>

                

                </div>

                



                </div>

                

                

                

                

                <div class="drag-drop-game">

                <p>Drag and drop the variables next to what will be dynamically generated when the algorithm is triggered.</p>

                

                <div class="drag-container clearfix">

                

                

                

                    <div class="drop-items">

                    

                    <h2 class="answers-heading">Definitions</h2>

                     <div class="drop-sentence">

                     The Current Time

                        <div id="droppable1" class="drop-area">

                          <p></p>

                        </div>

                     </div>

                     <div class="drop-sentence">

                     A link to my Location

                        <div id="droppable2" class="drop-area">

                          <p></p>

                        </div>

                     </div>

                     <div class="drop-sentence">

                     A map image of my Location

                        <div id="droppable3" class="drop-area">

                          <p></p>

                        </div>

                     </div>

                     <div class="drop-sentence">

                     Missed call number

                        <div id="droppable4" class="drop-area">

                         <p></p> 

                        </div>

                    </div>

                    

                    </div>

                    

                    <div class="drag-items">

                    

                        <div class="drag-items-wrapper">

                        

                        <h2 class="answers-heading">Variables</h2>

                        

                        <div id="draggableCurrentLocation" class="drag-item">

                          <p>{{CurrentLocation}}</p>

                        </div>

                    

                        <div id="draggableCurrentLocationImg" class="drag-item">

                          <p>{{CurrentLocationImg}}</p>

                        </div>

                        

                        <div id="draggableOccurredAt" class="drag-item">

                          <p>{{OccurredAt}}</p>

                        </div>                

                         

                        <div id="draggableMissedCall" class="drag-item">

                          <p>{{NumberMissedCall}}</p>

                        </div>

                        

                        

                        

                        </div>

                    

                    </div>

                

                </div>

                

                <a href="#task3" id="task3Trigger"></a>

                

                

                

                </div>

                

                <div class="task-3" id="task3">

                

                <div class="task-3-intro">

                <p class="correct-message">

                <span class="tick-holder"><?php include 'includes/svg-tick.php'; ?></span>

                That's right!</p>

                

                <div class="holder">

                <div class="explanation-intro">

                

                

                <p>So let's use a variable in a real life scenario:

                <span class="the-task">When my phone battery gets to 1%, I’d like to automatically send my parents a map image of where I am, so they know I'm ok.</span></p>

                </div>

                

                </div>

                

                </div><!--/task-3-intro-->

                

                <div class="gradient-holder">

                <div class="holder">

                

                <div class="what-technology visible" id="whatTech">

                

                <h2 class="task-heading">What technology should trigger the Life Hack?</h2>

                <p class="sub-task-heading">(The Channel for the Trigger)</p>

                

                <ul class="task-icon-list what-technology-options clearfix">

                    <li><a href="#whenUse" data-value="twitter"><span class="fi flaticon-social-2"></span> Twitter</a></li>

                    <li><a href="#whenUse" data-value="facebook" data-text="Facebook"><span class="fi flaticon-social-1"></span> Facebook</a></li>

                    <li><a href="#whenUse" data-value="instagram" data-text="Instagram"><span class="fi flaticon-social"></span> Instagram</a></li>

                    <li><a href="#whenUse" data-value="device" data-text="Phone"><span class="fi flaticon-telephone"></span> Phone</a></li>

                    <li><a href="#whenUse" data-value="sms" data-text="SMS"><span class="fi flaticon-sms"></span> SMS</a></li>

                    <li><a href="#whenUse" data-value="location" data-text="Location"><span class="fi flaticon-location"></span> Location</a></li>

                    <li><a href="#whenUse" data-value="battery" data-text="Battery"><span class="fi flaticon-charge"></span> Battery</a></li>

                </ul>

                

                

                </div><!--/what-technology-->

                

                

                

                <div class="when-use" id="whenUse">

                

                <h2 class="task-heading">When should you use <span>the technology?</span></h2>

                <p class="sub-task-heading">(The Trigger)</p>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="twitter">

                    <li><a href="#whenUse" data-value="leaveHome">

                    <h3>When I post a new Tweet</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveHome">

                    <h3>When I post a new Tweet with the hashtag #partytime</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveHome">

                    <h3>When I post a new Tweet when I'm in town</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveHome">

                    <h3>When someone mentions me in a Tweet</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveHome">

                    <h3>When I get a new follower</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveHome">

                    <h3>When one of my Tweets gets liked</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="facebook">

                    <li><a href="#howUse" data-value="updateStatus">

                    <h3>When I update my status</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="updateStatusHashtag">

                    <h3>When I update my status with the hashtag #partytime</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="postPhoto">

                    <h3>When I post a photo</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="taggedPhoto">

                    <h3>When I'm tagged in a photo</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="addFriend">

                    <h3>When I add a friend on Facebook</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="postPhotoArea">

                    <h3>When I post a photo when I'm at the sports centre</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="instagram">

                    <li><a href="#howUse" data-value="postPhoto">

                    <h3>When I post a new photo</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="iPostPhotoHashtag">

                    <h3>When I post a new photo with the hashtag #partytime</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="likePhoto">

                    <h3>When I like a photo</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="postPhotoHashtag">

                    <h3>When anyone posts a photo with the hashtag #partytime</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="iPostVideoHashtag">

                    <h3>When I post a video with the hashtag #partytime</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="postVideoHashtag">

                    <h3>When anyone posts a video with the hashtag #partytime</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="device">

                    <li><a href="#howUse" data-value="phone">

                    <h3>When I miss a call</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="phone">

                    <h3>When I place a call</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="phone">

                    <h3>When I answer a call</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="phone">

                    <h3>When I call a specific number</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="phone">

                    <h3>When I answer a call from a specific number</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="phone">

                    <h3>When I miss a call from a specific number</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="sms">

                    <li><a href="#howUse" data-value="sms">

                    <h3>When I receive an SMS</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="sms">

                    <h3>When I send an SMS including the words 'House Party'</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="sms">

                    <h3>When I send an SMS</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="sms">

                    <h3>When I receive an SMS from a specific number</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="sms">

                    <h3>When I send an SMS to a specific number</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="sms">

                    <h3>When I get an SMS including the words 'House Party'</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="location">

                    <li><a href="#howUse" data-value="location">

                    <h3>When I leave home</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="location">

                    <h3>When I leave school</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="location">

                    <h3>When I leave the sports centre</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="location">

                    <h3>When I arrive home</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="location">

                    <h3>When I arrive at school</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="location">

                    <h3>When I arrive at the sports centre</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options when-use-options hidden-options" id="battery">

                    <li><a href="#howUse" data-value="batteryRunsOut">

                    <h3>When battery runs out</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="batteryBelow10">

                    <h3>When battery drops below 10%</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="batteryCharged">

                    <h3>When battery is fully charged</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="batteryPluggedIn">

                    <h3>Device is plugged in</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="batteryUnplugged">

                    <h3>Device is unplugged</h3>

                    </a></li>

                    <li><a href="#howUse" data-value="batteryBelow1">

                    <h3>When battery drops to 1%</h3>

                    </a></li>                    

                </ul>

                

                

                </div><!--/when-use-->

                

                <div class="how-use" id="howUse">

                

                <h2 class="task-heading">How should you use <span>the technology?</span></h2>

                <p class="sub-task-heading">(The Channel for the Action)</p>

                

                <ul class="task-icon-list how-use-options clearfix">

                    <li><a href="#whatDo" data-value="facebookUse" data-text="Facebook"><span class="fi flaticon-social-1"></span> Facebook</a></li>

                    <li><a href="#whatDo" data-value="phoneUse" data-text="Phone"><span class="fi flaticon-telephone"></span> Phone</a></li>

                    <li><a href="#whatDo" data-value="smsUse" data-text="SMS"><span class="fi flaticon-sms"></span> SMS</a></li>

                    <li><a href="#whatDo" data-value="remindersUse" data-text="Reminders"><span class="fi flaticon-music"></span> Reminders</a></li>

                    <li><a href="#whatDo" data-value="contactsUse" data-text="Contacts"><span class="fi flaticon-business"></span> Contacts</a></li>

                    <li><a href="#whatDo" data-value="printerUse" data-text="Printer"><span class="fi flaticon-printer"></span> Printer</a></li>

                </ul>

                

                </div><!--/how-use-->

                

                <div class="what-do" id="whatDo">

                

                <h2 class="task-heading">What should the technology do?</h2>

                <p class="sub-task-heading">(The Action)</p>

                

                <ul class="customise-trigger-options-list task-options what-do-options hidden-options" id="facebookUse">

                    <li><a href="#complete" data-value="facebook">

                    <h3>Create status message</h3>

                    </a></li>

                    <li><a href="#complete" data-value="facebook">

                    <h3>Create a link post</h3>

                    </a></li>

                    <li><a href="#complete" data-value="facebook">

                    <h3>Upload a photo</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options what-do-options hidden-options" id="phoneUse">

                    <li><a href="#complete" data-value="phone">

                    <h3>Mute ringtone</h3>

                    </a></li>

                    <li><a href="#complete" data-value="phone">

                    <h3>Turn on Bluetooth</h3>

                    </a></li>

                    <li><a href="#complete" data-value="phone">

                    <h3>Set Ringtone Volume</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options what-do-options hidden-options" id="smsUse">

                    <li class="full-width">

                    

                    

                    <div class="available-variables">

                    

                    <p>Drop the correct variable into your text below.</p>

                    

                        <div id="draggableCurrentLocation2" class="drag-item">

                          <p>{{CurrentLocation}}</p>

                        </div>

                    

                        <div id="draggableMissedCall2" class="drag-item">

                          <p>{{NumberMissedCall}}</p>

                        </div>

                        

                        <div id="draggableOccurredAt2" class="drag-item">

                          <p>{{OccurredAt}}</p>

                        </div>                

                         

                        <div id="draggableCurrentLocationImg2" class="drag-item">

                          <p>{{CurrentLocationImg}}</p>

                        </div>

                    

                    </div>

                    

                    <div class="text-sentence">

                        <p>Just to let you know that my phone is just about to run out of battery - I'm currently here:</p>

                        <div id="droppable5" class="drop-area"></div>

                    </div>

                    

                    

                    

                    </li>

                </ul>

                

                <a href="#complete" id="validateTrigger"></a>

                

                <ul class="customise-trigger-options-list task-options what-do-options hidden-options" id="remindersUse">

                    <li><a href="#complete" data-value="reminder">

                    <h3>Set a reminder</h3>

                    </a></li>

                    <li><a href="#complete" data-value="reminder">

                    <h3>Delete a reminder</h3>

                    </a></li>

                    <li><a href="#complete" data-value="reminder">

                    <h3>Postpone a reminder</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options what-do-options hidden-options" id="contactsUse">

                    <li><a href="#complete" data-value="existingContact">

                    <h3>Add to an existing contact</h3>

                    </a></li>

                    <li><a href="#complete" data-value="newContact">

                    <h3>Save a new contact</h3>

                    </a></li>

                    <li><a href="#complete" data-value="deleteContact">

                    <h3>Delete a contact</h3>

                    </a></li>

                </ul>

                

                <ul class="customise-trigger-options-list task-options what-do-options hidden-options" id="printerUse">

                    <li><a href="#complete" data-value="printPhoto">

                    <h3>Print photo</h3>

                    </a></li>

                    <li><a href="#complete" data-value="printEmail">

                    <h3>Print email or message</h3>

                    </a></li>

                    <li><a href="#complete" data-value="printPdf">

                    <h3>Print PDF</h3>

                    </a></li>

                </ul>

                

                </div><!--/how-use-->

                

               

                </div>

                </div>

                

                </div><!--/task-3-->

                

                

                

                <div id="complete">

                

                <div class="first-part-complete">

                

                <p class="correct-message">

                <span class="tick-holder"><?php include 'includes/svg-tick.php'; ?></span>

                That's right!</p>

                

                <div class="holder">

                

                

                <div class="lets-move-on visible">

                <p>Very good! You have variables worked out!</p>

                

                <p>Let's move on to 'daisy chaining' your algorithms.</p>

                <p class="cta"><a href="04-task-4.php" class="btn btn-primary animsition-link">On to the next task</a></p>

                </div>





                

                </div>

                

                

                

                </div><!--/first-part-complete-->

                

                <div class="first-part-incomplete">

                

                <p class="correct-message incorrect-message">

                <span class="tick-holder cross-holder">

<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

	 viewBox="0 0 220.176 220.176" style="enable-background:new 0 0 220.176 220.176;" xml:space="preserve">

<g>

	<g>

		<g>

			<path style="fill:#A81518;" d="M131.577,110.084l84.176-84.146c5.897-5.928,5.897-15.565,0-21.492

				c-5.928-5.928-15.595-5.928-21.492,0l-84.176,84.146L25.938,4.446c-5.928-5.928-15.565-5.928-21.492,0s-5.928,15.565,0,21.492

				l84.146,84.146L4.446,194.26c-5.928,5.897-5.928,15.565,0,21.492c5.928,5.897,15.565,5.897,21.492,0l84.146-84.176l84.176,84.176

				c5.897,5.897,15.565,5.897,21.492,0c5.897-5.928,5.897-15.595,0-21.492L131.577,110.084z"/>

		</g>

	</g>

</svg></span>

                That's wrong!</p>

                

                <div class="holder">

                

                

                <div class="lets-move-on visible">

                <p>Let's have a look at where you went wrong;</p>

                

                <table class="performance-table">

                    <thead>

                    <tr>

                        <th>&nbsp;</th>

                        <th>You chose</th>

                        <th>Correct Answer</th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr id="answer1Row">

                        <th class="tech">The Trigger Channel</th>

                        <td id="answer1Text">Battery</td>

                        <td id="answer1Answer">When my <strong>phone battery</strong> gets to 1%, I’d like to automatically send my parents a map image of where I am, so they know I'm ok.</td>

                    </tr>

                    <tr id="answer2Row">

                        <th class="event">The Trigger</th>

                        <td id="answer2Text">When battery drops to 1%</td>

                        <td id="answer2Answer">When <strong>my phone battery gets to 1%</strong>, I’d like to automatically send my parents a map image of where I am, so they know I'm ok.</td>

                    </tr>

                    <tr id="answer3Row">

                        <th class="tool">The Action Channel</th>

                        <td id="answer3Text">SMS</td>

                        <td id="answer3Answer">When my phone battery gets to 1%, <strong>I’d like to automatically send my parents</strong> a map image of where I am, so they know I'm ok.</td>

                    </tr>

                    <tr id="answer4Row">

                        <th class="action">The Action</th>

                        <td id="answer4Text">Send a text</td>

                        <td id="answer4Answer">When my phone battery gets to 1%, I’d like to automatically send my parents <strong>a map image of where I am</strong>, so they know I'm ok.</td>

                    </tr>

                    </tbody>

                </table>

                

                <p>Give it another go to get this right before we move on. </p>

                <p class="cta"><a href="03-task-3.php" class="btn btn-primary animsition-link">Try again</a></p>

                </div>





                

                </div>

                

                

                

                </div><!--/first-part-incomplete-->

                

                </div>

        



        



        

     

        

        </div><!--/animsition-->

        

        <div class="fixed-task">

<strong>Task:</strong> When my phone battery gets to 1%, I’d like to automatically send my parents a map image of where I am, so they know I'm ok.

</div>

<?php include 'includes/lockup.php'; ?>

<?php include 'includes/commonJavascript.php'; ?>



<script>

var config = { reset: true, vFactor: 0.20, mobile: false, delay: 'always' }

window.sr = new scrollReveal();

</script>



<script>



var answer1 = false,

answer2 = false,

answer3 = false,

answer4 = false,

answer1Text,

answer2Text,

answer3Text,

answer4Text;







$( ".what-technology-options a" ).click(function() {

    

    $('.first-part-incomplete, .first-part-complete').removeClass('visible');

    $('.what-technology-options li').removeClass('on');

    $('.when-use .hidden-options').hide();

   

    dataValue = $(this).data('value');

    dataText = $(this).data('text');

    $(this).closest('li').addClass('on');

    

    if(dataValue==='battery') {

        answer1 = true;   

    }

    answer1Text = dataText;

    

    $('.when-use').addClass('visible');

    $('#'+dataValue).fadeIn();

    

});



$( ".when-use-options a" ).click(function() {

    

    $('.first-part-incomplete, .first-part-complete').removeClass('visible');

    $('.when-use-options li').removeClass('on');

    

    dataValue = $(this).data('value');

    $(this).closest('li').addClass('on');    

    

    if(dataValue==='batteryBelow1') {

       answer2 = true; 

    }

    answer2Text = $(this).find('h3').text();

    $('.how-use').addClass('visible');

    

});



$( ".how-use-options a" ).click(function() {

    

    $('.first-part-incomplete, .first-part-complete').removeClass('visible');

    $('.how-use-options li').removeClass('on');

    $('.what-do .hidden-options').hide();

    

    dataValue = $(this).data('value');

    dataText = $(this).data('text');

    $(this).closest('li').addClass('on');

    

    if(dataValue==='smsUse') {

        answer3 = true;        

    }

    answer3Text = dataText;

    $('.what-do').addClass('visible');

    $('#'+dataValue).fadeIn();

    

});



$( ".what-do-options a" ).click(function() {



    $('.first-part-incomplete, .first-part-complete').removeClass('visible');

    $('.what-do-options li').removeClass('on');  

    $(this).closest('li').addClass('on');

    

    dataValue = $(this).data('value');

    answer4 = false;

    

   

    answer4Text = $(this).find('h3').text();

    $('.fixed-task').addClass('no-longer-needed');

    

    

    if(answer1===true && answer2===true && answer3===true && answer4===true) {

       $('.first-part-complete').addClass('visible'); 

    } else {

        $('.first-part-incomplete').addClass('visible');

    }

    

    if(answer1===false) {

        $('#answer1Text').text(answer1Text).addClass('got-it-wrong');

    } else { 

        $('#answer1Answer').text('');

    }

    if(answer2===false) {

        $('#answer2Text').text(answer2Text).addClass('got-it-wrong');;  

    } else { 

        $('#answer2Answer').text('');

    }

    if(answer3===false) {

        $('#answer3Text').text(answer3Text).addClass('got-it-wrong');;   

    } else { 

        $('#answer3Answer').text('');

    }

    if(answer4===false) {

        $('#answer4Text').text(answer4Text).addClass('got-it-wrong');;   

    } else { 

        $('#answer4Answer').text('');

    }

    

});



$( "#validateTrigger" ).click(function() {



    $('.first-part-incomplete, .first-part-complete').removeClass('visible');

    

    $('.fixed-task').addClass('no-longer-needed');

        

    if(answer1===true && answer2===true && answer3===true && answer4===true) {

       $('.first-part-complete').addClass('visible'); 

    } else {

        $('.first-part-incomplete').addClass('visible');

        $('#droppable5').text('');

    }

    

    if(answer1===false) {

        $('#answer1Text').text(answer1Text).addClass('got-it-wrong');

    } else { 

        $('#answer1Answer').text('');

    }

    if(answer2===false) {

        $('#answer2Text').text(answer2Text).addClass('got-it-wrong');;  

    } else { 

        $('#answer2Answer').text('');

    }

    if(answer3===false) {

        $('#answer3Text').text(answer3Text).addClass('got-it-wrong');;   

    } else { 

        $('#answer3Answer').text('');

    }

    if(answer4===false) {

        $('#answer4Text').text(answer4Text).addClass('got-it-wrong');;   

    } else { 

        $('#answer4Answer').text('');

    }

    

});



</script>



 <script>



$(function() {

    

    var rightAnswers = 0;

    

    $("#draggableCurrentLocation" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

	

    });

    $("#draggableMissedCall" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableOccurredAt" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableCurrentLocationImg" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableCurrentLocation2" ).draggable({

        appendTo: "body",

        helper: "clone",

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

	

    });

    $("#draggableMissedCall2" ).draggable({

        appendTo: "body",

        helper: "clone",

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableOccurredAt2" ).draggable({

        appendTo: "body",

        helper: "clone",

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableCurrentLocationImg2" ).draggable({

        appendTo: "body",

        helper: "clone",

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#droppable1" ).droppable({

        accept: "#draggableOccurredAt",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("{{OccurredAt}}");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.task-3').addClass('visible'); 

                $( "#task3Trigger" ).trigger( "click" );   

            }

		}

    });

    $("#droppable2" ).droppable({

        accept: "#draggableCurrentLocation",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("{{CurrentLocation}}");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.task-3').addClass('visible'); 

                $( "#task3Trigger" ).trigger( "click" );     

            }

		}

    });

    $("#droppable3" ).droppable({

        accept: "#draggableCurrentLocationImg",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("{{CurrentLocationImg}}");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.task-3').addClass('visible'); 

                $( "#task3Trigger" ).trigger( "click" );    

            }

		}

    });

    $("#droppable4" ).droppable({

        accept: "#draggableMissedCall",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("{{NumberMissedCall}}");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            

            if(rightAnswers === 4) {

                $('.task-3').addClass('visible');

                $( "#task3Trigger" ).trigger( "click" );     

            }

		}

    });

    $("#droppable5" ).droppable({

        accept: "#draggableMissedCall2,#draggableCurrentLocationImg2,#draggableCurrentLocation2,#draggableOccurredAt2",

		drop: function(event, ui) {

			$( this ).text( ui.draggable.text() ).appendTo( this );

			var currentDraggable = 	$(ui.draggable).attr('id');

            if(currentDraggable == 'draggableCurrentLocationImg2') {

                answer4 = true;   

                answer4Text = '';

            } else { 

                answer4 = false;

                answer4Text = 'You selected the wrong variable';

            }

            $( "#validateTrigger" ).trigger( "click" );     

		}

    });

});





</script>





<script>

$(function() {

	

	var headerHeight = $('.explanation-intro').outerHeight() + $('.drag-drop-game').outerHeight() + $('.task-3-intro').outerHeight() + $('.information-pullout').outerHeight(),

  		fixedTaskHeight = $('.fixed-task').outerHeight();



	

  $('a[href*="#"]:not([href="#"])').click(function() {

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);

      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

      if (target.length) {

        $('html, body').animate({

          scrollTop: target.offset().top - fixedTaskHeight - 20

        }, 1000);

        return false;

      }

    }

  });

  

  

});



 $(document).scroll(function(){

			var headerHeight = $('.explanation-intro').outerHeight() + $('.drag-drop-game').outerHeight() + $('.task-3-intro').outerHeight() + $('.information-pullout').outerHeight();

				if($(this).scrollTop()>=headerHeight){

				

					$('body').addClass('scrolled');

					$('body').unbind(); 

					

				} else {

					$('body').removeClass('scrolled');

				}



    	  }); 

  </script>







<?php include 'includes/analytics.php'; ?>

<?php
if (array_key_exists('REMOTE_ADDR', $_SERVER) and '31.221.29.221' == $_SERVER['REMOTE_ADDR']) {
    echo '<script>console.log('.json_encode($_SESSION, true).');</script>';
}
?>

    </body>

</html>