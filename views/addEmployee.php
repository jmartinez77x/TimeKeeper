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
		<title> MLHC Manager - Employee </title>
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
		</center>

		<form action = "addEmployee.php" class="form" method ="post" >
			<center>
				<table>
					<tr>
						<td id="formTitle"> ID: </td>
						<td><input name="empID" type="text" placeholder = "<?php echo $empIDErr;?>"></td>
						<td></td>
						<td id="formTitle"> Name: </td>
						<td><input name="empName" type="text" placeholder = "<?php echo $empNameErr;?>"></td>
					</tr>
					<tr>
						<td id="formTitle"> Company: </td>
						<td><style type = "text/css"> select{ width:175px;} </style> <select  name = "companies"> <?php get_companies($companyArray) ?> </select> 
						<td></td>
						<td id="formTitle"> Branch: </td>
						<td><input name="empBranch" type="text" placeholder = "<?php echo $empBranchErr;?>"></td>
					</tr>
					<tr>
						<td id="formTitle"> Job Title: </td>
						<td><input name="empTitle" type="text" placeholder = "<?php echo $empTitleErr;?>"></td>

						<td></td>
						<td id="formTitle"> Supervisor: </td>
						<td><input name="empSupervisor" type="text" placeholder = "<?php echo $empSupervisorErr;?>"></td>
			
					<tr>
						<td id="formTitle"> Hire Date: </td>
						<td><input name="empHire" type="text" placeholder = "<?php echo $empHireErr;?>"></td>
						<td></td>
						<td id="formTitle"> Termination Date: </td>
						<td><input name="empTerminate" type="text" placeholder = ""></td>
					
					</tr>
				</table>
				<div id="statusOpts">
					<form>
						<tr>
						Manager Status:
						<input type='radio' name='manager_radio' value='yes'> Yes
						<input type='radio' name='manager_radio' value='no' checked> No
						<br>
						Exempt Status:
						<input type="radio" name="exempt_no" value="exempt"> Yes
						<input type="radio" name="exempt_no" value="non-exempt" checked > No
					</tr>
					</form> 
					
				</div>
				<br>
				<button  type = "submit" value = "Clear"  name = 'addEmp' > Add Employee </button>
				<br>	
				<span> <?php echo $employeeAddedFlag; ?> <span>

				<!--input type=button onClick="parent.location='admin.php'" value='Login'-->
			</center>
		</form>
	</body>
</html>