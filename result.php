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
           // echo ($_SESSION['user']);

            
         //   echo $user;


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
                    <li class="clearfix">
                        <img src="img/small.jpg" height="120"/>
                        <div class="info">
                            <p>Isaac Martinez</p>
                            <p>Desde: Tegucigalpa, Honduras</p>
                            <p>Hasta: New York, NY</p>
                            
                        </div>
                        <div class="status">
                            <p>Fecha: 28/02/2013</p>
                            <p>Rating</p>
                            <p>Reviews: 50</p>
                        </div>
                        <a href="ver" class="ver">Ver</a>
                        
                    </li>

                     <li class="clearfix">
                        <img src="img/small.jpg" height="120"/>
                        <div class="info">
                            <p>Isaac Martinez</p>
                            <p>Desde: Tegucigalpa, Honduras</p>
                            <p>Hasta: New York, NY</p>
                            
                        </div>
                        <div class="status">
                            <p>Fecha: 28/02/2013</p>
                            <p>Rating</p>
                            <p>Reviews: 50</p>
                        </div>
                        <a href="ver" class="ver">Ver</a>
                        
                    </li>

                     <li class="clearfix">
                        <img src="img/small.jpg" height="120"/>
                        <div class="info">
                            <p>Isaac Martinez</p>
                            <p>Desde: Tegucigalpa, Honduras</p>
                            <p>Hasta: New York, NY</p>
                            
                        </div>
                        <div class="status">
                            <p>Fecha: 28/02/2013</p>
                            <p>Rating</p>
                            <p>Reviews: 50</p>
                        </div>
                        <a href="ver" class="ver">Ver</a>
                        
                    </li>

                     <li class="clearfix">
                        <img src="img/small.jpg" height="120"/>
                        <div class="info">
                            <p>Isaac Martinez</p>
                            <p>Desde: Tegucigalpa, Honduras</p>
                            <p>Hasta: New York, NY</p>
                            
                        </div>
                        <div class="status">
                            <p>Fecha: 28/02/2013</p>
                            <p>Rating</p>
                            <p>Reviews: 50</p>
                        </div>
                        <a href="ver" class="ver">Ver</a>
                        
                    </li>

                     <li class="clearfix">
                        <img src="img/small.jpg" height="120"/>
                        <div class="info">
                            <p>Isaac Martinez</p>
                            <p>Desde: Tegucigalpa, Honduras</p>
                            <p>Hasta: New York, NY</p>
                            
                        </div>
                        <div class="status">
                            <p>Fecha: 28/02/2013</p>
                            <p>Rating</p>
                            <p>Reviews: 50</p>
                        </div>
                        <a href="ver" class="ver">Ver</a>
                        
                    </li>

                     <li class="clearfix">
                        <img src="img/small.jpg" height="120"/>
                        <div class="info">
                            <p>Isaac Martinez</p>
                            <p>Desde: Tegucigalpa, Honduras</p>
                            <p>Hasta: New York, NY</p>
                            
                        </div>
                        <div class="status">
                            <p>Fecha: 28/02/2013</p>
                            <p>Rating</p>
                            <p>Reviews: 50</p>
                        </div>
                        <a href="ver" class="ver">Ver</a>
                        
                    </li>
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
