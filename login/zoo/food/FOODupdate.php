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
$FOOD_TYPE = $_POST["FOOD_TYPE"];
$QUANTITY = $_POST["QUANTITY"];

try {
    $sql = "UPDATE food SET FOOD_TYPE='$FOOD_TYPE', QUANTITY='$QUANTITY' WHERE FOOD_ID='$FOOD_ID'";
    if ($conn->query($sql) === TRUE) {
        header("Location: FOOD.html");
    }

}

catch(Exception $e) {
        echo '<script type="text/javascript">alert(" '.$e->getMessage().'");</script>';

  } 


   

$conn->close();

?>