<?php
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db_name="student";

	$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(!$conn) {
		die('Connection failed :'.mysqli_connect_error());
	}
	// else{
	// 	echo '<script type="text/javascript"> alert("Connected to Database")</script>';
	// }
?>