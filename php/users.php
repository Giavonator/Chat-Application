<?php
	session_start();
	include_once("config.php");
	$sql = mysqli_query($conn, "SELECT * FROM users");
	$output = "";
	if(mysqli_num_rows($sql) == 0){
		$output .= "No users are available to chat.";
	}elseif(mysqli_num_rows($sql) > 0){
		while($sql = mysqli_fetch_assoc($row)){
			$output .= '<a href="#">
						<div class="content">
						<img src="php/images/' . $row['img'] . '" alt="">
						<div class="details">
							<span>' . $row['fname'] . " " . $row['lname']. '</span>
							<p>This is test message</p>
						</div>
						</div>
						<div class="status-dot"><i class="fas fa-circle"></i></div>
						</a>';
		}
	}
	echo $output;

?>