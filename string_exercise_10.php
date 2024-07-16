<?php

//Factorial
function fact($num){
    if($num==1 || $num==0 ){
        return $num;
    }

    return $num*fact($num-1);
}

//driver code

$num = 5;
 $ans = fact($num);
 echo "Factorial of $num is : $ans";

?>