<?php
 

 
function insert($table,$data){
    $columns = $values =  [];
    foreach($data as $_field=>$_value){
        $columns[] = "$_field";
        $values[] = "'".($_value)."'";
    }
    $columns = implode(",",$columns);
    $values = implode(",",$values);
    return "INSERT INTO $table ($columns) VALUES ($values);";
}


//$query = insert('ccc_product',$p_data);
//echo $query;



function update($table,$data,$where){

    $columns = $wherecondition = [];
    foreach($data as $_fields=>$_values){
        $columns[] = "$_fields = "."($_values)";
    }
$columns = implode(" , ",$columns);

foreach($where as $_fields=>$_values){
    $wherecondition[] = "$_fields ="."$_values";
}
$wherecondition = implode("AND",$wherecondition);

 return "UPDATE $table SET $columns WHERE $wherecondition;";
}



//update('ccc_product',$p_data,['product_name'=>'xyz']);


function delete($table,$where){
    $wherecon = [];
    
    foreach($where as $_fields=>$_values){

        $wherecon[] = "$_fields= "."$_values";

    }
    $wherecon = implode("AND",$wherecon);
     return "DELETE FROM $table WHERE $wherecon;";

}






function select($table,$row){
    $column = []


    foreach($row as $_field){

       
        $column[] = "$_field";
    }

    $column = implode(",",$column);
    
     return "SELECT $column FROM $table;"


}

$select_query = select('product',["product_name","category"]);
echo $select_query;

?>
