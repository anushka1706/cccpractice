<?php

// 1. array_filter($array, $callback,int mode): Filters elements of an array using a callback function.
//Iterates over each value in the array passing them to the callback function. If the callback function returns true, the current value from array is returned into the result array.
// modes : ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
// ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value

function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd")); // 1,3,5
echo "Even:\n";
print_r(array_filter($array2, "even")); // 6,8,10,12

//without callback 

$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];

print_r(array_filter($entry));
//output : [0] => foo [2] => -1

//with modes

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

//output : array(1) { ["b"]=> int(2) }

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));

// 2. array_map($callback, $array): Applies a callback function to each element of an array.

function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
 // [0] => 1,[1] => 8..


// 3. array_reduce($array, $callback, $initial): Iteratively reduces the array to a single value using a callback function.

//ex1

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"

//ex2

function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));
//dog-cat-horse

?>
