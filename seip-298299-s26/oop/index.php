<?php

include_once('vendor/autoload.php');

use App\Pen\Pen;

$pen = new Pen();
$pen->setBrand("Matador");

echo $pen->getBrand();