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
                'progress' => '4',
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

                <h1 class="page-heading"><span class="argon">Life Hack 4 of 5</span></h1>

                <p>When you want to do something a little more complex you can sequence some hacks together so they set off a chain reaction of automation - known as a 'daisy-chain'</p>

                </div>

                </div>

                

                

                <div class="gradient-holder">

                

                <div class="information-pullout">

                

                <h2>Daisy Chain</h2>

                

                <p>In electrical and electronic engineering a daisy chain is a wiring scheme in which multiple devices are wired together in sequence or in a ring.</p>

                <p>In computing terms, it means to connect (several devices) together in a linear series.</p>

                <p>The same principle can be used to connect multiple algorithms in a sequence.</p>

                

                </div>

                



                </div>

                

                

                <div class="task-3-intro">

                

                <div class="holder">

                <div class="explanation-intro">

                

                

                <p>Daisy chain algorithms to make this happen:

                <span class="the-task">When I get to school, automatically mute my phone. If anyone calls and my phone is on mute, send them a text message to let them know that I'll call them back and then set myself a reminder to make the call.</span></p>

                </div>

                

                </div>

                

                </div><!--/task-3-intro-->

                

                <div class="gradient-holder">

                <div class="holder" id="taskPart1">

                

                <!--

                =====================================================================

                TASK ONE

                =====================================================================

                -->

                

                

                <?php include 'includes/task-4-1.php'; ?>

                

                <!--

                =====================================================================

                END OF TASK ONE

                =====================================================================

                -->

                

                </div>

                </div>

                

                <div id="taskPart2">

                <div class="what-technology what-technology-subsequent" id="whatTech2">

                

                <!--

                =====================================================================

                TASK TWO

                =====================================================================

                -->

                

                

                <?php include 'includes/task-4-2.php'; ?>

                

                

                <!--

                =====================================================================

                END OF TASK TWO

                =====================================================================

                --> 

                

                </div>

                

                <!--

                =====================================================================

                TASK THREE

                =====================================================================

                -->

                

                

                <?php include 'includes/task-4-3.php'; ?>

                

                

                <!--

                =====================================================================

                END OF TASK THREE

                =====================================================================

                -->  

                </div>

                

                      

                

                

                <div id="complete">

                

                <?php include 'includes/task-4-1-outcome.php'; ?>

                <?php include 'includes/task-4-2-outcome.php'; ?>

                

                </div> 

                



                

                

                

                

        



        



        

     

        

        </div><!--/animsition-->

        

        <div class="fixed-task">

<strong>Task:</strong> When I get to school, automatically mute my phone. If anyone calls and my phone is on mute, send them a text message to let them know that I'll call them back and then set myself a reminder to make the call.

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

answer2_1 = false,

answer2_2 = false,

answer2_3 = false,

answer2_4 = false,

answer3_1 = false,

answer3_2 = false,

answer3_3 = false,

answer3_4 = false,

answer1Text,

answer2Text,

answer3Text,

answer4Text,

answer2_1Text,

answer2_2Text,

answer2_3Text,

answer2_4Text,

answer3_1Text,

answer3_2Text,

answer3_3Text,

answer3_4Text,

answer1Text_default = 'Location',

answer2Text_default = 'When I arrive at school',

answer3Text_default = 'Phone',

answer4Text_default = 'Mute ringtone',

answer2_1Text_default = 'Phone',

answer2_2Text_default = 'When my phone is on mute and I miss a call',

answer2_3Text_default = 'SMS',

answer2_4Text_default ="Text caller to say I'll call them back",

answer3_3Text_default = 'Reminders',

answer3_4Text_default = 'Set a reminder';



</script>





<?php include 'includes/task-4-1-script.php'; ?>

<?php include 'includes/task-4-2-script.php'; ?>

<?php include 'includes/task-4-3-script.php'; ?>







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