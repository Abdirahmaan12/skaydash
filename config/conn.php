<?php

$conn = new mysqli("localhost", "root", "", "Orthopedic_surgeon");

if($conn->connect_error){
    echo $conn->error;
}