<?php


//Array modification

//array_push($array, $element) or $array[] = $element: Adds one or more elements to the end of an array.
//ex1

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//ex2

$arr5 = array();
for ($x = 1; $x <= 10; $x++)
{
    array_push($arr5, $x);
}
// array_pop($array): Removes the last element from an array.

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);

//array_unshift($array, $element): Adds one or more elements to the beginning of an array.

//ex1
$queue = [
    "orange",
    "banana"
];

array_unshift($queue, "apple", "raspberry");
var_dump($queue);

//ex2

$foods = [
    'apples' => [
        'McIntosh' => 'red',
        'Granny Smith' => 'green',
    ],
    'oranges' => [
        'Navel' => 'orange',
        'Valencia' => 'orange',
    ],
];
$vegetables = [
    'lettuce' => [
        'Iceberg' => 'green',
        'Butterhead' => 'green',
    ],
    'carrots' => [
        'Deep Purple Hybrid' => 'purple',
        'Imperator' => 'orange',
    ],
    'cucumber' => [
        'Kirby' => 'green',
        'Gherkin' => 'green',
    ],
];

array_unshift($foods, $vegetables);
var_dump($foods);




//array_shift($array): Removes the first element from an array.

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack); //orange is removed




// array_splice($array, $offset, $length, $replacement): Removes a portion of the array and replaces it with something else.

$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_dump($input);


?>
