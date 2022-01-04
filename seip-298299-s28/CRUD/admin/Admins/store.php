<?php

include_once ("./../../config.php");

use Crud\AdminController;

$_admins = new AdminController();

$_admins->store();


header("Location: index.php");
