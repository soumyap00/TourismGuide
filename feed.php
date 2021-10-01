<html>
    <head>
        <!-- <link rel="shortcut icon" href="images\tablogo.png"> -->
        <title>Submit Page</title>
        <style>
            body{
                background-image: url("images/bgreg2.jpg");
                background-size: 100% 100%;
            }
        </style>  
    </head>
<body>

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedback VALUES ('". $_POST["name"] ."','". $_POST["email"] ."','". $_POST["place"] ."','". $_POST["feed"] ."')";

if ($conn->query($sql) === TRUE) {
  echo '<script> alert("Thank You ! for your feedback ");
       location.replace("http://localhost/project/feedback.html"); 
       </script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="login.html">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html">Home</a>
</center>
<body>
<html>