<?php
header("Content-Type: application/json");
include('../config/conn.php');
// include('../views/users.php');
// $action ? $action = $_POST['action'] "";

if(isset($_POST['action'])){
    $action = $_POST['action'];
}


function checkuserData($conn){

    extract($_POST);

    $data = array(); //last result
    $dataArray = array(); // while loop temp

    $query ="SELECT * FROM students_info WHERE Roll_Number = '". $rollno ."' AND Phone = '". $mobile ."'";
     $result = $conn->query($query);
     if ($result) {    // get the data
    //     $row = $result->fetch_assoc();
    //     $data = array("status" => true, "data" => "success");   
    // } 
    // else {
    //     $data = array("status" => false, "data" => $conn->error);
    // }
        $row = $result->fetch_assoc();
        $counResult = mysqli_num_rows($result);
            if ($counResult > 0) {
            foreach($row as $key => $value) {
                $_SESSION[$key] = $value;
            }
            $data = array("status" => true, "data" => "success");
        }  else{
         $data = array("status" => false, "data" => 'Username or Password Is Incorrect...');
        } 
    } else {
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