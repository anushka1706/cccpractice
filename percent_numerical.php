<?php

$a = 100 + (10/100)*100;

$b = 100;

$output = (($a-$b)/$a) * 100;

$x = round($output,2);

echo " b is ". $x. "% less than a";

?>