<?php
	require_once 'model/db_connect.php';
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `productinfo`';
    try
    {
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }
$stmt = $conn->query("SELECT * FROM productinfo");

$xml=new DOMDocument("1.0");
$xml->formatOutput=true;
$products=$xml->createElement("productinfo");
$xml->appendChild($products);



 

 while($row = $stmt->fetch(PDO::FETCH_ASSOC))
 {
  $product=$xml->createElement("product");
  $products = $xml->appendChild($product);

  $id=$xml->createElement("id",$row['id']);
  $products = $xml->appendChild($id);

  $title=$xml->createElement("title",$row['title']);
  $products = $xml->appendChild($title);

    $image=$xml->createElement("image",$row['image']);
  $products = $xml->appendChild($image);

    $catagory=$xml->createElement("catagory",$row['catagory']);
  $products = $xml->appendChild($catagory);

      $description=$xml->createElement("description",$row['description']);
  $products = $xml->appendChild($description);
  //       $audience=$xml->createElement("audience",$row['audience']);
  // $products = $xml->appendChild($audience);

  }


echo "<xmp>".$xml->saveXML()."</xmp";
$xml->save("products.xml");
 
//     foreach ($row as $key => $value) {
//     $user->addChild($key, $value);
//     }
// }
 
// echo $xml->asXML();


?>

