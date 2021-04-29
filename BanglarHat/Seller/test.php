<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div id="update">
  
          <fieldset style="width:270px">
          <label for="name">title:</label><br>

          <input type="text" id="ftitle" name="title"><br><br> 
          <label for="image">Image:</label><br><br> 
          <input type="file" id="fimage" name="image"><br><br>
          <label for="catagory">Catagory: </label><br>
          <input type="text" id="fcatgory" name="catagory"><br>



          <label for="description">Description:</label><br>

          <br>

          <textarea rows="4" cols="50" name="description" form="productinfoform" name = "description">
          </textarea>
          <br>
          <br>
          <br>

         <button type="button" onclick="Update()">Update</button>

        </fieldset>

</div>


</body>
</html>


<script>
//edit
function Update() 
{
  alert("Update Function click");

     
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
      document.getElementById("update").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "UpdateProductAjax.php", true);
  xhttp.send();
}




</script>