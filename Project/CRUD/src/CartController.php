<?php




namespace Crud;
include_once ($_SERVER['DOCUMENT_ROOT'].'/DatabaseConnection.php');

use PDO;

class CartController
{
    public function index(){

        echo "<pre>";

//database connection to ecommerce

        $conn = databaseConnection();
//PDO error exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $selectQuery = "select * from carts";

        $queryStatement = $conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";

        return $resultSet;
    }

}