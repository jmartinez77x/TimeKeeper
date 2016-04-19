<html>
	<head>
		<link type="text/css" rel="stylesheet" href="assets/css/mainStyle.css"/>
		<title> MLHC Manager - Employee </title>
	</head>

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
		</center>

		<form class="form">
			<center>
				<table>
					<tr>
						<td id="formTitle"> ID: </td>
						<td><input id="empID" type="text"></td>
						<td></td>
						<td id="formTitle"> Name: </td>
						<td><input id="empName" type="text"></td>
					</tr>
					<tr>
						<td id="formTitle"> Company: </td>
						<td><input id="empComp" type="text"></td>
						<td></td>
						<td id="formTitle"> Branch: </td>
						<td><input id="empBranch" type="text"></td>
					</tr>
					<tr>
						<td id="formTitle"> Job Title: </td>
						<td><input id="empTitle" type="text"></td>
					</tr>
					<tr>
						<td id="formTitle"> Manager: </td>
						<td><input id="empManager" type="text"></td>
						<td></td>
						<td id="formTitle"> Supervisor: </td>
						<td><input id="empSupervisor" type="text"></td>
					</tr>
					<tr>
						<td id="formTitle"> Hire Date: </td>
						<td><input id="empHire" type="text"></td>
						<td></td>
						<td id="formTitle"> Termination Date: </td>
						<td><input id="empTerminate" type="text"></td>
					</tr>
				</table>

				<div id="statusOpts">
					<form>
						Manager Status:
						<input type="radio" name="manager" value="yes"> Yes
						<input type="radio" name="manager" value="no" checked> No
						<br>
						Exempt Status:
						<input type="radio" name="exempt" value="exempt"> Yes
						<input type="radio" name="exempt" value="non-exempt" checked> No
					</form> 
				</div>
				<br>
				<button type="button" id="addEmp" onclick="alert('Company Added')"> Add Employee </button>
				<!--input type=button onClick="parent.location='admin.php'" value='Login'-->
			</center>
		</form>
	</body>
</html>