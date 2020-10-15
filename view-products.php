<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - Database Connectivity Example</title>

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

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th
            {
                background-color: #4CAF50;
                color: white;
            }

            h2
            {
                text-align: center;
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

            <h2>View Products</h2>

                  <?php
            $host = 'localhost';
            $username = 'shkurtim_test';
            $passwd = 'Mateo2001!!$';
            $dbname = 'shkurtim_MyDatabase';
            $conn = mysqli_connect($host, $username, $passwd, $dbname);

            if (empty($conn)) {
                die("Connection failed" . mysqli_connect_error());
            }
            
            $query="select * from Products";
            $result=mysqli_query($conn, $query);
            
           echo '<table>';
           echo '<tr>';
        echo '<td>';
        print_r("ID");
        echo '</td>';
        echo '<td>';
        print_r("Product");
        echo '</td>';
        echo '<td>';
        print_r("Price");
        echo '</td>';
    echo '</tr>';
                while($row= mysqli_fetch_row($result))
                {
    
    echo '<tr>';
        echo '<td>';
        print_r($row[0]);
        echo '</td>';
        echo '<td>';
        print_r($row[1]);
        echo '</td>';
        echo '<td>';
        print_r($row[2]);
        echo '</td>';
    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </body>
</html>
