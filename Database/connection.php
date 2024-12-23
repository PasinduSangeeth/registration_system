<?php
$severName = "localhost";
$userName = "root";
$password = "";
$dbName = "register_db";
$connection = new mysqli($severName,$userName,$password,$dbName);

if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}