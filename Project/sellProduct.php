
<!DOCTYPE html>
<html>
<head>
</head>
<body>


	<div id="containersDiv">
		<div >
			<?php include ('Asset/header2.php');?>

		</div>

		<div  id="nav"style="height: 500px">
			<?php include ('Asset/nav.php');?>
		</div>


		<div id="content"style="height: 500px">
			<p> <b> <u>ADD Product for sell:</u> </b></p>
			<!-- <center>  -->



				<form action="control/addProduct.php" method="POST" enctype="multipart/form-data" id="productinfoform">
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
					<br>
					<br>

					<input type="submit" name = "addProduct" value="Add">
					<input type="reset"> 
				</form> 

				<br>

			</div>



			<div style="clear:both">

				<?php include ('Asset/footer.php');?>

			</div>

		</div>
		

	</body>
	</html>

