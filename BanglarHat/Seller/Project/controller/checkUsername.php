<?php
if(isset($_REQUEST['username']))	
$username =$_REQUEST['username'];
     $servername = "localhost";
         $username = "username";
        $password = "password";
         $dbname = "banglarhat";

           // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
         if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
          }
    $selectQuery = "SELECT * FROM `registration` WHERE username = '" . $username . "' ";

    $result = mysqli_query($conn, $selectQuery);

    $count = mysqli_num_rows($result);

         if ($count>0){
         	echo "Already Registered with this Username";
         }
