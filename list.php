//Prepare separate html page list.php and list last 10 records from database using UL/LI html tags
//


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
</head>
<body>


    <?php

$con = mysqli_connect('localhost', 'root','','ccc_practice');

if(!$con){

    echo "connection failed".mysqli_connect_error();

}

$sql = "SELECT `product_name` FROM `ccc_product` ORDER BY `id` DESC LIMIT 10";

$result = $con -> query($sql);
if($result){
    echo "Data fetched";
    echo "<br>";
}   

echo "<h1> Records List </h1>";

$row = $result->fetch_all(MYSQLI_ASSOC);

foreach($row as $col=>$val){
   echo "<li>";
   echo implode(",",$val);
   
}


?>
    
</body>
</html>