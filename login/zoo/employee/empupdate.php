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
$E_NAME = $_POST["E_NAME"];
$PHONE = $_POST["PHONE"];
$AGE = $_POST["AGE"];
$GENDER = $_POST["GENDER"];

$sql = "UPDATE employee SET E_NAME='$E_NAME', PHONE='$PHONE', AGE='$AGE', GENDER='$GENDER' WHERE E_ID='$E_ID'";
try{
if ($conn->query($sql)=== TRUE) {
    echo "record Updated successfully";
} } 
catch(Exception $e) {
    echo '<script type="text/javascript">alert(" '.$e->getMessage().'");</script>';

} 


$conn->close();

?>