

<?php
$webRoot = 'http://localhost:8080/uploads/';

$uploadDirectory = $_SERVER['DOCUMENT_ROOT'].'/uploads/';

//database connection to ecommerce
function databaseConnection(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    return $conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
}
