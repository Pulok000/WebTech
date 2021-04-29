<?php
session_start(); 

if(empty($_SESSION["fname"]))
{
header("Location:login.php");
}

?>

<!DOCTYPE html>
<html>
<body>



<div id="containersDiv">
			<div >
				<?php include ('Asset/header2.php');?>

			</div>



 		
				
			<div  id="nav">
			<?php include ('Asset/nav.php');?>
			</div>


			<div id="content">

			<br>

					<?php 
					
					include ('showAllProducts.php');
					

					
					?>

			</div>



			<div style="clear:both">
				
				<?php include ('Asset/footer.php');?>

			</div>


</div>

</body>
</html>
