<?php

//1.sort(array &$array, int $flags = SORT_REGULAR): Sorts an array.
//uses implementation of quick sort

//ex1

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
// fruits[0] = apple fruits[1] = banana fruits[2] = lemon fruits[3] = orange

//ex2 : case insensitve ordering

$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

// fruits[0] = Orange1 fruits[1] = orange2 fruits[2] = Orange3 fruits[3] = orange20


// 2. rsort($array,int $flags = SORT_REGULAR)): Sorts an array in reverse order.

$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


// 3. asort($array,int $flags = SORT_REGULAR): Sorts an associative array by values.
//used when elements order is significant

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


// 4. ksort($array): Sorts an associative array by keys.

//ex1

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
} // orange,banana,apple,lemon

//ex2

$a = [0 => 'First', 2 => 'Last', 1 => 'Middle'];
var_dump($a);
ksort($a);
var_dump($a);
// 5. arsort($array): Sorts an associative array in reverse order by values.

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

// a = orange d = lemon b = banana c = apple


// 6. krsort($array): Sorts an associative array in reverse order by keys.

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

// d = lemon c = apple b = banana a = orange

?>