

<?php
$webRoot = 'http://localhost:8080/uploads/';

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/';

$appRoot = $_SERVER['DOCUMENT_ROOT']."/seip-298299-s28/CRUD/";

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