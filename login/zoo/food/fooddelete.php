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

$sql = "DELETE FROM food WHERE FOOD_ID='$FOOD_ID'  ";

if ($conn->query($sql)=== TRUE) {
    header("Location: FOOD.html");
    
} else {
    echo '<script>alert("deleted succuessfully")</script>';
}

$conn->close();

?>
