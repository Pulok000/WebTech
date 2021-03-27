<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>title</th>
			<th>image</th>
			<th>catagory</th>
			<th>describtion</th>
			<!-- <th>audience</th> -->
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['title'] ?></a></td>
				<td><?php echo $product['title'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>"></td>
				<td><?php echo $product['catagory'] ?></td>
				<td><?php echo $product['description'] ?></td>
				
			<!-- 	<td><a href="editStudent.php?id=<?php //echo $student['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php //echo $student['ID'] ?>">Delete</a></td> -->
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>