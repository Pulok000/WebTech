<?php 

require_once 'db_connect.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `productinfo` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `productinfo` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

// function searchUser($user_name){
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
//     try{
//         $stmt = $conn->query($selectQuery);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }


function addProduct($data){
	$conn = db_conn();
// <<<<<<< HEAD
    $selectQuery = "INSERT into productinfo (title, image, catagory, description)
VALUES (:title, :image, :catagory, :description)";

    $selectQuery = "INSERT into productinfo (title, image, catagory, description)
VALUES (:title, :image, :catagory, :description)";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':title' => $data['title'],
        	':image' => $data['image'],
        	':catagory' => $data['catagory'],

        	':description' => $data['description']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE productinfo set title = ?,catagory = ? description = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['title'], $data['catagory'], $data['description'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

// function deleteStudent($id){
// 	$conn = db_conn();
//     $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$id]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $conn = null;

//     return true;
// }