<!DOCTYPE html>
<html>
<head>
	<title>Lab task 2.6</title>

<style type="text/css">

	.error
	{
		color: red;
	}
</style>
</head>
<body>





<?php

	
	$result=$err="";

/*	

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{


		if(empty("$_POST['formSubmit']")
		{
			$err="* You must select your gender";
		}


	}

*/	

    $result==$err="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

		$err=$_POST["bloodgroup"];
		if($err=="empty")
		{
			$err="* You must select your bloodgroup";
		}
		else
		{
			$result=test_input($_POST["bloodgroup"]);
			$err="";
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
<legend><h3>BLOOD GROUP</h3></legend>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
<select  name="bloodgroup">

   <option value="empty" > </option>
    <option value="O-" >O-</option>
	<option value="a+">O+</option>
	<option value="a-">A+</option>
	<option value="a-">A-</option>
	<option value="b+">B+</option>
	<option value="b-">B-</option>
	<option value="ab+">AB+</option>
	<option value="Ab-">AB-</option>


</select>
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
