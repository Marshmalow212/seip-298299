<?php
include_once ("./../../config.php");

use Crud\AdminController;

$_admins = new AdminController();

$_admins->delete();
header("Location: ./index.php");
