<?php

// 1. To String : we can use (string) 

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//strval() function:

$value = 20.5;
$stringValue = strval($value);
var_dump($stringValue);

//settype() function:

$value = 15;
settype($value, "string");
var_dump($value);

// 2. To Integer : (int) ccast is used.

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d); // string starting with an int takes the value of the int.
var_dump($e);
var_dump($f);
var_dump($g);

//intval(val) : Takes value as a parameter and returns the integer representation of that value
$value = "20"; //string
$intValue = intval($value);
var_dump ($intValue); // int(20)

//settype() allows to change data type of a variable 
$value = "15";
settype($value, "integer");
var_dump($value);



// 3. To float : (float) used

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

var_dump($a);
var_dump($b);
var_dump($c); //string starting with int is used by float
var_dump($d);// string not starting with an int is converted to zero
var_dump($e);
var_dump($f);
var_dump($g);

//floatval() function

$value = "20.75";
$floatValue = floatval($value);
var_dump($floatValue);

//settype() function:

$value = "15.25";
settype($value, "float");
var_dump($value);

// 4. To boolean : (bool) is used
//If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.
//-1 is true.

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);

// 5.To Arrays: (array) is used

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

var_dump($a);
var_dump($b);
var_dump($c); // string is converted to int(0)
var_dump($d);
var_dump($e);

//array constructor :

$value = 123;
$arrayValue = array($value);
var_dump($arrayValue);

// 6. To cast to NULL use (unset)

a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
// every o/p will be null.

?>