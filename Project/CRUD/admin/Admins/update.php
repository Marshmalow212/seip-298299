<?php
include_once ("./../../config.php");

use Crud\AdminController;
$_id = $_GET['id'];
$_admins = new AdminController();

$_admins->update($_POST,$_id);

header("Location: index.php");