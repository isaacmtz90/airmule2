<?php
function getProfile($userid){
require_once('db.php');
//if (isset($_SESSION['user'])){
	if (mysqli_connect_errno()){
	 	 echo "Failed to connect to MySQL: ". mysqli_connect_error();
	  }else{
	  //	$userid = $_GET['id'];
		
	  	$queryString= "SELECT * FROM users WHERE username = '" .$userid."'";
	  	
	  	$result = mysqli_query($con, $queryString);

	  	while($row = mysqli_fetch_array($result)){
	  		//echo json_encode($row);
	  		mysqli_close($con);
	  		return json_encode($row);
	  		
	  	}

	  	
	  }
	}

?>