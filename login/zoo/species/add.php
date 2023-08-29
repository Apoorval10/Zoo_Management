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
$S_NAME = $_POST["S_NAME"];
$CAGE_NO = $_POST["CAGE_NO"];
$AGE = $_POST["AGE"];
$GENDER = $_POST["GENDER"];
$D_ID = $_POST["D_ID"];

$sql = "INSERT INTO species(S_ID, S_NAME, CAGE_NO, AGE, GENDER, D_ID) VALUES ('$S_ID', '$S_NAME','$CAGE_NO', '$AGE', '$GENDER','$D_ID')";
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