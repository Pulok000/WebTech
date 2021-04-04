<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>title</th>
		<th>Image</th>
		<th>catagory</th>
		<th>description</th>
		
		
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['title'] ?></a></td>
				<td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>"></td>
		<td><?php echo $product['catagory'] ?></td>
		<td><?php echo $product['description'] ?></td>
		

	</tr>

</table>


</body>
</html>