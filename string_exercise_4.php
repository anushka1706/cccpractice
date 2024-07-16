<?php

$name = 'John';

$padleft = str_pad($name,10,"_",STR_PAD_LEFT);
$padright = str_pad($name,8,"*",STR_PAD_RIGHT);
echo "Padding '_' in left side of name with total length of 10: ". $padleft;
echo "</br>";
echo "Padding '*' on right side of the name with total length of 8 : ". $padright;


?>