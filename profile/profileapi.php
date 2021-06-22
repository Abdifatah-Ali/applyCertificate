<?php
session_start();
header("Content-Type: application/json");
include('./conn.php');


if(isset($_POST['action'])){
    $action = $_POST['action'];
}


function registerUser($conn){
    extract($_POST);

    $rollNo=$_SESSION['rollnumber']; 
    $fname=$_SESSION['fullname']; 
    $newDate = Date('Y:m:d', strtotime('+7 days'));

    $data = array();
    $chechquery = "SELECT * from orderedlist where roll_Number='$rollNo'";
    $resultq = $conn->query($chechquery);
    $counResult = mysqli_num_rows($resultq);
    if($counResult>0){
        $data = array("status" => false,"data" => "Sorry already Ordered");
    }else{
    $query = "INSERT INTO orderedlist(`roll_Number`, `fullName`,appointDate)VALUE('$rollNo','$fname','$newDate')";
    $result = $conn->query($query);
    if($result){
        $data = array("status" => true,"data" => "SuccessFully Ordered Certificate");
    }else{
        $data = array("status" => false,"data"=>$conn->error);
    }
     echo json_encode($data);
    }
     echo json_encode($data);
}
 

  
if(isset($action)){

$action($conn);

}else{
echo json_encode("Please Send The Action");
}

?>