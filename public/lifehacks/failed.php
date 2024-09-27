<?php

include('auth/isauthenticated.php');

include('includes/authtoken.php');

?>

<!doctype html class="home-screen-html">

<html class="no-js" lang="en">

<?php include('includes/head.php'); ?>

    <body class="home-screen-body">

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



        <!-- Add your site or application content here -->

        <div class="home-holder animsition">

        

        <div class="unlucky-copy">

        

        <h1>Unlucky</h1>

        <p><strong>You got <?php echo $_GET['i']; ?> out of 4 tasks right.</strong></p>

        <p>This isn't enough to earn a badge this time.</p>

        <p class="failed-btn-holder"><a href="index.php" class="btn btn-primary">Try Again?</a></p>

        

        </div>

        

<div class="container">

        	<ul id="scene" class="scene">

            <li class="layer layer1" data-depth="1.00"></li>

			<li class="layer layer2" data-depth="0.80"></li>

			<li class="layer layer3" data-depth="0.60"></li>

            

		</ul>

</div>        

        

        </div><!--/holder-->

<?php include('includes/lockup.php'); ?>

<?php include('includes/commonJavascript.php'); ?>



<script>

var scene = document.getElementById('scene');

var parallax = new Parallax(scene);

</script>



<?php include('includes/analytics.php'); ?>



    </body>

</html>