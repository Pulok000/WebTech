
<?php
if(isset($_REQUEST['fusername']))
{

        $name =$_REQUEST['fusername'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farmer";

           // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
         if ($conn->connect_error)
          {
            die("Connection failed: " . $conn->connect_error);
          }
            $selectQuery = "SELECT * FROM `user_info` WHERE username = '" . $name . "' ";

            $result = mysqli_query($conn, $selectQuery);

            $count = mysqli_num_rows($result);

         if ($count>0)
         {
            echo "Username already exists";
         }
         else
         {
            echo "Username Available.";
         }


}

?>
