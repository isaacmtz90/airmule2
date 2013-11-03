<?php
require_once('db.php');
	if (mysqli_connect_errno(){
		echo "Failed to connect to MySQL: ". mysqli_connect_errno();
	}
$sql="INSERT INTO address (id_trip, username, street, street_2, city, province, zipcode)
	  VALUES ('$_POST[id_trip]','$_POST[username]','$_POST[street]','$_POST[street_2]','$_POST[city]','$_POST[province]','$_POST[zipcode]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));

  }
echo "1 record added";

mysqli_close($con);


	}







?>