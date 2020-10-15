<?php

ob_start();
require_once './config.php';

$username = $_REQUEST['username'];
$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

$query = "SELECT username FROM Users WHERE username='$username'";
if (mysqli_num_rows(mysqli_query($conn, $query)) == 1) {
    header("location:./register.php?result=exists");
    echo 'true';
}

else{
    $query="INSERT INTO Users (username, password) VALUES ('$username', '$hashed_password');";
    $result= mysqli_query($conn, $query);
    if(result)
    {
     header("location:./view-products.php");   
    } 
    else
    {
        header("location:./register.php?result=fail");
    }
       
}
?>
