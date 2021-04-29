<?php  
require_once 'control/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="demo">a

	<div id="test">


		<?php foreach ($products as $i => $product): ?>
			<fieldset style="width:270px">
				<div id="edit">


				<br>
				Title: <?php echo $product['title'] ?>
				<br>
				<br>
				<img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>">
				<br>
				<br>
				Catgory: <?php echo $product['catagory'] ?>
				<br>
				<p>Describtion: </p>
				<?php echo $product['description'] ?>
				<br>
					

				



				<script>

				var pId = "<?php echo $product['id'] ?>";

				</script>

				<a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>

				<button type="button" onclick="loadAfterEdit(pId)">Edit</button>
				&nbsp




				<!-- <a href="control/deleteProduct.php?id=<?php// echo $product['id'] ?>">Delete</a> -->
				<!-- <a href="control/deleteProduct.php?id=<?php// echo $product['id'] ?>">delete</a> -->

				
					
				<button type="button" onclick="loadAfterDelete(pId)">Delete</button>
				



				</div>



			</fieldset>

		<?php endforeach; ?>	
	</div>
	</div>
</body>
</html>



<script>
//edit
function loadAfterEdit(pId) {
	alert("test");
	 
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("edit").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "editProductAjax.php?q=" + pId, true);
  xhttp.send();
}


//delete	
function loadAfterDelete(pId) {
	// alert(pId);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "deleteWithAjax.php?q=" + pId, true);
  xhttp.send();
}


</script>





