<?php session_start(); ?>
<html>
	<head>
		<title>Admin Management</title>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/admin.js" type="text/javascript"></script>
		
		<style>
			.ext-form {
				display: none;
			}
		</style>
	</head>
	
	<body style="background-image: url(images/adminbk.jpg);">
		<div style="border-bottom: solid 1px black; height: 110px;">
			<p style="float: right;">
				Welcome <?php echo $_SESSION['email']; ?> <a href="logout.php">Logout</a>
			</p>
			
			<div style="float: left; width: 40%;">
				<img src="images/yellowpagesLogo.png" />
			</div>
			
			<div style="float: left; width: 40%;">
				<h1>Admin Manage Page</h1>
			</div>
		</div>
		
		<?php echo $_GET['msg']; ?>
		<div id="button-action">
			<input type="button" value="Add Country" style="width: 200px; height: 50px; background-color:#0033CC; margin: 20px;" />
			<input type="button" value="Add State" style="width: 200px; height: 50px; background-color:#0033CC; margin: 20px;" />
			<input type="button" value="Add City" style="width: 200px; height: 50px; background-color:#0033CC; margin: 20px;" />
			<input type="button" value="Add Company" style="width: 200px; height: 50px; background-color:#0033CC; margin: 20px;" />
		</div>
		
		<div id="add-country" class="ext-form">
			<form method="post" action="add-country.php">
				<table>
					<tr>
						<td>Enter Country Name</td>
						<td><input type="text" name="coname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="Add" style="width: 180px; height: 40px; background-color:#0033CC;" /></td>
					</tr>
				</table>
			</form>
		</div>
		
		<div id="add-state" class="ext-form">
			<form method="post" action="add-state.php">
				<table>
					<tr>
						<td>Enter State Name</td>
						<td><input type="text" name="stname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td>Enter Country Name</td>
						<td><input type="text" name="stconame" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="Add" style="width: 180px; height: 40px; background-color:#0033CC;" /></td>
					</tr>
				</table>
			</form>
		</div>
		
		<div id="add-city" class="ext-form">
			<form method="post" action="add-city.php">
				<table>
					<tr>
						<td>Enter City Name</td>
						<td><input type="text" name="ciname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td>Enter State Name</td>
						<td><input type="text" name="cistname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td>Enter Country Name</td>
						<td><input type="text" name="ciconame" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="Add" style="width: 180px; height: 40px; background-color:#0033CC;" /></td>
					</tr>
				</table>
			</form>
		</div>
		
		<div id="add-company" class="ext-form">
			<form method="post" action="add-company.php">
				<table>
					<tr>
						<td>Enter Company Name</td>
						<td><input type="text" name="cpname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td>Enter City Name</td>
						<td><input type="text" name="cpciname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td>Enter State Name</td>
						<td><input type="text" name="cpstname" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td>Enter Country Name</td>
						<td><input type="text" name="cpconame" style="width: 200px: height: 30px;" /></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="Add" style="width: 180px; height: 30px; background-color:#0033CC;" /></td>
					</tr>
				</table>
			</form>
		</div>
		
		<div style="position: absolute; top: 90%; border-top: solid 1px black;">
			<p style="padding: 10px; background-color: #FFFF33; border-radius: 5px;"> <a href="../index.php" style="text-decoration: none;">Home</a> </p>
		</div>
	</body>
</html>