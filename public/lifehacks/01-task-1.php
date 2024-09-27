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
                'progress' => '1',
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

                <h1 class="page-heading"><span class="argon">Life Hack 1 of 5</span></h1>

                <p>This badge will take you through 5 different life hack examples, which you will need to complete in order to pass this badge.</p>

                <p>Let's start with a simple one. Say you wanted to do the following: <span class="the-task">Using GPS, when I leave home I'd like my phone to automatically text my friend to let them know I am on my way.</span></p>

                </div>

                

                </div>

                

                <div class="gradient-holder">

                <div class="holder">

                

                <div class="what-technology visible" id="whatTech">

                

                <h2 class="task-heading">What technology should trigger the Life Hack?</h2>

                

                <ul class="task-icon-list what-technology-options clearfix">

                    <li><a href="#whatTech" data-value="twitter"><span class="fi flaticon-social-2"></span> Twitter</a></li>

                    <li><a href="#whatTech" data-value="facebook"><span class="fi flaticon-social-1"></span> Facebook</a></li>

                    <li><a href="#whatTech" data-value="instagram"><span class="fi flaticon-social"></span> Instagram</a></li>

                    <li><a href="#whatTech" data-value="device"><span class="fi flaticon-telephone"></span> Phone</a></li>

                    <li><a href="#whatTech" data-value="sms"><span class="fi flaticon-sms"></span> SMS</a></li>

                    <li><a href="#whenUse" data-value="location"><span class="fi flaticon-location"></span> Location</a></li>

                    <li><a href="#whatTech" data-value="reminders"><span class="fi flaticon-music"></span> Reminders</a></li>

                    <li><a href="#whatTech" data-value="battery"><span class="fi flaticon-charge"></span> Battery</a></li>

                    <li><a href="#whatTech" data-value="contacts"><span class="fi flaticon-business"></span> Contacts</a></li>

                </ul>

                

                <div class="feedback-negative what-tech-feedback-negative">

                    <p>That's not quite right. Look again at the task and try again.</p>

                    <p><br>

<strong>Using GPS</strong>, when I leave home I'd like my phone to automatically text my friend to let them know I am on my way.</p>

                </div>

                

                </div><!--/what-technology-->

                

                

                

                <div class="when-use" id="whenUse">

                

                <h2 class="task-heading">When should <span>the technology</span> activate?</h2>

                

                <ul class="customise-trigger-options-list task-options when-use-options">

                    <li><a href="#howUse" data-value="leaveHome">

                    <h3>When I leave home</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveSchool">

                    <h3>When I leave school</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="leaveSportsCentre">

                    <h3>When I leave the sports centre</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="arriveHome">

                    <h3>When I arrive home</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="arriveSchool">

                    <h3>When I arrive at school</h3>

                    </a></li>

                    <li><a href="#whenUse" data-value="arriveSportsCentre">

                    <h3>When I arrive at the sports centre</h3>

                    </a></li>

                </ul>

                

                <div class="feedback-negative when-use-feedback-negative">

                    <p>That's not quite right. Look again at the task and try again.</p>

                    <p><br>

Using GPS, <strong>when I leave home</strong> I'd like my phone to automatically text my friend to let them know I am on my way.</p>

                </div>                

                

                </div><!--/when-use-->

                

                <div class="how-use" id="howUse">

                

                <h2 class="task-heading">What should <span>the technology use?</span></h2>

                

                <ul class="task-icon-list how-use-options clearfix">

                    <li><a href="#howUse" data-value="twitterUse"><span class="fi flaticon-social-2"></span> Twitter</a></li>

                    <li><a href="#howUse" data-value="facebookUse"><span class="fi flaticon-social-1"></span> Facebook</a></li>

                    <li><a href="#howUse" data-value="instagramUse"><span class="fi flaticon-social"></span> Instagram</a></li>

                    <li><a href="#whatDo" data-value="smsUse"><span class="fi flaticon-sms"></span> SMS</a></li>

                    <li><a href="#howUse" data-value="remindersUse"><span class="fi flaticon-music"></span> Reminders</a></li>

                    <li><a href="#howUse" data-value="contactsUse"><span class="fi flaticon-business"></span> Contacts</a></li>

                </ul>

                

                <div class="feedback-negative how-use-feedback-negative">

                    <p>That's not quite right. Look again at the task and try again.</p>

                    <p><br>

Using GPS, when I leave home I'd like my phone to automatically <strong>text my friend</strong> to let them know I am on my way.</p>

                </div>

                

                </div><!--/how-use-->

                

                <div class="what-do" id="whatDo">

                

                <h2 class="task-heading">What should the technology do?</h2>

                

                <ul class="customise-trigger-options-list task-options what-do-options">

                    <li><a href="#whatDo" data-value="tellParents">

                    <h3>Text parents and tell them that I'm on my way</h3>

                    </a></li>

                    <li><a href="#whatDo" data-value="tellGrandparents">

                    <h3>Text grandparents and tell them that I'm on my way</h3>

                    </a></li>

                    <li><a href="#complete" data-value="tellFriend">

                    <h3>Text friend and tell them that I'm on my way</h3>

                    </a></li>

                </ul>

                

                <div class="feedback-negative what-do-feedback-negative">

                    <p>That's not quite right. Look again at the task and try again.</p>

                    <p><br>

