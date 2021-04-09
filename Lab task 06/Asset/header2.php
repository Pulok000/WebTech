
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="Asset/style2.css">

</head>
<body>
		<div id="headerDiv">
				<img src="Asset/logo.png" style="display: inline;">

			<div id="headerBarDiv"> 

				

					
					
					<?php
						
					$user='Logged In as <a href=loggedInDashboard.php>'. $_SESSION["fname"]. '</a>';

					echo $_SESSION["fname"];


					 echo $user; 
				

					 ?>


			
					<a href="login.php">| LogOut</a>
					

			</div> 

		</div> 
</body>
</html>
