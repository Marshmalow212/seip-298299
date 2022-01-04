

<?php
//session_start();
//if(session_status() == PHP_SESSION_NONE){
//    session_start();
//}

$webRoot = 'http://localhost:8080/uploads/';

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/';

$appRoot = $_SERVER['DOCUMENT_ROOT']."/Project/CRUD/";

include_once ($appRoot."vendor/autoload.php");

//database connection to ecommerce
function databaseConnection(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    return $conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
}

function uploadDirectory(){
    return $_SERVER['DOCUMENT_ROOT'].'/uploads/';
}