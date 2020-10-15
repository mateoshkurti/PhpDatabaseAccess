<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Product - Database Connectivity Example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
             body
            {
                background-color: lightblue;
            }
            #header
            {
                background-color: lightgrey;
                display: flex;
                justify-content: space-between;
                justify-content: space-around;
            }
            #wrapper
            {
                width:50%;
                margin:auto;
            }

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:50%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
               <h1>Assignment_4 Mateo Shkurti</h1>
               <div id="header">
            <a href="index.php">LogOut</a> |  
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>
               </div>
            <hr>

            

            <h2>Add Product</h2>

            <form action="add-product1.php" method="post">
                <table>
                    <tr>
                        <td>Product Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                        <td>Product Price:</td>
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                if(isset($_REQUEST['result']))
                {
                    if($_REQUEST['result']=="success")
                    {
                        echo "New record created successfully";
                    }
                    if($_REQUEST['result']=="fail")
                    {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    }
                }
            ?>
        </div>
    </body>
</html>
