<?php
	session_start();
	include ('connect.php');
	
	$countryname = $_GET['country'];
	$statename = @$_GET['state'];
	$cityname = @$_GET['city'];
	$companyname = @$_GET['company'];
	/*
	$select_country = "select * from countryTable where countryname='$countryname'";
	$country_query = mysqli_query($conn, $select_country);
	$fetch_country = mysqli_fetch_array($country_query);
	$countryid = $fetch_country['id'];
	
	$select_state = "select * from stateTable where countryid='$countryid'";
	$state_query = mysqli_query($conn, $select_state);
	$fetch_state = mysqli_fetch_array($state_query);
	$stateid = $fetch_state['id'];
	
	$select_city = "select * from cityTable where stateid='$stateid'";
	$city_query = mysqli_query($conn, $select_city);
	$fetch_city = mysqli_fetch_array($city_query);
	$cityid = $fetch_city['id'];
	
	$select_company = "select * from companyTable where cityid='$cityid'";
	$company_query = mysqli_query($conn, $select_company);
	*/
	if( !empty($_GET['country']) && empty($_GET['state']) ) {
		$select_join = "select countryname, statename, cityname, companyname from companyTable ".
					   "join cityTable on companyTable.cityid = cityTable.id ".
					   "join stateTable on cityTable.stateid = stateTable.id ".
					   "join countryTable on stateTable.countryid = countryTable.id ".
					   "where countryname='$countryname'";
	} else if( !empty($_GET['country']) && !empty($_GET['state']) && empty($_GET['city']) ) {
		$select_join = "select countryname, statename, cityname, companyname from companyTable ".
					   "join cityTable on companyTable.cityid = cityTable.id ".
					   "join stateTable on cityTable.stateid = stateTable.id ".
					   "join countryTable on stateTable.countryid = countryTable.id ".
					   "where countryname='$countryname' and statename='$statename'";
	} else if( !empty($_GET['country']) && !empty($_GET['state']) && !empty($_GET['city']) && empty($_GET['company']) ) {
		$select_join = "select countryname, statename, cityname, companyname from companyTable ".
					   "join cityTable on companyTable.cityid = cityTable.id ".
					   "join stateTable on cityTable.stateid = stateTable.id ".
					   "join countryTable on stateTable.countryid = countryTable.id ".
					   "where countryname='$countryname' and statename='$statename' and cityname='$cityname'";
	} else if( !empty($_GET['country']) && !empty($_GET['state']) && !empty($_GET['city']) && !empty($_GET['company']) ) {
		$select_join = "select countryname, statename, cityname, companyname from companyTable ".
					   "join cityTable on companyTable.cityid = cityTable.id ".
					   "join stateTable on cityTable.stateid = stateTable.id ".
					   "join countryTable on stateTable.countryid = countryTable.id ".
					   "where countryname='$countryname' and statename='$statename' and cityname='$cityname' and companyname='$companyname'";
	} else {
		echo 'Invalid search parameters. Pleae try again';
		return;
	}
	
	$join_query = mysqli_query($conn, $select_join);
	
	echo '<h1>Companies in country: '.$countryname.'</h1>';
	echo '<ul>';
	while( $fetch_join = mysqli_fetch_array($join_query) ) {
		echo '<li>'.$fetch_join['companyname'].'</li>';
	}
	echo '</ul>';
?>