Using GPS, when I leave home I'd like my phone to automatically text <strong>my friend to let them know I am on my way</strong>.</p>

                </div>

                

                </div><!--/how-use-->

                

               

                </div>

                </div>

                

                

                

                

                

                <div class="first-part-complete visible" id="complete">

                

                <p class="correct-message">

                <span class="tick-holder"><?php include 'includes/svg-tick.php'; ?></span>

                That's right!</p>

                

                <div class="holder thats-right explanation-intro">

                

                

                <h2 class="summary-heading">So what's happening here?</h2>

                <p>Answer - <strong>you're using an algorithm!</strong></p>                

                <p>What's an algorithm? It's a way of solving a problem using a set of steps – in this case to automate your life, well part of it anyway!</p>

                <p>The algorithm is as follows:</p>

                <p><span class="the-task">For this <span class="tech">technology,</span>when <span class="event">something happens</span>

<span class="tool">use this</span> to <span class="action">do this</span></span></p>



                </div>

                

                

                <div class="gradient-holder">

                <div class="holder">

                

                <p>There are <strong>four</strong> steps:</p>

                

                <div class="timeline-holder">

                

                <div class="timeline-block timeline-left" data-sr="wait .5s, enter left, opacity 0, move 80px">

                    <h3 class="timeline-block-heading"><b class="tech">technology</b><br>

= channel for trigger</h3>

                    <p><strong>What is the technology we're using?</strong> It could be software, for example social media like Facebook or Instagram, or hardware, for example a phone's GPS or a printer.</p>

                </div>

                

                <div class="timeline-block timeline-right" data-sr="wait .5s, enter right, opacity 0, move 80px">

                    <h3 class="timeline-block-heading"><b class="event">something happens</b><br>

= trigger</h3>

                    <p><strong>When are we using it?</strong> It could be when something happens, for example your phone battery is low, or when it doesn't happen, for example when you've not updated your status for a week.</p>

                </div>

                

                <div class="timeline-block timeline-left" data-sr="wait .5s, enter left, opacity 0, move 80px">

                    <h3 class="timeline-block-heading"><b class="tool">use this</b><br>

= channel for action</h3>

                    <p><strong>How are we using it?</strong> If it's software, what can we check? Status, messages, traffic levels? If it's hardware what can it tell us about? GPS, battery, light levels?</p>

                </div>

                

                <div class="timeline-block timeline-right" data-sr="wait .5s, enter right, opacity 0, move 80px">

                    <h3 class="timeline-block-heading"><b class="action">do this</b><br>

= action</h3>

                    <p><strong>What should it do?</strong> Well once you've got the other three things sorted then you can use the action to complete your algorithm and do something which is useful for you.</p>

                </div>

                

                <div class="timeline"></div>

                

                </div><!--/timeline-holder-->

                

                </div>

                </div>

                

                <div class="holder">

        

                <div class="drag-drop-game">

                <p>Can you work out what is the channel for the trigger, the trigger, the channel for the action and the action in the last example? Drag the answer to the right place below.</p>

                

                <div class="drag-container clearfix">

                

                    <div class="drop-items">

                     <div class="drop-sentence">

                     <span class="tech">Using GPS,</span>

                        <div id="droppable1" class="drop-area">

                          <p></p>

                        </div>

                     </div>

                     <div class="drop-sentence">

                     <span class="event">when I leave home</span>

                        <div id="droppable2" class="drop-area">

                          <p></p>

                        </div>

                     </div>

                     <div class="drop-joiner">

                     I'd like my phone to automatically

                     </div>

                     <div class="drop-sentence">

                     <span class="tool">text my friend</span>

                        <div id="droppable3" class="drop-area">

                          <p></p>

                        </div>

                     </div>

                     <div class="drop-joiner">

                     to

                     </div>

                     <div class="drop-sentence">

                     <span class="action">let them know I'm on my way.</span>

                        <div id="droppable4" class="drop-area">

                         <p></p> 

                        </div>

                    </div>

                    

                    </div>

                    

                    <div class="drag-items">

                    

                        <div class="drag-items-wrapper">

                        

                        <h2 class="answers-heading">Answers</h2>

                        

                        <div id="draggableTheAction" class="drag-item">

                          <p>The Action</p>

                        </div>

                    

                        <div id="draggableTriggerChannel" class="drag-item">

                          <p>The Channel for the Trigger</p>

                        </div>

                        

                        <div id="draggableTheActionChannel" class="drag-item">

                          <p>The Channel for the Action</p>

                        </div>                

                         

                        <div id="draggableTheTrigger" class="drag-item">

                          <p>The Trigger</p>

                        </div>

                        

                        

                        

                        </div>

                    

                    </div>

                

                </div>

                

                

                

                </div>

                

                </div>

                

                <div class="lets-move-on">

                <p class="correct-message">

                <span class="tick-holder"><?php include 'includes/svg-tick.php'; ?></span>

                That's right!</p>

                <div class="holder">

                

                

                

                

                <p>Well done! Let's move on to the next one.</p>

                <p class="cta"><a href="02-task-2.php" class="btn btn-primary animsition-link">On to the next task</a></p>

                </div>





                

                </div>

                

                

                

                </div><!--/first-part-complete-->

        



        



        

     

        

        </div><!--/animsition-->

        

        <div class="fixed-task">

