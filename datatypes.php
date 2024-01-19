<?php

//Integers

//An integer can be either positive or negative 
//It can be positive or negative

$a = 1234; // decimal number
$b = 0123; // octal number starts with 0(equivalent to 83 decimal)
$c = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$d = 0b11111111; // binary number (equivalent to 255 decimal)
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump(PHP_INT_MAX);// int(max positive value 32 or 64 bit)
var_dump(PHP_INT_MIN);// int(min negative value)

//Float
// A number with a decimal point or a number in exponential form

$x = 10.364;
$b = 1.2e3; 
var_dump($x);
var_dump($b);

// String
//It is a sequence of characters.
$str1 = 'i\'ll be back'; //In single quote string to specify singlequote add \ before and to specify \ add \\ before it.
var_dump($str1);

$strng = 'You deleted C:\\*.*?';
var_dump($strng);

$str2 = "hello world";
var_dump($str2);

//Heredoc example
//<<< operator is used and after this operator identifier is provided  and same identifier is used to close the quotation

echo <<<END
a
b
c
\n
END;

//Boolean

var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
//empty string and "0" are  false
//int 0 is false

//Arrays
//Ordered map that associates values to keys.
//key can be int or string.

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

var_dump($array1);

$array2 = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array2);
//output : array(1) {
 // [1]=>
 // string(1) "d" }
//all key values results in 1 so values are overwritten till last value assigned.

$array3 = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array3);


$array4 = array("foo", "bar", "hello", "world");
var_dump($array4);
//output : index will be assigned as keys to each element

$array5 = array(
    "a",
    "b",
6 => "c",
    "d",
);
var_dump($array5);//only values.
//output : array(4){[0]=>string(1)"a",[1]..} will be applied to each element without a key.

//NULL 

$var = NULL; 
var_dump($var);

var_dump (null == 0 )// returns true
//var_dump (null === 0)// returns false


?>