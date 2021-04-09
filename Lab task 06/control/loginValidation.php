<!-- <?php

 //header('Location: ../loggedInDashboard.php');

?> -->


<?php
	session_start();
	require_once '../model.php';

	if(isset($_POST['login']))
	{
		$data = searchUser($_POST['fname']);
		if($data!=null)
		{
			$uname= $data["fname"];
			$pass = $data["fpass"];
			$id = $data["id"];

			if($_POST['Username']==$uname && $_POST['Password']==$pass)
			{
				$_SESSION['uname'] = $uname;
				// $_SESSION['id'] = $id;
				header("location:../loggedInDashboard.php");
			}
			else
			{
				echo "<script>alert('Username or Password incorrect!')</script>";
			}
		}
	}
?>