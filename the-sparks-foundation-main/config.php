<?php
	
	$servername="localhost";
	$username="snehavc";
	$password="svc100";

	$conn = mysqli_connect($servername,$username,$password,'sparks_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>