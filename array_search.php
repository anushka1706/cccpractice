<?php

//1. in_array($needle,$haystack,bool $strict = false) : Checks if a value exists in an array.
// If needle is a string, the comparison is done in a case-sensitive manner.
// strict is set to true then the in_array() function will also check the types of the needle in the haystack.

//ex1

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}

//ex2 :  in_array() with strict example

$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
    echo "'12.4' found with strict check\n"; //not found
}

if (in_array(1.13, $a, true)) {
    echo "1.13 found with strict check\n"; //found 

}

//ex3 : in_array() with an array as needle

$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' was found\n";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found\n";
}

if (in_array('o', $a)) {
    echo "'o' was found\n";
}

//ex3 :  in_array() with an array as needle

$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' was found\n";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found\n";
}

if (in_array('o', $a)) {
    echo "'o' was found\n";
}

//2. array_search($needle,$haystack,bool $strict = false) : Searches an array for a given value and returns the corresponding key

//ex1

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;

//ex2

$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true); // b


//3. array_reverse($array): Returns a new array with elements in reverse order.

$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);

print_r($input);
print_r($reversed); 


?>
