


<div id="containersDiv">
			<div >
				<?php include ('header2.php');?>

			</div>



 		
				
			<div  id="nav">
			<?php include ('nav.php');?>
			</div>


			<div id="content">
<p> <b> <u>ADD Product for sell:</u> </b></p>
					<!-- <center>  -->


				<form action="upload.php" method="post" enctype="multipart/form-data">
					<br>

					Title :	
					<textarea name="discribtion" rows="5" cols="5"></textarea> 




					<br>
				 Image:

				  <input type="file" name="fileToUpload" id="fileToUpload"> <br>
				  

			<br>

				<label for="cars">Catagory:</label>
				  <select name="cars" id="cars">
				    <option value="volvo">Fruits</option>
				    <option value="saab">vagetable</option>
				    <option value="opel">random product</option>
				    <option value="audi">none</option>
				  </select>
				
				
				<br>
		
  			

			<p>Add description:</p>	
				<!-- <label for="title">Add description: </label> -->


					<textarea name="discribtion" rows="5" cols="5"></textarea> <br>

					Audience:
					<label for="male">Distributor</label>
					  <input type="Checkbox" id="distributor" name="gender" value="Distributor">
					  <label for="female">Customer</label>
					  <input type="Checkbox" id="female" name="Customer" value="Customer">
					  
				
				<br>

				<br>

				<input type="submit" value="Submit" name="submit">

				</form>



				


					<!-- </center> -->



				

			<br>

				

					<!-- &nbsp 	<p><b>&nbsp&nbsp&nbsp&nbsp Welcome Bob</b></p> -->
			</div>



			<div style="clear:both">
				
				<?php include ('footer.php');?>

			</div>


</div>