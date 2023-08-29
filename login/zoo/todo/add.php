<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$taskno = $_POST["TASK_NO"];
$task = $_POST["TASK"];
$D_ID = $_POST["D_ID"];

$sql = "INSERT INTO todo (TASK_NO, TASK, D_ID)
VALUES ('$taskno', '$task','$D_ID')";
try{
if ($conn->query($sql)=== TRUE) {
    header("Location: add.html");
} 
}catch(Exception $e) {
    echo '<script type="text/javascript">alert(" '.$e->getMessage().'");</script>';

} 

$conn->close();

?>