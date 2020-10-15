<?php
    ob_start();
    require_once './connection.php';
   $query1="select * from Products";
   $result1=mysqli_query($conn, $query1);
   
   
   
   $ID= mysqli_num_rows($result1)+1;
   $productName = $_REQUEST['productName'];
   $productPrice = $_REQUEST['productPrice'];
   
 
  
   
   $query="INSERT INTO Products (ProductID, Name, Price) VALUES ($ID, '$productName', $productPrice);";
       
   if (mysqli_query($conn, $query)) {   
    header("location:add-product.php?result=success");
    ob_flush();
    ob_end_flush();
    echo '<br>';
} else {
    header("location:add-product.php?result=fail");
    ob_flush();
    ob_end_flush();
}
   
   $result = mysqli_query($conn, $query1);
   
   
?>
