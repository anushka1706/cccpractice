<?php

//1. if Statement: The `if` statement is used to execute a block of code if a specified condition is true.

$x = -12; 
  
if ($x > 0) { 
    echo "The number is positive"; 
}

// if-else : The `if-else` statement allows you to execute one block of code if a condition is true and another block if the condition is false

$x = -12; 
  
if ($x > 0) { 
    echo "The number is positive"; 
} 
  
else{ 
    echo "The number is negative"; 
}

//f-Elseif-Else Statement: The `if-elseif-else` statement allows you to check multiple conditions in sequence

$x = "August"; 
  
if ($x == "January") { 
    echo "Happy Republic Day"; 
} 
  
elseif ($x == "August") { 
    echo "Happy Independence Day!!!"; 
} 
  
else{ 
    echo "Nothing to show"; 
} 

//Nested If Statements:You can also nest `if` statements inside each other to create more complex conditional logic.

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}




?>