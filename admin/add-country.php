<?php
	session_start();
	include ('connect.php');
	
	$countryname = $_POST['coname'];
	
	$insert = "insert into countryTable (countryname) values('$countryname')";
	
	$result = mysqli_query($conn, $insert);
	
	if($result) {
		header("location: adminManage.php?msg=Country: ".$countryname." added to database");
	} else {
		header("location: adminManage.php?msg=Failed to add Country: ".$countryname." to database");
	}
?>