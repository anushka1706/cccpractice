<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: x-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <h1>
        Category Form
    </h1>
<form method="POST">
    <table>
        <tr>

        Name
        <input type="text" name="c_data[name]" placeholder="Enter name">
</tr>
</table>


    <input type="submit" name="insert" value="Insert">

</form>
</body>
</html>

<?php

$c_data = $_POST['c_data'];

$con = mysqli_connect('localhost', 'root','','catlog');
 
 if(!$con){

    echo "connection failed".mysqli_connect_error();

}

function insert($table,$data){
    $columns = $values =  [];
    foreach($data as $_field=>$_value){
        $columns[] = $_field;
        $values[] = "'".($_value)."'";
    }
    $columns = implode(",",$columns);
    $values = implode(",",$values);
    return "INSERT INTO $table ($columns) VALUES ($values);";
}




if(isset($_POST['insert'])){

    $sql_insert = insert('ccc_category',$c_data);
    echo $sql_insert;
    
$rs = mysqli_query($con,$sql_insert);
if($rs){
    echo "insert";
}
else{
    "not inserted";
}
}

?>