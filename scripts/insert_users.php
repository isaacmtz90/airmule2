<?php
require_once('db.php');
	if (mysqli_connect_errno(){
		echo "Failed to connect to MySQL: ". mysqli_connect_errno();
	}
$sql="INSERT INTO users (username, password, firstname, lastname, address, city, country, zipcode, phone, email, total_ratings, total_votes)
	  VALUES ('$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[lastname]','$_POST[address]','$_POST[city]','$_POST[country]','$_POST[zipcode]','$_POST[phone]','$_POST[email]','$_POST[total_ratings]','$_POST[total_votes]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));

  }
echo "1 record added";

mysqli_close($con);


	}







?>