<?php  
require_once '../model.php';


if (isset($_POST['updateProduct'])) {

	$data['title'] = $_POST['title'];
	$data['catagory'] = $_POST['catagory'];
	$data['description'] = $_POST['description'];
	$data['image'] = basename($_FILES["image"]["name"]);
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../../E.LOGGED IN DASHBOARD/showAllProducts.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>