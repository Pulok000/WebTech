<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../style2.css">

</head>
<body>
		<div id="headerDiv">
				<img src="../logo.png" style="display: inline;">

			<div id="headerBarDiv"> 

				

					
					
					<?php
						session_start();
					$user='Logged In as <a href=loggedInDashboard.php>'. $_SESSION["fname"]. '</a>';


					 echo $user; 
				

					 ?>


			
					<a href="login.php">| LogOut</a>
					

			</div> 

		</div> 
</body>
</html>

				







