<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$con = mysqli_connect('localhost', 'root','','catlog');

if(!$con){

    echo "connection failed".mysqli_connect_error();

}

$sql = "SELECT `cat_id`,`name` FROM `ccc_category` ORDER BY cat_id DESC";

$result = $con -> query($sql);
if($result){
    echo "Data fetched";
    echo "<br>";
}   

echo "<h1> Records List </h1>";

$row = $result->fetch_all(MYSQLI_ASSOC);


foreach($row as $col=>$val){
   echo "<li>";
   echo implode(",",$val)." ";
   
}
?>
</body>
</html>