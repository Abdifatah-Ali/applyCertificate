<?php

header("Content-Type: application/json");
include('../config/conn.php');
// include('../views/users.php');
// $action ? $action = $_POST['action'] "";

if(isset($_POST['action'])){
    $action = $_POST['action'];
}


function registerUser($conn)
{

    extract($_POST);
    $data = array();
    $file_name = $_FILES['image']['name'];
    $temp_file = $_FILES['image']['tmp_name'];
    $save_name = $file_name. ".png";
    $target_dir = "../uploadImage/" . $save_name;
    // $save_name = "../uploadImage/" . ".png";

    // $date = Date('Y-m-d');

    if (move_uploaded_file($temp_file, $target_dir)) {
        $query = "INSERT INTO `users`(`userPhoto`,`fullName`, `userType`, `userName`, `userAddress`,  `gender`, `userPhone`, `question`, `answers`, `password`) VALUES('$save_name','$fullName','$userType','$userName','$userAddress','$gender','$userPhone','$question','$answer','$password')";
        $result = $conn->query($query);
        if ($result) {
            $data = array("status" => true, "data" => "SuccessFully Registered");
        } else {
            $data = array("status" => false, "data" => $conn->error);
        }
    } else {
        $data = array("status" => false, "data" =>"Image uploaded was Failed" );
    }
    echo json_encode($data);

}

function readUser($conn)
{
    extract($_POST);
    $data = array(); //last result
    $dataArray = array(); // while loop temp

    // prepare the query
    $query = "SELECT * from users where `userID` = '$id'";
    // excute the query and then get back the result
    $result = $conn->query($query);
    // true or false
    if ($result) {
        // get the data
        while ($row = $result->fetch_assoc()) {
            $dataArray[] = $row;
        }
        $data = array("status" => true, "data" => $dataArray);
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }

    echo json_encode($data);
}
function readAllUsers($conn)
{

    $data = array(); //last result
    $dataArray = array(); // while loop temp

    // prepare the query
    // ,`userAddress`
    $query = "SELECT `userID`,`userPhoto`,`userName`,`userType`,`userPhone`,`password`,`status` from users";
    // excute the query and then get back the result
    $result = $conn->query($query);
    // true or false
    if ($result) {
        // get the data
        while ($row = $result->fetch_assoc()) {
            $dataArray[] = $row;
        }
        $data = array("status" => true, "data" => $dataArray);
    } else {
        $data = array("status" => false, "data" => $conn->error);
    }

    echo json_encode($data);
}

function updateUser($conn)
{

    extract($_POST);
    $data = array();

    // $new_id = generateUserId($conn);

    if (!isset($_FILES['image']['name'])) {
          $query = "Update users set `fullName`='$fullName',`userType`='$userType',`userName`='$userName',`userAddress`='$userAddress',`gender`='$gender',`userPhone`='$userPhone',`question`='$question',`answers`='$answer',`password`='$password' where  `userID` = '$updateId'";
         $result = $conn->query($query);
        if ($result) {
            $data = array("status" => true, "data" => "SuccessFully Updated");
        } else {
            $data = array("status" => false, "data" => $conn->error);
        }

    } else {
            $file_name = $_FILES['image']['name'];
            $temp_file = $_FILES['image']['tmp_name'];
            $save_name = $file_name. ".png";
            $target_dir = "../uploadImage/" . $save_name;
            // $date = Date('Y-m-d');

            if (move_uploaded_file($temp_file, $target_dir)) {
                $query = "Update users set `userPhoto`='$save_name', `fullName`='$fullName',`userType`='$userType',`userName`='$userName',`userAddress`='$userAddress',`gender`='$gender',`userPhone`='$userPhone',`question`='$question',`answers`='$answer',`password`='$password' where  `userID` = '$updateId'";
                $result = $conn->query($query);
                if ($result) {
                    $data = array("status" => true, "data" => "SuccessFully Updated");
                } else {
                    $data = array("status" => false, "data" => $conn->error);
                }
            } else {
                $data = array("status" => false, "data" => "Image uploaded was Failed");
            }
        }

    echo json_encode($data);

}

function deleteUser($conn)
{

    extract($_POST);
    $data = array();
    $query = "DELETE FROM users where `userID` = '$id'";
    $result = $conn->query($query);

    if ($result) {
        $data = array("status" => true, "data" => "Deleted Successfully");
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