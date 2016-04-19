<html>
	<head>
		<!--PROTOPLASM TIME PICKER-->
		<script type="text/javascript" language="javascript" src="assets/Protoplasm_files/protoplasm.js"></script>
		<script type="text/javascript" language="javascript"> Protoplasm.use('timepicker').transform('input.timepicker');</script>
		<script type="text/javascript" src="assets/Protoplasm_files/timepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/Protoplasm_files/timepicker.css">

		<!--STYLE SHEETS-->
		<link type="text/css" rel="stylesheet" href="assets/css/mainStyle.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/printStyle.css">
		
		<title> MLHC View Employees </title>
	</head>

	<body>
		<div>
			<div id="header1"></div>
			<div id="header2"></div>
			<div id="header3"></div>
			<button id="logout" style="margin-top:3px"> <a href="logout.php">  Logout </button>
			<div>
				<!--center>
					<?php //if($user_type == 0)  : ?>  
					    <ul id="navBar">
						    <li> <a href="timeSheet.php" > TimeSheet </a></li> 
							<li> <a href="addCompany.php" > Add Company - Branch </a> </li> 
							<li> <a href="addEmployee.php" > Add Manager - Employee</a> </li>
							<li> <a href="viewEmployees.php" > View Employees </a> </li>
						</ul>
					<?php //elseif($user_type == 1) : ?>
						<ul id="navBar1">
						    <li> <a href="timeSheet.php" > TimeSheet </a></li> 
							<li> <a href="viewEmployees.php" > View Employees </a> </li>
						</ul>
					<?php //elseif($user_type == 2) : ?>
						<ul id="navBar2">
						    <li> INVISIBLE</li>
						</ul>
					<?php //endif; ?>
				</center-->
				<center>
					<ul id="navBar">
						<li><a href="timeSheet" > TimeSheet </a></li> 
						<li> <a href="addCompany" > Add Company - Branch </a> </li> 
						<li> <a href="addEmployee" > Add Manager - Employee</a> </li>
						<li> <a href="viewEmployees" > View Employees </a> </li>
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
							<th style="padding:5px;"> <?php echo $name; ?> </th>
							<th style="padding:5px;"> Company: </th>
							<th style="padding:5px;"> <?php echo $_SESSION['company']; ?> </th>
							<th style="padding:5px;"> Job Title: </th>
							<th style="padding:5px;"> <?php echo $_SESSION['job_title']; ?> </th>						
						</tr>
						<tr>
							<th style="padding:5px;"> ID Number: </th>
							<th style="padding:5px;"> <?php echo $_SESSION['employeeid']; ?> </th>
							<th style="padding:5px;"> Branch Number: </th>
							<th style="padding:5px;"> <?php echo $_SESSION['branch']; ?> </th>
							<th style="padding:5px;"> Manager: </th>
							<th style="padding:5px;"> <?php echo $_SESSION['manager']; ?> </th>
							<!--th style="padding:5px;"> Pay Period Start: </th>
							<th style="padding:5px;"> START DATE </th-->
						</tr>
						<!--tr>
							<th style="padding:5px;"> Exempt Status: </th>
							<?php //if($exempt == 1) : ?>
						    	<th style="padding:5px;"> Exempt </th>
							<?php //else : ?>
							    <th style="padding:5px;"> Non-Exempt </th>
							<?php //endif; ?>
							<th style="padding:5px;"> Pay Period End: </th>
							<th style="padding:5px;"> END DATE </th>
						</tr-->
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
				  	<td>
				  		<?php if($approved == 0) : ?>
						    <p> </p>
						<?php else : ?>
						    <img src="assets/images/check.gif">
						<?php endif; ?>
				  	</td>
				  	<td>
				  		<?php if($submitted == 0) : ?>
						    <p> </p>
						<?php else : ?>
						    <img src="assets/images/check.gif">
						<?php endif; ?>
				  	</td>
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