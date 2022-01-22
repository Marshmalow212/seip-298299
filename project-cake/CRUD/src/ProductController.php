<?php




namespace Crud;
include_once ("./../../config.php");
use PDO;

class ProductController
{
    public $conn = null;
    public function __construct()
    {

        //database connection to ecommerce

        $this->conn = databaseConnection();
//PDO error exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->uploadDir = uploadDirectory();

    }
//index function
    public function index(){

        echo "<pre>";


        $selectQuery = "select * from products where is_draft=0;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }
    //activeproducts function
    public function activeProducts(){

        echo "<pre>";


        $selectQuery = "select * from products where is_active=1 limit 0,4;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }
//allDraft function
    public function allDraft(){

        echo "<pre>";


        $selectQuery = "select * from products where is_draft=1;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute();

        $resultSet = $queryStatement->fetchAll();

//print_r($resultSet);

        echo "</pre>";
        return $resultSet;
    }
//toDraft function
    public function toDraft($_id){

        echo "<pre>";


        $selectQuery = "update products set is_draft=1 where id =?;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute([$_id]);

    }

//toIndex function
    public function toIndex($_id){

        echo "<pre>";


        $selectQuery = "update products set is_draft=0 where id =?;";


        $queryStatement = $this->conn->prepare($selectQuery);

        $queryResult = $queryStatement->execute([$_id]);

    }



//    store function
    public function store(){

        echo "<pre>";
        var_dump($_POST);
        var_dump($_FILES);

        $isActive = $isDraft = 0;


        if(array_key_exists('is_active',$_POST))$isActive = 1;
        if(array_key_exists('is_draft',$_POST))$isDraft = 1;

        $pictureName = $this->upload();

        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';



        $insertQuery = "INSERT INTO products (title,picture,is_active,is_draft,mrp) VALUES (?,?,?,?,?);";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);


        $queryResult = $queryStatement->execute([$_POST['title'],$pictureName,$isActive,$isDraft,$_POST['mrp']]);

        if($queryResult){
            $_SESSION['message'] = "Product Inserted!";
        }
        else{
            $_SESSION['message'] = "Product not Inserted!";
        }

        echo "</pre>";


    }


//show function
    public function show($show_id){




        $showQuery = "select * from products where id = ?";

        $queryStatement = $this->conn->prepare($showQuery);

        $resultSet = $queryStatement->execute([$show_id]);

        $result = $queryStatement->fetch();
//print_r($result);

        return $result;

    }


//    update function

    public function update($_id){


        $isActive = $isDraft = 0;


        if(array_key_exists('is_active',$_POST))$isActive = 1;
        if(array_key_exists('is_draft',$_POST))$isDraft = 1;

        $pictureName = $this->upload();

        if($this->conn){
            echo 'Database Connection Successful!<br>';
        }
        else echo 'Please Connect database first!<br>';



        $insertQuery = "update products set title=?,picture=?,is_active=?,is_draft=?,mrp=? where id=?;";

        $queryStatement = $this->conn->prepare($insertQuery);

//$queryStatement->bindParam(':title',$_POST['title']);


        $queryResult = $queryStatement->execute([$_POST['title'],$pictureName,$isActive,$isDraft,$_POST['mrp'],$_id]);

        if($queryResult){
            $_SESSION['message'] = "Product Updated!";
        }
        else{
            $_SESSION['message'] = "Product not Updated!";
        }
        echo "</pre>";


    }


//    edit function

    public function edit($show_id){



        $showQuery = "select * from products where id = ?";

        $queryStatement = $this->conn->prepare($showQuery);

        $resultSet = $queryStatement->execute([$show_id]);

        $result = $queryStatement->fetch();
//print_r($result);

        return $result;

    }

//    delete function

    public function delete($show_id){

//print_r($_GET);



        $deleteQuery = "delete from products where id = ?";

        $queryStatement = $this->conn->prepare($deleteQuery);

        $resultSet = $queryStatement->execute([$show_id]);

        $result = $queryStatement->fetch();
//print_r($result);
        echo "</pre>";

        if(($resultSet)){
            $_SESSION['message'] = "Product Deleted!";
        }
        else{
            $_SESSION['message'] = "Product not Deleted!";
        }

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