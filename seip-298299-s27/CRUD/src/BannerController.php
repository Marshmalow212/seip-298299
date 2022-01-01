<?php




namespace Crud;
include_once ($_SERVER['DOCUMENT_ROOT'].'/DatabaseConnection.php');

use PDO;

class BannerController
{
    public function index($tableName){


        session_start();
        echo "<pre>";

//database connection to ecommerce

        $conn = databaseConnection();
//PDO error exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($tableName == 'admins')$selectQuery = "select * from ".$tableName.";";
        else $selectQuery = "select * from ".$tableName." where soft_delete=0";

        $queryStatement = $conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }

}