<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$TASK_NO = $_POST["TASK_NO"];
$D_ID = $_POST["D_ID"];

$sql = "DELETE FROM todo WHERE TASK_NO='$TASK_NO' AND D_ID='$D_ID' ";

if ($conn->query($sql)=== TRUE) {
    header("Location: todo.html");
} else {
    echo '<script>alert("Invalid Organization ID or Password")</script>';
}

$conn->close();

?>
