<?php
	session_start();
	include ('connect.php');
	
	$statename = $_GET['msg'];
	
	$sel_state = "select * from stateTable where statename='$statename'";
	$state_query = mysqli_query($conn, $sel_state);
	$fetch_state = mysqli_fetch_array($state_query);
	$stateid = $fetch_state['id'];
	
	$sel_city = "select * from cityTable where stateid='$stateid'";
	$city_query = mysqli_query($conn, $sel_city);

	echo "<option value=\"Select City\">Select City</option>";
	while($fetch_city = mysqli_fetch_array($city_query)) {
		echo "<option value=\"".$fetch_city['cityname']."\">".$fetch_city['cityname']."</option>";
	}
?>