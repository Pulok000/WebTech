<?php 

require_once 'model/db_connect.php';


function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `productinfo` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


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

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE username = ?";

    
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}


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

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}



function addFarmar($data){
    $conn = db_conn();
// <<<<<<< HEAD
    $selectQuery = "INSERT into user_info (name,email,username,password,gender,dob)
VALUES (:name, :email, :username, :password,:gender,:dob)";

//     $selectQuery = "INSERT into productinfo (title, image, catagory, description)
// VALUES (:title, :image, :catagory, :description)";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['uname'],
            ':password' => $data['pass'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}






function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE productinfo set title = ?, catagory = ?, description = ? where id = ?";
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

// function updateProduct($id, $data){
//     $conn = db_conn();
//     $selectQuery = "UPDATE productinfo set title = ?,catagory = ? description = ? where id = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//         	$data['title'], $data['catagory'], $data['description'], $id
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }

// function deleteProduct($id){
// 	$conn = db_conn();
//     $selectQuery = "DELETE FROM `productinfo` WHERE `ID` = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$id]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $conn = null;

//     return true;
// }
// function deleteProduct($id){
//     // header('Location: showAllProducts.php');
//     $conn = db_conn();
//     $selectQuery = "DELETE FROM `productinfo` WHERE `ID` = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$id]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $conn = null;

//     return true;
// }

// function deleteProduct($id)
// {
//     $conn = db_conn();
//     $selectQuery = "DELETE FROM productinfo WHERE id = ?";
//     try
//     {
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$id]);
//     }
//     catch(PDOException $e)
//     {
//         echo $e->getMessage();
//     }
//     $conn = null;
//     return true;
// }


