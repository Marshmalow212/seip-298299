<?php
include_once('../../config.php');

use Crud\BannerController;

$_banner = new BannerController();


$_banner->store();

header("Location: ./index.php");