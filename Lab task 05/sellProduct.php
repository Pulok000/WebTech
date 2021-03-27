<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/addProduct.php" method="POST" enctype="multipart/form-data" id="productinfoform">
  <label for="name">title:</label><br>

  <input type="text" id="ftitle" name="title"><br><br> 
  <label for="image">Image:</label><br><br> 
  <input type="file" id="fimage" name="image"><br><br>
  <label for="catagory">Catagory: </label><br>
  <input type="text" id="fcatgory" name="catagory"><br>



  <label for="description">Description:</label><br>

  <br>

<textarea rows="4" cols="50" name="description" form="productinfoform" name = "description">
Enter text here...</textarea>
  <br>

<!--   <label for="male">Distributor</label>
=======
<textarea rows="4" cols="50" name="comment" form="productinfoform">
Enter text here...</textarea>
  <br>

  <label for="male">Distributor</label>
>>>>>>> 68fe5d3b4addb804ec6431719e1eea17ad15bdb0

  <input type="Checkbox" id="distributor" name="distributor" value="Distributor">
  <label for="female">Customer</label>
  <input type="Checkbox" id="customer" name="Customer" value="Customer">
<<<<<<< HEAD
 -->

 <br>
 <br>

  <input type="submit" name = "addProduct" value="Add">
  <input type="reset"> 
</form> 

</body>
</html>

