<?php

// 1. count($array,mode):  Counts the number of elements in an array.
//mode : COUNT_NORMAL and COUNT_RECURSIVE or 1
//to be used we need to count size of array for each loop
//ex1
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b)); 
//output : int(3) int(3)

//ex2

$x[0]  = 7;
$y[5]  = 9;
$z[10] = 11;
var_dump(count($y));

var_dump(count(null)); // int(0)

var_dump(count(false)); // int(1)


// 2. sizeof($array,mode): Alias of count()

//diffence of execution time between sizeof and count function
//sizeof takes more time than count
//used for multi-dimensional array

$cars=array
    (
    "Volvo"=>array
    (
    "XC60",
    "XC90"
    ),
    "BMW"=>array
    (
    "X3",
    "X5"
    ),
    "Toyota"=>array
    (
    "Highlander"
    )
    );

echo "Normal count: " . sizeof($cars)."<br>"; //3
echo "Recursive count: " . sizeof($cars,1); //8


// 3. array_key_exists($key, $array):  Checks if the given key or index exists in the array and returns true.
//search for the keys in the first dimension only. Nested keys in multidimensional arrays will not be found.

//ex1
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

//ex2
$a=array("Volvo","BMW");
if (array_key_exists(0,$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }

// 4. array_keys($array): Returns all the keys or a subset of the keys of an array.
//array_keys(array $array, mixed $filter_value, bool $strict = false): array

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));//0,color

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue")); //3 blue's

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array)); // color and size


//  5. array_values($array): Returns all the values of an array.

//ex1

$array2 = array("size" => "XL", "color" => "gold");
print_r(array_values($array2));

//ex2

$a2 = array(
    3 => 11,
    1 => 22,
    2 => 33,
   );
   $a2[0] = 44;
   
   print_r( array_values( $a2 ));



?>