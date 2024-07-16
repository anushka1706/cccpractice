<?php

$text =  'Hello, World! How are you doing?';

echo "Length of the string is : ". strlen($text);
echo "</br>";
echo "Lowercase string : " . strtolower($text);
echo "</br>";
echo "Uppercase string : " . strtoupper($text);
echo "</br>";
echo "Replacing the How are you doing with Fine, thank you : " . str_replace("How are you doing","Fine, thank you!",$text);
echo "</br>";
echo "First 10 characters are :" . substr($text,0,11);
echo "</br>";
echo "Substring from 8th to end is : ". substr($text,8);

?>