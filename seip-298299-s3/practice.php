<?php
//echo nl2br("Test");
$num = 2342;
$str1 = <<<H_D
hello 
there 
is 
something<br>
$num
H_D;

echo $str1;

echo <<<'HD'
$str1
HD;


?>