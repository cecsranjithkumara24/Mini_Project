<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
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
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
				
			</ul>

		</nav>
	</header>
			
	<div class="divider"></div>
	<h2 class="line"><span class="line1">Employee List</span></h2>
		<table>
			<tr>

				<th align = "center">Emp. ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">Address</th>
				<th align = "center">Role</th>
				<th align = "center">Degree</th>
	
				<th align = "center">Options</th>
			</tr>
		
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['degree']."</td>";
					
					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					
				}
					
                  ?>
				
		</table>
		<div class="p-t-20">
			<a  class="btn btn--radius btn--green" type="submit" href="pdf.php">Download</a>    
		</div>
				
		<!-- <table>
		<?php  
                $con =new PDO("mysql:host=localhost;dbname=emp","root","");
				$query="SELECT * FROM  employee";
				$result=$con->prepare($query);
				$result->execute();
				if($result->rowCount())
				{
					while($employee==$result->fetch())
					{
						?>
						<tr>
							<td>
								<a href="pdf.php?id=<?php echo $employee['id'];?>">"Download</a>
					</td>
					</tr>
					<?php
					}
				}
				else{
					echo "<br><br>NO data";
				}

				?>
				</table>
	 -->
</body>
</html>