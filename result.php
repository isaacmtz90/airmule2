<?php 
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Airmule: result</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <h1><a href="index.php">Airmule</a></h1>
            <?php

            require_once 'scripts/getTrips.php';
          
                         
                if (isset($_SESSION['user'])){
                    $user = json_decode($_SESSION['user']);
                    $userpic = "http://graph.facebook.com/".  $user-> {'id'} ."/picture";
                    echo "<div class='logged'><div class='photo'><img src='".  $userpic. "' height='40'></div><p>".  $user-> {'name'} ."</p><div class='inbox'><a href='#' class='inbox ir'></a></div><a href='scripts/logout.php' class='logout'>Logout</a></div>";
                }else{
                  echo "<a href='scripts/login.php' class='fb ir' >Sign up</a>";
                }

             ?>
        </header>
        <div id="main" class="clearfix">
           <div id="content">
                <ul class="clearfix">
                    <?php

                    $fromcity = explode("," ,$_POST["from"]);
                    $fromcity =$fromcity[0];
                    $tocity = explode(",", $_POST["to"]);
                    $tocity = $tocity[0];
                    $date = $_POST["date"];
                       
                       

                        $view_trips = getTrips($fromcity, $tocity, $date);
                        $view_trips = json_decode ($view_trips);

                        foreach ($view_trips as $tripp){
                            $view_user_id = $tripp-> {'username'} ;
                            $view_user;
                            $con2=mysqli_connect("localhost","root","root","airmule");
                            $queryString= "SELECT * FROM users WHERE username = '" .$view_user_id."'";

                            $result = mysqli_query($con2, $queryString);
                            
                            while($row = mysqli_fetch_array($result)){
                                //echo json_encode($row);
                                $view_user= json_encode($row);
                                              
                            } 

                           $view_user=json_decode($view_user);

                           // echo $view_user->{'firstname'};

                             mysqli_close($con2);
                              // echo "---USERNAME-----" . json_encode($tripp);
                           $userpic = "http://graph.facebook.com/".  $tripp-> {'username'} ."/picture";
                           $userid= $tripp-> {'username'};
                           $username = $view_user-> {'firstname'}." ".$view_user-> {'lastname'};
                           $trip_from = $tripp-> {'from_city'}. ", ".  $tripp-> {'from_country'};
                           $trip_to = $tripp-> {'to_city'}. ", ".  $tripp-> {'to_country'};
                           $trip_date = $tripp-> {'from_when'};
                           $user_rating = $view_user->{'total_rating'} / $view_user-> {'total_votes'};
                           $user_reviews = $view_user-> {'total_votes'};
                       echo " <li class='clearfix'>
                            <img src='$userpic' height='120'/>
                            <div class='info'>
                                <p>$username</p>
                                <p>Desde:$trip_from</p>
                                <p>Hasta: $trip_to</p>
                                
                            </div>
                            <div class='status'>
                                <p>Fecha:$trip_date</p>
                                <p>Rating: $user_rating</p>
                                <p>Reviews: $user_reviews</p>
                            </div>
                            <a href='profile.php?id=$userid' class='ver'>Ver</a>
                            
                        </li>";
                        }


                    ?>

                </ul>
           </div>
        </div>
        <footer></footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>
</html>
