<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
 <style type="text/css">

.error
{
  color: red;
}

</style>

<script>  
  function validateform(){  

    var name=document.myform.name.value;  
    if (name==null || name=="")
    {  
      alert("Name can't be blank");  
      return false;  
    }

  }

  function checkName() 
  {
    if (document.getElementById("name").value == "") {
      document.getElementById("nameErr").innerHTML = "Name can't be blank";
      document.getElementById("nameErr").style.color = "red";
      document.getElementById("name").style.borderColor = "red";
    }else{
      document.getElementById("nameErr").innerHTML = "";
      document.getElementById("name").style.borderColor = "black";
    }
  }

  function checkPassword() 
  {   

  if (document.getElementById("password").value == "")
  {

    document.getElementById("passErr").innerHTML = "Password can't be blank";
    document.getElementById("passErr").style.color = "red";
    document.getElementById("password").style.borderColor = "red";

  }
  else
  {
    document.getElementById("passErr").innerHTML = "";
    document.getElementById("password").style.borderColor = "black";

  }

}

</script>  

</head>
<body>

  <div id="containersDiv">
    <?php include ('Asset/header1.php');?>

    <div>

      <div id="page">

        <fieldset style="width:400px">
          <legend><h3>LOGIN</h3></legend> 

          <!-- action="control/loginValidation.php" -->

          <form name="loginForm" action="control/loginValidation.php" method="POST" onsubmit="return validateLogin()">

           <label  id="" for="name">User Name :</label> 
           <input type="text" name="fname" id="name" onkeyup="checkName()" onblur="checkName()">
           <span id="nameErr"></span>
           <br/>  

           <label id="labelForLogin" for="password">Password :</label>
           <input type="password" id="password" name="fpass" onkeyup="checkPassword()" onblur="checkPassword()">
           <span id="passErr"></span>

           <hr align=center  size=1>

           <label id="labelForLogin" for="fremember">Remember me</label> 
           <input type="checkbox" name="frem">
           <br>
           <br>
           <input type="submit" name="login" value="Submit">
           <a href="forgetPassword.php">Forget password?</a>
         </form>

       </fieldset>


     </div>


   </div>

  <?php
     include ('Asset/footer.php');
    ?>
    
 </div>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  $_SESSION["fname"]=$_POST["fname"];
  
  }
 
?>