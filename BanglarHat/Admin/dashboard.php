<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="degine.css">
	<title>
	     Admin Page
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
                  <a href="homepage.php">Home</a>
                  <a href="logout.php">Logout</a>
                  </div>
                </div>


 <p>Welcome to <b><?php session_start(); echo  $_SESSION["username"]; ?></b> <p>


 <dir>
<ul style="list-style: none;">

 	<li><a href="viewprofile.php">view Profile   </a></li>
 	<li><a href="registration.php">edit profile  </a></li>
 	<li><a href="changepropic.php">change Profile pic  </a></li>
 	<li><a href="changepass.php">change Password</a></li>
 </ul>
 	
 </dir>


<?php 





 ?>








</body>
</html>