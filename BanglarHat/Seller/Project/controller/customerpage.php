<!DOCTYPE html>
<html>
<head>
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
                  <a href="../homepage.php">Home</a>
                  <a href="../login.php">Logout</a>
                  </div>
                </div>

 <div>
  <div id="left">


 <p>Welcome to Shusmita <b><?php  echo  $_SESSION["username"]; ?></b> <p>
 
 

 <dir>
<ul style="list-style: none;">
   
 	<li><a href="../view/dashboard.php">view Profile   </a></li>
 	<li><a href="../view/registration.php">edit profile  </a></li>
 	<li><a href="../view/changepropic.php">change Profile pic  </a></li>
 	<li><a href="../view/changepass.php">change Password</a></li>
 
 </ul>
 	
 </dir>






</body>
</html>