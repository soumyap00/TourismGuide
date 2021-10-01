<html>
  <head>
    <link rel="shortcut icon" href="tablogo.png">  
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="cssP\odisha.css">
    <style>
      *{
        margin: 0px 0px;
      } 
      .table{
        width: 50.9%;
        border: black solid 1px;
        border-radius: 5px;
        border-collapse: collapse;
        margin-left: 26.5% ;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size:1em;
      }
      td{
        text-align: center;
        height:30px;
        padding: 5px 5px;
      }
      th{
        border-bottom: black solid 1px;
        background-color: #04AA6D;
        height:40px;
      }
      table tr:nth-child(even){background-color: #f2f2f2;}
      table tr:nth-child(odd){background-color: rgb(151, 253, 205);}
      table tr:hover {background-color: #ddd;}
    </style>
  </head>
  <body>
  <nav>
                <div class="logo">
                    <h1>INCREDIBLE INDIA!</h1>
                </div>
                <div class="menu">
                    <a href="../index.html">HOME</a>
                    <a href="../reservation.html">TICKETS</a>
                </div>
            </nav>
     <hr>
    <br><br><br>
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
      $sql = "SELECT name, email, mob, place FROM guides where state = 'odisha'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
  // output data of each row
        $i = 1;
        echo '<table class="table"><tr><th colspan=4>Tour Guide Information</th></tr>';
        echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Place</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" .$row["name"]."</td><td>".$row["email"]. "</td>";
          echo '<td>'.$row["mob"].'</td><td>'.$row["place"].'</td></tr>';
          $i = $i + 1;
        }
        echo "</table>";
      } 
      else {
        echo "You are not registered.<br>So, Please Register first.";
      }
      $conn->close();
    ?>
  </body>
</html>

