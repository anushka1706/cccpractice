<?php

$quote = "In three words I can sum up everything I've learned about life: it goes on.";

echo "Total words in the sentence are : ". str_word_count($quote);

echo "</br>";
echo "Lowercase of the sentence is : ". strtolower($quote);
echo "</br>";
echo "Capitalizing first letter of each word : ". ucwords($quote);

?>