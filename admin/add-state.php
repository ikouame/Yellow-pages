<?php
	session_start();
	include ('connect.php');
	
	$statename = $_POST['stname'];
	$countryname = $_POST['stconame'];
	
	$select = "select * from countryTable where countryname='$countryname'";
	$sel_query = mysqli_query($conn, $select);
	$fetch = mysqli_fetch_array($sel_query);
	if(!empty($fetch)) {
		$countryid = $fetch['id'];
		$insert = "insert into stateTable (statename, countryid) values('$statename', '$countryid')";
		$result = mysqli_query($conn, $insert);
		
		if($result) {
			header("location: adminManage.php?msg=State: ".$statename." added to Country: ".$countryname);
		} else {
			header("location: adminManage.php?msg=State: ".$statename." cannot be added to Country: ".$countryname);
		}
	} else {
		header("location: adminManage.php?msg=".$countryname." does not exist");
	}
?>