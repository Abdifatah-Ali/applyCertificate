<?php
$server = "localhost";
$username="root";
$password="";
$database="certificate_apply";

$conn = new mysqli($server,$username,$password,$database);


if($conn){

    // echo("Connection successfully");

}else{
    echo($conn->connect_error);

}

?>