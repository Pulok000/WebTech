



<div id="containersDiv">
			<div >
				<?php include ('../header2.php');?>

			</div>

<?php

$dir='../H.PROFILE PICTURE/'.$_SESSION["picture"];

?>

 		
				
			<div  id="nav">
			<?php include ('../nav.php');?>
			</div>


			<div id="content">

			<br>
					<fieldset style="width:550px;  ">
						

						<legend><h3>Profile</h3></legend> 
						<label for="name";">Name :</label> <?php echo $_SESSION["fname"]; ?>


					
							 <img src="<?php echo $dir ?>" alt="picture" width="70" height="70"/>


						<!-- <img src="" alt="picture"/> -->

							<!-- <img src="default.png" style="float: right;"> -->


						<hr align=center  size=1>

						<label for="name";">Email :</label> <?php echo $_SESSION["femail"]; ?>

						<hr align=center  size=1>

						<label for="name";">Gender :</label> <?php echo $_SESSION["fgender"]; ?>

						<hr align=center  size=1>

						<label for="name";">Date of Birth :</label> <?php echo $_SESSION["fdob"]; ?>

						<hr align=center  size=1>
						<a href="../H.PROFILE PICTURE/profilePicture.php" style="float: right;">Change </a>
						<a href="../H.PROFILE PICTURE/profilePicture.php" > Edit Profile </a>

					

					</fieldset>
			</div>



			<div style="clear:both">
				
				<?php include ('../footer.php');?>

			</div>


</div>


