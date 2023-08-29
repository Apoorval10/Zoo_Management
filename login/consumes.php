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

$sql = " SELECT A.*,B.* FROM consumes C, food A, species B where A.FOOD_ID=C.FOOD_ID AND C.S_ID=B.S_ID ORDER BY S_ID DESC ";
$result = $mysqli->query($sql);
// $mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>food</title>
	<link rel="stylesheet" href="dep.css">
</head>

<body>
<a href="\login\first.html"><button class="btn btn1">back</button></a>
<div class="head">	
	<section>
		<h1>SPECIES-FOOD</h1>
		<table>
		<tr>
					<th>Specie_number</th>
					<th>Specie_name</th>
					<th>Cage_number</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Food_id</th>
					<th>Food_name</th>
					<th>Quantity</th>
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
					<td><?php echo $rows['FOOD_ID'];?></td>
					<td><?php echo $rows['FOOD_TYPE'];?></td>
					<td><?php echo $rows['QUANTITY'];?></td>
				</tr>
				</div>
		
			<?php
				}
			?>
		</table>
	</section>
	<div class="container01">
                <a href="addcon.html"><button class=" btn btn">ADD</button></a>
                <a href="FOODcon.html"><button class="btn btn">DELETE</button></a>
            </div>
</body>
