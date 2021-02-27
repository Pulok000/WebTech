<!DOCTYPE html>
<html>
<head>
	<title>lab task 2.1</title>

	<style type="text/css">
    label
    {
    	width: 160px;
    	display: inline-block;
    	text-align: left;
    	
    }
	.error
	{
		color: red;
	}
</style>

</head>
<body>


<?php
 session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$_SESSION['picture'] = $target_file;


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && isset($_POST["fileToUpload"]) ) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 4000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

	$proPic=$_FILES["fileToUpload"]["tmp_name"];



}
?>



<fieldset style="width:400px; height: 300px ">
	<legend><h3>Profile Picture</h3></legend> 

	<form method="POST"  enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

  		
  	<?php 

		if(isset($_POST["submit"]))
		{
			$proPic="uploads/".$_FILES["fileToUpload"]["name"];
		}
		else
		{
			$proPic="default.png";
		}

    ?> 
    

<img src="<?= $proPic; ?>"width="100" height="100"/>
  		

  		

  		
  		<br>
		<input type="file" value="Choose a file" name="fileToUpload" >
 
		<hr align=center  size=1>
		<input type="submit" value="Submit" name="submit">
		
	 
	</form>

</fieldset>








</body>
</html>


