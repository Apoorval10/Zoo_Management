<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$D_ID = $_POST["D_ID"];
$MGR_ID = $_POST["MGR_ID"];
$PASSWORD = $_POST["PASSWORD"];


$sql = "UPDATE department SET MGR_ID='$MGR_ID', PASSWORD='$PASSWORD' WHERE D_ID='$D_ID'";

if ($conn->query($sql)=== TRUE) {
    echo "record Updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>