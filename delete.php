<?php

$con = mysqli_connect('localhost', 'root','','catlog');
 
 if(!$con){

    echo "connection failed".mysqli_connect_error();

}

$id = $_GET['deleteid'];

function delete($table,$where){
    $wherecon = [];
    
    foreach($where as $_fields=>$_values){

        $wherecon[] = "$_fields ="."$_values";

    }
    $wherecon = implode("AND",$wherecon);
     return "DELETE FROM $table WHERE $wherecon;";

}

$sql= delete('product',["product_id" =>$id]);

$result = $con -> query($sql);
if($result){
    echo "Data deleted";
    echo "<br>";
}   



?>