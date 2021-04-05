<?php
// Start the session
session_start();


?>



<!DOCTYPE html>
<html>
<head>
  <title>lab task 2.1</title>

  <style type="text/css">
    label
    {
      width: 150px;
      display: inline-block;
      text-align: left;
      
    }
  .error
  {
    color: red;
  }
  #page {
    min-height: 200px;
    width: 50%;
    min-width: 600px;
    background: white;
    margin: 50px auto;

}


</style>

</head>
<body>






<div id="containersDiv">

    <?php include ('../Asset/header1.php');?>
        

      <div >



   <?php
     include ('Control/cFormValidation.php');
    ?>

  <?php
     include ('Control/cInsertJsonData.php');
    ?>







        </div>

    
    <?php
     include ('../Asset/footer.php');
    ?>
    

</div>






</body>
</html>