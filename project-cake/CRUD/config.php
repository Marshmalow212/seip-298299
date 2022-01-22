

<?php

if(session_status() == PHP_SESSION_NONE){
	// echo 'session status : '.session_status();
    session_start();
}

$webRoot = 'http://localhost:8080/project-cake/uploads/';
$projectRoot = 'http://localhost:8080/project-cake/';

$appRoot = $_SERVER['DOCUMENT_ROOT']."/project-cake/CRUD/";

include_once ($appRoot."vendor/autoload.php");

//database connection to ecommerce
function databaseConnection(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    return $conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
}

function uploadDirectory(){
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/project-cake/uploads/';
    return $uploadDirectory;
}