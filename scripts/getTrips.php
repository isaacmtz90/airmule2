<?php

function getTrips($fromcity, $tocity, $date){
require_once('db.php');
//if (isset($_SESSION['user'])){
	if (mysqli_connect_errno()){
	 	 echo "Failed to connect to MySQL: ". mysqli_connect_error();
	  }else{
	  	

	  //	echo $tocity . "  --  " .$fromcity;

	  	$queryString="SELECT * FROM trips WHERE to_city LIKE '%$tocity%' AND from_city LIKE '%$fromcity%' " ;//AND from_when bettween curdate() and ".$date;

	  	$resultTrips = mysqli_query($con, $queryString);
	  	while($rowt = mysqli_fetch_array($resultTrips)){

	  		$r[]=$rowt;

	  	}
	 // 	echo $result;
	  //	echo  json_encode($r);
	  	mysqli_close($con);
	  	return  json_encode($r);
	  }
}
//}else{

	// header('Location: '. "../index.php");
//}



?>