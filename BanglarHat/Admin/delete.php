<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>

 <link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>

<div>
 


   

    <div class="topnav">
      <div class="topnav-right">
      <a href="homepage.php">Home</a>
      <a href="logout.php">Logout</a>
      </div>
    </div>

  </div>

	<table>


		  <fieldset style="width:400px;height: 300px">
  <legend><h3>DELETE</h3></legend> 

<form>
		
        <b>SEARCH</b> <br>
       <input type="Text" name="name" value="">
      <br>
      <input  type="submit" name="search"  value="search">
      <br><br>
      <input type="submit" name="delete"  value="Delete">


</form>
</table>



<?php  



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
           
         $name="";




          if(isset($_REQUEST['search']))
           {

           	 $name=$_REQUEST['name'];


        

       $sql= "SELECT * FROM registration WHERE Username='$name'";
        $result= mysqli_query($conn, $sql);


     if ($row=mysqli_fetch_array($result)) {

        echo "data found";

    }
    else{
    	echo "data not found";
    }
               
               
}

if(isset($_REQUEST['delete']))
{      

    $name="";
	 $name=$_REQUEST['name'];


 $sql2= "DELETE FROM registration WHERE Username='$name'";



 if ($conn->query($sql2) == 1){
       echo "Data delete  successfully";
       }
        else{
         echo "error while deleting".$conn->error;
       }
     $conn->close();
}


?>








     








</body>
</html>