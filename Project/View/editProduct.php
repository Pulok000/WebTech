<?php 

require_once '../control/productInfo.php';
$student = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!--  <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php //echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php //echo $student['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php //echo $student['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php //echo $_GET['id'] ?>">
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
</form>  -->





      <div id="content"style="height: 500px">
<p> <b> <u>ADD Product for sell:</u> </b></p>
          <!-- <center>  -->



 <form action="../control/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">title:</label><br>
  <input value="<?php echo $product['title'] ?>" type="text" id="title" name="title"><br><br> 




  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">


    <label for="name">Catagory: </label><br>
  <input value="<?php echo $product['catagory'] ?>" type="text" id="catagory" name="catagory"><br><br> 


<label for="name">Description: </label><br>
  <input value="<?php echo $product['description'] ?>" type="textarea" id="description" name="description"><br><br> 

  <br>




 <br>
 <br>
  <input type="submit" name = "updateProduct" value="edit">
  <input type="reset"> 
</form> 
 

</body>
</html>

