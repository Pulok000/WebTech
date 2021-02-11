<!DOCTYPE html>
<html>
<head>
	<title>lab task 2.2</title>

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

		$check=$_POST["femail"];
		$j=str_word_count($check,0);


		if(empty($check))
		{
			$errname="* Name is required";
			$flag=FALSE;

		}
		else if(!filter_var($check, FILTER_VALIDATE_EMAIL))
		{
			$errname="Invalid email format";
		}
		else
		{
			$name=test_input($_POST["femail"]);
				
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
	<legend><h3>Email</h3></legend> 

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
		<input type="text" name="femail">
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


