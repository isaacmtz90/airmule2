<?php
require_once('db.php');
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: ". mysqli_connect_errno();
	}

	$rate = $_POST['rating'];
	$user= $_POST['userid'];
	$sql= "UPDATE  users set total_rating =(total_rating + $rate), total_votes= (total_votes+1) WHERE username = '$user'";


if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));

  }else{
echo "rating added";

mysqli_close($con);

}



?>