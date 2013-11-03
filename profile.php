<?php 
session_start();
?>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '738099589550780',                        // App ID from the app dashboard
      channelUrl : 'http://www.saysquare.com/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  };

  // Load the SDK asynchronously
  (function(){
     // If we've already installed the SDK, we're done
     if (document.getElementById('facebook-jssdk')) {return;}

     // Get the first script element, which we'll use to find the parent node
     var firstScriptElement = document.getElementsByTagName('script')[0];

     // Create a new script element and set its id
     var facebookJS = document.createElement('script'); 
     facebookJS.id = 'facebook-jssdk';

     // Set the new script's source to the source of the Facebook JS SDK
     facebookJS.src = '//connect.facebook.net/en_US/all.js';

     // Insert the Facebook JS SDK into the DOM
     firstScriptElement.parentNode.insertBefore(facebookJS, firstScriptElement);
   }());
</script>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Airmule</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="css/cupertino/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <h1>Airmule</h1>
            <?php
            $userid= $_GET ['id'];
            require 'scripts/getProfile.php';
            $view_user = getProfile($userid);
            $view_user=json_decode($view_user);
           //echo $view_user;

                if (isset($_SESSION['user'])){
                	//echo $_SESSION['user'];
                    $user = json_decode($_SESSION['user']);
                    $userpic = "http://graph.facebook.com/".  $user-> {'id'} ."/picture";
                    echo "<div class='logged'><div class='photo'><img src='".  $userpic. "' height='40'></div><p>".  $user-> {'name'} ."</p><div class='inbox'><a href='#' class='inbox ir'></a></div><a href='scripts/logout.php' class='logout'>Logout</a></div>";
                }else{
                    echo "<a href='scripts/login.php' class='fb ir' >Sign up</a>";
                }

             ?>
            <!-- <a href="login.php" class="fb ir" >Sign up</a>
            <div class="logged">
                <div class="photo"><img src="img/small.jpg" height="40"></div>
                <p>Cristian Garner</p>
                <div class="inbox"><a href="#" class="inbox ir"></a></div>
                <a href="logout.php" class="logout">Logout</a>
            </div>-->
        </header>
        <div id="main" class="clearfix">
        	<?php
             $view_userpic = "http://graph.facebook.com/".  $view_user-> {'username'} ."/picture";
            $avg_rating = $view_user-> {'total_rating'} /  $view_user-> {'total_votes'};
        	// if (isset($_SESSION['user'])){
        	   echo "   <div class='photo'><img src='".  $view_userpic. "' height='100'></div>
                        <h2 class='clearfix'>".$view_user-> {'firstname'}." ".$view_user-> {'lastname'}."</h2>
			            <h3>From : ". $view_user-> {'address'}.", ". $view_user-> {'city'}. ", ". $view_user-> {'country'}."</h3>
			            <h3>Email:". $view_user-> {'email'}."</h3>
			            <h3>Average rating:". $avg_rating  ." </h3>
                        <h3>Rated ". $view_user-> {'total_votes'} ." times </h3>";
                         $userlink = "http://localhost.com/user/" . ($user->{'id'});
                          echo"</div>"; 
              echo "<fb:comments href='". $userlink ."' numposts='10' width='400'></fb:comments>";
             
                
        //	 }else {
          //     echo "<h1> You need to login to view or comment </h1>";
            // }

               $userlink = "http://localhost.com/user/" . ($user->{'id'});
              echo "<fb:comments href='". $userlink ."' numposts='10' width='400'></fb:comments>";
             
             ?>

            
        
        
     

        
    </body>
</html>