<strong>Task:</strong> When I leave home I'd like my phone to automatically text my friend to let them know I am on my way.

</div>

<?php include 'includes/lockup.php'; ?>

<?php include 'includes/commonJavascript.php'; ?>



<script>

var config = { reset: true, vFactor: 0.20, mobile: false, delay: 'always' }

window.sr = new scrollReveal();

</script>



<script>

$( ".what-technology-options a" ).click(function() {

    

    $('.what-technology-options li').removeClass('on');

    $('.what-technology-options a').removeClass('wrong');

    $('.what-tech-feedback-negative').hide();   

    

    dataValue = $(this).data('value');

    

    if(dataValue==='location') {

        $(this).closest('li').addClass('on');

        $('.when-use').addClass('visible');

    } else {

        $(this).addClass('wrong');

        $('.what-tech-feedback-negative').fadeIn();

    }

    

    setTimeout(function(){

      $('.what-technology-options a').removeClass('wrong');

    }, 3000);

    

});



$( ".when-use-options a" ).click(function() {

    

    $('.when-use-options li').removeClass('on');

    $('.when-use-options a').removeClass('wrong');

    $('.when-use-feedback-negative').hide();   

    

    dataValue = $(this).data('value');

    if(dataValue==='leaveHome') {

        $(this).closest('li').addClass('on');

        $('.how-use').addClass('visible');

    } else {

        $(this).addClass('wrong');

        $('.when-use-feedback-negative').fadeIn();   

    }

    

    setTimeout(function(){

      $('.when-use-options a').removeClass('wrong');

    }, 1000);

    

});



$( ".how-use-options a" ).click(function() {

    

    $('.how-use-options li').removeClass('on');

    $('.how-use-options a').removeClass('wrong');

    $('.how-use-feedback-negative').hide();   

    

    dataValue = $(this).data('value');

    

    if(dataValue==='smsUse') {

        $(this).closest('li').addClass('on');

        $('.what-do').addClass('visible');

    } else {

        $(this).addClass('wrong');

        $('.how-use-feedback-negative').fadeIn();   

    }

    

    setTimeout(function(){

      $('.how-use-options a').removeClass('wrong');

    }, 1000);

    

});



$( ".what-do-options a" ).click(function() {

    

    $('.what-do-options li').removeClass('on');

    $('.what-do-options a').removeClass('wrong');

    $('.what-do-feedback-negative').hide();   

    

    dataValue = $(this).data('value');

    if(dataValue==='tellFriend') {

        $(this).closest('li').addClass('on');

        $('.first-part-complete').addClass('visible');

		$('.fixed-task').addClass('no-longer-needed');

    } else {

        $(this).addClass('wrong');

        $('.what-do-feedback-negative').fadeIn();   

    }

    

    setTimeout(function(){

      $('.what-do-options a').removeClass('wrong');

    }, 3000);

    

});



</script>





  <script>



$(function() {

    

    var rightAnswers = 0;

    

    $("#draggableTriggerChannel" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

	

    });

    $("#draggableTheTrigger" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableTheActionChannel" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#draggableTheAction" ).draggable({

        revert: "invalid",

		drag: function(event, ui) {

			$('body').addClass('dragging');

		},

		stop: function(event, ui) {

			$('body').removeClass('dragging');

		}

    });

    $("#droppable1" ).droppable({

        accept: "#draggableTriggerChannel",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("The Channel for the Trigger");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.lets-move-on').addClass('visible');   

            }

		}

    });

    $("#droppable2" ).droppable({

        accept: "#draggableTheTrigger",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("The Trigger");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.lets-move-on').addClass('visible');     

            }

		}

    });

    $("#droppable3" ).droppable({

        accept: "#draggableTheActionChannel",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("The Channel for the Action");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.lets-move-on').addClass('visible');     

            }

		}

    });

    $("#droppable4" ).droppable({

        accept: "#draggableTheAction",

		drop: function(event, ui) {

			$(this).addClass("ui-state-highlight").find("p").html("The Action");

			var currentDraggable = 	$(ui.draggable).attr('id');

            ui.draggable.remove();

            rightAnswers++;

            if(rightAnswers === 4) {

                $('.lets-move-on').addClass('visible');     

            }

		}

    });

});



$(function() {

	

	var headerHeight = $('.explanation-intro').outerHeight(),

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

			var headerHeight = $('.explanation-intro').outerHeight();

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