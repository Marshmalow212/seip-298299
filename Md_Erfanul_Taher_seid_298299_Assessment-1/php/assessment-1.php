<?php

//Question 1

//empty()

$varempty = '';
$varnotempty = '123';

if(empty($varempty)){
    echo 'variable is empty<br>';
}
else{
    echo 'variable is not empty<br>';
}
if(empty($varnotempty)){
    echo 'variable is empty<br>';
}
else{
    echo 'variable is not empty<br>';
}

//print_r()

$array = ['jaguar','mazda','honda'];
print_r($array);
echo '<br>';


//var_dump()
$var = 'hello';
var_dump($var);
echo '<br>';
var_dump($array);
echo '<br>';

//array_key_exists()

$indexarray = ['trek'=>'marline','giant'=>'talon','cube'=>'aim'];
if(array_key_exists('trek',$indexarray)){
    echo 'key trek exist in $indexarray<br>';
}

//explode() and implode()
$varstr = 'cube aim';
$strexplode = explode(' ',$varstr);
print_r($strexplode);
echo '<br>';
$strimplode = implode($strexplode);
echo $strimplode;
echo '<br>';

//substr()
$varstr = 'cube aim';
$varsub = substr($varstr,4);
echo $varsub. '<br>';



//Question 2

//$a === $b
//explanation: '===' operator checks for both type and value in short identical
$a = 1;
$b = 1;
if($a === $b){
    echo '$a and $b equal<br>';
}
else echo '$a and $b not equal<br>';
$a = '1';
$b = 1;
if($a === $b){
    echo '$a and $b equal<br>';
}
else echo '$a and $b not equal<br>';



//$a++
//explanation: increments the variable value by one
$a = 1;
$a++;
echo $a .'<br>';

//$a--
//explanation: decrements the variable value by one
$a = 4;
$a--;
echo $a .'<br>';


//$x || $y
//explanation: checks $x or $y is true
$x = 1;
$y = 0;
if($x || $y ){
    echo 'anyone is true<br>';
}
else echo 'none is true<br>';
$x = 0;
$y = 0;
if($x || $y ){
    echo 'anyone is true<br>';
}
else echo 'none is true<br>';

//!$x
//explanation: '!' operator toggles the value,if true then false, if false then true
$x = 1;
if(!$x){
    echo '$x is false<br>';
}
else echo '$x is true<br>';
$x = 0;
if(!$x){
    echo '$x is false<br>';
}
else echo '$x is true<br>';

//======================end===============
