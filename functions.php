<?php

//1. String length strlen($string)

echo strlen("Hello");

//2. str_replace($search, $replace, $subject) to replace all occurence of substring with another substring(case sensitive)

echo str_replace("world","Anushka","Hello World");

//3. strpos($haystack, $needle) return FIRST occurece of a substr in a str

echo strpos("I love php, I love php too!","php");

//4. substr($string, $start, $length) return part of str from start pos to end pos

echo substr("Hello world",1,4);

//5. strtolower($string) converts a string to lowercase.

echo strtolower("Hello WORLD.");

//6. strtoupper($string) converts a string to uppercase

echo strtoupper("Hello world!");

//7. trim($string) removes whitespaces or other characters from start to end of str like \n,\t,\0
$str = "Hello World!";
echo trim($str,"Hed!");

//8. implode($glue, $pieces) joins array elements with a string.

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
//output: Str of $arr.

//9. explode($delimiter, $string) splits a string into an array by a specified delimiter.

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
//output: str to arr.we use print_r to display readable array Echo will give type as an output.

//10. htmlspecialchars($string) converts special characters like <,> etc to HTML entities.

$str = "Jane & 'Tarzan'";
echo htmlspecialchars($str, ENT_COMPAT); // Will only convert double quotes
//in place of double quote &quot is used inside of html body in html output.

//11. htmlentities($string) converts all applicable characters to HTML entities.

$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
//html o/p: &lt;a href=&quot;https://www.w3schools.com&quot;&gt;Go to w3schools.com&lt;/a&gt;
//browser o/p will be same

//12. str_repeat($string, $multiplier) repeats a string a specified number of times.

echo str_repeat("Wow",13);

//13. strrev($string) reverses a string

echo strrev("Hello World!");

//14. str_shuffle($string) randomly shuffles all characters in a string

echo str_shuffle("Hello World");

//15. str_split($string, $length) converts a string to an array, breaking it into smaller chunks
//output Array ([0]->H...)

print_r(str_split("Hello"));

//16. str_word_count($string) returns the number of words in a string

echo str_word_count("Hello world!");

//17. substr_replace($string, $replacement, $start, $length) replaces a portion of a string with another string.

echo substr_replace("Hello","world",0);//o/p: world

//18. str_pad($string, $length, $pad_string, $pad_type) Pads a string to a certain length with another string.

$str = "Hello World";
echo str_pad($str,20,".");//20 is total length of str with padding
//output Hello World......... 
//another parameter STR_PAD_LEFT/RIGHT/BOTH

//19. strcoll($string1, $string2) Locale based string comparison. casesensitive . Compares two str 

setlocale (LC_COLLATE, 'NL');
echo strcoll("Hello World!","Hello World!");
echo "<br>";

setlocale (LC_COLLATE, 'en_US');
echo strcoll("Hell World!","Hello World!");

//20. strcspn($string, $mask, $start, $length) Finds the length of the initial segment not matching a mask
//The strcspn() function returns the number of characters (including whitespaces) found in a string before any part of the specified characters are found.

echo strcspn("Hello world!","w");

//21. stristr($haystack, $needle, $before_needle) case-insensitive search for the first occurrence of a string. case insensitive

echo stristr("Hello world!","WORLD");
echo stristr("Hello world!","WORLD",true);// true returns char before world.default value is false

//21. ucfirst($string) converts the first character of a string to uppercase.

echo ucfirst("hello world!");
//output Hello world

//22. ucwords($string) converts the first character of each word in a string to uppercase.

echo ucwords("hello world");
//outpur Hello World







?>