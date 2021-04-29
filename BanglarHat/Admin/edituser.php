<?php 

if(isset($_REQUEST['submit'])){
$name = $_REQUEST['username'];
$password=$_REQUEST['password'];
$email=$_REQUEST['email'];
$phonenumber=$_REQUEST['phonenumber'];
$DOB=$_REQUEST['DOB'];
$gender = $_REQUEST['gender'];
$bloodgroup = $_REQUEST['bloodgroup'];
$type = $_REQUEST['type'];




$servername = "localhost";
         $username = "username";
         $dbname = "banglarhat";

           // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
         if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
          }

 
  

      $sql="INSERT INTO `registration` (`Username`, `Password`, `Email`, `PhoneNumber`, `DOB`, `Gender`, `BloodGroup`, `Type`) VALUES ('$name', '$password', '$email', '$phonenumber', '$DOB', '$gender', '$bloodgroup','$type');
         ";




           if ($conn->query($sql) == true){
             echo "Data inserted succesully";
               }
        else{
         echo "error while inserted".$conn->error;
       }
     $conn->close();

  }

session_start();


$value=$_SESSION["username"];

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://use.fontawesome.com/b08e066faf.js"></script>
<link rel="stylesheet" type="text/css" href="regstyle.css">
  
   
</head>
<body>
     <div >
     	<img class="logoimage" src="picture/logo.png">
       <br>  &nbsp;
     	<label class="logo"> <b>Banglar Hat</b> </label>
     </div>

	<div class="registration">
		<h1>Registration</h1>
		<form action="" class="reg" id="form">
     


      <div class="from-contol">
		  <label>Username</label>
      <input type="text" name="username"  value="" placeholder="Enter username" id="username">
      <small >Error message</small>
      </div>

      <div class="from-contol">
      <label>Password</label>
      <input type="text" name="password" placeholder="Enter password" id="password">
      <small>Error message</small>
      </div>


      <div class="from-contol">
      <label>Retype Password</label>
      <input type="text" name="retypepassword" placeholder="Enter password" id="retypepassword">
      <small>Error message</small>
      </div>

      <div class="from-contol">
      <label>User Type</label>
      <select name="type" id="type">
        <option selected disabled ></option >
        <option value="Admin">Admin</option>
      <option value="Seller">Seller</option>
      <option value="Distributor">Distributor</option> 
      <option value="Customer">Customer</option>     
      </select>
      <small>Error message</small>
      </div>


      <div class="from-contol">
      <label>Email</label>
      <input type="text" name="email" placeholder="Enter your Email" id="email">
      <small>Error message</small>
      </div>
      
     <div class="from-contol">
      <label>Phone Number</label>
      <input type="Number" name="phonenumber" placeholder="Enter your phonenumber" id="phonenumber">
      <small>Error message</small>
      </div>

      <div class="from-contol">
      <label>Dath of Birth</label>
      <input type="text" name="DOB" placeholder="Enter your dath of barth" id="DOB">
      <small>Error message</small>
      </div>

      
      


      <div class="from-contol">
      <label>Gender</label>
      <select name="gender" id="gender">
        <option selected disabled ></option >
        <option value="male">Male</option>
      <option value="femail">Female</option>
      <option value="other">Other</option>      
      </select>
      <small>Error message</small>
      </div>


      <div class="from-contol">
       <label>Blood Group</label>
      <select name="bloodgroup" id="bloodgroup">
       <option selected disabled></option>
       <option value="A+">A+</option>
       <option value="A-">A-</option>
       <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    </select>
      <small>Error message</small>
      </div>
      
      

    <br>


      <input type="submit" name="submit" value="Submit" onclick="return checkinputs()">
	



		</form>

	</div>

  <script type="text/javascript" src="regvalidation.js"></script>

</body>
</html>


