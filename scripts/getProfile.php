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
	  		return json_encode($row);
	  		//echo json_encode($row);
	  	}

	  	
	  }
	}

?>