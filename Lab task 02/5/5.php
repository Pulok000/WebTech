<!DOCTYPE html>
<html>
<head>
	<title>Lab task 2.5</title>
</head>
<body>


<?php

	
	$ssc=$hsc=$bsc=$msc=$err="";
	$count=0;
	$rsize=0;
	$result=array();
	$flag=true;

	//$result = array("Volvo", "BMW", "Toyota");

if($_SERVER["REQUEST_METHOD"]=="POST")
{




		if(empty($_POST["fssc"]) && empty($_POST["fhsc"]) && empty($_POST["fbsc"]) && empty($_POST["fmsc"]) )
		{
			$err="* You must select two field";
		}
		else
		{

			if(empty($_POST["fssc"]))
			{
				$count++;
			}
			else
			{
				$result[$rsize]="SSC";
				$rsize++;
			}


			if(empty($_POST["fhsc"]))
			{
				$count++;
			}
			else
			{
				$result[$rsize]="HSC";
				$rsize++;				
			}

			if(empty($_POST["fbsc"]))
			{
				$count++;
			}
			else
			{
				$result[$rsize]="BSc";
				$rsize++;				
			}			

			if(empty($_POST["fmsc"]))
			{
				$count++;
			}
			else
			{
				$result[$rsize]="MSc";
				$rsize++;				
			}				


			if($count>2)
			{
				$err="* You must select two field";
				$flag=false;
			}
			
		}



	}



	function test_input($data) 
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}


?>




<fieldset style="width:270px">
<legend><h3>DEGREE</h3></legend> 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
 SSC<input type="checkbox" name="fssc"> 
 HSC<input type="checkbox" name="fhsc"> 
 BSc<input type="checkbox" name="fbsc"> 
 MSc<input type="checkbox" name="fmsc"> 
<hr align=center  size=1>
<input type="submit" name="fsubmit" value="Submit">
<span class="error"><?php echo $err;?></span>

</form>
</fieldset>

<?php


if($flag)
{
	foreach($result as $value)
	{
    echo $value . "<br>";
	}
}




?>


</body>
</html>

