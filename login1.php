<?php
    ob_start();
    session_start();
    require_once './config.php';
    
    $username = $_REQUEST['username'];
    $password=$_REQUEST['password'];

$query = "SELECT * FROM Users WHERE username='$username'";


$result=mysqli_query($conn, $query);
            
           

                
                
if (mysqli_num_rows(mysqli_query($conn, $query)) == 1) {
    
   
    
    $row= mysqli_fetch_assoc($result);
    $hashed_password=$row['password'];
    
    if(password_verify($password, $hashed_password))
    {
        $_SESSION['username']=$username;
        header("location:./view-products.php");
    }
    else{
        
        header("location:./login.php?result=fail");
    }
}
else{
    header("location:./login.php?result=exit");
}
?>
