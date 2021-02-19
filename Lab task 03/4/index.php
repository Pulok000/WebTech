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

  $errname1="";

  //<!-- FOR NAME -->

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $check=$_POST["fname"];
    $j=str_word_count($check,0);


    if(empty($check))
    {
      $errname1="* Name is required";

    }
    else if($j<2)
    {


      if(!ctype_alpha($check[0]))
      {
        $errname1 = "Must start with a letter";
        
      }
      else if(!preg_match("/^[a-zA-Z1-9-. ]*$/",$check))
      {

        $errname1 = "You can use a-z, A-Z, period,dash only";
        
      }
      else
      {
        $errname1="* Name should contain  at least two words";
        
      }

    }
    else
    {

      if(!preg_match("/^[a-zA-Z1-9-. ]*$/",$check))
      {

        $errname1 = "You can use a-z, A-Z, period,dash only";
        
      }

    }


  }



  //<!-- FOR Gender -->

$result=$err6="";

    if(empty($_POST["fmale"]) && empty($_POST["ffemale"]) && empty($_POST["fother"]))
    {
      $err6="* You must select your gender";
    }
    else
    {
      if(empty($_POST["fmale"]) && empty($_POST["ffemale"]) )
      {
        $result="Other";
      }
      else if(empty($_POST["fmale"]) && empty($_POST["fother"]))
      {
        $result="Female";
      }
      else
      {
        $result="male";
      }
      
    }

  
//<!-- FOR DOB -->


  $errname7="";
    $dd="";
    $mm="";
    $yy="";
  

  $flag1=false;

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $dd=$_POST["fdd"];
    $mm=$_POST["fmm"];
    $yy=$_POST["fyy"];
    
    

    if(empty($dd) || empty($mm) || empty($yy))
    {
      $errname7="* date is required";

      $flag1=false;
    }
    else
    {
        if($dd>=1 && $dd<=31  && $flag1 )
        {

          $dd=test_input(($_POST["fdd"]));
          $flag1=true;
        }
        else
        {
          $errname7="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          $flag1=false;
        }
        if($mm>=1 && $mm<=12 && flag1)
        {
          $mm=test_input(($_POST["fdd"]));
          $flag1=true;

        }
        else
        {
          $errname7="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          $flag1=false;
        }

        if($yy>=1953 &&$yy<=1998 && flag1)
        {
          $yy=test_input(($_POST["fyy"]));
          $flag1=true;
        }
        else
        {
          $errname7="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          $flag1=false;
        }
    }

    if(flag1)
    {
      $dob=$dd."/".$mm."/".$yy;
    }


  }







  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>







<?php



            if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST["fname"],  
                     'email'          =>     $_POST["femail"],  
                     'userName'     =>     $_POST["fusername"],
                     'password'     =>     $_POST["fcpassword"],
                     'gender'     =>     $result,
                     'dob'     =>     $dob
                 
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
    <span class="error"><?php echo $errname1;?></span>
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











</body>
</html>