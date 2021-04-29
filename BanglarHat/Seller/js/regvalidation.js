const username = document.getElementById("username");
const password = document.getElementById("password");
const email = document.getElementById("email");
const phonenumber = document.getElementById("phonenumber");
const DOB = document.getElementById("DOB");
const gender = document.getElementById("gender" );
const bloodgroup=document.getElementById("bloodgroup" );
const retypepassword = document.getElementById("retypepassword");
const type=document.getElementById("type" );

// form.addEventListener('submit',(e) =>{
//      // e.preventDefault();
//      // return checkinputs();

// })

function checkinputs(){
  const usernameValue = username.value.trim();  
	const passwordValue =password.value.trim();
  const retypepasswordValue =retypepassword.value.trim();
	const emailValue= email.value.trim();
	const phonenumberValue= phonenumber.value.trim();
	const DOBValue=DOB.value.trim();
	const genderValue= gender.value.trim();
  const bloodgroupValue = bloodgroup.value.trim();
  const typeValue= type.value.trim();

  var pattern = /^[^]+@[^]+\.[a-z]{2,3}$/;
  var space=/     /
  var result=1;


	if (usernameValue ==='')
	{
    result=0;
      SetErrorFor(username ,'invalid name');
	}
  else
  {
    SetSuccessFor(username, '')
  }

  if (passwordValue ==='')
  {
    result=0;
      SetErrorFor(password ,'invalid password');

  }
  else{
    if (passwordValue.length < 5){
    result=0;
      SetErrorFor(password ,'password must be more then 6 character');
    }
    else{
      SetSuccessFor(password, '');
    }}


    if (retypepasswordValue ==='')
  {
    result=0;
      SetErrorFor(retypepassword ,'invalid password');
  }
  else if( passwordValue !== retypepasswordValue)
  {
      result=0;
      SetErrorFor(retypepassword ,'password dosnot match');

  }
  else
  {
    SetSuccessFor(retypepassword, '')

  }


  if (typeValue ==='')
  {
    result=0;
      SetErrorFor(type,'One of them must be selected');
  }
  else
  {
    SetSuccessFor(type, '')

  }



if (emailValue ==='')
  {
    result=0;
      SetErrorFor(email ,'Email cannot be null');
  }
  
else if(!emailValue.match(pattern)){
    result=0;
      SetErrorFor(email ,'Invalid email address');

    
    }
    else{
         SetSuccessFor(email, '');
    }

   


if (phonenumberValue ==='')
  {
    result=0;
      SetErrorFor(phonenumber ,'invalid phonenumber');
  }
  else
  {
    SetSuccessFor(phonenumber, '')
  }


if (phonenumberValue ==='')
  {
    result=0;
      SetErrorFor(phonenumber ,'Envalid phonenumber');
  }
  else
  {
    SetSuccessFor(phonenumber, '')
  }


  if (DOBValue ==='')
  {
    result=0;
      SetErrorFor(DOB ,'please enter date of birth');
  }
  else
  {
    SetSuccessFor(DOB, '')
  }


 if (genderValue ==='')
  {
    result=0;
      SetErrorFor(gender,'One of them must be selected');
  }
  else
  {
    SetSuccessFor(gender, '')

  }

  if (bloodgroupValue ==='')
  {
    result=0;
      SetErrorFor(bloodgroup,'One of them must be selected');
  }
  else
  {
    SetSuccessFor(bloodgroup, '')

  }

  

 //return result==0?false:true;
if(result==0)
  return false;
else
  return true;

}

function SetErrorFor(input,message){
     const fromControl= input.parentElement;

     const small= fromControl.querySelector('small');

     small.innerText= message;
    fromControl.className= 'from-contol';
    small.style.display = 'block';

}

function SetSuccessFor(input,message){
     const fromControl= input.parentElement;

     const small= fromControl.querySelector('small');
    small.style.display = 'none';

}
