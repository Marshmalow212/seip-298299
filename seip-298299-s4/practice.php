<?php
echo 'PHP Operators<br><br>';

//variables
$x = 10;
$y = 5;
$z = 4;
$p ='10';
echo 'value of x = '.$x.'<br>value of y = '.$y.'<br>value of z = '.$z.'<br><br>';
//mathematical operators
echo 'Mathematical Operators<br>';

echo ($x+$y).'<br>';
echo ($x-$y).'<br>';
echo ($x/$z).'<br>';
echo ($x*$y).'<br>';
echo ($x%$z).'<br>';
echo ($x**$y).'<br>';
//echo pow($x,$y).'<br>';

//assignment operator
echo '<br>Assignment Operators<br>';
$z += 1;
echo $z.'<br>';
$z -= 1;
echo $z.'<br>';
$z *= 2;
echo $z.'<br>';
$z /= 2;
echo $z.'<br>';
$z %= 3;
echo $z.'<br>';

//comparison operator
echo '<br>Comparison Operators<br>';
echo var_dump($x==$p).'<br>';
echo var_dump($x===$p).'<br>';
echo var_dump($x!==$p).'<br>';
echo var_dump($x!=$p).'<br>';
echo var_dump($x>=$y).'<br>';
echo var_dump($x<=$y).'<br>';
echo var_dump($x>$y).'<br>';
echo var_dump($x<$y).'<br>';

//conditionals
if($x == $z){
    echo '$x == $p <br>';
}else{
    echo '$x not equals $p <br>';
}
if($x > $z){
    echo '$x > $z <br>';
}else{
    echo '$x not greater than $p <br>';
}
if($x < $z){
    echo '$x < $z <br>';
}else{
    echo '$x not less than $z <br>';
}

//increment decrement operators
echo '<br>Increment and Decrement Operators<br>';
echo ($x++).'<br>';
echo (++$x).'<br>';
echo var_dump($x).'<br>';
echo ($y--).'<br>';
echo (--$y).'<br>';
echo var_dump($y).'<br>';


//increment decrement operators
echo '<br>Conditional Operators<br>';
$a = 42;
$b = 0;
echo 'value of a = '.$a.'<br>value of b = '.$b.'<br><br>';

if($a && $b){
    echo 'a and b are true<br>';
}else{
    echo 'a and b are not true<br>';
}
if($a and $b){
    echo 'a and b are true<br>';
}else{
    echo 'a and b are not true<br>';
}
if($a || $b){
    echo 'a or b is true<br>';
}else{
    echo 'a or b is not true<br>';
}
if($a or $b){
    echo 'a or b are true<br>';
}else{
    echo 'a or b are not true<br>';
}

if(!$a){
    echo 'a is false<br>';
}else{
    echo 'a is true<br>';
}
if(!$b){
    echo 'b is false<br>';
}else{
    echo 'b is true<br>';
}
if($a xor $b){
    echo 'anyone is true<br>';
}else{
    echo 'anyone is false<br>';
}

if(1)echo 'binary AND '.(1&0).'<br>';
if(1)echo 'binary OR '.(1|0).'<br>';
if(1)echo 'binary XOR '.(1^1).'<br>';

//String operators
echo 'String Operators<br>';
$a = 'Hello';
echo $a.'<br>';
$b = 'World';
echo $b.'<br>';
$a .=' '.$b;
echo $a.'<br>';
$a .=' '. 123;
echo var_dump($a).'<br>';

//String operators
echo 'Array Operators<br>';
$m = array("a"=>"red","b"=>"blue","c"=>"green");
$o = array("a"=>"red","b"=>"blue","c"=>"grean");
$n = array ("x"=>"one","y"=>"zero","z"=>"nulll");
var_dump($m);
echo '<br>';
var_dump($n);
echo '<br>';
var_dump($m+$n);
$z = $m + $n;
echo '<br>';
var_dump($m==$o);
var_dump($m===$o);
var_dump($m!==$n);
var_dump($m!=$n);
var_dump($m<>$n);
//var_dump($m<=$n);
echo '<br>';

var_dump($m==$o);
var_dump($m===$o);
var_dump($m!==$n);
var_dump($m!=$n);
var_dump($m<>$n);
echo '<br>';
//echo $m["a"];
$n1 = 5;
$n2 = 5;
//var_dump($n1<>$n2);
$country = "bd";
//echo $country = $country ?? "india";
//echo (5+5/7-2);
//print 5<<6;
//var_dump(3/4);
echo 456 !== 0456;


?>



