<!DOCTYPE html>
<html>
<head>
	<title>lab task 2.1</title>

	<style type="text/css">

	.error
	{
		color: red;
	}
</style>

</head>
<body>


	<?php

	$flag=TRUE;
	$name=$errname="";

	

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

		$check=$_POST["fname"];
		$j=str_word_count($check,0);


		if(empty($check))
		{
			$errname="* Name is required";
			$flag=FALSE;

		}
		else if($j<2)
		{


			if(!ctype_alpha($check[0]))
			{
				$errname = "Must start with a letter";
				$flag=FALSE;
			}
			else if(!preg_match("/^[a-zA-Z1-9-. ]*$/",$check))
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



	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>



<fieldset style="width:270px">
	<legend><h3>NAME</h3></legend> 

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
		<input type="text" name="fname">
		<span class="error"><?php echo $errname;?></span>
		<hr align=center  size=1>
		<input type="submit" name="fsubmit" value="Submit">
	</form>

</fieldset>



<?php

if($flag)
{
	echo $name;



}


?>

</body>
</html>


