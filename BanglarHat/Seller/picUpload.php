
<div id="containersDiv">
			<div >
				<?php include ('Asset/header2.php');?>

			</div>



 		
				
			<div  id="nav" style="height: 500px">
			<?php include ('Asset/nav.php');?>
			</div>






			<div id="content" style="height: 500px">

				 <fieldset style="width:400px; height: 300px ">
						<legend><h3>Profile Picture</h3></legend> 

						<form method="POST"  enctype="multipart/form-data" action="control/picInsert.php">

					  		


					  		
					  		<br>
							<input type="file" value="Choose a file" name="image" >
					 
							<hr align=center  size=1>
							<input type="submit" value="upload" name="picUpload">
							
						 
						</form>

				 </fieldset>

			</div>



			<div style="clear:both">
				
				<?php include ('Asset/footer.php');?>

			</div>


</div>