
<?php
require_once 'model.php';

$q = $_REQUEST["q"];

if (deleteProduct($q))
{

	 include ('showAllProducts.php');
}
   
?>