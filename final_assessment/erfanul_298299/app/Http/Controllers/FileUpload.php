<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FileUpload extends Controller{
    public function fileUpload($file,$title){
        $prefix=$title.'_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name='img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/uploads',$picture);
            // echo $picture.'<br>';
            // echo $path.'<br>';
        }
        return $picture;
    }

}