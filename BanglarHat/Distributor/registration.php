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
		<h1> Register as Distributor</h1>
		<form action="" class="reg" id="form">

      <div class="from-contol">
		  <label>Distributor name</label>
      <input type="text" name="username" placeholder="Enter username" id="username">
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
      <label>Distributor Type</label>
      <select name="type" id="type">
        <option selected disabled ></option >
        <option value="Regular">Regular</option>
      <option value="Irregular">Irregular</option>
      <option value="New Distributor">New Distributor</option>     
      </select>
      <small>Error message</small>
      </div>


      <div class="from-contol">
      <label>Email</label>
      <input type="text" name="email" placeholder="Enter your Email" id="email" onkeyup="checkEmail(this.value)">
      <span id="emailErr" style="color:orangered"></span>
      <small>Error message</small>
      </div>
      
     <div class="from-contol">
      <label>Phone Number</label>
      <input type="Number" name="phonenumber" placeholder="Enter your phonenumber" id="phonenumber">
      <small>Error message</small>
      </div>

      <div class="from-contol">
      <label>Date of Birth</label>
      <input type="text" name="DOB" placeholder="Enter your dath of birth" id="DOB">
      <small>Error message</small>
      </div>

      
      


      <div class="from-contol">
      <label>Gender</label>
      <select name="gender" id="gender">
        <option selected disabled ></option >
        <option value="male">Male</option>
      <option value="female">Female</option>
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
<script type="text/javascript">
  function checkEmail(email) {
  if (email.length == 0) {

    document.getElementById("emailErr").innerHTML = "";

    return;

  } else {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {

      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("emailErr").innerHTML = this.responseText;

      }

    };

    xmlhttp.open("GET", "checkEmail.php?email=" + email, true);

    xmlhttp.send();

  }

}
</script>
</html>


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
         $username = "root";
         $dbname = "phpproject";

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









 ?>