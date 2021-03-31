<?php  
require_once '../model.php';



if (isset($_POST['addProduct'])) {

	$data['title'] = $_POST['title'];
	// $data['image'] = $_POST['image'];
	$data['catagory'] = $_POST['catagory'];
	$data['description'] = $_POST['description'];
	//$data['username'] = $_POST['username'];

	// $data['name'] = $_POST['name'];
	// $data['surname'] = $_POST['surname'];
	// $data['username'] = $_POST['username'];

	//$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) && addProduct($data) ) 
	{

		header('Location: ../../E.LOGGED IN DASHBOARD/showAllProducts.php?id=' . $_POST["id"]);
    } 
  	else 
  	{
    echo "Sorry, there was an error doing this operation.";
  	}

//   if (addProduct($data)) {
//   	//echo 'Successfully added!!';
//   }
// } else {
// 	echo 'You are not allowed to access this page.';
}

?>
