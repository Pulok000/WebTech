<!DOCTYPE html>
<html>
<head>
  <title>Login</title>

  

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="https://use.fontawesome.com/b08e066faf.js"></script>
     
     <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">

 



</head>
<body style="background-image: url('../picture/bc.jpg');">

   
    <div>
      <div class="topnav">
      <div class="topnav-right">
      <a href="../view/homepage.php">Home Page</a>
    </div>


     <div >
      <img class="logoimage" src="../picture/logo.png">
       <br>  &nbsp;
      <label class="logo"> <b>Banglar Hat</b> </label>
     </div>

  <div class="login">
    <h1> Log In as Customer</h1>  
    <form action="">

      <div class="username">
      <label>Username</label>
      <input type="text" name="username" placeholder="Enter username" id="username">
      <small>error message</small>
      <br>

      </div>

      <div class="password">
      <label>Password</label>
      <input type="password" name="password" placeholder="Password" id="password">
      <small>error message</small>
      </div>

       <br>
      <input type="submit" name="submit" value="login"  onclick="return checkinputs()">

    </form>

    <div class="bottom-text">
      <input type="checkbox" name="remember" checked="checked"> Remember me
      <a href="../controller/forgetpass.php">Forget Password ?</a>
      <br>
      <a href="../view/registration.php">Create an account</a>
      
    </div>

    <div class="socials">
      <a href=""><i class="fa fa-facebook"></i></a>
      <a href=""><i class="fa fa-twitter"></i></a>
      <a href=""><i class="fa fa-pinterest"></i></a>
      <a href=""><i class="fa fa-linkedin"></i></a>
      
    </div>
    
  </div>
<div id="overlay-area">

</div>

<script type="text/javascript" src="../js/loginvalidation.js"></script>




</body>

</html>


<?php
  session_start();
  if(isset($_REQUEST['submit'])){
      

     $name=$_REQUEST['username'];
     $pass=$_REQUEST['password'];




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


        $sql="select * from registration where Username='$name' and Password='$pass';";


        $result= mysqli_query($conn, $sql);




           if ($row=mysqli_fetch_array($result)){
           
              setcookie("username", "customer", time() + 3600, '/');

            $_SESSION["username"] = $row["username"];

            header('Location: ../model/index.php');
               }
        else{
         echo  "error while login ".$conn->error;
       }
     $conn->close();




  }


?>

