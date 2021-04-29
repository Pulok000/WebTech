<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>


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
<script src="control/jquery.js"></script>



<script>  
  function validateform()
  {  

//fcpassword

var name=document.myform.fname.value;
var username=document.myform.fusername.value;
var password=document.myform.fpassword.value;
var cpassword=document.myform.fcpassword.value;
var email=document.myform.femail.value; 
var day=document.myform.fdd.value;  
var month=document.myform.fmm.value;  
var year=document.myform.fyy.value; 
var gender=document.myform.gender.value;  

if (name==null || name=="")
{  
  alert("Name can't be blank");  
  return false;  
}
if(username==null || username=="")
{  
  alert("User Name can't be blank");  
  return false;
}


if(password==null || password=="")
{  
  alert("Password can't be blank.");  
  return false;  
} 

if(password.length<8)
{  
  alert("Password must be at least 8 characters long.");  
  return false;  
} 

if (email==null || email=="")
{  
  alert("Email Name can't be blank");  
  return false;  
}

if (cpassword !=password)
{  
  alert("Password does not match");  
  return false;  
}



if(gender==null || gender=="")
{  
  alert("Gender cant be blank");  
  return false;  
}


if (day==null || day=="")
{  
  alert("day field can't be blank");  
  return false;  
}

if (month==null || month=="")
{  
  alert("Month field can't be blank");  
  return false;  
}

if (year==null || year=="")
{  
  alert("year field can't be blank");  
  return false;  
}


}








function checkName() 
{
  var name =document.getElementById("name").value;
  var patt1 = /^[a-zA-Z0-9-. ]*$/;
  var res1 = patt1.test(name);

  if (document.getElementById("name").value == "") 
  {
    document.getElementById("nameErr").innerHTML = "Name can't be blank";
    document.getElementById("nameErr").style.color = "red";
    document.getElementById("name").style.borderColor = "red";
    return false;
  }
  else if(!res1)
  {
    document.getElementById("nameErr").innerHTML = "You can use a-z, A-Z, period,dash only";
    document.getElementById("nameErr").style.color = "red";
    document.getElementById("name").style.borderColor = "red";

  }
  else
  {
    document.getElementById("nameErr").innerHTML = "";
    document.getElementById("name").style.borderColor = "black";
  }
}


