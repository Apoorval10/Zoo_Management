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
$FOOD_NAME = $_POST["FOOD_TYPE"];
$QUANTITY = $_POST["QUANTITY"];
$E_ID = $_POST["E_ID"];



$sql = "INSERT INTO food (FOOD_ID, FOOD_TYPE, QUANTITY, E_ID)
VALUES ('$FOOD_ID', '$FOOD_NAME', '$QUANTITY','$E_ID')";
try {
    if ($conn->query($sql) === TRUE) {
        header("Location: add.html");
    }
}
catch(Exception $e) {
    echo '<script type="text/javascript">alert(" '.$e->getMessage().'");</script>';

} 

$conn->close();

?>