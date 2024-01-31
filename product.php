<?php include './sql/connection.php';

include_once '../class.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
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
                Product Form
            </h1>
            <form name="product_form" method="POST">
            <table>
            <tr>
                <td>
        
            Product id 
            <input type="text" placeholder="Product id" name="p_data[product_id]" >
         
         </td>
         </tr>
            <tr>
                <td>
        
            Product Name 
            <input type="text" placeholder="Product name" name="p_data[product_name]" >
         
         </td>
         </tr>
         <tr>
            <td>
            SKU
            <textarea  id="desc" cols="30" rows="4" placeholder="Describe your product" name="p_data[sku]"></textarea> 

        </td>
         <tr>
            <td>
                <label>
                    Product Type :
                    <input type="radio" name="p_data[product_type]" value="s">Simple
                    <input type="radio" name="p_data[product_type]" value="b">Bundle
                 
            </td>
         </tr>
         <tr>
            <td>
                Category
                <select name="p_data[category]">
                    <option value="Bar">Bar & Game Room</option> 
                    <option value=" Bedroom" > Bedroom</option>  
                    <option value="Decor">Decor</option>
                    <option value="Dining and kitchen">Dining & Kitchen</option>
                    <option value="Light">Lightning</option>
                    <option value="Living">Living Room</option>
                    <option value="Mattress">Mattresses</option>
                    <option value="Office">Office</option>
                    <option value="Outdoor">Outdoor</option>    
                
                </select>
                
            </td>
         </tr>
         <tr>
            <td>
                Manufacturer Cost 
                <input type="text" name="p_data[manufacturing_cost]">
            </td>
            
         </tr>
         <tr>
            <td>
                Shipping Cost
                <input type="text" name="p_data[shipping_cost]">
            </td>
         </tr>
         <tr>
            <td>
                Total Cost
                <input name="p_data[total_cost]">
            </td>
         </tr>
         <tr>
            <td>
                Price 
                <input type="text" name="p_data[price]">
            </td>
         </tr>
         <tr>
            <td>
                 
                Status
                <select name="p_data[status]">
                    <option value="Enable">Enabled</option>
                    <option value="Disable">Disabled</option>
                </select>

            </td>
         </tr>
         <tr>
            <td>
                Created At 
                <input type="date" name="p_data[created_at]" >
                        </td>
         </tr>
         <tr>
            <td>
                updated At
                <input type="date" name="p_data[updated_at]">
            </td>
         </tr>
</table>
        
        
    <input type="submit" name=insert value="Insert">

    <input type="submit" name="update" value="Update">


    </form>


</body>
</html>

<?php

$p_data = $_POST['p_data'];

$obj1 = new queryBuilder();
$obj2 = new queryExecution();

if(isset($_POST['insert'])){
    $insert = $obj1->insert('product',$p_data);

    $obj2->execute($insert);

}

if(isset($_POST['update'])){

    $id= $_GET['updateid'];

    $update = $obj1->update('product',$p_data,['product_id'=>$id]);

    $obj2->execute($update);
}

if(isset($_POST['submit'])){

    $insert = $obj1->insert('product',$p_data);

    $obj2->execute($insert);

}





?>