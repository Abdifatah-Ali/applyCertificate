<?php
session_start();
header("Content-Type: application/json");
include('config/conn.php');


if(isset($_POST['action'])){
    $action = $_POST['action'];
}


function checkuserData($conn){

    extract($_POST);

    $data = array(); //last result
    // $dataArray = array(); // while loop temp

    $query ="SELECT * FROM students_info WHERE Roll_Number = '". $rollno ."' AND Phone = '". $mobile ."'";
     $result = $conn->query($query);
     if ($result) {    // get the data
       $res = mysqli_fetch_array($result);
        //  $res = $result->fetch_assoc();
        	$counResult = mysqli_num_rows($result);
            if ($counResult > 0) {
            // foreach($row as $key => $value) {
            //     $_SESSION[$key] = $value;
            // }
                $_SESSION['rollnumber'] = $res[0];
                $_SESSION['photo'] = $res[1];
				$_SESSION['fullname'] = $res[2];
				$_SESSION['mothername'] = $res[3];
                $_SESSION['schoolname'] = $res[4];
				$_SESSION['gender'] = $res[5];
				$_SESSION['phone'] = $res[6];
                $_SESSION['pob'] = $res[7];
				$_SESSION['birthdate'] = $res[8];
				$_SESSION['acdemicyear'] = $res[9];
                 $_SESSION['average'] = $res[10];
           $data = array("status" => true, "data" => "success");
        }else{
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