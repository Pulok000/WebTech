<!DOCTYPE html>
<html>
<head>
	<title>Lab task 2.3</title>
	<style type="text/css">

	.error
	{
		color: red;
	}
</style>


</head>
<body>


<?php

		$errname="";
		$dd="";
		$mm="";
		$yy="";
	

	$flag=false;

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$dd=$_POST["fdd"];
		$mm=$_POST["fmm"];
		$yy=$_POST["fyy"];
		
		

		if(empty($dd) || empty($mm) || empty($yy))
		{
			$errname="* date is required";

			$flag=false;
		}
		else
		{
				if($dd>=1 && $dd<=31)
				{

					$dd=test_input(($_POST["fdd"]));
					$flag=true;
				}
				else
				{
					$errname="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
					$flag=false;
				}
				if($mm>=1 && $mm<=12)
				{
					$mm=test_input(($_POST["fdd"]));
					$flag=true;

				}
				else
				{
					$errname="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
					$flag=false;
				}

				if($yy>=1953 &&$yy<=1998)
				{
					$yy=test_input(($_POST["fyy"]));
					$flag=true;
				}
				else
				{
					$errname="* Must be valid numbers (dd: 1-31, mm: 1-12,yyyy: 1953-1998)";
					$flag=false;
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
<legend><h3>DATE OF BIRTH</h3></legend> 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">

	<input type="text" name="fdd" value="dd" size="1"> <span>/</span>
	<input type="text" name="fmm" value="mm" size="1"> <span>/</span>
	<input type="text" name="fyy" value="yyyy" size="1">
<hr align=center  size=1>
<input type="submit" name="fsubmit" value="Submit">
<span class="error"><?php echo $errname;?></span>

</form>
</fieldset>

<?php

if($flag)
{
	echo "DATE: ";
	echo "$dd /";
	echo "$mm /";
	echo "$yy";

}


?>

</body>
</html>

