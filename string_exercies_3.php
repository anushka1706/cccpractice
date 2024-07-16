<?php

$sentence = "The quick brown fox jumps over the lazy dog";

echo "Position of Fox is :" . strpos($sentence,"fox");

echo "</br>";

$result = strpos($sentence,"cat");

if($result<1){
    echo "Word cat is not present in the sentence";

    echo "</br>";
}

echo "First 20 characters of the sentence are: ". substr($sentence,0,19);

?>