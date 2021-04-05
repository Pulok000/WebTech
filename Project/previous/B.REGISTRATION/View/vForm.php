<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>lab task 2.1</title>

  <style type="text/css">
    label
    {
      width: 150px;
      display: inline-block;
      text-align: left;
      
    }
  .error
  {
    color: red;
  }
  #page {
    min-height: 200px;
    width: 50%;
    min-width: 600px;
    background: white;
    margin: 50px auto;

}


</style>

</head>
<body>

<div id="containersDiv">

    <?php include ('../../Asset/header1.php');?>
        

  <div >


  <?php
     include ('../Control/cFormValidation.php');
    ?>

  <?php
     include ('../Control/cInsertJsonData.php');
    ?>




<div id="page" >

<fieldset style="width:500px">
  <legend><h3>REGISTRATION</h3></legend> 

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
    <label for="name">Name :</label> 
    <input type="text" name="fname">
    <span class="error"><?php echo $errname1;?></span>
    <hr align=center  size=1>

    <label for="email">Email :</label> 
    <input type="text" name="femail">
    <span class="error"><?php echo $errname2;?></span>    
    <hr align=center  size=1>

    <label for="username">User Name :</label> 
    <input type="text" name="fusername">
    <span class="error"><?php echo $errname3;?></span><br>    
    <hr align=center  size=1>

    <label for="password">Password :</label> 
    <input type="Password" name="fpassword">
    <span class="error"><?php echo $errpass3;?></span>     
    <hr align=center  size=1>

   <label for="confirmpassword">Confirm Password :</label> 
    <input type="Password" name="fcpassword">
    <span class="error"><?php echo $err4;?></span>      
    <hr align=center  size=1>    
    

    <fieldset style="width:400px">
<legend><h3>Gender</h3></legend> 


 <input type="radio" name="fmale">Male
 <input type="radio" name="ffemale">Female
<input type="radio" name="fother"> Other
<span class="error"><?php echo $err6;?></span>

<hr align=center  size=1>



</fieldset>

<hr align=center  size=1>

<fieldset style="width:400px">
<legend><h3>DATE OF BIRTH</h3></legend> 


  <input type="text" name="fdd" value="dd" size="1"> <span>/</span>
  <input type="text" name="fmm" value="mm" size="1"> <span>/</span>
  <input type="text" name="fyy" value="yyyy" size="1">
  <span class="error"><?php echo $errname7;?></span>
<hr align=center  size=1>


</fieldset>


   
    <input type="submit" name="fsubmit" value="Submit">
    <input type="reset">
    
  </form>

</fieldset>
</div>




        </div>

    
    <?php
     include ('../../Asset/footer.php');
    ?>
    

</div>







</body>
</html>