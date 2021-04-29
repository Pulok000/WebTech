const username = document.getElementById("username");
const password = document.getElementById("password");



function checkinputs(){
  const usernameValue = username.value.trim();  
	const passwordValue =password.value.trim();


	var result=1;

	if (usernameValue.trim() ==='')
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
