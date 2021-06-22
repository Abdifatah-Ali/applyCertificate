<?php
session_start();
header("Content-Type: application/json");
include('../config/conn.php');
// include('../views/users.php');
// $action ? $action = $_POST['action'] "";

if(isset($_POST['action'])){
    $action = $_POST['action'];
}

function userInfo($conn){
     extract($_POST);

    $data = array(); //last result
    // $dataArray = array(); // while loop temp

    $query ="SELECT * FROM users WHERE userName = '". $userName ."' AND password = '". $password ."'";
     $result = $conn->query($query);
     if ($result) { 
             // get the data
            $row = $result->fetch_assoc();
        if($row != ""){
            foreach($row as $key => $value) {
                $_SESSION[$key] = $value;
            }
             $data = array("status" => true, "data" => "success");

        }else{
         $data = array("status" => false, "data" => 'Username or Password Is Incorrect...');
        
        }
    } 
    else {
        $data = array("status" => false, "data" => $conn->error);
    }

    echo json_encode($data);

}


if (isset($action)) {
    $action($conn);
} else {
    echo json_encode("Please Send The Action");
}



?>