<!DOCTYPE html>
<html>
<head>
	<title>lab task 2.1</title>

	<style type="text/css">
    label
    {
    	width: 100px;
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
//got helped from: https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength

	$flag=TRUE;
	$name=$pass=$errname=$errpass="";

	$checkName=$_POST["fname"];
	$checkPass=$_POST["fpass"];
	//$nSize=strlen($_POST["fname"]);
	//$pSize=strlen($_POST["fpass"]);

	//$namePatt1= '/^(?=.*[A-Z])$/';

	$namePatt2='/^.{2,}$/';
	$passPatt1='/^.{8,}$/';
	$passPatt2='/^(?=.*[@#$%]).{8,}$/';


	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	
		if(!empty($checkName))
		{
			if(!preg_match("/^[a-zA-Z1-9-._ ]*$/",$checkName))
			{
				$errname="* User Namecan contain alpha numeric characters, period,dash or underscore only";
				$flag=false;
			}
			else if(!preg_match($namePatt2,$checkName))
			{
				$errname="* User Name must contain at least two (2) characters";
				$flag=false;
			}
			else
			{
				$name=test_input($checkName);
				$flag=true;
			}
			
		}

		if(!empty($checkPass))
		{
			if(!preg_match($passPatt1,$checkName))
			{
				$errpass="Password must not be less than eight (8) characters";
			}
			else if(!preg_match($passPatt2,$checkPass))
			{
				$errpass="Password must contain at least one of the special characters (@, #, $,%)";
			}
			else
			{
				$pass=test_input($checkPass);
			}


		}




	}

/*
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

		
		$j=str_word_count($check,0);


		if(!isset($_POST["fname"]))
		{
			$errname="* Name is required";
			$flag=FALSE;
		}
		else if($j<2)
		{



			else if(!preg_match("/^[a-zA-Z1-9-._ ]*$/",$check))
			{

				$errname = "You can use a-z, A-Z, period,dash only";
				$flag=FALSE;
			}
			else
			{
				$errname="* Name should contain  at least two words";
				$flag=FALSE;
			}


		}
		else
		{

			if(!preg_match("/^[a-zA-Z1-9-. ]*$/",$check))
			{

				$errname = "You can use a-z, A-Z, period,dash only";
				$flag=FALSE;
			}
			else
			{
				$name=test_input($_POST["fname"]);
			}


			

		}


	}
*/


	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>



<fieldset style="width:400px">
	<legend><h3>LOGIN</h3></legend> 

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
		<!-- <label for="name">User Name :</label> -->
		<input type="text" name="fname">
		<span class="error"><?php echo $errname;?></span><br>
		<!-- <label for="fpassword">Password :</label> -->
		<input type="text" name="fpass">
		<span class="error"><?php echo $errpass;?></span> 
		<hr align=center  size=1>
		<input type="submit" name="fsubmit" value="Submit">
	</form>

</fieldset>



<?php

//if($flag)
//{
	echo $name;
//}


?>

</body>
</html>


