<?php
	include_once "config.php";
	$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
	$output = "HELLLLOOOOOO";
	// $sql = mysqli_query($conn, "SELECT users WHERE fname LIKE '{%$searchTerm}%'");
	$sql = mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
	if(mysqli_num_rows($sql) > 0){
		$output .= "YAY";
	}else{
		$output .= "No user found related to your search.";
	}
	echo $output;

?>