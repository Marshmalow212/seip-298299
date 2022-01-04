

<?php
//database connection to ecommerce
$webRoot = 'http://localhost:8080/';

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/';

function databaseConnection(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    return $conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
}
