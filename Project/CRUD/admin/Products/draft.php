<?php
include_once ('../../config.php');

use Crud\ProductController;

$Product = new ProductController();

$show_id = $_GET['id'];
$resultSet = $Product->toDraft($show_id);
header("Location: ./index.php");
