<?php
echo '<h1>Array Functions</h1><br><br>';


echo "<pre>";

$fruits = array('apple','banana','mango','guava');
$brands = array('mazda','mercedez','rollroyals','honda');
$cars = array("$brands[3]"=>"Accord","$brands[0]"=>"Ultra","$brands[1]"=>"Benz") ;
//sizeof()

echo '$fruits array size : '.sizeof($fruits).'<br>';

echo (is_array($fruits))?'Array':'Not Array';
echo '<br>';
//array_push() array_pop()
array_push($fruits,'orange');
print_r($fruits);

echo '<br>';

echo in_array('orange',$fruits)?'Orange is in $fruits':'Orange not found in $fruits';
echo '<br>';

echo in_array('jackfruit',$fruits)?'Jackfruit is in $fruits':'Jackfruit not found in $fruits';
echo '<br>';

//array_merge()
echo 'Merged Array <br>';
$automobiles= array_merge($cars,$fruits);
$automobiles= array_merge($fruits,$cars);

print_r($automobiles);

echo '<br>';

//array iteration , keys , values
$array1 = [];
$array2 = [];
foreach ($cars as $brand => $car){
    echo $brand.' '.$car.'<br>';
    $array1[] = $brand;
    $array2[] = $car;
}
//print_r($array1);
//print_r($array2);
$cars_keys = array_keys($cars);
$cars_values = array_values($cars);
print_r($cars_keys);
print_r($cars_values);
echo '<br>';

//array_shift()

print_r(array_shift($fruits));
echo '<br>';
print_r($fruits);
echo '<br>';

print_r(array_unshift($fruits,'apple'));
echo '<br>';
print_r($fruits);
echo '<br>';


//array-sorting
sort($fruits);
print_r($fruits);
echo '<br>';

//array flip
$cars_flip = array_flip($cars);
print_r($cars_flip);
echo '<br>';

//array reverse

$cars_reverse = array_reverse($cars);
$fruits_reverse = array_reverse($fruits);
print_r($cars_reverse);
print_r($fruits_reverse);
echo '<br>';

//foreach control structure
$cars = ["$brands[3]"=>"Accord","$brands[0]"=>"Ultra","$brands[1]"=>"Benz"] ;
echo 'foreach() loop<br>';
echo '<ol>';
//=> implies sign
foreach($cars as $car => $model){
    echo "<li> $car : $model </li>";
}
echo '</ol>';
echo '<br>';

$nested_array = ["first_tier"=>
    ["second_tier"=>
        ["3rd_tier"=>"end for now"]
    ]
];
print_r($nested_array);
echo '<br>';

//sum from array

$arr = [[10,100,101],[120,130,140],[150,90,80]];
$sum = [];
foreach ($arr as $i){
    $temp = 0;
    foreach($i as $j){
        $temp += $j;
    }
    $sum[] = $temp;
}

print_r($sum);
$total = 0;
foreach($sum as $i){
    $total += $i;
}
echo "Total : $total <br>";
echo '<br>';



echo '<br>';
echo "</pre>";





