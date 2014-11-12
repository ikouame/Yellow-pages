<?php
	session_start();
	include ('connect.php');
	
	$cityname = $_POST['ciname'];
	$statename = $_POST['cistname'];
	$countryname = $_POST['ciconame'];
	
	$sel_country = "select * from countryTable where countryname='$countryname'";
	$sel_query = mysqli_query($conn, $sel_country);
	$fetch_country = mysqli_fetch_array($sel_query);
	
	$sel_state = "select * from stateTable where statename='$statename'";
	$state_query = mysqli_query($conn, $sel_state);
	$fetch_state = mysqli_fetch_array($state_query);
	$stateid = $fetch_state['id'];
	//echo $fetch_country['id'];
	//echo $fetch_state['countryid']; exit();
	if($fetch_country['id'] == $fetch_state['countryid']) {
		$insert = "insert into cityTable (cityname, stateid) values ('$cityname', '$stateid')";
		$result = mysqli_query($conn, $insert);
		if($result) {
			header("location: adminManage.php?msg=Added City: ".$cityname." to State: ".$statename." Country: ".$countryname);
		} else {
			header("location: adminManage.php?msg=Error adding City: ".$cityname." to State: ".$statename." Country: ".$countryname);
		}
	} else {
		header("location: adminManage.php?msg=State: ".$statename." does not belong to Country: ".$countryname);
	}
?>