<?php

$user = 'root';
$password = '';
$database = 'zoomanagement';
$servername='localhost';
$mysqli = new mysqli($servername,$user, $password,
				 $database);

if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

	
	$sql = " SELECT * FROM visitors WHERE E_ID='e109' ORDER BY TICKET_NO DESC ";
	$result = $mysqli->query($sql);
	$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration department</title>
	<link rel="stylesheet" href="dep.css">
</head>
<body>
<a href="\login\zoo\visitors.html"><button class="btn btn1">back</button></a>
    <div class="center1">
		<h2>Visitor Details</h2>
		<table>
			<tr>
				<th>TICKET NUMBER</th>
				<th>NAME</th>
				<th>PHONE</th>
				<th>DATE</th>
                <th>TIME</th>
			</tr>
			 <?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['TICKET_NO'];?></td>
				<td><?php echo $rows['NAME'];?></td>
                <td><?php echo $rows['PHONE'];?></td>
				<td><?php echo $rows['V_DATE'];?></td>
				<td><?php echo $rows['V_TIME'];?></td>
			</tr>
            <?php
					}
				?>
		</table>
    </div>

  
</body>
</html>