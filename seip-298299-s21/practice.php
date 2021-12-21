<?php
echo '<h1>PHP Functions</h1><br><br>';

function test_function(){
//    code
    echo 'Welcome to the function<br>';
}
//function call
test_function();
echo "<pre>";
//empty function test of variable
$var = 0; //empty for zero
$varnull = null; //empty for null
$varstr = ''; //empty for
$varnone; //empty for undefined variable
$varbool = false; //empty for boolean false
echo $var.' '.var_dump(empty($var)).' '.empty($var).'<br>';
echo $varnull.' '.var_dump(empty($varnull)).' '.empty($varnull).'<br>';
echo $varstr.' '.var_dump(empty($varstr)).' '.empty($varstr).'<br>';
echo var_dump(empty($varnone)).' '.empty($varnone).'<br>';
echo $varbool.' '.var_dump(empty($varbool)).' '.empty($varbool).'<br>';
echo var_dump(empty($varnowhere)).' '.empty($varnowhere).'<br>';

//array checking is_array()

//$list = array('A','B','C');
//$list = array(['A'=>'first','B'=>'second','C'=>'third']);
$list = array('A'=>'first','B'=>'second','C'=>'third');
//$list = 'helloo';
//echo var_dump($list).'<br>';
echo var_dump(is_array($list)).' $list<br>';
echo '<br>Ternery Operator<br>';
echo is_array($list)?'$list is array':'$list is not array';
echo '<br>';

//isset()

echo 'isset() function<br>';
$somevar = null;
echo isset($somevar)?'$somevar is set':'$somevar is not set';
echo '<br>';
echo var_dump(isset($somevar)).'<br>';
print_r($list).'<br>';
echo '<br><br>';
echo "</pre>";
echo "<pre>";
//serialized data
//used for database transaction
$serialized_data =serialize( array('math','science','physics','ict'));
print_r((var_dump($serialized_data)).'<br>');
print_r(var_dump(unserialize($serialized_data)));



//array key exist
echo '<br>';
print_r($list);
echo '<br>';
//echo 'key \'A\' exist';
//print_r(array_key_exists('A',$list));
print_r(array_key_exists('A',$list)?'key A exist ':'key A not exist ');
echo 'in $list<br>';
print_r(array_values($list));

//priority 2
//to undefine any variable without knowing where it is
//unset();

//priority 3

$data = array(1,1.2,Null, new stdClass, 'Hello');
foreach ($data as $value){
    print_r(gettype($value).' ');
}

//is_int()
echo '<br>';
if(is_int(+1256.88)){echo 'Something';}
else if(is_float(+1256.88)) echo 'Something float';
echo '<br>';
echo"</pre>";
?>




