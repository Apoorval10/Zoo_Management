<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$E_ID = $_POST["E_ID"];

$sql = "DELETE FROM employee WHERE E_ID = '$E_ID'";

if ($conn->query($sql)=== TRUE) {
    
    header("Location: empupdel.html");
} else {
    echo '<script>alert("deleted succuessfully")</script>';
}

$conn->close();

?>
