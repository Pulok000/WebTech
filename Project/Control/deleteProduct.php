<?php 

require_once '../model.php';

deleteproduct($_GET['id']);

if (deleteproduct($_GET['id'])) {
    header('Location: ../showAllProducts.php');
}

 ?>