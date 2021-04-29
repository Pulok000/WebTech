<!DOCTYPE html>
<html>
<head>
  <title>Logout</title>
</head>
<body>

</body>
</html>




<?php


 setcookie("name",$name,time()-120);

 

  setcookie("pass",$pass, time()-120);



session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo '<script>alert("logout Successfully")</script>';

 header("Location: login.php");

?>
