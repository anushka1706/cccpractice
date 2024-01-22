<?php

for($x=1;$x<=100;$x++){

    if(($x % 3 == 0) AND ($x % 5 == 0)){
           echo "Fizz Buzz <br>";
           }
   
       elseif($x % 3 == 0){
           echo " Fizz <br>";
           }
   
       elseif($x % 5 == 0){
           echo " Buzz <br>";
           }
   
      
   
       else{
       echo "$x <br>";
   }}



?>