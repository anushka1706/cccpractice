
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        tr:hover {
          background-color: grey;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        td:hover {

            background-color: green;

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

<h1>Product List</h1>

<?php


$sql= "SELECT product_id,product_name,sku,category FROM product ORDER BY product_id DESC";
 

?>
<table>
    <tr>
<th> Product id</th>
<th>Product name</th>
<th>SKU</th>
<th>Category</th>
<th>Edit</th>
<th>Delete</th>
</tr>


<?php

$con = mysqli_connect('localhost','root','','catlog');
if(!$con){

    echo "connection failed".mysqli_connect_error();

}

$result = mysqli_query($con,$sql);

print_r ($result);
echo "<br>";
$row = mysqli_fetch_assoc($result);

print_r ($row);
echo "<br>";
while($rows=$result->fetch_assoc()){
    $id = $rows['product_id'];
print_r ($rows);

  ?>
    <tr>
     <td><?php echo $rows['product_id']." ";?> </td>
   <td><?php echo $rows['product_name']." ";?> </td>
   <td><?php echo $rows['sku']." ";?></td>
    <td> <?php echo $rows['category']." ";?></td>
    <td> <a href='product.php?updateid=<?php echo $id;?>'><button>Edit </button></a></td>
    <td> <a href='delete.php?deleteid=<?php echo $id;?>'><button>Delete </button></a></td>
</tr>

<?php

}

?>

</table>


    
</body>
</html>
