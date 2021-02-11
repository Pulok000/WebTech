<!DOCTYPE html>
<html>
<head>
	<title>Lab task 2.4</title>
<style type="text/css">

	.error
	{
		color: red;
	}
</style>
</head>
<body>


<?php

	
	$male=$female=$other=$result=$err="";

	

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{




		if(empty($_POST["fmale"]) && empty($_POST["ffemale"]) && empty($_POST["fother"]))
		{
			$err="* You must select your gender";
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



	}



	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>





<fieldset style="width:270px">
<legend><h3>Gender</h3></legend> 

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
 <input type="radio" name="fmale">Male
 <input type="radio" name="ffemale">Female
<input type="radio" name="fother"> Other
<hr align=center  size=1>
<input type="submit" name="fsubmit" value="Submit">
<span class="error"><?php echo $err;?></span>
</form>


</fieldset>


<?php
echo $result;
?>

</body>
</html>

