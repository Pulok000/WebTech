
    <?php

    $flag1=true;

  $name=$errname1=$check="";

  //<!-- FOR NAME -->

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $check=$_POST["fname"];
    $j=str_word_count($check,0);


    if(empty($check))
    {
      $errname1="* Name is required";
      $flag1=false;

    }
    else if($j<2)
    {


      if(!ctype_alpha($check[0]))
      {
        $errname1 = "Must start with a letter";
        $flag1=false;
        
      }
      else if(!preg_match("/^[a-zA-Z0-9-. ]*$/",$check))
      {

        $errname1 = "You can use a-z, A-Z, period,dash only";
        $flag1=false;
        
      }
      else
      {
        $errname1="* Name should contain  at least two words";
        $flag1=false;
        
      }

    }
    else
    {

      if(!preg_match("/^[a-zA-Z0-9-. ]*$/",$check))
      {

        $errname1 = "You can use a-z, A-Z, period,dash only";
         $flag1=false;
        
      }

    }


  }

  if($flag1)
  {
    $name=test_input($check);
  }



// Set session variables
$_SESSION["fname"] =$name;
// echo "Session variables are set.";







  //<!-- FOR email -->

  $flag2=TRUE;
  $email=$errname2="";

  

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {

    $check=$_POST["femail"];
    $j=str_word_count($check,0);


    if(empty($check))
    {
      $errname2="* Email is required";
      $flag2=FALSE;

    }
    else if(!filter_var($check, FILTER_VALIDATE_EMAIL)  && $flag2)
    {
      $errname2="Invalid email format";
      $flag2=FALSE;
    }
    else
    {
      $email=test_input($_POST["femail"]);

      $_SESSION["femail"] =$email;
        
    }


  }



//<!-- FOR userName and Pass -->


  $flag3=TRUE;
  $flag4=true;
  $uname=$pass=$errname3=$errpass3="";


  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  $checkName=$_POST["fusername"];
  $checkPass=$_POST["fpassword"];

  $namePatt2='/^.{2,}$/';
  $passPatt1='/^.{8,}$/';
  $passPatt2='/^(?=.*[@#$%]).{8,}$/';

    if(!empty($checkName))
    {
      if(!preg_match("/^[a-zA-Z1-9-._ ]*$/",$checkName))
      {
        $errname3="* User Name can contain alpha numeric characters, period,dash or underscore only";
        $flag3=false;
      }
      else if(!preg_match($namePatt2,$checkName))
      {
        $errname3="* User Name must contain at least two (2) characters";
        $flag3=false;
      }
      else
      {
        $uname=test_input($checkName);
        $flag3=true;
      }
      
    }
    else
    {
    $errname3="* User Name is required";
    
    $flag3=true;
    }

    if(!empty($checkPass))
    {
      if(!preg_match($passPatt1,$checkPass))
      {
        $errpass3="Password must not be less than eight (8) characters";
        $flag4=false;
      }
      else if(!preg_match($passPatt2,$checkPass))
      {
        $errpass3="Password must contain at least one of the special characters (@, #, $,%)";
        $flag4=false;
      }
      else
      {
        $pass=test_input($checkPass);
        $flag4=true;
      }


    }
    else
    {

    $errpass3="Password is required";

    $flag4=true;
    }




  }

 


  //<!-- FOR confirm password -->


  $flag5=true;
  $pass=$err4="";


  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
 
  $checkpass=$_POST["fpassword"];
  $checkcpass=$_POST["fcpassword"];




    if(!empty($checkcpass))
    {
      if($checkcpass==$checkpass)
      {
        $pass=test_input($checkcpass);
        $flag5=true;
      }
      else
      {
        $err4="Password does not match with each other";
        $flag5=false;
        
      }


    }
    else
    {
        $err4="Confirm your password";
        $flag5=false;
    }




  }




  //<!-- FOR Gender -->
  $flag6=true;

$result=$err6="";

    if(empty($_POST["fmale"]) && empty($_POST["ffemale"]) && empty($_POST["fother"]))
    {
      $err6="* You must select your gender";
      $flag6=false;
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
    $_SESSION["fgender"] =$result;

  
//<!-- FOR DOB -->

$flag7=true;

  $errname7=$dob="";
    $dd="";
    $mm="";
    $yy="";
  



  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $dd=$_POST["fdd"];
    $mm=$_POST["fmm"];
    $yy=$_POST["fyy"];
    
    

    if(empty($dd) || empty($mm) || empty($yy))
    {
      $errname7="* date is required";

      $flag7=false;
    }
    else
    {
        if($dd>=1 && $dd<=31  && $flag7 )
        {

          $dd=test_input(($_POST["fdd"]));
          $flag7=true;
        }
        else
        {
          $errname7="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          $flag7=false;
        }
        if($mm>=1 && $mm<=12 && $flag7)
        {
          $mm=test_input(($_POST["fdd"]));
          $flag7=true;

        }
        else
        {
          $errname7="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          $flag7=false;
        }

        if($yy>=1953 &&$yy<=1998 && $flag7)
        {
          $yy=test_input(($_POST["fyy"]));
          $flag7=true;
        }
        else
        {
          $errname7="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          $flag7=false;
        }
    }

    if($flag7)
    {
      $dob=$dd."/".$mm."/".$yy;

        $_SESSION["fdob"] =$dob;

     }
  }







  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>

