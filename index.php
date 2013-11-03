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
            <h2 class="clearfix">Selecciona un destino.</h2>
            <h3>Envia tu paquete</h3>
            <form class="gray-box clearfix" method="post" action="scripts/getTrips.php">  
                <input class = "input_big" type = "text" placeholder = "Que destino buscas?" id="to" name="to" />
                <input class = "input_big" type = "text" placeholder = "De donde?" id="from" name="from" />
                <input class = "input_big" type = "text" placeholder = "Cuando?" id="date" name="date" readonly />
                <input type="submit" value="Buscar" class="submit">
            </form>
        </div>
        <footer></footer>
        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/jquery-ui-1.10.3.custom.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
        <script src="js/jquery.geocomplete.min.js"></script>
        <script type="text/javascript">
        $().ready(function() {
            $('#from').geocomplete();
            $('#to').geocomplete();
            $.datepicker.formatDate( "dd-mm-yyyy");
            $( "#date" ).datepicker({
                inline: true
            });

        });

            
        </script>

        
    </body>
</html>
