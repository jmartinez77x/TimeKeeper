<html>
	<head>
		<!--FOR PROTOPLASM TIME PICKER-->
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<script type="text/javascript" async="" src="./Protoplasm_files/ga.js"></script>
		<script type="text/javascript" language="javascript" src="./Protoplasm_files/prototype.js"></script>
		<style type="text/css"></style>
		<script type="text/javascript" language="javascript" src="./Protoplasm_files/scriptaculous.js"></script>
		<script type="text/javascript" src="./Protoplasm_files/builder.js"></script>
		<script type="text/javascript" src="./Protoplasm_files/effects.js"></script>
		<script type="text/javascript" src="./Protoplasm_files/dragdrop.js"></script>
		<script type="text/javascript" src="./Protoplasm_files/controls.js"></script>
		<script type="text/javascript" src="./Protoplasm_files/slider.js"></script>
		<script type="text/javascript" src="./Protoplasm_files/sound.js"></script>
		<script type="text/javascript" language="javascript" src="./Protoplasm_files/protoplasm.js"></script>
		<script type="text/javascript" language="javascript" src="./Protoplasm_files/common.js"></script>
		<link rel="stylesheet" type="text/css" href="./Protoplasm_files/protoplasm.css">
		<script type="text/javascript" src="./Protoplasm_files/ratingbar.js"></script>
		<link rel="stylesheet" type="text/css" href="./Protoplasm_files/rating.css">
		<script type="text/javascript" language="javascript">
			Protoplasm.use('timepicker')
			.transform('input.timepicker')
			.transform('input.timepicker2', {use24hrs: true});
		</script>
		<script type="text/javascript" src="./Protoplasm_files/timepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="./Protoplasm_files/timepicker.css">
		<!--FOR PROTOPLASM TIME PICKER-->

		<link type="text/css" rel="stylesheet" href="assets/css/mainStyle.css"/>
		<title> MLHC View Employees </title>
	</head>

	<!--body background= "images/sky2.jpg" style="background-size: 100% 100%; background-color: #21CBFC;"-->
	<body>
		<div>
			<div id="header1"> </div>
			<div id="header2"> </div>
			<div id="header3"><p id="logout"> <a href="index.php"> Logout </a> </p></div>
			<div>
				<center>
					<ul id="navBar">
						<li><a href="timeSheet.php" > TimeSheet </a></li> 
						<li> <a href="addCompany.php" > Add Company - Branch </a> </li> 
						<li> <a href="addEmployee.php" > Add Manager - Employee</a> </li>
						<li> <a href="viewEmployees.php" > View Employees </a> </li>
					</ul>
				</center>
			</div>
			<div id="logo"><a href="timeSheet.php"><img src="assets/images/MLHC.png"></a></div>
		</div>

		<center>
			<div style="margin-top: -15px;">	
				<table id="userInfoTable">
					<tr>
						<th style="padding:5px;"> Name: </th>
						<th style="padding:5px;"> NAME </th>
						<th style="padding:5px;"> Company: </th>
						<th style="padding:5px;"> COMPANY </th>
						<th style="padding:5px;"> Job Title: </th>
						<th style="padding:5px;"> TITLE </th>						
					</tr>
					<tr>
						<th style="padding:5px;"> ID Number: </th>
						<th style="padding:5px;"> ID NUMBER </th>
						<th style="padding:5px;"> Branch Number: </th>
						<th style="padding:5px;"> BRANCH NUMBER </th>
						<th style="padding:5px;"> Pay Period Start: </th>
						<th style="padding:5px;"> START DATE </th>
					</tr>
					<tr>
						<th style="padding:5px;"> Exempt Status: </th>
						<th style="padding:5px;"> EXEMPT STATUS </th>
						<th style="padding:5px;"> Manager: </th>
						<th style="padding:5px;"> MANAGER </th>
						<th style="padding:5px;"> Pay Period End: </th>
						<th style="padding:5px;"> END DATE </th>
					</tr>
				</table>
			</div>
			<form>
				<table class="viewEmp">
				  <tr>
				    <th> Approved </th>
				    <th> Submitted </th>		
				    <th> Name </th>
				    <th> Job Title </th>		
				    <th> Exempt Status </th>	
				    <th> Pay Period Start </th>	
				    <th> Pay Period End </th>	
				  </tr>
				  <tr> 
				  	<td><img src="assets/images/check.gif"></td>
				  	<td></td>
				  	<td></td>
				  	<td></td>
				  	<td></td>
				  	<td></td>
				  	<td></td>
				  </tr>	
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td> Joe Martinezzzzzzzzzzzzzz </td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td>
				  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  </tr>
	  			  <tr> 
	  			  	<td></td> 
	  			  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
	  			  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  </tr>
	  			  <tr> 
	  			  	<td></td> 
	  			  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
	  			  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  </tr>
	  			  <tr> 
	  			  	<td></td> 
	  			  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
	  			  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  </tr>
				  <tr>
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  </tr>
				  <tr> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td>
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  	<td></td> 
				  </tr>
				</table>
			</form>
		</center>
	</body>
</html>