<?php 
	function get_companies($companyArray)
	{
		$count = count($companyArray) - 1;
		echo '<option value = "" disabled selected> Select a Company </option>';
		for ($x = 0; $x <= $count; $x++) 
		{
    	echo '<option value = "' . implode(" ", $companyArray[$x]) . '">' .implode("", $companyArray[$x]) . '</option>';
		} 
	}
?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="assets/css/mainStyle.css"/>
		<title> Add Company - Branch </title>
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
		</center>

		<center>
			<form  action = "" method = "post" class="form">
				<center style="float: left; margin-left: 12%;">
					<table>
						<tr>
							<td id="formTitle"> Company ID: </td>
							<td><input name="compID" id="compID" type="text" placeholder = "<?php echo $company_idErr;?>"></td>
							
						</tr>
						<tr>
							<td id="formTitle"> Company Name: </td>
							<td><input name="compName" id="compName" type="text" placeholder = "<?php echo $company_nameErr;?>"></td>
						</tr>
						<tr>
							<td id="formTitle"> Closed: </td>
							<td><input name="compDate" id="compDate" type="text" placeholder = ""></td>
						</tr>
					</table>

					<button  type = "submit" value = "Clear"  name = 'addComp' > Add Company </button>
					<br> 
					<span> <?php echo $this->registry->__get('companyAddedFlag');?> <span>
					<!--input type=button onClick="parent.location='timeSheet.html'" value='Login'-->
				</center>
				<center>
					<table>
						<tr>
							<td id="formTitle"> Branch ID: </td>
							<td><input name="branchID" id="branchID" type="text" placeholder = "<?php echo $branch_idErr;?>"></td>
						</tr>
						<tr>
							<td id="formTitle"> Branch Name:  </td>
							<td><input name="branchName" id="branchName" type="text" placeholder = "<?php echo $branch_companyErr;?>"></td>
						</tr>
						<tr>
							<td id="formTitle"> Associate Company: </td>
							<td><style type = "text/css"> select{ width:160px;} </style> <select name = "assocComp" > <?php get_companies($companyArray) ?> </select> </td>
						</tr>
					</table>
					<button type="submit" value = "Clear" name="addBranch" > Add Branch </button>
					<br>
					<span> <?php echo $branchAddedFlag; ?> <span>

					 
					<!--input type=button onClick="parent.location='timeSheet.html'" value='Login'-->
				</center>

			</form>
		<center>
	</body>
</html>