<?php 

require_once '../J.DATABASE/model.php';

function fetchAllProducts(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}
