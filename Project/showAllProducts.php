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


		<?php foreach ($products as $i => $product): ?>
			<fieldset style="width:270px">

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

							<a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>
							&nbsp
							<a href="control/deleteProduct.php?id=<?php echo $product['id'] ?>">Delete</a>

			</fieldset>

		<?php endforeach; ?>	

</body>
</html>
