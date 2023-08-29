<?php

$user = 'root';
$password = '';
$database = 'zoomanagement';
$servername='localhost';
$mysqli = new mysqli($servername,$user, $password,
				 $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
	$sql = " SELECT * FROM todo WHERE D_ID='D04' ORDER BY TASK_NO DESC ";
	$result = $mysqli->query($sql);
	$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>maintenence department</title>
	<link rel="stylesheet" href="dep.css">
</head>
	<body>
	<a href="\login\first.html"><button class="btn btn1">logout</button></a>
	<h1>MAINTENENCE DEPARTMENT</h1>
		<section>
			<h2>To do List</h2>
			<table>
				<tr>
					<th>TASK NUMBER </th>
					<th>TASKS</th>
				</tr>
				<?php
					while($rows=$result->fetch_assoc())
					{
				?>
				<tr>
					<td><?php echo $rows['TASK_NO'];?></td>
					<td><?php echo $rows['TASK'];?></td>
				</tr>
				
				<?php
					}
				?>
			</table>
		</section>
	</body>
</html>

