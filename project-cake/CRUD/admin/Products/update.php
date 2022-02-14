<?php
include_once ('../../config.php');

use Crud\ProductController;

$Product = new ProductController();
$_id = $_GET['id'];
$Product->update($_id);

header("Location: ./index.php");