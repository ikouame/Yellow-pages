<?php
	session_start();
	include ('connect.php');
	
	$cityname = $_GET['msg'];
	
	$sel_city = "select * from cityTable where cityname='$cityname'";
	$city_query = mysqli_query($conn, $sel_city);
	$fetch_city = mysqli_fetch_array($city_query);
	$cityid = $fetch_city['id'];
	
	$sel_company = "select * from companyTable where cityid='$cityid'";
	$company_query = mysqli_query($conn, $sel_company);

	echo "<option value=\"Select Company\">Select Company</option>";
	while($fetch_company = mysqli_fetch_array($company_query)) {
		echo "<option value=\"".$fetch_company['companyname']."\">".$fetch_company['companyname']."</option>";
	}
?>