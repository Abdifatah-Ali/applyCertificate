<?php

#mysql Requiremnts 
#server
#user
#password
#database

// procedural way 
// Object Oriented way 

$conn = new mysqli("localhost","root","","certificate_apply");

if($conn){
    // echo "Success Connection";
}else{
    echo $conn->error;
}