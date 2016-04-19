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
		
		<!--PRINT/SAVE FUNCTION-->
		<script>
			function printData(idName){
			    var printContents = document.getElementById(idName).innerHTML;
				var originalContents = document.body.innerHTML;
				document.body.innerHTML = printContents;
				window.print();
				document.body.innerHTML = originalContents;}
		</script>
		
		<title> MLHC TimeSheet </title>
	</head>

	<body id="body">
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
						<li> <a href="timeSheet" > TimeSheet </a></li> 
						<li> <a href="addCompany" > Add Company - Branch </a> </li> 
						<li> <a href="addEmployee" > Add Manager - Employee</a> </li>
						<li> <a href="viewEmployees" > View Employees </a> </li>
					</ul>
				</center>
			</div>
			<div id="logo"><a href="http://mlhc.com" target="_blank"><img src="assets/images/MLHC.png"></a></div>
		</div>
		<div id="print">
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
					<!--ul id="options">
							<select name="selector" style="margin-right:20px;">
								<option value="1"> February 23 - March 8 </option>
								<option value="2"> March 9 - March 24 </option>
								<option value="3"> March 25 - April 8 </option>
								<option value="4"> April 9 - April 23 </option>
								<option value="5"> April 24 - May 10 </option>
								<option value="6"> May 11 - May 20  </option>
								<option> May 21 - June 8 </option>
								<option> June 9 - June 23 </option>
								<option> June 24 - July 8 </option>
								<option> July 9 - July 26 </option>
								<option> July 27 - August 9 </option>
								<option> August 10 - August 24 </option>
								<option> August 25 - September 8 </option>
								<option> September 9 - September 23 </option>
								<option> September 24 - October 8 </option>
								<option> October 9 - October 25 </option>
								<option> October 26 - November 5 </option>
								<option> November 6 - November 19 </option>
								<option> November 20 - December 8 </option>
								<option> December 9 - December 22 </option>
							</select>
						<li><button onclick="alert('TimeSheet Saved')"> Save TimeSheet </button></li>
						<br>
						<li><button onclick="alert('TimeSheet Submitted')"> Submit TimeSheet </button></li>
						<br>
						<li><button onclick="printData('print')"> Print TimeSheet </button></li>
					</ul-->
				</div>
			</center>
			<br>

			<form action="timeSheet.php" method="post">
				<select name="selector" style="margin-right:15px; font-size:1em;">
					<option value=" February 23 - March 8 "<?php if ($pay_period == ' February 23 - March 8 ') echo ' selected="selected"'; ?>> February 23 - March 8 </option>
					<option value=" March 9 - March 24 "<?php if ($pay_period == ' March 9 - March 24 ') echo ' selected="selected"'; ?>> March 9 - March 24 </option>
					<option value=" March 25 - April 8 "<?php if ($pay_period == ' March 25 - April 8 ') echo ' selected="selected"'; ?>> March 25 - April 8 </option>
					<option value=" April 9 - April 23 "<?php if ($pay_period == ' April 9 - April 23 ') echo ' selected="selected"'; ?>> April 9 - April 23 </option>
					<option value=" April 24 - May 10 "<?php if ($pay_period == ' April 24 - May 10 ') echo ' selected="selected"'; ?>> April 24 - May 10 </option>
					<option value=" May 11 - May 20 "<?php if ($pay_period == ' May 11 - May 20 ') echo ' selected="selected"'; ?>> May 11 - May 20 </option>
					<option value=" May 21 - June 8 " <?php if ($pay_period == ' May 21 - June 8 ') echo ' selected="selected"'; ?>> May 21 - June 8 </option>
					<option value=" June 9 - June 23 "<?php if ($pay_period == ' June 9 - June 23 ') echo ' selected="selected"'; ?>> June 9 - June 23 </option>
					<option value=" June 24 - July 8 "<?php if ($pay_period == ' June 24 - July 8 ') echo ' selected="selected"'; ?>> June 24 - July 8 </option>
					<option value=" July 9 - July 26 "<?php if ($pay_period == ' July 9 - July 26 ') echo ' selected="selected"'; ?>> July 9 - July 26 </option>
					<option value=" July 27 - August 9 "<?php if ($pay_period == ' July 27 - August 9 ') echo ' selected="selected"'; ?>> July 27 - August 9 </option>
					<option value=" August 10 - August 24 "<?php if ($pay_period == ' August 10 - August 24 ') echo ' selected="selected"'; ?>> August 10 - August 24 </option>
					<option value=" August 25 - September 8 "<?php if ($pay_period == ' August 25 - September 8 ') echo ' selected="selected"'; ?>> August 25 - September 8 </option>
					<option value=" September 9 - September 23 "<?php if ($pay_period == ' September 9 - September 23 ') echo ' selected="selected"'; ?>> September 9 - September 23 </option>
					<option value=" September 24 - October 8 "<?php if ($pay_period == ' September 24 - October 8 ') echo ' selected="selected"'; ?>> September 24 - October 8 </option>
					<option value=" October 9 - October 25 "<?php if ($pay_period == ' October 9 - October 25 ') echo ' selected="selected"'; ?>> October 9 - October 25 </option>
					<option value=" October 26 - November 5 "<?php if ($pay_period == ' October 26 - November 5 ') echo ' selected="selected"'; ?>> October 26 - November 5 </option>
					<option value=" November 6 - November 19 "<?php if ($pay_period == ' November 6 - November 19 ') echo ' selected="selected"'; ?>> November 6 - November 19 </option>
					<option value=" November 20 - December 8 "<?php if ($pay_period == ' November 20 - December 8 ') echo ' selected="selected"'; ?>> November 20 - December 8 </option>
					<option value=" December 9 - December 22 "<?php if ($pay_period == ' December 9 - December 22 ') echo ' selected="selected"'; ?>> December 9 - December 22 </option>
				</select>
				<input type="Submit" value='Load TimeSheet' style="font-size:1em">
				<div style="float: right;">
					<button style="font-size:1em" onclick="alert('TimeSheet Saved')"> Save TimeSheet </button>
					<button style="font-size:1em" onclick="alert('TimeSheet Submitted')"> Submit TimeSheet </button>
					<button style="font-size:1em" onclick="printData('print')"> Print TimeSheet </button>
				</div>

				<table class="timeSheet">
					<tr>
						<th width="185px" colspan="2"> Day </th>
						<th> Time In </th>		
						<th> Time Out </th>
						<th> Time In </th>		
						<th> Time Out </th>
						<th> Reg Hours </th>		
						<th> OT Hours </th>
						<th> Holiday </th>		
						<th> Vacation </th>
						<th> Sick </th>		
						<th> Unpaid </th>
						<th> BL </th>		
						<th> Jury Duty </th>
						<th> Total </th>		
					</tr>
					<?php
					/*
					public $y = 0;

					for ($y = 1 ; $y <= $nbrOfRows ; $y++)
					{
						if($dateArray[$y] == "")
						{

						}
						else
						{
							$foundIndexValue = $y
							break;
						}	
					}


					    for($x = $y ; $x <= $nbrOfRows + ($y - 1) ; $x++)
					    {
					*/
					    for($x = 1 ; $x <= $nbrOfRows ; $x++)
					    {
					echo "<tr>";
					echo "<td>". $dayArray[$x] ."</td>";
					echo "<td>". $dateArray[$x] . "</td>";
					echo"<td><input class='timepicker' name='tp[]'></td>";
					echo"<td><input class='timepicker' name='tp[]'></td>";
					echo"<td><input class='timepicker' name='tp[]'></td>";
					echo"<td><input class='timepicker' name='tp[]'></td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td>";
					echo"<select>";
					echo"<option value='0'> 0 </option>";
					echo"<option value='1'> 1 </option>";
					echo"<option value='2'> 2 </option>";
					echo"<option value='3'> 3 </option>";
					echo"<option value='4'> 4 </option>";
					echo"<option value='5'> 5 </option>";
					echo"<option value='6'> 6 </option>";
					echo"<option value='7'> 7 </option>";
					echo"<option value='8'> 8 </option>";
					echo"</select>";
					echo"</td>";
					echo"<td> AUTOFILL </td>";
					echo"</tr>";
					    }
					?>

					<tr> 
						<td colspan="6"> Total Hours </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
						<td> AUTOFILL </td> 
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>