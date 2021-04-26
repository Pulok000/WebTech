<?php  
require_once '../model.php';


if (isset($_POST['picUpload']))
{

	$picture = basename($_FILES["image"]["name"]);
	$target_dir = "../profilePic/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && addProPic($_POST['id'],$picture))
	{

		header('Location: ../viewProfile.php');
    } 
  	else 
  	{
    echo "Unable to upload profile picture.";
  	}

}
    

?>