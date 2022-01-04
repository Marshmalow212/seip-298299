<?php
echo '<h1>PHP Files</h1><br><br>';

//file_get_contents()

$fileContents = file_get_contents('test_file.txt');

echo $fileContents.'<br>';


//file_put_contents()
$docs = 'Writing from php';
$fileWrite = file_put_contents('write.txt',$docs);
if($fileWrite){
    echo $fileWrite.'<br>';
}

//filesize()
$filesizeof_test_file = filesize('test_file.txt');
$filesizeof_write = filesize('write.txt');
echo $filesizeof_test_file.'<br>'.$filesizeof_write.'<br>';

//file_exists()

if(file_exists('test4.txt')){
    echo file_get_contents('test4.txt');
}
else echo 'file not exist';

echo '<br>';

//unlink() to delete a file

echo $fileContents.'<br>';
unlink('test_file.txt');
if(!file_exists('test_file.txt')){
    $fileContents = file_put_contents('test_file.txt','unlinked file created!');
    echo file_get_contents('test_file.txt').'<br>';
}





echo '<br>';
echo "</pre>";





