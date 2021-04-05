<?php
session_start();
?>


<div id="containersDiv">

 		<?php include ('Asset/header1.php');?>
				




<div>
       
<div id="page">
	
<fieldset style="width:400px">
	<legend><h3>LOGIN</h3></legend> 

	<form method="POST" action="control/loginValidation.php">
		<label  id="labelForLogin" for="name">User Name :</label> 
		<input type="text" name="fname"> 
		<br>
		
		<label id="labelForLogin" for="fpassword">Password :</label> 
		<input type="password" name="fpass">
		
		<hr align=center  size=1>

		<label id="labelForLogin" for="fremember">Remember me</label> 
		<input type="checkbox" name="frem">
		<br>
		<br>
		<input type="submit" name="fsubmit" value="Submit">
		<a href="forgetPassword.php">Forget password?</a>
	</form>

</fieldset>



</div>


    </div>
					




		
		<?php
		 include ('Asset/footer.php');
		?>
		

</div>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$_SESSION["fname"]=$_POST["fname"];
	}
 
?>