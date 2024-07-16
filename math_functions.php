<?php

// 1. Basic arithmatic

//abs($number): returns absolute positive number

echo(abs(6.7) . "<br>");
echo(abs(-6.7) . "<br>");
echo(abs(-3) . "<br>");
echo(abs(3));

// ceil($number) : rounds UP to nearest neighbour number

echo(ceil(0.60) . "<br>");
echo(ceil(0.40) . "<br>");
echo(ceil(5) . "<br>");
echo(ceil(5.1) . "<br>");
echo(ceil(-5.1) . "<br>");
echo(ceil(-5.9));

// floor($number) : rounds DOWN to nearest neighbour

echo(floor(0.60) . "<br>");
echo(floor(0.40) . "<br>");
echo(floor(5) . "<br>");
echo(floor(5.1) . "<br>");
echo(floor(-5.1) . "<br>");
echo(floor(-5.9));

// round($number,$pecision,mode) : rounds a floating point number

var_dump(round(3.4));
var_dump(round(3.5));
var_dump(round(3.6));
var_dump(round(3.6, 0));
var_dump(round(5.045, 2));
var_dump(round(5.055, 2));
var_dump(round(345, -2));
var_dump(round(345, -3));
var_dump(round(678, -2));
var_dump(round(678, -3));

var_dump(round($number, 3));
var_dump(round($number, 2));
var_dump(round($number, 1));
var_dump(round($number, 0));
var_dump(round($number, -1));
var_dump(round($number, -2));
var_dump(round($number, -3));

var_dump(round(9.5, 0, PHP_ROUND_HALF_UP));
var_dump(round(9.5, 0, PHP_ROUND_HALF_DOWN));
var_dump(round(9.5, 0, PHP_ROUND_HALF_EVEN));
var_dump(round(9.5, 0, PHP_ROUND_HALF_ODD));

// 2. Power functions

//pow($base,$expo):  returns x raised to the power of y

var_dump(pow(2,4) . "<br>");
var_dump(pow(-2,4) . "<br>");
var_dump(pow(-2,-4) . "<br>");
var_dump(pow(-2,-3.2));

// sqrt($min,$max) : Return the square root of different numbers:

var_dump(sqrt(0) . "<br>");
var_dump(sqrt(1) . "<br>");
var_dump(sqrt(9) . "<br>");
var_dump(sqrt(0.64) . "<br>");
var_dump(sqrt(-9));

//Random number generation

//rand($min,$max) : f you want a random integer between 10 and 100 (inclusive), use rand (10,100)
//min : default is 0
//max : deafult getrandmax()

var_dump(rand() . "<br>");
var_dump(rand() . "<br>");
var_dump(rand(10,100));

//Number formatting

//number_format(number,decimals,decimalpoint,separator) : 
//number : Required. The number to be formatted. If no other parameters are set, the number will be formatted without decimals and with comma (,) as the thousands separator.
//decimals	Optional. Specifies how many decimals. If this parameter is set, the number will be formatted with a dot (.) as decimal point
//decimalpoint	Optional. Specifies what string to use for decimal point
//eparator	Optional. Specifies what string to use for thousands separator. Only the first character of separator is used. For example, "xxx" will give the same output as "x"

var_dump (number_format("1000000"))."<br>"; //1,000,000
var_dump (number_format("1000000",2,",","."));
var_dump (number_format("1000000",2))."<br>";

$num = 1999.9;
$formattedNum = number_format($num)."<br>";
echo $formattedNum;
$formattedNum = number_format($num, 2);
echo $formattedNum;


?>