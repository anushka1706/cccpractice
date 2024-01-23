<?php

//bubblesort

/* we use flag to check if j loop was 
executed or not if not then  swapping is not  done and array is already sorted  */
 function bubblesort(array $arr,$size){

    for($i=$size-1;$i>=0;$i--){

        $flag = false;
        
          for($j = 0;$j<=$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
    
                $temp = $arr[$j + 1];
                $arr[$j+1] = $arr[$j];
                $arr[$j]=$temp;
                
            }
        }
        if(!$flag){
            break;
        }
    }
    return $arr;
 }


//drivers code

$arr = array(64, 34, 25, 12, 22, 11, 90);
$size = count($arr);
echo "Before bubble sort ". implode(" ",$arr);
echo "<br>";
$arr2 = bubblesort($arr,$size);

echo "After bubblesort ".implode(" ",$arr2);


?>
