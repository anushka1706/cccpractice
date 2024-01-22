<?php

//1. Array creation and initialization

// array() or []: Creates a new array. It takes any number of comma-separated key => value pairs as arguments.
//The key can either be an int or a string. The value can be of any type.

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
//Type Casting and Overwriting example
$array3 = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array3); // array(1) { [1]=>string(1) "d"}

//Mixed int and string keys

$array4 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array4);

// Indexed arrays without key

$array5 = array("foo", "bar", "hello", "world");
var_dump($array5);

//Keys not on all elements

$array6 = array(
    "a",
    "b",
6 => "c",
    "d",
);
var_dump($array6);




//array_merge($array1, $array2):Merges two or more arrays.

//the values of one are appended to the end of the previous one. It returns the resulting array.
//ex1
$arr1 = array();
$arr2 = array(1 => "data");
$result = array_merge($arr1, $arr2);

//ex2
$arr3 = array("color" => "red", 2, 4);
$arr4 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($arr3, $arr4);
print_r($result); // color=>green

//array_merge() with non-array types

$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$beginning, (array)$end);
print_r($result); //[0] => foo [1] => bar

//array_combine($keys, $values): Creates an array by using one array for keys and another for its values.
//Illegal values for key will be converted to string.

//ex1
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

//ex2
print_r(array_combine(Array('a','a','b'), Array(1,2,3)));

//range($start, $end, $step): Creates an array containing a range of elements

//step may be negative for decreasing sequences.

//If step is a float without a fractional part, it is interpreted as int.

$evenNumbers = range(2, 10, 2);
foreach ($evenNumbers as $num) {
    echo $num . ' ';
}
//2,4,6,8,10

echo implode(', ', range(0, 12));
//0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12


?>