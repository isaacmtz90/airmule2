<?php
require_once('db.php');
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: ". mysqli_connect_errno();
	}
$sql="INSERT INTO trips (from_city, from_country, to_city, to_country, from_zipcode, to_zipcode, username, to_when, from_when, flight_number, flight_airline, luggage_space)
	  VALUES ('$_POST[from_city]','$_POST[from_country]','$_POST[to_city]','$_POST[to_country]','$_POST[from_zipcode]','$_POST[to_zipcode]','$_POST[username]','$_POST[to_when]','$_POST[from_when]','$_POST[flight_number]','$_POST[flight_airline]','$_POST[luggage_space]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));

  }
echo "1 record added";

mysqli_close($con);

?>