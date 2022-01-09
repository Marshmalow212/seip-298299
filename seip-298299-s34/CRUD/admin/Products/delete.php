<?php
include_once ('../../config.php');

use Crud\ProductController;

$Product = new ProductController();
$show_id = $_GET['id'];
$Product->delete($show_id);
header("Location: index.php");
