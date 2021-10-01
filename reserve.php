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

$sql = "INSERT INTO tourist VALUES ('". $_POST["name"] ."','". $_POST["email"] ."','". $_POST["tel"] ."','". $_POST["place"] ."','". $_POST["year"] ."',". $_POST["num"] .")";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Welcome,". $_POST["name"] ."</h1><br>Thank you for Registering.";
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