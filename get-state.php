<?php
	session_start();
	include ('connect.php');
	
	$countryname = $_GET['msg'];
	
	$sel_country = "select * from countryTable where countryname='$countryname'";
	$country_query = mysqli_query($conn, $sel_country);
	$fetch_country = mysqli_fetch_array($country_query);
	$countryid = $fetch_country['id'];
	
	$sel_state = "select * from stateTable where countryid='$countryid'";
	$state_query = mysqli_query($conn, $sel_state);
	
	echo "<option value=\"Select State\">Select State</option>";
	while($fetch_state = mysqli_fetch_array($state_query)) {
		echo "<option value=\"".$fetch_state['statename']."\">".$fetch_state['statename']."</option>";
	}
?>