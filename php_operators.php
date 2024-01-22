<?php

//1. Arithmetic operators

//addition : 

$x = 10;  
$y = 6;

var_dump( $x + $y);

//subtraction //positive and negative both are returned

$x = 4;  
$y = 6;

var_dump($x - $y);

//multiply: 

$x = 10.66;  
$y = 6;

var_dump($x - $y); //returns float value

//divide

$x = 10;  
$y = 6;

var_dump($x / $y);

//modulus : 

$x = 10;  
$y = 6;

var_dump($x % $y);

$x = 1;  
$y = 6;

var_dump($x % $y); // output is 1

$x = 0;  
$y = 6;

var_dump($x % $y); // 0 is output

//2. Assignment operators

//Assignment : $x = $y : any datatype can be assigned

$x = 10;  
var_dump($x);

//addition : $x += $y

$x = 20;  
$x += 100;

var_dump($x);

// substraction : $x-=$y

$x = 50;
$x -= 30;

var_dump($x);

//multiplication : $x *= $y

$x = 5;
$x *= 6;

var_dump( $x);

//division : $x /= $y

$x = 10;
$x /= 5;

var_dump($x);

// modulus : $x %= $y

$x = 15;
$x %= 4;

var_dump($x);

//3. Comparision operators

//Equal : $x == $y	Returns true if $x is equal to $y

$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

$x = 100;  
$y = "100 hello";
var_dump($x == $y); //true

$x = 100;  
$y = 100.77;
var_dump($x == $y); //false

// Identical ===: $x === $y	Returns true if $x is equal to $y, and they are of the same type

$x = 100;  
$y = "100";

var_dump($x === $y); // false

$x = 0;  
$y = null;

var_dump($x === $y); // returns false

$x = 0;  
$y = false;

var_dump($x === $y); // returns falsebecause types are not equal

$x = 1;  
$y = true;

var_dump($x === $y); // returns falsebecause types are not equal

//Not equal ! =	$x != $y	Returns true if $x is not equal to $y

<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal

$x = 100;  
$y = 1;

var_dump($x != $y); // returns true because values are equal

$x = 1;  
$y = true;

var_dump($x != $y); // returns false because values are not equal

$x = 0;  
$y = null;

var_dump($x != $y); // returns false because values are not equal

//Greater than > $x > $y	Returns true if $x is greater than $y

$x = "100";
$y = "50";

var_dump($x > $y); // returns true because $x is greater than $y

$x = "100";
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y

//Less than	< $x < $y	Returns true if $x is less than $y

$x = "10";
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y

$x = true;
$y = 0;

var_dump($x < $y); // returns false because $x is greater than $y

//Greater than or equal to >=	$x >= $y	Returns true if $x is greater than or equal to $y

$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y

$x = true;
$y = 0;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y

//Less than or equal to	<= $x <= $y	Returns true if $x is less than or equal to $y

$x = true;
$y = 0;

var_dump($x <= $y); // false

//4. Logical operators

//LOgical AND $x && $y : True if both $x and $y are true

$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

//OR : $x ||, or $y	True if either $x or $y is true

$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";

}

// Not !$x	True if $x is not true

$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}

//5. Increment and Decrement

// ++$a : Increments $x by one, then returns $x 
$x = 10;  
echo ++$x; //11
// $a++ : Returns $x, then increments $x by one
$x = 10;  
echo $x++; //10

//--$x : Decrements $x by one, then returns $x
$x = 10;  
echo --$x;//9

//$x-- : Returns $x, then decrements $x by one
$x = 10;  
echo $x--;//10

//6. String Operators:

// Concatenation: `$a . $b
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

$txt1 = "Hello";
$txt2 = 10;
echo $txt1 . $txt2;// hello10

// Concatenation Assignment : $a .= $b
//Appends $txt2 to $txt1

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;

// Conditional (Ternary) Operator:

// Ternary: $a ? $b : $c
//(Condition) ? (Statement1) : (Statement2);

$age = 20;
  echo($age >= 18) ? "Adult" : "Not Adult";

$a = 10;
$b = $a > 15 ? 20 : 5;
echo("Value of b is " . $b);







?>