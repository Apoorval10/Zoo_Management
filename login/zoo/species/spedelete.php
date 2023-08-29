<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$S_ID = $_POST["S_ID"];

$sql = "DELETE FROM species WHERE S_ID = '$S_ID'";

if ($conn->query($sql)=== TRUE) {
    header("Location: speupdel.html");
} else {
    echo '<script>alert("deleted succesfully")</script>';
}

$conn->close();

?>
