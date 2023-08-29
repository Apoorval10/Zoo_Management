<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoomanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$TICKET_NO = $_POST["TICKET_NO"];
$NAME = $_POST["NAME"];
$PHONE = $_POST["PHONE"];
$DATE = $_POST["V_DATE"];
$TIME = $_POST["V_TIME"];
$E_ID = $_POST["E_ID"];

$sql = "INSERT INTO visitors (TICKET_NO,NAME,PHONE,V_DATE,v_TIME,E_ID)
VALUES ('$TICKET_NO', '$NAME', '$PHONE', '$DATE','$TIME','$E_ID')";

try{
if ($conn->query($sql)=== TRUE) {
    echo "New record created successfully";
    header("Location: /login/zoo/visitors.html");
}
} 
catch(Exception $e) {
    echo '<script type="text/javascript">alert(" '.$e->getMessage().'");</script>';

} 

$conn->close();

?>