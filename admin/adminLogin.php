<?php
	include ("connect.php");
	
	$email = $_POST['email'];
	$password = $_POST['pass'];
	
	$select = "select * from adminTable where email='$email' and password='$password'";
	
	$result = mysqli_query($conn, $select);
	
	if(mysqli_num_rows($result)) {
		session_start();
		$_SESSION['email'] = $email;
		header("location: adminManage.php?msg=".$email." authenticated");
	} else {
		header("location: index.php?msg=".$email." not a valid user");
	}
?>