<?php
include_once ('../../config.php');

use Crud\ProductController;

$Product = new ProductController();


$Product->store();

header("Location: index.php");