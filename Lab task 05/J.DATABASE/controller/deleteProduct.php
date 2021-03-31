<?php 

require_once '../model.php';

if (deleteProduct($_GET['id'])) {
     header('Location: ../../E.LOGGED IN DASHBOARD/showAllProducts.php');
}

 ?>