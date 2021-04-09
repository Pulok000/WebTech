<?php 

require_once 'model.php';

function fetchAllProducts(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}
