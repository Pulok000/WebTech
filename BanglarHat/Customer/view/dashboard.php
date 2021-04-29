<?php
if (isset($_COOKIE["username"]) && $_COOKIE["username"] == "customer"){
} else
  header('Location: ../view/login.php');
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="../css/design.css">
	<title>
	     Customer Page
	</title>
</head>
<body>

       <style type="text/css">
.topnav {
    overflow: hidden;
}

.topnav a {
  float: left;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav-right {
  float: right;
}
  </style>

                <div class="topnav">
                  <div class="topnav-right">
                  <a href="../view/homepage.php">Home</a>
                  <a href="../view/logout.php">Logout</a>
                  </div>
                </div>


 <p>Welcome to  <b><?php session_start(); echo  $_SESSION["username"]; ?></b> <p>


 <dir>
<ul style="list-style: none;">

  <br>
  <br>
 	
  <li><a href="../view/viewprofile.php">View Profile  </a></li>
 	<li><a href="../view/registration.php">Edit Profile  </a></li>
 	<li><a href="../view/changepass.php">Change Password</a></li>
  <li><a href="../view/buy.php">Buy Product</a></li>
  <li><a href="../view/addcart.php"> Add to Cart</a></li>
  <li><a href="../view/payment.php">Payment</a></li>
 </ul>
 	
 </dir>


<?php 





 ?>








</body>
</html>