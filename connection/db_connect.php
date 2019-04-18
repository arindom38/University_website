<?php  

	$link = mysqli_connect("localhost","root","","project");
	// Check connection
if($link === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}

?>