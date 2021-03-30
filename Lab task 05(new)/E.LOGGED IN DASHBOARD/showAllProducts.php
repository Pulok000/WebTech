<?php  
require_once '../J.DATABASE/Controller/productInfo.php';

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
				<!-- <legend><h3>NAME</h3></legend>  -->

						     <br>
						
							<!-- <a href="showProduct.php?id=<?php //echo $product['id'] ?>"><?php //echo $product['title'] ?></a> -->
						   Title: <?php echo $product['title'] ?>
						   <br>
						    <br>
							<img width="100px" src="../uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>">
							<br>
							<br>
							Catgory: <?php echo $product['catagory'] ?>
							<br>
							<p>Describtion: </p>
							<?php echo $product['description'] ?>

			</fieldset>

			
		<?php endforeach; ?>




</body>
</html>