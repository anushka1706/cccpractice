<?php

//1. For loop : 

/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0; $i < count($people); ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);

}

//While Loop:

/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}

//Foreach :    The `foreach` For iterating over arrays.

//foreach (iterable_expression as $value)

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8) , &value directly modifies array elments within loop.

//statement foreach (iterable_expression as $key => $value) statement
//The second form will additionally assign the current element's key to the $key variable on each iteration


$employee = array(  
    "name" => "Robert",  
    "email" => "robert112233@mail.com",  
    "age" => 18,  
    "gender" => "male"
  
);  
  
// Loop through employee array  
foreach($employee as $key => $element) {  
    echo $key . ": " . $element . "<br>";  
}  




?>