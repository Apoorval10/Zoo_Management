<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="third.css">
</head>
<body>
<a href="\login\first.html"><button class="btn btn1">back</button></a>

    <div class="center">
        <h1>Manager Login</h1>
        <form action="" method="post">
            <div class="txt_field">
                <p><strong>Manager_id:</strong></p>
                <input type="text" id="MRG_ID" name="MGR_ID" placeholder="Enter the manager id">
            </div>
            <div class="txt_field">
                <p><strong>Password:</strong></p>
                <input type="password" name="password" id="password" placeholder="Enter the password">
            </div>
            <input type="submit" value="LOGIN"> 
        </form>
    </div>

</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "zoomanagement";
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    if (isset($_POST['password'])) {
        // Get data from form
        $user = $_POST["MGR_ID"];
        $pass = $_POST["password"];
        if ($user == 'e103') {
            // Check if username and password match a record in the database
            $sql = "SELECT * FROM department WHERE department.MGR_ID='$user' AND password='$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Login successful
                session_start();
                $_SESSION["logged_in"] = true;
                $_SESSION["username"] = $user;
                header("Location: zoo/remanager.php");
            } else {
                // Login failed
                echo
                    "
             <script>
               alert('Invalid Username or Password');
             </script>
             ";
            }
        } else {
            // Login failed
            echo
                "
         <script>
           alert('Invalid Username or Password');
         </script>
         ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="center1">
        <h1>Employee Login</h1>
        <form method="post">
            <div class="txt_field">
                <p><strong>department  id:</strong></p>
                <input type="text" id="D_ID" name="D_ID" value="D02">
            </div>
            <div class="txt_field">
                <p><strong>Password:</strong></p>
                <input type="password" name="password" id="password" placeholder="Enter the password">
            </div>
            <input type="submit" value="LOGIN"> 
        </form>
    </div>
</body>
</html>
<?php

if (isset($_POST['password'])) {
  // Get data from form
  $user = $_POST["D_ID"];
  $pass = $_POST["password"];
    if ($user == 'D02') {
        // Check if username and password match a record in the database
        $sql = "SELECT * FROM department WHERE D_ID='$user' AND password='$pass'";
        $result = $conn->query($sql);



        if ($result->num_rows > 0) {
            // Login successful
            session_start();
            $_SESSION["logged_in"] = true;
            $_SESSION["username"] = $user;
            header("Location: zoo/reptile.php");
        } else {
            // Login failed
            echo
                "
             <script>
               alert('Invalid Username or Password');
             </script>
             ";
        }

    }else{
        echo
        "
     <script>
       alert('Invalid Username or Password');
     </script>
     ";
    }
  $conn->close();
}
?>