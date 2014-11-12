<?php
	session_start();
	$email = $_SESSION['email'];
	unset($_SESSION['email']);
	session_destroy();
	
	header("location: index.php?msg=".$email." Logged Out Successfully");
?>