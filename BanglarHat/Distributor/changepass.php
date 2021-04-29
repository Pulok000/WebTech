<!DOCTYPE html>
<html>
<head>
  <title>lab task 2.1</title>

  <style type="text/css">
    label
    {
      width: 200px;
      display: inline-block;
      text-align: left;
      
    }
  .error
  {
    color: red;
  }
</style>

</head>
<body>


  <?php



  $oldPass=$pass=$errOldPass=$errNewPass="";




  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  $checkCpass=$_POST["fcpass"];
  $checkNpass=$_POST["fnpass"];
  $checkRnpass=$_POST["frnpass"];



    if(!empty($checkCpass))
    {
      if($checkCpass==$checkNpass)
      {
        $errOldPass="New Password should not be same as the Current Password";
      }
      else
      {
        $oldPass=test_input($checkCpass);
        
      }

      
    }



    if(!empty($checkRnpass))
    {
      if($checkRnpass==$checkNpass)
      {
        $pass=test_input($checkNpass);
      }
      else
      {
        $errNewPass="New Password must match with the Retyped Password";
        
      }


    }

  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>



<fieldset style="width:750px">
  <legend><h3>Change Password</h3></legend> 

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
    <label for="fcurpass">Current Password :</label> 
    <input type="Password" name="fcpass"><br>

    <label for="fnewpassword" style="color: green;">New Password :</label> 
    <input type="Password" name="fnpass">
    <span class="error"><?php echo $errOldPass;?></span><br>

    <label for="frepassword" style="color: red;">Retype New Password :</label> 
    <input type="Password" name="frnpass">

    <span class="error"><?php echo $errNewPass;?></span> 
    <hr align=center  size=1>

  
    <input type="submit" name="fsubmit" value="Submit">
  
  </form>

</fieldset>



</body>
</html>