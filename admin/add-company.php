<?php
	session_start();
	include ('connect.php');
	
	$companyname = $_POST['cpname'];
	$cityname = $_POST['cpciname'];
	$statename = $_POST['cpstname'];
	$countryname = $_POST['cpconame'];
	
	$sel_country = "select * from countryTable where countryname='$countryname'";
	$sel_query = mysqli_query($conn, $sel_country);
	$fetch_country = mysqli_fetch_array($sel_query);
	
	$sel_state = "select * from stateTable where statename='$statename'";
	$state_query = mysqli_query($conn, $sel_state);
	$fetch_state = mysqli_fetch_array($state_query);
	
	$sel_city = "select * from cityTable where cityname='$cityname'";
	$city_query = mysqli_query($conn, $sel_city);
	$fetch_city = mysqli_fetch_array($city_query);
	$cityid = $fetch_city['id'];
	
	if($fetch_country['id'] == $fetch_state['countryid']) {
		if($fetch_state['id'] == $fetch_city['stateid']) {
			$insert = "insert into companyTable (companyname, cityid) values ('$companyname', '$cityid')";
			$result = mysqli_query($conn, $insert);
			if($result) {
				header("location: adminManage.php?msg=Added Company: ".$companyname." to City: ".$cityname." State: ".$statename." Country: ".$countryname);
			} else {
				header("location: adminManage.php?msg=Error adding Company: ".$companyname." to City: ".$cityname." State: ".$statename." Country: ".$countryname);
			}
		} else {
			header("location: adminManage.php?msg=City: ".$cityname." does not belong to State: ".$statename);
		}
	} else {
		header("location: adminManage.php?msg=State: ".$statename." does not belong to Country: ".$countryname);
	}
?>