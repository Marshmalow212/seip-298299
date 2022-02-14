<?php




namespace Crud;
include_once ("../../config.php");

use PDO;

class CartController
{
    private $conn = null;
    public function __construct()
    {
        $this->conn = databaseConnection();

        $this->uploadDir = uploadDirectory();
    }

    public function index(){

        echo "<pre>";

//database connection to ecommerce



        $selectQuery = "select * from carts";

        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";

        return $resultSet;
    }
//    show function
 public function showMyCart($uid){

        echo "<pre>";

//database connection to ecommerce



        $selectQuery = "select * from carts where user_id=?";

        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute([$uid]);

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";

        return $resultSet;
    }

 public function myTotalAmount($uid){

        echo "<pre>";

//database connection to ecommerce



        $selectQuery = "select SUM(total_price) as totalamount from carts where user_id=?";

        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute([$uid]);

        $resultSet = $queryStatement->fetch();

//print_r($resultSet);

        echo "</pre>";

        return $resultSet['totalamount'];
    }


//    store function
    public function store(){

        echo "<pre>";
//        var_dump($_POST);
//        var_dump($_FILES);

        $pictureName = $this->upload();

        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';
        $totalPrice = $_POST['qty'] * $_POST['unit_price'];


        $insertQuery = "INSERT INTO carts (user_id,product_id,product_title,qty,unit_price,total_price,picture) VALUES (?,?,?,?,?,?,?);";

        $queryStatement = $this->conn->prepare($insertQuery);

        $userId = $_SESSION['user_id'];

//$queryStatement->bindParam(':title',$_POST['title']);
        $queryData = [$userId,$_POST['product_id'],$_POST['product_title'],$_POST['qty'],$_POST['unit_price'],$totalPrice,$pictureName];

        $queryResult = $queryStatement->execute($queryData);

//        if($queryResult){
//            $_SESSION['message'] = "Banner Inserted!";
//        }
//        else{
//            $_SESSION['message'] = "Banner not Inserted!";
//        }

        echo "</pre>";


    }

//    add to cart function
    public function addToCart(){

        echo "<pre>";
//        var_dump($_POST);
//        var_dump($_FILES);

        $pictureName = $_POST['picture'];

        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';
        $totalPrice = $_POST['qty'] * $_POST['unit_price'];


        $insertQuery = "INSERT INTO carts (user_id,product_id,product_title,qty,unit_price,total_price,picture) VALUES (?,?,?,?,?,?,?);";

        $queryStatement = $this->conn->prepare($insertQuery);

        $userId = $_SESSION['user_id'];

//$queryStatement->bindParam(':title',$_POST['title']);
        $queryData = [$userId,$_POST['product_id'],$_POST['product_title'],$_POST['qty'],$_POST['unit_price'],$totalPrice,$pictureName];

        $queryResult = $queryStatement->execute($queryData);

//        if($queryResult){
//            $_SESSION['message'] = "Banner Inserted!";
//        }
//        else{
//            $_SESSION['message'] = "Banner not Inserted!";
//        }

        echo "</pre>";


    }

//    delete function
    public function deleteFromCart($show_id){
        $deleteQuery = "delete from carts where id = ? and user_id = ?";

        $queryStatement = $this->conn->prepare($deleteQuery);
        $uid = $_SESSION['user_id'];
        $resultSet = $queryStatement->execute([$show_id,$uid]);

//        $result = $queryStatement->fetch();
    }



    private function upload(){
        $pictureName = null;
        if(!empty($_FILES['picture']['name'])){
            $pictureName ='IMG_'.time().'_'.$_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = ($this->uploadDir).$pictureName;
            $link = move_uploaded_file($target,$destination);
        }
        else{
            if(!empty($_POST['picture'])) $pictureName = $_POST['picture'];
        }

        return $pictureName;
    }




}