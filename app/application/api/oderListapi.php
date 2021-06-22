<?php
session_start();
header("Content-Type: application/json");
include('../config/conn.php');


if(isset($_POST['action'])){
    $action = $_POST['action'];
}

function readOderList($conn)
{
    

    $data = array(); //last result
    $dataArray = array(); // while loop temp

    // prepare the query
    $query = "SELECT * from orderedlist ";
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
if (isset($action)) {
    $action($conn);
} else {
    echo json_encode("Please Send The Action");
}


?>