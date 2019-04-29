<?php

if (strlen(session_id()) < 1) {
    session_start();
}

$servername="localhost";
$username="root";
$password="";
$database="kingdomhigh";
$conn=new mysqli($servername,$username,$password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





function login($username,$password){
}



?>	