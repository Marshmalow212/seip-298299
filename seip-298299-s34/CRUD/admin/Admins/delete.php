<?php
include_once ("./../../config.php");

use Crud\AdminController;
$show_id = $_GET['id'];
$_admins = new AdminController();

$_admins->delete($show_id);
header("Location: index.php");
