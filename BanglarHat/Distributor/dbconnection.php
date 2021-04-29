<?php

	$servername="localhost";
	$username="root";
	$password='';
	$dbname="phpproject";

	$conn= new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error)
	{
		die("Connection Failed,retry!".$conn->connect_error);
	}

?>  