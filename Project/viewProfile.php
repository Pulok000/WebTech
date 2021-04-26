
<?php
session_start(); 

if(empty($_SESSION["fname"]))
{
header("Location:login.php");
}

?>


<div id="containersDiv">

		<div >
			<?php include ('Asset/header2.php');?>

		</div>


		<?php 
		//session_start();
		require_once 'model.php';

		$data=showUserInfo($_SESSION['id']);
		    //$id = $data["id"];
		$name = $data["name"];
		//$username = $data["username"];
		$email = $data["email"];
		$gender = $data["gender"];
		$dob = $data["dob"];


		 ?>

<?php

//$dir='../view/'.$_SESSION["picture"];

?>

 		
				
			<div  id="nav">
			<?php include ('Asset/nav.php');?>
			</div>


			<div id="content">

			<br>
					<fieldset style="width:550px;  ">


						<legend><h3>Profile</h3></legend> 
						<label for="name";">Name :</label> <?php echo $name; ?>


					
						 <!-- <img src="<?php //echo $dir ?>" alt="picture" width="70" height="70"/> -->


						<!-- <img src="" alt="picture"/> -->

							<!-- <img src="default.png" style="float: right;"> -->


						<hr align=center  size=1>


						<label for="name";">Email :</label> <?php echo $email; ?>

						<hr align=center  size=1>

						<label for="name";">Gender :</label> <?php echo $gender ; ?>

						<hr align=center  size=1>

						<label for="name";">Date of Birth :</label> <?php echo $dob ; ?>

						<hr align=center  size=1>
						<a href="../H.PROFILE PICTURE/profilePicture.php" style="float: right;">Change </a>
						<a href="../H.PROFILE PICTURE/profilePicture.php" > Edit Profile </a>

					

					</fieldset>
			</div>



			<div style="clear:both">
				
				<?php include ('Asset/footer.php');?>

			</div>


</div>


