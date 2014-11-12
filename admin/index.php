<html>
	<head>
		<title>Yellow Pages Admin Console</title>
	</head>
	
	<body style="background: url(images/adminbk.jpg)">
		<div style="border-bottom: solid 1px black; height: 100px;">
			<div style="float: left; width: 40%;">
				<img src="images/yellowpagesLogo.png" />
			</div>
			
			<div style="float:left; width: 40%">
				
					<h1> Admin Login Page </h1>
				
			</div>
		</div>
		
		<div style="margin-left: 20%">
			<form method="post" action="adminLogin.php">
				<table>
					<tr>
						<td>
							<img src="images/admin_img.jpg" style="margin-left: 40px" />
						</td>
					</tr>
					
					<tr>
						<td>
							Email
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="text" name="email" style="width: 180px; height: 30px;" />
						</td>
					</tr>
					
					<tr>
						<td>
							Password
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="password" name="pass" style="width: 180px; height: 30px;" />
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="submit" value="Sign In" style="background-color:#0033CC; width: 180px; height: 30px" />
						</td>
					</tr>
				</table>
			</form>
			
			<p style="margin-left: 20%"><?php echo @$_GET['msg']; ?></p>
		</div>
		
		<div style="position: absolute; top: 90%; border-top: solid 1px black;">
			<p style="padding: 10px; background-color: #FFFF33; border-radius: 5px;"> <a href="../index.php" style="text-decoration: none;">Home</a> </p>
		</div>
	</body>
</html>