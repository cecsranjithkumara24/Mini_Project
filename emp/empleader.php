<?php
$id = (isset($_GET['id']) ? $_GET['id'] : '');
require_once ('process/dbh.php');
 $sql1 = "SELECT * FROM `employee` where id = '$id'";
 $result1 = mysqli_query($conn, $sql1);
 $employeen = mysqli_fetch_array($result1);
 $empName = ($employeen['firstName']);

$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$sql1 = "SELECT `pname`, `duedate` FROM `project` WHERE eid = $id and status = 'Due'";

$sql2 = "Select * From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";
$sql3 = "SELECT * FROM `salary` WHERE id = $id";
$result = mysqli_query($conn, $sql);

?>
<html>
<head>

	<title>Employee Panel | Trace Tech</title>
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
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
            	<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>  
                <li><a class="homered" href="empleader.php?id=<?php echo $id?>"">Employee List</a></li>
			
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
<h2 class="line"><span class="line1">Employee Leaderboard</span></h2>
<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
				
					
					$seq+=1;
				}


			?>

		</table>
</body>
</html>