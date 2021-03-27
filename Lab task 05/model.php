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
	$selectQuery = "SELECT * FROM `productinfo` where ID = ?";

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
    $selectQuery = "INSERT into productinfo (title, image, catagory, description)
VALUES (:title, :image, :catagory, :description)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':title' => $data['title'],
        	':image' => $data['image'],
        	':catagory' => $data['catagory'],
        	':description' => $data['description']
        	//':audience' => $data['audience']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


// function updateStudent($id, $data){
//     $conn = db_conn();
//     $selectQuery = "UPDATE user_info set Name = ?, Surname = ?, Username = ? where ID = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//         	$data['name'], $data['surname'], $data['username'], $id
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }

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