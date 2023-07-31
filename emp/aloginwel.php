
<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName,dept FROM employee";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<title>Admin Panel</title>
	<link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<header>
		<nav>
			<div class="content">
			<h2>TRACE TECH</h2>
			<h2>TRACE TECH</h2>
</div>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">Home</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
		 
	<div class="divider"></div>

	<div id="divimg">
	<h2 class="line"><span class="line1">Employee Leaderboard</span></h2>
    	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Role</th>
			</tr>
			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']."</td>";
					
					echo "<td>".$employee['dept']."</td>";			
					$seq+=1;
				}


			?> 

		</table>

		

		
	</div>
</body>
</html>