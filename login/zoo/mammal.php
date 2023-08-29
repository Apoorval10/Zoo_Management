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

$sql = " SELECT * FROM species WHERE D_ID='D01' ORDER BY S_ID DESC ";
$result = $mysqli->query($sql);
// $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Mammal department</title>
	<link rel="stylesheet" href="dep.css">
</head>

<body>
<a href="\login\first.html"><button class="btn btn1">logout</button></a>
<div class="head">	
	<section>
		<h1>MAMMAL DEPARTMENT</h1>
		<h2>Species:</h2>
		<table>
			<tr>
				<th>SPECIES_ID</th>
				<th>SPECIES_NAME</th>
				<th>CAGE_NO</th>
				<th>AGE</th>
                <th>GENDER</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['S_ID'];?></td>
				<td><?php echo $rows['S_NAME'];?></td>
                <td><?php echo $rows['CAGE_NO'];?></td>
				<td><?php echo $rows['AGE'];?></td>
				<td><?php echo $rows['GENDER'];?></td>
				
			</tr>
				</div>
		
			<?php
				}
			?>
		</table>
	</section>
</body>

<?php
	
	$sql = " SELECT * FROM todo WHERE D_ID='D01' ORDER BY TASK_NO DESC ";
	$result = $mysqli->query($sql);
	$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<section>
			<h2>To do list</h2>
			<table>
				<tr>
					<th>TASK NUMBER</th>
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

