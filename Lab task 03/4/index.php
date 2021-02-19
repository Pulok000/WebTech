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


<?php

            if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['fname'],  
                     'email'          =>     $_POST["femail"],  
                     'userName'     =>     $_POST["fusername"],
                     'password'     =>     $_POST["fcpassword"]
                 
                );
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File Appended Success fully";  
                }  
                else  
                {  
                $error = 'JSON File not exits';  
                }  

              }


?>



<div id="page" >

<fieldset style="width:500px">
  <legend><h3>REGISTRATION</h3></legend> 

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
    <label for="name">Name :</label> 
    <input type="text" name="fname">
    <hr align=center  size=1>

    <label for="email">Email :</label> 
    <input type="text" name="femail">
    <hr align=center  size=1>

    <label for="username">User Name :</label> 
    <input type="text" name="fusername">
    <hr align=center  size=1>

    <label for="password">Password :</label> 
    <input type="text" name="fpassword">
    <hr align=center  size=1>

   <label for="confirmpassword">Confirm Password :</label> 
    <input type="text" name="fcpassword">
    <hr align=center  size=1>    

    <fieldset style="width:400px">
<legend><h3>Gender</h3></legend> 

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
 <input type="radio" name="fmale">Male
 <input type="radio" name="ffemale">Female
<input type="radio" name="fother"> Other
<hr align=center  size=1>

<!-- <span class="error"><?php echo $err;?></span> -->
</form>


</fieldset>

<hr align=center  size=1>

<fieldset style="width:400px">
<legend><h3>DATE OF BIRTH</h3></legend> 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">

  <input type="text" name="fdd" value="dd" size="1"> <span>/</span>
  <input type="text" name="fmm" value="mm" size="1"> <span>/</span>
  <input type="text" name="fyy" value="yyyy" size="1">
<hr align=center  size=1>

<!-- <span class="error"><?php echo $errname;?></span> -->

</form>
</fieldset>


   
    <input type="submit" name="ftsubmit" value="Submit">
    
  </form>

</fieldset>
</div>











</body>
</html>