function checkEmail() 
{  
  var email = document.getElementById("email").value;
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);

  if (document.getElementById("email").value == "")
  {
    document.getElementById("errormail").innerHTML = "Email can't be blank";
    document.getElementById("errormail").style.color = "red";
    document.getElementById("email").style.borderColor = "red";
  }
  else if (!res)
  {
    document.getElementById("errormail").innerHTML = "Not a valid email";
    document.getElementById("errormail").style.color = "red";
    document.getElementById("email").style.borderColor = "red";
  }
  else
  {
    document.getElementById("errormail").innerHTML = "";
    document.getElementById("email").style.borderColor = "black";

  }
}

      //  function checkEmail() 
      // {  

      //     if (document.getElementById("email").value == "")
      //     {
      //     document.getElementById("errormail").innerHTML = "Email can't be blank";
      //     document.getElementById("errormail").style.color = "red";
      //     document.getElementById("email").style.borderColor = "red";
      //     }
      //     else
      //     {
      //         document.getElementById("errormail").innerHTML = "";
      //          document.getElementById("email").style.borderColor = "black";

      //     }
      // }

      // function checkUserName() 
      // {  
      //   // preg_match("/^[a-zA-Z0-9-. ]*$/"

      //     var userName =document.getElementById("username").value;
      //       // $passPatt2='/^(?=.*[@#$%]).{8,}$/';
      //     var patt1 = /^[a-zA-Z0-9-. ]*$/;
      //     var res1 = patt1.test(userName);


      //     if (document.getElementById("username").value == "")
      //     {
      //     document.getElementById("errorusername").innerHTML = "User Name can't be blank";
      //     document.getElementById("errorusername").style.color = "red";
      //     document.getElementById("username").style.borderColor = "red";
      //     }
      //     else
      //     {
      //         document.getElementById("errorusername").innerHTML = "";
      //         document.getElementById("username").style.borderColor = "black";

      //     }
      // }


      //  function checkPassword() 
      // {  

      //     if (document.getElementById("password").value == "")
      //     {
      //     document.getElementById("errorpass").innerHTML = "Password can't be blank";
      //     document.getElementById("errorpass").style.color = "red";
      //     document.getElementById("password").style.borderColor = "red";
      //     return false;
      //     }
      //     else if(!checkPass)
      //     {
      //     document.getElementById("errorpass").innerHTML = "Password must contain at least one of the special characters (@, #, $,%)";
      //     document.getElementById("errorpass").style.color = "red";
      //     document.getElementById("password").style.borderColor = "red";

      //     }
      //     else
      //     {
      //         document.getElementById("errorpass").innerHTML = "";
      //          document.getElementById("password").style.borderColor = "black";

      //     }
      // }


      function checkPassword() 
      {
        var password =document.getElementById("password").value;
            // $passPatt2='/^(?=.*[@#$%]).{8,}$/';
            var patt = /^(?=.*[@#$%]).{8,}$/;
            var res = patt.test(password);

            if (document.getElementById("password").value == "")
            {
              document.getElementById("errorpass").innerHTML = "Password can't be blank";
              document.getElementById("errorpass").style.color = "red";
              document.getElementById("password").style.borderColor = "red";

          //return false;
        }
        else if(document.getElementById("password").value.length<8)
        {
          document.getElementById("errorpass").innerHTML = "Password must have atlest 8 degit";
          document.getElementById("errorpass").style.color = "red";
          document.getElementById("password").style.borderColor = "red";

        }
        else if(!res)
        {
          document.getElementById("errorpass").innerHTML = "Password must contain at least one of the special characters (@, #, $,%)";
          document.getElementById("errorpass").style.color = "red";
          document.getElementById("password").style.borderColor = "red";

        }
        else
        {
          document.getElementById("errorpass").innerHTML = "";
          document.getElementById("errorpass").style.color = "red";
          document.getElementById("password").style.borderColor = "black";
        }



      }





      function checkCpassword() 
      {  

        if (document.getElementById("cpassword").value == "")
        {
          document.getElementById("errorcpass").innerHTML = "Confirm Password can't be blank";
          document.getElementById("errorcpass").style.color = "red";
          document.getElementById("cpassword").style.borderColor = "red";
        }
        else if (document.getElementById("cpassword").value != document.getElementById("password").value )
        {
          document.getElementById("errorcpass").innerHTML = "Confirm does not match";
          document.getElementById("errorcpass").style.color = "red";
          document.getElementById("cpassword").style.borderColor = "red";
        }
        else
        {
          document.getElementById("errorcpass").innerHTML = "";
          document.getElementById("cpassword").style.borderColor = "black";

        }
      }



      // function checkCpassword() 
      // {  

      //     if (document.getElementById("cpassword").value == "")
      //     {
      //     document.getElementById("errorcpass").innerHTML = "Email can't be blank";
      //     document.getElementById("errorcpass").style.color = "red";
      //     document.getElementById("cpassword").style.borderColor = "red";
      //     }
      //     else
      //     {
      //         document.getElementById("errorcpass").innerHTML = "";
      //          document.getElementById("cpassword").style.borderColor = "black";

      //     }
      // }

      // function checkGender() 
      // {  

      //     if (document.getElementById("female").value == "" && document.getElementById("male").value == "" && document.getElementById("cpassword").value == "")
      //     {
      //     document.getElementById("errorcpass").innerHTML = "Email can't be blank";
      //     document.getElementById("errorcpass").style.color = "red";
      //     document.getElementById("cpassword").style.borderColor = "red";
      //     }
      //     else
      //     {
      //         document.getElementById("errorcpass").innerHTML = "";
      //          document.getElementById("cpassword").style.borderColor = "black";

      //     }
      // }



      function checkDd() 
      {
        var dd =document.getElementById("day").value;

        if (document.getElementById("day").value == "")
        {
          document.getElementById("errorday").innerHTML = "Select  day";
          document.getElementById("errorday").style.color = "red";
          document.getElementById("day").style.borderColor = "red";
        }
        else if(dd<1 || dd>31)
        {
          document.getElementById("errorday").innerHTML = "Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
          document.getElementById("errorday").style.color = "red";
          document.getElementById("day").style.borderColor = "red";

        }
        else
        {
          document.getElementById("errorday").innerHTML = "";
          document.getElementById("day").style.borderColor = "black";

        }


      }
      function checkMm() 
      {
          //$mm>=1 && $mm<=12 && $flag

          var mm =document.getElementById("month").value;

          if (document.getElementById("month").value == "")
          {
            document.getElementById("errormonth").innerHTML = "Select  Month";
            document.getElementById("errormonth").style.color = "red";
            document.getElementById("month").style.borderColor = "red";
          }
          else if(mm<1 || mm>12)
          {
            document.getElementById("errormonth").innerHTML = "Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
            document.getElementById("errormonth").style.color = "red";
            document.getElementById("month").style.borderColor = "red";

          }
          else
          {
            document.getElementById("errormonth").innerHTML = "";
            document.getElementById("month").style.borderColor = "black";

          }

        }
        function checkYy() 
        {

          var yy =document.getElementById("year").value;

          if (document.getElementById("year").value == "")
          {
            document.getElementById("erroryear").innerHTML = "Select Year";
            document.getElementById("erroryear").style.color = "red";
            document.getElementById("year").style.borderColor = "red";
          }
          else if(yy<1953 || yy>1998)
          {
            document.getElementById("erroryear").innerHTML = "Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
            document.getElementById("erroryear").style.color = "red";
            document.getElementById("year").style.borderColor = "red";

          }
          else
          {
            document.getElementById("erroryear").innerHTML = "";
            document.getElementById("year").style.borderColor = "black";
          }

        }

      </script>  




    </head>
    <body>

      <div id="containersDiv">

        <?php include ('Asset/header1.php');?>
        

        <div >


          <?php
          include ('control/rFormValidation.php');
          ?>


          <!-- <?php //echo $errname1;?></span> -->


          <div id="page" >

            <fieldset style="width:500px">
              <legend><h3>REGISTRATION</h3></legend> 

              <form method="POST"  name = "myform"  onsubmit="validateform()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " >

                <label for="name">Name :</label> 
                <input type="text" name="fname" id="name" onkeyup="checkName()" onblur="checkName()">
                <span class="error" id="nameErr"></span><br>
                <!-- <span class="error"><?php //echo $errname1;?></span> -->



                <hr align=center  size=1>

                <label for="email">Email :</label> 
                <input type="text" name="femail" id="email" onkeyup="checkEmail()" onblur="checkEmail()">
                <!-- <span class="error"><?php //echo $errname2;?></span>   -->
                <span class="error" id="errormail"></span><br>

                <hr align=center  size=1>

                <label for="username">User Name :</label> 
                <input type="text" name="fusername" id="username" onkeyup="checkUserName(this.value)">
                <!-- <span class="error"><?php // echo $errname3;?></span> -->
                <span class="error" id="errorusername"></span><br>




                <hr align=center  size=1>

                <label for="password">Password :</label> 
                <input type="Password" name="fpassword" id="password" onkeyup="checkPassword()" onblur="checkPassword()" >
                <!-- <span class="error"><?php //echo $errpass3;?></span> -->
                <span class="error" id="errorpass"></span><br>

                <hr align=center  size=1>

                <label for="confirmpassword">Confirm Password :</label> 
                <input type="Password" name="fcpassword" id="cpassword" onkeyup="checkCpassword() " onblur="checkCpassword() " >
                <!-- <span class="error"><?php // echo $err4;?></span>   -->
                <span class="error" id="errorcpass"></span><br>   
                <hr align=center  size=1>    


                <fieldset style="width:400px">
                  <legend><h3>Gender</h3></legend> 

<!-- 
 <input type="radio" name="gender">Male
 <input type="radio" name="gender">Female
 <input type="radio" name="gender"> Other -->
 <input type="radio" name="gender" id="female" value="female">Female
 <input type="radio" name="gender" id="male" value="male">Male
 <input type="radio" name="gender"  id="other" value="other">Other

 <!-- <span class="error"><?php // echo $err6;?></span> -->
 <span class="error" id="errorgender"></span><br> 


 <hr align=center  size=1>



</fieldset>

<hr align=center  size=1>

<fieldset style="width:400px">
  <legend><h3>DATE OF BIRTH</h3></legend> 


  <span>dd:</span> 
  <input type="text" name="fdd" size="1" id="day" onkeyup="checkDd() " onblur="checkDd() ">
  <span class="error" id="errorday"></span> 
  <span>mm:</span> 
  <input type="text" name="fmm" size="1" id="month" onkeyup="checkMm() " onblur="checkMm() "> 
  <span class="error" id="errormonth"></span>
  <span>yy:</span> 
  <input type="text" name="fyy"size="1" id="year" onkeyup="checkYy()" onblur="checkYy()">

  <!-- <span class="error"><?php// echo $errname7;?></span> -->
  <span class="error" id="erroryear"></span> 
  
  <hr align=center  size=1>


</fieldset>



<input type="submit" value="Submit">
<input type="reset">

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

<script type="text/javascript">
  function checkUserName(fusername) 
  {

          if (document.getElementById("username").value == "")
          {
          document.getElementById("errorusername").innerHTML = "User Name can't be blank";
          document.getElementById("errorusername").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
          }
          else
          {
              document.getElementById("errorusername").innerHTML = "";
              document.getElementById("username").style.borderColor = "black";

          }


    
    if (fusername.length == 0)
    {

      document.getElementById("errorusername").innerHTML = "User Name cant be empty";

      return;

    }
    else
    {

      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function ()
      {

        if (this.readyState == 4 && this.status == 200)
        {

          document.getElementById("errorusername").innerHTML = this.responseText;
          if(this.responseText=="Username already exists")
          {
            document.getElementById("username").style.borderColor = "red";
          }

        }

      };

      xmlhttp.open("GET", "control/checkUser.php?fusername=" + fusername, true);

      xmlhttp.send();

    }

  }



</script>