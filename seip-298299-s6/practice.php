<?php
echo '<h1>String Functions</h1><br><br>';


echo "<pre>";

//priority 1
echo '<h1>priority 1</h1> <br>';

//explode()
$pizza = 'slice1 slice2 slice3 slice4';
$slice = explode(" ",$pizza);
echo 'Pizza 6" : ';
print_r($slice);
echo '<br>';
$email = 'johndoe@hotmail.com';
$domains = explode("@",$email);
list($name,$subdom) = explode("@",$email);
$domains[1] = explode(".",$domains[1]);
echo 'Domains: ';

print_r($domains);
echo '<br>'.$domains[0]. ' '.$domains[1][0].' '.$domains[1][1].'<br>';
echo $name.' '.$subdom.'<br>';

//implode()
$php = array('p','h','p');
$phpimplode = implode("",$php);
echo 'PHP implode : ';
echo ($phpimplode);
echo '<br>';
print_r ('strlen($name) : '.strlen($name).'<br>');

//for loop
for($i = 0;$i<strlen($subdom);$i++){
    echo $subdom[$i].'<br>';
}

//strpos()
echo 'find the string using strpos()<br>';
$reqStr = '.';
$subdompos = strpos($subdom,$reqStr);
echo 'position of \'com\' : '.$subdompos.'<br>';

//strtoupper()
echo '<h1>Case convertion</h1>'.'<br>'.$name.'<br>';
$name = strtoupper($name);
echo ' using toupper '.$name.'<br>';

//strtolower()

$name = strtolower($name);
echo ' using tolower '.$name.'<br>';

//substr()

echo substr($subdom,0,7);


//Priority 2
echo '<h1>priority 1</h1> <br>';
//md5
//echo md5($email).'<br>';
echo md5($email)==='d5217ffb5eb4e58a85404aad907d3df9'?$email.' verified!':$email.' invalid';
echo '<br>============<br>';

//str_repeat(string,multiplier);

echo str_repeat($name.' ',5);
echo '<br>==============<br>';

//str_replace()

echo str_replace('.com','',$subdom).'<br>';


//johndoe@hotmail.com
//$subdomain = str_replace('.com','',substr($email,strpos($email,'@')+1);
$searchFor = array('johndoe','@','.','com');
$replaceWith = '';
$subdomain = str_replace($searchFor,$replaceWith,$email);
echo 'subdomain of john doe email : '.$subdomain.'<br>' ;

//trim
function myTrim($str){
    $leftT = ltrim($str,'@' );
    echo $leftT.'----';
    $mainStr = rtrim($leftT,'.com');
    return $mainStr;
}
//echo trim($email,'oeh');
echo '<br>'.trim($email,'').'<br>';


echo '<br><br>Arrays<br>';
//index array
$indexArray = array(1,2,3,4,5);
echo 'Index Array<br>';
print_r($indexArray);
echo '<br>';

//associative array
$associativeArray = array('one'=>1,'two'=>2,'three'=>3,'four'=>4);
echo 'Associative Array<br>';
print_r($associativeArray);

//multidimentional array
$multidimentionalArray = array('one'=>array('one'=>'i','two'=>'ii','three'=>'iii'),'two'=>2,'three'=>3,'four'=>4);
echo 'Multidimentional Array<br>';
print_r($multidimentionalArray);

echo '<br>';
echo"</pre>";





