<?php

//Fibonacci
//By using recursion 
function fibonacci($num){

    if($num<=1){
        return $num;
    }
    else
    {
        $first = fibonacci($num-1);
        $second_last = fibonacci($num-2);

        return $first+$second_last;
    }
}
//driver code

$num = 10;

//to print in series
for($i=0;$i<=$num;$i++){
    echo fibonacci($i)." ";
}

//By iteration

echo "By iteration";
echo "<br>";
function fibonacciLoop($nthNumber) {
    //use loop
    $previouspreviousNumber;
     $previousNumber = 0;
     $currentNumber = 1;

    for ($i = 1; $i < $nthNumber ; $i++) {

        $previouspreviousNumber = $previousNumber;

        $previousNumber = $currentNumber;

        $currentNumber = $previouspreviousNumber + $previousNumber;

    }
    return $currentNumber;
}

$n= 10;
for ($i=0;$i<=$n;$i++){
    if($i==0){
        echo "0"." ";
    }
    echo fibonacciLoop($i)." ";
}

?>