<?php
require_once('db.php');
//if (isset($_SESSION['user'])){
	if (mysqli_connect_errno()){
	 	 echo "Failed to connect to MySQL: ". mysqli_connect_error();
	  }else{
	  	$fromcity = explode("," ,$_POST["from"]);
	  	$fromcity =$fromcity[0];
	  	$tocity = explode(",", $_POST["to"]);
	  	$tocity = $tocity[0];
	  	$date = $_POST["date"];

	  //	echo $tocity . "  --  " .$fromcity;

	  	$queryString="SELECT * FROM trips WHERE to_city LIKE '%" .$tocity."%' AND from_city LIKE '%". $fromcity."%' AND from_when betweeen curdate() and ".$date;

	  	$result = mysqli_query($con, $queryString);

	  	echo json_encode($result);


	  }




//}else{}



?>