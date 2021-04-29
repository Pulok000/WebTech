<?php
session_start(); 

if(empty($_SESSION["fname"]))
{
header("Location:login.php");
}

?>

<!DOCTYPE html>
<html>
<body>



<div id="containersDiv">
			<div >
				<?php include ('Asset/header2.php');?>

			</div>



 		
				
			<div  id="nav">
			<?php include ('Asset/nav.php');?>
			</div>


			<div id="content">

			<br>

<center>
	<div>
		
		<fieldset style="width:270px" id="show">

			<div id='showCD'></div><br>
		</fieldset>
	</div>

<input type="button" onclick="previous()" value="<<">
<input type="button" onclick="next()" value=">>">

<script>
var i = 0;
var x;
displayCD(i);

function displayCD(i) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this, i);
        }
    };
    xmlhttp.open("GET", "cd_product.xml", true);
    xmlhttp.send();
}

function myFunction(xml, i) 
{
    var xmlDoc = xml.responseXML; 
    x = xmlDoc.getElementsByTagName("CD");
    document.getElementById("showCD").innerHTML =
    "IMAGE" +
    x[i].getElementsByTagName("IMAGE")[0].childNodes[0].nodeValue +
    "<br>TITLE: " +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
}

function next() {
if (i < x.length-1) {
  i++;
  displayCD(i);
  }
}

function previous() {
if (i > 0) {
  i--;
  displayCD(i);
  }
}
</script>
</center>

			</div>



			<div style="clear:both">
				
				<?php include ('Asset/footer.php');?>

			</div>


</div>

</body>
</html>
