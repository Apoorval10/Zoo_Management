<?php

$user = 'root';
$password = '';
$database = 'zoomanagement';
$servername='localhost';
$mysqli = new mysqli($servername,$user, $password,$database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = " SELECT * FROM employee WHERE D_ID='D02' ORDER BY E_ID DESC ";
$result = $mysqli->query($sql);
// $mysqli->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reptile Department</title>
    <link rel="stylesheet" href="manager.css">
</head>
<body>
    <div class="center1">
		<h2>Employee Details</h2>
		<table>
			<tr>
					<th>EMPLOYEE ID</th>
					<th>NAME</th>
					<th>PHONE</th>
					<th>AGE</th>
					<th>GENDER</th>
			</tr>
            <?php
			while($rows=$result->fetch_assoc())
					{
				?>
			<tr>
				<td><?php echo $rows['E_ID'];?></td>
				<td><?php echo $rows['E_NAME'];?></td>
                <td><?php echo $rows['PHONE'];?></td>
				<td><?php echo $rows['AGE'];?></td>
				<td><?php echo $rows['GENDER'];?></td>
			</tr>
            <?php
					}
				?>
        </table>
    </div>
    <div class="container">
        <a href="employee/add.html"><button class="btn btn1">ADD</button></a>
        <a href="employee/empupdel.html"><button class="btn btn1">DELETE/UPDATE</button></a>
    </div>
    <!DOCTYPE html>

    <?php
	
	$sql = " SELECT * FROM todo WHERE D_ID='D02' ORDER BY TASK_NO DESC ";
	$result = $mysqli->query($sql);
	// $mysqli->close();
?>
<html lang="en">
	<body>
	<a href="\login\first.html"><button class="btn btn1">logout</button></a>
		<section>
			<h2>To do List</h2>
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
        <div class="container01">
                <a href="todo/add.html"><button class=" btn btn1">ADD</button></a>
                <a href="todo/todo.html"><button class="btn btn1">DELETE/UPDATE</button></a>
            </div>
	</body>
</html>

<?php
	
	$sql = " SELECT * FROM species WHERE D_ID='D02' ORDER BY S_ID DESC ";
	$result = $mysqli->query($sql);
	// $mysqli->close();
?>
<html lang="en">
	<body>
		<section>
			<h2>Species list</h2>
			<table>
				<tr>
					<th>SPECIE NUMBER</th>
					<th>SPECIE NAME</th>
					<th>CAGE NUMBER</th>
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
				
				<?php
					}
				?>
			</table>
		</section>
        <div class="container01">
                <a href="species/add.html"><button class=" btn btn1">ADD</button></a>
                <a href="species/speupdel.html"><button class="btn btn1">UPDATE/DELETE</button></a>
            </div>
	</body>
</html>
<?php
	
	$sql = " SELECT * FROM food WHERE E_ID='e103' ORDER BY FOOD_ID DESC ";
	$result = $mysqli->query($sql);
	$mysqli->close();
?>
<html lang="en">
	<body>
		<section>
			<h2>Food list</h2>
			<table>
				<tr>
					<th>FOOD ID</th>
					<th>FOOD NAME</th>
					<th>QUANTITY</th>
				</tr>
				<?php
					while($rows=$result->fetch_assoc())
					{
				?>
				<tr>
					<td><?php echo $rows['FOOD_ID'];?></td>
					<td><?php echo $rows['FOOD_TYPE'];?></td>
					<td><?php echo $rows['QUANTITY'];?></td>
				</tr>
				
				<?php
					}
				?>
			</table>
		</section>
        <div class="container01">
                <a href="food/add.html"><button class=" btn btn1">ADD</button></a>
                <a href="food/FOOD.html"><button class="btn btn1">UPDATE/DELETE</button></a>
            </div>
	</body>
</html>