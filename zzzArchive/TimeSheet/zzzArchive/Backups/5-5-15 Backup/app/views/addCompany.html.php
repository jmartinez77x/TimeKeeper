<html>
	<head>
		<link type="text/css" rel="stylesheet" href="assets/css/mainStyle.css"/>
		<title> Add Company - Branch </title>
	</head>

	<body>
		<div>
			<div id="header1"> </div>
			<div id="header2"> </div>
			<div id="header3"> <p id="logout"> <a href="index.php"> Logout </a> </p></div>
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

		<center>
			<form class="form">
				<center style="float: left; margin-left: 12%;">
					<table>
						<tr>
							<td id="formTitle"> Company ID: </td>
							<td><input id="compID" type="text"></td>
						</tr>
						<tr>
							<td id="formTitle"> Company Name: </td>
							<td><input id="compName" type="text"></td>
						</tr>
						<tr>
							<td id="formTitle"> Closed: </td>
							<td><input id="compDate" type="text"></td>
						</tr>
					</table>

					<button type="button" id="addComp" onclick="alert('Company Added')"> Add Company </button>
					<!--input type=button onClick="parent.location='timeSheet.html'" value='Login'-->
				</center>
				<center>
					<table>
						<tr>
							<td id="formTitle"> Associate Company: </td>
							<td>
								<select id="assocComp">
									<option> Company 1 </option>
									<option> Company 2 </option>
									<option> Company 3 </option>
									<option> Company 4 </option>
									<option> Company 5 </option>
								</select>
							</td>
						</tr>
						<tr>
							<td id="formTitle"> Branch ID: </td>
							<td><input id="branchID" type="text"></td>
						</tr>
						<tr>
							<td id="formTitle"> Branch Name: </td>
							<td><input id="branchName" type="text"></td>
						</tr>
					</table>

					<button type="button" id="addBranch" onclick="alert('Company Added')"> Add Branch </button>
					<!--input type=button onClick="parent.location='timeSheet.html'" value='Login'-->
				</center>
			</form>
		<center>
	</body>
</html>