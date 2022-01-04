<?php

namespace App\Pen;

class Pen{
    private $brand = null;

    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function getBrand(){
        return $this->brand;
    }
}