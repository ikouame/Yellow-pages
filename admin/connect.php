<?php
	$conn = mysqli_connect("localhost", "root", "", "yellowPagesDB");
	
	if($conn) {
	} else {
		echo "Connection to database: yellowPagesDB failed";
	}
?>