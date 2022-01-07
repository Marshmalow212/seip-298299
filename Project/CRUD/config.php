

<?php

if(session_status() == PHP_SESSION_NONE){
	// echo 'session status : '.session_status();
    session_start();
}

$webRoot = 'http://localhost:8080/seip-298299/uploads/';
$projectRoot = 'http://localhost:8080/seip-298299/';

$appRoot = $_SERVER['DOCUMENT_ROOT']."/seip-298299/Project/CRUD/";

include_once ($appRoot."vendor/autoload.php");

//database connection to ecommerce
function databaseConnection(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    return $conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
}

function uploadDirectory(){
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/seip-298299/uploads/';
    return $uploadDirectory;
}