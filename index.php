<html>
	<head>
    	<title>Welcome to Yellow Pages</title>
        
		<script src="js/jquery-1.11.1.min.js"></script>
        <script>
			$(document).ready(function () {
				$('#selco').on('change', function () {
					var strCountry = this.value;
					//alert(strCountry);
					if(strCountry == "Select Country") {
						document.getElementById('query-result').innerHTML = "Please Select a Country";
						return ;
					}
					
					if(window.XMLHttpRequest) {
						var xmlhttp = new XMLHttpRequest();
						var xmlhttpdata = new XMLHttpRequest();
					} else {
						var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
						var xmlhttpdata = new ActiveXObject('Microsoft.XMLHTTP');
					}
					
					xmlhttp.onreadystatechange = function () {
						if( (xmlhttp.readyState == 4) && (xmlhttp.status == 200) ) {
							//document.getElementById('selst').innerHTML = xmlhttp.responseText;
							$('#selst option').remove();
							$('#selst').append(xmlhttp.responseText);
						}
					}
					
					xmlhttpdata.onreadystatechange = function () {
						if( (xmlhttpdata.readyState == 4) && (xmlhttpdata.status == 200) ) {
							$('#query-result h1').remove();
							$('#query-result ul').remove();
							$('#query-result').append(xmlhttpdata.responseText);
							//$('#query-result').innerHTML = xmlhttpdata.responseText;
						}
					}
					
					xmlhttp.open('GET', 'get-state.php?msg=' + strCountry, true);
					xmlhttp.send();
					
					xmlhttpdata.open('GET', 'get-companies-co.php?country=' + strCountry, true);
					xmlhttpdata.send();
				});
				
				$('#selst').on('change', function () {
					var strCountry = $('#selco option:selected').text();
					var strState = this.value;
					
					//alert(strCountry + '  ' + strState);
					
					if(strState == "Select State") {
						document.getElementById('query-result').innerHTML = "Please Select a State";
						return;
					}
					
					if(window.XMLHttpRequest) {
						var xmlhttp = new XMLHttpRequest();
						var xmlhttpdata = new XMLHttpRequest();
					} else {
						var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
						var xmlhttpdata = new ActiveXObject('Microsoft.XMLHTTP');
					}
					
					xmlhttp.onreadystatechange = function () {
						if( (xmlhttp.readyState == 4) && (xmlhttp.status == 200) ) {
							//document.getElementById('query-result').innerHTML = xmlhttp.responseText;
							//alert(xmlhttp.responseText);
							$('#selci option').remove();
							$('#selci').append(xmlhttp.responseText);
						}
					}
					
					xmlhttpdata.onreadystatechange = function () {
						if( (xmlhttpdata.readyState == 4) && (xmlhttpdata.status == 200) ) {
							$('#query-result h1').remove();
							$('#query-result ul').remove();
							$('#query-result').append(xmlhttpdata.responseText);
						}
					}
					
					xmlhttp.open('GET', 'get-city.php?msg=' + strState, true);
					xmlhttp.send();
					
					xmlhttpdata.open('GET', 'get-companies-co.php?country=' + strCountry + '&state=' + strState, true);
					xmlhttpdata.send();
				});
			
				$('#selci').on('change', function () {
					var strCountry = $('#selco option:selected').text();
					var strState = $('#selst option:selected').text();
					var strCity = this.value;
					//alert(strCity);
					if(strCity == "Select City") {
						document.getElementById('query-result').innerHTML = "Please Select a State";
						return ;
					}
					
					if(window.XMLHttpRequest) {
						var xmlhttp = new XMLHttpRequest();
						var xmlhttpdata = new XMLHttpRequest();
					} else {
						var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
						var xmlhttpdata = new ActiveXObject('Microsoft.XMLHTTP');
					}
					
					xmlhttp.onreadystatechange = function () {
						if( (xmlhttp.readyState == 4) && (xmlhttp.status == 200) ) {
							//document.getElementById('query-result').innerHTML = xmlhttp.responseText;
							//alert(xmlhttp.responseText);
							$('#selcp option').remove();
							$('#selcp').append(xmlhttp.responseText);
						}
					}
					
					xmlhttpdata.onreadystatechange = function () {
						if( (xmlhttpdata.readyState == 4) && (xmlhttpdata.status == 200) ) {
							$('#query-result h1').remove();
							$('#query-result ul').remove();
							$('#query-result').append(xmlhttpdata.responseText);
						}
					}
					
					xmlhttp.open('GET', 'get-company.php?msg=' + strCity, true);
					xmlhttp.send();
					
					xmlhttpdata.open('GET', 'get-companies-co.php?country=' + strCountry + '&state=' + strState + '&city=' + strCity, true);
					xmlhttpdata.send();
				});
				
				$('#selcp').on('change', function () {
					var strCountry = $('#selco option:selected').text();
					var strState = $('#selst option:selected').text();
					var strCity = $('#selci option:selected').text();
					var strCompany = this.value;
					//alert(strCountry + '  ' + strState + '  ' + strCity + '  ' + strCompany);
					if(strCompany == "Select Company") {
						document.getElementById('query-result').innerHTML = "Please Select a Country";
						return ;
					}
					
					if(window.XMLHttpRequest) {
						var xmlhttpdata = new XMLHttpRequest();
					} else {
						var xmlhttpdata = new ActiveXObject('Microsoft.XMLHTTP');
					}
					
					xmlhttpdata.onreadystatechange = function () {
						if( (xmlhttpdata.readyState == 4) && (xmlhttpdata.status == 200) ) {
							$('#query-result h1').remove();
							$('#query-result ul').remove();
							$('#query-result').append(xmlhttpdata.responseText);
						}
					}
					
					xmlhttpdata.open('GET', 'get-companies-co.php?country=' + strCountry + '&state=' + strState + '&city=' + strCity + '&company=' + strCompany, true);
					xmlhttpdata.send();
				});
			});
		</script>
        
        <script type="text/javascript">
			$(document).ready(function() {
			
			});
		</script>
    </head>
    
    <body style="background-image: url(user/images/userbk.jpg)">
    	<div style="border-bottom: solid 1px black; height: 100px;">
			<div style="float: left; width: 40%;">
				<img src="user/images/yellowpagesLogo.png" />
			</div>
			
			<div style="float:left; width: 40%">
				
					<h1> Yellow Pages </h1>
				
			</div>
		</div>
        
        <div>
        	<p>Search By Location</p>
            
            <select name="selcountry" id="selco">
            	<option value="Select Country">Select Country</option>
                <?php
					session_start();
					include ('connect.php');
					
					$select = "select * from countryTable";
					$query = mysqli_query($conn, $select);
					if(!$query) {
						echo "Error: ".mysqli_error();
					}
					
					while($fetch = mysqli_fetch_array($query)) {
						//echo $fetch['countryname'];
				?>
						<option value="<?php echo $fetch['countryname']; ?>"><?php echo $fetch['countryname']; ?></option>
				<?php
					}
				?>
            </select>
            
            <select name="selstate" id="selst">
            	<option value="Select State">Select State</option>
                
            </select>
            
            <select name="selcity" id="selci">
            	<option value="Select City">Select City</option>
                
            </select>
            
            <select name="selcompany" id="selcp">
            	<option value="Select Company">Select Company</option>
                
            </select>
        </div>
        
        <div id="query-result" style="width: 80%; border: solid 2px black; border-radius: 5px; background-color: #CCCCCC">
        </div>
		
		<div style="position: absolute; top: 90%; border-top: solid 1px black;">
			<p style="padding: 10px; background-color: #FFFF33; border-radius: 5px;"> <a href="./admin/index.php" style="text-decoration: none;">Admin Console</a> </p>
		</div>
    </body>
</html>