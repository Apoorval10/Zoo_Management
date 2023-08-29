<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$FOOD_ID = $_POST["FOOD_ID"];
$S_ID= $_POST["S_ID"];

$sql = "DELETE FROM consumes WHERE FOOD_ID='$FOOD_ID' AND S_ID='$S_ID' ";

if ($conn->query($sql)=== TRUE) {
    header("Location: FOODcon.html");
} else {
    echo '<script>alert("Invalid Organization ID or Password")</script>';
}

$conn->close();

?>
