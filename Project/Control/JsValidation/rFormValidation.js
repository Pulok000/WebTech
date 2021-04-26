function validateForm() 
{


      function checkName() 
      {
        
      if (document.getElementById("fname").value == "")
      {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("fname").style.borderColor = "red";
      }
      else
      {
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("fname").style.borderColor = "black";
      }

      }



  // var fname = document.getElementById("fname").value;
  // if (fname == "" ) 
  // {
  //  document.getElementById("nameErr").innerHTML="*Please fill out first name";
  //   return false;
  // }

  // var firstLetter = /^[a-zA-Z]+$/;
  // var res1 = firstLetter.test(fname);
  // if(!res1)
  // {
  //   document.getElementById("nameErr").innerHTML="*Name cant have numbers";
  //   return false; 
  // }


  // var email = document.getElementById("femail").value;
  // var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  // var res = patt.test(email);
  
  // function checkEmail() 
  // {

  //    if(!res)
  //     {
  //             document.getElementById("errormail").innerHTML = "*Email format is not correct";
  //             document.getElementById("errormail").style.color = "red";
  //             document.getElementById("femail").style.borderColor = "red";
  //     }
  //      else
  //     {
  //           document.getElementById("errormail").innerHTML = "";
  //           document.getElementById("femail").style.borderColor = "black";
  //     }

  // }


}








// function validateForm() 
// {



  // var username = document.getElementById("username").value;
  // var password = document.getElementById("password").value;
  // if (username == "") {
  //   document.getElementById("mytext").innerHTML="Please enter username";
  //   return false;
  // }
  // if ( password.length < 5) {
  //   document.getElementById("mytext").innerHTML="Please enter password";
  //   return false;
  // }

  // if (document.getElementById("red").checked == false &&  document.getElementById("blue").checked == false)
  // {
  //   document.getElementById("mytext").innerHTML="Please select any radio button";
  //   return false;
  // }


// // var username = document.getElementById("fname").value;
// var username = document.forms["regForm"]["fname"].value;

// function WordCount(str)
// { 
//   return str.split(" ").length;
// }


//   if(WordCount(username)<2)
//   {

//      document.getElementById("errname1").innerHTML ="* Name should contain  at least two words";
//   }
  




// var username = document.getElementById("fname").value;

// if(WordCount(username)<2)
// {
//   var firstLetter = /^[a-zA-Z]+$/;
//   var allLetter = /^[a-zA-Z0-9-. ]*$/;


//   if(!username.value.match(firstLetter))
//   {

//      document.getElementById("errname1").innerHTML ="* Must start with a letter";
//   }
//   else if(!username.value.match(allLetter))
//   {

//     document.getElementById("errname1").innerHTML ="*You can use a-z, A-Z, period,dash only";

//   }
//   else
//   {

//    document.getElementById("errname1").innerHTML ="* Name should contain  at least two words";

//   }

// }
// else
// {

//   if(!username.value.match(allLetter))
//   {

//      document.getElementById("errname1").innerHTML ="* You can use a-z, A-Z, period,dash only";
//   }
// }

//}




//     if($_SERVER["REQUEST_METHOD"]=="POST")
//   {

    
//  if((inputtxt.value.match(letterNumber)) 

//   }

//     $check=$_POST["fname"];
//     $j=str_word_count($check,0);


//     if(empty($check))
//     {
//       $errname1="* Name is required";
//       $flag1=false;

//     }
//     else if($j<2)
//     {


//       if(!ctype_alpha($check[0]))
//       {
//         $errname1 = "Must start with a letter";
//         $flag1=false;
        
//       }
//       else if(!preg_match("/^[a-zA-Z0-9-. ]*$/",$check))
//       {

//         $errname1 = "You can use a-z, A-Z, period,dash only";
//         $flag1=false;
        
//       }
//       else
//       {
//         $errname1="* Name should contain  at least two words";
//         $flag1=false;
        
//       }

//     }
//     else
//     {

//       if(!preg_match("/^[a-zA-Z0-9-. ]*$/",$check))
//       {

//         $errname1 = "You can use a-z, A-Z, period,dash only";
//          $flag1=false;
        
//       }

//     }


//   }

//   if($flag1)
//   {
//     $name=test_input($check);
//   }

// }